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
while ($playstyle = $playstyles->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $playstyle['role_id']; ?></td>
    <td><?php echo $playstyle['role_type']; ?></td>
    <td><?php echo $playstyle['role_difficulty']; ?></td>
    <td><?php echo $playstyle['lane']; ?></td>
    <td><?php echo $playstyle['damage']; ?></td>
    <td><?php echo $playstyle['powerspike']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
