<?php snippet('header') ?>
  <main class="main" role="main">
    <?php
      $i = 0;
    ?>
    <?php $onePagerPages = $site->children()->visible(); ?>
    <?php if ($onePagerPages): ?>
      <?php foreach ($onePagerPages as $p): ?>
        <div id="<?= $p->uid() ?>">
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
  </main>

<?php snippet('footer') ?>
