<h1>Champions</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Color</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($champions = $champion->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $champions['champion_id']; ?></td>
    <td><?php echo $champions['champion_name']; ?></td>
    <td><?php echo $champions['champion_color']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
