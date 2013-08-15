<?php
$pageType = 'explore-it';
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
            <div class="subheader"><h3>Be Inspired</h3></div>
            <h2>Explore.It</h2> <a href="#" class="button dark-red small">Subscribe</a>
        </div>
    </div>
</section>


<section class="dark-grey-dark std">
    <div class="row">
        <div class="large-12 columns text-center">
            <div class="flex-video">
                <iframe width="560" height="315" src="//www.youtube.com/embed/88KmvrGQrcI?rel=0&controls=0" frameborder="0" allowfullscreen></iframe>
            </div>
            <h2 class="margin-top-40">Teaching - we're about outcomes, not incomes</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.</p>
        </div>
    </div>
</section>


<section class="filter-holder white std">
    <div class="row">
        <div class="large-12 columns">
            <h2>Filter</h2>
            <a href="#" class="toggle-view toggle-icon large" data-target="explore-it-filters" data-state="open">Toggle Filter View</a>
        </div>
        <div id="explore-it-filters" class="large-12 columns">
            <h6>By Outcome</h6>
            <a href="#" class="select-all">Select All</a> <a href="#" class="clear-all">Clear All</a>
        </div>


        </div>
    </div>
</section>



<?php include 'includes/footer.php'; ?>

<?php include 'includes/global-js.php'; ?>

<script>
$(function() {
    $('.toggle-view').click(function(e){
        e.preventDefault();
        var targetEl = $('#'+$(this).attr('data-target'));
        var targetState = $(this).attr('data-state').toLowerCase();
        if (targetState === 'open')
        {
            targetEl.hide();
            $(this).attr('data-state','closed');
        }
        else
        {
            targetEl.show();
            $(this).attr('data-state','open');
        }
    });
});
</script>

</body>
</html>
