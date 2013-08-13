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
                <input autocomplete="off" autocorrect="off" autocapitalize="off" id="search" type="search" class="large no-margin" placeholder="Search the knowledge base 24/7" />
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

<section id="trouble-shoot" class="light-grey-light std">
    <div class="row">
        <div class="large-6 columns">
            <h2>Products</h2>
            <nav class="top-bar" data-options="is_hover:false">
                <section class="top-bar-section">
                    <ul>
                        <li class="has-dropdown">
                            <a href="#">ITD Products</a>
                            <ul class="dropdown">
                                <li class="nav-item">
                                    <a href="#">Email</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#">Outlook Express</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#">Outlook.com</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#">Gmail</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="#">Printers</a>
                            <ul class="dropdown">
                                <li class="nav-item">
                                    <a href="#">List item 1</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#">List item 2</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#">List item 3</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#">List item 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Tablets</a>
                        </li>
                        <li>
                            <a href="#">White boards</a>
                        </li>
                        <li>
                            <a href="#">Scanners</a>
                        </li>
                        <li>
                            <a href="#">Computers</a>
                        </li>
                        <li>
                            <a href="#">Cameras</a>
                        </li>
                        <li>
                            <a href="#">Projectors</a>
                        </li>
                        <li><a href="#" class="themed">View All (227)</a></li>
                    </ul>
                </section>
            </nav>
        </div>
        <div class="large-6 columns">
            <h2>Problems</h2>
            <section class="top-bar-section">
                <ul>
                    <li>
                        <a href="#">Connecting to the internet</a>
                    </li>
                    <li>
                        <a href="#">Can't access email</a>
                    </li>
                    <li>
                        <a href="#">Can't connect to printer</a>
                    </li>
                    <li>
                        <a href="#">Can't log on</a>
                    </li>
                    <li>
                        <a href="#">Computer won't start</a>
                    </li>
                    <li>
                        <a href="#">Computer is running slow</a>
                    </li>
                    <li>
                        <a href="#">Can't print from white board</a>
                    </li>
                    <li>
                        <a href="#">Can't download picture from camera</a>
                    </li>
                    <li>
                        <a href="#">Can't connect iPad to the network</a>
                    </li>
                    <li>
                        <a href="#">Account locked</a>
                    </li>
                    <li>
                        <a href="#">Can't log on</a>
                    </li>
                    <li>
                        <a href="#">Can't log on</a>
                    </li>
                    <li><a href="#" class="themed">View All (47)</a></li>
                </ul>
            </section>
        </div>
    </div>
</section>


<?php include 'includes/footer.php'; ?>

<?php include 'includes/global-js.php'; ?>

</body>
</html>
