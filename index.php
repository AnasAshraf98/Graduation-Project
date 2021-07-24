<?php
    
    session_start();
    ob_start();
    // include header.php file
    
    include ('header.php');
?>

<?php
    
    /*  include banner area  */
        include ('Template/_banner-area.php');
    /*  include banner area  */

    /*  include top sale section */
        include ('Template/_top-sale.php');
    /*  include top sale section */

    
    /*  include recommendation section */
        if($rate=$product->getRate()!=NULL){
            $users=mysqli_query($Cart->db->con,"SELECT user_name FROM users WHERE id='$_SESSION[id]'");
            
            $username=mysqli_fetch_array($users);
            if(isset($username)){
                include ('Template/recommendation_template.php');   
            }
        }
    /*  include recommendation section */

    /*  include special price section  */
        include ('Template/_special-price.php');
    /*  include special price section  */

    /*  include new products section  */
        include ('Template/_new-products.php');
    /*  include new products section  */

    /*  include blog area  */
        include ('Template/_blogs.php');
    /*  include blog area  */

?>


<?php
    // include footer.php file
    include ('footer.php');
?>