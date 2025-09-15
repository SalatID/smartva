@extends('index')

@section('title', 'Dashboard')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{asset("assets")}}/dashboard/index.html">Home</a></li>
<li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
<li class="breadcrumb-item" aria-current="page">Home</li>
@endsection

@section('content')
 <!-- [ daily sales section ] start -->
          <div class="col-md-6 col-xl-4">
            <div class="card">
              <div class="card-body">
                <h6 class="mb-4">Daily Vulnerabilities</h6>
                <div class="row d-flex align-items-center">
                  <div class="col-9">
                    <h3 class="f-w-300 d-flex align-items-center m-b-0"><i class="ph ph-arrow-up text-success f-30 m-r-10"></i>249.95</h3>
                  </div>

                  <div class="col-3 text-end">
                    <p class="m-b-0">67%</p>
                  </div>
                </div>
                <div class="progress m-t-30" style="height: 7px">
                  <div
                    class="progress-bar bg-brand-color-1"
                    role="progressbar"
                    style="width: 50%"
                    aria-valuenow="50"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>
            </div>
          </div>
          <!-- [ daily sales section ] end -->

          <!-- [ Monthly  sales section ] start -->
          <div class="col-md-6 col-xl-4">
            <div class="card">
              <div class="card-body">
                <h6 class="mb-4">Monthly Vulnerabilities</h6>
                <div class="row d-flex align-items-center">
                  <div class="col-9">
                    <h3 class="f-w-300 d-flex align-items-center m-b-0"
                      ><i class="ph ph-arrow-down text-danger f-30 m-r-10"></i>2.942.32</h3
                    >
                  </div>
                  <div class="col-3 text-end">
                    <p class="m-b-0">36%</p>
                  </div>
                </div>
                <div class="progress m-t-30" style="height: 7px">
                  <div
                    class="progress-bar bg-brand-color-2"
                    role="progressbar"
                    style="width: 35%"
                    aria-valuenow="35"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>
            </div>
          </div>
          <!-- [ Monthly  sales section ] end -->

          <!-- [ year  sales section ] start -->
          <div class="col-md-12 col-xl-4">
            <div class="card">
              <div class="card-body">
                <h6 class="mb-4">Yearly Vulnerabilities</h6>
                <div class="row d-flex align-items-center">
                  <div class="col-9">
                    <h3 class="f-w-300 d-flex align-items-center m-b-0"
                      ><i class="ph ph-arrow-up text-success f-30 m-r-10"></i>8.638.32</h3
                    >
                  </div>
                  <div class="col-3 text-end">
                    <p class="m-b-0">80%</p>
                  </div>
                </div>
                <div class="progress m-t-30" style="height: 7px">
                  <div
                    class="progress-bar bg-brand-color-1"
                    role="progressbar"
                    style="width: 70%"
                    aria-valuenow="70"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>
            </div>
          </div>
          <!-- [ year  sales section ] end -->

@endsection