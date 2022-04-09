@extends('welcome')
@section('seccion')
<!-- Banner -->
<div id="banner-wrapper">
	<div id="banner" class="box container">
		<div class="row">
			<div class="col-7 col-12-medium">
				<h2>Somos -Reunidittos-</h2>
				<p>Equipo de Discord y team de GTA V</p>
			</div>
			<div class="col-5 col-12-medium">
				<ul>
					<li><a href="#" class="button large icon solid fa-arrow-circle-right">Unirse</a></li>
					<li><a href="#" class="button alt large icon solid fa-question-circle">Informacion</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!-- Features -->

<div id="features-wrapper">
	<div class="container">
		<h2>Algunas Carreras Completadas Por El Escuadron Suicida</h2>
		<div class="row">
			<div class="col-4 col-12-medium">

				<!-- Box -->
				<section class="box feature">
					<a href="#" class="image featured"><img src="{{ asset('images/pic01.jpg') }}" alt="" /></a>
					<div class="inner">
						<header>
							<h2>Maximum Wallride N.51</h2>
							<p>Creado Por Ramba_YT</p>
						</header>
						<p>Una carrera para expertos y gente que no le teme a quedarse 1hr jugandola,
							apta para todo tipo de carros aunque el T20, zentorno y XA-21 Son la mejor opcion.
						</p>
					</div>
				</section>

			</div>
			<div class="col-4 col-12-medium">

				<!-- Box -->
				<section class="box feature">
					<a href="#" class="image featured"><img src="{{ asset('images/pic02.jpg') }}" alt="" /></a>
					<div class="inner">
						<header>
							<h2>Race With Super&BatiFly</h2>
							<p>Creado Por Tortosa975</p>
						</header>
						<p>Una Carrera con 2 transformaciones, donde comienzas con un super auto a eleccion
							y terminas con una moto, por cierto cuidado!! debes tener licencia de vuelo con moto
							si sabes a lo que me refiero.
						</p>
					</div>
				</section>

			</div>
			<div class="col-4 col-12-medium">

				<!-- Box -->
				<section class="box feature">
					<a href="#" class="image featured"><img src="{{ asset('images/pic03.jpg') }}" alt="" /></a>
					<div class="inner">
						<header>
							<h2>T20 Level Asian #7</h2>
							<p>Creado por Micha_</p>
						</header>
						<p>Exclusiva para T20, es una carrera con loops, wallrides extremadamente dificiles
							y acrovacias que no creeras que podias hacer.
						</p>
					</div>
				</section>

			</div>
		</div>
	</div>
</div>

<!-- Main -->
<div id="main-wrapper">
	<div class="container">
		<div class="row gtr-200">
			<div class="col-4 col-12-medium">

				<!-- Sidebar -->
				<div id="sidebar">
					<section class="widget thumbnails">
						<h3>Algunas Otras Carreras</h3>
						<div class="grid">
							<div class="row gtr-50">
								<div class="col-6"><a href="#" class="image fit"><img
											src="{{ asset('images/pic04.jpg') }}" alt="" /></a></div>
								<div class="col-6"><a href="#" class="image fit"><img
											src="{{ asset('images/pic05.jpg') }}" alt="" /></a></div>
								<div class="col-6"><a href="#" class="image fit"><img
											src="{{ asset('images/pic06.jpg') }}" alt="" /></a></div>
								<div class="col-6"><a href="#" class="image fit"><img
											src="{{ asset('images/pic07.jpg') }}" alt="" /></a></div>
							</div>
						</div>
						<a href="#" class="button icon fa-file-alt">Ver Mas...</a>
					</section>
				</div>

			</div>
			<div class="col-8 col-12-medium imp-medium">

				<!-- Content -->
				<div id="content">
					<section class="last">
						<h2>Entonces de que se trata?</h2>
						<p>Nosotros somos <strong>Reunidittos</strong>, somos un grupo de estudiantes que en pro
							de la ciencia
							hemos decidido completar todas estas y mas carreras para calificarlas y que las
							personas que lleguen
							despues de nosotros no tengan la necesidad de sufrir lo que nosotros sufrimos al
							pasarlas.</p>
						<p>Podrian llamarnos como una especie de control de calidad dentro del propio juego, con
							las desventajas
							que somos gente comun y corriente que solo quiere pasar un momento agradable y por
							supuesto
							que no tenemos madera de criticos de cocina.
						</p>
						<a href="#" class="button icon solid fa-arrow-circle-right">Continuar Leyendo</a>
					</section>
				</div>

			</div>
		</div>
	</div>
</div>

@stop