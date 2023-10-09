<!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="http://localhost/mtk/dashboard/index.php">
                <div class="sidebar-brand-icon">
                    <i class="fas"> <img src="http://localhost/mtk/dashboard/img/favicon.ico" alt="TK"></i>
                </div>
                <div class="sidebar-brand-text mx-3">TKHOTSPOT<sup>ADMIN</sup></div>
            </a>
			<!-- Divider -->
            <hr class="sidebar-divider my-0">
		
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="http://localhost/mtk/dashboard/pages/dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>DASHBOARD</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDeployments"
                    aria-expanded="true" aria-controls="collapseDeployments">
                    <i class="fas fa-fw"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hdd-network-fill" viewBox="0 0 16 16">
  <path d="M2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h5.5v3A1.5 1.5 0 0 0 6 11.5H.5a.5.5 0 0 0 0 1H6A1.5 1.5 0 0 0 7.5 14h1a1.5 1.5 0 0 0 1.5-1.5h5.5a.5.5 0 0 0 0-1H10A1.5 1.5 0 0 0 8.5 10V7H14a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm.5 3a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm2 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1z"/>
</svg></i>
                    <span>ISP/NETWORK</span>
                </a>
                <div id="collapseDeployments" class="collapse" aria-labelledby="headingDeplyments" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Network & Deployments:</h6>
                        <a class="collapse-item" href="http://localhost/mtk/dashboard/pages/crud_ip/">IP POOLS</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/crud_ovpn/">VPN ROUTERS</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/crud_routers/">LOCAL ROUTERS</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/crud_ap/">AP</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/crud_vendo/">VENDO</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/crud_devices/">DEVICES</a>
						
						
                    </div>
                </div>
            </li>
			<!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCustomers"
                    aria-expanded="true" aria-controls="collapseCustomers">
                    <i class="fas fa-fw"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
</svg></i>
                    <span>CUSTOMERS</span>
                </a>
                <div id="collapseCustomers" class="collapse" aria-labelledby="headingCustomers" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Customer Records:</h6>
                        <a class="collapse-item" href="http://localhost/mtk/dashboard/pages/crud_profile/">PROFILE</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/crud_cpe/">DEVICES</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/crud_bills/">BILLINGS</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/crud_payments/">PAYMENTS</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/crud_discounts">REBATES</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/crud_tickets/">TICKETS</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/crud_contacts/">CONTACTS</a>
									
                    </div>
                </div>
            </li>
			<!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProducts"
                    aria-expanded="true" aria-controls="collapseProducts">
                    <i class="fas fa-fw"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
  <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
</svg></i>
                    <span>PRODUCTS</span>
                </a>
                <div id="collapseProducts" class="collapse" aria-labelledby="headingProducts" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Products:</h6>
                        <a class="collapse-item" href="http://localhost/mtk/dashboard/pages/crud_products/">PRODUCTS LIST</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/crud_stores/">ONLINE STORE</a>
									
                    </div>
                </div>
            </li>
			<!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseServices"
                    aria-expanded="true" aria-controls="collapseServices">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>SERVICES</span>
                </a>
                <div id="collapseServices" class="collapse" aria-labelledby="headingServices" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Offered Services:</h6>
                        <a class="collapse-item" href="http://localhost/mtk/dashboard/pages/crud_plans/">PLANS</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/crud_pppoe/">PPPOE</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/crud_prepaid/">PREPAID</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/crud_vouchers/">VOUCHER</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/crud_hotspot/">HOTSPOT</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/crud_promos/">PROMOS</a>
						
									
                    </div>
                </div>
            </li>
			<!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRepairs"
                    aria-expanded="true" aria-controls="collapseRepairs">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>SUPPORT</span>
                </a>
                <div id="collapseRepairs" class="collapse" aria-labelledby="headingRepairs" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">REPAIRS & TICKETS:</h6>
                        <a class="collapse-item" href="http://localhost/mtk/dashboard/pages/crud_tickets/">TICKETS</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/crud_repairs/">REPAIRS</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/crud_inquiry/">INQUIRY</a>
						
						
									
                    </div>
                </div>
            </li>
			<!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLists"
                    aria-expanded="true" aria-controls="collapseLists">
                    <i class="fas fa-fw "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-spreadsheet-fill" viewBox="0 0 16 16">
  <path d="M6 12v-2h3v2H6z"/>
  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM3 9h10v1h-3v2h3v1h-3v2H9v-2H6v2H5v-2H3v-1h2v-2H3V9z"/>
</svg></i>
                    <span>LISTS</span>
                </a>
                <div id="collapseLists" class="collapse" aria-labelledby="headingLists" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">LISTS:</h6>
                        <a class="collapse-item" href="http://localhost/mtk/dashboard/pages/crud_devices/view_devices.php">DEVICES</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/crud_customers/view_customers.php">CUSTOMERS</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/crud_resellers/view_resellers.php">RESELLERS</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/crud_agents/view_agents.php">AGENTS</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/crud_collections/view_collections.php">COLLECTIONS</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/crud_disbursements/view_disbursements.php">DISBURSEMENTS</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/crud_purchases/view_purchases.php">PURCHASES</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/crud_inventory/view_inventory.php">INVENTORY</a>
									
                    </div>
                </div>
            </li>
			<!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReports"
                    aria-expanded="true" aria-controls="collapseReports">
                    <i class="fas fa-fw "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-spreadsheet-fill" viewBox="0 0 16 16">
  <path d="M6 12v-2h3v2H6z"/>
  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM3 9h10v1h-3v2h3v1h-3v2H9v-2H6v2H5v-2H3v-1h2v-2H3V9z"/>
</svg></i>
                    <span>REPORTS</span>
                </a>
                <div id="collapseReports" class="collapse" aria-labelledby="headingReports" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">REPORTS:</h6>
                        <a class="collapse-item" href="http://localhost/mtk/dashboard/pages/buttons.php">DEVICES</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/cards.php">APPLICANTS</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/cards.php">COLLECTIONS</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/cards.php">DISBURSEMENTS</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/cards.php">PURCHASES</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/cards.php">INVENTORY</a>
									
                    </div>
                </div>
            </li>
			<!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePlugins"
                    aria-expanded="true" aria-controls="collapsePlugins">
                    <i class="fas fa-fw "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plugin" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a7 7 0 1 1 2.898 5.673c-.167-.121-.216-.406-.002-.62l1.8-1.8a3.5 3.5 0 0 0 4.572-.328l1.414-1.415a.5.5 0 0 0 0-.707l-.707-.707 1.559-1.563a.5.5 0 1 0-.708-.706l-1.559 1.562-1.414-1.414 1.56-1.562a.5.5 0 1 0-.707-.706l-1.56 1.56-.707-.706a.5.5 0 0 0-.707 0L5.318 5.975a3.5 3.5 0 0 0-.328 4.571l-1.8 1.8c-.58.58-.62 1.6.121 2.137A8 8 0 1 0 0 8a.5.5 0 0 0 1 0Z"/>
</svg></i>
                    <span>PLUGINS</span>
                </a>
                <div id="collapsePlugins" class="collapse" aria-labelledby="headingPlugins" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">System Plugins:</h6>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/index.php">PLUGINS</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/index.php">PAYMENTS</a>
                        <a class="collapse-item" href="http://localhost/mtk/dashboard/pages/utilities-border.php">SMS</a>
                        <a class="collapse-item" href="http://localhost/mtk/dashboard/pages/utilities-animation.php">E-MAIL</a>
                        <a class="collapse-item" href="http://localhost/mtk/dashboard/pages/tgchat.php">TELEGRAM</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/utilities-other.php">FACEBOOK</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/utilities-other.php">YOUTUBE</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/utilities-other.php">INSTAGRAM</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>UTILITIES</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">System Utilities:</h6>
                        <a class="collapse-item" href="http://localhost/mtk/dashboard/pages/utility_db.php">Database Backup</a>
                        <a class="collapse-item" href="http://localhost/mtk/dashboard/pages/utilities-border.php">Mikrotik Import</a>
                        <a class="collapse-item" href="http://localhost/mtk/dashboard/pages/port_tester.php">Port Tester</a>
                        <a class="collapse-item" href="http://localhost/mtk/dashboard/pages/utilities-other.php">Traceroute</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/ping.php">IP Ping Checker</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/website_ping.php">Website Ping Checker</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
			 <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers"
                    aria-expanded="true" aria-controls="collapseUsers">
                    <i class="fas fa-fw fa-users"></i>
                    <span>USERS</span>
                </a>
                <div id="collapseUsers" class="collapse" aria-labelledby="headingUsers"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">System Users:</h6>
                        <a class="collapse-item" href="http://localhost/mtk/dashboard/pages/crud_users/">ADMIN</a>
                        <a class="collapse-item" href="http://localhost/mtk/dashboard/pages/utilities-border.php">AGENTS</a>
                        <a class="collapse-item" href="http://localhost/mtk/dashboard/pages/utilities-animation.php">RESELLERS</a>
                        <a class="collapse-item" href="http://localhost/mtk/dashboard/pages/utilities-other.php">CASHIERS</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/ping.php">INSTALLERS</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
						<h6 class="collapse-header">User Login Screens:</h6>
                        <a class="collapse-item" href="http://localhost/mtk/dashboard/pages/register.php">Register</a>
                        <a class="collapse-item" href="http://localhost/mtk/dashboard/pages/forgot-password.php">Forgot Password</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/forgot-password.php">Expired Notice</a>
                        <div class="collapse-divider"></div>
					
                        <h6 class="collapse-header">PPPOE User Login Screens:</h6>
                        <a class="collapse-item" href="http://localhost/mtk/dashboard/pages/register.php">Register</a>
                        <a class="collapse-item" href="http://localhost/mtk/dashboard/pages/forgot-password.php">Forgot Password</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/forgot-password.php">Expired Notice</a>
                        <div class="collapse-divider"></div>
						
                        <h6 class="collapse-header">Static Pages:</h6>
                        <a class="collapse-item" href="http://localhost/mtk/dashboard/pages/blank.php">Advertisement</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/blank.php">Billing</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/blank.php">Voucher</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/blank.php">Announcement</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/blank.php">Reminders</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/blank.php">Reconnection Notice</a>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/blank.php">Disconnection Notice</a>
						<div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
						<a class="collapse-item" href="http://localhost/mtk/dashboard/pages/404.php">404 Page</a>
                        <a class="collapse-item" href="http://localhost/mtk/dashboard/pages/blank.php">Blank Page</a>
						
                    </div>
                </div>
            </li>
  <!-- Heading -->
            <div class="sidebar-heading">
                EXPORT REPORTS
            </div>
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/mtk/dashboard/pages/charts.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/mtk/dashboard/pages/tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>
			 <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/mtk/dashboard/pages/tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>PDF</span></a>
            </li>
			 <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/mtk/dashboard/pages/tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Spreadsheet</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

           

        </ul>
        <!-- End of Sidebar -->
