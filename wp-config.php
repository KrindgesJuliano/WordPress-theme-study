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
define('DB_NAME', 'testewp');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

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
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wSS]GGmEW)c>qAU>|V0I=0%PP?1%znI$:<@-XDck9&?h`aVW0!:6HMhE}Y1EL4bK');
define('SECURE_AUTH_KEY',  'Qd]0I^JH*eh=tB5#(;bd_2@<pcGe)SrZ.1% 1@|^A0|UN5c:~]|W5SN=d-oURCC0');
define('LOGGED_IN_KEY',    '[}8:SE-C``)b.aGbx#`Vy#+2epO#sX<:|hj(F&//!24BUw:?+[5 S{a?2(A$V2ct');
define('NONCE_KEY',        'jLyb*=L~)cuURR2%l_:O1+:Mc&HTWY#H2Mf*sm]GW-5jhMo3&0{Xr>4<XSjJ01ww');
define('AUTH_SALT',        'Pm&hg:ko]Os{@YA1c21NzJ(z{^Y6vqA#oaJoS_n}ryOMWC6.`=CQ;h*b8*/]#lRY');
define('SECURE_AUTH_SALT', 'mM_mfZ;FB`sfhR>F<w!hH&{O=]E]2%FYN|`L,{}nP@-gX9T_v9* z>vKhYAj?L8;');
define('LOGGED_IN_SALT',   '(`oVZ><CZ.KMKC`ELN]99ppJ?=tTgA%eZ>l7U-.3|%WAWB`t4^J{T Vj%Q-D/]p5');
define('NONCE_SALT',       'f9KQJ~Q77i@9UMe#Erd=r:_USH7zxVU7;N-au{j=zsonLg+nMsO?a]q~tGL22@L|');

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
define('WP_DEBUG', true);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if (!defined('ABSPATH'))
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
