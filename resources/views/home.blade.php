@extends('layouts.app')

@section('content')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <section class="content">
        <div class="card card-secondary card-outline">
            <div class="card-header">
                <h3>RENTAL MOBIL</h3>
            </div>
            <div class="card-body">
                <div class="image" >
                    <img src="{{ asset('dist/img/mobil.jpg')}}" style="display: block; margin: auto;">
                </div>
                <div class="text">
                    <center><h4>Menyediakan berbagai macam brand mobil untuk direntalkan. Unit tergaja dan harga pasti terjangkau</h4></center>       
                </div>
            </div>
        </div>
    </section>                  
                  

        
         

@endsection
