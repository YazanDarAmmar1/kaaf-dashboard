<!-- main-header opened -->
			<div class="main-header sticky side-header nav nav-item">
				<div class="container-fluid">
					<div class="main-header-left ">
						<div class="responsive-logo">
							<a><img src="{{URL::asset('assets/img/brand/kaaf.png')}}" class="logo-1" alt="logo"></a>
							<a><img src="{{URL::asset('assets/img/brand/kaaf.png')}}" class="logo-2" alt="logo"></a>
						</div>
						<div class="app-sidebar__toggle" data-toggle="sidebar">
							<a class="open-toggle" href="#"><i class="header-icon fe fe-align-left" ></i></a>
							<a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
						</div>
						<div class="main-header-center mr-3 d-sm-none d-md-none d-lg-block">
							<input class="form-control" placeholder="Search for anything..." type="search"> <button class="btn"><i class="fas fa-search d-none d-md-block"></i></button>
						</div>
					</div>
					<div class="main-header-right">

						<div class="nav nav-item  navbar-nav-right ml-auto">
							<div class="nav-item full-screen fullscreen-button">
								<a class="new nav-link full-screen-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg></a>
							</div>
							<div class="dropdown main-profile-menu nav nav-item nav-link">
								<a class="profile-user d-flex" href=""><img alt="" src="{{URL::asset('assets/img/brand/login-bg.png')}}"></a>
								<div class="dropdown-menu">
									<div class="main-header-profile bg-primary p-3">
										<div class="d-flex wd-100p">
											<div class="main-img-user"><img alt="" src="{{URL::asset('assets/img/brand/login-bg.png')}}" class=""></div>
											<div class="mr-3 my-auto">
												<h6>كاف الإنسانية</h6><span>مستخدم أساسي</span>
											</div>
										</div>
									</div>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
														 this.closest('form').submit();" class="dropdown-item ai-icon">
                                            <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                                 width="18" height="18" viewBox="0 0 24 24" fill="none"
                                                 stroke="currentColor"
                                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                                <polyline points="16 17 21 12 16 7"></polyline>
                                                <line x1="21" y1="12" x2="9" y2="12"></line>
                                            </svg>
                                            <span class="me-2">Logout </span>
                                        </a>
                                    </form>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- /main-header -->
