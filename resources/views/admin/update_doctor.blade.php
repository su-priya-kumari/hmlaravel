@extends('admin.adminbase')
@section('content')
		<!--start page wrapper -->
	<div class="page-wrapper">
		<div class="page-content">

			<div class="row">
                <div class="col-xl-11 mx-auto">
                    <h6 class="mb-0 text-uppercase">All Doctor Records</h6>
                    <hr/>
                    <div class="card">
                        <div class="card-body">
                            <table class="table mb-0">
                                <thead class="table-success">
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">firstname</th>
                                        <th scope="col">lastname</th>
                                        <th scope="col">clinic_id</th>
                                        <th scope="col">email</th>
                                        <th scope="col">gender</th>
                                        <th scope="col">specialist</th>
                                        <th scope="col">treatment</th>
                                        <th scope="col">experience</th>
                                        <th scope="col">designation</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                @foreach ($records as $record)
                                <tbody>
                                    <tr>
                                        <td>{{$record->id}}</td>
                                        <td>{{$record->firstname}}</td>
                                        <td>{{$record->lastname}}</td>
                                        <td>{{$record->clinic_id}}</td>
                                        <td>{{$record->email}}</td>
                                        <td>{{$record->gender}}</td>
                                        <td>{{$record->specialist}}</td>
                                        <td>{{$record->treatment}}</td>
                                        <td>{{$record->experience}}</td>
                                        <td>{{$record->designation}}</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Edit</a>
                                            <a href="" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>

		</div>
	</div>
		<!--end page wrapper -->
		
@endsection