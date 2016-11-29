<?php snippet('header') ?>
  <div class="wrap content">

    <section id="main" role="main" class="search">
      <h1><?php echo $page->title()->html() ?></h1>
      <p><?php echo $page->description()->kirbytext() ?></p>
      <form>
        <input type="search" name="q" value="<?php echo esc($query) ?>">
        <input type="submit" class="submit-button" value="Search">
      </form>

      <ul>
        <?php foreach($results as $result): ?>
        <li>
          <a href="<?php echo $result->url() ?>">
            <?php echo $result->title()->html() ?>
          </a>
        </li>
        <?php endforeach ?>
      </ul>
    </section>

  </div><!-- /.wrap content -->

</div> <!-- /.container -->

<?php snippet('footer') ?>
