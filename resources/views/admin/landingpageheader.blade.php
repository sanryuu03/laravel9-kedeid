  @extends('admin.layouts.main')

  @section('menuContent')
  <!-- Container Fluid-->
  <div class="container-fluid" id="container-wrapper">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Landing Page Header</h1>
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Landing Page Header</li>
          </ol>
      </div>

      <div class="row mb-3">

          <!-- Area Chart -->
          <div class="col">
              <div class="card mb-4">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Monthly Recap Report</h6>
                      <div class="dropdown no-arrow">
                          <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                              <div class="dropdown-header">Dropdown Header:</div>
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                      </div>
                  </div>
                  <div class="card-body">
                      <div class="chart-area">
                          <canvas id="myAreaChart"></canvas>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xl-8 col-lg-7 mb-4">
              <div class="card">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Upload Gambar Header</h6>
                      <form>
                              <div class="form-group">
                                  <label for="exampleFormControlFile1 mr-5">Pilih Gambar Header</label>
                                  <input type="file" class="form-control-file" id="exampleFormControlFile1">
                              </div>
                          </form>
                  </div>
              </div>
          </div>
      </div>
      <!--Row-->



  </div>
  <!---Container Fluid-->
  </div>
  @endsection
