@extends('master.admin', ['title'=>'Dashboard'])

@section('content-header')
<h1 class="class">Dashboard</h1>
@endsection

@section('content')
        <div class="row align-items-center justify-content-center" style="height: 60vh">
            <div class="col-6 ">
                <div class="card">
                    <div class="card-header text-center">Selamat Datang di Aplikasi Data Penduduk</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                Detail Login
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">Nama:</div>
                            <div class="col-7">{{ Auth::user()->nama }}</div>
                        </div>
                        <div class="row">
                            <div class="col-4">Username:</div>
                            <div class="col-7">{{ Auth::user()->username }}</div>
                        </div>
                        <div class="row">
                            <div class="col-4">Email:</div>
                            <div class="col-7">{{ Auth::user()->email }}</div>
                        </div>
                        <div class="row">
                            <div class="col-4">Role:</div>
                            <div class="col-7">{{ Auth::user()->role }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
