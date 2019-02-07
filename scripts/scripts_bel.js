 $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
    $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
            scrollTop: $(hash).offset().top
            }, 900, function(){
            window.location.hash = hash;
            });
        } 
    });
  })

function myMap() {
    var mapProp= {
        center:new google.maps.LatLng(5.8724646,86.5398726),
        zoom:5,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}

$("#header").load("header.php");
$("#myCarousel").load("carousel.php");
$("#footer").load("footer.php");
