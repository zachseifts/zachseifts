<div class="main-wrapper">
  <div class="container container-narrow">
    <header class="header-container">
      <?php if (!empty($primary_nav)): ?>
        <?php print render($primary_nav); ?>
      <?php endif; ?>
      <h1 class="muted">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="brand"><?php print $site_name; ?></a>
      </h1>
      <hr />
    </header>

    <div class="row-fluid">
      <section class="<?php print _bootstrap_content_span($columns); ?>">  
        <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if (!empty($title)): ?>
          <h1 class="page-header"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php print $messages; ?>
        <?php if (!empty($tabs)): ?>
          <?php print render($tabs); ?>
        <?php endif; ?>
        <?php if (!empty($page['help'])): ?>
          <div class="well"><?php print render($page['help']); ?></div>
        <?php endif; ?>
        <?php if (!empty($action_links)): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        <?php print render($page['content']); ?>
      </section>
    </div>
  </div>
</div>

<footer class="footer container container-narrow">
  <?php print render($page['footer']); ?>
  <hr />
  <p>&copy; 2011 - <?php print Date('Y'); ?> Zach Seifts</p>
</footer>

