
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
                    <h1 class="h3 mb-0 text-gray-800">{{ __('create services') }}</h1>
                    <a href="{{ route('admin.services.index') }}" class="btn btn-primary btn-sm shadow-sm">{{ __('Go Back') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.services.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">{{ __('name') }}</label>
                        <input type="text" class="form-control" id="service_name" name="service_name" value="{{ old('name') }}" />

                    </div>
                    <div class="form-group">
                        <label for="code_name">{{ __('Code') }}</label>
                        <textarea name="code_name" class="form-control @error('code_name') is-invalid @enderror"
                            id="code_name" placeholder="">{{ old('code_name') }}</textarea>           
                    </div>
                    <div class="form-group">
                        <label for="specification_description">Specification/Description</label>
                        <textarea name="specification_description" class="form-control @error('description') is-invalid @enderror"
                            id="specification_description" placeholder="description">{{ old('specification_description') }}</textarea>           
                    </div>

                    <!-- <div class="form-group">
                        <label for="quantity">{{ __('quantity') }}</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity') }}" />
                    </div> -->

                    <div class="form-group">
                        <label for="unit_price">{{ __('unit price') }}</label>
                        <input type="number" class="form-control" id="unit_price" name="unit_price" value="{{ old('unit_price') }}" />
                    </div>

                    <div class="form-group">
                        <label for="price">{{ __('price') }}</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}" />
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-block">{{ __('Save') }}</button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
@endsection


@push('style-alt')
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush
