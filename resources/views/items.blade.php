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
                    <b>BATCH: <span text="batch"></span></b><br>
                    <br>

                    Choose Items:<br>

                    <input type="text" value="" placeholder="Item Code" id="item-code"> <input type="button" value="Scan" onclick="getRandomCode()"/><br>
                    <br>
                    <input type="button" value="Save" onclick="save()"/>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
