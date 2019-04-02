@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h2>Отображение всех</h2>


                        @php
                            $arr = [1, 2, 3];
                        @endphp

     

                    @each('feedback', $arr, 'id')

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
