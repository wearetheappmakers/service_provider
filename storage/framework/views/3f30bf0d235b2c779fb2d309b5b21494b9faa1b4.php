<?php
$edit = $data['edit'];
$categories_select = $data['categories_select'];
$roles_select = $data['roles_select'];
?>
<div class="kt-portlet__body">
	<div class="form-group row">
		<div class="col-lg-4">
			<label>Name:<span class="requied_field">*</span></label>
			<input type="text" class="form-control" placeholder="Enter name" name="name" value="<?php echo e($edit->name); ?>" id="fname" required autocomplete="off">
		</div>
		<div class="col-lg-4">
			<label>Contact No:<span class="requied_field">*</span></label>
			<input type="text" class="form-control" placeholder="Enter contact no" onkeypress="return isNumber(event)" maxlength="10" name="number" id="number" value="<?php echo e($edit->number); ?>" required autocomplete="off">
		</div>
		<div class="col-lg-4">
			<label>Gender:</label>
			<select class="form-control" name="gender">
				<option value="1" <?php if($edit->gender == 1): ?> selected <?php endif; ?>>Male</option>
				<option value="2" <?php if($edit->gender == 2): ?> selected <?php endif; ?>>Female</option>
				<option value="3" <?php if($edit->gender == 3): ?> selected <?php endif; ?>>Other</option>
			</select>
		</div>
	</div>
	<div class="form-group row">
		
		<div class="col-lg-4">
			<label>Birth Date:<span class="requied_field">*</span></label>
			<input type="date" class="form-control" placeholder="Enter Birth Date" name="b_date" value="<?php echo e($edit->b_date); ?>"  id="b_date" required autocomplete="off">
		</div>
		
		<div class="col-lg-4">

			<label>Password:<span class="requied_field">*</span></label>
			<input type="password" class="form-control" placeholder="Enter password" value="<?php echo e($edit->spassword); ?>" name="spassword" id="spassword" required autocomplete="off">
		</div>

		<div class="col-lg-4">
			<label>Categories:<span class="requied_field">*</span></label>
			<select class="form-control selectpicker" name="category_id[]" multiple required="">
				<option value="">Select Categories</option>
				<?php $__currentLoopData = $categories_select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option value="<?php echo e($k); ?>" <?php if(in_array($k,$edit->category_id)): ?> selected <?php endif; ?>><?php echo e(html_entity_decode($c)); ?></option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
		</div>
	</div>
	<div class="form-group row">

		 <div class="col-lg-4">
            <label>Roles:<span class="requied_field">*</span></label>
            <select class="form-control selectpicker" name="role_id[]" multiple required="">
                <option value="">Select Permissions</option>
                <?php $__currentLoopData = $roles_select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($c->id); ?>" <?php if(in_array($c->id,$edit->role_id)): ?> selected <?php endif; ?>><?php echo e($c->title); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
		<div class="col-lg-4">
			<label>Status:</label>
			<select class="form-control" name="status">
				<option value="1" <?php if($edit->status == 1): ?> selected <?php endif; ?>>Active</option>
				<option value="0" <?php if($edit->status == 0): ?> selected <?php endif; ?>>Inactive</option>
			</select>
		</div>
	</div>
	<?php echo $__env->make('admin.layout.status_checkbox',array('data' => $edit->status), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<?php /**PATH C:\xampp\htdocs\service_provider\resources\views/adminseller/provider/edit.blade.php ENDPATH**/ ?>