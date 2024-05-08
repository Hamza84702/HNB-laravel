@extends('backend.layouts.main')
@section('content')
<!-- Button trigger modal -->
<div class="container mt-4 mb-4" style="background-color:#1e88e5">
    <div class="row pt-2 pb-2">
        <div class="col-md-2">
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#myaddModal">
                <i class="fas fa-plus"></i> Add Type
            </button>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <table id="yourDataTable" class="table">
                <thead>
                    <tr>
                        <th>Sr.</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vtypes as $key => $vtype)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $vtype->name }}</td>
                        <td>
                            <!-- Update button with data attributes -->
                            <a href="#" class="update-btn" 
                            data-toggle="modal" 
                            data-target="#myModal" 
                            data-id="{{ $vtype->id }}" 
                            data-name="{{ $vtype->name }}">
                                <i class="fas fa-edit text-primary"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="myaddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Input field inside the modal -->
                <form action="{{route('type.store')}}" method="POST">
                    @csrf <!-- Include CSRF token -->
                    <div class="form-group">
                        <label for="type">Name:</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Type Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Update form with dynamic data -->
                <form action="{{ route('type.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="update_id" id="update_id" value="">
                    <div class="form-group">
                        <label for="type">Name:</label>
                        <input type="text" name="name" class="form-control" id="type" value="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS, jQuery, and Font Awesome Icons -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>

<!-- Custom script to handle update button click -->
<script>
    $(document).on('click', '.update-btn', function() {
        var updateId = $(this).data('id');
        var updateName = $(this).data('name');

        // Set modal form values based on the clicked row's data
        $('#update_id').val(updateId);
        $('#type').val(updateName);
    });
</script>

@endsection
