<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IMAGINADORIA</title>

	<link rel="icon" type="image/png" href="img/lovo_favicon.ico"/>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/animate.min.css" />
	<link rel="stylesheet" href="css/style.css">

	<script src="js/jquery-3.1.1.min.js" charset="utf-8"></script>
	<script src="js/bootstrap.min.js" charset="utf-8"></script>
	<script src="js/bootstrapValidator.js" charset="utf-8"></script>
	<script src="js/jquery.visible.min.js" charset="utf-8"></script>
	<script src="js/jquery.appear.js" charset="utf-8"></script>
	<script src="js/noframework.waypoints.min.js"></script>
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
			    

			    
						<a href="#" title="about" id="button-top-mobile" class="navbar-brand logo-hidden">
							<img src="img/seta_menu_2.png" height="50px" width="50px" alt="">
						</a>

						-->
					

			    <div  class="responsive-navbar-button">
			    	<span class="cls"></span>
			    	<span>
			    		<ul class="sub-menu ">
			    			<li>
			    				<a href="#myCarousel" title="about">PERFIL</a>
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
							<img id="img-logovo-navbar" src="img/logovo.png" height="80px" width="65.59" alt="">
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

			<div id="about-profiles" class="item">
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
								<img class="center-block profile-eduardo-closed" id="profile-eduardo" src="img/avatar_eduardo.png" height="300px" alt="" onclick="open_eduardo_profile()">
							</div>
							<div id="profile-eduardo-description" class="col-md-6" style="display: none;">
								<div class="profile-eduardo-description-content">
									<p>
										<h2>
											Eduardo de Ávila
										</h2>
									</p>
									<p>
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
									<p>
										Bacharel em Engenharia de Software pela Universidade Federal de Goiás.
									</p>
									<p>
										Minha atuação inicial foi numa empresa no desenvolvimento de software para avaliações físicas.
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
								<img class="center-block profile-paulo-closed" id="profile-paulo" src="img/avatar_paulo.png" height="300px" alt="" onclick="open_paulo_profile()">
							</div>
						</div>
					</div>

					<div class="profiles-content-mobile">
						<div class="row">
							<div id="container-profile-eduardo-mobile" class="col-md-6">
								<a id="modal-eduardo-link" href="#animated-modal-eduardo">
									<img class="center-block profile-eduardo-closed-mobile" id="profile-eduardo-mobile" src="img/avatar_eduardo.png" alt="">
								</a>
							</div>
							<div id="container-profile-paulo-mobile" class="col-md-6">
								<a id="modal-paulo-link" href="#animated-modal-paulo">
									<img class="center-block profile-paulo-closed-mobile" id="profile-paulo-mobile" src="img/avatar_paulo.png" alt="">
								</a>
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
					<p>
						Bacharel em Engenharia de Software pela Universidade Federal de Goiás.
					</p>
					<p>
						Minha atuação inicial foi numa empresa no desenvolvimento de software para avaliações físicas.
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
					<p>
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


	<div id="portfolio" class="container-fluid">
		<div class="col-md-4 col-sm-6 gray-client">
			<div id="client-chuiquilin">
				<img class="img-responsive center-block client-item" src="img/portfolio_1.svg" height="33%" alt="">
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<div id="client-catherine">
				<img class="img-responsive center-block client-item" src="img/portfolio_2.svg" height="33%" alt="">
			</div>
		</div>
		<div class="col-md-4 col-sm-6 gray-client">
			<div id="client-dock">
				<img class="img-responsive center-block client-item" src="img/portfolio_3.svg" height="33%" alt="">
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<div id="client-unati">
				<img class="img-responsive center-block client-item" src="img/portfolio_4.svg" height="33%" alt="">
			</div>
		</div>
		<div class="col-md-4 col-sm-6 gray-client">
			<div id="client-leicouto">
				<img class="img-responsive center-block client-item" src="img/portfolio_5.svg" height="33%" alt="">
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<div id="client-enges">
				<img class="img-responsive center-block client-item" src="img/portfolio_6.svg" height="33%" alt="">
			</div>
		</div>
	</div>



	<div id="contact" class="container">

		<div class="row">
			<div class="col-md-12">
				<div class="logo-contact-area">
					<img id="logovo-contact-desktop" class="img-responsive center-block" src="img/lovotipo_imaginadoria.png" width="400px" alt="">
					<img id="logovo-contact-mobile" class="img-responsive center-block" src="img/lovo_imaginadoria_vertical_m.png" width="400px" alt="">
				</div>
			</div>
		</div>


		<div class="row">
			<div class="col-md-6">
				<div class="email-form">
					<form action="send-email.php" method="post" accept-charset="UTF-8">
						<div class="group">
							<input type="text" name="name-input"><span class="highlight"></span><span class="bar"></span>
							<label>Nome</label>
						</div>
						<div class="group">
							<input type="email" name="email-input"><span class="highlight"></span><span class="bar"></span>
							<label>Email</label>
						</div>
						<div class="group">
							<textarea type="text" name="message-input" rows="5"></textarea><span class="highlight"></span><span class="bar"></span>
							<label>Mensagem</label>
						</div>
						<button type="submit" class="button-form">ENVIAR<span class="button-form-arrow">></span>
							<div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
						</button>
					</form>
				</div>
			</div>
			<div class="col-md-6">
				<div class="contacts">

					<div class="contact-area">
						<h4>info@imaginadoria.com</h4><br>
						<h4>+55 (62) 9 8114-7969</h4>
						<h4>+55 (62) 9 8131-1532</h4><br><br>
					</div>
					<div class="social-media-area">
						<a class="icon-social-media" href="" target="blank"><img src="img/icon_facebook.png" height="60" alt=""></a>
						<a class="icon-social-media" href="" target="blank"><img src="img/icon_instagram.png" height="60" alt=""></a>
						<a class="icon-social-media" href="" target="blank"><img src="img/icon_linkedin.png" height="60" alt=""></a>
						<a class="icon-social-media" href="" target="blank"><img src="img/icon_twitter.png" height="60" alt=""></a>
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




	<script src="js/jquery-3.1.1.min.js" charset="utf-8"></script>
	<script src="js/animatedModal.min.js"></script>

</body>
</html>