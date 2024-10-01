<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangModel;
use Illuminate\Support\Facades\File;

class BarangController extends Controller
{
    // Menampilkan daftar produk (barang) di halaman index
    public function index()
    {
        // Ambil semua data barang dari database
        $product = BarangModel::all(); // Mengambil semua data dari model BarangModel

        // Kirim data ke view 'admin.laravel-examples.index'
        return view('admin.laravel-examples.kelola-produk', compact('product'));
    }

    // Menampilkan form create barang
    public function create()
    {
        return view('admin.laravel-examples.kelola-produk');  // Mengarahkan ke file create.blade.php
    }

    // Menyimpan barang baru ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'nama_kategori' => 'required|integer',
            'stok' => 'required|integer',
            'harga_barang' => 'required|integer',
            'deskripsi' => 'required|string',
        ]);

        // Simpan barang baru ke database
        BarangModel::create([
            'nama_barang' => $request->nama_barang,
            'nama_kategori' => $request->nama_kategori,
            'stok' => $request->stok,
            'harga_barang' => $request->harga_barang,
            'deskripsi' => $request->deskripsi,
        ]);

        // Redirect ke halaman daftar barang
        return redirect()->route('kelola-produk')->with('success', 'Barang berhasil ditambahkan.');
    }

    // Menampilkan form edit barang
    // Edit product
public function edit($id)
{
    $product = BarangModel::findOrFail($id);
    return view('admin.laravel-examples.edit', compact('product'));
}

// Update product
public function update(Request $request, $id)
{
    $barang = BarangModel::findOrFail($id);

    // Validasi input
    $request->validate([
        'nama_barang' => 'required|string|max:255',
        'nama_kategori' => 'required|string|max:255',
        'stok' => 'required|integer',
        'harga_barang' => 'required|integer',
        'deskripsi' => 'required|string',
    ]);

    // Update data barang tanpa mengganti gambar
    $barang->update($request->all());

    // Redirect with success message
    return redirect()->route('kelola-produk', $barang->id_barang)->with('success', 'Barang berhasil diupdate.');
}


    // Menghapus barang
    public function destroy($id)
    {
        $barang = BarangModel::findOrFail($id);
        $barang->delete();

        return redirect()->route('kelola-produk')->with('success', 'Barang berhasil dihapus.');
    }

}
