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
                    <b>BATCH: {{ $frbatch ?? "none" }}</b><br>
                    <br>

                    Choose Items:<br>

                    <input type="text" value="" placeholder="Item Code"> <input type="button" value="Scan"/><br>
                    <br>
                    <input type="button" value="Save"/>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
