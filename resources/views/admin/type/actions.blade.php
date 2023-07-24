<div class="d-flex">
    <a href="{{ route('kategori.show', $type->id) }}" class="btn btn-outline-dark btn-sm me-2"><i
            class="bi-person-lines-fill"></i></a>
    <a href="{{ route('kategori.edit', $type->id) }}" class="btn btn-outline-dark btn-sm me-2"><i
            class="bi-pencil-square"></i></a>

    <div>
        <form action="{{ route('kategori.destroy', $type->id) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-dark btn-sm me-2 btn-delete" data-name="#">
                <i class="bi-trash"></i>
            </button>
        </form>
    </div>
</div>
