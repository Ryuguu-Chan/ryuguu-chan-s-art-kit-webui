document.body.onload = function() {
    let widthTextBox = document.getElementById("canvasWidthTextBox");
    let heightTextBox = document.getElementById("canvasHeightTextBox");
    let submitButton = document.getElementById("submitButton");

    let previousWidthValue = widthTextBox.value;
    let previousHeightValue = heightTextBox.value;

    function validate(width, height) {
        console.log(width > 0 && height > 0);
        (width > 0 && height > 0) ? submitButton.toggleAttribute("disabled", false) : submitButton.toggleAttribute("disabled", true);
    }

    widthTextBox.onkeyup = function(e) {
        if ((+widthTextBox.value) == "") {
            widthTextBox.value = previousWidthValue;
        }
        else {
            previousWidthValue = widthTextBox.value;
        }

        validate(widthTextBox.value, heightTextBox.value);
    }

    heightTextBox.onkeyup = function(e) {
        if ((+heightTextBox.value) == "") {
            heightTextBox.value = previousHeightValue;
        }
        else {
            previousHeightValue = heightTextBox.value;
        }

        validate(widthTextBox.value, heightTextBox.value);
    }
}