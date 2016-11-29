<?php snippet('header') ?>
  <div class="wrap content">
    <h1><?php echo $site->title()->html() ?></h1>
    <section id="main" role="main">
      <?php echo $page->text()->kirbytext() ?>
    </section>

  </div><!-- /.wrap content -->

</div> <!-- /.container -->

<?php snippet('footer') ?>
