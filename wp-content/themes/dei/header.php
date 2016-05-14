<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dei
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Styles -->
	<link rel="stylesheet" href="http://localhost/wp-dei/wp-content/themes/dei/css/bootstrap.min.css">
	<link href="http://localhost/wp-dei/wp-content/themes/dei/addons/smartmenus/addons/bootstrap/jquery.smartmenus.bootstrap.css" rel="stylesheet">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>

	


	
	<script src="https://use.typekit.net/zuq7yqr.js"></script>
	<script>
		try{
			Typekit.load({ 
				async: true 
			});
		}catch(e){}
	</script>
</head>

<body <?php body_class(); ?>>
	<div id="page-wrap" class="container-fluid">
		<div id="header-wrap" class="row">
			<header>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<div id="puc-logo"></div>
					<div id="acronimo"></div>
				</div>
				<div class="col-xs-12 col-sm-12 responsive-layout-sm">
					<nav class="navbar navbar-default">
					  <div class="container-fluid">
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					      <a class="navbar-brand" href="#">Menu</a>
					    </div>
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      <ul class="nav navbar-nav">
					        <li onclick="carregar('home.html', 'departamento')" href="#departamento">
					        	<a href="#">Departamento <span class="sr-only">(current)</span></a>
					        </li>
					        <li class="dropdown">
					          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ensino <span class="caret"></span></a>
					          <ul class="dropdown-menu">
					            <li><a href="#">Graduação</a></li>

					            <li class="dropdown-submenu">
					            	<a>Pós Graduação<span class="caret"></span></a>
					            	<ul class="dropdown-menu">
					            		<li onclick="carregar('mestradoacademico.html', 'mestrado academico')"><a href="#">Mestrado Acadêmico</a></li>
								        <li><a href="#">Mestrado Profissional</a></li>
								        <li><a href="#">Doutorado</a></li>
					            	</ul>
					            </li>
					            <li><a href="#">Extensão</a></li>
					          </ul>
					        </li>
					        <li class="dropdown">
					          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pesquisa <span class="caret"></span></a>
					          <ul class="dropdown-menu">
					            <li><a href="#">Finanças e Análise de Investimentos</a></li>
					            <li><a href="#">Gerência da Produção</a></li>
					            <li><a href="#">Transporte e logística</a></li>
					          </ul>
					        </li>
					        <li onclick="carregar('equipe.html', 'equipe')"><a href="#">Equipe</a></li>
					        <li onclick="carregar('noticias.html', 'noticias')"><a href="#">Notícias</a></li>
					        <li onclick="carregar('contato.html', 'contato')"><a href="#">Contato</a></li>
					      </ul>
					    </div>
					  </div>
					</nav>
				</div>
				<div id="bgimage" class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
					<h1 class="text-uppercase page-title"><?php the_title()?></h1>	
				</div>
			</header>	
		</div> <!-- Header End -->



		<div id="content-wrap" class="row">
