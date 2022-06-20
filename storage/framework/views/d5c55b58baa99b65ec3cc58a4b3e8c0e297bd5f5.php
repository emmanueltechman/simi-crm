<div class="">
    <div class="btn-group" role="group">
        <a href="<?php echo e(route( 'biller.messages' )); ?>" class="btn btn-info btn-lighten-2 round"><i
                    class="fa fa-list-alt"></i> <?php echo e(trans( 'general.messages' )); ?>

            ( <?php echo $__env->make('focus.messenger.unread-count', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>)</a>


        <a href="<?php echo e(route('biller.messages.create')); ?>"
           class="btn btn-pink  btn-lighten-3 round"><i
                    class="fa fa-plus-circle"></i> <?php echo e(trans( 'general.new_message' )); ?></a>

    </div>
</div>
<div class="clearfix"></div>

<?php /**PATH D:\server8\htdocs\rose_5\5.files_to_upload\resources\views/focus/messenger/partials/menu.blade.php ENDPATH**/ ?>