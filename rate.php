<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
</head>
<body>
<div class="container">
    <div class="row">

<form action="rate.php" method="post">

    <div>
        <h3>Handmade Rating System</h3>
    </div>

    <div>
        <label>Name</label>
        <input type="text" name="name">
    </div>

    <div class="rateyo" id= "rating"
    data-rateyo-rating="4"
    data-rateyo-num-stars="5"
    data-rateyo-score="3">
    </div>

    <span class='result'>0</span>
    <input type="hidden" name="rating">

    </div>

    <div><!-- <a href="index.php"> --><input type="submit" name="add"><!-- </a> --> </div>
    
    </form>
    

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

<script>


    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });

</script>
</body>

</html>
<?php

include('functions.php');
if ($_SERVER["REQUEST_METHOD"] == "POST")
{   
    session_start();

    $name = $_POST["name"];
    $rating = $_POST["rating"];

    echo $_SESSION['shopping_cart'];
    foreach($_SESSION as $key=>$value)
    {
        if($key=='shopping_cart'){
            $result=$Cart->rate($_SESSION['id'],$value,$rating);

            if($result){
                header("Location: rate.php?success=Your account has been created successfully");
            }
        }

    }
    
    
}
?>