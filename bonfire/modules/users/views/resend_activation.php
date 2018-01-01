<div class="container" style="min-height:90vh;margin-top:40px">
<div class="page-header">
	<h1><?php echo lang('us_activate_resend'); ?></h1>
</div>

<?php if (validation_errors()) { ?>
	<div class="alert alert-error fade in">
		<?php echo validation_errors(); ?>
	</div>
<?php } else { ?>

	<div class="well shallow-well">
		<?php echo lang('us_activate_resend_note'); ?>
	</div>
<?php } ?>
<div class="row-fluid">
	<div class="span8 offset2">

<?php echo form_open($this->uri->uri_string(), array('class' => "form-horizontal", 'autocomplete' => 'off')); ?>

	<div class="form-group <?php echo iif( form_error('email') , 'error') ;?>">
		<label class="control-label required" for="email"><?php echo lang('bf_email'); ?></label>
		<div class="controls">
			<input class="span6 form-control" type="text" name="email" id="email" value="<?php echo set_value('email') ?>" />
		</div>
	</div>

	<div class="form-group">
		<div class="controls">
			<input class="btn btn-primary" type="submit" name="send" value="<?php echo lang('us_activate_code_send') ?>"  />
		</div>
	</div>

<?php echo form_close(); ?>

	</div>
</div>
</div>