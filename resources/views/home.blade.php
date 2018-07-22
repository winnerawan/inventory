@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ Auth::user()->role->id }}
                    {{--@if(Auth::user()->role->id == 1)--}}
                            {{--You are logged in! as {{ Auth::user()->role->name }}--}}
                    {{--@elseif (Auth::user()->role->id == 2)--}}
                            {{--You are logged in! as {{ Auth::user()->program->name }}--}}
                    {{--@endif--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
