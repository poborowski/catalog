<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAddShopsasdRequest;
use App\Http\Requests\StoreAddShopsasdRequest;
use App\Http\Requests\UpdateAddShopsasdRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AddShopsasdController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('add_shopsasd_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.addShopsasds.index');
    }

    public function create()
    {
        abort_if(Gate::denies('add_shopsasd_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.addShopsasds.create');
    }

    public function store(StoreAddShopsasdRequest $request)
    {
        $addShopsasd = AddShopsasd::create($request->all());

        return redirect()->route('admin.add-shopsasds.index');
    }

    public function edit(AddShopsasd $addShopsasd)
    {
        abort_if(Gate::denies('add_shopsasd_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.addShopsasds.edit', compact('addShopsasd'));
    }

    public function update(UpdateAddShopsasdRequest $request, AddShopsasd $addShopsasd)
    {
        $addShopsasd->update($request->all());

        return redirect()->route('admin.add-shopsasds.index');
    }

    public function show(AddShopsasd $addShopsasd)
    {
        abort_if(Gate::denies('add_shopsasd_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.addShopsasds.show', compact('addShopsasd'));
    }

    public function destroy(AddShopsasd $addShopsasd)
    {
        abort_if(Gate::denies('add_shopsasd_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $addShopsasd->delete();

        return back();
    }

    public function massDestroy(MassDestroyAddShopsasdRequest $request)
    {
        AddShopsasd::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
