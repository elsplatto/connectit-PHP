<?php
$pageType = 'explore-it';
?>

<?php include 'includes/header.php'; ?>

<?php include 'includes/global-header.php'; ?>
<?php include 'includes/banner.php'; ?>
<?php include 'includes/nav.php'; ?>


<section class="headings">
    <div class="row">
        <div class="large-12 columns">
            <div class="breadcrumbs"><a href="explore-it.php">Explore.It</a></div>
            <h1>Skype In The Classroom</h1>
        </div>
    </div>
</section>

<section class="dark-grey-dark std">
    <div class="row">
        <div class="large-12 columns text-center">
            <a href="overlay-skype.php" data-size="large" class="reveal-init video-link" title="Link opens video in overlay"><img src="media/img/articles/Skypeclassroom.jpg" alt="Skype Illustration" /></a>

        </div>
    </div>
</section>

<section class="white std">
    <div class="row">
        <div class="large-8 columns">
            <p class="intro">
                Skype in the classroom is an amazing resource which connects Australian classrooms to thousands of teachers and classrooms from around the world. The service provides access  to global experts, the ability to share ideas and to create amazing learning experiences with teachers from around the world.
            </p>

            <blockquote>
                <p>
                    Skype creates the kind of environment that children will experience in the future. It lets them see there is learning happening beyond the four walls of our classroom. They learn there is an extended world beyond them, places they've never seen before - the potential is great
                </p>
                <p class="caption">Jo-Ann Fox, 4th grade teacher, Escondido, California</p>
            </blockquote>

            <h5>Skype lessons for every subject.</h5>

            <p>Ever wanted to introduce your class to a physicist? An explorer? How about an author? Explore a world of Skype lessons from experts and our partners to find a fantastic speaker for your class.Lessons are created by teachers, guest speakers. <a href="https://education.skype.com/collections" target="_blank">Find out more</a></p>



        </div>
        <div class="large-4 columns right-col">
            <h5>Tags</h5>
            <div class="tag-box light-grey-top-border">
                <a href="#" class="selected">Skype</a>
                <a href="#" class="selected">Connected classrooms</a>
                <a href="#" class="selected">People and culture</a>
                <a href="#" class="selected">Science</a>
                <a href="#" class="selected">Video camera</a>
                <a href="#" class="selected">Whiteboards</a>

            </div>

            <h6>Got something to share?</h6>
            <a href="overlay-submit-content.php" class="button blue reveal-init">Submit an Article</a>
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

<section class="light-grey-light std light-grey-top-border list-holder">
    <div class="row">
        <div class="large-12 columns">
            <div class="large-6 columns">
                <h2>View Comments</h2>
            </div>

            <div class="large-6 columns text-right">
                <a href="#" class="button dark-grey flat">Top</a>
                <a href="#" class="button grey flat">Date Added</a>
            </div>

            <div class="large-12 wide-tile white sml margin-bottom-18">
                <div class="avatar-holder">
                    <a href="#"><img src="media/img/avatars/example-2.jpg" alt="Example Avatar" class="avatar" /></a>
                </div>
                <div class="content">
                    <p class="header"><span class="handle"><strong>John Smith</strong></span> <a href="#">@johnboy</a> <span class="timestamp">2 hours ago</span></p>
                    <p class="comment">As a condition, hyperspace translates objects as a phased tachyon wave, which once collapsed restores the objects to their meson composition instantaneously. As a condition, hyperspace translates objects as a phased tachyon wave, which once collapsed restores the objects to their meson composition instantaneously.</p>
                    <p class="functions"><span>Did you find this comment useful?</span><a href="#" class="like">Yes</a> <span>(10)</span><a href="#" class="unlike">No</a> <span>(1)</span></p>
                </div>
            </div>

            <div class="large-12 wide-tile white sml margin-bottom-18">
                <div class="avatar-holder">
                    <a href="#"><img src="media/img/avatars/profileLge.jpg" class="avatar" alt="Example Avatar" /></a>
                </div>
                <div class="content">
                    <!--if user has just posted comment then include this next div. It's a panic button to allow them to delete or edit their comment. -->
                    <div class="edit-delete-holder">
                        <span class="panic-timer">120</span> seconds left to <a href="#" class="edit">edit</a> or <a href="#" class="delete">delete</a>
                    </div>
                    <p class="header"><span class="handle"><strong>Jason Taikato</strong></span> <a href="#">@elsplatto</a> <span class="timestamp">just now</span></p>
                    <p class="comment">This is supposed to happen with a minimum of energy expenditure. While it is necessary for a ship to have nuclear engine to produce the hyperspace drive field to hurl a vessel through hyperspace, nearly all of the energy expended is recovered as the hyper field collapses. Also, there is no Cherenkov radiation flash associated with re-entry from hyperspace.</p>
                    <p class="comment">This is supposed to happen with a minimum of energy expenditure. While it is necessary for a ship to have nuclear engine to produce the hyperspace drive field to hurl a vessel through hyperspace, nearly all of the energy expended is recovered as the hyper field collapses. Also, there is no Cherenkov radiation flash associated with re-entry from hyperspace.</p>
                    <p class="functions"><span>Did you find this comment useful?</span><a href="#" class="like">Yes</a> <span>(10)</span><a href="#" class="unlike">No</a> <span>(1)</span></p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="light-grey-light std light-grey-top-border">
    <div class="row">
        <div class="large-12 columns">
            <h2>Add Comment</h2>
            <form id="frmAddComment" name="frmAddComment" data-abide>
                <label for="comment" class="hidden-field"></label>
                <textarea id="comment" required></textarea>
                <small class="error">Please enter your comment.</small>
                <input type="submit" value="Add Comment" disabled="disabled" class="button green right" />
            </form>
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

<script>
    $(function() {
        var count=120;
        var counter=setInterval(timer, 1000); //1000 will  run it every 1 second
        function timer()
        {
            count=count-1;
            if (count < 0)
            {
                clearInterval(counter);
                $('.edit-delete-holder').remove();
                //counter ended, do something here
                return;
            }
            //Do code for showing the number of seconds here
            $('span.panic-timer').text(count);
        }

        $('.edit-delete-holder .edit').on('click', function(e) {
            e.preventDefault();
            var commentHolder = $(this).closest('.wide-tile');
            var comment = $(this).parent('div').siblings('p.comment');
            var text= '';
            for (var i = 0; i < comment.length; i++)
            {
                text = text + $(comment[i]).text() + '\r\r';
            }
            $('#comment').focus();
            $('#comment').val(text);
            $('#frmAddComment input[type="submit"]').removeAttr('disabled');
            $(commentHolder).remove();
        });

        $('.edit-delete-holder .delete').on('click', function(e) {
            e.preventDefault();
            var commentHolder = $(this).closest('.wide-tile');
            $(commentHolder).remove();
        });

        $('#comment').keyup(function(){
            var btn = $('#frmAddComment input[type="submit"]')
            if ($.trim($(this).val()).length > 0)
            {
                btn.removeAttr('disabled');
            }
            else if (($(this).val().length === 0) && btn.not(':disabled'))
            {
                btn.attr('disabled','disabled');
            }
        });


    });
</script>

</body>
</html>