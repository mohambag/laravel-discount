
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
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
          integrity="sha512-xmGTNt20S0t62wHLmQec2DauG9T+owP9e6VU8GigI0anN7OXLip9i7IwEhelasml2osdxX71XcYm6BQunTQeQg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  <script src="{{__DIR__.'calendar.js'}}" type="text/javascript"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <title>ایجاد تخفیف</title>


    <style>
        [data-name="Md-DateTimePicker-PopoverContent"] {
            padding: 5px 6px;
        }

        [data-name="Md-DateTimePicker-PopoverContent"] a[data-name="go-today"] {
            color: #333;
            width: 100%;
            display: block;
            text-decoration: none;
        }

        [data-name="Md-DateTimePicker-Title"] {
            direction: rtl;
            text-align: center;
            font-family: Tahoma;
            font-size: 12px;
        }

        [data-name="Md-PersianDateTimePicker"] {
            min-width: 230px;
        }

        [data-name="Md-PersianDateTimePicker"] button {
            font-size: 12px;
        }

        [data-name="Md-PersianDateTimePicker"] table.table-striped {
            margin-bottom: 0;
            direction: rtl;
        }

        [data-name="Md-PersianDateTimePicker"] table.table td {
            text-align: center;
            padding: 2px;
            font-size: 12px;
        }

        [data-name="Md-PersianDateTimePicker"] table[data-name="Md-PersianDateTimePicker-TimePicker"].table,
        [data-name="Md-PersianDateTimePicker"] table[data-name="Md-PersianDateTimePicker-HeaderTable"].table {
            width: 100%;
            margin: 0 auto;
            direction: ltr;
        }

        [data-name="Md-PersianDateTimePicker"] table[data-name="Md-PersianDateTimePicker-TimePicker"].table td,
        [data-name="Md-PersianDateTimePicker"] table[data-name="Md-PersianDateTimePicker-HeaderTable"].table td {
            text-align: center;
            vertical-align: middle;
            border: 0;
        }

        [data-name="Md-PersianDateTimePicker-TitleMonth"],
        [data-name="Md-PersianDateTimePicker-TitleYear"] {
            width: 100%;
            padding-top: 0;
            padding-bottom: 0;
            border: none;
            font-weight: bold;
        }

        [aria-labelledby="dropdownMenuPersianMonths"] li > a,
        [aria-labelledby="dropdownMenuPersianYear"] li > a {
            margin: 0;
            padding: 0 10px 0 10px;
            text-align: center;
        }

        [aria-labelledby="dropdownMenuPersianMonths"] .divider {
            margin: 1px;
            padding: 0;
        }

        [data-name="Md-PersianDateTimePicker"] table.table tr[data-name="Md-PersianDateTimePicker-WeekDaysNames"] td {
            font-size: 13px;
        }

        [data-name="disabled-day"] {
            color: #ccc;
        }

        [data-name="day"], [data-name="today"] {
            cursor: pointer;
            padding: 2px;
        }

        [data-name="day"]:not([class^="text"]) {
            color: #333;
        }

        [data-name="day"]:hover {
            background: #eee;
        }

        [data-name="today"]:hover {
            background: #73acdc;
        }

        [data-name="Md-PersianDateTimePicker-TimePicker"] [data-name="Clock-Hour"],
        [data-name="Md-PersianDateTimePicker-TimePicker"] [data-name="Clock-Minute"],
        [data-name="Md-PersianDateTimePicker-TimePicker"] [data-name="Clock-Second"] {
            font-size: 12px;
            width: 50px;
            padding: 2px;
            direction: ltr;
            text-align: center;
            height: auto;
            display: inline-block;
        }

    </style>
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
                        {!! Form::model($result['data'],['route'=>['discount.update',$result['data']],'method'=>'post']) !!}
                    @else
                        {!! Form::open(['route'=>['discount.store'],'method'=>'post']) !!}
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
                            <select style="width: 100%;" class=" form-control" aria-hidden="true"
                                    name="users[]" id="user_id" >
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
                        <a href="{{ route('discount') }}" rel="nofollow"
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


