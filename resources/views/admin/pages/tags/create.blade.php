@extends('admin.layouts.dashboard') 

@section('title') 
  {{ __('mine.Add New Tag') }}
@endsection 

@section('content')
  
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('mine.Home') }}</a></li>
                <li class="breadcrumb-item">
                  <a href="{{ route('brands.index') }}">
                    {{ __('mine.Tags') }}
                  </a>
                </li>
                <li class="breadcrumb-item active">{{ __('mine.Add New Tag') }}</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="content-body">
        <!-- Basic form layout section start -->
        <section id="basic-form-layouts">
          <div class="row match-height">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="basic-layout-form">
                    {{ __('mine.Add New Tag') }}
                  </h4>
                  <a class="heading-elements-toggle"
                    ><i class="la la-ellipsis-v font-medium-3"></i
                  ></a>
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
                  <div class="card-body">
                    <form
                      class="form"
                      action="{{ route('tags.store') }}"
                      method="POST"
                      enctype="multipart/form-data"
                    >
                      @csrf


                      <div class="form-body">
                        <h4 class="form-section">
                          <i class="ft-home"></i>
                          {{ __('mine.Brand Data') }} 
                        </h4>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput1">{{ __('mine.Name') }}</label>
                              <input
                                type="text"
                                id="name"
                                class="@error('name') is-invalid @enderror form-control"
                                placeholder="  "
                                value="{{ old('name') }}"
                                name="name"
                              />
                              @error("name")
                              <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput1">{{ __('mine.Slug') }}</label>
                              <input
                                type="text"
                                id="slug"
                                class="@error('slug') is-invalid @enderror form-control"
                                placeholder="  "
                                value="{{ old('slug') }}"
                                name="slug"
                              />
                              @error("slug")
                              <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="form-actions">
                        <button
                          type="button"
                          class="btn btn-warning mr-1"
                          onclick="history.back();"
                        >
                          <i class="ft-x"></i>
                          {{ __('mine.Back') }}
                        </button>
                        <button type="submit" class="btn btn-primary">
                          <i class="la la-check-square-o"></i>
                          {{ __('mine.Save') }}
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- // Basic form layout section end -->
      </div>
    </div>
  </div>

@endsection
