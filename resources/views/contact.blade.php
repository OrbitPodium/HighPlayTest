@extends('layout.master')

@section('title', 'Contactos')

@section('content')

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <p class="mb-5">
              <small>
                <em>Ligue-nos</em>
              </small>
              <br>
              {{setting('contactos.telefone')}}
            </p>
            <p class="mb-5">
              <small>
                <em>Mande-nos um email</em>
              </small>
              <br>
              {{setting('contactos.email')}}
            </p>
            <p class="address mb-0">
              <small>
                <em>Onde estamos</em>
              </small>
            </p>
            {!!setting('contactos.morada')!!}
            <div id="map"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

@section('css')
<style>
  #map {
    width: 100%;
    min-height: 500px;
  }

  #iw-container {
  	margin-bottom: 10px;
  }
  #iw-container .iw-title {
    font-family: 'Open Sans Condensed', sans-serif;
    font-size: 22px;
    font-weight: 400;
    padding: 10px;
    color: black;
    margin: 0;
    border-radius: 2px 2px 0 0;
  }
  #iw-container .iw-content {
  	font-size: 13px;
    line-height: 18px;
    font-weight: 400;
  }
  .iw-content p {
    text-align: left;
  }
  .iw-subTitle {
  	font-size: 16px;
  	font-weight: 700;
  	padding: 5px 0;
  }
  .iw-bottom-gradient {
  	position: absolute;
  	width: 326px;
  	height: 25px;
  	bottom: 10px;
  	right: 18px;
  	background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
  	background: -webkit-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
  	background: -moz-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
  	background: -ms-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
  }
</style>
@endsection

@section('js')
  <script>

    function initMap() {
      @php
        $position=explode(',',setting('contactos.mapa'));
      @endphp

      var highplay = {lat: {{$position[0]}}, lng: {{$position[1]}}};
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 18,
        center: highplay,
        mapTypeId: 'satellite'
      });

      var contentString =
          '<div id="iw-container">' +
          '<div class="iw-title">High Play Institute</div>' +
          '<div class="iw-content">' +
          '{!!setting('contactos.morada')!!}'+
          '<br>Phone. {{setting('contactos.telefone')}}<br>e-mail: {{setting('contactos.email')}}</p>'+
          '</div>' +
          '<div class="iw-bottom-gradient"></div>' +
          '</div>';

      var infowindow = new google.maps.InfoWindow({
        content: contentString,
        width: '200px'
      });

      var marker = new google.maps.Marker({
        position: highplay,
        map: map,
        title: 'High Play Institute'
      });
      marker.addListener('click', function() {
        infowindow.open(map, marker);
      });
    }
  </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiDzdkDb_MgfQ0pD0jCD2EEWNFFBvqF1E&callback=initMap"></script>
@endsection
