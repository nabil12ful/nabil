<x-backend title="Edit Basic Info">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-4">
                    <form action="{{ route('admin_basic_update') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <img src="{{ asset('upload/basic/'.$data->image) }}" height="80"  alt="">
                                <x-input name="image" type="file" label="Header Image" value="" />
                            </div>
                            <div class="col-12">
                                <img src="{{ asset('upload/basic/'.$data->logo) }}" height="80"  alt="">
                                <x-input name="logo" type="file" label="Site Logo" value="" />
                            </div>
                            <div class="col-12">
                                <img src="{{ asset('upload/basic/'.$data->fav) }}" height="80"  alt="">
                                <x-input name="fav" type="file" label="Site Favico" value="" />
                            </div>
                            <div class="col-md-6">
                                <x-input name="name" type="text" label="Site Name" :value="$data->name" />
                            </div>
                            <div class="col-md-6">
                                <x-input name="keywords" type="text" label="SEO Keywords" :value="$data->keywords" />
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
