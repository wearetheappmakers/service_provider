@if(isset($edit))
<div class="form-group row">
    <div class="col-lg-4">
        <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
            <input type="checkbox" @if($data==1) checked @endif name="status" value="1"> Status
            <span></span>
        </label>
    </div> 
</div>
@else
<div class="form-group row">
    <div class="col-lg-4">
        <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
            <input type="checkbox" checked name="status" value="1"> Status
            <span></span>
        </label>
    </div> 
</div>
@endif
