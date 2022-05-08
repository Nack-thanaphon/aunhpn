var html, data;

$(document).ready(function () {
    activity();
})

function activity() {

    $.ajax({
        type: "GET",
        dataType: "json",
        url: "https://www.info-aun-hpn.com/api/get_activity.php",
        data: {},
        success: function (data) {

            data = data.result;
            if (data != '') {
                for (var i = 0; i < data.length; i++) {
                    $ac = `             
                        <li class="mb-3">
                        <small class="text-primary">${data[i].end_date}</small> <br>
                        <small class="text-start m-0 p-0 text-secondary">Time : ${data[i].start_time} - ${data[i].end_time}</small>
                        
                        <a href="./single_activity.php?event=${data[i].id}" class="row m-0 p-0">
                            <p class="p-0 m-0 col-12 text-start"><span class="text-dark">Topic:</span> ${data[i].title}</p>
                        </a>
                        <small>Address: <span>${data[i].address}</span></small>
                    </li>
                    
           `
                    $('#activity').append($ac);
                };
            } else {
                $('#activity').html('ไม่มีข้อมูล');
            }

        },
        error: function (err) {

            console.log("bad", err)
        }
    })

}

$(document).ready(() => {

    $('#activities').slick({
        autoplay: true,
        autoplaySpeed: 2500,
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev"></button>',
        nextArrow: '<button type="button" class="slick-next"></button>',
        centerMode: true,
        slidesToShow: 1,

    });
    $('#activities').slick('slickRemove');
});