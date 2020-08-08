@if (count($errors))
    <div class="alert alert-danger">
        <div style="cursor: pointer" class="close" data-dismiss="alert"><span>&times;</span></div>

        @foreach($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    </div>
@endif