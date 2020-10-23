<?php  include 'header.php'; ?>

<!-- Content Header (Page header) -->
<section class="content-header" style="text-align: center">
    <h1 >
اضافه علامه تجاريه جديده
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
            <form id="form" method="post"   action="process/addscatproc.php" >
                <div class="box-body">
                    <div class="form-group" style="text-align: right">
                        <label for="cnm">اسم العلامه التجاريه</label>
                        <input  class="form-control" id="cat" name="cat" placeholder="اسم العلامه التجاري " required>
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

