  <div><ul class="breadcrumb">
        <li>
            <a href="#">Admin</a>
        </li>
        <li>
            <a href="#">Shift</a>
        </li>
    </ul>
</div>
 <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-align-justify"></i>Shift</h2>

       
    </div>
    <div class="box-content">
   
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
  <?php
$query=mysql_query("select * from shift");
		echo "<p align='right'><input type='button' value='Input Data shift' class='btn btn-primary' onclick=\"window.location.href='admin.php?page2=tambah_shift';\"><br><br>

    <tr>
       <th>Kode shift</th>
		<th>Nama shift</th>
		<th>Jam Masuk</th>
		<th>Jam Keluar</th>
		<th>Aksi</th>
    </tr>
    <tbody>";
	while($data=mysql_fetch_array($query))
	{
		echo "
    <tr>
					<td>$data[id_shift]</td>
					<td>$data[shift]</td>
					<td>$data[jam_masuk]</td>
					<td>$data[jam_keluar]</td>
        <td class='center'>
            
            <a class='btn btn-info' href='admin.php?page2=edit_shift&&id_shift=$data[id_shift]'>
                <i class='glyphicon glyphicon-edit icon-white'></i>
                Edit
            </a>
            <a class='btn btn-danger' href='admin.php?page2=delete_shift&&id_shift=$data[id_shift]'>
                <i class='glyphicon glyphicon-trash icon-white'></i>
                Delete
            </a>
        </td>
    </tr>
   
	";}?>
   
    
   
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->