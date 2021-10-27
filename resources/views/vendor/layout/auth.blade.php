
<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
	<base href="../../../">
	<meta charset="utf-8" />
	<title>Adhik Bachat Mart</title>
	<meta name="description" content="Login page example">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--begin::Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

	<!--end::Fonts -->

	<!--begin::Page Custom Styles(used by this page) -->
	<link href="{{ asset('/assets/css/pages/login/login-3.css') }}" rel="stylesheet" type="text/css" />

	<!--end::Page Custom Styles -->

	<!--begin::Global Theme Styles(used by all pages) -->
	<link href="{{ asset('/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

	<!--end::Global Theme Styles -->

	<!--begin::Layout Skins(used by all pages) -->
	<script src="{{ asset('/assets/plugins/global/plugins.bundle.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/js/scripts.bundle.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/assets/js/pages/custom/login/login-general.js') }}" type="text/javascript"></script>
	<!--end::Layout Skins -->
	<link rel="shortcut icon" href="{{asset('assets/media/logos/shopping_logo.png')}}" />
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-aside--minimize kt-page--loading">

	<!-- begin:: Page -->
	<div class="kt-grid kt-grid--ver kt-grid--root kt-page">
		<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v3 kt-login--signin" id="kt_login">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url(assets/media/bg/bg-3.jpg);">
				<div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
					<div class="kt-login__container">
						<div class="kt-login__logo">
							<a href="javascript;">
								<img src="{{ asset('/assets/media/logos/shopping_logo.png') }}" style="height: 150px; width: 150px;">
							</a>
						</div>
						@yield('content')
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- end:: Page -->

	<!-- begin::Global Config(global config for global JS sciprts) -->
	<script>
		var KTAppOptions = {
			"colors": {
				"state": {
					"brand": "#22b9ff",
					"light": "#ffffff",
					"dark": "#282a3c",
					"primary": "#5867dd",
					"success": "#34bfa3",
					"info": "#36a3f7",
					"warning": "#ffb822",
					"danger": "#fd3995"
				},
				"base": {
					"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
					"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
				}
			}
		};


// 		$(document).ready(function () {

// 			$("#submit").on("click", function (e)
// 			{
// 				e.preventDefault();
// 				if ($(".login_form").valid())
// 				{
// 					var email = $("#email").val();

// 					var password = $("#password").val();

// 					$.ajax({
// 						type: "POST",
// 						url: "{{ route('login') }}",

// 						data: {

// 							'_token': $('input[name="_token"]').val(),

// 							'email': email,

// 							'password': password

// 						},
// 						success: function (data)

// 						{
// 							if (data.status === 'success') {

// 								window.location = "/";

// 							} else if (data.status === 'error') {

// 								$('.error_div').show();
// 							}
// 						}
// 					});
// 				}
// 				else
// 				{
// 					e.preventDefault();
// 				}
// 			});
// 		});
	</script>


</body>

<!-- end::Body -->
</html>

