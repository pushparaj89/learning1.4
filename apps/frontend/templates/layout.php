<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
      <link rel="stylesheet" href="/bower_components/flexslider/flexslider.css">
      <link rel="stylesheet" href="/bower_components/fontawesome/css/font-awesome.css">
    <?php include_javascripts() ?>
      <script src="/bower_components/jquery/dist/jquery.js"></script>
      <script src="/bower_components/flexslider/jquery.flexslider.js"></script>
      <script src="/bower_components/jquery/dist/jquery.validate.js"></script>
      <script>
          $(document).ready(function(){

          });

          $(window).load(function() {
              $('.flexslider').flexslider({
                  animation: "slide"
              });
          });
      </script>
  </head>
  <body>
  <div class="bg-wrapper">
      <!-- Start of BG Wrapper -->

      <div class="container header">
          <div class="row">

              <div class="span6">
                  <a href="#" class="logo">
                      <img src="/images/logo.png" alt="">
                  </a>
              </div>
              <div class="span6">
                  <ul class="inline text-right navigation">
                      <li class="<?php echo sfContext::getInstance()->getRouting()->getCurrentRouteName() == 'homepage'?'active':''?>"><a href="<?php echo url_for('homepage') ?>">Home</a></li>
                      <li class="<?php echo sfContext::getInstance()->getRouting()->getCurrentRouteName() == 'gallery'?'active':''?>"><a href="<?php echo url_for('gallery') ?>">Photos</a></li>
                      <li class="<?php echo sfContext::getInstance()->getRouting()->getCurrentRouteName() == 'about'?'active':''?>"><a href="<?php echo url_for('about') ?>">About</a></li>
                      <li class="<?php echo sfContext::getInstance()->getRouting()->getCurrentRouteName() == 'contact'?'active':''?>"><a href="<?php echo url_for('contact') ?>">Contact</a></li>
                  </ul>
              </div>

              <hr>

          </div>
      </div>

  </div>
    <?php echo $sf_content ?>

  </body>
  <div class="container footer">
      <div class="row">
          <div class="span12 text-center">
              <hr>
              <ul class="inline">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Portfolio</a></li>
                  <li><a href="#">Contact</a></li>
              </ul>
          </div>
      </div>
  </div>

</html>
