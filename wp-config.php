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
define('AUTH_KEY',         'c;Q?_)}AFaBqxn}Z)${or!rv^%W=b/R(5vo^!*u*]Q2F]Jo;$8V[Qt{yMWF{$e]$');
define('SECURE_AUTH_KEY',  'ut7MQ*9Rfni|Zw4%^Zb#&`lT77GN:/u9P!A m-|`~IFexgC({9yD)Xi/* bX%Te-');
define('LOGGED_IN_KEY',    'MvZ0Bugihvc)DGCu8*b1)}>/059Q_+#+PcdUsa5V8ya`!3oyHF!KE>) U!eg0iU+');
define('NONCE_KEY',        'uQ-^0_:a0Pn6.MwY05]K iw]99C%kG`Q)1+~w<`tPBR&hsr#9%}5z_,D&l1Sp=BP');
define('AUTH_SALT',        'vj[(1BA_Q2J]j~]/rPH|Sb!<YL<7bdm S.@n[vWh:=#0Qm4=V[iTdbV8O*k%*Sk]');
define('SECURE_AUTH_SALT', '<r~{fZ?T!q12OeNpyJMXXgD9d}=kh73P`N,2E^)1ac3*dL@AA;o9_{_F|UN,jbt6');
define('LOGGED_IN_SALT',   'w[bL>iQ{tuIr.js2P{6(TnT=cXgj1YXb^aRHB6nz,cW5yY~+z<}$o~;J_ al3wbz');
define('NONCE_SALT',       '1PJMU/D4K]bZy J|y}kZ/E1XH|95cps6}3I($Ze@|5|GuR6JZ||H|8kNJc7H):*y');
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
define('FS_METHOD', 'direct');

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
