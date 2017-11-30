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
define('DB_NAME', 'hermelineWordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'hermeline');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'hermeline41856000');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', '51.255.196.206');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'J]?^xJ7sj`2Q@:,>!cj-47ZAAJOF#^t&Ck%UWXRCAIS50cJ57Odk|^eS[ogOBbla');
define('SECURE_AUTH_KEY',  'k)NOIt>(kQ/_PV$@p5gr(MBqJ0EstnM4S{M2]q(z/  `/H?3e[lw:n}73lXR^CSF');
define('LOGGED_IN_KEY',    '!Gu>k|.H3{1w5C|$U1UY9%n~|0(_8cG<HQ`NHuLOA/<~/`_Y*G-&e+@N@]uO| }T');
define('NONCE_KEY',        'qKv&di(-(Jim)pw3`j|VhsgU^q$3://|YOjHPJfko1m%F0}2mV_hJ[nB;8/Ji-lN');
define('AUTH_SALT',        'qUn|%,}l !zAN|@FKtSN$a:P~he1lVbo;fm/.J=z}5?@#zGy@#<> XDy$48hIVQW');
define('SECURE_AUTH_SALT', 'ZNO2`@,<S>t`eZl0Wm;n-F&[&O.U<AjX=pm<C<l^`}ZMR`l}Mw0pri}iQ9yNh+/N');
define('LOGGED_IN_SALT',   '`cHSg*+6?xWL-v1#fMew`W}9mV(c^g33=e(Z-7Yn/M8d-,?#h5(*h>}V!f=&kkw ');
define('NONCE_SALT',       'O,DI}%t{E&a2,1yANxvdU:2L=c5UMr,bO{89YA<|!9. n:a!F*{23((8[QU{%&Ma');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
