<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('user_management_access')
        <li
            class="c-sidebar-nav-dropdown {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }}">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                </i>
                {{ trans('cruds.userManagement.title') }}
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                @can('permission_access')
                <li class="c-sidebar-nav-item">
                    <a href="{{ route("admin.permissions.index") }}"
                        class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : "" }}">
                        <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                        </i>
                        {{ trans('cruds.permission.title') }}
                    </a>
                </li>
                @endcan
                @can('role_access')
                <li class="c-sidebar-nav-item">
                    <a href="{{ route("admin.roles.index") }}"
                        class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : "" }}">
                        <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                        </i>
                        {{ trans('cruds.role.title') }}
                    </a>
                </li>
                @endcan
                @can('user_access')
                <li class="c-sidebar-nav-item">
                    <a href="{{ route("admin.users.index") }}"
                        class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : "" }}">
                        <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                        </i>
                        {{ trans('cruds.user.title') }}
                    </a>
                </li>
                @endcan
            </ul>
        </li>
        @endcan
        @can('product_management_access')

        <li
            class="c-sidebar-nav-dropdown {{ request()->is("admin/product-tags*") ? "c-show" : "" }} {{ request()->is("admin/product-categories*") ? "c-show" : "" }} {{ request()->is("admin/products*") ? "c-show" : "" }} {{ request()->is("admin/add-shops*") ? "c-show" : "" }}">

        <li
            class="c-sidebar-nav-dropdown {{ request()->is("admin/product-tags*") ? "c-show" : "" }} {{ request()->is("admin/product-categories*") ? "c-show" : "" }} {{ request()->is("admin/products*") ? "c-show" : "" }} {{ request()->is("admin/add-shops*") ? "c-show" : "" }} {{ request()->is("admin/s*") ? "c-show" : "" }}">

            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fas fa-shopping-cart c-sidebar-nav-icon">

                </i>
                {{ trans('cruds.productManagement.title') }}
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                @can('product_tag_access')
                <li class="c-sidebar-nav-item">
                    <a href="{{ route("admin.product-tags.index") }}"
                        class="c-sidebar-nav-link {{ request()->is("admin/product-tags") || request()->is("admin/product-tags/*") ? "c-active" : "" }}">
                        <i class="fa-fw fas fa-folder c-sidebar-nav-icon">

                        </i>
                        {{ trans('cruds.productTag.title') }}
                    </a>
                </li>
                @endcan
                @can('product_category_access')
                <li class="c-sidebar-nav-item">
                    <a href="{{ route("admin.product-categories.index") }}"
                        class="c-sidebar-nav-link {{ request()->is("admin/product-categories") || request()->is("admin/product-categories/*") ? "c-active" : "" }}">
                        <i class="fa-fw fas fa-folder c-sidebar-nav-icon">

                        </i>
                        {{ trans('cruds.productCategory.title') }}
                    </a>
                </li>
                @endcan
                @can('product_access')
                <li class="c-sidebar-nav-item">
                    <a href="{{ route("admin.products.index") }}"
                        class="c-sidebar-nav-link {{ request()->is("admin/products") || request()->is("admin/products/*") ? "c-active" : "" }}">
                        <i class="fa-fw fas fa-shopping-cart c-sidebar-nav-icon">

                        </i>
                        {{ trans('cruds.product.title') }}
                    </a>
                </li>
                @endcan
                @can('add_shop_access')
                <li class="c-sidebar-nav-item">
                    <a href="{{ route("admin.add-shops.index") }}"
                        class="c-sidebar-nav-link {{ request()->is("admin/add-shops") || request()->is("admin/add-shops/*") ? "c-active" : "" }}">
                        <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                        </i>
                        {{ trans('cruds.addShop.title') }}
                    </a>
                </li>
                @endcan



            </ul>
        </li>
        @endcan
        @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
        @can('profile_password_edit')
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}"
                href="{{ route('profile.password.edit') }}">
                <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                </i>
                {{ trans('global.change_password') }}
            </a>
        </li>
        @endcan
        @endif
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link"
                onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
        <li class="c-sidebar-nav-item logob2wed">
        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 282" width="226" height="282">
	<title>logo-b2wed-svg</title>
	<defs>
		<image  width="100%" height="282" id="img1" href="data:image/png;base64,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"/>
	</defs>
	<style>
	</style>
	<use id="Background" href="#img1" x="0" y="0"/>
</svg>
        </li>
    </ul>
 
</div>