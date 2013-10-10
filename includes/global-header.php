<section id="global-header" class="global-header">
    <div class="row">
        <div class="large-12 columns">
            <a href="#" id="btnSideNav" class="menu-icon"></a>
            <div class="NSWlogo"><a href="http://www.dec.nsw.gov.au/" target="_blank" title="Link to NSW Department of Education and Communities - Opens in new tab/window">NSW Department of Education and Communities</a></div>
            <div class="rightside">
                <!--NB: Remove 'alert' class to show normal notification icon. Remove the 'badge' span too-->
                <a href="#" class="notification circle alert" data-dropdown="notification"><span class="badge">99+</span></a>
                <ul id="notification" class="f-dropdown" data-dropdown-content>
                    <li class="title"><a href="my-profile.php#notifications">Notifications</a></li>
                    <li class="unread"><a href="#">You need to approve an action</a><br /><span class="time">3 hours ago</span></li>
                    <li class="unread"><a href="#">3 comments to moderate in</a> <a href="#" class="underline">How to connect to network</a><br /><span class="time">5 hours ago</span></li>
                    <li class="read"><a href="#" class="underline">Photoshop CC</a> requires a license<br /><span class="time">Yesterday</span></li>
                    <li class="read"><a href="#" class="underline">Windows 8</a> requires a license<br /><span class="time">Yesterday</span></li>
                    <li class="read"><a href="#" class="underline">Windows 8</a> requires a license<br /><span class="time">Yesterday</span></li>
                    <li class="see-all"><a href="my-profile.php#notifications">See all</a></li>
                </ul>
                <!--NB: Remove the 'badge' span if no alerts for this user-->
                <a href="#" class="profile circle" data-dropdown="profile-drop">
                    <?php
                    if (file_exists("media/img/avatars/jason.jpg"))
                    {?>
                    <img src="media/img/avatars/jason.jpg" class="avatar-small" />
                    <?php
                    }
                    else{
                    ?>
                    <div class="avatar-small green">JT</div>
                    <?php
                    }
                    ?>
                    <span class="badge">5</span>
                </a>
                <ul id="profile-drop" class="f-dropdown" data-dropdown-content>

                    <li class="drop-logout"><a href="#">Logout</a></li>
                    <li class="my-profile"><a href="my-profile.php">My Profile</a></li>
                    <li class="title"><a href="my-subscriptions.php#subscriptions">Subscriptions</a></li>
                    <li class="unread"><a href="#">2 new comments</a> on <a href="#">New learning techniques and practices</a><br /><span class="time">3 hours ago</span></li>
                    <li class="unread">The application <a href="#">Photoshop CC</a> requires a licence before you can download it.</a><br /><span class="time">5 hours ago</span></li>
                    <li class="read"><a href="#" class="underline">Photoshop CC</a> requires a license<br /><span class="time">Yesterday</span></li>
                    <li class="read"><a href="#" class="underline">Windows 8</a> requires a license<br /><span class="time">Yesterday</span></li>
                    <li class="read"><a href="#" class="underline">Windows 8</a> requires a license<br /><span class="time">Yesterday</span></li>
                    <li class="see-all"><a href="my-subscriptions.php#subscriptions">See all</a></li>
                </ul>
                <span class="name">Jason Taikato</span>
                <a href="#" class="logout">Logout</a>
            </div>
        </div>
    </div>
</section>