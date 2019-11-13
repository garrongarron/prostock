@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    @include('layouts.menu')
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Choose locations:

                    <p>From</p>
                    <ul>
                    @foreach ($locations as $user)
                        <li><a href="#" var="from" k="{{ json_encode($user) }}">{{ $user->name }}</a></li>
                    @endforeach
                    </ul>


                    <p>To</p>
                    <ul>
                    @foreach ($locations as $user)
                        <li><a href="#" var="to" k="{{ json_encode($user) }}">{{ $user->name }}</a></li>
                    @endforeach
                    </ul>

                    <input type="text" value="" placeholder="New Location"> <input type="button" value="New Location"/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
