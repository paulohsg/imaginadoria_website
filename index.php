<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IMAGINADORIA</title>

	<link rel="icon" type="image/png" href="img/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/animate.min.css" />
	<link rel="stylesheet" href="css/style.css">

	<script src="js/jquery-3.1.1.min.js" charset="utf-8"></script>
	<script src="js/jquery.form.js" charset="utf-8"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/bootstrap.min.js" charset="utf-8"></script>
	<script src="js/jquery.visible.min.js" charset="utf-8"></script>
	<script src="js/jquery.appear.js" charset="utf-8"></script>
	<script src="js/noframework.waypoints.min.js"></script>
	<script src="js/validator.min.js" charset="utf-8"></script>
	<script src="js/script.js" charset="utf-8"></script>
</head>
<body>



	<nav id="nav" class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
					<!--
					<a class="navbar-brand logo-hidden" href="#">
			          <img class="" alt="Brand" src="img/lovotipo_imaginadoria.png">
			        </a>

			    -->
			    <a href="#" title="about" id="top-button-mobile" class="navbar-brand logo-hidden">
			    	<img src="img/seta_menu_2.png" height="33px" width="33px" alt="">
			    </a>


			    <div  class="responsive-navbar-button">
			    	<span class="cls"></span>
			    	<span>
			    		<ul class="sub-menu ">
			    			<li>
			    				<a href="#carousel-mobile" title="about">PERFIL</a>
			    			</li>
			    			<li>
			    				<a href="#services" title="skills">SERVIÇOS</a>
			    			</li>
			    			<li>
			    				<a href="#portfolio" title="jobs">PORTFÓLIO</a>
			    			</li>
			    			<li>
			    				<a href="#contact" title="contact">CONTATOS</a>
			    			</li>
			    		</ul>
			    	</span>
			    	<span class="cls"></span>

			    </div>
			</div>


			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul id="normal-list" class="nav navbar-nav navbar-anim">
					<li class="toRight"><a class="underline_animate" href="#myCarousel">PERFIL<span class="sr-only">(current)</span></a></li>
					<li class="toRight"><a class="underline_animate" href="#services">SERVIÇOS</a></li>
					<li class="toLeft"><a class="underline_animate" href="#portfolio">PORTFÓLIO</a></li>
					<li class="toLeft"><a class="underline_animate" href="#contact">CONTATOS</a></li>
				</ul>

				<ul id="top-button" class="nav navbar-nav navbar-left" style="display: none;">
					<li>
						<a href="#" title="about" id="button-top">
							<img src="img/seta_menu_2.png" height="50px" width="50px" alt="">
						</a>
					</li>
				</ul>


				<ul id="logovo-list" class="nav navbar-nav navbar-center" style="visibility: visible; display: none;">
					<li id="logovo-navbar" class="dropdown center-block">
						<a id="link-button-logovo-navbar" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="">
							<img id="img-logovo-navbar" src="img/logovo.png" height="96px" width="79.35px" alt="">
						</a>
						<ul id="logovo-dropdown-menu" class="dropdown-menu dropdown-menu-center">
							<li><a href="#myCarousel" target="">PERFIL</a></li>
							<li><a href="#services" target="">SERVIÇOS</a></li>
							<li><a href="#portfolio" target="">PORTFÓLIO</a></li>
							<li><a href="#contact" target="">CONTATOS</a></li>
						</ul>
					</li>
				</ul>

				<ul id="current-session-label" class="nav navbar-nav navbar-right" style="display: none;">
					<li>
						<div class="current-section">
							<span></span>
						</div>
					</li>
				</ul>

			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>



	<div id="logovo-wrapper" class="container">
		<div class="row">
			<div class="col-md-12">
				<img id="logovo" class="img-responsive center-block" src="img/lovo_imaginadoria_vertical_g.png" alt="">
				<h1 id="logovo-text">Imagine. Nós tornaremos possível.</h1>
			</div>
		</div>
	</div>



	<div id="carousel-container">


		<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div id="about" class="carousel-inner" role="listbox">
				<div id="about-description" class="item active">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<img class="img-responsive center-block equation-img" src="img/icon_services.png" alt="">
								<img id="img-equation-mobile" class="img-responsive center-block" src="img/icon_services_mobile.png" width="200px" alt="">
							</div>
						</div>

						<div class="about-content">
							<div class="row">
								<div class="col-md-6">
									<p>
										<h4>A IMAGINADORIA representa, o meio pelo qual nós, imaginadores, tornamos real aquilo que você imagina.</h4>
									</p>
									<p>
										<h4>
											Estamos atentos para ouvir o que você têm a dizer para, então, decifrar suas reais necessidades.
										</h4>
									</p>
								</div>
								<div class="col-md-6">
									<p>
										<h4>
											Nos importamos com fatores pertinentes ao desenvolvimento dos projetos, como acessibilidade, segurança, usabilidade.
										</h4>
									</p>
									<p>
										<h4>
											Temos o compromisso de desenvolver produtos e conteúdos para web que sejam planejados de modo cuidadoso e sejam personalizados tendo em conta o que você precisa.
										</h4>
									</p>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div id="about-profiles" class="item about-profiles">
					<div class="container">

						<div class="row">
							<div class="container">
								<div class="col-md-12">
									<h1>OS IMAGINADORES</h1>
								</div>
							</div>
						</div>
						<div class="profiles-content">
							<div class="row">
								<div id="container-profile-eduardo" class="col-md-6">
									<img class="center-block profile-eduardo-closed" id="profile-eduardo" src="img/avatar_dudu.png" height="300px" alt="" onclick="open_eduardo_profile()">
								</div>
								<div id="profile-eduardo-description" class="col-md-6" style="display: none;">
									<div class="profile-eduardo-description-content">
										<p>
											<h2>
												Eduardo de Ávila
											</h2>
										</p>
										<p class="profile-titulacao">
											Mestre em Arte e Cultura Visual e graduado em Design Gráfico pela Universidade Federal de Goiás.
										</p>
										<p>
											Minha atuação profissional está centrada em diversas áreas de projeto e criação visual: design de identidade corporativa, design para web, design de informação, design editorial e design educacional.
										</p>
										<p>
											Leciono em cursos de graduação e pós-graduação nas áreas de Arte, Design e Comunicação.
										</p>
										<p>
											Também tenho experiência em educação a distância atuando no planejamento, produção e implantação de cursos em instituições como UFG, UnB, UEG e Sistema FIEG (SESI e SENAI).
										</p>
									</div>

								</div>
								<div id="profile-paulo-description" class="col-md-6" style="display: none;">
									<div class="profile-paulo-description-content">
										<p>
											<h2>
												Paulo Henrique de Souza
											</h2>
										</p>
										<p class="profile-titulacao">
											Bacharel em Engenharia de Software pela Universidade Federal de Goiás.
										</p>
										<p>
											Minha atuação inicial foi no desenvolvimento de softwares (web e desktop) para a área da saúde.
										</p>
										<p>
											Em minhas experiências pessoal, acadêmica e profissional, estou em constante contato com várias tecnologias, estando apto tanto para o desenvolvimento de software desktop, quanto para o desenvolvimento web e mobile.
										</p>
										<p>
											Além disso, tenho conhecimento em diversas metodologias de desenvolvimento, o que me garante bom desempenho desde a criação e gestão dos projetos até a implementação dos produtos.
										</p>
									</div>
								</div>
								<div id="container-profile-paulo" class="col-md-6">
									<img class="center-block profile-paulo-closed" id="profile-paulo" src="img/avatar_ph.png" height="300px" alt="" onclick="open_paulo_profile()">
								</div>
							</div>
						</div>


					</div>
				</div>

				<div id="about-principles" class="item">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1>PRINCÍPIOS + AÇÕES</h1>
							</div>
							<div class="principles-content">
								<div class="row">
									<div class="col-md-12">
										<h4>IMAGINAR nos motiva</h4>
									</div>
									<div class="col-md-12">
										<h4>PROJETAR é a nossa prática</h4>
									</div>
									<div class="col-md-12">
										<h4>REALIZAR nosso objetivo</h4>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>

			<a class="left" href="#myCarousel" role="button" data-slide="prev">
				<span class="logovo-carousel-control-left"><img id="img-logovo-navbar" src="img/button_left.png" height="170px" alt=""></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right" href="#myCarousel" role="button" data-slide="next">
				<span class="logovo-carousel-control-right"><img id="img-logovo-navbar" src="img/button_right.png" height="170px" alt=""></span>
				<span class="sr-only">Next</span>
			</a>


		</div>



		<!-- CAROUSEL MOBILE -->


		<div id="carousel-mobile" class="slider single-item">
			<div><div id="about-description" class="slide-carousel-mobile">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<img class="img-responsive center-block equation-img" src="img/icon_services.png" alt="">
							<img id="img-equation-mobile" class="img-responsive center-block" src="img/icon_services_mobile.png" width="200px" alt="">
						</div>
					</div>

					<div class="about-content">
						<div class="row">
							<div class="col-md-6">
								<p>
									<h4>A IMAGINADORIA representa, o meio pelo qual nós, imaginadores, tornamos real aquilo que você imagina.</h4>
								</p>
								<p>
									<h4>
										Estamos atentos para ouvir o que você têm a dizer para, então, decifrar suas reais necessidades.
									</h4>
								</p>
							</div>
							<div class="col-md-6">
								<p>
									<h4>
										Nos importamos com fatores pertinentes ao desenvolvimento dos projetos, como acessibilidade, segurança, usabilidade.
									</h4>
								</p>
								<p>
									<h4>
										Temos o compromisso de desenvolver produtos e conteúdos para web que sejam planejados de modo cuidadoso e sejam personalizados tendo em conta o que você precisa.
									</h4>
								</p>
							</div>
						</div>
					</div>

				</div>
			</div></div>
			<div><div id="" class="slide-carousel-mobile about-profiles">
				<div class="container">

					<div class="row">
						<div class="container">
							<div class="col-md-12">
								<div class="carousel-mobile-title">
									<h1>OS IMAGINADORES</h1>
								</div>
							</div>
						</div>
					</div>

					<div class="profiles-content-mobile">
						<div class="row">
							<div id="container-profile-eduardo-mobile" class="col-md-6">
								<a id="modal-eduardo-link" href="#animated-modal-eduardo">
									<img class="center-block profile-eduardo-closed-mobile" id="profile-eduardo-mobile" src="img/avatar_dudu.png" alt="">
								</a>
							</div>
							<div id="container-profile-paulo-mobile" class="col-md-6">
								<a id="modal-paulo-link" href="#animated-modal-paulo">
									<img class="center-block profile-paulo-closed-mobile" id="profile-paulo-mobile" src="img/avatar_ph.png" alt="">
								</a>
							</div>
						</div>
					</div>


				</div>
			</div></div>
			<div><div id="about-principles" class="slide-carousel-mobile">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="carousel-mobile-title">
								<h1>PRINCÍPIOS + AÇÕES</h1>
							</div>
						</div>
						<div class="principles-content">
							<div class="row">
								<div class="col-md-12">
									<h4>IMAGINAR nos motiva</h4>
								</div>
								<div class="col-md-12">
									<h4>PROJETAR é a nossa prática</h4>
								</div>
								<div class="col-md-12">
									<h4>REALIZAR nosso objetivo</h4>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div></div>
		</div>



	</div>



	<!-- MODAL -->


	<div id="animated-modal-paulo">
		<!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
		<div  id="" class="close-animated-modal-paulo button-modal">
			<img src="img/close-modal.png" class="img-responsive center-block" width="50" alt="">
		</div>

		<div class="">
			<div id="profile-paulo-description-mobile" class="">
				<div class="profile-paulo-description-content-mobile">
					<p>
						<h2>
							Paulo Henrique de Souza
						</h2>
					</p>
					<p class="profile-titulacao-mobile">
						Bacharel em Engenharia de Software pela Universidade Federal de Goiás.
					</p>
					<p>
						Minha atuação inicial foi no desenvolvimento de softwares (web e desktop) para a área da saúde.
					</p>
					<p>
						Em minhas experiências pessoal, acadêmica e profissional, estou em constante contato com várias tecnologias, estando apto tanto para o desenvolvimento de software desktop, quanto para o desenvolvimento web e mobile.
					</p>
					<p>
						Além disso, tenho conhecimento em diversas metodologias de desenvolvimento, o que me garante bom desempenho desde a criação e gestão dos projetos até a implementação dos produtos.
					</p>
				</div>
			</div>
		</div>
	</div>


	<div id="animated-modal-eduardo">
		<!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
		<div  id="" class="close-animated-modal-eduardo button-modal"> 
			<img src="img/close-modal.png" class="img-responsive center-block" width="50" alt="">
		</div>

		<div class="">
			<div id="profile-eduardo-description-mobile" class="">
				<div class="profile-eduardo-description-content-mobile">
					<p>
						<h2>
							Eduardo de Ávila
						</h2>
					</p>
					<p class="profile-titulacao-mobile">
						Mestre em Arte e Cultura Visual e graduado em Design Gráfico pela Universidade Federal de Goiás.
					</p>
					<p>
						Minha atuação profissional está centrada em diversas áreas de projeto e criação visual: design de identidade corporativa, design para web, design de informação, design editorial e design educacional.
					</p>
					<p>
						Leciono em cursos de graduação e pós-graduação nas áreas de Arte, Design e Comunicação.
					</p>
					<p>
						Também tenho experiência em educação a distância atuando no planejamento, produção e implantação de cursos em instituições como UFG, UnB, UEG e Sistema FIEG (SESI e SENAI).
					</p>
				</div>

			</div>
		</div>
	</div>




	<div id="services" class="container-fluid">

		<div class="row">
			<div class="col-md-12">
				<div id="accordion-introduction">
					<h1>O QUE REALIZAMOS PARA VOCÊ</h1>
					<h3>Oferecemos planos multi serviços e planos especiais conforme a sua necessidade</h3>
				</div>

			</div>
		</div>


		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			<div class="panel panel-default">
				<div id="accordion-heading-1" class="panel-heading accordion-collapse1" role="tab" id="headingOne">
					<h4 class="panel-title">
						<a class="underline_animate" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
							DESIGN + COMUNICAÇÃO WEB
						</a>
					</h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse accordion-collapse1" role="tabpanel" aria-labelledby="headingOne">
					<div class="panel-body">

						<div class="row">
							<div class="col-md-4">
								<img class="img-accordion center-block" src="img/icon_1.png" alt="">
							</div>
							<div class="col-md-8">
								<p>
									Acreditamos que o início do processo de elaboração de produtos e conteúdos para web requer atenção especial na etapa de desenvolvimento de projeto.
								</p>
								<p>
									Por isso, oferecemos serviços e consultorias em design de comunicação e design da informação para:
								</p>
								<p>
									<span>>  </span>Sistemas de identidade visual para empresas, eventos e produtos
								</p>
								<p>
									<span>>  </span>Marketing digital e de conteúdo para websites e redes sociais
								</p>
								<p>
									<span>>  </span>Interfaces de projetos educacionais online
								</p>
								<p>
									<span>>  </span>Publicações eletrônicas de livros, revistas, jornais e periódicos
								</p>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div id="accordion-heading-2" class="panel-heading accordion-collapse2" role="tab" id="headingTwo">
					<h4 class="panel-title">
						<a class="collapsed underline_animate" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							DESIGN + DESENVOLVIMENTO WEB
						</a>
					</h4>
				</div>
				<div id="collapseTwo" class="panel-collapse collapse accordion-collapse2" role="tabpanel" aria-labelledby="headingTwo">
					<div class="panel-body">

						<div class="row">
							<div class="col-md-4">
								<img class="img-accordion center-block" src="img/icon_2.png" alt="">
							</div>
							<div class="col-md-8">
								<p>
									Criamos projetos para diferentes contextos (comerciais, institucionais, pessoais) que envolvam design e desenvolvimento web, em estruturas como:
								</p>
								<p>
									<span>>  </span>Website institucional
								</p>
								<p>
									<span>>  </span>Landing page
								</p>
								<p>
									<span>>  </span>Portfolio
								</p>
								<p>
									<span>>  </span>Hotsite
								</p>
								<p>
									<span>>  </span>Blog
								</p>
								<p>
									<span>>  </span>E-commerce
								</p>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div id="accordion-heading-3" class="panel-heading accordion-collapse3" role="tab" id="headingThree">
					<h4 class="panel-title">
						<a class="collapsed underline_animate" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							GERENCIAMENTO + SUPORTE WEB
						</a>
					</h4>
				</div>
				<div id="collapseThree" class="panel-collapse collapse accordion-collapse3" role="tabpanel" aria-labelledby="headingThree">
					<div class="panel-body">
						<div class="row">
							<div class="col-md-4">
								<img class="img-accordion center-block" src="img/icon_3.png" alt="">
							</div>
							<div class="col-md-8">
								<p>Uma vez online, é importante garantir que o seu website mantenha-se atualizado e funcional. Para tal, conte concosco no gerenciamento e suporte web em:</p>
								<p>
									<span>>  </span>Atualização de conteúdos no website (textos, imagens, vídeos...)
								</p>
								<p>
									<span>>  </span>Adequação e redesign da interface do website
								</p>
								<p>
									<span>>  </span>Implementação de melhorias e correção de erros inesperados (bugs)
								</p>
								<p>
									<span>>  </span>Diagnósticos de segurança, para prevenir vulnerabilidades no código do website
								</p>
								<p>
									<span>>  </span>Manutenção do alojamento web e de e-mails
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<!--

	<div id="portfolio" class="container-fluid">
		<div class="col-md-4 col-sm-6 gray-client">
			<div id="client-chiquilin" class="client-item-container">
				<img class="img-responsive center-block client-item" src="img/portfolio1.png" alt="">
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<div id="client-catherine" class="client-item-container">
				<img class="img-responsive center-block client-item" src="img/portfolio2.png" alt="">
			</div>
		</div>
		<div class="col-md-4 col-sm-6 gray-client">
			<div id="client-dock" class="client-item-container">
				<img class="img-responsive center-block client-item" src="img/portfolio3.png" alt="">
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<div id="client-unati" class="client-item-container">
				<img class="img-responsive center-block client-item" src="img/portfolio4.png" alt="">
			</div>
		</div>
		<div class="col-md-4 col-sm-6 gray-client">
			<div id="client-leicouto" class="client-item-container">
				<img class="img-responsive center-block client-item" src="img/portfolio5.png" alt="">
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<div id="client-enges" class="client-item-container">
				<img class="img-responsive center-block client-item" src="img/portfolio6.png" alt="">
			</div>
		</div>
	</div>

