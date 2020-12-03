<!DOCTYPE html>
<html lang=en>

<?php include('layouts/head.php'); ?>
<link rel="stylesheet" href="assets/css/form-style.css">

<body>
    <div class=page id=main-page>
        <!-- <header>
            <div class=container>
                <div class="logotext"> <a class="logotext-anchor" href="<?php echo BASEURL; ?>">PayDay Loan</a></div>
                <a href="#" aria-label="mobile-navigation"
                    class=btn-collapse><span></span><span></span><span></span></a>

                <div class=collapse>
                    <nav>
                        <ul>
                            <li class=active><a href="<?php echo BASEURL; ?>">Home</a></li>
                            <li><a href="faq.php">FAQ</a></li>
                            <li><a href="your-privacy-rights.php">Privacy rights</a></li>
                            <li><a href="terms-and-conditions.php">Terms</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li class="nodivider"><a href="apply.php" class="btn">Apply Now</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header> -->
        <?php include('layouts/header.php'); ?>

        <?php 

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // $name = test_input($_POST["name"]);
//     // $email = test_input($_POST["email"]);
//     // $website = test_input($_POST["website"]);
//     // $comment = test_input($_POST["comment"]);
//     // $gender = test_input($_POST["gender"]);

//     // function test_input($data) {
//     //     $data = trim($data);
//     //     $data = stripslashes($data);
//     //     $data = htmlspecialchars($data);
//     //     return $data;
//     //   }
   
//     $posted_data = $_POST;
//     $col_name = '';
//     $value = '';
//     foreach( $posted_data as $col => $data) {

//         $col_name .= $col.', ' ;
//         $value .= "'".$data."', ";
//     }
//     $col_name = rtrim($col_name, ", ");
//     $value = rtrim($value, ", ");
   
    

//     $sql = "INSERT INTO ".DB_NAME." ($col_name)VALUES ($value)";

//         if ($conn->query($sql) === TRUE) {
//             //echo "New record created successfully"; //redirect to say thanks yo for submitting

//             echo "<div class='success-message'>
//             Thank you for your application.<br>
//             Your loan request was successfully submitted. <br>
//             Your application number is XX. <br>
//             We are currently reviewing your application and will email you back within 24 hours with our decision. <br>
//             Once approved, you can expect same-day or next-day funding your bank account<br>
//             </div>";

//            // echo " <div class>Thank you for your application. Your loan request was successfully submitted. Your application number is XX. We are currently reviewing your application and will email you back within 24 hours with our decision. Once approved, you can expect same-day or next-day funding your bank account<div>";

//         } else {
//             echo "Error: " . $sql . "<br>" . $conn->error;
//         }


//   }


// ?>






        <br />
        <section class=headline id=main-headline>
            <h1 class="headoneclass">Installment Loans Online, Get Your Funds Instantly</h1>
            <div class=container>
                <div class=mainsplit>
                    <div class="card-body">

                        <!-- <img class=mainimgpaint src="/assets/images/layout/quick-and-easy-cash-loans.png"
                                alt="quick and easy cash loans" /> -->
                        <?php include('includes/form-apply.php'); ?>
                    </div>
                </div>
            </div>
        </section>

        <section class=features id=main-features>
            <div class=container>
                <!-- <div class="features-list clearfix">
                    <div class="feature-item feature01"> -->
                <p class=featuredesc>Apply Online</p>
                <p>89% of loan applications are approved. We hate to say "no"</p>
                <!-- </div>

                </div> -->
            </div>
        </section>

        <section class=headline id=main-headline>
            <h1 class="headoneclass"></h1>
            <div class=container>
                <div class=mainsplit>
                    <h4 style="text-align:center;">Do I Qualify for a Payday Loan Online?</h4>
                    <p>You must be at least 18 years old</p>
                    <p>You must live and work legally within the United States of America</p>
                    <p>You must be working with the same employer for at least 90 days successively</p>
                    <p>You must have a working telephone number and a valid email address</p>
                    <p>You must have a bank account with your name</p>
                    <p>✔ All credit types are welcome</p>

                    <p>✔ Your information is secure</p>

                    <p>✔ Any credit can be approved</p>

                    <p>✔ No collateral required</p>

                    <p>✔ Only direct lenders</p>

                    <p>✔ No hidden costs</p>

                    <p>✔ Fast loan decision</p>
                </div>
            </div>
        </section>



        <section class=features id=main-features>
            <div class=container>
                <!-- <div class="features-list clearfix">
                    <div class="feature-item feature01"> -->
                <!-- <p class=featuredesc>Apply Online</p> -->
                <h3>CONSUMER NOTICE</h3>
                <p>
                    Short-term loans are not intended to be long-term financial solutions. Customers with credit
                    difficulties should seek credit counseling. A single payday advance is typically for two to four
                    weeks. However, borrowers often use these loans over a period of months, which can be expensive.</p>
                <!-- </div>

                </div> -->
            </div>
        </section>


        <section class=headline id=main-headline>
            <div class=container>
                <!-- <div class="features-list clearfix">
                    <div class="feature-item feature01"> -->
                <!-- <p class=featuredesc>Apply Online</p> -->
                <h3>LEGAL DISCLAIMER</h3>
                <p>
                    This website does not make loan offers. This website connects users with lenders. The operator of
                    this website is not a lender, does not make credit decisions or broker loans. The operator of this
                    website does not charge you fees for its service and does not represent or endorse any participating
                    shorter-duration loan lender. Submitting a loan request allows us to connect you to third-party
                    lenders and does not guarantee an offer for a loan This website does not guarantee the approval for
                    a shorter-duration loan Credit checks may be performed by lenders from credit bureaus or other
                    providers of credit information. Consumer reports or credit checks may be made by the lender through
                    Equifax, Experian, TransUnion, or alternative providers. You are not obligated to use this site and
                    are not obligated to contract with any third-party lender or service provider. These disclosures are
                    for informational purposes only and should not be considered legal advice. NOT A LENDER NOTICE The
                    operator of this website is NOT a lender, does not make offers for loans, and does not broker online
                    loans to lenders. This website is not a representative or agent of any lender and does not make
                    credit decisions. Submission of a loan request to this website does not guarantee an offer or an
                    approval for a loan Some lenders may require faxing of information. In some instances you may have
                    to visit a physical store/branch location to complete your loan request process. Please contact your
                    lender directly with questions or issues regarding your loan.
                    <!-- </div>

                </div> -->
            </div>
        </section>
        

    </div>


    <?php include('layouts/footer.php'); ?>
</body>

</html>