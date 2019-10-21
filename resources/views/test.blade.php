<h1>Hello,{{$name}}</h1><br/>

<table class="tabel">
<thead>
<tr>
    <th>果物</th>
</tr>
</thead>
    <tbody>
    @foreach($hairetu as $val)
        <tr>
        <td>{{$val}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

@foreach($drinks as $val)
    {{$val->drink_name}}
@endforeach

<p>{{$drink}}</p>

<form method="POST">
    {{ csrf_field() }}
    <input type="text" class="form-control" name="drink">
    <input type="submit" class="btn btn-primary">
</form>
