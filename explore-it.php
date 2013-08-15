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

            <h6>By Product</h6>
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
    <div class="row">
        <div class="large-12 columns">
            <h2>Showing inspiration for</h2>
            <h6>collaborating in the cloud, printers, whiteboards, scanners</h6>

            <div class="tile-holder light-grey-top-border">
                <div class="fix-it">
                    <img src="media/img/slideshow/inspire-1.jpg" alt="Example Image" />
                    <div class="heading">
                        <h4>Fix.IT / Video</h4>
                        <h3>Bring in your own device scheme</h3>
                    </div>
                </div>
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

    $('.filter-box a').click(function(e) {
        e.preventDefault();
        if($(this).hasClass('selected'))
        {
            $(this).removeClass('selected');
        }
        else
        {
            $(this).addClass('selected')
        }
    });

    $('.clear-all').each(function( index ) {
        $(this).on('click', function(e) {
            e.preventDefault();
            var targetHolder = $(this).siblings('div.filter-box:eq('+index+')');
            var targetEls =  targetHolder.children('a');
            var i;
            for (i = 0;i < targetEls.length; i++)
            {
                $(targetEls[i]).removeClass('selected');

            }
        });
    });

    $('.select-all').each(function( index ) {
        $(this).on('click', function(e) {
            e.preventDefault();
            var targetHolder = $(this).siblings('div.filter-box:eq('+index+')');
            var targetEls =  targetHolder.children('a');
            console.log('['+targetEls.length+']');
            var i;
            for (i = 0;i < targetEls.length; i++)
            {
                $(targetEls[i]).addClass('selected');

            }
        });
    });
});
</script>

</body>
</html>
