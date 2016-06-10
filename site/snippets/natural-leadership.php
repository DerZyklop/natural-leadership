<?php if ($p->hasChapters()): ?>
  <?php foreach ($p->chapters()->toStructure() as $c): ?>
    <h3><?= $c->title()->html() ?></h3>
    <?php echo $c->text()->kirbytext() ?>
  <?php endforeach ?>
<?php endif ?>
