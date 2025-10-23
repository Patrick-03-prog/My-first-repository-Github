<?php 
require('templates/header.php');
include ('data.php');
?>
					<div id="main">
						<div class="inner">
							<header>
								<h1>Bienvenue dans mon prémier page<br />
								Nomentsoa Patrick.</h1>
								<p>C'est une application qui rassemble tous les jeux que j'ai créé pour m'entrainer en programmation avec javascript, html et css</p>
							</header>

							<section class="tiles">
								<?php foreach ($games as $game): ?>
									<article class="<?= $game['style'];?>">
										<span class="image">
											<img src="<?= $game['image'] ?>" alt="<?= $game['title'] ?>" />
										</span>
										<a href="games.php?id=<?= $game['id'] ?>">
											<h2><?= $game['title'] ?></h2>
											<div class="content">
												<p><?= $game['description'] ?></p>
											</div>
										</a>
									</article>
								<?php endforeach; ?>
							</section>
						</div>
					</div>
<?php require('templates/footer.php') ?>