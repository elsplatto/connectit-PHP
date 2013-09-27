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


<section class="edit-my-profile white std">
    <div class="row">
        <div class="large-2 columns">
            <div class="avatar-overlay-holder">
                <a href="overlay-file-upload.php" id="changePhoto" class="avatar-overlay green reveal-init" title="Click here to change your avatar">Change Photo</a>
                <img src="media/img/avatars/profileLge.jpg" class="avatar" />
            </div>
        </div>
        <div class="large-10 columns">
            <h3>Jason Taikato</h3>
            <form id="frmEditProfile" data-abide>
                <label for="twitterId">Twitter Username</label>
                <input type="text" id="twitterId" name="twitterId" pattern="alpha_numeric" />
                <small class="error">Please enter a valid Twitter Username</small>

                <label for="yammerId">Yammer Username</label>
                <input type="text" id="yammerId" name="yammerId" pattern="alpha_numeric" />
                <small class="error">Please enter a valid Yammer Username</small>

                <label for="schools">Schools</label>
                <input type="text" id="schools" name="schools" class="margin-bottom-40" />

                <label for="bio">Bio</label>
                <textarea id="bio" name="bio" class="margin-bottom-40"></textarea>

                <!--div class="note-holder large-12">
                    <span class="mandatory">*</span> <span class="note">These fields are mandatory</span>
                </div-->

                <div class="large-12">
                    <input type="submit" class="button green right" value="Save Changes" />
                    <a href="my-profile.php" class="button secondary right">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include 'includes/global-js.php'; ?>

<?php include 'includes/footer.php'; ?>

<?php include 'includes/sidebar.php'; ?>




</body>
</html>
