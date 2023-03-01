<title>Riwayat Pasien Pulang</title>

<div align="center">
    <table width="545" border="0" cellpadding="0" cellspacing="0">
        
        <tr height="20">
            <td width="40%" align="center" >RSUD<br />TUBAN</td>
            <td width="100%" align="center" ><b>RINGKASAN PASIEN PULANG</b></td>
            <!-- <td width="50%" align="left" style="border-top:1px solid; border-left:1px solid; border-bottom:1px solid; border-right:1px solid;font-size: 14px; font-weight: bold">
                <br><i>No.RM    :</i></br>
                <br><i>Nama     :</i></br>
                <br><i>Tgl.Lahir:</i></br>
                <br><i>Ruang    :</i></br>
                <br><i>Kelas    :</i></br>
        </td> -->
        </tr>
        <tr>
            <td colspan="2">
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    
                    <tr style="font-size: 15px; ">
                            <td width="0%" style="border-left:2px solid; border-top:2px solid;">&nbsp;</td>
                            <td width="0%" style="border-top:2px solid;">&nbsp;</td>
                            <td width="0%" style="border-top:2px solid;">&nbsp;</td>
                            <td width="0%" style="border-top:2px solid; border-right:2px solid;">&nbsp;</td>
                        </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>No.Rm :</td>
                        <td><?php echo $pasplg["no_rm"];?></td> 
                        <!-- <input type="text" name="no_rm" value="{{$pasplg->no_rm}}"> -->
                        <td align="left"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Nama :</td>
                        <td><?php echo $pasplg["nama"];?></td>
                        <!-- <input type="text" name="nama" value="{{$pasplg->nama}}"> -->
                        <td align="left"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Tgl Lahir :</td>
                        <td><?php echo $pasplg["tgllahir"];?></td>
                        <!-- <input type="text" name="tgllahir" value="{{$pasplg->tgllahir}}"> -->
                        <td align="left"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Jenis Kelamin :</td>
                        <td><?php echo $pasplg["jeniskelamin"];?></td>
                        <!-- <input type="text" name="jeniskelamin" value="{{$pasplg->jeniskelamin}}"> -->
                        <td align="left"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>Ruang :</td>
                        <td><?php echo $pasplg["ruang"];?></td>
                        <!-- <input type="text" name="ruang" value="{{$pasplg->ruang}}"> -->
                        <td align="left"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>Kelas :</td>
                        <td><?php echo $pasplg["kelas"];?></td>
                        <!-- <input type="text" name="kelas" value="{{$pasplg->kelas}}"> -->
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
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Tgl Masuk :</td>
                        <td><?php echo $pasplg["tglmasuk"];?></td>
                        <!-- <input type="text" name="tglmasuk" value="{{$pasplg->tglmasuk}}"> -->
                        <td align="left"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Tgl Keluar :</td>
                        <td><?php echo $pasplg["tglkeluar"];?></td>
                        <!-- <input type="text" name="tglkeluar" value="{{$pasplg->tglkeluar}}"> -->
                        <td align="left"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Dokter Merawat :</td>
                        <td><?php echo $pasplg["doktermerawat"];?></td>
                        <!-- <input type="text" name="doktermerawat"  value="{{$pasplg->doktermerawat}}"> -->
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
                        <td>Diagnosa Masuk :</td>
                        <td><?php echo $pasplg["diagnosamasuk"];?></td>
                        <!-- <input type="text" name="diagnosamasuk" value="{{$pasplg->diagnosamasuk}}"> -->
                        <td align="left"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Indikasi Rawat :</td>
                        <td><?php echo $pasplg["indikasirawat"];?></td>
                        <!-- <input type="text" name="indikasirawat" value="{{$pasplg->indikasirawat}}"> -->
                        <td align="left"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Diagnosa Keluar :</td>
                        <td><?php echo $pasplg["diagnosakeluar"];?></td>
                        <!-- <input type="text" name="diagnosakeluar" value="{{$pasplg->diagnosakeluar}}"> -->
                        <td align="left"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>Komplikasi :</td>
                        <td><?php echo $pasplg["komplikasi"];?></td>
                        <!-- <input type="text" name="komplikasi" value="{{$pasplg->komplikasi}}"> -->
                        <td align="left"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Komorbid :</td>
                        <td><?php echo $pasplg["komorbid"];?></td>
                        <!-- <input type="text" name="komorbid" value="{{$pasplg->komorbid}}"> -->
                        <td align="left"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Tindakan/Operasi :</td>
                        <td><?php echo $pasplg["tindakan"];?></td>
                        <!-- <input type="text" name="tindakan" value="{{$pasplg->tindakan}}"> -->
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
                        <td><b>Anamnesa</b></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td> * Keluhan Utama :</td>
                        <td><?php echo $pasplg["keluhanutama"];?></td>
                        <!-- <input type="text" name="keluhanutama" value="{{$pasplg->keluhanutama}}"> -->
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td> * Gejala Penyerta :</td>
                        <td><?php echo $pasplg["gejalapenyerta"];?></td>
                        <!-- <input type="text" name="gejalapenyerta" value="{{$pasplg->gejalapenyerta}}"> -->
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td> * Riwayat Penyakit Dahulu :</td>
                        <td><?php echo $pasplg["penyakitdahulu"];?></td>
                        <!-- <input type="text" name="penyakitdahulu" value="{{$pasplg->penyakitdahulu}}"> -->
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
                        <td><b>Temuan Penting</b></td>
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td> * Pemeriksaan Fisik :</td>
                        <td><?php echo $pasplg["pemeriksaanfisik"];?></td>
                        <!-- <input type="text" name="pemeriksaanfisik" value="{{$pasplg->pemeriksaanfisik}}"> -->
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td> * Pemeriksaan penunjang :</td>
                        <td><?php echo $pasplg["pemeriksaanpenunjang"];?></td>
                        <!-- <input type="text" name="pemeriksaanpenunjang" value="{{$pasplg->pemeriksaanpenunjang}}"> -->
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td> * Laboratorium :</td>
                        <td><?php echo $pasplg["laboratorium"];?></td>
                        <!-- <input type="text" name="laboratorium" value="{{$pasplg->laboratorium}}"> -->
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td> * Pencitraan Diagnostik :</td>
                        <td><?php echo $pasplg["pencintraandiagnostik"];?></td>
                        <!-- <input type="text" name="pencintraandiagnostik" value="{{$pasplg->pencintraandiagnostik}}"> -->
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td> * Lainnya :</td>
                        <td><?php echo $pasplg["lainnya"];?></td>
                        <!-- <input type="text" name="lainnya" value="{{$pasplg->lainnya}}"> -->
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Konsultasi :</td>
                        <td><?php echo $pasplg["konsultasi"];?></td>
                        <!-- <input type="text" name="konsultasi" value="{{$pasplg->konsultasi}}"> -->
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>Obat Selama Rawat :</td>
                        <td><?php echo $pasplg["obatselamarawat"];?></td>
                        <!-- <input type="text" name="obatselamarawat" value="{{$pasplg->obatselamarawat}}"> -->
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <!-- <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td></td>
                        <td align="center">:</td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr> -->
                    <tr style="font-size: 13px; ">
                        <td style="border-left:2px solid;">&nbsp;</td>
                        <td>Kondisi Saat Pulang :</td>
                        <td><?php echo $pasplg["kondisisaatpulang"];?></td>
                        <!-- <input type="text" name="kondisisaatpulang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pasplg->kondisisaatpulang}}"> -->
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>Obat Pulang :</td>
                        <td><?php echo $pasplg["obatpulang"];?></td>
                        <!-- <input type="text" name="obatpulang" value="{{$pasplg->obatpulang}}"> -->
                        <td align="center"></td>
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
                        <td>* Kontrol Ulang :</td>
                        <td><?php echo $pasplg["kontrolulang"];?></td>
                        <!-- <input type="text" name="kontrolulang" value="{{$pasplg->kontrolulang}}"> -->
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr style="font-size: 13px; ">
                        <td align="center" style="border-left:2px solid;"></td>
                        <td>* Segera Bawa ke RS Bila :</td>
                        <td><?php echo $pasplg["bawarsbila"];?></td>
                        <!-- <input type="text" name="bawarsbila" value="{{$pasplg->bawarsbila}}"> -->
                        <td align="center"></td>
                        <td style="border-right:2px solid;">&nbsp;</td>
                    </tr>
                    <tr>
                    <td colspan="4" style="border-left:2px solid; border-right:2px solid;">
                            <table width="50%" align="center" border="0" cellpadding="0" cellspacing="0">
                                <tr style="font-size: 13px; ">
                                    <td width="50%" align="center">Pasien / Keluarga Pasien</td>
                                    <td width="40%">&nbsp;</td>
                                    <td width="30%">Tuban,........................ Jam :&nbsp;<br />Dokter yang merawat</td>
                                    <!-- <td width="30%">Tuban,&nbsp;><br />Dokter yang merawat</td> -->
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
                    <tr style="font-size: 13px; ">
                        <td width="7%" style="border-left:2px solid; border-top:2px solid;">&nbsp;</td>
                        <td width="27%" style="border-top:2px solid;">&nbsp;</td>
                        <td width="3%" style="border-top:2px solid;">&nbsp;</td>
                        <td width="63%" style="border-top:2px solid; border-right:2px solid;">&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
<?php 
?>