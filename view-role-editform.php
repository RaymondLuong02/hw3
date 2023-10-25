<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editRoleModal<?php echo $role['role_id']; ?>">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
</svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editRoleModal<?php echo $role['role_id']; ?>" tabindex="-1" aria-labelledby="editRoleModalLabel<?php echo $role['role_id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editRoleModalLabel<?php echo $role['role_id']; ?>">Edit role</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="cRole<?php echo $role['role_id']; ?>" class="form-label">Type</label>
            <input type="text" class="form-control" id="cRole<?php echo $role['role_id']; ?>" name="cRole" value="<?php echo $role['role_number']; ?>">
          </div>
          <div class="mb-3">
            <label for="cDiff<?php echo $role['role_id']; ?>" class="form-label">Difficulty</label>
            <input type="text" class="form-control" id="cDiff<?php echo $role['role_id']; ?>" name="cDiff" value="<?php echo $role['role_difficulty']; ?>">
          </div>
          <input type="hidden" name="cid" value="<?php echo $role['role_id']; ?>">
          <input type="hidden" name="actionType" value="Edit">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
