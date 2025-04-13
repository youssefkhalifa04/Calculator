<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $expression = $_POST['screen'];

    // Optional for debugging
    // var_dump($expression);

    // Check for division by zero first
    if (preg_match('/\/\s*0+(?![.0-9])/', $expression)) {
        $result = "MathError";
    }
    // Validate overall expression syntax
    elseif (
        preg_match('/^[0-9\s()+\-*\/%.]+$/', $expression) &&    // only allowed characters
        !preg_match('/[+\-*\/%]{2,}/', $expression) &&          // no repeated operators
        !preg_match('/[\/*+\-]$/', trim($expression))        // doesn't start with operator
    ) {
        try {
            $result = eval("return $expression;");
        } catch (Throwable $e) {
            $result = "Error";
        }
    }
    // Catch any other syntax issues
    else {
        $result = "SyntaxError";
    }

    // Redirect with result
    header("Location: ../index.php?result=" . urlencode($result));
    exit;
}
?>
