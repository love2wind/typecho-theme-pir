<?php
/**
 * The main template file
 * 
 * @package massive
 * @author massive
 * @version 1.0
 * @link https://www.xingkb.com
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');?>

		<!--page title start-->
        <section class="page-title">
            <div class="container">
                <h4 class="text-uppercase"><?php $this->archiveTitle(array(
				'category'  =>  _t('Category : %s'),
		        'search'    =>  _t('Search : %s'),
		        'tag'       =>  _t('Tag : %s'),
		        'author'    =>  _t('Author : %s'),
		        'date'      =>  _t('Date : %s')
		    ), '', ''); ?></h4>
            </div>
        </section>
        <!--page title end-->

        <!--body content start-->
        <section class="body-content">
            <div class="container">
                <div class="row ">
                    <div class="portfolio portfolio-with-title portfolio-masonry blog-m col-4 gutter ">
                        <?php if($this->have()):?>
						<?php while($this->next()): ?>

                        <div class="portfolio-item">
                            <div class="thumb" >
                                <img class="img-item" data-fancybox="gallery" data-src="<?php echo $this->fields->original?>" src="<?php echo $this->fields->cover;?>" alt=""></img>
                                <div class="widget-tags">
                                    <?php if(  count($this->tags) == 0 ): ?>
                                    <?php $this->category(' ', true, ''); ?>
                                    <?php else: ?>
                                    <?php $this->tags(' ', true, ''); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            
                            
                        </div>
     
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