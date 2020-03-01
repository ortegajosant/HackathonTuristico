@extends('layout.master')

@section('content')
@include('layout.navBar')
<!-- Start Bottom Header -->
<div id="home" class="header-img">
	<div class="header-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 text-center">
				<div class="header-bottom">
					<h3 class="helo">Bienvenido</h3>
					<h1>SARAPIQUÍ</h1>

				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 text-center" style='bottom: 0;'>
				<div class="header-bottom">

					<div class="text-center">
						<h6 class="helo">Conozca más...</h6>
						<a class="page-scroll" href="#about"><i class="fa fa-chevron-down"></i></a>


					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- Start Bottom Header -->
</header>

<div id="about" class="about-area page-scroll area-padding">
	<div class="container">
		<div class="row fix">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="section-head">
					<h3>Historia</h3>

				</div>
			</div>
		</div>
		<div class="row fix">

			<div class="col-md-4 col-sm-5 col-xs-12">
				<!-- about-self -->
				<div class="about-self">
					<div class="self-head">
						<p>
							Habitado en épocas prehispánicas por el grupo indígena de los Botos.
						</p>
						<p>
							El nombre de la zona proviene del río que lo recorre.
						</p>
						<p>
							En la campaña nacional de 1856-1857 contra los filibusteros, el grupo nacional liderado por Máximo Blanco
							bloqueo el paso de los invasores por el río Sarapiquí.
						</p>
					</div>
				</div>
				<!-- end about-self -->
			</div>
			<div class="col-md-offset-2 col-md-6 col-sm-7 col-xs-12">
				<div class="self-img">
					<a href="#">
						<img src="{{asset("assets/images/about.jpg")}}" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- end About -->
<div class="clear"></div>


<!-- End Contact Area -->
<!-- Start Footer bottom Area -->


@endsection