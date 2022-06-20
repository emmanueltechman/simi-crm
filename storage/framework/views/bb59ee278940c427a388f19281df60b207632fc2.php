<?php $__env->startSection('title', trans('general.new_message').' | '.trans('general.message_management')); ?>
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


                                    <h1><?php echo e(trans('general.new_message')); ?></h1>
                                    <form action="<?php echo e(route('biller.messages.store')); ?>" method="post">
                                        <?php echo e(csrf_field()); ?>

                                        <div class="col">
                                            <!-- Subject Form Input -->
                                            <div class="form-group">
                                                <label class="control-label"><?php echo e(trans('general.subject')); ?></label>
                                                <input type="text" class="form-control" name="subject"
                                                       placeholder="Subject"
                                                       value="<?php echo e(old('subject')); ?>">
                                            </div>

                                            <!-- Message Form Input -->
                                            <div class="form-group">
                                                <label class="control-label"><?php echo e(trans('general.message')); ?></label>
                                                <textarea name="message"
                                                          class="form-control"><?php echo e(old('message')); ?></textarea>
                                            </div>

                                            <?php if($users->count() > 0): ?>
                                                <div class="checkbox">
                                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <label title="<?php echo e($user->name); ?>" class="m-1"><input
                                                                    type="checkbox" name="recipients[]"
                                                                    value="<?php echo e($user->id); ?>"> <?php echo $user->name; ?></label>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                        <?php endif; ?>

                                        <!-- Submit Form Input -->
                                            <div class="form-group">

                                                <button type="submit" class="btn btn-success btn-min-width mr-1 mb-1"><i
                                                            class="fa fa-check"></i> <?php echo e(trans('general.send')); ?></button>
                                            </div>
                                        </div>
                                    </form>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('core.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server8\htdocs\rose_5\5.files_to_upload\resources\views/focus/messenger/create.blade.php ENDPATH**/ ?>