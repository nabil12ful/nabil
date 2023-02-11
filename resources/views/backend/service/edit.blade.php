<x-backend title="Edit Service">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        <a href="{{ route('admin_service_all') }}" class="btn btn-primary">Back</a>
                    </h4>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('admin_service_update', encrypt($data->id)) }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <x-input name="name" type="text" label="Service Name" :value="$data->name"></x-input>
                            </div>
                            <div class="col-md-6">
                                <x-input name="icon" type="text" label="Service Icon" :value="$data->icon"></x-input>
                            </div>
                            <div class="col-md-8">
                                <x-textarea name="description" label="Description" cols="10" rows="5" >{{ $data->description }}</x-textarea>
                            </div>
                            <div class="col-md-2">
                                <label for="">Visible?</label>
                                <input type="hidden" name="status" value="{{ $data->status }}"/>
                                <div class="square-switch">
                                    <input type="checkbox" id="square-switch3" switch="bool" {{ $data->status == 1 ? 'checked' : '' }} />
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
                                <input type="submit" value="Save it" class="btn btn-success">
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->
</x-backend>