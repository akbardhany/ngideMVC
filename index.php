<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="github.com/akbardhany">
    <meta name="keywords" content="PHP Data Objects">
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
    <br />
    <fieldset style="width:50%">
        <legend>Show Data Peserta</legend>
        <table border=1>
            <tr>
                <td>Nama Peserta</td>
                <td>Gender</td>
                <td>Kategori</td>
                <td colspan="2">Action</td>
            </tr>
            <?php
                require_once './config/controller.php';
                $resCont = new Results();
                $resCont->resultsPeserta();
                foreach ($resCont->readPesertas as $readPeserta) {
            ?>
            <tr>
                <td>
                    <?php echo $readPeserta[1]; ?>
                </td>
                <td>
                    <?php echo $readPeserta[2]; ?>
                </td>
                <td>
                    <?php echo $readPeserta[3]; ?>
                </td>
                <td>
                    <form action="./update-peserta.php" method="POST">
                        <input type="hidden" name="actionForm" value="formUpdatePeserta" />
                        <input type="hidden" name="idPeserta" value="<?php echo $readPeserta[0];?>" />
                        <input type="submit" name="update" value="Update">
                    </form>
                </td>
                <td>
                    <form action="./config/controller.php" method="POST">
                        <input type="hidden" name="actionForm" value="deletePeserta" />
                        <input type="hidden" name="idPeserta" value="<?php echo $readPeserta[0];?>" />
                        <input type="submit" name="submit" value="Delete">
                    </form>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
    </fieldset>
</body>
</html>