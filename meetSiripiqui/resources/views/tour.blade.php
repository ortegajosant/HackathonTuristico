@extends('layout.master2')

@section('content')
@include('layout.navBar')
<div id="home" class="header-img">
	<div class="container">
		<!-- Start Blog Area -->
		<div id="blog" class="blog-area">
			<div class="blog-inner area-padding">
				<div class="blog-overly"></div>
				<div class="container ">

					<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-head text-center">
							<strong>
								<h1 style="color:black">Evento</h1>
							</strong>

						</div>
					</div>
						<!-- Start Left Blog -->
						<div class="col-md-12 col-sm-12 col-xs-12" >
							<div class="single-blog">
								<div class="row">
									<div class="col-md-4 col-sm-12 col-xs-12">
										<div class="single-blog-img">
											<a href="blog.html">
												<img src="{{asset("assets/images/dt1.jpg")}}" alt="">
											</a>
										</div>
										<span>
											<span class="comments-type">
												
												<a href="javascript:void(0)">La Trinidad</a>
											</span>
										</span>
										
									</div>
									<div class="col-md-8 col-sm-12 col-xs-12">
										<div class="blog-text">
											<h2>
												<a href="javascript:void(0)">Soda Antojitos</a>
											</h2>
											<p>
												Disfruta de una deliciosa comida, desayunos, almuerzo, café de la tarde, cena o cualquier antojito que quieras probar.
											</p>
										</div>
										<div class="blog-meta">
											<span class="date-type">
												<i class="fa fa-phone"></i> 7056-5419 ,
											</span>
											<span class="comments-type">
												<strong> Precio</strong>
												<a href="#">Variado</a>
											</span>
											
										</div>

										<span class="comments-type">
												<strong> Horario</strong>
												<a href="#"> L - S de 8 am a 5pm</a>
										</span>
										
										
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d502164.07095663523!2d-84.21712658876321!3d10.488302467324292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa09f595c7820b3%3A0x68aacb9d683db148!2sHeredia%2C%20Sarapiqu%C3%AD!5e0!3m2!1ses!2scr!4v1583061344099!5m2!1ses!2scr" height="200" frameborder="0" style="border:0; width:100%; " allowfullscreen=""></iframe>
									</div>
								</div>

							</div>
							<!-- Start single blog -->
						</div>

						<br>
						<br>

						<div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:10%;">
						<div class="section-head text-center">
							<strong>
								<h1 style="color:black">Eventos que te pueden interesar</h1>
							</strong>

						</div>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12" style="margin-top:10%;">
							<div class="single-blog">
								<div class="row">
									<div class="col-md-4 col-sm-12 col-xs-12">
										<div class="single-blog-img">
											<a href="blog.html">
												<img src="{{asset("assets/images/dt2.png")}}" alt="">
											</a>
										</div>
										<span>
											<span class="comments-type">
												
												<a href="javascript:void(0)">Finca 7</a>
											</span>
										</span>
										
									</div>
									<div class="col-md-8 col-sm-12 col-xs-12">
										<div class="blog-text">
											<h2>
												<a href="javascript:void(0)">Producción piñera</a>
											</h2>
											<p>
											En este tour podrás conocer el proceso de producción de piña con calidad de exportación. Desde su siembra hasta su cosecha, incluso te daremos ideas de recetas exclusivas que puedes preparar con esta fruta.
											</p>
										</div>
										<div class="blog-meta">
											<span class="date-type">
												<i class="fa fa-phone"></i> 8569 8564 ,
											</span>
											<span class="comments-type">
												<strong> Precio</strong>
												<a href="#">$4 por persona</a>
											</span>
											
										</div>
										<span class="comments-type">
												<strong> Horario</strong>
												<a href="#"> L - S de 8 am a 5pm</a>
										</span>
										
									</div>
								</div>

							</div>
							<!-- Start single blog -->
						</div>
						<br>
						<br>
						<div class="col-md-6 col-sm-12 col-xs-12" style="margin-top:10%;">
							<div class="single-blog">
								<div class="row">
									<div class="col-md-4 col-sm-12 col-xs-12">
										<div class="single-blog-img">
											<a href="blog.html">
												<img src="{{asset("assets/images/dt3.jpg")}}" alt="">
											</a>
										</div>
										<span>
											<span class="comments-type">
												
												<a href="javascript:void(0)">Parrilla de Sara</a>
											</span>
										</span>
										
									</div>
									<div class="col-md-8 col-sm-12 col-xs-12">
										<div class="blog-text">
											<h2>
												<a href="javascript:void(0)">Sarapifood</a>
											</h2>
											<p>
											Las comidas de Sarapiquí se comen en un lugar, Sarapifood. Ofrecemos platillos diferenciados por su valor cultural, acompañados de una atención distinguida y profesional.
											</p>
										</div>
										<div class="blog-meta">
											<span class="date-type">
												<i class="fa fa-phone"></i> 7056-5419 ,
											</span>
											<span class="comments-type">
												<strong> Precio</strong>
												<a href="#">Variado</a>
											</span>
											
											
										</div>
										<span class="comments-type">
												<strong> Horario</strong>
												<a href="#"> L - S de 8 am a 5pm</a>
										</span>
									
									</div>
								</div>

							</div>
							<!-- Start single blog -->
						</div>
						<!-- End Right Blog-->
					</div>
				</div>
			</div>
		</div>


	</div>

</div>
</header>


@endsection