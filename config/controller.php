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
    }
?>