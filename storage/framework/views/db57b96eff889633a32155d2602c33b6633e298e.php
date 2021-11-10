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

								<th>Service</th>

								<th>Customer</th>

								<th>Content</th>

								<th>Rating</th>

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

<?php echo $__env->make('provider.layout.multiple_action', array(

					'table_name' => 'review',

					'is_orderby'=>'yes',

					'folder_name'=>'review',

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

			ajax: "<?php echo e(route('provider.'.$resourcePath.'.index')); ?>",

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

					"data": "content"

				},
				{

					"data": "rating"

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
<?php echo $__env->make('provider.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\service_provider\resources\views/provider/providerseller/review/index.blade.php ENDPATH**/ ?>