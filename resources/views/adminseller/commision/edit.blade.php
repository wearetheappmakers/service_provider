@php
$edit = $data['edit'];
@endphp
<div class="kt-portlet__body">
    <div class="form-group row">
       <div class="col-lg-4">
            <label>Name:<span class="requied_field">*</span></label>
            <input type="text" class="form-control" placeholder="Enter name" name="name" id="name" value="{{ $edit->name }}" required>
        </div>
        <div class="col-lg-4">
            <label>Type:<span class="requied_field">*</span></label>
            <select class="form-control" name="type" required="">
                <option value="">--Select Type--</option>
                <option value="1" @if($edit->type == 1) selected @endif>Percentage</option>
                <option value="2" @if($edit->type == 2) selected @endif>Fixed</option>
            </select>
        </div>
        <div class="col-lg-4">
            <label>Value:<span class="requied_field">*</span></label>
            <input type="text" class="form-control" placeholder="Enter value" name="value" id="value" value="{{ $edit->value }}" required onkeypress="return isNumber(event)">
        </div>
    </div>
    
    @include('admin.layout.status_checkbox',array('data' => $edit->status))
</div>

