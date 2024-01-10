<style>
    #overlay {
        position: fixed;
        /* Sit on top of the page content */
        width: 100%;
        /* Full width (cover the whole page) */
        height: 100%;
        /* Full height (cover the whole page) */
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        /* Black background with opacity */
        z-index: 2;
        /* Specify a stack order in case you're using a different order for other elements */
        cursor: pointer;
        /* Add a pointer on hover */
    }
</style>
<div class="authincation h-100" style="background-image: url('/assets2/images/regimage.jpg'); background-size: cover;">
    <div class="" id="overlay">
        <div class="container d-flex w-100 h-100 justify-content-center h-100 align-items-center">
            <div class="row justify-content-center w-100 align-items-start">
                <div class="col-md-6"></div>
                <div class="col-md-6 ">
                    <div class="authincation-content" style="background-color: #0b5cab !important;">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4 text-white"><?= lang("App.login_title_forgot_password") ?></h4>
                                    <?= formAlert() ?>
                                    <form action="<?= site_url("integration/reset_password") ?>" id="sendForm" method="post">
                                        <?= csrf_field() ?>
                                        <div class="form-group">
                                            <label><strong><?= lang("App.login_email") ?></strong></label>
                                            <input type="email" name="email" id="email" placeholder="<?= lang("App.login_email_ph") ?>" class="form-control" value="">
                                        </div>
                                        <div class="w-80">
                                            <?php if ($settings['captcha_recovery'] ?? false) : ?>
                                                <?php if ($settings['captcha_gateway'] == 'recaptcha') : ?>
                                                    <div class="text-center mt-2">
                                                        <div class="g-recaptcha" style="display: inline-block" data-sitekey="<?= $settings['captcha_site_key'] ?? '' ?>"></div>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if ($settings['captcha_gateway'] == 'hcaptcha') : ?>
                                                    <div class="text-center mt-2">
                                                        <div class="h-captcha" style="display: inline-block" data-sitekey="<?= $settings['captcha_site_key'] ?? '' ?>"></div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                        <div class="text-center">
                                            <button type="button" class="btn btn-primary btn-block" style="background: #e88015;border: 1px solid #e88015;" onclick="load()"><?= lang("App.login_request") ?></button>
                                        </div>
                                        <div class="text-center mt-1">
                                            <button type="button" class="btn btn-dark btn-block" onclick="window.location.href = '<?= site_url("login") ?>';"><?= lang("App.login_come_back") ?></button>
                                        </div>
                                        <p class="text-primary" id="msg" style="display: none;"><i class="fas fa-spinner fa-pulse"></i> <?= lang("App.login_wait") ?></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>