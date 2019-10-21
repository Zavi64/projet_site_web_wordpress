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
define( 'DB_NAME', 'doubleregard' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']9lGl1d_Vc~1t=2n+:*MAQM:99 ((9MV1:K`I1?(reHPaY8z..qhQ?w0<w>{r@Yv' );
define( 'SECURE_AUTH_KEY',  'nr?*v$&ogowghp[o<zg9TDC~d6W@`e_0}_J4XYJMw7XIP.+F:)LJsNwKNe)XWv[ ' );
define( 'LOGGED_IN_KEY',    'svPZ8g[I6wQ^@h1w}FWgLjscw0kYce-{-8TeKM$K_fE[1:&WCM!`wo2wXNCV<<DK' );
define( 'NONCE_KEY',        '&EZ:d~hx]_VT)k4?X}}04-vWw~kemZ@H8NJtA#S9A8S,6dF/i<?W~<-]`t3y*z`M' );
define( 'AUTH_SALT',        ']T!o;{`?/!_7ddptb6MK8VHU9YHcMD>;WbCM3A.7_w1`cXv$rAO(;d<]>^hMnWM)' );
define( 'SECURE_AUTH_SALT', 's@Gd449^]:>GGz,i-:b0;UiClwGG[hBgX/GHimiansw$),X[WdH%fd7lRp,S 3(5' );
define( 'LOGGED_IN_SALT',   '[ZT{)6Oo%3WzL d+!_p5tt&K0/Aw= X;EpV[<:iEYfBrpSgIW6hpm^/8lpPvluJ(' );
define( 'NONCE_SALT',       'GC4[H;)C<8V8R->o%S}K`]<c_ahy&+3bb[RudA!U`}n8U7.STA68J8s%U.Z((-~S' );
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
