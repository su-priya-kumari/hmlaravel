@extends('admin.adminbase')
@section('content')
		<!--start page wrapper -->
	<div class="page-wrapper">
		<div class="page-content">

			<div class="row">
                <div class="col-xl-11 mx-auto">
                    <h6 class="mb-0 text-uppercase">All Admin Records</h6>
                    <hr/>
                    <div class="card">
                        <div class="card-body">
                            <table class="table mb-0">
                                <thead class="table-success">
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                @foreach ($records as $record)
                                <tbody>
                                    <tr>
                                        <td>{{$record->id}}</td>
                                        <td>{{$record->email}}</td>
                                        <td>{{$record->password}}</td>
                                        <td>
                                            <a href={{"edit/".$record['id']}} class="btn btn-success btn-sm">Edit</a>
                                            <a href={{"delete/".$record['id']}} class="btn btn-danger btn-sm">Delete</a>
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