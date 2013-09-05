<div id="nav-pad"></div>
<div id="nav-holder" class="nav-holder">
    <div class="row">
        <div class="large-12 columns">
            <nav class="top-bar" data-options="is_hover:false">
                <!--ul class="title-area">
                    <!-- Title Area -->
                    <!--li class="name">

                    </li>
                    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                    <!--li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                </ul-->

                <section class="top-bar-section">
                    <!-- Left Nav Section -->
                    <ul class="top-level">
                        <li class="use-it<?if ($pageType == 'use-it') {echo ' active';} ?>"><a href="use-it.php">Use.It</a></li>
                        <li class="fix-it<?if ($pageType == 'fix-it') {echo ' active';} ?>"><a href="fix-it.php">Fix.It</a></li>
                        <li class="explore-it<?if ($pageType == 'explore-it') {echo ' active';} ?>"><a href="explore-it.php">Explore.It</a></li>
                        <li class="share-it<?if ($pageType == 'share-it') {echo ' active';} ?>"><a href="share-it.php">Share.It</a></li>
                        <li class="about-it<?if ($pageType == 'about-it') {echo ' active';} ?>"><a href="about-it.php">About.It</a></li>
                        <li class="search-it has-dropdown search"><a href="#" data-isSearch="true" data-closeOnClick>Find.It</a>
                            <ul class="dropdown">
                                <li class="search-holder">
                                    <form id="frmSearch">
                                        <label for="search">Search</label>
                                        <input autocomplete="off" autocorrect="off" autocapitalize="off" id="search" type="search" class="large" placeholder="Search CONNECT.IT" />
                                    </form>
                                </li>
                            </ul>
                            <div class="search-results-overlay">
                                <div class="row">
                                    <div class="large-12">

                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </section>
            </nav>
        </div>
    </div>
</div>