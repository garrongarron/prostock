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

                    <b>FROM: <span text="from"></span></b> <b>TO: <span text="to"></span></b><br>
                    <br>

                    Choose Batchs:

                    <ul>
                    @foreach ($batchs as $user)
                        <li><a href="#" var="batch" k="{{ json_encode($user) }}">{{ $user->name }}</a></li>
                    @endforeach
                    </ul>

                    <input type="text" value="" placeholder="New Batch"> <input type="button" value="New Batch"/>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
