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
            <h1>Software Catalogue</h1>
        </div>
    </div>
</section>

<section class="white std content-offset">
    <div class="row">
        <div class="large-offset-1 large-10 columns">
            <p class="intro">
                Search, Select and Request Software direct to your computer August 2013.
            </p>

            <h4>What is the Software Catalogue?</h4>
            <p>The eT4L Software Catalogue is a new web-service where you can browse, discover and request software for installation on computers in your classroom, computer lab or staffroom, actually anywhere across the school. The catalogue will be available only for schools who are running an eT4L server.</p>

            <h4>What type of Software will be in the catalogue?</h4>
            <p>The software in the catalogue reflects the software titles that are currently in DEC schools across NSW.</p>


            <img src="media/img/holderLge.png" alt="Example Image" class="right"  />

            <h4>Has the Software been expertly reviewed?</h4>
            <p>All software in the catalogue has been classified by teachers and there are ratings and reviews by people who have used these tools in practice to assist you in selecting the best resources for deployment in your setting.</p>

            <h4>Are user ratings part of the catalogue?</h4>
            <p>In the second phase of the project users will be able to rate and review software to assist other users within the DEC.</p>




            <h4>What are the benefits of the eT4L Software Catalogue?</h4>
            <p>The benefits of the eT4L Software Catalogue for schools and teachers will be: - Minimising software costs for schools and sites</p>
            <ul>
                <li>Providing support for schools in managing software and licensing</li>
                <li>Supporting schools in reducing replication of licenses</li>
                <li>Assisting teachers to discover software to enhance their teaching practice.</li>
            </ul>

            <h4>When will the eT4L Software Catalogue be re-leased for Schools?</h4>
            <p>The project is currently in pilot phase with full rollout to all eT4L schools during 2014. The full release of the eT4L Software Catalogue is scheduled to begin in 2014.</p>
            <img src="media/img/holderLge.png" alt="Example Image" class="left"  />
            <h4>Further Information</h4>
            <p>For more information on the eT4L Software Catalogue please ensure you check out the latest edition of technology news for schools. Or contact us on the details below:</p>
            <p><a href="mailto:et4lsoftwarecatalogue@det.nsw.edu.au">et4lsoftwarecatalogue@det.nsw.edu.au</a></p>
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
