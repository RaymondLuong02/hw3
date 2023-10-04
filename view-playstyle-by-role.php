<h1>Playstyle by Role</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Type</th>
      <th>Difficulty</th>
      <th>Lane</th>
      <th>Damage</th>
      <th>Powerspike</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($playstyles = $playstyle->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $playstyles['role_id']; ?></td>
    <td><?php echo $playstyles['role_type']; ?></td>
    <td><?php echo $playstyles['role_difficulty']; ?></td>
    <td><?php echo $playstyles['lane']; ?></td>
    <td><?php echo $playstyles['damage']; ?></td>
    <td><?php echo $playstyles['powerspike']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
