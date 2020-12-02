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
define( 'DB_NAME', 'meubanco' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         '7nIs6c&ERAR?5_ecsSXRAx=!E,d*Lz@X)z/bgTA6e_ae}hx?AJJ;t~i2(A@aaO,}' );
define( 'SECURE_AUTH_KEY',  '1)1bvsK) _sUfOH.Zcbup>[SXf5bAwBa8O]JFAuN]]g0&#AwEHgJkz3O6)]<g?PB' );
define( 'LOGGED_IN_KEY',    '9IiZT0VLFT<^8n#}1v/N3?ApxnJ|82HKYM[X4k;K1LXLS]Mo*yyT+JZNkLrfQT]<' );
define( 'NONCE_KEY',        'WvOy>)tKN=T{*jr3n]Ey5rPZw>g&}F#sefE2bN6=FML;#q94h_utfTbyPw!|elSl' );
define( 'AUTH_SALT',        '_p|-O<.<;S7n)x>Yo}v~&u@H!734Zy]~u$z(Uzg>.zU:`6>F^l; {hDZny~a.W $' );
define( 'SECURE_AUTH_SALT', 'Fo8@iLKyivb_R$ZT&/uPr}gwnYcl!T3bui7%RVBbhj^ZO:+%f`1ha/&p>gCG^v*u' );
define( 'LOGGED_IN_SALT',   'I^sHZRg;]>,BV@svmQqWW0&T`{B%G^|&wEDb!L`8))E?x& Gi-FZ|kgS7S`2j0go' );
define( 'NONCE_SALT',       'Tae9qWxM<C=N1g: GF-kg B?Hdc+Md3jeDW9_U)&xT70ua>^6MRg}[I/^KsA5=@V' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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

define( 'FS_METHOD', 'direct' );

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
