<!DOCTYPE html>
<html lang=en>

<?php include('layouts/head.php'); ?>


<link rel="stylesheet" href="assets/css/form-style.css">

<body>
    <div class=page id=main-page>

         <?php include('layouts/header.php'); ?> 
<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $posted_data = $_POST;

        if(isset($posted_data['home'])){
            $borrow = $posted_data['borrow'];
        } else {
            $col_name = '';
            $value = '';
            foreach( $posted_data as $col => $data) {
        
                $col_name .= $col.', ' ;
                $value .= "'".$data."', ";
            }
            $col_name = rtrim($col_name, ", ");
            $value = rtrim($value, ", ");
        
            
        
            $sql = "INSERT INTO ".CONTACT_TABLE." ($col_name)VALUES ($value)";
        
                if ($conn->query($sql) === TRUE) {
                    echo "<br><div class='success-message'>
                    Your message was sent successfully. Thank you!
                    </div><br><br><br><br><br>";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
        }
    } else {
?>

<br />
        
        <section class=headline id=main-headline>
            <div class=container>
                <div class=container>
                    <div class=>
                        <div class="card-body">

                            <!-- <img class=mainimgpaint src="/assets/images/layout/quick-and-easy-cash-loans.png"
                                alt="quick and easy cash loans" /> -->
                            <h2 style="text-align:center;">Contact Us</h2>
                            <div class="contact-us-info" style="float: left;">
                                <p>It is our goal to provide you with the best, friendliest and most knowledgeable
                                    customer
                                    service experience possible. If you have questions about our website or the loan in
                                    general that are not answered in our FAQ section, please use any of the methods
                                    below to
                                    contact us. We will respond to your queries within 48 hours.</p>
                                <p>
                                    Please remember that this service is not a lender. In order to protect your privacy,
                                    we
                                    do not have any information regarding your loan or offers for loans. These questions
                                    should be directed to the lender who provided the loan or offer.
                                </p>


                                <p>Additional questions or comments?</p>
                                <p>Email us 
                                    <a href="mailto:<?php echo EMAIL ; ?>" class="__cf_email__">
                                        <?php echo EMAIL ; ?>
                                    </a>
                                </p>
                                <p>or fill out the form below</p>
                                <p></p>

                            </div>

                            <div class=mainsplit>
                                <div class="card-body">

                                    <!-- <img class=mainimgpaint src="/assets/images/layout/quick-and-easy-cash-loans.png"
                                alt="quick and easy cash loans" /> -->
                                    <?php include('includes/contact-form.php'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php

    }
?>





    </div>


    <?php include('layouts/footer.php'); ?>
</body>

</html>