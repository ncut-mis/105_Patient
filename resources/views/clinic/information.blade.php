@extends('layouts.app')

@section('title', '診所資訊')

@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/查詢訂位.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h2>診所資訊</h2>
                        <hr class="small">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="page-header">
                    <h1></h1>
                </div>
                <div class="row">
                    <form action="/reservation/{{ $clinic->id }}" method="GET">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="col-sm-12">
                                <h4>
                            <label>診所名稱：</label>
                            <td>{{ $clinic->name}}</td>
                                </h4>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <h4>
                            <label>電話：</label>
                            <td>{{ $clinic->tel}}</td>
                                </h4>
                            </div>
                        </div>
                        <div class="form-group" >
                            <div class="col-sm-12">
                                <h4>
                            <label>地址：</label>
                            <td>{{ $clinic->address}}</td>
                                </h4>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                            <h4>
                            <label>診所環境：</label>
                              @if($clinic->photo!==null)
                            <td> <img src="{{url('img/clinic/'. $clinic->photo)}}"class="img-thumbnail"></td>
                                  @else
                                    <td>診所尚未上傳照片</td>
                              @endif
                            </h4>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <h4>
                            <label>營業時間：</label>
                            <td>{{ $clinic->per_week_sections}}<br></td>
                                </h4>
                            </div>
                        </div>
                        <div>
                        @foreach($staff as $staff)
                            @foreach($doctors as $doctor)
                                @if($staff->id == $doctor->staff_id)
                                     <div class="form-group" >
                                         <div class="col-sm-12">
                                             <h4>
                                                 <label>醫生：</label>
                                                 <a href="/reservation_doctor/{{ $doctor->id }}">
                                                     <td>{{ $staff->name}}</td>
                                                 </a>
                                                 <a href="/doctor/{{ $doctor->id }}/show">
                                                     <td>/查看資訊</td>
                                                 </a>
                                             </h4>
                                         </div>
                                     </div>
                                 @endif
                            @endforeach
                        @endforeach
                        </div>
                        <div>
                            <h4>
                            <div class="col-sm-12">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-plus"></i> <h4>預約診所</h4>
                            </button>
                                <button type="submit" class="btn btn-default">
                                    @if(count($check) == 0)
                                        <a href="{{route('favorite_create_clinic', $clinic->id)}}">加入我的診所</a>
                                    @endif
                                    @if(count($check) != 0)
                                        <a href="{{route('favorite_delete_clinic', $clinic->id)}}">取消我的診所</a>
                                    @endif

                                </button>
                            </div>
                            </h4>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </article>
@endsection
