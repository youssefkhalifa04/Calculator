<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <center>
    <div class="bg-gray-900 rounded-3xl w-1/6 mt-28 p-2">
    <form action="include/calculatorHandler.php" method="post">
        <div class="w-full h-20">
            <input type="text" name="screen" disabled class="w-full h-full bg-gray-800 text-white text-right text-3xl rounded-t-3xl">
        </div>
        <div class="grid grid-cols-4 gap-1 w-full">
            <button onclick="clear()"  name="clear" class="w-full h-16 cursor-pointer bg-red-500 text-white text-2xl">C</button>
            <button onclick="backspace()" name="backspace" class="w-full h-16 cursor-pointer bg-red-500 text-white text-2xl">⌫</button>
            <button onclick="changeScreen('%')"  name="percent" class="w-full h-16 cursor-pointer bg-gray-500 text-white text-2xl">%</button>
            <button onclick="changeScreen('/')" name="divide" class="w-full h-16 cursor-pointer bg-gray-500 text-white text-2xl">÷</button>
            <button onclick="changeScreen('7')"  name="7" class="w-full h-16 cursor-pointer bg-gray-500 text-white text-2xl">7</button>
            <button onclick="changeScreen('8')"  name="8" class="w-full h-16 cursor-pointer bg-gray-500 text-white text-2xl">8</button>    
            <button onclick="changeScreen('9')"  name="9" class="w-full h-16 cursor-pointer bg-gray-500 text-white text-2xl">9</button>
            <button onclick="changeScreen('*')" name="multiply" class="w-full h-16 cursor-pointer bg-gray-500 text-white text-2xl">x</button>
            <button onclick="changeScreen('4')"  name="4" class="w-full h-16 cursor-pointer bg-gray-500 text-white text-2xl">4</button>
            <button onclick="changeScreen('5')"  name="5" class="w-full h-16 cursor-pointer bg-gray-500 text-white text-2xl">5</button>
            <button onclick="changeScreen('6')" name="6" class="w-full h-16 cursor-pointer bg-gray-500 text-white text-2xl">6</button>
            <button onclick="changeScreen('-')"  name="subtract" class="w-full h-16 cursor-pointer bg-gray-500 text-white text-2xl">-</button>
            <button onclick="changeScreen('1')" name="1" class="w-full h-16 cursor-pointer bg-gray-500 text-white text-2xl">1</button>
            <button onclick="changeScreen('2')"  name="2" class="w-full h-16 cursor-pointer bg-gray-500 text-white text-2xl">2</button>
            <button onclick="changeScreen('3')"  name="3" class="w-full h-16 cursor-pointer bg-gray-500 text-white text-2xl">3</button>
            <button onclick="changeScreen('+')" name="add" class="w-full h-16 cursor-pointer bg-gray-500 text-white text-2xl">+</button>
            <button  onclick="changeScreen('0')" name="0" class="w-full h-16 cursor-pointer bg-gray-500 text-white text-2xl rounded-bl-3xl">0</button>
            <button  onclick="changeScreen('.')" name="decimal" class="w-full h-16 cursor-pointer bg-gray-500 text-white text-2xl">.</button>
            <button type="submit" name="equals" class="w-full h-16 cursor-pointer bg-gray-500 text-white text-2xl">=</button>
        </div>
    </form>
    </div>
    </center>
</body>
</html>