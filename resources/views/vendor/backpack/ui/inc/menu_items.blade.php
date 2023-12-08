{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Categories" icon="las la-book-open" :link="backpack_url('category')" />
<x-backpack::menu-item title="Products" icon="las la-box" :link="backpack_url('product')" />