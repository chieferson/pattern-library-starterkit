<div>
  <?php $i = 0; foreach($parent->children()->visible() as $pattern): ?>
  <div class="spacer-bottom">
      <h3><a href="<?php echo $pattern->url() ?>"><?php echo $pattern->title()->html() ?></a></h3>
      <p><?php echo $pattern->overview()->kirbytext() ?></p>
      <div class="pattern-demo-wrapper">
        <iframe id="iFrame<?php echo $i ?>" src="<?php echo url() . '/pattern-demo' . '?uid=' . $pattern->uid() ?>" frameborder="0" scrolling="no"></iframe>
      </div>
  </div>
  <?php $i = $i + 1; endforeach ?>
</div>
