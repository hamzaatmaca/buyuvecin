<table class="table">
  <thead>
    <tr>
     <th scope="col">Sıra No</th>
     <th scope="col">IP</th>
     <th scope="col">Tarih || Saat </th>
     <th scope="col">Şehir </th>
     <th scope="col">Ülke </th>
   </tr>
 </thead>
 <tbody>
  <?php
  while($row = mysqli_fetch_assoc($result))
  {
   
    $url = "http://ip-api.com/json/".$row['ip'];
    $content = file_get_contents($url);
    $json = json_decode($content,true);
     
    ?>
    <tr>
      <th scope="row"><?php echo $row['id'];?></th>
      <td><?php echo $row['ip'];?></td>
      <td><?php echo $row['tarih'];?></td>
      <td><?php echo $json["city"];;?></td>
      <td><?php echo $json["country"];?></td>
    </tr>
    <?php 
  }
  ?>
</tbody>
</table>