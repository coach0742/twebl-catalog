<?php
/**
 * Epub loader application config
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Didier Corbière <didier.corbiere@opale-concept.com>
 */

$gConfig = array();

/**
 * Application name
 */
$gConfig['app_name'] = 'Epub loader';

/**
 * Admin email
 */
$gConfig['admin_email'] = 'coachward0742@gmail.com';

/**
 * Cops directory
 *
 * This is the base path of Cops library
 */
$gConfig['cops_directory'] = dirname(dirname(dirname(__DIR__)));
if (!is_dir($gConfig['cops_directory'])) {
	die ('Incorrect Cops directory: ' . $gConfig['cops_directory']);
}

/**
 * Create Calibre databases ?
 *
 * If true: databases are removed and recreated before loading ebooks
 * If false: append ebooks into databases
 */
$gConfig['create_db'] = true;

/**
 * Databases infos
 *
 * For each database:
 *   name: The database name to display
 *   db_path: The path where to create the database
 *   epub_path: The path where to look for the epub files to load
 *   pdf_path: The path where to look for pdf files
 */
$gConfig['databases'] = array();
$gConfig['databases'][] = array('name' => 'Books', 'db_path' => '/var/www/blog/uploads', 'epub_path' => '/var/www/blog/uploads', 'pdf_path' => '');
#$gConfig['databases'][] = array('name' => 'Bibliothèque numérique romande', 'db_path' => '/opt/ebooks/calibre/bnr', 'epub_path' => '/opt/ebooks/epub/bnr', 'pdf_path' => '');
#$gConfig['databases'][] = array('name' => 'La Bibliothèque d\'Ebooks', 'db_path' => '/opt/ebooks/calibre/bibebook', 'epub_path' => '/opt/ebooks/epub/bibebook', 'pdf_path' => '');

/**
 * Available actions
 */
$gConfig['actions'] = array();
$gConfig['actions']['csv_export'] = 'Csv export';
$gConfig['actions']['db_load'] = 'Create database';

?>
