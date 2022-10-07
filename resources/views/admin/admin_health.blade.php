<x-header-component name="Mama2Be | Admin Page"/>
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
            <x-chart-card cardTitle="Details"
              chartTitleOne="A pie chart showing payment statuses"
                chartTitleTwo="A doughnut chart showing different  age groups of women" numOfCols="col-md-6">
                <x-slot name="links">
                    {{-- <a href="#" class="dropdown-item">Pending Payments</a>
                        <a href="#" class="dropdown-item">Completed Payments</a>
                        <a class="dropdown-divider"></a>
                        <a href="#" class="dropdown-item">Defaulted Payments</a> --}}
                </x-slot>
                <x-slot name="graphOne">
                    <canvas id="customerGenderId" height="280" width="600"></canvas>
                </x-slot>
                <x-slot name="graphTwo">
                    <canvas id="ageGroupId" height="150" style="height: 150px;"></canvas>
                </x-slot>

            </x-chart-card>

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
  <script>
    $(document).ready(function() {


    //age groups
    let ageGroupLabels = ['18-21', '22-25', '26-29', '30-35', '37-100'];
    var ageGroupUrl = ""
    var ageGroupArray = [1, 2, 3, 4, 5];
    var ageGroupId = "ageGroupId";
    var ageGroupBackgroundColors = ['yellow', 'green', 'blue', 'orange', 'red'];
    var ageGroupBorderColors = ['yellow', 'green', 'BLUE','orange','red'];

    //age groups


    //customer details
    let customerGenderLabels = ['Completed', 'Pending', "Failed"];
    var customerGenderUrl = "";
    var customerGenderArray = [5, 5, 10];
    var customerGenderId = "customerGenderId";
    var customerGenderBackgroundColors = ['Blue', "Yellow", "Red"];
    var customerGenderBorderColors = ['Blue', 'Yellow', "Red"];





    fetchChartData(customerGenderLabels, customerGenderArray, customerGenderId,
        customerGenderBackgroundColors,
        customerGenderBorderColors, customerGenderUrl, type = 'pie')
        fetchChartData(ageGroupLabels, ageGroupArray, ageGroupId,
        ageGroupBackgroundColors,
        ageGroupBorderColors, ageGroupUrl, type = 'doughnut')


    function fetchChartData(labels, dataArray, id, backgroundColors, borderColors, url, type = 'pie') {

        const ctx = document.getElementById(id).getContext('2d');
                const myChart = new Chart(ctx, {
                    type: type,
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Katende',
                            data: dataArray,
                            borderWidth: 1,
                            backgroundColor: backgroundColors,
                            borderColor: borderColors,
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                })
        // $.ajax({
        //     url: url,
        //     method: "GET",
        //     dataType: "json",
        //     success: function(data) {
        //         $.each(data, function(key, value) {

        //                  dataArray.push(value)

        //         });

        //         const ctx = document.getElementById(id).getContext('2d');
        //         const myChart = new Chart(ctx, {
        //             type: type,
        //             data: {
        //                 labels: labels,
        //                 datasets: [{
        //                     label: 'Katende',
        //                     data: dataArray,
        //                     borderWidth: 1,
        //                     backgroundColor: backgroundColors,
        //                     borderColor: borderColors,
        //                     borderWidth: 1
        //                 }]
        //             },
        //             options: {
        //                 scales: {
        //                     y: {
        //                         beginAtZero: true
        //                     }
        //                 }
        //             }
        //         });

        //     }
        // })

    }

    });

</script>
</body>
</html>
