@extends('layout.master2')

@section('content')
@include('layout.navBar')
<div id="home" class="header-img">
  <div class="container">
    <div class="row">
      <div class="self-head">
        <h3>
          Nuestras recomendaciones
        </h3>
        <p>
          De acuerdo a tus gustos y preferencias.
        </p>
      </div>

      <div class="col-12">
        <div class="col-md-2 col-sm-2 col-xs-12 card-data">
          <div class="about-details">
            <div class="single-about">
              <div style='margin-bottom:20px;'>
                <img class="" src="{{asset("assets/images/t11.png")}}" alt="70%" style="border-radius: 10%;">
              </div>
              <h5 class="text-center" style="color:black">Actividad</h5>
            </div>
          </div>
          <!-- end about-details -->
        </div>

        <div class="col-md-2 col-sm-2 col-xs-12 card-data">
          <div class="about-details">
            <div class="single-about">
              <div style='margin-bottom:20px;'>
                <img src="{{asset("assets/images/t3.png")}}" style="border-radius: 10%;" alt="Cultura">
              </div>
              <h5 class="text-center" style="color:black">Cultura</h5>

            </div>
          </div>
          <!-- end about-details -->
        </div>

        <div class="col-md-2 col-sm-2 col-xs-12 card-data">
          <div class="about-details">
            <div class="single-about">
              <div style='margin-bottom:20px; ' >
                <img src="{{asset("assets/images/t4.png")}}" alt="Restaurantes" style="border-radius: 10%;">
              </div>
              <h5 class="text-center" style="color:black">Restaurantes</h5>

            </div>
          </div>
          <!-- end about-details -->
        </div>

        <div class="col-md-2 col-sm-2 col-xs-12 card-data">
          <div class="about-details">
            <div class="single-about">
              <div style='margin-bottom:20px;' >
                <img src="{{asset("assets/images/t2.png")}}" style="border-radius: 10%;" alt="Restaurantes">
              </div>
              <h5 class="text-center" style="color:black">Cultivos</h5>

            </div>
          </div>
          <!-- end about-details -->
        </div>

        <div class="col-md-2 col-sm-2 col-xs-12 card-data">
          <div class="about-details">
            <div class="single-about">
              <div style='margin-bottom:20px;'>
                <img src="{{asset("assets/images/t5.jpg")}}" style="border-radius: 10%;" alt="Aves">
              </div>
              <h5 class="text-center" style="color:black">Aves</h5>
            </div>
          </div>
          <!-- end about-details -->
        </div>

        <br>
        <br>
        <br>
        <div class="col-md-2 col-sm-2 col-xs-12" style="">
          <a class="add-btn left-btn mt-auto mb-auto" style="color:black;" href="/tourDetail">Explorar</a>
        </div>
      </div>
      <br>
      <hr>
      
    </div>


  </div>

</div>
</header>


@endsection