@extends('app')
@section('content-header')
<h1>
User Manager
<small>Control panel</small>
</h1>
<ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i>Home</a></li>
    <li class="active">User Manager</li>
</ol>
@endsection
 
@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
		    	<h1><i class="fa fa-users"></i>User</h1>
		 	</div>
		 	<div class="box-body table-responsive">
			    <a href="/user/create" class="btn btn-success">Add User</a>
		        <table class="table table-condensed table-striped table-bordered table-hover no-margin">
		 
		            <thead>
		                <tr>
		                    <th>Name</th>
		                    <th>Username</th>
		                    <th>Email</th>
		                    <th>Level</th>
		                    <th>Date/Time Added</th>
		                    <th>Last Updated</th>
		                    <th width="200"></th>
		                </tr>
		            </thead>
		 
		            <tbody>
		                @foreach ($users as $user)
		                <tr>
		                    <td>{{ $user->getFullName() }}</td>
		                    <td>{{ $user->name }}</td>
		                    <td>{{ $user->email }}</td>
		                    <td>{{ $user->level }}</td>
		                    <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
		                    <td>{{ $user->updated_at->format('F d, Y h:ia') }}</td>
		                    <td>
		                        <a href="/user/{{ $user->id }}" class="btn btn-warning pull-left" style="margin-right: 3px;">View</a>
		                        <a href="/user/{{ $user->id }}/edit" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
		                        {!! Form::open(['url' => '/user/' . $user->id, 'method' => 'DELETE']) !!}
		                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
		                        {!! Form::close() !!}
		                    </td>
		                </tr>
		                @endforeach
		            </tbody>
		        </table>
			    <a href="/user/create" class="btn btn-success">Add User</a>
		    </div>
	 	</div>
	</div>
</div>
@endsection