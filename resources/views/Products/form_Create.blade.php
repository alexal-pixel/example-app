@extends('header')

@section('contents')
<form action="" method="POST">
@csrf
<div class="row m-5">
    <div class="md-col-5">
        <div class="card">
            <div class="card-body">
                <div class="card-tittle fs-3 mb-3">
                    Input Data Barang
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="nama_product" id="floatingInput">
                    <label for="floatingInput">Nama Produk</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="jenis_product" id="floatingInput">
                    <label for="floatingInput">Jenis Produk</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="harga" id="floatingInput">
                    <label for="floatingInput">Harga Produk</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="stok" id="floatingInput">
                    <label for="floatingInput">Stok Produk</label>
                </div>

                  <button type="submit" class="btn btn-primary">Update Data</button>
            </div>
          </div>
    </div>
</div>
</form>
@endsection

