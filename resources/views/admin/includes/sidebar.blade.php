<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/" target="_blank">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-cogs"></i>
        </div>
        <div class="sidebar-brand-text mx-3">GlassHouse</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if(\Request::is('/')) active @endif">
        <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Tổng quát</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Khách hàng
    </div>

    <li class="nav-item @if(\Request::is('admin/customers') || \Request::is('admin/customers/*')) active @endif">
        <a class="nav-link" href="{{ route('admin.customer.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Khách hàng</span>
        </a>
    </li>

    <li class="nav-item @if(\Request::is('admin/cart') || \Request::is('admin/cart/*')) active @endif">
        <a class="nav-link" href="{{ route('admin.cart.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Đơn hàng</span>
        </a>
    </li>

    <!-- Heading -->
    <div class="sidebar-heading">
        Cấu hình
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item @if(\Request::is('admin/categories') || \Request::is('admin/categories/*')) active @endif">
        <a class="nav-link" href="{{ route('admin.category.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Danh mục sản phẩm</span>
        </a>
    </li>

    <li class="nav-item @if(\Request::is('admin/products') || \Request::is('admin/products/*')) active @endif">
        <a class="nav-link" href="{{ route('admin.product.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Quản lý sản phẩm</span>
        </a>
    </li>

    <li class="nav-item @if(\Request::is('admin/project-category') || \Request::is('admin/project-category/*')) active @endif">
        <a class="nav-link" href="{{ route('admin.project_category.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Danh mục dự án</span>
        </a>
    </li>

    <li class="nav-item @if(\Request::is('admin/project') || \Request::is('admin/project/*')) active @endif">
        <a class="nav-link" href="{{ route('admin.project.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Quản lý dự án</span>
        </a>
    </li>

    <div class="sidebar-heading">
        Quản trị
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item @if(\Request::is('admin/users') || \Request::is('admin/users/*')) active @endif">
        <a class="nav-link" href="{{ route('admin.users.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Quản lý tài khoản</span>
        </a>
    </li>
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
