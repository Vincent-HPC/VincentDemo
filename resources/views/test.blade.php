@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Test ~~~~</div>

                <div class="card-body">

									<ul>
											<li>1</li>
											<li>2</li>
											<li>3</li>
											@if(Auth::guard('admin')->check())
												<li class="text-success">
														You are Logged In As a <strong>Admin</strong>
												</li>
											@endif

											@if(Auth::guard('web')->check())
												<p class="text-success">
														You are Logged In As a <strong>User</strong>
												</p>
											@endif
											<li>4</li>
											<li>5</li>
									</ul>


										@if(Auth::guard('web')->check())
												<p class="text-success">
														You are Logged In As a <strong>User</strong>
												</p>
										@else
												<p class="text-danger">
														You are Logged Out As a <strong>User</strong>
												</p>
										@endif

										@if(Auth::guard('admin')->check())
												<p class="text-success">
														You are Logged In As a <strong>Admin</strong>
												</p>
										@else
												<p class="text-danger">
														You are Logged Out As a <strong>Admin</strong>
												</p>
										@endif 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
