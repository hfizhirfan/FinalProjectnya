
    <div>
        <form action="{{ route('transaksi.destroy', $order->id) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn bg-danger btn-sm me-2 btn-delete" data-name="#">
                <i class="bi-trash"></i>
            </button>
        </form>
    </div>

