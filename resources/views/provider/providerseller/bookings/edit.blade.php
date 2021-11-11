@php
$edit = $data['edit'];
$service_select = $data['service_select'];
$customer_select = $data['customer_select'];
$provider_select = $data['provider_select'];
$bookingstatus_select = $data['bookingstatus_select'];
@endphp
<div class="kt-portlet__body">
   <!--  <div class="form-group row">
        <div class="col-lg-4">
            <label>Content:<span class="requied_field">*</span></label>
            <input type="text" class="form-control" placeholder="Enter content" name="content" id="content" value="{{ $edit->content }}" required>
        </div>
        <div class="col-lg-4">
            <label>Rating:</label>
            <input type="text" class="form-control" placeholder="Enter rating" name="rating" id="rating" value="{{ $edit->rating }}" required>
        </div>

    </div> -->
    <div class="form-group row">

        <div class="col-lg-4">
            <label>Customer:<span class="requied_field">*</span></label>
            <select  class="form-control"  name="customer_id"  id="customer_id" >
                <option value="">Select Customer</option>
                @foreach($customer_select as $k=>$c) 
                <option value="{{$k}}" @if($c->id == $edit->customer_id) selected="selected" @endif>{{ $c->name}}</option>
                @endforeach
            </select>
        </div>

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
            <label>Provider:<span class="requied_field">*</span></label>
            <select  class="form-control"  name="provider_id"  id="provider_id">
                <option value="">Select Provider</option>
                @foreach($provider_select as $k=>$c) 
                <option value="{{$c->id}}" @if($c->id == $edit->provider_id) selected="selected" @endif>{{ $c->name }}</option>
                @endforeach
            </select>
        </div>
        
    </div>
    <div class="form-group row">

         <div class="col-lg-4">
            <label>Booking Status:<span class="requied_field">*</span></label>
            <select  class="form-control"  name="status_id"  id="status_id">
                <option value="">Select Booking Status</option>
                @foreach($bookingstatus_select as $k=>$c) 
                <option value="{{$c->id}}" @if($c->id == $edit->status_id) selected="selected" @endif>{{ $c->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-lg-4">
            <label>Booking At:<span class="requied_field">*</span></label>
            <input type="date" class="form-control"  name="booking_at" value="{{ $edit->booking_at}}" id="booking_at">
        </div>

        <div class="col-lg-4">
            <label>Notes:</label>
            <input type="text" class="form-control"  name="notes" value="{{ $edit->notes}}" id="notes">
        </div>


    </div> 

    <div class="form-group row">

        <div class="col-lg-4">
            <label>Address Name:</label>
            <textarea class="form-control" placeholder="Enter address name" name="address1" id="address1">{{ $edit->address1 }}</textarea>
        </div>

        <div class="col-lg-4">
            <label>Address Details:<span class="requied_field">*</span></label>
            <textarea class="form-control" placeholder="Enter address details" name="address2" id="address2">{{ $edit->address2 }}</textarea>
        </div>

         <div class="col-lg-4">
            <label>Total:<span class="requied_field">*</span></label>
            <input type="text" class="form-control" value="{{$edit->total}}" placeholder="Enter total" name="total" required>
        </div>

    </div>

    @include('provider.layout.status_cheackbox',array('data' => $edit->status))
</div>