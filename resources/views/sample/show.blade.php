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

        <table class="table table-striped">
            <tr>
                <th></th>
                <th>１講時</th>
                <th>２講時</th>
                <th>３講時</th>
                <th>４講時</th>
                <th>５講時</th>
                <th>６講時</th>
            </tr>

            <tr>
                <th>月</th>
                <td><button class="btn btn-lite" data-toggle="modal" data-target="#modal-example">{{$data}}</button></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <th>火</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <th>水</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <th>木</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <th>金</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>


            <tr>
                <th>土</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>




        <div align="right">
            <button class="btn btn-primary" onclick="history.back()">戻る</button>
        </div>

       <div class="modal" id="modal-example" tabindex="-1">
            <div class="modal-dialog">

                <!-- 3.モーダルのコンテンツ -->
                <div class="modal-content">

                    <!-- 4.モーダルのヘッダ -->
                    <div class="modal-header">
                        <h4 class="modal-title" id="modal-label">生徒の詳細</h4>
                    </div>

                    <!-- 5.モーダルのボディ -->
                    <div class="modal-body">
                        <table class="table table-striped">

                            <tr>
                                <th>学籍番号</th>
                                <th>氏名</th>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>

                    <!-- 6.モーダルのフッタ -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">閉じる</button>
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