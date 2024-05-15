function appendToDisplay(value) {
    if (['sin', 'cos', 'tan', 'sqrt'].includes(value)) {
        document.getElementById("display").value += value + '(';
    } else {
        document.getElementById("display").value += value;
    }
}

function clearDisplay() {
    document.getElementById("display").value = "";
}

function backspace() {
    var display = document.getElementById("display");
    display.value = display.value.slice(0, -1);
}

function calculate() {
    try {
        var result = math.evaluate(document.getElementById("display").value);
        document.getElementById("display").value = result;
    } catch (error) {
        document.getElementById("display").value = "Error";
    }
}
