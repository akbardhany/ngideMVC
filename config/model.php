<?php
    require 'database.php';

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

        public function readPeserta(){
            $db = new DB();
            $conn = $db->Connect();

            try {

                $this->readPeserta = $conn->query("SELECT id_peserta, nama_peserta, jk_peserta, kategori_peserta FROM Peserta ORDER BY id_peserta DESC")->fetchAll();

            } catch (PDOException $e) {
                echo $this->readPeserta."<br />".$e->getMessage();
            }

            $conn = $db->Close();
        }

        public function selectedPeserta($idPeserta){
            $db = new DB();
            $conn = $db->Connect();

            try {

                $this->selectedPeserta = $conn->query("SELECT id_peserta, nama_peserta, jk_peserta, kategori_peserta FROM Peserta WHERE id_peserta=$idPeserta")->fetchAll();

            } catch (PDOException $e) {
                echo $this->selectedPeserta."<br />".$e->getMessage();
            }

            $conn = $db->Close();
        }

        public function updatePeserta($idPeserta, $upNamaPeserta, $upJKPeserta, $upKategoriPeserta){
            $db = new DB();
            $conn = $db->Connect();

            try {

                $updatePeserta = "UPDATE Peserta SET nama_peserta='$upNamaPeserta', jk_peserta='$upJKPeserta', kategori_peserta='$upKategoriPeserta' WHERE id_peserta=$idPeserta";
                $conn->exec($updatePeserta);
                echo "<script>alert('Data Peserta $upNamaPeserta telah diperbarui');window.location='../index.php'</script>";
  
            } catch (PDOException $e) {
                echo $updatePeserta."<br />".$e->getMessage();
            }

            $conn = $db->Close();
        }

        public function deletePeserta($idPeserta){
            $db = new DB();
            $conn = $db->Connect();

            try {

                $deletePeserta = "DELETE FROM Peserta WHERE id_peserta = $idPeserta";
                $conn->exec($deletePeserta);
                echo "<script>alert('Data Peserta $idPeserta telah terhapus');window.location='../index.php'</script>";
            
            } catch (PDOException $e) {
                echo $deletePeserta."<br />".$e->getMessage();
            }

            $conn = $db->Close();
        }
    }
?>