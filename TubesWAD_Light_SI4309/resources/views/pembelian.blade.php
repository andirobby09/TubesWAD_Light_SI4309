@extends('layouts.main')
@section('Konten')

<h3 class="text-center mt-3">Data Pembelian</h3>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <form class="ms-4" action="" method="POST">
                @csrf

                {{-- Nama --}}
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nama" name='nama' autofocus>
                    </div>
                </div>

                {{-- Jenis Customer --}}
                <div class="mb-3 row">
                    <label for="jenisCs" class="col-sm-3 col-form-label">Jenis Customer</label>
                    <div class="col mt-2">
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="jenisCs" id="jenisCs1">
                            <label class="form-check-label" for="jenisCs1">
                                UMKM
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="jenisCs" id="jenisCs1">
                            <label class="form-check-label" for="jenisCs1">
                                Rumah Tangga
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="jenisCs" id="jenisCs1">
                            <label class="form-check-label" for="jenisCs1">
                                Warung
                            </label>
                        </div>
                    </div>
                </div>

                {{-- Jenis Gas --}}
                <div class="mb-3 row">
                    <label for="JenisGas" class="col-sm-3 col-form-label">Jenis LGP</label>
                    <div class="col mt-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="3kg" value="3 kg">
                            <label class="form-check-label" for="3kg">3 Kg</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="5,5kg" value="5,5 kg">
                            <label class="form-check-label" for="5,5kg">5,5 Kg</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="12kg" value="12 kg">
                            <label class="form-check-label" for="12kg">12 Kg</label>
                        </div>
                    </div>
                </div>

                {{-- Jumlah --}}
                <div class="mb-3 row">
                    <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jumlah" name=jumlah>
                    </div>
                </div>

                <div class="tombol d-grid">
                    <button type="submit" class="btn btn-primary fw-bold" style="
                        background: linear-gradient(
                            268.22deg,
                            #30c723 0%,
                            #7ffb8c 0.01%,
                            #10c800 100.66%
                        );
                        box-shadow: 0px 3px 5px #5bea5e;
                        border-radius: 10px;
                    
                    ">Submit</button>
                </div>
            </form>
        </div>
        <div class="col">
            <div class="logo">
                <img src="foto/gas3kg.png" width= "350px" class="m-5">
            </div>
            {{-- <p><img src="foto/logomelon-lpg.png" width="82px">MELON.LPG<p> --}}
        </div>
    </div>
</div>
@endsection