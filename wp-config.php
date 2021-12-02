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
define( 'DB_NAME', 'mercredi' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'mamp' );

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
define( 'AUTH_KEY',         'C%qC3Ki(2WJ.#wzx}|L.$ar$O~$%goyi9r1n#(9w,~seQGZZ`&pU_-R[us|pDBG1' );
define( 'SECURE_AUTH_KEY',  '-ogo5I|;O5v6p84o.b K(^t}iik,4b#bqf@fMuyf+dO3l6g(2_=*Q2mD;}|kNwTj' );
define( 'LOGGED_IN_KEY',    '_JUc*!;(XMVl~N*@Ot&ycU#PjZR{fwAO<03lkFOm[m)zUt98nHS%Bo{P0Es1{Gmb' );
define( 'NONCE_KEY',        '=>Hy,8L`Q4yxGT_$lB_2HSS0tmsLPh3K]YN/`4_]6d`jrdn-Z=-V%|~dlPOC]^:@' );
define( 'AUTH_SALT',        '6eE~?9@--;/X_C4x&d0zR&)#60DN^Es3qy2=Y4d],=~`HdDO T?+o-Epy(&J&Q:]' );
define( 'SECURE_AUTH_SALT', 'Jwh,g N5h?$<SlvY?:BxCX?V%/5cFsR9v5/[3Dl41cdU?RbVSD0/s|rhs8[Q[,K!' );
define( 'LOGGED_IN_SALT',   's//ulZ8[jX7!y,#d@q/++Fn5T%}{91aiA7M4v`jclMR:s)||h~wjpM%BBaIdB>]5' );
define( 'NONCE_SALT',       'fX~uAW&{C4hy?6_BBE/iqfvoCt GgOp&>n:m).PEkM7lzE?!,4.g(T@Wg@,p@Qf,' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'mr_';

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
