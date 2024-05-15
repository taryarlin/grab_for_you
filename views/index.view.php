<?php require('layouts/header.php'); ?>
<?php require('layouts/nav.php') ?>

    <form action="../controllers/store.php" method="POST" style="text-align: center;border: 1px solid #ccc;max-width: 300px;margin: 0 auto;padding: 20px;margin-top: 20px;border-radius: 10px;box-shadow: 0px 0px 5px #ccc;">
        <legend>Take a note</legend>

        <label>Note</label>
        <input type="text" name="body" placeholder="Submit your note..." style="padding: 5px; border: 1px solid #8b8b8b;border-radius: 4px;display: inline-block;margin-bottom: 20px;" />

        <button type="submit" style="display: inline-block;background: #8efcfc;padding: 5px 20px;border-radius: 5px;box-shadow: 0px 0px 5px #000;">Submit</button>
    </form>

<?php require('layouts/footer.php'); ?>
