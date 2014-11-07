<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<div class="bg-wrapper" style="padding-top: 30px;">

    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="flexslider">
                    <ul class="slides">
                        <li><img src="/images/slide1.jpg" /></li>
                        <li><img src="/images/slide2.jpg" /></li>
                        <li><img src="/images/slide3.jpg" /></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="widget text-center">
                    <i class="fa fa-4x fa-home"></i>
                    <h2>Interior Design</h3>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed eum, excepturi pariatur perspiciatis porro nostrum molestiae assumenda voluptas possimus nisi.</p>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                </div>
            </div>
            <div class="span4">
                <div class="widget text-center">
                    <i class="fa fa-4x fa-institution"></i>
                    <h2>Construction</h3>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed eum, excepturi pariatur perspiciatis porro nostrum molestiae assumenda voluptas possimus nisi.</p>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                </div>
            </div>
            <div class="span4">
                <div class="widget text-center">
                    <i class="fa fa-4x fa-line-chart"></i>
                    <h2>Home Planner</h3>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed eum, excepturi pariatur perspiciatis porro nostrum molestiae assumenda voluptas possimus nisi.</p>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                </div></div>
        </div>
    </div>

    <div class="container">
        <hr>
    </div>

    <div class="container">
<!--        <div class="row">-->
<!--            <div class="span12 text-center">-->
<!--                <h2>Recent Projects</h2>-->
<!---->
<!--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui quo molestiae molestias at eaque, illo, tempore suscipit voluptatibus tempora maiores amet provident fuga expedita non doloribus, dolorem vel. Eaque possimus fugiat distinctio quos magnam hic soluta repellat officiis consectetur asperiores.</p>-->
<!---->
<!--                <a href="#" class="btn btn-success">Read More</a>-->
<!--                <a href="#" class="btn btn-danger">Read More</a>-->
<!---->
<!--                <hr>-->
<!--            </div>-->
<!--        </div>-->

        <div class="row">
            <div class="span3">
                <img src="/images/work-1.jpg" alt="">
            </div>
            <div class="span3">
                <img src="/images/work-2.jpg" alt="">
            </div>
            <div class="span3">
                <img src="/images/work-3.jpg" alt="">
            </div>
            <div class="span3">
                <img src="/images/work-4.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="container footer">
        <div class="row">
            <div class="span12 text-center">
                <hr>
                <ul class="inline">
                    <li><a href="<?php echo url_for('homepage') ?>">Home</a></li>
                    <li><a href="<?php echo url_for('gallery') ?>">Gallery</a></li>
                    <li><a href="<?php echo url_for('about') ?>">About Us</a></li>
                    <li><a href="<?php echo url_for('contact') ?>">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- End of BG Wrapper -->
</div>
