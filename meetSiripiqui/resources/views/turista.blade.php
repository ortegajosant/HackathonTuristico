@extends('layout.master2')

@section('content')
@include('layout.navBar')
<div id="home" class="header-img" >
	<div class="container" >
		<div class="row">

			<div class="add-text">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-head text-center">
							<strong>
								<h1 style="color:black">¿Qué buscas?</h1>
							</strong>

						</div>
					</div>

					<div class="col-md-1 col-sm-2 col-xs-12 card-data">

					</div>

					<div class="col-md-2 col-sm-2 col-xs-12 card-data">
						<div class="about-details">
							<div class="single-about">
								<div style='margin-bottom:20px;' onclick="selectTour(this)">
									<img class="" src="{{asset("assets/images/t11.png")}}" alt="Aventura" style="border-radius: 10%;">
								</div>

								<h4 class="text-center" style="color:black">Aventura</h4>

							</div>
						</div>
						<!-- end about-details -->
					</div>

					<div class="col-md-2 col-sm-2 col-xs-12 card-data">
						<div class="about-details">
							<div class="single-about">
								<div style='margin-bottom:20px;' onclick="selectTour(this)">
									<img src="{{asset("assets/images/t3.png")}}" style="border-radius: 10%;" alt="Cultura">
								</div>
								<h4 class="text-center" style="color:black">Cultura</h4>

							</div>
						</div>
						<!-- end about-details -->
					</div>

					<div class="col-md-2 col-sm-2 col-xs-12 card-data">
						<div class="about-details">
							<div class="single-about">
								<div style='margin-bottom:20px; ' onclick="selectTour(this)">
									<img src="{{asset("assets/images/t4.png")}}" alt="Restaurantes" style="border-radius: 10%;">
								</div>
								<h4 class="text-center" style="color:black">Restaurantes</h4>

							</div>
						</div>
						<!-- end about-details -->
					</div>

					<div class="col-md-2 col-sm-2 col-xs-12 card-data">
						<div class="about-details">
							<div class="single-about">
								<div style='margin-bottom:20px;' onclick="selectTour(this)">
									<img src="{{asset("assets/images/t2.png")}}" style="border-radius: 10%;" alt="Restaurantes">

								</div>

								<h4 class="text-center" style="color:black">Cultivos</h4>

							</div>
						</div>
						<!-- end about-details -->
					</div>

					<div class="col-md-2 col-sm-2 col-xs-12 card-data">
						<div class="about-details">
							<div class="single-about">
								<div style='margin-bottom:20px;' onclick="selectTour(this)">
									<img src="{{asset("assets/images/t5.jpg")}}" style="border-radius: 10%;" alt="Aves">

								</div>

								<h4 class="text-center" style="color:black">Aves</h4>

							</div>
						</div>
						<!-- end about-details -->
					</div>
					<div class="col-md-1 col-sm-2 col-xs-12 card-data">

					</div>




				</div>

			</div>
			<div class='text-center' style='bottom: 0; z-index: 100; '>
				<div >
					<a class="add-btn left-btn" style="color:black;" href="/myEnterprise">Continuar</a>

				</div>
			
			</div>
		</div>


	</div>

</div>
</header>


@endsection