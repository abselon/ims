{{-- <div>
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title" style="float: left;">All Categories</h5>
                        <a href="/add-category" class="btn btn-sm btn-primary" style="float: right;">Add New Category</a>
                    </div>


                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Category ID</th>
                                    <th>Category Name</th>
                                    <th>Category Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>


                            <tbody>
                                @if ($categories->count() > 0)
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->description }}</td>
                                            <td>
                                                <a href="{{ url('/edit-category', ['id' => $category->id]) }}" class="btn btn-sm btn-secondary" style="padding: 1px 8px;">Edit</a>
                                            </td>
                                            
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5" style="text-align: center;">No Categories found!</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="container">
    <br>
    <br>
    <br>
    <div class="col-lg-8 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <a href="/add-category" class="btn btn-sm btn-primary" style="float: right;">Add New Category</a>
            <h5 class="card-title fw-semibold mb-4">Categories</h5>
            <div class="table-responsive">
              <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">ID</h6>
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
                @if ($categories->count() > 0)
                    @foreach ($categories as $category)
                    <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $category->id }}</h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">{{ $category->name }}</h6>                         
                        </td>
                        <td class="border-bottom-0">
                        <p class="mb-0 fw-normal">{{ $category->description }}</p>
                        </td>
                        <td class="border-bottom-0">
                        <div class="d-flex align-items-center gap-2">
                            <a href="{{ url('/edit-category', ['id' => $category->id]) }}" class="btn btn-sm btn-secondary" style="padding: 1px 8px;">Edit</a>
                            <a href="javascript:void(0)" wire:click.prevent = "deleteConfirmation({{ $category->id }})" class="btn btn-sm btn-danger" style="padding: 1px 8px;">Delete</a>
                        </div>
                    </tr>  
                    @endforeach
                @else
                    <tr>
                        <td colspan="5" style="text-align: center;">No Categories found!</td>
                    </tr> 
                @endif            
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</div>