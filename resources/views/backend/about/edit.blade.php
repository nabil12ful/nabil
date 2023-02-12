<x-backend title="Edit About Info">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-4">
                    <form action="{{ route('admin_about_update') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <img src="{{ asset('upload/about/'.$data->image1) }}" height="80"  alt="">
                                <x-input name="image1" type="file" label="Image 1" value="" />
                            </div>
                            <div class="col-12">
                                <img src="{{ asset('upload/about/'.$data->image2) }}" height="80"  alt="">
                                <x-input name="image2" type="file" label="Image 2" value="" />
                            </div>
                            <div class="col-md-6">
                                <x-input name="title" type="text" label="Title" :value="$data->title" />
                            </div>
                            <div class="col-md-6">
                                <x-input name="name" type="text" label="Full Name" :value="$data->name" />
                            </div>
                            <div class="col-md-6">
                                <x-input name="age" type="number" label="Age" :value="$data->age" />
                            </div>
                            <div class="col-md-6">
                                <x-input name="edu" type="text" label="Education" :value="$data->edu" />
                            </div>
                            <div class="col-md-6">
                                <x-input name="cv" type="text" label="CV URL" :value="$data->cv" />
                            </div>
                            <div class="col-md-3">
                                <label for="">Freelance Available?</label>
                                <input type="hidden" name="freelance" value="{{ $data->freelance }}"/>
                                <div class="square-switch">
                                    <input type="checkbox" id="square-switch3" switch="bool" {{ $data->freelance == 1 ? 'checked' : '' }} />
                                    <label for="square-switch3" data-on-label="Yes"
                                        data-off-label="No"></label>
                                        {{-- @section('js')
                                        <script>
                                            $(document).ready(function(){
                                                $('#square-switch3').on('change', function(){
                                                    if($(this).is(':checked'))
                                                    {
                                                        $('input[name="freelance"]').val(1);
                                                    }else{
                                                        $('input[name="freelance"]').val(2);
                                                    }
                                                });
                                            });
                                        </script>
                                        @endsection --}}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="">Hiring Available?</label>
                                <input type="hidden" name="hiring" value="{{ $data->hiring }}"/>
                                <div class="square-switch">
                                    <input type="checkbox" id="square-switch4" switch="bool" {{ $data->hiring == 1 ? 'checked' : '' }} />
                                    <label for="square-switch4" data-on-label="Yes"
                                        data-off-label="No"></label>
                                        @section('js')
                                        <script>
                                            $(document).ready(function(){
                                                $('#square-switch4').on('change', function(){
                                                    if($(this).is(':checked'))
                                                    {
                                                        $('input[name="hiring"]').val(1);
                                                    }else{
                                                        $('input[name="hiring"]').val(2);
                                                    }
                                                });
                                                $('#square-switch3').on('change', function(){
                                                    if($(this).is(':checked'))
                                                    {
                                                        $('input[name="freelance"]').val(1);
                                                    }else{
                                                        $('input[name="freelance"]').val(2);
                                                    }
                                                });
                                            });

                                        </script>
                                        @endsection
                                </div>
                            </div>
                            <div class="col-md-12">
                                <x-textarea name="desc" label="Site Description" cols="10" rows="5">{{$data->desc}}</x-textarea>
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
