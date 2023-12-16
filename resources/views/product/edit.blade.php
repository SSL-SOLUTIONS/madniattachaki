
@extends('admin') 

@section('content')
    <div class="container">
        <h2>Edit Product</h2>

        @if ($errors->any())
            <div class="alert alert-danger col-6">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data" >
            @csrf
            @method('PUT')

            <div class="form-group col-6">
                <label for="title"><h4>Title:</h4></label>
                <input type="text" name="title" class="form-control" value="{{ $product->title }}" required>
            </div>

            <div class="form-group col-6">
                <label for="description"><h4>Description:</h4></label>
                <textarea name="description" class="form-control" required>{{ $product->description }}</textarea>
            </div>

            <div class="form-group col-6">
                <label for="image"><h4>Image:</h4></label>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="form-group col-6">
                <label for="price"><h4>Price:</h4></label>
                <input type="text" name="price" class="form-control" value="{{ $product->price }}" required>
            </div><br>

            <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
    </div>
@endsection
