<!--Content Body-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4><i class="<?= $title['icon']??'' ?>"></i> <?= $title['module']??'' ?></h4>
                    <span class="ml-1"><?= $title['page']??'' ?></span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <?php foreach ($breadcrumb??[] as $item) : ?>
                        <?php if (!$item['active']) : ?>
                            <li class="breadcrumb-item"><a href="<?= $item['route'] ?>"><?= $item['title'] ?></a></li>
                        <?php else : ?>
                            <li class="breadcrumb-item active"><?= $item['title'] ?></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header row">
                        <div class="col-sm-6">
                            <h4 class="card-title">Pay With Stripe</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form id='checkout-form' method='post' action="/pay/stripe">   
                            <?= csrf_field() ?>
                            <input type='hidden' name='stripeToken' id='stripe-token-id'>                              
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name" class="text-dark">Enter amount in USD</label>
                                        <input type="number" min="100" max="10000" name="amount" id="amount" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="card-element" class="text-dark">Card details</label>
                                        <br>
                                        <div id="card-element" class="form-control" ></div>
                                    </div>
                                </div>
                            </div>
                            <button id="pay-btn" onclick="createToken()" class="btn btn-primary mr-1" type="button">
                                <i class="fas fa-money-bill"></i> Top-Up Balance
                            </button>
                        <form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://js.stripe.com/v3/"></script>
<script>
    var stripe = Stripe("<?= $stripe['key'] ?>");
    var elements = stripe.elements();
    var cardElement = elements.create('card');
    cardElement.mount('#card-element');

    function createToken() {
        document.getElementById("pay-btn").disabled = true;
        stripe.createToken(cardElement).then(function(result) {

               
            if(typeof result.error != 'undefined') {
                document.getElementById("pay-btn").disabled = false;
                alert(result.error.message);
            }

            // creating token success
            if(typeof result.token != 'undefined') {
                document.getElementById("stripe-token-id").value = result.token.id;
                document.getElementById('checkout-form').submit();
            }
        });
    }
</script>
<!-- Required vendors -->
<script src="/themes/focus2/vendor/global/global.min.js"></script>
<script src="/themes/focus2/js/quixnav-init.js"></script>
<script src="/themes/focus2/js/custom.min.js"></script>
<!-- Alert -->
<script src="/themes/focus2/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
<script src="/themes/focus2/vendor/toastr/js/toastr.min.js"></script>
<!-- Custom -->
<script src="/assets/js/main.js"></script>
<?= sweetAlert() ?> 