<div class="nk-sidebar-element nk-sidebar-head">
    <div class="nk-sidebar-brand"><a href="index.html" class="logo-link nk-sidebar-logo"><img class="logo-light logo-img"
                src="images/logo.png" srcset="/demo2/images/logo2x.png 2x" alt="logo"><img class="logo-dark logo-img"
                src="images/logo-dark.png" srcset="/demo2/images/logo-dark2x.png 2x" alt="logo-dark"><img
                class="logo-small logo-img logo-img-small" src="images/logo-small.png"
                srcset="/demo2/images/logo-small2x.png 2x" alt="logo-small"></a></div>
    <div class="nk-menu-trigger me-n2"><a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none"
            data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a><a href="#"
            class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em
                class="icon ni ni-menu"></em></a></div>
</div>
<div class="nk-sidebar-element">
    <div class="nk-sidebar-content">
        <div class="nk-sidebar-menu" data-simplebar>
            <ul class="nk-menu">

                <li class="nk-menu-heading">
                    <h6 class="overline-title text-primary-alt">Menu</h6>
                </li>

                <li class="nk-menu-item"><a href="{{ route('admin.dashboard') }}" class="nk-menu-link"><span
                            class="nk-menu-icon"><em class="icon ni ni-growth-fill"></em></span><span
                            class="nk-menu-text">Dashboard</span></a></li>

                <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                            class="nk-menu-icon"><em class="icon ni ni-tile-thumb-fill"></em></span><span
                            class="nk-menu-text">Home</span></a>
                    <ul class="nk-menu-sub">
                        <li class="nk-menu-item"><a href="{{ route('admin.slider') }}" class="nk-menu-link"><span
                                    class="nk-menu-text">Slider
                                </span></a></li>

                        <li class="nk-menu-item"><a href="{{ route('admin.about') }}" class="nk-menu-link"><span
                                    class="nk-menu-text">About
                                </span></a></li>
                        <li class="nk-menu-item"><a href="{{ route('admin.paper') }}" class="nk-menu-link"><span
                                    class="nk-menu-text">Call for papers
                                </span></a></li>
                        <li class="nk-menu-item"><a href="{{ route('admin.guideline') }}" class="nk-menu-link"><span
                                    class="nk-menu-text">Guideline
                                </span></a></li>

                    </ul>
                </li>
                <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                            class="nk-menu-icon"><em class="icon ni ni-card-view"></em></span><span
                            class="nk-menu-text">Manuscript</span></a>
                    <ul class="nk-menu-sub">
                        <li class="nk-menu-item"><a href="{{ route('admin.show.manuscript') }}"
                                class="nk-menu-link"><span class="nk-menu-text">Received Manuscript
                                </span></a>
                        </li>
                    </ul>
                </li>

                <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                            class="nk-menu-icon"><em class="icon ni ni-card-view"></em></span><span
                            class="nk-menu-text">Article</span></a>
                    <ul class="nk-menu-sub">
                        <li class="nk-menu-item"><a href="{{ route('admin.article') }}" class="nk-menu-link"><span
                                    class="nk-menu-text">Article
                                </span></a>
                        </li>
                        <li class="nk-menu-item"><a href="{{ route('admin.article.template') }}"
                                class="nk-menu-link"><span class="nk-menu-text">Article Template
                                </span></a>
                        </li>
                        <li class="nk-menu-item"><a href="{{ route('admin.volume') }}" class="nk-menu-link"><span
                                    class="nk-menu-text">Volume
                                </span></a></li>
                    </ul>
                </li>

                <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                            class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span><span
                            class="nk-menu-text">Editor(s) and Designations</span></a>
                    <ul class="nk-menu-sub">
                        <li class="nk-menu-item"><a href="{{ route('admin.designation') }}" class="nk-menu-link"><span
                                    class="nk-menu-text">Designations</span></a></li>
                        <li class="nk-menu-item"><a href="{{ route('admin.editor') }}" class="nk-menu-link"><span
                                    class="nk-menu-text">Editor</span></a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>
