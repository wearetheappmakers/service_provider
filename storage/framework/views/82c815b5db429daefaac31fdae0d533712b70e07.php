<?php
$edit = $data['edit'];
$service_select = $data['service_select'];
$customer_select = $data['customer_select'];
$provider_select = $data['provider_select'];
$bookingstatus_select = $data['bookingstatus_select'];
?>
<div class="kt-portlet__body">
   <!--  <div class="form-group row">
        <div class="col-lg-4">
            <label>Content:<span class="requied_field">*</span></label>
            <input type="text" class="form-control" placeholder="Enter content" name="content" id="content" value="<?php echo e($edit->content); ?>" required>
        </div>
        <div class="col-lg-4">
            <label>Rating:</label>
            <input type="text" class="form-control" placeholder="Enter rating" name="rating" id="rating" value="<?php echo e($edit->rating); ?>" required>
        </div>

    </div> -->
    <div class="form-group row">

        <div class="col-lg-4">
            <label>Customer:<span class="requied_field">*</span></label>
            <select  class="form-control"  name="customer_id"  id="customer_id" >
                <option value="">Select Customer</option>
                <?php $__currentLoopData = $customer_select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <option value="<?php echo e($k); ?>" <?php if($c->id == $edit->customer_id): ?> selected="selected" <?php endif; ?>><?php echo e($c->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

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
            <label>Provider:<span class="requied_field">*</span></label>
            <select  class="form-control"  name="provider_id"  id="provider_id">
                <option value="">Select Provider</option>
                <?php $__currentLoopData = $provider_select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <option value="<?php echo e($c->id); ?>" <?php if($c->id == $edit->provider_id): ?> selected="selected" <?php endif; ?>><?php echo e($c->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        
    </div>
    <div class="form-group row">

         <div class="col-lg-4">
            <label>Booking Status:<span class="requied_field">*</span></label>
            <select  class="form-control"  name="status_id"  id="status_id">
                <option value="">Select Booking Status</option>
                <?php $__currentLoopData = $bookingstatus_select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <option value="<?php echo e($c->id); ?>" <?php if($c->id == $edit->status_id): ?> selected="selected" <?php endif; ?>><?php echo e($c->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="col-lg-4">
            <label>Booking At:<span class="requied_field">*</span></label>
            <input type="date" class="form-control"  name="booking_at" value="<?php echo e($edit->booking_at); ?>" id="booking_at">
        </div>

        <div class="col-lg-4">
            <label>Notes:</label>
            <input type="text" class="form-control"  name="notes" value="<?php echo e($edit->notes); ?>" id="notes">
        </div>


    </div> 

    <div class="form-group row">

        <div class="col-lg-4">
            <label>Address Name:</label>
            <textarea class="form-control" placeholder="Enter address name" name="address1" id="address1"><?php echo e($edit->address1); ?></textarea>
        </div>

        <div class="col-lg-4">
            <label>Address Details:<span class="requied_field">*</span></label>
            <textarea class="form-control" placeholder="Enter address details" name="address2" id="address2"><?php echo e($edit->address2); ?></textarea>
        </div>

         <div class="col-lg-4">
            <label>Total:<span class="requied_field">*</span></label>
            <input type="text" class="form-control" value="<?php echo e($edit->total); ?>" placeholder="Enter total" name="total" required>
        </div>

    </div>

    <?php echo $__env->make('provider.layout.status_cheackbox',array('data' => $edit->status), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div><?php /**PATH C:\xampp\htdocs\service_provider\resources\views/provider/providerseller/bookings/edit.blade.php ENDPATH**/ ?>