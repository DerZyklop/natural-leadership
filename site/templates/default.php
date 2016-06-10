<?php snippet('header') ?>

  <main class="main" role="main">
    <?php foreach ($site->children()->visible() as $p): ?>
      <section>
        <?php snippet($p->intendedTemplate(), array('p' => $p)); ?>
      </section>
    <?php endforeach ?>
  </main>

<?php snippet('footer') ?>
