<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyDRequest;
use App\Http\Requests\StoreDRequest;
use App\Http\Requests\UpdateDRequest;
use App\Models\D;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('d_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ds = D::all();

        return view('admin.ds.index', compact('ds'));
    }

    public function create()
    {
        abort_if(Gate::denies('d_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ds.create');
    }

    public function store(StoreDRequest $request)
    {
        $d = D::create($request->all());

        return redirect()->route('admin.ds.index');
    }

    public function edit(D $d)
    {
        abort_if(Gate::denies('d_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ds.edit', compact('d'));
    }

    public function update(UpdateDRequest $request, D $d)
    {
        $d->update($request->all());

        return redirect()->route('admin.ds.index');
    }

    public function show(D $d)
    {
        abort_if(Gate::denies('d_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ds.show', compact('d'));
    }

    public function destroy(D $d)
    {
        abort_if(Gate::denies('d_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $d->delete();

        return back();
    }

    public function massDestroy(MassDestroyDRequest $request)
    {
        D::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
