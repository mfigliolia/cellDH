@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> You are logged in!</div>
    
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
               {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
            
               <div class="card-body">
                    E-mail: {{ Auth::user()->email }}
                </div>

                <div class="card-body">
                    Domicilio: {{ Auth::user()->address }}
                </div>
    
                <div class="card-body">
                    <img src="{{ Auth::user()->avatar }}" alt="" style="border-radius:50%; width:200px">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
