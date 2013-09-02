<?php
$pageType = 'home';
$alert = $_REQUEST['alert'];
?>


<?php include 'includes/header.php'; ?>

<?php include 'includes/global-header.php'; ?>
<?php include 'includes/banner.php'; ?>
<?php include 'includes/nav.php'; ?>
<?php if ($alert > 0) { ?>
    <section class="alert dark-grey-dark sml">
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
                <li class="about-it">
                    <img src="media/img/slideshow/sample-1.png" alt="Example Image" />
                </li>
                <li class="grey">
                    <img src="media/img/slideshow/sample-2.png" alt="Example Image" />
                </li>
                <li class="use-it">
                    <img src="media/img/slideshow/sample-3.png" alt="Example Image" />
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
                <h2><a href="news.php">What's New</a></h2>
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
                <a href="news.php" class="small button green">See all news</a>
            </div>
        </div>
    </section>

    <section id="inspired-slider" class="slider-holder dark-grey">
        <div class="row">
            <div class="large-12 columns">
                <h2>Learn &amp; Get Inspired</h2>
                <div class="orbit-container dark-grey margin">
                    <ul data-orbit data-options="pause_on_hover:false; timer_speed:0; animation_speed: 500;navigation_arrows: true;slide_number: false;" class="orbit-slides-container dark-grey">
                        <li>
                            <div class="fix-it">
                                <a href="#"><img src="media/img/slideshow/inspire-1.jpg" alt="Example Image" /></a>
                                <div class="heading white">
                                    <h5>Fix.IT / Video</h5>
                                    <h4><a href="#">Bring in your own device scheme</a></h4>
                                </div>
                            </div>

                            <div class="use-it">
                                <a href="#"><img src="media/img/slideshow/inspire-2.jpg" alt="Example Image" /></a>
                                <div class="heading white">
                                    <h5>Use.IT / Article</h5>
                                    <h4><a href="#">How to design and build a website</a></h4>
                                </div>
                            </div>

                            <div class="share-it">
                                <a href="#"><img src="media/img/slideshow/inspire-3.jpg" alt="Example Image" /></a>
                                <div class="heading white">
                                    <h5>Share.IT / Article</h5>
                                    <h4><a href="#">Connecting with your peer community</a></h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="fix-it">
                                <a href="#"><img src="media/img/slideshow/inspire-1.jpg" alt="Example Image" /></a>
                                <div class="heading white">
                                    <h5>Fix.IT / Video</h5>
                                    <h4><a href="#">Bring in your own device scheme</a></h4>
                                </div>
                            </div>

                            <div class="use-it">
                                <a href="#"><img src="media/img/slideshow/inspire-2.jpg" alt="Example Image" /></a>
                                <div class="heading white">
                                    <h5>Use.IT / Article</h5>
                                    <h4><a href="#">How to design and build a website</a></h4>
                                </div>
                            </div>

                            <div class="share-it">
                                <a href="#"><img src="media/img/slideshow/inspire-3.jpg" alt="Example Image" /></a>
                                <div class="heading white">
                                    <h5>Share.IT / Article</h5>
                                    <h4><a href="#">Connecting with your peer community</a></h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="fix-it">
                                <a href="#"><img src="media/img/slideshow/inspire-1.jpg" alt="Example Image" /></a>
                                <div class="heading white">
                                    <h5>Fix.IT / Video</h5>
                                    <h4><a href="#">Bring in your own device scheme</a></h4>
                                </div>
                            </div>

                            <div class="use-it">
                                <a href="#"><img src="media/img/slideshow/inspire-2.jpg" alt="Example Image" /></a>
                                <div class="heading white">
                                    <h5>Use.IT / Article</h5>
                                    <h4><a href="#">How to design and build a website</a></h4>
                                </div>
                            </div>

                            <div class="share-it">
                                <a href="#"><img src="media/img/slideshow/inspire-3.jpg" alt="Example Image" /></a>
                                <div class="heading white">
                                    <h5>Share.IT / Article</h5>
                                    <h4><a href="#">Connecting with your peer community</a></h4>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="icon-community white std">
        <div class="row">
            <div class="large-12 columns text-center list-holder">
                <h2>Your Community</h2>

                <h5>Last Discussions</h5>
                <ul>
                    <li>
                        <div><a href="#"><img class="circle" src="media/img/avatars/example-1.jpg" alt="Example Image" /></a></div>
                        <div class="holder">
                            <h6><a href="#">Problem with printer</a></h6>
                            <p class="cite">about 14 hours ago by <a href="#">Connect.It</a></p>
                        </div>
                    </li>
                    <li>
                        <div><a href="#"><img class="circle" src="media/img/avatars/example-2.jpg" alt="Example Image" /></a></div>
                        <div class="holder">
                            <h6><a href="#">Re: Help connecting to the network server</a></h6>
                            <p class="cite">about 14 hours ago by <a href="#">Connect.It</a></p>
                        </div>
                    </li>
                    <li>
                        <div><a href="#"><img class="circle" src="media/img/avatars/example-3.jpg" alt="Example Image" /></a></div>
                        <div class="holder">
                            <h6><a href="#">How to design for mobile</a></h6>
                            <p class="cite">about 14 hours ago by <a href="#">Connect.It</a></p>
                        </div>
                    </li>
                    <li>
                        <div><a href="#"><img class="circle" src="media/img/avatars/example-4.jpg" alt="Example Image" /></a></div>
                        <div class="holder">
                            <h6><a href="#">Whiteboard in the classroom</a></h6>
                            <p class="cite">about 14 hours ago by <a href="#">Connect.It</a></p>
                        </div>
                    </li>
                    <li>
                        <div><a href="#"><img class="circle" src="media/img/avatars/example-5.jpg" alt="Example Image" /></a></div>
                        <div class="holder">
                            <h6><a href="#">Thoughts on online communities</a></h6>
                            <p class="cite">about 14 hours ago by <a href="#">Connect.It</a></p>
                        </div>
                    </li>
                </ul>

                <a href="#" class="button small">Go to the Community</a>
            </div>
        </div>
    </section>

    <section id="featured-software-slider" class="slider-holder light-grey-light std">
        <div class="row">
            <div class="large-12 columns">
                <h2>Featured Software</h2>

                <div class="orbit-container">
                    <ul data-orbit data-options="pause_on_hover:false; timer_speed:0; animation_speed: 500;navigation_arrows: true;slide_number: false;" class="orbit-slides-container">
                        <li>
                            <div>
                                <div class="img-holder">
                                    <img src="media/img/logos/ms-office.png" alt="Microsoft Office Logo" />
                                </div>
                                <div class="use-it heading">
                                    <h4>Microsoft Office</h4>
                                    <a href="#" class="button">Get License</a>
                                </div>
                            </div>
                            <div>
                                <div class="img-holder">
                                    <img src="media/img/logos/adobe-pse.png" alt="Adobe Photoshop Elements Logo" />
                                </div>
                                <div class="use-it heading">
                                    <h4>Photoshop Elements</h4>
                                    <a href="#" class="button">Get License</a>
                                </div>
                            </div>
                            <div>
                                <div class="img-holder">
                                    <img src="media/img/logos/minecraft.png" alt="Minecraft Logo" />
                                </div>
                                <div class="about-it heading">
                                    <h4>Minecraft</h4>
                                    <a href="#" class="button">Get License</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div class="img-holder">
                                    <img src="media/img/logos/ms-office.png" alt="Microsoft Office Logo" />
                                </div>
                                <div class="share-it heading">
                                    <h4>Microsoft Office</h4>
                                    <a href="#" class="button">Get License</a>
                                </div>
                            </div>
                            <div>
                                <div class="img-holder">
                                    <img src="media/img/logos/adobe-pse.png" alt="Adobe Photoshop Elements Logo" />
                                </div>
                                <div class="use-it heading">
                                    <h4>Photoshop Elements</h4>
                                    <a href="#" class="button">Get License</a>
                                </div>
                            </div>
                            <div>
                                <div class="img-holder">
                                    <img src="media/img/logos/minecraft.png" alt="Minecraft Logo" />
                                </div>
                                <div class="explore-it heading">
                                    <h4>Minecraft</h4>
                                    <a href="#" class="button">Get License</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div class="img-holder">
                                    <img src="media/img/logos/ms-office.png" alt="Microsoft Office Logo" />
                                </div>
                                <div class="fix-it heading">
                                    <h4>Microsoft Office</h4>
                                    <a href="#" class="button">Get License</a>
                                </div>
                            </div>
                            <div>
                                <div class="img-holder">
                                    <img src="media/img/logos/adobe-pse.png" alt="Adobe Photoshop Elements Logo" />
                                </div>
                                <div class="share-it heading">
                                    <h4>Photoshop Elements</h4>
                                    <a href="#" class="button">Get License</a>
                                </div>
                            </div>
                            <div>
                                <div class="img-holder">
                                    <img src="media/img/logos/minecraft.png" alt="Minecraft Logo" />
                                </div>
                                <div class="use-it heading">
                                    <h4>Minecraft</h4>
                                    <a href="#" class="button">Get License</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div class="img-holder">
                                    <img src="media/img/logos/ms-office.png" alt="Microsoft Office Logo" />
                                </div>
                                <div class="fix-it heading">
                                    <h4>Microsoft Office</h4>
                                    <a href="#" class="button">Get License</a>
                                </div>
                            </div>
                            <div>
                                <div class="img-holder">
                                    <img src="media/img/logos/adobe-pse.png" alt="Adobe Photoshop Elements Logo" />
                                </div>
                                <div class="share-it heading">
                                    <h4>Photoshop Elements</h4>
                                    <a href="#" class="button">Get License</a>
                                </div>
                            </div>
                            <div>
                                <div class="img-holder">
                                    <img src="media/img/logos/minecraft.png" alt="Minecraft Logo" />
                                </div>
                                <div class="use-it heading">
                                    <h4>Minecraft</h4>
                                    <a href="#" class="button">Get License</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/global-js.php'; ?>
<script>
$(function() {
    $('.alert .close').click(function(e) {
        e.preventDefault();
        var target = $(e.target).closest('.alert');
        target.hide()

    });
});
</script>


<?php include 'includes/footer.php'; ?>
<?php include 'includes/sidebar.php'; ?>

</body>
</html>