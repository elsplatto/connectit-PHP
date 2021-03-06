<?php
$pageType = 'home';
$alert = $_REQUEST['alert'];
?>


<?php include 'includes/header.php'; ?>

<?php include 'includes/global-header.php'; ?>
<?php include 'includes/banner.php'; ?>
<?php include 'includes/nav.php'; ?>
<?php if ($alert > 0) { ?>
    <section class="alert black sml">
        <div class="row">
            <div class="large-12 columns">
                <a href="#" class="close">Close</a>
                <p class="heading">ATTENTION: Outlook Express unavailable for some users</p>
                <p>
                If you are unable to access your email through Outlook Express please <a href="#">read this article</a> on how to access your email through webmail. Please be aware that a current issue
                means Outlook Express is currently unavailable for some users.
                </p>
            </div>
        </div>
    </section>
<?php } ?>
    <section class="feature-holder">
        <div class="orbit-container">
            <ul data-orbit data-options="pause_on_hover:false; timer_speed:0; animation_speed: 500; navigation_arrows: false; slide_number: false;" class="orbit-slides-container">
                <li class="grey container">
                    <a href="explore-it-teaching-maths-with-robots.php"><img src="media/img/slideshow/t4l-6.jpg" alt="Feature image" data-interchange="[media/img/slideshow/t4l-6.jpg], [media/img/slideshow/t4l-6-1024x385.jpg, (tablet)]" /></a>
                </li>
                <li class="light-blue container">
                    <a href="explore-it-skype-in-the-classroom.php"><img src="media/img/slideshow/homeSkype.jpg" alt="T4L Illustration" /></a>
                </li>
                <li class="about-it container">
                    <h2>Getting Started</h2>
                    <h4>Lorem ipsum dolor sit amet, consectectur adispicing elit, sed do euismod tempor incididunt.</h4>
                    <a href="#" class="button flat green">Watch Video</a>
                </li>
            </ul>
        </div>
    </section>

    <section class="light-grey-light sml">
        <div class="row">
            <div class="large-12 columns">
                <?php include 'includes/support-suite.php'; ?>
            </div>
        </div>
    </section>


    <section class="whats-new white std">
        <div class="row">
            <div class="large-12 columns text-center list-holder">
                <h2><a href="news.php">What&rsquo;s New</a></h2>
                <ul>
                    <li>
                        <div class="holder">
                            <h6><a href="#">$5M capital funding for NSW rural and regional community-based preschool providers</a></h6>
                            <p class="cite">about 14 hours ago by <a href="#">Connect.It</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="holder">
                            <h6><a href="#">Last few days left to enrol. Check out our course vacancies here & take the path to success!</a></h6>
                            <p class="cite">about 14 hours ago by <a href="#">Connect.It</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="holder">
                            <h6><a href="#">FREE fun app for preschoolers - develops literacy and numeracy skills</a></h6>
                            <p class="cite">about 14 hours ago by <a href="#">Connect.It</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="holder">
                            <h6>Good luck to the <a href="#">#SWSI</a> <a href="#">#TAFE</a> students competing in the <a href="#">@WorldSkills_AU</a> joinery regionals today!</a></h6>
                            <p class="cite">about 14 hours ago by <a href="#">Connect.It</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="holder">
                            <h6><a href="#">Our #Forklift program for #Moree is now next week - 23 & 24 July for training & 27 July for assessment.</a></h6>
                            <p class="cite">about 14 hours ago by <a href="#">Connect.It</a></p>
                        </div>
                    </li>
                </ul>
                <a href="news.php" class="small button blue">See all news</a>
            </div>
        </div>
    </section>

<?php
$sliderTitle = "Learn &amp; Get Inspired";
$sliderStyle = "dark-grey";
include 'includes/slider.php';
?>

    <section class="icon-community white std">
        <div class="row">
            <div class="large-12 columns text-center list-holder">
                <h2>Your Community</h2>

                <h5>Last Discussions</h5>

                <?php include 'includes/discussions-list.php' ?>

                <a href="share-it-discussions.php" class="button small">Go to the Community</a>
            </div>
        </div>
    </section>

<?php
$sliderTitle = "Services &amp; Partners";
$sliderStyle = "light-grey-light";
include 'includes/slider-feature.php';
?>

<?php include 'includes/global-js.php'; ?>
<script src="js/foundation/foundation.interchange.js"></script>
<script>
$(function() {
    $('.alert .close').click(function(e) {
        e.preventDefault();
        var target = $(e.target).closest('.alert');
        target.hide()
    });

    $(document).foundation('interchange', {
        named_queries : {
            tablet : 'only screen and (min-width: 768px) and (max-width: 1024px)'
        }
    });
});
</script>


<?php include 'includes/footer.php'; ?>
<?php include 'includes/sidebar.php'; ?>

</body>
</html>