<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title', 'Admin Dashbord')</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{ asset('backend') }}/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3 mr-1" href="{{ url('admin/dashboard') }}">Admin panel</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{ url('admin/dashboard') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCategory" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-fw fa-list"></i></div>
                                Category
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                               
                            </a>
                            <div class="collapse" id="collapseCategory" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                              <nav class="sb-sidenav-menu-nested nav">
                                  <a class="nav-link" href="{{ route('category.index') }}">View All Category</a>
                                  <a class="nav-link" href="{{ route('category.create') }}">Add New Category</a>
                              </nav>
                            </div>



                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePost" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-fw fa-address-card"></i></div>
                                Post
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                               
                            </a>
                            <div class="collapse" id="collapsePost" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                              <nav class="sb-sidenav-menu-nested nav">
                                  <a class="nav-link" href="{{ route('post.index') }}">View All Post</a>
                                  <a class="nav-link" href="{{ route('post.create') }}">Add New Post</a>
                              </nav>
                            </div>


                            <!-- Comments -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('admin/comment')}}">
                                    <i class="fas fa-fw fa-comments"></i>
                                <span>Comments</span>
                                </a>
                            </li>
                            <!-- Users -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('admin/user')}}">
                                    <i class="fas fa-fw fa-users"></i>
                                <span>Users</span>
                                </a>
                            </li>
                            <!-- Settings -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('admin/setting')}}">
                                    <i class="fas fa-fw fa-cog"></i>
                                <span>Settings</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{url('admin/logout')}}">
                                    <i class="fas fa-fw fa-sign-out-alt"></i>
                                <span>logout</span>
                                </a>
                            </li>







                          
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            {{-- content here --}}
        <div id="layoutSidenav_content">
            @yield('content')
                

            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2021</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('backend') }}/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('backend') }}/assets/demo/chart-area-demo.js"></script>
    <script src="{{ asset('backend') }}/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ asset('backend') }}/js/datatables-simple-demo.js"></script>
</body>
</html>








