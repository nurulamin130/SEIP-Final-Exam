



@extends('admin.master')

@section('content')

    <div class="row">
        <div class="col-xl-8 mx-auto">

            <div class="card mt-5">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">User Edit Form</h6>
                        <hr/>

                        <form action="{{ route('update-user') }}" method="post" enctype="multipart/form-data">

                            @csrf

                            <input type="hidden" value="{{ $user->id }}" name="id">

                            <div class="col-12">
                                <label class="form-label">User Name</label>
                                <input type="text" value="{{ $user->name }}" name="name" class="form-control">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Email</label>
                                <input type="email" value="{{ $user->email }}" name="email" class="form-control">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Password</label>
                                <input type="password" value="{{ $user->password }}" name="password" class="form-control">
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