-->






<div id="portfolio" class="container-fluid">

	<div class="col-md-4 col-sm-6 gray-client hover-bg">

		<a id="modal-portfolio-1" href="#animatedModal1">
			<div class="hover-text">
				<h5>+info</h5>
				<p class="lead">CHIQUILIN</p>
			</div>
		</a>

		<div class="square">
			<div class="content">
				<div class="table">
					<div class="table-cell">
						<img class="img-responsive center-block client-item rs" src="img/portfolio1.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-4 col-sm-6 hover-bg">

		<a id="modal-portfolio-2" href="#animatedModal2">
			<div class="hover-text">
				<h5>+info</h5>
				<p class="lead">ATELIER CATHERINE</p>
			</div>
		</a>

		<div class="square">
			<div class="content">
				<div class="table">
					<div class="table-cell">
						<img class="img-responsive center-block client-item rs" src="img/portfolio2.png" alt="">
					</div>
				</div>
			</div>
		</div>


	</div>

	<div class="col-md-4 col-sm-6 gray-client hover-bg">

		<a id="modal-portfolio-3" href="#animatedModal3">
			<div class="hover-text">
				<h5>+info</h5>
				<p class="lead">DOCK</p>
			</div>
		</a>

		<div class="square">
			<div class="content">
				<div class="table">
					<div class="table-cell">
						<img class="img-responsive center-block client-item rs" src="img/portfolio3.png" alt="">
					</div>
				</div>
			</div>
		</div>


	</div>

	<div class="col-md-4 col-sm-6 hover-bg">

		<a id="modal-portfolio-4" href="#animatedModal4">
			<div class="hover-text">
				<h5>+info</h5>
				<p class="lead">LEI COUTO</p>
			</div>
		</a>

		<div class="square">
			<div class="content">
				<div class="table">
					<div class="table-cell">
						<img class="img-responsive center-block client-item rs" src="img/portfolio5.png" alt="">
					</div>
				</div>
			</div>
		</div>


	</div>

	<div class="col-md-4 col-sm-6 gray-client hover-bg">

		<a id="modal-portfolio-5" href="#animatedModal5">
			<div class="hover-text">
				<h5>+info</h5>
				<p class="lead">UNATI</p>
			</div>
		</a>

		<div class="square">
			<div class="content">
				<div class="table">
					<div class="table-cell">
						<img class="img-responsive center-block client-item rs" src="img/portfolio4.png" alt="">
					</div>
				</div>
			</div>
		</div>


	</div>

	<div class="col-md-4 col-sm-6 hover-bg">

		<div class="hover-bg">
			<a id="modal-portfolio-6" href="#animatedModal6">
			<div class="hover-text">
				<h5>+info</h5>
				<p class="lead">ENGES '16</p>
			</div>
		</a>

		<div class="square">
			<div class="content">
				<div class="table">
					<div class="table-cell">
						<img class="img-responsive center-block client-item rs" src="img/portfolio6.png" alt="">
					</div>
				</div>
			</div>
		</div>
		</div>

		


	</div>


