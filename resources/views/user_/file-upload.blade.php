@extends('layouts.master')
@section('content')
@include('layouts.userheader')
<main id="app-main" class="app-main">
    <div class="wrap">
    	<section class="app-content">
			<div class="row">
				<div class="col-md-12">
					<div class="widget">
						<header class="widget-header">
							<h4 class="widget-title">Upload Scanned Files</h4>
						</header><!-- .widget-header -->
						<hr class="widget-separator">
						<div class="widget-body">
							<div class="m-b-lg">
								<small class="text text-info">
									<!-- Only Applicants with two sittings are to upload O'Level 1 & O'Level 2 results. -->
								</small>
							</div>
							@foreach ($errors->all() as $error)
		                    <li>{{ $error }}</li>
		                    @endforeach
							<form action="{{ route('user.submit.files') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
								@csrf
								<div class="form-group @error('olevel') has-error @enderror">
									<label for="select2-demo-2" class="col-sm-4 control-label">Passport</label>
									<div class="col-sm-6">
										<div class="row">
											<div class="col-sm-6">
												<input type="file" name="passport" id="profile-img">
											</div>
											<div class="col-sm-6">
												<img src="{{asset('images/dummy-passport.jpg') }}" id="profile-img-tag" width="150" height="100" />
											</div>
										</div>
										@error('olevel1')
											<div class="alert-danger">{{ $message }}</div>
										@enderror
									</div><!-- END column -->
								</div><!-- .form-group -->
								@if($olevel->sittings == 1)
								<div class="form-group @error('olevel') has-error @enderror">
									<label for="select2-demo-2" class="col-sm-4 control-label">O'level Result 1</label>
									<span>PDF Only</span>
									<div class="col-sm-6">
										<input type="file" name="olevel1" class="form-control" required>

										@error('olevel1')
											<div class="alert-danger">{{ $message }}</div>
										@enderror
									</div><!-- END column -->
								</div><!-- .form-group -->
								@else
								<div class="form-group @error('olevel') has-error @enderror">
									<label for="select2-demo-2" class="col-sm-4 control-label">O'level Result 1</label>
									<span>PDF Only</span>
									<div class="col-sm-6">
										<input type="file" name="olevel1" class="form-control" required>

										@error('olevel1')
											<div class="alert-danger">{{ $message }}</div>
										@enderror
									</div><!-- END column -->
								</div><!-- .form-group -->
								<div class="form-group @error('olevel2') has-error @enderror">
									<label for="select2-demo-2" class="col-sm-4 control-label">O'level Result 2</label>
									<span>PDF Only</span>
									<div class="col-sm-6">
										<input type="file" name="olevel2" class="form-control">

										@error('olevel2')
											<div class="alert-danger">{{ $message }}</div>
										@enderror
									</div><!-- END column -->
								</div><!-- .form-group -->
								@endif
								<div class="form-group @error('birth_certificate') has-error @enderror">
									<label for="select2-demo-2" class="col-sm-4 control-label">Birth Certificate</label>
									<span>PDF Only</span>
									<div class="col-sm-6">
										<input type="file" name="birth_certificate" class="form-control" required>

										@error('birth_certificate')
											<div class="alert-danger">{{ $message }}</div>
										@enderror
									</div><!-- END column -->
								</div><!-- .form-group -->

								<div class="form-group @error('indigene_certificate') has-error @enderror">
									<label for="select2-demo-2" class="col-sm-4 control-label">Other File (optional)</label>
									<span>PDF Only</span>
									<div class="col-sm-6">
										<input type="file" name="other" class="form-control">

										@error('other')
											<div class="alert-danger">{{ $message }}</div>
										@enderror
									</div><!-- END column -->
								</div><!-- .form-group -->
								
								
								<button type="submit" class="btn btn-primary btn-md">Upload</button>
							</form>

						</div><!-- .widget-body -->
					</div><!-- .widget -->
				</div><!-- END column -->

			</div><!-- .row -->
		</section>

		<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile-img").change(function(){
        readURL(this);
    });
</script>



@endsection
