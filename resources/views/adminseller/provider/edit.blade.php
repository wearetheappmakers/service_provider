@php
$edit = $data['edit'];
$categories_select = $data['categories_select'];
@endphp
<div class="kt-portlet__body">
	<div class="form-group row">
		<div class="col-lg-4">
			<label>Name:<span class="requied_field">*</span></label>
			<input type="text" class="form-control" placeholder="Enter name" name="name" value="{{ $edit->name}}" id="fname" required autocomplete="off">
		</div>
		<div class="col-lg-4">
			<label>Contact No:<span class="requied_field">*</span></label>
			<input type="text" class="form-control" placeholder="Enter contact no" onkeypress="return isNumber(event)" maxlength="10" name="number" id="number" value="{{ $edit->number }}" required autocomplete="off">
		</div>
		<div class="col-lg-4">
			<label>Gender:</label>
			<select class="form-control" name="gender">
				<option value="1" @if($edit->gender == 1) selected @endif>Male</option>
				<option value="2" @if($edit->gender == 2) selected @endif>Female</option>
				<option value="3" @if($edit->gender == 3) selected @endif>Other</option>
			</select>
		</div>
	</div>
	<div class="form-group row">
		
		<div class="col-lg-4">
			<label>Birth Date:<span class="requied_field">*</span></label>
			<input type="date" class="form-control" placeholder="Enter Birth Date" name="b_date" value="{{ $edit->b_date }}"  id="b_date" required autocomplete="off">
		</div>
		
		<div class="col-lg-4">

			<label>Password:<span class="requied_field">*</span></label>
			<input type="password" class="form-control" placeholder="Enter password" value="{{ $edit->spassword }}" name="spassword" id="spassword" required autocomplete="off">
		</div>

		<div class="col-lg-4">
			<label>Categories:<span class="requied_field">*</span></label>
			<select class="form-control selectpicker" name="category_id[]" multiple required="">
				<option value="">Select Categories</option>
				@foreach($categories_select as $k=>$c)
				<option value="{{$k}}" @if(in_array($k,$edit->category_id)) selected @endif>{{html_entity_decode($c)}}</option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-lg-4">
			<label>Status:</label>
			<select class="form-control" name="status">
				<option value="1" @if($edit->status == 1) selected @endif>Active</option>
				<option value="0" @if($edit->status == 0) selected @endif>Inactive</option>
			</select>
		</div>
	</div>
	@include('admin.layout.status_checkbox',array('data' => $edit->status))
</div>

