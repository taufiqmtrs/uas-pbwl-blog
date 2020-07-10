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

</body>
</html>

<div class="container">
	<h2>Data Photo <a href="{{ url('photo/create') }}" class="btn btn-info">Add</a></h2>

	<table class="table">
		<thead class="bg-light">
		<tr class="bg-info">
			<th scope="col">ID</th>
			<th scope="col">GAMBAR</th>
			<th scope="col">POST</th>
			<th scope="col">TANGGAL</th>
			<th scope="col">JUDUL</th>
			<th scope="col">KETERANGAN</th>
			<th scope="col">ACTION</th>
		</tr>

		@foreach($rows as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td><img width="150px" class="img-thumbnail" src="{{ url('public/uploads/images/'. $row->gambar) }}"></td>
			<td>{{ $row->post->post_tittle }}</td>
			<td>{{ $row->pho_date }}</td>
			<td>{{ $row->pho_tittle }}</td>
			<td>{{ $row->pho_text }}</td>
			<td>
				<a href="{{ url('photo/' . $row->id . '/edit')}}" class="btn btn-success">EDIT</a>
				
				<form action="{{ url('photo/' . $row->id)}}" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button class="btn btn-danger">DELETE</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
</div>
@endsection