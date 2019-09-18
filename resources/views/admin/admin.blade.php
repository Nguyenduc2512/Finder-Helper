@extends('admin.layouts.main')
@section('content')
linh xinh gái


<div class="row">
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-info">
			<div class="inner">
				<h3> {{$users}}</h3>
				<p> Users</p>
			</div>
			<div class="icon">
				<i class="fas fa-user-alt"></i></i>
			</div>
			<a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
		</div>
	</div>
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-success">
			<div class="inner">
				<h3> {{$categories}}</h3>
				<p> categories</p>
			</div>
			<div class="icon">
				<i class="fas fa-list-alt"></i>
			</div>
			<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
		</div>
	</div>
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-danger">
			<div class="inner">
				<h3> {{$posts}}</h3>
				<p> posts chờ duyệt</p>
			</div>
			<div class="icon">
				<i class="fas fa-newspaper"></i>
			</div>
			<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
		</div>
	</div>
		<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-danger">
			<div class="inner">
				<h3> {{$bv}}</h3>
				<p> posts</p>
			</div>
			<div class="icon">
				<i class="fas fa-newspaper"></i>
			</div>
			<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
		</div>
	</div>
	<!-- ./col -->
</div>

@endsection
