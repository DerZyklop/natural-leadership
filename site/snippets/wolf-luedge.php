<?php snippet("default", array('p' => $p, )); ?>
<?php if ($p->hasChapters()): ?>
  <?php foreach ($p->chapters()->toStructure() as $c): ?>
    <div class="chapter">
      <?= $c->start_date()->html() ?> – <?= $c->end_date()->html() ?>
      <h3><?= $c->company()->html() ?></h3>
      <h4><?= $c->position()->html() ?></h4>
      <?= $c->company()->html() ?>
      <p>
        <?= $c->text()->kirbytext() ?>
      </p>
    </div>
  <?php endforeach ?>
<?php endif ?>
