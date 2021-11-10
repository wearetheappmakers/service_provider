<?php $__env->startSection('content'); ?>


<?php
$edit = $data['edit'];
$service_select = $data['service_select'];
$customer_select = $data['customer_select'];
?>

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    <br>

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

        <div class="row">

            <div class="col-lg-12">

                <div class="kt-portlet">

                    <div class="kt-portlet__head">

                        <div class="kt-portlet__head-label">

                            <h3 class="kt-portlet__head-title">

                             <?php echo e($title); ?>


                         </h3>

                     </div>

                 </div>

                 <form class="kt-form kt-form--label-right add_form" method="post" action="<?php echo e($url); ?>">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id" value="<?php echo e($edit->id); ?>">
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
                    <div class="form-group row">

                    </div>
                </div>

                <div class="kt-portlet__foot">

                    <div class="kt-form__actions">

                        <div class="row">

                            <div class="col-lg-4"></div>

                            <div class="col-lg-8">

                                <button type="button" class="btn btn-primary submit change_button">Update<i class="la la-spinner change_spin d-none"></i></button>

                                <a href="<?php echo e($index); ?>"><button type="button" class="btn btn-secondary">Cancel</button></a>

                            </div>

                        </div>

                    </div>

                </div>

            </form>

        </div>

    </div>

</div>

</div>

</div>

<script>

    $(document).ready(function() {

        $(".submit").on("click", function(e) {

            e.preventDefault();

            if ($(".add_form").valid()) {

                $('.change_button').find('.change_spin').removeClass('d-none');
                $('.change_button').prop('disabled', true);

                $.ajax({

                    type: "POST",

                    url: "<?php echo e(route('provider.review.update')); ?>",

                    data: new FormData($('.add_form')[0]),

                    processData: false,

                    contentType: false,

                    success: function(data) {

                        if (data.status === 'success') {

                            window.location = "<?php echo e($index); ?>";

                            toastr["success"]("<?php echo e($module); ?> Updated Successfully", "Success");

                            

                        } else if (data.status === 'error') {
                            location.reload();

                            toastr["error"]("Something went wrong", "Error");

                        }

                    },
                    error :function( data ) {
                        console.log(data.status)
                        if(data.status === 422) {
                            var errors = $.parseJSON(data.responseText);
                            $.each(errors.errors, function (key, value) {
                                console.log(key+ " " +value);
                                $('#'+key).addClass('is-invalid');
                                $('#'+key).parent().append('<div id="'+key+'-error" class="error invalid-feedback ">'+value+'</div>');
                            });

                        }

                    }

                });

            } else {
                $('.change_button').prop('disabled', false);
                $('.change_button').find('.change_spin').addClass('d-none');
                e.preventDefault();

            }

        });

    });
    
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }

</script>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('provider.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\service_provider\resources\views/provider/providerseller/review/edit.blade.php ENDPATH**/ ?>