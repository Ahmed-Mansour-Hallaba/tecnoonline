<?php  include 'header.php'; ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        اضافه منتج جديد
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
        <form id="form" method="post"  action="process/addproductproc.php" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group" style="text-align: right">
                    <label for="un">اسم المنتج</label>
                    <input  class="form-control" id="un" name="un" placeholder="اسم المنتج" required>
                </div>
                <div class="form-group" style="text-align: right">
                    نوع الفئه
                    <select name="cat" class="form-control">
                        <option></option>
                        <?php
                        $cn1=mysqli_connect(Host,UN,PW,DBname);
                        $rslt1=mysqli_query($cn1,"select *  from categories");

                        while ($arr2=mysqli_fetch_array($rslt1))
                        {
                            ?>
                            <option value="<?php echo "$arr2[0]";?>"><?php echo "$arr2[1]";?></option>

                        <?php } ?>
                    </select>
                </div>

                <div class="form-group" style="text-align: right">
                    اسم العلامه التجاريه
                    <select name="brand" class="form-control" >
                        <option></option>
                        <?php
                        $cn1=mysqli_connect(Host,UN,PW,DBname);
                        $rslt1=mysqli_query($cn1,"select *  from brands");

                        while ($arr2=mysqli_fetch_array($rslt1))
                        {
                            ?>
                            <option value="<?php echo "$arr2[0]";?>"><?php echo "$arr2[1]";?></option>

                        <?php } ?>
                    </select>
                </div>
                <div class="form-group" style="text-align: right">
                    <label for="quant">الكميه</label>
                    <input  class="form-control" id="quant" name="quant" placeholder="الكميه" required>
                </div>

                <div class="form-group" style="text-align: right">
                    <label for="price">السعر</label>
                    <input  class="form-control" id="price" name="price" placeholder="السعر" required>
                </div>

                <div class="form-group" style="text-align: right">
                    <label for="quant">الوصف</label>
                    <input   class="form-control" id="desc" name="desc" placeholder="الوصف" required>

                </div>

                <div class="form-group" style="text-align: right">
                    <label for="img">صوره المنتج</label>
                    <input type="file" name="files[]" multiple class="form-control"/>

                </div>


                <input type="submit" name="تأكيد" class="btn btn-primary"/>
            </div>
        </form>

    </div>
    </div>
</section>



</div>

<?php  include 'footer.php'; ?>

<!-- /.box -->

