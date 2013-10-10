
<div id="fileModal" class="white">
    <form id="frmUpload" class="dropzone" action="upload-avatar.php" method="POST" enctype="multipart/form-data">
        <h3>Change profile picture</h3>

        <div id="errorHolder"></div>

        <input type="file" id="file" name="file" required />
        <div class="note-holder">
            <span class="note">JPG, GIF or PNG. Max size of 700KB</span>
        </div>

        <div class="button-holder">
            <input type="submit" class="button green right" value="Upload" />
            <a href="#" class="button secondary reveal-close right">Cancel</a>
        </div>

    </form>


    <div id="canvas-loader" class="canvas-loader-holder"></div>

    <div id="successHolder" class="success-holder"></div>

    <div id="confirmButtonHolder" class="button-holder">
        <a href="#" class="button green reveal-close right">Use</a>
        <a href="#" class="button secondary upload-again right">Change</a>
    </div>

    <a class="close-reveal-modal reveal-close"></a>
</div>

<script src="js/vendor/plugins/indie/heartcode-canvasloader-min-0.9.1.js"></script>

<script type="text/javascript">
    var cl = new CanvasLoader('canvas-loader');
    cl.setColor('#3aa385'); // default is '#000000'
    cl.setShape('square'); // default is 'oval'
    cl.setDiameter(42); // default is 40
    cl.setDensity(90); // default is 40
    cl.setRange(1); // default is 1.3
    cl.setSpeed(3); // default is 2
    cl.setFPS(24); // default is 24
    cl.show(); // Hidden by default
</script>

<script>
$(function() {
    $('.reveal-modal-bg, .reveal-close').click(function(e){
        e.preventDefault();
        $('.reveal-modal').foundation('reveal','close');
        $('.reveal-modal-bg').hide();
        $('.reveal-modal').remove();
        if ($('#initialsHolder').length > 0 && $('#newImg').length > 0)
        {
            $('#initialsHolder').hide('slow');
        }
        else if ($('#oldImg').length > 0 && $('#newImg').length > 0)
        {

        }
    });

    $('.upload-again').click(function(e){
        e.preventDefault();
        $('#successHolder').hide();
        $('#confirmButtonHolder').hide();
        $('#newImg').remove();
        $('#frmUpload').show();
        $('#file').val('');
    });

    $('#frmUpload').submit(function(e){
        e.preventDefault();
    })

    $('input.button').click(function(){
        var formData = new FormData($('form')[0]);
        var strFile = $('#file').val();
        if (strFile.length > 0)
        {
            $.ajax({
                url: 'upload-avatar.php',  //Server script to process data
                type: 'POST',
                xhr: function() {  // Custom XMLHttpRequest
                    var myXhr = $.ajaxSettings.xhr();
                    if(myXhr.upload){ // Check if upload property exists
                        myXhr.upload.addEventListener('progress',progressHandlingFunction, false); // For handling the progress of the upload
                    }
                    return myXhr;
                },
                //Ajax events
                beforeSend: beforeSendHandler,
                success: completeHandler,

                error: errorHandler,
                // Form data
                data: formData,
                //Options to tell jQuery not to process data or worry about content-type.
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });

    function progressHandlingFunction(e){
        if(e.lengthComputable){

        }
    }

    function errorHandler(data) {
        var obj = JSON.parse(data);
    }

    function beforeSendHandler(e) {
        $('#canvas-loader').show();
        $('#frmUpload').hide();
    }

    function completeHandler(data) {
        var obj = JSON.parse(data);
        var avatarHTML1, avatarHTML2;
        if (obj.hasOwnProperty('Filename') && obj.Filename.length > 0)
        {
            avatarHTML1 = '<img src="media/img/avatars/'+obj.Filename+'" class="avatar" alt="Avatar Image" />';
            avatarHTML2 = '<img id="newImg" src="media/img/avatars/'+obj.Filename+'" class="avatar" alt="Avatar Image" />';
            $('#canvas-loader').hide();
            $('#successHolder').html(avatarHTML1).show();
            $('#confirmButtonHolder').show();
            $('#avatarOverlayHolder').append(avatarHTML2);
        }
        else if (obj.hasOwnProperty('ErrorMsg') && obj.ErrorMsg.length > 0)
        {
            avatarHTML1 = obj.ErrorMsg;
            $('#canvas-loader').hide();
            $('#frmUpload').show();
            $('#errorHolder').html(html).show();
        }
    }

});
</script>