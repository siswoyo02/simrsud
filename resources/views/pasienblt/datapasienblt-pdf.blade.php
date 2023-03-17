<title>Riwayat Pasien Pulang</title>

<div align="center">
    <table width="550" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td colspan="0">
                <table width="550" border="0" cellpadding="0" cellspacing="10">
                <tr>
                <td height="50" colspan="4" align="centestyle"="font-size:16px">
                    <div align="center"><b>PEMERINTAH KABUPATEN TUBAN<br />
                        <img style="position:absolute; margin-left:-15px; left: 39px; top: 0px;" src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('gambar/tbn.png'))) }}" width="60" height="70" align="absmiddle">Rumah Sakit Umum Daerah "Dr. R. KOESMA" Tuban<br />
                                    Jl. Dr. Wahidin Sudiro Husodo No. 800 Tuban 62315 Telp. (0356) 321010<br/>
                                    <b>Riwayat Pasien Pulang<br /></b>
                        <img style="position:absolute; margin-left:-15px; left: 660px; top: 0px;" src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('gambar/rs.png'))) }}" width="70" height="70" align="absmiddle">
                    </div>
                </td>
                 </tr>
                </table>
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    
                    <tr style="font-size: 15px; ">
                            <td width="0%" style="border-left:2px solid; border-top:2px solid;">&nbsp;</td>
                            <td width="0%" style="border-top:2px solid;">&nbsp;</td>
                            <td width="0%" style="border-top:2px solid;">&nbsp;</td>
                            <td width="0%" style="border-top:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>No.Rm </td>
                        <td>:&nbsp;<?php echo $pasplgblt["no_rm"];?></td>
                        <td>&nbsp;&nbsp;&nbsp;Tgl Masuk : <?php echo $pasplgblt["tglmasuk"];?>&nbsp;&nbsp;&nbsp;Jam : ...</td>
                        <td align="left"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Nama </td>
                        <td>:&nbsp;<?php echo $pasplgblt["nama"];?></td>
                        <td>&nbsp;&nbsp;&nbsp;Tgl Keluar : <?php echo $pasplgblt["tglkeluar"];?>&nbsp;&nbsp;&nbsp;Jam : ...</td>
                        <td align="left"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;">&nbsp;</td>
                        <td>Tgl Lahir</td>
                        <td>:&nbsp;<?php echo $pasplgblt["tgl_lahir"];?>&nbsp;&nbsp;&nbsp;( <?php echo $pasplgblt["sex"];?> )</td>
                        
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>Ruang </td>
                        <td>:&nbsp;<?php echo $pasplgblt["ruang"];?></td>
                        <td>&nbsp;&nbsp;&nbsp;Dokter yang merawat : Dr. <?php echo $pasplgblt["doktermerawat"];?></td>
                        <td align="left"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>Kelas </td>
                        <td>:&nbsp;<?php echo $pasplgblt["kelas"];?></td>
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
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>Diagnosa Masuk </td>
                        <td>:&nbsp;<?php echo $pasplgblt["diagnosamasuk"];?></td>
                        <td align="left"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Indikasi Rawat </td>
                        <td>:&nbsp;<?php echo $pasplgblt["indikasirawat"];?></td>
                        <td align="left"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Diagnosa Keluar </td>
                        <td>:&nbsp;<?php echo $pasplgblt["diagnosakeluar"];?></td>
                        <td align="left"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td> </td>
                        <td>&nbsp;</td>
                        <td>&nbsp;&nbsp;&nbsp;Kode ICD-10 : <?php echo $pasplgblt["kodeicd_10"];?></td>
                        <!-- <td align="left"></td> -->
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>Komplikasi </td>
                        <td>:&nbsp;<?php echo $pasplgblt["komplikasi"];?></td>
                        <td align="left"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Komorbid </td>
                        <td>:&nbsp;<?php echo $pasplgblt["komorbid"];?></td>
                        <td align="left"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Tindakan/Operasi </td>
                        <td>:&nbsp;<?php echo $pasplgblt["tindakan"];?></td>
                        <td>&nbsp;&nbsp;&nbsp;Tgl Dilakukan : <?php echo $pasplgblt["tgldilakukan"];?></td>
                        <td align="left"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td> </td>
                        <td>&nbsp;</td>
                        <td>&nbsp;&nbsp;&nbsp;Kode ICD-9 CM : <?php echo $pasplgblt["kodeicd_9cm"];?></td>
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
                        <td>&nbsp;<?php echo $pasplgblt[""];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>&nbsp; * Keluhan Utama </td>
                        <td>:&nbsp;<?php echo $pasplgblt["keluhanutama"];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>&nbsp; * Gejala Penyerta </td>
                        <td>:&nbsp;<?php echo $pasplgblt["gejalapenyerta"];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>&nbsp; * Riwayat Penyakit Dahulu </td>
                        <td>:&nbsp;<?php echo $pasplgblt["penyakitdahulu"];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td><b>Temuan Penting</b></td>
                        <td>&nbsp;<?php echo $pasplgblt[""];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>&nbsp; * Pemeriksaan Fisik </td>
                        <td>&nbsp;<?php echo $pasplgblt[""];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>&nbsp;&nbsp;&nbsp; * Lahir</td>
                        <td>:&nbsp;<?php echo $pasplgblt["lahir"];?>&nbsp;</td>
                        <td>&nbsp;&nbsp;&nbsp;Anus : <?php echo $pasplgblt["anus"];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>&nbsp;&nbsp;&nbsp; * BB ( gram )</td>
                        <td>:&nbsp;<?php echo $pasplgblt["bb"];?>&nbsp;gram</td>
                        <td>&nbsp;&nbsp;&nbsp;AS (1') : <?php echo $pasplgblt["as1"];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>&nbsp;&nbsp;&nbsp; * TB ( cm )</td>
                        <td>:&nbsp;<?php echo $pasplgblt["tb"];?>&nbsp;cm</td>
                        <td>&nbsp;&nbsp;&nbsp;AS (5') : <?php echo $pasplgblt["as5"];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>&nbsp;&nbsp;&nbsp; * DS</td>
                        <td>:&nbsp;<?php echo $pasplgblt["ds"];?>&nbsp;</td>
                        <td>&nbsp;&nbsp;&nbsp;Kreamer : <?php echo $pasplgblt["kreamer"];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>&nbsp;&nbsp;&nbsp; * Tali Pusar</td>
                        <td>:&nbsp;<?php echo $pasplgblt["talipusar"];?>&nbsp;</td>
                        <td>&nbsp;&nbsp;&nbsp;Ketuban : <?php echo $pasplgblt["ketuban"];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>&nbsp;&nbsp;&nbsp; * Cacat</td>
                        <td>:&nbsp;<?php echo $pasplgblt["cacat"];?>&nbsp;</td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>&nbsp;&nbsp;* Pemeriksaan penunjang</td>
                        <td width="25%">:&nbsp;<?php echo $pasplgblt["pemeriksaanpenunjang"];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>&nbsp; * Laboratorium </td>
                        <td>:&nbsp;<?php echo $pasplgblt["laboratorium"];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>&nbsp; * Pencitraan Diagnostik </td>
                        <td>:&nbsp;<?php echo $pasplgblt["pencintraandiagnostik"];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>&nbsp; * Lainnya </td>
                        <td>:&nbsp;<?php echo $pasplgblt["lainnya"];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Konsultasi </td>
                        <td>:&nbsp;<?php echo $pasplgblt["konsultasi"];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>Obat Selama Rawat </td>
                        <td>:&nbsp;<?php echo $pasplgblt["obatselamarawat"];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Kondisi Saat Pulang </td>
                        <td>:&nbsp;<?php echo $pasplgblt["kondisisaatpulang"];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>Obat Pulang </td>
                        <td>:&nbsp;<?php echo $pasplgblt["obatpulang"];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td><u><b>Instruksi Lanjut</b></u></td>
                        <td>&nbsp;<?php echo $pasplgblt[""];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>* Kontrol Ulang </td>
                        <td>:&nbsp;<?php echo $pasplgblt["kontrolulang"];?></td>
                        <td>&nbsp;&nbsp;&nbsp;Tgl : <?php echo $pasplgblt["tglkontrol"];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <table width="800" border="0" cellpadding="0" cellspacing="0">
                    <tr class="mb-6" style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td width="29%">Untuk memantau perkembangan kesehatan bayi.</td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                </table>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>* Segera Bawa ke RS Bila </td>
                        <td>:&nbsp;<?php echo $pasplgblt["bawarsbila"];?></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    
                </table>
            </td>
        </tr>
        
    </table width="550" border="0" cellpadding="0" cellspacing="0">
    <table width="900" border="0" cellpadding="0" cellspacing="0">
    <tr style="font-size: 13px; ">
        <td align="center" style="border-left:2px solid;"></td>
        <td>&nbsp;</td>
    </tr>
    <tr class="mb-6" style="font-size: 13px; ">
        <td align="center" style="border-left:2px solid;"></td>
        <td></td>
        <td width="10%">Dengan tanda tangan saya dibawah ini, saya menyatakan bahwa saya telah diberi penjelasan</td>
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
    <tr class="mb-6" style="font-size: 13px; ">
        <td align="center" style="border-left:2px solid;"></td>
        <td>

        </td>
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
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ( Dr. <?php echo $pasplgblt["doktermerawat"];?> )</td>
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