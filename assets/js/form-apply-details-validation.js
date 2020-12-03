// $( "#borrow" ).keyup(function() {
//  //   var borrow =  $( "#borrow" ).val();
    
// });
$('#regForm input').attr('autocomplete', 'chrome-off');


$('#borrow').on('input', function() {
    var input=$(this);
    // var re = /(2[5-8][0-9]|29[0-9]|[3-9][0-9]{2}|[1-4][0-9]{3}|5000)$/;
    // var borrow=re.test(input.val());
   // console.log(is_name);
   
   var borrow=input.val();
	if(borrow >= 250 && borrow <= 5000){
        input.removeClass("invalid").addClass("valid");
        $(this).attr("style", "background-color:#c1ffdd ; border-color:#0fc2a4 !important");
    } else{
        input.removeClass("valid").addClass("invalid");$(this).attr("style", "border-color: #ec1d48 !important;");
    }
});

$('#fname').on('input', function() {
    var input=$(this);
    var re = /[a-zA-Z\s]+$/;
    var fname=re.test(input.val());
	if(fname){
        input.removeClass("invalid").addClass("valid");
        $(this).attr("style", "background-color:#c1ffdd ; border-color:#0fc2a4 !important");
    } else{
        input.removeClass("valid").addClass("invalid");$(this).attr("style", "border-color: #ec1d48 !important;");
    }
});

$('#lname').on('input', function() {
    var input=$(this);
    var re = /[a-zA-Z\s]+$/;
    var lname=re.test(input.val());
	if(lname){
        input.removeClass("invalid").addClass("valid");
        $(this).attr("style", "background-color:#c1ffdd ; border-color:#0fc2a4 !important");
    } else{
        input.removeClass("valid").addClass("invalid");$(this).attr("style", "border-color: #ec1d48 !important;");
    }
});

$('#email').on('input', function() {
    var input=$(this);
    var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var email=re.test(input.val());
	if(email){
        input.removeClass("invalid").addClass("valid");
        $(this).attr("style", "background-color:#c1ffdd ; border-color:#0fc2a4 !important");
    } else{
        input.removeClass("valid").addClass("invalid");$(this).attr("style", "border-color: #ec1d48 !important;");
    }
});

$('#cemail').on('input', function() {
    var input=$(this);
    var email = $("#email").val();

   // var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

   // var cemail=re.test(input.val());
   var cemail=input.val();
	if(cemail == email){
        input.removeClass("invalid").addClass("valid");
        $(this).attr("style", "background-color:#c1ffdd ; border-color:#0fc2a4 !important");
    } else{
        input.removeClass("valid").addClass("invalid");$(this).attr("style", "border-color: #ec1d48 !important;");
    }
});

$('#street').on('input', function() {
    var input=$(this);
   // var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var street=input.val();
	if(street){
        input.removeClass("invalid").addClass("valid");
        $(this).attr("style", "background-color:#c1ffdd ; border-color:#0fc2a4 !important");
    } else{
        input.removeClass("valid").addClass("invalid");$(this).attr("style", "border-color: #ec1d48 !important;");
    }
});


$('#city').on('input', function() {
    var input=$(this);
    var re = /[a-zA-Z\s]+$/;
    var city=re.test(input.val());
  //  var city=input.val();
	if(city){
        input.removeClass("invalid").addClass("valid");
        $(this).attr("style", "background-color:#c1ffdd ; border-color:#0fc2a4 !important");
    } else{
        input.removeClass("valid").addClass("invalid");$(this).attr("style", "border-color: #ec1d48 !important;");
    }
});

$('#mobile').on('input', function() {
    var input=$(this);
    var re = /^[0-9]{10}$/;///^[0-9]{7,16}$/;
    var mobile=re.test(input.val());
  //  var city=input.val();
	if(mobile){
        input.removeClass("invalid").addClass("valid");
        $(this).attr("style", "background-color:#c1ffdd ; border-color:#0fc2a4 !important");
    } else{
        input.removeClass("valid").addClass("invalid");$(this).attr("style", "border-color: #ec1d48 !important;");
    }
});

$('#license_number').on('input', function() {
    var input=$(this);
    var re = /^[0-9]*$/;
    var license_number=re.test(input.val());
  //  var city=input.val();
	if(license_number){
        input.removeClass("invalid").addClass("valid");
        $(this).attr("style", "background-color:#c1ffdd ; border-color:#0fc2a4 !important");
    } else{
        input.removeClass("valid").addClass("invalid");$(this).attr("style", "border-color: #ec1d48 !important;");
    }
});

