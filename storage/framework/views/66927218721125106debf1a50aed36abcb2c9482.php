<?php $__env->startSection('content'); ?>

<link href="<?php echo e(asset('assets/plugins/custom/datatables/datatables.bundle.css')); ?>" rel="stylesheet" type="text/css" />


<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

	<br>

	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

		<div class="kt-portlet kt-portlet--mobile">

			<div class="kt-portlet__head kt-portlet__head--lg">

				<div class="kt-portlet__head-label">

					<span class="kt-portlet__head-icon">

						<i class="kt-font-brand flaticon2-line-chart"></i>

					</span>

					<h3 class="kt-portlet__head-title">

						<?php echo e($module); ?>


					</h3>

				</div>

				<div class="kt-portlet__head-toolbar">

					<div class="kt-portlet__head-wrapper">

						<div class="kt-portlet__head-actions">

						</div>

					</div>

				</div>

			</div>

			<div class="kt-portlet__body">

				<div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4">

					<table class="table table-striped- table-bordered table-hover table-checkable datatable" id="datatable_rows">

						<?php echo csrf_field(); ?>

						<thead>

							<tr>

								<th><input type="checkbox" id="selectall" /></th>

								<th>Customer</th>

								<th>Provider</th>

								<th>Service</th>

								<th>Booking Status</th>

								<th>Booking_At</th>

								<th>Notes</th>

								<th>Address Name</th>

								<th>Address Details</th>

								<th>Total</th>

								<th>Status</th>

								<th>Action</th>


							</tr>

						</thead>

						<tbody>

						</tbody>

					</table>

				</div>

			</div>

			
		</div>

	</div>

</div>

<?php echo $__env->make('admin.layout.multiple_action', array(

'table_name' => 'bookings',

'is_orderby'=>'yes',

'folder_name'=>'bookings',

'action' => array('change-status-1' => __('Active'), 'change-status-0' => __('Inactive'), 'delete' => __('Delete'))

), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>



<script src="<?php echo e(asset('assets/plugins/custom/datatables/datatables.bundle.js')); ?>" type="text/javascript"></script>



<script>

	$(document).ready(function() {

		$('#datatable_rows').DataTable({

			processing: true,

			serverSide: true,

			// searchable: false,

			columnDefs: [{

				orderable: false,

				targets: -1,

			}],

			ajax: "<?php echo e(route('admin.'.$resourcePath.'.index')); ?>",

			columns: [{

				orderable: false,

				searchable: false,

				data: 'checkbox',

			},

			{

				"data": "service"

			},

			{

				"data": "customer"

			},
			{

				"data": "provider"

			},
			{

				"data": "bookingstatus"

			},
			{

				"data": "booking_at"

			},
			{

				"data": "notes"

			},
			{

				"data": "address1"

			},
			{

				"data": "address2"

			},

			{

				"data": "total"

			},

			{

				orderable: false,

				searchable: false,

				data: 'singlecheckbox',

			},

			{

				orderable: false,

				searchable: false,

				data: 'action',

			},




			]

		});





	});

</script>



<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\service_provider\resources\views/adminseller/bookings/index.blade.php ENDPATH**/ ?>