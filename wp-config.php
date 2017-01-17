<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'sertania');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'application_testing');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '!@Applic@Ti0n@2016!@');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'g(*(4Z!W0.Gv.+wM!Yfk%2XVy2T%j3JZ41]xv8JGi}CX<iCGzsIFsCO{+f|dIx=I');
define('SECURE_AUTH_KEY',  '@14P{h7V6k#9/+;u;M1:uHE%`<3%m$;SaSw(DYG_R1IpQXKfDV!K3,6.W$y>r$55');
define('LOGGED_IN_KEY',    'gzk[0numR&OGKeOkx[Q[Pp4+`Cfu EAz<HO, 9^k>F:Sev~BHZwr>kU&_0|cfW*Q');
define('NONCE_KEY',        '1`.[_:6xl_m/@#r$`[fK4V#mV}?w$;5MEW]1m<WuE85?an%caBAa8DRsaKPr{dw]');
define('AUTH_SALT',        '2Mr%^w8s!MOH7=[Ss|-ceyWDM}D;9)O4&|=5i`nk75X.@7?>dm+I`486l^yF`w4p');
define('SECURE_AUTH_SALT', 'w>qQ>T=hl7Ah**p9Xs*8{pdlXi$?:{Z%B)-%E^Vy-nge5jp#Zghmr&%R$@Ej73{G');
define('LOGGED_IN_SALT',   'I}oxijpg;Td:2m_FJEtEzKeS14y0#[lmj4xbu=eOW.i]RcJe`(PiPbuu7LfhK)j:');
define('NONCE_SALT',       ']Yp9#J_7`I<_%tdT}nZ$::B8VDP.kkDa{$ CGSK~PZ1Ik>qB:-Oh]<bHi@yMszl/');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
