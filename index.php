<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php')?>

<section class="section about-me" data-section="section1">
    <div class="container">
        <div class="top-header">
            <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/aerobic-girls.jpg" alt="aerobic girls" />
        </div>
        <div class="section-heading">      
            <h2>Introducing Blugoon</h2>
            <div class="line-dec"></div>
            <span>Blugoon is free HTML template for everyone. This is a Bootstrap v4.3.1 layout which you can fully customize for your websites. Please tell your friends about Tooplate. Thank you.</span>
        </div>
        <div class="right-image-post">
            <div class="row">
                <div class="col-md-8">
                    <div class="left-text">
                        <h4>Modern Web Design</h4>
                        <p>You are allowed to use this template for commercial or personal websites. You are NOT allowed to redistribute this on template collection website. You can feature this template on your blog post.</p>
                        <p>All photos in this template are from <a rel="nofollow" href="https://www.pexels.com">Pexels</a> website. Blugoon HTML Template is provided by Tooplate. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                        <div class="white-button">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="right-image">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/mountain-reflection.jpg" alt="Mountain Reflection" />
                    </div>
                </div>
            </div>
        </div>
        <div class="left-image-post">
            <div class="row">
                <div class="col-md-4">
                    <div class="left-image">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/girl-nature.jpg" alt="Nature Girl" />
                    </div>
                </div>
    
                <div class="col-md-8">
                    <div class="right-text">
                        <h4>Best Template for you!</h4>
                        <p>Quisque feugiat nisl at lacus condimentum, eu suscipit odio fringilla. Mauris eu est vitae erat condimentum pellentesque. Fusce vehicula nunc at augue sagittis tristique.</p>
                        <p>Ut imperdiet massa at enim tempus volutpat. Nullam gravida augue quis facilisis commodo. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                        <div class="white-button">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section my-services" data-section="section2">
    <div class="container">
        <div class="section-heading">
            <h2>Greatest Features</h2>
            <div class="line-dec"></div>
            <span>Praesent posuere fringilla elit, non maximus tellus posuere nec. Nunc eu sapien nec est elementum sodales.</span>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="service-item">
                    <i class="fa fa-area-chart"></i>
                    <h4>Top Performance</h4>
                    <p>Donec sit amet tempor quam. Maecenas nec aliquam leo, sed tincidunt urna.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-item">
                    <i class="fa fa-check-square-o"></i>
                    <h4>Trusted Service</h4>
                    <p>Etiam at porta nulla, et euismod enim. Nullam semper ipsum et dui scelerisque.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-item">
                    <i class="fa fa-question-circle"></i>
                    <h4>Need Help?</h4>
                    <p>Phasellus orci leo, elementum ac risus id, euismod porta lorem. Quisque feugiat.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-item">
                    <i class="fa fa-support"></i>
                    <h4>Quick Support</h4>
                    <p>Mauris eu est vitae erat condimentum pellentesque. Fusce vehicula nunc.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section my-work" data-section="section3">
    <div class="container">
        <div class="section-heading">
            <h2>Gallery</h2>
            <div class="line-dec"></div>
            <span>Donec sit amet enim tempor nisl fermentum aliquam. In consectetur sapien eu nisi venenatis lobortis. Sed ullamcorper tristique elit nec facilisis.</span>
        </div>
        <?php $APPLICATION->IncludeComponent(
            'site:photo_galery_main_page', 
            '.default', 
            [
                'CACHE_TIME' => '36000000',
                'CACHE_TYPE' => 'A',
                'COMPONENT_TEMPLATE' => '.default',
                'IBLOCK_ID' => '5'
            ],
            false
        );?>
    </div>
</section>

<section class="section contact-me" data-section="section4">
    <?php $APPLICATION->IncludeComponent(
        "bitrix:main.feedback", 
        "site_main_page_form", 
        [
            "EMAIL_TO" => "gusevandrey1988@gmail.com",
            "EVENT_MESSAGE_ID" => array(
                0 => "7",
            ),
            "OK_TEXT" => "Спасибо, ваше сообщение принято.",
            "REQUIRED_FIELDS" => [
                0 => "name",
                1 => "email",
                2 => "subject",
                3 => "message",
            ],
            "COMPONENT_TEMPLATE" => "site_main_page_form",
            "USE_CAPTCHA" => "Y"
        ],
        false
    );?>
</section>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php')?>