<div class="container-fluid">
    <div class="nk-header-wrap">
        <div class="nk-menu-trigger d-xl-none ms-n1"><a href="#" class="nk-nav-toggle nk-quick-nav-icon"
                data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a></div>
        <div class="nk-header-brand d-xl-none"><a href="index.html" class="logo-link"><img class="logo-light logo-img"
                    src="images/logo.png" srcset="/demo2/images/logo2x.png 2x" alt="logo"><img
                    class="logo-dark logo-img" src="images/logo-dark.png" srcset="/demo2/images/logo-dark2x.png 2x"
                    alt="logo-dark"></a></div>
        <div class="nk-header-search ms-3 ms-xl-0"><em class="icon ni ni-search"></em><input type="text"
                class="form-control border-transparent form-focus-none" placeholder="Search anything"></div>
        <div class="nk-header-tools">
            <ul class="nk-quick-nav">



                <li class="dropdown user-dropdown"><a href="#" class="dropdown-toggle me-n1"
                        data-bs-toggle="dropdown">
                        <div class="user-toggle">
                            <div class="user-avatar sm"><em class="icon ni ni-user-alt"></em>
                            </div>
                            <div class="user-info d-none d-xl-block">

                                <div class="user-name dropdown-indicator">{{ auth()->user()->name }}
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                        <div class="dropdown-inner">
                            <ul class="link-list">
                                <li>

                                    <a href="{{ route('logout') }}"><em class="icon ni ni-signout"></em><span>Sign
                                            out</span></a>

                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
