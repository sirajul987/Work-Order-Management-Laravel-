<div class="layout-sidebar">
    <div class="layout-sidebar-backdrop"></div>
    <div class="layout-sidebar-body">
        <div class="custom-scrollbar">
            <nav id="sidenav" class="sidenav-collapse collapse">
            <ul class="sidenav level-1">
                    <li class="sidenav-search"></li>
                    <li class="sidenav-heading">Navigation</li>
                    <li class="sidenav-item active">
                        <a href="{{ route('dashboard') }}">
                            <span class="sidenav-icon icon icon-works">&#71;</span>
                            <span class="sidenav-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidenav-item has-subnav ">
                        <a href="dashboard-1.html" aria-haspopup="true">
                            <span class="sidenav-icon icon icon-works">&#103;</span>
                            <span class="sidenav-label">Customer</span>
                        </a>
                        <ul class="sidenav level-2 collapse">
                            <li class="sidenav-heading">Customer</li>
                            <li><a href="dashboard-2.html">All Customer</a></li>
                            <li><a href="{{ route('newcustomer') }}">Create Customer</a></li>
                        </ul>
                    </li>
                    <li class="sidenav-item has-subnav ">
                        <a href="dashboard-1.html" aria-haspopup="true">
                            <span class="sidenav-icon icon icon-works">&#103;</span>
                            <span class="sidenav-label">Technician</span>
                        </a>
                        <ul class="sidenav level-2 collapse">
                            <li class="sidenav-heading">Technician</li>
                            <li><a href="#"> All Technician</a></li>
                            <li><a href="#">Create Technician</a></li>
                        </ul>
                    </li>
                    <li class="sidenav-item has-subnav ">
                        <a href="dashboard-1.html" aria-haspopup="true">
                            <span class="sidenav-icon icon icon-works">&#103;</span>
                            <span class="sidenav-label">Work Order</span>
                        </a>
                        <ul class="sidenav level-2 collapse">
                            <li class="sidenav-heading">Work Order</li>
                            <li><a href="dashboard-2.html">My Work Order</a></li>
                            <li><a href="dashboard-3.html">Create Order</a></li>
                        </ul>
                    </li>
                    <li class="sidenav-item has-subnav ">
                        <a href="dashboard-1.html" aria-haspopup="true">
                            <span class="sidenav-icon icon icon-works">&#103;</span>
                            <span class="sidenav-label">Setting</span>
                        </a>
                        <ul class="sidenav level-2 collapse">
                            <li><a href="dashboard-2.html"> Backup Database</a></li>
                        </ul>
                    </li>
                    <li class="sidenav-item has-subnav ">
                        <a href="dashboard-1.html" aria-haspopup="true">
                            <span class="sidenav-icon icon icon-works">&#103;</span>
                            <span class="sidenav-label">Report</span>
                        </a>
                        <ul class="sidenav level-2 collapse">
                            <li class="sidenav-heading">Report</li>
                            <li><a href="dashboard-2.html"> Service Contact Report</a></li>
                            <li><a href="dashboard-3.html">Close Ticket</a></li>
                            <li><a href="dashboard-3.html">History</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </nav>
        </div>
    </div>
</div>