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
            <div class="col-lg-6 col-sm-12">
                <div class="card">
                    <div class="stat-widget-one card-body">
                        <div class="d-inline-block">
                            <i class="fas fa-money-bill text-pink fa-3x"></i>
                        </div>
                        <div class="stat-content d-inline-block">
                            <div class="stat-text text-pink"><?=strtoupper('current balance')?></div>
                            <div class="stat-digit"><small><?=$balance['currency']?></small> <strong><?=number_format($balance['amount'],2,'.',',')?></strong></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <a href="#" data-toggle="modal" data-target="#modalPay">
                    <div class="card">
                        <div class="stat-widget-one card-body">
                            <div class="d-inline-block">
                                <i class="fas fa-dollar-sign text-pink fa-3x"></i>
                            </div>
                            <div class="stat-content d-inline-block">
                                <div class="stat-text text-pink">Top-up Balance</div>
                                <div class="align-right stat-digit">Click here to add Funds &nbsp;&nbsp;&nbsp;<i class="fas fa-arrow-right text-pink"></i></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header row">
                        <div class="col-sm-6">
                            <h4 class="card-title">Transactions</h4>
                        </div>
                        <div class="col-sm-6 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                            <a href="<?= $btn_add['route']??'#'?>" class="<?= $btn_add['class']??''?>">
                                <i class="<?= $btn_add['icon']??'' ?>"></i> <?= $btn_add['title']??'' ?>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <?php
                            use CodeIgniter\View\Table;
                            $table = $table??new Table();
                            echo $table->generate($grid??[]);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
    <div class="modal fade" id="modalPay">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Top Up Balance</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="modal-body row">
                    <div class="col-sm-12 justify-content-sm-center mt-2 mt-sm-0 d-flex">
                        <label>Select a payment Method</label>
                        <select id="pay_meth" class="form-control">
                                <?= $pay['meth']?>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
                    <button type="button" class="btn btn-primary" onclick="start_pay();"><i class="fas fa-money-bill"></i> Pay</button>
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
<script>
    $(document).ready(function () {
        "use strict";
        let data = [
            {
                targets: 7,
                render: $.fn.dataTable.render.moment('YYYY-MM-DD HH:mm:ss','<?=momentDateTimeJS()?>')
            },
            {
                targets: 4,
                render: $.fn.dataTable.render.number(',','.',2)
            },
            {
                targets: 5,
                render: $.fn.dataTable.render.number(',','.',2)
            },
            {
                targets: 2,
                render: function (data, type, row, meta) {
                            var badge;
                            if (data === 'credit') {
                                badge = 'badge-success';
                            }else if (data === 'debit') {
                                badge = 'badge-danger';
                            }else{
                                badge = 'badge-warning';
                            }
                            return '<span class="badge ' + badge + '">' + data + '</span>';
                        }
            }
        ];
        let order = [[0, "asc"]];
        let translate = '/themes/focus2/vendor/datatables/locales/<?=langJS()?>.json';
        let button = ["<?=lang("App.global_copy")?>","<?=lang("App.global_print")?>","<?=lang("App.global_excel")?>","<?=lang("App.global_pdf")?>"];
        loadDataTable('table-grid', '', translate, true, true, order, data, button);
    });
    
    function start_pay(){
        var e = document.getElementById("pay_meth");
        var value = e.value;
        window.location.href = '/pay/now/'+value;
    }
</script>
<?= sweetAlert() ?> 