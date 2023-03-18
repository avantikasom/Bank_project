<?php 
    $con = new mysqli('localhost','root','','mybank');
    $ar = $con->query("Select * from useraccounts,branch where id = '$_SESSION[cnic]' AND userAccounts.branch = branch.branchId");
    $userData = $ar->fetch_assoc();
?>
<script type="text/javascript">
	$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>