{{-- modal --}}
<div class="modal" tabindex="-1" id="delete{{ $row->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Trip Selesai</h5>
                
            </div>
            <form action="{{ route('delete.trip.selesai', $row->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-body text-center">
                    <p><span style="color: red">Yakin mau hapus Open Trip Selesai </span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Hapus</button>
                </div>

            </form>
        </div>
    </div>
</div>
