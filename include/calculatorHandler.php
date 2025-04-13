<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $expression = $_POST['screen'];

    
    var_dump($expression);
    
    
    $result = eval('return ' . $expression . ';');

    header("Location: ../index.php?result=" . urlencode($result));
    exit;
}
