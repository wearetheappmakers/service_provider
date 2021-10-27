@php
$edit = $data['edit'];
$categories_select = $data['categories_select'];
$commisions = $data['commisions'];
@endphp
<div class="kt-portlet__body">
    <div class="form-group row">
        <div class="col-lg-4">
            <label>Name:<span class="requied_field">*</span></label>
            <input type="text" class="form-control" placeholder="Enter name" name="name" id="name" value="{{ $edit->name }}" required>
        </div>
        <div class="col-lg-4">
            <label>Description:</label>
            <textarea class="form-control" placeholder="Enter description" name="description" id="description">{{ $edit->description }}</textarea>
        </div>
        <div class="col-lg-4">
            <label>Duration:<span class="requied_field">*</span></label>
            <input type="text" class="form-control" placeholder="Enter duration" name="duration" id="duration" value="{{ $edit->duration }}" onkeypress="return isNumber(event)" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-4">
            <label>Price:<span class="requied_field">*</span></label>
            <input type="text" class="form-control" placeholder="Enter price" name="price" id="price" value="{{ $edit->price }}" onkeypress="return isNumber(event)" required>
        </div>
        <div class="col-lg-4">
            <label>Category:<span class="requied_field">*</span></label>
           	<select  class="form-control"  name="category_id"  id="category_id" required="">
                <option value="">Select Category</option>
	            @foreach($categories_select as $k=>$c) 
	            	<option value="{{$k}}" @if($k == $edit->category_id) selected="selected" @endif>{{html_entity_decode($c)}}</option>
	            @endforeach
            </select>
        </div>
        <div class="col-lg-4">
            <label>Commisions:</label>
           	<select  class="form-control"  name="commision_id"  id="commision_id">
                <option value="">Select Commisions</option>
	            @foreach($commisions as $commision) 
	            	<option value="{{ $commision->id }}" @if($commision->id == $edit->commision_id) selected="selected" @endif>{{ $commision->name }} ( {{ $commision->value }})</option>
	            @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-4">
            <label>Icon:</label>
            <input type="file" name="icon">
        </div>
        <div class="col-lg-4">
            @if($edit->icon)
                <div class="image_layer">
                    <div class="image_div">
                        <a target="_blank" href="{{ url('storage/uploads/service/'.$edit->icon) }}" rel="gallery" class="fancybox" title="">
                            <img src="{{ url('storage/uploads/service/Tiny/'.$edit->icon) }}" class="img-thumbnail" alt="{{ $edit->icon }}" />
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>
    @include('admin.layout.status_checkbox',array('data' => $edit->status))
</div>

