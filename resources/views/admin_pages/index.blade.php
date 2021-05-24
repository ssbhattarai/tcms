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



            <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body bg-secondary">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">New Orders</h5>
                      <span class="h2 font-weight-bold mb-0">45</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-cart"></i>
                      </div>
                    </div>
                  </div>
                  <hr>
                   <div>
                        <h5 class="card-title text-uppercase text-muted mb-0">Order this month</h5>
                        <span class="h2 font-weight-bold mb-0">54</span>
                   </div>

                </div>
              </div>
            </div>





            <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body bg-secondary">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Today Sales</h5>
                      <span class="h2 font-weight-bold mb-0">
                          {{-- @php $today_total = 0 @endphp
                          @foreach ($today_sales as $item)
                            @php  $today_total += $item->price * $item->quantity @endphp
                          @endforeach
                          ${{$today_total}} --}}
                      </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>

                  <div >
                      <hr>
                      <h5 class="card-title text-uppercase text-muted mb-0">Month Sales</h5>
                      <span class="h2 font-weight-bold mb-0">
                          {{-- @php $month_total = 0 @endphp
                          @foreach ($month_sales as $item)
                            @php  $month_total += $item->price * $item->quantity @endphp
                          @endforeach
                          ${{$month_total}} --}}
                      </span>
                    </div>

                </div>

              </div>
            </div>

            <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body bg-secondary">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">New Reservations</h5>
                      <span class="h2 font-weight-bold mb-0">44</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-calendar-grid-58"></i>
                      </div>
                    </div>
                  </div>
                  <hr>
                   <div>
                        <h5 class="card-title text-uppercase text-muted mb-0">Reservations this month</h5>
                        <span class="h2 font-weight-bold mb-0">45</span>
                   </div>

                </div>
              </div>
            </div>

          </div>

@endsection
