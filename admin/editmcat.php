<?php  include 'header.php';
if (!isset($_GET["cnm"])) header("location:addmcat.php");
else $cnm=$_GET["cnm"];
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        تعديل فئه
    </h1>
</section>

<!-- Main content -->
<section class="content " style="height:710px">
    <!-- left column -->
    <div class="col-md-10 col-lg-offset-1">
        <!-- general form elements -->
        <div class="box box-primary">

            <!-- /.box-header -->
            <!-- form start -->
            <form id="form" method="post"   action="process/editmcatproc.php" >
                <div class="box-body">
                    <div class="form-group">
                        <label for="cid">رقم الفئه</label>
                        <input readonly value="<?php echo $cnm; ?>" class="form-control" id="cid" name="cid"  >
                    </div>
                    <div class="form-group">
                        <label for="cnm">اسم الفئه</label>
                        <input  class="form-control" id="cat" name="cat" placeholder="اسم الفئه" required>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary">تأكيد</button>
                </div>
            </form>
            <script>
                $('#form').parsley();
            </script>
        </div>
    </div>
</section>

</div>

<?php  include 'footer.php'; ?>



<!-- /.box -->

