@extends('admin.layouts.master')

@section('title', '新增文章')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            新增旅遊方案 <small>請輸入旅遊內容</small>
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
        <form action="/admin/posts" method="POST" role="form">
            {{ csrf_field() }}


            <div class="form-group">
                <label>旅遊名稱：</label>
                <input name="title" class="form-control" placeholder="請輸入旅遊名稱">
            </div>

            <div class="form-group">
                <label>地點：</label>
                <input name="place" class="form-control" placeholder="請輸入旅遊地點">
            </div>

            <div class="form-group">
                <label>價錢：</label>
                <input name="price" class="form-control" placeholder="請輸入價錢">
            </div>

            <div class="form-group">
                <label>精選</label>
                <select name="is_feature" class="form-control">
                    <option value="0">否</option>
                    <option value="1">是</option>
                </select>
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-success">新增</button>
            </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

        </form>
    </div>
</div>
<!-- /.row -->
@endsection
