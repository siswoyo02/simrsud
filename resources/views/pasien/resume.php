<title>Ringkasan</title>
<?php
// include("../koneksi/konek.php");
// $date_now=gmdate('d-m-Y',mktime(date('H')+7));
// $jam = date("G:i:s");

// //$userId = $_SESSION['userId'];
// $sqlPeg = "SELECT p.id, p.nama FROM b_ms_pegawai p WHERE p.id = '".$_REQUEST['userId']."'";
// $rsPeg = mysql_query($sqlPeg);
// $rwPeg = mysql_fetch_array($rsPeg);

// $sqlPas = "SELECT k.id AS kunjungan_id,k.kso_id, pl.id AS pelayanan_id, p.nama, p.sex, k.umur_thn, p.no_rm,
// kso.nama_peserta, (SELECT nama FROM b_ms_kso WHERE id = k.kso_id) AS perusahaan,
// kso.st_anggota, kso.no_anggota, (SELECT agama FROM b_ms_agama WHERE id = p.agama) AS agama,
// DATE_FORMAT(k.tgl,'%d-%m-%Y') AS tgl, (SELECT nama FROM b_ms_pekerjaan WHERE id = p.pekerjaan_id) AS pekerjaan, 
// DATE_FORMAT(k.tgl_pulang,'%d-%m-%Y') AS tgl_pulang, p.alamat,
// (SELECT nama FROM b_ms_pegawai WHERE id = t.user_id) AS dokterMerawat,
// (SELECT nama FROM b_ms_pegawai WHERE id = pl.dokter_id) AS dokterPengirim,
// (SELECT nama FROM b_ms_kamar WHERE id = k.kamar_id) AS kamar,
// (SELECT nama FROM b_ms_kelas WHERE id = k.kelas_id) AS kelas,
// (SELECT keadaan_keluar FROM b_pasien_keluar WHERE kunjungan_id=k.id) AS keadaan_keluar
// FROM b_ms_pasien p
// INNER JOIN b_kunjungan k ON k.pasien_id = p.id
// INNER JOIN b_ms_kso_pasien kso ON kso.pasien_id = p.id
// INNER JOIN b_pelayanan pl ON pl.kunjungan_id = k.id
// INNER JOIN b_ms_unit u ON u.id = pl.unit_id
// left JOIN b_tindakan t ON t.pelayanan_id = pl.id
// WHERE p.id = '".$_REQUEST['idPasien']."' AND k.id = '".$_REQUEST['idKunj']."' AND pl.id = '".$_REQUEST['idPel']."'";
// //echo $sqlPas."<br>";
// $rsPas = mysql_query($sqlPas);
// $rwPas = mysql_fetch_array($rsPas);

