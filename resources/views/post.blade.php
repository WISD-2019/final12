@extends('layouts.master')
@section('title', 'Clean Blog - Sample Post')
@section('content')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/post-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>選擇的旅遊方案</h1>
                        <h2 class="subheading">Choice of travel plan</h2>

                    </div>
                </div>
            </div>
        </div>
    </header>

{{$tour}}

    @foreach($tour as $tou)

{{--            <td>{{$tou -> id}}</td>--}}
{{--            <td>{{$tou -> tourname}}</td>--}}
{{--            <td>{{$tou -> place}}</td>--}}
{{--            <td>{{$tou -> price}}</td>--}}
            741

    @endforeach


    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th width="15" style="text-align: center">編號</th>
                        <th width="80" style="text-align: center">旅遊名稱</th>
                        <th width="120" style="text-align: center">地點內容說明</th>
                        <th width="50" style="text-align: center">價錢</th>
                    </tr>
                    </thead>
                    <tbody id="Mytable">

                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection

