@extends('admin.main')

@section('content')



<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

						<br>



						<!-- begin:: Content -->

						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">



							<!--Begin::Dashboard 6-->



							<!--begin:: Widgets/Stats-->

							<div class="kt-portlet">

								<div class="kt-portlet__body  kt-portlet__body--fit">

									<div class="row row-no-padding row-col-separator-lg">

										<div class="col-md-12 col-lg-6 col-xl-3">



											<!--begin::Total Profit-->

											<div class="kt-widget24">

												<div class="kt-widget24__details">

													<div class="kt-widget24__info">

														<h4 class="kt-widget24__title">

															Total Profit

														</h4>

														<span class="kt-widget24__desc">

															All Customs Value

														</span>

													</div>

													<span class="kt-widget24__stats kt-font-brand">

														$18M

													</span>

												</div>

												<div class="progress progress--sm">

													<div class="progress-bar kt-bg-brand" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>

												</div>

												<div class="kt-widget24__action">

													<span class="kt-widget24__change">

														Change

													</span>

													<span class="kt-widget24__number">

														78%

													</span>

												</div>

											</div>



											<!--end::Total Profit-->

										</div>

										<div class="col-md-12 col-lg-6 col-xl-3">



											<!--begin::New Feedbacks-->

											<div class="kt-widget24">

												<div class="kt-widget24__details">

													<div class="kt-widget24__info">

														<h4 class="kt-widget24__title">

															New Feedbacks

														</h4>

														<span class="kt-widget24__desc">

															Customer Review

														</span>

													</div>

													<span class="kt-widget24__stats kt-font-warning">

														1349

													</span>

												</div>

												<div class="progress progress--sm">

													<div class="progress-bar kt-bg-warning" role="progressbar" style="width: 84%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>

												</div>

												<div class="kt-widget24__action">

													<span class="kt-widget24__change">

														Change

													</span>

													<span class="kt-widget24__number">

														84%

													</span>

												</div>

											</div>



											<!--end::New Feedbacks-->

										</div>

										<div class="col-md-12 col-lg-6 col-xl-3">



											<!--begin::New Orders-->

											<div class="kt-widget24">

												<div class="kt-widget24__details">

													<div class="kt-widget24__info">

														<h4 class="kt-widget24__title">

															New Orders

														</h4>

														<span class="kt-widget24__desc">

															Fresh Order Amount

														</span>

													</div>

													<span class="kt-widget24__stats kt-font-danger">

														567

													</span>

												</div>

												<div class="progress progress--sm">

													<div class="progress-bar kt-bg-danger" role="progressbar" style="width: 69%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>

												</div>

												<div class="kt-widget24__action">

													<span class="kt-widget24__change">

														Change

													</span>

													<span class="kt-widget24__number">

														69%

													</span>

												</div>

											</div>



											<!--end::New Orders-->

										</div>

										<div class="col-md-12 col-lg-6 col-xl-3">



											<!--begin::New Users-->

											<div class="kt-widget24">

												<div class="kt-widget24__details">

													<div class="kt-widget24__info">

														<h4 class="kt-widget24__title">

															New Users

														</h4>

														<span class="kt-widget24__desc">

															Joined New User

														</span>

													</div>

													<span class="kt-widget24__stats kt-font-success">

														276

													</span>

												</div>

												<div class="progress progress--sm">

													<div class="progress-bar kt-bg-success" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>

												</div>

												<div class="kt-widget24__action">

													<span class="kt-widget24__change">

														Change

													</span>

													<span class="kt-widget24__number">

														90%

													</span>

												</div>

											</div>



											<!--end::New Users-->

										</div>

									</div>

								</div>

							</div>



							<!--end:: Widgets/Stats-->



							<!--Begin::Row-->

							<div class="row">

								<div class="col-xl-6">



									<!--begin:: Widgets/Sale Reports-->

									<div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">

										<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">

												<h3 class="kt-portlet__head-title">

													Sales Reports

												</h3>

											</div>

											<div class="kt-portlet__head-toolbar">

												<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">

													<li class="nav-item">

														<a class="nav-link active" data-toggle="tab" href="#kt_widget11_tab1_content" role="tab">

															Last Month

														</a>

													</li>

													<li class="nav-item">

														<a class="nav-link" data-toggle="tab" href="#kt_widget11_tab2_content" role="tab">

															All Time

														</a>

													</li>

												</ul>

											</div>

										</div>

										<div class="kt-portlet__body">



											<!--Begin::Tab Content-->

											<div class="tab-content">



												<!--begin::tab 1 content-->

												<div class="tab-pane active" id="kt_widget11_tab1_content">



													<!--begin::Widget 11-->

													<div class="kt-widget11">

														<div class="table-responsive">

															<table class="table">

																<thead>

																	<tr>

																		<td style="width:1%">#</td>

																		<td style="width:40%">Application</td>

																		<td style="width:14%">Sales</td>

																		<td style="width:15%">Change</td>

																		<td style="width:15%">Status</td>

																		<td style="width:15%" class="kt-align-right">Total</td>

																	</tr>

																</thead>

																<tbody>

																	<tr>

																		<td>

																			<label class="kt-checkbox kt-checkbox--single">

																				<input type="checkbox"><span></span>

																			</label>

																		</td>

																		<td>

																			<a href="#" class="kt-widget11__title">Loop</a>

																			<span class="kt-widget11__sub">CRM System</span>

																		</td>

																		<td>19,200</td>

																		<td>$63</td>

																		<td><span class="kt-badge kt-badge--inline kt-badge--brand">new</span></td>

																		<td class="kt-align-right kt-font-brand kt-font-bold">$34,740</td>

																	</tr>

																	<tr>

																		<td>

																			<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>

																		</td>

																		<td>

																			<a href="#" class="kt-widget11__title">Selto</a>

																			<span class="kt-widget11__sub">Powerful Website Builder</span>

																		</td>

																		<td>24,310</td>

																		<td>$39</td>

																		<td><span class="kt-badge kt-badge--inline kt-badge--success">approved</span></td>

																		<td class="kt-align-right kt-font-brand kt-font-bold">$46,010</td>

																	</tr>

																	<tr>

																		<td>

																			<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>

																		</td>

																		<td>

																			<a href="#" class="kt-widget11__title">Jippo</a>

																			<span class="kt-widget11__sub">The Best Selling App</span>

																		</td>

																		<td>9,076</td>

																		<td>$105</td>

																		<td><span class="kt-badge kt-badge--inline kt-badge--warning">pending</span></td>

																		<td class="kt-align-right kt-font-brand kt-font-bold">$67,800</td>

																	</tr>

																	<tr>

																		<td>

																			<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>

																		</td>

																		<td>

																			<a href="#" class="kt-widget11__title">Verto</a>

																			<span class="kt-widget11__sub">Web Development Tool</span>

																		</td>

																		<td>11,094</td>

																		<td>$16</td>

																		<td><span class="kt-badge kt-badge--inline kt-badge--danger">on hold</span></td>

																		<td class="kt-align-right kt-font-brand kt-font-bold">$18,520</td>

																	</tr>

																</tbody>

															</table>

														</div>

														<div class="kt-widget11__action kt-align-right">

															<button type="button" class="btn btn-label-brand btn-bold btn-sm">Import Report</button>

														</div>

													</div>



													<!--end::Widget 11-->

												</div>



												<!--end::tab 1 content-->



												<!--begin::tab 2 content-->

												<div class="tab-pane" id="kt_widget11_tab2_content">



													<!--begin::Widget 11-->

													<div class="kt-widget11">

														<div class="table-responsive">

															<table class="table">

																<thead>

																	<tr>

																		<td style="width:1%">#</td>

																		<td style="width:40%">Application</td>

																		<td style="width:14%">Sales</td>

																		<td style="width:15%">Change</td>

																		<td style="width:15%">Status</td>

																		<td style="width:15%" class="kt-align-right">Total</td>

																	</tr>

																</thead>

																<tbody>

																	<tr>

																		<td>

																			<label class="kt-checkbox kt-checkbox--single">

																				<input type="checkbox"><span></span>

																			</label>

																		</td>

																		<td>

																			<span class="kt-widget11__title">Loop</span>

																			<span class="kt-widget11__sub">CRM System</span>

																		</td>

																		<td>19,200</td>

																		<td>$63</td>

																		<td><span class="kt-badge kt-badge--inline kt-badge--danger">pending</span></td>

																		<td class="kt-align-right kt-font-brand  kt-font-bold">$23,740</td>

																	</tr>

																	<tr>

																		<td>

																			<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>

																		</td>

																		<td>

																			<span class="kt-widget11__title">Selto</span>

																			<span class="kt-widget11__sub">Powerful Website Builder</span>

																		</td>

																		<td>24,310</td>

																		<td>$39</td>

																		<td><span class="kt-badge kt-badge--inline kt-badge--success">new</span></td>

																		<td class="kt-align-right kt-font-success  kt-font-bold">$46,010</td>

																	</tr>

																	<tr>

																		<td>

																			<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>

																		</td>

																		<td>

																			<span class="kt-widget11__title">Jippo</span>

																			<span class="kt-widget11__sub">The Best Selling App</span>

																		</td>

																		<td>9,076</td>

																		<td>$105</td>

																		<td><span class="kt-badge kt-badge--inline kt-badge--brand">approved</span></td>

																		<td class="kt-align-right kt-font-danger kt-font-bold">$15,800</td>

																	</tr>

																	<tr>

																		<td>

																			<label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>

																		</td>

																		<td>

																			<span class="kt-widget11__title">Verto</span>

																			<span class="kt-widget11__sub">Web Development Tool</span>

																		</td>

																		<td>11,094</td>

																		<td>$16</td>

																		<td><span class="kt-badge kt-badge--inline kt-badge--info">done</span></td>

																		<td class="kt-align-right kt-font-warning kt-font-bold">$8,520</td>

																	</tr>

																</tbody>

															</table>

														</div>

														<div class="kt-widget11__action kt-align-right">

															<button type="button" class="btn btn-label-success btn-bold btn-sm">Generate Report</button>

														</div>

													</div>



													<!--end::Widget 11-->

												</div>



												<!--end::tab 2 content-->



												<!--begin::tab 3 content-->

												<div class="tab-pane" id="kt_widget11_tab3_content">

												</div>



												<!--end::tab 3 content-->

											</div>



											<!--End::Tab Content-->

										</div>

									</div>



									<!--end:: Widgets/Sale Reports-->

								</div>

								<div class="col-xl-6">



									<!--begin:: Widgets/Order Statistics-->

									<div class="kt-portlet kt-portlet--height-fluid">

										<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">

												<h3 class="kt-portlet__head-title">

													Order Statistics

												</h3>

											</div>

											<div class="kt-portlet__head-toolbar">

												<a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">

													Export

												</a>

												<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">



													<!--begin::Nav-->

													<ul class="kt-nav">

														<li class="kt-nav__head">

															Export Options

															<span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">

																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">

																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">

																		<rect x="0" y="0" width="24" height="24" />

																		<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />

																		<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />

																		<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />

																	</g>

																</svg> </span>

														</li>

														<li class="kt-nav__separator"></li>

														<li class="kt-nav__item">

															<a href="#" class="kt-nav__link">

																<i class="kt-nav__link-icon flaticon2-drop"></i>

																<span class="kt-nav__link-text">Activity</span>

															</a>

														</li>

														<li class="kt-nav__item">

															<a href="#" class="kt-nav__link">

																<i class="kt-nav__link-icon flaticon2-calendar-8"></i>

																<span class="kt-nav__link-text">FAQ</span>

															</a>

														</li>

														<li class="kt-nav__item">

															<a href="#" class="kt-nav__link">

																<i class="kt-nav__link-icon flaticon2-telegram-logo"></i>

																<span class="kt-nav__link-text">Settings</span>

															</a>

														</li>

														<li class="kt-nav__item">

															<a href="#" class="kt-nav__link">

																<i class="kt-nav__link-icon flaticon2-new-email"></i>

																<span class="kt-nav__link-text">Support</span>

																<span class="kt-nav__link-badge">

																	<span class="kt-badge kt-badge--success kt-badge--rounded">5</span>

																</span>

															</a>

														</li>

														<li class="kt-nav__separator"></li>

														<li class="kt-nav__foot">

															<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>

															<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>

														</li>

													</ul>



													<!--end::Nav-->

												</div>

											</div>

										</div>

										<div class="kt-portlet__body kt-portlet__body--fluid">

											<div class="kt-widget12">

												<div class="kt-widget12__content">

													<div class="kt-widget12__item">

														<div class="kt-widget12__info">

															<span class="kt-widget12__desc">Annual Taxes EMS</span>

															<span class="kt-widget12__value">$400,000</span>

														</div>

														<div class="kt-widget12__info">

															<span class="kt-widget12__desc">Finance Review Date</span>

															<span class="kt-widget12__value">July 24,2019</span>

														</div>

													</div>

													<div class="kt-widget12__item">

														<div class="kt-widget12__info">

															<span class="kt-widget12__desc">Avarage Revenue</span>

															<span class="kt-widget12__value">$60M</span>

														</div>

														<div class="kt-widget12__info">

															<span class="kt-widget12__desc">Revenue Margin</span>

															<div class="kt-widget12__progress">

																<div class="progress kt-progress--sm">

																	<div class="progress-bar kt-bg-brand" role="progressbar" style="width: 40%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>

																</div>

																<span class="kt-widget12__stat">

																	40%

																</span>

															</div>

														</div>

													</div>

												</div>

												<div class="kt-widget12__chart" style="height:250px;">

													<canvas id="kt_chart_order_statistics"></canvas>

												</div>

											</div>

										</div>

									</div>



									<!--end:: Widgets/Order Statistics-->

								</div>

							</div>



							<!--End::Row-->



							<!--Begin::Row-->

							<div class="row">

								<div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1">



									<!--begin:: Widgets/Download Files-->

									<div class="kt-portlet kt-portlet--height-fluid">

										<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">

												<h3 class="kt-portlet__head-title">

													Download Files

												</h3>

											</div>

											<div class="kt-portlet__head-toolbar">

												<a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">

													Latest

												</a>

												<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">



													<!--begin::Nav-->

													<ul class="kt-nav">

														<li class="kt-nav__head">

															Export Options

															<span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">

																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">

																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">

																		<rect x="0" y="0" width="24" height="24" />

																		<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />

																		<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />

																		<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />

																	</g>

																</svg> </span>

														</li>

														<li class="kt-nav__separator"></li>

														<li class="kt-nav__item">

															<a href="#" class="kt-nav__link">

																<i class="kt-nav__link-icon flaticon2-drop"></i>

																<span class="kt-nav__link-text">Activity</span>

															</a>

														</li>

														<li class="kt-nav__item">

															<a href="#" class="kt-nav__link">

																<i class="kt-nav__link-icon flaticon2-calendar-8"></i>

																<span class="kt-nav__link-text">FAQ</span>

															</a>

														</li>

														<li class="kt-nav__item">

															<a href="#" class="kt-nav__link">

																<i class="kt-nav__link-icon flaticon2-telegram-logo"></i>

																<span class="kt-nav__link-text">Settings</span>

															</a>

														</li>

														<li class="kt-nav__item">

															<a href="#" class="kt-nav__link">

																<i class="kt-nav__link-icon flaticon2-new-email"></i>

																<span class="kt-nav__link-text">Support</span>

																<span class="kt-nav__link-badge">

																	<span class="kt-badge kt-badge--success kt-badge--rounded">5</span>

																</span>

															</a>

														</li>

														<li class="kt-nav__separator"></li>

														<li class="kt-nav__foot">

															<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>

															<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>

														</li>

													</ul>



													<!--end::Nav-->

												</div>

											</div>

										</div>

										<div class="kt-portlet__body">



											<!--begin::k-widget4-->

											<div class="kt-widget4">

												<div class="kt-widget4__item">

													<div class="kt-widget4__pic kt-widget4__pic--icon">

														<img src="assets/media/files/doc.svg" alt="">

													</div>

													<a href="#" class="kt-widget4__title">

														Metronic Documentation

													</a>

													<div class="kt-widget4__tools">

														<a href="#" class="btn btn-clean btn-icon btn-sm">

															<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>

														</a>

													</div>

												</div>

												<div class="kt-widget4__item">

													<div class="kt-widget4__pic kt-widget4__pic--icon">

														<img src="assets/media/files/jpg.svg" alt="">

													</div>

													<a href="#" class="kt-widget4__title">

														Project Launch Event

													</a>

													<div class="kt-widget4__tools">

														<a href="#" class="btn btn-clean btn-icon btn-sm">

															<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>

														</a>

													</div>

												</div>

												<div class="kt-widget4__item">

													<div class="kt-widget4__pic kt-widget4__pic--icon">

														<img src="assets/media/files/pdf.svg" alt="">

													</div>

													<a href="#" class="kt-widget4__title">

														Full Developer Manual For 4.7

													</a>

													<div class="kt-widget4__tools">

														<a href="#" class="btn btn-clean btn-icon btn-sm">

															<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>

														</a>

													</div>

												</div>

												<div class="kt-widget4__item">

													<div class="kt-widget4__pic kt-widget4__pic--icon">

														<img src="assets/media/files/javascript.svg" alt="">

													</div>

													<a href="#" class="kt-widget4__title">

														Make JS Development

													</a>

													<div class="kt-widget4__tools">

														<a href="#" class="btn btn-clean btn-icon btn-sm">

															<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>

														</a>

													</div>

												</div>

												<div class="kt-widget4__item">

													<div class="kt-widget4__pic kt-widget4__pic--icon">

														<img src="assets/media/files/zip.svg" alt="">

													</div>

													<a href="#" class="kt-widget4__title">

														Download Ziped version OF 5.0

													</a>

													<div class="kt-widget4__tools">

														<a href="#" class="btn btn-clean btn-icon btn-sm">

															<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>

														</a>

													</div>

												</div>

												<div class="kt-widget4__item">

													<div class="kt-widget4__pic kt-widget4__pic--icon">

														<img src="assets/media/files/pdf.svg" alt="">

													</div>

													<a href="#" class="kt-widget4__title">

														Finance Report 2016/2017

													</a>

													<div class="kt-widget4__tools">

														<a href="#" class="btn btn-clean btn-icon btn-sm">

															<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>

														</a>

													</div>

												</div>

											</div>



											<!--end::Widget 9-->

										</div>

									</div>



									<!--end:: Widgets/Download Files-->

								</div>

								<div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1">



									<!--begin:: Widgets/New Users-->

									<div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">

										<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">

												<h3 class="kt-portlet__head-title">

													New Users

												</h3>

											</div>

											<div class="kt-portlet__head-toolbar">

												<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">

													<li class="nav-item">

														<a class="nav-link active" data-toggle="tab" href="#kt_widget4_tab1_content" role="tab">

															Today

														</a>

													</li>

													<li class="nav-item">

														<a class="nav-link" data-toggle="tab" href="#kt_widget4_tab2_content" role="tab">

															Month

														</a>

													</li>

												</ul>

											</div>

										</div>

										<div class="kt-portlet__body">

											<div class="tab-content">

												<div class="tab-pane active" id="kt_widget4_tab1_content">

													<div class="kt-widget4">

														<div class="kt-widget4__item">

															<div class="kt-widget4__pic kt-widget4__pic--pic">

																<img src="assets/media/users/100_4.jpg" alt="">

															</div>

															<div class="kt-widget4__info">

																<a href="#" class="kt-widget4__username">

																	Anna Strong

																</a>

																<p class="kt-widget4__text">

																	Visual Designer,Google Inc

																</p>

															</div>

															<a href="#" class="btn btn-sm btn-label-brand btn-bold">Follow</a>

														</div>

														<div class="kt-widget4__item">

															<div class="kt-widget4__pic kt-widget4__pic--pic">

																<img src="assets/media/users/100_14.jpg" alt="">

															</div>

															<div class="kt-widget4__info">

																<a href="#" class="kt-widget4__username">

																	Milano Esco

																</a>

																<p class="kt-widget4__text">

																	Product Designer, Apple Inc

																</p>

															</div>

															<a href="#" class="btn btn-sm btn-label-warning btn-bold">Follow</a>

														</div>

														<div class="kt-widget4__item">

															<div class="kt-widget4__pic kt-widget4__pic--pic">

																<img src="assets/media/users/100_11.jpg" alt="">

															</div>

															<div class="kt-widget4__info">

																<a href="#" class="kt-widget4__username">

																	Nick Bold

																</a>

																<p class="kt-widget4__text">

																	Web Developer, Facebook Inc

																</p>

															</div>

															<a href="#" class="btn btn-sm btn-label-danger btn-bold">Follow</a>

														</div>

														<div class="kt-widget4__item">

															<div class="kt-widget4__pic kt-widget4__pic--pic">

																<img src="assets/media/users/100_1.jpg" alt="">

															</div>

															<div class="kt-widget4__info">

																<a href="#" class="kt-widget4__username">

																	Wiltor Delton

																</a>

																<p class="kt-widget4__text">

																	Project Manager, Amazon Inc

																</p>

															</div>

															<a href="#" class="btn btn-sm btn-label-success btn-bold">Follow</a>

														</div>

														<div class="kt-widget4__item">

															<div class="kt-widget4__pic kt-widget4__pic--pic">

																<img src="assets/media/users/100_5.jpg" alt="">

															</div>

															<div class="kt-widget4__info">

																<a href="#" class="kt-widget4__username">

																	Nick Stone

																</a>

																<p class="kt-widget4__text">

																	Visual Designer, Github Inc

																</p>

															</div>

															<a href="#" class="btn btn-sm btn-label-primary btn-bold">Follow</a>

														</div>

													</div>

												</div>

												<div class="tab-pane" id="kt_widget4_tab2_content">

													<div class="kt-widget4">

														<div class="kt-widget4__item">

															<div class="kt-widget4__pic kt-widget4__pic--pic">

																<img src="assets/media/users/100_2.jpg" alt="">

															</div>

															<div class="kt-widget4__info">

																<a href="#" class="kt-widget4__username">

																	Kristika Bold

																</a>

																<p class="kt-widget4__text">

																	Product Designer,Apple Inc

																</p>

															</div>

															<a href="#" class="btn btn-sm btn-label-success">Follow</a>

														</div>

														<div class="kt-widget4__item">

															<div class="kt-widget4__pic kt-widget4__pic--pic">

																<img src="assets/media/users/100_13.jpg" alt="">

															</div>

															<div class="kt-widget4__info">

																<a href="#" class="kt-widget4__username">

																	Ron Silk

																</a>

																<p class="kt-widget4__text">

																	Release Manager, Loop Inc

																</p>

															</div>

															<a href="#" class="btn btn-sm btn-label-brand">Follow</a>

														</div>

														<div class="kt-widget4__item">

															<div class="kt-widget4__pic kt-widget4__pic--pic">

																<img src="assets/media/users/100_9.jpg" alt="">

															</div>

															<div class="kt-widget4__info">

																<a href="#" class="kt-widget4__username">

																	Nick Bold

																</a>

																<p class="kt-widget4__text">

																	Web Developer, Facebook Inc

																</p>

															</div>

															<a href="#" class="btn btn-sm btn-label-danger">Follow</a>

														</div>

														<div class="kt-widget4__item">

															<div class="kt-widget4__pic kt-widget4__pic--pic">

																<img src="assets/media/users/100_2.jpg" alt="">

															</div>

															<div class="kt-widget4__info">

																<a href="#" class="kt-widget4__username">

																	Wiltor Delton

																</a>

																<p class="kt-widget4__text">

																	Project Manager, Amazon Inc

																</p>

															</div>

															<a href="#" class="btn btn-sm btn-label-success">Follow</a>

														</div>

														<div class="kt-widget4__item">

															<div class="kt-widget4__pic kt-widget4__pic--pic">

																<img src="assets/media/users/100_8.jpg" alt="">

															</div>

															<div class="kt-widget4__info">

																<a href="#" class="kt-widget4__username">

																	Nick Bold

																</a>

																<p class="kt-widget4__text">

																	Web Developer, Facebook Inc

																</p>

															</div>

															<a href="#" class="btn btn-sm btn-label-info">Follow</a>

														</div>

													</div>

												</div>

											</div>

										</div>

									</div>



									<!--end:: Widgets/New Users-->

								</div>

								<div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1">



									<!--begin:: Widgets/Latest Updates-->

									<div class="kt-portlet kt-portlet--height-fluid ">

										<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">

												<h3 class="kt-portlet__head-title">

													Latest Updates

												</h3>

											</div>

											<div class="kt-portlet__head-toolbar">

												<a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">

													Today

												</a>

												<div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">



													<!--begin::Nav-->

													<ul class="kt-nav">

														<li class="kt-nav__head">

															Export Options

															<span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">

																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">

																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">

																		<rect x="0" y="0" width="24" height="24" />

																		<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />

																		<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />

																		<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />

																	</g>

																</svg> </span>

														</li>

														<li class="kt-nav__separator"></li>

														<li class="kt-nav__item">

															<a href="#" class="kt-nav__link">

																<i class="kt-nav__link-icon flaticon2-drop"></i>

																<span class="kt-nav__link-text">Activity</span>

															</a>

														</li>

														<li class="kt-nav__item">

															<a href="#" class="kt-nav__link">

																<i class="kt-nav__link-icon flaticon2-calendar-8"></i>

																<span class="kt-nav__link-text">FAQ</span>

															</a>

														</li>

														<li class="kt-nav__item">

															<a href="#" class="kt-nav__link">

																<i class="kt-nav__link-icon flaticon2-telegram-logo"></i>

																<span class="kt-nav__link-text">Settings</span>

															</a>

														</li>

														<li class="kt-nav__item">

															<a href="#" class="kt-nav__link">

																<i class="kt-nav__link-icon flaticon2-new-email"></i>

																<span class="kt-nav__link-text">Support</span>

																<span class="kt-nav__link-badge">

																	<span class="kt-badge kt-badge--success kt-badge--rounded">5</span>

																</span>

															</a>

														</li>

														<li class="kt-nav__separator"></li>

														<li class="kt-nav__foot">

															<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>

															<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>

														</li>

													</ul>



													<!--end::Nav-->

												</div>

											</div>

										</div>



										<!--full height portlet body-->

										<div class="kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit">

											<div class="kt-widget4 kt-widget4--sticky">

												<div class="kt-widget4__items kt-portlet__space-x kt-margin-t-15">

													<div class="kt-widget4__item">

														<span class="kt-widget4__icon">

															<i class="flaticon2-graphic  kt-font-brand"></i>

														</span>

														<a href="#" class="kt-widget4__title">

															Metronic Admin Theme

														</a>

														<span class="kt-widget4__number kt-font-brand">+500</span>

													</div>

													<div class="kt-widget4__item">

														<span class="kt-widget4__icon">

															<i class="flaticon2-analytics-2  kt-font-success"></i>

														</span>

														<a href="#" class="kt-widget4__title">

															Green Maker Team

														</a>

														<span class="kt-widget4__number kt-font-success">-64</span>

													</div>

													<div class="kt-widget4__item">

														<span class="kt-widget4__icon">

															<i class="flaticon2-drop  kt-font-danger"></i>

														</span>

														<a href="#" class="kt-widget4__title">

															Make Apex Development

														</a>

														<span class="kt-widget4__number kt-font-danger">+1080</span>

													</div>

													<div class="kt-widget4__item">

														<span class="kt-widget4__icon">

															<i class="flaticon2-pie-chart-4 kt-font-warning"></i>

														</span>

														<a href="#" class="kt-widget4__title">

															A Programming Language

														</a>

														<span class="kt-widget4__number kt-font-warning">+19</span>

													</div>

												</div>

												<div class="kt-widget4__chart kt-margin-t-15">

													<canvas id="kt_chart_latest_updates" style="height: 150px;"></canvas>

												</div>

											</div>

										</div>

									</div>



									<!--end:: Widgets/Latest Updates-->

								</div>

								<div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1">



									<!--begin:: Widgets/Finance Summary-->

									<div class="kt-portlet kt-portlet--height-fluid">

										<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">

												<h3 class="kt-portlet__head-title">

													Finance Summary

												</h3>

											</div>

											<div class="kt-portlet__head-toolbar">

												<a href="#" class="btn btn-label-brand btn-sm  btn-bold dropdown-toggle" data-toggle="dropdown">

													Latest

												</a>

												<div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">



													<!--begin::Nav-->

													<ul class="kt-nav">

														<li class="kt-nav__head">

															Export Options

															<span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">

																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">

																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">

																		<rect x="0" y="0" width="24" height="24" />

																		<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />

																		<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />

																		<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />

																	</g>

																</svg> </span>

														</li>

														<li class="kt-nav__separator"></li>

														<li class="kt-nav__item">

															<a href="#" class="kt-nav__link">

																<i class="kt-nav__link-icon flaticon2-drop"></i>

																<span class="kt-nav__link-text">Activity</span>

															</a>

														</li>

														<li class="kt-nav__item">

															<a href="#" class="kt-nav__link">

																<i class="kt-nav__link-icon flaticon2-calendar-8"></i>

																<span class="kt-nav__link-text">FAQ</span>

															</a>

														</li>

														<li class="kt-nav__item">

															<a href="#" class="kt-nav__link">

																<i class="kt-nav__link-icon flaticon2-telegram-logo"></i>

																<span class="kt-nav__link-text">Settings</span>

															</a>

														</li>

														<li class="kt-nav__item">

															<a href="#" class="kt-nav__link">

																<i class="kt-nav__link-icon flaticon2-new-email"></i>

																<span class="kt-nav__link-text">Support</span>

																<span class="kt-nav__link-badge">

																	<span class="kt-badge kt-badge--success kt-badge--rounded">5</span>

																</span>

															</a>

														</li>

														<li class="kt-nav__separator"></li>

														<li class="kt-nav__foot">

															<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>

															<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>

														</li>

													</ul>



													<!--end::Nav-->

												</div>

											</div>

										</div>

										<div class="kt-portlet__body">

											<div class="kt-widget12">

												<div class="kt-widget12__content">

													<div class="kt-widget12__item">

														<div class="kt-widget12__info">

															<span class="kt-widget12__desc">Annual Companies Taxes EMS</span>

															<span class="kt-widget12__value">$500,000</span>

														</div>

														<div class="kt-widget12__info">

															<span class="kt-widget12__desc">Next Tax Review Date</span>

															<span class="kt-widget12__value">July 24,2017</span>

														</div>

													</div>

													<div class="kt-widget12__item">

														<div class="kt-widget12__info">

															<span class="kt-widget12__desc">Total Annual Profit Before Tax</span>

															<span class="kt-widget12__value">$3,800,000</span>

														</div>

														<div class="kt-widget12__info">

															<span class="kt-widget12__desc">Type Of Market Share</span>

															<span class="kt-widget12__value">Grossery</span>

														</div>

													</div>

													<div class="kt-widget12__item">

														<div class="kt-widget12__info">

															<span class="kt-widget12__desc">Avarage Product Price</span>

															<span class="kt-widget12__value">$60,70</span>

														</div>

														<div class="kt-widget12__info">

															<span class="kt-widget12__desc">Satisfication Rate</span>

															<span class="kt-widget12__progress">

																<div class="progress progress-sm">

																	<div class="progress-bar kt-bg-brand" role="progressbar" style="width: 63%" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>

																</div>

																<span class="kt-widget12__stat">

																	63%

																</span>

															</span>

														</div>

													</div>

												</div>

											</div>

										</div>

									</div>



									<!--end:: Widgets/Finance Summary-->

								</div>

								<div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1">



									<!--begin:: Widgets/Audit Log-->

									<div class="kt-portlet kt-portlet--height-fluid">

										<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">

												<h3 class="kt-portlet__head-title">

													Latest Log

												</h3>

											</div>

											<div class="kt-portlet__head-toolbar">

												<ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">

													<li class="nav-item">

														<a class="nav-link active" data-toggle="tab" href="#kt_widget4_tab11_content" role="tab">

															Today

														</a>

													</li>

													<li class="nav-item">

														<a class="nav-link" data-toggle="tab" href="#kt_widget4_tab12_content" role="tab">

															Week

														</a>

													</li>

													<li class="nav-item">

														<a class="nav-link" data-toggle="tab" href="#kt_widget4_tab13_content" role="tab">

															Month

														</a>

													</li>

												</ul>

											</div>

										</div>

										<div class="kt-portlet__body">

											<div class="tab-content">

												<div class="tab-pane active" id="kt_widget4_tab11_content">

													<div class="kt-scroll" data-scroll="true" data-height="400" style="height: 400px;">

														<div class="kt-list-timeline">

															<div class="kt-list-timeline__items">

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>

																	<span class="kt-list-timeline__text">12 new users registered</span>

																	<span class="kt-list-timeline__time">Just now</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>

																	<span class="kt-list-timeline__text">System shutdown <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">pending</span></span>

																	<span class="kt-list-timeline__time">14 mins</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>

																	<span class="kt-list-timeline__text">New invoice received</span>

																	<span class="kt-list-timeline__time">20 mins</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>

																	<span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>

																	<span class="kt-list-timeline__time">1 hr</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>

																	<span class="kt-list-timeline__text">System error - <a href="#" class="kt-link">Check</a></span>

																	<span class="kt-list-timeline__time">2 hrs</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--brand"></span>

																	<span class="kt-list-timeline__text">Production server down</span>

																	<span class="kt-list-timeline__time">3 hrs</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>

																	<span class="kt-list-timeline__text">Production server up</span>

																	<span class="kt-list-timeline__time">5 hrs</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>

																	<span href="" class="kt-list-timeline__text">New order received <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">urgent</span></span>

																	<span class="kt-list-timeline__time">7 hrs</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>

																	<span class="kt-list-timeline__text">12 new users registered</span>

																	<span class="kt-list-timeline__time">Just now</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>

																	<span class="kt-list-timeline__text">System shutdown <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">pending</span></span>

																	<span class="kt-list-timeline__time">14 mins</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>

																	<span class="kt-list-timeline__text">New invoice received</span>

																	<span class="kt-list-timeline__time">20 mins</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>

																	<span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>

																	<span class="kt-list-timeline__time">1 hr</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>

																	<span class="kt-list-timeline__text">New invoice received</span>

																	<span class="kt-list-timeline__time">20 mins</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>

																	<span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>

																	<span class="kt-list-timeline__time">1 hr</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>

																	<span class="kt-list-timeline__text">System error - <a href="#" class="kt-link">Check</a></span>

																	<span class="kt-list-timeline__time">2 hrs</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--brand"></span>

																	<span class="kt-list-timeline__text">Production server down</span>

																	<span class="kt-list-timeline__time">3 hrs</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>

																	<span class="kt-list-timeline__text">Production server up</span>

																	<span class="kt-list-timeline__time">5 hrs</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>

																	<span href="" class="kt-list-timeline__text">New order received <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">urgent</span></span>

																	<span class="kt-list-timeline__time">7 hrs</span>

																</div>

															</div>

														</div>

													</div>

												</div>

												<div class="tab-pane" id="kt_widget4_tab12_content">

													<div class="kt-scroll" data-scroll="true" data-height="400" style="height: 400px;">

														<div class="kt-list-timeline">

															<div class="kt-list-timeline__items">

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>

																	<span class="kt-list-timeline__text">New invoice received</span>

																	<span class="kt-list-timeline__time">20 mins</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>

																	<span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>

																	<span class="kt-list-timeline__time">1 hr</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>

																	<span class="kt-list-timeline__text">New invoice received</span>

																	<span class="kt-list-timeline__time">20 mins</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>

																	<span class="kt-list-timeline__text">12 new users registered</span>

																	<span class="kt-list-timeline__time">Just now</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>

																	<span class="kt-list-timeline__text">System shutdown <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">pending</span></span>

																	<span class="kt-list-timeline__time">14 mins</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>

																	<span class="kt-list-timeline__text">New invoice received</span>

																	<span class="kt-list-timeline__time">20 mins</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>

																	<span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>

																	<span class="kt-list-timeline__time">1 hr</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>

																	<span class="kt-list-timeline__text">System error - <a href="#" class="kt-link">Check</a></span>

																	<span class="kt-list-timeline__time">2 hrs</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>

																	<span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>

																	<span class="kt-list-timeline__time">1 hr</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>

																	<span class="kt-list-timeline__text">New invoice received</span>

																	<span class="kt-list-timeline__time">20 mins</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>

																	<span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>

																	<span class="kt-list-timeline__time">1 hr</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>

																	<span class="kt-list-timeline__text">System error - <a href="#" class="kt-link">Check</a></span>

																	<span class="kt-list-timeline__time">2 hrs</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--brand"></span>

																	<span class="kt-list-timeline__text">Production server down</span>

																	<span class="kt-list-timeline__time">3 hrs</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>

																	<span class="kt-list-timeline__text">Production server up</span>

																	<span class="kt-list-timeline__time">5 hrs</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>

																	<span href="" class="kt-list-timeline__text">New order received <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">urgent</span></span>

																	<span class="kt-list-timeline__time">7 hrs</span>

																</div>

															</div>

														</div>

													</div>

												</div>

												<div class="tab-pane" id="kt_widget4_tab13_content">

													<div class="kt-scroll" data-scroll="true" data-height="400" style="height: 400px;">

														<div class="kt-list-timeline">

															<div class="kt-list-timeline__items">

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>

																	<span href="" class="kt-list-timeline__text">New order received <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">urgent</span></span>

																	<span class="kt-list-timeline__time">7 hrs</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--brand"></span>

																	<span class="kt-list-timeline__text">New invoice received</span>

																	<span class="kt-list-timeline__time">20 mins</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>

																	<span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>

																	<span class="kt-list-timeline__time">1 hr</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>

																	<span class="kt-list-timeline__text">New invoice received</span>

																	<span class="kt-list-timeline__time">20 mins</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>

																	<span class="kt-list-timeline__text">12 new users registered</span>

																	<span class="kt-list-timeline__time">Just now</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>

																	<span class="kt-list-timeline__text">System shutdown <span class="kt-badge kt-badge--warning kt-badge--inline kt-badge--pill">pending</span></span>

																	<span class="kt-list-timeline__time">14 mins</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>

																	<span class="kt-list-timeline__text">New invoice received</span>

																	<span class="kt-list-timeline__time">20 mins</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>

																	<span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>

																	<span class="kt-list-timeline__time">1 hr</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>

																	<span class="kt-list-timeline__text">System error - <a href="#" class="kt-link">Check</a></span>

																	<span class="kt-list-timeline__time">2 hrs</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>

																	<span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">settled</span></span>

																	<span class="kt-list-timeline__time">1 hr</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>

																	<span class="kt-list-timeline__text">New invoice received</span>

																	<span class="kt-list-timeline__time">20 mins</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>

																	<span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">settled</span></span>

																	<span class="kt-list-timeline__time">1 hr</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>

																	<span class="kt-list-timeline__text">System error - <a href="#" class="kt-link">Check</a></span>

																	<span class="kt-list-timeline__time">2 hrs</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--brand"></span>

																	<span class="kt-list-timeline__text">Production server down</span>

																	<span class="kt-list-timeline__time">3 hrs</span>

																</div>

																<div class="kt-list-timeline__item">

																	<span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>

																	<span class="kt-list-timeline__text">Production server up</span>

																	<span class="kt-list-timeline__time">5 hrs</span>

																</div>

															</div>

														</div>

													</div>

												</div>

											</div>

										</div>

									</div>



									<!--end:: Widgets/Audit Log-->

								</div>

								<div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1">



									<!--begin:: Widgets/Blog-->

									<div class="kt-portlet kt-portlet--height-fluid kt-widget19">

										<div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">

											<div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url(assets/media//products/product4.jpg)">

												<h3 class="kt-widget19__title kt-font-light">

													Introducing New Feature

												</h3>

												<div class="kt-widget19__shadow"></div>

												<div class="kt-widget19__labels">

													<a href="#" class="btn btn-label-light-o2 btn-bold btn-pill">Recent</a>

												</div>

											</div>

										</div>

										<div class="kt-portlet__body">

											<div class="kt-widget19__wrapper">

												<div class="kt-widget19__content">

													<div class="kt-widget19__userpic">

														<img src="assets/media/users/user1.jpg" alt="">

													</div>

													<div class="kt-widget19__info">

														<a href="#" class="kt-widget19__username">

															Anna Krox

														</a>

														<span class="kt-widget19__time">

															UX/UI Designer, Google

														</span>

													</div>

													<div class="kt-widget19__stats">

														<span class="kt-widget19__number kt-font-brand">

															18

														</span>

														<a href="#" class="kt-widget19__comment">

															Comments

														</a>

													</div>

												</div>

												<div class="kt-widget19__text">

													Lorem Ipsum is simply dummy text of the printing and typesetting scrambled a type specimen book text of the dummy text of the printing printing and typesetting industry scrambled dummy text of the printing.

												</div>

											</div>

											<div class="kt-widget19__action">

												<a href="#" class="btn btn-sm btn-label-brand btn-bold">Read More...</a>

											</div>

										</div>

									</div>



									<!--end:: Widgets/Blog-->

								</div>

							</div>



							<!--End::Row-->



							<!--Begin::Row-->

							<div class="row">

								<div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1">



									<!--begin:: Widgets/Download Files-->

									<div class="kt-portlet kt-portlet--height-fluid">

										<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">

												<h3 class="kt-portlet__head-title">

													Download Files

												</h3>

											</div>

											<div class="kt-portlet__head-toolbar">

												<a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">

													Latest

												</a>

												<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">



													<!--begin::Nav-->

													<ul class="kt-nav">

														<li class="kt-nav__head">

															Export Options

															<span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">

																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">

																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">

																		<rect x="0" y="0" width="24" height="24" />

																		<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />

																		<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />

																		<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />

																	</g>

																</svg> </span>

														</li>

														<li class="kt-nav__separator"></li>

														<li class="kt-nav__item">

															<a href="#" class="kt-nav__link">

																<i class="kt-nav__link-icon flaticon2-drop"></i>

																<span class="kt-nav__link-text">Activity</span>

															</a>

														</li>

														<li class="kt-nav__item">

															<a href="#" class="kt-nav__link">

																<i class="kt-nav__link-icon flaticon2-calendar-8"></i>

																<span class="kt-nav__link-text">FAQ</span>

															</a>

														</li>

														<li class="kt-nav__item">

															<a href="#" class="kt-nav__link">

																<i class="kt-nav__link-icon flaticon2-telegram-logo"></i>

																<span class="kt-nav__link-text">Settings</span>

															</a>

														</li>

														<li class="kt-nav__item">

															<a href="#" class="kt-nav__link">

																<i class="kt-nav__link-icon flaticon2-new-email"></i>

																<span class="kt-nav__link-text">Support</span>

																<span class="kt-nav__link-badge">

																	<span class="kt-badge kt-badge--success kt-badge--rounded">5</span>

																</span>

															</a>

														</li>

														<li class="kt-nav__separator"></li>

														<li class="kt-nav__foot">

															<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>

															<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>

														</li>

													</ul>



													<!--end::Nav-->

												</div>

											</div>

										</div>

										<div class="kt-portlet__body">



											<!--begin::k-widget4-->

											<div class="kt-widget4">

												<div class="kt-widget4__item">

													<div class="kt-widget4__pic kt-widget4__pic--icon">

														<img src="assets/media/files/doc.svg" alt="">

													</div>

													<a href="#" class="kt-widget4__title">

														Metronic Documentation

													</a>

													<div class="kt-widget4__tools">

														<a href="#" class="btn btn-clean btn-icon btn-sm">

															<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>

														</a>

													</div>

												</div>

												<div class="kt-widget4__item">

													<div class="kt-widget4__pic kt-widget4__pic--icon">

														<img src="assets/media/files/jpg.svg" alt="">

													</div>

													<a href="#" class="kt-widget4__title">

														Project Launch Event

													</a>

													<div class="kt-widget4__tools">

														<a href="#" class="btn btn-clean btn-icon btn-sm">

															<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>

														</a>

													</div>

												</div>

												<div class="kt-widget4__item">

													<div class="kt-widget4__pic kt-widget4__pic--icon">

														<img src="assets/media/files/pdf.svg" alt="">

													</div>

													<a href="#" class="kt-widget4__title">

														Full Developer Manual For 4.7

													</a>

													<div class="kt-widget4__tools">

														<a href="#" class="btn btn-clean btn-icon btn-sm">

															<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>

														</a>

													</div>

												</div>

												<div class="kt-widget4__item">

													<div class="kt-widget4__pic kt-widget4__pic--icon">

														<img src="assets/media/files/javascript.svg" alt="">

													</div>

													<a href="#" class="kt-widget4__title">

														Make JS Development

													</a>

													<div class="kt-widget4__tools">

														<a href="#" class="btn btn-clean btn-icon btn-sm">

															<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>

														</a>

													</div>

												</div>

												<div class="kt-widget4__item">

													<div class="kt-widget4__pic kt-widget4__pic--icon">

														<img src="assets/media/files/zip.svg" alt="">

													</div>

													<a href="#" class="kt-widget4__title">

														Download Ziped version OF 5.0

													</a>

													<div class="kt-widget4__tools">

														<a href="#" class="btn btn-clean btn-icon btn-sm">

															<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>

														</a>

													</div>

												</div>

												<div class="kt-widget4__item">

													<div class="kt-widget4__pic kt-widget4__pic--icon">

														<img src="assets/media/files/pdf.svg" alt="">

													</div>

													<a href="#" class="kt-widget4__title">

														Finance Report 2016/2017

													</a>

													<div class="kt-widget4__tools">

														<a href="#" class="btn btn-clean btn-icon btn-sm">

															<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>

														</a>

													</div>

												</div>

											</div>



											<!--end::Widget 9-->

										</div>

									</div>



									<!--end:: Widgets/Download Files-->

								</div>

								<div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1">



									<!--begin:: Widgets/New Users-->

									<div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">

										<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">

												<h3 class="kt-portlet__head-title">

													New Users

												</h3>

											</div>

											<div class="kt-portlet__head-toolbar">

												<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">

													<li class="nav-item">

														<a class="nav-link active" data-toggle="tab" href="#kt_widget4_tab1_content" role="tab">

															Today

														</a>

													</li>

													<li class="nav-item">

														<a class="nav-link" data-toggle="tab" href="#kt_widget4_tab2_content" role="tab">

															Month

														</a>

													</li>

												</ul>

											</div>

										</div>

										<div class="kt-portlet__body">

											<div class="tab-content">

												<div class="tab-pane active" id="kt_widget4_tab1_content">

													<div class="kt-widget4">

														<div class="kt-widget4__item">

															<div class="kt-widget4__pic kt-widget4__pic--pic">

																<img src="assets/media/users/100_4.jpg" alt="">

															</div>

															<div class="kt-widget4__info">

																<a href="#" class="kt-widget4__username">

																	Anna Strong

																</a>

																<p class="kt-widget4__text">

																	Visual Designer,Google Inc

																</p>

															</div>

															<a href="#" class="btn btn-sm btn-label-brand btn-bold">Follow</a>

														</div>

														<div class="kt-widget4__item">

															<div class="kt-widget4__pic kt-widget4__pic--pic">

																<img src="assets/media/users/100_14.jpg" alt="">

															</div>

															<div class="kt-widget4__info">

																<a href="#" class="kt-widget4__username">

																	Milano Esco

																</a>

																<p class="kt-widget4__text">

																	Product Designer, Apple Inc

																</p>

															</div>

															<a href="#" class="btn btn-sm btn-label-warning btn-bold">Follow</a>

														</div>

														<div class="kt-widget4__item">

															<div class="kt-widget4__pic kt-widget4__pic--pic">

																<img src="assets/media/users/100_11.jpg" alt="">

															</div>

															<div class="kt-widget4__info">

																<a href="#" class="kt-widget4__username">

																	Nick Bold

																</a>

																<p class="kt-widget4__text">

																	Web Developer, Facebook Inc

																</p>

															</div>

															<a href="#" class="btn btn-sm btn-label-danger btn-bold">Follow</a>

														</div>

														<div class="kt-widget4__item">

															<div class="kt-widget4__pic kt-widget4__pic--pic">

																<img src="assets/media/users/100_1.jpg" alt="">

															</div>

															<div class="kt-widget4__info">

																<a href="#" class="kt-widget4__username">

																	Wiltor Delton

																</a>

																<p class="kt-widget4__text">

																	Project Manager, Amazon Inc

																</p>

															</div>

															<a href="#" class="btn btn-sm btn-label-success btn-bold">Follow</a>

														</div>

														<div class="kt-widget4__item">

															<div class="kt-widget4__pic kt-widget4__pic--pic">

																<img src="assets/media/users/100_5.jpg" alt="">

															</div>

															<div class="kt-widget4__info">

																<a href="#" class="kt-widget4__username">

																	Nick Stone

																</a>

																<p class="kt-widget4__text">

																	Visual Designer, Github Inc

																</p>

															</div>

															<a href="#" class="btn btn-sm btn-label-primary btn-bold">Follow</a>

														</div>

													</div>

												</div>

												<div class="tab-pane" id="kt_widget4_tab2_content">

													<div class="kt-widget4">

														<div class="kt-widget4__item">

															<div class="kt-widget4__pic kt-widget4__pic--pic">

																<img src="assets/media/users/100_2.jpg" alt="">

															</div>

															<div class="kt-widget4__info">

																<a href="#" class="kt-widget4__username">

																	Kristika Bold

																</a>

																<p class="kt-widget4__text">

																	Product Designer,Apple Inc

																</p>

															</div>

															<a href="#" class="btn btn-sm btn-label-success">Follow</a>

														</div>

														<div class="kt-widget4__item">

															<div class="kt-widget4__pic kt-widget4__pic--pic">

																<img src="assets/media/users/100_13.jpg" alt="">

															</div>

															<div class="kt-widget4__info">

																<a href="#" class="kt-widget4__username">

																	Ron Silk

																</a>

																<p class="kt-widget4__text">

																	Release Manager, Loop Inc

																</p>

															</div>

															<a href="#" class="btn btn-sm btn-label-brand">Follow</a>

														</div>

														<div class="kt-widget4__item">

															<div class="kt-widget4__pic kt-widget4__pic--pic">

																<img src="assets/media/users/100_9.jpg" alt="">

															</div>

															<div class="kt-widget4__info">

																<a href="#" class="kt-widget4__username">

																	Nick Bold

																</a>

																<p class="kt-widget4__text">

																	Web Developer, Facebook Inc

																</p>

															</div>

															<a href="#" class="btn btn-sm btn-label-danger">Follow</a>

														</div>

														<div class="kt-widget4__item">

															<div class="kt-widget4__pic kt-widget4__pic--pic">

																<img src="assets/media/users/100_2.jpg" alt="">

															</div>

															<div class="kt-widget4__info">

																<a href="#" class="kt-widget4__username">

																	Wiltor Delton

																</a>

																<p class="kt-widget4__text">

																	Project Manager, Amazon Inc

																</p>

															</div>

															<a href="#" class="btn btn-sm btn-label-success">Follow</a>

														</div>

														<div class="kt-widget4__item">

															<div class="kt-widget4__pic kt-widget4__pic--pic">

																<img src="assets/media/users/100_8.jpg" alt="">

															</div>

															<div class="kt-widget4__info">

																<a href="#" class="kt-widget4__username">

																	Nick Bold

																</a>

																<p class="kt-widget4__text">

																	Web Developer, Facebook Inc

																</p>

															</div>

															<a href="#" class="btn btn-sm btn-label-info">Follow</a>

														</div>

													</div>

												</div>

											</div>

										</div>

									</div>



									<!--end:: Widgets/New Users-->

								</div>

								<div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1">



									<!--begin:: Widgets/Last Updates-->

									<div class="kt-portlet kt-portlet--height-fluid">

										<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">

												<h3 class="kt-portlet__head-title">

													Latest Updates

												</h3>

											</div>

											<div class="kt-portlet__head-toolbar">

												<a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">

													Today

												</a>

												<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">



													<!--begin::Nav-->

													<ul class="kt-nav">

														<li class="kt-nav__head">

															Export Options

															<span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">

																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">

																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">

																		<rect x="0" y="0" width="24" height="24" />

																		<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />

																		<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />

																		<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />

																	</g>

																</svg> </span>

														</li>

														<li class="kt-nav__separator"></li>

														<li class="kt-nav__item">

															<a href="#" class="kt-nav__link">

																<i class="kt-nav__link-icon flaticon2-drop"></i>

																<span class="kt-nav__link-text">Activity</span>

															</a>

														</li>

														<li class="kt-nav__item">

															<a href="#" class="kt-nav__link">

																<i class="kt-nav__link-icon flaticon2-calendar-8"></i>

																<span class="kt-nav__link-text">FAQ</span>

															</a>

														</li>

														<li class="kt-nav__item">

															<a href="#" class="kt-nav__link">

																<i class="kt-nav__link-icon flaticon2-telegram-logo"></i>

																<span class="kt-nav__link-text">Settings</span>

															</a>

														</li>

														<li class="kt-nav__item">

															<a href="#" class="kt-nav__link">

																<i class="kt-nav__link-icon flaticon2-new-email"></i>

																<span class="kt-nav__link-text">Support</span>

																<span class="kt-nav__link-badge">

																	<span class="kt-badge kt-badge--success kt-badge--rounded">5</span>

																</span>

															</a>

														</li>

														<li class="kt-nav__separator"></li>

														<li class="kt-nav__foot">

															<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>

															<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>

														</li>

													</ul>



													<!--end::Nav-->

												</div>

											</div>

										</div>

										<div class="kt-portlet__body">



											<!--begin::widget 12-->

											<div class="kt-widget4">

												<div class="kt-widget4__item">

													<span class="kt-widget4__icon">

														<i class="flaticon-pie-chart-1 kt-font-info"></i>

													</span>

													<a href="#" class="kt-widget4__title kt-widget4__title--light">

														Metronic v6 has been arrived!

													</a>

													<span class="kt-widget4__number kt-font-info">+500</span>

												</div>

												<div class="kt-widget4__item">

													<span class="kt-widget4__icon">

														<i class="flaticon-safe-shield-protection  kt-font-success"></i>

													</span>

													<a href="#" class="kt-widget4__title kt-widget4__title--light">

														Metronic community meet-up 2019 in Rome.

													</a>

													<span class="kt-widget4__number kt-font-success">+1260</span>

												</div>

												<div class="kt-widget4__item">

													<span class="kt-widget4__icon">

														<i class="flaticon2-line-chart kt-font-danger"></i>

													</span>

													<a href="#" class="kt-widget4__title kt-widget4__title--light">

														Metronic Angular 8 version will be landing soon...

													</a>

													<span class="kt-widget4__number kt-font-danger">+1080</span>

												</div>

												<div class="kt-widget4__item">

													<span class="kt-widget4__icon">

														<i class="flaticon2-pie-chart-1 kt-font-primary"></i>

													</span>

													<a href="#" class="kt-widget4__title kt-widget4__title--light">

														ale! Purchase Metronic at 70% off for limited time

													</a>

													<span class="kt-widget4__number kt-font-primary">70% Off!</span>

												</div>

												<div class="kt-widget4__item">

													<span class="kt-widget4__icon">

														<i class="flaticon2-rocket kt-font-brand"></i>

													</span>

													<a href="#" class="kt-widget4__title kt-widget4__title--light">

														Metronic VueJS version is in progress. Stay tuned!

													</a>

													<span class="kt-widget4__number kt-font-brand">+134</span>

												</div>

												<div class="kt-widget4__item">

													<span class="kt-widget4__icon">

														<i class="flaticon2-notification kt-font-warning"></i>

													</span>

													<a href="#" class="kt-widget4__title kt-widget4__title--light">

														Black Friday! Purchase Metronic at ever lowest 90% off for limited time

													</a>

													<span class="kt-widget4__number kt-font-warning">70% Off!</span>

												</div>

												<div class="kt-widget4__item">

													<span class="kt-widget4__icon">

														<i class="flaticon2-file kt-font-success"></i>

													</span>

													<a href="#" class="kt-widget4__title kt-widget4__title--light">

														Metronic React version is in progress.

													</a>

													<span class="kt-widget4__number kt-font-success">+13%</span>

												</div>

											</div>



											<!--end::Widget 12-->

										</div>

									</div>



									<!--end:: Widgets/Last Updates-->

								</div>

								<div class="col-xl-6 col-lg-6 order-lg-1 order-xl-1">



									<!--Begin::Portlet-->

									<div class="kt-portlet kt-portlet--height-fluid">

										<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">

												<h3 class="kt-portlet__head-title">

													Recent Activities

												</h3>

											</div>

											<div class="kt-portlet__head-toolbar">

												<div class="dropdown dropdown-inline">

													<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

														<i class="flaticon-more-1"></i>

													</button>

													<div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">



														<!--begin::Nav-->

														<ul class="kt-nav">

															<li class="kt-nav__head">

																Export Options

																<span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">

																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">

																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">

																			<rect x="0" y="0" width="24" height="24" />

																			<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />

																			<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />

																			<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />

																		</g>

																	</svg> </span>

															</li>

															<li class="kt-nav__separator"></li>

															<li class="kt-nav__item">

																<a href="#" class="kt-nav__link">

																	<i class="kt-nav__link-icon flaticon2-drop"></i>

																	<span class="kt-nav__link-text">Activity</span>

																</a>

															</li>

															<li class="kt-nav__item">

																<a href="#" class="kt-nav__link">

																	<i class="kt-nav__link-icon flaticon2-calendar-8"></i>

																	<span class="kt-nav__link-text">FAQ</span>

																</a>

															</li>

															<li class="kt-nav__item">

																<a href="#" class="kt-nav__link">

																	<i class="kt-nav__link-icon flaticon2-telegram-logo"></i>

																	<span class="kt-nav__link-text">Settings</span>

																</a>

															</li>

															<li class="kt-nav__item">

																<a href="#" class="kt-nav__link">

																	<i class="kt-nav__link-icon flaticon2-new-email"></i>

																	<span class="kt-nav__link-text">Support</span>

																	<span class="kt-nav__link-badge">

																		<span class="kt-badge kt-badge--success kt-badge--rounded">5</span>

																	</span>

																</a>

															</li>

															<li class="kt-nav__separator"></li>

															<li class="kt-nav__foot">

																<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>

																<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>

															</li>

														</ul>



														<!--end::Nav-->

													</div>

												</div>

											</div>

										</div>

										<div class="kt-portlet__body">



											<!--Begin::Timeline 3 -->

											<div class="kt-timeline-v2">

												<div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">

													<div class="kt-timeline-v2__item">

														<span class="kt-timeline-v2__item-time">10:00</span>

														<div class="kt-timeline-v2__item-cricle">

															<i class="fa fa-genderless kt-font-danger"></i>

														</div>

														<div class="kt-timeline-v2__item-text  kt-padding-top-5">

															Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>

															incididunt ut labore et dolore magna

														</div>

													</div>

													<div class="kt-timeline-v2__item">

														<span class="kt-timeline-v2__item-time">12:45</span>

														<div class="kt-timeline-v2__item-cricle">

															<i class="fa fa-genderless kt-font-success"></i>

														</div>

														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">

															AEOL Meeting With

														</div>

														<div class="kt-list-pics kt-list-pics--sm kt-padding-l-20">

															<a href="#"><img src="assets/media/users/100_4.jpg" title=""></a>

															<a href="#"><img src="assets/media/users/100_13.jpg" title=""></a>

															<a href="#"><img src="assets/media/users/100_11.jpg" title=""></a>

															<a href="#"><img src="assets/media/users/100_14.jpg" title=""></a>

														</div>

													</div>

													<div class="kt-timeline-v2__item">

														<span class="kt-timeline-v2__item-time">14:00</span>

														<div class="kt-timeline-v2__item-cricle">

															<i class="fa fa-genderless kt-font-brand"></i>

														</div>

														<div class="kt-timeline-v2__item-text kt-padding-top-5">

															Make Deposit <a href="#" class="kt-link kt-link--brand kt-font-bolder">USD 700</a> To ESL.

														</div>

													</div>

													<div class="kt-timeline-v2__item">

														<span class="kt-timeline-v2__item-time">16:00</span>

														<div class="kt-timeline-v2__item-cricle">

															<i class="fa fa-genderless kt-font-warning"></i>

														</div>

														<div class="kt-timeline-v2__item-text kt-padding-top-5">

															Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>

															incididunt ut labore et dolore magna elit enim at minim<br>

															veniam quis nostrud

														</div>

													</div>

													<div class="kt-timeline-v2__item">

														<span class="kt-timeline-v2__item-time">17:00</span>

														<div class="kt-timeline-v2__item-cricle">

															<i class="fa fa-genderless kt-font-info"></i>

														</div>

														<div class="kt-timeline-v2__item-text kt-padding-top-5">

															Placed a new order in <a href="#" class="kt-link kt-link--brand kt-font-bolder">SIGNATURE MOBILE</a> marketplace.

														</div>

													</div>

													<div class="kt-timeline-v2__item">

														<span class="kt-timeline-v2__item-time">16:00</span>

														<div class="kt-timeline-v2__item-cricle">

															<i class="fa fa-genderless kt-font-brand"></i>

														</div>

														<div class="kt-timeline-v2__item-text kt-padding-top-5">

															Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>

															incididunt ut labore et dolore magna elit enim at minim<br>

															veniam quis nostrud

														</div>

													</div>

													<div class="kt-timeline-v2__item">

														<span class="kt-timeline-v2__item-time">17:00</span>

														<div class="kt-timeline-v2__item-cricle">

															<i class="fa fa-genderless kt-font-danger"></i>

														</div>

														<div class="kt-timeline-v2__item-text kt-padding-top-5">

															Received a new feedback on <a href="#" class="kt-link kt-link--brand kt-font-bolder">FinancePro App</a> product.

														</div>

													</div>

													<div class="kt-timeline-v2__item">

														<span class="kt-timeline-v2__item-time">15:30</span>

														<div class="kt-timeline-v2__item-cricle">

															<i class="fa fa-genderless kt-font-danger"></i>

														</div>

														<div class="kt-timeline-v2__item-text kt-padding-top-5">

															New notification message has been received on <a href="#" class="kt-link kt-link--brand kt-font-bolder">LoopFin Pro</a> product.

														</div>

													</div>

												</div>

											</div>



											<!--End::Timeline 3 -->

										</div>

									</div>



									<!--End::Portlet-->

								</div>

								<div class="col-xl-6 col-lg-6 order-lg-1 order-xl-1">



									<!--Begin::Portlet-->

									<div class="kt-portlet kt-portlet--height-fluid">

										<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">

												<h3 class="kt-portlet__head-title">

													Recent Notifications

												</h3>

											</div>

											<div class="kt-portlet__head-toolbar">

												<ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">

													<li class="nav-item">

														<a class="nav-link active" data-toggle="tab" href="#kt_widget3_tab1_content" role="tab">

															Today

														</a>

													</li>

													<li class="nav-item">

														<a class="nav-link" data-toggle="tab" href="#kt_widget3_tab2_content" role="tab">

															Month

														</a>

													</li>

												</ul>

											</div>

										</div>

										<div class="kt-portlet__body">

											<div class="tab-content">

												<div class="tab-pane active" id="kt_widget3_tab1_content">



													<!--Begin::Timeline 3 -->

													<div class="kt-timeline-v3">

														<div class="kt-timeline-v3__items">

															<div class="kt-timeline-v3__item kt-timeline-v3__item--info">

																<span class="kt-timeline-v3__item-time">09:00</span>

																<div class="kt-timeline-v3__item-desc">

																	<span class="kt-timeline-v3__item-text">

																		Lorem ipsum dolor sit amit,consectetur eiusmdd tempor

																	</span><br>

																	<span class="kt-timeline-v3__item-user-name">

																		<a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">

																			By Bob

																		</a>

																	</span>

																</div>

															</div>

															<div class="kt-timeline-v3__item kt-timeline-v3__item--warning">

																<span class="kt-timeline-v3__item-time">10:00</span>

																<div class="kt-timeline-v3__item-desc">

																	<span class="kt-timeline-v3__item-text">

																		Lorem ipsum dolor sit amit

																	</span><br>

																	<span class="kt-timeline-v3__item-user-name">

																		<a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">

																			By Sean

																		</a>

																	</span>

																</div>

															</div>

															<div class="kt-timeline-v3__item kt-timeline-v3__item--brand">

																<span class="kt-timeline-v3__item-time">11:00</span>

																<div class="kt-timeline-v3__item-desc">

																	<span class="kt-timeline-v3__item-text">

																		Lorem ipsum dolor sit amit eiusmdd tempor

																	</span><br>

																	<span class="kt-timeline-v3__item-user-name">

																		<a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">

																			By James

																		</a>

																	</span>

																</div>

															</div>

															<div class="kt-timeline-v3__item kt-timeline-v3__item--success">

																<span class="kt-timeline-v3__item-time">12:00</span>

																<div class="kt-timeline-v3__item-desc">

																	<span class="kt-timeline-v3__item-text">

																		Lorem ipsum dolor

																	</span><br>

																	<span class="kt-timeline-v3__item-user-name">

																		<a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">

																			By James

																		</a>

																	</span>

																</div>

															</div>

															<div class="kt-timeline-v3__item kt-timeline-v3__item--danger">

																<span class="kt-timeline-v3__item-time">14:00</span>

																<div class="kt-timeline-v3__item-desc">

																	<span class="kt-timeline-v3__item-text">

																		Lorem ipsum dolor sit amit,consectetur eiusmdd

																	</span><br>

																	<span class="kt-timeline-v3__item-user-name">

																		<a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">

																			By Derrick

																		</a>

																	</span>

																</div>

															</div>

															<div class="kt-timeline-v3__item kt-timeline-v3__item--info">

																<span class="kt-timeline-v3__item-time">15:00</span>

																<div class="kt-timeline-v3__item-desc">

																	<span class="kt-timeline-v3__item-text">

																		Lorem ipsum dolor sit amit,consectetur

																	</span><br>

																	<span class="kt-timeline-v3__item-user-name">

																		<a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">

																			By Iman

																		</a>

																	</span>

																</div>

															</div>

															<div class="kt-timeline-v3__item kt-timeline-v3__item--brand">

																<span class="kt-timeline-v3__item-time">17:00</span>

																<div class="kt-timeline-v3__item-desc">

																	<span class="kt-timeline-v3__item-text">

																		Lorem ipsum dolor sit consectetur eiusmdd tempor

																	</span><br>

																	<span class="kt-timeline-v3__item-user-name">

																		<a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">

																			By Aziko

																		</a>

																	</span>

																</div>

															</div>

														</div>

													</div>



													<!--End::Timeline 3 -->

												</div>

												<div class="tab-pane" id="kt_widget3_tab2_content">



													<!--Begin::Timeline 3 -->

													<div class="kt-timeline-v3">

														<div class="kt-timeline-v3__items">

															<div class="kt-timeline-v3__item kt-timeline-v3__item--info">

																<span class="kt-timeline-v3__item-time kt-font-success">09:00</span>

																<div class="kt-timeline-v3__item-desc">

																	<span class="kt-timeline-v3__item-text">

																		Contrary to popular belief, Lorem Ipsum is not simply random text.

																	</span><br>

																	<span class="kt-timeline-v3__item-user-name">

																		<a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">

																			By Bob

																		</a>

																	</span>

																</div>

															</div>

															<div class="kt-timeline-v3__item kt-timeline-v3__item--warning">

																<span class="kt-timeline-v3__item-time kt-font-warning">10:00</span>

																<div class="kt-timeline-v3__item-desc">

																	<span class="kt-timeline-v3__item-text">

																		There are many variations of passages of Lorem Ipsum available.

																	</span><br>

																	<span class="kt-timeline-v3__item-user-name">

																		<a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">

																			By Sean

																		</a>

																	</span>

																</div>

															</div>

															<div class="kt-timeline-v3__item kt-timeline-v3__item--brand">

																<span class="kt-timeline-v3__item-time kt-font-primary">11:00</span>

																<div class="kt-timeline-v3__item-desc">

																	<span class="kt-timeline-v3__item-text">

																		Contrary to popular belief, Lorem Ipsum is not simply random text.

																	</span><br>

																	<span class="kt-timeline-v3__item-user-name">

																		<a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">

																			By James

																		</a>

																	</span>

																</div>

															</div>

															<div class="kt-timeline-v3__item kt-timeline-v3__item--success">

																<span class="kt-timeline-v3__item-time kt-font-success">12:00</span>

																<div class="kt-timeline-v3__item-desc">

																	<span class="kt-timeline-v3__item-text">

																		The standard chunk of Lorem Ipsum used since the 1500s is reproduced.

																	</span><br>

																	<span class="kt-timeline-v3__item-user-name">

																		<a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">

																			By James

																		</a>

																	</span>

																</div>

															</div>

															<div class="kt-timeline-v3__item kt-timeline-v3__item--danger">

																<span class="kt-timeline-v3__item-time kt-font-warning">14:00</span>

																<div class="kt-timeline-v3__item-desc">

																	<span class="kt-timeline-v3__item-text">

																		Latin words, combined with a handful of model sentence structures.

																	</span><br>

																	<span class="kt-timeline-v3__item-user-name">

																		<a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">

																			By Derrick

																		</a>

																	</span>

																</div>

															</div>

															<div class="kt-timeline-v3__item kt-timeline-v3__item--info">

																<span class="kt-timeline-v3__item-time kt-font-info">15:00</span>

																<div class="kt-timeline-v3__item-desc">

																	<span class="kt-timeline-v3__item-text">

																		Contrary to popular belief, Lorem Ipsum is not simply random text.

																	</span><br>

																	<span class="kt-timeline-v3__item-user-name">

																		<a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">

																			By Iman

																		</a>

																	</span>

																</div>

															</div>

															<div class="kt-timeline-v3__item kt-timeline-v3__item--brand">

																<span class="kt-timeline-v3__item-time kt-font-danger">17:00</span>

																<div class="kt-timeline-v3__item-desc">

																	<span class="kt-timeline-v3__item-text">

																		Lorem Ipsum is therefore always free from repetition, injected humour.

																	</span><br>

																	<span class="kt-timeline-v3__item-user-name">

																		<a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">

																			By Aziko

																		</a>

																	</span>

																</div>

															</div>

														</div>

													</div>



													<!--End::Timeline 3 -->

												</div>

											</div>

										</div>

									</div>



									<!--End::Portlet-->

								</div>

							</div>



							<!--End::Row-->



							<!--End::Dashboard 6-->

						</div>



						<!-- end:: Content -->

					</div>

@stop