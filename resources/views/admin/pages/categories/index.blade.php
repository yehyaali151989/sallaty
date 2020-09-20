@extends('admin.layouts.dashboard') 

@section('title') 
  {{ __('mine.All Main Categories') }} 
@endsection 

@section('content')

<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">{{ __('mine.Main Categories') }}</h3>
        <div class="row breadcrumbs-top">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{ route('admin.dashboard') }}">
                  {{ __('mine.Home') }}
                </a>
              </li>
              <li class="breadcrumb-item active">
                {{ __('mine.Main Categories') }}
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="content-body">
      <section id="dom">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">{{ __('mine.All Main Categories') }}</h4>
                <a class="heading-elements-toggle">
                  <i class="la la-ellipsis-v font-medium-3"></i>
                </a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li>
                      <a data-action="collapse"><i class="ft-minus"></i></a>
                    </li>
                    <li>
                      <a data-action="reload"><i class="ft-rotate-cw"></i></a>
                    </li>
                    <li>
                      <a data-action="expand"><i class="ft-maximize"></i></a>
                    </li>
                    <li>
                      <a data-action="close"><i class="ft-x"></i></a>
                    </li>
                  </ul>
                </div>
              </div>

              @include('admin.includes.alerts.success')
              @include('admin.includes.alerts.errors')

              <div class="card-content collapse show">
                <div class="card-body card-dashboard">
                  <table class="table display nowrap table-striped table-bordered scroll-horizontal">
                    <thead class="">
                      <tr>
                        <th>{{ __('mine.Name') }}</th> 
                        <th>{{ __('mine.Main Category') }}</th>
                        <th>{{ __('mine.Slug') }}</th>
                        <th>{{ __('mine.Status') }}</th>
                        <th>{{ __('mine.Photo') }}</th>
                        <th>{{ __('mine.Actions') }}</th>
                      </tr>
                    </thead>
                    <tbody>
                      @isset($categories) 
                        @foreach($categories as $category)
                          <tr>
                            <td>{{ $category->name }}</td>
                            <td>{{$category -> _parent -> name  ?? '--' }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>{{ $category->getActive() }}</td>
                            <td>
                              <img style="width: 150px; height: 100px" src=" " />
                            </td>
                            <td>
                              <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('main_categories.edit', $category->id) }}" class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">
                                  {{ __('mine.Edit') }}
                                </a>
                                <a href="{{ route('main_categories.destroy', $category->id) }}" class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">
                                  {{ __('mine.Delete') }}
                                </a>
                              </div>
                            </td>
                          </tr>
                        @endforeach 
                      @endisset
                    </tbody>
                  </table>
                  <div class="justify-content-center d-flex"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>

@endsection
