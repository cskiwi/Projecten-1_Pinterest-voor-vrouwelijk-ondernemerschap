<?php
header('location:./public');
exit();

/**
 *
 * ====================================
 * Installing database
 * ====================================
 * create the database defined in app/config/database.php
 *
 * ====================================
 * Setup database
 * ====================================
 * Run 'composer install' in root directory
 *
 *
 *
 * ====================================
 * Update database to newer version
 * ====================================
 *
 * type in cmd in root folder
 * 'php artisan migrate:refresh --seed' 
 * note: 
 *    - seed is optional for filling with dummy data
 *    - refresh is if you have an older version installed of this app so everything get's flushed
 * 
 *
 */
