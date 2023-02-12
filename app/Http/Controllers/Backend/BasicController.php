<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Nabil\StoreDataRequests;

class BasicController extends Controller
{

    protected $folderBlade = 'backend.basic';

    protected $model = \App\Models\Basic::class;

    protected $uploadPath = 'upload/basic';

    protected $columns = [
        'name',
        'logo',
        'fav',
        'desc',
        'image',
        'keywords',
    ];

    protected $mediaColumns = [
        // columns name have a media files
        'logo',
        'fav',
        'image',
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
