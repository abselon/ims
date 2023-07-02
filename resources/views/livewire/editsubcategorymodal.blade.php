<div>

    <!-- Modal -->
    <div wire.ignore.self class="modal fade" id="editsubcategoryModal" tabindex="-1" aria-labelledby="editsubcategoryModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Sub-Category</h1>
            <button wire:click = "closeModal" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form wire:submit.prevent="editSubcategory">
          <div class="modal-body">
            <div class="mb-3">
                <label for="">Name</label>
                <input type="text" wire:model.defer="name" class="form-control">
                @error('name')
                  <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                 @enderror
            </div>
            <div class="mb-3">
                <label for="">Description</label>
                <input type="text" wire:model.defer = "description" class="form-control">
                @error('description')
                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="">Category</label>
                <select wire:model.defer="categories_id" class="form-control">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                @enderror
            </div>
            
          </div>
          <div class="modal-footer">
            <button wire:click = "closeModal" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button wire:click = "updateSubcategory" type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
        </div>
      </div>
    </div>

  </div>