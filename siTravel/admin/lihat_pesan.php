  <div><ul class="breadcrumb">
        <li>
            <a href="#">Admin</a>
        </li>
        <li>
            <a href="#">Pesan</a>
        </li>
    </ul>
</div>
 <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-inbox"></i> Pesan Masuk</h2>

       
    </div>
    <div class="box-content">
   
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
  <?php
$query=mysql_query("select * from contactus");
		echo "
				<th>Subjek</th>
				<th>Email</th>
				<th>Tanggal</th>
		<th>Aksi</th>
    </tr>
    <tbody>";
	while($data=mysql_fetch_array($query))
	{
		echo "
    <tr>
					<td>$data[subjek]</td>
					<td>$data[email]</td>
					<td>$data[tgl]</td>
        <td class='center'>
            
            <a class='btn btn-info' href='admin.php?page2=isi_pesan&&kode=$data[kode]'>
                <i class='glyphicon glyphicon-zoom-in icon-white'></i>
                Lihat Selengkapnya
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