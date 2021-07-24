<?php
    
    session_start();
    ob_start();
    // include header.php file
    
    include ('header.php');
?>

<?php

    /* include mobile */
    include('./Template/crafts_decor.php');
    /* include mobile */
?>


<?php
    // include footer.php file
    include ('footer.php');
?>