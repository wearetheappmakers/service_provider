<div class="kt-portlet__body">
    <div class="form-group row">
        <div class="col-lg-4">
            <label>Name:<span class="requied_field">*</span></label>
            <input type="text" class="form-control" placeholder="Enter name" name="name" id="name" required>
        </div>
        <div class="col-lg-4">
            <label>Parent Id(If want to add sub-category):</label>
            <select  class="form-control"  name="parent_id"  id="parent_id">
                <option value="">Select Parent Category</option>
            <?php $__currentLoopData = $categories_select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <option value="<?php echo e($k); ?>"><?php echo e(html_entity_decode($c)); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
      
    </div>
    <div class="form-group row">
        <div class="col-lg-4">
            <label>Description:</label>
            <textarea class="form-control" placeholder="Enter description" name="description"></textarea>
        </div>
        <div class="col-lg-4">
            <label>Image:</label>
            <input type="file" name="banner_image">
        </div>
    </div>
    <?php echo $__env->make('admin.layout.status_checkbox',array('data' => ""), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div><?php /**PATH D:\rohit\service_provider\service_provider\resources\views/adminseller/category/create.blade.php ENDPATH**/ ?>