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
                <a href="#" id="changePhoto" data-reveal-id="fileModal" class="avatar-overlay green" title="Click here to change your avatar"></a>
                <img src="media/img/avatars/profileLge.jpg" class="avatar" />
            </div>
        </div>
        <div class="large-10 columns">
            <h3>Jason Taikato</h3>
            <form id="frmEditProfile">
                <label for="twitterId">Twitter ID</label>
                <input type="text" id="twitterId" name="twitterId" />

                <label for="yammerId">Yammer ID</label>
                <input type="text" id="yammerId" name="yammerId" />

                <label for="schools">Schools</label>
                <input type="text" id="schools" name="schools" />

                <label for="bio">Bio</label>
                <textarea id="bio" name="bio"></textarea>

                <div class="note-holder">
                    <span class="mandatory">*</span><span class="note">These fields are mandatory</span>
                </div>

                <input type="submit" class="button green right" value="Save Changes" />
                <a href="my-profile.php" class="button secondary right">Cancel</a>
            </form>
        </div>
    </div>
</section>


<?php include 'includes/global-js.php'; ?>

<script src="js/foundation/foundation.reveal.js"></script>
<script src="js/foundation/foundation.alerts.js"></script>
<script src="js/vendor/plugins/jquery/dropzone.js"></script>
<script>
$(function() {
    $('#changePhoto').click(function(e)
    {
        e.preventDefault();
        $('#fileModal').foundation('reveal', 'open', {
            animation: 'fadeAndPop',
            animationSpeed: 0,
            closeOnBackgroundClick: true,
            dismissModalClass: 'secondary',
            bgClass: 'reveal-modal-bg',
            open: function(){},
            opened: function(){},
            close: function(){},
            closed: function(){},
            bg : $('.reveal-modal-bg'),
            css : {
                open : {
                    'opacity': 0,
                    'visibility': 'visible',
                    'display' : 'block'
                },
                close : {
                    'opacity': 1,
                    'visibility': 'hidden',
                    'display': 'none'
                }
            }
        });
    });
    $('.reveal-close').click(function(e) {
        e.preventDefault();
        $('#fileModal').foundation('reveal','close');
    });
});



</script>

<?php include 'includes/footer.php'; ?>

<?php include 'includes/sidebar.php'; ?>

<div id="fileModal" class="reveal-modal small white">
    <h3>Change profile picture</h3>
    <form id="frmUpload" class="dropzone" action="upload.php" method="POST" enctype="multipart/form-data">

            <!--label for="fileselect">Files to upload:</label-->
        <div class="fallback">
            <input type="file" id="file" name="file" />
            <div class="note-holder">
                <span class="note">JPG, GIF or PNG. Max size of 700K</span>
            </div>
            <input type="submit" class="button green right" value="Upload Now" />
            <a href="#" class="button secondary reveal-close right">Cancel</a>
        </div>
    </form>
    <a class="close-reveal-modal reveal-close">x</a>
</div>
<div class="reveal-modal-bg" style="display: none"></div>

</body>
</html>
