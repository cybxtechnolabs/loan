<div class="formcontrol ">
    <form action="/apply.php" class="apply-form" method="post">
        <label for="borrow">How much do you need to borrow?</label>
        <select name="borrow" id="cars">
            <option value="$250">$250</option>
            <option value="$500">$500</option>
            <option value="$750">$750</option>
            <option value="$1000">$1000</option>
            <option value="Above $1000">Above $1000</option>
        </select>

        <label for="fname"> Select State</label>
        <?php include('state-dropdown.php'); ?>
        <br><br>
        <input type="hidden" value="home" name="home">
        <input type="submit" value="Submit">

    </form>
</div>