// $('#license_exp').on('input', function() {
//     var input=$(this);
//     var re = /[0-9]10+$/;
//     var license_exp=re.test(input.val());
//   //  var city=input.val();
// 	if(license_exp){
//         input.removeClass("invalid").addClass("valid");
//     } else{
//         input.removeClass("valid").addClass("invalid");
//     }
// });
$('#social_security_number').on('input', function() {
    var input=$(this);
    var re = /^\d{9}$/;
    var social_security_number=re.test(input.val());
    //  var city=input.val();
    if(social_security_number){
        input.removeClass("invalid").addClass("valid");
        $(this).attr("style", "background-color:#c1ffdd ; border-color:#0fc2a4 !important");
    } else{
        input.removeClass("valid").addClass("invalid");$(this).attr("style", "border-color: #ec1d48 !important;");
    }
});

$('#csocial_security_number').on('input', function() {
    var input=$(this);
    var social_security_number = $("#social_security_number").val();

    // var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    // var cemail=re.test(input.val());
    var csocial_security_number=input.val();
    if(csocial_security_number == social_security_number){
        input.removeClass("invalid").addClass("valid");
        $(this).attr("style", "background-color:#c1ffdd ; border-color:#0fc2a4 !important");
    } else{
        input.removeClass("valid").addClass("invalid");$(this).attr("style", "border-color: #ec1d48 !important;");
    }
});


$('#employer_name').on('input', function() {
    var input=$(this);
    var re = /[a-zA-Z\s]+$/;
    var employer_name=re.test(input.val());
	if(employer_name){
        input.removeClass("invalid").addClass("valid");
        $(this).attr("style", "background-color:#c1ffdd ; border-color:#0fc2a4 !important");
    } else{
        input.removeClass("valid").addClass("invalid");$(this).attr("style", "border-color: #ec1d48 !important;");
    }
});

$('#months_employed').on('input', function() {
    var input=$(this);
    var re = /^[0-9]{1,2}$/;
    var months_employed=re.test(input.val());
	if(months_employed){
        input.removeClass("invalid").addClass("valid");
        $(this).attr("style", "background-color:#c1ffdd ; border-color:#0fc2a4 !important");
    } else{
        input.removeClass("valid").addClass("invalid");$(this).attr("style", "border-color: #ec1d48 !important;");
    }
});
    


$('#emploer_phone').on('input', function() {
    var input=$(this);
    var re = /^[0-9]{10}$/;///^[0-9]{7,16}$/;
    var emploer_phone=re.test(input.val());
  //  var city=input.val();
	if(emploer_phone){
        input.removeClass("invalid").addClass("valid");
        $(this).attr("style", "background-color:#c1ffdd ; border-color:#0fc2a4 !important");
    } else{
        input.removeClass("valid").addClass("invalid");$(this).attr("style", "border-color: #ec1d48 !important;");
    }
});


$('#gross_monthly_income').on('input', function() {
    var input=$(this);
    var re = /^[0-9]{1,10}$/;
    var gross_monthly_income=re.test(input.val());
  //  var city=input.val();
	if(gross_monthly_income){
        input.removeClass("invalid").addClass("valid");
        $(this).attr("style", "background-color:#c1ffdd ; border-color:#0fc2a4 !important");
    } else{
        input.removeClass("valid").addClass("invalid");$(this).attr("style", "border-color: #ec1d48 !important;");
    }
});

$('#gross_monthly_income').on('input', function() {
    var input=$(this);
    var re = /^[0-9]{1,10}$/;
    var gross_monthly_income=re.test(input.val());
  //  var city=input.val();
	if(gross_monthly_income){
        input.removeClass("invalid").addClass("valid");
        $(this).attr("style", "background-color:#c1ffdd ; border-color:#0fc2a4 !important");
    } else{
        input.removeClass("valid").addClass("invalid");$(this).attr("style", "border-color: #ec1d48 !important;");
    }
});


