<?php 
/*
Our data set of students (array)
*/
$students = [
    ["name" => "Bob", "score" => 74, "subject" => "Science"],
    ["name" => "John", "score" => 55, "subject" => "Math"],
    ["name" => "Henry", "score" => 90, "subject" => "History"],
    ["name" => "Owen", "score" => 83, "subject" => "Music"]
];

/*
Determine if a student passes or fails
*/
function getGradeStatus($score) {
    if($score >= 50) {
        return "<span class='status-ok'>PASS</span>";
    } else {
        return "<span class='status-out'>FAIL</span>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- meta setup -->
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1, device-width=width">
        <title>Lab 1 Project</title>
        <meta name="description" content="Create a script that processes a list of students, calculates their status, and displays it safely">
        <meta name="robots" content="noindex,, nofollow">
        <!-- CSS Link-->
        <link rel="stylesheet" href="./css/style.css">
    </head>

    <body>
        <header>
            <h1>Student Grades</h1>
        </header>

        <main>
            <section class="product-grid">
                <?php if(empty($students)): ?>
                    <p>No students found.</p>

                <?php else: ?>
                    <?php foreach($students as $item): ?>
                        <div class="product-card">
                            <h3><?php echo htmlspecialchars($item['name']); ?></h3>
                            <p class="subject">Subject: <?php echo htmlspecialchars($item['subject']); ?></p>
                            <p class="score">Score: <?php echo htmlspecialchars($item['score']); ?></p>
                            <p class="status">Status: <?php echo getGradeStatus($item['score']); ?></p>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                
            </section>
        </main>

        <footer>
            <p>Total Students Evaluated: <?php echo count($students); ?></p>
            <p>&copy; <?php echo date("Y"); ?></p>
        </footer>
    </body>
</html>