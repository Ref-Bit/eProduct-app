@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create a New Product</div>

                    <div class="card-body">
                        <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
                            </div>

                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" name="price" id="price" class="form-control" value="{{old('price')}}">
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{old('description')}}</textarea>
                            </div>

                            <div class="form-group">
                                <div class="text-center">
                                    <button class="btn btn-success" type="submit">Store Product</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection