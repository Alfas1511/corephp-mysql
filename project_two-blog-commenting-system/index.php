<?php require "includes/header.php"; ?>
<?php require "config.php"; ?>

<?php

if (isset($_SESSION['username'])) {
    echo "Hello, " . $_SESSION['username'];
} else {
    echo "Please sign in..";
}

$select = $conn->query("select * from posts");
$select->execute();
$rows = $select->fetchAll(PDO::FETCH_OBJ);

?>

<main class="form-signin w-50 m-auto">
    <?php foreach ($rows as $row): ?>
        <div class="card m-1">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row->title; ?></h5>
                <p class="card-text"><?php echo $row->body; ?></p>
                <a href="show.php?id=<?php echo $row->id; ?>" class="btn btn-primary">View Post</a>
            </div>
        </div>
    <?php endforeach; ?>
</main>
<?php require "includes/footer.php"; ?>