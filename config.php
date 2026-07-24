<?php

    if ($_SERVER['HTTP_HOST'] === 'localhost') {

        define('BASE_URL', '/akanshapublicschool');
    } 
    
    // Production
    else {
        define('BASE_URL', '');
    }



    //  Generate URL
    // function url($path = '')
    // {
    //     return BASE_URL . ltrim($path, '/');
    // }

?>