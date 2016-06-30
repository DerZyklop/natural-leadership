<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/main.css') ?>

</head>
<body>

<header role="banner">
  <div class="flex flex-center">
    <div class="flex-3">
      <a class="logo" href="<?php echo url() ?>">
        <img src="<?php echo url('assets/images/logo.svg') ?>" alt="<?php echo $site->title()->html() ?>" />
        <h1 style="display: none"><?php echo $site->title()->html() ?></h1>
      </a>
    </div>
    <div class="flex-8"><?php snippet('menu') ?></div>
    <div class="flex-1 permanentmailhint">
      <?php if ($pages->find("kontakt")): ?>
        <a href="<?php echo $site->url() ?>/#<?= $pages->find("kontakt")->uri() ?>">
          <img width="50px" src="/assets/images/mail-icon.svg">
        </a>
      <?php endif ?>
      </div>
    </div>
  </div>
</header>
