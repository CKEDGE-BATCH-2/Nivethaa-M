<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>FACTS ABOUT PLACES</h2>
<?php
class places {
     function __construct(){
            echo "1.Italy has a free, public wine fountain. <br>";
            $this->name = "Italy ";
        }
        function __destruct(){
            echo "2.Great Wall of China's strength comes from sticky rice. " ;
            $this->name ="China";
        }
    }
$obj = new places();
?>
</body>
</html>