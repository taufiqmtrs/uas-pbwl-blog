@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		h2	{
			margin-bottom: 30px;
		}

	</style>
</head>
<body>
	<div class="container">
	<h2>Data Kategori <a href="{{ url('category/create') }}" class="btn btn-info">Add</a></h2>

	<table class="table">
		<thead class="bg-light">
		<tr class="bg-info">
			<th scope="col">ID</th>
			<th scope="col">NAMA</th>
			<th scope="col">KETERANGAN</th>
			<th scope="col">ACTION</th>
		</tr>

		@foreach($rows as $row)
		<tr>
			<td>{{ $row->cat_id }}</td>
			<td>{{ $row->cat_name }}</td>
			<td>{{ $row->cat_text }}</td>
			<td>
				<a href="{{ url('category/' . $row->cat_id . '/edit')}}" class="btn btn-success">EDIT</a>
				
				<form action="{{ url('category/' . $row->cat_id)}}" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button class="btn btn-danger">DELETE</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
</div>
</body>
</html>
@endsection