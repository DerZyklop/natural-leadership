<nav role="navigation">
  <ul class="menu flex">
    <?php foreach($pages->visible() as $p): ?>
    <li class="flex-fit-content">
      <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $site->url() ?>/#<?= $p->uid() ?>"><?php echo $p->title()->html() ?></a>
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
    <?php endforeach ?>
  </ul>
</nav>
