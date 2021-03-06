<?php snippet('header') ?>
  <main class="main" role="main">
    <?php
      $i = 0;
    ?>
    <?php $onePagerPages = $site->children()->visible(); ?>
    <?php if ($onePagerPages): ?>
      <?php foreach ($onePagerPages as $p): ?>
        <div>
          <a id="<?= $p->uid() ?>" class="anchor"></a>
          <?php if ($i != 0): ?>
            <div class="page-seperator">
              <div class="flex">
                <div class="flex-1"></div>
                <div class="flex-10">
                  <hr>
                </div>
                <div class="flex-1"></div>
              </div>
            </div>
          <?php else: ?>
            <?php $i++; ?>
          <?php endif ?>
          <?php snippet($p->intendedTemplate(), array('p' => $p)); ?>
        </div>
      <?php endforeach ?>
    <?php endif ?>
    <div class="page-seperator">
      <div class="flex">
        <div class="flex-1"></div>
        <div class="flex-10">
          <hr>
        </div>
        <div class="flex-1"></div>
      </div>
      <section>
        <div class="flex">
          <div class="flex-1"></div>
          <div class="flex-10">
            <a href="/impressum">Impressum & Datenschutzerklärung</a>
          </div>
          <div class="flex-1"></div>
        </div>
      </section>
    </div>
  </main>
<?php snippet('footer') ?>
