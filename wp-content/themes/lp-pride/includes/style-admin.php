<?php

/* Stylo da página de login */

function login_logo() { ?>
	<style type="text/css">
		body.login {
			background: #1B2E58;
		}
		body.login div#login h1 a {
			background-image: url(<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/05/logo-pride-engenharia-admin.png);
			background-size: 250px 102px;
			height: 102px;
    		width: 250px;
		}
	</style>
<?php }
add_action( 'login_enqueue_scripts', 'login_logo' );
?>