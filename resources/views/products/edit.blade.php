@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('products.update', 1) }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="PUT">

                            <input type="text" name="name" value="{{ old('name', $product['name']) }}">
                            <div>
                                @if($errors->has('name'))
                                    {{ $errors->first('name') }}
                                @endif
                            </div>
                            <br>
                            <textarea name="description" id="" cols="30" rows="10">{{ old('description', $product['description']) }}</textarea>
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