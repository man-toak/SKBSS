<?php if (count($errors) > 0): ?>
	<div role="alert" class="alert alert-danger alert-dismissible">
		<?php foreach ($errors as $error): ?>
			<button type="button" data-dismiss="alert" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button><p><?php echo $error; ?> </p>
		<?php endforeach ?>
	</div>
<?php endif ?>