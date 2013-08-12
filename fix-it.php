<?php
$pageType = 'fix-it';
?>

<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<?php include 'includes/header.php'; ?>

<body class="body-<?php echo $pageType; ?>">

<?php include 'includes/global-header.php'; ?>
<?php include 'includes/banner.php'; ?>
<?php include 'includes/nav.php'; ?>


<section class="headings">
    <div class="row">
        <div class="large-12 columns">
            <div class="subheader"><h3>Answer IT Problems</h3></div>
            <h2>Fix.It</h2>
        </div>
    </div>
</section>

<section class="white std">
    <div class="row">
        <div class="large-12 columns">
            <form id="frmSearchProducts">
                <label for="search-products" class="hide">Search</label>
                <input autocomplete="off" autocorrect="off" autocapitalize="off" id="search" type="search" class="large no-margin" placeholder="Search product guides" />
            </form>
        </div>
    </div>
</section>



<section class="dark-grey sml">
    <div class="row">
        <div class="large-12 columns">
            <ul class="large-block-grid-5 support-suite">
                <li>
                    <a href="#" class="text-center">
                        <div class="virtual-agent"></div>
                        <h5>Virtual Agent</h5>
                        <p>Get answers by talking to our virtual agent</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="text-center">
                        <div class="lodge-ticket"></div>
                        <h5>Lodge a Ticket</h5>
                        <p>Cot a problem? Lodge a support ticket</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="text-center">
                        <div class="call-centre"></div>
                        <h5>Call Centre</h5>
                        <p>Call us on 8888 8888 or request a call back</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="text-center">
                        <div class="knowledge-base"></div>
                        <h5>Knowledge Base</h5>
                        <p>Call us on 8888 8888 or request a call back</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="text-center">
                        <div class="communities"></div>
                        <h5>Communities</h5>
                        <p>Find and share solutions with other users</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>



<?php include 'includes/footer.php'; ?>

<?php include 'includes/global-js.php'; ?>

</body>
</html>
