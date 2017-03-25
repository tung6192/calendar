<?php
//Create database
$sql = "CREATE DATABASE IF NOT EXISTS ". DB_NAME. "
        DEFAULT CHARACTER SET utf8
        COLLATE utf8_unicode_ci;";
// Use database
$sql.= "USE " . DB_NAME. ";";

//Create table events
$sql.= "CREATE TABLE IF NOT EXISTS `events` (
        `event_id` INT(11) NOT NULL AUTO_INCREMENT,
        `event_title` VARCHAR(80) DEFAULT NULL,
        `event_desc` TEXT,
        `event_start` TIMESTAMP NOT NULL,
        `event_end` TIMESTAMP NOT NULL,
        PRIMARY KEY (`event_id`),
        INDEX (`event_start`)
        ) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_unicode_ci;";


// Insert examples
//$sql.= "INSERT INTO `events`
//        (`event_title`, `event_desc`, `event_start`, `event_end`) VALUES
//        ('New Year&#039;s Day', 'Happy New Year!',
//        '2017-03-01 00:00:00', '2017-03-01 23:59:59'),
//        ('Last Day of January', 'Last day of the month! Yay!',
//        '2017-03-20 00:00:00', '2010-03-20 23:59:59');";

// Create table users
$sql.= "CREATE TABLE IF NOT EXISTS `users` (
        `user_id` INT(11) NOT NULL AUTO_INCREMENT,
        `user_name` VARCHAR(80) DEFAULT NULL,
        `user_pass` VARCHAR(47) DEFAULT NULL,
        `user_email` VARCHAR(80) DEFAULT NULL,
        PRIMARY KEY (`user_id`),
        UNIQUE (`user_name`)
        ) ENGINE=MyISAM CHARACTER SET utf8 COLLATE utf8_unicode_ci;";

// Insert user examples

// username: testuser
// pass: admin

//$sql.= "INSERT INTO `users`
//        (`user_name`, `user_pass`, `user_email`)
//        VALUES
//        (
//        'testuser',
//        'a1645e41f29c45c46539192fe29627751e1838f7311eeb4',
//        'admin@example.com'
//        );";
try
{
    $stmt = $_db->prepare($sql);
    /*
    * Bind the parameter if an ID was passed
    */
    $stmt->execute();
    $stmt->closeCursor();
}

catch ( Exception $e )
{
    die ( $e->getMessage() );
}
?>