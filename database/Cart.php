<?php

// php cart class
class Cart
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // insert into cart table
    public  function insertIntoCart($params = null, $table = "cart"){
        if ($this->db->con != null){
            if ($params != null){
                // "Insert into cart(user_id) values (0)"
                // get table columns
                $columns = implode(',', array_keys($params));

                $values = implode(',' , array_values($params));

                // create sql query
                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);

                // execute query
                $result = $this->db->con->query($query_string);
                return $result;
            }
        }
    }

    // to get user_id and item_id and insert into cart table
    public  function addToCart($userid, $itemid){
        if (isset($userid) && isset($itemid)){
            $params = array(
                "user_id" => $userid,
                "item_id" => $itemid
            );

            // insert data into cart
            $result = $this->insertIntoCart($params);
            if ($result){
                // Reload Page
                header("Location: " . $_SERVER['PHP_SELF']);
            }
        }
    }

    // delete cart item using cart item id
    public function deleteCart($item_id = null, $table = 'cart'){
        if($item_id != null){
            $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}");
            if($result){
                header("Location:" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

    // calculate sub total
    public function getSum($arr){
        if(isset($arr)){
            $sum = 0;
            foreach ($arr as $item){
                $sum += floatval($item[0]);
            }
            return sprintf('%.2f' , $sum);
        }
    }

    // get item_it of shopping cart list
    public function getCartId($cartArray = null, $key = "item_id"){
        if ($cartArray != null){
            $cart_id = array_map(function ($value) use($key){
                return $value[$key];
            }, $cartArray);
            return $cart_id;
        }
    }

    // get item_it of shopping cart list
    public function getUserId($cartArray = null, $key = "user_id"){
        if ($cartArray != null){
            $cart_id = array_map(function ($value) use($key){
                return $value[$key];
            }, $cartArray);
            return $cart_id;
        }
    }

    // Save for later
    public function saveForLater($item_id = null, $saveTable = "wishlist", $fromTable = "cart"){
        if ($item_id != null){
            $query = "INSERT INTO {$saveTable} SELECT * FROM {$fromTable} WHERE item_id={$item_id};";
            $query .= "DELETE FROM {$fromTable} WHERE item_id={$item_id};";

            // execute multiple query
            $result = $this->db->con->multi_query($query);

            if($result){
                header("Location: " . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

    public function rate($userId,$productName,$rate){
        $sql = "INSERT INTO ratee (user_id,product_name,rate) VALUES ('$userId','$productName','$rate')";
        
        $result=$this->db->con->query($sql);
        
        return $result;
    }

    public function signup($userName,$password,$name){
        $sql2 = "INSERT INTO users(user_name, password, name) VALUES('$userName', '$password', '$name')";
		
        $result2 = $this->db->con->query($sql2);
        
        /* if (!$this->con->query($sql2)) {
            printf("Error message: %s\n", $this->con->error);
        } */

        return $result2;
    }

    public function checkIfExist($userName){
        $sql = "SELECT * FROM users WHERE user_name='$userName' ";
		
        $result2 = $this->db->con->query($sql);
        
        return $result2;
    }

    public function check($userName,$password){
        $sql = "SELECT * FROM users WHERE user_name='$userName' AND password='$password'";
		
        $result2 = $this->db->con->query($sql);
        

        
        $row=mysqli_fetch_assoc($result2);

        return $row;
    }
}