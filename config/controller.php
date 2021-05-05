<?php
    include './model.php';

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
?>