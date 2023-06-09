<div class="clear-both"></div>

@if (!empty(session('sucess')))
    <div class="alert alert-success alert-dismissible face in " role="alert">
        {{ session('sucess') }}
    </div>
@endif

@if (!empty(session('error')))
    <div class="alert alert-danger alert-dismissible face in " role="alert">
        {{ session('error') }}
    </div>
@endif
