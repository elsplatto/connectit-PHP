
<div id="fileModal" class="white">
    <h3>Change profile picture</h3>
    <form id="frmUpload" class="dropzone" action="upload.php" method="POST" enctype="multipart/form-data">

        <!--label for="fileselect">Files to upload:</label-->
        <div class="fallback">
            <input type="file" id="file" name="file" />
            <div class="note-holder">
                <span class="note">JPG, GIF or PNG. Max size of 700K</span>
            </div>
                <input type="submit" class="button green right" value="Upload" />
                <a href="#" class="button secondary reveal-close right">Cancel</a>
        </div>
    </form>
    <a class="close-reveal-modal reveal-close"></a>
</div>
<script>
$(function() {
    $('.reveal-modal-bg, .reveal-close').click(function(e){
        e.preventDefault();
        $('.reveal-modal').foundation('reveal','close');
        $('.reveal-modal-bg').hide();
        $('.reveal-modal').remove();
    })
})
</script>