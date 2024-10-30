<?php
function formatTanggalIndonesia($tanggal)
{
    $bulan = [
        1 => 'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    ];

    $tanggalArray = explode('-', $tanggal);
    $tahun = $tanggalArray[0];
    $bulanIndex = (int)$tanggalArray[1];
    $hari = (int)$tanggalArray[2];

    return $hari . ' ' . $bulan[$bulanIndex] . ' ' . $tahun;
}