<script>
    /*
Jalali (Shamsi) Calendar Date Picker Version 1.00 (JavaScript)
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
Written By : Amin Habibi Shahri
E-mail : habibiamin@gmail.com
Homepage: http://habibiamin.googlepages.com
*/

    /*  MOD  --  Modulus function which works for non-integers.  */

    function mod(a, b) {
        return a - (b * Math.floor(a / b));
    }

    function jwday(j) {
        return mod(Math.floor((j + 1.5)), 7);
    }

    var Weekdays = new Array("Sunday", "Monday", "Tuesday", "Wednesday",
        "Thursday", "Friday", "Saturday");

    //  LEAP_GREGORIAN  --  Is a given year in the Gregorian calendar a leap year ?

    function leap_gregorian(year) {
        return ((year % 4) == 0) &&
            (!(((year % 100) == 0) && ((year % 400) != 0)));
    }

    //  GREGORIAN_TO_JD  --  Determine Julian day number from Gregorian calendar date

    var GREGORIAN_EPOCH = 1721425.5;

    function gregorian_to_jd(year, month, day) {
        return (GREGORIAN_EPOCH - 1) +
            (365 * (year - 1)) +
            Math.floor((year - 1) / 4) +
            (-Math.floor((year - 1) / 100)) +
            Math.floor((year - 1) / 400) +
            Math.floor((((367 * month) - 362) / 12) +
                ((month <= 2) ? 0 :
                        (leap_gregorian(year) ? -1 : -2)
                ) +
                day);
    }

    //  JD_TO_GREGORIAN  --  Calculate Gregorian calendar date from Julian day

    function jd_to_gregorian(jd) {
        var wjd, depoch, quadricent, dqc, cent, dcent, quad, dquad,
            yindex, year, yearday, leapadj;

        wjd = Math.floor(jd - 0.5) + 0.5;
        depoch = wjd - GREGORIAN_EPOCH;
        quadricent = Math.floor(depoch / 146097);
        dqc = mod(depoch, 146097);
        cent = Math.floor(dqc / 36524);
        dcent = mod(dqc, 36524);
        quad = Math.floor(dcent / 1461);
        dquad = mod(dcent, 1461);
        yindex = Math.floor(dquad / 365);
        year = (quadricent * 400) + (cent * 100) + (quad * 4) + yindex;
        if (!((cent == 4) || (yindex == 4))) {
            year++;
        }
        yearday = wjd - gregorian_to_jd(year, 1, 1);
        leapadj = ((wjd < gregorian_to_jd(year, 3, 1)) ? 0
                :
                (leap_gregorian(year) ? 1 : 2)
        );
        var month = Math.floor((((yearday + leapadj) * 12) + 373) / 367);
        var day = (wjd - gregorian_to_jd(year, month, 1)) + 1;

        return new Array(year, month, day);
    }

    //  LEAP_PERSIAN  --  Is a given year a leap year in the Persian calendar ?

    function leap_persian(year) {
        return ((((((year - ((year > 0) ? 474 : 473)) % 2820) + 474) + 38) * 682) % 2816) < 682;
    }

    //  PERSIAN_TO_JD  --  Determine Julian day from Persian date

    var PERSIAN_EPOCH = 1948320.5;
    var PERSIAN_WEEKDAYS = new Array("دوشنبه", "یکشنبه",
        "چهارشنبه", "سه شنبه",
        "شنبه", "جمعه", "پنج شنبه");

    function persian_to_jd(year, month, day) {
        var epbase, epyear;
        epbase = year - ((year >= 0) ? 474 : 473);
        epyear = 474 + mod(epbase, 2820);
        return day +
            ((month <= 7) ?
                    ((month - 1) * 31) :
                    (((month - 1) * 30) + 6)
            ) +
            Math.floor(((epyear * 682) - 110) / 2816) +
            (epyear - 1) * 365 +
            Math.floor(epbase / 2820) * 1029983 +
            (PERSIAN_EPOCH - 1);
    }

    //  JD_TO_PERSIAN  --  Calculate Persian date from Julian day

    function jd_to_persian(jd) {
        var year, month, day, depoch, cycle, cyear, ycycle,
            aux1, aux2, yday;
        jd = Math.floor(jd) + 0.5;
        depoch = jd - persian_to_jd(475, 1, 1);
        cycle = Math.floor(depoch / 1029983);
        cyear = mod(depoch, 1029983);
        if (cyear == 1029982) {
            ycycle = 2820;
        } else {
            aux1 = Math.floor(cyear / 366);
            aux2 = mod(cyear, 366);
            ycycle = Math.floor(((2134 * aux1) + (2816 * aux2) + 2815) / 1028522) + aux1 + 1;
        }
        year = ycycle + (2820 * cycle) + 474;
        if (year <= 0) {
            year--;
        }
        yday = (jd - persian_to_jd(year, 1, 1)) + 1;
        month = (yday <= 186) ? Math.ceil(yday / 31) : Math.ceil((yday - 6) / 30);
        day = (jd - persian_to_jd(year, month, 1)) + 1;
        return new Array(year, month, day);
    }

    //تاریخ میلادی برمیگرداند
    function calcPersian(year, month, day) {
        var date, j;
        j = persian_to_jd(year, month, day);
        date = jd_to_gregorian(j);
        var weekday = jwday(j);
        return new Array(date[0], date[1], date[2], weekday);
    }

    //  calcGregorian  --  Perform calculation starting with a Gregorian date
    //تاریخ شمسی را بر می گرداند
    function calcGregorian(year, month, day) {
        month--;
        var j, weekday;
        //  Update Julian day
        j = gregorian_to_jd(year, month + 1, day) +
            (Math.floor(0 + 60 * (0 + 60 * 0) + 0.5) / 86400.0);
        //  Update Persian Calendar
        var perscal = jd_to_persian(j);
        weekday = jwday(j);
        return new Array(perscal[0], perscal[1], perscal[2], weekday);
    }

    function getTodayGregorian() {
        var t = new Date();
        var today = new Date();
        var y = today.getYear();
        if (y < 1000) {
            y += 1900;
        }
        return new Array(y, today.getMonth() + 1, today.getDate(), t.getDay());
    }

    function GetTodayCalendarInPersian() {
        var t = new Date();
        var today = getTodayGregorian();
        var persian = calcGregorian(today[0], today[1], today[2]);
        return new Array(persian[0], persian[1], persian[2], t.getDay());
    }
</script>

