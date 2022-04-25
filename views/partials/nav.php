<nav class="navbar fixed-top navbar-expand-lg navbar-light">
	<div class="container">
		<a class="navbar-brand" href="<?= url_for('/'.option('locale')) ?>"><img src="./public/img/logo3.png" alt="Juakali" class="logo"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item <?php if ($_SERVER['REQUEST_URI'] == url_for('/'.option('locale'))) : ?>active<?php endif; ?>">
					<a class="nav-link" href="<?= url_for('/'.option('locale')) ?>"><?= t('platform'); ?></a>
				</li>
				<li class="nav-item <?php if ($_SERVER['REQUEST_URI'] == url_for(option('locale').'/about')) : $url = '/about'; ?>active<?php endif; ?>">
					<a class="nav-link" href="<?= url_for(option('locale') . '/about') ?>"><?= t('about'); ?></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= url_for('/'.option('locale')) ?>#contact"><?= t('contact'); ?></a>
				</li>
				<?php if(count(option('locales')) > 1) : ?>
					<li>
						<div class="dropdown langs">
							<a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img src="./public/img/langs/<?= option('locale'); ?>.png" class="lang">
							</a>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<?php foreach(option('locales') as $locale) : ?>
									<?php if ($locale != option('locale')) : ?>
										<a class="dropdown-item" href="<?= url_for('/' . $locale . $url) ?>">
											<img src="./public/img/langs/<?= $locale; ?>.png" class="lang">
										</a>
									<?php endif; ?>
								<?php endforeach; ?>
							</div>
						</div>
					</li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</nav>