@extends('admin.layouts.dashboard')

@section('title')
    {{ __('mine.Sallaty Admin') }}
@endsection


@section('content')

<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row"></div>
    <div class="content-body">
      <!-- eCommerce statistic -->
      <div class="row">
        <div class="col-xl-3 col-lg-6 col-12">
          <div class="card pull-up">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="media-body text-left">
                    <h3 class="info">0.00$</h3>
                    <h6>{{ __('mine.Total Sales') }}</h6>
                  </div>
                  <div>
                    <i class="icon-wallet info font-large-2 float-right"></i>
                  </div>
                </div>
                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                  <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-12">
          <div class="card pull-up">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="media-body text-left">
                    <h3 class="warning">0</h3>
                    <h6>{{ __('mine.Total Orders') }}</h6>
                  </div>
                  <div>
                    <i class="icon-basket-loaded info font-large-2 float-right"></i>
                  </div>
                </div>
                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                  <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-12">
          <div class="card pull-up">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="media-body text-left">
                    <h3 class="success">0</h3>
                    <h6>{{ __('mine.Total Products') }}</h6>
                  </div>
                  <div>
                    <i class="icon-grid success font-large-2 float-right"></i>
                  </div>
                </div>
                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                  <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%"
                  aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-12">
          <div class="card pull-up">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="media-body text-left">
                    <h3 class="danger">0</h3>
                    <h6>{{ __('mine.Total Customers') }}</h6>
                  </div>
                  <div>
                    {{-- <i class="icon-heart danger font-large-2 float-right"></i> --}}
                    <i class="icon-users success font-large-2 float-right"></i>
                  </div>
                </div>
                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                  <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%"
                  aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ eCommerce statistic -->

      {{-- <hr style="box-shadow: 0px 2px 2px #676767; margin-bottom: 30px"> --}}

      <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1" style="margin-top: 50px !important">
        <span style="font-size: 18px; color: #1e9ff2">{{ __('mine.Latest Reviews') }}</span>
      </p>
      


      <!-- Products sell and New Orders -->
      <div class="row match-height"> 
        <div class="col-xl-12 col-lg-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">{{ __('mine.Latest Reviews') }}</h4>
              <a class="heading-elements-toggle">
                <i class="la la-ellipsis-v font-medium-3"></i>
              </a>
              <div class="heading-elements">
                <ul class="list-inline mb-0">
                  <li><a data-action="collapse"><i class="ft-plus"></i></a></li>
                  <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                  <li><a data-action="close"><i class="ft-x"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="card-content">
              <div id="new-orders" class="media-list position-relative">
                <div class="table-responsive">
                  <table id="new-orders-table" class="table table-hover table-xl mb-0">
                    <thead>
                      <tr>
                        <th class="border-top-0">{{ __('mine.Customer') }}</th>
                        <th class="border-top-0">{{ __('mine.Product') }}</th>
                        <th class="border-top-0">{{ __('mine.Rating') }}</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-truncate">{{ __('mine.Yehya Ali') }}</td>
                        <td class="text-truncate">{{ __('mine.Iphone8') }}</td>
                        <td class="text-truncate">{{ __('mine.five') }}</td>
                      </tr>

                      {{-- delete after  --}}
                      <tr>
                        <td class="text-truncate">{{ __('mine.Yehya Ali') }}</td>
                        <td class="text-truncate">{{ __('mine.Iphone8') }}</td>
                        <td class="text-truncate">{{ __('mine.five') }}</td>
                      </tr>
                      <tr>
                        <td class="text-truncate">{{ __('mine.Yehya Ali') }}</td>
                        <td class="text-truncate">{{ __('mine.Iphone8') }}</td>
                        <td class="text-truncate">{{ __('mine.five') }}</td>
                      </tr>
                      <tr>
                        <td class="text-truncate">{{ __('mine.Yehya Ali') }}</td>
                        <td class="text-truncate">{{ __('mine.Iphone8') }}</td>
                        <td class="text-truncate">{{ __('mine.five') }}</td>
                      </tr>
                      <tr>
                        <td class="text-truncate">{{ __('mine.Yehya Ali') }}</td>
                        <td class="text-truncate">{{ __('mine.Iphone8') }}</td>
                        <td class="text-truncate">{{ __('mine.five') }}</td>
                      </tr>
                      {{-- delete after  --}}
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Products sell and New Orders -->

      {{-- <hr style="box-shadow: 0px 2px 2px #676767; margin-bottom: 30px"> --}}

      <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1" style="margin-top: 50px !important">
        <span style="font-size: 18px; color: #1e9ff2">{{ __('mine.Latest Orders') }}</span>
      </p>


      <!-- Recent Transactions -->
      <div class="row">
        <div id="recent-transactions" class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">{{ __('mine.Latest Orders') }}</h4>
              <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
                <ul class="list-inline mb-0">
                  <li><a data-action="collapse"><i class="ft-plus"></i></a></li>
                  <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                  <li><a data-action="close"><i class="ft-x"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="card-content">
              <div class="table-responsive">
                <table id="recent-orders" class="table table-hover table-xl mb-0">
                  <thead>
                    <tr>
                      <th class="border-top-0">{{ __('mine.Order Number') }}</th>
                      <th class="border-top-0">{{ __('mine.Customer Name') }}</th>
                      <th class="border-top-0">{{ __('mine.Price') }}</th>
                      <th class="border-top-0">{{ __('mine.Order Status') }}</th>
                      <th class="border-top-0">{{ __('mine.Total') }}</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-truncate">112112</td>
                      <td class="text-truncate">Yehya Ali</td>
                      <td class="text-truncate">200$</td>
                      <td class="text-truncate">1</td>
                      <td class="text-truncate">20021222$</td>
                    </tr>


                    {{-- delete after  --}}
                    <tr>
                      <td class="text-truncate">112112</td>
                      <td class="text-truncate">Yehya Ali</td>
                      <td class="text-truncate">200$</td>
                      <td class="text-truncate">1</td>
                      <td class="text-truncate">20021222$</td>
                    </tr>

                    <tr>
                      <td class="text-truncate">112112</td>
                      <td class="text-truncate">Yehya Ali</td>
                      <td class="text-truncate">200$</td>
                      <td class="text-truncate">1</td>
                      <td class="text-truncate">20021222$</td>
                    </tr>

                    <tr>
                      <td class="text-truncate">112112</td>
                      <td class="text-truncate">Yehya Ali</td>
                      <td class="text-truncate">200$</td>
                      <td class="text-truncate">1</td>
                      <td class="text-truncate">20021222$</td>
                    </tr>

                    {{-- delete after  --}}
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Recent Transactions -->

    </div>
  </div>
</div>
    
@endsection