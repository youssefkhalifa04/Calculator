const screen = document.getElementById('screen');

    function changeScreen(value) {
      screen.value += value;
    }

    function clearScreen() {
      screen.value = '';
    }

    function backspace() {
      screen.value = screen.value.slice(0, -1);
    }

    
    document.getElementById('calcForm').addEventListener('submit', function () {
      
    });