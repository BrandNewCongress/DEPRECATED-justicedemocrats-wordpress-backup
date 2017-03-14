<?php
# Database Configuration
define( 'DB_NAME', 'wp_jdems' );
define( 'DB_USER', 'jdems' );
define( 'DB_PASSWORD', 'RDHcQ6NafQb368RBAlTV' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'IUoak|5Eaa7s;oTgXq1r6Z|7x.5fL(CF45k*O+I:Y(BdfVim&fnk6^`flP+AXy)h');
define('SECURE_AUTH_KEY',  'gOxQa8[?|p.]5X|VWVnELGISn~NG:J,_,~GQ_*p0O%})H@]F6Fz]# _>-yhDd7s=');
define('LOGGED_IN_KEY',    'U3[XdE8ZjVkx,`_X#:Wt1nJ9Ks#qNqyBM,PU(m4cjfPk#y8$a]>aU/0`s_@dP<kC');
define('NONCE_KEY',        'T2j2X[+N$+5)|7H?8vq*VugtRg|7hfEz(Y[%BNu%e3prRzG2LQI-q+/h/%p:3qOx');
define('AUTH_SALT',        'j0hxye5Ia;wL2bH=}?EdxyNE-YzlRH<6i!Q:~,u+tkGszJQemKj,p4~E7=-@-rn<');
define('SECURE_AUTH_SALT', '*SeE?|^UKsb=>02t4C{J3-|?@-Ng%af#F`q`>pn||;0cFj&kL6&&s@OP+G7S|!G_');
define('LOGGED_IN_SALT',   'tZf+|=|cg3oZ@uQyskV}+A>nOLgbiVtevGTI@ #X4k+|ndp5dhxK:3c,btcNh!QD');
define('NONCE_SALT',       '4]41m9W{!SlOJ.=Qk#2;wm}O9=<C@^0Ywc$X{/H}@-eY@VMH+r-h0-^K0m-&t@;;');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'jdems' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'eb531286e276308d3a859d3d7760104cc6ec45b9' );

define( 'WPE_CLUSTER_ID', '40162' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'jdems.wpengine.com', 1 => 'justicedemocrats.com', 2 => 'www.justicedemocrats.com', );

$wpe_varnish_servers=array ( 0 => 'pod-40162', );

$wpe_special_ips=array ( 0 => '104.237.155.54', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );

define( 'WP_SITEURL', 'http://justicedemocrats.com' );

define( 'WP_HOME', 'http://justicedemocrats.com' );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
