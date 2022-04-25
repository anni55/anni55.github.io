<div class="container-grey center py-5">
	<div class="container">
		<h4><?= t('subscribe.title') ?></h4>
		<form action="<?= url_for('/newsletter') ?>" method="post">
			<div class="row">
				<div class="col-md-4 col-12 offset-md-4">
					<div class="input-group is-invalid">
						<input type="text" class="form-control" placeholder="<?= t('email') ?>*" name="email" required>
						<div class="input-group-append">
							<button type="submit" class="btn btn-primary"><?= t('subscribe.button') ?></button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>  