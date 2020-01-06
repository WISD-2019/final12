@extends('admin.layouts.master')

@section('title', '編輯文章')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            編輯旅遊方案 <small>編輯旅遊內容</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 旅遊方案管理
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->



<div class="row">
    <div class="col-lg-12">
        <form action="/admin/posts/{{$tourcase->id}}" method="POST" role="form">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <div class="form-group">
                <label>旅遊名稱：</label>
                <input name="tourname" class="form-control" placeholder="請輸入文章標題"
                       value="{{$tourcase->tourname}}">
            </div>

            <div class="form-group">
                <label>地點內容說明：</label>
                <textarea name="place" class="form-control" rows="10">{{$tourcase->place}}</textarea>
            </div>

            <div class="form-group">
                <label>價錢：</label>
                <input name="price" class="form-control" placeholder="請輸入文章標題"
                       value="{{$tourcase->price}}">
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-success">更新</button>
            </div>

        </form>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

    </div>
</div>
<!-- /.row -->
@endsection
