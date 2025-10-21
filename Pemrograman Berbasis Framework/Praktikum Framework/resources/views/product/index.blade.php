<!DOCTYPE html>
<html>
<head>
    <title>Product Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">

<div class="container">
    <h1 class="mb-4">Product Dashboard</h1>

    {{-- Pesan sukses --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">+ Create New Product</a>

    <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark text-center">
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Unit</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Producer</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
                <tr>
                    <td class="text-center">{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->unit }}</td>
                    <td class="text-center">{{ $product->qty }}</td>
                    {{-- ✅ Format harga konsisten Rp 500.000,00 --}}
                    <td class="text-end">Rp {{ number_format($product->price, 2, ',', '.') }}</td>
                    <td>{{ $product->producer }}</td>
                    <td class="text-center">
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus produk ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">Belum ada data produk.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

</body>
</html>
