<?php
	include("templates/header.php");

	if(isset($_GET['id'])){
		$postId = $_GET['id'];
		$currentPost;
	

		foreach ($posts as $post) {
			if ($post['id'] == $postId) {
				$currentPost = $post;
			}
		}
	}
?>

	<main id="post-container">
		<div id="content-container">
			<h1 id="main-title"> <?= $currentPost['title'] ?></h1>
			<p id="post-description"> <?= $currentPost['description'] ?></p>
		<div class="img-container">
			<img src="<?= $BASE_URL ?>img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
		</div>
		<p class="post-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
		<p class="post-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
		</div>
	
		<aside id="nav-container">
			<h3 id="tags-title">Tags</h3>
			<ul id="tag-list">
				<?php foreach ($currentPost['tags'] as $tag): ?>
					<li><a href="#"><?= $tag ?>s</a></li>
				<?php endforeach; ?>
			</ul>
			<h3 id="categories-title">Categorias</h3>
			<ul id="categories-list">
				<?php foreach ($categorias as $category): ?>
					<li><a href="#"><?= $category ?>s</a></li>
				<?php endforeach; ?>
			</ul>
		</aside>
	</main>

<?php
 include_once("templates/footer.php");
?>