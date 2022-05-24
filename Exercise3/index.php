<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add instrument</title>
</head>

<body>
    <?php include_once 'addInstrument.php'; ?>

    <h2>Add instruments</h2>

    <!-- Form -->
    <form method="POST">
        <p><input type="text" name="name" placeholder="Name"></p>
        <p><select name="type" id="type" required>
                <option value="">-- Choose an instrument --</option>
                <option value="">drum</option>
                <option value="">guitar</option>
                <option value="">bass</option>
            </select></p>
        <p><input type="text" name="price" placeholder="Price"> €</p>
        <p><input type="submit" name="submitBtn" value="Insert" id="submitBtn"></p>
    </form>

    <!-- Ajax script -->
    <script>
        document.querySelector("form").addEventListener('submit', function(event) {
            // event.preventDefault();
            let form = this;

            fetch('addInstrument.php', {
                method: 'post',
                body: new FormData(form)
            }).then(res => res.text());
        });
    </script>

</body>

</html>