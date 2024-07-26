// BMI Calculator 1-5
// https://codesandbox.io/s/bmi-calculator-part-1-5-px1gg

// Mini Exercise | BMI Calculator (Part 1)
// var weight = 90;
// var height = 2.2
// var bmi = weight / (height * height);

// console.log("Your BMI is: " + bmi.toFixed(2));

// // Mini Exercise | BMI Calculator (Part 2)
// var weight = 90;
// var height = 2.2
// var bmi = weight / (height * height);

// alert("Your BMI is: " + bmi.toFixed(2));

// // Mini Exercise | BMI Calculator (Part 3)
// var weight = prompt("What is your weight?");
// var height = prompt("What is your height?")
// var bmi = weight / (height * height);

// alert("Your BMI is: " + bmi.toFixed(2));

// Mini Exercise | BMI Calculator (Part 4)

// var weight = prompt("What is your weight?");
// var height = prompt("What is your height?")
// var bmi = weight / (height * height);

// if(bmi < 18.5){
//   alert("Your BMI is: " + bmi.toFixed(2) + "\n" + "You are underweight. Eat more yah!")
// } else if (bmi > 18.5 && bmi < 25){
//   alert("Your BMI is: " + bmi.toFixed(2) + "\n" + "You are fine! Normal weight.")
// } else if (bmi > 25){
//   alert("Your BMI is: " + bmi.toFixed(2) + "\n" + "Oh no...You are fat! Eat less yah!")
// }

// Mini Exercise | BMI Calculator (Part 5)
var calcBMI = function () {
  var weight = prompt("What is your weight?");
  var height = prompt("What is your height?");
  var bmi = weight / (height * height);

  if (bmi < 18.5) {
    alert(
      "Your BMI is: " +
        bmi.toFixed(2) +
        "\n" +
        "You are underweight. Eat more yah!"
    );
  } else if (bmi > 18.5 && bmi < 25) {
    alert(
      "Your BMI is: " + bmi.toFixed(2) + "\n" + "You are fine! Normal weight."
    );
  } else if (bmi > 25) {
    alert(
      "Your BMI is: " +
        bmi.toFixed(2) +
        "\n" +
        "Oh no...You are fat! Eat less yah!"
    );
  }
};

// Mini Exercise | BMI Calculator (Part 6)
// https://codesandbox.io/s/bmi-calculator-part-6-s1t5z?file=/script.js
var calcBMI = function () {
  var weight = document.getElementById("weight").value;
  var height = document.getElementById("height").value;
  var bmi = weight / (height * height);

  if (bmi < 18.5) {
    alert(
      "Your BMI is: " +
        bmi.toFixed(2) +
        "\n" +
        "You are underweight. Eat more yah!"
    );
  } else if (bmi > 18.5 && bmi < 25) {
    alert(
      "Your BMI is: " + bmi.toFixed(2) + "\n" + "You are fine! Normal weight."
    );
  } else if (bmi > 25) {
    alert(
      "Your BMI is: " +
        bmi.toFixed(2) +
        "\n" +
        "Oh no...You are fat! Eat less yah!"
    );
  }
};

// Mini Exercise | BMI Calculator (Part 6.1 Append)
// https://codesandbox.io/s/bmi-calculator-part-61-4n2qg?file=/index.html

var checkBMI = () => {
  var weight = document.getElementById("weight").value;
  var height = document.getElementById("height").value;
  var bmi = weight / (height * height);

  if (bmi < 18.5) {
    document.getElementById("result").innerHTML =
      "<strong>Your BMI is: </strong>" +
      bmi.toFixed(2) +
      "<br>" +
      "<em>You are underweight. Eat more yah!</em>";
  } else if (bmi > 18.5 && bmi < 25) {
    document.getElementById("result").innerHTML =
      "<strong>Your BMI is: </strong>" +
      bmi.toFixed(2) +
      "<br>" +
      "<em>You are fine! Normal weight.</em>";
  } else if (bmi > 25) {
    document.getElementById("result").innerHTML =
      "<strong>Your BMI is: </strong>" +
      bmi.toFixed(2) +
      "<br>" +
      "<em>Oh no...You are fat! Eat less yah!</em>";
  }
};