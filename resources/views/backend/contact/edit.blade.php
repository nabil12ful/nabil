<x-backend title="Edit Contact Info">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-4">
                    <form action="{{ route('admin_contact_update') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <x-input name="phone" type="text" label="Phone Number" :value="$data->phone" />
                            </div>
                            <div class="col-md-6">
                                <x-input name="email" type="email" label="Email" :value="$data->email" />
                            </div>
                            <div class="col-md-6">
                                <x-input name="address" type="text" label="Address" :value="$data->address" />
                            </div>
                            <div class="col-md-6">
                                <x-input name="facebook" type="url" label="Facebook Account URL" :value="$data->facebook" />
                            </div>
                            <div class="col-md-6">
                                <x-input name="twitter" type="url" label="Twitter Account URL" :value="$data->twitter" />
                            </div>
                            <div class="col-md-6">
                                <x-input name="instagram" type="url" label="Instagram Account URL" :value="$data->instagram" />
                            </div>
                            <div class="col-md-6">
                                <x-input name="linkedin" type="url" label="Linkedin Account URL" :value="$data->linkedin" />
                            </div>
                            <div class="col-md-6">
                                <x-input name="youtube" type="url" label="Youtube Account URL" :value="$data->youtube" />
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
