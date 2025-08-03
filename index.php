<?php
include("db.php");

// Add Task
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["task"])) {
    $task = trim($_POST["task"]);
    if (!empty($task)) {
        $stmt = $conn->prepare("INSERT INTO tasks (task) VALUES (?)");
        $stmt->bind_param("s", $task);
        $stmt->execute();
        $stmt->close();
    }
    header("Location: index.php");
    exit();
}

// Delete Task
if (isset($_GET["delete"])) {
    $id = $_GET["delete"];
    $stmt = $conn->prepare("DELETE FROM tasks WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    header("Location: index.php");
    exit();
}

// Mark Complete
if (isset($_GET["complete"])) {
    $id = $_GET["complete"];
    $stmt = $conn->prepare("UPDATE tasks SET completed = 1 WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    header("Location: index.php");
    exit();
}

// Get all tasks
$result = $conn->query("SELECT * FROM tasks ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Todo List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="todo">
        <div class="header">Todo List</div>

        <form method="POST" class="input-container">
            <input type="text" name="task" id="task-input" placeholder="Enter a task" required>
            <button type="submit" id="add-task-btn">Add</button>
        </form>

        <div class="desc">
            <ul class="list" id="task-list">
                <?php while ($row = $result->fetch_assoc()): ?>
                    <li class="task <?php echo $row["completed"] ? 'completed-task' : 'dark-green'; ?>">
                        <label><?php echo htmlspecialchars($row["task"]); ?></label>
                        <div>
                            <?php if (!$row["completed"]): ?>
                                <a class="complete-btn" href="index.php?complete=<?php echo $row['id']; ?>" onclick="return confirm('Mark as complete?')">Complete</a>
                            <?php endif; ?>
                            <a class="delete-btn" href="index.php?delete=<?php echo $row['id']; ?>" onclick="return confirm('Delete this task?')">Delete</a>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
</body>
</html>
