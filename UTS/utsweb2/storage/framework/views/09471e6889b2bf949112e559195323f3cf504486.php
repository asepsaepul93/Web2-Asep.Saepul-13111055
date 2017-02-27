<?php $__env->startSection('content'); ?>
<table border="1" width="75%" align="center">
<tr>
<th><a href="<?php echo e(URL::to('/add')); ?>"><button type="submit">+ Tambah</button></a></th>
</tr>
<tr bgcolor="#00FFFF">
<th>No</th>
<th>Nama</th>
<th>Nim</th>
<th>Alamat</th>
<th>Aksi</th>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td colspan="2">
<a href="javascript:edit_id('')">Edit</a>
<a href="javascript:delete_id('')">delete</a>
</td>
</tr>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>