<?php snippet('header') ?>
  <div class="wrap content">
    
    <section id="main" role="main">
      <div class="page-title-wrapper">
        <h1 class="page-title"><?php echo $page->title()->html() ?></h1>
        <a class="button-outline" href="<?php echo url() . '/responsive-viewer' . '?uid=' . $page->uid() . '#900'?>" target="_blank"><i class="fa fa-desktop" aria-hidden="true"></i> open responsive viewer</a>
      </div>
      <p class="author">Authors: <?php echo $page->author()->html() ?></p>
      <p><?php echo $page->description()->kirbytext() ?></p>
      <div class="pattern-demo-wrapper spacer-top">
        <p class="pattern-demo-title">EXAMPLE</p>
        <iframe id="iFrame0" src="<?php echo url() . '/pattern-demo' . '?uid=' . $page->uid() ?>" frameborder="0" scrolling="no"></iframe>
        <div class="samplecode"><?php echo $page->samplecode()->kirbytext() ?></div>
      </div>
      <?php if($site->features()->bool()): ?>
        <div class="comments spacer-top">
          <?php snippet('comments') ?>
        </div>
      <?php endif ?>
    </section>

  </div><!-- /.wrap content -->

</div> <!-- /.container -->

<?php snippet('footer') ?>
