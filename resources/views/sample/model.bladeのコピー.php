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

                <div id="kamoku" class="tab-pane">
                    <div class="tab-content">
                        <form action="{{ route('sample.model') }}" class="form-inline" method="get" role="form">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label for="kamokukensaku" class="control-label col-xs-2">曜日：</label>
                                <div class="col-xs-3">
                                    <select name="youbi" class="form-control select select-primary mbl" data-toggle="select">
                                        <option value="1" @if(isset($youbi)=='1') selected @endif>月</option>
                                        <option value="2" @if(isset($youbi)=='2') selected @endif>火</option>
                                        <option value="3" @if(isset($youbi)=='3') selected @endif>水</option>
                                        <option value="4" @if(isset($youbi)=='4') selected @endif>木</option>
                                        <option value="5" @if(isset($youbi)=='5') selected @endif>金</option>
                                        <option value="6" @if(isset($youbi)=='6') selected @endif>土</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="zikan" class="control-label col-xs-2">時間割り：</label>
                                <div class="col-xs-3">
                                    <select name="zikan" class="form-control select select-primary mbl" data-toggle="select">
                                        <option value="1" @if(isset($zikan)=='1') selected @endif>1</option>
                                        <option value="2" @if(isset($zikan)=='2') selected @endif>2</option>
                                        <option value="3" @if(isset($zikan)=='3') selected @endif>3</option>
                                        <option value="4" @if(isset($zikan)=='4') selected @endif>4</option>
                                        <option value="5" @if(isset($zikan)=='5') selected @endif>5</option>
                                        <option value="6" @if(isset($zikan)=='6') selected @endif>6</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="zikan" class="control-label col-xs-2">学期：</label>
                                <div class="col-xs-3">
                                    <select name="gakki" class="form-control select select-primary mbl" data-toggle="select">
                                        <option value="11" @if(isset($gakki)=='11') selected @endif>1</option>
                                        <option value="12" @if(isset($gakki)=='12') selected @endif>2</option>
                                        <option value="21" @if(isset($gakki)=='21') selected @endif>3</option>
                                        <option value="22" @if(isset($gakki)=='22') selected @endif>4</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-offset-2 col-xs-10">
                                    <button type="submit" class="btn btn-primary">検索</button>
                                </div>
                            </div>
                        </form>

                        @section('table')
                        <table class="table table-striped">
                            <tr>
                                <th>科目名</th>
                                <th>教師名</th>
                                <th></th>
                                <th>配当クラス</th>
                                <th>詳細</th>
                            </tr>

                            @foreach($employees as $d)
                                <tr>
                                    <td>{{$d->kamoku_name}}</td>
                                    <td>{{$d->kyoushokuin_kanjisei}}</td>
                                    <td>{{$d->kyoushokuin_kanjimei}}</td>
                                    <td>{{$d->haitou_class}}</td>
                                    <td>詳細</td>
                                </tr>
                            @endforeach
                        </table>

                            <div class="paginate text-center">
                                {!! $employees->appends(['youbi'=>$youbi,'zikan'=>$zikan,'gakki'=>$gakki])->render() !!}
                            </div>

                        @endsection
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