@extends('admin.layout.auth')

@section('content')
<form class="kt-form login_form" id="login_form"  role="form" method="POST" action="{{ url('/customer/login') }}">
                        {{ csrf_field() }}
                        	<div class="kt-login__signin">
								<div class="kt-login__head">
									<h3 class="kt-login__title">Sign In To Customer</h3>
								</div>
								</div>

                        <div class="input-group {{ $errors->has('number') ? ' has-error' : '' }}">
                                <input id="number" type="text" class="form-control" name="number" placeholder="Mobile No" onkeypress="return isNumber(event)" onkeyup="CheckCustomer($(this).val())" maxlength="10" value="{{ old('number') }}" autofocus>

                        </div>
                        <span class="help-block">
                            <strong class="error">{{ $errors->first('number') }}</strong>
                        </span>

                                @if ($errors->has('number'))
                                    <span class="help-block">
                                        <strong class="error">{{ $errors->first('number') }}</strong>
                                    </span>
                                @endif
                        <!-- <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password">

                                
                        </div>
@if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif -->
	                        
								<div class="kt-login__actions">
									<button type="submit" id="submit" disabled="" class="btn btn-brand btn-elevate kt-login__btn-primary">Sign In</button>
									<!-- <a href="{{ url('/customer/register') }}"><button type="button" id="submit" class="btn btn-brand btn-elevate kt-login__btn-primary">Register</button></a> -->
								</div>
                    </form>

                <script type="text/javascript">
                	function isNumber(evt) {
				        evt = (evt) ? evt : window.event;
				        var charCode = (evt.which) ? evt.which : evt.keyCode;
				        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
				            return false;
				        }
				        return true;
				    }

				    function CheckCustomer(evt){
					    $.ajax({

		                    type: "POST",

		                    url: "{{ route('customer.validate')}}",

		                    data: {
		                    	"_token": "{{ csrf_token() }}",
		                    	"number": evt
		                    },

		                    success: function(data) {

		                        if (data.success) {

		                        	$('.error').html('');
									$('#submit').attr('disabled',false);

		                        } else {
		                           	
		                           	$('.error').html('Please Enter buzzed register number');
		                        	$('#submit').attr('disabled',true);
		                        }

		                    },
		                });
				    }
                </script>
@endsection
