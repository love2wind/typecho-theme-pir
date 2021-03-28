<?php if(!defined( '__TYPECHO_ROOT_DIR__'))exit;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <!--favicon icon-->
    <link rel="icon" type="image/png" href="<?php $this->options->themeUrl(); ?>img/favicon.png">
    <title><?php $this->archiveTitle(array('category'=>_t(' %s '),'search'=>_t(' %s '),'tag'=>_t(' %s '),'author'=>_t(' %s ')),'',' - ');?> <?php $this->options->title();?></title>
    <!--common style-->
    <link href='//fonts.cat.net/css?family=Abel|Source+Sans+Pro:400,300,300italic,400italic,600,600italic,700,700italic,900,900italic,200italic,200' rel='stylesheet' type='text/css'>

    <!-- inject:css -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"/>
    <link rel="stylesheet" href="<?php $this->options->themeUrl(); ?>css/shortcodes.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl(); ?>css/style.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl(); ?>css/default-theme.css">
    <!-- end inject -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!--  preloader start -->
    <div id="tb-preloader">
        <div class="tb-preloader-wave"></div>
    </div>
    <!-- preloader end -->


    <div class="wrapper">

        <!--header start-->
        <header class="l-header">

            <div class="l-navbar l-navbar_t-light l-navbar_expand js-navbar-sticky">
                <div class="container-fluid">
                    <nav class="menuzord js-primary-navigation" role="navigation" aria-label="Primary Navigation">

                        <!--logo start-->
                        <a href="<?php $this->options ->siteUrl(); ?>" class="logo-brand">
<?php $this->options->title() ?>
                            
                        </a>
                        <!--logo end-->

                        <!--mega menu start-->
                        <ul class="menuzord-menu menuzord-right c-nav_s-standard">
                            <li><a href="<?php $this->options ->siteUrl(); ?>"><span class="fa fa-home"> 首页</span></a></li>




							
							<li><a href="javascript:void(0)"><span class="fa fa-th"> 
 分类</span></a>
								<ul class="dropdown">
                                    <?php $this->widget('Widget_Metas_Category_List')->to($cats); ?>
									<?php while ($cats->next()): ?><li><a href="<?php $cats->permalink()?>"><?php $cats->name()?></a></li><?php endwhile; ?>
                                </ul>
							</li>





							<li><a href="javascript:void(0)"><span class="fa fa-file"> 
 页面</span></a>
								<ul class="dropdown">
                                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
									<?php while($pages->next()): ?><li><a href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a></li><?php endwhile; ?>
                                </ul>
							</li>

							
							
							
							

                            <li>
                                <a href="javascript:void(0)"><i class="fa fa-search"></i> 搜索</a>
                                <div class="megamenu megamenu-quarter-width navbar-search">
                                    <form id="search" method="post" action="./" role="searchform">
                                        <input type="text" name="s" class="form-control" placeholder="在这里输入">
                                    </form>
                                </div>
                            </li>

                        </ul>
                        <!--mega menu end-->

                    </nav>
                </div>
            </div>

        </header>
        <!--header end-->

