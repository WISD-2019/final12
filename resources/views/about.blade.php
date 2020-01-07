@extends('layouts.master')
@section('title', '可預約旅遊方案')
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
                <table width="500" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th width="15" style="text-align: center">編號</th>
                        <th width="200" style="text-align: center">旅遊名稱</th>
                        <th width="200" style="text-align: center">價錢</th>
                        <th width="50" style="text-align: center">選擇</th>

                    </tr>
                    </thead>
                    <tbody id="Mytable">
                    @foreach($a as $as)
                        <tr>
                            <td align="center">{{$as -> id}}</td>
                            <td align="center">{{$as -> tourname}}</td>
                            <td align="center">{{$as -> price}}</td>
                            <td align="center">
                                <form action="/posts" method="POST">
                                    {{ csrf_field() }}
                                    <input type = "hidden" id = "id" name = "id" value = "{{$as->id}}">

                                    <button type="submit" class="btn btn-danger">選擇</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection
