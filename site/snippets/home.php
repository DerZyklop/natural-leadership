<?php if ($p->hasStartimage()): ?>
  <?php $image = $p->images()->find($p->startimage()); ?>
  <figure>
    <?= $image ?>
    <?php if ($image->hasCaption()): ?>
      <figcaption><?= $image->caption() ?></figcaption>
    <?php endif ?>
  </figure>
<?php endif ?>
<?php if ($p->hasQuote()): ?>
  <blockquote>
    „<?= $p->quote()->kirbytextRaw() ?>“
    <?php if ($p->hasQuoteauthor()): ?>
      <footer>– <?= $p->quoteauthor() ?></footer>
    <?php endif ?>
  </blockquote>
<?php endif ?>
<?php if ($p->hasHeadline()): ?>
  <h2 id="<?= $p->uid() ?>"><?= $p->headline()->html() ?></h2>
<?php endif ?>
<?php if ($p->hasText()) : ?>
  <div class="text">
    <?= $p->text()->kirbytext() ?>
    <?php if ($p->hasTextimage()): ?>
      <?php $image = $p->images()->find($p->textimage()); ?>
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
<?php endif ?>
<?php if ($p->hasSubtext()): ?>
  <div class="text">
    <?= $p->subtext()->kirbytext() ?>
  </div>
<?php endif ?>
