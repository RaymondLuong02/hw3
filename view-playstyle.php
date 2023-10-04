<h1>Playstyle</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Lane</th>
      <th>Powerspike</th>
      <th>Damage</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($playstyles = $playstyle->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $playstyles['playstyle_id']; ?></td>
    <td><?php echo $playstyles['lane']; ?></td>
    <td><?php echo $playstyles['powerspike']; ?></td>
    <td><?php echo $playstyles['damage']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
