<?php
$pageType = 'explore-it';
?>

<?php include 'includes/header.php'; ?>

<?php include 'includes/global-header.php'; ?>
<?php include 'includes/banner.php'; ?>
<?php include 'includes/nav.php'; ?>


<section class="headings">
    <div class="row">
        <div class="large-12 columns">
            <div class="breadcrumbs"><a href="explore-it.php">Explore.It</a></div>
            <h1>Connecting Countries</h1>
        </div>
    </div>
</section>


<section class="dark-grey-dark std">
    <div class="row">
        <div class="large-12 columns text-center">
            <div class="flex-video">
                <iframe width="560" height="315" src="//www.youtube.com/embed/88KmvrGQrcI" frameborder="0" allowfullscreen></iframe>
            </div>
            <h2 class="margin-top-40">Teaching - we're about outcomes, not incomes</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.</p>
        </div>
    </div>
</section>


<section class="filter-holder white std">
    <div class="row">
        <div class="large-12 columns">
            <h5>Tags</h5>
            <div class="tag-box light-grey-top-border bottom-no-margin">
                <a href="#" class="selected">Printers</a>
                <a href="#" class="selected">Whiteboards</a>
                <a href="#" class="selected">Scanners</a>
                <a href="#" class="selected">Email</a>
                <a href="#" class="selected">Software</a>
                <a href="#" class="selected">Audio</a>
            </div>

        </div>
    </div>
</section>

<section class="light-grey-light sml">
    <div class="row">
        <div class="large-12 columns">
            <?php include 'includes/share-suite.php'; ?>
        </div>
    </div>
</section>

<?php
$sliderTitle = "Related Content";
$sliderStyle = "dark-grey";
include 'includes/slider.php';
?>



<?php include 'includes/global-js.php'; ?>


<?php include 'includes/footer.php'; ?>

<?php include 'includes/sidebar.php'; ?>

</body>
</html>