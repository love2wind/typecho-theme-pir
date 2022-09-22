<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>



<footer id="footer" class="gray text-center footer-1">
    <div class="container">
        <p class="footer-logo">
            <img class="retina" src="<?php $this->options->themeUrl('img/logo.png'); ?>" alt="" />
        </p>
        <div class="sub-title"><?php $this->options->description() ?></div>
        <div class="copyright">
            &copy; <?php echo date("Y"); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>. <a href="https://beian.miit.gov.cn/"><?php $this->options->icp(); ?></a>
        </div>
        <div class="copyright-sub-title text-uppercase">
            <span>Powered by <a href="http://www.typecho.org/" rel="nofollow" target="_blank">Typecho</a> | Theme by <a href="https://github.com/fordes123/typecho-theme-pic-r" target="_blank">Pir</a> </span>
        </div>
    </div>
</footer>
</div>

<style>
    .page-load-status {
        display: none;
        text-align: center;
    }

    .loader-ellips {
        font-size: 20px;
        width: auto;
        position: initial;
    }

    
</style>

<!-- inject:js -->
<script src="//lf6-cdn-tos.bytecdntp.com/cdn/expire-1-M/jquery/2.2.3/jquery.min.js" type="application/javascript"></script>
<script src="//lf6-cdn-tos.bytecdntp.com/cdn/expire-1-M/twitter-bootstrap/3.4.0/js/bootstrap.min.js" type="application/javascript"></script>
<script src="//lf3-cdn-tos.bytecdntp.com/cdn/expire-1-M/validator/7.2.0/validator.min.js" type="application/javascript"></script>
<script src="//lf9-cdn-tos.bytecdntp.com/cdn/expire-1-M/jquery-countto/1.2.0/jquery.countTo.min.js" type="application/javascript"></script>
<script src="//lf6-cdn-tos.bytecdntp.com/cdn/expire-1-M/fancybox/3.5.7/jquery.fancybox.min.js" type="application/javascript"></script>
<script src="//lf26-cdn-tos.bytecdntp.com/cdn/expire-1-M/flexslider/2.7.2/jquery.flexslider-min.js" type="application/javascript"></script>
<script src="//lf9-cdn-tos.bytecdntp.com/cdn/expire-1-M/jquery.isotope/3.0.6/isotope.pkgd.min.js" type="application/javascript"></script>
<script src="//lf26-cdn-tos.bytecdntp.com/cdn/expire-1-M/jquery.sticky/1.0.4/jquery.sticky.min.js" type="application/javascript"></script>

<script src="//lf3-cdn-tos.bytecdntp.com/cdn/expire-1-M/jquery.imagesloaded/5.0.0/imagesloaded.pkgd.min.js" type="application/javascript"></script>
<script src="<?php $this->options->themeUrl('js/menuzord.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/scripts.js'); ?>"></script>
 <script src="<?php $this->options->themeUrl('js/smooth.js'); ?>"></script>

<?php if (!($this->is('post') || $this->is('page'))) : ?>
    <script src="//lf26-cdn-tos.bytecdntp.com/cdn/expire-1-M/jquery-infinitescroll/4.0.1/infinite-scroll.pkgd.min.js"></script>

    <script>
        $(window).on("load", function() {
            $("body").imagesLoaded(function() {
                $("#loading").fadeOut();
                $("#tb-preloader").delay(200).fadeOut("slow").remove();
            });
        });

        //无限滚动
        $('.portfolio').infiniteScroll({
            path: '.next',
            append: '.portfolio-item',
            hideNav: '.ajaxloadpost',
            status: '.page-load-status',
            history: false,
            scrollThreshold: 100
        });

        var masonry, isotope;

        //图片加载
        $('.portfolio').imagesLoaded(function() {
            // images have loaded
            // console.log('图片已经加载');
            masonry = new Masonry('.portfolio', {
                itemSelector: '.portfolio-item',
                columnWidth: 200
            });
            isotope = new Isotope('.portfolio', {
                filter: '*'
            });
        });

        //懒加载生效
        $('.portfolio').on('append.infiniteScroll', function(event, body, path, items, response) {
            // console.log('懒加载生效~')
            $('.portfolio').imagesLoaded(function() {
                masonry = new Masonry('.portfolio', {
                    itemSelector: '.portfolio-item',
                    columnWidth: 200
                });
                isotope = new Isotope('.portfolio', {
                    filter: '*'
                });
            });
        });
    </script>
<?php endif; ?>
</body>

</html>