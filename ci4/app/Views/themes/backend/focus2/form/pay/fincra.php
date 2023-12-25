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
                        <form id="payment-form">   
                            <?= csrf_field() ?>
                            <input type='hidden' name='stripeToken' id='stripe-token-id'>                              
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name" class="text-dark">Enter amount in USD</label>
                                        <input type="number" name="amount" id="amount" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <button id="pay-btn" onclick="payFincra(e)" class="btn btn-primary mr-1" type="submit">
                                <i class="fas fa-money-bill"></i> Top-Up Balance
                            </button>
                        <form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/@fincra-engineering/checkout@2.2.0/dist/inline.min.js"></script>
<script>
const paymentForm = document.getElementById('payment-form');
paymentForm.addEventListener("submit", payFincra, false);
function payFincra(e) {
 e.preventDefault();
   Fincra.initialize({
	 key: "<?= $fincra['key'] ?>",
	 amount: Math.round(document.getElementById("amount").value),
	 currency: "NGN",
	 customer: {
		 name: <?= $fincra['name'] ?>,
		 email: <?= $fincra['email'] ?>
	   },
	feeBearer: "customer",

	 onClose: function () {
	    //alert("Transaction was not completed, window closed.");
		location.href = "<?= $fincra['invoice_url'] ?>";
	 },
	 onSuccess: function (data) {
	    const reference = data.reference;
		//alert("Payment complete! Reference: " + reference + " Invoice No: " + "");
		location.href = "<?= $fincra['balance_url'] ?>/"+reference;
	 }, 
   });
 }
</script>
<!-- Required vendors -->
<script src="/themes/focus2/vendor/global/global.min.js"></script>
<script src="/themes/focus2/js/quixnav-init.js"></script>
<script src="/themes/focus2/js/custom.min.js"></script>
<!-- Datatable -->
<script src="/themes/focus2/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="/themes/focus2/vendor/pickers/daterange/moment.min.js"></script>
<script src="/themes/focus2/vendor/datatables/js/dataTables.datetime.js"></script>
<script src="/themes/focus2/vendor/datatables/js/dataTables.buttons.min.js"></script>
<script src="/themes/focus2/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
<script src="/themes/focus2/vendor/datatables/js/jszip.min.js"></script>
<script src="/themes/focus2/vendor/datatables/js/pdfmake.min.js"></script>
<script src="/themes/focus2/vendor/datatables/js/vfs_fonts.js"></script>
<script src="/themes/focus2/vendor/datatables/js/buttons.html5.min.js"></script>
<script src="/themes/focus2/vendor/datatables/js/buttons.print.min.js"></script>
<script src="/themes/focus2/vendor/datatables/js/buttons.colVis.min.js"></script>
<!-- Alert -->
<script src="/themes/focus2/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
<script src="/themes/focus2/vendor/toastr/js/toastr.min.js"></script>
<!-- Custom -->
<script src="/assets/js/main.js"></script>
<?= sweetAlert() ?> 