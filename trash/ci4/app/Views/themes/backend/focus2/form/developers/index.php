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
            <div class="col-lg-12 col-sm-12">
                
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header row">
                        <div class="col-sm-6">
                            <h4 class="card-title">Access Token</h4>
                        </div>
                        <div class="col-sm-6 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                            <a href="<?= $btn_regen['route']??'#'?>" class="<?= $btn_regen['class']??''?>">
                                <i class="<?= $btn_regen['icon']??'' ?>"></i> <?= $btn_regen['title']??'' ?>
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
                targets: 3,
                render: $.fn.dataTable.render.moment('YYYY-MM-DD HH:mm:ss','<?=momentDateTimeJS()?>')
            },
            {
                targets: 1,
                render: function (data, type, row, meta) {
                            var badge;
                            if (data === 'live') {
                                badge = 'badge-success';
                            }else{
                                badge = 'badge-warning';
                            }
                            let text = data.toUpperCase();
                            return '<span class="badge ' + badge + '">' + text + '</span>';
                        }
            }
        ];
        let order = [[0, "asc"]];
        let translate = '/themes/focus2/vendor/datatables/locales/<?=langJS()?>.json';
        let button = [];
        loadDataTable('table-grid', '', translate, false, true, order, data, button);
    });
    function delete_key(id){
        "use strict";
        swal({
            title: "Are you sure you want to delete?",
            text: "You will not be able to use this key to access Travsify API again!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonColor: "#f34141",
            confirmButtonText: "Yes, Delete!",
            cancelButtonText: "Cancel",
            closeOnConfirm: !1
        }).then(function(isConfirm) {
            console.log(isConfirm);
            if (isConfirm.value) {
                window.location.href = '/developers/delete/'+id;
            }
        })
    }
</script>
<?= sweetAlert() ?> 