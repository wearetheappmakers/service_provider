@push('styles')

@endpush
<div class="kt-portlet__body">
    <div class="form-group row">
        <div class="col-lg-4">
            <label>Source Name:</label>
            <input type="text" class="form-control" placeholder="Enter Source Name" name="source_name" required>
        </div>
        <div class="col-lg-4">
            <label>Discount (in %):</label>
            <input type="text" class="form-control" placeholder="Enter Discount Percentage" name="discount_per" required onkeyup="if(/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="2">
        </div>
        <!-- <div class="col-lg-4">
            <label>Start Date:</label>
            <input type="text" class="form-control" id="start_date" placeholder="Enter Discount Start Date" name="discount_start_date">
        </div>
        <div class="col-lg-4">
            <label>End Date:</label>
            <input type="text" class="form-control" id="end_date" placeholder="Enter Discount End Date" name="discount_end_date">
        </div> -->
         </div>
         @include('admin.layout.status_checkbox',array('data' => ""))
</div>
@push('scripts')
<script src="{{ asset('assets/js/pages/crud/forms/widgets/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
<script>
//  $('#start_date, #end_date').datetimepicker({
//      format:'dd-mm-yyyy hh:mm A ',
//  });


       // $('#start_date,#end_date').datetimepicker({
       //      format: "dd-mm-yyyy hh:ii",
       //      startDate: '-1d',
       //      // defaultDate: moment().subtract(1, 'days')
       //  });
       //  $('#start_date').datetimepicker().on('change.dp', function(e) {
       //      var date = $(this).val();
       //      date = date.split("-");
       //      date = date[1] + '-' + date[0] + '-' + date[2];
       //      var minDate = new Date(date);
       //      minDate.setMinutes(minDate.getMinutes() + 5);
       //      $('#end_date').data('datetimepicker').setStartDate(minDate);
       //  });

       //  $('#end_date').datetimepicker().on('change.dp', function(e) {
       //      var date = $(this).val();
       //      date = date.split("-");
       //      date = date[1] + '-' + date[0] + '-' + date[2];
       //      var maxDate = new Date(date);
       //      maxDate.setMinutes(maxDate.getMinutes() - 5);
       //      $('#start_date').data('datetimepicker').setEndDate(maxDate);
       //  });
</script>
@endpush