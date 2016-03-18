<?php snippet('header') ?>

<main class="main" role="main">
	<article class="text">
		<h1 class="title"><?php echo $page->subtitle()->or($page->title()) ?></h1>
		<?php echo $page->text()->kirbytext() ?>
	</article>

	<div class="meta">
		<a href="<?php echo url('blog') ?>">Back</a>
	</div>

	<div class="writecomment">
		<?php if($user = $site->user()): ?>
		<?php if($alert): ?>
		<div class="alert error">
			<?php foreach($alert as $message): ?>
			<p><?php echo html($message) ?></p>
			<?php endforeach ?>
		</div>
		<?php endif ?>
		<form method="post">
			<div>
				<label for="message">Hi <strong><?php echo $user->username() ?></strong>, your are connected!</label>
				<textarea name="message" id="message"></textarea>
			</div>
			<div class="center">
				<input type="submit" name="submit" value="Post your comment">
			</div>
		</form>
		<?php else: ?>
		<div class="center">
			<a class="button gray" href="<?php echo url('login') ?>">Log in</a> or
			<a class="button gray" href="<?php echo url('register') ?>">Join</a>
		</div>
		<?php endif ?>
	</div>

	<?php if($page->comments()->isEmpty()): ?>
	<div class="nocomment">
		<p>Write the first comment !</p>
	</div>
	<?php else: ?>
	<div class="comments">
		<?php foreach($page->comments()->toStructure()->flip() as $comment): ?>
		<div class="comment cf">
			<h3><?php echo $comment->username()->html() ?></h3>
			<time><?php echo $comment->date('Y-m-d') ?> - <?php echo $comment->time() ?></time>
			<p><?php echo $comment->message()->html() ?></p>
		</div>
		<?php endforeach ?>
	</div>
	<?php endif ?>

</main>

<?php snippet('footer') ?>