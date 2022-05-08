var html, data;

$(document).ready(function () {
    download();
})

function download() {

    $.ajax({
        type: "GET",
        dataType: "json",
        url: "https://www.info-aun-hpn.com/api/get_download_limit3.php",
        data: {},
        success: function (data) {
            data = data.result;
            if (data != '') {
                for (var i = 0; i < data.length; i++) {
                    $fd = `
         
            <li class="mb-3">
            <small class="text-start m-0 badge badge-pill badge-primary">${data[i].date}</small>
            <span>${data[i].group}</span>
            <a href="https://info-aun-hpn.com/bos/uploads/docs/${data[i].file}" class="row m-0 p-0">
                <p class="p-0 m-0 col-12 text-start">${data[i].name}</p>
            </a>
        </li>
           `
                    $('#download').append($fd);
                };
            } else {
                $('#download').html('ไม่มีข้อมูล');
            }

        },
        error: function (err) {
            console.log(err)
        }
    })

}