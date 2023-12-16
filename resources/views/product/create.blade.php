<!-- resources/views/products/create.blade.php -->

@extends('admin') 
@section('content')
    <div class="container">
        <h2>Add Product</h2>

        @if ($errors->any())
            <div class="alert alert-danger col-6">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

         <div class="form-group col-6">
                <label for="title"><h4>Title:</h4></label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="form-group col-6">
                <label for="description"><h4>Description:</h4></label>
                <textarea name="description" class="form-control" required></textarea>
            </div>

            <div class="form-group col-6">
                <label for="image"><h4>Image:</h4></label>
                <input type="file" name="image"  accept="image/*" class="form-control">
            </div>

            <div class="form-group col-6">
                <label for="price"><h4>Price:</h4></label>
                <input type="text" name="price" class="form-control" required>
            </div><br>

            <button type="submit" class="btn btn-primary">Save Product</button>
        </form>
    </div>
@endsection
