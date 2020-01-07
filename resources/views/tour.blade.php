@extends('layouts.master')
@section('title', '選擇預約的方案')
@section('content')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/about-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>選擇預約的旅遊方案</h1>
                        <hr class="small">
                        <span class="subheading">Choice of travel plan</span>
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


                    </tr>
                    </thead>
                    <tbody id="Mytable">
                    <tr>
                        <td align="center">{{$a_id}}</td>
                        <td align="center">{{$a_tourname}}</td>
                        <td align="center">{{$a_place}}</td>
                        <td align="center">{{$a_price}}</td>
                    </tr>

                    </tbody>
                </table>
                <form action="/finish" method="POST">
                    {{ csrf_field() }}
                <div class="form-group">
                    <label>參團人數：</label>
                    <input size="20" name="people"  placeholder="請輸入人數">
                </div>
                <div class="form-group">
                    <label>預定出遊日期：</label>
                    <input  type="datetime-local" name="r_time"  >
                </div>
                <div class="text-right">
                    <button  name="id" type="submit" class="btn btn-success" value = {{$a_id}}>完成</button>
                </div>
                </form>
            </div>
        </div>
    </div>



@endsection
