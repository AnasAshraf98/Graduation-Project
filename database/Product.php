<?php

// Use to fetch product data
class Product
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // fetch product data using getData Method
    public function getData($table = 'product'){
        $result = $this->db->con->query("SELECT * FROM {$table}");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    // fetch product data using getData Method
    public function getSpecialPriceData($table = 'product'){
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_category='specialPrice'");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    // get product using item id
    public function getProduct($item_id = null, $table= 'product'){
        if (isset($item_id)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id={$item_id}");

            $resultArray = array();

            // fetch product data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

            return $resultArray;
        }
    }

    public function getDataById($array){
        if(isset($array)){
            $resultArray = array();

            foreach($array as $id){
                $result = $this->db->con->query("SELECT * FROM product WHERE item_id={$id}");

                if (!$result) {
                    printf("Error: %s\n", mysqli_error($this->db->con));
                    exit();
                }
                // fetch product data one by one
                while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    $resultArray[] = $item;
                }
            }
            return $resultArray;
        }
    }

    public function getCart($table = 'product'){
        $result = $this->db->con->query("SELECT * FROM {$table} Where user_id=$_SESSION[id]");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    // get rate
    public function getRate($table = 'ratee'){
        $result = $this->db->con->query("SELECT * FROM {$table} Where user_id=$_SESSION[id]");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    // get product using user id
    public function getProductOfUser($user_id = null, $table= 'product'){
        if (isset($user_id)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE user_id={$user_id}");

            $resultArray = array();

            // fetch product data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

            return $resultArray;
        }
    }
    
    // get product using user id
    public function getProductsByName($itemName = null, $table= 'product'){
        if (isset($itemName)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_name='{$itemName}'");
            
            $resultArray = array();
            /* if (!$result) {
                printf("Error: %s\n", mysqli_error($this->db->con));
                exit();
            } */ 
            // fetch product data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }
            
            return $resultArray;
        }
    }

    public function getLastRecord($table='product'){
        $result = $this->db->con->query("SELECT * FROM {$table} ORDER BY ID DESC LIMIT 1");
            
        $resultArray = array();
            
        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }
            
        return $resultArray;
    }
    
}