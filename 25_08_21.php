<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display hp</title>
    <style>
        .cell {
            border: 1px solid #CCC;
            margin: 10px 0px; 
            padding: 10px; 
            width: 130px; 
            height: 140px; 
            background-color: #fbfbee; 
            text-align: left;
        }
        .example_b {
	    color: #fff !important;
	    text-transform: uppercase;
	    text-decoration: none;
	    background: #242526;
	    padding: 10px;
	    border-radius: 50px;
	    display: inline-block;
	    border: none;
	    transition: all 0.4s ease 0s;
        }
        .example_b:hover {
	    text-shadow: 0px 0px 6px rgba(255, 255, 255, 1);
	    -webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
	    -moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
	    transition: all 0.4s ease 0s;
        }
    </style>
</head>
<body>
<?php
    $dataProduk = array(
        array("Galaxy S21", "Samsung", 19000000, true),
        array("Galaxy A71", "Samsung", 6999000, false),
        array("iPhone 12 Pro Max", "Apple", 20999000, true),
        array("iPhone 12 Mini", "Apple", 10999000, false),
    );

    // $n = count($dataProduk);

?>

<?php 
for ($i=0; $i < 4; $i++) {     
    echo '<div class="cell">';
    foreach ($dataProduk[$i] as $key => $value) {
        if ($value != 3) {
            echo $value."<br>";
        }

        if ($value === true) {
            echo("stok tersedia<br>");
            echo '<br><br><div class="button_cont" align="center">
            <a class="example_b" href="tokopedei" target="_blank" draggable="false">beli</a>
            </div>';
        }else if ($value === false) {
            echo("stok habis<br>");       
        } 
    }
    echo '</div>';
    // echo "<br>";
} 
?>

</body>
</html>




