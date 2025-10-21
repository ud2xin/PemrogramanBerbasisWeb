<!DOCTYPE html>
<html>
<head>
    <title>Create New Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">

<div class="container">
    <h1 class="mb-4">Create New Product</h1>

    {{-- Validasi Error --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Product Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter product name" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Unit</label>
            <input type="text" name="unit" class="form-control" placeholder="e.g. pcs, box, kg" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Quantity</label>
            <input type="number" name="qty" class="form-control" min="0" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Producer</label>
            <input type="text" name="producer" class="form-control" placeholder="Enter producer name" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number" name="price" class="form-control" placeholder="Enter product price" required>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>

</body>
</html>
