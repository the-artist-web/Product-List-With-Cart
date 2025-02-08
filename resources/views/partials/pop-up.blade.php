<div class="modal fade" id="pop-up">
    <div class="modal-dialog modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm">
        <div class="modal-content bg-second-bg-color p-20 rounded-4">
            <p class="text-second-color mb-16">Do you really want to remove your? What you have done cannot be undone.</p>

            <div class="d-flex flex-nowrap align-items-center gap-2">
                <button type="button" class="btn btn-secondary py-8 label-small" data-bs-dismiss="modal">Close</button>

                <form action="{{ route("page.settings.destroy", ["id" => $user->id]) }}" method="POST">
                    @csrf
                    @method("DELETE")

                    <button type="submit" class="btn bg-error-color py-8 label-small">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>