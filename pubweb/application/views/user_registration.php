<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div id="container">
	<h1><?php echo lang("user_registration_title"); ?></h1>

	<div id="body">
		
<p>
<?php echo last_user_error($errors); ?>
</p>
		<p>
		
		<?php echo lang("user_registration_headline"); ?></p>
		<?php echo form_open('registration/general'); ?>
		<?php echo form_label(lang("user_registration_firstname"),"firstname");?>
		<?php echo form_input("firstname","");?>
		<?php echo form_label(lang("user_registration_lastname"),"lastname");?>
		<?php echo form_input("lastname","");?>		
		<?php echo form_label(lang("user_registration_birthdate"),"birthdate");?>
		<?php echo form_input("birthdate","");?>
		<?php echo form_label(lang("user_registration_email_address"),"email_address");?>
		<?php echo form_input("email_address","");?>
		<?php echo form_label(lang("user_registration_cellphone_number"),"cellphone_number");?>
		<?php echo form_input("cellphone_number","");?>
		<?php echo form_label(lang("user_registration_secret_key"),"secret_key");?>
		<?php echo form_input("secret_key","");?>
		<?php echo form_submit("register",lang("user_registration_post"));?>

		<?php echo form_close(); ?>

	</div>

	<p class="footer">

	</p>
</div>

