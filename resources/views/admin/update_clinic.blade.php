@extends('admin.adminbase')
@section('content')
		<!--start page wrapper -->
	<div class="page-wrapper">
		<div class="page-content">
           
			<div class="row">
                <div class="col-xl-11 mx-auto">
                    <h6 class="mb-0 text-uppercase">All Clinic Records</h6>
                    <hr/>
                     
                    @if(Session::has('message')) 
                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif

                    <div class="card">
                        <div class="card-body">
                            <table class="table mb-0">
                                <thead class="table-success">
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Clinic_name</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">State</th>
                                        <th scope="col">Country</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">Specialization</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                @foreach ($records as $record)
                                <tbody>
                                    <tr>
                                        <td>{{$record->id}}</td>
                                        <td>{{$record->clinic_name}}</td>
                                        <td>{{$record->address}}</td>
                                        <td>{{$record->state}}</td>
                                        <td>{{$record->country}}</td>
                                        <td>{{$record->contact}}</td>
                                        <td>{{$record->specialization}}</td>
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