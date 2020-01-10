<?php
	function ceklogin(){
		$ci = & get_instance();
		if ($ci->session->login_status != 'true') {
			echo "
				<script>
					alert('Silahkan Login terlebih dahulu');
					window.location.href='".base_url()."Auth/login/';
				</script>";
		}
	} 
 
	function cekadmin(){
		$ci = & get_instance();
		if ($ci->session->login_status != 'adminSI') {
			echo "
				<script>
					alert('Silahkan Login Admin terlebih dahulu');
					window.location.href='".base_url()."Auth/login/';
				</script>";
		}
	} 

	function cekPengajar(){
		$ci = & get_instance();
		if (($ci->session->login_status != 'adminSI') && ($ci->session->status != 2 )) {
			echo "
				<script>
					alert('Silahkan Login Admin atau Pengajar terlebih dahulu');
					window.location.href='".base_url()."Auth/login/';
				</script>";
		}
	}
?>