<?php
class Pelanggan{
    private $koneksi;
    // akses property yang bersifat private menggunakan $this 
    public function __construct(){
    // function adalah function yang pertama kali di jalankan
        global $conn;
        $this->koneksi = $conn;
    }
    public function tampil(){
    // cetak seluruh data pelanggan menggunakan query select
        $sql = "SELECT p.*, k.nama as member 
        FROM pelanggan p inner join kartu k on k.id = p.kartu_id
        order by p.id";
    // gunakan method prepare untuk mengirim data $sql
        $ps = $this->koneksi->prepare($sql);
    // eksekusi data yang sudah di siap menggunakan method prepare
        $ps->execute();
    // siapkan data sql yang sudah di eksekusi menggunakan method fetchAll 
        $data = $ps->fetchAll();
    // kembalikan data pelanggan yang dalam bentuk array
        return $data;
    
    }
}
?>