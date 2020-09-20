@extends('admin.layouts.dashboard') 

@section('title') 
  {{ __('mine.Add New Category') }}
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
                  <a href="{{ route('main_categories.index') }}">
                    {{ __('mine.Main Categories') }}
                  </a>
                </li>
                <li class="breadcrumb-item active">{{ __('mine.Add New Category') }}</li>
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
                    {{ __('mine.Add New Category') }}
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
                      action="{{ route('main_categories.store') }}"
                      method="POST"
                      enctype="multipart/form-data"
                    >
                      @csrf

                      <div class="form-group">
                        <label>{{ __('mine.Category Photo') }}</label>
                        <label id="projectinput7" class="file center-block">
                          <input type="file" id="file" name="photo" />
                          <span class="file-custom"></span>
                        </label>
                        @error('photo')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="form-body">
                        <h4 class="form-section">
                          <i class="ft-home"></i>
                          {{ __('mine.Category Data') }} 
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

                        <div class="row hidden" id="cats_list" >
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label for="projectinput1">
                                    {{ __('mine.Select Main Category') }}
                                  </label>
                                  <select name="parent_id" class="select2 form-control">
                                      <optgroup label="من فضلك أختر القسم ">
                                          @if($categories && $categories -> count() > 0)
                                              @foreach($categories as $category)
                                                  <option
                                                      value="{{$category -> id }}">{{$category -> name}}</option>
                                              @endforeach
                                          @endif
                                      </optgroup>
                                  </select>
                                  @error('parent_id')
                                  <span class="text-danger"> {{$message}}</span>
                                  @enderror

                              </div>
                          </div>
                      </div>


                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group mt-1">
                              <input
                                type="checkbox"
                                value="1"
                                name="is_active"
                                id="switcheryColor4"
                                class="switchery"
                                data-color="success"
                                checked
                              />
                              <label for="switcheryColor4" class="card-title ml-1"
                                >{{ __('mine.Status') }}
                              </label>

                              @error("is_active")
                              <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                          </div>

                          <div class="col-md-3">
                            <div class="form-group mt-1">
                                <input type="radio"
                                       name="type"
                                       value="1"
                                       checked
                                       class="switchery"
                                       data-color="success"
                                />

                                <label
                                    class="card-title ml-1">
                                    {{ __('mine.Main Category') }}
                                </label>

                            </div>
                          </div>

                          <div class="col-md-3">
                            <div class="form-group mt-1">
                                <input type="radio"
                                      name="type"
                                      value="2"
                                      class="switchery" data-color="success"
                                />

                                <label
                                    class="card-title ml-1">
                                    {{ __('mine.Sub Category') }}
                                </label>

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

@section('script')
  <script>
      $('input:radio[name="type"]').change(
          function(){
              if (this.checked && this.value == '2') {  // 1 if main cat - 2 if sub cat
                  $('#cats_list').removeClass('hidden');
              }else{
                  $('#cats_list').addClass('hidden');
              }
          });
  </script>
@endsection

