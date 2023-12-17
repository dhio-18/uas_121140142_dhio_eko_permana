<?php
class buku {
    public $konek;
    public function __construct($konek) {
        $this->konek = $konek;
    }

    public function create($data) {
        mysqli_query($this->konek,"INSERT INTO buku (judul, penulis, tahun_terbit, stok, kategori, sinopsis) VALUES ('$data[judul]','$data[penulis]','$data[tahun_terbit]','$data[stok]','$data[kategori]','$data[sinopsis]')");
        
        return 1;
    }
    public function read($id) {
        $buku = mysqli_query($this->konek,"SELECT * FROM buku WHERE id = '$id'");
        $data = mysqli_fetch_array($buku);
        return $data;
    }
}
