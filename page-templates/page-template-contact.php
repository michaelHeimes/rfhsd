<?php 
/* Template Name: Contact Page	
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rfhsd
 */	

	
get_header();
$fields = get_fields();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div id="main" class="fullbox">
		<div id="mainbox" class="mainbox w12-12">
			<div class="entries w12-4 start full51">
				<div id="entry286" class="story contact_entry" itemscope="" itemtype="http://schema.org/contactPage">
					<div class="address contactinfo">
						<?php the_content();?>
					</div>
					<div class="resources attachments w12-12" data-id="286"></div>
					<div class="clr"></div>
				</div>
			</div>
			<div class="slab_contact_form w12-8 end full51">
				<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
				<script src="https://www.google.com/recaptcha/api.js"></script>
				<!--  ----------------------------------------------------------------------  -->
				<!--  NOTE: Please add the following <META> element to your page <HEAD>.      -->
				<!--  If necessary, please modify the charset parameter to specify the        -->
				<!--  character set of your HTML page.                                        -->
				<!--  ----------------------------------------------------------------------  -->
				
				<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
				<script src="https://www.google.com/recaptcha/api.js"></script>
				<script>
	 			function timestamp() { var response = document.getElementById("g-recaptcha-response"); if (response == null || response.value.trim() == "") {var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);elems["ts"] = JSON.stringify(new Date().getTime());document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems); } } setInterval(timestamp, 500); 
				</script>
				
				<!--  ----------------------------------------------------------------------  -->
				<!--  NOTE: Please add the following <FORM> element to your page.             -->
				<!--  ----------------------------------------------------------------------  -->
				
				<form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
				
				<input type="hidden" name="captcha_settings" value="{&quot;keyname&quot;:&quot;reCAPTCHA&quot;,&quot;fallback&quot;:&quot;true&quot;,&quot;orgId&quot;:&quot;00Df40000000rw7&quot;,&quot;ts&quot;:&quot;1696815993090&quot;}">
				<input type="hidden" name="oid" value="00Df40000000rw7">
				<input type="hidden" name="retURL" value="https://rfhsd.com/about/thank-you/">
				
				<!--  ----------------------------------------------------------------------  -->
				<!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
				<!--  these lines if you wish to test in debug mode.                          -->
				<!--  <input type="hidden" name="debug" value=1>                              -->
				<!--  <input type="hidden" name="debugEmail"                                  -->
				<!--  value="gjohnson@indigogolf.com">                                        -->
				<!--  ----------------------------------------------------------------------  -->
				<div class="w12-12">
				<div class="w12-6 full42 left">
				<label for="first_name">First Name</label><input id="first_name" maxlength="40" name="first_name" size="20" type="text">
				</div><div class="w12-6 full42 left">
				<label for="last_name">Last Name</label><input id="last_name" maxlength="80" name="last_name" size="20" type="text">
				</div>
				</div>
				<div class="w12-12 left">
				<label for="company">Company</label><input id="company" maxlength="40" name="company" size="20" type="text">
				</div>
				<div class="w12-12 left">
				<div class="w12-6 full42 left">
				<label for="email">Email</label><input id="email" maxlength="80" name="email" size="20" type="text">
				</div><div class="w12-6 full42 left">
				<label for="mobile">Mobile</label><input id="mobile" maxlength="40" name="mobile" size="20" type="text">
				</div>
				</div>
				<div class="w12-12 left">
				How can we help you?:<textarea id="00Nf400000UeKV3" name="00Nf400000UeKV3" rows="10" type="text" wrap="soft"></textarea><br>
				</div>
				<div class="g-recaptcha" data-sitekey="6LdDzcIUAAAAAJI-QLT5ySrL90_RpSLUWtg-0xdt"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-2lwo1wm95exg" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdDzcIUAAAAAJI-QLT5ySrL90_RpSLUWtg-0xdt&amp;co=aHR0cHM6Ly9yZmhzZC5jb206NDQz&amp;hl=en&amp;v=lLirU0na9roYU3wDDisGJEVT&amp;size=normal&amp;cb=hpmcixswj37j"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div><br>
				<div class="w12-12 center">
				<input type="submit" name="submit" class="specialbutton">
				</div>
				</form>
			</div>
		<div class="clr mainbox_bottom"></div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->

<?php
get_footer();