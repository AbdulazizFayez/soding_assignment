
<div class="container">
	<p>To Modify the table, please <a href='admin'>click here</a> to access admin panel.</p>
	<p>Username: admin<br>
	Password: admin</p>


<table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Date Created</th>
        <th>Date Updated</th>
      </tr>
    </thead>
    <tbody>

 <?php foreach ($soding_data as $soding_data) { ?>
 	 <tr>
        <td><?=$soding_data->id;?></td>
        <td><?=$soding_data->name;?></td>
        <td><?=$soding_data->description;?></td>
        <td><?=$soding_data->date_created;?></td>
        <td><?=$soding_data->date_updated;?></td>
      </tr>
 
 <?php }   	?>
     
     
    </tbody>
  </table>
  </div>