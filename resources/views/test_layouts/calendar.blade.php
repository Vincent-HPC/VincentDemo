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
			<?php for($i = 0; $i < 28; $i++): ?>
			<div class="date-block">
				<div class="date">
					1
				</div>
				<div class="events">

				</div>
			</div>
			<?php endfor ?>
		</div>
	</div>

@endsection
