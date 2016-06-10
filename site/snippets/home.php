<?php if ($p->hasImages()): ?>
  <figure>
    <?= $p->images()->first() ?>
    <?php if ($p->images()->first()->hasCaption()): ?>
      <figcaption><?= $p->images()->first()->caption() ?></figcaption>
    <?php endif ?>
  </figure>
<?php endif ?>
<h2 id="<?= $p->uid() ?>"><?php echo $p->title()->html() ?></h2>
<?php if ($p->hasText()) : ?>
  <div class="text">
    <?php echo $p->text()->kirbytext() ?>
  </div>
<?php endif ?>
