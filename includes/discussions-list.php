<ul>
    <li>
        <div class="avatar-holder"><a href="#"><img class="circle" src="media/img/avatars/example-1.jpg" alt="Example Image" /></a></div>
        <div class="holder">
            <h6><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam posuere lacus dapibus lacus cursus, sit amet euismod odio suscipit</a></h6>
            <p class="cite">about 14 hours ago by <a href="#">John Smith</a></p>
        </div>
    </li>
    <li>
        <div class="avatar-holder">
            <?php
            if (file_exists("media/img/avatars/jason.jpg"))
            {?>
                <a href="public-profile.php"><img src="media/img/avatars/jason.jpg" class="circle" alt="Jason Taikato" /></a>
            <?php
            }
            else
            {?>
                <a href="public-profile.php" class="avatar green small">JT</a>
            <?php
            }
            ?>

        </div>
        <div class="holder">
            <h6><a href="#">Re: Help connecting to the network server </a></h6>
            <p class="cite">about 14 hours ago by <a href="#">Jason Taikato</a></p>
        </div>
    </li>
    <li>
        <div class="avatar-holder"><a href="#"><img class="circle" src="media/img/avatars/example-3.jpg" alt="Example Image" /></a></div>
        <div class="holder">
            <h6><a href="#">How to design for mobile</a></h6>
            <p class="cite">about 14 hours ago by <a href="#">Fred Jones</a></p>
        </div>
    </li>
    <li>
        <div class="avatar-holder"><a href="public-profile-ab.php" class="avatar blue small">AB</a></div>
        <div class="holder">
            <h6><a href="#">Whiteboard in the classroom</a></h6>
            <p class="cite">about 14 hours ago by <a href="#">Antonio Banderas</a></p>
        </div>
    </li>
    <li>
        <div class="avatar-holder"><a href="public-profile-sh.php" class="avatar orange small">SH</a></div>
        <div class="holder">
            <h6><a href="#">Thoughts on online communities</a></h6>
            <p class="cite">about 14 hours ago by <a href="#">Selma Hayek</a></p>
        </div>
    </li>
</ul>