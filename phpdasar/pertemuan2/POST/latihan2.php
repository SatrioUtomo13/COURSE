<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Tim</th>
                    <th scope="col">Mesin</th>
                    <th scope="col">Item</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $_POST["date"]; ?></td>
                    <td><?= $_POST["team"]; ?></td>
                    <td><?= $_POST["mesin"]; ?></td>
                    <td><?= $_POST["item"]; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>