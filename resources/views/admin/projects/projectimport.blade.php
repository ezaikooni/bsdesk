
@extends('layouts.adminmaster')

	@section('styles')

	@endsection


							@section('content')

							<!--Page header-->
							<div class="page-header d-xl-flex d-block">
								<div class="page-leftheader">
									<h4 class="page-title"><span class="font-weight-normal text-muted ms-2">{{trans('langconvert.admindashboard.importprojects')}}</span></h4>
								</div>
							</div>
							<!--End Page header-->

							<!-- Project Import Csv-->
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card ">
									@if (isset($errors) & $errors->any())

										<div class="alert alert-danger">
											@foreach ($errors->all() as $item)

												{{$item}}
												
											@endforeach
										</div>
									@endif

									<div class="card-header border-0">
										<h4 class="card-title">{{trans('langconvert.admindashboard.importprojects')}}</h4>
									</div>
									<form method="POST" action="" enctype="multipart/form-data">
										@csrf
										
										@honeypot
										<div class="card-body" >
											<div class="row">
												<div class="form-group">
													<label class="form-label">{{trans('langconvert.admindashboard.uploadfile')}} </label>
													<div class="input-group file-browser">
														<input class="form-control" name="file" type="file">
													</div>
													<small class="text-muted"><i>File Format: .xlsx & .csv</i></small>
													<p>{{trans('langconvert.admindashboard.download')}} <a href="{{asset('download/projectsample.csv')}}" class="text-primary" download>{{trans('langconvert.admindashboard.samplefile')}}</a></p>
													<span id="nameError" class="text-danger alert-message"></span>
												</div>
											</div>
										</div>
										<div class="card-footer">
											<button type="submit" class="btn btn-secondary float-end mb-2"  > {{trans('langconvert.admindashboard.import')}}</button>
										</div>
									</form>
								</div>
							</div>
							<!-- Project Import Csv-->
           
							@endsection

		@section('scripts')

		<!-- INTERNAL Vertical-scroll js-->
		<script src="{{asset('assets/plugins/vertical-scroll/jquery.bootstrap.newsbox.js')}}?v=<?php echo time(); ?>"></script>

		<!-- INTERNAL Index js-->
		<script src="{{asset('assets/js/support/support-sidemenu.js')}}?v=<?php echo time(); ?>"></script>      
		
		@endsection
