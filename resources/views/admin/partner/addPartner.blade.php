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
                                     <h4 class="page-title">Add Partner</h4>
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


											<form method="post" >
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
											    <input type="text" class="form-control" data-provide="typeahead" name="title" id="the-basics" placeholder="Basic Example">
											</div>
							               	<div class="form-group">

                                        	<div class="form-group">
											    <label>Image</label>
											    <input type="file" class="form-control" id="mypostdealimg"   placeholder="Add Image" />
                                    			<input type="hidden"class=" form-control" id="mypostdealimg1"  name="image" placeholder="Add Image" />
											</div>
                                            	<img src="" id="yourpostdealimg" style="height:180px; width:180px"  />
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
  <script>
$(document).ready(function () {
 	$(":file").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();

                reader.onload = imageIsLoaded;
                reader.readAsDataURL(this.files[0]);
            }
    });

   function imageIsLoaded(e) {
        $('#mypostdealimg').attr('src', e.target.result);
        $('#yourpostdealimg').attr('src', e.target.result);
        $("#mypostdealimg1").val(e.target.result)
    };
 })
 </script>

@endsection


