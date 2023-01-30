<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyDddddRequest;
use App\Http\Requests\StoreDddddRequest;
use App\Http\Requests\UpdateDddddRequest;
use App\Models\Ddddd;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class DddddController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('ddddd_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ddddds = Ddddd::with(['media'])->get();

        return view('admin.ddddds.index', compact('ddddds'));
    }

    public function create()
    {
        abort_if(Gate::denies('ddddd_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ddddds.create');
    }

    public function store(StoreDddddRequest $request)
    {
        $ddddd = Ddddd::create($request->all());

        if ($request->input('preview_featured_image', false)) {
            $ddddd->addMedia(storage_path('tmp/uploads/' . basename($request->input('preview_featured_image'))))->toMediaCollection('preview_featured_image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $ddddd->id]);
        }

        return redirect()->route('admin.ddddds.index');
    }

    public function edit(Ddddd $ddddd)
    {
        abort_if(Gate::denies('ddddd_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ddddds.edit', compact('ddddd'));
    }

    public function update(UpdateDddddRequest $request, Ddddd $ddddd)
    {
        $ddddd->update($request->all());

        if ($request->input('preview_featured_image', false)) {
            if (!$ddddd->preview_featured_image || $request->input('preview_featured_image') !== $ddddd->preview_featured_image->file_name) {
                if ($ddddd->preview_featured_image) {
                    $ddddd->preview_featured_image->delete();
                }
                $ddddd->addMedia(storage_path('tmp/uploads/' . basename($request->input('preview_featured_image'))))->toMediaCollection('preview_featured_image');
            }
        } elseif ($ddddd->preview_featured_image) {
            $ddddd->preview_featured_image->delete();
        }

        return redirect()->route('admin.ddddds.index');
    }

    public function show(Ddddd $ddddd)
    {
        abort_if(Gate::denies('ddddd_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ddddds.show', compact('ddddd'));
    }

    public function destroy(Ddddd $ddddd)
    {
        abort_if(Gate::denies('ddddd_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ddddd->delete();

        return back();
    }

    public function massDestroy(MassDestroyDddddRequest $request)
    {
        Ddddd::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('ddddd_create') && Gate::denies('ddddd_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Ddddd();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
