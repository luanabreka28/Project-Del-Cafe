<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true"
				data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}"
				data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}"
				data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
				<div class="aside-logo flex-column-auto" id="kt_aside_logo">
					<a href="{{ route('admin.dashboard') }}">
						<img alt="Logo" src="{{ asset('img/logo.png') }}" class="h-90px logo" />
					</a>
					<div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
						data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
						data-kt-toggle-name="aside-minimize">
						<span class="svg-icon svg-icon-1 rotate-180">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none">
								<path opacity="0.5"
									d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
									fill="currentColor" />
								<path
									d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
									fill="currentColor" />
							</svg>
						</span>
					</div>
				</div>
				<div class="aside-menu flex-column-fluid">
					<div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
						data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
						data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
						data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
						<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
							id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-icon">
										<span class="svg-icon svg-icon-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
												<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
													fill="currentColor" />
												<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
													fill="currentColor" />
												<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
													fill="currentColor" />
											</svg>
										</span>
									</span>
									<span class="menu-title">Dashboards</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="#">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Dashboard</span>
										</a>
									</div>
								</div>
							</div>
							<div class="menu-item">
								<div class="menu-content pt-8 pb-2">
									<span class="menu-section text-muted text-uppercase fs-8 ls-1">Apps</span>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<a href="{{ route('admin.list-day.index') }}"><span class="menu-link">
									<span class="menu-icon">
										<!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
										<span class="svg-icon svg-icon-2">
											<i class="bi bi-calendar-check fs-2"></i>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-title">Menu Hari</span>
								</span></a>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
								<a href="{{ route('admin.list-food.index') }}"><span class="menu-link">
									<span class="menu-icon">
										<!--begin::Svg Icon | path: icons/duotune/general/gen051.svg-->
										<span class="svg-icon svg-icon-2">
											<i class="bi bi-check2-square fs-2"></i>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-title">Daftar Makanan</span>
								</span></a>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<a href="{{ route('admin.alternatife.index') }}"><span class="menu-link">
									<span class="menu-icon">
										<!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
										<span class="svg-icon svg-icon-2">
											<i class="las la-tags fs-1"></i>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-title">Makanan Pengganti</span>
								</span></a>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<a href="{{ route('admin.listchange.index') }}"><span class="menu-link">
									<span class="menu-icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor"></path>
											<path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor"></path>
										</svg>
									</span>
									<span class="menu-title">Pesan</span>
								</span></a>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<a href="{{ route('admin.voucher.index') }}"><span class="menu-link">
									<span class="menu-icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 9V11C21 11.6 20.6 12 20 12H14V8H20C20.6 8 21 8.4 21 9ZM10 8H4C3.4 8 3 8.4 3 9V11C3 11.6 3.4 12 4 12H10V8Z" fill="currentColor"></path>
											<path d="M15 2C13.3 2 12 3.3 12 5V8H15C16.7 8 18 6.7 18 5C18 3.3 16.7 2 15 2Z" fill="currentColor"></path>
											<path opacity="0.3" d="M9 2C10.7 2 12 3.3 12 5V8H9C7.3 8 6 6.7 6 5C6 3.3 7.3 2 9 2ZM4 12V21C4 21.6 4.4 22 5 22H10V12H4ZM20 12V21C20 21.6 19.6 22 19 22H14V12H20Z" fill="currentColor"></path>
										</svg>
									</span>
									<span class="menu-title">Voucher</span>
								</span></a>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<a href="{{ route('admin.comment.index') }}"><span class="menu-link">
									<span class="menu-icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="currentColor"></path>
											<rect x="6" y="12" width="7" height="2" rx="1" fill="currentColor"></rect>
											<rect x="6" y="7" width="12" height="2" rx="1" fill="currentColor"></rect>
										</svg>
									</span>
									<span class="menu-title">Komentar</span>
								</span></a>
							</div>
						</div>
						<!--end::Menu-->
					</div>
					<!--end::Aside Menu-->
				</div>
				<!--end::Aside menu-->
				
			</div>