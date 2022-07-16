<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
<!-- 5. Sukurkite programą, kurioje perdavus kintamuosius per POST "juoda", "raudona", "melyna", puslapis nusidažo atitinkama spalva. -->

<h1>Type in a color to change the backround of a this page</h1>
<h2>Color name should be in english</h2>

<form method="POST" action="colors.php">
    <input required='required' name="color" placeholder="Type a color"/>
    <button name="patvirtinti" type="submit">Change</button>
</form>

<?php
if(isset($_POST["patvirtinti"])) {
    $color = $_POST["color"];

    echo '<body style="background-color:'.$color.'">';

}
?>

</body>