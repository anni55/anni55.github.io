<div class="modal modal-fullscreen fade" id="demoRequestModal" tabindex="-1" role="dialog" aria-labelledby="demoRequestModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<form action="<?= url_for('/requestdemo') ?>" method="post" class="request-demo">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="demoRequestModalLabel"><?= t('seejuakali') ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p><?= t('seejuakali.text') ?></p>
					<div class="form-row">
						<div class="col-md-6 col-12 mb-3">
							<input type="text" class="form-control" placeholder="<?= t('firstname') ?>*" name="firstname" required>
						</div>
						<div class="col-md-6 col-12 mb-3">
							<input type="text" class="form-control" placeholder="<?= t('surname') ?>*" name="surname" required>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-6 col-12 mb-3">
							<input type="text" class="form-control" placeholder="<?= t('email') ?>*"  name="email" required>
						</div>
						<div class="col-md-6 col-12 mb-3">
							<input type="text" class="form-control" placeholder="<?= t('phonenumber') ?>*" name="phonenumber" required>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-6 col-12 mb-3">
							<input type="text" class="form-control" placeholder="<?= t('position') ?>*" name="position" required>
						</div>
						<div class="col-md-6 col-12 mb-3">
							<input type="text" class="form-control" placeholder="<?= t('company') ?>*" name="company" required>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-6 col-12 mb-3">
							<select name="nbemployees" required>
								<option value="" disabled selected hidden><?= t('nbemployees') ?></option>
								<option value="1-10">1-10 <?= t('nbemployees.option') ?></option>
								<option value="11-50">11-50 <?= t('nbemployees.option') ?></option>
								<option value="51-200">51-200 <?= t('nbemployees.option') ?></option>
								<option value="201-500">201-500 <?= t('nbemployees.option') ?></option>
								<option value="501-1000">501-1000 <?= t('nbemployees.option') ?></option>
								<option value="1001-5000">1001-5000 <?= t('nbemployees.option') ?></option>
								<option value="5001+">5001+ <?= t('nbemployees.option') ?></option>
							</select>
						</div>
						<div class="col-md-6 col-12 mb-3">
							<select name="country" class="custom-select" required>
								<option value=""  disabled selected hidden><?= t('country') ?>*</option>
								<?php foreach (t('countries') as $c) : ?>
									<option value="<?= $c ?>"><?= $c ?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<div class="form-row">
						<div class="col-12 mb-3">
							<textarea name="comment" class="form-control" placeholder="<?= t('comment') ?>"></textarea>
						</div>
					</div>
					<div class="g-recaptcha" data-sitekey="<?= e('GOOGLE_RECAPTCHA_SITE'); ?>"></div><!------------------ reccaptcha box -->
					<!-- <div class="form-row">
						<div class="col-12 mb-3">
							<div class="form-check">
								<label class="form-check-label" for="newsletter">
									<input class="form-check-input" type="checkbox" name="newsletter" value="1" id="newsletter">
									<span class="checkmark"></span>
									<?= t('subscribe.title') ?>
								</label>
							</div>
						</div>
					</div> -->
				</div>
				<div class="modal-footer center">
					<button type="button" class="btn btn-secondary" data-dismiss="modal"><?= t('close') ?></button>
					<button type="submit" class="btn btn-primary"><?= t('requestdemo') ?></button>
				</div>
			</div>
		</form>
	</div>
</div>