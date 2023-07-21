@extends('layouts.app')
@section('title', 'add product')
@section('content')

    <div class="content-page">
        <div class="container-fluid add-form-list">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Add Product</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('product.store')}}"  enctype="multipart/form-data" data-toggle="validator">
                                <div class="row">
                                    @csrf
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name *</label>
                                            <input type="text" class="form-control" name="name" placeholder="Enter Name"
                                                data-errors="Please Enter Name." required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Code *</label>
                                            <input type="text" name="code" class="form-control" placeholder="Enter Code"
                                                data-errors="Please Enter Code." required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Category *</label>
                                            <select name="category_id" class="selectpicker form-control" data-style="py-0">
                                                <option value="" selected>select a category</option>
                                                @foreach ($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Price *</label>
                                            <input type="text" name="price" class="form-control" placeholder="Enter Price"
                                                data-errors="Please Enter Price." required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Quantity *</label>
                                            <input type="text" name="quantity" class="form-control" placeholder="Enter Quantity" value="0"
                                                required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" class="form-control image-file" name="image">
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description / Product Details</label>
                                            <textarea class="form-control" rows="4"></textarea>
                                        </div>
                                    </div> --}}
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Add Product</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page end  -->
        </div>
    </div>

@endsection
