<?php
    define('DBHOST' , 'localhost');
    define('DBUSER' , 'root');
    define('DBPASS' , '');
    define('DBNAME' , 'dbratujawa');
    try{

        //create PDO connection
        $db = new PDO ("mysql:host=".DBHOST.";port=80;dbname=".DBNAME, DBUSER, DBPASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDDException $e) {
        //show eror
        echo '<p class="bg-danger">'.$e->getMessage().'</p>';
        exit;
    }

?>