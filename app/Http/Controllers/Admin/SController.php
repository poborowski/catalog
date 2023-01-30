<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\;
use App\Http\Requests\StoreRequest;
use App\Http\Requests\UpdateRequest;
use App\Http\Requests\MassDestroyRequest;

class SController extends Controller  {





function index()
{
    abort_if(Gate::denies('_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');



$s = ::all();



    return view('admin.s.index', compact('s'));
}
function create()
{
    abort_if(Gate::denies('_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');





    return view('admin.s.create');
}
function store(StoreRequest $request)
{
    



$ = ::create($request->all());


return redirect()->route('admin.s.index');
    
}
function edit($)
{
    abort_if(Gate::denies('_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');





    return view('admin.s.edit', compact(''));
}
function update(UpdateRequest $request, $)
{
    



$->update($request->all());


return redirect()->route('admin.s.index');
    
}
function show($)
{
    abort_if(Gate::denies('_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');





    return view('admin.s.show', compact(''));
}
function destroy($)
{
    abort_if(Gate::denies('_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');




$->delete();
return back();
    
}
function massDestroy(MassDestroyRequest $request)
{
    



::whereIn('id', request('ids'))->delete();
return response(null, Response::HTTP_NO_CONTENT);
    
}

}