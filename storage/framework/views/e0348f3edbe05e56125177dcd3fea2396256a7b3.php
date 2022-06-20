<?php $__env->startSection('template_title'); ?>
    <?php echo e(trans('installer_messages.final.templateTitle')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    <i class="fa fa-flag-checkered fa-fw" aria-hidden="true"></i>
    <?php echo e(trans('installer_messages.final.title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('container'); ?>


    <h5 style="color: green" class="text-center">
        <i class="status fa fa-check-circle-o"> </i> <span
        >Congratulation! You have successfully installed.</span>

    </h5>


    <p class="text-center">
        <strong><strong class="text-danger">Note</strong>: Please read the help/troubleshoot_guide , public tickets on
            the helpdesk before
            sending any support request.</strong>
    </p>
    <p class="text-center">
        <strong><span style="color: green;">Tip</span>: Please check the .env to change configuration and set email
            config. If you are not able to see it, enable the show hidden dot(.) files in your file manager's
            settings</strong>
    </p>

    <p class="text-center">
        <strong><strong class="text-danger" style="color: purple;">Info: </strong><span style="color: red;" ><?php echo e($ln); ?></span></strong>
    </p>
    <a class="go-to-login-page" href="<?php echo e(url('/')); ?>">
        <div class="text-center">
            <div style="font-size: 100px;"><i class="fa fa-desktop"></i></div>
            <div>GO TO YOUR LOGIN PAGE</div>
        </div>
    </a>
    <div class="text-center" style="margin: 15px 0 15px 60px; font-size: 16px">
        <p>
            Login ID is your entered email and default password is 123456.
        </p>
    </div>


    <div class="buttons">
        <a href="<?php echo e(url('/')); ?>" class="button"><?php echo e(trans('installer_messages.final.exit')); ?></a>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('vendor.installer.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server8\htdocs\rose_5\5.files_to_upload\resources\views/vendor/installer/finished.blade.php ENDPATH**/ ?>