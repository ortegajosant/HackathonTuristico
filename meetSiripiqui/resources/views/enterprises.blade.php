@extends('layout.master2')

@section('content')
@include('layout.navBar')
</header>
<div id="about" style="" class="about-area page-scroll area-padding">
  <div class="header-overlay"></div>
  <br>
  <br>
  <div class="container">
    <div class="row fix">
      <div class=" col-md-6 col-sm-7 col-xs-12 d-none d-sm-block">
        <div class="self-img">
          <br>
          <a href="#">
            <img class="round-img" src="{{asset("assets/img/comerciante_home.jpg")}}" alt="">
          </a>
        </div>
      </div>
      <div class="col-md-5 col-sm-6 col-xs-12 col-md-offset-1">
        <!-- about-self -->
        <div class="about-self">
          <div class="self-head">
            <br>
            <h1>Mostrá tus productos o servicios</h1>
            <p>
              Al registrarte podrás compartir tus servicios y productos con los visitantes y colegas comerciantes de la zona.
            </p>
            <p>
              Con esto podrás conectarte con los demás productores de la zona y así colaborar mutuamente.
            </p>
            <div class="self-btn">
              <a class="add-btn left-btn" href="/myEnterprise">Iniciar sesión</a>
              <a class="add-btn" href="#">Registrarte</a>
            </div>
          </div>
        </div>
        <!-- end about-self -->
      </div>
      
    </div>
  </div>
</div>

@endsection