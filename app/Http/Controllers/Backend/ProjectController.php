<?php

namespace App\Http\Controllers\Backend;

use App\Models\Service;
use Illuminate\Http\Request;
use Nabil\StoreDataRequests;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{

    protected $folderBlade = 'backend.project';

    protected $model = \App\Models\Project::class;

    protected $uploadPath = 'upload/project/';

    protected $columns = [
        'name',
        'image',
        'description',
        'status',
        'service_id',
    ];

    protected $mediaColumns = [
        // columns name have a media files
        'image',
    ];


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'data' => $this->model::all(),
        ];
        return view($this->folderBlade . '.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'services' => Service::all(),
        ];
        return view($this->folderBlade . '.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        StoreDataRequests::make($request, $this->columns)->model($this->model)->storeHasFile($this->uploadPath);
        toastr()->success('تمت الأضافة بنجاح', 'عملية ناجحة');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'data' => $this->model::findorfail(decrypt($id)),
        ];
        return view($this->folderBlade . '.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'data' => $this->model::findorfail(decrypt($id)),
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
    public function update(Request $request, $id)
    {
        StoreDataRequests::make($request, $this->columns)->model($this->model)
                    ->updateHasFile(decrypt($id), $this->uploadPath);
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
