<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Nabil\StoreDataRequests;

class MyWorldController extends Controller
{

    protected $folderBlade = 'backend.myworld';

    protected $model = \App\Models\MyWorld::class;

    protected $uploadPath = 'upload/';

    protected $columns = [
        'title',
        'title1',
        'title2',
        'title3',
        'desc',
        'desc1',
        'desc2',
        'desc3',
        'icon1',
        'icon2',
        'icon3',
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
        StoreDataRequests::make($request, $this->columns)->model($this->model)
                    ->updateHasFile($this->model::first()->id, $this->uploadPath);
        toastr()->success('تم التعديل بنجاح', 'عملية ناجحة');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        StoreDataRequests::deleteHasFiles(decrypt($id), $this->uploadPath, $this->mediaColumns, $this->model);
        toastr()->error('تم الحذف بنجاح', 'عملية ناجحة');
        return redirect()->back();
    }
}
