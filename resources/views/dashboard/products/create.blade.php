@extends("dashboard.layouts.app")

@section("body")
<div class="card">
    <div class="card-body">
        <form action="{{ route("product.store") }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <div class="form-label">Upload Main Image</div>
                <input type="file" name="main_image" class="form-control">
            </div>

            <div class="mb-3">
                <div class="form-label">Upload product images</div>
                <input type="file" name="images" class="form-control" multiple>
            </div>

            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter Your Title Product">
            </div>

            <div class="mb-3">
                <label class="form-label">Content</label>
                <textarea class="form-control" name="content" rows="6" placeholder="Enter Your Content.."></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="number" class="form-control" name="price" placeholder="Enter Your Price">
            </div>

            <div class="mb-3">
                <label class="form-label">Off</label>
                <input type="number" class="form-control" name="off" placeholder="Enter Your Off">
            </div>

            <div class="mb-3">
                <label class="form-label">Stock</label>
                <input type="number" class="form-control" name="stock" placeholder="Enter Your Stock">
            </div>

            <button type="submit" class="btn btn-success">Add Product</button>
        </form>
    </div>
</div>
@endsection