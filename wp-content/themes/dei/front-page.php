<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dei
 */

get_header(); ?>
<?php get_sidebar(); ?>

	<div id="main-content" class="col-sm-12 col-md-8 col-lg-8">
	<div class="row page-content-wrapper body-content">
		<div class="page-content">
			<div class="content">
				<div class="col-md-offset-1 col-md-11 col-lg-offset-2 col-lg-9">
					<div class="page-content-text">
						<span class="first-letter visible-lg"></span>
							<p>Nesses 47 anos de existência, o Departamento de Engenharia Industrial da PUC-Rio (DEI) vem continuamente se especializando em temas abordados desta engenharia, por meio do esforço de seus professores, no sentido de oferecer ensino e orientação de excelência tanto em nível de graduação quanto de pós-graduação, e realizar pesquisas acadêmicas cujos resultados estão vinculados à formação de recursos humanos e que são publicadas em periódicos científicos qualificados de grande penetração nacional e internacional.</p>
							<p>O DEI oferece, no nível de Graduação, o curso de Engenharia de Produção, buscando preparar o aluno para uma atuação global e dar-lhe uma perspectiva socioeconômica, estimulando o intercâmbio internacional com conceituadas instituições de ensino no exterior, e recebendo alunos estrangeiros. Atualmente, a graduação em Engenharia de Produção é responsável por quase a metade dos engenheiros que a PUC-Rio forma anualmente, os quais são absorvidos avidamente pelo mercado.</p>
							<p>Os cursos de pós-graduação do DEI, abrangendo mestrado acadêmico e profissional, e doutorado em Engenharia de Produção, dividindo-se em três áreas de concentração: Finanças e Análise de Investimentos, Gerência da Produção e Transporte e Logística, têm como objetivo atender à demanda de formação de pesquisadores e de pessoal altamente qualificado.</p>
							<p>O DEI dispõe de uma moderna rede de microcomputadores e um conjunto de software sofisticado e variado à disposição dos alunos e pesquisadores, permitindo a utilização de bancos de dados e métodos quantitativos para pesquisa e treinamento.</p>
					</div>		
				</div>
			</div>

			<!-- <script src="js/home.js"></script> -->

		</div>
	</div>
</div>

<?php get_footer();?>
