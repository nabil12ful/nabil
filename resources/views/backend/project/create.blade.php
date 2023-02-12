<x-backend title="Add Project">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        <a href="{{ route('admin_project_all') }}" class="btn btn-primary">Back</a>
                    </h4>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('admin_project_store') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <x-input name="image" type="file" label="Project Image" value="" />
                            </div>
                            <div class="col-md-6">
                                <x-input name="name" type="text" label="Project Name" value="" />
                            </div>
                            <div class="col-md-6">
                                <x-select name="service_id" value="" :data="$services" attr="name" label="Service" />
                            </div>
                            <div class="col-md-12">
                                <x-textarea name="description" label="Description" cols="10" rows="5"></x-textarea>
                            </div>
                            <div class="col-md-2">
                                <label for="">Visible?</label>
                                <input type="hidden" name="status" value="1"/>
                                <div class="square-switch">
                                    <input type="checkbox" id="square-switch3" switch="bool" checked />
                                    <label for="square-switch3" data-on-label="Yes"
                                        data-off-label="No"></label>
                                    @section('js')
                                    <script>
                                        $(document).ready(function(){
                                            $('#square-switch3').on('change', function(){
                                                if($(this).is(':checked'))
                                                {
                                                    $('input[name="status"]').val(1);
                                                }else{
                                                    $('input[name="status"]').val(2);
                                                }
                                            });
                                        });
                                    </script>
                                    @endsection
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <input type="submit" value="Add New" class="btn btn-primary">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->
</x-backend>
