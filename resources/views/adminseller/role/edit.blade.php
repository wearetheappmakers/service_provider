@php
$edit = $data['edit'];
$permissions_select = $data['permissions_select'];
@endphp
<div class="kt-portlet__body">
    <div class="form-group row">
       <div class="col-lg-4">
            <label>Key:<span class="requied_field">*</span></label>
            <input type="text" class="form-control" placeholder="Enter key" name="key" id="key" value="{{ $edit->key }}" required>
        </div>

        <div class="col-lg-4">
            <label>Title:<span class="requied_field">*</span></label>
            <input type="text" class="form-control" placeholder="Enter Title" name="title" id="title" value="{{ $edit->title }}" required>
        </div>

        <div class="col-lg-4">
            <label>Permissions:<span class="requied_field">*</span></label>
            <select class="form-control selectpicker" name="permissions_id[]" multiple required="">
                <option value="">Select Permissions</option>
                @foreach($permissions_select as $k=>$c)
                <option value="{{$c->id}}" @if(in_array($c->id,$edit->permissions_id)) selected @endif>{{$c->title}}</option>
                @endforeach
            </select>
        </div>
    </div>
    @include('admin.layout.status_checkbox',array('data' => $edit->status))
</div>
