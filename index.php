<?php

/**
 * typecho图片主题，原作者不明，这是一个修改版 @fordes
 * 
 * @package pir
 * @author fordes
 * @version 1.1
 * @link https://github.com/fordes123/typecho-theme-pir
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php'); ?>



<!--body content start-->
<section class="content">
    <div class="container">
        <div class="row ">
            <div class="portfolio portfolio-with-title portfolio-masonry blog-m col-4 gutter ">
                <?php if ($this->have()) : ?>
                    <?php while ($this->next()) : ?>
                        <div class="portfolio-item">
                            <div class="thumb">
                                <img class="img-item" data-fancybox="gallery" data-src="<?php echo $this->fields->original ?>" src="<?php echo $this->fields->cover; ?>" alt=""></img>
                                <div class="widget-tags">
                                    <?php if (count($this->tags) == 0) {
                                        $this->category(' ', true, '');
                                    } else {
                                        $this->tags(' ', true, '');
                                    } ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="text-center">
            <div class="page-load-status">
                <div class="loader-ellips tb-preloader-wave infinite-scroll-request"></div>
                <p class="infinite-scroll-last">到底啦～</p>
                <p class="infinite-scroll-error">加载错误</p>
            </div>
        </div>
    </div>
    <div class="ajaxloadpost" style="display:none">
        <?php $this->pageLink('下一页', 'next'); ?>
    </div>
</section>
<!--body content end-->

<?php $this->need('footer.php'); ?>