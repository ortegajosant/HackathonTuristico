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
        <p>
          <h4>Opción 1</h4>
        </p>
        <br>

        <a class="col-md-2 col-sm-2 col-xs-12 card-data" href="/tour">
          <div class="about-details">
            <div class="single-about">
              <div style='margin-bottom:20px;'>
                <img src="{{asset("assets/images/t3.png")}}" style="border-radius: 10%;" alt="Cultura">
              </div>
              <div>
                <h5 class="text-center" style="color:black">Culturales</h5>
                <p class="text-center"><span>Parque </span> <br> 08:00 - 09:30 </p>
              </div>
            </div>
          </div>
          <!-- end about-details -->
        </a>

        <a class="col-md-2 col-sm-2 col-xs-12 card-data" href="/tour">
          <div class="about-details">
            <div class="single-about">
              <div style='margin-bottom:20px;'>
                <img class="" src="{{asset("assets/images/t11.png")}}" alt="70%" style="border-radius: 10%;">
              </div>
              <div>
                <h5 class="text-center" style="color:black">Rafting</h5>
                <p class="text-center"><span>Río Sarapiquí </span> <br> 10:30 - 13:00 </p>
              </div>
            </div>
          </div>
          <!-- end about-details -->
        </a>

        <a class="col-md-2 col-sm-2 col-xs-12 card-data" href="/tour">
          <div class="about-details">
            <div class="single-about">
              <div style='margin-bottom:20px;'>
                <img src="{{asset("assets/images/t2.png")}}" style="border-radius: 10%;" alt="Restaurantes">
              </div>
              <div>
                <h5 class="text-center" style="color:black">Rural</h5>
                <p class="text-center"><span>Finca Sarapiquí </span> <br> 14:00 - 15:30 </p>
              </div>
            </div>
          </div>
          <!-- end about-details -->
        </a>

        <a class="col-md-2 col-sm-2 col-xs-12 card-data" href="/tour">
          <div class="about-details">
            <div class="single-about">
              <div style='margin-bottom:20px;'>
                <img src="{{asset("assets/images/t5.jpg")}}" style="border-radius: 10%;" alt="Aves">
              </div>
              <div>
                <h5 class="text-center" style="color:black">Avistamiento</h5>
                <p class="text-center"><span>Corredor Biológico </span> <br> 16:00 - 17:30 </p>
              </div>
            </div>
          </div>
          <!-- end about-details -->
        </a>

        <a class="col-md-2 col-sm-2 col-xs-12 card-data" href="/tour">
          <div class="about-details">
            <div class="single-about">
              <div style='margin-bottom:20px; '>
                <img src="{{asset("assets/images/t4.png")}}" alt="Restaurantes" style="border-radius: 10%;">
              </div>
              <div>
                <h5 class="text-center" style="color:black">Estadía</h5>
                <p class="text-center"><span>Hotel Sarapiquí </span> <br> 19:00 </p>
              </div>
            </div>
          </div>
          <!-- end about-details -->
        </a>

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