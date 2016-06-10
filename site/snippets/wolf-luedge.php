<?php if ($p->hasChapters()): ?>
  <?php foreach ($p->chapters()->toStructure() as $c): ?>
    <p>
      <?= $c->start_date()->html() ?> – <?= $c->end_date()->html() ?>
      <h3><?= $c->company()->html() ?></h3>
      <h4><?= $c->position()->html() ?></h4>
      <?= $c->company()->html() ?>
      <?= $c->text()->kirbytext() ?>
    </p>
  <?php endforeach ?>
<?php endif ?>
