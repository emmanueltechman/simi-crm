<?php $__env->startSection('content'); ?>
    <div class="content-wrapper ">

        <div class="content-body">
            <section class="flexbox-container mt-5">
                <div class="col-12 d-flex align-items-center justify-content-center card">
                    <div class="col-lg-4 col-md-8 col-10">
                        <div class="card-header bg-transparent border-5">
                            <h1 class="error-code text-center mt-5 mb-5 danger">Unexpected Error!</h1>
                            <p class="text-center"><?php echo $code; ?></p>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('core.layouts.public_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server8\htdocs\rose_5\5.files_to_upload\resources\views/errors/1303.blade.php ENDPATH**/ ?>