<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

        <!--page title start-->
        <section class="page-title">
            <div class="container">
                <h4 class="text-uppercase">PAGE NOT FOUND</h4>
            </div>
        </section>
        <!--page title end-->

        <!--body content start-->
        <section class="body-content ">

            <!--error-->
            <div class="page-content">
                <div class="container">
                    <div class="row page-content">
                        <div class="col-md-5 text-center">
                            <div class="error-avatar">
                                <img src="<?php $this->options->themeUrl('img/error-avatar.png'); ?>" alt="" />
                            </div>
                        </div>

                        <div class="col-md-7">
                            <div class="error-info">
                                <div class="error404">
                                    404
                                </div>
                                <div class="error-txt">
                                    好吧...
                                    <br/>页面被管理员吃了
                                </div>
                                <a href="<?php $this->options ->siteUrl(); ?>" class="btn btn-medium  btn-theme-color "> 带我回家</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--error-->


        </section>
        <!--body content end-->


<!--footer start-->
        <footer id="footer" class="gray text-center footer-1">
            <div class="container">
                <p class="footer-logo">
                    <img class="retina" src="<?php $this->options->themeUrl('img/logo.png'); ?>" alt="" />
                </p>
                <div class="sub-title"><?php $this->options->description() ?></div>
                <div class="copyright">
                    &copy; <?php echo date("Y"); ?>  <a href="<?php $this->options ->siteUrl(); ?>" ><?php $this->options->title();?></a>.
                </div>
                <div class="copyright-sub-title text-uppercase">
                    <span>Powered by <a href="http://www.typecho.org/" target="_blank">Typecho</a> | Theme by <a href="http://themebucket.net/" target="_blank" rel="nofollow">ThemeBucket</a> </span>
                </div>
            </div>
        </footer>
        <!--footer end-->

    </div>


    <!-- inject:js -->
	<script src="https://cdn.bootcss.com/jquery/2.2.3/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdn.bootcss.com/validator/7.2.0/validator.min.js"></script>
	<script src="https://cdn.bootcss.com/jquery-countto/1.2.0/jquery.countTo.min.js"></script>
	<script src="https://cdn.bootcss.com/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
	<script src="https://cdn.bootcss.com/flexslider/2.6.3/jquery.flexslider-min.js"></script>
	<script src="https://cdn.bootcss.com/jquery.isotope/3.0.4/isotope.pkgd.min.js"></script>
	<script src="https://cdn.bootcss.com/jquery.sticky/1.0.4/jquery.sticky.min.js"></script>
	<script src="<?php $this->options->themeUrl('js/imagesloaded.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('js/menuzord.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('js/smooth.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('js/scripts.js'); ?>"></script>
	<!-- endinject -->
</body>

</html>