</div>



<!-- MODAL PORTFOLIO-->

<div id="animatedModal1" class="animated-modal-portfolio">
	<!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
	<div  id="" class="close-animatedModal1 button-modal"> 
		<img src="img/close-modal.png" class="close-button-modal-portfolio" width="50" alt="">
	</div>

	<div class="row">
		<div class="col-md-4">
			<div class="client-name-portfolio">
				<h2>CHIQUILIN</h2>
				<h3>brinquedos educativos</h3>
			</div>

			<div class="portfolio-item-service">
				<img class="center-block" src="img/icon_services_portfolio.png" width="60%" alt="">
				<h2>SERVIÇOS</h2>
				<h3>Design de identidade visual</h3>
				<h3>Projeto de ilustração</h3>
			</div>

		</div>

		<div class="col-md-8">
			<div class="portfolio-item-image-desktop">
				<img class="img-responsive" src="img/chiquilin_1.png" alt="">
			</div>
			<div class="portfolio-item-image-mobile">
				<img class="img-responsive" src="img/chiquilin_2.png" alt="">
			</div>
		</div>
	</div>
</div>

<div id="animatedModal2" class="animated-modal-portfolio">
	<!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
	<div  id="" class="close-animatedModal2 button-modal"> 
		<img src="img/close-modal.png" class="close-button-modal-portfolio" width="50" alt="">
	</div>

	<div class="row">
		<div class="col-md-4">
			<div class="client-name-portfolio">
				<h2>ATELIER CATHERINE</h2>
				<h3>casa de histórias e sabores</h3>
			</div>

			<div class="portfolio-item-service">
				<img class="center-block" src="img/icon_services_portfolio.png" width="60%" alt="">
				<h2>SERVIÇOS</h2>
				<h3>Design de identidade visual</h3>
				<h3>Marketing de conteúdo</h3>
			</div>

		</div>

		<div class="col-md-8">
			<div class="portfolio-item-image-desktop">
				<img class="img-responsive" src="img/atelier_catherine_1.png" alt="">
			</div>
			<div class="portfolio-item-image-mobile">
				<img class="img-responsive" src="img/atelier_catherine_2.png" alt="">
			</div>
		</div>
	</div>
