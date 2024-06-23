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
define( 'DB_NAME', 'myfilms' );

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
define( 'AUTH_KEY',         '#>20mTOPH~IU}y6x*.8nlJg*joH=;Q`yAIt:.W2])kZgCW~b(:P}K$om8(Hkrar,' );
define( 'SECURE_AUTH_KEY',  'F]ZfVf03qPnBI(>(2;v&!RrGr1mRM,Tg!Kvtbj,A`PYKe&cwB4*N2QqIPE+lmVF{' );
define( 'LOGGED_IN_KEY',    '`2S[2HHSB]<!2 {(N<M%7;Y~[p}:|+)[KU8rdOXBaqU4<7&N;DL*6,ulAiSb5gFR' );
define( 'NONCE_KEY',        '<T]9Zaz)LW+E.x2ZlCoZ)e<&+7FQNr=>dgq5UuG=RvlbU1*7s@;EOsdD- a6Bn/4' );
define( 'AUTH_SALT',        'BbFuPYHO]@rt9QE/hmv,X!Bi*uYG@PTHsT9w,H&Ygs{$#dprq-h:Y$aNrBSZ2sM{' );
define( 'SECURE_AUTH_SALT', 'cRzxhYUuP@moa^7YKQ.LC 1#s;!$dF:l>z>JgP3fU,Rv|cheP<5_l/wJ=O`MNQwj' );
define( 'LOGGED_IN_SALT',   'V{Rr`TML*K6-a=ZWM=2WW 7d7Fg?@;gqS?a1=8Ao<*f{/R~wN(R6Bp9p74OIvn*R' );
define( 'NONCE_SALT',       '?7nBI*V([:?~BE]Mh.15u?]?t<KBckr2Z%kl ^rL^y]<bF1!S)~ 0]HmU>KAvd:+' );
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
