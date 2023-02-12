<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Nabil\StoreDataRequests;

class WhoWorkController extends Controller
{

    protected $folderBlade = 'backend.whowork';

    protected $model = \App\Models\WhoWork::class;

    protected $uploadPath = 'upload/whowork';

    protected $columns = [
        'title',
        'desc',
        'image',
        'icon1',
        'icon2',
        'icon3',
        'title1',
        'title2',
        'title3',
        'desc1',
        'desc2',
        'desc3',
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
