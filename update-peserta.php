<?php

    if (isset($_POST['update'])) {
        $idPeserta = $_POST['idPeserta'];
        require_once './config/controller.php';
        $ctrlr = new Results();
        $ctrlr->selectPeserta($idPeserta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="github.com/akbardhany">
    <meta name="keywords" content="PHP Data Objects">
    <title>Update Peserta</title>
</head>
<body><tt>
<form action="./config/controller.php" method="POST">
        <fieldset style="width:50%">
            <legend>Form Peserta</legend>
            <input type="hidden" name="actionForm" value="formUpdatePeserta" />
            <table>
            <?php
                foreach ($ctrlr->selectedPeserta as $selectPeserta){
            ?>
            <input type="hidden" name="idPeserta" value="<?php echo $selectPeserta[0];?>" />
                <tr>
                    <td>Nama Peserta</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="namaPeserta" value="<?php echo $selectPeserta[1];?>" />
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <label>
                            <input type="radio" name="jkPeserta" value="Pria" <?php if($selectPeserta[2]=="Pria"){ echo "checked";}?> />Pria
                        </label>
                        <label>
                            <input type="radio" name="jkPeserta" value="Wanita" <?php if($selectPeserta[2]=="Wanita"){ echo "checked";}?> />Wanita
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td>:</td>
                    <td>
                        <select name="kategoriPeserta">
                            <option selected disabled>--Pilih Satu--</option>
                            <option value="Silver" <?php if($selectPeserta[3]=="Silver"){ echo 'selected="selected"';}?> >Silver</option>
                            <option value="Gold" <?php if($selectPeserta[3]=="Gold"){ echo 'selected="selected"';}?> >Gold</option>
                            <option value="Platinum" <?php if($selectPeserta[3]=="Platinum"){ echo 'selected="selected"';}?> >Platinum</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="UPDATE">
                        <input type="button" name="cancel" value="Cancel" onClick="window.location='./index.php';" />
                    </td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </fieldset>
    </form>
</body>
</html>

<?php
    }
?>