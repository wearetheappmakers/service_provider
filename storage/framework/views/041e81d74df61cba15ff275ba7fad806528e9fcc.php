<?php
$edit = $data['edit'];
$permissions_select = $data['permissions_select'];
?>
<div class="kt-portlet__body">
    <div class="form-group row">
       <div class="col-lg-4">
            <label>Key:<span class="requied_field">*</span></label>
            <input type="text" class="form-control" placeholder="Enter key" name="key" id="key" value="<?php echo e($edit->key); ?>" required>
        </div>

        <div class="col-lg-4">
            <label>Title:<span class="requied_field">*</span></label>
            <input type="text" class="form-control" placeholder="Enter Title" name="title" id="title" value="<?php echo e($edit->title); ?>" required>
        </div>

        <div class="col-lg-4">
            <label>Permissions:<span class="requied_field">*</span></label>
            <select class="form-control selectpicker" name="permissions_id[]" multiple required="">
                <option value="">Select Permissions</option>
                <?php $__currentLoopData = $permissions_select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($c->id); ?>" <?php if(in_array($c->id,$edit->permissions_id)): ?> selected <?php endif; ?>><?php echo e($c->title); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
    <?php echo $__env->make('admin.layout.status_checkbox',array('data' => $edit->status), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php /**PATH C:\xampp\htdocs\service_provider\resources\views/adminseller/role/edit.blade.php ENDPATH**/ ?>