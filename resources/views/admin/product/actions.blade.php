<div class="d-flex">
    <a href="{{route('product.show', ['product' => $product->id]) }}" class="btn btn-sm me-2 bg-info"><i class="bi-person-lines-fill"></i></a>
    <a href="{{route('product.edit', ['product' => $product->id]) }}" class="btn bg-warning btn-sm me-2"><i class="bi-pencil-square"></i></a>

    <div>
        <form action="{{ route('product.destroy', $product->id) }}" action="{{ route('product.destroy', $product->id) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn bg-danger btn-sm me-2 btn-delete" data-name="#">
                <i class="bi-trash"></i>
            </button>
        </form>
    </div>
</div>
