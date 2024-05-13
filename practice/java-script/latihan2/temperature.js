function celsiusToFahrenheit(celsius) {
  return (celsius * 9/5) + 32;
}


function fahrenheitToCelsius(fahrenheit) {
  return (fahrenheit - 32) * 5/9;
}


function celsiusToReamur(celsius) {
  return celsius * 4/5;
}


function reamurToCelsius(reamur) {
  return reamur * 5/4;
}

console.log("Celcius to Fahrenheit : " + celsiusToFahrenheit(25) + " F"); 
console.log("Fahrenheit to Celcius : " + fahrenheitToCelsius(77) + " C"); 
console.log("Celcius to Reamur     : " + celsiusToReamur(25) + " R"); 
console.log("Reamur to Celcius     : " + reamurToCelsius(20) + " C"); 
