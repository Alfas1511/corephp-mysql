<?php require "includes/header.php"; ?>
<?php require "config.php"; ?>

<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $single_post = $conn->query("SELECT * from posts where id=$id");
    $single_post->execute();
    $post = $single_post->fetch(PDO::FETCH_OBJ);
}

?>

<div class="card w-75 mx-auto mt-5">
    <div class="card-body">
        <h5 class="card-title"><?php echo $post->title; ?></h5>
        <hr>
        <p class="card-text"><?php echo $post->body; ?></p>
        <!-- <a href="#" class="btn btn-primary">Button</a> -->
    </div>
</div>

<?php require "includes/footer.php"; ?>