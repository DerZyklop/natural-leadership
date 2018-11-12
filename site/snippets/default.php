<div class="page-seperator">
  <section class="flex">
    <div class="flex-1"></div>
    <div class="flex-10">
      <h3><?php echo $p->title()->html() ?></h3>
    </div>
    <div class="flex-1"></div>
    <div class="flex-1"></div>
    <?php if ($p->hasImages()): ?>
      <div class="flex-6">
        <?php if ($p->hasText()) : ?>
          <?php echo $p->text()->kirbytext() ?>
        <?php endif ?>
      </div>
      <div class="flex-1"></div>
      <div class="flex-4">
        <figure>
          <?= $p->images()->first() ?>
          <?php if ($p->images()->first()->hasCaption()): ?>
            <figcaption><?= $p->images()->first()->caption() ?></figcaption>
          <?php endif ?>
        </figure>
      </div>
    <?php else: ?>
      <div class="flex-10">
        <?php if ($p->hasText()) : ?>
          <?php echo $p->text()->kirbytext() ?>
        <?php endif ?>
      </div>
      <div class="flex-1"></div>
    <?php endif ?>
  </section>
</div>
