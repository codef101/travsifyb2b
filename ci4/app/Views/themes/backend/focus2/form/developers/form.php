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
                    <div class="card-header">
                        <h4 class="card-title"><?= $title['page']??'' ?></h4>
                    </div>
                    <div class="card-body">
                        <?= formAlert() ?>
                        <form class="form" action="/developers/regenerate" method="post">
                            <?= csrf_field() ?>
                            <input type="hidden" name="mode" value="<?= (isset($obj)) ? $obj['mode'] : 'live' ?>">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name" class="text-dark">Name</label>
                                            <input type="text" name="name" id="name" class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions mt-2">
                                <a href="<?= $btn_return['route']??'#' ?>" class="<?= $btn_return['class']??''?>">
                                    <i class="<?= $btn_return['icon']??'' ?>"></i> <?= $btn_return['title']??'' ?>
                                </a>
                                <button type="submit" class="<?= $btn_submit['class']??''?>">
                                    <i class="<?= $btn_submit['icon']??'' ?>"></i> <?= $btn_submit['title']??'' ?>
                                </button>
                            </div>
                        </form>
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
<script src="/themes/focus2/vendor/select2/js/select2.full.min.js"></script>
<!-- Form -->
<script>
    $(document).ready(function () {
        "use strict";
        $('#name').focus();
    });
</script>