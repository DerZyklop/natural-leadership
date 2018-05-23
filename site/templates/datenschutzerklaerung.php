<?php snippet('header') ?>

  <main class="main" role="main">
    <?php $p = $page; ?>
    <section>
      <section>
        <div class="flex">
          <div class="flex-1"></div>
          <div class="flex-10">
            <div class="text">
              <h2 id="<?= $p->uid() ?>"><?php echo $p->title()->html() ?></h2>
            </div>
          </div>
          <div class="flex-1"></div>
        </div>
      </section>
      <?php if ($p->hasImages()): ?>
        <figure>
          <?= $p->images()->first() ?>
          <?php if ($p->images()->first()->hasCaption()): ?>
            <figcaption><?= $p->images()->first()->caption() ?></figcaption>
          <?php endif ?>
        </figure>
      <?php endif ?>
      <?php if ($p->hasText()) : ?>
        <div class="flex">
          <div class="flex-1"></div>
          <div class="flex-10">
            <div class="text">
              <?php echo $p->text()->kirbytext() ?>
            </div>
          </div>
          <div class="flex-1"></div>
        </div>
      <?php endif ?>

    </section>
  </main>

<?php snippet('footer') ?>
