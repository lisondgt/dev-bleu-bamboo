<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

$is_localhost = ($_SERVER['REMOTE_ADDR'] == "127.0.0.1" or $_SERVER['REMOTE_ADDR'] == "::1" or $_SERVER['REMOTE_ADDR'] == "localhost");

if ( $is_localhost ):
    define('DB_NAME', 'dev_bleu_bamboo');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_HOST', 'localhost');

    define( 'WP_DEBUG', true ); // Activer le debug en local seulement
else:
    define('DB_NAME', 'b54qcfydv5ad1t88fpou');
    define('DB_USER', 'uo03gab7lkkylb2g');
    define('DB_PASSWORD', 'azjrbl8PmpTIhUetI40e');
    define('DB_HOST', 'b54qcfydv5ad1t88fpou-mysql.services.clever-cloud.com');
endif;

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

define('ENABLE_CACHE', false);

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'jv@sYt:4-&-alih,ds[2dmK?nlRA<k!yr#A74dU_Q]+var%_*op8M.Q{@VCZH>DX' );
define( 'SECURE_AUTH_KEY',  ';;]Mym?PwJ7R-n~YK)<5$.qeF*M*F3EGqqRF185s/_9@X^Oq&^/4VlNl.ZbR#dM7' );
define( 'LOGGED_IN_KEY',    'Jml(*9 @Aqka;=Vd`$3Sye[IRQqI)7L_VngWju{p6<o}(Csg)L00A8`)ie`N-PBn' );
define( 'NONCE_KEY',        '?Q9RzW(y|Ap&6:84sFqPR%r9;^ i04S^ j8xg<GVS;q&}I#e 1~u/Nb5g7A5)Bar' );
define( 'AUTH_SALT',        'SPz1kA}Ks(WiYw8-2o+WXRJT8WE9`(iD$l>6+zCKc|/O[3*hpUKhxi9QDE?DT!z,' );
define( 'SECURE_AUTH_SALT', '|DL Cz[+)h?7@<>c4?SMI) `Yg&.lz5ZtNd7,=(_q3wfQ=5(!d,P8b{vdxE=KQEh' );
define( 'LOGGED_IN_SALT',   'K[X+v}7}?#txdN8^6)KP$lYx#)Rf+.IP@C?u^w&YMoEK{5Es<`PzR?TMc~|b~Y|H' );
define( 'NONCE_SALT',       'i8W[i0~-WQ}@6^kPLuJmS-cOp_+!%7LbCZ[L/.$+`D$</C;)l(xTsT{2`a:-B,}>' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