$('#aba_routing_number').on('input', function() {
    var input=$(this);
    var re = /^\d{9}$/;
    var aba_routing_number=re.test(input.val());
    //  var city=input.val();
    if(aba_routing_number){
        input.removeClass("invalid").addClass("valid");
        $(this).attr("style", "background-color:#c1ffdd ; border-color:#0fc2a4 !important");
    } else{
        input.removeClass("valid").addClass("invalid");$(this).attr("style", "border-color: #ec1d48 !important;");
    }
});


$('#acc_number').on('input', function() {
    var input=$(this);
    var re = /^[0-9]{7,16}$/;
    var aba_routing_number=re.test(input.val());
    //  var city=input.val();
    if(aba_routing_number){
        input.removeClass("invalid").addClass("valid");
        $(this).attr("style", "background-color:#c1ffdd ; border-color:#0fc2a4 !important");
    } else{
        input.removeClass("valid").addClass("invalid");$(this).attr("style", "border-color: #ec1d48 !important;");
    }
});

$('#cacc_number').on('input', function() {
    var input=$(this);
    var acc_number = $("#acc_number").val();

    // var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    // var cemail=re.test(input.val());
    var cacc_number=input.val();
    if(cacc_number == acc_number){
        input.removeClass("invalid").addClass("valid");
        $(this).attr("style", "background-color:#c1ffdd ; border-color:#0fc2a4 !important");
    } else{
        input.removeClass("valid").addClass("invalid");$(this).attr("style", "border-color: #ec1d48 !important;");
    }
});



$('#card_cc').on('input', function() {
    var input=$(this);
    var re = /[0-9]+$/;
    var card_cc=re.test(input.val());
	if(card_cc){
        input.removeClass("invalid").addClass("valid");
        $(this).attr("style", "background-color:#c1ffdd ; border-color:#0fc2a4 !important");
    } else{
        input.removeClass("valid").addClass("invalid");$(this).attr("style", "border-color: #ec1d48 !important;");
    }
});

$('#card_exp').on('input', function() {
    var input=$(this);
    var re = /[0-9]+$/;
    var card_exp=re.test(input.val());
	if(card_exp){
        input.removeClass("invalid").addClass("valid");
        $(this).attr("style", "background-color:#c1ffdd ; border-color:#0fc2a4 !important");
    } else{
        input.removeClass("valid").addClass("invalid");$(this).attr("style", "border-color: #ec1d48 !important;");
    }
});

$('#card_cvv').on('input', function() {
    var input=$(this);
    var re = /^[0-9]{3,4}$/;
    var card_cvv=re.test(input.val());
	if(card_cvv){
        input.removeClass("invalid").addClass("valid");
        $(this).attr("style", "background-color:#c1ffdd ; border-color:#0fc2a4 !important");
    } else{
        input.removeClass("valid").addClass("invalid");
        $(this).attr("style", "border-color: #ec1d48 !important;");
    }
});

//state field validation
var state = $('#state').find(":selected").text();
if(state == 'State:') {
    $('#state').removeClass("valid").addClass("invalid");
    $('#state').attr("style", "");
} else {
    $('#state').removeClass("invalid").addClass("valid");
    $('#state').attr("style", "background-color:#c1ffdd ; border-color:#0fc2a4 !important");
}
$( "#state" ).change(function() {
    var state = $('#state').find(":selected").text();
   if(state == 'State:') {
        $('#state').removeClass("valid").addClass("invalid");
        $('#state').attr("style", "border-color: #ec1d48 !important;");
   } else {
        $('#state').removeClass("invalid").addClass("valid");
        $('#state').attr("style", "background-color:#c1ffdd ; border-color:#0fc2a4 !important");
   }
});


var state = $('#license_state').find(":selected").text();
if(state == 'State:') {
    $('#license_state').removeClass("valid").addClass("invalid");
    $('#license_state').attr("style", "");
} else {
    $('#license_state').removeClass("invalid").addClass("valid");
    $('#license_state').attr("style", "background-color:#c1ffdd ; border-color:#0fc2a4 !important");
}
$( "#license_state" ).change(function() {
    var state = $('#license_state').find(":selected").text();
   if(state == 'State:') {
        $('#license_state').removeClass("valid").addClass("invalid");
        $('#license_state').attr("style", "border-color: #ec1d48 !important;");
   } else {
        $('#license_state').removeClass("invalid").addClass("valid");
        $('#license_state').attr("style", "background-color:#c1ffdd ; border-color:#0fc2a4 !important");
   }
});




