<?php
$pageType = 'share-it';
?>


<?php include 'includes/header.php'; ?>
<?php include 'includes/global-header.php'; ?>
<?php include 'includes/banner.php'; ?>
<?php include 'includes/nav.php'; ?>


    <section class="headings">
        <div class="row">
            <div class="large-12 columns">
                <div class="breadcrumbs"><a href="share-it.php">Share.It</a> <a href="share-it-discussions.php">Discussions</a></div>
                <h1>New Discussion</h1>
            </div>
        </div>
    </section>


    <section class="new-discussion white std">
        <div class="row">
            <div class="large-2 columns">
                <img src="media/img/avatars/profileLge.jpg" class="avatar" />
            </div>
            <div class="large-10 columns">
                <h3>Jason Taikato</h3>
                <form id="frmNewDiscussion" data-abide>
                    <label for="fldSubject">Subject</label>
                    <input type="text" id="fldSubject" name="fldSubject" required />
                    <small class="error">Subject is a required field</small>

                    <label for="fldDiscussion">Discussion</label>
                    <textarea id="fldDiscussion" name="fldDiscussion" required></textarea>
                    <small class="error">Discussion is a required field</small>

                    <h5>Select Tags</h5>


                    <div class="tag-area show">
                        <h5>Product Groups</h5>

                        <div class="tag-box light-grey-top-border">
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

                        <h5>Outcome</h5>
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


                        <h5>Group</h5>
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

                    <div class="std light-grey-top-border">
                        <input type="checkbox" id="chkHelpContent" name="chkHelpContent" class="left" />
                        <label for="chkHelpContent" class="left margin-top-18">Tick this box if you want this to appear under help content</label>
                        <input type="submit" class="button green right" value="Publish new discussion" />
                    </div>
                </form>
            </div>
        </div>
    </section>




<?php include 'includes/global-js.php'; ?>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/sidebar.php'; ?>