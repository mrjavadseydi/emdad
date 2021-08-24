<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
        data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview">
            <a href="{{route('panel')}}"

               class="nav-link {{ request()->is('panel') ? 'active':''   }} ">
                <i class="nav-icon fa fa-dashboard "></i>
                <p>داشبورد </p>
            </a>
        </li>
        <li class="nav-item has-treeview">
            <a href="{{route('users.index')}}"

               class="nav-link {{ request()->is('panel/users') ? 'active':''   }} ">
                <i class="nav-icon fa fa-user "></i>
                <p>کاربران </p>
            </a>
        </li>
        <li class="nav-item has-treeview">
            <a href="{{route('office.index')}}"

               class="nav-link {{ request()->is('panel/office') ? 'active':''   }} ">
                <i class="nav-icon fa fa-university "></i>
                <p>ادارات </p>
            </a>
        </li>
        <li class="nav-item has-treeview">
            <a href="{{route('plan.index')}}"

               class="nav-link {{ request()->is('panel/plan') ? 'active':''   }} ">
                <i class="nav-icon fa fa-map "></i>
                <p>طرح ها </p>
            </a>
        </li>
    </ul>

</nav>
