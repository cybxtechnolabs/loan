<!DOCTYPE html>
<html lang=en>

<?php include('layouts/head.php'); ?>


<link rel="stylesheet" href="assets/css/form-apply-style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
.col {
    padding: 1px 1px 10px 1px;
}
</style>
<body>
    <div class=page id=main-page>

        <?php include('layouts/header.php'); ?>

        <br />
<?php 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $posted_data = $_POST;
        $borrow  = '';
        if(isset($posted_data['home'])){ //coming from home page
            $borrow = str_replace("$","",$posted_data['borrow']);
            $state = $posted_data['state'];
        } else {//validation
            $col_name = '';
            $value = '';
            $application_number = mt_rand(100000, 999999);
            foreach( $posted_data as $col => $data) {
        
                $col_name .= $col.', ' ;
                $value .= "'".$data."', ";
            }
            $col_name .= 'application_number';
            $value .= $application_number;

            $col_name = rtrim($col_name, ", ");
            $value = rtrim($value, ", ");
        
            
        
            $sql = "INSERT INTO ".LOAN_TABLE." ($col_name)VALUES ($value)";
        
                if ($conn->query($sql) === TRUE) {
                    //echo "New record created successfully"; //redirect to say thanks yo for submitting
        //alert alert-success" role="alert"
                    
                    echo "<div class='success-message'>
                    Thank you for your application.<br>
                    Your loan request was successfully submitted. <br>
                    Your application number is ".$application_number.". <br>
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

<?php 

    if(($_SERVER["REQUEST_METHOD"] != "POST") || isset($posted_data['home'])) {
?>
        <section class=headline id=main-headline>
            <div class=container>
            <div class=container>
                <div class=mainsplit>
                    <div class="card-body">
                        <?php include('includes/form-apply-detail.php'); ?>
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