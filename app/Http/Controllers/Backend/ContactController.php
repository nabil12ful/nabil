<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Nabil\StoreDataRequests;

class ContactController extends Controller
{

    protected $folderBlade = 'backend.contact';

    protected $model = \App\Models\Contact::class;

    protected $uploadPath = 'upload/';

    protected $columns = [
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
        'youtube',
        'address',
        'phone',
        'email',
    ];

    protected $mediaColumns = [
        // columns name have a media files
    ];


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $data = [
            'data' => $this->model::first(),
        ];
        return view($this->folderBlade . '.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $this->model::first()->id;
        StoreDataRequests::make($request, $this->columns)->model($this->model)
                    ->updateHasFile($id, $this->uploadPath);
        toastr()->success('تم التعديل بنجاح', 'عملية ناجحة');
        return redirect()->back();
    }
}
