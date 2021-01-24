@extends("layouts.app")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Ops! Si è verificato un problema</h1>
                <a class="uppercase btn btn-primary" href="{{ route("homepage") }}">return to home</a>
            </div>
        </div>
    </div>
@endsection
