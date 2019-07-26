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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'tribute_ng' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'CRgdoCRyElN.Q2Q8 v;PuQWfK`>>gJ/2uP1A`#hW5Y]^-ANar*geFeM4tbFWtY!;' );
define( 'SECURE_AUTH_KEY',  ',|d=5MzJ=P4J]d/(M|-,{M!=9D=MFd)ttuYop]G~(&Rr|jxsWFiCW^Eb8pt@(`d-' );
define( 'LOGGED_IN_KEY',    'WESLb]ZiHEdZ(aEY o&ZVEn>4oKKQL;,F#+4DKPTAyB@RE*~2.Kh@UExl?l.kRg3' );
define( 'NONCE_KEY',        'mu9t?]-1U6e+wsO?Au!(jrQVn`:]!3#JYOJN^{=eaZYkt+?2=B?O(]M]?/^+PmZ9' );
define( 'AUTH_SALT',        'XL!yY*6W/ZKI2Bd1{;a<FdA*BKb/~:YO{&>SD}W|yi4qCox}5H8tnMbc3$nDc+PN' );
define( 'SECURE_AUTH_SALT', '[w{~JIMV4SISt~W~eDp3D5:cA!*Y^zC))l=.}&Crv4M4UpM^_<PBn3WhP3!}.2Q3' );
define( 'LOGGED_IN_SALT',   'tg.t:g1)%^QUQDQQEXKMZkMPJd-mX1ykx6eS/MP[km/ZBI7<goMi2tiOn1n{;Sp@' );
define( 'NONCE_SALT',       'LP@P!KP774T8FQL-nlt2BK|D}[GPuA4Nx9b{$=d>F;?=yua,$pD(t } !f>u)p)Y' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
