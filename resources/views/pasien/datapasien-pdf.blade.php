<title>Riwayat Pasien Pulang</title>

<div align="center">
    <table width="550" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td colspan="0">
                <table width="550" border="0" cellpadding="0" cellspacing="10">
                <tr>
                <td height="50" colspan="4" align="centestyle"="font-size:16px">
                    <div align="center"><b>PEMERINTAH KABUPATEN TUBAN<br />
                        <img style="position:absolute; margin-left:-10px; left: 26px; top: 0px;" src="public/gambar/logotuban.png" width="65" height="92" align="absmiddle">Rumah Sakit Umum Daerah "Dr. R. KOESMA" Tuban<br />
                                    Jl. Dr. Wahidin Sudiro Husodo no 800 Tuban Telepon (0356) 321010, 325696<br/>
                                    <b>Riwayat Pasien Pulang<br /></b>
                    </div>
                </td>
                 </tr>
                </table>
                <table width="100%" border="0" cellpadding="1" cellspacing="0">
                    
                    <tr style="font-size: 15px; ">
                            <td width="0%" style="border-left:2px solid; border-top:2px solid;">&nbsp;</td>
                            <td width="0%" style="border-top:2px solid;">&nbsp;</td>
                            <td width="0%" style="border-top:2px solid;">&nbsp;</td>
                            <td width="0%" style="border-top:2px solid; border-right:2px solid;">&nbsp;</td>
                        </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>No.Rm </td>
                        <td>:&nbsp;<?php echo $pasplg["no_rm"];?></td>
                        <td align="left"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Nama </td>
                        <td>:&nbsp;<?php echo $pasplg["nama"];?></td>
                        <td align="left"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;">&nbsp;</td>
                        <td>Tgl Lahir</td>
                        <td>:&nbsp;<?php echo $pasplg["tgllahir"];?></td>
                        <td>&nbsp;Jenis Kelamin : <?php echo $pasplg["jeniskelamin"];?></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>Ruang </td>
                        <td>:&nbsp;<?php echo $pasplg["ruang"];?></td>
                        <td align="left"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>Kelas :</td>
                        <td>:&nbsp;<?php echo $pasplg["kelas"];?></td>
                        <td align="left"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td width="0%" style="border-left:2px solid; border-top:2px solid;">&nbsp;</td>
                        <td width="0%" style="border-top:2px solid;">&nbsp;</td>
                        <td width="0%" style="border-top:2px solid;">&nbsp;</td>
                        <td width="0%" style="border-top:2px solid; border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;">&nbsp;</td>
                        <td>Tgl Masuk</td>
                        <td>:&nbsp;<?php echo $pasplg["tglmasuk"];?></td>
                        <td>&nbsp;Dokter yang merawat : <?php echo $pasplg["doktermerawat"];?></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Tgl Keluar</td>
                        <td>:&nbsp;<?php echo $pasplg["tglkeluar"];?></td>
                        <!-- <input type="text" name="tglkeluar" value="{{$pasplg->tglkeluar}}"> -->
                        <td align="left"></td>
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
                        <td>Diagnosa Masuk </td>
                        <td>:&nbsp;<?php echo $pasplg["diagnosamasuk"];?></td>
                        <td align="left"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Indikasi Rawat </td>
                        <td>:&nbsp;<?php echo $pasplg["indikasirawat"];?></td>
                        <td align="left"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Diagnosa Keluar </td>
                        <td>:&nbsp;<?php echo $pasplg["diagnosakeluar"];?></td>
                        <td align="left"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td> </td>
                        <td>&nbsp;</td>
                        <td>&nbsp;Kode ICD-10 : <?php echo $pasplg["kodeicd_10"];?></td>
                        <!-- <td align="left"></td> -->
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>Komplikasi </td>
                        <td>:&nbsp;<?php echo $pasplg["komplikasi"];?></td>
                        <td align="left"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Komorbid </td>
                        <td>:&nbsp;<?php echo $pasplg["komorbid"];?></td>
                        <td align="left"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Tindakan/Operasi </td>
                        <td>:&nbsp;<?php echo $pasplg["tindakan"];?></td>
                        <td align="left"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td> </td>
                        <td>&nbsp;</td>
                        <td>&nbsp;Tgl Dilakukan : <?php echo $pasplg["tgldilakukan"];?></td>
                        <!-- <td align="left"></td> -->
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td> </td>
                        <td>&nbsp;</td>
                        <td>&nbsp;Kode ICD-9 CM : <?php echo $pasplg["kodeicd_9cm"];?></td>
                        <!-- <td align="left"></td> -->
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
                        <td>&nbsp;<?php echo $pasplg[""];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>&nbsp; * Keluhan Utama </td>
                        <td>:&nbsp;<?php echo $pasplg["keluhanutama"];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>&nbsp; * Gejala Penyerta </td>
                        <td>:&nbsp;<?php echo $pasplg["gejalapenyerta"];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>&nbsp; * Riwayat Penyakit Dahulu </td>
                        <td>:&nbsp;<?php echo $pasplg["penyakitdahulu"];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td><b></b></td>
                        <td>&nbsp;<?php echo $pasplg[""];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td><b>Temuan Penting</b></td>
                        <td>&nbsp;<?php echo $pasplg[""];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>&nbsp; * Pemeriksaan Fisik </td>
                        <td>:&nbsp;<?php echo $pasplg["pemeriksaanfisik"];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>&nbsp;&nbsp;* Pemeriksaan penunjang</td>
                        <td width="25%">:&nbsp;<?php echo $pasplg["pemeriksaanpenunjang"];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>&nbsp; * Laboratorium </td>
                        <td>:&nbsp;<?php echo $pasplg["laboratorium"];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>&nbsp; * Pencitraan Diagnostik </td>
                        <td>:&nbsp;<?php echo $pasplg["pencintraandiagnostik"];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>&nbsp; * Lainnya </td>
                        <td>:&nbsp;<?php echo $pasplg["lainnya"];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Konsultasi </td>
                        <td>:&nbsp;<?php echo $pasplg["konsultasi"];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>Obat Selama Rawat </td>
                        <td>:&nbsp;<?php echo $pasplg["obatselamarawat"];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Kondisi Saat Pulang </td>
                        <td>:&nbsp;<?php echo $pasplg["kondisisaatpulang"];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>Obat Pulang </td>
                        <td>:&nbsp;<?php echo $pasplg["obatpulang"];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td><u><b>Instruksi Lanjut</b></u></td>
                        <td>&nbsp;<?php echo $pasplg[""];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>* Kontrol Ulang </td>
                        <td>:&nbsp;<?php echo $pasplg["kontrolulang"];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>* Segera Bawa ke RS Bila </td>
                        <td>:&nbsp;<?php echo $pasplg["bawarsbila"];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    
                </table>
            </td>
        </tr>
        
    </table>
    <table width="800" border="0" cellpadding="0" cellspacing="0">
    <tr style="font-size: 13px; ">
        <td align="center" style="border-left:2px solid;"></td>
        <td><b></b></td>
        <td>&nbsp;<?php echo $pasplg[""];?></td>
        <td align="center"></td>
        <td style="border-right:2px solid;">&nbsp;</td>
    </tr>
    <tr class="mb-6" style="font-size: 13px; ">
        <td align="center" style="border-left:2px solid;"></td>
        <td></td>
        <td width="60%">Dengan tanda tangan saya dibawah ini, saya menyatakan bahwa saya telah diberi penjelasan</td>
        <td align="center"></td>
        <td style="border-right:2px solid;">&nbsp;</td>
    </tr>
    <tr class="mb-6" style="font-size: 13px; ">
        <td align="center" style="border-left:2px solid;"></td>
        <td></td>
        <td width="60%">oleh Dokter dan memahami informasi terkait kondisi atau status keadaan kesehatan saya</td>
        <td align="center"></td>
        <td style="border-right:2px solid;">&nbsp;</td>
    </tr>
    <tr class="mb-6" style="font-size: 13px; ">
        <td align="center" style="border-left:2px solid;"></td>
        <td></td>
        <td width="60%">atau keluarga saya* pada saat pulang.</td>
        <td align="center"></td>
        <td style="border-right:2px solid;">&nbsp;</td>
    </tr>
    </table>
    <table  width="800" border="0" cellpadding="0" cellspacing="0">
    <tr style="font-size: 13px; ">
        <td align="center" style="border-left:2px solid;"></td>
        <td><b></b></td>
        <td align="center"></td>
        <td style="border-right:2px solid;">&nbsp;</td>
    </tr>
     <tr style="font-size: 13px; ">
        <td align="center" style="border-left:2px solid;"></td>
        <td><b></b></td>
        <td align="center"></td>
        <td style="border-right:2px solid;">&nbsp;</td>
    </tr>
    <tr class="mb-6" style="font-size: 13px; ">
        <td align="center" style="border-left:2px solid;"></td>
        <td></td>
        <td align="center">&nbsp;&nbsp;Pasien/Keluarga Pasien</td>
        <td>Tuban, ...................... Jam:.........</td>
        <td align="center"></td>
        <td style="border-right:2px solid;">&nbsp;</td>
    </tr>
    <tr class="mb-6" style="font-size: 13px; ">
        <td align="center" style="border-left:2px solid;"></td>
        <td></td>
        <td align="center">&nbsp;&nbsp;</td>
        <td>Dokter yang Merawat</td>
        <td align="center"></td>
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
        <td><b></b></td>
        <td align="center"></td>
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
        <td><b></b></td>
        <td align="center"></td>
        <td style="border-right:2px solid;">&nbsp;</td>
    </tr>
    <tr class="mb-6" style="font-size: 13px; ">
        <td align="center" style="border-left:2px solid;"></td>
        <td></td>
        <td align="center">&nbsp;</td>
        <td align="center"></td>
        <td style="border-right:2px solid;">&nbsp;</td>
    </tr>
    <tr class="mb-6" style="font-size: 13px; ">
        <td align="center" style="border-left:2px solid;"></td>
        <td></td>
        <td align="center">&nbsp;&nbsp;&nbsp;(..............................................)</td>
        <td>( <?php echo $pasplg["doktermerawat"];?> )</td>
        <td align="center"></td>
        <td style="border-right:2px solid;">&nbsp;</td>
    </tr>
    <tr class="mb-6" style="font-size: 13px; ">
        <td align="center" style="border-left:2px solid;"></td>
        <td></td>
        <td align="center">&nbsp;&nbsp;&nbsp;Tanda Tangan dan Nama Terang</td>
        <td>Tanda Tangan dan Nama Terang</td>
        <td align="center"></td>
        <td style="border-right:2px solid;">&nbsp;</td>
    </tr>
    <tr class="mb-6" style="font-size: 13px; ">
        <td align="center" style="border-left:2px solid;"></td>
        <td></td>
        <td align="center">&nbsp;</td>
        <td align="center"></td>
        <td style="border-right:2px solid;">&nbsp;</td>
    </tr>
    
    </table>
    <table width="550" border="0" cellpadding="0" cellspacing="0">
        <tr style="font-size: 13px; ">
        <td width="7%" style="border-top:2px solid;">&nbsp;</td>
        <td width="27%" style="border-top:2px solid;">&nbsp;</td>
        <td width="3%" style="border-top:2px solid;">&nbsp;</td>
        <td width="63%" style="border-top:2px solid; ">&nbsp;</td>
     </tr>
    </table>
</div>

<?php 
?>