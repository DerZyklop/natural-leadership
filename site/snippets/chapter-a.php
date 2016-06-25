<div class="flex">
  <div class="flex-1"></div>
  <div class="flex-4">
    <?php if ($c->hasTextimage()): ?>
      <?php $image = $p->images()->find($c->textimage()) ?>
      <?php if ($image): ?>
        <figure>
          <?= $image ?>
          <?php if ($image->hasCaption()): ?>
            <figcaption><?= $image->caption() ?></figcaption>
          <?php endif ?>
        </figure>
      <?php endif ?>
    <?php endif ?>
  </div>
  <div class="flex-1"></div>
  <div class="flex-6">
    <h4><?= $c->title()->html() ?></h4>
    <?= $c->text()->kirbytext() ?>
  </div>
</div>
