<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle("")?><section class="section about-me" data-section="section1">
<div class="container">
	<div class="top-header">
 <img alt="aerobic girls" src="/local/templates/main_template/assets/images/aerobic-girls.jpg">
	</div>
	<div class="section-heading">
		<h2>Introducing Blugoon</h2>
		<div class="line-dec">
		</div>
		 Blugoon is free HTML template for everyone. This is a Bootstrap v4.3.1 layout which you can fully customize for your websites. Please tell your friends about Tooplate. Thank you.
	</div>
	<div class="right-image-post">
		<div class="row">
			<div class="col-md-8">
				<div class="left-text">
					<h4>Modern Web Design</h4>
					<p>
						You are allowed to use this template for commercial or personal websites. You are NOT allowed to redistribute this on template collection website. You can feature this template on your blog post.
					</p>
					<p>
						All photos in this template are from <a rel="nofollow" href="https://www.pexels.com">Pexels</a> website. Blugoon HTML Template is provided by Tooplate. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
					</p>
					<div class="white-button">
 <a href="#">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="right-image">
 <img alt="Mountain Reflection" src="/local/templates/main_template/assets/images/mountain-reflection.jpg">
				</div>
			</div>
		</div>
	</div>
	<div class="left-image-post">
		<div class="row">
			<div class="col-md-4">
				<div class="left-image">
 <img alt="Nature Girl" src="/local/templates/main_template/assets/images/girl-nature.jpg">
				</div>
			</div>
			<div class="col-md-8">
				<div class="right-text">
					<h4>Best Template for you!</h4>
					<p>
						Quisque feugiat nisl at lacus condimentum, eu suscipit odio fringilla. Mauris eu est vitae erat condimentum pellentesque. Fusce vehicula nunc at augue sagittis tristique.
					</p>
					<p>
						Ut imperdiet massa at enim tempus volutpat. Nullam gravida augue quis facilisis commodo. Interdum et malesuada fames ac ante ipsum primis in faucibus.
					</p>
					<div class="white-button">
 <a href="#">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 </section> <section class="section my-services" data-section="section2">
<div class="container">
	<div class="section-heading">
		<h2>Greatest Features</h2>
		<div class="line-dec">
		</div>
		 Praesent posuere fringilla elit, non maximus tellus posuere nec. Nunc eu sapien nec est elementum sodales.
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="service-item">
 <i class="fa fa-area-chart"></i>
				<h4>Top Performance</h4>
				<p>
					Donec sit amet tempor quam. Maecenas nec aliquam leo, sed tincidunt urna.
				</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="service-item">
 <i class="fa fa-check-square-o"></i>
				<h4>Trusted Service</h4>
				<p>
					Etiam at porta nulla, et euismod enim. Nullam semper ipsum et dui scelerisque.
				</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="service-item">
 <i class="fa fa-question-circle"></i>
				<h4>Need Help?</h4>
				<p>
					Phasellus orci leo, elementum ac risus id, euismod porta lorem. Quisque feugiat.
				</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="service-item">
 <i class="fa fa-support"></i>
				<h4>Quick Support</h4>
				<p>
					Mauris eu est vitae erat condimentum pellentesque. Fusce vehicula nunc.
				</p>
			</div>
		</div>
	</div>
</div>
</section> 
<section class="section my-work" data-section="section3">
	<div class="container">
		<div class="section-heading">
			<h2>Gallery</h2>
			<div class="line-dec">
			</div>
				Donec sit amet enim tempor nisl fermentum aliquam. In consectetur sapien eu nisi venenatis lobortis. Sed ullamcorper tristique elit nec facilisis.
		</div>
		<?$APPLICATION->IncludeComponent(
			"site:photo_galery_main_page",
			".default",
			Array(
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"COMPONENT_TEMPLATE" => ".default",
				"IBLOCK_ID" => "5"
			)
		);?>
	</div>
</section> 
<section class="section contact-me" data-section="section4">
	<div class="container">
		<div class="section-heading">
			<h2>Contact</h2>
			<div class="line-dec"></div>
				<span>Aenean a consectetur mi, sit amet consequat velit. Mauris vitae nunc viverra, mattis arcu quis, vestibulum eros. </span>
			</div>
			<div class="row">
				<div class="right-content">
					<div class="container">
						<form id="contact" action="" method="post">
							<div class="row">
								<div class="col-md-6">
									<fieldset>
										<input name="name" type="text" class="form-control"
											id="name" placeholder="Your name..." required="" />
									</fieldset>
								</div>
								<div class="col-md-6">
									<fieldset>
										<input name="email" type="text" class="form-control"
											id="email" placeholder="Your email..." required=""  />
									</fieldset>
								</div>
								<div class="col-md-12">
									<fieldset>
										<input name="subject" type="text" class="form-control" 
											id="subject" placeholder="Subject..." required="" />
									</fieldset>
								</div>
								<div class="col-md-12">
									<fieldset>
										<textarea name="message" rows="6" class="form-control"
											id="message" placeholder="Your message..." required="" ></textarea>
									</fieldset>
								</div>
								<div class="col-md-12">
									<fieldset>
										<button type="submit" id="form-submit" class="button">
											Send Message
										</button>
									</fieldset>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php')?>
