<?php  include 'header.php';
?>
<head>
    <link rel="stylesheet" href="../parsley.css">
    <script src="../parsley.min.js"></script>
</head>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1 style="text-align: right">
        اضافه فئه جديده
    </h1>
</section>

<!-- Main content -->
<section class="content " style="height:710px">
    <!-- left column -->
    <div>
        <!-- general form elements -->
        <div class="box box-primary">

            <!-- /.box-header -->
            <!-- form start -->
            <form id="form" method="post"   action="process/addmcatproc.php" >
                <div class="box-body">
                    <div class="form-group" style="text-align: right">
                        <label for="cnm" >اسم الفئه</label>
                        <input  class="form-control" id="cat" name="cat" placeholder="اسم الفئه" required>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer" >
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