</div>


<div id="animatedModal3" class="animated-modal-portfolio">
	<!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
	<div  id="" class="close-animatedModal3 button-modal">
		<img src="img/close-modal.png" class="close-button-modal-portfolio" width="50" alt="">
	</div>

	<div class="row">
		<div class="col-md-4">
			<div class="client-name-portfolio">
				<h2>DOCK</h2>
				<h3>burger e beer</h3>
			</div>

			<div class="portfolio-item-service">
				<img class="center-block" src="img/icon_services_portfolio.png" width="60%" alt="">
				<h2>SERVIÇOS</h2>
				<h3>Design de identidade visual</h3>
			</div>

		</div>

		<div class="col-md-8">
			<div class="portfolio-item-image-desktop">
				<img class="img-responsive" src="img/dock_1.png" alt="">
			</div>
			<div class="portfolio-item-image-mobile">
				<img class="img-responsive" src="img/dock_2.png" alt="">
			</div>
		</div>
	</div>
</div>


<div id="animatedModal4" class="animated-modal-portfolio">
	<!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
	<div  id="" class="close-animatedModal4 button-modal"> 
		<img src="img/close-modal.png" class="close-button-modal-portfolio" width="50" alt="">
	</div>

	<div class="row">
		<div class="col-md-4">
			<div class="client-name-portfolio">
				<h2>LEI COUTO</h2>
				<h3>contabilidade</h3>
			</div>

			<div class="portfolio-item-service">
				<img class="center-block" src="img/icon_services_portfolio.png" width="60%" alt="">
				<h2>SERVIÇOS</h2>
				<h3>Design de identidade visual</h3>
				<h3>Design e desenvolvimento web</h3>
			</div>

		</div>

		<div class="col-md-8">
			<div class="portfolio-item-image-desktop">
				<a href="http://www.leicouto.com" target="blank">
					<img class="img-responsive" src="img/lei_couto_1.png" alt="">
				</a>
			</div>
			<div class="portfolio-item-image-mobile">
				<a href="http://www.leicouto.com" target="blank">
					<img class="img-responsive" src="img/lei_couto_2.png" alt="">
				</a>
			</div>
		</div>
	</div>
