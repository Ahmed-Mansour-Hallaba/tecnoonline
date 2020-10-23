<?php  include 'header.php'; ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 style="text-align: right">
            اضافه مدير جديد
        </h1>
    </section>

    <!-- Main content -->
    <section class="content " style="height:710px">
            <!-- left column -->
            <div ">
                <!-- general form elements -->
                <div class="box box-primary">

                    <!-- /.box-header -->
                    <!-- form start -->
                    <form id="form" method="post"   action="process/addadminproc.php" enctype="multipart/form-data" data-parsley-validate="">
                        <div class="box-body">
                            <div class="form-group"  style="text-align: right">
                                <label for="un">اسم المستخدم</label>
                                <input  class="form-control" id="un" name="un" placeholder="اسم المستخدم" required>
                            </div>
                            <div class="form-group" style="text-align: right">
                                <label for="pw" >كلمه المرور</label>
                                <input type="password" class="form-control" id="pw" name="pw" placeholder="كلمه المرور" required>
                            </div>
                            <div class="form-group" style="text-align: right">
                                <label for="fname" >الاسم كامل</label>
                                <input  class="form-control" id="fname" name="fname" placeholder="الاسم كامل" required>
                            </div>

                            <div class="form-group" style="text-align: right">
                                <label for="mob" >تليفون</label>
                                <input  class="form-control" id="mob" name="mob" placeholder="تليفون"  required data-parsley-pattern="05\d{8}">
                            </div>
                            <div class="form-group" style="text-align: right">
                                <label for="address">العنوان</label>
                                <input  class="form-control" id="address" name="address" placeholder="العنوان" required>
                            </div >
                            <div class="form-group"  style="text-align: right">
                                <label for="img" style="float:right ">صوره المدير</label>
                                <br>
                                <input type="file" id="img" name="img" style="float: right" accept="image/*">

                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <input type="submit" name="submit" class="btn btn-primary" value="تسجيل">
                        </div>
                        <script>
                            $(function(){
                                $('.parsley-validate').parsley();
                            })
                        </script>
                    </form>

                    </div>
            </div>
    </section>



</div>

<?php  include 'footer.php'; ?>

                <!-- /.box -->

