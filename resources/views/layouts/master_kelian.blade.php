<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />


    @yield('title')

    <!-- Custom fonts for this template-->
    <link href="{{asset('star/assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('star/assets/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    @yield('select_picker')

</head>


<body id="page-top">
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- LEFT SIDEBAR -->
		@include('layouts.includes._sidebar_kelian')
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
        @yield('content')
		<!-- END MAIN -->
		<div class="clearfix"></div>
       
        <!-- End of Footer -->
	</div>
	<!-- END WRAPPER -->
	
      <script src="{{asset('star/assets/vendor/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('star/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  
      <!-- Core plugin JavaScript-->
      <script src="{{asset('star/assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  
      <!-- Custom scripts for all pages-->
      <script src="{{asset('star/assets/js/sb-admin-2.min.js')}}"></script>
  
      <!-- Page level plugins -->
      <script src="{{asset('star/assets/vendor/chart.js/Chart.min.js')}}"></script>
  
      <!-- Page level custom scripts -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>


      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
      @if(Session::has('sukses'))
      <script>
          toastr.success( "{!!Session::get('sukses')!!}",  "Sukses :)");
      </script>, 
      @endif
      @if(Session::has('gagal'))
      <script>
          toastr.error( "{!!Session::get('gagal')!!}",  "Gagal :(");
      </script>, 
      @endif
	

      @yield('select_picker_script')
      @yield('sweetalert')

</body>
</html>

@yield('script')
