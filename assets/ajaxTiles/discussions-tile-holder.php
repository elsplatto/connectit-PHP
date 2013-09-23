<?php
//this code is so we can imitate and end of records situation - the javascript receives an empty string and handles it from there.
$pageCounter = $_REQUEST["p"];

if ($pageCounter < 3)
{
?>
<div class="large-12 columns margin-bottom-18">
    <div class="wide-tile white sml">
        <div class="avatar-holder">
            <a href="#"><img src="media/img/avatars/example-2.jpg" alt="Example Avatar" class="avatar" /></a>
        </div>
        <div class="content">
            <p class="header"><span class="handle"><strong>John Smith</strong> <span class="timestamp">1 hour ago</span></p>
            <h5>Help setting up a printer on the school network</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... <a href="#">Read more</a></p>
            <p class="functions"><a href="#" class="subscribe">Subscribe</a> <a href="#" class="replies">10 replies</a> <a href="#" class="share">Share</a></p>
        </div>
    </div>
</div>

<div class="large-12 columns margin-bottom-18">
    <div class="wide-tile white sml">
        <div class="avatar-holder">
            <a href="#"><img src="media/img/avatars/profileLge.jpg" alt="Example Avatar" class="avatar" /></a>
        </div>
        <div class="content">
            <p class="header"><span class="handle"><strong>Jason Taikato</strong> <span class="timestamp">2 hours ago</span></p>
            <h5>Help setting up a printer on the school network</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... <a href="#">Read more</a></p>
            <p class="functions"><a href="#" class="subscribe">Subscribe</a> <a href="#" class="replies">10 replies</a> <a href="#" class="share">Share</a></p>
        </div>
    </div>
</div>

<div class="large-12 columns margin-bottom-18">
    <div class="wide-tile white sml">
        <div class="avatar-holder">
            <a href="#"><img src="media/img/avatars/example-3.jpg" alt="Example Avatar" class="avatar" /></a>
        </div>
        <div class="content">
            <p class="header"><span class="handle"><strong>Frank Jones</strong> <span class="timestamp">2 hours ago</span></p>
            <h5>Help setting up a printer on the school network</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... <a href="#">Read more</a></p>
            <p class="functions"><a href="#" class="subscribe">Subscribe</a> <a href="#" class="replies">10 replies</a> <a href="#" class="share">Share</a></p>
        </div>
    </div>
</div>

<div class="large-12 columns margin-bottom-18">
    <div class="wide-tile white sml">
        <div class="avatar-holder">
            <a href="#"><img src="media/img/avatars/example-4.jpg" alt="Example Avatar" class="avatar" /></a>
        </div>
        <div class="content">
            <p class="header"><span class="handle"><strong>Mike Thomas</strong> <span class="timestamp">2 hours ago</span></p>
            <h5>Help setting up a printer on the school network</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... <a href="#">Read more</a></p>
            <p class="functions"><a href="#" class="subscribe">Subscribe</a> <a href="#" class="replies">10 replies</a> <a href="#" class="share">Share</a></p>
        </div>
    </div>
</div>
<?php
}
?>