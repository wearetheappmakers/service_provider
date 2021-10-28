<?php
$edit = $data['edit'];
$readonly ='';
$categories_select = $data['categories_select'];
?>
<div class="kt-portlet__body">
    <div class="form-group row">
        <div class="col-lg-4">
            <label>Name:</label>
            <input type="text" class="form-control" placeholder="Enter name" name="name" id="name" value="<?php echo e($edit->name); ?>" required <?php echo e($readonly); ?>>
        </div>
        <div class="col-lg-4">
            <label>Parent Id(If want to add sub-category):</label>
            <select  class="form-control"  name="parent_id"  id="parent_id"  <?php echo e($readonly); ?>>
                <option value="">Select Parent Category</option>
            <?php $__currentLoopData = $categories_select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <option value="<?php echo e($k); ?>" <?php if($k == $edit->parent_id): ?> selected="selected" <?php endif; ?>><?php echo e(html_entity_decode($c)); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
       
    </div>
    <div class="form-group row">
        <div class="col-lg-4">
            <label>Description:</label>
            <textarea class="form-control"  <?php echo e($readonly); ?> placeholder="Enter description" name="description"><?php echo e($edit->description); ?></textarea>
        </div>
        <div class="col-lg-4">
            <label>Image:</label>
            <input type="file" name="banner_image">
        </div>
        <div class="col-lg-4">
            <?php if($edit->banner_image): ?>
                <div class="image_layer">
                    <div class="image_div">
                        <a target="_blank" href="<?php echo e(url('storage/uploads/category/'.$edit->banner_image)); ?>" rel="gallery" class="fancybox" title="">
                            <img src="<?php echo e(url('storage/uploads/category/Tiny/'.$edit->banner_image)); ?>" class="img-thumbnail" alt="<?php echo e($edit->banner_image); ?>" />
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <!-- <div class="form-group row">
        <div class="col-lg-4">
            <label>Image:</label>
            <input type="file" class="form-control" placeholder="Enter image" name="image">
        </div>
        <div class="col-lg-4">
            <label>Banner Image:</label>
            <input type="file" class="form-control" placeholder="Enter image" name="banner_image">
        </div>
    </div> -->
    <!-- <div class="form-group row">
        <div class="col-lg-4">
            <?php if($edit->backend_image): ?>
                <div class="image_layer">
                    <div class="image_div">
                        <a target="_blank"  href="<?php echo e(url('storage/uploads/category/'.$edit->backend_image)); ?>" rel="gallery" class="fancybox" title="">
                            <img src="<?php echo e(url('storage/uploads/category/Tiny/'.$edit->backend_image)); ?>" class="img-thumbnail" alt="<?php echo e($edit->name); ?>" />
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-lg-4">
            <?php if($edit->backend_banner_image): ?>
                <div class="image_layer">
                    <div class="image_div">
                        <a target="_blank" href="<?php echo e(url('storage/uploads/category/'.$edit->backend_banner_image)); ?>" rel="gallery" class="fancybox" title="">
                            <img src="<?php echo e(url('storage/uploads/category/Tiny/'.$edit->backend_banner_image)); ?>" class="img-thumbnail" alt="<?php echo e($edit->name); ?>" />
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div> -->
    <?php echo $__env->make('admin.layout.status_checkbox',array('data' => $edit->status), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<?php $__env->startPush('scripts'); ?>
<script>
	// $(document).ready(function() {
    //     $('.delete-record').add
    //     $(document).on('click', '.delete-record',function() {
    //         $(this).find('.la-trash').
    //     });
    // });
</script>
<?php $__env->stopPush(); ?>

<?php /**PATH D:\rohit\service_provider\service_provider\resources\views/adminseller/category/edit.blade.php ENDPATH**/ ?>