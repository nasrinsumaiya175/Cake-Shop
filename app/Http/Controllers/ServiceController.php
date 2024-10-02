<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function service()
    {
        return view('front.pages.service');
    }


    public function add_cake()
    {
        return view('back.dashboard.admin.pages.ourCake.add-cake');
    }


    public function cakestore(Request $req)
    {
        if (!is_dir(public_path('Admin/img/service'))) {
            mkdir(public_path('Admin/img/service'), 0777, true);
        }

        $imagePath = null;

        if ($req->img) {
            $image = $req->img;
            $name = $image->getClientOriginalName();
            $imageName = time() . "_" . $name;
            $imagePath = 'Admin/img/service/' . $imageName;
            $image->move(public_path('Admin/img/service'), $imageName);
        }

        $data = [
            'img' => $imagePath,
            'price' => $req->price,
            'title' => $req->title,
            'subtitle' => $req->subtitle,
        ];

        Service::create($data);
        return redirect()->route('allCake');
    }


    public function show()
    {
        $products = Service::all();
        return view('back.dashboard.admin.pages.ourCake.all-cake', ['data' => $products]);
    }


    public function edit($id)
    {
        $cake = Service::find($id);

        return view('back.dashboard.admin.pages.ourCake.edit-cake', ['cake' => $cake]);
    }


    public function update(Request $request, $id)
    {
        $cake = Service::find($id);


        if (!$cake) {
            return redirect()->back()->with('error', 'Cake not found.');
        }

        if ($request->img) {
            if (!empty($cake->img) && file_exists(public_path($cake->img))) {
                unlink(public_path($cake->img));
            }

            $image = $request->img;
            $name = $image->getClientOriginalName();
            $imageName = time() . "_" . $name;
            $imagePath = 'Admin/img/service/' . $imageName;

            $image->move(public_path('Admin/img/service'), $imageName);

            $cake->img = $imagePath;
        }

        $cake->price = $request->price;
        $cake->title = $request->title;
        $cake->subtitle = $request->subtitle;

        $cake->save();

        return redirect()->route('allCake');
    }

    public function delete($id)
    {
        $cake = Service::find($id);

        if (!empty($cake->img) && file_exists(public_path($cake->img))) {
            unlink(public_path($cake->img));
        }
        $cake->delete();

        return redirect()->route('allCake');
    }
    public function showCakes()
    {
        $cakes = Service::all();
        return view('allCake', ['cakes' => $cakes]);
    }
}
