<form class="form-inline" method="get" role="form">
<select name="kamoku" class="form-control select select-primary mbl" data-toggle="select">
    <option value="">全部署</option>
    <option value="英語" >英語</option>
    <option value="国語" >国語</option>
    <option value="システム" >システム</option>
    <option value="数学" >数学</option>
    <option value="コンピュータ" >コンピュータ</option>
</select>

    <button type="submit" class="btn btn-primary">検索</button>
</form>

@if(!empty($employees))
<h3>内部結合・外部結合のテスト</h3>
<p style="color: tomato;">※INNER JOIN</p>
@foreach($employees as $employee)
    {{$employee->kamoku_meishou}}
    {{$employee->kamoku_cd}}<br>
@endforeach
@endif

