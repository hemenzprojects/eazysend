<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name', 'CPMR DRUGTEST') }}</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{asset('admin/img/logo.jpg')}}" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('admin/assets/plugins/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/jquery-toast-plugin/dist/jquery.toast.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/datedropper/datedropper.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/ionicons/dist/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/icon-kit/dist/css/iconkit.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}">

    <link rel="stylesheet" href="{{asset('admin/assets/plugins/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/select2/dist/css/select3.min.css')}}">

    <link rel="stylesheet" href="{{asset('admin/assets/dist/css/theme.min.css')}}">
    <script src="{{asset('admin/assets/src/js/vendor/modernizr-2.8.3.min.js')}}"></script>

    {{-- summer note--}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet"> --}}
    <style type="text/css">
        

    .wrapper .page-wrap .app-sidebar .sidebar-content .nav-container .navigation-main .nav-lavel {

    color: #fff;
    background: #113a03;
        }
   .font{
       font-size: 13px
   }
   .font2{
    font-family: "Times New Roman";
       font-size: 14px
   }
   .badge-warning {
    background-color: #171819;
    }
   .dd-handle{
       padding: 12px;
   }
   .wrapper .page-wrap .app-sidebar.colored .sidebar-content {
    background-color: #0c2702;
    }

    .physicochem_1{
        display: none;
    }
    .physicochem_2{
        display: none;
    }
    .physicochem_4{
        display: none;
    }

    .showstatus0{
        display: none;
    }
    .showstatus1{
        display: none;
    }
    .showstatus2{
        display: none;
    }
 
  .tox tox-tinymce{
       height: 500px;
  } 
  #carbonads {
    background-color: #f7f8fb;
    bottom: 20px;
    box-shadow: 0 0 1px rgb(0 0 0 / 25%);
    box-sizing: content-box;
    max-width: 130px;
    padding: 0.625em;
    position: fixed;
    right: 20px;
    z-index: 100;
}
 
}
   </style>
</head>