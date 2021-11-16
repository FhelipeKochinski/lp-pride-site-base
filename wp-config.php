<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'lp-pride-engenharia' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'kgYA#hb(FL-Q3$A)&ho Koc*@ |gRL#s,3tE=$Kn;.2B#8g3pUoresT^CdVj>OsP' );
define( 'SECURE_AUTH_KEY',  '@OH9q^y?cz}{(#TO4<+VX#?G#rA[1ca=a~S`tF!_CNYN!LimT?jzf:R;:ExmRIp<' );
define( 'LOGGED_IN_KEY',    'G*)0y(+tB^z!zm+$g4XlN8o9kRcc]sy2U(.hN6h<H*m1`8D&Lp1-:{9u~r(i~g/?' );
define( 'NONCE_KEY',        '>cR6R-U1|J<)Ks5TIXW&+#n%aC~H<0u,6Hx(+Bv1~:@_UAI~PCa3ArU)Q.XH?Q;E' );
define( 'AUTH_SALT',        'MBducq,(89/.*b/3(].|Vb/u[Ok8*PlN(;(s/0b(oUP|22k+{;zxp=DPn#eA2t|f' );
define( 'SECURE_AUTH_SALT', 'xD+OPVL1Ofnn:Ul_lmA^f Mek+R<*f.2b y$CGEg>_y3-EvJZ7.^{Cke;qP!@RS7' );
define( 'LOGGED_IN_SALT',   'aBeTQawxo9b.un6L*B#^L|wODq41MF2lFKNL|g`E8}af?$Rj%:|fcdrP?h ~wBTA' );
define( 'NONCE_SALT',       'GV+]p+gR[(.1e}.i^&g Qk(;.4b+9z%m?*pvSDjM../A#[8r=Fd#lyYqF&H9(bzu' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'lpe_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
