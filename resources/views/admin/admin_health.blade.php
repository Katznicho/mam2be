<x-header-component name="Kutayarisha | Admin Page"/>
@include('header.navbar')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
@include('sidebar.sidebar')
<x-wrapper-component pageName="Dasboard"
:crumbs="array('admin'=>'Admin')"
/>
 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <div class="row">
            <x-dashboard-cards :total="$total_users" class="fas fa-tags" iconClass="info-box-icon bg-info elevation-1">
                Total Users
            </x-dashboard-cards>
            <x-dash-board-cards :total="$total_appointments" class="fas fa-sort-amount-up-alt" iconClass="info-box-icon bg-danger elevation-1">
                Total Appointments
            </x-dash-board-card>

            <x-dash-board-cards :total="$total_appointments" class="fas fa-handshake"
             iconClass="info-box-icon bg-success elevation-1">
                Total Approved Appointments
            </x-dash-board-card>
            <x-dash-board-cards :total="$total_payments" class="fas fa-handshake"
            iconClass="info-box-icon bg-success elevation-1">
               Total Payments
           </x-dash-board-card>

          </div>
     </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">




        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @include('footer.footer')
  @include('helpers.scripts')
  <script>
     let session_var  = "{{Session::get('success')}}";
     if(session_var){
        $(document).Toasts('create', {
        class: 'bg-success',
        title: 'Logged in',
        position: 'topRight',
        body: "Welcome Back {{Session::get('names')}}",
      })
      session_var = false;
     }
  </script>
</body>
</html>
