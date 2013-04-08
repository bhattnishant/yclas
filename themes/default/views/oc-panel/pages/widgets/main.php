<?php defined('SYSPATH') or die('No direct script access.');?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="<?=substr(core::config('i18n.locale'),0,2)?>"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="<?=substr(core::config('i18n.locale'),0,2)?>"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="<?=substr(core::config('i18n.locale'),0,2)?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?=substr(core::config('i18n.locale'),0,2)?>"> <!--<![endif]-->
<head>
	<meta charset="<?=Kohana::$charset?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?=$title?></title>
    <meta name="keywords" content="<?=$meta_keywords?>" >
    <meta name="description" content="<?=$meta_description?>" >
    <meta name="copyright" content="<?=$meta_copywrite?>" >
	<meta name="author" content="open-classifieds.com">
	<meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <?=HTML::script('http://html5shim.googlecode.com/svn/trunk/html5.js')?>
    <![endif]-->
    
    <?=View::styles($styles)?>	
	<?=View::scripts($scripts)?>

	<style type="text/css">
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }
        .sidebar-nav {
            padding: 9px 0;
        }
        body.dragging, body.dragging * {
          cursor: move !important;
        }
        .dragged {
            position: absolute;
            opacity: 0.5;
            z-index: 2000;
        }
    </style>

  </head>

  <body>
	<?=$header?>
    <div class="container">
	    <div class="row">
	    	
	    	<div class="span12">
	    		<?=Breadcrumbs::render('oc-panel/breadcrumbs')?>
	    		<?=Alert::show()?>
	    	</div><!--/span--> 

	    	<div class="span8">
                <h2><?=__('Available widgets')?></h2>
				<div class="row-fluid">
					<?foreach ($widgets as $widget):?>
						<?=$widget->form()?>
					<?endforeach?>
				</div><!--/row-->


	    	</div><!--/span--> 
	    	
	    	<!--placeholders-->
	    	<div class="span4">
				<?foreach ($placeholders as $placeholder=>$widgets):?>
				<div class="well sidebar-nav">
                <p class="nav-header"><?=$placeholder?></p>
					<ul class="nav nav-list placeholder">
                        <?foreach ($widgets as $widget):?>
                          <?=$widget->form()?>
                        <?endforeach?>
					</ul>
				</div>
				<?endforeach?>
			</div>
			<!--placeholders-->

		</div><!--/row-->


		<?=$footer?>
    </div><!--/.fluid-container-->

	<?=View::scripts($scripts,'footer')?>

	<!--[if lt IE 7 ]>
		<?=HTML::script('http://ajax.googleapis.com/ajax/libs/chrome-frame/1.0.2/CFInstall.min.js')?>
		<script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script>
	<![endif]-->
  <?=(Kohana::$environment === Kohana::DEVELOPMENT)? View::factory('profiler'):''?>
  </body>
</html>