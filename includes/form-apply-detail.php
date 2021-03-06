<form id="regForm" action="" method="post">

    <!-- Circles which indicates the steps of the form: -->
    <div style="text-align:center;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
    </div>

    <!-- One "tab" for each step in the form: -->
    <div class="tab">
        <h1>About you:</h1>
        <div class="row">
            <div class="col">
                <label for="borrow">How much do you need to borrow? ($)</label><span class="error"></span>
                <input id="borrow" type="text" placeholder="Up to $5000" value="<?php if(isset($borrow))  { echo $borrow; }; ?>"
                    name="borrow">
                
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="fname">First Name </label>
                <input type="text" placeholder="FirstName" value="" name="fname" id="fname" >
            </div>
            <div class="col">
                <label for="lname">Last Name </label>
                <input type="text" placeholder="LastName" value="" name="lname" id="lname">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="email">Email </label>
                <input type="text" placeholder="Email" value="" name="email" id="email">
            </div>
            <div class="col">
                <label for="cemail">Confirm Email </label>
                <input type="text" placeholder="Email" value="" name="cemail" id="cemail">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="street">Street Address </label>
                <input type="text" placeholder="No PO Box please" value="" name="street" id="street">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="city">City</label>
                <input type="text" placeholder="City" value="" name="city" id="city">
            </div>
            <div class="col">
                <label for="state">State</label>
                <?php include('includes/state-dropdown.php'); ?>
                
            </div>
        </div>


        <div class="row">
            <div class="col">
                <label for="mobile">Mobile Phone </label>
                <input type="text" placeholder="Mobile Phone" value="" name="mobile" id="mobile">
            </div>
        </div>


        <div class="row">
            <div class="col">
                <label for="months_at_address">Months at address</label>
                <select name="months_at_address" id="months_at_address" class="form-control">
                    <option value="1">under 1 year</option>
                    <option value="3">under 3 years</option>
                    <option value="5">under 5 years</option>
                    <option value="6">5+ years</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="homeowner">Are You a Homeowner?</label>
                <select name="homeowner" id="homeowner" class="form-control">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="license_state"> Driver License State</label>
                <?php include('includes/license-state-dropdown.php'); ?>
            </div>
            <div class="col">
                <label for="license_number">License # </label>
                <input type="text" placeholder="License #" value="" name="license_number" id="license_number">
            </div>
            <div class="col">
                <label for="license_exp"> License Exp</label>
                <input type="month" placeholder="License Exp" value="" name="license_exp" id="license_exp">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="dob"> Date of birth</label>
                <input type="date" placeholder="Date of birth" value="" name="dob" id="dob" min="1900-01-01" max="2020-12-31">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="social_security_number"> Social Security Number </label>
                <input type="text" placeholder="XXX-XX-XXXX" size="9" value="" name="social_security_number" id="social_security_number">
            </div>
            <div class="col">
                <label for="csocial_security_number"> Confirm Social Security </label>
                <input type="text" placeholder="XXX-XX-XXXX" size="9" value="" name="csocial_security_number" id="csocial_security_number">
            </div>
        </div>
    </div>



    <div class="tab">
        <h1>Income:</h1>
        <div class="row">
            <div class="col">
                <label for="fname">Source of income </label>
                <select name="source_of_income" id="source_of_income" class="form-control"
                    onchange="change_source_of_income()">
                    <option value="Employment">Employment</option>
                    <option value="Self-Employed">Self-Employed</option>
                    <option value="Retired/Benefits">Retired/Benefits</option>
                    <option value="Retired/Benefits">Retired/Benefits</option>
                </select>
            </div>
        </div>
        <span class="employement" id="employement">
            <div class="row Employment1" id="Employment1">
                <div class="col">
                    <label for="employer_name"> Employer Name</label>
                    <input type="text" placeholder="Employer Name" value="" name="employer_name" id="employer_name">
                </div>
                <div class="col">
                    <label for="months_employed"> Months Employed</label>
                    <input type="text" placeholder="Months Employed" value="" name="months_employed" id="months_employed">
                </div>
            </div>
            <div class="row Employment2" id="Employment2">
                <div class="col">
                    <label for="emploer_phone"> Employer Phone</label>
                    <input type="text" placeholder="Employer Phone" value="" size="10" name="emploer_phone" id="emploer_phone">
                </div>
            </div>
        </span>

        <div class="row" id="Employment3">
            <div class="col">
                <label for="gross_monthly_income"> Gross Monthly Income ($))</label>
                <input type="text" placeholder=" Gross Monthly Income" value="" size="" name="gross_monthly_income" id="gross_monthly_income">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="credit_score">What is your credit score?</label>
                <select name="credit_score" id="credit_score" class="form-control">
                    <option value="Excellent Credit">Excellent Credit (+720)</option>
                    <option value="Good Credit">Good Credit (660-719)</option>
                    <option value="Fair Credit">Fair Credit (500-659)</option>
                    <option value="Poor Credit">Poor Credit (Below 500)</option>
                    <option value="Not Sure">Not Sure</option>
                </select>
            </div>

        </div>


    </div>




    <div class="tab">
        <h1>Financial Information:</h1>
        <div class="row">
            <div class="col">
                <label for="aba_routing_number"> ABA/Routing number</label>
                <input type="text" placeholder="" value="" name="aba_routing_number" id="aba_routing_number" size="9">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="acc_number"> Account Number</label>
                <input type="text" placeholder="" value="" name="acc_number" id="acc_number">
            </div>
            <div class="col">
                <label for="cacc_number"> Confirm Account Number</label>
                <input type="text" placeholder="" value="" name="cacc_number" id="cacc_number" >
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="type_of_acc">Type of Account</label>
                <select name="type_of_acc" id="type_of_acc" class="form-control">
                    <option value="Checking">Checking</option>
                    <option value="Savings">Savings</option>
                </select>
            </div>
        </div>

    </div>



    <div class="tab">
        <h1>Repayment:</h1>
        <div class="row">
            <div class="col">
                <label for="repay_by"> Repay with same bank account or with debit/credit card?</label>
                <select name="repay_by" id="repay_by" class="form-control" onchange="change_repay_by()" >
                    <option value="bank"> bank account </option>
                    <option value="card"> debit/credit card</option>
                </select>
            </div>
        </div>
        <span class="card_span" id="card_span">
            <div class="row">
                <div class="col card" id="">
                    <label for="card_type"> Type</label>
                    <select name="card_type" id="card_type" class="form-control">
                        <option value="debit">debit</option>
                        <option value="credit">credit</option>
                    </select>
                </div>
                <div class="col card" id="">
                    <label for="card_brand"> Brand</label>
                    <select name="card_brand" id="card_brand" class="form-control">
                        <option value="visa"> Visa </option>
                        <option value="mastercard"> Mastercard</option>
                        <option value="discover"> Discover</option>
                        <option value="american express"> American Express</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col card" id="">
                    <label for="card_cc"> CC </label>
                    <input type="text" placeholder="CC" value="" name="card_cc" id="card_cc" size="16">
                </div>
                <div class="col card" id="">
                    <label for="card_exp"> Exp </label>
                    <input type="month" placeholder="MM/YY" value="" name="card_exp" id="card_exp" size="">
                </div>
                <div class="col card" id="">
                    <label for="card_cvv"> CVV </label>
                    <input type="text" placeholder="CVV" value="" name="card_cvv" id="card_cvv"  >
                </div>
            </div>
        </span>

        <div class="row">
            <div class="col card">
                <input class="form-check-input" type="checkbox" value="" id="agree_terms" name="agree_terms">
                <label class="form-check-label" for="agree_terms">
                    <a href="terms-and-conditions.php">Agree to terms of use</a>
                </label>

            </div>
        </div>
    </div>



    <div style="overflow:auto;">
        <div style="float:right;">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
        </div>
    </div>

