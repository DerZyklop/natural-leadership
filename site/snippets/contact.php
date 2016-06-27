<section id="<?= $p->uid() ?>">
  <div class="flex">
    <div class="flex-1"></div>
    <div class="flex-10">
      <?php if ($p->headline()->length()): ?>
        <h2><?php echo $p->headline()->html() ?></h2>
      <?php else : ?>
        <h2><?php echo $p->title()->html() ?></h2>
      <?php endif ?>
      <?php if ($p->hasImages()): ?>
        <figure>
          <?= $p->images()->first() ?>
          <?php if ($p->images()->first()->hasCaption()): ?>
            <figcaption><?= $p->images()->first()->caption() ?></figcaption>
          <?php endif ?>
        </figure>
      <?php endif ?>
      <?php if ($p->hasText()) : ?>
        <blockquote>
          — „<?= $p->text()->kirbytextRaw() ?>“
        </blockquote>
      <?php endif ?>
    </div>
    <div class="flex-1"></div>

    <div class="flex-1"></div>
    <div class="flex-4">
      <p>
        <?php if ($p->hasCompany()) : ?>
          <h5><?= $p->company()->html() ?></h5>
        <?php endif ?>
        <?php if ($p->hasPlz()) : ?>
          <?= $p->plz()->html() ?> <?= $p->city()->html() ?><br>
        <?php endif ?>
        <?php if ($p->hasStreet()) : ?>
          <?= $p->street()->html() ?> <?= $p->housenumber()->html() ?><br>
        <?php endif ?>
        <?php if ($p->hasCountry()) : ?>
          <?= $p->country()->html() ?><br>
        <?php endif ?>
      </p>
      <p>
        <?php if ($p->hasEmail()) : ?>
          <a href="mailto:lorem@ipsum.de"><?= $p->email()->html() ?></a><br>
        <?php endif ?>
        <?php if ($p->hasPhone()) : ?>
          T <?= $p->phone()->html() ?><br>
        <?php endif ?>
        <?php if ($p->hasMobilephone()) : ?>
          M <?= $p->mobilephone()->html() ?><br>
        <?php endif ?>
      </p>
    </div>
    <div class="flex-1"></div>
    <div class="flex-5">
      <input type="text" name="" placeholder="Vor-/ Nachname">
      <input type="text" name="" placeholder="Firma">
      <textarea name="" placeholder="Nachricht"></textarea>
      <input type="text" name="" placeholder="Email">
      <input type="text" name="" placeholder="Kontaktnummer">
      <div class="formblock checkbox">
        <input id="rueckrufanfrage" type="checkbox" name=""><label for="rueckrufanfrage">Bitte rufen sie mich zurück</label>
      </div>
      <div class="formblock checkbox">
        <input id="emailanfrage" type="checkbox" name=""><label for="emailanfrage">Bitte antworten sie mir per E-Mail</label>
      </div>
      <div class="formblock checkbox">
        <input id="einhornanfrage" type="checkbox" name=""><label for="einhornanfrage">Bitte schenken sie mir ein Einhorn</label>
      </div>
    </div>
    <div class="flex-1"></div>
  </div>
</section>
