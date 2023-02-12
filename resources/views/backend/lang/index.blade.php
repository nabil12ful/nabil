<x-backend title="All Programming Languages">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        <a href="{{ route('admin_programming_create') }}" class="btn btn-primary">Add New Programming Language</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Visible</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $val)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $val->name }}</td>
                                    <td>{{ $val->value }}</td>
                                    <td>
                                        @if ($val->status == 1)
                                            <span class="text-success">Yes</span>
                                        @else
                                            <span class="text-danger">No</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin_programming_edit', encrypt($val->id)) }}"
                                            class="btn btn-success">
                                            <span class="mdi mdi-square-edit-outline"></span>
                                        </a>

                                        <!-- Static Backdrop modal Button -->
                                        <button type="button" class="btn btn-danger waves-effect waves-light"
                                            data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $val->id }}">
                                            <span class="mdi mdi-trash-can-outline"></span>
                                        </button>


                                        <!-- Static Backdrop Modal -->
                                        <div class="modal fade" id="staticBackdrop{{ $val->id }}" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1" role="dialog"
                                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">{{ $val->name }}
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Are you sure for delete {{ $val->name }}?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <a href="{{ route('admin_programming_delete', encrypt($val->id)) }}"
                                                            class="btn btn-danger">Yes Sure</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end cardaa -->
        </div> <!-- end col -->
    </div> <!-- end row -->
</x-backend>
