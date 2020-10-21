@extends('layouts.app')

@section('content')

<section class="content col-md-12">

    @if ($errors->any())
        
        @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{ $error }}</p>
        @endforeach
           
    @endif

    <div class="card card-secondary card-outline">
        <div class="card-header">
            <h3 class="card-title">Form {{$title}} </h3>
        </div>
        <div class="card-body">
            <form action="{{ route('client.update', ['client_id' => $client->client_id]) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <p>NIK</p>
                            <input type="number" class="form-control" required name="nik" value="{{ $client->nik }}">
                        </div>
                        <div class="form-group">
                            <p>Nama</p>
                            <input type="text" class="form-control" required name="name" value="{{ $client->name }}" >
                        </div>
                        <div class="form-group">
                            <p>Tanggal Lahir</p>
                            <input type="text" class="form-control" required name="dob" value="{{ $client->dob }}" id="datepicker">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <p>Phone</p>
                            <input type="number" class="form-control" required name="phone" value="{{ $client->phone }}">
                        </div>
                        <div class="form-group">
                            <p>Jenis Kelamin</p>
                            <select name="gender" class="form-control">
                                <option value="Laki-laki" {{ ($client->gender == 'Laki-laki' ? "selected":"") }}>Laki-laki</option>
                                <option value="Perempuan" {{ ($client->gender == 'Perempuan' ? "selected":"") }}>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <p>Alamat</p>
                            <input type="text" class="form-control" name="address" value="{{ $client->address }}" >
                        </div>
                    </div>
                </div>
                <input type="submit">
            </form>
        </div>
    </div>
</section> 

@endsection