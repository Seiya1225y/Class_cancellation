<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/test.css') }}">
    <title>振替授業可能講時検索</title>
</head>
<body>

<div class="container">
    <div class="box1">
        <h1>振替授業可能講時検索</h1>
        <!--
        <div class="p-3">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="#gakusei" class="nav-link navbar-default active" data-toggle="tab">学生検索</a>
                </li>
                <li class="nav-item">
                    <a href="#kamoku" class="nav-link navbar-default" data-toggle="tab">科目検索</a>
                </li>
            </ul>

            <div class="tab-content">
                <div id="gakusei" class="tab-pane active">
                    <form class="form-inline" method="post" action="view.php">
                        <div class="form-group">
                            <label for="gakka" class="control-label col-xs-2">学科：</label>
                            <div class="col-xs-3">
                                <select class="form-control" id="gakka" name="gakka[]">
                                    <optgroup label="経営情報学部">
                                        <option value="先端経営学科">先端経営学科</option>
                                        <option value="システム情報学科">システム情報学科</option>
                                        <optgroup label="情報メディア学部">
                                            <option value="情報メディア学科">情報メディア学科</option>
                                            <option value="情報メディア学科-メディアデザイン専攻">情報メディア学科-メディアデザイン専攻科</option>
                                            <option value="情報メディア学科-メディアテクノロジー専攻">情報メディア学科-メディアテクノロジー専攻</option>
                                            <optgroup label="医療情報学部">
                                                <option value="医療情報学科">医療情報学科</option>
                                                <option value="医療情報学科-診療情報管理専攻">医療情報学科-診療情報管理専攻</option>
                                                <option value="医療情報学科-臨床工学専攻">医療情報学科-臨床工学専攻</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="gakunen" class="control-label col-xs-2">学年：</label>
                            <div class="col-xs-3">
                                <select class="form-control" id="gakunen" name="gakka[]">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-5">
                                名前：<input type="text" class="form-control" id="name" name="name" placeholder="任意入力">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-10">
                                <button type="submit" class="btn btn-primary">検索</button>
                            </div>
                        </div>
                    </form>
                </div>
-->
                <div id="kamoku" class="tab-pane" tabindex="1">
                    <div class="tab-content">
                        <form class="form-inline" method="get" role="form">
                            <div class="form-group">
                                <label for="kamokukensaku" class="control-label col-xs-2">曜日：</label>
                                <div class="col-xs-3">
                                    <select name="youbi" class="form-control select select-primary mbl" data-toggle="select">
                                        <option value="">---</option>
                                        <option value="1">月</option>
                                        <option value="2">火</option>
                                        <option value="3">水</option>
                                        <option value="4">木</option>
                                        <option value="5">金</option>
                                        <option value="6">土</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="zikan" class="control-label col-xs-2">時間割り：</label>
                                <div class="col-xs-3">
                                    <select name="zikan" class="form-control select select-primary mbl" data-toggle="select">
                                        <option value="">---</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="zikan" class="control-label col-xs-2">学期：</label>
                                <div class="col-xs-3">
                                    <select name="gakki" class="form-control select select-primary mbl" data-toggle="select">
                                        <option value="">---</option>
                                        <option value="11">1</option>
                                        <option value="12">2</option>
                                        <option value="21">3</option>
                                        <option value="22">4</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-offset-2 col-xs-10">
                                    <button type="submit" class="btn btn-primary">検索</button>
                                </div>
                            </div>
                        </form>

                        @if(!empty($data))
                            <table class="table table-striped">
                                <tr>
                                    <th>科目名</th>
                                    <th>教師名</th>
                                    <th></th>
                                    <th>詳細</th>
                                </tr>

                                @foreach($data as $d)
                                    <form method="get" action="{{url('/sample/show')}}" name="a">
                                        {{ csrf_field() }}
                                    <tr>
                                        <td><input type="hidden" name="kamokumei" value="{{$d->kamoku_cd}}">{{$d->kamoku_meishou}}</td>
                                        <td><input type="hidden" name="kanjisei" value="{{$d->kanjisei}}">{{$d->kanjisei}}</td>
                                        <td><input type="hidden" name="kanjimei" value="{{$d->kanjimei}}">{{$d->kanjimei}}</td>
                                        <td><input type="submit" value="詳細" class="btn btn-primary btn-sm"></td>
                                    </tr>
                                    </form>
                                @endforeach

                            </table>

                                {{ $data->appends(request()->input())->render('pagination::bootstrap-4') }}

                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>