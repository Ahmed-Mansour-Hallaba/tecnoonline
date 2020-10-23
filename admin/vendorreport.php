<?php include "header.php";?>
<section class="content-header">
    <h1 style="text-align: right">
        طلبات التجار
    </h1>
</section>

<section class="content" >
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th style="text-align: center">اسم التاجر</th>
                            <th style="text-align: center">مجموع مبيعاته</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $cn1=mysqli_connect(Host,UN,PW,DBname);

                        $rslt1=mysqli_query($cn1,"call getVendorsReport()");
                        while($arr1=mysqli_fetch_array($rslt1))
                        {


                            ?>
                            <tr>
                                <td><?php echo "$arr1[0]"; ?></td>
                                <td><?php echo "$arr1[2]ريال سعودي"; ?></td>

                            </tr>
                        <?php }?>
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
<!-- Bootstrap 3.3.7 -->
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<!-- AdminLTE App -->
<!-- AdminLTE for demo purposes -->
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>
</div>

<?php  include 'footer.php'; ?>