<script>
    /*
 * bootstrap persian date time picker jQuery Plugin
 * version : 1.6.4
 *
 *
 *
 * Written By Mohammad Dayyan, دی 1393
 * mds_soft@yahoo.com - 0919-7898568
 *
 * My weblog: mds-soft.persianblog.ir
*/

    (function ($) {

        var mdDateTimePickerFlagAttributeName = 'data-MdPersianDateTimePicker',
            mdDateTimePickerFlagSelector = '[' + mdDateTimePickerFlagAttributeName + ']',
            mdDateTimeIsShowingAttributeName = 'data-MdPersianDateTimePickerShowing',
            mdSelectedDateTimeAttributeName = 'data-MdPersianDateTimePickerSelectedDateTime',
            mdDateTimePickerWrapperAttributeName = 'data-name="Md-PersianDateTimePicker"',
            mdDateTimePickerWrapperSelector = '[' + mdDateTimePickerWrapperAttributeName + ']',
            isFirstTime = true,
            changeDateTimeEnum = {
                IncreaseMonth: 1,
                DecreaseMonth: 2,
                IncreaseYear: 3,
                DecreaseYear: 4,
                GoToday: 5,
                ClockChanged: 6,
                DayChanged: 7,
                TriggerFired: 8,
                OnEvent: 9,
            };

        var methods = {
            init: function (options) {
                var settings = $.extend(
                    {
                        EnglishNumber: false,
                        Placement: 'bottom',
                        Trigger: 'focus',
                        EnableTimePicker: true,
                        TargetSelector: '',
                        GroupId: '',
                        ToDate: false,
                        FromDate: false,
                    }, options);

                if (isFirstTime) {
                    bindEvents();
                    isFirstTime = false;
                }

                return this.each(function () {
                    var $this = $(this);

                    $this.attr(mdDateTimePickerFlagAttributeName, '');

                    $this.attr('data-trigger', settings.Trigger);
                    $this.attr('data-EnableTimePicker', settings.EnableTimePicker);
                    if ($.trim(settings.TargetSelector) != '')
                        $this.attr('data-TargetSelector', settings.TargetSelector);
                    if ($.trim(settings.GroupId) != '')
                        $this.attr('data-GroupId', settings.GroupId);
                    if (settings.ToDate)
                        $this.attr('data-ToDate', settings.ToDate);
                    if (settings.FromDate)
                        $this.attr('data-FromDate', settings.FromDate);
                    if (settings.EnglishNumber)
                        $this.attr('data-EnglishNumber', settings.EnglishNumber);

                    var initialDateTimeInJsonFormat = parsePreviousDateTimeValue($this.val()),
                        $calendarDivWrapper = createDateTimePickerHtml($this, initialDateTimeInJsonFormat);

                    // نمایش تقویم
                    $this.popover({
                        container: 'body',
                        content: $calendarDivWrapper,
                        html: true,
                        placement: settings.Placement,
                        title: 'انتخاب تاریخ',
                        trigger: 'manual',
                        template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title" data-name="Md-DateTimePicker-Title"></h3><div class="popover-content"  data-name="Md-DateTimePicker-PopoverContent"></div></div>',
                    }).on(settings.Trigger, function () {
                        hideOthers($this);
                        showPopover($this);
                        updateDateTimePickerHtml(this, changeDateTimeEnum.TriggerFired);
                    });
                });
            },
        };

        $.fn.MdPersianDateTimePicker = function (method) {
            if (methods[method]) {
                return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
            } else if (typeof method === 'object' || !method) {
                return methods.init.apply(this, arguments);
            } else {
                $.error('Method ' + method + ' does not exist in jquery.Bootstrap-PersianDateTimePicker');
                return false;
            }
        };

        function bindEvents() {
            // کلیک روی روزها
            $(document).on('click', '[data-name="day"],[data-name="today"]', function () {
                updateDateTimePickerHtml(this, changeDateTimeEnum.DayChanged);
            });

            // عوض کردن ماه با انتخاب نام ماه از روی دراپ داون
            $(document).on('click', '[data-name="Md-PersianDateTimePicker-MonthName"]', function () {
                var $this = $(this),
                    selectedMonthNumber = Number($.trim($this.attr('data-MonthNumber')));
                updateDateTimePickerHtml(this, changeDateTimeEnum.OnEvent, selectedMonthNumber);
            });

            // کلیک روی دکمه ماه بعد
            $(document).on('click', '[data-name="Md-PersianDateTimePicker-NextMonth"]', function () {
                updateDateTimePickerHtml(this, changeDateTimeEnum.IncreaseMonth);
            });

            // کلیک روی دکمه ماه قبل
            $(document).on('click', '[data-name="Md-PersianDateTimePicker-PreviousMonth"]', function () {
                updateDateTimePickerHtml(this, changeDateTimeEnum.DecreaseMonth);
            });

            // عوض کردن سال با کلیک روی دراپ داون
            $(document).on('click', '[data-name="Md-PersianDateTimePicker-YearNumber"]', function () {
                var $this = $(this),
                    selectedYearNumber = Number(toEnglishNumber($.trim($this.text())));
                updateDateTimePickerHtml(this, changeDateTimeEnum.OnEvent, undefined, selectedYearNumber);
            });

            // کلیک روی دکمه سال قبل
            $(document).on('click', '[data-name="Md-PersianDateTimePicker-PreviousYear"]', function () {
                updateDateTimePickerHtml(this, changeDateTimeEnum.DecreaseYear);
            });

            // کلیک روی دکمه سال بعد
            $(document).on('click', '[data-name="Md-PersianDateTimePicker-NextYear"]', function () {
                updateDateTimePickerHtml(this, changeDateTimeEnum.IncreaseYear);
            });

            // numeric textbox
            $(document).on('keydown', 'input[type="text"][data-name^="Clock"]', function (e) {
                // if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) return false;
                // Allow: backspace, delete, tab, escape, enter and .
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                    // Allow: Ctrl+A
                    (e.keyCode == 65 && e.ctrlKey === true) ||
                    // Allow: home, end, left, right, down, up
                    (e.keyCode >= 35 && e.keyCode <= 40)) {
                    // let it happen, don't do anything
                    return false;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
                return true;
            });
            // تغییر ساعت ، دقیقه و یا ثانیه
            $(document).on('blur', 'input[type="text"][data-name^="Clock"]', function () {
                updateDateTimePickerHtml(this, changeDateTimeEnum.ClockChanged);
                return true;
            });

            // انتخاب عدد داخل تکس باکس های تایم در هنگام فوکوس روی آنها
            $(document).on('focus', 'input[type="text"][data-name^="Clock"]', function () {
                $(this).select();
            });

            // کلیک روی دکمه امروز
            $(document).on('click', '[data-name="go-today"]', function () {
                updateDateTimePickerHtml(this, changeDateTimeEnum.GoToday);
            });
        }

        // تصحیح عدد روز بر اساس ماه و سال
        function fixDate(year, month, day) {
            if (month >= 7 && month <= 11 && day > 30)
                day = 30;
            if (month >= 12 && day >= 30 && !leap_persian(year))
                day = 29;
            return {
                Year: year,
                Month: month,
                Day: day
            }
        }

        // مخفی کردن تقویم با کلیک روی جایی که تقویم نیست
        $('html').on('click', function (e) {
            var $target = $(e.target),
                $parentTarget1 = $target.parents(),// اگر المان کلیک شده دارای تارگت باشد
                $parentTarget2 = $target.parents(mdDateTimePickerFlagSelector), // اگر روی تقویم کلیک شده باشد این متغیر مقدار میگیرد
                regex = new RegExp(mdDateTimePickerFlagAttributeName, 'im'),
                hasFlag = false;

            if ($parentTarget2.length > 0) {
                hasFlag = true;
            }

            // بررسی اتریبیوت ها برای پیدا کردن فلگ دیت پیکر
            // اگر فلگ پیدا شد نشان دهنده این است که تارگت یک دیت پیکر است
            if (!hasFlag)
                $.each(e.target.attributes, function () {
                    if (this.specified && regex.test(this.name) && !hasFlag) {
                        hasFlag = true;
                        return;
                    }
                });

            if (!hasFlag && $parentTarget1.length > 0)
                for (var i = 0; i < $parentTarget1.length; i++) {
                    $.each($parentTarget1[i].attributes, function () {
                        if (this.specified && regex.test(this.name) && !hasFlag) {
                            hasFlag = true;
                            return;
                        }
                    });
                }

            // مخفی کردن تقویم در صورتی که خارج از تقویم کلیک شده باشد
            if (!$target.hasClass('popover') && // اگر روی تقویم کلیک نشده بود
                !hasFlag && // اگر فلگ نداشت
                $target.parents('.popover.in').length == 0) // اگر روی تقویم کلیک نشده بود
            {
                hidePopover($(mdDateTimePickerFlagSelector));
            }
        });

        function increaseOneMonth(dateObject) {
            dateObject.Month = dateObject.Month + 1;
            if (dateObject.Month > 12) {
                dateObject.Month = 1;
                dateObject.Year = dateObject.Year + 1;
            }
        }
        function increaseOneYear(dateObject) {
            dateObject.Year = dateObject.Year + 1;
        }
        function decreaseOneMonth(dateObject) {
            dateObject.Month = dateObject.Month - 1;
            if (dateObject.Month < 1) {
                dateObject.Month = 12;
                dateObject.Year = dateObject.Year - 1;
            }
        }
        function decreaseOneYear(dateObject) {
            dateObject.Year = dateObject.Year - 1;
        }

        function updateDateTimePickerHtml(senderObject, changeEnum, newMonthNumber, newYearNumber) {
            var $senderObject = $(senderObject),
                $wrapper = $senderObject.parents(mdDateTimePickerWrapperSelector),
                $popoverDescriber = $wrapper.length > 0 ? $('[aria-describedby="' + $wrapper.parents('.popover').attr('id') + '"]') : undefined,
                newDateTimeInJsonFormat = $popoverDescriber != undefined && $popoverDescriber.attr(mdSelectedDateTimeAttributeName) != undefined && $popoverDescriber.attr(mdSelectedDateTimeAttributeName) != '' ? JSON.parse($popoverDescriber.attr(mdSelectedDateTimeAttributeName)) : undefined,
                writeDateString = true;

            switch (changeEnum) {
                // ماه بعدی
                case changeDateTimeEnum.IncreaseMonth:
                    increaseOneMonth(newDateTimeInJsonFormat);
                    break;

                // ماه قبلی
                case changeDateTimeEnum.DecreaseMonth:
                    decreaseOneMonth(newDateTimeInJsonFormat);
                    break;

                // سال بعدی
                case changeDateTimeEnum.IncreaseYear:
                    increaseOneYear(newDateTimeInJsonFormat);
                    break;

                // سال قبلی
                case changeDateTimeEnum.DecreaseYear:
                    decreaseOneYear(newDateTimeInJsonFormat);
                    break;

                // برو به امروز
                case changeDateTimeEnum.GoToday:
                    var todayDateTimeInJsonFormat = parsePreviousDateTimeValue('');
                    newDateTimeInJsonFormat.Year = todayDateTimeInJsonFormat.Year;
                    newDateTimeInJsonFormat.Month = todayDateTimeInJsonFormat.Month;
                    newDateTimeInJsonFormat.Day = todayDateTimeInJsonFormat.Day;
                    break;

                // تغییر در ساعت
                case changeDateTimeEnum.ClockChanged:
                    newDateTimeInJsonFormat.Hour = $wrapper.find('input[type="text"][data-name="Clock-Hour"]').val();
                    newDateTimeInJsonFormat.Minute = $wrapper.find('input[type="text"][data-name="Clock-Minute"]').val();
                    newDateTimeInJsonFormat.Second = $wrapper.find('input[type="text"][data-name="Clock-Second"]').val();
                    if (newDateTimeInJsonFormat.Hour > 23)
                        newDateTimeInJsonFormat.Hour = 0;
                    if (newDateTimeInJsonFormat.Minute > 59)
                        newDateTimeInJsonFormat.Minute = 0;
                    if (newDateTimeInJsonFormat.Second > 59)
                        newDateTimeInJsonFormat.Second = 0;
                    break;

                // تغییر روز
                case changeDateTimeEnum.DayChanged:
                    newDateTimeInJsonFormat.Day = Number(toEnglishNumber($.trim($senderObject.text())));
                    hidePopover($popoverDescriber);
                    break;

                // هنگامی که رویداد
                // trigger
                // رخ می دهد
                case changeDateTimeEnum.TriggerFired:
                    writeDateString = false;
                    $popoverDescriber = $senderObject;
                    $wrapper = $('#' + $popoverDescriber.attr('aria-describedby')).find(mdDateTimePickerWrapperSelector);
                    break;

                // تغییر ماه و سال
                case changeDateTimeEnum.OnEvent:
                    if (newMonthNumber != undefined)
                        newDateTimeInJsonFormat.Month = newMonthNumber;
                    if (newYearNumber != undefined)
                        newDateTimeInJsonFormat.Year = newYearNumber;
                    break;
            }

            $wrapper.replaceWith(createDateTimePickerHtml($popoverDescriber, newDateTimeInJsonFormat, writeDateString));
        }

        function parsePreviousDateTimeValue(persianDateTimeString) {
            //بدست آوردن تاریخ قبلی که در تکست باکس وجود داشته
            var previousDateTime = toEnglishNumber(persianDateTimeString).replace(/\s+/, '-'),
                year,
                month,
                day,
                hour = 0,
                minute = 0,
                second = 0;

            if (previousDateTime != '') {
                year = Number(previousDateTime.match(/\d{2,4}(?=\/\d{1,2}\/)/im));
                month = Number(previousDateTime.match(/\d{1,2}(?=\/\d{1,2})(?!\/\d{1,2}\/)/im));
                day = previousDateTime.match(/(\d{1,2})(-|$)/im);
                day = day != undefined && day.length >= 1 ? Number(day[1]) : 0;
            } else {
                var todayPersianDate = GetTodayCalendarInPersian();
                year = todayPersianDate[0];
                month = todayPersianDate[1];
                day = todayPersianDate[2];
            }

            if (previousDateTime.indexOf(':') > 0) { // بدست آوردن مقادیر ساعت و مقدار دهی آنها
                hour = Number(previousDateTime.match(/\d{1,2}(?=:\d{1,2}:)/im));
                minute = Number(previousDateTime.match(/\d{1,2}(?=:)(?!:\d{1,2}:)/im));
                second = Number(previousDateTime.match(/:(\d+$)/im)[1]);
            }

            var fixedDate = fixDate(year, month, day);
            year = fixedDate.Year;
            month = fixedDate.Month;
            day = fixedDate.Day;

            return createDateTimeJson(year, month, day, hour, minute, second);
        }
        function parseFromDateToDateValues(fromDateString, toDateString) {
            if ((toDateString == undefined || toDateString == '') &&
                (fromDateString == undefined || fromDateString == '')) return undefined;

            toDateString = toEnglishNumber(toDateString).replace(/\s+/, '-');
            fromDateString = toEnglishNumber(fromDateString).replace(/\s+/, '-');

            var year, month, day,
                fromDateObject = undefined,
                fromDateNumber = undefined,
                toDateObject = undefined,
                toDateNumber = undefined;

            if (fromDateString != undefined && fromDateString != '') {
                year = Number(fromDateString.match(/\d{2,4}(?=\/\d{1,2}\/)/im));
                month = Number(fromDateString.match(/\d{1,2}(?=\/\d{1,2})(?!\/\d{1,2}\/)/im));
                day = fromDateString.match(/(\d{1,2})(-|$)/im);
                day = day != undefined && day.length >= 1 ? Number(day[1]) : 0;
                fromDateNumber = convertToNumber(year, month, day);
                fromDateObject = {
                    Year: year,
                    Month: month,
                    Day: day
                };
            }

            if (toDateString != undefined && toDateString != '') {
                year = Number(toDateString.match(/\d{2,4}(?=\/\d{1,2}\/)/im));
                month = Number(toDateString.match(/\d{1,2}(?=\/\d{1,2})(?!\/\d{1,2}\/)/im));
                day = toDateString.match(/(\d{1,2})(-|$)/im);
                day = day != undefined && day.length >= 1 ? Number(day[1]) : 0;
                toDateNumber = convertToNumber(year, month, day);
                toDateObject = {
                    Year: year,
                    Month: month,
                    Day: day
                };
            }

            return {
                FromDateNumber: fromDateNumber,
                FromDateObject: fromDateObject,
                ToDateNumber: toDateNumber,
                ToDateObject: toDateObject
            };
        }

        // تبدیل تاریخ به عدد برای مقایسه
        function convertToNumber(year, month, day) {
            return Number(zeroPad(year) + zeroPad(month) + zeroPad(day));
        }
        function convertDateObjectToNumber(dateObject) {
            return Number(zeroPad(dateObject.Year) + zeroPad(dateObject.Month) + zeroPad(dateObject.Day));
        }

        function getDateTimeString(dateTimeInJsonFormat, enableTimePicker, isEnglishNumber) {
            var yearString = isEnglishNumber ? zeroPad(dateTimeInJsonFormat.Year) : toPersianNumber(zeroPad(dateTimeInJsonFormat.Year)),
                monthString = isEnglishNumber ? zeroPad(dateTimeInJsonFormat.Month) : toPersianNumber(zeroPad(dateTimeInJsonFormat.Month)),
                dayString = isEnglishNumber ? zeroPad(dateTimeInJsonFormat.Day) : toPersianNumber(zeroPad(dateTimeInJsonFormat.Day)),
                hourString = isEnglishNumber ? zeroPad(dateTimeInJsonFormat.Hour) : toPersianNumber(zeroPad(dateTimeInJsonFormat.Hour)),
                minuteString = isEnglishNumber ? zeroPad(dateTimeInJsonFormat.Minute) : toPersianNumber(zeroPad(dateTimeInJsonFormat.Minute)),
                secondString = isEnglishNumber ? zeroPad(dateTimeInJsonFormat.Second) : toPersianNumber(zeroPad(dateTimeInJsonFormat.Second)),
                selectedDateTimeString = yearString + '/' + monthString + '/' + dayString;
            if (enableTimePicker)
                selectedDateTimeString = selectedDateTimeString + '  ' + hourString + ':' + minuteString + ':' + secondString;
            return selectedDateTimeString;
        }

        function createDateTimeJson(year, month, day, hour, minute, second) {
            if (!isNumber(hour)) hour = 0;
            if (!isNumber(minute)) minute = 0;
            if (!isNumber(second)) second = 0;
            return { Year: year, Month: month, Day: day, Hour: hour, Minute: minute, Second: second };
        }

        // درست کردن اچ تی ام ال دیت تایم پیکر
        // مقدار برگشتی تعیین میکند آیا مقدار تاریخ باید به روز شود یا نه
        function createDateTimePickerHtml($popoverDescriber, dateTimeInJsonFormat, writeDateString) {
            var persianTodayDateTemp = GetTodayCalendarInPersian(), // تاریخ شمسی امروز
                currentYear = persianTodayDateTemp[0],
                currentMonth = persianTodayDateTemp[1],
                currentDay = persianTodayDateTemp[2],
                todayDateTimeString = 'امروز، ' + getPersianWeekDay(persianTodayDateTemp[3] + 1) + ' ' + toPersianNumber(currentDay) + ' ' + getPersianMonth(currentMonth) + ' ' + toPersianNumber(currentYear),
                $calendarMainTable = $('<table class="table table-striped" />'),
                $calendarHeader = $('<tr><td colspan="100" style="padding:5px;"><table class="table" data-name="Md-PersianDateTimePicker-HeaderTable"><tr><td><button type="button" class="btn btn-default btn-xs" title="سال بعد" data-name="Md-PersianDateTimePicker-NextYear">&lt;&lt;</button></td><td><button type="button" class="btn btn-default btn-xs" title="ماه بعد" data-name="Md-PersianDateTimePicker-NextMonth">&lt;</button></td><td><div class="dropdown" style="min-width:50px;"><button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuPersianYear" data-toggle="dropdown" aria-expanded="true" data-name="Md-PersianDateTimePicker-TitleYear">1393</button><ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenuPersianYear"><li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:void(0)" data-name="Md-PersianDateTimePicker-YearNumber">1394</a></li></ul></div></td><td ><div class="dropdown" style="min-width:73px;"><button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuPersianMonths" data-toggle="dropdown" aria-expanded="true" data-name="Md-PersianDateTimePicker-TitleMonth">نام ماه</button><ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenuPersianMonths"><li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:void(0)" data-name="Md-PersianDateTimePicker-MonthName" data-MonthNumber="1">فروردین</a></li><li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:void(0)" data-name="Md-PersianDateTimePicker-MonthName" data-MonthNumber="2">اردیبهشت</a></li><li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:void(0)" data-name="Md-PersianDateTimePicker-MonthName" data-MonthNumber="3">خرداد</a></li><li role="presentation" class="divider"></li><li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:void(0)" data-name="Md-PersianDateTimePicker-MonthName" data-MonthNumber="4">تیر</a></li><li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:void(0)" data-name="Md-PersianDateTimePicker-MonthName" data-MonthNumber="5">مرداد</a></li><li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:void(0)" data-name="Md-PersianDateTimePicker-MonthName" data-MonthNumber="6">شهریور</a></li><li role="presentation" class="divider"></li><li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:void(0)" data-name="Md-PersianDateTimePicker-MonthName" data-MonthNumber="7">مهر</a></li><li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:void(0)" data-name="Md-PersianDateTimePicker-MonthName" data-MonthNumber="8">آبان</a></li><li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:void(0)" data-name="Md-PersianDateTimePicker-MonthName" data-MonthNumber="9">آذر</a></li><li role="presentation" class="divider"></li><li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:void(0)" data-name="Md-PersianDateTimePicker-MonthName" data-MonthNumber="10">دی</a></li><li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:void(0)" data-name="Md-PersianDateTimePicker-MonthName" data-MonthNumber="11">بهمن</a></li><li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:void(0)" data-name="Md-PersianDateTimePicker-MonthName" data-MonthNumber="12">اسفند</a></li></ul></div></td><td><button type="button" class="btn btn-default btn-xs" title="ماه قبل" data-name="Md-PersianDateTimePicker-PreviousMonth">&gt;</button></td><td><button type="button" class="btn btn-default btn-xs" title="سال قبل" data-name="Md-PersianDateTimePicker-PreviousYear">&gt;&gt;</button></td></tr></table></td></tr><tr data-name="Md-PersianDateTimePicker-WeekDaysNames"><td>ش</td><td>ی</td><td>د</td><td>س</td><td>چ</td><td>پ</td><td class="text-danger">ج</td></tr>'),
                $calendarTimePicker = $('<tr><td colspan="100" style="padding: 2px;"><table class="table" data-name="Md-PersianDateTimePicker-TimePicker"><tr><td><input type="text" class="form-control" data-name="Clock-Hour" maxlength="2" /></td><td>:</td><td><input type="text" class="form-control" data-name="Clock-Minute" maxlength="2" /></td><td>:</td><td><input type="text" class="form-control" data-name="Clock-Second" maxlength="2" /></td></tr></table></td></tr>'),
                $calendarFooter = $('<tr><td colspan="100"><a class="" href="javascript:void(0)" data-name="go-today">' + todayDateTimeString + '</a></td></tr>'),
                $calendarDivWrapper = $('<div ' + mdDateTimePickerWrapperAttributeName + ' />'),
                targetSelector = $popoverDescriber.attr('data-TargetSelector'),
                $target = targetSelector == undefined || targetSelector == '' ? $popoverDescriber : $(targetSelector),
                enableTimePicker = $popoverDescriber.attr('data-EnableTimePicker') == 'true',
                isFromDate = $popoverDescriber.attr('data-FromDate'),
                isToDate = $popoverDescriber.attr('data-ToDate'),
                groupId = $popoverDescriber.attr('data-GroupId'),
                englishNumber = $popoverDescriber.attr('data-EnglishNumber') == 'true',
                fromDateString = '',
                toDateString = '',
                fromDateToDateJson = undefined;

            // افزودن دراپ داون سال
            var $yearDropDown = $calendarHeader.find('[aria-labelledby="dropdownMenuPersianYear"]');
            $yearDropDown.html('');

            for (var k = currentYear - 5; k <= currentYear + 5; k++) {
                var $dropDownYear = $('<li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:void(0)" data-name="Md-PersianDateTimePicker-YearNumber">' + toPersianNumber(k) + '</a></li>');
                if (k == currentYear)
                    $dropDownYear.addClass('bg-info');
                $yearDropDown.append($dropDownYear);
            }

            // اگر متغیر زیر تعریف نشده بود مقدار داخل تارگت را گرفته و استفاده می کند
            if (dateTimeInJsonFormat == undefined)
                dateTimeInJsonFormat = parsePreviousDateTimeValue($.trim($target.val()));

            var fixedDate = fixDate(dateTimeInJsonFormat.Year, dateTimeInJsonFormat.Month, dateTimeInJsonFormat.Day);
            dateTimeInJsonFormat.Year = fixedDate.Year;
            dateTimeInJsonFormat.Month = fixedDate.Month;
            dateTimeInJsonFormat.Day = fixedDate.Day;

            //بدست آوردن تاریخ قبلی که در تکست باکس وجود داشته
            if (enableTimePicker) {
                $calendarTimePicker.find('[data-name="Clock-Hour"]').val(zeroPad(dateTimeInJsonFormat.Hour));
                $calendarTimePicker.find('[data-name="Clock-Minute"]').val(zeroPad(dateTimeInJsonFormat.Minute));
                $calendarTimePicker.find('[data-name="Clock-Second"]').val(zeroPad(dateTimeInJsonFormat.Second));
            }

            if (dateTimeInJsonFormat.Year <= 0) dateTimeInJsonFormat.Year = 1393;
            if (dateTimeInJsonFormat.Month <= 0) dateTimeInJsonFormat.Month = 1;
            if (dateTimeInJsonFormat.Day <= 0) dateTimeInJsonFormat.Day = 1;

            // درست کردن ماه
            if (dateTimeInJsonFormat.Month > 12) {
                dateTimeInJsonFormat.Month = 1;
                dateTimeInJsonFormat.Year = dateTimeInJsonFormat.Year + 1;
            }

            // اطلاعات ماه جاری
            var numberOfDaysInCurrentMonth = 31;
            if (dateTimeInJsonFormat.Month > 6 && dateTimeInJsonFormat.Month < 12)
                numberOfDaysInCurrentMonth = 30;
            else if (dateTimeInJsonFormat.Month == 12)
                numberOfDaysInCurrentMonth = leap_persian(dateTimeInJsonFormat.Year) ? 30 : 29;

            // اطلاعات ماه قبلی
            var numberOfDaysInPreviousMonth = 31;
            if (dateTimeInJsonFormat.Month - 1 > 6 && dateTimeInJsonFormat.Month - 1 < 12)
                numberOfDaysInPreviousMonth = 30;
            else if (dateTimeInJsonFormat.Month - 1 == 12)
                numberOfDaysInPreviousMonth = leap_persian(dateTimeInJsonFormat.Year - 1) ? 30 : 29;

            // بدست آوردن نام ماه و عدد سال
            // مثال: دی 1393
            var persianMonthName = getPersianMonth(dateTimeInJsonFormat.Month);
            $calendarHeader.find('[data-name="Md-PersianDateTimePicker-TitleMonth"]').html(persianMonthName);
            $calendarHeader.find('[data-name="Md-PersianDateTimePicker-TitleYear"]').html(toPersianNumber(dateTimeInJsonFormat.Year));
            $calendarMainTable.append($calendarHeader);

            // from date, to date
            if (groupId != undefined && groupId != '') {
                if (isFromDate != undefined && isFromDate == 'true') { // $popoverDescriber is `from date`, so we have to find `to date`
                    fromDateString = dateTimeInJsonFormat.Year.toString() + '/' + dateTimeInJsonFormat.Month.toString() + '/' + dateTimeInJsonFormat.Day.toString();
                    var $toDatePopoverDescriber = $('[data-GroupId="' + groupId + '"][data-ToDate]'),
                        toDateTargetSelector = $toDatePopoverDescriber.attr('data-TargetSelector'),
                        $toDateTarget = toDateTargetSelector != undefined && toDateTargetSelector != '' ? $(toDateTargetSelector) : $toDatePopoverDescriber;
                    toDateString = $toDateTarget.val();
                }
                else if (isToDate != undefined && isToDate == 'true') {  // $popoverDescriber is `to date`, so we have to find `from date`
                    toDateString = dateTimeInJsonFormat.Year.toString() + '/' + dateTimeInJsonFormat.Month.toString() + '/' + dateTimeInJsonFormat.Day.toString();
                    var $fromDatePopoverDescriber = $('[data-GroupId="' + groupId + '"][data-FromDate]'),
                        fromDateTargetSelector = $fromDatePopoverDescriber.attr('data-TargetSelector'),
                        $fromDateTarget = fromDateTargetSelector != undefined && fromDateTargetSelector != '' ? $(fromDateTargetSelector) : $fromDatePopoverDescriber;
                    fromDateString = $fromDateTarget.val();
                }
                if (toDateString != '' || fromDateString != '')
                    fromDateToDateJson = parseFromDateToDateValues(fromDateString, toDateString);
            }

            var i = 0,
                j = persian_to_jd(dateTimeInJsonFormat.Year, dateTimeInJsonFormat.Month, 01),
                firstWeekDayNumber = jwday(j),
                cellNumber = 0,
                tdNumber = 0,
                dayOfWeek = '', // نام روز هفته
                isTrAppended = true;
            $tr = $('<tr />');
            // روز های ماه پیش
            if (firstWeekDayNumber != 6)
                for (i = firstWeekDayNumber; i >= 0; i--) {
                    $tr.append($('<td data-name="disabled-day" />').html(toPersianNumber(zeroPad(numberOfDaysInPreviousMonth - i))));
                    cellNumber++;
                    tdNumber++;
                }

            for (i = 1; i <= numberOfDaysInCurrentMonth; i++) {

                if (tdNumber >= 7) {
                    tdNumber = 0;
                    $calendarMainTable.append($tr);
                    isTrAppended = true;
                    $tr = $('<tr />');
                }

                var dayNumberInString = toPersianNumber(zeroPad(i)),
                    currentDateNumber = convertToNumber(dateTimeInJsonFormat.Year, dateTimeInJsonFormat.Month, i),
                    $td;

                if (i == currentDay && dateTimeInJsonFormat.Month == currentMonth && dateTimeInJsonFormat.Year == currentYear) { // امروز
                    $td = $('<td data-name="today" class="bg-primary" />').html(dayNumberInString);
                    dayOfWeek = getPersianWeekDay(tdNumber);
                } else if (i == dateTimeInJsonFormat.Day) { // روز از قبل انتخاب شده
                    $td = $('<td data-name="day" class="bg-info" />').html(dayNumberInString);
                    dayOfWeek = getPersianWeekDay(tdNumber);
                } else if (tdNumber > 0 && tdNumber % 6 == 0) // روز جمعه
                    $td = $('<td data-name="day" class="text-danger" />').html(dayNumberInString);
                else
                    $td = $('<td data-name="day" />').html(dayNumberInString);

                // بررسی از تاریخ، تا تاریخ
                if (fromDateToDateJson != undefined &&
                    ((isToDate && fromDateToDateJson.FromDateNumber != undefined && currentDateNumber < fromDateToDateJson.FromDateNumber) ||
                        (isFromDate && fromDateToDateJson.ToDateNumber != undefined && currentDateNumber > fromDateToDateJson.ToDateNumber))) {
                    $td.attr('data-name', 'disabled-day');
                }
                //else if (fromDateToDateJson != undefined &&
                //    ((isToDate || isFromDate) && (currentDateNumber >= fromDateToDateJson.FromDateNumber && currentDateNumber <= fromDateToDateJson.ToDateNumber))) {
                //    if (!$td.hasClass('bg-primary'))
                //        $td.addClass('bg-warning');
                //} else {
                //    $td.removeClass('bg-warning');
                //}
                //\\

                $tr.append($td);
                isTrAppended = false;

                tdNumber++;
                cellNumber++;
            }

            // غیر فعال کردن دکمه های ماه بعد و سال بعد و یا ماه قبل و سال قبل
            //if (fromDateToDateJson != undefined) {
            //    var previousMonthNumberOfFromDate = $.extend({}, fromDateToDateJson.FromDateObject), // ماه قبل برای ÷ از تاریخ
            //        previousYearNumberOfFromDate = $.extend({}, fromDateToDateJson.FromDateObject), // سال قبل برای ÷ از تاریخ

            //        nextMonthNumberOfToDate = $.extend({}, fromDateToDateJson.ToDateObject), // ماه قبل برای ÷ تا تاریخ
            //        nextYearNumberOfToDate = $.extend({}, fromDateToDateJson.ToDateObject), // سال قبل برای ÷ تا تاریخ

            //        previousMonthNumber = $.extend({}, dateTimeInJsonFormat), // ماه قبل برای ÷ تاریخ جاری
            //        previousYearNumber = $.extend({}, dateTimeInJsonFormat), // سال قبل برای ÷ تاریخ جاری
            //        nextMonthNumber = $.extend({}, dateTimeInJsonFormat), // ماه بعد برای ÷ تاریخ جاری
            //        nextYearNumber = $.extend({}, dateTimeInJsonFormat), // سال بعد برای ÷ تاریخ جاری

            //        previousMonthButton = $calendarHeader.find('[data-name="Md-PersianDateTimePicker-PreviousMonth"]'),
            //        previouYearButton = $calendarHeader.find('[data-name="Md-PersianDateTimePicker-PreviousYear"]');

            //    decreaseOneMonth(previousMonthNumberOfFromDate);
            //    decreaseOneYear(previousYearNumberOfFromDate);
            //    previousMonthNumberOfFromDate = convertDateObjectToNumber(previousMonthNumberOfFromDate);
            //    previousYearNumberOfFromDate = convertDateObjectToNumber(previousYearNumberOfFromDate);

            //    increaseOneMonth(nextMonthNumberOfToDate);
            //    increaseOneYear(nextYearNumberOfToDate);
            //    nextMonthNumberOfToDate = convertDateObjectToNumber(nextMonthNumberOfToDate);
            //    nextYearNumberOfToDate = convertDateObjectToNumber(nextYearNumberOfToDate);

            //    decreaseOneMonth(previousMonthNumber);
            //    decreaseOneYear(previousYearNumber);
            //    previousMonthNumber = convertDateObjectToNumber(previousMonthNumber);
            //    previousYearNumber = convertDateObjectToNumber(previousYearNumber);

            //    increaseOneMonth(nextMonthNumber);
            //    increaseOneYear(nextYearNumber);
            //    nextMonthNumber = convertDateObjectToNumber(nextMonthNumber);
            //    nextYearNumber = convertDateObjectToNumber(nextYearNumber);

            //    if (isToDate == 'true' && previousMonthNumber < previousMonthNumberOfFromDate) {
            //        previousMonthButton.attr('disabled', 'disabled').addClass('disabled');
            //        previouYearButton.attr('disabled', 'disabled').addClass('disabled');
            //    }
            //}

            // روزهای ماه بعد
            if (cellNumber < 42) {
                for (i = 1; i <= 42 - cellNumber; i++) {
                    if (tdNumber >= 7) {
                        tdNumber = 0;
                        $calendarMainTable.append($tr);
                        isTrAppended = true;
                        $tr = $('<tr />');
                    }
                    else if (!isTrAppended) {
                        $calendarMainTable.append($tr);
                        isTrAppended = true;
                    }
                    $tr.append($('<td data-name="disabled-day" />').html(toPersianNumber(zeroPad(i))));
                    tdNumber++;
                }
            }

            if (enableTimePicker)
                $calendarMainTable.append($calendarTimePicker);
            $calendarMainTable.append($calendarFooter);
            $calendarDivWrapper.append($calendarMainTable);

            // عوض کردن عنوان popover
            $('[data-name="Md-DateTimePicker-Title"]').html(dayOfWeek + '، ' + toPersianNumber(zeroPad(dateTimeInJsonFormat.Day)) + ' ' + persianMonthName + ' ' + toPersianNumber(zeroPad(dateTimeInJsonFormat.Year)));

            // آیا محتویات تکس باکس باید تغییر کند ؟
            if (writeDateString) {
                if (fromDateToDateJson != undefined) {
                    //var previousSelectedDateNumber = convertDateStringToNumber($target.val()); // تاریخی که از قبل در تکس باکس بوده و قبلا انتخاب شده است
                    var selectedDateNumber = convertToNumber(dateTimeInJsonFormat.Year, dateTimeInJsonFormat.Month, dateTimeInJsonFormat.Day); // تاریخ انتخاب شده فعلی
                    if (!((isToDate && fromDateToDateJson.FromDateNumber != undefined && selectedDateNumber < fromDateToDateJson.FromDateNumber) ||
                        (isFromDate && fromDateToDateJson.ToDateNumber != undefined && selectedDateNumber > fromDateToDateJson.ToDateNumber))) {
                        $target.val(getDateTimeString(dateTimeInJsonFormat, enableTimePicker, englishNumber));
                        $target.trigger('change');
                    }
                } else {
                    $target.val(getDateTimeString(dateTimeInJsonFormat, enableTimePicker, englishNumber));
                    $target.trigger('change');
                }
            }

            $popoverDescriber.attr(mdSelectedDateTimeAttributeName, JSON.stringify(dateTimeInJsonFormat));

            return $calendarDivWrapper;
        }

        // مخفی کردن سایر تقویم ها به جز تقویم مورد نظر
        function hideOthers($exceptThis) {
            var allMdDateTimePickers = $(mdDateTimePickerFlagSelector);
            allMdDateTimePickers.each(function () {
                var $thisPopover = $(this);
                if ($exceptThis.is($thisPopover)) return;
                hidePopover($thisPopover);
            });
        };

        // نمایش popover
        function showPopover($element) {
            if ($element == undefined || $element.attr(mdDateTimeIsShowingAttributeName) == 'true') return;
            $element.attr(mdDateTimeIsShowingAttributeName, true);
            $element.popover('show');
        };

        // مخفی کردن popover
        function hidePopover($elements) {
            //console.log(arguments.callee.caller);
            if ($elements == undefined) return;
            $elements.each(function () {
                var $element = $(this);
                if ($element.attr(mdDateTimeIsShowingAttributeName) == 'false') return;
                $element.attr(mdDateTimeIsShowingAttributeName, false);
                $element.popover('hide');
            });
        };

        function zeroPad(nr, base) {
            if (nr == undefined || nr == '') return '00';
            if (base == undefined || base == '') base = '00';
            var len = (String(base).length - String(nr).length) + 1;
            return len > 0 ? new Array(len).join('0') + nr : nr;
        }
        function isNumber(n) {
            return !isNaN(parseFloat(n)) && isFinite(n);
        }
        function toPersianNumber(inputNumber1) {
            /* ۰ ۱ ۲ ۳ ۴ ۵ ۶ ۷ ۸ ۹ */
            if (inputNumber1 == undefined) return '';
            var str1 = $.trim(inputNumber1.toString());
            if (str1 == '') return '';
            str1 = str1.replace(/0/g, '۰');
            str1 = str1.replace(/1/g, '۱');
            str1 = str1.replace(/2/g, '۲');
            str1 = str1.replace(/3/g, '۳');
            str1 = str1.replace(/4/g, '۴');
            str1 = str1.replace(/5/g, '۵');
            str1 = str1.replace(/6/g, '۶');
            str1 = str1.replace(/7/g, '۷');
            str1 = str1.replace(/8/g, '۸');
            str1 = str1.replace(/9/g, '۹');
            return str1;
        }
        function toEnglishNumber(inputNumber2) {
            if (inputNumber2 == undefined) return '';
            var str = $.trim(inputNumber2.toString());
            if (str == "") return "";
            str = str.replace(/۰/g, '0');
            str = str.replace(/۱/g, '1');
            str = str.replace(/۲/g, '2');
            str = str.replace(/۳/g, '3');
            str = str.replace(/۴/g, '4');
            str = str.replace(/۵/g, '5');
            str = str.replace(/۶/g, '6');
            str = str.replace(/۷/g, '7');
            str = str.replace(/۸/g, '8');
            str = str.replace(/۹/g, '9');
            return str;
        }
        function getPersianWeekDay(weekDayNumber) {
            switch (weekDayNumber) {
                case 0:
                    return "شنبه";

                case 1:
                    return "یکشنبه";

                case 2:
                    return "دوشنبه";

                case 3:
                    return "سه شنبه";

                case 4:
                    return "چهارشنبه";

                case 5:
                    return "پنج شنبه";

                case 6:
                    return "جمعه";

                default:
                    return "";
            }
        }
        function getPersianMonth(monthNumber) {
            switch (monthNumber) {
                case 1:
                    return "فروردین";
                case 2:
                    return "اردیبهشت";
                case 3:
                    return "خرداد";
                case 4:
                    return "تیر";
                case 5:
                    return "مرداد";
                case 6:
                    return "شهریور";
                case 7:
                    return "مهر";
                case 8:
                    return "آبان";
                case 9:
                    return "آذر";
                case 10:
                    return "دی";
                case 11:
                    return "بهمن";
                case 12:
                    return "اسفند";
                default:
                    return "";
            }
        }

        //////////////////////////////////////////////////////////////
        /// فعال کرن خودکار پلاگین با گذاشتن اتریبیوت روی تگ ها
        //////////////////////////////////////////////////////////////

        this.EnableMdDateTimePickers = function() {
            var $dateTimePickers = $('[data-MdDateTimePicker="true"]');
            $dateTimePickers.each(function () {
                var $this = $(this),
                    trigger = $this.attr('data-trigger'),
                    placement = $this.attr('data-Placement'),
                    enableTimePicker = $this.attr('data-EnableTimePicker'),
                    targetSelector = $this.attr('data-TargetSelector'),
                    groupId = $this.attr('data-GroupId'),
                    toDate = $this.attr('data-ToDate'),
                    fromDate = $this.attr('data-FromDate');
                if (!$this.is(':input') && $this.css('cursor') == 'auto')
                    $this.css({ cursor: 'pointer' });
                $this.MdPersianDateTimePicker({
                    Placement: placement,
                    Trigger: trigger,
                    EnableTimePicker: enableTimePicker != undefined ? enableTimePicker : false,
                    TargetSelector: targetSelector != undefined ? targetSelector : '',
                    GroupId: groupId != undefined ? groupId : '',
                    ToDate: toDate != undefined ? toDate : '',
                    FromDate: fromDate != undefined ? fromDate : '',
                });
            });
        }

        $(document).ready(function () {
            EnableMdDateTimePickers();
        });

    })(jQuery);
</script>



</body>
</html>


