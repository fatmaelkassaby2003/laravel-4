@if(session('success') != null)
<div class="alert alert-success p-2 text-center">
    {{session('success')}}
</div>
@endif
@if($errors->any())
@foreach($errors->all() as $error)
<!-- <div class="alert alert-danger p-2 text-center">
                                     {{$error}}
                                    </div> -->
@endforeach
@endif