@extends('admin.layouts.master')

@section('title', '文章管理')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            旅遊方案管理 <small>所有旅遊方案</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 旅遊方案管理
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row" style="margin-bottom: 20px; text-align: right">
    <div class="col-lg-12">
        <a href="{{ route('admin.posts.create') }}" class="btn btn-success">建立新旅遊</a>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="30" style="text-align: center">#</th>
                        <th width="100" style="text-align: center">旅遊名稱</th>
                        <th width="500" style="text-align: center">地點內容說明</th>
                        <th width="70" style="text-align: center">價錢</th>
                        <th width="70" style="text-align: center">編輯/刪除</th>

                    </tr>
                </thead>
                <tbody>
                @foreach($tourcase as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->tourname}}</td>
                        <td>{{($post->place)}}</td>
                        <td>{{($post->price)}}</td>
                        <td>
                            <a href="{{route('admin.posts.edit',$post->id)}}">編輯</a>
                            /
                            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-success">刪除</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection
