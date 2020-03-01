@extends('layout.master2')

@section('content')
@include('layout.navBar')
</header>
<div id="about" class="about-area page-scroll area-padding">
  <div class="container">
    <div class="row fix">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <br>
        
      </div>
    </div>
    <div class="row fix">
      <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="self-img">
          <a href="#" class="profile-card">
            <img class="rounded-circle" data-holder-rendered="true" src="{{asset("assets/img/about/1.jpg")}}" alt="">
          </a>
        </div>
      </div>
      <div class="col-md-7 col-sm-8 col-xs-12">
        <!-- about-self -->
        <div class="about-self">
          <div class="self-head">
            <h3>
              Finca Don Alcides
            </h3>
            <p>
              <strong>Descripción:</strong><br>En nuestra finca podrás encontrar distintas actividades de aventura
              extrema. Creamos experiencias únicas
              para cada uno de nuestros visitantes. <br> <strong>Contacto: </strong> <br> 2520 5050.
            </p>
          </div>
        </div>
        <!-- end about-self -->
      </div>
    </div>
    <br>
    <div class="col-md-7 col-sm-8 col-xs-12">
      <!-- about-self -->
      <div class="about-self">
        <div class="self-head">
          <h3>
            Mis actividades
          </h3>
          <p>
            Da a conocer las actividades de tu negocio.
          </p>
        </div>
      </div>
      <!-- end about-self -->
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="row fix autoplay">

        <div class="col-md-2 col-sm-2 col-xs-12 card-data">
          <div class="about-details">
            <div class="single-about">
              <div style='width:70%' onclick="selectTour(this)">
                <img class="img-card-sm" src="{{asset("assets/images/t11.png")}}" alt="Aventura"
                  style="border-radius: 10%;">
              </div>
            </div>
          </div>
          <!-- end about-details -->
        </div>

        <div class="col-md-2 col-sm-2 col-xs-12 card-data">
          <div class="about-details">
            <div class="single-about">
              <div style='width:70%' onclick="selectTour(this)">
                <img class="img-card-sm" src="{{asset("assets/images/t3.png")}}" style="border-radius: 10%;"
                  alt="Cultura">
              </div>
            </div>
          </div>
          <!-- end about-details -->
        </div>

        <div class="col-md-2 col-sm-2 col-xs-12 card-data">
          <div class="about-details">
            <div class="single-about">
              <div style='width:70%' onclick="selectTour(this)">
                <img class="img-card-sm" src="{{asset("assets/images/t4.png")}}" alt="Restaurantes"
                  style="border-radius: 10%;">
              </div>
            </div>
          </div>
          <!-- end about-details -->
        </div>

        <div class="col-md-2 col-sm-2 col-xs-12 card-data">
          <div class="about-details">
            <div class="single-about">
              <div style='width:70%' onclick="selectTour(this)">
                <img class="img-card-sm" src="{{asset("assets/images/t2.png")}}" style="border-radius: 10%;"
                  alt="Restaurantes">

              </div>
            </div>
          </div>
          <!-- end about-details -->
        </div>

        <div class="col-md-2 col-sm-2 col-xs-12 card-data">
          <div class="about-details">
            <div class="single-about">
              <div style='width:70%' onclick="selectTour(this)">
                <img class="img-card-sm" src="{{asset("assets/images/t5.jpg")}}" style="border-radius: 10%;" alt="Aves">

              </div>
            </div>
          </div>
          <!-- end about-details -->
        </div>

      </div>
    </div>

    <br>
    <div class="col-md-7 col-sm-8 col-xs-12">
      <!-- about-self -->
      <div class="about-self">
        <div class="self-head">
          <h3>
            Comercios cercanos
          </h3>
          <p>
            Contacta y conecta con empresarios cercanos para generar una experiencia completa a los visitantes de Sarapiquí.
          </p>
        </div>
      </div>
      <!-- end about-self -->
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="row fix autoplay">

        <div class="col-md-2 col-sm-2 col-xs-12 card-data">
          <div class="about-details">
            <div class="single-about">
              <div style='width:70%' onclick="selectTour(this)">
                <img class="img-card-sm" src="{{asset("assets/images/t11.png")}}" alt="Aventura"
                  style="border-radius: 10%;">
              </div>
            </div>
          </div>
          <!-- end about-details -->
        </div>

        <div class="col-md-2 col-sm-2 col-xs-12 card-data">
          <div class="about-details">
            <div class="single-about">
              <div style='width:70%' onclick="selectTour(this)">
                <img class="img-card-sm" src="{{asset("assets/images/t3.png")}}" style="border-radius: 10%;"
                  alt="Cultura">
              </div>
            </div>
          </div>
          <!-- end about-details -->
        </div>

        <div class="col-md-2 col-sm-2 col-xs-12 card-data">
          <div class="about-details">
            <div class="single-about">
              <div style='width:70%' onclick="selectTour(this)">
                <img class="img-card-sm" src="{{asset("assets/images/t4.png")}}" alt="Restaurantes"
                  style="border-radius: 10%;">
              </div>
            </div>
          </div>
          <!-- end about-details -->
        </div>

        <div class="col-md-2 col-sm-2 col-xs-12 card-data">
          <div class="about-details">
            <div class="single-about">
              <div style='width:70%' onclick="selectTour(this)">
                <img class="img-card-sm" src="{{asset("assets/images/t2.png")}}" style="border-radius: 10%;"
                  alt="Restaurantes">

              </div>
            </div>
          </div>
          <!-- end about-details -->
        </div>

        <div class="col-md-2 col-sm-2 col-xs-12 card-data">
          <div class="about-details">
            <div class="single-about">
              <div style='width:70%' onclick="selectTour(this)">
                <img class="img-card-sm" src="{{asset("assets/images/t5.jpg")}}" style="border-radius: 10%;" alt="Aves">

              </div>
            </div>
          </div>
          <!-- end about-details -->
        </div>
        <div>
        </div>
      </div>
    </div>
  </div>

  @endsection
  @section('script')
  <script>
    $(document).ready(function(){
      $('.autoplay').slick({
        infinite: false,
  slidesToShow: 4,
  slidesToScroll: 3
});
});
  </script>
  @endsection