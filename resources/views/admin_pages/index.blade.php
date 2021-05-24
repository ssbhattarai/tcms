@extends('layouts.admin_layouts.app')

@section('content')

    @include('layouts.admin_layouts.session')

     <!-- Card stats -->
          <div class="row col-12 p-3">

            <div class="col-xl-4 col-md-6 ">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body bg-secondary">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">New users</h5>
                      <span class="h2 font-weight-bold mb-0">{{count($users)}}</span>
                      <small>(since 30 days)</small>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-single-02"></i>
                      </div>
                    </div>
                  </div>

                  <div>
                      <hr>
                      <h5 class="card-title text-uppercase text-muted mb-0">Total users</h5>
                      <span class="h2 font-weight-bold mb-0">{{count($total_users)}}</span>
                  </div>

                </div>
              </div>
            </div>



          </div>

@endsection
