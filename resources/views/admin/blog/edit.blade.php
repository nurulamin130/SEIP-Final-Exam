

@extends('admin.master')

@section('content')

    <div class="row">
        <div class="col-xl-8 mx-auto">

            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Blog Edit Form</h6>
                        <hr/>

                        <form action="{{ route('blogs.update',$blog->id) }}" method="post" class="row g-3" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-12">
                                <label class="form-label">Title</label>
                                <input type="text" value="{{ $blog->title }}" name="title" class="form-control">
                            </div>

                            {{--                            slug means title tai url e dekhabe--}}


                            <div class="col-12">
                                <label class="form-label">Category</label>
                                <select name="category_id" id="" class="form-control" >
                                    <option value="">select category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ ($category->id == $blog->category_id) ? 'selected' : '' }} > {{ $category->category_name }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Auther Name</label>
                                <input type="text" name="author_name" value="{{ $blog->author_name }}" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Description</label>
                                <textarea  name="description" class="form-control">  {{ $blog->description }} </textarea>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Image</label>
                                <input type="file" name="image" class="form-control">
                                <img src="{{ asset($blog->image) }}" alt="" style="height: 50px ; width: 50px ">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Date</label>
                                <input type="date" name="date" value="{{ $blog->date }}" class="form-control">
                            </div>



                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Save Info</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
