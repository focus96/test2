@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('products.store') }}" method="post">
                            @csrf

                            

                            <input type="text" name="name" value="{{ old('name') }}">
                            <div>
                                @if($errors->has('name'))
                                    {{ $errors->first('name') }}
                                @endif
                            </div>
                            <br>
                            <textarea name="description {{  }}" id="" cols="30" rows="10">{{ old('description') }}</textarea>
                            <div>
                                @if($errors->has('description'))
                                    {{ $errors->first('description') }}
                                @endif
                            </div>
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection