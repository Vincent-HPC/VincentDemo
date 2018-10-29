@extends('test_layouts.main_layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Here should show $User_Name
                </div>

                <div class="card-body">
                    <div id="panel">
                        <h1>健身菜單：</h1>

                        <div id="todo-list">
                            <ul>
                                <li>
                                    <div class="checkbox"></div>
                                    <div class="content">Lorem, ipsum dolor.</div>
                                    <div class="actions">
                                        <div class="delete">x</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox"></div>
                                    <div class="content">Lorem, ipsum dolor.</div>
                                    <div class="actions">
                                        <div class="delete">x</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox"></div>
                                    <div class="content">Lorem, ipsum dolor.</div>
                                    <div class="actions">
                                        <div class="delete">x</div>
                                    </div>
                                </li>
                                <li class="new">
                                    <div class="checkbox"></div>
                                    <div class="content" contenteditable="true"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End of #panel div -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom_js')
<script src="{{ asset('js/workout_menu.js') }}"></script>
<script src="{{ asset('js/handlebars-v4.0.11.js') }}"></script>
@endsection
