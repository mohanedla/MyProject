<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soengsouy.com</title>
    <link rel="shortcut icon" href="{{ URL::to('assets/images/favicon.png') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/nav.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/vendors/iconly/bold.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ URL::to('assets/images/favicon.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ URL::to('assets/vendors/simple-datatables/style.css') }}">

    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ URL::to('assets1/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ URL::to('assets1/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ URL::to('assets1/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ URL::to('assets1/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{ URL::to('assets1/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{ URL::to('assets1/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    {{-- <link href="{{ URL::to('assets1/vendor/simple-datatables/style.css')}}" rel="stylesheet"> --}}

    <!-- Template Main CSS File -->
    <link href="{{ URL::to('assets1/css/style.css')}}" rel="stylesheet">

    {{-- message toastr --}}
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>





</head>
<style>
    .form-group[class*=has-icon-].has-icon-left .form-select {
    padding-left: 2.5rem;
}
</style>

<body>
    <div id="app">
        @yield('menu')
        {{-- content main page --}}
        @yield('content')

    </div>

    <script src="{{ URL::to('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::to('assets/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ URL::to('assets/js/pages/dashboard.js') }}"></script>
    <script src="{{ URL::to('assets/js/main.js') }}"></script>

    <script src="{{ URL::to('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ URL::to('assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="{{ URL::to('assets/js/main.js') }}"></script>

    <script src="{{ URL::to('assets1/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{ URL::to('assets1/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ URL::to('assets1/vendor/chart.js/chart.min.js')}}"></script>
    <script src="{{ URL::to('assets1/vendor/echarts/echarts.min.js')}}"></script>
    <script src="{{ URL::to('assets1/vendor/quill/quill.min.js')}}"></script>
    <script src="{{ URL::to('assets1/vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{ URL::to('assets1/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{ URL::to('assets1/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{ URL::to('js/multiselect.js')}}"></script>
    <!-- Template Main JS File -->
    <script src="{{ URL::to('assets1/js/main.js') }}"></script>

    @yield('js')
<a id="scrollup"></a>
  <script src="{{ asset('js/jQuery_v3.1.1.min.js')}}"></script>
  <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('js/bootstrap.min.js')}}"></script>

<script>
    const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})
</script>
<script>
    $('#myModal').on('shown.bs.modal', function () {
$('#myInput').trigger('focus')
})
</script>
</body>

</html>
