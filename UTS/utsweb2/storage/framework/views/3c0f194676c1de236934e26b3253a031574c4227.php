<?php $__env->startSection('content'); ?>
<form>
<center><table>
<tr>
<td><label>Username :</label></td>
<td><input id="name" name="username" placeholder="username" type="text"></td>
</tr>
<tr>
<td><label>password :</label></td>
<td><input id="password" name="password" placeholder="********" type="password"></td>
</tr>
<tr colspan="2">
<td><a href="home"><input name="login" type="button" value="login"/></a></td>
</tr>
</table></center>
</form>
<?php $__env->stopSection(); ?>















<?php echo $__env->make('layout.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>