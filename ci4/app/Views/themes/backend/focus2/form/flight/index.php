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
                            <h4 class="card-title"><?= $title['page']??'' ?></h4>
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
                targets: 6,
                render: $.fn.dataTable.render.moment('YYYY-MM-DD HH:mm:ss','<?=momentDateTimeJS()?>')
            },
            {
                targets: 4,
                render: $.fn.dataTable.render.number(',','.',2)
            },
            {
                targets: 2,
                render: function (data, type, row, meta) {
                            var badge;
                            if (data === 'confirmed') {
                                badge = 'badge-success';
                            }else if (data === 'pending') {
                                badge = 'badge-warning';
                            } else if (data === 'cancelled') {
                                badge = 'badge-danger';
                            }else{
                                badge = 'badge-info';
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
</script>
<?= sweetAlert() ?> 