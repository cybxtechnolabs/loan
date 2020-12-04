<header>
    <div class=container>
        <div class="logotext"> <a class="logotext-anchor" href="<?php echo BASEURL; ?>"><?php echo SITENAME; ?></a></div>
        <a href="#" aria-label="mobile-navigation" class=btn-collapse><span></span><span></span><span></span></a>
        <div class=collapse-theme>
            <nav>
                <ul>
                    <li  <?php  if(strpos($_SERVER['PHP_SELF'],"index") != false) { echo 'class=active';}?> ><a href="<?php echo BASEURL; ?>">Home</a></li>
                    <!-- <li><a href="/how-it-works.php">How it works</a></li> -->
                    <li <?php  if(strpos($_SERVER['PHP_SELF'],"faq") != false) { echo 'class=active';}?> ><a href="faq.php">FAQ</a></li>
                    <li <?php  if(strpos($_SERVER['PHP_SELF'],"your-privacy-rights") != false) { echo 'class=active';}?>><a href="your-privacy-rights.php">Privacy rights</a></li>
                    <li <?php  if(strpos($_SERVER['PHP_SELF'],"terms-and-conditions") != false) { echo 'class=active';}?>><a href="terms-and-conditions.php">Terms</a></li>
                    <li <?php  if(strpos($_SERVER['PHP_SELF'],"contact") != false) { echo 'class=active';}?>><a href="contact.php">Contact</a></li>
                    <li class="nodivider"><a href="apply.php" class="btn">Apply Now</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>