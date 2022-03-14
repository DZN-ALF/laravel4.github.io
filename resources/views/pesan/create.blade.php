@extends('layouts.main')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2></h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('pesan.index') }}"> Kembali</a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card mt-6">
                <div class="card-body">
<div class="row justify-content-center">
    <div class="col-md-7">
        <main class="form-pesan">
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> Input gagal.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('pesan.store') }}" method="POST">
                @csrf
            <h1 class="d-block text-center h3 fw-normal">Pesan Tiket</h1>
        
            <div class="form-floating">
                <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="UserName" required>
                <label for="nama">Nama</label>
            </div>
            <div class="form-floating">
                <select type="text" name="tujuan" id="floatingInput" placeholder="tujuan" required class="form-select" aria-label="Tujuan">
                    <option selected>pilih tujuan</option>
                    <option value="MALANG">Malang</option>
                    <option value="JAKARTA">jakarta</option>
                    <option value="JOGJA">Jogja</option>
                  </select>
            </div>

            <div class="from-floating">
                <h3 class="d-block h3 fw-normal"> </h3>
            </div>

            <div class="form-floating">
                <select type="text" name="kelas" id="floatingInput" placeholder="kelas" required class="form-select" aria-label="CLASS">
                    <option selected>CLASS</option>
                    <option value="SUITE">SUITE</option>
                    <option value="DELUXE">DELUXE</option>
                    <option value="PREMIUM">PREMIUM</option>
                    <option value="EKONOMI">EKONOMI</option>
                  </select>
            </div>
            <div class="form-floating">
                <input type="Date" name="Pemberangkatan" class="form-control" id="floatingDate" placeholder="Date" required>
                <label for="pemberangkatan">Pergi</label>
            </div>
            <div class="form-floating">
                <input type="Date" name="pemulangan" class="form-control" id="floatingDate" placeholder="Date" required>
                <label for="pemulangan">Pulang</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit" >Pesan</button> 
            </form>
        </main>
    </div>