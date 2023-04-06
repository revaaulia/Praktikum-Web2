<?php
class Pesanan{
    private $koneksi;
    // akses property yang bersifat private menggunakan $this 
    public function __construct(){
        // function adalah function yang pertama kali di jalankan
        global $conn;
        $this->koneksi = $conn;
    }
    public function tampil(){
    // cetak seluruh data pesanan menggunakan query select
        $sql = "SELECT p.*, pe.nama as namaPelanggan
        FROM pesanan p inner join pelanggan pe on pe.id = p.pelanggan_id";
    // gunakan method prepare untuk mengirim data $sql
        $ps = $this->koneksi->prepare($sql);
    // eksekusi data yang sudah di siap menggunakan method prepare
        $ps->execute();
    // siapkan data sql yang sudah di eksekusi menggunakan method fetchAll 
        $data = $ps->fetchAll();
    // kembalikan data pesanan yang dalam bentuk array
        return $data;
    
    }
}
?>