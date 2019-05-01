

<script src="<?php echo BASE_URL?>assets/js/jquery-3.3.1.slim.min.js"></script>
<script src="<?php echo BASE_URL?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo BASE_URL?>assets/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo BASE_URL?>assets/js/popper.min.js"></script>
<script src="<?php echo BASE_URL?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo BASE_URL?>assets/js/feather.min.js"></script>
<script src="<?php echo BASE_URL?>assets/js/dashboard.js"></script>

<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>



<script>
//    this is the show password code.
function myFunction() {
var x = document.getElementById("password");
if (x.type === "password") {
x.type = "text";
} else {
x.type = "password";
}
}
</script>

</body>
</html>