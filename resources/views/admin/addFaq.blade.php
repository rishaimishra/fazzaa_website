@extends('admin.master')
@section('content')
<div class="content">


	<!-- Start Content-->
	<div class="container-fluid">
		@if (session('success'))
		<div class="col-sm-12">
			<div class="alert  alert-success alert-dismissible fade show" role="alert">
				{{ session('success') }}
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		</div>
		@endif

		@error('error')
		<div class="alert alert-danger" role="alert">
			{{ $message }}
		</div>
		@enderror
		<!-- start page title -->
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<h4 class="page-title">Add Faq</h4>
				</div>
			</div>
		</div>
		<!-- end page title -->

		<div class="row">
			<div class="col-12">
				<div class="card">
					@if($errors->any())
					<div class="alert alert-danger" role="alert">
						@foreach ($errors->all() as $error)
						<div>{{$error}}</div>
						@endforeach

					</div>
					@endif
					<div class="card-body">


						<form method="post">
							@csrf
							<div class="form-group">
								<label>Language</label>
								<select class="custom-select mb-3" name="lang">
									<option selected>Select Language</option>
									<option value="en">English</option>
									<option value="ar">Arabic</option>
								</select>
							</div>
							<div class="form-group">
								<label>Title</label>
								<input type="text" class="form-control" data-provide="typeahead" name="title"
									id="the-basics" placeholder="Basic Example">
							</div>
							<div class="form-group">
								<label>Description</label>
								<div class="tab-pane show active" id="basic-preview">
									<!-- basic summernote-->
									<textarea id="summernote-basic" name="description"></textarea>
								</div> <!-- end preview-->
							</div>
							<button type="submit" class="btn btn-primary">submit</button>

						</form>
					</div> <!-- end tab-content-->

				</div>
				<!-- end card-body -->

			</div> <!-- end card-->
		</div> <!-- end col-->
	</div>
	<!-- end row -->


	<!-- ============================================================== -->
	<!-- End Page content -->
	<!-- ============================================================== -->


</div>

@endsection
