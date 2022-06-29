@extends('layouts.app')

@section('title')
<title>Natudermic - Los mejores en el cuidado de la piel</title>
@endsection

@section('content')
<div class="super_container">
	
	<!-- Header -->
	
	<header class="header trans_400">
		<div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">
			
			<!-- Logo -->
			<div class="logo">
				<a href="{{ route('home') }}">
					<img src="{{ asset('img/logo_sin_marcos.png') }}" class="logo" alt="Logo">
				</a>
			</div>
			
			<!-- Main Navigation -->
			{{-- <nav class="main_nav">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li class="active"><a href="index.html">Home</a></li>
					<li><a href="about.html">About us</a></li>
					<li><a href="services.html">Services</a></li>
					<li><a href="blog.html">News</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav> --}}
			<div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">
				
				<!-- Work Hourse -->
				<div class="work_hours">Lunes - Viernes: 9:00am - 5:00pm</div>
				
				<!-- Header Phone -->
				<div class="header_phone">+52 44 32 60 47 37</div>
				
				<!-- Appointment Button -->
				
				<!-- Header Social -->
				<div class="social header_social">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="https://www.facebook.com/natudermic" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="https://api.whatsapp.com/send?phone=524432604737" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				
				<!-- Hamburger -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
		</div>
	</header>
	
	<!-- Menu -->
	
	<div class="menu_overlay trans_400"></div>
	<div class="menu trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<nav class="menu_nav">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About us</a></li>
				<li><a href="services.html">Services</a></li>
				<li><a href="blog.html">News</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
		<div class="menu_extra">
			<div class="menu_link">Lunes - Viernes: 9:00am - 5:00pm</div>
			<div class="menu_link">+52 44 32 60 47 37</div>
		</div>
		<div class="social menu_social">
			<ul class="d-flex flex-row align-items-center justify-content-start">
				<li><a href="https://www.facebook.com/natudermic" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="https://api.whatsapp.com/send?phone=524432604737" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	
	<!-- Alerts -->
	@include('partials.alerts')
	
	<!-- Home -->
	
	<div class="home">
		
		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/test.png)"></div>
					<div class="home_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content">
										<div class="home_title">Crema Facial</div>
										<div class="home_text">
											<p>Ideal para pieles mixtas o grasas, auxiliar en el tratamiento para pieles manchadas por el sol, secuelas del acné. Hidrata tu piel, humecta y rehidrata. Además regenera la piel y asi mismo atenúa las lineas de expresión. Producto 100% natural.</p>
										</div>
										<div class="home_buttons d-flex flex-row align-items-center justify-content-start">
											<div class="button button_1 trans_200"><a href="#" style="pointer-events: none; font-size: 18px;">Desde $200</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/test_2.png)"></div>
					<div class="home_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content">
										<div class="home_title">Loción de Rosas</div>
										<div class="home_text">
											<p>Tonifica tu piel con nuestra loción de rosas, aporta vitamina C y E para ayudar a conservar el colageno y la elastina previniendo la flacidez y las arrugas finas. Cuenta con propiedades astringentes y antiinflamatorias que, tras ser asimiladas, ayudan a prevenir y combatir los granos de acné.</p>
										</div>
										<div class="home_buttons d-flex flex-row align-items-center justify-content-start">
											<div class="button button_1 trans_200"><a href="#" style="pointer-events: none; font-size: 18px;">Desde $75</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/test_3.png)"></div>
					<div class="home_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content">
										<div class="home_title">Cera para la piel</div>
										<div class="home_text">
											<p>Disfrute de una piel más limpia con nuestra cera española 100% natural. Técnica menos dolorosa que la cera convencional. Aplicación en tibio y sin bandas. Elimina de raíz el vello con su bulbo, ideal para cualquier parte del cuerpo, dejando la piel muy nitida y tersa.</p>
										</div>
										<div class="home_buttons d-flex flex-row align-items-center justify-content-start">
											<div class="button button_1 trans_200"><a href="#" style="pointer-events: none; font-size: 18px;">Desde $75</a></div>
										</div>
										{{-- <div class="home_buttons d-flex flex-row align-items-center justify-content-start">
											<div class="button button_1 trans_200"><a href="#">Leer más...</a></div>
											<div class="button button_2 trans_200"><a href="#">¡Lo quiero!</a></div>
										</div> --}}
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			
			<!-- Home Slider Dots -->
			
			<div class="home_slider_dots">
				<ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-center justify-content-start">
					<li class="home_slider_custom_dot trans_200 active"></li>
					<li class="home_slider_custom_dot trans_200"></li>
					<li class="home_slider_custom_dot trans_200"></li>
				</ul>
			</div>
			
		</div>
	</div>
	
	<div class="prices mt-4">
		<div class="products_mobile container">
			<div class="row">
				<div class="col-lg-6 price_col">
					<div class="price">
						<div class="row">
							<div class="col-md-12">
								<div class="price_title">Crema Facial</div>
							</div>
							<div class="col-md-12">
								<div class="price_text">
									<p>Ideal para pieles mixtas o grasas, auxiliar en el tratamiento para pieles manchadas por el sol, secuelas del acné. Hidrata tu piel, humecta y rehidrata. Además regenera la piel y asi mismo atenúa las lineas de expresión. Producto 100% natural.</p>
								</div>
							</div>
							<div class="col-md-12 mt-4">
							</div>
						</div>
						<div class="price_panel">Desde $200</div>
					</div>
				</div>
				
				<div class="col-lg-6 price_col mt-4 mt-sm-4 mt-lg-0">
					<div class="price mt-4 mt-sm-4 mt-lg-0">
						<div class="row">
							<div class="col-md-12">
								<div class="price_title">Loción de Rosas</div>
							</div>
							<div class="col-md-12">
								<div class="price_text">
									<p>Tonifica tu piel con nuestra loción de rosas, aporta vitamina C y E para ayudar a conservar el colageno y la elastina previniendo la flacidez y las arrugas finas. Cuenta con propiedades astringentes y antiinflamatorias que, tras ser asimiladas, ayudan a prevenir y combatir los granos de acné.</p>
								</div>
							</div>
						</div>
						<div class="price_panel">Desde $75</div>
					</div>
				</div>
				
			</div>
			
			<div class="row d-flex justify-content-center">
				<div class="col-lg-6 price_col mt-4">
					<div class="price mt-4">
						<div class="row">
							<div class="col-md-12">
								<div class="price_title">Cera para la Piel</div>
							</div>
							<div class="col-md-12">
								<div class="price_text">
									<p>Disfrute de una piel más limpia con nuestra cera española 100% natural. Técnica menos dolorosa que la cera convencional. Aplicación en tibio y sin bandas. Elimina de raíz el vello con su bulbo, ideal para cualquier parte del cuerpo, dejando la piel muy nitida y tersa.</p>
								</div>
							</div>
						</div>
						<div class="price_panel">Desde $75</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	
	<!-- Intro -->
	
	<div class="intro">
		<div class="container">
			<div class="row">
				
				<!-- Intro Content -->
				<div class="col-lg-6 intro_col">
					<div class="intro_content">
						<div class="section_title_container">
							<div class="section_subtitle">Natudermic</div>
							<div class="section_title"><h3><strong>Contactanos sin compromiso</strong></h3></div>
						</div>
						<div class="intro_text">
							<p>Ponemos a disposición suya el siguiente formulario, sientase libre de ingresar los datos solicitados para hacerle llegar todas nuestras promociones hasta su correo electrónico, asi mismo le haremos llegar nuestros datos de contacto para una venta personalizada.</p>
						</div>
						<div class="milestones">
							<div class="row milestones_row">
								
								<!-- Milestone -->
								<div class="col-md-6 milestone_col">
									<div class="milestone">
										<div class="milestone_counter" data-end-value="250" data-sign-before="+">0</div>
										<div class="milestone_text">Pacientes Satifechos</div>
									</div>
								</div>
								
								{{-- <!-- Milestone -->
									<div class="col-md-4 milestone_col">
										<div class="milestone">
											<div class="milestone_counter" data-end-value="352">0</div>
											<div class="milestone_text">Face Liftings</div>
										</div>
									</div>
									
									<!-- Milestone -->
									<div class="col-md-4 milestone_col">
										<div class="milestone">
											<div class="milestone_counter" data-end-value="718">0</div>
											<div class="milestone_text">Injectibles</div>
										</div>
									</div> --}}
									
								</div>
							</div>
						</div>
					</div>
					
					<!-- Intro Form -->
					<div class="col-lg-6 intro_col">
						<div class="intro_form_container">
							<div class="intro_form_title">Contactanos</div>
							<form action="{{ route('mail') }}" method="POST" class="intro_form" id="intro_form">
								@csrf
								<div class="row">
									<div class="col-md-12">
										<input type="text" name="name" class="intro_input" placeholder="Ingresa tu nombre" required="required">
									</div>
									<div class="col-md-12">
										<input type="email" name="email" class="intro_input" placeholder="Ingresa tu e-mail" required="required">
									</div>
									<div class="col-md-12">
										<input type="text" name="affair" class="intro_input" placeholder="Asunto" required="required">
									</div>
									<div class="col-md-12">
										<textarea class="intro_input" name="message" id="" cols="30" rows="10" style="resize: none;" placeholder="Mensaje (Opcional)"></textarea>
									</div>
								</div>
								<button type="submit" class="button button_1 intro_button trans_200">Quiero información</button>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<!-- Why Choose Us -->
		
		{{-- <div class="why">
			<!-- <div class="background_image" style="background-image:url(images/why.jpg)"></div> -->
			<div class="container">
				<div class="row row-eq-height">
					
					<!-- Why Choose Us Image -->
					<div class="col-lg-6 order-lg-1 order-2">
						<div class="why_image_container">
							<div class="why_image"><img src="images/why_1.jpg" alt=""></div>
						</div>
					</div>
					
					<!-- Why Choose Us Content -->
					<div class="col-lg-6 order-lg-2 order-1">
						<div class="why_content">
							<div class="section_title_container">
								<div class="section_subtitle">This is Dr Pro</div>
								<div class="section_title"><h2>Why choose us?</h2></div>
							</div>
							<div class="why_text">
								<p>Odio ultrices ut. Etiam ac erat ut enim maximus accumsan vel ac nisl. Duis feugiat bibendum orci, non elementum urna vestibulum in. Nulla facilisi. Nulla egestas vel lacus sed interdum. Sed mollis, orci elementum eleifend tempor, nunc libero porttitor tellus, vel pharetra metus dolor.</p>
							</div>
							<div class="why_list">
								<ul>
									
									<!-- Why List Item -->
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="icon_container d-flex flex-column align-items-center justify-content-center">
											<div class="icon"><img src="images/icon_1.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
										</div>
										<div class="why_list_content">
											<div class="why_list_title">Only Top Products</div>
											<div class="why_list_text">Etiam ac erat ut enim maximus accumsan vel ac nisl</div>
										</div>
									</li>
									
									<!-- Why List Item -->
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="icon_container d-flex flex-column align-items-center justify-content-center">
											<div class="icon"><img src="images/icon_2.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
										</div>
										<div class="why_list_content">
											<div class="why_list_title">The best Doctors</div>
											<div class="why_list_text">Ac erat ut enim maximus accumsan vel ac</div>
										</div>
									</li>
									
									<!-- Why List Item -->
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="icon_container d-flex flex-column align-items-center justify-content-center">
											<div class="icon"><img src="images/icon_3.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
										</div>
										<div class="why_list_content">
											<div class="why_list_title">Great Feedback</div>
											<div class="why_list_text">Etiam ac erat ut enim maximus accumsan vel</div>
										</div>
									</li>
									
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
		
		<!-- Call to action -->
		
		<div class="cta">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="cta_container d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
							<div class="cta_content">
								<div class="cta_title">Llamanos directamente!</div>
							</div>
							<div class="cta_phone ml-lg-auto">+52 44 32 60 47 37</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="cta_whatsapp">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="cta_container d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
							<div class="cta_content">
								<div class="cta_title">O comunicate via whatsapp!</div>
							</div>
							<div class="ml-lg-auto d-flex align-items-center">
								<div class="button button_whatsapp"><a href="https://api.whatsapp.com/send?phone=524432604737" target="_blank">Iniciar conversación <img src="{{ asset('images/whatsapp.png') }}" alt="Whatsapp" width="25px;"></a></div>
							</div>
							{{-- <div class="cta_phone_whatsapp ml-lg-auto d-flex align-items-center">  --}}
								{{-- <a href="#" style="">
									Iniciar conversación <span class="ml-2"><img src="{{ asset('images/whatsapp.png') }}" alt="Whatsapp" width="35px;"></span>
								</a> --}}
								
								{{-- </div> --}}
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Services -->
			
			<div class="services">
				<div class="container">
					<div class="row">
						<div class="col text-center">
							<div class="section_title_container">
								<div class="section_title"><h2>Nuestros productos</h2></div>
							</div>
						</div>
					</div>
					<div class="row services_row">
						
						<!-- Service -->
						<div class="col-xl-4 col-md-6 service_col">
							<div class="service text-center">
								<div class="service">
									<div class="icon_container_nature d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
										<div class="icon"><img src="images/nature.svg" alt="Natural"></div>
									</div>
									<div class="service_title">Productos naturales</div>
									<div class="service_text">
										<p>Producto natural.( Manzanilla, aloe, caléndula, Ácido Hialurónico).</p>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Service -->
						<div class="col-xl-4 col-md-6 service_col">
							<div class="service text-center">
								<div class="service">
									<div class="icon_container_quality d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
										<div class="icon"><img src="images/prepare.svg" alt="Preparación"></div>
									</div>
									<div class="service_title">preparación de calidad</div>
									<div class="service_text">
										<p>Nuestros productos cumplen con la mas alta calidad de higiene durante su preparación.</p>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Service -->
						<div class="col-xl-4 col-md-6 service_col">
							<div class="service text-center">
								<div class="service">
									<div class="icon_container_delivery d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
										<div class="icon"><img src="images/delivery.svg"></div>
									</div>
									<div class="service_title">Envio gratis</div>
									<div class="service_text">
										<p>Solicita tu envio gratis, dentro de la ciudad de morelia.</p>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Service -->
						<div class="col-xl-4 col-md-6 service_col">
							<div class="service text-center">
								<div class="service">
									<div class="icon_container_national d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
										<div class="icon"><img src="images/nacional.svg" alt="Nacional"></div>
									</div>
									<div class="service_title">Envios nacionales</div>
									<div class="service_text">
										<p>Manejamos envios nacionales (dentro de la república mexicana) con un pequeño costo de envio.</p>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Service -->
						<div class="col-xl-4 col-md-6 service_col">
							<div class="service text-center">
								<div class="service">
									<div class="icon_container_support d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
										<div class="icon"><img src="images/support.svg" alt="soporte"></div>
									</div>
									<div class="service_title">Soporte</div>
									<div class="service_text">
										<p>Ponemos a disposición nuestras redes sociales, asi como el número de telefono y whatsapp directo.</p>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Service -->
						<div class="col-xl-4 col-md-6 service_col">
							<div class="service text-center">
								<div class="service">
									<div class="icon_container_covid d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
										<div class="icon"><img src="images/mask.svg" alt="mascarilla"></div>
									</div>
									<div class="service_title">Altos estandares de higiene</div>
									<div class="service_text">
										<p>Para nostros, tu salud es primero, por eso, contamos con altos estandares de higiene en la elaboración de nuestros productos.</p>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
			<!-- Extra -->
			
			<div class="extra">
				<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/parallax.png" data-speed="0.8"></div>
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-5">
							<div class="extra_container d-flex flex-row align-items-start">
								<div class="extra_content">
									<div class="extra_disc d-flex flex-row align-items-end justify-content-start">
										<div>Pregunta por nuestros descuentos de temporada.</div>
									</div>
									{{-- <div class="extra_title">Pregunta por nuestros descuentos</div> --}}
									<div class="extra_text">
										<p>Aprovecha nuestros descuentos especiales a distribuidores, puedes preguntarnos mediante whatsapp o correo electrónico.</p>
									</div>
									<div class="button button_whatsapp mt-4 text-center"><a href="https://api.whatsapp.com/send?phone=524432604737" target="_blank">Iniciar conversación <img src="{{ asset('images/whatsapp.png') }}" alt="Whatsapp" width="25px;"></a></div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-7 mt-4 d-flex align-items-center justify-content-center">
							<div class="button button_1 trans_200 text-center"><a href="#" style="pointer-events: none; font-size: 16px;">SOMOS LOS MEJORES EN EL CUIDADO DE LA PIEL.</a></div>
							<p></p>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Newsletter -->
			
			{{-- <div class="newsletter">
				<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.png" data-speed="0.8"></div>
				<div class="container">
					<div class="row">
						<div class="col text-center">
							<div class="newsletter_title">SOMOS LOS MEJORES EN EL CUIDADO DE LA PIEL.</div>
						</div>
					</div> --}}
					{{-- <div class="row newsletter_row">
						<div class="col-lg-8 offset-lg-2">
							<div class="newsletter_form_container">
								<form action="#" id="newsleter_form" class="newsletter_form">
									<input type="email" class="newsletter_input" placeholder="Correo electrónico" required="required">
									<button class="newsletter_button">Enviar</button>
								</form>
							</div>
						</div>
					</div> --}}
				{{-- </div>
			</div> --}}
			
			<!-- Footer -->
			
			<footer class="footer">
				<div class="footer_content">
					<div class="container">
						<div class="row">
							
							<!-- Footer About -->
							<div class="col-lg-3 footer_col">
								<div class="footer_about">
									<div class="footer_logo">
										<a href="#">
											<img src="{{ asset('images/logo_fade_horizontal.png') }}" alt="" style="width: 150px;">
										</a>
									</div>
									<div class="footer_about_text">
										<p>Cosmetico para el cuidado facial. SOMOS LOS MEJORES EN EL CUIDADO DE LA PIEL.</p>
									</div>
								</div>
							</div>
							
							<!-- Footer Contact Info -->
							<div class="col-lg-3 footer_col">
								<div class="footer_contact">
									<div class="footer_title">Información de contacto</div>
									<ul class="contact_list">
										<li>+52 44 32 60 47 37</li>
										<li>soporte@natudermic.mx</li>
									</ul>
								</div>
							</div>
							
							<!-- Footer Locations -->
							<div class="col-lg-3 footer_col">
								<div class="footer_location">
									<div class="footer_title">Nos ubicamos</div>
									<ul class="locations_list">
										<li>
											<div class="location_title">Morelia, Michoacán</div>
											<div class="location_text">Garcia Obeso 1125, Col. Felix Ireta</div>
										</li>
									</ul>
								</div>
							</div>
							
							<!-- Footer Opening Hours -->
							<div class="col-lg-3 footer_col">
								<div class="opening_hours">
									<div class="footer_title">Horario de atención</div>
									<ul class="opening_hours_list">
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div>Lunes:</div>
											<div class="ml-auto">9:00am - 5:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div>Martes:</div>
											<div class="ml-auto">9:00am - 5:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div>Miercoles:</div>
											<div class="ml-auto">9:00am - 5:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div>Jueves:</div>
											<div class="ml-auto">9:00am - 5:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div>Viernes:</div>
											<div class="ml-auto">9:00am - 5:00pm</div>
										</li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				<div class="footer_bar">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="footer_bar_content  d-flex flex-md-row flex-column align-items-md-center justify-content-start">
									<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
										Copyright &copy;<script>document.write(new Date().getFullYear());</script> Natudermic | Todos los derechos reservados 
										<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
									</div>
									{{-- <nav class="footer_nav ml-md-auto">
										<ul class="d-flex flex-row align-items-center justify-content-start">
											<li><a href="index.html">Home</a></li>
											<li><a href="about.html">About us</a></li>
											<li><a href="services.html">Services</a></li>
											<li><a href="blog.html">News</a></li>
											<li><a href="contact.html">Contact</a></li>
										</ul>
									</nav> --}}
								</div>
							</div>
						</div>
					</div>			
				</div>
			</footer>
		</div>
		
		@endsection