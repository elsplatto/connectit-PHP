<?php
$pageType = 'about-it';
?>


<?php include 'includes/header.php'; ?>



<?php include 'includes/global-header.php'; ?>
<?php include 'includes/banner.php'; ?>
<?php include 'includes/nav.php'; ?>


<section class="headings">
    <div class="row">
        <div class="large-12 columns">
            <div class="breadcrumbs"><a href="about-it.php">About.It</a></div>
            <h1>BYOD</h1>
        </div>
    </div>
</section>

<section class="white std">
    <div class="row">
        <div class="large-12 columns">
            <img src="media/img/byod-2-med.png" alt="Example Image" class="right"  />
            <p class="intro">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ut aliquip ex ea commodo consequat.
            </p>

            <p>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu <a href="#">fugiat nulla</a> pariatur. Sed ut perspiciatis unde omnis iste natus error sit voluptatem. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.
            </p>
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

<section class="icon-community white std">
    <div class="row">
        <div class="large-12 columns text-center list-holder">
            <h2>Discussions about this service</h2>

            <?php include 'includes/discussions-list.php' ?>

            <a href="share-it-discussions.php" class="button small">See all discussions about this product</a>
        </div>
    </div>
</section>


<section class="light-grey-light std">
    <div class="row">
        <div class="large-12 columns text-center">
            <h2 class="margin-bottom-40">Inspiration</h2>
            <div class="flex-video">
                <iframe width="560" height="315" src="//www.youtube.com/embed/88KmvrGQrcI" frameborder="0" allowfullscreen></iframe>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.</p>
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
