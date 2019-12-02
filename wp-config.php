<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'jang' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '1lovem@ty' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@g7vk0QTm$7:mx U>X9)G,w5q,?(i.r8pv0BUPCtiW.]G;n0h2bnui uo%|q/Y.%' );
define( 'SECURE_AUTH_KEY',  'qlm(5uyrJXBoQf+<NUu>pD9e-W<k!(Aq?1f;->sm8s-uBHlGX1B #yrLrx|(T>8%' );
define( 'LOGGED_IN_KEY',    'wE%!F?j1+Fypk&ul3jGacSvtF%I4@1VtiYx=7.KTw7DM$(^8lT(NDB]C6cI3%5,g' );
define( 'NONCE_KEY',        ')n%LFQcPA_LxjhFxyh>rz~L=12rHXri3NM=^vzprcz;uRXUcQDSny^!B5oeH$d9h' );
define( 'AUTH_SALT',        '$eH1IsQz E.3>X8OPH9l$<HQJd&g2g*000&[lM$@tH1jSf9S|~Ef#QQBnt6X6g]$' );
define( 'SECURE_AUTH_SALT', '~wPNbec)MzY)M+p{_y+B^-HnvLRHTm:9YwTukND(=&*7tw/NV4=)zo*TvQ]S_apO' );
define( 'LOGGED_IN_SALT',   '|-(19P&05u.xuY)&1Bbr+hmA19e<&:zYcx=z<;/>u_KR>%:F3h,J0C{Rk6yMV,fF' );
define( 'NONCE_SALT',       '$|C1el{W?ftFR5U;d8De@_2OEGm4>Wg`MJ@:JAP0,q[=9H%W&CB[i9mCuF!aeVJc' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

define('FS_METHOD', 'direct');


