<?php include 'header.php';
get_header("front-page"); ?>

<div role="form" class="wpcf7" id="wpcf7-f205-o1" dir="ltr" lang="en-US">
	<form action="#wpcf7" method="post" class="wpcf7-form" novalidate="novalidate">
	<p>
		<span class="wpcf7-form-control-wrap your-tel">
			<input name="your-tel" value="" size="40" maxlength="10" minlength="10" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="טלפון *" type="tel">
		</span>
		<span class="wpcf7-form-control-wrap your-name">
			<input name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="שם מלא *" type="text">
		</span>
	</p>
	<p>
		<span class="wpcf7-form-control-wrap your-loc">
			<input name="your-loc" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="עיר" type="text">
		</span>
		<span class="wpcf7-form-control-wrap your-email">
			<input name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" aria-invalid="false" placeholder="דואר אלקטרוני" type="email">
		</span>
	</p>
	<p>
		<span class="wpcf7-form-control-wrap textarea-800">
			<textarea name="textarea-800" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="טקסט חופשי"></textarea>
		</span>
	</p>
	<p>
		<input value="שלח פרטים" class="wpcf7-form-control wpcf7-submit" type="submit">
		<span class="ajax-loader"></span>
	</p>
	<div class="wpcf7-response-output wpcf7-display-none"></div>
	</form>
</div>

<?php include 'footer.php'; ?>