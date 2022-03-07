<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div id="wrapper">
    <div id="page-wrapper" class="gray-bg dashbard-1">
<div class="content-wrapper" id="customers">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                @include('layouts.message')
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5 class="col-md-10">{{ __('text.discountTrash') }}</h5>
                        <div class="col-md-2">
                            @can('discount-delete')
                                <button id="deleteAll" class="btn btn-danger">{{__('text.deleteall')}}</button>
                            @endcan
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-profile">

                                <thead>
                                <tr>
                                    <th>{{__('text.id')}}</th>
                                    <th>{{__('text.name')}}</th>
                                    <th>{{__('text.logo')}}</th>
                                    <th>{{__('text.admins')}}</th>

                                </tr>
                                </thead>
                                <form id="deleteAllForm" method="post" enctype="multipart/form-data"
                                      action="{{route('discount.destroyAll')}}">
                                    @csrf
                                    <tbody>
                                    @foreach($discount as $ga)

                                        <tr>
                                            <td>
                                                <input class="idd" type="checkbox" name="ids[]"
                                                       value="{{$ga->id}}"><span
                                                    style="margin:0 5px">{{$ga->id}}</span>
                                            </td>
                                            <td>{{$ga->name}}</td>
                                            <td>
                                                @isset($ga->logo)
                                                    <span
                                                        style="display: block;width: 24px;height:24px;border: 1px solid grey;overflow:hidden;border-radius: 50%">
                                                    <img
                                                        src="{{url($ga->logo)}}"
                                                        style="width: 30px;margin: auto">
                                                </span>
                                                @endisset
                                            </td>

                                            <td>
                                                @can('discount-recovery')
                                                    @component('component.btn',['url'=>route("discount.recovery",$ga->id),'class'=>'warning','icon'=>'fa fa-trash-restore','text'=>__('text.recovery')])@endcomponent
                                                @endcan
                                                @can('discount-delete')
                                                    @component('component.btn',['url'=>route("discount.trashdelete",$ga->id),'class'=>'danger','icon'=>'fa fa-trash','text'=>__('text.delete')])@endcomponent
                                                @endcan
                                            </td>


                                        </tr>
                                    @endforeach
                                    </tbody>
                                </form>
                            </table>
                        </div>
                        <div class="row" style="margin: auto">
                            {{$discount->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
    </div>
</div>
<script>
    $('#deleteAll').click(function () {
        var a = confirm('{{__('text.wannadeleteitems')}}');
        var tag = $('.idd').is(":checked")
        if (tag == false && a == true) {
            alert('{{__('text.nothingselected')}}')
        } else if (a == true && tag == true) {
            $('#deleteAllForm').submit();
        }
    })
</script>

</body>
</html>




