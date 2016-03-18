<?php snippet('header') ?>

<main class="main" role="main">
  <?php foreach($page->children()->visible()->flip() as $article): ?>

  <article class="blog">
    <h1><a href="<?php echo $article->url() ?>"><?php echo $article->title()->html() ?></a></h1>
    <time><?php echo $article->date('Y-m-d') ?></time>
    <strong><?php echo $article->comments()->structure()->count() ?></strong>
    <p><?php echo $article->text()->excerpt(300) ?></p>
    <a href="<?php echo $article->url() ?>">Read more…</a>
  </article>

  <?php endforeach ?>
</main>

<?php snippet('footer') ?>