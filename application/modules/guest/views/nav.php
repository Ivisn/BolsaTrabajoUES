
<body data-spy="scroll" data-target=".navbar-collapse">
<!-- navigation -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			
			<a href="#home" ><img src="<?=base_url()?>public/images/logoBE.png" ></a>
			<!--<a href="#home" class="navbar-brand smoothScroll">Buscando Empleo</a>
			<a href="#" class="navbar-brand"><img src="img/logochico.png" style="margin-top:-15px;">-->
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#service" class="smoothScroll">NOSOTROS</a></li>
				<li><a href="#about" class="smoothScroll">EMPRESA</a></li>
				<li><a href="#portfolio" class="smoothScroll">ASPIRANTE</a></li>
				<li><a href="#" id="loginform" class="smoothScroll">USUARIO</a></li>
				    <div class="login">
				      <div class="arrow-up"></div>
				      <div class="formholder">
				        <div class="randompad">
				           <fieldset>
				             <a href="<?=base_url()?>auth/logout"><li>Cerrar sesión</li></a>
				              <a href="<?=base_url()?>auth/forgot_password"<li>Cambiar contraseña</li></a>
				           </fieldset>
				        </div>
				      </div>
				    </div>
				
			</ul>
		</div>
	</div>
</div>	

<!-- home section -->
<div id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-6 col-md-6 col-sm-offset-6 col-sm-6">
				<h2>Bienvenido a</h2>
				<h1><strong>Buscando Empleo</strong></h1>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
				<a href="#service" class="btn btn-default smoothScroll">Ingresa</a>
			</div>
		</div>
	</div>
</div>
