@extends('layout.default')
@section('content')
<form action="{{url('edit/update/'.$datalist->id)}}" method="POST">
<table border="1" width="60%" align="center">
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<tr>
<th><align ="center" colspan="2">Ubah data</th>
</tr>
<tr>
<td bgcolor="#00FFFF"><strong>Nama</strong></td>
<td><input style="text" name="nama" size="80" value="{{$datalist->nama}}"/></td>
</tr>
<tr>
<td bgcolor="#00FFFF"><strong>Nim</strong></td>
<td><input type="text" name="nim" size="80" value="{{$datalist->nim}}"></td>
</tr>
<tr>
<td bgcolor="#00FFFF"><strong>alamat</strong></td>
<td><input type="text" name="alamat" size="80" value="{{$datalist->alamat}}"></td>
</tr>
<td colspan="2" align="right"><input type="submit" name="btn-edit" value="simpan"/></td>
</tr>
</table>
</form>
@stop



