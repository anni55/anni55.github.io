<div class="container-overlay">
	<div class="container py-5 my-5">
		<div class="row">
			<div class="col-md-6 col-12 px-md-0">
				<h1><?= t('digital.title'); ?></h1>
				<p class="my-5"><?= t('digital.text') ?></p>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#demoRequestModal"><?= t('requestdemo'); ?></button>
			</div>
			<div class="col-md-6 col-12 order-first order-md-last">
				<img src="./public/img/main.png" class="full">
			</div>
		</div>
	</div>
</div>

<div class="container-grey py-5 my-2">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-12"><h2 class="lite"><?= t('focusing.title'); ?></h2></div>
			<div class="col-md-6 col-12 center">
				<p><?= t('focusing.text') ?></p>
			</div>
		</div>
	</div>
</div>

<div class="container py-5">
	<h3 class="center my-5"><?= t('whyjuakali'); ?></h3>
	<div class="row ">
		<div class="col-md-4 col-12">
			<p class="number"><span>01.</span> <?= t('ourplatform.title'); ?></p>
			<p><?= t('ourplatform.text'); ?></p>
		</div>
		<div class="col-md-4 col-12">
			<p class="number"><span>02.</span> <?= t('ourexpertise.title'); ?></p>
			<p><?= t('ourexpertise.text'); ?></p>
		</div>
		<div class="col-md-4 col-12">
			<p class="number"><span>03.</span> <?= t('ourpricing.title'); ?></p>
			<p><?= t('ourpricing.text'); ?></p>
		</div>
	</div>
</div>

<div class="container-overlay">
	<div class="container py-5">
		<div class="row">
			<div class="col-md-6 col-12">
				<h2><?= t('upgame.title'); ?></h2>
				<ul class="my-5">
					<?php foreach (t('upgame.text') as $up) : ?>
						<li class="my-3"><?= $up ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="col-md-6 col-12">
				<img src="./public/img/game.png" class="full">
			</div>
		</div>
	</div>
</div>

<div class="container-overlay container-overlay-left">
	<div class="container py-5 my-5">
		<div class="row">
			<div class="col-md-6 col-12">
				<img src="./public/img/simplesafe.png" class="full">
			</div>
			<div class="col-md-6 col-12">
				<h2><?= t('simplesafe.title'); ?></h2>
				<p class="my-5"><?= t('simplesafe.text') ?></p>
			</div>
		</div>
	</div>
</div>

<div class="container-grey py-5">
	<div class="container">
		<div class="row center">
			<div class="col-md-4 col-12 my-5">
				<img src="./public/img/ico/location.svg">
				<b class="d-block my-4"><?= t('fieldproof.title'); ?></b>
				<p><?= t('fieldproof.text'); ?></p>
			</div>
			<div class="col-md-4 col-12 my-5">
				<img src="./public/img/ico/lock.svg">
				<b class="d-block my-4"><?= t('secure.title'); ?></b>
				<p><?= t('secure.text'); ?></p>
			</div>
			<div class="col-md-4 col-12 my-5">
				<img src="./public/img/ico/devices.svg">
				<b class="d-block my-4"><?= t('multichannel.title'); ?></b>
				<p><?= t('multichannel.text'); ?></p>
			</div>
			<div class="col-md-4 col-12 my-5">
				<img src="./public/img/ico/connection.svg">
				<b class="d-block my-4"><?= t('systemintegration.title'); ?></b>
				<p><?= t('systemintegration.text'); ?></p>
			</div>
			<div class="col-md-4 col-12 my-5">
				<img src="./public/img/ico/cloud.svg">
				<b class="d-block my-4"><?= t('cloudnative.title'); ?></b>
				<p><?= t('cloudnative.text'); ?></p>
			</div>
			<div class="col-md-4 col-12 my-5">
				<img src="./public/img/ico/code.svg">
				<b class="d-block my-4"><?= t('lowcode.title'); ?></b>
				<p><?= t('lowcode.text'); ?></p>
			</div>
		</div>
	</div>
</div>

<div class="container center py-5 my-3" id="contact">
	<h3 class="py-4"><?= t('contactus'); ?></h3>
	<button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#demoRequestModal"><?= t('requestdemo'); ?></button>
</div>