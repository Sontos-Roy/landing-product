<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered"  role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modalTitleId">Edit Blog Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('admin.blog_categories.update', $item->id)}}" method="post" id="ajax_form">
            <div class="card p-3">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12 col-lg-12 col-xxl-12 my-2">
                              <label for="" class="form-label"> name</label>
                              <input type="text" class="form-control" name="name" placeholder=" name" value="{{ $item->name }}">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

