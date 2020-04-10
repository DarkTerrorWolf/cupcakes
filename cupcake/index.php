<!DOCTYPE html>
<html lang="en">
<!-- Web link to page: https://tschlosser.greenriverdev.com/328/cupcake/index.php
Upload to git. Share with David Haas
-->
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="thankYou.php" method="post">
<div class="form-group">
    <label for="name">Full Name</label>
    <input type="text" class="form-control" id="name" name="name">
</div>


<?php
$flavors =["grasshopper"=>"The Grasshopper","maple"=>"Whiskey Maple Bacon","carrot"=>"Carrot Walnut","caramel"=>"Salted Caramel Cupcake",
    "velvet"=>"Red Velvet"];
foreach ($flavors as $flavor=>$ingredient){
    echo "<div class=\"form-check\">
                <input class=\"form-check-input\" type=\"checkbox\" name=\"flavor[]\" id=\"$flavor\" value=\"$flavor\">
                <label class=\"form-check-label\" for=\"$flavor\">
            $ingredient
                </label>
            </div>";
}
?>


    <button type="submit" class="btn btn-primary">Place Your Order</button>
    </form>
</body>
</html>