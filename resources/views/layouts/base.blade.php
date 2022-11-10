<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>App Log</title>
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
    <link href="{{ url('assets/plugins/simplebar/css/simplebar.css', []) }}" rel="stylesheet" />
    <link href="{{ url('assets/css/bootstrap.min.css', []) }}" rel="stylesheet" />
    <link href="{{ url('assets/css/animate.css', []) }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/css/icons.css', []) }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/css/horizontal-menu.css', []) }}" rel="stylesheet" />
    <link href="{{ url('assets/css/app-style.css', []) }}" rel="stylesheet" />
    <link href="{{ url('assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css', []) }}" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css', []) }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ url('assets/plugins/notifications/css/lobibox.min.css', []) }}"/>
    <link rel="stylesheet" href="{{ url('assets/plugins/summernote/dist/summernote-bs4.css', []) }}"/>
    <link href="{{ url('assets/plugins/select2/css/select2.min.css', []) }}" rel="stylesheet"/>
    <style>
         .footerx {
            padding: 5px;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: rgb(255, 255, 255);
            color: rgb(0, 0, 0);
            text-align: center;
            border: 2px solid #2c717f;
        }
    </style>
    <script src="{{ url('assets/js/jquery.min.js', []) }}"></script>
    
</head>

<body>

    <!-- start loader -->
    {{-- <div id="pageloader-overlay" class="visible incoming">
        <div class="loader-wrapper-outer">
            <div class="loader-wrapper-inner">
                <div class="loader"></div>
            </div>
        </div>
    </div> --}}
    <!-- end loader -->

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start topbar header-->
        <header class="topbar-nav">
            <nav class="navbar navbar-expand">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void();">
                            <div class="media align-items-center">
                                <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                                <div class="media-body">
                                    <h5 class="logo-text">App Log</h5>
                                </div>
                            </div>
                        </a>
                    </li>
                   
                </ul>

                <ul class="navbar-nav align-items-center right-nav-link">
                    
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown"
                            href="#">
                            <span class="user-profile"><img src="{{ url('icon.png', []) }}"
                                    class="img-circle" alt="user avatar"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item user-details">
                                <a href="javaScript:void();">
                                    <div class="media">
                                        <div class="avatar"><img class="align-self-start mr-3"
                                                src="{{ url('icon.png', []) }}" alt="user avatar"></div>
                                        <div class="media-body">
                                            <h6 class="mt-2 user-title">{{auth::user()->name}}</h6>
                                            <p class="user-subtitle">{{auth::user()->email}}</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item" style="cursor: pointer" data-toggle="modal" data-target="#formuser"><i class="fa fa-key mr-2"></i> Ubah Password</li>
                            <li class="dropdown-divider"></li>
                            {{-- <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
                            <li class="dropdown-divider"></li> --}}
                            <li class="dropdown-item" style="cursor: pointer"  onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="icon-power mr-2"></i> Logout</li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </header>
        <!--End topbar header-->

        <!-- start horizontal Menu -->
        <nav>
            <!-- Menu Toggle btn-->
            <div class="menu-toggle">
                <h3>Menu</h3>
                <button type="button" id="menu-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <ul id="respMenu" class="horizontal-menu">

                <li>
                    <a href="javascript:;">
                        <i class="zmdi zmdi-view-dashboard" aria-hidden="true"></i>
                        <span class="title">Dashboard</span>
                        <span class="arrow"></span>
                    </a>
                    <!-- Level Two-->
                    <ul>
                        <li><a href="{{ url('home', []) }}"><i class="zmdi zmdi-dot-circle-alt"></i> Home</a></li>
                       
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- end horizontal Menu -->

        <div class="clearfix"></div>
        
            @yield('content')

        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>


        <footer class="footerx">
            <div class="container">
                <div class="text-center">
                    Copyright © 2022 LogApp Versi 1.0
                </div>
            </div>
        </footer>

    </div>
    <!--End wrapper-->
    <div class="modal fade" id="formuser">
        <div class="modal-dialog modal-dialog-centered modal-sm">
          <div class="modal-content border-danger">
            <div class="modal-header bg-info">
                <h5 class="modal-title text-white">Ubah Password User</h5> 
                <span>
                    <button type="button" class="btn-danger" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </span>
                
            </div>
            <form action="{{ url('ubahpassword', []) }}" method="post">
                @csrf
                <div class="modal-body" id="divtableworklist">
                    <div class="body" id="divinputworklist">  
                        <div class="row">
                            <div class="col-12">
                                <label for="">Password Baru</label>
                                <input type="text" class="form-control" name="password">
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn-warning" ><i class="fa fa-key"></i> Ubah Password</button>
                </div>
            </form>
          </div>
        </div>
    </div>
    
    <script src="{{ url('assets/js/popper.min.js', []) }}"></script>
    <script src="{{ url('assets/js/bootstrap.min.js', []) }}"></script>
    <script src="{{ url('assets/plugins/simplebar/js/simplebar.js', []) }}"></script>
    <script src="{{ url('assets/js/horizontal-menu.js', []) }}"></script>
    <script src="{{ url('assets/js/app-script.js', []) }}"></script>
    <script src="{{ url('assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js', []) }}"></script>
    <script src="{{ url('assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js', []) }}"></script>
    <script src="{{ url('assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js', []) }}"></script>
    <script src="{{ url('assets/plugins/notifications/js/lobibox.min.js', []) }}"></script>
    <script src="{{ url('assets/plugins/notifications/js/notifications.min.js', []) }}"></script>
    <script src="{{ url('assets/plugins/notifications/js/notification-custom-script.js', []) }}"></script>
    <script src="{{ url('assets/plugins/select2/js/select2.min.js', []) }}"></script>

</body>

</html>