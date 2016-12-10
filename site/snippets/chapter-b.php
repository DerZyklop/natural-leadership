<div class="flex flex-center">
  <div class="flex-1"></div>
  <div class="flex-6">
    <h4 class="title"><span class="counter"><?= $i+1 ?></span><?= $c->title()->html() ?></h4>
    <div class="text"><?= $c->text()->kirbytext() ?></div>
  </div>
  <div class="flex-1"></div>
  <div class="flex-4">
    <?php if ($c->hasTextimage()): ?>
      <?php $image = $p->images()->find($c->textimage()) ?>
      <?php if ($image): ?>
        <figure>
          <?= $image ?>
          <?php if ($image->hasCaption()): ?>
            <figcaption><?= $image->caption()->kirbytext() ?></figcaption>
          <?php endif ?>
        </figure>
      <?php endif ?>
    <?php endif ?>
  </div>
</div>
