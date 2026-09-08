<!-- sidebar -->
<div class="sidebar px-4 py-4 py-md-4 me-0">
    <div class="d-flex flex-column h-100">
        <a href="{!! route('home') !!}" class="mb-0 brand-icon">
            <span class="logo-icon">
                <i class="bi bi-bag-check-fill fs-4"></i>
            </span>
            <span class="logo-text">{{ Auth::user()->name }} </span>
        </a>
        <ul class="menu-list flex-grow-1 mt-3">
            <li><a class="m-link" href="{!! route('admin/dashboard') !!}"><i class="icofont-home fs-5"></i>
                    <span>Dashboard</span></a></li>
            </li>
            <li
                class="collapsed{{ Request::is('admin/home*') || Request::is('admin/certificate*') || Request::is('admin/oursolution*')  ? ' active' : '' }}">
                <a class="m-link{{ Request::is('admin/home*') || Request::is('admin/certificate*') || Request::is('admin/oursolution*') ? ' active' : '' }}"
                    data-bs-toggle="collapse" data-bs-target="#menu-home" href="javascript:void(0);">
                    <i class="icofont-ui-home fs-5"></i>
                    <span>Home Page</span>
                    <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span>
                </a>
                <ul class="sub-menu collapse{{ Request::is('admin/home*') || Request::is('admin/client*') || Request::is('admin/oursolution*')  ? ' show' : '' }}"
                    id="menu-home">
                    <li class="{{ Request::is('admin/client*') ? ' active' : '' }}">
                        <a class="ms-link{{ Request::routeIs('client.index') ? ' active' : '' }}"
                            href="{!! route('client.index') !!}">
                            <i class="icofont-users-alt-3 fs-5"></i>
                            <span>Client</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/brand*') ? ' active' : '' }}">
                        <a class="ms-link{{ Request::routeIs('brand.index') ? ' active' : '' }}"
                            href="{!! route('brand.index') !!}">
                            <i class="icofont-users-alt-3 fs-5"></i>
                            <span>Brand</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/oursolution*') ? ' active' : '' }}">
                        <a class="ms-link{{ Request::routeIs('oursolution.index') ? ' active' : '' }}"
                            href="{!! route('oursolution.index') !!}">
                            <i class="icofont-tools fs-5"></i>
                            <span>Our Solution</span>
                        </a>
                    </li>                     
                </ul>
            </li>
            <li>
                <a class="m-link {{ Request::is('admin/blog*') ? 'active' : '' }}" href="{!! route('blog.index') !!}">
                    <i class="icofont-blogger fs-5"></i>
                    <span>Blog</span>
                </a> 
            </li>
            <li>
                <a class="m-link {{ request()->routeIs('hiro.section' , 'hiro.section.create') ? 'active' : '' }}" href="{!! route('hiro.section') !!}">
                    <i class="icofont-blogger fs-5"></i>
                    <span>Hero Section</span>
                </a>
            </li>
            <li>
                <a class="m-link {{ Request::is('admin/faq*') ? 'active' : '' }}" href="{!! route('faq.index') !!}">
                    <i class="icofont-question-circle fs-5"></i>
                    <span>Faq</span>
                </a>
            </li>

            <li>
                <a class="m-link {{ Request::is('admin/downloadcategory*') ? 'active' : '' }}" href="{!! route('downloadcategory.index') !!}">
                    <i class="icofont-listing-box  fs-5"></i>
                    <span>Download Category</span>
                </a>
            </li>

            <li>
                <a class="m-link {{ Request::is('admin/download*') ? 'active' : '' }}" href="{!! route('download.index') !!}">
                    <i class="icofont-download fs-5"></i>
                    <span>Download </span>
                </a>
            </li> 
            <li>
                <a class="m-link {{ Request::is('admin/certificate*') ? 'active' : '' }}" href="{!! route('certificate.index') !!}">
                    <i class="icofont-building fs-5"></i>
                    <span>Certificate </span>
                </a>
            </li>
            <li>
                <a class="m-link {{ Request::is('admin/keyfeature*') ? 'active' : '' }}" href="{!! route('keyfeature.index') !!}">
                    <i class="icofont-ui-chat fs-5"></i>
                    <span>Key Feature </span>
                </a>
            </li>
            <li>
                <a class="m-link {{ Request::is('admin/ourexpert*') ? 'active' : '' }}" href="{!! route('ourexpert.index') !!}">
                    <i class="icofont-calendar fs-5"></i>
                    <span>Our Expert</span>
                </a>
            </li>
            <li>
                <a class="m-link {{ request()->routeIs('productcategory' , 'productcategory.create') ? 'active' : '' }}" href="{!! route('productcategory.index') !!}">
                    <i class="icofont-blogger fs-5"></i>
                    <span>Product Category</span>
                </a>
            </li>
            
            <li>
                <a class="m-link {{ request()->routeIs('product' , 'product.create') ? 'active' : '' }}" href="{!! route('product') !!}">
                    <i class="icofont-blogger fs-5"></i>
                    <span>Product</span>
                </a>
            </li>
            <li>
                <a class="m-link {{ request()->routeIs('admin.video' , 'admin.createVideo' , 'admin.video.edit') ? 'active' : '' }}" data-bs-toggle="collapse" data-bs-target="#menu-video" href="#">
                    <i class="icofont-truck-loaded fs-5"></i> <span>Video</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="menu-video">
                        <li><a class="ms-link {{ request()->routeIs('admin.video') ? 'active' : '' }}" href="{{ route('admin.video') }}">List</a></li>
                        <li><a class="ms-link {{ request()->routeIs('admin.createVideo') ? 'active' : '' }}" href="{{ route('admin.createVideo') }}">Add Video</a></li>
            
                    </ul>
            </li>
            <li>
                <a class="m-link {{ Request::is('admin/boardmember*') ? 'active' : '' }}" href="{!! route('boardmember') !!}">
                    <i class="icofont-listing-box  fs-5"></i>
                    <span>Board Member</span>
                </a>
            </li>
            <li>
                <a class="m-link {{ Request::is('admin/milestone*') ? 'active' : '' }}" href="{!! route('milestone.index') !!}">
                    <i class="icofont-ui-chat fs-5"></i>
                    <span>Milestone </span>
                </a>
            </li>
            <li>
                <a class="m-link {{ Request::is('admin/gallery*') ? 'active' : '' }}" href="{!! route('gallery.index') !!}">
                    <i class="icofont-camera fs-5"></i>
                    <span>Gallery </span>
                </a>
            </li>
            <!--<li>-->
            <!--    <a class="m-link {{ Request::is('admin/video*') ? 'active' : '' }}" href="{!! route('admin.video') !!}">-->
            <!--        <i class="icofont-video fs-5"></i>-->
            <!--        <span>Video </span>-->
            <!--    </a>-->
            <!--</li>-->
            <li>
                <a class="m-link {{ Request::is('admin/news*') ? 'active' : '' }}" href="{!! route('news.index') !!}">
                    <i class="icofont-newspaper fs-5"></i>
                    <span>News </span>
                </a>
            </li>
        </ul>

        <!-- Menu: menu collepce btn -->
        <button type="button" class="btn btn-link sidebar-mini-btn text-light">
            <span class="ms-2"><i class="icofont-bubble-right"></i></span>
        </button>
    </div>
</div>



