<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngide MVC</title>
</head>
<body><tt>
    <h2>Ngide MVC</h2>

    <form action="./config/controller.php" method="POST">
        <fieldset style="width:50%">
            <legend>Form Peserta</legend>
            <input type="hidden" name="actionForm" value="formPeserta" />
            <table>
                <tr>
                    <td>Nama Peserta</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="namaPeserta" placeholder="Chloe Shaza" />
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <label>
                            <input type="radio" name="jkPeserta" value="Pria">Pria
                        </label>
                        <label>
                            <input type="radio" name="jkPeserta" value="Wanita">Wanita
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td>:</td>
                    <td>
                        <select name="kategoriPeserta">
                            <option selected disabled>--Pilih Satu--</option>
                            <option value="Silver">Silver</option>
                            <option value="Gold">Gold</option>
                            <option value="Platinum">Platinum</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="SUBMIT">
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>