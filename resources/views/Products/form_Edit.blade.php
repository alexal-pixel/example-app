@extends('header')

@section('contents')
<form action="" method="POST">
    @method('PUT')
    @csrf
<div class="row m-5">
    <div class="md-col-5">
        <div class="card">
            <div class="card-body">
                <div class="card-tittle fs-3 mb-3">
                    Edit Data Barang
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="id" id="floatingInput" readonly value="{{ $product->id }}">
                    <label for="floatingInput">ID Produk</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="nama_product" id="floatingInput" value="{{ $product->nama_product }}">
                    <label for="floatingInput">Nama Produk</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="jenis_product" id="floatingInput" value="{{ $product->jenis_product }}">
                    <label for="floatingInput">Jenis Produk</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="harga" id="floatingInput" value="{{ $product->harga }}">
                    <label for="floatingInput">Harga Produk</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="stok" id="floatingInput" value="{{ $product->stok }}">
                    <label for="floatingInput">Stok Produk</label>
                </div>

                  <button type="submit" class="btn btn-primary">Update Data</button>
            </div>
          </div>
    </div>
</div>
</form>


@endsection

