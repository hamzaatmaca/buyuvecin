<table class="table">
  <thead>
    <tr>
     <th scope="col">Sıra No</th>
     <th scope="col">Admin</th>
     <th scope="col">IP</th>
     <th scope="col">Tarih || Saat </th>
   </tr>
 </thead>
 <tbody>
  <?php
  while($row = mysqli_fetch_assoc($getAdmin2))
  {
    ?>
    <tr>
      <th scope="row"><?php echo $row['id'];?></th>
      <td><?php echo $row['admin'];?></td>
      <td><?php echo $row['ip'];?></td>
      <td><?php echo $row['tarih'];?></td>
    </tr>
    <?php 
  }
  ?>
</tbody>
</table>