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
            <h2><a href="my-profile.php">Your Profile</a></h2><h1>Subscriptions</h1>
        </div>
    </div>
</section>


<section class="my-subscriptions light-grey-light std"><a name="subscriptions"></a>
    <div class="row">
        <div class="large-12 columns">
            <h2 class="margin-bottom-40">Your Subscriptions</h2>

            <ul class="action-list subscriptions">
                <li class="unread">
                    <div class="header"><a href="#">2 new comments</a> on <a href="#">New learning techniques and practices</a></div><a href="#" class="button flat light-grey-dark right">Unsubscribe</a><a href="#" class="button flat green mark-as-read right">Mark as read</a>
                    <div class="preview large-12 columns margin-top-20">
                        <div class="content">
                            <p class="header"><span class="handle"><strong>John Smith</strong> <span class="timestamp">2 hours ago</span></p>
                            <h5>Help setting up a printer on the school network</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <a href="#" class="read-more">Read more</a></p>
                        </div>

                        <div class="content">
                            <p class="header"><span class="handle"><strong>John Smith</strong> <span class="timestamp">2 hours ago</span></p>
                            <h5>Help setting up a printer on the school network</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... <a href="#" class="read-more">Read more</a></p>
                        </div>
                    </div>
                </li>
                <li class="unread">
                    <div class="header">The application <a href="#">Photoshop CC</a> requires a licence before you can download it.</a></div><a href="#" class="button flat light-grey-dark right">Unsubscribe</a><a href="#" class="button flat green mark-as-read right">Mark as read</a>
                </li>
                <li class="read"><div class="header">You have <a href="#">3 new comments</a> and <a href="#">4 forum post replies</a> in areas you subscribe to</div></li>
                <li class="read"><div class="header">You have <a href="#">3 new comments</a> and <a href="#">4 forum post replies</a> in areas you subscribe to</div></li>
                <li class="read"><div class="header">The application <a href="#">Photoshop CC</a> requires a licence before you can download it.</a></div></li>
            </ul>
        </div>
    </div>
</section>




<?php include 'includes/global-js.php'; ?>



<?php include 'includes/footer.php'; ?>

<?php include 'includes/sidebar.php'; ?>

</body>
</html>
