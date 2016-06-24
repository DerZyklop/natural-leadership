<?php if ($p->hasStartimage()): ?>
  <?php $image = $p->images()->find($p->startimage()); ?>
  <figure>
    <?= $image ?>
    <?php if ($image->hasCaption()): ?>
      <figcaption><?= $image->caption() ?></figcaption>
    <?php endif ?>
  </figure>
<?php endif ?>
<h2 id="<?= $p->uid() ?>"><?php echo $p->title()->html() ?></h2>
<?php if ($p->hasText()) : ?>
  <div class="text">
    <?php echo $p->text()->kirbytext() ?>
    <?php if ($p->hasTextimage()): ?>
      <?php $image = $p->images()->find($p->textimage()); ?>
      <figure>
        <?= $image ?>
        <?php if ($image->hasCaption()): ?>
          <figcaption><?= $image->caption() ?></figcaption>
        <?php endif ?>
      </figure>
    <?php endif ?>
  </div>
<?php endif ?>
<?php if ($p->hasSubtext()): ?>
  <div class="text">
    <?php echo $p->subtext()->kirbytext() ?>
  </div>
<?php endif ?>
