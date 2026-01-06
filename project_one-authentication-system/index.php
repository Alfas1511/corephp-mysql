<?php require "includes/header.php"; ?>

<?php if (isset($_SESSION['username'])):
    echo "Hello, " . $_SESSION['username'];
else:
    echo "Please sign in..";



endif; ?>
<?php require "includes/footer.php"; ?>