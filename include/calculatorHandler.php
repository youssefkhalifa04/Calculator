<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $expression = $_POST['screen'];

    var_dump($expression);

    if (preg_match('/\/\s*0+(?![.0-9])/', $expression)) {
        $result = "MathError";
    } elseif (preg_match('/^[0-9+\-*/(). %]+$/', $expression) &&
              !preg_match('/[\+\-\*\/]{2,}/', $expression)) {
        try {
            $result = eval("return $expression;");
        } catch (Throwable $e) {
            $result = "Error";
        }
    } else {
        $result = "SynthaxError";
    }

    header("Location: ../index.php?result=" . urlencode($result));
    exit;
}
?>
