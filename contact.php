<?php require "header.php"; ?>

<?php require "banner.php"; ?>

<?php require "nav.php"; ?>

<style>
    .e-mail {
        background-image: url("resources/images/fnc-bg3.jpeg");
    }
</style>

<main>

<div class="content">

<h2>contact</h2>

<div class="send-contact">

<form action="email.php" class="e-mail" method="post">
    <label for="email">E-mail:</label><br><br>
    <input type="email" name="email" id="email">

    <br><br>

    <label for="subject">Subject:</label><br><br>
    <input type="text" name="subject" id="subject">

    <br><br>

    <label for="message">Message:</label><br><br>
    <textarea name="message" id="message" cols="60" rows="20"></textarea>

    <br><br>

    <button type="submit">Submit</button>
</form>

</div>

</div>

</main>

<?php require "footer.php"; ?>