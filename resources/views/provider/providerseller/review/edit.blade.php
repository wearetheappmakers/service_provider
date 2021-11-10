@php
$edit = $data['edit'];
$service_select = $data['service_select'];
$customer_select = $data['customer_select'];
@endphp
<div class="kt-portlet__body">
    <div class="form-group row">
        <div class="col-lg-4">
            <label>Content:<span class="requied_field">*</span></label>
            <input type="text" class="form-control" placeholder="Enter content" name="content" id="content" value="{{ $edit->content }}" required>
        </div>
        <div class="col-lg-4">
            <label>Rating:</label>
            <input type="text" class="form-control" placeholder="Enter rating" name="rating" id="rating" value="{{ $edit->rating }}" required>
        </div>

    </div>
    <div class="form-group row">
        <div class="col-lg-4">
            <label>Service:<span class="requied_field">*</span></label>
            <select  class="form-control"  name="service_id"  id="service_id">
                <option value="">Select Service</option>
                @foreach($service_select as $k=>$c) 
                <option value="{{$c->id}}" @if($c->id == $edit->service_id) selected="selected" @endif>{{ $c->name }}</option>
                @endforeach
            </select>
        </div>
        

        <div class="col-lg-4">
            <label>Customer:<span class="requied_field">*</span></label>
            <select  class="form-control"  name="customer_id"  id="customer_id" >
                <option value="">Select Customer</option>
                @foreach($customer_select as $k=>$c) 
                <option value="{{$k}}" @if($c->id == $edit->customer_id) selected="selected" @endif>{{ $c->name}}</option>
                @endforeach
            </select>
        </div>

    </div>

    @include('provider.layout.status_checkbox',array('data' => $edit->status))
</div>