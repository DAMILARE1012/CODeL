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
                            <h4 class="widget-title">UTME Results</h4>
                        </header><!-- .widget-header -->
                        <hr class="widget-separator">
                        <div class="widget-body row">
                            @if(session('info'))
                            <div class="alert alert-success">
                            {{ session('info') }}
                            </div>
                            @endif
                            @error('subjects')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
							@if (session('error'))
								<div class="alert alert-danger">{{ session('error') }}</div>
							@endif
							@if(!Session::has('selectedSubjects'))
                            <form action="{{ route('user.process.subjects') }}" method="POST" class="form-horizontal" style="margin-left:10px">
								
								@csrf
								<p class="text-info">
									<b>O'Level Number of Sitting Selection :</b> Please Select Number of Sittings
								</p>

								<div class="dropdown"class="btn btn-default dropdown-toggle" data-toggle="dropdown">

									<select name="sittings" class="standardSelect" required>
		                            <option value="" disabled selected hidden>Please select</option>
		                            <option value="1">One (1) Sitting</option>
		                            <option value="2">Two (2) Sittings</option>
		                        </select>
								</div>

								<p class="text-info" style="margin-top: 20px;">
									<b>O'Level Selection of Subjects and Grades:</b> Select best 7 subjects from eiher first and/or second sitting(s)
								</p>

								<div class="form-group">
									
									<div class="col-sm-8">
										@foreach($subjects as $subject)
										<div class="checkbox checkbox-default">

											<input type="checkbox" id="custome-checkbox1" value="{{ $subject->id}}" name="subjects[]"/>
											<label for="custome-checkbox1">{{ $subject->subject}}</label>
										</div>
										@endforeach
									</div><!-- END column -->
								</div><!-- .form-group -->
								
								
								<button type="submit" class="btn btn-primary btn-md" @if(Session::has('selectedSubjects')) disabled="" @endif>Confirm</button>

								
							</form>
							@else


							<div class="row">

								<div class="col-md-6">

	

									<h4>Selected Subjects</h4>
									<ul>
										@foreach(Session::get('selectedSubjects') as $subject)
										<li>{{ $subject->subject }}</li>

										@endforeach
									</ul>

								</div>
								<div class="col-md-6">
									<h4>Selected Number of Sittings</h4>
									<ul>
										@if(Session('selectedSittings') == 1)
								 		One (1) Sitting
								 		@elseif(Session('selectedSittings') == 2)
								 		Two (2) Sittings

										@endif
									</ul>
								</div>
							</div>
							<hr>
							@if(Session::has('selectedSubjects'))
								<a href="" class="btn btn-danger btn-md" onClick="window.location.reload();">Cancel selection</a>
							@endif
							
						@endif
                        </div>
                        <!-- .widget-body -->
                    </div><!-- .widget -->

                </div><!-- END column -->

   
            </div><!-- .row -->

        </section><!-- .app-content -->
        @if(Session::has('selectedSubjects'))
	@php
		$subjects = Session::get('selectedSubjects');
	@endphp

<div class="row">
  
    <div class="wrap">
		<section class="app-content">
			<div class="row">
				<div class="col-md-12">
					<div class="widget">
						<header class="widget-header">
							<h4 class="widget-title">Update Grades for selected subjects</h4>
						</header><!-- .widget-header -->
						<hr class="widget-separator">
						<div class="widget-body">
							
							 
							@if (session('error'))
								<div class="alert alert-danger">{{ session('error') }}</div>
							@endif
							<form action="{{ route('user.submit.results') }}" method="POST" class="form-inline">
								@csrf
								<h5>First Sitting Details</h5>
								<div class="form-group @error('exam_number') has-error @enderror">
									<label for="exampleInputName2">Examination</label>
									<select name="examination" class="form-control" required>
										<option value="" disabled selected hidden>Please select</option>
										<option value="waec">WAEC</option>
										<option value="neco">NECO</option>
										<option value="nabteb">NABTEB</option>
									</select>
								</div>

								<div class="form-group @error('exam_number') has-error @enderror">
									<label for="exampleInputName2">Examination Number</label>
									<input type="text" class="form-control" id="exampleInputName2" placeholder="Examination no here..." name="exam_number" required>
								</div>
								<br>
								<div class="form-group @error('exam_year') has-error @enderror" style="padding-top: 12px;">
									<label for="exampleInputName2">Examination Year</label>
									<input type="text" class="form-control" id="exampleInputName2" placeholder="NOV2018" name="exam_year" required>
								</div>
								<hr>
								@if(Session('selectedSittings') == 2)
								 
								<h5>Second Sitting Details</h5>
								
								<div class="form-group @error('exam_number') has-error @enderror">
									<label for="exampleInputName2">Examination</label>
									<select name="examination2" class="form-control">
										<option value="" disabled selected hidden>Please select</option>
										<option value="waec">WAEC</option>
										<option value="neco">NECO</option>
										<option value="nabteb">NABTEB</option>
									</select>
								</div>

								<div class="form-group @error('exam_number') has-error @enderror">
									<label for="exampleInputName2">Examination Number</label>
									<input type="text" class="form-control" id="exampleInputName2" placeholder="Examination no here..." name="exam_number2">
								</div>

								<div class="form-group @error('exam_year') has-error @enderror" style="padding-top: 12px;">
									<label for="exampleInputName2">Examination Year</label>
									<input type="text" class="form-control" id="exampleInputName2" placeholder="NOV2018" name="exam_year2">
								</div>
								<hr>
								@endif

								<table class="table">
									<thead>
										<th>Subjects</th>
										<th>Grades</th>
									</thead>
									<tbody>
										@php 
											$count = 0;
										@endphp
										@foreach($subjects as $subject)
										<input type="hidden" name="sSubjects[]" value="{{ $subject->id }}" class="form-control" readonly="" placeholder="">
											<tr>
												<td>
													<input type="text" name="subjects[]" value="{{ $subject->subject }}" class="form-control" readonly="" placeholder="">

												</td>
												<td>
														
													<select class="form-control" name="grades[]" required>
														<option value="" disabled selected hidden>Please select</option>
														<option value="A1">A1</option>
														<option value="B2">B2</option>
														<option value="B3">B3</option>
														<option value="C4">C4</option>
														<option value="C5">C5</option>
														<option value="C6">C6</option>
														<option value="D7">D7</option>
														<option value="E8">E8</option>
														<option value="F9">F9</option>
													</select>
													
												</td>
											</tr>
										@endforeach
									</tbody>
								</table>

								<input type="hidden" name="sittings" value="{{ Session('selectedSittings') }} ">
								
								
								<button type="submit" class="btn btn-primary btn-md" >Submit Results</button>
							</form>
						</div><!-- .widget-body -->
					</div><!-- .widget -->
				</div><!-- END column -->

			</div><!-- .row -->
		</section><!-- #dash-content -->
	</div><!-- .wrap -->

</div>
@else
@endif 
@endsection
	