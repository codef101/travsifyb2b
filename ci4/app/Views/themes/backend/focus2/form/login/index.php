<style>
    #overlay{
        position: fixed; /* Sit on top of the page content */
        width: 100%; /* Full width (cover the whole page) */
        height: 100%; /* Full height (cover the whole page) */
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0,0,0,0.5); /* Black background with opacity */
        z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
        cursor: pointer; /* Add a pointer on hover */
    }
</style>
<div class="authincation h-100" style="background-image: url('/assets2/images/regimage.jpg'); background-size: cover;">
    <div class="" id="overlay">
        <div class="container d-flex w-100 h-100 justify-content-center align-items-center">
            <div class="row justify-content-center align-items-start">
                <div class="d-none d-md-block col-md-6 pt-5">
                    <h1 class="text-white mx-3">SELL FLIGHTS & HOTELS GLOBALLY AT YOUR OWN RATE WITH FREE API</h1>
                    <p class="fs-3 m-3">Sell flights and hotels globally from over 700+ NDC and low cost airlines and over 1.5m hotels with free API and at your own rate. Make revenue unlimitedly with just a company Incorporation.</p>
                </div>
                <div class="col-md-6 ">
                    <div class="authincation-content" style="background-color: #0b5cab !important;">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <a href="<?= site_url('login'); ?>" class="justify-content-center mb-4"></a>
                                    <!-- <h4 class="text-center mb-2">
                                        <img src="<?= site_url('themes/focus2/images/logo-text.png') ?>" alt=""><br>
                                    </h4> -->
                                    <h4 class="text-light mb-1">
                                        <?= lang("App.login_title") ?>
                                    </h4>
                                    <div class="row mb-4">
                                        <div class="col-xl-12 text-center">
                                            <?php foreach ($oauth ?? [] as $item) : ?>
                                                <a href="<?= site_url('oauth/' . $item['provider']); ?>" class="btn <?= $item['btn_class'] ?> mt-1 mr-1"><i class="<?= $item['icon_class'] ?> <?= $item['show_text'] ? 'mr-2' : 'fa-2x' ?> "></i><?= $item['show_text'] ? $item['btn_text'] : '' ?></a>
                                            <?php endforeach; ?>
                                        </div><i class="fa-2x"></i>
                                    </div>
                                    <form action="<?= site_url('login/authenticate'); ?>" method="post">
                                        <?= csrf_field() ?>
                                        <div class="form-group">
                                            <label><strong><?= lang("App.login_email") ?></strong></label>
                                            <input type="email" id="email" name="email" placeholder="<?= lang("App.login_email_ph") ?>" class="form-control" value="">
                                        </div>
                                        <div class="form-group">
                                            <label><strong><?= lang("App.login_password") ?></strong></label>
                                            <div class="input-group">
                                                <input type="password" id="password" name="password" placeholder="<?= lang("App.login_password_ph") ?>" class="form-control" value="">
                                                <div class="input-group-append">
                                                    <button style="background: #e88015;border: 1px solid #e88015;" type="button" class="btn btn-dark" id="btn_pass" onclick="pass()"><i class="far fa-eye"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <?php if ($settings['remember_me'] ?? false) : ?>
                                                    <div class="custom-control custom-switch ml-2">
                                                        <input type="checkbox" id="remember" name="remember" class="custom-control-input">
                                                        <label for="remember" class="custom-control-label"><?= lang("App.login_remember_me") ?></label>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <?php if ($settings['forgot_password'] ?? false) : ?>
                                                    <a href="<?= site_url('login/forgot_password'); ?>"><?= lang("App.login_forgot_password") ?></a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button style="background: #e88015;border: 1px solid #e88015;" type="submit" class="btn btn-access btn-primary btn-block"><?= lang("App.login_access") ?></button>
                                        </div>
                                        <?php if ($settings['captcha_login'] ?? false) : ?>
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
                                    </form>

                                    <?php if ($settings['registration'] ?? false) : ?>
                                        <h6 class="pt-4 text-white" style="color: #e88015 !important;"><?= lang("App.login_signup_desc") ?> <a href="<?= site_url('login/signup'); ?>" class="text-white"><?= lang("App.login_signup") ?></a></h6>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>