<?php
//this code is so we can imitate and end of records situation - the javascript receives an empty string and handles it from there.
$pageCounter = $_REQUEST["p"];

if ($pageCounter < 3)
{
?>
    <div class="large-4 columns">
        <div class="tile white">
            <div class="img-holder">
                <a href="about-it-byod.php"><img src="media/img/holder.gif" alt="Example image" /></a>
            </div>
            <div class="content">
                <h3><a href="about-it-byod.php">BYOD</a></h3>
                <p>
                    Lorem ipsum dolor sit amet, consectectur adispicing elit, sed do euismod tempor incididunt
                </p>
            </div>
        </div>
        <div class="tile-bottom">
            <a href="about-it-byod.php">Read Article</a>
        </div>
    </div>

    <div class="large-4 columns">
        <div class="tile white">
            <div class="img-holder">
                <a href="#"><img src="media/img/holder.gif" alt="Example image" /></a>
            </div>
            <div class="content">
                <h3><a href="#">Edu blog</a></h3>
                <p>
                    Lorem ipsum dolor sit amet, consectectur adispicing elit, sed do euismod tempor incididunt
                </p>
            </div>
        </div>
        <div class="tile-bottom">
            <a href="#">Read Article</a>
        </div>
    </div>

    <div class="large-4 columns">
        <div class="tile white">
            <div class="img-holder">
                <a href="#"><img src="media/img/holder.gif" alt="Example image" /></a>
            </div>
            <div class="content">
                <h3><a href="#">Student Portal</a></h3>
                <p>
                    Lorem ipsum dolor sit amet, consectectur adispicing elit, sed do euismod tempor incididunt
                </p>
            </div>
        </div>
        <div class="tile-bottom">
            <a href="#">Read Article</a>
        </div>
    </div>

    <div class="large-4 columns">
        <div class="tile white">
            <div class="img-holder">
                <a href="#"><img src="media/img/holder.gif" alt="Example image" /></a>
            </div>
            <div class="content">
                <h3><a href="#">Google Drive</a></h3>
                <p>
                    Lorem ipsum dolor sit amet, consectectur adispicing elit, sed do euismod tempor incididunt
                </p>
            </div>
        </div>
        <div class="tile-bottom">
            <a href="#">Read Article</a>
        </div>
    </div>

    <div class="large-4 columns">
        <div class="tile white">
            <div class="img-holder">
                <a href="#"><img src="media/img/holder.gif" alt="Example image" /></a>
            </div>
            <div class="content">
                <h3><a href="#">Adobe Connect</a></h3>
                <p>
                    Lorem ipsum dolor sit amet, consectectur adispicing elit, sed do euismod tempor incididunt
                </p>
            </div>
        </div>
        <div class="tile-bottom">
            <a href="#">Read Article</a>
        </div>
    </div>

    <div class="large-4 columns">
        <div class="tile white">
            <div class="img-holder">
                <a href="#"><img src="media/img/holder.gif" alt="Example image" /></a>
            </div>
            <div class="content">
                <h3><a href="#">SAM Initiative</a></h3>
                <p>
                    Lorem ipsum dolor sit amet, consectectur adispicing elit, sed do euismod tempor incididunt
                </p>
            </div>
        </div>
        <div class="tile-bottom">
            <a href="#">Read Article</a>
        </div>
    </div>

    <div class="large-4 columns">
        <div class="tile white">
            <div class="img-holder">
                <a href="#"><img src="media/img/holder.gif" alt="Example image" /></a>
            </div>
            <div class="content">
                <h3><a href="#">Example 1</a></h3>
                <p>
                    Lorem ipsum dolor sit amet, consectectur adispicing elit, sed do euismod tempor incididunt
                </p>
            </div>
        </div>
        <div class="tile-bottom">
            <a href="#">Read Article</a>
        </div>
    </div>

    <div class="large-4 columns">
        <div class="tile white">
            <div class="img-holder">
                <a href="#"><img src="media/img/holder.gif" alt="Example image" /></a>
            </div>
            <div class="content">
                <h3><a href="#">Example 2</a></h3>
                <p>
                    Lorem ipsum dolor sit amet, consectectur adispicing elit, sed do euismod tempor incididunt
                </p>
            </div>
        </div>
        <div class="tile-bottom">
            <a href="#">Read Article</a>
        </div>
    </div>

    <div class="large-4 columns">
        <div class="tile white">
            <div class="img-holder">
                <a href="#"><img src="media/img/holder.gif" alt="Example image" /></a>
            </div>
            <div class="content">
                <h3><a href="#">Example 3</a></h3>
                <p>
                    Lorem ipsum dolor sit amet, consectectur adispicing elit, sed do euismod tempor incididunt
                </p>
            </div>
        </div>
        <div class="tile-bottom">
            <a href="#">Read Article</a>
        </div>
    </div>
<?php
}
?>