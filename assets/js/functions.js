if(document.getElementById('account')){

    //Convert Points Ajax
    let convertBtn = document.getElementById('convertPointsBtn');
    convertBtn.addEventListener("click",convertPoints);
    function convertPoints(){
        let points = document.getElementById('points').value;

        console.log("The type of points is " + typeof(points));
        console.log("Amount of points: " + points);

        if (points < 0){
            alert("0 points lol not possible!");
        }else if (points < 100){
            alert("Less than 100 impossible");
        }else if (points > 100000){
            alert("Max convert at once is 100 000!");
        }else if (points === ""){
            alert("Enter points please!");
        }else if (points === undefined){
            alert("Enter points please!");
        }else if (points === 0){
            alert("Enter points please!");
        }else{
            let data = {points: points};
            console.log(data);

            let httpR = new XMLHttpRequest(); // simplified for clarity
            let url = "includes/convert_points.php";
            httpR.open("POST", url, true); // sending as POST
            httpR.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            httpR.onreadystatechange = function() { //Call a function when the state changes.
                if(httpR.readyState === 4 && httpR.status === 200) { // complete and no errors
                    // alert(httpX.responseText); // some processing here, or whatever you want to do with the response
                    document.getElementById('convertedPointsSuccess').innerHTML = httpR.responseText;
                }
            };
            data = JSON.stringify(data);
            httpR.send(data);
        }
    }

    //Calculate converted points
    let pointsInput = document.getElementById("points");
    pointsInput.addEventListener("keyup",calculateConvertedPoints);
    function calculateConvertedPoints(){
        let input = document.getElementById('points').value;

        let membership = document.getElementById("membership").innerText;
        let points = document.getElementById('points');
        let message = document.getElementById("errorPoints");
        let convertedPoints = document.getElementById("convertedPoints")

        function addInvalidStyle(){
            if (points.classList.contains('is-valid')){
                // points.classList.remove("is-valid");
                points.classList.add("is-invalid");
            }
            if (message.classList.contains("valid-feedback")){
                // message.classList.remove("valid-feedback");
                message.classList.add("invalid-feedback");
            }
        }

        if (membership === "VIP"){
            if(!input.match(/^[0-9]+$/)){

                addInvalidStyle();

                message.innerHTML = "Enter Valid Amount of points!";
                convertedPoints.innerHTML = "Points to 0.00 USD";
            }else if (input < 100){

                addInvalidStyle();

                convertedPoints.innerHTML = "Points to 0.00 USD";
                message.innerHTML = "You can convert minimum 100 points!"

            }else if (input > 100000){
                console.log("Max 100 000");

                addInvalidStyle();

                convertedPoints.innerHTML = "Points to 0.00 USD";
                message.innerHTML = "You can convert maximum 100 000 points at once!"
            }else{

                points.classList.remove("is-invalid");
                points.classList.add("is-valid");

                message.classList.remove("invalid-feedback");
                message.classList.add("valid-feedback");

                message.innerHTML = "Good!";
                convertedPoints.innerHTML = "Points to " + (input * 0.001).toFixed(3) + " USD";
            }
        }else{
            if(!input.match(/^[0-9]+$/)){

                addInvalidStyle();

                message.innerHTML = "Enter Valid Amount of points!";
                convertedPoints.innerHTML = "Points to 0.00 USD";
            }else if (input < 100){

                addInvalidStyle();

                convertedPoints.innerHTML = "Points to 0.00 USD";
                message.innerHTML = "You can convert minimum 100 points!"
            }else if (input > 100000){

                addInvalidStyle();

                convertedPoints.innerHTML = "Points to 0.00 USD";
                message.innerHTML = "You can convert maximum 100 000 points at once!"
            }else{
                points.classList.remove("is-invalid");
                points.classList.add("is-valid");

                message.classList.remove("invalid-feedback");
                message.classList.add("valid-feedback");

                message.innerHTML = "Good!";
                convertedPoints.innerHTML = (input * 0.0002).toFixed(3) + " USD";
            }
        }
    }

}else if (document.getElementById('add_funds')){

}else if (document.getElementById('add_new_ad')){

    // Validating adding new ad
    let selectedAdType = document.getElementById('adTypeSelect');
    selectedAdType.addEventListener('change',addCallToAction);
    function addCallToAction(){
        let selectedAdType = document.getElementById('adTypeSelect');
        let adImgURL = '<label class="form-label" for="adImgInput">Image URL</label>' +
            '<input class="form-control" type="text" name="adImg" '+
            'placeholder="https://site.com/image.gif" '+
            'pattern="https:\\/\\/(www\\.)?[-a-zA-Z0-9@:%._\\+~#=]{1,256}\\.[a-zA-Z0-9()]{2,6}\\b([-a-zA-Z0-9()@:%_\\+.~#?&//=]*)" '+
            'id="adImgInput" required/>' +
            '<div id="InvestmentErrorMessage" class="invalid-feedback">'+
            'Add Image URL! Recommended: (415x225 px)</div>';

        let callToAction = '<label class="form-label" for="callToActionInput">Call to Action</label>' +
            '<input class="form-control" type="text" name="calToAction" '+
            'placeholder="Call to Action Button" pattern="^([a-zA-Z0-9$.?!,: ]{5,45})$" id="callToActionInput" required/>' +
            '<div class="invalid-feedback">Add Call To Action Text!</div>';

        if (selectedAdType.value === 'Image_Ad'){
            document.getElementById('adImgUrl').innerHTML= adImgURL;
        }else if (selectedAdType.value === 'Featured_Ad'){
            document.getElementById('adImgUrl').innerHTML= callToAction;
        }else{
            document.getElementById('adImgUrl').innerHTML= "";
        }
    }

}else if (document.getElementById('add_new_post')){

}else if (document.getElementById('affiliate_dashboard')){
    //activating tool tip for this page and copyBtn
    let copyBtn = document.getElementById('btn-copy')
    let tooltip = new bootstrap.Tooltip(copyBtn, {
        boundary: document.body // or document.querySelector('#boundary')
    })

    // Copy referral URL
    function copyFunc(){
        let textToCopy = document.getElementById("ref-Url");
        textToCopy.select();
        textToCopy.setSelectionRange(0,99999)
        document.execCommand("copy");
    }

}else if (document.getElementById('delete_account')){

}else if (document.getElementById('earnings')){

}else if (document.getElementById('edit_ad')){

}else if (document.getElementById('edit_profile')){

}else if (document.getElementById('login')){

}else if (document.getElementById('my_ads')){

}else if (document.getElementById('my_investments')){

}else if (document.getElementById('my_subscription')){

}else if (document.getElementById('payouts')){

}else if (document.getElementById('promo_tools')){

}else if (document.getElementById('register')){

}else if (document.getElementById('report_scam')){

}else if (document.getElementById('send_idea')){

}else if (document.getElementById('upgrade')){

    //Upgrade Price Switcher
    let priceSwitch = document.getElementById('upgradePriceSwitch');
    priceSwitch.addEventListener('change',priceSwitcher);
    function priceSwitcher(){
        let priceElement = document.querySelectorAll('.plan-price');
        let priceSwitch = document.getElementById('upgradePriceSwitch');
        let plan1a = document.querySelector('#firstPlanA');
        let plan2a = document.querySelector('#secondPlanA');
        let plan3a = document.querySelector('#thirdPlanA');

        if (priceSwitch.checked) {
            priceElement.forEach(pItem => {
                pItem.innerHTML = pItem.getAttribute('data-annual-price');
            });
            plan1a.href="upgrade_plan.php?plan_id=1&price=discounted";
            plan2a.href="upgrade_plan.php?plan_id=2&price=discounted";
            plan3a.href="upgrade_plan.php?plan_id=3&price=discounted";
        } else {
            priceElement.forEach(pItem => {
                pItem.innerHTML = pItem.getAttribute('data-monthly-price');
            });
            plan1a.href="upgrade_plan.php?plan_id=1&price=full";
            plan2a.href="upgrade_plan.php?plan_id=2&price=full";
            plan3a.href="upgrade_plan.php?plan_id=3&price=full";
        }
    }

}else if (document.getElementById('upgrade_plan')){

let upgradeButton = document.getElementById("upgradeBtn");
upgradeButton.addEventListener("click",()=>{

    let balance = document.querySelector('h3').getAttribute('data-balance');

    console.log("Balance is " + balance);

    let planPrice = document.getElementById("planPrice").innerText;
    console.log("Plan price is " + planPrice);

    if (parseFloat(balance) < parseFloat(planPrice)){
        let diference = planPrice - balance;
        alert("Not Enough Money! You need $" + diference + "more!")
    }else{
        alert("Your balance is enough!")
    }
});

}else if (document.getElementById('view_article')){
    let reply = document.getElementById('reply_1');
    reply.addEventListener("click",openCommentBox);

    let commentBox = "<div class=\"form-floating mt-4 mx-3\">\n" +
        "                <textarea class=\"form-control\" placeholder=\"Join the discussion\" id=\"floatingTextarea2\" style=\"height: 100px\"></textarea>\n" +
        "                <label for=\"floatingTextarea2\">Add Comment</label>\n" +
        "            </div>\n" +
        "\n" +
        "            <div class=\"d-flex justify-content-end mt-2\">\n" +
        "                <button type=\"button\" class=\"btn btn-outline-primary\">Publish</button>\n" +
        "            </div>";

    function openCommentBox(){
        document.getElementById('commentBox').innerHTML = commentBox;
    }
}

//Back To Top
window.onscroll = function() {BackToTopFunction()};
function BackToTopFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("backToTopBtn").className = "back-top-show";
        let backToTop = document.getElementById('backToTopBtn');
        backToTop.addEventListener('click',() => window.scrollTo({
            top: 0,
            behavior: 'smooth'
        }));
    } else {
        document.getElementById("backToTopBtn").className = "back-top";
    }
}

//Reg Form Validation


//Validate text input
// function validateText(input){
//
// }
//Validate email input
// function validateEmail(input){
//
// }
//Validate Integer 1
// function validateInteger(input){
//
// }
//Validate Amount 0.00
// function validateAmount(input){
//
// }
//Validate Password
// function validatePassword(input){
//
// }
//Validate checkbox
// function validateCheckbox(input){
//
// }
