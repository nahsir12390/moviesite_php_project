<?php 


try {
    // Attempt to execute a simple query
    $stmt = $pdo->query("SELECT 1");
    if ($stmt) {
        echo "Database connection is successful!";
    } else {
        echo "Failed to execute test query.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

?>