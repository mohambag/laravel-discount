<?php

namespace Mbagri\Discount\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mbagri\Discount\Discount;

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
            'users'=>User::get(),
        ];

//             dd($result['products']);
        return view('discount.form', compact('result'));
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:250',
            'priceDiscount' => 'numeric|nullable|max:4294967295|min:0',
            'code' => 'required|max:250|unique:discount',
            'percentDiscount' => 'max:100|min:0|numeric|nullable',
            'minprice' => 'numeric|nullable|min:0|lt:maxprice|max:4294967295',
            'maxprice' => 'numeric|nullable|gt:minprice|max:4294967295',
            'countUse' => 'numeric|max:4294967295|required',
        ],[
            'name.required' => 'وارد کردن نام اجباری می باشد',
            'code.unique' => 'کد مورد نظر قبلا ثبت شده است',
            'countUse.required' => 'وارد کردن تعداد دفعات استفاده اجباری می باشد',
            'code.required' => 'وارد کردن کد اجباری می باشد',
            'name.max' => 'تعداد کاراکتر باید کمتر از 255 حرف باشد',
            'minprice.numeric' =>'فرمت ورودی عدد باید باشد',
            'maxprice.numeric' =>'فرمت ورودی عدد باید باشد',
            'countUse.numeric' =>'فرمت ورودی عدد باید باشد',
            'priceDiscount.required' => 'وارد کردن قیمت اجباری می باشد',
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $discount = new Discount();
        $discount->user_id = Auth::id();
        $discount->name = $request->name;
        $discount->code = $request->code;
        $discount->priceDiscount = $request->priceDiscount;
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
        $discount->users()->attach($request->User);


        $result = [
            'message' => 'تخفیف مورد نظر با موفقیت ایجاد شد',
            'class' => 'success',
            'users' => User::get(),
        ];

        return \redirect()->back()->with('success',$result['message']);
    }

    public function edit($id)
    {

        $result = [

            'data' => Discount::withoutTrashed()->where('id', '=', $id)->first(),
            'users'=>User::get(),
        ];


        return view('discount.form', compact('result'));
    }

    public function update(Request $request, Discount $discount)
    {

        $validator = Validator::make($request->all(),
            [
                'name' => 'required|max:250',
                'priceDiscount' => 'numeric|nullable|max:4294967295|min:0',
                'code' => 'required|max:250',
                'percentDiscount' => 'max:100|min:0|numeric|nullable',
                'minprice' => 'numeric|nullable|min:0|lt:maxprice|max:4294967295',
                'maxprice' => 'numeric|nullable|gt:minprice|max:4294967295',
                'countUse' => 'numeric|max:4294967295|required',
            ],[
            'name.required' => 'وارد کردن نام اجباری می باشد',
            'code.unique' => 'کد مورد نظر قبلا ثبت شده است',
            'countUse.required' => 'وارد کردن تعداد دفعات استفاده اجباری می باشد',
            'code.required' => 'وارد کردن کد اجباری می باشد',
            'name.max' => 'تعداد کاراکتر باید کمتر از 255 حرف باشد',
            'minprice.numeric' =>'فرمت ورودی عدد باید باشد',
            'maxprice.numeric' =>'فرمت ورودی عدد باید باشد',
            'countUse.numeric' =>'فرمت ورودی عدد باید باشد',
            'priceDiscount.required' => 'وارد کردن قیمت اجباری می باشد',
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $discount->update([
            'name' => $request->name,
            'countUse' => $request->countUse,
            'code' => $request->code,
            'priceDiscount' => $request->priceDiscount,
            'dataIn' => $request->dataIn,
            'dataOut' => $request->dataOut,
            'status' => $request->status,
            'minprice' => $request->minprice,
            'maxprice' => $request->maxprice,
            'percentDiscount' => $request->percentDiscount,
            'typeDiscount' => (empty($request->typeDiscount) ? 0 : 1),

        ]);

        $discount->users()->sync($request->User);


        return \redirect(route('discount'))->with('success','تخفیف مورد نظر با موفقیت بروز رسانی شد');
    }

    public function destroy(Discount $discount)
    {
        $discount->delete();
        $msg = 'تخفیف موردنظر با موفقیت حذف شد';
        return redirect(route('discount'))->with('success', $msg);
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
        return redirect(route('discount'))->with('success', $msg);
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
