<?php
$edit = $data['edit'];
$categories_select = $data['categories_select'];
$commisions = $data['commisions'];
?>
<div class="kt-portlet__body">
    <div class="form-group row">
        <div class="col-lg-4">
            <label>Name:<span class="requied_field">*</span></label>
            <input type="text" class="form-control" placeholder="Enter name" name="name" id="name" value="<?php echo e($edit->name); ?>" required>
        </div>
        <div class="col-lg-4">
            <label>Description:</label>
            <textarea class="form-control" placeholder="Enter description" name="description" id="description"><?php echo e($edit->description); ?></textarea>
        </div>
        <div class="col-lg-4">
            <label>Duration:<span class="requied_field">*</span></label>
            <input type="text" class="form-control" placeholder="Enter duration" name="duration" id="duration" value="<?php echo e($edit->duration); ?>" onkeypress="return isNumber(event)" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-4">
            <label>Price:<span class="requied_field">*</span></label>
            <input type="text" class="form-control" placeholder="Enter price" name="price" id="price" value="<?php echo e($edit->price); ?>" onkeypress="return isNumber(event)" required>
        </div>
        <div class="col-lg-4">
            <label>Category:<span class="requied_field">*</span></label>
           	<select  class="form-control"  name="category_id"  id="category_id" required="">
                <option value="">Select Category</option>
	            <?php $__currentLoopData = $categories_select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
	            	<option value="<?php echo e($k); ?>" <?php if($k == $edit->category_id): ?> selected="selected" <?php endif; ?>><?php echo e(html_entity_decode($c)); ?></option>
	            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="col-lg-4">
            <label>Commisions:</label>
           	<select  class="form-control"  name="commision_id"  id="commision_id">
                <option value="">Select Commisions</option>
	            <?php $__currentLoopData = $commisions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commision): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
	            	<option value="<?php echo e($commision->id); ?>" <?php if($commision->id == $edit->commision_id): ?> selected="selected" <?php endif; ?>><?php echo e($commision->name); ?> ( <?php echo e($commision->value); ?>)</option>
	            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-4">
            <label>Icon:</label>
            <input type="file" name="icon">
        </div>
        <div class="col-lg-4">
            <?php if($edit->icon): ?>
                <div class="image_layer">
                    <div class="image_div">
                        <a target="_blank" href="<?php echo e(url('storage/uploads/service/'.$edit->icon)); ?>" rel="gallery" class="fancybox" title="">
                            <img src="<?php echo e(url('storage/uploads/service/Tiny/'.$edit->icon)); ?>" class="img-thumbnail" alt="<?php echo e($edit->icon); ?>" />
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php echo $__env->make('admin.layout.status_checkbox',array('data' => $edit->status), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<?php /**PATH D:\rohit\service_provider\service_provider\resources\views/adminseller/service/edit.blade.php ENDPATH**/ ?>