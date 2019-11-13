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

                    <b>FROM: {{ $from ?? "none" }}</b> <b>TO: {{ $to ?? "none" }}</b><br>
                    <br>

                    Choose Batchs:

                    <ul>
                    @foreach ($batchs as $user)
                        <li><a href="#">Id: {{ $user->id }},  user: {{ $user->name }}, mail: {{ $user->description }} </a></li>
                    @endforeach
                    </ul>

                    <input type="text" value="" placeholder="New Batch"> <input type="button" value="New Batch"/>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
