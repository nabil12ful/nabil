<x-backend title="Edit About Info">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-4">
                    <form action="{{ route('admin_WhoWork_update') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <img src="{{ asset('upload/whowork/'.$data->image) }}" height="80"  alt="">
                                <x-input name="image" type="file" label="Image" value="" />
                            </div>
                            <div class="col-md-6">
                                <x-input name="title" type="text" label="Title" :value="$data->title" />
                            </div>
                            <div class="col-md-12">
                                <x-textarea name="desc" label="Description" cols="10" rows="5">{{$data->desc}}</x-textarea>
                            </div>
                            <div class="col-md-6">
                                <x-input name="title1" type="text" label="Title 1" :value="$data->title1" />
                            </div>
                            <div class="col-md-6">
                                <x-input name="icon1" type="text" label="Icon 1" :value="$data->icon1" />
                            </div>
                            <div class="col-md-12">
                                <x-textarea name="desc1" label="Description 1" cols="10" rows="5">{{$data->desc1}}</x-textarea>
                            </div>
                            <div class="col-md-6">
                                <x-input name="title2" type="text" label="Title 2" :value="$data->title2" />
                            </div>
                            <div class="col-md-6">
                                <x-input name="icon2" type="text" label="Icon 2" :value="$data->icon2" />
                            </div>
                            <div class="col-md-12">
                                <x-textarea name="desc2" label="Description 2" cols="10" rows="5">{{$data->desc2}}</x-textarea>
                            </div>
                            <div class="col-md-6">
                                <x-input name="title3" type="text" label="Title 3" :value="$data->title3" />
                            </div>
                            <div class="col-md-6">
                                <x-input name="icon3" type="text" label="Icon 3" :value="$data->icon3" />
                            </div>
                            <div class="col-md-12">
                                <x-textarea name="desc3" label="Description 3" cols="10" rows="5">{{$data->desc3}}</x-textarea>
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
