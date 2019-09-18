<div class="modal fade" id="addCate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  action="{{ route('categories.store') }}" method="post" class="needs-validation" novalidate>
          @csrf
          <div class="form-group">
            <label for="validationCate" class="col-form-label">Cate Name</label>
            <input type="text" name="name" class="form-control" 
               id="validationCate" required>
            <div class="invalid-feedback">
              Please choose a catename.
            </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('categories.update', $cate->id) }}" method="post" class="needs-validation" novalidate>
            @csrf
            <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="name" class="col-form-label">Cate Name</label>
            <input type="text" name="name" class="form-control" 
                   id="name" required>
            <div class="invalid-feedback">
                Please choose a catename.
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

