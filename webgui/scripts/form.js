document.body.onload = function() {
    let widthTextBox = document.getElementById("canvasWidthTextBox");
    let heightTextBox = document.getElementById("canvasHeightTextBox");
    
    let submissionButtons = document.getElementsByClassName("submissionButton");

    let previousWidthValue = widthTextBox.value;
    let previousHeightValue = heightTextBox.value;

    function validate(width, height, submissionButton) {
        (width > 0 && height > 0) ? submissionButton.toggleAttribute("disabled", false) : submissionButton.toggleAttribute("disabled", true);
    }

    widthTextBox.onkeyup = function(e) {
        if ((+widthTextBox.value) == "") {
            widthTextBox.value = previousWidthValue;
        }
        else {
            previousWidthValue = widthTextBox.value;
        }

        for (let i = 0; i < submissionButtons.length; i++) {
            validate(widthTextBox.value, heightTextBox.value, submissionButtons[i]);
        }
    }

    heightTextBox.onkeyup = function(e) {
        if ((+heightTextBox.value) == "") {
            heightTextBox.value = previousHeightValue;
        }
        else {
            previousHeightValue = heightTextBox.value;
        }

        for (let i = 0; i < submissionButtons.length; i++) {
            validate(widthTextBox.value, heightTextBox.value, submissionButtons[i]);
        }
    }
}