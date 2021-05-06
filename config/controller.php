<?php
    require_once 'model.php';

    class Results{
        public function resultsPeserta(){
            $mdl = new Model();
            $mdl->readPeserta();
            foreach ($mdl->readPeserta as $rowPeserta) {
                $this->readPesertas[] = array($rowPeserta['id_peserta'], $rowPeserta['nama_peserta'], $rowPeserta['jk_peserta'], $rowPeserta['kategori_peserta']);
            }
        }

        public function selectPeserta($idPeserta){
            $mdl = new Model();
            $mdl->selectedPeserta($idPeserta);
            foreach ($mdl->selectedPeserta as $selectPeserta) {
                $this->selectedPeserta[] = array($selectPeserta['id_peserta'], $selectPeserta['nama_peserta'], $selectPeserta['jk_peserta'], $selectPeserta['kategori_peserta']);
            }
        }
    }

    if (isset($_POST['submit'])) {
        $actionForm = $_POST['actionForm'];
        $mdl = new Model();

        switch ($actionForm) {
            case 'formPeserta':
                $namaPeserta    = $_POST['namaPeserta'];
                $jkPeserta      = $_POST['jkPeserta'];
                $kategoriPeserta= $_POST['kategoriPeserta'];

                $mdl->createPeserta($namaPeserta, $jkPeserta, $kategoriPeserta);

                break;

            case 'formUpdatePeserta':
                $idPeserta          = $_POST['idPeserta'];
                $upNamaPeserta      = $_POST['namaPeserta'];
                $upJKPeserta        = $_POST['jkPeserta'];
                $upKategoriPeserta  = $_POST['kategoriPeserta'];

                $mdl->updatePeserta($idPeserta, $upNamaPeserta, $upJKPeserta, $upKategoriPeserta);

                break;

            case 'deletePeserta':
                $idPeserta = $_POST['idPeserta'];

                $mdl->deletePeserta($idPeserta);
                break;
            
            default:
                echo "switch error";
                break;
        }
    }
?>