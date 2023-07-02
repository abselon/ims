<div>
    @include ('livewire.subcategorymodal')
    @include ('livewire.editsubcategorymodal')
    <div class="container">
        <br>
        <br>
        <br>
        <div class="col-lg-8 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                {{-- <a href="/add-category" class="btn btn-sm btn-primary" style="float: right;">Add New Category</a> --}}
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#subcategoryModal">
                    Add Sub-Category
                </button>
                <h5 class="card-title fw-semibold mb-4">Sub-Categories</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">ID</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Category</h6>
                          </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Name</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Description</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Actions</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    @if ($subcategories->count() > 0)
                        @foreach ($subcategories as $subcategory)
                        <tr>
                            <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $subcategory->id }}</h6></td>
                            <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $subcategory->category->name }}</h6></td>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-1">{{ $subcategory->name }}</h6>                         
                            </td>
                            <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">{{ $subcategory->description }}</p>
                            </td>
                            <td class="border-bottom-0">
                            <div class="d-flex align-items-center gap-2">
                                {{-- <a href="{{ url('/edit-category', ['id' => $category->id]) }}" class="btn btn-sm btn-secondary" style="padding: 1px 8px;">Edit</a> --}}
                                <button type="button" wire:click="editSubcategory({{$subcategory->id}})" class="btn btn-info btn-sm float-end" data-bs-target="#editsubcategoryModal">
                                  Edit
                              </button>
                                <a href="javascript:void(0)" wire:click.prevent = "deleteConfirmation({{ $subcategory->id }})" class="btn btn-sm btn-danger" style="padding: 1px 8px;">Delete</a>
                            </div>
                        </tr>  
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5" style="text-align: center;">No Sub-Categories found!</td>
                        </tr> 
                    @endif            
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
    </div>