<?php $__env->startSection('title', Auth::user()->newThreadsCount().' '.trans('general.messages').' | '.trans('general.message_management')); ?>
<?php $__env->startSection('content'); ?>

    <div class="">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h4 class="content-header-title mb-0"><?php echo e(trans('general.messages')); ?></h4>

                </div>
                <div class="content-header-right col-md-6 col-12">
                    <div class="media float-right">

                        <div class="media-body media-right text-right">
                            <?php echo $__env->make('focus.messenger.partials.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-content">

                                <div class="card-body">


                                    <?php echo $__env->make('focus.messenger.partials.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                    <?php echo $__env->renderEach('focus.messenger.partials.thread', $threads, 'thread', 'focus.messenger.partials.no-threads'); ?>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('core.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server8\htdocs\rose_5\5.files_to_upload\resources\views/focus/messenger/index.blade.php ENDPATH**/ ?>