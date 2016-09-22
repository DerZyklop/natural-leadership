<div id="<?= $p->uid() ?>" class="teaser">
  <?php if ($p->hasQuote() && $p->quote() != ''): ?>
    <div class="overlay">
      <section>
        <div class="quote">
          <div class="flex">
            <div class="flex-5"></div>
            <div class="flex-7">
              <blockquote>
                — <?= $p->quote()->kirbytextRaw() ?>
                <?php if ($p->hasQuoteauthor()): ?>
                  <footer><?= $p->quoteauthor() ?></footer>
                <?php endif ?>
              </blockquote>
            </div>
          </div>
        </div>
      </section>
    </div>
  <?php endif ?>
  <?php if ($p->hasBackgroundimage()): ?>
    <div class="teaserimage">
      <?php $image = $p->images()->find($p->backgroundimage()); ?>
      <figure>
        <?= $image ?>
        <?php if ($image->hasCaption()): ?>
          <figcaption><?= $image->caption() ?></figcaption>
        <?php endif ?>
      </figure>
    </div>
  <?php endif ?>
</div>

<?php if ($p->hasText()) : ?>
  <section id="<?= $p->uid() ?>">
    <div class="flex flex-center">
      <div class="flex-1"></div>
      <div class="flex-6">
        <?php if ($p->hasHeadline()): ?>
          <h3><?= $p->headline()->html() ?></h3>
        <?php endif ?>
      </div>
      <div class="flex-1"></div>
      <div class="flex-4"></div>
      <div class="flex-1"></div>
      <div class="flex-6">
        <div class="text">
          <?= $p->text()->kirbytext() ?>
        </div>
      </div>
      <div class="flex-1"></div>
      <div class="flex-4">
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
    </div>
  </section>
<?php endif ?>
<section>
  <div class="flex">
    <div class="flex-1"></div>
    <div class="flex-8 two-col-text subtext">
      <?php if ($p->hasSubtext()): ?>
        <div class="text">
          <?= $p->subtext()->kirbytext() ?>
        </div>
      <?php endif ?>
    </div>
    <div class="flex-3"></div>
  </div>
</section>
