<?php 
error_reporting(0);
include("header.php");
include("function.php");
$property = new property();
$allpropertydata = $property->getAllPropertyData();

switch($_GET['id']){
 case $_GET['id']:
  $property->deleteproperty($_GET['id']);

}
?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Properties</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Property Type</th>
                                        <th>Size sqm</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php 
								foreach($allpropertydata as $alldata)
								{
									//print_r($alldata);
								?>
                                    <tr class="odd gradeX">
                                        <td><?=$alldata['OwnerName'];?></td>
                                        <td><?=$alldata['OwnerEmail'];?></td>
                                        <td><?=$alldata['PropertyType'];?></td>
                                        <td class="center"><?=$alldata['Sizesqm'];?></td>
                                        <td class="center">
										<p style="float:left; margin-right:5px;">
                      <a href="addproperty.php?value=<?=base64_encode($alldata['ID']);?>" class="btn btn-primary btn-xs" data-title="Edit"><span class="glyphicon glyphicon-pencil"></span></a>
                    </p>
                    <p style="float:left; margin-right:5px;">
                      <button class="btn btn-danger btn-xs" onclick="deletepropertydata(<?=$alldata['ID'];?>)"data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button>
                    </p></td>
                                    </tr>
								<?php } ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
            
            <!-- /.row -->
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
</body>
<?php
include("footer.php");
?>
<script>
function deletepropertydata(id)
{

	$.ajax({
        type: 'get',
        url: 'Property.php?id='+id,        
        success: function(){
			alert("Deleted")
			location.href = "Property.php";
		}
    });
}
</script>

