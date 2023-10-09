<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Planty' );
/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );
/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );
/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );
/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );
/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');
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
define( 'AUTH_KEY',         ']_YBF3V&S:+q5#BaDGW*_D^j(db/G#2genj<h9q}#(=B*KgcO:ZAo;jlOm9eDPBY' );
define( 'SECURE_AUTH_KEY',  ')o<k:+nD^ZlA{xc|Q*P9C!k OVmUGD?9*#`!4g!xu`.#p/9oE=ONrcY_uL$/{Rve' );
define( 'LOGGED_IN_KEY',    '%Oa`< 7/A*K1;sf&9CfSnX(=Wca+Kc!W#qA1e+sNeD6fKl6/3},}7|`-_+rTm-t?' );
define( 'NONCE_KEY',        '3#XIg@P8&DPJS*1API!*,OJ <CR<mZflm/B3;XvE5h$yoh$xG:Y~uP>#embU=EQ|' );
define( 'AUTH_SALT',        '$t(8pP.&%G&rqufbS9bE}oJ2C:WIgqfMhEr4_]SH>;7`iub|h%NmPYEg<ZK$`P>#' );
define( 'SECURE_AUTH_SALT', '~B>J.}hsas7-L_NY-7gfwBEdq;#Ui:]!sUu:w5{fcg6pf4J$&x)8j5)FZC[z)QeR' );
define( 'LOGGED_IN_SALT',   '+-oa$*}A;Yn$F(;86Mu^Gbr:(z4fZrU90lZ-BBg=hUSt)d4?[Hh>*3[ FfFr; F(' );
define( 'NONCE_SALT',       '6v:,n,SjMLwYg=i,59V FDMiZwm@z.rI9bS$IE`IsVoOnvpgi[B$$+Y(A7SHJkZH' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */
/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');