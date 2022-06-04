// map marker
var zoom2 = 3;

$("#tabs-2").change(function () {
    zoom2 = 8;
});

function initMap() {
    var options = {
        zoom: zoom2,
        center: {
            lat: 13.7911,
            lng: 100.325692
        }
    }


    var map = new
        google.maps.Map(document.getElementById('map'), options);

    addMarker({
        coords: { lat: 4.972665, lng: 114.8917813 },
        content: '<h6 class="py-2 text-uppercase">Universiti Brunei Darussalam</h6>' +
            '<p> Contact : <a href = "+673 246 3062" target = "_blank">+673 246 3062</a></p>' +
            '<p> Email : <a href = "office.corpcomms@ubd.edu.bn" target = "_blank">office.corpcomms@ubd.edu.bn</a></p>'
    });

    addMarker({
        coords: { lat: 11.5683494, lng: 104.8886388 },
        content: '<h6 class="py-2 text-uppercase">Royal University of Phnom Penh</h6>' +
            '<p> Contact : <a href = "023 216 348" target = "_blank">023 216 348</a></p>' +
            '<p> Email : <a href = "rector@rule.edu.kh" target = "_blank">rector@rule.edu.kh</a></p>'
    });
    addMarker({
        coords: { lat: 11.5355859, lng: 104.922504 },
        content: '<h6 class="py-2 text-uppercase">Royal University of Law and Economics</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });
    addMarker({
        coords: { lat: -7.7449103, lng: 112.4204961 },
        content: '<h6 class="py-2 text-uppercase">Universitas Airlangga</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });
    addMarker({
        coords: { lat: -7.7713794, lng: 110.3753111 },
        content: '<h6 class="py-2 text-uppercase">Universitas Gadjah Mada</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });

    addMarker({
        coords: { lat: -7.7715373, lng: 110.3758072 },
        content: '<h6 class="py-2 text-uppercase">Universitas Indonesia</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });

    addMarker({
        coords: { lat: 18.0370553, lng: 102.6330451 },
        content: '<h6 class="py-2 text-uppercase">National University of Laos</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });

    addMarker({
        coords: { lat: 2.929003, lng: 101.7778332 },
        content: '<h6 class="py-2 text-uppercase">Universiti Kebangsaan Malaysia</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });

    addMarker({
        coords: { lat: 3.12091, lng: 101.6516527 },
        content: '<h6 class="py-2 text-uppercase">Universiti Malaya</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });

    addMarker({
        coords: { lat: 2.9912214, lng: 101.705169 },
        content: '<h6 class="py-2 text-uppercase">Universiti Putra Malaysia</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });

    addMarker({
        coords: { lat: 5.3557718, lng: 100.2958219 },
        content: '<h6 class="py-2 text-uppercase">Universiti Sains Malaysia</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });

    addMarker({
        coords: { lat: 6.4484229, lng: 100.5074924 },
        content: '<h6 class="py-2 text-uppercase">Universiti Utara Malaysia</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });

    addMarker({
        coords: { lat: 16.8338747, lng: 96.1323961 },
        content: '<h6 class="py-2 text-uppercase">Yangon University of Economics</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });

    addMarker({
        coords: { lat: 21.9522643, lng: 96.058822 },
        content: '<h6 class="py-2 text-uppercase">University of Mandalay</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });

    addMarker({
        coords: { lat: 16.8331301, lng: 96.1339319 },
        content: '<h6 class="py-2 text-uppercase">University of Yangon</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });
    addMarker({
        coords: { lat: 14.6398666, lng: 121.0763052 },
        content: '<h6 class="py-2 text-uppercase">Ateneo de Manila University</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });
    addMarker({
        coords: { lat: 14.6232471, lng: 120.9521176 },
        content: '<h6 class="py-2 text-uppercase">De La Salle University</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });
    addMarker({
        coords: { lat: 14.6235584, lng: 120.9521174 },
        content: '<h6 class="py-2 text-uppercase">University of the Philippines</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });
    addMarker({
        coords: { lat: 1.3478053, lng: 103.6797466 },
        content: '<h6 class="py-2 text-uppercase">Nanyang Technological University</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });
    addMarker({
        coords: { lat: 1.3208919, lng: 103.677902 },
        content: '<h6 class="py-2 text-uppercase">National University of Singapore</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });
    addMarker({
        coords: { lat: 1.2962781, lng: 103.8479691 },
        content: '<h6 class="py-2 text-uppercase">Singapore Management University</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });
    addMarker({
        coords: { lat: 18.8046735, lng: 98.9528446 },
        content: '<h6 class="py-2 text-uppercase">Chiang Mai University</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });
    addMarker({
        coords: { lat: 13.7404303, lng: 100.528069 },
        content: '<h6 class="py-2 text-uppercase">Chulalongkorn University</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });
    addMarker({
        coords: { lat: 13.79339, lng: 100.3131635 },
        content: '<h6 class="py-2 text-uppercase">Mahidol University</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });
    addMarker({
        coords: { lat: 7.0091836, lng: 100.4951276 },
        content: '<h6 class="py-2 text-uppercase">Prince of Songkla University</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });
    addMarker({
        coords: { lat: 13.2815101, lng: 100.9200303 },
        content: '<h6 class="py-2 text-uppercase">Burapha University</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });
    addMarker({
        coords: { lat: 10.0210503, lng: 105.7291407 },
        content: '<h6 class="py-2 text-uppercase">Can Tho University</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });
    addMarker({
        coords: { lat: 20.9760874, lng: 105.5752808 },
        content: '<h6 class="py-2 text-uppercase">Vietnam National University, Hanoi</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });
    addMarker({
        coords: { lat: 10.8272668, lng: 106.7145173 },
        content: '<h6 class="py-2 text-uppercase">Vietnam National University, Ho Chi Minh City</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });
    addMarker({
        coords: { lat: 34.8146176, lng: 135.4542933 },
        content: '<h6 class="py-2 text-uppercase">Osaka University</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });
    addMarker({
        coords: { lat: 13.9155203, lng: 100.4131262 },
        content: '<h6 class="py-2 text-uppercase">Thammasat University</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });

    addMarker({
        coords: { lat: 15.1172402, lng: 104.9006625 },
        content: '<h6 class="py-2 text-uppercase">Ubon Ratchathani University</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });
    addMarker({
        coords: { lat: 8.6415683, lng: 91.4598624 },
        content: '<h6 class="py-2 text-uppercase">Walailak University</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });
    addMarker({
        coords: { lat: 13.8191422, lng: 100.5120991 },
        content: '<h6 class="py-2 text-uppercase">King Mongkut’s University of Technology North Bangkok</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });
    addMarker({
        coords: { lat: 16.7471232, lng: 100.1867468 },
        content: '<h6 class="py-2 text-uppercase">Naresuan University</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });
    addMarker({
        coords: { lat: 16.2448701, lng: 103.2478401 },
        content: '<h6 class="py-2 text-uppercase">Mahasarakham University</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });
    addMarker({
        coords: { lat: 14.2041447, lng: 120.9645443 },
        content: '<h6 class="py-2 text-uppercase">Adventist International Institute of Advanced Studies</h6>' +
            '<p> Contact : <a href = "-" target = "_blank">-</a></p>' +
            '<p> Email : <a href = "-" target = "_blank">-</a></p>'
    });












    //Addmarker function
    function addMarker(props) {
        var marker = new google.maps.Marker({
            position: props.coords,
            map: map
        });



        if (props.content) {
            var infoWindow = new google.maps.InfoWindow({
                content: props.content

            });

            marker.addListener('click', function () {
                infoWindow.open(map, marker);
            });
        }

    }
}