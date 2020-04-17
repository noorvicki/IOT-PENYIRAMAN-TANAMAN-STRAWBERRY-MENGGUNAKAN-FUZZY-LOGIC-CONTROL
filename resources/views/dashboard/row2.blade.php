<div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Grafik data Sensor</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <p class="text-center">
                <strong>Data Sensor kelembaban</strong>
              </p>

              <div class="chart">
                <!-- Sales Chart Canvas -->
                {!! $data['kelembabanChart']->container() !!}
              </div>
              <!-- /.chart-responsive -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
                <p class="text-center">
                  <strong>Data Sensor ph</strong>
                </p>

                <div class="chart">
                  <!-- Sales Chart Canvas -->
                  {!! $data['phChart']->container() !!}
                </div>
                <!-- /.chart-responsive -->
              </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- ./box-body -->
        <div class="box-footer">
          <div class="row">
            <div class="col-sm-3 col-xs-6">
              <div class="description-block border-right">
                <span class="description-percentage text-green"><h1><i class="fa fa-caret-up"></i></h1></span>
<h5 class="description-header">{{$data['maxKelembaban']}}</h5>
                <span class="description-text">Kelembaban tertinggi</span>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-3 col-xs-6">
              <div class="description-block border-right">
                <span class="description-percentage text-red"><h1><i class="fa fa-caret-down"></i></h1></span>
                <h5 class="description-header">{{$data['minKelembaban']}}</h5>
                <span class="description-text">Kelembaban Terendah</span>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-3 col-xs-6">
              <div class="description-block border-right">
                <span class="description-percentage text-green"><h1><i class="fa fa-caret-up"></i></h1></span>
                <h5 class="description-header">{{$data['maxPH']}}</h5>
                <span class="description-text">Ph tertinggi</span>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-3 col-xs-6">
              <div class="description-block">
                <span class="description-percentage text-red"><h1><i class="fa fa-caret-down"></i></h1></span>
                <h5 class="description-header">{{$data['minPH']}}</h5>
                <span class="description-text">Ph terendah</span>
              </div>
              <!-- /.description-block -->
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-footer -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
