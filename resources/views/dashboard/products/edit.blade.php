@extends("dashboard.layouts.app")

@section("body")
    <div class="card">
        <div class="card-body">
            <form action="{{ route("product.update", ["id" => $product->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method("PUT")

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
                    <input type="text" class="form-control" name="title" value="{{ $product->title }}" placeholder="Enter Your Title Product">
                </div>

                <div class="mb-3">
                    <label class="form-label">Content</label>
                    <textarea class="form-control" name="content" rows="6" placeholder="Enter Your Content..">{{ $product->content }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" class="form-control" name="price" value="{{ $product->price }}" placeholder="Enter Your Price">
                </div>

                <div class="mb-3">
                    <label class="form-label">Off</label>
                    <input type="number" class="form-control" name="off" value="{{ $product->off }}" placeholder="Enter Your Off">
                </div>

                <div class="mb-3">
                    <label class="form-label">Stock</label>
                    <input type="number" class="form-control" name="stock" value="{{ $product->stock }}" placeholder="Enter Your Stock">
                </div>

                <button type="submit" class="btn btn-info">Edit Product</button>
            </form>
        </div>
    </div>
@endsection