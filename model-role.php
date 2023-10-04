<?php
function selectRole() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT role_id, role_type, role_difficutly FROM `role`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
