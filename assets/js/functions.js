
// Copy text
function copyFunc(){
    let textToCopy = document.getElementById("ref-Url");
    textToCopy.select();
    textToCopy.setSelectionRange(0,99999)
    document.execCommand("copy");
}

//Calculate converted points
function calculateConvertedPoints(input){
    let membership = document.getElementById("membership").innerText;
    let points = document.getElementById("points");
    let message = document.getElementById("errorPoints");
    let convertedPoints = document.getElementById("convertedPoints")

    if (membership === "VIP"){
        if(!input.match(/^[0-9]+$/)){
            points.classList.remove("is-valid");
            points.classList.add("is-invalid");
            message.classList.remove("valid-feedback");
            message.classList.add("invalid-feedback");
            message.innerHTML = "Enter Valid Amount of points!";
            convertedPoints.innerHTML = "Points to 0.00 USD";
        }else if (input < 100){
            points.classList.remove("is-valid");
            points.classList.add("is-invalid");
            message.classList.remove("valid-feedback");
            message.classList.add("invalid-feedback");
            convertedPoints.innerHTML = "Points to 0.00 USD";
            message.innerHTML = "You can convert minimum 100 points!"
        }else if (input > 100000){
            points.classList.remove("is-valid");
            points.classList.add("is-invalid");
            message.classList.remove("valid-feedback");
            message.classList.add("invalid-feedback");
            convertedPoints.innerHTML = "Points to 0.00 USD";
            message.innerHTML = "You can convert maximum 100 000 points at once!"
        }else{
            points.classList.remove("is-invalid");
            points.classList.add("is-valid");
            message.classList.remove("invalid-feedback");
            message.classList.add("valid-feedback");
            message.innerHTML = "Good!";
            convertedPoints.innerHTML = "Points to " + (input * 0.001).toFixed(2) + " USD";
        }
    }else{
        if(!input.match(/^[0-9]+$/)){
            points.classList.remove("is-valid");
            points.classList.add("is-invalid");
            message.classList.remove("valid-feedback");
            message.classList.add("invalid-feedback");
            message.innerHTML = "Enter Valid Amount of points!";
            convertedPoints.innerHTML = "Points to 0.00 USD";
        }else if (input < 100){
            points.classList.remove("is-valid");
            points.classList.add("is-invalid");
            message.classList.remove("valid-feedback");
            message.classList.add("invalid-feedback");
            convertedPoints.innerHTML = "Points to 0.00 USD";
            message.innerHTML = "You can convert minimum 100 points!"
        }else if (input > 100000){
            points.classList.remove("is-valid");
            points.classList.add("is-invalid");
            message.classList.remove("valid-feedback");
            message.classList.add("invalid-feedback");
            convertedPoints.innerHTML = "Points to 0.00 USD";
            message.innerHTML = "You can convert maximum 100 000 points at once!"
        }else{
            points.classList.remove("is-invalid");
            points.classList.add("is-valid");
            message.classList.remove("invalid-feedback");
            message.classList.add("valid-feedback");
            message.innerHTML = "Good!";
            convertedPoints.innerHTML = (input * 0.0002).toFixed(2) + " USD";
        }
    }
}

//Reg Form Validation


//Validate text input
function validateText(input){

}
//Validate email input
function validateEmail(input){

}
//Validate Integer 1
function validateInteger(input){

}
//Validate Amount 0.00
function validateAmount(input){

}
//Validate Password
function validatePassword(input){

}
//Validate checkbox
function validateCheckbox(input){

}
