<section id="sidebar" role="complementary">
    <div class="main-menu">
        <!--h6>Connect.It</h6-->
        <nav id="sideMenu" role="navigation">
            <form id="frmSideSearch" name="frmSideSearch">
                <input type="search" id="sideSearch" name="sideSearch" placeholder="Search Connect.It" />
            </form>
            <ul id="sideMainNav" class="nav-bar">
                <li class="use-it<?if ($pageType == 'use-it') {echo ' active';} ?>">
                    <a href="use-it.php">Use.It</a>
                </li>
                <li class="fix-it<?if ($pageType == 'fix-it') {echo ' active';} ?>">
                    <a href="fix-it.php">Fix.It</a>
                </li>
                <li class="explore-it<?if ($pageType == 'explore-it') {echo ' active';} ?>">
                    <a href="explore-it.php">Explore.It</a>
                </li>
                <li class="share-it<?if ($pageType == 'share-it') {echo ' active';} ?>">
                    <a href="share-it.php">Share.It</a>
                </li>
                <li class="about-it<?if ($pageType == 'about-it') {echo ' active';} ?>">
                    <a href="about-it.php">About.It</a>
                </li>
            </ul>
        </nav>
    </div>
</section>