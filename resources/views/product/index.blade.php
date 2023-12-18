<!-- resources/views/products/index.blade.php -->
<link rel="icon" type="image/jpeg" href="{{ asset('website/favicon.jpeg') }}">

@extends('admin') <!-- Assuming you have a master layout -->

@section('content')
    <div class="container">
        <h2>Product List</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('product.create') }}" class="btn btn-primary mb-2">Add New Product</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->description }}</td>
                        <td>
                            @if ($product->image)
                                <img src="{{ asset('admin/images/products/' . $product->image) }}" alt="Product Image" style="max-width: 100px;">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>{{ $product->price }}</td>
                        <td>

                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">No products found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
