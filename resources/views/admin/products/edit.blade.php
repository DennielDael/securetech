@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<!-- Content Row -->
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{{ __('edit product')}}</h1>
                    <a href="{{ route('admin.products.index') }}" class="btn btn-primary btn-sm shadow-sm">{{ __('Go Back') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.products.update', $product->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name">{{ __('name') }}</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $product->name) }}" />
                    </div>
                    <div class="form-group">
                        <label for="category">{{ __('category') }}</label>
                        <select name="category_id" id="category" class="form-control">
                            @foreach($categories as $id => $categoryName)
                            <option {{ $id == $product->category->name }} value="{{ $id }}">{{ $categoryName }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                            id="description" >{{ old('description', $product->description) }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">{{ __('price') }}</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{ old('price', $product->price) }}" />
                    </div>
                    <div class="form-group">
                        <label for="quantity">{{ __('quantity') }}</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity', $product->quantity) }}" />
                    </div>

                    <div class="form-group mb-3">
                            <label for="">Product Image</label>
                            <input type="file" name="product_image" class="form-control">
                            <img src="{{ asset('uploads/products/'.$product->product_image) }}" width="70px" height="70px" alt="Image">
                        </div>

                    <!-- <div class="form-group">
                        <label for="image">image</label>
                        <div class="needsclick dropzone" id="image-dropzone">

                        </div>
                        @error('image')<span class="text-danger">{{ $message }}</span>@enderror
                    </div> -->
                    <button type="submit" class="btn btn-primary btn-block">{{ __('Save')}}</button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
@endsection


@push('style-alt')
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush
