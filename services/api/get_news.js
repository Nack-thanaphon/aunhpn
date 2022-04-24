var html, data;
$(document).ready(function () {
    newsrender();
})

function newsrender() {
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "https://www.info-aun-hpn.com/api/get_news_limit3.php",
        data: {},
        success: function (data) {
            data = data.result;
            if (data != '') {
                for (var i = 0; i < data.length; i++) {
                    $news = `
                <div class=" col-12 col-md-4 p-3 m-0 my-1 shadow-md border news-card">
                    <a href="./single_news.php?id=${data[i].id}" data-id="${data[i].id}" id="singlenews"
                    class="btn col-12 p-0 m-0 ">                  
                             <img class="card-img-top" src="https://info-aun-hpn.com/bos/${data[i].image}"alt="${data[i].name}">                 
                    </a>
                    <strong class="py-3 name">${data[i].name}</strong>
    
                    <p class="badge badge-pill badge-primary m-0 news-date ">${data[i].date}</p>
                </div> 
           `
                    $('#news').append($news);
                };
            } else {
                $('#news').html('ไม่มีข้อมูล')
            }
        },
        error: function (err) {
            consolelog(err)
        }
    })

}