@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">

		h2	{
			margin-bottom: 30px;
		}

	</style>
</body>
<div class="container">
	<div class="col-md-10">

	<h2>Input Data Post</h2>
	<form method="post" action="{{url('/post')}}">
	@csrf
		<table>
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Kategori ID</label>
			<div class="col-sm-5">
				<select name="post_cat_id" class="form-control bg-info">
					@foreach($cat as $row)
					<option value="{{$row->cat_id}}">{{$row->cat_name}}</option>
					@endforeach
				</select>	
			</div>
			</div>
			
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal</label>
			<div class="col-sm-5">
				<input type="date" name="post_date" class="form-control bg-light" id="inputEmail3">
			</div>
			</div>

			
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Slug</label>
			<div class="col-sm-5">
				<input type="text" name="post_slug" class="bg-light form-control" id="inputEmail3">
			</div>
			</div>

			
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
			<div class="col-sm-5">
				<input type="text" name="post_tittle" class="bg-light form-control" id="inputEmail3">
			</div>
			</div>

			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>
			<div class="col-sm-5">
				<input type="text" name="post_text" class="bg-light form-control" id="inputEmail3">
			</div>
			</div>

		</table>
			<div class="form-group row">
				<button type="submit" class="btn btn-info">SAVE</button>

	</form>
</div>
</html>


@endsection