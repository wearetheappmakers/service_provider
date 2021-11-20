<?php
if(isset($type)) {
$edit=route($route.'.edit', ['id' => $id, 'type'=>$type]);
} else {
$edit=route($route.'.edit', ['id' => $id]);
}   
// echo "ASdas";
// exit;
?>

<?php if(\Route::current()->getName() != 'vendor.product'): ?>

<a style="background: green;" href="<?php echo e($edit); ?>" title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md">

    <i style="color: white;" class="la la-edit"></i>

</a>
<?php endif; ?>





<?php if(Auth::guard('provider')->check()): ?> 
<button style="background: red;" title="Delete" data-id="<?php echo e($id); ?>" onclick="deleteitem('<?php echo e($id); ?>','<?php echo e($delete); ?>')" class="btn btn-sm btn-clean btn-icon btn-icon-md">
	<!-- delete-record -->

    <i style="color: white;" class="la la-trash">

    </i>

</button>
<?php endif; ?>

<?php if(\Route::current()->getName() == 'admin.product.index'): ?>  

	<a style="background: skyblue;" href="<?php echo e(route('admin.product.product_price_history',$id)); ?>" title="history" class="btn btn-sm btn-clean btn-icon btn-icon-md">
    	<i style="color: white;" class="la la-history"></i>
	</a>
<?php endif; ?>

<?php if(\Route::current()->getName() == 'vendor.product'): ?>  
	<a style="background: skyblue;" href="<?php echo e(route('vendor.product.product_price_history',$id)); ?>" title="history" class="btn btn-sm btn-clean btn-icon btn-icon-md">
    	<i style="color: white;" class="la la-history"></i>
	</a>
<?php endif; ?>

<!-- <a  style="background: skyblue;" class="btn btn-sm btn-clean btn-icon btn-icon-md handle" href="javascript:void(0)">
    <i style="color: white;" class="fas fa-hand-point-up">
    
    </i>
</a> -->

<script>
	function deleteitem(id){

		swal({
		  title: "Are you sure?",
		  text: "Once deleted, you will not be able to recover this record!",
		  icon: "warning",
		  buttons: true,
		  dangerMode: true,
		})
		.then((willDelete) => {
		  if (willDelete) {
		  			$.ajax({
					type: "DELETE",
					url: '<?php echo e($delete); ?>',
					data: {
						'_token': $('input[name="_token"]').val(),
						'id': id
					},
					cache: false,
					success: function (data)
					{
						if (data.success) {
							swal("Your record has been deleted!", {
						      icon: "success",
						    }).then((ok) => {
						    	window.location.reload();
						    });
						}else{
							 swal("Your record is safe!");
						}
						
					}
				});
		    
		  } else {
		    swal("Your record is safe!");
		  }
		});
	}
</script><?php /**PATH C:\xampp\htdocs\service_provider\resources\views/provider/layout/actionbtnpermission.blade.php ENDPATH**/ ?>