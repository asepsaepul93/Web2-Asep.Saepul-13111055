@extends('layout.default')
@section('content')
<table border="1" width="75%" align="center">
<tr>
<th><a href="{{URL::to('/add')}}"><button type="submit">+ Tambah</button></a></th>
</tr>
<tr bgcolor="#00FFFF">
<th>No</th>
<th>Nama</th>
<th>Nim</th>
<th>Alamat</th>
<th>Aksi</th>
</tr>
@foreach($datalist as $view)
<tr>
<td>{{$view->id}}</td>
<td>{{$view->nama}}</td>
<td>{{$view->nim}}</td>
<td>{{$view->alamat}}</td>
<td colspan="2">
<a href="{{ URL::to('edit/'.$view->id)}}">edit</a>
<a href="{{ URL::to('delete/'.$view->id)}}">Delete</a></td>
@endforeach
</td>
</tr>
</table>
@stop
