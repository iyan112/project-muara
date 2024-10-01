@extends('Admin.layouts.user_type.auth')

@section('content')
<div class="container">
    <h4>Edit Produk</h4>
    <form action="{{ route('products.update', $product->id_barang) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $product->nama_barang }}" required>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Kategori</label>
            <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="{{ $product->nama_kategori }}" required>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control" id="stok" name="stok" value="{{ $product->stok }}" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga_barang" name="harga_barang" value="{{ $product->harga_barang }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required>{{ $product->deskripsi }}</textarea>
        </div>
        <button type="submit" class="btn bg-gradient-primary">Update</button>
    </form>
</div>
@endsection
