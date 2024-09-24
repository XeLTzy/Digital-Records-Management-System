@extends('admin.layout.default')

@section('services-content')

        <p class="h3">List of Services</p>

        <div class="ms-1 services-toolbar">
            <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#AddServicesModal">
                <i class="fa-solid fa-stethoscope"></i> Add
                Services</button>
        </div>

        <table data-toggle="table" data-height="400" data-search="true" data-custom-sort="customSort"
            data-pagination="true" data-show-columns="true" data-pagination="true" data-buttons-align="right"
            data-toolbar=".services-toolbar" data-toolbar-align="right">
            <thead>
                <tr>
                    <th>Action</th>
                    <th data-sortable="true">Name</th>
                    <th data-sortable="true">Description</th>
                    <th data-sortable="true">Categories</th>
                    <th data-sortable="true">Types</th>
                    <th data-sortable="true">Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    @foreach ($service->servicescategories as $category)
                        @foreach ($category->servicestypes as $type)
                            @if ($type->servicesprices->isNotEmpty())
                                @foreach ($type->servicesprices as $price)
                                    <tr>
                                        <td><button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#EditServicesModal" data-id="{{ $service->id }}"
                                                data-name="{{ $service->name }}" data-description="{{ $service->description }}"
                                                data-category="{{ $category->category }}" data-type="{{ $type->type }}"
                                                data-price="{{ $price->price }}" data-bs-toggle="modal">Edit</button>

                                            <!-- <button type="button" class="btn btn-warning btn-sm">Delete</button> -->
                                            <!-- Delete Button with Form -->
                                            <form action="{{ route('services.destroy', $service->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-warning btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this service?');">Delete</button>
                                            </form>
                                        </td>
                                        <td>{{ $service->name }}</td>
                                        <td>{{ $service->description }}</td>
                                        <td>{{ $category->category }}</td>
                                        <td>{{ $type->type }}</td>
                                        <td>{{ $price->price }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td>{{ $service->name }}</td>
                                    <td>{{ $service->description }}</td>
                                    <td>{{ $category->category }}</td>
                                    <td>{{ $type->type }}</td>
                                    <td>No Price Available</td>
                                </tr>
                            @endif
                        @endforeach
                    @endforeach
                @endforeach
            </tbody>
        </table>

        <!-- Add Services Modal -->
        <div class="modal modal-dialog-scrollable-centered fade container" id="AddServicesModal"
            data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">New Services</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body container-fluid">
                        <div class="container">
                            <form id="addServicesForm" action="{{ route('services.create') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Service Name *</label>
                                            <input type="text" class="form-control custom-margin" id="service_name"
                                                name="name" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <input type="text" class="form-control custom-margin"
                                                id="category_description" name="description">
                                        </div>
                                        <div class="mb-3">
                                            <label for="category" class="form-label">Categories *</label>
                                            <select class="form-select" aria-label="Default select example"
                                                name="category" required>
                                                <option value="">Select a category</option>
                                                <option value="Oral Examination">Oral Examination</option>
                                                <option value="Restorative Dentistry">Restorative Dentistry</option>
                                                <option value="Endodontic Treatment">Endodontic Treatment</option>
                                                <option value="Cosmetic Dentistry">Cosmetic Dentistry</option>
                                                <option value="Oral Surgery">Oral Surgery</option>
                                                <option value="Prosthodontics">Prosthodontics</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="type" class="form-label">Type</label>
                                            <input type="text" class="form-control custom-margin" id="type" name="type">
                                        </div>
                                        <div class="mb-3">
                                            <label for="price" class="form-label">Price *</label>
                                            <input type="number" class="form-control custom-margin" id="price"
                                                name="price" step="0.01" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary"
                                            form="addServicesForm">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Services Modal -->
        <div class="modal modal-dialog-scrollable-centered fade container" id="EditServicesModal"
            data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Services</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body container-fluid">
                        <form id="EditForm" method="POST">
                            @csrf
                            @method('PUT') <!-- Make sure to use PUT for updating -->
                            <div class="mb-3">
                                <label for="service_name" class="form-label">Service Name *</label>
                                <input type="text" class="form-control" id="service_name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="category_description" class="form-label">Description</label>
                                <input type="text" class="form-control" id="category_description" name="description">
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label">Categories *</label>
                                <select class="form-select" name="category" required>
                                    <option value="">Select a category</option>
                                    <option value="Oral Examination">Oral Examination</option>
                                    <option value="Restorative Dentistry">Restorative Dentistry</option>
                                    <option value="Endodontic Treatment">Endodontic Treatment</option>
                                    <option value="Cosmetic Dentistry">Cosmetic Dentistry</option>
                                    <option value="Oral Surgery">Oral Surgery</option>
                                    <option value="Prosthodontics">Prosthodontics</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="type" class="form-label">Type</label>
                                <input type="text" class="form-control" id="type" name="type">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price *</label>
                                <input type="number" class="form-control" id="price" name="price" step="0.01" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <script>
        $(document).ready(function () {
            $('#EditServicesModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget); // Button that triggered the modal

                // Extract information from data-* attributes
                var id = button.data('id');
                var name = button.data('name');
                var description = button.data('description');
                var category = button.data('category');
                var type = button.data('type');
                var price = button.data('price');

                // Find the modal
                var modal = $(this);

                // Set the values of the form inputs in the modal
                modal.find('#service_name').val(name);
                modal.find('#category_description').val(description);
                modal.find('select[name="category"]').val(category);
                modal.find('#type').val(type);
                modal.find('#price').val(price);

                // Set the action URL for the form dynamically to the update route
                modal.find('#EditForm').attr('action', '/services/' + id);
            });
        });
    </script>
    
@endsection