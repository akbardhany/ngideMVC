<?php
    include './database.php';

    class Model{
        public function createPeserta($namaPeserta, $jkPeserta, $kategoriPeserta){
            $db = new DB();
            $conn = $db->Connect();

            try {
                
                $createPeserta = "INSERT INTO Peserta (nama_peserta, jk_peserta, kategori_peserta) VALUES ('$namaPeserta', '$jkPeserta', '$kategoriPeserta')";
                $conn->exec($createPeserta);
                echo "<script>alert('Data Peserta $namaPeserta telah ditambahkan');window.location='../index.php'</script>";

            } catch (PDOException $e) {
                echo $createPeserta."<br />".$e->getMessage();
            }

            $conn = $db->Close();
        }
    }
?>