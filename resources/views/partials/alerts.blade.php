@if (Session::has('success'))
<div class="container">
    <div class="alert alert-success" style="margin-top: 160px;" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ session('success') }}
    </div>
</div>
@endif