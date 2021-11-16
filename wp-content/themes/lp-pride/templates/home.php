<?php
/**
 * Template Name: Home
 */
?>

<?php get_header() ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home.css">

<section id="paginaInicial">
	
	<!-- Banner Principal -->
	<div id="bannerPrincipal" style="background: url('<?= get_field('imagem_de_fundo_banner_principal', 7) ?>')">

		<!-- Box Transparente -->
		<div class="boxTransparente"></div>

		<div class="container">

			<figure id="logo">
				<?php getImagemObj(get_field('logo_banner_principal', 7)['sizes'], '2048x2048', 'Pride Engenharia') ?>
			</figure>

			<!-- Bloco Texto -->
			<div class="boxTexto">
				<div class="text">
					<?= get_field('texto_banner_principal', 7) ?>
				</div>
				<a href="#nossosServicos">
					<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/04/ic-down.png" alt="Seta">
				</a>
			</div>

		</div>
	</div>

	<!-- Lista de Serviços -->
	<div id="nossosServicos">
		<div class="container">

			<?php $rows = get_field('lista_de_servicos'); ?>

			<?php if( $rows ) { ?>

				<?php $cont = 1; ?>

				<?php foreach( $rows as $row ) { ?>

					<div class="boxServico">

						<!-- Imagem -->
						<figure class="col-sm-6 imagem <?= $cont % 2 == 0 ? 'fleft' : 'fright' ?>">
							<?php getImagemObj($row['imagem']['sizes'], '2048x2048', $row['texto']) ?>
						</figure>

						<!-- Texto -->
						<div class="col-sm-6 texto <?= $cont % 2 == 0 ? 'fright' : 'fleft' ?>">

							<h2><?= $row['titulo'] ?></h2>

							<div class="textoInterno"><?= $row['texto'] ?></div>

						</div>

					</div>

					<?php $cont++; ?>

				<?php } ?>

			<?php } ?>

		</div>
	</div>

	<!-- Sobre nós -->
	<div class="sobreNos" <?php if (get_field('imagem_sobre_nos')) { ?> style="background-image: url('<?= get_field('imagem_sobre_nos') ?>')" <?php } ?>>
		<div class="container">

			<!-- Imagem -->
			<figure class="col-sm-6 imagemOculta">
				<img src="<?= get_field('imagem_sobre_nos') ?>" alt="Sobre Nós">
			</figure>
		
			<!-- Texto -->
			<div class="col-sm-6 texto">
				<h2><?= get_field('titulo_sobre_nos') ?></h2>
				<div class="textoInterno">
					<?= get_field('texto_sobre_nos') ?>
				</div>
			</div>
		
		</div>
	</div>

	<!-- Números -->
	<div class="numeros">
		
		<figure class="col-sm-6 imgPrincipal">
			<?php getImagemObj(get_field('imagem_principal_nossos_numeros')['sizes'], '2048x2048', $row['numero'] . $row['descricao']) ?>
		</figure>

		<div class="col-sm-6 texto">

			<!-- Numeros -->
			<div class="col-sm-6">

				<?php $rows = get_field('lista_de_numeros'); ?>

				<?php if( $rows ) { ?>

					<ul>

						<?php foreach( $rows as $row ) { ?>

							<li>
								<p><?= $row['numero'] ?></p>
								<span><?= $row['descricao'] ?></span>
							</li>

						<?php } ?>

					</ul>

				<?php } ?>

			</div>

			<!-- Mapa -->
			<figure class="col-sm-6">
				<?php getImagemObj(get_field('imagem_mapa_nossos_numeros')['sizes'], '2048x2048', $row['numero'] . $row['descricao']) ?>
			</figure>

		</div>
	</div>
	
	<!-- Perfil Corporativo -->
	<div id="perfilCorporativo">
		<div class="container">

			<h2>PERFIL CORPORATIVO</h2>

			<?php $rows = get_field('lista_perfil_corporativo'); ?>

			<?php if( $rows ) { ?>

				<?php $cont = 1 ?>

				<ul>

					<?php foreach( $rows as $row ) { ?>

						<li class="col-sm-4">
							<div class="boxInterno">
								<span><?= $cont ?>.</span>
								<h3><?= $row['titulo'] ?></h3>
								<p><?= $row['texto'] ?></p>
							</div>
						</li>

						<?php $cont++ ?>

					<?php } ?>

				</ul>

			<?php } ?>

		</div>
	</div>

	<!-- Projetos -->
	<div id="projetosSlider">
		<div class="container">

			<h2>PROJETOS</h2>

			<?php $rows = get_field('lista_de_projetos'); ?>

			<?php if( $rows ) { ?>

				<ul class="slider-for">

					<?php foreach( $rows as $row ) { ?>

						<li>

							<!-- Imagem -->
							<figure>
								<?php getImagemObj($row['imagem']['sizes'], 'projeto', $row['titulo']) ?>
							</figure>

							<h3><?= $row['titulo'] ?></h3>

						</li>

					<?php } ?>

				</ul>

			<?php } ?>


			<?php if( $rows ) { ?>

				<ul class="slider-nav">

					<?php foreach( $rows as $row ) { ?>

						<li>
							<figure>
								<?php getImagemObj($row['imagem']['sizes'], 'projeto-thumb', $row['titulo']) ?>
							</figure>
						</li>

					<?php } ?>

				</ul>

			<?php } ?>

		</div>
	</div>

	<!-- Fale Conosco -->
	<div id="faleConosco">
		<div class="container">

			<h2>Fale conosco!</h2>

			<div class="col-sm-2"></div>

			<div class="col-sm-8">

				<div class="formulario">
					<?= do_shortcode('[contact-form-7 id="73" title="Fale Conosco"]') ?>
				</div>

				<span class="texto">Prometemos não utilizar suas informações de contato para enviar qualquer tipo de SPAM.</span>

			</div>

		</div>
	</div>


</section>

<?php get_footer() ?>