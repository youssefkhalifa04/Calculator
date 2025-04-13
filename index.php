<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Calculator</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <center>
    <?php
        $result = $_GET['result'] ?? '';
    ?>

    <div class="bg-gray-900 rounded-3xl w-1/6 mt-28 p-2">
      <form id="calcForm" action="include/calculatorHandler.php" method="post">
        <div class="w-full h-20 mb-2 text-right">
          <input type="text" name="screen" id="screen" value="<?php echo htmlspecialchars($result); ?>" readonly placeholder="0" class="w-full h-full p-4 text-right bg-gray-800 text-white text-3xl rounded-t-xl">
        </div>
        <div class="grid grid-cols-4 gap-1 w-full">
          <button type="button" onclick="clearScreen()" class="bg-red-500 text-white text-2xl w-full h-16">C</button>
          <button type="button" onclick="backspace()" class="bg-red-500 text-white text-2xl w-full h-16">⌫</button>
          <button type="button" onclick="changeScreen('%')" class="bg-gray-500 text-white text-2xl w-full h-16">%</button>
          <button type="button" onclick="changeScreen('/')" class="bg-gray-500 text-white text-2xl w-full h-16">÷</button>

          <button type="button" onclick="changeScreen('7')" class="bg-gray-500 text-white text-2xl w-full h-16">7</button>
          <button type="button" onclick="changeScreen('8')" class="bg-gray-500 text-white text-2xl w-full h-16">8</button>
          <button type="button" onclick="changeScreen('9')" class="bg-gray-500 text-white text-2xl w-full h-16">9</button>
          <button type="button" onclick="changeScreen('*')" class="bg-gray-500 text-white text-2xl w-full h-16">×</button>

          <button type="button" onclick="changeScreen('4')" class="bg-gray-500 text-white text-2xl w-full h-16">4</button>
          <button type="button" onclick="changeScreen('5')" class="bg-gray-500 text-white text-2xl w-full h-16">5</button>
          <button type="button" onclick="changeScreen('6')" class="bg-gray-500 text-white text-2xl w-full h-16">6</button>
          <button type="button" onclick="changeScreen('-')" class="bg-gray-500 text-white text-2xl w-full h-16">−</button>

          <button type="button" onclick="changeScreen('1')" class="bg-gray-500 text-white text-2xl w-full h-16">1</button>
          <button type="button" onclick="changeScreen('2')" class="bg-gray-500 text-white text-2xl w-full h-16">2</button>
          <button type="button" onclick="changeScreen('3')" class="bg-gray-500 text-white text-2xl w-full h-16">3</button>
          <button type="button" onclick="changeScreen('+')" class="bg-gray-500 text-white text-2xl w-full h-16">+</button>

          <button type="button" onclick="changeScreen('0')" class="bg-gray-500 text-white text-2xl w-full h-16 rounded-bl-xl">0</button>
          <button type="button" onclick="changeScreen('.')" class="bg-gray-500 text-white text-2xl w-full h-16">.</button>
          <button type="submit" class="bg-gray-500 text-white text-2xl w-full h-16">=</button>
        </div>
      </form>
    </div>
  </center>

  <script src="script.js"></script>
    
  
</body>
</html>
