<!DOCTYPE>
<html>
<head>
<title>SISHU - Reset Password </title>
</head>

<body>
			
<?php $row = $user->result();?>
<table width="100%" cellspacing="0" cellpadding="2" border="0" bgcolor="#ccddff">
<tbody><tr><td class="cthead_td_cmds" nowrap="" width="80%"><span class="cthead_cmds">
<td class="cthead_td_cmds right" nowrap="" valign="middle">
&nbsp;&nbsp;&nbsp;
</tbody></table>
<h4>[This is an Automatic Email]</h4>
<br>
<p class="standard">Password akun anda pada Sistem Informasi Sekolah Haji anda telah berhasil di Reset oleh Admin .</p>
<p class="standard">Anda Bisa Login <b>SISHU</b> menggunakan akun:</p>
<table id="datatable" class="table table-striped  dataTable no-footer"> 
	<tr>
		<td><strong>Username :
		</strong></td><td><?php echo $row[0]->user?></td>
	</tr>
	<tr>
		<td><strong>Password :
		</strong></td><td><?php echo $this->encryption->decrypt($row[0]->pass);?></td>
	</tr>
</table>
</td>
</tr>
</tbody>
</table>
<br>
<p class="standard">Harap dicatat bahwa untuk masuk, Anda harus menggunakan keduanya</p>
<p class="standard">Username dan password anda. </p>

<br>
<p class="standard">Salam Hormat, </p>
<p class="standard"><b>Sekolah Haji dan Umrah Baitullah Rubaiyat</b> .</p>
</div>

<div style="border-top: solid 1px; width:500px;" ></div>
<p class="standard">Harap untuk jangan balas ke email ini. Email ini</p>
<p class="standard">Alamat hanya digunakan untuk mengirim email kepada anda</p>
<p class="standard">Sistem tidak akan menerima respon.</p>
</body></html>