</form>



<script src="assets/js/form-apply-details-validation.js"></script>


<script>
//ends



var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
        $( "#nextBtn" ).addClass( "submit" );

    } else {
        document.getElementById("nextBtn").innerHTML = "Next";
    }
    //... and run a function that will display the correct step indicator:
    fixStepIndicator(n)
}

function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:

       if (n == 1 && !validateForm()) return false; //commented for testing


    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
}

function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:

    //console.log(y);
    //console.log(y.length);
    for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "" 
        && ($(y[i]).attr('id') != 'card_cc') 
        && ($(y[i]).attr('id') != 'card_exp')
        && ($(y[i]).attr('id') != 'card_cvv')
        && ($(y[i]).attr('id') != 'agree_terms')
        && ($(y[i]).attr('id') != 'employer_name') 
        && ($(y[i]).attr('id') != 'months_employed') 
        && ($(y[i]).attr('id') != 'emploer_phone') 
        
        ) {
            // add an "invalid" class to the field:
            y[i].className += " invalid";
            // and set the current valid status to false
            valid = false;
        }
    }
    // If the valid status is true, mark the step as finished and valid:
   // alert(valid);
    if (valid) {
        
        document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
}

function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
}



function change_source_of_income() {
    var source_of_income = $("#source_of_income").val();
    //alert(source_of_income);
    if (source_of_income == 'Employment') {
        $("#employement").show();
    } else {
        $("#employement").hide();
    }
}

var source_of_income = $("#source_of_income").val();
//alert(source_of_income);
if (source_of_income == 'Employment') {
    $("#employement").show();
} else {
    $("#employement").hide();
}


function change_repay_by() {
    var source_of_income = $("#repay_by").val();
    //alert(source_of_income);
    if (source_of_income == 'card') {
        $("#card_span").show();
    } else {
        $("#card_span").hide();
    }
}

var source_of_income = $("#repay_by").val();
//alert(source_of_income);
if (source_of_income == 'card') {
    $("#card_span").show();
} else {
    $("#card_span").hide();
}

// var source_of_income = document.getElementById("source_of_income").selected;
// if(source_of_income == 'Employment') {
//   alert(1);
//   document.getElementsByClassName('employement')[0].style.visibility = '';
// } else {
//   alert(2);
//   document.getElementsByClassName('employement')[0].style.visibility = 'hidden';
// }

// var elem = document.getElementById("source_of_income");
// elem.onchange = function() {
//     var hiddenDiv = document.getElementById("Employment1");
//     hiddenDiv.style.display = (this.value == "") ? "none" : "block";

//     var hiddenDiv = document.getElementById("Employment2");
//     hiddenDiv.style.display = (this.value == "") ? "none" : "block";
// };
</script>