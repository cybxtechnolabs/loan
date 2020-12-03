<form id="contact" action="contact.php" method="post">

    <!-- One "tab" for each step in the form: -->
    <div class="tab">
        <h1>Contact Us Form</h1>


        <div class="row">
            <div class="col">
                <label for="contact_name">Name</label>
                <input type="text" placeholder="Your Name" value="" name="contact_name" required>
            </div>
            <div class="col">
                <label for="contact_email">Email </label>
                <input type="text" placeholder="Email" value="" name="contact_email" required>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="contact_application_number">Application # </label>
                <input type="text" placeholder="" value="" name="contact_application_number">
            </div>
            <div class="col">
                <label for="contact_message">Message </label>
                <textarea id="contact_message" name="contact_message" rows="4" cols="50" style="width: 100%;">
                       
                </textarea>
            </div>
        </div>

        <input type="submit" value="Submit">

</form>