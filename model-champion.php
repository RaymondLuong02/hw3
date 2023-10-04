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
?>
