@extends('layout.default')
@section('content')
<form method="POST" action="{{url('tambah')}}">
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<table border="1" width="60%" align="center">

<tr>
<th><align ="center" colspan="2">tambah data</th>
</tr>
<tr>
<td bgcolor="#00FFFF"><strong>Nama</strong></td>
<td><input style="text" name="nama" size="80"</td>
</tr>
<tr>
<td bgcolor="#00FFFF"><strong>Nim</strong></td>
<td><input type="text" name="nim" size="80"</td>
</tr>
<tr>
<td bgcolor="#00FFFF"><strong>alamat</strong></td>
<td><input type="text" name="alamat" size="80"</td>
</tr>
<tr>
<td colspan="2" align="right"><input name="btn-simpan" type="submit" value="tambah" /></td>
</tr>
</table>
</form>
@stop



