@if(Session::has('success'))
    <div class="row mr-2 ml-2">
        <button type="text" class="btn btn-lg btn-block btn-outline-success mb-2" id="type-error" style="font-size: 14px">
            {{-- {{Session::get('success')}} --}}
            {{ __('mine.Logout Successfuly!') }}
        </button>
    </div>
@endif
