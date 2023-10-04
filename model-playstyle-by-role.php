<?php
function selectPlaystylebyRole($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT r.role_id, role_type, role_difficulty, lane, damage, powerspike FROM `role` r join playstyle p on p.role_id where r.role_id=?");
        $stmt->bind_param("i", $cid);
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
