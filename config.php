<?php

    if ($_SERVER['HTTP_HOST'] === 'localhost') {

        define('BASE_URL', '/akanshapublicschool');
    } 
    
    // Production
    else {
        define('BASE_URL', '');
    }

?>