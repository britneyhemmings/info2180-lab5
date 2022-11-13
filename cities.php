<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>District</th>
      <th>Population</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($results as $row): ?>
  <tr>
    <td><?= $row['name']; ?></td>
    <td><?= $row['district']; ?></td>
    <td><?= $row['population']; ?></td>
  </tr>
 <?php endforeach; ?>
 </tbody>
</table>