@extends('admin.main')
@push('styles')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js"></script>
@endpush

@section('content')

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

						Category Tree View

					</h3>

				</div>
				

			</div>
			<div class="kt-portlet__body">
					<div class="category-tree" id="category-tree">
					<ul id="tree1">
							@foreach($category_tree as $category)
								<li>
									{{ $category->name }}
									@if(count($category->items))
										@include('adminseller.category.manageChild',['items' => $category->items])
									@endif
								</li>
							@endforeach
							</ul>
					</div>
					<div id="using_json">
					</div>
				</div>
		</div>

	</div>

</div>
@stop

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js"></script>
<script>
$(function () {
	//  $('#category-tree').jstree(); 
	 $("#category-tree").jstree({
		"plugins" : [
			"unique","themes","json_data","ui","crrm",
			"cookies","dnd","search","types","hotkeys",
			"contextmenu"
		],
		"core" : {
			"animation" : 0,
    "check_callback" : true,
    "themes" : { "stripes" : true },
		},
		"types" : {
			"default" : {
				"valid_children" : ["default","file"]
			},
			"file" : {
				"icon" : "glyphicon glyphicon-file",
				"valid_children" : []
			}
		},
	    "icon" : "glyphicon glyphicon-file",
	}).bind("move_node.jstree", onNodeMove)

	function onNodeMove(e, data,s,a,n,o,d) {
	// 	var nodeType = $(data.rslt.o).attr("rel");
    // var parentType = $(data.rslt.np).attr("rel");
	// console.log(nodeType);
	// console.log(parentType);
	console.log('===== Moving '+ data.node.text + '========' );
                console.log('id          =', data.node.id );
                console.log('parent      =', data.parent);
                console.log('position    =', data.position );
                console.log('old_position=', data.old_position );
				console.log('old_parent  =', data.old_parent );
				
				if ($("#category-tree").find(".jstree-loading").length) {
			// 		console.log($("#category-tree").find(".jstree-loading"));
            // alert('my ajax tree is done loading');
        }
	// console.log(data);
	// console.log(s);
	// console.log(a);
	// console.log(n);
	// console.log(o);
	// console.log(d);
	}
	
	// jstree("open_all", -1).
// 	.bind("move_node.jstree", function (e, data) {
// 		var nodeType = $(data.rslt.o).attr("rel");
//     var parentType = $(data.rslt.np).attr("rel");
// 	console.log(nodeType);
// 	console.log(parentType);
// console.log(data.rslt);		
// 			console.log("Node was moved inside the same tree-instance");

// 	});

	// $("#category-tree").jstree('open_all');
// 	var a = $(document).on('dnd_stop.vakata', function(e, data){
//  alert('move success');
//  console.log(data.rslt);
// }).jstree();
}); 
</script>

@endpush