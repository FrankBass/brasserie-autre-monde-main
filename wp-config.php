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

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'autreMonde' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '*a%%j!?}?hXfYj=0:<;^E{@VHnVzdN3v8kwI@:y#j9Ps <{(!8o|^W7q]@[$jdt!' );
define( 'SECURE_AUTH_KEY',  'N//i8j*r-usM|D+&DJC5[~Ir>aC=~UM`eUqKfe)02<EO2J#+I}t^g:7m&+kEKLNT' );
define( 'LOGGED_IN_KEY',    'S>?R.q-HWJ9F(Jn+,=TaH1o98)8mZU_Q{=Y_e:y,[{R:8o[rc{f(c[f/r?,&`%VJ' );
define( 'NONCE_KEY',        'xlOZU}q]ng_J#P+}`K0=VX4Co}aMU,s0:RFYz5<OV^.!?GcXn|<A.MRwk(c+%s`f' );
define( 'AUTH_SALT',        'c^r)@~3<Gl=]Y*%%.*9Bw)noh1m9*Xli>eLoSb:qi}YH7Dy/>O+aDW4~c:mHCq6T' );
define( 'SECURE_AUTH_SALT', 'M3c?#Bw@M:588;[F+dV.wbB-g,0kfSYqHfzBR1K_ZT@ObHJt]V/7c}yP+hSW*2=W' );
define( 'LOGGED_IN_SALT',   '[ `AfOc{/S`^6l;y44h<B27A*:!jM{k8nC<c.?&(1Ge{|h@[%)-=pWvx0p-kr.7l' );
define( 'NONCE_SALT',       '<*lH{a55ICkxhSDva+dnIWI+O{@6NA~=AgQ,w4As<0;LX|OxXpb @**L5?)e)Ta~' );
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
