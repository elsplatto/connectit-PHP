<?php
$pageType = 'other';
?>


<?php include 'includes/header.php'; ?>



<?php include 'includes/global-header.php'; ?>
<?php include 'includes/banner.php'; ?>
<?php include 'includes/nav.php'; ?>


<section class="headings public-profile">
    <div class="row">
        <div class="large-12 columns">
            <h1>Selma Hayek</h1>
            <div class="avatar-holder">
                <?php
                if (file_exists("media/img/avatars/selma.jpg"))
                {?>
                    <img id="oldImg" src="media/img/avatars/selma.jpg" class="avatar" alt="Selma Hayek" />
                <?php
                }
                else
                {?>
                    <div id="initialsHolder" class="avatar orange">SH</div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>


<section class="public-profile light-grey-light std">
    <div class="row">
        <div class="large-12 columns margin-top-40 text-center">
            <div class="profile-bar">
                <a href="#" class="twitter">@selma.hayek01</a>
                <a href="#" class="yammer">selma.hayek</a>
                <a href="#" class="location">Australian Technology Park</a>
            </div>
        </div>
        <div class="large-2 columns">&nbsp;</div>
        <div class="large-8 columns std light-grey-top-border">
            <p>
                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.
                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.
            </p>
        </div>
        <div class="large-2 columns">&nbsp;</div>
    </div>
</section>




<?php include 'includes/global-js.php'; ?>



<?php include 'includes/footer.php'; ?>

<?php include 'includes/sidebar.php'; ?>

</body>
</html>
