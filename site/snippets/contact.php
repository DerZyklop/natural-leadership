<h2 id="<?= $p->uid() ?>"><?php echo $p->title()->html() ?></h2>
<?php if ($p->hasImages()): ?>
  <figure>
    <?= $p->images()->first() ?>
    <?php if ($p->images()->first()->hasCaption()): ?>
      <figcaption><?= $p->images()->first()->caption() ?></figcaption>
    <?php endif ?>
  </figure>
<?php endif ?>
<?php if ($p->hasText()) : ?>
  <div class="text">
    <?= $p->text()->kirbytext() ?>
  </div>
<?php endif ?>
<?php if ($p->hasCompany()) : ?>
  <p><?= $p->company()->html() ?></p>
<?php endif ?>
<?php if ($p->hasPlz()) : ?>
  <p><?= $p->plz()->html() ?></p>
<?php endif ?>
<?php if ($p->hasCity()) : ?>
  <p><?= $p->city()->html() ?></p>
<?php endif ?>
<?php if ($p->hasStreet()) : ?>
  <p><?= $p->street()->html() ?></p>
<?php endif ?>
<?php if ($p->hasHousenumber()) : ?>
  <p><?= $p->housenumber()->html() ?></p>
<?php endif ?>
<?php if ($p->hasCountry()) : ?>
  <p><?= $p->country()->html() ?></p>
<?php endif ?>
<?php if ($p->hasEmail()) : ?>
  <p><?= $p->email()->html() ?></p>
<?php endif ?>
<?php if ($p->hasPhone()) : ?>
  <p><?= $p->phone()->html() ?></p>
<?php endif ?>
<?php if ($p->hasMobilephone()) : ?>
  <p><?= $p->mobilephone()->html() ?></p>
<?php endif ?>
