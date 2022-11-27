<!DOCTYPE html>
<html class="no-js" lang="en">

@include('admin.layout.general.head')
<body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="wrapper">
            <header class="header-top" style="background: #0b8e7e;}">
                <div class="container-fluid">
                    
                    <div class="d-flex justify-content-between">
                        <div class="top-menu d-flex align-items-center">
                            <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                            <div class="header-search">
                                <div class="input-group">
                                    <span class="input-group-addon search-close"><i class="ik ik-x"></i></span>
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon search-btn"><i class="ik ik-search"></i></span>
                                </div>
                            </div>
                            <button type="button" id="navbar-fullscreen" class="nav-link"><i class="ik ik-maximize"></i></button>
                        </div>
                      
                        <div class="top-menu d-flex align-items-center">
                         <span class="">Welcome! </span>
                            <div class="dropdown">
                            <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar" src="{{asset('admin/img/profile.jpg')}}" alt=""></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="{{url('admin/profile/create')}}"><i class="ik ik-user dropdown-icon"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="ik ik-settings dropdown-icon"></i> Settings</a>
                                    <a class="dropdown-item" href="{{ url('admin/logout') }}"><i class="ik ik-power dropdown-icon"></i> Logout</a>
                                    

                                   
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </header>
           

            <div class="page-wrap">
                <div class="app-sidebar colored" style="height: 0px">
                    <div class="sidebar-header" style="background-color: #034a47"> 
                        <a class="header-brand" href="index.html">
                            <div class="logo-img">
                               {{-- <img src="src/img/brand-white.svg" class="header-brand-img" alt="lavalite">  --}}
                            </div>
                            <span class="text">EAZISEND</span>
                        </a>
                        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                    </div>
                    
                </div>
                <div class="main-content" style="padding-left: 1px">
                    @include('admin.layout.sidebar')

                    <div class="container-fluid">
                        
                     @yield('content')

                    </div>
                  
                </div>

                
               @include('admin.layout.footer')

            </div>
        </div>
        
        
        

        <div class="modal fade apps-modal" id="appsModal" tabindex="-1" role="dialog" aria-labelledby="appsModalLabel" aria-hidden="true" data-backdrop="false">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ik ik-x-circle"></i></button>
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="quick-search">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 ml-auto mr-auto">
                                    <div class="input-wrap">
                                        <input type="text" id="quick-search" class="form-control" placeholder="Search..." />
                                        <i class="ik ik-search"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
@include('admin.layout.general.scriptsjs')

</body>
</html>