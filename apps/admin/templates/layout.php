<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>

</head>
<body>
<div class="topnav">
    <center>
        <div id="topnav_content">
            <?php if($sf_user->isAuthenticated()): ?>
                <div class="left_options">VKM Constructions</div>
                <div class="right_options"><?php echo link_to('Sign out', 'sf_guard_signout') ?></div>
                <div class="right_options"><a href="<?php echo url_for('@user_details') ?>" >User List | </a></div>
                <!--<div class="right_options"><a href="" >Your Knowledge Users List | </a></div>-->
            <?php endif; ?>
        </div>
    </center>
</div>
<center>
    <div class="content">
        <br/>
        <br/>
        <?php echo $sf_content ?>
    </div>
</center>
</body>
</html>
