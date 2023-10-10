
@extends('admin.master')

@section('content')


    <div class="row">
        <div class="col-xl-8 mx-auto">

            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Blog Create Form</h6>
                        <hr/>


                        <form action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data" class="row g-3">

                            @csrf

                            <div class="col-12">
                                <label class="form-label"> Title </label>
                                <input type="text" name="title" class="form-control">
                            </div>



                             <div class="col-12">
                                <label class="form-label"> Category </label>
                                 <select name="category_id" id="" class="form-control" >
                                     <option value="">Please Select a Category</option>
                                     @foreach($categories as $category)
                                         <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                     @endforeach
                                 </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label"> Author_name </label>
                                <input type="text" name="author_name" class="form-control">
                            </div>

                            <div class="col-12">
                                <label class="form-label"> Description </label>
                                <textarea name="description" class="form-control" ></textarea>
                            </div>

                            <div class="col-12">
                                <label class="form-label"> Image  </label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="col-12">
                                <label class="form-label"> Date </label>
                                <input type="date" name="date" class="form-control">
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
