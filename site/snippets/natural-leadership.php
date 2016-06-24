<section>
  <?php snippet("default", array('p' => $p, )); ?>
  <?php if ($p->hasChapters()): ?>
    <?php foreach ($p->chapters()->toStructure() as $c): ?>
      <h3><?= $c->title()->html() ?></h3>
      <?php echo $c->text()->kirbytext() ?>
    <?php endforeach ?>
  <?php endif ?>
  <?php if ($p->hasQuote()): ?>
    <blockquote>
      <p><?= $p->quote() ?></p>
      <footer><?= "– ".$p->quoteauthor() ?></footer>
    </blockquote>
  <?php endif ?>
</section>
