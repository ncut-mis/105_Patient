@extends('layouts.app')

@section('title', '選擇診所')

@section('content')

    <headr class="intro-header">
        <header>
            <div class="navbar navbar-fixed-top">
                <div class="container">
                </div>
            </div>

        </header>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <hr class="small">
                    </div>
                </div>
            </div>
        </div>

        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
        <link href="css/flexslider.css" rel="stylesheet" />
        <link href="css/magnific-popup.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" />
        <link href="css/gallery-1.css" rel="stylesheet">


    </headr>

    <article>

        <div class="container">
            <h2>選擇診所</h2>

            <form >
                <div class="editContent">
                    <ul class="filter">
                    @foreach($categories as $category)
                            <li class="active"><a href = 'clinic/category/{{$category->id}}'>{{$category->category}}</a></li>
                    @endforeach
                    </ul>
                </div>
            </form>
            <form action="{{ route('clinic.search') }}" >
                <div class="form-group">

                    <input type="text" class="form-control" name="keyword" placeholder="搜尋">
                    <button type="submit" class="btn btn-default">搜尋診所</button>
                </div>
            </form>
            <div class="list-group">
                @foreach ($clinics as $clinic)
                    <a href="/clinics/{{ $clinic->id }}/show" class="list-group-item list-group-item-action table-responsive" style="text-align: center;">{{ $clinic->name}}</a>
                @endforeach
            </div>
        </div>
    </article>

@endsection

