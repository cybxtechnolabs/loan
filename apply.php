<!DOCTYPE html>
<html lang=en>

<?php include('head.php'); ?>


<link rel="stylesheet" href="form-apply-style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<style>
.col {
    padding: 1px 1px 10px 1px;
}
</style>
<body>
    <div class=page id=main-page>

        <header>
            <div class=container>
                <div class="logotext">PayDay Loan</div>
                <a href="#" aria-label="mobile-navigation"
                    class=btn-collapse><span></span><span></span><span></span></a>

                <div class=>
                    <nav>
                        <ul>
                            <li ><a href="/">Home</a></li>
                            <!-- <li><a href="/how-it-works.php">How it works</a></li> -->
                            <li ><a href="faq.php">FAQ</a></li>
                            <li  ><a href="your-privacy-rights.php">Privacy rights</a></li>
                            <li><a href="terms-and-conditions.php">Terms</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li class="nodivider"><a href="apply.php" class="btn">Apply Now</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <!-- <?php //include('header.php'); ?> -->

        <br />
<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $name = test_input($_POST["name"]);
    // $email = test_input($_POST["email"]);
    // $website = test_input($_POST["website"]);
    // $comment = test_input($_POST["comment"]);
    // $gender = test_input($_POST["gender"]);

    // function test_input($data) {
    //     $data = trim($data);
    //     $data = stripslashes($data);
    //     $data = htmlspecialchars($data);
    //     return $data;
    //   }
   
    $posted_data = $_POST;

   
    $borrow  = '';
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
       
        
    
        $sql = "INSERT INTO ".LOAN_TABLE." ($col_name)VALUES ($value)";
    
            if ($conn->query($sql) === TRUE) {
                //echo "New record created successfully"; //redirect to say thanks yo for submitting
    //alert alert-success" role="alert"
                echo "<div class='success-message'>
                Thank you for your application.<br>
                Your loan request was successfully submitted. <br>
                Your application number is XX. <br>
                We are currently reviewing your application and will email you back within 24 hours with our decision. <br>
                Once approved, you can expect same-day or next-day funding your bank account<br>
                </div>";
    
               // echo " <div class>Thank you for your application. Your loan request was successfully submitted. Your application number is XX. We are currently reviewing your application and will email you back within 24 hours with our decision. Once approved, you can expect same-day or next-day funding your bank account<div>";
    
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
    
    }

   

  }


?>
        <section class=headline id=main-headline>
            <div class=container>
            <div class=container>
                <div class=mainsplit>
                    <div class="card-body">

                        <!-- <img class=mainimgpaint src="/assets/images/layout/quick-and-easy-cash-loans.png"
                                alt="quick and easy cash loans" /> -->
                        <?php include('form-apply-detail.php'); ?>
                    </div>
                </div>
            </div>
            </div>
        </section>


    </div>


    <?php include('footer.php'); ?>
</body>

</html>