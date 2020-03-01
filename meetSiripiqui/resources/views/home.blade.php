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

			<div class="col-md-4 col-sm-5 col-xs-12">
				<div id="parent">

					<br>
					<br>
					<br>


					<div class="child text-left ">
						<h1>Historia</h1>
					</div>
					<br>
					<div class="child text-left">
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
				<!-- about-self -->

				<!-- end about-self -->
			</div>
			<div class="col-md-offset-2 col-md-6 col-sm-7 col-xs-12">
				<div class="self-img">
					<a href="#">
						<img src="{{asset("assets/images/about.jpg")}}" alt="" style="border-radius: 5px;">
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="clear"></div>

<!-- end About -->


<div id="" class="about-area page-scroll area-padding" style="margin-top:0">
	<div class="container">

		<div class="row fix">

			<div class="col-md-4 col-sm-5 col-xs-12">
				<div id="parent">

					<br>
					<br>
					<br>
					<br>
					<br>

					<div class="child text-left ">
						<h1>Río Sarapiquí</h1>
					</div>
					<br>
					<div class="child text-left">
						<p>
							Río navegable en el que puedes prácticar deportes acuáticos como el rafting.
						</p>
					</div>
					<div class="child text-left">
						<p>
							<strong> ! Vive la adrenalina de la velocidad ¡ </strong>
						</p>
					</div>

				</div>
				<!-- end about-self -->
			</div>
			<div class="col-md-offset-2 col-md-6 col-sm-7 col-xs-12">
				<div class="self-img">
					<a href="#">
						<img src="{{asset("assets/images/rafting.jpg")}}" alt="" style="border-radius: 5px;">
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="clear"></div>

<!-- End Contact Area -->

<div class="clear"></div>
<div class="add-area area-margin">
	<div class="header-overlay"></div>
	<div class="container">
		<div class="row fix" style="margin-top:10%;">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="section-head text-center">
					<strong>
						<h1 style="color:white">Podrás encontrar</h1>
					</strong>

				</div>
			</div>
		</div>
		<div class="row">
			<div class="add-text">
				<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-6 card-data">
						<div class="about-details">
							<div class="single-about">
								<div style='margin-bottom:20px; padding:15%;'>
									<img src="{{asset("assets/images/kayak.svg")}}" alt="Aventura">
								</div>
								<h4 class="text-center" style="color:white">Aventura</h4>

							</div>
						</div>
						<!-- end about-details -->
					</div>

					<div class="col-md-3 col-sm-3 col-xs-6 card-data">
						<div class="about-details">
							<div class="single-about">
								<div style='margin-bottom:20px; padding:15%;'>
									<img src="{{asset("assets/images/bird.svg")}}" alt="Aves">
								</div>
								<h4 class="text-center" style="color:white">Avistamiento de Aves</h4>

							</div>
						</div>
						<!-- end about-details -->
					</div>

					<div class="col-md-3 col-sm-3 col-xs-6 card-data">
						<div class="about-details">
							<div class="single-about">
								<div style='margin-bottom:20px; padding:15%;'>
									<img src="{{asset("assets/images/agriculture.svg")}}" alt="Cultivos">

								</div>

								<h4 class="text-center" style="color:white">Cultivos caracteristicos</h4>

							</div>
						</div>
						<!-- end about-details -->
					</div>

					<div class="col-md-3 col-sm-3 col-xs-6 card-data">
						<div class="about-details">
							<div class="single-about">
								<div style='margin-bottom:20px; padding:15%;'>
									<img src="{{asset("assets/images/tree.svg")}}" alt="Reserva Natural">
								</div>
								<h4 class="text-center" style="color:white">Reservas Naturales</h4>

							</div>
						</div>
						<!-- end about-details -->
					</div>


				</div>
			</div>
		</div>
	</div>
</div>
<!-- Start Footer bottom Area -->


@endsection