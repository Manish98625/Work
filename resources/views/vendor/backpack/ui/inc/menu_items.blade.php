{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i>
        {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Users" icon="la la-question" :link="backpack_url('user')" />


<x-backpack::menu-item title="Products" icon="la la-question" :link="backpack_url('products')" />
<x-backpack::menu-item title="Places items" icon="la la-question" :link="backpack_url('places-items')" />
<x-backpack::menu-item title="Directors" icon="la la-question" :link="backpack_url('director')" />

<x-backpack::menu-item title="Bills" icon="la la-question" :link="backpack_url('bill')" />
<x-backpack::menu-item title="Purifiers" icon="la la-question" :link="backpack_url('purifier')" />
