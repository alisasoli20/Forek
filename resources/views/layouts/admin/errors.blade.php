@if($errors->any())
    <div class="alert alert-warning mt-2">
        {!! implode('', $errors->all('<div>:message</div>')) !!}
    </div>

@endif
@if(session()->has("error"))
    <div class="alert alert-danger mt-2">
        {{ session("error") }}
    </div>
@endif
@if(session()->has("success"))
    <div class="alert alert-success mt-2">
        {{ session("success") }}
    </div>
@endif
