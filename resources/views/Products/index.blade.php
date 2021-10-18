<fieldset>
    <legend>List Products</legend>
    <form action="/products/create" method="GET">
        <input type="submit" value="create">
    </form>
    <table border="1">
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
