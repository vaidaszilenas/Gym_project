@extends('layouts.app',[
  'class' => 'footer_normal'
])
@section('content')

  <section>
    <div class="background_container">
      <div class="row">
        <div class="col-md-12">

          <div class="col-md-12 text-center mb-4">
            <h1 class="aboutus  "> About us </h1>
          </div>

          <div class="col-md-12 col-12 col-sm-12">

            <p><em>We welcome all shapes and sizes from students, professionals, parents, families, retirees and the elderly. Whatever your reason, feel free to join us anytime. We are not part of a chain or national company.</em></p>

            <p><em>At Lyrika Gym you are more to us than just a number. We believe in quality not quantity so we have no pushy sales staff and there are no hidden costs. At Lyrika Gym your wellbeing is our number one concern, you'll be greeted with a smiley face, and you'll make friends fast. And if you want to take time to yourself and just get on with it well that's ok too!</em></p>

            <p><em>Our aim is to provide an excellent service with a personal touch to Lyrika and its surrounding areas. All our staff and instructors are fully qualified with a wealth of experience.</em></p>

            <p class="text-center"><em><strong>If you have any questions, do not hesitate to visit us and contact us !</strong></em></p>
          </div>

          <div class="col-md-12 col-12 col-sm-12 mapas text-center">
            <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyByPBmnsim6UnipRKPC7NhM9ZcvynxQ_EY'></script>
            <div style='overflow:hidden;margin: 0 auto;'>
              <div id='gmap_canvas' class="map_insert" style='height:500px;width:600px;'></div>
              <style>#gmap_canvas
              img{max-width:none!important;background:none!important}</style></div>
              <a href='https://embedmaps.org/'>google map for my website</a>
              <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=81f59e6fd30c0299daebf43fc042d79b982038ed'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(54.5432967,25.651177200000006),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(54.5432967,25.651177200000006)});infowindow = new google.maps.InfoWindow({content:'<strong></strong><br>Pranciškonų g. 10<br> <br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
              </script>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
