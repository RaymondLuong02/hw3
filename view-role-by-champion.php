<h1>Role by Champion</h1>
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
while ($roles = $role->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $roles['role_id']; ?></td>
    <td><?php echo $roles['role_type']; ?></td>
    <td><?php echo $roles['role_difficulty']; ?></td>
    <td><?php echo $roles['lane']; ?></td>
    <td><?php echo $roles['damage']; ?></td>
    <td><?php echo $roles['powerspike']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
