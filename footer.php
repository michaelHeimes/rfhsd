<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rfhsd
 */

?>
	
	<footer class="site-footer">
		<div class="inner">
			<div class="w12-12">
				<div class="w12-5 start">
					<a href="https://rfhsd.com/" id="footer_logo">
						<span>RealFood</span>
						<?php if( !empty( get_field('footer_logo', 'option') ) ) {
							$imgID = get_field('footer_logo', 'option')['ID'];
							$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
							$img = wp_get_attachment_image( $imgID, 'full', false, [ "class" => "", "alt"=>$img_alt] );
							echo $img;
						}?>
					</a>
					<div id="footer_signup">
						<div class="slab_signup_form">
							<h3>Tap into our expertise.</h3>
							<p>Get the latest RealFood thinking delivered to your inbox.</p>
							<div class="feedback"></div>
							<form class="slabform">
								<input type="hidden" name="post" value="now">
								<span id="ianasbh"><input type="hidden" name="ianasb" value="D416F3FB1455FA03D945AB"></span><script>setTimeout( function(){ $("#ianasbh").load("/common/ishuman/hidden.php",{ "prefix" : "rfhsd" }); },4999);</script>	<div class="required important" style="display: none;"><input type="text" name="captcha" placeholder="Captcha Code" value=""></div>
								<div class="w12-12">
									<div class="w12-12">
										<div class="w12-6 full51 required">
											<input type="text" name="first_name" placeholder="First Name" value="">
										</div>
										<div class="w12-6 full51 required">
											<input type="text" name="last_name" placeholder="Last Name" value="">
										</div>
									</div>
								</div>
								<div class="w12-12">
									<div class="w12-6 full51 required">
										<input type="text" name="email_address" placeholder="email address" value="">
									</div>
									<div class="w12-6 submit">
										<button class="specialbutton" style="height: 1.88em;" type="submit">SEND</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="w12-7 right end">
					<nav id="footernav" class="w12-12 right">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer',
								'menu_id'        => 'footer-nav',
							)
						);
						?>
					</nav>
					<?php if( get_field('footer_awards', 'option') ):
						$footer_awards = get_field('footer_awards', 'option');
					?>
					<div class="w12-12 right">
						<?php foreach($footer_awards as $footer_award):
							$link = $footer_award['link'];
							$logo = $footer_award['logo'];
							if( $link ): 
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
								<a class="footer-award" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
									<span class="screen-reader-text"><?php echo esc_html( $link_title ); ?></span>
									<?php if( !empty( $logo ) ) {
										$imgID = $logo['ID'];
										$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
										$img = wp_get_attachment_image( $imgID, 'full', false, [ "class" => "", "alt"=>$img_alt] );
										echo $img;
									}?>
								</a>
							<?php endif; ?>
						<?php endforeach;?>
					</div>
					<?php endif;?>
							
					<div class="w12-12 right" id="troongroup">
						<a href="https://www.troon.com/the-troon-group/" target="_blank">RealFood is a <span>Troon</span> Company </a>
					</div>
					<div id="footer_social" class="w12-12 right" style="margin-top: .5em;">
						<a href="https://www.instagram.com/realfoodhsd/" target="_blank" class="faicon iconinstagram" title="instagram"><i class="fa fa-instagram" aria-hidden="true"><span class="sociallabel" style="display:none;" aria-hidden="false">instagram</span></i></a
						><a href="https://www.youtube.com/user/realfoodconsulting" target="_blank" class="faicon iconyoutube" title="youtube"><i class="fa fa-youtube-play" aria-hidden="true"><span class="sociallabel" style="display:none;" aria-hidden="false">youtube</span></i></a>
						<a href="https://www.linkedin.com/company/realfoodhsd/" target="_blank" class="faicon iconlinkedin" title="linkedin"><i class="fa fa-linkedin" aria-hidden="true"><span class="sociallabel" style="display:none;" aria-hidden="false">linkedin</span></i></a>
					</div>
					<div class="w12-12 right" style="margin-top: .75em;">
						<div class="inner">
							<a href="https://slabmedia.com/" target="_blank" class="slabfooter2022"><span>Slabmedia: Boston web designers</span></a>
						</div>
					</div>
				</div>
		
			</div>
			<div class="w12-12 right" style="border-top: thin hsl(113,0%,66%) solid;padding: 1.33em 0;">
				<div class="inner">
					©2023 RealFood Hospitality, Strategy &amp; Design 			</div>
			</div>
		</div>
	</footer>
	
</div><!-- #container -->

<?php wp_footer(); ?>

</body>
</html>
