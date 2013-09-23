<?php
$pageType = 'use-it'
?>

<?php include 'includes/header.php'; ?>


<?php include 'includes/global-header.php'; ?>
<?php include 'includes/banner.php'; ?>
<?php include 'includes/nav.php'; ?>


<section class="headings">
    <div class="row">
        <div class="large-12 columns">
            <div class="breadcrumbs"><a href="use-it.php">Use.It</a></div>
            <h1>Use.It Guides</h1>
        </div>
    </div>
</section>

<section class="white std">
    <div class="row">
        <div class="large-12 columns">
            <form id="frmSearchProducts">
                <label for="search-products" class="hide">Search</label>
                <input autocomplete="off" autocorrect="off" autocapitalize="off" id="search" type="search" class="large no-margin" placeholder="Search Use.it Guides" />
            </form>
        </div>
    </div>
</section>

<section class="filter-holder white light-grey-top-border std">
    <div class="row">
        <div class="large-12 columns">


            <h2>Filters</h2>
            <!--Note: data-target attribute in anchor element should be the ID of the element you want to hide/show-->
            <a href="#" class="toggle-view toggle-icon large" data-target="group-it-filters" data-state="closed">Toggle Filter View</a>
        </div>
        <div id="group-it-filters" class="large-12 columns filter-area">
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



        </div>
    </div>
</section>

<section class="light-grey-light std">
    <div class="row">
        <div class="large-12 columns margin-bottom-18">
            <h2>Showing Use.It Guides for</h2>
            <h5>collaborating in the cloud, printers, whiteboards, scanners</h5>
            <hr />
        </div>

        <div class="large-4 columns">
            <div class="tile white">
                <div class="img-holder">
                    <a href="about-it-byod.php"><img src="media/img/illustrations/byod-2.gif" alt="Bring Your Own Device Illustration" /></a>
                </div>
                <div class="content">
                    <h3><a href="about-it-byod.php">BYOD</a></h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectectur adispicing elit, sed do euismod tempor incididunt
                    </p>
                </div>
            </div>
            <div class="tile-bottom">
                <a href="about-it-byod.php">Read Use.It Guide</a>
            </div>
        </div>

        <div class="large-4 columns">
            <div class="tile white">
                <div class="img-holder">
                    <a href="#"><img src="media/img/illustrations/cloud-1.gif" alt="In the Cloud Illustration" /></a>
                </div>
                <div class="content">
                    <h3><a href="#">In the Cloud</a></h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectectur adispicing elit, sed do euismod tempor incididunt
                    </p>
                </div>
            </div>
            <div class="tile-bottom">
                <a href="#">Read Use.It Guide</a>
            </div>
        </div>

        <div class="large-4 columns">
            <div class="tile white">
                <div class="img-holder">
                    <a href="about-it-software-catalogue.php"><img src="media/img/illustrations/software-1.jpg" alt="Example image" /></a>
                </div>
                <div class="content">
                    <h3><a href="about-it-software-catalogue.php">Software Catalogue</a></h3>
                    <p>
                        Search, Select and Request Software direct to your computer August 2013
                    </p>
                </div>
            </div>
            <div class="tile-bottom">
                <a href="about-it-software-catalogue.php">Read Use.It Guide</a>
            </div>
        </div>

        <div class="large-4 columns">
            <div class="tile white">
                <div class="img-holder">
                    <a href="#"><img src="media/img/illustrations/google-drive-icon.png" alt="Google drive" /></a>
                </div>
                <div class="content">
                    <h3><a href="#">Google Drive</a></h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectectur adispicing elit, sed do euismod tempor incididunt
                    </p>
                </div>
            </div>
            <div class="tile-bottom">
                <a href="#">Read Use.It Guide</a>
            </div>
        </div>

        <div class="large-4 columns">
            <div class="tile white">
                <div class="img-holder">
                    <a href="#"><img src="media/img/illustrations/adobe.png" alt="Example image" /></a>
                </div>
                <div class="content">
                    <h3><a href="#">Adobe Connect</a></h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectectur adispicing elit, sed do euismod tempor incididunt
                    </p>
                </div>
            </div>
            <div class="tile-bottom">
                <a href="#">Read Use.It Guide</a>
            </div>
        </div>

        <div class="large-4 columns">
            <div class="tile white">
                <div class="img-holder">
                    <a href="#"><img src="media/img/holder.gif" alt="Example image" /></a>
                </div>
                <div class="content">
                    <h3><a href="#">SAM Initiative</a></h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectectur adispicing elit, sed do euismod tempor incididunt
                    </p>
                </div>
            </div>
            <div class="tile-bottom">
                <a href="#">Read Use.It Guide</a>
            </div>
        </div>

        <div class="large-4 columns">
            <div class="tile white">
                <div class="img-holder">
                    <a href="#"><img src="media/img/illustrations/cc-1.gif" alt="Example image" /></a>
                </div>
                <div class="content">
                    <h3><a href="#">Connected Classrooms</a></h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectectur adispicing elit, sed do euismod tempor incididunt
                    </p>
                </div>
            </div>
            <div class="tile-bottom">
                <a href="#">Read Use.It Guide</a>
            </div>
        </div>

        <div class="large-4 columns">
            <div class="tile white">
                <div class="img-holder">
                    <a href="#"><img src="media/img/illustrations/network-1.gif" alt="Example image" /></a>
                </div>
                <div class="content">
                    <h3><a href="#">Hosting</a></h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectectur adispicing elit, sed do euismod tempor incididunt
                    </p>
                </div>
            </div>
            <div class="tile-bottom">
                <a href="#">Read Use.It Guide</a>
            </div>
        </div>

        <div class="large-4 columns">
            <div class="tile white">
                <div class="img-holder">
                    <a href="#"><img src="media/img/illustrations/chat-1.gif" alt="Example image" /></a>
                </div>
                <div class="content">
                    <h3><a href="#">Social</a></h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectectur adispicing elit, sed do euismod tempor incididunt
                    </p>
                </div>
            </div>
            <div class="tile-bottom">
                <a href="#">Read Use.It Guide</a>
            </div>
        </div>
    </div>
</section>



<?php include 'includes/global-js.php'; ?>



<?php include 'includes/footer.php'; ?>

<?php include 'includes/sidebar.php'; ?>

