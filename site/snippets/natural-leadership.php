<section id="<?= $p->uid() ?>">
  <div class="flex">
    <div class="flex-4">
      <?php if ($p->hasTextimage()): ?>
        <?php $image = $p->images()->find($p->textimage()) ?>
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
    <div class="flex-7">
      <h2><?php echo $p->title()->html() ?></h2>
      <?php if ($p->hasText()) : ?>
        <div class="text">
          <?php echo $p->text()->kirbytext() ?>
        </div>
      <?php endif ?>
    </div>
    <div class="flex-1"></div>
  </div>
</section>
<?php $i = 0; ?>
<?php if ($p->hasChapters()): ?>
  <?php foreach ($p->chapters()->toStructure() as $c): ?>
    <section>
      <?php if ($i%2): ?>
        <?php snippet("chapter-a", array('c' => $c, 'p' => $p)); ?>
      <?php else : ?>
        <?php snippet("chapter-b", array('c' => $c, 'p' => $p)); ?>
      <?php endif ?>
      <?php $i++; ?>
    </section>
  <?php endforeach ?>
<?php endif ?>
