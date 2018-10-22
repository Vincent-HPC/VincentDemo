@extends('test_layouts.main_layout')

@section('content')
	<div id="calendar">
		<div id="cal_header">
			date,date
		</div>

		<div id="days" class="clearfix">
			<div class="day">Sun</div>
			<div class="day">MON</div>
			<div class="day">TUE</div>
			<div class="day">WED</div>
			<div class="day">THU</div>
			<div class="day">FRI</div>
			<div class="day">SAT</div>
		</div>

		<div id="dates" class="clearfix">
			@for($i = 1; $i <= 28; $i++)
				<div class="date-block">
					<div class="date">
							{{ $i }}
					</div>
					<div class="events">

					</div>
				</div>
			@endfor
		</div>

	</div>


	<div id="info-panel" class="new">
		<div class="close">x</div>

		<form>
			<div class="title">
				<label>event</label><br>
				<input type="text" name="title" >
			</div>
			<div class="error-msg">
				<div class="alert alert-danger">
					error
				</div>
			</div>
			<div class="time-picker">
				<div class="selected-date">
					<span>month</span><span>date</span>

				</div>
				<div class="from">
						<label for="from">from</label>
						<input id="from" type="time" name="start_time">
				</div>
				<div class="to">
						<label for="to">to</label>
						<input id="to" type="time" name="end_time">
				</div>
			</div>
			<div class="description">
				<label>description</label><br>
				<textarea name="description" id="description" ></textarea>
			</div>
		</form>

		<div class="buttons clearfix">
			<button class="create">create</button>
			<button class="update">update</button>
			<button class="cancel">cancel</button>
			<button class="delete">delete</button>
		</div>

	</div>

	
@endsection
