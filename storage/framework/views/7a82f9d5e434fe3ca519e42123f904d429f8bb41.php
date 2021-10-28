<div class="kt-portlet__body">
    <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>Name:<span class="requied_field">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter name" name="name" id="name" required autocomplete="off">
                                </div>
                                <div class="col-lg-4">
                                    <label>Contact No:<span class="requied_field">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter contact no" onkeypress="return isNumber(event)" maxlength="10" name="number" id="number" required autocomplete="off">
                                </div>
                                <div class="col-lg-4">
                                    <label>Gender:</label>
                                     <select class="form-control" name="gender">
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                        <option value="3">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>Birth Date:<span class="requied_field">*</span></label>
                                    <input type="date" class="form-control" placeholder="Enter Birth Date" name="b_date" id="b_date" required autocomplete="off">
                                </div>
                                <div class="col-lg-4">
                                    <label>Password:<span class="requied_field">*</span></label>
                                    <input type="password" class="form-control" placeholder="Enter password" name="spassword" id="spassword" value="12345678" required="" autocomplete="off">
                                </div>
                                <div class="col-lg-4">
                                        <label>Categories:<span class="requied_field">*</span></label>
                                        <select class="form-control selectpicker" name="category_id[]" multiple required="">
                                          <option value="">Select Categories</option>
                                              <?php $__currentLoopData = $categories_select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                              <option value="<?php echo e($k); ?>"><?php echo e(html_entity_decode($c)); ?></option>
                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>Status:</label>
                                    <select class="form-control" name="status">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
    <?php echo $__env->make('admin.layout.status_checkbox',array('data' => ""), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div><?php /**PATH D:\rohit\service_provider\service_provider\resources\views/adminseller/provider/create.blade.php ENDPATH**/ ?>