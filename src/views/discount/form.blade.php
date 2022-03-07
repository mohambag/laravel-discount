
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" integrity="sha512-yVvxUQV0QESBt1SyZbNJMAwyKvFTLMyXSyBHDO4BG5t7k/Lw34tyqlSDlKIrIENIzCl+RVUNjmCPG+V/GMesRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{__DIR__.'bootstrap-tagsinput.css'}}" rel="stylesheet">
    <link rel="stylesheet"
          href="{{__DIR__.'jquery.Bootstrap-PersianDateTimePicker.css'}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="{{__DIR__.'bootstrap.min.js'}}" type="text/javascript"></script>
    <script src="{{__DIR__.'calendar.js'}}" type="text/javascript"></script>
    <script src="{{__DIR__.'jquery.Bootstrap-PersianDateTimePicker.js'}}"
            type="text/javascript"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js" integrity="sha512-rMGGF4wg1R73ehtnxXBt5mbUfN9JUJwbk21KMlnLZDJh7BkPmeovBuddZCENJddHYYMkCh9hPFnPmS9sspki8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>ایجاد تخفیف</title>
</head>
<body>
<div id="wrapper">
    <div id="page-wrapper" class="gray-bg dashbard-1">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>افزودن کد تخفیف</h5>
                </div>
                <div class="ibox-content">
                    @include('layouts.errors')

                    @if (isset($result['data']) && !empty($result['data']))
                        {!! Form::model($result['data'],['route'=>['dashboard.discount.update',$result['data']],'method'=>'post']) !!}
                    @else
                        {!! Form::open(['route'=>['dashboard.discount.store'],'method'=>'post']) !!}
                    @endif

                    <div class="form-group">
                        {!! Form::label("name",'نام') !!}
                        {!! Form::text("name",null,['class'=>'form-control','placeholder'=>'نام']) !!}
                        @if ($errors->has('name'))
                            <span class="error text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        {!! Form::label("code",'کد') !!}
                        {!! Form::text("code",null,['class'=>'form-control','placeholder'=>'کد']) !!}
                        @if ($errors->has('code'))
                            <span class="error text-danger">{{ $errors->first('code') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        {!! Form::label("countUse",'تعداد دفعات قابل استفاده') !!}
                        {!! Form::number("countUse",null,['class'=>'form-control','min'=>0,'placeholder'=>'تعداد دفعات قابل استفاده']) !!}
                        @if ($errors->has('countUse'))
                            <span class="error text-danger">{{ $errors->first('countUse') }}</span>
                        @endif
                    </div>

                    <div class="col-md-12" style="padding: 0">
                        {!! Form::label("users",'کاربر') !!}
                        <br>
                        <div id="text1"
                             style="">
                            <select style="width: 100%;" class="select2-canal form-control" aria-hidden="true"
                                    name="users[]" id="user_id" multiple="multiple">
                                @foreach($result['users'] as $user)
                                    <option
                                        value="{{ $user->id }}" {{ isset($result['data']) ? (in_array($user->id, $result['data']->users->pluck('id')->toArray())?'selected' : '') : '' }}>{{$user->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label("dataIn",'از تاریخ') !!}
                        {!! Form::text("dataIn",null,['class'=>'form-control','placeholder'=>'از تاریخ','id'=>'fromDate1','data-mddatetimepicker'=>true,'data-trigger'=>'click','data-targetselector'=>'#fromDate1','data-groupid'=>'group1','data-enabletimepicker'=>false,'data-placement'=>'bottom','readonly'=>true]) !!}
                        <div class="input-group-addon" data-mddatetimepicker="true"
                             data-trigger="click"
                             data-targetselector="#fromDate1" data-groupid="group1" data-todate="true"
                             data-enabletimepicker="true" data-placement="bottom">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </div>
                        @if ($errors->has('dataIn'))
                            <span class="error text-danger">{{ $errors->first('dataIn') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        {!! Form::label("dataOut",'تا تاریخه') !!}
                        {!! Form::text("dataOut",null,['class'=>'form-control','placeholder'=>'تا تاریخ','id'=>'toDate1','data-mddatetimepicker'=>true,'data-trigger'=>'click','data-targetselector'=>'#toDate1','data-groupid'=>'group1','data-todate'=>true,'data-enabletimepicker'=>true,'data-placement'=>'bottom','readonly'=>true]) !!}
                        <div class="input-group-addon" data-mddatetimepicker="true"
                             data-trigger="click"
                             data-targetselector="#toDate1" data-groupid="group1" data-todate="true"
                             data-enabletimepicker="true" data-placement="bottom">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </div>
                        @if ($errors->has('dataOut'))
                            <span class="error text-danger">{{ $errors->first('dataOut') }}</span>
                        @endif
                    </div>

                    <div class="form-group">

                        {!! Form::label("status",'نوع تخفیف') !!}

                        <br>
                        <input type="checkbox" id="myCheck" name="typeDiscount" value="1"
                               {{ isset($result['data'])  ? ($result['data']['typeDiscount']===1 ? 'checked' : ''): ''}} onclick="myFunction()">

                        <div id="percentt"
                             style="{{ isset($result['data']) ? ($result['data']['typeDiscount']==0?'display:none':'') : 'display:none' }}">
                            <div class="form-group" style="padding: 0 0 0 2px">
                                {!! Form::label("percentDiscount",'درصد تخفیف') !!}
                                {!! Form::number("percentDiscount",null,['class'=>'form-control','min'=>0,'max'=>100,'placeholder'=>'درصد تخفیف']) !!}
                                @if ($errors->has('percentDiscount'))
                                    <span class="error text-danger">{{ $errors->first('percentDiscount') }}</span>
                                @endif
                            </div>
                        </div>

                        <div id="priceType"
                             style="{{ isset($result['data']) ? ($result['data']['typeDiscount']==1?'display:none':'') : 'display:block' }}">
                            <div class="form-group">
                                {!! Form::label("priceDiscount",'قیمت تخفیف') !!}
                                {!! Form::number("priceDiscount",null,['class'=>'form-control','min'=>0,'placeholder'=>'قیمت تخفیف']) !!}
                                @if ($errors->has('priceDiscount'))
                                    <span class="error text-danger">{{ $errors->first('priceDiscount') }}</span>
                                @endif
                            </div>

                        </div>

                    </div>
                    <div class="form-group">
                        <div class="col-md-6" style="padding: 0 0 0 2px">
                            {!! Form::label("minprice",'حداقل مبلغ') !!}
                            {!! Form::number("minprice",null,['class'=>'form-control','min'=>0,'placeholder'=>'حداقل قیمت']) !!}
                            @if ($errors->has('minprice'))
                                <span class="error text-danger">{{ $errors->first('minprice') }}</span>
                            @endif
                        </div>

                        <div class="col-md-6" style="padding: 0 0 0 2px">
                            {!! Form::label("maxprice",'حداکثر مبلغ') !!}
                            {!! Form::number("maxprice",null,['class'=>'form-control','min'=>0,'placeholder'=>'حداکثر قیمت']) !!}
                            @if ($errors->has('maxprice'))
                                <span class="error text-danger">{{ $errors->first('maxprice') }}</span>
                            @endif
                        </div>
                    </div>

                    <hr>
                    <div class="form-group">
                        <div class="col-md-12">
                            <lable for="title">وضعیت</lable>
                            <br>
                            {!! Form::hidden("status",(isset($result['data']->status) && !empty($result['data']->status)?1:0),['class'=>'form-control','id'=>'statusid']) !!}
                            <a id="statusbtn">
                                <i class="fa {{ (isset($result['data']->status) && !empty($result['data']->status)?'fa-toggle-on':'fa-toggle-off') }}  fa-3x"></i>
                            </a>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::submit('ارسال',['class'=>'btn btn-primary block full-width m-b']) !!}
                        <a href="{{ route('dashboard.discount') }}" rel="nofollow"
                           class="btn btn-info block full-width m-b">برگشت</a>
                    </div>
                    {!! Form::close(); !!}

                </div>
            </div>
        </div>
    </div>
</div>
       </div>
</div>


<script>

    $(".chosen-select").chosen();

    function myFunction1() {
        // Get the checkbox
        var checkBox = document.getElementById("myCheck1");
        // Get the output text
        var text = document.getElementById("text1");

        // If the checkbox is checked, display the output text
        if (checkBox.checked == true) {
            text.style.display = "block";
        } else {
            text.style.display = "none";
        }
    }

    function myFunction2() {
        // Get the checkbox
        var checkBox = document.getElementById("myCheck2");
        // Get the output text
        var text = document.getElementById("text2");

        // If the checkbox is checked, display the output text
        if (checkBox.checked == true) {
            text.style.display = "block";
        } else {
            text.style.display = "none";
        }
    }
</script>



<script>
    $('#statusbtn').click(function () {
        if ($('#statusid').val() == 1) {
            $('#statusbtn > i').attr('class', 'fa fa-toggle-off fa-3x');
            $('#statusid').val(0);
        } else if ($('#statusid').val() == 0) {
            $('#statusbtn > i').attr('class', 'fa fa-toggle-on fa-3x');
            $('#statusid').val(1);
        }
    })
</script>

<script>
    function myFunction() {
        // Get the checkbox
        var checkBox = document.getElementById("myCheck");
        // Get the output text
        var percentt = document.getElementById("percentt");
        var priceType = document.getElementById("priceType");

        // If the checkbox is checked, display the output percentt
        if (checkBox.checked == true) {
            percentt.style.display = "block";
            priceType.style.display = "none";
        } else {
            percentt.style.display = "none";
            priceType.style.display = "block";
        }
    }
</script>


</body>
</html>


