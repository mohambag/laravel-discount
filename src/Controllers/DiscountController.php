<?php

namespace Mbagri\Discount\Controllers;


use App\Http\Controllers\Controller;
use Mbagri\discount\Discount;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiscountController extends Controller
{


    public function index()
    {
        $queryDiscount = Discount::withoutTrashed();
        $discount = $queryDiscount->orderBy('id', 'DESC')->paginate(30);
      return view('discount.discount', compact('discount'));
    }

    public function create()
    {

        $result = [
            'User'=>User::withoutTrashed()->get(),
        ];

//             dd($result['products']);
        return view('discount.form', compact('result'));
    }

    public function store(Request $request)
    {

        $discount = new Discount();
        $discount->user_id = Auth::id();
        $discount->name = $request->name;
        $discount->code = $request->code;
        $discount->priceDiscount = $request->priceDiscount;
//        $discount->user = $request->user;
        $discount->groupUser = $request->groupUser;
        $discount->category = $request->category;
//        $discount->product = $request->product;
        $discount->minprice = $request->minprice;
        $discount->maxprice = $request->maxprice;
        $discount->countUse = $request->countUse;
        $discount->percentDiscount = $request->percentDiscount;

        if ($request->typeDiscount == 0) {
            $discount->typeDiscount = 0;
        } else {
            $discount->typeDiscount = 1;
        }


        $discount->dataIn = $request->dataIn;
        $discount->dataOut = $request->dataOut;
        $discount->status = $request->status;
        $discount->save();
        $discount->User()->attach($request->User);


        $result = [
            'message' => 'تخفیف مورد نظر با موفقیت ایجاد شد',
            'class' => 'success',
            'User' => User::withoutTrashed()->get(),
        ];

        return \redirect()->back()->with('success',$result['message']);
    }

    public function edit($id)
    {

        $result = [

            'data' => Discount::withoutTrashed()->where('id', '=', $id)->first(),
            'User'=>User::withoutTrashed()->get(),
        ];


        return view('discount.form', compact('result'));
    }

    public function update(Request $request,Discount $discount)
    {

        $discount->update([
            'name' => $request->name,
            'countUse' => $request->countUse,
            'code' => $request->code,
            'priceDiscount' => $request->priceDiscount,
            'groupUser' => $request->groupUser,
            'category' => $request->category,
            'dataIn' => $request->dataIn,
            'dataOut' => $request->dataOut,
            'status' => $request->status,
            'minprice' => $request->minprice,
            'maxprice' => $request->maxprice,
            'percentDiscount' => $request->percentDiscount,
            'typeDiscount' => (empty($request->typeDiscount) ? 0 : 1),

        ]);

        $discount->User()->sync($request->User);


        return \redirect(route('dashboard.discount'))->with('success','تخفیف مورد نظر با موفقیت بروز رسانی شد');
    }

    public function destroy(Discount $discount)
    {
        $discount->delete();
        $msg = 'تخفیف موردنظر با موفقیت حذف شد';
        return redirect(route('dashboard.discount'))->with('success', $msg);
    }

    public function destroyAll(Request $request)
    {
        $ids = $request->ids;
        foreach ($ids as $id) {
            $item = Discount::onlyTrashed()->where('id', '=', $id);
            $item->forceDelete();
        }
        return redirect()->back()->with('success', "آیتمهای مورد نظر بدرستی حذف گردید");
    }

    public function updatestatus($id)
    {
        $item = Discount::where('id', '=', $id)->first();

        if ($item->status == 0) {
            $item->status = 1;
        } else {
            $item->status = 0;
        }

        $item->save();
        $msg = 'تغییرات با موفقیت انجام شد';
        return redirect(route('dashboard.discount'))->with('success', $msg);
    }

    //    ***********************************************************

    public function delete($id)
    {
        $item = Discount::withoutTrashed()->where('id', '=', $id);
        if ($item->get()->isNotEmpty()) {
            $item->delete();
            $discount = Discount::withoutTrashed()->paginate(20);
            $msg = 'آیتم مورد نظر بدرستی حذف گردید';
            return view('discount.discount', compact('discount'))->with('success', $msg);
        } else {
            $msg = 'خطا!';
            $discount = Discount::withoutTrashed()->paginate(20);
            return view('discount.discount', compact('discount'))->with('warning', $msg);
        }


    }

    public function trashDelete($id)
    {
        $item = Discount::onlyTrashed()->where('id', '=', $id);
        if ($item->get()->isNotEmpty()) {
            $item->forceDelete();
            $discount = Discount::onlyTrashed()->paginate(20);
            $msg = 'آیتمهای مورد نظر بدرستی حذف گردید';
            return view('discount.trash', compact('discount'))->with('success', $msg);
        } else {
            $discount = Discount::onlyTrashed()->paginate(20);
            $msg = 'خطا!';
            return view('discount.trash', compact('discount'))->with('warning', $msg);
        }

    }

    public function recovery($id)
    {
        $item = Discount::onlyTrashed()->where('id', '=', $id);
        if ($item->get()->isNotEmpty()) {
            $item->update([
                'deleted_at' => null
            ]);

            $discount = Discount::onlyTrashed()->paginate(20);
            $msg = 'آیتمهای مورد نظر بدرستی بازیابی گردید';
            return view('discount.trash', compact('discount'))->with('success', $msg);

        } else {
            $discount = Discount::onlyTrashed()->paginate(20);
            $msg = 'خطا!';
            return view('discount.trash', compact('discount'))->with('warning', $msg);
        }

    }

    public function trashview()
    {
        $discount = Discount::onlyTrashed()->paginate(20);
        return view('discount.trash', compact('discount'));
    }


}
