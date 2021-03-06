<?php include './include/header.php'; ?>
<?php include './include/navbar.php'; ?>

<div class="row m-0 p-0">
    <div class="col-12 bg-primary py-5 text-center text-white">
        <div class="py-2">
            <h1 class=" font-weight-bold">Document</h1>
            <small class="">Document : Asean University Health Promotion Network</small>
        </div>
        <!-- <small>Lorem, ipsum dolor./Lorem, ipsum dolor./Lorem, ipsum dolor./Lorem, ipsum dolor./</small> -->
    </div>
    <div class="col-12 col-md-12 col-sm-12 card p-3 p-sm-5 text-sm-center">

        <div class="row my-4 m-0 p-0">
            <div class="col-12 m-0 p-0">
                <table id="g_table" class="p-0 m-0 table table-hover w-100" width="100%">
                </table>
            </div>
        </div>
    </div>
</div>


</div>

<script>
    $(document).ready(function() {
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "https://www.info-aun-hpn.com/api/get_download.php",
            data: {},
        }).done(function(data) {
            let tableData = []
            console.log(data)
            data = data.result;
            for (var i = 0; i < data.length; i++) {
                tableData.push([
                    `${data[i].id}`,
                    `${data[i].name}`,
                    `${data[i].group}`,
                    `<a href="https://info-aun-hpn.com/bos/uploads/docs/${data[i].file}" target="blank" class=" btn btn-success "><small class="m-0 p-0 font-weight-bold ">
                <i class="fas fa-arrow-circle-down"></i> ดาวน์โหลด (${data[i].type})</small></a>
              `,

                ]);
            };

            initDataTables(tableData);
        }).fail(function() {

        })

        function initDataTables(tableData) { // สร้าง datatable
            $('#g_table').DataTable({
                data: tableData,
                columns: [{
                        title: "ลำดับที่",
                        className: "align-middle",
                        width: "10%",
                    },
                    {
                        title: "ชื่อเอกสาร",
                        className: "align-middle",
                        width: "60%",


                    },

                    {
                        title: "ชนิดเอกสาร",
                        className: "align-middle",

                    },
                    {
                        title: "เรียกดู",
                        className: "align-middle",

                    },
                ],


                initComplete: function() {},
                fnDrawCallback: function() {
                    $('.toggle-event').bootstrapToggle();
                },
                responsive: {
                    details: {

                        renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                            tableClass: 'table'
                        })
                    }
                },
                language: {
                    "lengthMenu": "แสดงข้อมูล _MENU_ แถว",
                    "zeroRecords": "ไม่พบข้อมูลที่ต้องการ",
                    "info": "แสดงหน้า _PAGE_ จาก _PAGES_",
                    "infoEmpty": "ไม่พบข้อมูลที่ต้องการ",
                    "infoFiltered": "(filtered from _MAX_ total records)",
                    "search": 'ค้นหา',
                    "paginate": {
                        "previous": "ก่อนหน้านี้",
                        "next": "หน้าต่อไป"
                    }
                }
            })
        }
    })
</script>

<div class="d-none d-sm-block">
    <?php include './include/footer.php'; ?>
</div>
<?php include 'include/script.php'; ?>


</body>