<?php
$pageType = 'other';
?>


<?php include 'includes/header.php'; ?>



<?php include 'includes/global-header.php'; ?>
<?php include 'includes/banner.php'; ?>
<?php include 'includes/nav.php'; ?>


<section class="headings">
    <div class="row">
        <div class="large-12 columns">
            <div class="breadcrumbs"><a href="my-profile.php">Profile</a></div>
            <h2><a href="my-profile.php">Your Profile</a></h2><h2>Subscriptions</h2>
        </div>
    </div>
</section>


<section class="my-subscriptions light-grey-light std">
    <div class="row">
        <div class="large-12 columns">
            <h2 class="margin-bottom-40">Your Subscriptions</h2>

            <ul class="action-list subscriptions">
                <li class="unread"><div>You have <a href="#">3 new comments</a> and <a href="#">4 forum post replies</a> in areas you subscribe to</div><a href="#" class="button flat light-grey-dark right">Action</a></li>
                <li class="unread"><div>The application <a href="#">Photoshop CC</a> requires a licence before you can download it.</a></div><a href="#" class="button flat light-grey-dark right">Action</a></li>
                <li class="read"><div>You have <a href="#">3 new comments</a> and <a href="#">4 forum post replies</a> in areas you subscribe to</div></li>
                <li class="read"><div>You have <a href="#">3 new comments</a> and <a href="#">4 forum post replies</a> in areas you subscribe to</div></li>
                <li class="read"><div>The application <a href="#">Photoshop CC</a> requires a licence before you can download it.</a></div></li>
            </ul>
        </div>
    </div>
</section>




<?php include 'includes/global-js.php'; ?>



<?php include 'includes/footer.php'; ?>

<?php include 'includes/sidebar.php'; ?>

</body>
</html>
