
 <!DOCTYPE html>
 <html lang="en">
 <head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{$name}}</title>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->

<link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.css') }}">
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
<!-- Theme style -->
  <!--tosstr-->
<link rel="stylesheet" href="{{asset('plugins/toastr/toastr.min.css')}}">
<link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
