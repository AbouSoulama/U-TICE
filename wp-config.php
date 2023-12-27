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
define( 'DB_NAME', 'u-tice_site' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Y__#Z>@@_,Bc<ql,9}=8WailiZAV3lL{[0KtD#kR3&EO+EkYa0]1`_L8S-Wq)<HY' );
define( 'SECURE_AUTH_KEY',  'o70gF0u~LR{^II_t$O}^)|rCM8%E[QsI//=j/Fe^_Xm*_eMgBmb-/XdTQ#)G(sT~' );
define( 'LOGGED_IN_KEY',    '_<o}&K$e:q%pog1e3zLjC`fm1Fuju#, Z+JGw$S8F48fMX`yDC?O8 B|m7A6wuss' );
define( 'NONCE_KEY',        'L}|CZ4R;Jz``p-0v!9RS^C4pwENsI:E =IbAbck#VCfVIee@geq1]O]-|^ E+oml' );
define( 'AUTH_SALT',        'cNn?G8;x}HwKOyX/x&vYH_<x}%N6,#Jkp6H1S*Q)IQ%S`knspU+dAuBjy2^$x!7;' );
define( 'SECURE_AUTH_SALT', '_ct+{HB3|E|hv9gMe@@ [l%%Gad2#r}OGHK]V7x-smkEnw$PV<XAsnq6+4*S&o/%' );
define( 'LOGGED_IN_SALT',   '6A4S2yvr>;k:VEROuDYu~n%Wf)`v@Cfh)po]Or~wpG*meK!<,q;MuqN9[O,)zcC@' );
define( 'NONCE_SALT',       '(N]SloG1KLpx=M I!JqU3^}e,n%[HG 4<6zCJ5M=5JH^@fUMS^~zXYZYdkw@4U|+' );
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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
