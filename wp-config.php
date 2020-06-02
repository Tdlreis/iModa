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
define( 'DB_NAME', 'imoda' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'iModa' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '1!2@3#4$5%6^7&8*9(' );

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
define( 'AUTH_KEY',         ',(%N;hhYHoA-G.@3+fA{GD7d/FG+-%TnHu+)qyKc?lCKX$6f4rG[W]=G)aULnj%Y' );
define( 'SECURE_AUTH_KEY',  'E,BD<6BTcZARNZ:$7Z[ 6])nyUhPZ(k?MaJTEvw$LzEhS0bVh?,xX`qRPr<-aDdT' );
define( 'LOGGED_IN_KEY',    '<9(TjFW3yz/+_YK3;DHiC5z)XASWp9L3AYq1JDL^eiL5mfoS,s@ f7B6/#bwrK35' );
define( 'NONCE_KEY',        'str|mO0h2fnQW$De$Fl#ba5t$,y:7Adf*--Dn%x9(dA*,*K`su(Ct27&k6{*|rvn' );
define( 'AUTH_SALT',        'U%r9%MMho#]#Q/-(M@w=w>S$odcaq+uQo^1I,>2 {Mnq?~Ttooe?W~(D8+/GwG7s' );
define( 'SECURE_AUTH_SALT', 'vnW,x],pq(RT;A]tk])zN0fj;K5w/lb*q}9+,]$O2ayvJU[8&4D0cH%;5[F/i$=8' );
define( 'LOGGED_IN_SALT',   'J=[t!Zu:k?S{i@*blnQ@h$QI7luU*{(@=MP;tWsaMzi_3FMA}l:p|QgG5 }&7U/@' );
define( 'NONCE_SALT',       'ka_Q>[>f`4uv`bM:s uuZCRW!Rex.cs(uJsi,.,L]pr*?@Ud}fu28[XzX1gTp72e' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_imoda';

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
