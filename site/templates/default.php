<?php snippet('header') ?>

  <main class="main" role="main">
    <?php
      $i = 0;
    ?>
    <?php foreach ($site->children()->visible() as $p): ?>
      <?php if ($i != 0): ?>
        <hr class="page-seperator">
      <?php else: ?>
        <?php $i++; ?>
      <?php endif ?>
      <?php snippet($p->intendedTemplate(), array('p' => $p)); ?>
    <?php endforeach ?>
  </main>

<?php snippet('footer') ?>
