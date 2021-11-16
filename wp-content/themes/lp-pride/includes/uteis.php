<?php

/* Monta a página de configurações */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(
		array(
			'page_title' 	=> 'Configurações do Site',
			'menu_title'	=> 'Config. Site',
			'menu_slug' 	=> 'configuracoes-tema',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		)
	);
}

/* Retorna Telefone para link */
function linkTelefone($telefone) {
	$telefone = str_replace('(', '', $telefone);
	$telefone = str_replace(')', '', $telefone);
	$telefone = str_replace(' ', '', $telefone);
	$telefone = str_replace('-', '', $telefone);
	echo '0' . $telefone;
}

/* Desabilita os Emoji's */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
	
}
add_action( 'init', 'disable_emojis' );

/* Desabilita os Emoji's do Editor */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

// Retorna a imagem de objeto

function getImagemObj ($imagem, $tamanho = 'thumbnail', $alt = '') {

	// Verifica se tem suporte a WebP
	$result = '<img src="' . $imagem[$tamanho] . '" alt="' . $alt . '" width="' . $imagem[$tamanho . '-width'] . '" height="' . $imagem[$tamanho . '-height'] . '" />';

	echo $result;

}

// Retorna a imagem de URL

function getImagem ($imagem, $tamanho = 'thumbnail', $alt = '') {

	$imagemObj = wp_get_attachment_image_src($imagem, $tamanho);

	$result .= '<img src="' . $imagemObj[0] . '" alt="' . $alt . '" width="' . $imagemObj[1] . '" height="' . $imagemObj[2] . '" />';

	echo $result;

}

?>