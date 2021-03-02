
<nav class="nav-wrapper">
    <div class="container">
        <a href="#" class="brand-logo">Logo</a>
        <a href="" class="sidenav-trigger" data-target="mobile-menu">
            <i class="material-icons">menu</i>
        </a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="<?php echo URLROOT; ?>/pages/index">Home</a></li>
            <li><a href="<?php echo URLROOT; ?>/pages/about">About</a></li>
            <li><a href="<?php echo URLROOT; ?>/pages/projects">Projects</a></li>
            <li><a href="<?php echo URLROOT; ?>/posts/index">Blog</a></li>
            <li><a href="<?php echo URLROOT; ?>/pages/contact">Contact</a></li>
            <li>
                <?php if(isset($_SESSION['user_id'])) :?>
                    <a href="<?php echo URLROOT; ?>/users/logout" class="btn">Log out</a>
                <?php else :?>
                    <a href="<?php echo URLROOT; ?>/users/login" class="btn">Login</a>
                <?php endif;?>
            </li>
        </ul>
        <ul class="sidenav grey lighten-2" id="mobile-menu">
            <li><a href="<?php echo URLROOT; ?>/pages/index">Home</a></li>
            <li><a href="<?php echo URLROOT; ?>/pages/about">About</a></li>
            <li><a href="<?php echo URLROOT; ?>/pages/projects">Projects</a></li>
            <li><a href="<?php echo URLROOT; ?>/pages/blog">Blog</a></li>
            <li><a href="<?php echo URLROOT; ?>/pages/contact">Contact</a></li>
            <li><a href="<?php echo URLROOT; ?>/users/login" class="btn">Login</a></li>
        </ul>
    </div>
</nav>

