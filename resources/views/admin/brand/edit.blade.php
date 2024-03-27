@extends('admin.admin_master')
@section('admin')
    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8"> 
                    <div class="card">
                        <div class="card-header"> Edi Category </div>
                            <div class="card-body">
 
                        <form action="{{ url('brand/update/'.$brand->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf  
                            <input type="hidden" name="old_image" value="{{ $brand->brand_image }}">
                            <div class="form-group">
                                <label  class="form-label">Update Brand Name</label>
                                <input type="text" name="brand_name" value="{{ $brand->brand_name }}" class="form-control"  placeholder="">
                                @error('brand_name')
                                    <div class="alert alert-danger">{{ $message }} !</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label  class="form-label">Update Brand Image</label>
                                <input type="file" name="brand_image" value="{{ $brand->brand_image }}" class="form-control"  placeholder="">
                                @error('brand_image')
                                    <div class="alert alert-danger">{{ $message }} !</div>
                                @enderror
                            </div>
                            <div class="form-group">
                               <img src="{{ asset($brand->brand_image) }}" alt="" style="width:400px; height:200px">
                            </div>

                             <button type="submit" class="btn btn-primary" style="margin-top : 15px">Update Category</button>
                        </form>
                    </div>
                </div>
            </div>
            </div>
@endsection
