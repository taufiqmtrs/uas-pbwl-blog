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
	<div class="col-md-10">
	<h2>Edit Data Post</h2>
	<form action="{{ url('/post/' . $rows->id)}}" method="post">
	<input name="_method" type="hidden" value="patch">
	@csrf
	@method('PATCH')
	<table>
		
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Kategori</label>
			<div class="col-sm-5">
				<select name="post_cat_id" class="form-control bg-info">
					@foreach($cat as $row)
					<option value="{{$row->cat_id}}"

						@if($row->cat_id ==$rows->post_cat_id)
						selected
						@endif
						>{{$row->cat_name}}</option>
					@endforeach
				</select>
			</div>
			</div>

			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal</label>
			<div class="col-sm-5">
				<input type="date" name="post_date" value="{{ $rows->post_date}}" id="inputEmail3" class="form-control bg-light">
			</div>
			</div>

			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Slug</label>
			<div class="col-sm-5">
				<input type="text" name="post_slug" value="{{ $rows->post_slug}}" id="inputEmail3" class="form-control bg-light">
			</div>
			</div>
		

			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
			<div class="col-sm-5">
				<input type="text" name="post_tittle" value="{{ $rows->post_tittle}}" id="inputEmail3" class="form-control bg-light">
			</div>
			</div>

			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>
			<div class="col-sm-5">
				<input type="text" name="post_text" value="{{ $rows->post_text}}" id="inputEmail3" class="form-control bg-light">
			</div>
			</div>

	</table>
	<div class="form-group row">
		<div class="col-sm-10">
		<input type="submit" value="UPDATE" class="btn btn-info">
	</div></div>
	</form>
</div>
</body>
</html>

@endsection