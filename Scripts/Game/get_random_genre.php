<?php

/*Call this Script for API Request*/

    require 'genrescript.php';
    print_r(json_encode(Genre::getRandomGenre(), JSON_FORCE_OBJECT)); 

?>