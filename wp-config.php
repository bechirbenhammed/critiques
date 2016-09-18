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
define('DB_NAME', 'tunisie');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '!B`U?dJrXX}Ynxa%b=1<vp p>%-Tv7rr5z/w7&Gor,cn&C{fecO,Nr*JOJbR!D$%');
define('SECURE_AUTH_KEY',  'oqAGp9T/>Wr!|D!0H8dcteiljtH}3RDJd? V1y4`d,(Od/NTQd1h1_:*hW:?NOhD');
define('LOGGED_IN_KEY',    '8H;T+%Ko[+W%jK[WcDf{~Q?,NW7ji$zwS@5Cvev /XZcPT=/.f%8R[0d|74Bo;e9');
define('NONCE_KEY',        'MCayG?QnybHg^WD.;!fq2A2|J$YrOG6P?(sP5#J3I4rOW;|$6@@>`[`mAi!zCUL/');
define('AUTH_SALT',        ':QEc&Yf&OeBeK*/9TIM6f;`B.Etve8I*(&q&5p@]%O fUnGsPKMhYEfO%y$-4#O+');
define('SECURE_AUTH_SALT', 'noyNJ:]O:U#=TbU{bb3(z{JK4QR0]dkMH_pxflD2X@,%OqJCJN5Y|H&/][nfrIli');
define('LOGGED_IN_SALT',   'F5rX{_EgU&||6zpWZjzIxh%`#80k:7-8|z7%S6qA`^/E Wtr:ZTq#i5Nd?&8KIi|');
define('NONCE_SALT',       'cHkxZ9=I_Tl A%[YD{s`7Zc 8Bb8J.?vZX4#-em8=*ySm:(Txp0A[Vmk-#5Jak5y');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'tn_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
define( 'WP_POST_REVISIONS', false );

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');