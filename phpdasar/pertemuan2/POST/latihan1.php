<!-- 
    penggunaan post sama dengan penggunaan get, hanya saja data tidak dikirim menggunakan url melainkan form
    didalam form ada attribut action dan method, action digunakan untuk tujuan data dikirim, method digunakan untuk memilih method (get/post)

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>

<body>
    <form action="latihan2.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="date">Tanggal :</label>
                </td>
                <td>
                    <input type="date" name="date" id="date">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="team">Tim :</label>
                </td>
                <td>
                    <input type="team" name="team" id="team">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="mesin">Mesin :</label>
                </td>
                <td>
                    <input type="mesin" name="mesin" id="mesin">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="item">Item :</label>
                </td>
                <td>
                    <input type="item" name="item" id="item">
                </td>
            </tr>
            <tr>
                <td>
                    <button>submit</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>