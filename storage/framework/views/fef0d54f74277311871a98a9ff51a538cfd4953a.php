<?php
$edit = $data['edit'];
$service_select = $data['service_select'];
$customer_select = $data['customer_select'];
?>
<div class="kt-portlet__body">
    <div class="form-group row">
        <div class="col-lg-4">
            <label>Content:<span class="requied_field">*</span></label>
            <input type="text" class="form-control" placeholder="Enter content" name="content" id="content" value="<?php echo e($edit->content); ?>" required>
        </div>
        <div class="col-lg-4">
            <label>Rating:</label>
            <input type="text" class="form-control" placeholder="Enter rating" name="rating" id="rating" value="<?php echo e($edit->rating); ?>" required>
        </div>

    </div>
    <div class="form-group row">
        <div class="col-lg-4">
            <label>Service:<span class="requied_field">*</span></label>
            <select  class="form-control"  name="service_id"  id="service_id">
                <option value="">Select Service</option>
                <?php $__currentLoopData = $service_select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <option value="<?php echo e($c->id); ?>" <?php if($c->id == $edit->service_id): ?> selected="selected" <?php endif; ?>><?php echo e($c->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        

        <div class="col-lg-4">
            <label>Customer:<span class="requied_field">*</span></label>
            <select  class="form-control"  name="customer_id"  id="customer_id" >
                <option value="">Select Customer</option>
                <?php $__currentLoopData = $customer_select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <option value="<?php echo e($k); ?>" <?php if($c->id == $edit->customer_id): ?> selected="selected" <?php endif; ?>><?php echo e($c->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

    </div>

    <?php echo $__env->make('admin.layout.status_checkbox',array('data' => $edit->status), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div><?php /**PATH C:\xampp\htdocs\service_provider\resources\views/adminseller/review/edit.blade.php ENDPATH**/ ?>