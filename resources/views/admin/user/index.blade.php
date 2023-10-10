



@extends('admin.master')

@section('content')



    <div class="row">
        <div class="col-xl-8 mx-auto">

            <div class="card mt-5">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">User Show Table</h6>
                        <hr/>

                        <table class="table table-hover table-striped table-bordered">
                            <thead>
                            <th>sl</th>
                            <th>User Name</th>
                            <th>Email</th>
{{--                            <th>Password</th>--}}

                            <th>Action</th>
                            </thead>
                            <tbody>

                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>


                                    <td>

                                        <a href="{{ route('edit-user',['id' => $user->id]) }}" class="btn btn-primary btn-sm float-start m-1 ">Edit</a>

                                        <form action="{{ route('delete-user') }}" method="post">

                                            @csrf

                                            <input type="hidden" value="{{ $user->id }}" name="id">

                                            <button type="submit"  class="btn btn-danger btn-sm "
                                                    onclick="return confirm('Are you sure delete this !!')" >delete</button>

                                        </form>



                                    </td>

                                </tr>



                            @endforeach


                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
