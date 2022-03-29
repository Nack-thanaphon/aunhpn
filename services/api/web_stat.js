$(document).ready(function() {
    let ip = $('#web_static').val();

    $.ajax({
        type: "POST",
        dataType: "JSON",
        url: "https://www.info-aun-hpn.com/api/get_ip.php",
        data: {
            ip: ip,
        },
    }).done(function(data) {
        console.log(ip)
    })
})