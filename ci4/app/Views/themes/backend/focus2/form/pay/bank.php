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
                            <h3 class="card-title">Pay Via Local Bank</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm-12">
                                <h5><strong>NGN Account</strong></h5>
                                <h5><small>Bank Name:</small> UBA</h5>
                                <h5><small>Account Number:</small> 1025862862</h5>
                                <h5><small>Account Name:</small> Travsify Global Inclusive Limited</h5>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-12 col-sm-12">
                                Once you've sent your bank transfer, please send us an email at <?= $admin['email'] ?> to let us know. This will help us to process your payment as quickly as possible.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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