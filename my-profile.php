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
            <h1>Your Profile</h1><h2><a href="my-subscriptions.php">Subscriptions</a></h2>
        </div>
    </div>
</section>


<section class="my-profile white std">
    <div class="row">
        <div class="large-12 columns">
            <div class="large-2 columns">
                <!--If image exists then use it, otherwise use green dot with users initials in it-->
                <?php
                if (file_exists("media/img/avatars/jason.jpg"))
                {
                ?>
                    <a href="public-profile.php"><img src="media/img/avatars/jason.jpg" class="avatar" alt="Jason Taikato" /></a>
                <?php
                }
                else
                {
                ?>
                    <a href="public-profile.php" class="avatar green">JT</a>
                <?php
                }
                ?>

            </div>
            <div class="large-10 columns">
                <h3>Jason Taikato</h3>
                <div class="profile-bar">
                    <a href="#" class="twitter">@jasontaikato</a>
                    <a href="#" class="yammer">jason.taikato</a>
                    <a href="#" class="location">Australian Technology Park</a>
                </div>
                <p>
                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.
                </p>
                <a href="edit-my-profile.php" class="button green no-margin">Edit Profile</a>
            </div>
        </div>
    </div>
</section>

<section class="light-grey-light std"><a name="notifications"></a>
    <div class="row">
        <div class="large-12 columns">
            <h2 class="margin-bottom-40">Notifications</h2>

            <ul class="action-list urgent">
                <li><div class="header"><strong>Urgent!</strong> You have need to <a href="#">approve a comment</a> on this article.</div><a href="#" class="button flat transparent right">Action</a></li>
                <li><div class="header"><strong>Urgent!</strong> You have need to <a href="#">approve a comment</a> on this article.</div><a href="#" class="button flat transparent right">Action</a></li>
                <li><div class="header"><strong>Urgent!</strong> You have need to <a href="#">approve a comment</a> on this article.</div><a href="#" class="button flat transparent right">Action</a></li>
            </ul>

            <ul class="action-list notifications">
                <li class="unread"><div class="header">You have <a href="#">3 new comments</a> and <a href="#">4 forum post replies</a> in areas you subscribe to</div><a href="#" class="button flat light-grey-dark right">Action</a></li>
                <li class="unread"><div class="header">The application <a href="#">Photoshop CC</a> requires a licence before you can download it.</a></div><a href="#" class="button flat light-grey-dark right">Action</a></li>
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
