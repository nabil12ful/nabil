<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Nabil\StoreDataRequests;

class AboutController extends Controller
{

    protected $folderBlade = 'backend.about';

    protected $model = \App\Models\About::class;

    protected $uploadPath = 'upload/about';

    protected $columns = [
        'title',
        'desc',
        'name',
        'age',
        'cv',
        'hiring',
        'freelance',
        'edu',
        'image1',
        'image2',
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
        StoreDataRequests::make($request, $this->columns)->model($this->model)
                    ->updateHasFile($this->model::first()->id, $this->uploadPath);
        toastr()->success('تم التعديل بنجاح', 'عملية ناجحة');
        return redirect()->back();
    }
}
