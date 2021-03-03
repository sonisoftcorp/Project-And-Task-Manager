<?php if (count($errors) > 0): ?>
	<div class="alert alert-danger alert-dismissable fade in mute-slide" id="slide-alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Error - &nbsp;</strong>
		<?php foreach ($errors as $error): ?>
			<?php echo $error; ?>&nbsp;
		<?php endforeach ?>
	</div>

<?php endif ?>