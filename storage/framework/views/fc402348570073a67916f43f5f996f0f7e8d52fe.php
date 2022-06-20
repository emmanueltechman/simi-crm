<?php $count = Auth::user()->newThreadsCount(); ?>
<?php if($count > 0): ?>
    <span class="label label-danger"><?php echo e($count); ?></span>
<?php endif; ?>
<?php /**PATH D:\server8\htdocs\rose_5\5.files_to_upload\resources\views/focus/messenger/unread-count.blade.php ENDPATH**/ ?>