// $sql="SELECT nama FROM b_tindakan_kamar WHERE pelayanan_id='".$_REQUEST['idPel']."'";
// $rsKamar=mysql_query($sql);
// $rwkamar=mysql_fetch_array($rsKamar);
/*
INNER JOIN b_ms_tindakan_kelas tk ON tk.id = t.ms_tindakan_kelas_id
inner join b_ms_tindakan mt on tk.ms_tindakan_id = mt.id*/
?>
<div align="center">
    <table width="950" border="0" cellpadding="0" cellspacing="0">
        <tr height="20">
            <td width="20%" align="center" >RSUD<br />TUBAN</td>
            <td width="50%" align="center" ><b>RINGKASAN PASIEN PULANG</b></td>
            <td width="50%" align="left" style="border-top:1px solid; border-left:1px solid; border-bottom:1px solid; border-right:1px solid;font-size: 14px; font-weight: bold">
                <br><i>No.RM    :</i></br>
                <br><i>Nama     :</i></br>
                <br><i>Tgl.Lahir:</i></br>
                <br><i>Ruang    :</i></br>
                <br><i>Kelas    :</i></br>
        </td>
        </tr>
        <!-- <tr>
            <td colspan="3">
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tr height="30">
                        <td width="3%" style="border-left:1px solid; border-bottom:1px solid;">&nbsp;</td>
                        <td width="45%" style="border-bottom:1px solid;font-size: 13px; font-weight: bold">&nbsp;Nama Pasien&nbsp;:&nbsp;&nbsp;&nbsp;<b><?php echo $rwPas['nama'];?></b></td>
                        <td width="25%" style="border-bottom:1px solid;font-size: 13px; font-weight: bold">&nbsp;( <?php echo $rwPas['sex'];?> )&nbsp;Umur&nbsp;:&nbsp;<?php echo $rwPas['umur_thn'];?>&nbsp;tahun</td>
                        <td width="25%" style="border-bottom:1px solid;font-size: 13px; font-weight: bold">&nbsp;NO RM&nbsp;:&nbsp;<?php echo $rwPas['no_rm'];?></td>
                        <td width="2%" style="border-bottom:1px solid; border-right:1px solid;font-size: 13px; font-weight: bold">&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tr style="font-size: 13px; ">
                        <td width="1%" style="border-left:1px solid;">&nbsp;</td>
                        <td width="20%">&nbsp;Nama Peserta</td>
                        <td width="30%">:&nbsp;<?php if ($rwPas['kso_id']!=1) echo $rwPas['nama_peserta'];?></td>
                        <td width="23%">&nbsp;Nama Perusahaan</td>
                        <td width="25%">:&nbsp;<?php echo $rwPas['perusahaan'];?></td>
                        <td width="1%" style="border-right:1px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:1px solid;">&nbsp;</td>
                        <td>&nbsp;Hubungan Keluarga</td>
                        <td>:&nbsp;<?php if ($rwPas['kso_id']!=1) echo $rwPas['st_anggota'];?></td>
                        <td>&nbsp;No. Asuransi</td>
                        <td>:&nbsp;<?php echo $rwPas['no_anggota'];?></td>
                        <td style="border-right:1px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:1px solid;">&nbsp;</td>
                        <td>&nbsp;Agama</td>
                        <td>:&nbsp;<?php echo $rwPas['agama'];?></td>
                        <td>&nbsp;Tanggal Masuk</td>
                        <td>:&nbsp;<?php echo $rwPas['tgl'];?></td>
                        <td style="border-right:1px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:1px solid;">&nbsp;</td>
                        <td>&nbsp;Pekerjaan</td>
                        <td>:&nbsp;<?php echo $rwPas['pekerjaan'];?></td>
                        <td>&nbsp;Tgl. Keluar/Meninggal</td>
                        <td>:&nbsp;<?php echo $rwPas['tgl_pulang'];?></td>
                        <td style="border-right:1px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:1px solid;">&nbsp;</td>
                        <td>&nbsp;Alamat</td>
                        <td>:&nbsp;<?php echo $rwPas['alamat'];?></td>
                        <td>&nbsp;Dokter yang merawat</td>
                        <td>:&nbsp;<?php echo $rwPas['dokterMerawat'];?></td>
                        <td style="border-right:1px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:1px solid;">&nbsp;</td>
                        <td>&nbsp;Dokter Pengirim</td>
                        <td>:&nbsp;<?php echo $rwPas['dokterPengirim'];?></td>
                        <td>&nbsp;Dokter Konsultan</td>
                        <td>:&nbsp;</td>
                        <td style="border-right:1px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:1px solid; border-bottom:1px solid;">&nbsp;</td>
                        <td style="border-bottom:1px solid;">&nbsp;Nama Kamar</td>
                        <td style="border-bottom:1px solid;">:&nbsp;<?php echo $rwKamar['nama'];?></td>
                        <td style="border-bottom:1px solid;">&nbsp;Nomor Kamar</td>
                        <td style="border-bottom:1px solid;">:&nbsp;<span style="padding-left: 60px" />Kelas&nbsp;:&nbsp;<?php echo $rwPas['kelas'];?></td>
                        <td style="border-right:1px solid; border-bottom:1px solid;">&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="3">&nbsp;</td>
        </tr> -->
        <tr>
            <td colspan="3">
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tr style="font-size: 13px; ">
                        <td width="7%" style="border-left:2px solid; border-top:2px solid;">&nbsp;</td>
                        <td width="27%" style="border-top:2px solid;">&nbsp;</td>
                        <td width="3%" style="border-top:2px solid;">&nbsp;</td>
                        <td width="63%" style="border-top:2px solid; border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Tgl Masuk :</td>
                        <td align="right"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Tgl Keluar :</td>
                        <td align="left"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <!-- <tr style="font-size: 13px; ">
                        <td style="border-left:1px solid; border-bottom:1px solid;">&nbsp;</td>
                        <td style="border-bottom:1px solid;">&nbsp;Nama Kamar</td>
                        <td style="border-bottom:1px solid;">:</td>
                        <td style="border-bottom:1px solid;">&nbsp;Nomor Kamar</td>
                        <td style="border-bottom:1px solid;">:</td>
                        <td style="border-right:1px solid; border-bottom:1px solid;">&nbsp;</td>
                    </tr> -->
                    <tr style="font-size: 13px; ">
                        <td width="7%" style="border-left:2px solid; border-top:2px solid;">&nbsp;</td>
                        <td width="27%" style="border-top:2px solid;">&nbsp;</td>
                        <td width="3%" style="border-top:2px solid;">&nbsp;</td>
                        <td width="63%" style="border-top:2px solid; border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>Diagnosa Masuk</td>
                        <td align="left">:</td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Indikasi Rawat</td>
                        <td align="left">:</td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Diagnosa Keluar</td>
                        <td align="left">:</td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td></td>
                        <td align="left">:</td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>Komplikasi</td>
                        <td align="left">:</td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Komorbid</td>
                        <td align="left">:</td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Tindakan/Operasi</td>
                        <td align="left">:</td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td></td>
                        <td align="left">:</td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td width="7%" style="border-left:2px solid; border-top:2px solid;">&nbsp;</td>
                        <td width="27%" style="border-top:2px solid;">&nbsp;</td>
                        <td width="3%" style="border-top:2px solid;">&nbsp;</td>
                        <td width="63%" style="border-top:2px solid; border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td><b>Anamnesa</b></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td> * Keluhan Utama</td>
                        <td align="center">:</td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td> * Gejala Penyerta</td>
                        <td align="center">:</td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td> * Riwayat Penyakit Dahulu</td>
                        <td align="center">:</td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td><b></b></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td><b>Temuan Penting</b></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td> * Pemeriksaan Fisik</td>
                        <td align="center">:</td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td> * Pemeriksaan penunjang</td>
                        <td align="center">:</td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td> * Laboratorium</td>
                        <td align="center">:</td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td> * Pencitraan Diagnostik</td>
                        <td align="center">:</td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td> * Lainnya</td>
                        <td align="center">:</td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Konsultasi</td>
                        <td align="center">:</td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>Obat Selama Rawat</td>
                        <td align="center">:</td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td></td>
                        <td align="center">:</td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Kondisi Saat Pulang</td>
                        <td align="center">:</td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>Obat Pulang</td>
                        <td align="center">:</td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td></td>
                        <td align="center">:</td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td><u><b>Instruksi Lanjut</b></u></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>* Kontrol Ulang</td>
                        <td align="center">:</td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>* Segera Bawa ke RS Bila</td>
                        <td align="center">:</td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;" height="50%">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <!-- <table width="200" border="0" cellpadding="0" cellspacing="0" align="left">
                        <tr>
                            <td colspan="30" id="tanda_vital">
                                <fieldset class="kotak">
                                
                                </fieldset>
                            </td>
                        </tr>
                    </table> -->
                    <tr style="font-size: 13px; ">
                        <td colspan="4" style="border-left:2px solid; border-right:2px solid;">
                            <table width="50%" align="center" border="0" cellpadding="0" cellspacing="0">
                                <tr style="font-size: 13px; ">
                                    <td width="50%" align="center">Pasien / Keluarga Pasien</td>
                                    <td width="40%">&nbsp;</td>
                                    <td width="30%">Tuban,........................ Jam :&nbsp;<br />Dokter yang merawat</td>
                                    <!-- <td width="30%">Tuban,&nbsp;<?php echo $date_now;?><br />Dokter yang merawat</td> -->
                                </tr>
                                <tr style="font-size: 13px; ">
                                    <td height="50%">&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr style="font-size: 13px; ">
                                    <td style="padding-top: 60px" align="center">
                                        (<span style="padding-left: 120px" />)
                                    </td>
                                    <td>&nbsp;</td>
                                    <td align="left" style="padding-left: 20px; padding-top: 60px">
                                        (<span style="padding-left: 120px" />)
                                    </td>
                                </tr>
                                <td width="0%" align="center">Tanda Tangan dan Nama</td>
                                <td width="0%">&nbsp;</td>
                                <td width="0%" align="left">Tanda Tangan dan Nama</td>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
        
        <tr>
            <td colspan="4" style="border-left:2px solid; border-bottom:2px solid; border-right:2px solid;">&nbsp;</td>
        </tr>
        <tr id="trTombol">
            <td colspan="4" class="noline" align="center">
                <input id="btnPrint" type="button" value="Print/Cetak" onClick="cetak(document.getElementById('trTombol'));"/>
                <input id="btnTutup" type="button" value="Tutup" onClick="window.close();"/>
            </td>
        </tr>
    </table>
	<script type="text/JavaScript">

        function cetak(tombol){
            tombol.style.visibility='collapse';
            if(tombol.style.visibility=='collapse'){
                if(confirm('Anda Yakin Mau Mencetak Resume Medis Pasien ?')){
                    setTimeout('window.print()','1000');
                    setTimeout('window.close()','2000');
                }
                else{
                    tombol.style.visibility='visible';
                }

            }
        }
    </script>
</div>
<?php 
// mysql_close($konek);
?>