</div>


<div id="animatedModal5" class="animated-modal-portfolio">
	<!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
	<div  id="" class="close-animatedModal5 button-modal">
		<img src="img/close-modal.png" class="close-button-modal-portfolio" width="50" alt="">
	</div>

	<div class="row">
		<div class="col-md-4">
			<div class="client-name-portfolio">
				<h2>UNATI</h2>
				<h3>universidade aberta a terceira idade</h3>
			</div>

			<div class="portfolio-item-service">
				<img class="center-block" src="img/icon_services_portfolio.png" width="60%" alt="">
				<h2>SERVIÇOS</h2>
				<h3>Design de identidade visual</h3>
				<h3>Design e desenvolvimento web</h3>
			</div>

		</div>

		<div class="col-md-8">
			<div class="portfolio-item-image-desktop">
				<a href="http://www.leicouto.com" target="blank">
					<img class="img-responsive" src="img/unati_1.png" alt="">
				</a>
			</div>
			<div class="portfolio-item-image-mobile">
				<a href="http://www.leicouto.com" target="blank">
					<img class="img-responsive" src="img/unati_2.png" alt="">
				</a>
			</div>
		</div>
	</div>
</div>



<div id="animatedModal6" class="animated-modal-portfolio">
	<!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
	<div  id="" class="close-animatedModal6 button-modal">
		<img src="img/close-modal.png" class="close-button-modal-portfolio" width="50" alt="">
	</div>

	<div class="row">
		<div class="col-md-4">
			<div class="client-name-portfolio">
				<h2>ENGES'16</h2>
				<h3>encontro científico de gerontologia social da puc goiás</h3>
			</div>

			<div class="portfolio-item-service">
				<img class="center-block" src="img/icon_services_portfolio.png" width="60%" alt="">
				<h2>SERVIÇOS</h2>
				<h3>Design de identidade visual</h3>
				<h3>Design e desenvolvimento web</h3>
			</div>

		</div>

		<div class="col-md-8">
			<div class="portfolio-item-image-desktop">
				<a href="http://www.pucgoias.edu.br/enges2016" target="blank">
					<img class="img-responsive" src="img/enges_1.png" width="100%" alt="">
				</a>
			</div>
			<div class="portfolio-item-image-mobile">
				<a href="http://www.pucgoias.edu.br/enges2016" target="blank">
					<img class="img-responsive" src="img/enges_1.png" alt="">
				</a>
			</div>
		</div>
	</div>
