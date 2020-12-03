@extends('dashboard.base')

@section('content')

          <div class="row">
            <div class="col-sm-9">
              <div class="container-fluid">
                <div class="fade-in">
                <div class="row">
                  <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-primary">
                      <div class="card-body pb-0">
                        <div class="btn-group float-right">
                          <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg class="c-icon">
                              <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-settings"></use>
                            </svg>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Promedio</a>
                            <a class="dropdown-item" href="#">Sensor 1</a>
                            <a class="dropdown-item" href="#">Sensor 2</a>
                            <a class="dropdown-item" href="#">Sensor 3</a>
                            <a class="dropdown-item" href="#">Sensor 4</a>
                            <a class="dropdown-item" href="/temperature">Vista completa...</a>
                          </div>
                        </div>
                        <div class="text-value-lg">24°C</div>
                        <div>Temperatura</div>
                      </div>
                      <a href="/temperature">
                        <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                          <canvas class="chart" id="card-chart1" height="70"></canvas>
                        </div>
                      </a>
                    </div>
                  </div>
                  <!-- /.col-->
                  <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-info">
                      <div class="card-body pb-0">
                        <div class="btn-group float-right">
                          <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg class="c-icon">
                              <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-settings"></use>
                            </svg>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Promedio</a>
                            <a class="dropdown-item" href="#">Sensor 1</a>
                            <a class="dropdown-item" href="#">Sensor 2</a>
                            <a class="dropdown-item" href="#">Sensor 3</a>
                            <a class="dropdown-item" href="/humidity">Vista completa...</a>
                          </div>
                        </div>
                        <div class="text-value-lg">63%</div>
                        <div>Humedad</div>
                      </div>
                      <a href="/humidity">
                        <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                          <canvas class="chart" id="card-chart2" height="70"></canvas>
                        </div>
                      </a>
                    </div>
                  </div>
                  <!-- /.col-->
                  <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-warning">
                      <div class="card-body pb-0">
                        <div class="btn-group float-right">
                          <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg class="c-icon">
                              <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-settings"></use>
                            </svg>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Promedio</a>
                            <a class="dropdown-item" href="#">Sensor 1</a>
                            <a class="dropdown-item" href="#">Sensor 2</a>
                            <a class="dropdown-item" href="#">Sensor 3</a>
                            <a class="dropdown-item" href="#">Sensor 4</a>
                            <a class="dropdown-item" href="/lighting">Vista completa...</a>
                          </div>
                        </div>
                        <div class="text-value-lg">40%</div>
                        <div>Luminosidad</div>
                      </div>
                      <div class="c-chart-wrapper mt-3" style="height:70px;">
                        <canvas class="chart" id="card-chart3" height="70"></canvas>
                      </div>
                    </div>
                  </div>
                  <!-- /.col-->
                  <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-danger">
                      <div class="card-body pb-0">
                        <div class="btn-group float-right">
                          <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg class="c-icon">
                              <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-settings"></use>
                            </svg>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="/ph">Vista completa...</a>
                          </div>
                        </div>
                        <div class="text-value-lg">0.67</div>
                        <div>PH</div>
                      </div>
                      <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                        <canvas class="chart" id="card-chart4" height="70"></canvas>
                      </div>
                    </div>
                  </div>
                  <!-- /.col-->
                </div>
                <!-- /.row-->
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-5">
                        <h4 class="card-title mb-0">Activación de Luminarias</h4>
                        <div class="small text-muted">September 2020</div>
                      </div>
                      <!-- /.col-->
                      <div class="col-sm-7 d-none d-md-block">
                        <button class="btn btn-primary float-right" type="button">
                          <svg class="c-icon">
                            <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-cloud-download"></use>
                          </svg>
                        </button>
                        <div class="btn-group btn-group-toggle float-right mr-3" data-toggle="buttons">
                          <label class="btn btn-outline-secondary">
                            <input id="option1" type="radio" name="options" autocomplete="off"> Day
                          </label>
                          <label class="btn btn-outline-secondary active">
                            <input id="option2" type="radio" name="options" autocomplete="off" checked=""> Month
                          </label>
                          <label class="btn btn-outline-secondary">
                            <input id="option3" type="radio" name="options" autocomplete="off"> Year
                          </label>
                        </div>
                      </div>
                      <!-- /.col-->
                    </div>
                    <!-- /.row-->
                    <div class="c-chart-wrapper" style="height:300px;margin-top:40px;">
                      <canvas class="chart" id="main-chart" height="300"></canvas>
                    </div>
                  </div>
                  
                </div>            
                </div>
              </div>
            </div>
            

            <div class="col-sm-3">
              <img class="img-fluid" src="assets/img/verticallium.png">
            </div>
          </div>
@endsection

@section('javascript')

    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
@endsection
