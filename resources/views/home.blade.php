@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <span id="teste"></span>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    setTimeout(() => {
        document.getElementById('teste').innerHTML = 'Luiz';
    }, 2000)
</script>
@endsection
