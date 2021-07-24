<!-- Top Sale -->
<?php
    include_once('recommend.php');
    //shuffle($product_shuffle);

    // request method post
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['recommendation_submit'])){
            // call method addToCart
            $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
        }
    }

    $db=new DBController();
    $cart=new Cart($db); 
    
    $movies=mysqli_query($cart->db->con,"SELECT * FROM ratee");

    $matrix=array();

    while($movie=mysqli_fetch_array($movies)){
        $users=mysqli_query($cart->db->con,"SELECT user_name FROM users WHERE id='$movie[user_id]'");
        
        $username=mysqli_fetch_array($users);

        $matrix[$username['user_name']][$movie['product_name']]=$movie['rate'];
    }
    
    $users=mysqli_query($cart->db->con,"SELECT user_name FROM users WHERE id='$_SESSION[id]'");
    /* if (!$users) {
        printf("Error: %s\n", mysqli_error($cart->db->con));
        exit();
    }  */
    $username=mysqli_fetch_array($users);
    /* echo $username['user_name']; */
    $items=getRecommendation($matrix,$username['user_name']) ;
    
    /* foreach ($items as $key=>$value) {
        $item=$product->getProductsByName($key);
        echo "<pre>";
        print_r($item);
        echo "</pre>";
    } */
    /* echo "<pre>";
    var_dump($items);
    echo "<pre>"; */
?>
<section id="banner-area">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Recommendation</h4>
        <hr>
        <!-- owl carousel -->
        <div class="owl-carousel owl-theme">
            <?php foreach ($items as $key=>$value) {
                    $item=$product->getProductsByName($key);
                    /* echo "<pre>";
                    print_r($item);
                    echo "</pre>"; */
            ?>
            <div class="item py-2">
                <div class="product font-rale">
                    <a href="<?php printf('%s?item_id=%s', 'product.php',  $item[0]['item_id']); ?>"><img src="<?php echo $item[0]['item_image'] ?? "./assets/products/1.png"; ?>" alt="product1" class="img-fluid"></a>
                    <div class="text-center">
                        <h6><?php echo  $item[0]['item_name'] ?? "Unknown";  ?></h6>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                            <span>$<?php echo $item[0]['item_price'] ?? '0' ; ?></span>
                        </div>
                        <form method="post">
                            <input type="hidden" name="item_id" value="<?php echo $item[0]['item_id'] ?? '1'; ?>">
                            <input type="hidden" name="user_id" value="<?php 
                                /* session_start(); */
                                if(isset($_SESSION['id'])){
                                    echo $_SESSION['id'];
                                }
                                else{
                                    $_SESSION['id']=1;
                                    echo 1;
                                }
                            ?>">
                            
                            <?php
                                $result;
                                if($Cart->getCartId($product->getProductOfUser($_SESSION['id'],'cart'))==[]){
                                    $result=[0];
                                }
                                else{
                                    $result=$Cart->getCartId($product->getProductOfUser($_SESSION['id'],'cart'));
                                }
                                if (in_array($item[0]['item_id'], $result)){
                                    echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                                }
                                else{
                                    echo '<button type="submit" name="recommendation_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                                }
                            ?>
                            
                        </form>
                    </div>
                </div>
            </div>
            <?php $item="";} // closing foreach function ?>
        </div>
        <!-- !owl carousel -->
    </div>
</section>
<!-- !Top Sale -->