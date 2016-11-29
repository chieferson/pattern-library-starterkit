<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Pattern Demo - <?php echo $site->index()->findBy('uid', get('uid'))->title()->html() ?></title>

    <?php echo css('assets/css/ish.css') ?>

</head>

<body>

  <header class="sg-header" role="banner">
  	<div class="sg-controls" id="sg-controls">
  		<div class="sg-control-content">
  			<ul class="sg-control">
  				<li class="sg-size">
  					<div class="sg-current-size">
  						<form id="sg-form">
  							Size <input type="text" class="sg-input sg-size-px" value="320">px /
  							<input type="text" class="sg-input sg-size-em" value="20">em
  						</form><!--end #sg-form-->
  					</div><!--end #sg-current-size-->
  					<ul class="sg-acc-panel sg-size-options">
  						<li class="sg-quarter"><a href="#" id="sg-size-s">S</a></li>
  						<li class="sg-quarter"><a href="#" id="sg-size-m">M</a></li>
  						<li class="sg-quarter"><a href="#" id="sg-size-l">L</a></li>
  						<li class="sg-half"><a href="#" id="sg-size-full">Full</a></li>
  						<li class="sg-half"><a href="#" id="sg-size-random">Random</a></li>
  						<li class="sg-half"><a href="#" class="mode-link" id="sg-size-disco">Disco</a></li>
  						<li class="sg-half"><a href="#" class="mode-link" id="sg-size-hay">Hay!</a></li>
  					</ul>
  				</li>
  			</ul>
  		</div>
  	</div>
  </header>

  <!-- Iframe -->
  <div id="sg-vp-wrap">
  	<div id="sg-cover"></div>
  	<div id="sg-gen-container">
  		<iframe id="sg-viewport" src="<?php echo url() . '/pattern-demo' . '?uid=' . get('uid') ?>" sandbox="allow-same-origin allow-scripts allow-forms"></iframe>
  		<div id="sg-rightpull-container">
  			<div id="sg-rightpull"></div>
  		</div>
  	</div>
  </div>
  <!--end iFrame-->

  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

  <?php echo js('assets/js/init.js') ?>

</body>
</html>
