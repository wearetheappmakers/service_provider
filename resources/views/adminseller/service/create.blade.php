<div class="kt-portlet__body">
    <div class="form-group row">
        <div class="col-lg-4">
            <label>Name:<span class="requied_field">*</span></label>
            <input type="text" class="form-control" placeholder="Enter name" name="name" id="name" required>
        </div>
        <div class="col-lg-4">
            <label>Description:</label>
            <textarea class="form-control" placeholder="Enter description" name="description" id="description"></textarea>
        </div>
        <div class="col-lg-4">
            <label>Duration:<span class="requied_field">*</span></label>
            <input type="text" class="form-control" placeholder="Enter duration" name="duration" id="duration" onkeypress="return isNumber(event)" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-4">
            <label>Price:<span class="requied_field">*</span></label>
            <input type="text" class="form-control" placeholder="Enter price" name="price" id="price" onkeypress="return isNumber(event)" required>
        </div>
        <div class="col-lg-4">
            <label>Category:<span class="requied_field">*</span></label>
           	<select  class="form-control"  name="category_id"  id="category_id" required="">
                <option value="">Select Category</option>
	            @foreach($categories_select as $k=>$c) 
	            	<option value="{{$k}}">{{html_entity_decode($c)}}</option>
	            @endforeach
            </select>
        </div>
        <div class="col-lg-4">
            <label>Commisions:</label>
           	<select  class="form-control"  name="commision_id"  id="commision_id">
                <option value="">Select Commisions</option>
	            @foreach($commisions as $commision) 
	            	<option value="{{ $commision->id }}">{{ $commision->name }} ( {{ $commision->value }} )</option>
	            @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-4">
            <label>Icon:</label>
            <input type="file" name="icon">
        </div>
    </div>
    @include('admin.layout.status_checkbox',array('data' => ""))
</div>