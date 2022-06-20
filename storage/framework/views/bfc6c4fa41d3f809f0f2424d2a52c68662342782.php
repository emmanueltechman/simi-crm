

<?php $__env->startSection('template_title'); ?>
    <?php echo e(trans('installer_messages.permissions.templateTitle')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    <i class="fa fa-key fa-fw" aria-hidden="true"></i>
    <?php echo e(trans('installer_messages.permissions.title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('container'); ?>

    <ul class="list">
        <?php $__currentLoopData = $permissions['permissions']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list__item list__item--permissions <?php echo e($permission['isSet'] ? 'success' : 'error'); ?>">
                <?php echo e($permission['folder']); ?>

                <span>
                <?php
                    $flag=true;
                        if($permission['isSet']) {
            echo '<i class="fa fa-fw fa-check-circle-o"></i>'.$permission['permission'];
        } else {
                            $flag=false;
            echo '<i class="fa fa-fw fa-exclamation-circle"></i>'.$permission['permission'];
        }
                ?>
            </span>
            </li>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php if(!$flag): ?>
            <li class="alert alert-danger"> Please set 775 for all sub-directories of storage/app/public manually to
                avoid file upload error.
            </li> <?php endif; ?>
    </ul>

    <?php if( ! isset($permissions['errors'])): ?>
        <div class="buttons">
            <a href="<?php echo e(route('LaravelInstaller::environmentWizard')); ?>" class="button">
                <?php echo e(trans('installer_messages.permissions.next')); ?>

                <i class="fa fa-angle-right fa-fw" aria-hidden="true"></i>
            </a>
        </div>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('vendor.installer.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server8\htdocs\rose_5\5.files_to_upload\resources\views/vendor/installer/permissions.blade.php ENDPATH**/ ?>