<?php snippet('header') ?>
  <div class="wrap content">

    <section id="main" role="main">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->description()->kirbytext() ?>
      <?php snippet('overview-preview', array('parent' => $page)) ?>
    </section>

  </div><!-- /.wrap content -->

</div> <!-- /.container -->

<?php snippet('footer') ?>