</div>





<div id="contact" class="container">

	<div class="row">
		<div class="col-md-12">
			<div class="logo-contact-area">
				<img id="logovo-contact-desktop" class="img-responsive center-block" src="img/lovotipo_imaginadoria.png" width="300px" alt="">
				<img id="logovo-contact-mobile" class="img-responsive center-block" src="img/lovo_imaginadoria_vertical_m.png" width="400px" alt="">
			</div>
		</div>
	</div>


	<div class="row">
		<div class="col-md-6">
		<div id="email-form-container">
			<div id="email-form" class="email-form">
				<form id="contact-form" action="send-email.php" method="post" accept-charset="UTF-8" data-toggle="validator" role="form">
					<div class="form-group">
						<input type="text" id="iname" name="name-input" data-required-error="Por favor, insira um nome." required><span class="highlight"></span><span class="bar"></span>
						<label>Nome</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="form-group">
						<input type="email" id="iemail" name="email-input" data-error="Por favor, informe um e-mail correto." required><span class="highlight"></span><span class="bar"></span>
						<label>Email</label>
						<div class="help-block with-errors"></div>
					</div>
					<div class="form-group is-floating-label">
						<textarea type="text" id="imessage" name="message-input" rows="5" data-error="Por favor, insira uma mensagem" required></textarea><span class="highlight"></span><span class="bar"></span>
						<label>Mensagem</label>
						<div class="help-block with-errors"></div>
					</div>
					<button type="submit" class="button-form">ENVIAR<span class="button-form-arrow">></span>
						<div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
					</button>
				</form>
			</div>
			<div id="send-email-success" style="display: none;">
				<div class="">
					<h1>MENSAGEM ENVIADA COM SUCESSO!</h1>
				</div>
			</div>
			<div id="send-email-error" style="display: none;">
				<div class="">
					<h1>FALHA AO ENVIAR MENSAGEM!</h1>
				</div>
			</div>
			<div id="send-email-animation" style="display: none;">
				<div id="send-email-waiting">
					<div id="sending-email-label" class="animated infinite flash">
						<h1>ENVIANDO</h1>
					</div>
				</div>
			</div>
		</div>


			
		</div>
		<div class="col-md-6">
			<div class="contacts">

				<div class="contact-area-message">
					<h4>O que você imagina? Conte-nos!</h4>
				</div>

				<div class="contact-area">
					<div class="contact-area-email">
						<img src="img/icon_email.png" width="40">
						<h4>info@imaginadoria.com</h4><br>
					</div>

					<div class="contact-area-phone">
						<img src="img/icon_phone.png" width="40">

						<h4>+55 (62) 9 8114-7969</h4>
						<h4>+55 (62) 9 8131-1532</h4><br><br>
					</div>
				</div>
				<div class="social-media-area">
					<a class="icon-social-media" href="http://www.facebook.com/imaginadoria" target="blank"><img src="img/icon_facebook.png" height="60" alt=""></a>
					<a class="icon-social-media" href="http://www.instagram.com/imaginadoria" target="blank"><img src="img/icon_instagram.png" height="60" alt=""></a>
					<a class="icon-social-media" href="http://www.linkedin.com/company/imaginadoria" target="blank"><img src="img/icon_linkedin.png" height="60" alt=""></a>
					<a class="icon-social-media" href="http://www.twitter.com/imaginadoria" target="blank"><img src="img/icon_twitter.png" height="60" alt=""></a>
				</div>
			</div>
		</div>
	</div>
</div>

<footer>
	<div class="footer">
		<p>© Imaginadoria. Todos os direitos reservados.</p>
	</div>
</footer>






<script type="text/javascript" src="js/jquery.touchSwipe.min.js" charset="utf-8"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script src="js/animatedModal.min.js"></script>

</body>
</html>