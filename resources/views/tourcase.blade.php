@extends('layouts.app')

@section('content')
    <!-- Bootstrap 樣板... -->

    <div class="panel-body">
        <!-- 顯示驗證錯誤 -->
    @include('common.errors')

    <!-- 新任務的表單 -->
        <form action="tourcase" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- 任務名稱 -->
            <div class="form-group">
                <label for="tourcase-name" class="col-sm-3 control-label">新增旅遊</label>

                <div class="col-sm-6">
                    <input type="text" name="tourname" id="tourcase-name" class="form-control">
                </div>
            </div>

            <!-- 增加任務按鈕-->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> 增加旅遊
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- 建立任務表單... -->

    <!-- 目前任務 -->
    @if (count($tourcase=$tourcase) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                目前旅遊方案
            </div>

            <div class="panel-body">
                <table class="table table-striped tourcase-table">

                    <!-- 表頭 -->
                    <thead>
                    <th>旅遊方案</th>
                    <th>&nbsp;</th>
                    </thead>

                    <!-- 表身 -->
                    <tbody>
                    @foreach ($tourcases as $tourcase)
                        <tr>
                            <!-- 任務名稱 -->
                            <td class="table-text">
                                <div>{{ $tourcase->tourname }}</div>
                            </td>

                            <td>
                                <!-- 刪除按鈕 -->

                                <form action="/tourcase/{{ $tourcase->id }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button>刪除旅遊方案</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
