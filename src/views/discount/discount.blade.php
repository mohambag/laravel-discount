
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>تخفیفات</title>
</head>
<body>
<div id="wrapper">
    <div id="page-wrapper" class="gray-bg dashbard-1">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            @include('layouts.errors')
            <div class="ibox float-e-margins" style="margin-bottom: 0 !important;">
                <div class="ibox-title">
                    <h5 class="col-md-8">{{ __('text.discount') }}</h5>

                        <a class="btn btn-success"
                           href="{{route('dashboard.discount.create')}}">{{__('text.add')}}</a>


                </div>
            </div>

            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-profile">
                        <thead>
                        <tr>
                            <th>{{__('text.id')}}</th>
                            <th>{{__('text.name')}}</th>
                            <th>{{__('text.priceDiscount')}}</th>
                            <th>{{__('text.percentDiscount')}}</th>
                            <th>{{__('text.dataIn')}}</th>
                            <th>{{__('text.dataOut')}}</th>
                            <th>{{__('text.status')}}</th>
                            <th>{{__('text.admins')}}</th>

                        </tr>
                        </thead>
                        <form id="deleteAllForm" method="post" enctype="multipart/form-data"
                              action="{{route('dashboard.galleries.destroyAll')}}">
                            @csrf
                            <tbody>
                            @foreach($discount as $ga)
                                @switch($ga->status)
                                    @case(1)
                                    @php
                                        $url=route('dashboard.discount.updatestatus',$ga->id);
                                        $status='<a href="'.$url.'" class="badge badge-success btn-success btn">فعال</a>';
                                    @endphp
                                    @break
                                    @case(0)
                                    @php
                                        $url=route('dashboard.discount.updatestatus',$ga->id);
                                        $status='<a href="'.$url.'" class="badge badge-danger btn-warning btn">غیر فعال</a>';
                                    @endphp
                                    @break
                                    @default
                                @endswitch

                                <tr>
                                    <td>{{$ga->id}}</td>
                                    <td>{{$ga->name}}</td>
                                    <td>{{$ga->priceDiscount ?? __('text.doesnt')}}</td>
                                    <td>{{$ga->percentDiscount ?? __('text.doesnt')}}</td>
                                    <td>{{$ga->dataIn}}</td>
                                    <td>{{$ga->dataOut}}</td>
                                    <td>
                                            {!! $status !!}
                                    </td>

                                    <td>
                                            @component('component.btn',['url'=>route('dashboard.discount.edit',$ga->id),'class'=>'info','icon'=>'fa fa-edit','text'=>__('text.edit')])@endcomponent
                                            @component('component.btn',['url'=>route("dashboard.discount.trash",$ga->id),'class'=>'danger','icon'=>'fa fa-trash','text'=>__('text.trash')])@endcomponent
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
</body>
</html>



