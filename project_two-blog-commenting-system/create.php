<?php require "includes/header.php"; ?>

<?php require "config.php"; ?>

<?php

if (isset($_POST['submit'])) {
    if ($_POST['title'] == '' or $_POST['body'] == '') {
        echo 'All input fields are mandatory!';
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $username = $_SESSION['username'];

        $insert = $conn->prepare("Insert into posts(title, body, username) values(:title, :body, :username)");

        $insert->execute([
            ':title' => $title,
            ':body' => $body,
            ':username' => $username,
        ]);
        echo "Data inserted successfully";
    }
}


?>

<main class="form-signin w-50 m-auto">
    <form method="POST" action="create.php">
        <h1 class="h3 mt-5 fw-normal text-center">Create Comment</h1>
        <div class="form-floating">
            <input type="text" class="form-control" id="title" placeholder="Title.." name="title">
            <label for="title">Title</label>
        </div>
        <br>

        <div class="form-floating">
            <textarea name="body" id="body" class="form-control" placeholder="body.."></textarea>
            <label for="body">Body</label>
        </div>
        <br>

        <button name="submit" class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
    </form>
</main>

<?php require "includes/footer.php"; ?>