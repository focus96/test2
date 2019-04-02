@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <a href="/match">match</a>

                    <form action="/match" method="post">
                        @csrf
                        <input type="submit" value="send">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
