<div class="teaser">
  <div class="overlay">
    <section>
      <div class="flex">
        <div class="flex-4"></div>
        <div class="flex-8">
          <h2><?php echo $p->title()->html() ?></h2>
        </div>
      </div>
      <?php if ($p->hasQuote()): ?>
        <div class="quote">
          <div class="flex">
            <div class="flex-3"></div>
            <div class="flex-9">
              <blockquote>
                — „<?= $p->quote()->kirbytextRaw() ?>“
                <?php if ($p->hasQuoteauthor()): ?>
                  <footer><?= $p->quoteauthor() ?></footer>
                <?php endif ?>
              </blockquote>
            </div>
          </div>
        </div>
      <?php endif ?>
      <?php if ($p->hasTeasertext()): ?>
        <div class="flex">
          <div class="flex-4"></div>
          <div class="flex-8">
            <?php echo $p->teasertext()->kirbytext() ?>
          </div>
        </div>
      <?php endif ?>
    </section>
  </div>
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

<section>
  <div class="flex">
    <div class="flex-2"></div>
    <div class="flex-10">
      <?php if ($p->hasHeadline()): ?>
        <h3><?= $p->headline()->html() ?></h3>
      <?php endif ?>
    </div>
  </div>
  <div class="flex">
    <div class="flex-2"></div>
    <div class="flex-3">
      <?php if ($p->hasLeftcol()): ?>
        <?php foreach ($p->leftcol()->toStructure() as $c): ?>
          <?php if ($c->hasTitle()): ?>
            <h5><?= $c->title()->html() ?></h5>
          <?php endif ?>
          <?php if ($c->hasText()): ?>
            <?= $c->text()->kirbytext() ?>
          <?php endif ?>
        <?php endforeach ?>
      <?php endif ?>
    </div>
    <div class="flex-1"></div>
    <div class="flex-3">
      <?php if ($p->hasRightcol()): ?>
        <?php foreach ($p->rightcol()->toStructure() as $c): ?>
          <?php if ($c->hasTitle()): ?>
            <h5><?= $c->title()->html() ?></h5>
          <?php endif ?>
          <?php if ($c->hasText()): ?>
            <?= $c->text()->kirbytext() ?>
          <?php endif ?>
        <?php endforeach ?>
      <?php endif ?>
    </div>
    <div class="flex-3"></div>
  </div>
</section>
<section>
  <?php if ($p->hasHeadline2()): ?>
    <div class="flex">
      <div class="flex-2"></div>
      <div class="flex-10">
        <h3><?= $p->headline2()->html() ?></h3>
      </div>
    </div>
  <?php endif ?>
  <?php if ($p->hasChapters()): ?>
    <?php foreach ($p->chapters()->toStructure() as $c): ?>
      <div class="flex">
        <div class="flex-2"></div>
        <div class="flex-9">
          <div class="chapter box">
            <?= $c->start_date()->html() ?> – <?= $c->end_date()->html() ?>
            <?php if ($c->company()->length()): ?>
              <h3><?= $c->company()->html() ?></h3>
            <?php endif ?>
            <?php if ($c->position()->length()): ?>
              <h5><?= $c->position()->html() ?></h5>
            <?php endif ?>
            <?php if ($c->branche()->length()): ?>
              <?= $c->branche()->kirbytext() ?>
            <?php endif ?>
            <div class="flex">
              <?php if ($c->tasks()->length()): ?>
                <div>
                  <h5>Aufgaben</h5>
                  <?= $c->tasks()->kirbytext() ?>
                </div>
              <?php endif ?>
              <?php if ($c->achievements()->length()): ?>
                <div>
                  <h5>Erfolge</h5>
                  <?= $c->achievements()->kirbytext() ?>
                </div>
              <?php endif ?>
            </div>
          </div>
        </div>
        <div class="flex-1"></div>
      </div>
    <?php endforeach ?>
  <?php endif ?>
</section>
