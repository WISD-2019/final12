@extends('layouts.master')
@section('title', '可預約房間')
@section('content')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/about-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>可預約旅遊方案</h1>
                        <hr class="small">
                        <span class="subheading">Reservation</span>
                    </div>
                </div>
            </div>
        </div>
    </header>



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
                        <th width="50" style="text-align: center">選擇</th>

                    </tr>
                    </thead>
                    <tbody id="Mytable">
                    @foreach($a as $as)
                        <tr>
                            <td>{{$as -> id}}</td>
                            <td>{{$as -> tourname}}</td>
                            <td>{{$as -> place}}</td>
                            <td>{{$as -> price}}</td>
                            <td>
                            <button type="button" class="btnSelect btn btn-danger" data-toggle="modal" data-target="#exampleModal2" >
                                選擇
                            </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection
