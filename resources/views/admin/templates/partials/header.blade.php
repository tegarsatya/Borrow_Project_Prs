<header class="main-header">
        <!-- Logo -->
    <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>P</b>US</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Per</b>pus</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="hidden-xs"></span>
            </a>
            <ul class="dropdown-menu">

                <!-- Menu Footer-->
                <li class="user-footer">

                <div class="">
                    <a href="#"
                        onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();"
                        class="btn btn-block btn-default btn-flat">Sign out</a>
                </div>
                <form id="logout-form" action="#" method="POST" style="display: none;">
                    @csrf
                </form>
                </li>
            </ul>
            </li>
        </ul>
        </div>
    </nav>
    </header>
