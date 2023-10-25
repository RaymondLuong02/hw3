<?php
function selectRole() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT role_id, role_type, role_difficulty FROM `role`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertRole($cRole, $cDiff) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `role` (`role_type`, `role_difficulty`) VALUES (?, ?");
        $stmt->bind_param("ss", $cRole, $cDiff);
        $success = $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateRole($cRole, $cDiff, $cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `role` set `role_type` = ?, `role_difficulty`= ? where role_id = ?");
        $stmt->bind_param("ssi", $cRole, $cDiff, $cid);
        $success = $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteRole($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from role where role_id=?");
        $stmt->bind_param("i", $cid);
        $success = $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
