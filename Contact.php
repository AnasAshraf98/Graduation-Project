<?php
    
    session_start();
    ob_start();

    // include header.php file
    
    include ('header.php');
?>

<?php
    
    /*  include banner area  */
        include ('Template/contact.php');
    /*  include banner area  */

?>

<?php

    // include footer.php file
    include ('footer.php');
    
?>