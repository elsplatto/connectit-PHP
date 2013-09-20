<?php
$pageType = 'share-it';
?>


<?php include 'includes/header.php'; ?>
<?php include 'includes/global-header.php'; ?>
<?php include 'includes/banner.php'; ?>
<?php include 'includes/nav.php'; ?>


    <section class="headings">
        <div class="row">
            <div class="large-12 columns">
                <div class="breadcrumbs"><a href="share-it.php">Share.It</a></div>
                <h2><a href="share-it.php">Social Media</a></h2>
                <h1>Discussions</h1>
            </div>
        </div>
    </section>


    <section class="filter-holder white std">
        <div class="row">
            <div class="large-12 columns">
                <h2>Filter</h2>
                <!--Note: data-target attribute in anchor element should be the ID of the element you want to hide/show-->
                <a href="#" class="toggle-view toggle-icon large" data-target="group-it-filters" data-state="closed">Toggle Filter View</a>
            </div>
            <div id="group-it-filters" class="large-12 columns filter-area">
                <h5>Groups</h5>
                <a href="#" class="select-my-groups">Select my Groups</a>
                <a href="#" class="make-selected-my-groups">Make Selected my Groups</a>
                <a href="#" class="clear-all">Clear All</a> <a href="#" class="select-all">Select All</a>
                <div class="filter-box light-grey-top-border">
                    <a href="#" title="Click to select/deselect">BYOD</a>
                    <a href="#" title="Click to select/deselect">Tools for this and that...</a>
                    <a href="#" title="Click to select/deselect">Building Networks Through Social Media</a>
                    <a href="#" title="Click to select/deselect">Gaming for Learning</a>
                    <a href="#" title="Click to select/deselect" class="selected">Web Tools For All Classrooms</a>
                    <a href="#" title="Click to select/deselect">Contemporary Learning Through 21st Century Skills</a>
                    <a href="#" title="Click to select/deselect">Collaborating in the Cloud</a>
                    <a href="#" title="Click to select/deselect">Connect Classrooms</a>
                    <a href="#" title="Click to select/deselect">Flipping the Classroom</a>
                </div>

                <h5>By Outcome</h5>
                <a href="#" class="clear-all">Clear All</a> <a href="#" class="select-all">Select All</a>
                <div class="filter-box light-grey-top-border">
                    <a href="#" title="Click to select/deselect">BYOD</a>
                    <a href="#" title="Click to select/deselect">Tools for this and that...</a>
                    <a href="#" title="Click to select/deselect">Building Networks Through Social Media</a>
                    <a href="#" title="Click to select/deselect">Gaming for Learning</a>
                    <a href="#" title="Click to select/deselect" class="selected">Web Tools For All Classrooms</a>
                    <a href="#" title="Click to select/deselect">Contemporary Learning Through 21st Century Skills</a>
                    <a href="#" title="Click to select/deselect">Collaborating in the Cloud</a>
                    <a href="#" title="Click to select/deselect">Connect Classrooms</a>
                    <a href="#" title="Click to select/deselect">Flipping the Classroom</a>
                </div>

                <h5>By Product</h5>
                <a href="#" class="clear-all">Clear All</a> <a href="#" class="select-all">Select All</a>
                <div class="filter-box light-grey-top-border">
                    <a href="#" title="Click to select/deselect">ITD Products</a>
                    <a href="#" title="Click to select/deselect">Email</a>
                    <a href="#" title="Click to select/deselect">Software</a>
                    <a href="#" title="Click to select/deselect">Audio</a>
                    <a href="#" title="Click to select/deselect" class="selected">Phones</a>
                    <a href="#" title="Click to select/deselect">Printers</a>
                    <a href="#" title="Click to select/deselect">Tablets</a>
                    <a href="#" title="Click to select/deselect">Whiteboards</a>
                </div>

            </div>
        </div>
    </section>

    <section class="light-grey-light std">
        <div class="row dynamic-load-target">
            <div class="large-12 columns margin-bottom-18">
                <h2>Showing discussions for</h2>
                <h5>#nswprimaryteachers, #nswsecondaryteachers, #education, #water, and 3 more...</h5>
                <hr />
            </div>

            <div class="large-12 columns">
                <a href="share-it-new-discussion.php" class="button green">Start a new discussion</a>
            </div>

            <div class="large-12 columns margin-bottom-18">
                <div class="wide-tile white sml">
                    <div class="large-1 avatar-holder">
                        <a href="#"><img src="media/img/avatars/example-2.jpg" alt="Example Avatar" class="avatar" /></a>
                    </div>
                    <div class="large-10 columns content">
                        <p class="header"><span class="handle"><strong>John Smith</strong> <span class="timestamp">1 hour ago</span></p>
                        <h5>Help setting up a printer on the school network</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... <a href="#">Read more</a></p>
                        <p class="functions"><a href="#" class="subscribe">Subscribe</a> <a href="#" class="replies">10 replies</a> <a href="#" class="share">Share</a></p>
                    </div>
                </div>
            </div>

            <div class="large-12 columns margin-bottom-18">
                <div class="wide-tile white sml">
                    <div class="large-1 avatar-holder">
                        <a href="#"><img src="media/img/avatars/profileLge.jpg" alt="Example Avatar" class="avatar" /></a>
                    </div>
                    <div class="large-10 columns content">
                        <p class="header"><span class="handle"><strong>Jason Taikato</strong> <span class="timestamp">2 hours ago</span></p>
                        <h5>Help setting up a printer on the school network</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... <a href="#">Read more</a></p>
                        <p class="functions"><a href="#" class="subscribe">Subscribe</a> <a href="#" class="replies">10 replies</a> <a href="#" class="share">Share</a></p>
                    </div>
                </div>
            </div>

            <div class="large-12 columns margin-bottom-18">
                <div class="wide-tile white sml">
                    <div class="large-1 avatar-holder">
                        <a href="#"><img src="media/img/avatars/example-3.jpg" alt="Example Avatar" class="avatar" /></a>
                    </div>
                    <div class="large-10 columns content">
                        <p class="header"><span class="handle"><strong>Frank Jones</strong> <span class="timestamp">2 hours ago</span></p>
                        <h5>Help setting up a printer on the school network</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... <a href="#">Read more</a></p>
                        <p class="functions"><a href="#" class="subscribe">Subscribe</a> <a href="#" class="replies">10 replies</a> <a href="#" class="share">Share</a></p>
                    </div>
                </div>
            </div>

            <div class="large-12 columns margin-bottom-18">
                <div class="wide-tile white sml">
                    <div class="large-1 avatar-holder">
                        <a href="#"><img src="media/img/avatars/example-4.jpg" alt="Example Avatar" class="avatar" /></a>
                    </div>
                    <div class="large-10 columns content">
                        <p class="header"><span class="handle"><strong>Mike Thomas</strong> <span class="timestamp">2 hours ago</span></p>
                        <h5>Help setting up a printer on the school network</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... <a href="#">Read more</a></p>
                        <p class="functions"><a href="#" class="subscribe">Subscribe</a> <a href="#" class="replies">10 replies</a> <a href="#" class="share">Share</a></p>
                    </div>
                </div>
            </div>

            <div id="load-btn-holder" class="load-btn-loader large-12 columns text-center">
                <a href="#" class="button blue load-btn">Load More</a>
            </div>

            <div id="canvas-loader" class="canvas-loader-holder"></div>

        </div>
    </section>


