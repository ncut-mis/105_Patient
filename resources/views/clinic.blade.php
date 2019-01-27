@extends('layouts.app')

@section('title', '勤益大聯盟|診所選擇')

@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/查詢訂位.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>診所選擇</h1>
                        <hr class="small">
                        <span class="subheading">診所名稱</span>
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
                    <table class="table table-hover">
                        <thead>
                        @foreach ($clinics as $index => $clinic)
                        <tr>
                            <td>
                                <form action="/clinics/{{ $clinic->id }}" method="GET">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-default">
                                       <i class="fa fa-plus"></i> {{ $clinic->name}}
                                    </button>
                                </form>
                            </td>
                        </tr>
                        </thead>
                        <tbody>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </article>
@endsection