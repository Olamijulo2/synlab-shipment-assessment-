
<div id="app">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <div class="logo">
                        <a href=""><img src="assetss/images/logo/logo.png" alt="" width="100px" height="100px" srcset=""></a>
                    </div>
                    <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title" style="margin-top: 50px">Menu</li>

                    <li class="sidebar-item active ">
                        <a href="{{route('home')}}" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-collection-fill"></i>
                            <span>Your Leave</span>
                        </a>
                        <ul class="submenu ">               
                            <li class="submenu-item ">
                                <a href="{{route('leave-application')}}">Apply for Leave</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{route('leave-history')}}">Leave History</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-collection-fill"></i>
                            <span>Relief Leave</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{route('all-leave')}}">All Leaves</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{route('pending-leave')}}">Pending Leaves</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{route('approved-leave')}}">Approved Leaves</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{route('unapproved-leave')}}">Unapproved Leaves</a>
                            </li>
                        </ul>
                    </li>
                    
                    @if(Auth::user()->userType == 'Line Manager')
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-collection-fill"></i>
                            <span>Leave Management</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{route('lm-leave')}}">All Leaves</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{route('lm-pending-leave')}}">Pending Leaves</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{route('lm-approved-leave')}}">Approved Leaves</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{route('lm-unapproved-leave')}}">Unapproved Leaves</a>
                            </li>
                        </ul>
                    </li>
                    @endif
                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            
        </div>
    </div>
