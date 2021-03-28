<?php
/**
 * pic•R - @国服第一盖伦的pic主题魔改
 * 
 * @package pic-r
 * @author fordes
 * @version 1.0
 * @link https://github.com/fordes123/typecho-theme-pic-r
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');?>


		
        <!--body content start-->
        <section class="body-content">
            <div class="container">
                <div class="row ">
                    <div class="portfolio portfolio-with-title portfolio-masonry blog-m col-4 gutter ">
                        <?php if($this->have()):?>
						<?php while($this->next()): ?>
						<?php foreach(getPostImg($this) as $item){?>
                        <div class="portfolio-item">
                            <div class="thumb" >
                                <img class="img-item" data-fancybox="gallery" data-src="<?php echo $item?>" src="<?php echo $item?>" alt=""></img>
                                <div class="widget-tags">
                                    <?php if(  count($this->tags) == 0 ): ?>
                                    <?php $this->category(' ', true, ''); ?>
                                    <?php else: ?>
                                    <?php $this->tags(' ', true, ''); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php } ?>       
						<?php endwhile; ?>
						<?php endif; ?>
                    </div>

                </div>
            </div>

			<div class="col-md-12">
                <!--pagination-->
                <div class="text-center">
					<?php $this->pageNav('Prev', 'Next', 1, '<a>...</a>', array('wrapTag' => 'ul', 'wrapClass' => 'pagination custom-pagination', 'itemTag' => 'li', 'textTag' => '', 'currentClass' => 'active', 'prevClass' => 'prev', 'nextClass' => 'next')); ?>
                </div>
                <!--pagination-->
            </div>
        </section>
        <!--body content end-->

<?php $this->need('footer.php'); ?>