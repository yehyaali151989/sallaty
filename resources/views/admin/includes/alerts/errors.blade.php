@if(Session::has('error'))
    <div class="row mr-2 ml-2" >
        <button type="text" class="btn btn-lg btn-block btn-outline-danger mb-2" id="type-error" style="font-size: 14px">
            {{ Session::get('error') }}
            {{--  {{ __('mine.These credentials do not match our records.') }}  --}}
        </button>
    </div>
@endif
