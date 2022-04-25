<?php use Juakali\Cookie; ?>
<?php if(Cookie::get('alert')) : ?>
	<?php $alert = json_decode(Cookie::get('alert')); ?>
	<div class="alert alert-<?= $alert->status; ?> alert-dismissible fade show" role="alert">
		<?= $alert->message; ?>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<?php Cookie::destroy('alert'); ?>
<?php endif; ?>