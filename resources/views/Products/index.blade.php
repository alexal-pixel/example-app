@extends('header')

@section('contents')

<div class="row m-5">
    <div class="md-col-5">
        <div class="card">
            <div class="card-body">
                <div class="card-tittle fs-3 mb-3">
                    list Data Barang
                </div>
                    <form action="/products/create" method="GET">
                        <input type="submit" value="create">
                    </form>
                    <table class="table table-hover mt-5">
                        <tr>
                            <td>NO</td>
                            <td>ID</td>
                            <td>Nama Product</td>
                            <td>Jenis Product</td>
                            <td>Harga Product</td>
                            <td>Stok Product</td>
                            <td colspan="2">Action</td>
                        </tr>

                        @foreach ($products as $product)
                        <td>1</td>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->nama_product }}</td>
                        <td>{{ $product->jenis_product }}</td>
                        <td>{{ $product->harga }}</td>
                        <td>{{ $product->stok }}</td>
                        <td>
                            <form action="/products/{{ $product->id }}/edit" method="GET">
                                <input type="submit" value="Edit produk">
                            </form>
                        </td>
                        <td>
                            <form action="/products/{{ $product->id }}/delete" method="POST">
                                @method('DELETE')
                                @csrf
                                <input type="submit" value="Hapus produk">
                            </form>
                        </td>
                        @endforeach

                    </table>

                </fieldset>
            </div>
        </div>
    </div>
</div>
@endsection
