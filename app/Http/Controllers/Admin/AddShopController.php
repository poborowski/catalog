<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAddShopRequest;
use App\Http\Requests\StoreAddShopRequest;
use App\Http\Requests\UpdateAddShopRequest;
use App\Models\AddShop;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AddShopController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('add_shop_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $addShops = AddShop::all();

        return view('admin.addShops.index', compact('addShops'));
    }

    public function create()
    {
        abort_if(Gate::denies('add_shop_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.addShops.create');
    }

    public function store(StoreAddShopRequest $request)
    {
        $addShop = AddShop::create($request->all());

        return redirect()->route('admin.add-shops.index');
    }

    public function edit(AddShop $addShop)
    {
        abort_if(Gate::denies('add_shop_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.addShops.edit', compact('addShop'));
    }

    public function update(UpdateAddShopRequest $request, AddShop $addShop)
    {
        $addShop->update($request->all());

        return redirect()->route('admin.add-shops.index');
    }

    public function show(AddShop $addShop)
    {
        abort_if(Gate::denies('add_shop_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.addShops.show', compact('addShop'));
    }

    public function destroy(AddShop $addShop)
    {
        abort_if(Gate::denies('add_shop_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $addShop->delete();

        return back();
    }

    public function massDestroy(MassDestroyAddShopRequest $request)
    {
        AddShop::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
