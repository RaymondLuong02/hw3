<?php
function selectPlaystyle() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT playstyle_id, lane, powerspike, damage FROM `playstyle`");
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
