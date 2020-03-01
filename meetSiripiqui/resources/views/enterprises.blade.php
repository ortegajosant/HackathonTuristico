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
      <div class="col-md-5 col-sm-6 col-xs-12">
        <!-- about-self -->
        <div class="about-self">
          <div class="self-head">
            <h1>Mostrá tus productos o servicios</h1>
            <p>
              Al registrarte podrás compartir tus servicios y productos con los visitantes y colegas comerciantes de la zona.
            </p>
            <p>
              I am Harrison Hoper. Currently working as a senior Website Developer. I am always passionate about Website
              Development, love to create modern Website & provide great client support.
            </p>
            <div class="self-btn">
              <a class="add-btn left-btn" href="#">Iniciar sesión</a>
              <a class="add-btn" href="#">Registrarte</a>
            </div>
          </div>
        </div>
        <!-- end about-self -->
      </div>
      <div class="col-md-offset-1 col-md-6 col-sm-7 col-xs-12">
        <div class="self-img">
          <br>
          <a href="#">
            <img class="round-img" src="{{asset("assets/img/comerciante_home.jpg")}}" alt="">
          </a>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Start Footer bottom Area -->
<div class="footer-area text-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="footer-icons text-center">
          <ul>
            <li>
              <a href="#"><i class="fa fa-facebook"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-rss"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-youtube"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-linkedin"></i></a>
            </li>
          </ul>
        </div>
        <div class="copyright text-center">

        </div>
      </div>
    </div>
  </div>
</div>

@endsection