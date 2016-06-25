<nav role="navigation">
  <ul class="menu flex">
    <?php foreach($pages as $p): ?>
      <?php if ($p->ismenuitem() == "1"): ?>
        <li class="flex-fit-content">
          <a href="<?php echo $site->url() ?>/#<?= $p->uid() ?>"><?php echo $p->title()->html() ?></a>
          <?php if($p->hasVisibleChildren()): ?>
          <ul class="submenu">
            <?php foreach($p->children()->visible() as $p): ?>
            <li>
              <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
            </li>
            <?php endforeach ?>
          </ul>
          <?php endif ?>
        </li>
      <?php endif ?>
    <?php endforeach ?>
  </ul>
</nav>
