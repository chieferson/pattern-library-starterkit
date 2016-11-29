<?php snippet('pattern-demo-header') ?>

  <?php
  $mypage = $site->index()->findBy('uid', get('uid'));
  echo $mypage->htmldemo()->html();
  ?>

<?php snippet('pattern-demo-footer') ?>
