<div class="col-md-12" id="farmer_chart">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">{{$cardTitle}}</h5>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <div class="btn-group">
                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                        <i class="fas fa-wrench"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">

                            {{$links}}

                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="{{$numOfCols}}">
                      <h4 class="text-center">{{$chartTitleOne}}</h4>

                    <div class="chart">
                        <!-- payment chart Canvas -->

                        {{$graphOne}}
                    </div>
                    <!-- payment chart -->
                </div>
                <!-- /.col -->
                <div class="{{$numOfCols}}">
                    <h4 class="text-center">{{$chartTitleTwo}}</h4>
                         {{$graphTwo}}
                </div>
                <!-- /.col -->



            </div>
            <!-- /.row -->
        </div>

    </div>
    <!-- /.card -->
</div>
