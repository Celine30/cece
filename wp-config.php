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
define( 'DB_NAME', 'cece' );

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
define( 'AUTH_KEY',         'TAivZTQ;:q`hn*SzD}:0N$E._5!@}j[ul.>c|YooZq~/iynkpQ`L)3@fPQmS@cl&' );
define( 'SECURE_AUTH_KEY',  'gxc!HYCM^H7%fw$sh{nY?>M0SpG,kpPi1XqrKj3DLSw<l}&pB`~;4&<ZUcC~DO!5' );
define( 'LOGGED_IN_KEY',    '9Kr}2{lZ8>|vP@oG*hNCX6& -nlEyl6KoSHRshge.?i&kb5r>721HjJW:>7>&cQG' );
define( 'NONCE_KEY',        '|SW7.?dj/D=}vHycXyX#PKCSDCW_IOZn5XA4`{`zuB9Go) }FbI/Zcklo|7@%6sn' );
define( 'AUTH_SALT',        '2NR^b$-T6p-rz#c_zr%u72yLQG&N 2,+p9[Od31^tu}: N><$Fm8kt[.:@+SeW]n' );
define( 'SECURE_AUTH_SALT', 'T9B;zDR-D)N42N3Z}:l915W!fT>hqdVGv?Z#]nTgKg#G}#-G{f2)/v}2lm;L$.^6' );
define( 'LOGGED_IN_SALT',   'SvQ%?TG:YywC6S5vHLwGHKRYs]k`u#J>9PQpArT%3_gZf!VzExfoGYq!he/.F1A$' );
define( 'NONCE_SALT',       '?h,k7%^U7(}=ET!0%i[%Z+cE|{UeDjx}Hm:-&Xv_H[!VydD rsV]BT~P$}NqD1|A' );
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
