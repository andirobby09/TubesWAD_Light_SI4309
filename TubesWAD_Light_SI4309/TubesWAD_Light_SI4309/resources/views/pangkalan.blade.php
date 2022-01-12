@extends('layouts.main')

@section('Konten')
<h3 class="text-center mt-3">Data Pangkalan</h3>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
</div>

<div class="col profile text-center">
    <div class="lingkaran">
        <img src="foto/profile.jpg" width= "350px" class="">
    </div>
</div>

<div class="container">
    <table>
        <tbody>
            <div class="mb-3 mt-3">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="Robby" readonly>
            </div>

            <div class="mb-3 mt-3">
                <label for="nomor">No Handphone</label>
                <input type="text" class="form-control" id="nomor" name="nomor" value="081222333444" readonly>
            </div>

            <div class="mb-3 mt-3">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="Jl. Mangga" readonly>
            </div>
        </tbody>
    </table>
</div>

@endsection