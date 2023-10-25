<?php
function selectChampion() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT champion_id, champion_name, champion_color FROM `champion`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectRoleByChampion($iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT r.role_id, role_type, role_difficulty, lane, damage, powerspike FROM `role` r join playstyle p on p.role_id where p.champion_id=?");
        $stmt->bind_param("i", $iid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectChampionForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT champion_id, champion_name FROM 'champion' order by champion_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectRoleForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT role_id, role_type, FROM 'role' order by role_type");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertPlayStyle($iid, $cid, $sem, $room, $time) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("");
        $stmt->bind_param("iisss", $iid, $cid, $sem, $room, $time);
        $success = $stmt->execute();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updatePlayStyle($iid, $cid, $sem, $room, $time) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("");
        $stmt->bind_param("iisssi", $iid, $cid, $sem, $room, $time, $sid);
        $success = $stmt->execute();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deletePlayStyle($sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from section where playstyle_id=?");
        $stmt->bind_param("i", $sid);
        $success = $stmt->execute();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
