<?php
    class siswa{
        public $nama = "abdulloh";
        public $kelas = "XI";
        protected $jurusan = "PPLG";
        private $nis = "2122.5.001";
        function tampilkandatasiswa(){
            echo "nama : $this->nama<br>";
            echo "kelas : $this->kelas<br>";
            echo "jurusan : $this->jurusan<br>";
            echo "nis : $this->nis";
        }
    }

    class rpl extends siswa{

    }

    $siswa = new siswa();
    $siswa->tampilkandatasiswa();
?>