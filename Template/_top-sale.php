<!-- Top Sale -->
<?php

    $topSaleData=$product->getDataById($data->topSale());
    // request method post
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['top_sale_submit'])){
            // call method addToCart
            $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
        }
    }

?>

<section id="top-sale">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Top Sale</h4>
        <hr>
        <!-- owl carousel -->
        <div class="owl-carousel owl-theme">
            <?php foreach ($topSaleData as $item) { ?>
            <div class="item py-2">
                <div class="product font-rale">
                    <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"; ?>" alt="product1" class="img-fluid" style="width: 200px;height: 200px;"></a>
                    <div class="text-center">
                        <h6><?php echo  $item['item_name'] ?? "Unknown";  ?></h6>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                            <span>$<?php echo $item['item_price'] ?? '0' ; ?></span>
                        </div>
                        <form method="post">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                            <input type="hidden" name="user_id" value="<?php 
                                if(isset($_SESSION['counter'])){
                                    $lastRecord=$product->getLastRecord('users');
                                    
                                    if($lastRecord[0]['id']==$_SESSION['counter']){
                                        $_SESSION['id']=++$_SESSION['counter'];
                                    }
                                    else{
                                        $_SESSION['id']=++$lastRecord[0]['id'];
                                    }
                                    unset($_SESSION['counter']);
                                    echo $_SESSION['id'];
                                }
                                else{
                                    if(!isset($_SESSION['id'])){
                                        $_SESSION['id']=1;
                                    }
                                    echo $_SESSION['id'];
                                }
                            ?>">
                            
                            <?php
                                $result=$Cart->getCartId($product->getProductOfUser($_SESSION['id'],'cart'));
                                if($result==[]){
                                    $result=[0];
                                }
                                else{
                                    $result=$Cart->getCartId($product->getProductOfUser($_SESSION['id'],'cart'));
                                }
                                if (in_array($item['item_id'], $result)){
                                    echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                                }
                                else{
                                    echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                                }
                            ?>

                        </form>
                    </div>
                </div>
            </div>
            <?php } // closing foreach function ?>
        </div>
        <!-- !owl carousel -->
    </div>
</section>
<!-- !Top Sale -->