<?php include 'includes/global-js.php'; ?>

    <script>
        $(function() {
            var callFired = false;
            var pageCounter = 2;
            $(window).scroll(function () {
                if ($(window).scrollTop() >= $(document).height() - $(window).height() - 100 && !callFired) {
                    retrieveTiles();
                }
            });

            $('.load-btn').click(function(e) {
                e.preventDefault();
                retrieveTiles();
            });

            function retrieveTiles()
            {
                callFired = true;
                $('#load-btn-holder').hide();
                $('#canvas-loader').show();
                //SetTimeout function can be removed -- is used for testing loading image - code inside function must remain as it renders the HTML and show/hides elements.
                setTimeout(function(){
                    $.get('assets/ajaxTiles/social-tile-holder.php?p='+pageCounter, function( data ) {
                        if (data.length > 0)
                        {
                            $(data).insertAfter('.dynamic-load-target div.large-12:not(.load-btn-loader):last');
                            callFired = false;
                            $('#load-btn-holder').show();
                            $('#canvas-loader').hide();
                            pageCounter++;
                        }
                        else
                        {
                            $('#canvas-loader').hide();
                            $('<p id="end-of-content" style="text-align: center;"><strong>End of content.</strong></p>').insertAfter('.dynamic-load-target div.large-12:not(.load-btn-loader):last');
                        }
                    });
                }, 1500);
            }
        });
    </script>

    <script src="js/vendor/plugins/indie/heartcode-canvasloader-min-0.9.1.js"></script>

    <script type="text/javascript">
        var cl = new CanvasLoader('canvas-loader');
        cl.setColor('#1366a3'); // default is '#000000'
        cl.setShape('square'); // default is 'oval'
        cl.setDiameter(42); // default is 40
        cl.setDensity(90); // default is 40
        cl.setRange(1); // default is 1.3
        cl.setSpeed(3); // default is 2
        cl.setFPS(24); // default is 24
        cl.show(); // Hidden by default
    </script>


<?php include 'includes/footer.php'; ?>
<?php include 'includes/sidebar.php'; ?>