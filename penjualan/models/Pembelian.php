<?php
class Pembelian{
    private $koneksi;
    // akses property yang bersifat private menggunakan $this 
    public function __construct(){
    // function adalah function yang pertama kali di jalankan
        global $conn;
        $this->koneksi = $conn;
    }
    public function tampil(){
    // cetak seluruh data pembelian menggunakan query select
        $sql = "SELECT p.*,v.nama as namaVendor FROM pembelian p
        inner join vendor v on v.id = p.vendor_id
        order by p.id";
    // gunakan method prepare untuk mengirim data $sql
        $ps = $this->koneksi->prepare($sql);
    // eksekusi data yang sudah di siap menggunakan method prepare
        $ps->execute();
    // siapkan data sql yang sudah di eksekusi menggunakan method fetchAll 
        $data = $ps->fetchAll();
    // kembalikan data pembelian yang dalam bentuk array
        return $data;
    
    }
}
?>