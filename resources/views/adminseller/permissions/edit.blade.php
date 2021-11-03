@php
$edit = $data['edit'];
@endphp
<div class="kt-portlet__body">
    <div class="form-group row">
       <div class="col-lg-4">
            <label>Name:<span class="requied_field">*</span></label>
            <input type="text" class="form-control" placeholder="Enter name" name="title" id="title" value="{{ $edit->title }}" required>
        </div>
    </div>
    @include('admin.layout.status_checkbox',array('data' => $edit->status))
</div>
