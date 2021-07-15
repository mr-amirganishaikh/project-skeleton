<?php
	if (!isset($page)) {
		$page = NULL;
	}
?>

</body>

<!-- common scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="<?php echo JS_PATH ?>/common.js"></script>

<!-- page specific scripts -->
<?php
switch($page) {
	case 'home':
	echo '
<script src="'.JS_PATH.'/home.js"></script>
	';
	break;
}
?>

</html>