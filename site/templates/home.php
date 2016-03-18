<?php snippet('header') ?>

<main class="main" role="main">

  <article class="text">
		<?php if ($image = $page->cover()): ?>
		<figure class="cover">
			<img src="<?php echo $page->image($image)->dataURI() ?>" alt="<?php echo $page->title()->html() ?>" />
		</figure>
		<?php endif ?>
		<h1 class="title"><?php echo $page->subtitle()->or($page->title()) ?></h1>
		<div class="center">
			<a class="button" href="<?php echo url('blog') ?>">Test you blog</a>
		</div>
	</article>

</main>

<?php snippet('footer') ?>