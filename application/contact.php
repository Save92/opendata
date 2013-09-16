<?php require_once('header.php'); ?>

<article>
    <header>
        <h1>Contact</h1>
    </header>
    <div class="body">
        <form method="post" action="send.php">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required />

            <label for="subject">Sujet</label>
            <input type="text" id="subject" name="subject" required />

            <textarea name="message" required></textarea>

            <input type="submit" value="Envoyer" />
        </form>
    </div>
</article>

<?php require_once('footer.php'); ?>