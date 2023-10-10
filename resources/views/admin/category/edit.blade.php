

@extends('admin.master')

@section('content')

    <div class="row">
        <div class="col-xl-8 mx-auto">

            <div class="card mt-5">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Category Edit Form</h6>
                        <hr/>

                        <form action="{{ route('categories.update',$category->id) }}" method="post" enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="col-12">
                                <label class="form-label">Category Name</label>
                                <input type="text" value="{{ $category->category_name }}" name="category_name" class="form-control">
                            </div>

                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-success m-1">Save Info</button>
                                </div>
                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
