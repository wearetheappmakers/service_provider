
<input type="checkbox" id="status-<?php echo e($id); ?>" href="status-<?php echo e($status); ?>" class="change_status" <?php if(Auth::guard('vendor')->check()): ?> disabled <?php endif; ?> <?php if($status==1): ?>? checked <?php endif; ?> value="<?php echo e($id); ?>"><?php /**PATH C:\xampp\htdocs\service_provider\resources\views/provider/layout/singlecheckbox.blade.php ENDPATH**/ ?>