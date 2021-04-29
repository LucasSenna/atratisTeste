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
define( 'DB_NAME', 'atratis' );

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
define( 'AUTH_KEY',         '2L>TrEg1pO##44c)(qjzHt,s~`:tZ<GPb%0nB]ezqrmNC^WSUH:8uV>Zb27E<YWZ' );
define( 'SECURE_AUTH_KEY',  'l_)>1%0|/Eumm3$BCA*trE93I{=(>fsF%%siPZ2-|_L;7n))bWH] =nQHJc?-a}V' );
define( 'LOGGED_IN_KEY',    'y[PB7.mkS{Y;xJ0j1|!iG?C3y&90y56tT9Y/5*/z!Qz0pE!Q~3lu1Q@1nV;G7o&;' );
define( 'NONCE_KEY',        'nW4sWO,PZ>bw5r-Sx@nr9.P=Ogt5_haM|<9PuWkq2o?&EB>6VDMneK60WK$]wz+X' );
define( 'AUTH_SALT',        'yr9e9KJ9+4@;aO#[>64^)uf]jBl(cyvnb3?h`84{h^14*;;/~CT,T9XJ;z>$iV^l' );
define( 'SECURE_AUTH_SALT', 'f:KYeo/P&T#K/w;i[l8o^1Cz+t^K!pNt/bM~P^5rRUqh<[kY{]VePr)K,)IRQo,:' );
define( 'LOGGED_IN_SALT',   'qP &!Dunsf<u~^f=)XR=:se{wU+lj21)~V`@fn7 aIc$H8rB%s+qvu}bQD:%XZ4<' );
define( 'NONCE_SALT',       'h,-n[W9vrLmr&=l? ]T^[s?7kk]<2;(IF_?4ZU_K`xt6iM)r*!uT%l8O*Kp Z>1:' );

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

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
