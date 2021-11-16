<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css">

<footer id="footer">
	<div class="container">
		
		<!-- Logo -->
		<figure class="col-sm-4 logoRodape">
			<?php getImagemObj(get_field('logo_rodape')['sizes'], '2048x2048', 'Pride') ?>
		</figure>

		<!-- Texto -->
		<div class="col-sm-4 texto">
			<?= get_field('texto_central_rodape'); ?>
		</div>

		<!-- Selos -->
		<div class="col-sm-4 selos">

			<?php $rows = get_field('selos_rodape'); ?>

			<?php if( $rows ) { ?>

				<?php foreach( $rows as $row ) { ?>

					<figure>
						<?php getImagemObj($row['imagem']['sizes'], 'projeto', $row['titulo']) ?>
					</figure>

				<?php } ?>

			<?php } ?>

		</div>

	</div>	
</footer>

<!-- Whatsapp Fixo -->
<?php if (get_field('whatsapp', 7)) { ?>
	<div id="whatsappFixo">
		<div class="container">
			<span>Precisando de ajuda? Converse com a gente aqui:</span>
			<a href="https://api.whatsapp.com/send?phone=55<?= linkTelefone(get_field('whatsapp', 7)) ?>" target="_blank">
				<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/04/whatsapp.png" alt="Whatsapp">
			</a>
		</div>
	</div>
<?php } ?>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">

<script src="<?php echo get_template_directory_uri(); ?>/assets/scripts.js"></script>

<?php wp_footer(); ?>

</body>
</html>
