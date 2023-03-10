
<html>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <head>
        <link rel="shortcut icon" href="http://<?php echo $_SERVER['HTTP_HOST']?>/simrs/billing2/icon/favicon.ico" type="image/x-icon" />
        <title>Form Registrasi Pasien</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta http-equiv="Cache-Control" content="no-cache, must-revalidate" />
        <link type="text/css" rel="stylesheet" href="../theme/mod.css" />
        <script type="text/JavaScript" language="JavaScript" src="../theme/js/dsgrid.js"></script>
        <script type="text/JavaScript" language="JavaScript" src="../theme/js/mod.js"></script>
        <!--  <script src="../theme/dhtmlxcalendar.js" type="text/javascript"></script> -->
        <!-- untuk ajax-->
        <script type="text/javascript" src="../theme/js/ajax.js"> </script>
        <!-- end untuk ajax-->

        <!--dibawah ini diperlukan untuk menampilkan popup-->
        <link rel="stylesheet" type="text/css" href="../theme/popup.css" />
        <script type="text/javascript" src="../theme/prototype.js"></script>
        <script type="text/javascript" src="../theme/effects.js"></script>
        <script type="text/javascript" src="../theme/popup.js"></script>
        <!--diatas ini diperlukan untuk menampilkan popup-->
<style type="text/css">
              /*  #btn_view_perjanjian{
                position: fixed;
                right: 5.5em;
                top: 11.4em;
                white-space: normal;
                }

                #btn_jdwl_dokter {
                    position: fixed;
                    right: 5.5em;
                    top: 8.2em;
                }*/
        </style>
    </head>
    <body onLoad="document.getElementById('NoRm').focus();">
        <iframe height="72" width="130" name="sort"
                id="sort"
                src="../theme/dsgrid_sort.php" scrolling="no"
                frameborder="0"
                style="border: medium ridge; position: absolute; z-index: 65535; left: 100px; top: 250px; visibility: hidden">
        </iframe>
        <iframe height="193" width="168" name="gToday:normal:agenda.js"
                id="gToday:normal:agenda.js"
                src="../theme/popcjs.php" scrolling="no"
                frameborder="1"
                style="border:1px solid medium ridge; position: absolute; z-index: 65535; left: 100px; top: 50px; visibility: hidden">
        </iframe>
        <div align="center">
            <?php
            //include "../header1.php";
            $date_now=gmdate('d-m-Y',mktime(date('H')+7));
            ?>
    
    <div id="divLoading" style="display:none">
    </div>        
    <table width="1000" border="0" cellpadding="0" cellspacing="0" class="hd2" align="center">
    
                <tr>
                    <td width="504" height="30">&nbsp;FORM REGISTRASI PASIEN</td>
                    
                </tr>
            </table>
            <!--div id="div_tes"></div-->
            <table width="1003" border="0" cellspacing="0" cellpadding="0" class="tabel" align="center">
                <tr>
                    <td colspan="7"><input id="sttkonsul" name="sttkonsul" value="1" type="hidden"/>
                                    <input id="idBooking" name="idBooking"  type="hidden"/>
                    </td>
                </tr>
                <tr>
                   
                   
                    <td  colspan="6">&nbsp;&nbsp; <b>Cek BPJS :</b>&nbsp;<select class="txtinputreg" onChange="no_p_bpjs.value='';" id="chk_bpjs">
                    <option value="3" selected="selected">No Rujukan</option>
                    <option value="5">Ruj Brd NoPes</option>
                    <option value="1">NO Peserta</option>
                    <option value="2">No NIK</option>
                    <option value="4">No SEP</option>
                   
                   
                    </select>

                        <select class="txtinputreg" id="cmbJenisFaskes" onChange="no_p_bpjs.value='';">
                            <option value="1" selected="selected">Pcare</option>
                            <option value="2" >Rs</option>
                        </select>
                   
                    &nbsp;No : &nbsp;<input type="text" id="no_p_bpjs"  name="no_p_bpjs" size="20" maxlength="20" class="txtinputreg  " />
                    &nbsp;<input type="button" id="chk_no_p" name="chk_no_p" value="Check BPJS" class="" onClick="cekPesertaBPJS()">
                    &nbsp;<input type="button" id="btnCariRujukan" name="btnCariRujukan" value="Cari Rujukan" class="" onClick="cariRujukan()">
                    &nbsp;No Booking : &nbsp;<input type="text" id="no_booking"  name="no_booking" size="20" maxlength="20" class="txtinputreg  " />
                    &nbsp;<input type="button" id="chk_no_booking" name="chk_no_booking" value="Check" class=""  onClick="cekBooking()">
                    
                    </td>
                   
                </tr>
               
                <tr>
                    <td>&nbsp;</td>
                    <td colspan="5" align="right"><hr /></td>
                </tr>

                <tr>
                    <td width="9">&nbsp;</td>
                    <td width="107" align="right">No RM :&nbsp;</td>
                    <td width="226">
                        <input type="text" name="NoRm" id="NoRm" size="20" class="txtinputreg" tabindex="1" onKeyUp="listPasien(event,'show',this.id)"/>
                        &nbsp;
                        <input type="button" value="No. RM Baru" id="BtnNoRM" class="btninputreg" onClick="getNoRM()" />
                        <textarea cols="5" rows="5" style="display:none;" id="txtNoRM"></textarea>
                        <input id="txtIdPasien" name="txtIdPasien" type="hidden"/>
                        <input id="txtIdKunj" name="txtIdKunj" type="hidden"/>
                        <input id="IsNewPas" name="IsNewPas" value="" type="hidden"/>                  </td>
                    <td width="226">
                    
                         No Lama : <input type="text" name="NoRmLm" id="NoRmLm" size="18" class="txtinputreg" tabindex="1" onKeyUp=""/>
                    <br>No Biling :
                        <input name="NoBiling" id="NoBiling" readonly tabindex="2" size="18" class="txtinputreg" />
                        <textarea cols="5" rows="5" id="txtNoBiling" name="txtNoBiling" style="display: none"></textarea>                  </td>
                    <td width="136" align="right">Nama Ortu :&nbsp;<br />
                                                  Nama Suami / Istri :
                    </td>
                    <td width="217"><input type="text" name="NmOrtu" id="NmOrtu" size="30" tabindex="7" class="txtinputreg"  onKeyUp="listPasien(event,'show',this.id)" />
                    <br /><input type="text"  class="txtinputreg" name="NmSuTri" id="NmSuTri" size="30" tabindex="8" onKeyUp="listPasien(event,'show',this.id)" />
                    <input type="hidden" name="nama_peserta_bpjs" id="nama_peserta_bpjs" size="30" tabindex="7" class="txtinputreg" />
                     <div id="div_pasienby" align="center" class="div_pasien" style="position:absolute;z-index:1;left: 300px; top: 113px;"></div> 
                    </td>
                    
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td align="right">Nama :&nbsp;</td>
                    <td colspan="4"><input type="text" class="txtinputreg" name="Nama" id="Nama" size="40" tabindex="3" onKeyUp="listPasien(event,'show',this.id)"/>&nbsp;&nbsp; NIK : <input type="text" class="txtinputreg" name="txtNIK" id="txtNIK" size="20" tabindex="3" />
                    &nbsp;&nbsp;
                    Panggilan : <select name="panggilan" class="txtinputreg" id="panggilan" >
                    <option value=""></option>
                    <option value=".TN">.TN</option>
                    <option value=".NY">.NY</option>
                    <option value=".SDR">.SDR</option>
                    <option value=".NN">.NN</option>
                    <option value=".AN">.AN</option>
                    <option value=".BY">.BY</option>
                    <option value=".BY.NY">.BY.NY</option>
                    </select>                   </td>
                   
                   
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td align="right">Jenis Kelamin :&nbsp;</td>
                    <td colspan="3">
                        <select name="Gender" id="Gender" tabindex="4"  class="txtinputreg">
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option></select>
                        &nbsp;Pendidikan :&nbsp;<select name="Pendidikan" id="Pendidikan" tabindex="5" class="txtinputreg"></select>
                        &nbsp;Pekerjaan :&nbsp;<select name="Pekerjaan" id="Pekerjaan" tabindex="6" class="txtinputreg"></select>                 
                    </td>
                    <td align="right">&nbsp;Fast Track :&nbsp;<input type="checkbox" id="chkfasttrack" name="chkfasttrack"></td>
                    <td width="44" align="right">&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td colspan="5" align="right"><hr /></td>
                </tr>
                <!-- right left -->
                <tr>
                    <td colspan="4" valign="top">
                            <table border="0" cellspacing="0" cellpadding="0" class="tabel" align="center" style="padding-left:60px;">
                            <!-- 1 -->
                            <tr>
                                <!-- <td>&nbsp;</td> -->
                                <td align="right">Tgl Lahir :&nbsp;</td>
                                <td colspan="2">
                                    <input type="text" class="txtcenterreg" maxlength="10" value="<?php echo $date_now;?>" onFocus="this.select();" onBlur="if(this.value==''){this.value='<?php echo $date_now;?>'}" onKeyUp="setTgl(event,this)" name="TglLahir" id="TglLahir" size="11" tabindex="9" />
                                    <input type="button" id="ButtonTglLahir" name="ButtonTglLahir" value=" V " tabindex="10" class="txtcenter" onClick="gfPop.fPopCalendar(document.getElementById('TglLahir'),depRange,gantiUmur);" />
                                    &nbsp;&nbsp;Umur :&nbsp;<input type="text" style="text-align:center;" class="txtinputreg" name="th" id="th" size="3" tabindex="11" onKeyUp="gantiTgl()"/>
                                    &nbsp;Th&nbsp;&nbsp;<input type="text" style="text-align:center;" class="txtinputreg" name="Bln" id="Bln" size="3" tabindex="12" onKeyUp="gantiTgl(this.id)"/>&nbsp;Bln                    </td>
                            </tr>
                            <!-- 2 -->
                            <tr>
                                <!-- <td>&nbsp;</td> -->
                                <td align="right">Agama:&nbsp;</td>
                                <td colspan="2"><select id="cmbAgama" tabindex="13" name="cmbAgama" class="txtinputreg"></select>&nbsp;&nbsp;&nbsp; Telp. <input type="text" tabindex="14" class="txtinputreg" id="telp" name="telp" size="15"/></td>
                            </tr>
                            <!-- 3 -->
                            <tr>
                                <!-- <td>&nbsp;</td> -->
                                <td align="right">Alamat :&nbsp;</td>
                                <td colspan="2">
                                    <input type="text" class="txtinputreg" name="Alamat" id="Alamat" size="40" onKeyUp="listPasien(event,'show',this.id)" tabindex="15" />
                                    RT. <input type="text" class="txtinputreg" id="rt" name="rt" size="3" tabindex="16" />
                                    RW. <input type="text" class="txtinputreg" id="rw" name="rw" size="3" tabindex="17" />
                                    <div id="div_pasien" align="center" class="div_pasien" style="position:absolute;z-index:1;left: 300px; top: 113px;"></div>                    </td>
                                
                            </tr> 
                            <!-- 4 -->
                            <tr>
                                <!-- <td>&nbsp;</td> -->
                                <td align="right">Propinsi :&nbsp;</td>
                                <td colspan="2">
                                    <select id="cmbProp" name="cmbProp" onChange="isiKab();" tabindex="18"  class="txtinputreg">
                                    </select>                    </td>
                            </tr>
                            <!-- 5 -->
                            <tr>
                                <!-- <td>&nbsp;</td> -->
                                <td align="right">Kabupaten/Kota :&nbsp;</td>
                                <td colspan="2"><select id="cmbKab" name="cmbKab" onChange="isiKec();" tabindex="19" class="txtinputreg">
                                    </select></td>
                            </tr>
                            <!-- 6 -->
                            <tr>
                                <!-- <td>&nbsp;</td> -->
                                <td align="right">Kecamatan :&nbsp;</td>
                                <td colspan="2">
                                    <select id="cmbKec" name="cmbKec" onChange="isiDesa();" tabindex="20" class="txtinputreg">
                                    </select>                    </td>
                            </tr>
                            <!-- 7 -->
                            <tr>
                                <!-- <td>&nbsp;</td> -->
                                <td align="right">Kelurahan/Desa :&nbsp;</td>
                                <td colspan="2">
                                    <select id="cmbDesa" name="cmbDesa" tabindex="21" class="txtinputreg">
                                    </select>                    </td>
                                 
                            </tr> 
                            <tr>
                                <!-- <td>&nbsp;</td> -->
                                <td align="right">Status Perkawinan :&nbsp;</td>
                                <td colspan="2">
                                    <select id="cmbMarital" name="cmbMarital" tabindex="21" class="txtinputreg"></select>
                                </td>
                                 
                            </tr>
                            <tr>
                                <!-- <td>&nbsp;</td> -->
                                <td align="right">Suku :&nbsp;</td>
                                <td colspan="2">
                                	<select id="cmbSuku" name="cmbSuku" tabindex="21" class="txtinputreg"></select>
                                </td>
                                 
                            </tr> 
                            <!-- 8 -->
                            <tr>
                                <!-- <td>&nbsp;</td> -->
                                <td align="right"><input type="hidden" name="jenis_pesertaBPJS" id="jenis_pesertaBPJS"/></td>
                                <td colspan="2"></td>
                            </tr>
                            <!-- 9 -->
                            <tr>
                                <!-- <td>&nbsp;</td> -->
                                <td align="right"></td>
                                <td colspan="2"></td>
                            </tr>
                            <!-- 10 -->
                            <tr>
                                <!-- <td>&nbsp;</td> -->
                                <td colspan="3" align="right"><hr /></td>
                            </tr>
                            <!-- 11 -->
                            <tr>
                                <!-- <td>&nbsp;</td> -->
                                <td align="right" style="color:#666666">Penjamin Pasien</td>
                                <td colspan="2"><input type="checkbox" name="ok" id="ok" tabindex="34" onClick="if(this.checked==true){setPenjamin(0)}else{setPenjamin(1)}"  class="txtinputreg"/>&nbsp;</td>
                            </tr>
                            <!-- 12 -->
                            <tr>
                                <!-- <td>&nbsp;</td> -->
                                <td align="right">Penjamin :&nbsp;</td>
                                <td colspan="2"><input type="hidden" name="Penjamin" id="Penjamin" class="txtinputreg" />
                                    <input type="text" name="txtPenjamin" id="txtPenjamin" tabindex="35" class="txtinputreg" readonly />&nbsp;&nbsp;No Anggota :&nbsp;<input name="NoAnggota" id="NoAnggota" tabindex="36" class="txtinputreg" onKeyUp="cekNoAnggota();"/>                    </td>
                            </tr>
                            <!-- 13 -->
                            <tr>
                                <!-- <td>&nbsp;</td> -->
                                <td align="right">Hak Kelas :&nbsp;</td>
                                <td colspan="2">
                                    <select name="HakKelas" id="HakKelas" tabindex="37" class="txtinputreg"></select>
                                Status :&nbsp;
                                    <select name="StatusPenj" id="StatusPenj" tabindex="38" class="txtinputreg">
                                        <option value="PESERTA">Peserta</option>
                                        <option value="ISTRI">Istri</option>
                                        <option value="SUAMI">Suami</option>
                                        <option value="ANAK KE 1">Anak Ke 1</option>
                                        <option value="ANAK KE 2">Anak Ke 2</option>
                                        <option value="ANAK KE 3">Anak Ke 3</option>
                                        <option value="ANAK KE 4">Anak Ke 4</option>
                                        <option value="ANAK KE 5">Anak Ke 5</option>
                                        <option value="TANGGUNGAN 1">Tanggungan 1</option>
                                        <option value="TANGGUNGAN 2">Tanggungan 2</option>
                                        <option value="TANGGUNGAN 3">Tanggungan 3</option>
                                        <option value="TANGGUNGAN 4">Tanggungan 4</option>
                                        <option value="TANGGUNGAN 5">Tanggungan 5</option>
                                    </select>                    </td>
                            </tr>
                             <tr id="f_kode_rujukan">
                                 <td align="right">No Rujukan :&nbsp;</td>
                                <td><input style="background:#FF6" type="text" name="kode_rujukanBPJS" id="kode_rujukanBPJS" tabindex="25" class="txtinputreg"/>
                                &nbsp;Tgl Rujukan : &nbsp;
                                <input type="text" name="tgl_rujukanBPJS" id="tgl_rujukanBPJS"  value="<?php echo $date_now;?>" tabindex="11" class="txtinputreg" size="11"/>
                                <input type="button" id="btn_tgl_rujukanBPJS" name="btn_tgl_rujukanBPJS" value=" V " tabindex="23" class="txtcenter"  onClick="gfPop.fPopCalendar(document.getElementById('tgl_rujukanBPJS'),depRange,'');" />
                                </td>
                            </tr>
                            <!-- 8 -->
                            <tr id="f_kode_ppk">
                                <td align="right">Kode PPK :&nbsp;</td>
                                <td>
                                    <input type="text" name="kode_ppkBPJS" id="kode_ppkBPJS" tabindex="25" class="txtinputreg"/>
                                    &nbsp;Kode Poli <span style="padding-left: 12px; padding-right: 9px" >:</span> 
                                    <input type="text" name="kode_poliBPJS" id="kode_poliBPJS" size="11" class="txtinputreg"/>
                                </td>
                            </tr>
                            <!-- 9 -->
                            <tr id="f_asal_faskes">
                                <td align="right">Asal Faskes Tk. <span id="spanfaskes"></span> :&nbsp;</td>
                                <td><input type="text" name="nama_ppkBPJS" id="nama_ppkBPJS" tabindex="25" class="txtinputreg" style="width:200px;" onKeyUp="findppk(event,this)"/>
                                 <div id="div_ppk" align="left" style="position:absolute; z-index:1; height: 230px; width:400px; overflow: scroll; border:1px solid; display:none; background-color: #CCCCCC;"></div>
                                </td>
                            </tr>
                            <!-- 14 -->
                            <tr id="f_noSkdp">
                                <!-- <td>&nbsp;</td> -->
                                <td align="right">No. SKDP/SPRI :&nbsp;</td>
                                <td colspan="2">
                                    <input type="text" name="noSkdp" id="noSkdp" tabindex="26"  class="txtinputreg" style="width:200px;background:#FF6" />
                                  <!--  <input type="button" name="btnGetSkdp" id="btnGetSkdp" class="txtinputreg" value="Get SKDP" onclick="getSKDP()"/>-->
                                </td>
                            </tr>
                            <!-- 15 -->
                            <tr id="f_DPJP">
                                <!-- <td>&nbsp;</td> -->
                                <td align="right">DPJP :&nbsp;</td>
                                <td colspan="2">
                                   
                                    <input type="text" name="txtDpjp" id="txtDpjp" tabindex="28" class="txtinputreg" style="width:200px;background:#FF6" readonly="" />
                                    <input type="button" name="btnDpjp" id="btnDpjp" class="txtinputreg" value="Cari DPJP" onclick="searchDPJP()"/>
                                    <div id="div_dpjp" align="left" style="position:absolute; z-index:1; height: 150px; width:400px; overflow: scroll; border:1px solid; display:none; background-color: #CCCCCC;"></div>

                                </td>
                            </tr>
                            <!-- 16 -->
                             <tr id="f_faskes">
                                <!-- <td>&nbsp;</td> -->
                                <td align="right">Asal Faskes :&nbsp;</td>
                                <td colspan="2">
                                    <label><input type="radio" id="rdfaskes1" name="rdfaskes" value="1" checked="checked" onClick="gantifaskes(this.value)"/>Faskes 1</label>
                                    <label><input type="radio" id="rdfaskes2" name="rdfaskes" value="2" onClick="gantifaskes(this.value)" />Faskes 2 (RS)</label>
                                </td>
                            </tr>
                             <!-- 17 -->
                            <tr id="f_lakalantas">
                                <!-- <td>&nbsp;</td> -->
                                <td align="right">Laka Lantas :&nbsp;</td>
                                <td colspan="2">
                                     <label ><input type="radio" id="rdlaka1" name="rdlaka" value="1" onClick="loklaka()" />Ya</label>
                                    <label><input type="radio" id="rdlaka2" name="rdlaka" value="0" checked="checked" onClick="loklaka()" />Tidak</label>
                                    &nbsp;&nbsp; COB 
                                    <input type="checkbox" class="txtinputreg" id="chkCob"/>
                                     KATARAK 
                                    <input type="checkbox" class="txtinputreg" id="chkKatarak"/>
                                </td>
                                
                            </tr>
                            
                            <tr id="f_tglKejadian" style="display: none;">
                               <td align="right">Tgl Kejadian :&nbsp;</td>
                               <td >
                                        <input type="text" name="tgl_kejadian" id="tgl_kejadian"  tabindex="25" class="txtinputreg"/>
                                        <input type="button" id="btn_tgl_kejadian" name="btn_tgl_kejadian" value=" V " tabindex="23" class="txtcenter"  onClick="gfPop.fPopCalendar(document.getElementById('tgl_kejadian'),depRange,'');" />
                                        &nbsp; Suplesi <input type="checkbox" class="txtinputreg" id="chkSuplesi" onclick="suplesi()" /> 
                               </td>
                            </tr>
                            
                            <tr id="f_penjLain" style="display:none">
                                <td align="right">Penjamin Kedua :&nbsp;</td>
                               <td>
                                     <select name="cmbPenjLain" id="cmbPenjLain"  class="txtinputreg">
                                     <option value=""></option>
                                     <option value="1">Jasaraharja</option>
                                     <option value="2">Bpjs Tenker</option>
                                     <option value="3">Taspen</option>
                                     <option value="4">AsaBRI</option>
                                     
                                     </select> &nbsp;
                                     <input type="text" name="txtNoSepSuplesi" id="txtNoSepSuplesi"  class="txtinputreg" size="23" style="display: none;"/>&nbsp;
                                     <input type="button" value="Cari Suplesi" class="txtinputreg" onclick="cariSuplesi()" id="btnCariSuplesi" style="display: none;">
                                     <div id="div_suplesi" align="left" style="position:absolute; z-index:1; height: 150px; width:600px; overflow: scroll; border:1px solid; display:none; background-color: #CCCCCC;"></div>  
                                </td>
                            </tr>
                            <tr id="f_lokaLaka" style="display: none;">
                                <td align="right">Lokasi Laka :&nbsp;</td>
                               <td>
                                     <select id="cmbPropBpjs" name="cmbPropBpjs" onChange="isiKabBpjs();"   class="txtinputreg"></select></br>
                                     <select id="cmbKabBpjs" name="cmbKabBpjs" onChange="isiKecBpjs();"   class="txtinputreg"></select></br>
                                     <select id="cmbKecBpjs" name="cmbKecBpjs"  class="txtinputreg"></select></br>
                                           
                                
                                </td>
                                </td>
                            </tr>
                            
                            </table>
                    </td>
                    <td colspan="3" valign="top">
                        <table border="0" cellspacing="0" cellpadding="0" class="tabel" align="center">
                                <tr>
                                    <td align="left" colspan="2" style="color:#666666;padding-bottom:10px;">Kunjungan Pasien &nbsp;</td>
                                    <!-- <td align="right">&nbsp;</td> -->
                                </tr>
                                <!-- 2 -->
                            <tr >
                                <td align="right">Tgl Kunjungan :&nbsp;</td>
                                <td>
                                    <input type="text" class="txtcenterreg" name="TglKunj" readonly id="TglKunj" size="11" tabindex="22" value="<?php echo $date_now;?>"/>
                                    <input type="button" id="ButtonTglKunj" name="ButtonTglKunj" value=" V " tabindex="23" class="txtcenter" <?php echo $DisableBD; ?> onClick="gfPop.fPopCalendar(document.getElementById('TglKunj'),depRange,saring);" />                    </td>
                            </tr>
                            <!-- 3 -->
                            <tr>
                                <td align="right">Status pasien:&nbsp;</td>
                                <td>
                                
                                <select name="StatusPas" id="StatusPas" tabindex="26" class="txtinputreg" onChange="setPenjamin(this.value);SetAsalMasuk();">
                                        <option value="">-status pasien-</option>
                                  </select>
                            </tr>
                            <!-- 4 -->
                            <tr>
                                <td align="right">Asal Masuk :&nbsp;</td>
                                <td><select name="AslMasuk" id="AslMasuk" onChange="filterInap(this.value,0)" tabindex="24" class="txtinputreg">
                                        <option value="">-Rujukan-</option>
                              </select> </td>
                            </tr>  
                           
                            <!-- 5 -->
                            <tr>
                                <td align="right">  Keterangan :&nbsp;</td>
                                <td> <input type="text" name="Ket" id="Ket" tabindex="25" class="txtinputreg"/></td>
                            </tr> 
                           
                            <tr >
                                <td align="right">Jenis Layanan :&nbsp;</td>
                                <td>
                                    <select name="JnsLayanan" id="JnsLayanan" tabindex="30" class="txtinputreg" onChange=" setPenjamin(document.getElementById('StatusPas').value); isiTmpLay('setThrough'); setKunjungan(this.value); this.title=this.value;    "></select>                    </td>
                                <!--if(document.getElementById('NoRm').value=='' || document.getElementById('txtIdPasien').value == ''){getNoRM();}else{getNoBil();}-->
                            </tr >
                            <!-- 11 -->
                            
                            <tr>
                                <td align="right">Tempat Layanan :&nbsp;</td>
                                <td>
                                    <select name="TmpLayanan" id="TmpLayanan" tabindex="31" class="txtinputreg" onChange="this.title=this.value;txtDpjp.value=''; setKelas('setThrough'); r_karcis();"></select>
                                    <!--isiCombo('cmbKelasPasien',this.value,'','cmbKelas',setRetribusi);isiKamar-->
                                    <input type="hidden" id="prev_inap" name="prev_inap" />
                                    <!--input type="text" id="inap" name="inap" />
                                    <textarea style="display: block" id="h_inap" name="h_inap"></textarea-->                    </td>
                            </tr>
                             <tr id="fAslKunjungan">
                                <td align="right"><span id="asalKunj"> Asal Kunjungan :&nbsp;</span></td>
                                <td><select name="AslKunjungan" id="AslKunjungan"   class="txtinputreg" disabled="disabled" >
                                        <option value="0"></option>
                                        <option value="44">IGD</option>
                                        <option value="1">RAWAT JALAN</option>
                                        <option value="64">HEMODIALISA</option>
                                         <option value="2">LANGSUNG RAWAT INAP</option>
                              </select> </td>
                            </tr>  
                            <!-- 12 -->
                            <tr>
                                <td align="right">Kelas :&nbsp;</td>
                                <td>
                                    <select name="cmbKelas" id="cmbKelas" tabindex="32" title="this.value" class="txtinputreg" onChange="isiKamar('setThrough');"></select>                    </td><!--getInap();setRoom();-->
                            </tr>
                            <tr id="f_NokaInhelt">
                                <td align="right">  Nomor Kartu :&nbsp;</td>
                                <td> <input type="text" name="NokaInhelt" id="NokaInhelt" tabindex="25" class="txtinputreg"/>&nbsp;<input type="button" id="chk_no_p" name="chk_no_p" value="Cek Inhelt" class=""  onClick="cekPesertaINHELT()"></td>
                            </tr> 
                            <!-- 13 -->
                            <tr id="f_diagnosa_awal">
                            <td align="right">Diagnosa Awal :&nbsp;</td>
                                <td ><input  type="text" name="diagnosa_awalBPJS" id="diagnosa_awalBPJS" style="width:200px; background:#FF6" class="txtinputreg" onKeyUp="getDiagnosa(event,this);" autocomplete="off"/>
                                <input name="diagnosa_awal_id" id="diagnosa_awalBPJS_id" type="hidden">
                                <div id="div_diagnosa" align="left" style="position:absolute; z-index:1; height: 230px; width:400px; overflow: scroll; border:1px solid; display:none; background-color: #CCCCCC;"></div>
                                </td>
                                <td align="right"></td>
                                <td ></td>
                            </tr>
                            <!-- 14 -->
                            <tr id="f_tgl_sjp">
                                <td align="right">Tgl SJP/SKP :&nbsp;</td>
                                <td><input name="TglSJP" id="TglSJP" size="11" tabindex="27" class="txtcenterreg" readonly value="<?php echo $date_now;?>"/>
                                    <input type="button" id="ButtonTglSJP" name="ButtonTglSJP" value=" V " tabindex="28" class="txtcenter" onClick="gfPop.fPopCalendar(document.getElementById('TglSJP'),depRange);" /></td>
                            </tr>
                            <!-- 15 -->
                            <tr id="f_no_sjp">
                                <td align="right">No SJP/SKP :&nbsp;</td>
                                <td>
                                    <input name="NoSJP" id="NoSJP" tabindex="29" style="background-color:#CCCCCC" class="txtinputreg" readonly size="23" />
                                    <input type="button" name="getSJP" id="getSJP" value="Get SJP" onClick="get_sjp()" />&nbsp;
                                    <input type="button" name="getSEP" id="getSEP" value="Get SEP BPJS" disabled="disabled" onClick="getSEP()" />&nbsp;
                                    <input type="button" name="getINHELT" id="getINHELT" value="Get SEP INHELT"  onClick="getINHELT()" style="display:none" />&nbsp;
                                    <input type="button" name="btnsmpSEP" id="btnsmpSEP" value="Simpan SEP" onClick="simpanSep()" style="display:none;"/>&nbsp;
                                    <input disabled="disabled" type="button" name="hapus_sep" id="hapus_sep" value="HAPUS SEP"  onClick="hapus_sep_()" style="display:none;" />
                                </td>
                            </tr>
                            <!-- 16 -->
                             <tr id="f_kesanggupan">
                                <td align="right"></td>
                                <td><input type="checkbox" id="perjanjian"/> Kesanggupan Mengurus BPJS</td>
                            </tr>
                            <!-- 17 -->
                            <tr>
                                <td align="right" id="td_ret">
                                    Retribusi :&nbsp;                    </td>
                                <td id="td_ret1" width="70%" >
                                    <div name="Retribusi" id="Retribusi" tabindex="33" class="txtinputreg" ></div>
                                    <span id="spanTarif">0</span>
                                    <span id="spanId" style="visibility:hidden" >0</span>
                                    <input type="hidden" id="prev_retribusi" name="prev_retribusi" />                    </td>
                                <td align="right" id="td_room">
                                    Kamar :&nbsp;                    </td>
                                <td width="38" id="td_room1">
                                <input type="hidden" id="txtkamarLama" name="txtkamarLama" />
                                    <select id="kamar" class="txtinputreg" onChange="setTarip('setThrough')" tabindex="33" name="kamar">
                                    </select>
                                    <span id="spanTarifKamar"></span>
                                    <input type="hidden" id="txtKamarKelasInhelt" name="txtKamarKelasInhelt" />
                                    <div id="div_room"></div>
                                    <!--  style="display: none"kamar diambil dari b_ms_kamar,b_ms_unit,b_ms_kelas, jika kelas diganti maka kamar ikut berubah display: none; -->                  </td>
                            </tr>
                            </table>
                    </td>
                </tr>
                <!-- //// -->
                <tr>
                    <td>&nbsp;</td>
                    <td align="right">&nbsp;</td>
                    <td colspan="2"></td>
                    <td align="right">&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>                    </td>
                    <td>
                        <fieldset>
                            <legend>Loket</legend>
                            <select id="asal" name="asal" onChange="decUser();batal('1');" class="txtinputreg"></select>
                        </fieldset>
                        <fieldset>
                            <legend>User</legend>
                            <select id="userLog" name="UserLog" onChange="saring();batal('1');" class="txtinputreg"></select>
                        </fieldset>                    </td>
                    <td colspan="2" align="center">
                        <input id="kartu" name="kartu" type="button" value="Cetak Kartu" onClick="kartu()" />
                        <input id="cetak" name="cetak" type="button" value="Cetak Kwitansi" onClick="cetak()" />
                        <input id="cetakForm" name="cetakForm" type="button" value="Form Verifikasi" onClick="cetakForm()" />
                        <input id="spInap" name="spInap" type="button" value="SP INAP" disabled="disabled" onClick="spi()" />
                        <input name="UpdStatusPx" id="UpdStatusPx" type="button" value="UBAH STATUS Px"  onClick="PopUpdtStatus();" />
                        <input id="skpJamkesda" name="skpJamkesda" type="button" value="SKP JAMKESDA" disabled="disabled" onClick="skp()" style="display:none" />
                        <!-- <input id="cetakSEP" name="cetakSEP" type="button" onClick="cetakSEP()" value="Cetak SEP Lama"  /> -->
                        <input id="cetakSEP" name="cetakSEP" type="button" onClick="cetakSEPplus()" value="Cetak SEP BPJS"  />
                    <input id="skpJamkesdaKmr" name="skpJamkesdaKmr" type="button" value="SKP JAMKESDA INAP" disabled="disabled" onClick="skp('kamar')" style="display:none" />
                    
                    <input id="sjpJampersal" style="display:none" name="sjpJampersal" type="button" value="SJP JAMPERSAL" disabled="disabled" onClick="skp('jampersal')" />
                    <input id="sjpAskes" name="sjpAskes" type="button" value="SJP ASKES FULL" disabled="disabled" style="display:none"  onClick="print_sjp(1)" /><input id="sjpAskes_isi" style="display:none"  name="sjpAskes" type="button" value="SJP ASKES ISI" disabled="disabled" onClick="print_sjp(2)" />
                    <input type="button" id="skmbtn" name="skmbtn" value="SPM"  onClick="cetakSKM()" />
                    <input type="button" style="display:none"  id="jampersal" name="jampersal" value="JAMPERSAL" disabled="disabled" onClick="cetakSKM('jampersal')" />
                    <input type="button" style="display:none" id="kdrt" name="kdrt" value="KDRT" disabled="disabled" onClick="cetakSKM('kdrt')" />
                    <input type="button" style="display:none" id="lansia" name="lansia" value="LANSIA" disabled="disabled" onClick="cetakSKM('lansia')" /><br />
                    <input id="cetakForm" name="cetakForm" type="button"  value="Cetak Form" onClick="ctkForm()" />

                    <input id="cetakIdCard" name="cetakIdCard" type="button" onClick="cetakIdCard()" value="Cetak Gelang Px"  />
                    
                    <input id="cetakBar" name="cetakBar"  type="button" onClick="cetakBarcode()" value="Cetak Barcode"  />
                    <input id="cetakNoAntri" name="cetakNoAntri"  type="button" onClick="cetakNoAntrian()" value="No Antrian Klinik"  />
                    <input id="createRujukan" name="createRujukan" type="button" value="Buat Rujukan"  onClick="createRujukan()" />
                    <input id="UpdateTglPlg" name="UpdateTglPlg" type="button" value="Update Tgl Pulang"  onClick="updateTglPlg()" />
                    <!-- <input id="cetakPernyataan" name="cetakPernyataan" type="button" onClick="cetakPernyataanBpjs()" value="Cetak Pernyataan BPJS"  />                 </td> -->
                    <!--td colspan="2"></td>
                    <td align="right">&nbsp;</td-->
                    <td colspan="2" align="center">
                        <input type="button" id="btnSimpan" name="btnSimpan" value="Tambah" onClick="simpan(this.value);" class="tblTambah"/>
                        <input type="button" id="btnHapus" name="btnHapus" value="Hapus" onClick="hapus(this.title);" disabled="disabled" class="tblHapus"/>
                        <input type="button" id="btnBatal" name="btnBatal" value="Batal" onClick="batal()" class="tblBatal"/><br>
                       <br/> 
                        <input style="display:none" class="tblBatal" value="Jadwal Dokter" type="button" id="btn_jdwl_dokter" onClick="viewJdwlDokter()" />
                        <input style="width:150px;display: none" class="tblBatal" value=" Pembuatan SEP Susulan" type="button" id="btn_view_perjanjian" onClick="viewKesanggupanBPJS()" />
                        <input style="width:100px" class="tblBatal" value="Pengajuan SEP" type="button" id="btn_pengajuanSEP" onClick="pengajuanSEP()" />
                        <input style="width:150px" class="tblBatal" value="Pengisian SEP Manual" type="button" id="btn_isiSEP" onClick="isiSEP()" />
                        <div id="divKunjLagi" style="display:none;"><input type="button" id="btnKunjUlang" name="btnKunjUlang" value="DiKunjungkan Lagi" onClick="SetKunjungLagi();" class="tblBtn"/></div>                    </td>
                        <!-- <br /> -->
                        
                </tr>
                <tr>
                    <td colspan="7" height="235" align="center">
                        <div id="gridbox" style="width:950px; height:200px; background-color:white; overflow:hidden;"></div>
                        <div id="paging" style="width:950px;"></div>                    </td>
                </tr>
          </table>
        </div>
       <span id="skpDiv" style="display:none"></span>
        <div id="div_getSJP" style="display:none;width:800px;height:400px;" align="center" class="popup">
            <table width="800" border=0>
            <tr>
                <td width="5%">&nbsp;</td>
                <td colspan="3">
                <img alt="close" id="close_btn" src="../icon/x.png" width="32" class="popup_closebox" style="float:right;cursor: pointer" />
                Ambil No. SJP / SKP
                <form id="form_sjp" action="sjp.php" method="post" target="sjp_report">
                    <input type='hidden' id="hid_user_sjp" name="userId" value="<?php echo $userId;?>" />
                    <input type='hidden' id="hid_kunjungan_id" name="hid_kunjungan_id" value="" />
                    <input type='hidden' id="first_time" name="first_time" value="" />
                </form>                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                No. Peserta                </td>
                <td>
                :&nbsp;
                <input type="text" id="NoKa" tabindex="100" onKeyUp="suggest_sjp_byNoKa(event,this);" autocomplete="off" class="txtinput" />
                <img src="../images/ajax.gif" id="load_gif" style="display:none;position:absolute;" />                </td>
                <td width="10%">&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                NIP                </td>
                <td>
                :&nbsp;
                <input type="text" id="NIP" tabindex="101" onKeyUp="suggest_sjp(event,this);" autocomplete="off" class="txtinput" />
                <div id="listPas_sjp" style="width:730px;height:200px;position:absolute;display:none;overflow:auto"></div>                </td>
                <td width="10%">&nbsp;</td>
            </tr>
            <tr>
                <td></td>
                <td>
                No RM                </td>
                <td colspan="2">:&nbsp;
                <span id="span_NoRm_sjp"></span>                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                Nama Peserta                </td>
                <td colspan="2">:&nbsp;
                <span id="span_namaP_sjp"></span>                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                Jenis Kelamin                </td>
                <td colspan="2">:&nbsp;
                <span id="span_gender_sjp"></span>                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                Tgl Lahir                </td>
                <td colspan="2">:&nbsp;
                <span id="span_birth_sjp"></span>                </td>
            </tr>
            <tr>
                <td></td>
                        <td>Hak Kelas </td>
                        <td colspan="2">:&nbsp;
                            <select name="HakKelas_sjp" id="HakKelas_sjp" tabindex="102" onChange="document.getElementById('HakKelas').value = this.value;" class="txtinputreg"></select>
                &nbsp;&nbsp;PISA :&nbsp;
                <span id="span_StatusPenj_sjp"></span>
                &nbsp;&nbsp;
                Tgl SJP/SKP :&nbsp;
                <input name="TglSJP_sjp" id="TglSJP_sjp" size="11" tabindex="103" class="txtcenterreg" readonly value="<?php echo $date_now;?>"/>
                            <input type="button" id="ButtonTglSJP_sjp" name="ButtonTglSJP_sjp" value=" V " tabindex="104" class="txtcenter" onClick="gfPop.fPopCalendar(document.getElementById('TglSJP_sjp'),depRange,function(){document.getElementById('TglSJP').value=document.getElementById('TglSJP_sjp').value;});" />                        </td>
            </tr>


            <tr>
              <td></td>
              <td>Kode PPK</td>
              <td colspan="2">
                :&nbsp;
                <input type="text" id="kodeppk_sjp" name="kodeppk_sjp" autocomplete="off" class="txtinput" /></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                Diagnosa                </td>
                <td>
                :&nbsp;
                <input type="hidden" id="diagnosa_id_sjp" />
                <input type="text" id="diag_sjp" tabindex="105" size="80" onKeyUp="suggest_diag(event,this);" autocomplete="off" class="txtinput" />
                <div id="listDiag_sjp" style="width:400px;height:100px;overflow:auto;position:absolute;display:none;"></div>                </td>
                <td>&nbsp;</td>
            </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td >Jenis Layanan</td>
                        <td>:&nbsp;
                            <select name="JnsLayanan_sjp" id="JnsLayanan_sjp" tabindex="106" class="txtinputreg" onChange="isiTmpLay_sjp('setThrough');this.title=this.value;"></select>                        </td>
                        <!--if(document.getElementById('NoRm').value=='' || document.getElementById('txtIdPasien').value == ''){getNoRM();}else{getNoBil();}-->
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                <td >Tempat Layanan </td>
                        <td>:&nbsp;
                            <select name="TmpLayanan_sjp" id="TmpLayanan_sjp" tabindex="107" class="txtinputreg" onChange="this.title=this.value;setKelas_sjp('setThrough');"></select>                        </td>
                    </tr>
                    <td>
            <tr>
                        <td>&nbsp;</td>
                <td >Kelas </td>
                        <td colspan="2">:&nbsp;
                            <select name="cmbKelas_sjp" id="cmbKelas_sjp" tabindex="108" title="this.value" class="txtinputreg" onChange="isiKamar_sjp('setThrough');"></select>                        </td>
            </tr>
            <tr>
                        <td>&nbsp;</td>
                        <td id="td_ret_sjp">
                            Retribusi                        </td>
                        <td id="td_ret1_sjp" colspan="2" style="display:none">:&nbsp;
                            <select name="Retribusi_sjp" id="Retribusi_sjp" tabindex="109" class="txtinputreg" onChange="setTarip_sjp('setThrough')"></select>&nbsp;&nbsp;&nbsp;
                            <span id="spanTarif_sjp"></span>                        </td>
                        <td id="td_room_sjp">
                            Kamar                        </td>
                        <td id="td_room1_sjp" colspan="2" style="display:none">:&nbsp;
                            <select id="kamar_sjp" class="txtinputreg" onChange="setTarip_sjp('setThrough')" tabindex="110" name="kamar_sjp">
                            </select>
                            <span id="spanTarifKamar_sjp"></span>
                            <div id="div_room_sjp"></div>
                            <!--  style="display: none"kamar diambil dari b_ms_kamar,b_ms_unit,b_ms_kelas, jika kelas diganti maka kamar ikut berubah display: none; -->                        </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2" align="right">
                <input type="button" tabindex="111" id="conf_sjp" value="Generate SJP" onClick="confirm_sjp()" />                </td>
                <td></td>
            </tr>
            </table>
    </div>
        <div id="divUpdtStatus" style="display:none;width:450px; height:300px" align="center" class="popup">
            <span id="inpEvUpdt" style="display:none"></span>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                <tr>
                    <td><img onClick="close_set_grid()" alt="close" src="../icon/x.png" width="32" class="popup_closebox" style="float:right;cursor: pointer" /></td>
                </tr>
                <tr>
                    <td align="center">
                        <table border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="txtinputNoBgColor">Status Pasien</td>
                              <td class="txtinputNoBgColor" width="10" align="center">&nbsp;:</td>
                               
                            </tr>
                            <tr id="tgl_sjp__p" >
                                <td class="txtinputNoBgColor"><span id="spnTglSJP">Tgl SJP/SKP</span></td>
                              <td class="txtinputNoBgColor" width="10" align="center">&nbsp;:</td>
                                <td><input type="text" class="txtcenter" name="TglSJP_pop" readonly id="TglSJP_pop" size="11" value="<?php echo $date_now;?>"/>
                              <input type="button" id="ButtonTglSJP" name="ButtonTglSJP" value=" V " class="txtcenter" onClick="gfPop.fPopCalendar(document.getElementById('TglSJP_pop'),depRange);" /></td>
                            </tr>
                            <tr id="trnosjp">
                              <td class="txtinputNoBgColor">No SJP/SKP</td>
                              <td class="txtinputNoBgColor" align="center">&nbsp;:</td>
                              <td><input disabled="disabled" type="text" class="txtinput" name="NoSJP_pop" id="NoSJP_pop" size="20" />&nbsp;<input type="button" onClick="getSJP_ub()" value="Get SJP" name="getSJP_ub" id="getSJP_ub"></td>
                            </tr>
                            <tr id="trNoJaminan">
                              <td class="txtinputNoBgColor">No Anggota</td>
                              <td class="txtinputNoBgColor" align="center">&nbsp;:</td>

                              <td><input type="text" class="txtinput" name="NoJaminan" id="NoJaminan" size="20" /></td>
                          </tr>
                            <tr id="trHakKelas">
                              <td class="txtinputNoBgColor">Hak Kelas</td>
                              <td class="txtinputNoBgColor" align="center">&nbsp;:</td>
                            
                    </tr>
                            <tr id="trnmPeserta">
                              <td class="txtinputNoBgColor">Nama Peserta</td>
                              <td class="txtinputNoBgColor" align="center">&nbsp;:</td>
                              <td><input type="text" class="txtinput" name="nmPeserta" id="nmPeserta" size="30" /></td>
                          </tr>
                            <tr id="trStatusPenj">
                              <td class="txtinputNoBgColor">Status Jaminan&nbsp;</td>
                              <td class="txtinputNoBgColor" align="center">&nbsp;:</td>
                              <td><select name="StatusPenj_pop" id="StatusPenj_pop" class="txtinputreg">
                                    <option value="ANAK KE 1">Anak Ke 1</option>
                                    <option value="ANAK KE 2">Anak Ke 2</option>
                                    <option value="ISTRI">Istri</option>
                                    <option value="PESERTA">Peserta</option>
                                    <option value="SUAMI">Suami</option>
                                </select>
                      </td>
                          </tr>
                        </table>
                  </td>
                </tr>
                <tr>
                    <td align="center"><br /><input name="BtnUpdtStatusPx" id="BtnUpdtStatusPx" type="button" value="Update Status" class="tblBtn" onClick="goUpdtStatusPx()" /></td>
                </tr>
            </table>
        </div> 
      
         
        <div id="divDataINHELT" style="display:none; width:500px;" class="popup">
                <img alt="close" src="../icon/x.png" width="32" class="popup_closebox" style="float:right; cursor: pointer" onClick="verifikasiDataINHELT()" />
                <fieldset><legend>Data INHELT</legend>
                <table>
                    <tr>
                        <td>Status Peserta</td>
                        <td>:</td>
                        <td ><span id="i_status" style="font-weight:bold;"></span></td>
                    </tr>
                    <tr>
                        <td>No. Peserta</td>
                        <td>:</td>
                        <td ><span id="i_no"></span></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td ><span id="i_nm"></span></td>
                    </tr>
                     <tr>
                        <td>Tgl. Lahir</td>
                        <td>:</td>
                        <td ><span id="i_birth"></span></td>
                    </tr>
                    <tr>
                        <td>Kode Asal</td>
                        <td>:</td>
                        <td ><span id="i_kodeProvider"></span><span id="i_namaProvider" ></span></td>
                    </tr>
                    <tr>
                        <td>Jenis Peserta</td>
                        <td>:</td>
                        <td ><span id="i_jnsPeserta"></span></td>
                    </tr>
                    <tr>
                        <td>Hak Kelas</td>
                        <td>:</td>
                        <td ><span id="i_hakKelas"></span>
                        <input type="hidden" id="i_kodeHak" />
                        </td>
                    </tr>
                     
                    
                </table>
                
                </fieldset>
            </div>
            <div id="divDataRujukan" style="display:none; width:750px;" class="popup">
                <img alt="close" id="closeRujukan" src="../icon/x.png" width="32" class="popup_closebox" style="float:right; cursor: pointer" onClick="closeDiv('divDataRujukan')" />
                <fieldset><legend>Rujukan Faskes </legend>
                <table>
                    <tr style="display: none">
                        <td>Pilik</td>
                        <td>:</td>
                        <td ><input type="radio" name="chkRujukan" id="chkRujukan1" checked="checked" value="1" onclick="ubahParRujukan()">No Kartu 
                             <input type="radio" name="chkRujukan" id="chkRujukan2" value="2" onclick="ubahParRujukan()">Tanggal Rujukan</td>
                    </tr>
                    <tr id="trNoKartu">
                        <td>No. Kartu</td>
                        <td>:</td>
                        <td ><input id="r_txtNokartu" name="r_txtNokartu" size="20" maxlength="20" class="txtinputreg " type="text"></td>
                    </tr>
                    <tr id="trTanggalRujukan" style="display: none">
                        <td>Tanggal </td>
                        <td>:</td>
                        <td ><input type="text" class="txtcenterreg" maxlength="10" name="r_tglRujukan" id="r_tglRujukan" size="11"  />
                              <input type="button" id="r_BtntglRujukan" name="p_ButtonTglSEP" value=" V " tabindex="10" class="txtcenter" onClick="gfPop.fPopCalendar(document.getElementById('r_tglRujukan'),depRange);" /></td>
                    </tr>
                    <tr >
                       
                        <td colspan="3"><input type="button" value="Cari" onclick="cariRujukanBPJS()"></td>
                       
                    </tr>
                    <tr>
                        <td colspan="3"><div id="divHasilRujukan" align="left" style="height: 150px; width:700px; overflow: scroll; border:1px solid; display:none; background-color: #CCCCCC;"></div></td>
                    </tr>
                </table>
                </fieldset>
            </div>
<div id="divDataBPJS" style="display:none; width:600px;" class="popup">
                <img alt="close" src="../icon/x.png" width="32" class="popup_closebox" style="float:right; cursor: pointer" onClick="verifikasiDataBPJS__()" />
                <fieldset><legend>Data BPJS</legend>
                <table>
                    <tr id="trStatus">
                        <td>Status</td>
                        <td>:</td>
                        <td ><span id="d_status" style="font-weight:bold;"></span>
                             <input type="hidden" name="txtNikBPJS" id="txtNikBPJS">
                             <input type="hidden" name="txtTglRujukan" id="txtTglRujukan">
                        </td>

                    </tr>
                    <tr>
                        <td>No. Peserta</td>
                        <td>:</td>
                        <td ><span id="d_no"></span></td>
                    </tr>
                    <tr>
                        <td >Nama / Kel</td>
                        <td>:</td>
                        <td ><span id="d_nm"></span></td>
                    </tr>
                     <tr id="trTglLahir">
                        <td>Tgl. Lahir</td>
                        <td>:</td>
                        <td ><span id="d_birth"></span></td>
                    </tr>
                    <tr >
                        <td>Kode Asal</td>
                        <td>:</td>
                        <td ><span id="d_kodeProvider"></span>-<span id="d_namaProvider" type="hidden"></span></td>
                    </tr>
                    <tr>
                        <td>Jenis Peserta</td>
                        <td>:</td>
                        <td ><span id="d_jnsPeserta"></span></td>
                    </tr>
                    <tr>
                        <td>Hak Kelas</td>
                        <td>:</td>
                        <td ><span id="d_hakKelas"></span>
                        <input type="hidden" id="d_kodeHak" />
                        </td>
                    </tr>
                    <tr>
                        <td>Poli Tujuan</td>
                        <td>:</td>
                        <td ><span id="d_poltuj"></span>
                        <input type="hidden" id="d_politujuan" />
                        </td>
                    </tr>
                   
                     <tr style="display:none">
                        <td>Status</td>
                        <td>:</td>
                        <td ><span id="d_kdjnspes"></span>
                       
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Kunjungan</td>
                        <td>:</td>
                        <td ><label><input type="radio" id="RdKunjungan" name="RdKunj"  onclick="stkunjungan(this.value)" value="1" />Lanjutan</label> 
                             <label><input type="radio" id="RdKunjungan1" name="RdKunj" onClick="stkunjungan(this.value)" value="0" checked="checked" />Tidak </label>
                             <input style="display:none"  type="text" readonly="readonly" class="txtinput" placeholder="Pilih No SEP" id="txtnosep" /> 
                             
                       
                        </td>
                    </tr>  
                </table>
                <table>

                <tr >
                    <td colspan="3">
                     <div id="gridboxRiwayat" style="width:525px; height:150px; background-color:white;"></div>
                     <br />
                         
                    </td>
                    </tr>
                    </table>
                </fieldset>
            </div>
            
            <div id="divDataBPJS_" style="display:none; width:500px;" class="popup">
                <img alt="close" src="../icon/x.png" width="32" class="popup_closebox" style="float:right; cursor: pointer"" />
                <fieldset><legend>Data BPJS</legend>
                <table>
                    <tr id="trStatus">
                        <td>No SEP</td>
                        <td>:</td>
                        <td ><span id="n_nosep"></span></td>
                    </tr>
                    <tr id="trStatus">
                        <td>No Kartu</td>
                        <td>:</td>
                        <td ><span id="n_noKartu"></span></td>
                    </tr>
                    <tr id="trStatus">
                        <td>Nama</td>
                        <td>:</td>
                        <td ><span id="n_nama"></span></td>
                    </tr>
                     <tr id="trTglLahir">
                        <td>Tgl. Lahir</td>
                        <td>:</td>
                        <td ><span id="n_birth"></span></td>
                    </tr>
                     <tr id="trStatus">
                        <td>Jenis Peserta</td>
                        <td>:</td>
                        <td ><span id="n_jenisPeserta"></span></td>
                    </tr>
                    <tr id="trStatus">
                        <td>Hak kelas</td>
                        <td>:</td>
                        <td ><span id="n_hakKls"></span></td>
                    </tr>
                    <tr>
                        <td>Tgl SEP</td>
                        <td>:</td>
                        <td ><span id="n_tglSEP"></span></td>
                    </tr>
                    <tr>
                        <td>Jenis Rawat</td>
                        <td>:</td>
                        <td ><span id="n_jenisRawat"></span></td>
                    </tr>
                    <tr>
                        <td>Poli</td>
                        <td>:</td>
                        <td ><span id="n_poli"></span></td>
                    </tr>
                     <tr>
                        <td>Diagnosa</td>
                        <td>:</td>
                        <td ><span id="n_diagnosa"></span></td>
                    </tr>
                    
                    
                    
                    
                </table>
                
                </fieldset>
            </div>
             <div id="divPengajuanSEP" style="display:none; width:600px;" class="popup">
                <img alt="close" src="../icon/x.png" width="32" class="popup_closebox" style="float:right; cursor: pointer"" onclick="p_resset()" />
                <fieldset><legend>Pegajuan SEP</legend>
                <table>
                    <input type="hidden" id="idAprove" />
                    <tr id="trStatus">
                        <td>No Kartu</td>
                        <td>:</td>
                        <td ><input type="text" class="txtinputreg" id="p_noKartu" /> &nbsp;<input type="button" id="p_cekpeserta" onClick="p_cekPeserta()" value="Cek BPJS" /></td>
                    </tr>
                    <tr id="trStatus">
                        <td>Nama</td>
                        <td>:</td>
                        <td ><input type="text" class="txtinputreg" id="p_namaPes"  readonly="readonly"/> </td>
                    </tr>
                    <tr id="trTglLahir">
                        <td>Tgl. SEP</td>
                        <td>:</td>
                        <td > <input type="text" class="txtcenterreg" maxlength="10" name="p_TglSep" id="p_TglSep" size="11"  />
                              <input type="button" id="p_ButtonTglSEP" name="p_ButtonTglSEP" value=" V " tabindex="10" class="txtcenter" onClick="gfPop.fPopCalendar(document.getElementById('p_TglSep'),depRange);" /></td>
                    </tr>
                     <tr id="trStatus">
                        <td>Jenis Pelayanan</td>
                        <td>:</td>
                        <td ><select id="p_jenisLayanan" class="txtinputreg">
                                <option value="2">Rawat Jalan</option>
                                <option value="1">Rawat Inap</option>
                                </select>
                        </td>
                    </tr>
                    <tr id="trStatus">
                        <td>Keterangan</td>
                        <td>:</td>
                        <td ><input type="text" class="txtinputreg" id="p_keterangan" />
                        </td>
                    </tr>
                     <tr >
                        <td></td>
                        <td></td>
                        <td >
                            <input type="button" value="Simpan" id="btnSimpan_p" class="tblBatal" onClick="simpanPengajuan()"/>
                            <input type="button" value="Aprove" id="btnAprove" class="tblTambah" onClick="AproveSEP()"/>
                        </td>
                    </tr>
                 </table>
                  <table>
                        <tr >
                            <td colspan="3">
                             <div id="gridboxAprove" style="width:525px; height:150px; background-color:white;"></div>
                             <br />
                           
                            </td>
                        </tr>
                    </table>
                
                </fieldset>
            </div>
            <div id="divUpdateTglPlg" style="display:none; width:500px;" class="popup">
                <img alt="close" src="../icon/x.png" width="32" class="popup_closebox" style="float:right; cursor: pointer"" onclick="p_resset()" />
                <fieldset><legend>Update Tgl Pulang</legend>
                <table>
                    <tr id="trStatus">
                        <td>No SEP</td>
                        <td>:</td>
                        <td ><input type="text" class="txtinputreg" id="krs_SEP"  size="25" /> &nbsp;<input type="button" id="btnCekSEP" onClick="cekSep()" value="Cek SEP" /></td>
                    </tr>
                    <tr id="trStatus">
                        <td>Nama</td>
                        <td>:</td>
                        <td ><input type="text" class="txtinputreg" id="krs_nama"  readonly="readonly"/> </td>
                    </tr>
                    <tr id="trTglLahir">
                        <td>Tgl. Pulang</td>
                        <td>:</td>
                        <td > <input type="text" class="txtcenterreg" maxlength="10" name="tgl_krs" id="tgl_krs" size="11"  />
                              <input type="button" id="p_ButtonTglKRS" name="p_ButtonTglKRS" value=" V " tabindex="10" class="txtcenter" onClick="gfPop.fPopCalendar(document.getElementById('tgl_krs'),depRange);" /></td>
                    </tr>
                     
                   
                     <tr >
                        <td></td>
                        <td></td>
                        <td ><input type="button" value="Update" id="btnUpdateTglplg" class="tblBatal" onClick="UpdateKRS()"/>
                        </td>
                    </tr>
                 </table>
                
                </fieldset>
            </div>
            <div id="divisiSEP" style="display:none; width:600px;" class="popup">
                <img alt="close" src="../icon/x.png" width="32" class="popup_closebox" style="float:right; cursor: pointer" onClick="p_resset()" />
                <fieldset><legend>Isi SEP Manual</legend>
                    <table class="tabel" width="100%">
                    <tr>
                        <td>No SEP</td>
                        <td>:</td>
                        <td>
                            <input type="text" class="txtinputreg" id="isi_noSEP" /> &nbsp;<input type="button" id="i_cekSEP" onClick="i_cekSEP()" value="Cek BPJS" />
                        </td>
                    </tr>
                    <tr>
                        <td>No Kartu</td>
                        <td>:</td>
                        <td><input type="text" class="txtinputreg" id="txt_i_Nokartu" disabled="" /></td>
                    </tr>
                    <tr>
                        <td>Nama Peserta</td>
                        <td>:</td>
                        <td><input type="text" class="txtinputreg" id="txt_i_NamaPes" disabled=""  /></td>
                    </tr>
                    <tr>
                        <td>No Rm</td>
                        <td>:</td>
                        <td><input type="text" class="txtinputreg" id="txt_i_NoRm" readonly="" /></td>
                    </tr>
                    <tr>
                        <td>Hak Kelas</td>
                        <td>:</td>
                        <td><select id="cmb_i_hakKelas" class="txtinputreg" disabled="">
                            <option value="2">1</option>
                            <option value="3">2</option>
                            <option value="4">3</option>
                            </select>
                    </td>
                    </tr>
                    <tr>
                        <td>Diag Awal</td>
                        <td>:</td>
                        <td><input type="text" class="txtinputreg" id="txt_i_DiagAwal" readonly="" size="40" /></td>
                    </tr>
                    <tr>
                        <td>Jenis Peserta</td>
                        <td>:</td>
                        <td><input type="text" class="txtinputreg" id="txt_i_jnsPeserta" disabled="" /></td>
                    </tr>
                    <tr>
                        <td>Catatan</td>
                        <td>:</td>
                        <td><input type="text" class="txtinputreg" id="txt_i_Catatan" disabled="" /></td>
                    </tr>
                    <tr >
                        <td></td>
                        <td></td>
                        <td>
                            <input type="button" value="Simpan" id="btnIsiSEP" class="tblBatal" onClick="actIsiSEP()"/>
                        </td>
                    </tr>
                    </table>
                </fieldset>
            </div>
            <div id="divPengurusanBPJS" class="popup" style="display:none;overflow:hidden;width:950px;height:560px;" >
            <div id="divpopupbpjs" style="font-size:8px;"></div>
            </div>
            <div id="divJdwlDokter" class="popup" style="display:none;overflow:hidden;width:850px;height:560px;" >
            <div id="divpopupjdwl" style="font-size:8px;"></div>
            </div>
            <div id="divCreateRujukan" class="popup" style="display:none;overflow:hidden;width:950px;height:600px;" >
            <div id="divpopupRujukan" style="font-size:8px;"></div>
            </div>
    </body>
    <script type="text/JavaScript" language="JavaScript">
    // Array.prototype.forEach.call(document.getElementsByClassName("f_tgl_rujukan"), function(el) {
    //     // Do stuff with the element
    //     el.style.visibility = "hidden";
    // });
    // document.getElementsByClassName("f_tgl_rujukan")[0].style.display = 'none';
    var status_bpjs_aktif=0;
    var aktif_set_bpjs=0;
    var is_edit_reg=0;
    //alert('data aawal '+ is_edit_reg);
   function viewKesanggupanBPJS(){
        if(document.getElementById("txtIdKunj").value != '' && document.getElementById("StatusPas").value==3){
        document.getElementById("divpopupbpjs").innerHTML='<table  width="100%" border="0" cellspacing="1" cellpadding="0"  align="center" class="tabel"><tr><td><img  alt="close" src="../icon/x.png" width="32" class="popup_closebox" onclick="lari()" style="float:right; cursor: pointer"  /><object style="width:950px;height:560px;font-size:8px;" data="pengurusan_bpjs/pengurusan_bpjs_vclaim.php?kunjungan_id='+document.getElementById("txtIdKunj").value+'&pasien_id='+document.getElementById("txtIdPasien").value+'&tglKunjungan='+document.getElementById("TglKunj").value+'" ></object></td></tr></table>';
        new Popup('divPengurusanBPJS',null,{modal:true,position:'center',duration:0});
        document.getElementById('divPengurusanBPJS').popup.show();
        }
        else{
            alert("Pilih kunjungan dengan status BPJS terlebih dahulu!");
        }
        
    }
function cetakIdCard(){
    if (cIdPas==""){
        alert("Pilih Pasien Terlebih Dahulu !");
    }else{
        //window.open('cetakIdCard.php?idPas='+cIdPas,'_blank');
        window.open('printIdCard.php?idPas='+cIdPas,'_blank');
    }
}
function cetakNoAntrian(){
    if (iPelId==""){
        alert("Pilih Pasien Terlebih Dahulu !");
    }else{
        //window.open('cetakIdCard.php?idPas='+cIdPas,'_blank');
        window.open('printNoAntrian.php?idPel='+iPelId,'_blank');
    }
}
function cetakBarcode(){
    if (cIdPas==""){
        alert("Pilih Pasien Terlebih Dahulu !");
    }else{
        window.open('printBarcode.php?idPas='+cIdPas,'_blank');
        //window.open('printIdCard.php?idPas='+cIdPas,'_blank');
    }
}
function lari(){
    //alert('jh');
    goFilterAndSort('gridbox');
    
    }
    function viewJdwlDokter(){
        document.getElementById("divpopupjdwl").innerHTML='<table  width="90%" border="0" cellspacing="1" cellpadding="0"  align="center"><tr><td><img alt="close" src="../icon/x.png" width="32" class="popup_closebox" style="float:right; cursor: pointer;" /><object style="width:850px;height:560px;font-size:8px;" data="jdwl_dokter/jdwl_dokter.php" ></object></td></tr></table>';
        new Popup('divJdwlDokter',null,{modal:true,position:'center',duration:0});
        document.getElementById('divJdwlDokter').popup.show();
    }


/*  function hapus_sep_(){
        if(document.getElementById('NoSJP').value==''){
            alert('Pasien Belum Punya NO SEP');
            return true;
            }
            
        if(confirm("Anda Yakin Ingin Menghapus SEP NO:"+document.getElementById('NoSJP').value ))
                {
         new Ajax.Request('../bridging1.1/dell_sep.php',{
            method : 'POST',
            parameters : {
                
                'no_sep': document.getElementById('NoSJP').value
                
            },
            onSuccess : function(response){
                
                data = JSON.parse(response.responseText);
                var letters = /^[0-9a-zA-Z]+$/;  
                if(data.response.match(letters)){
                    if(data.response==1){
                        alert('Data Berhasil Di hapus');
                        document.getElementById('getSEP').disabled=false;
                        document.getElementById('NoSJP').value='';
                        //goFilterAndSort('gridbox');
                        }
                   
                }
                else{
                    alert(data.response);
                    //document.getElementById('NoSJP').value='';
                }
            }
        });
                }
        }
    */
    function stkunjungan(a){
if(a==1){ document.getElementById("txtnosep").style.display='block';}   else{
    document.getElementById("txtnosep").style.display='none';
    }
}
    function hapus_sep_(){
        if(document.getElementById('NoSJP').value==''){
            alert('Pasien Belum Punya NO SEP');
            return true;
            }
            
        if(confirm("Anda Yakin Ingin Menghapus SEP NO:"+document.getElementById('NoSJP').value ))
                {
        
         new Ajax.Request('../bridging1.1/dell_sep.php',{
            method : 'POST',
            parameters : {
                
                'no_sep': document.getElementById('NoSJP').value
                
            },
            onSuccess : function(response){
                
                data = JSON.parse(response.responseText);
                var hsl_del=String.prototype.trim.call(data.metadata.code);
                var hsl_message=String.prototype.trim.call(data.metadata.message);
                var letters = /^[0-9a-zA-Z]+$/;  
                if(hsl_del==800){
                     alert(hsl_message);
                    }else{
                if(data.response.match(letters)){
                    if(data.response==document.getElementById('NoSJP').value && hsl_del==200){
                        alert('Data Berhasil Di hapus');
                        document.getElementById('getSEP').disabled=false;
                        document.getElementById('NoSJP').value='';
                        //goFilterAndSort('gridbox');
                          a.loadURL("registrasi_utils.php?grd=true&saring=true&saringan="+document.getElementById('TglKunj').value+"&userLog="+document.getElementById('userLog').value+"&asal="+document.getElementById('asal').value+"&sttkonsul="+sttkonsul,"","GET");
                    }
                   
                }
                else{
                    alert(data.response);
                    //document.getElementById('NoSJP').value='';
                }
              }
            }
            
        });
         
        }
}
    function getINHELT(){
        
        if(status_bpjs_aktif==0){
            alert('Lakukan Check Keangotaan INHELT');
                document.getElementById('NokaInhelt').focus();
                return true;
            }
         if(document.getElementById("rdlaka1").checked==true && document.getElementById("rdlaka2").checked==false){
                    var laka=document.getElementById("rdlaka1").value;
                    
                }
                else if(document.getElementById("rdlaka2").checked==true && document.getElementById("rdlaka1").checked==false){
                    var laka=document.getElementById("rdlaka2").value;
                    
               }
            
        var hak_kelas_=document.getElementById('HakKelas').options[document.getElementById('HakKelas').selectedIndex].text;
        hak_kelas_=hak_kelas_.trim();
        var kode_unit_=document.getElementById('TmpLayanan').options[document.getElementById('TmpLayanan').selectedIndex].title;
        kode_unit_=kode_unit_.trim();
        var datais_inap=document.getElementById('JnsLayanan').value;
        var parse_kode=document.getElementById('txtKamarKelasInhelt').value.split('|');
        
        if(datais_inap==1||datais_inap==44||datais_inap==64||datais_inap==60||datais_inap==57){
            datais_inap=3;
            kode_unit_=kode_unit_.trim();
            hak_kelas_=hak_kelas_.trim();
            var ruangrawat='';
        }else{
            kode_unit_='GIG';   
            datais_inap=4;
            hak_kelas_=parse_kode[1];
            var ruangrawat=parse_kode[0];
        }
        var diagnosa_awal_bpjs=document.getElementById('diagnosa_awalBPJS_id').value;
        diagnosa_awal_bpjs=diagnosa_awal_bpjs.trim();
        
        if(document.getElementById('kode_rujukanBPJS').value==''){
            alert('Kode Rujukan Tidak Bolek Kosong');
            document.getElementById('kode_rujukanBPJS').focus();
            return true;
            }
            if(hak_kelas_=='NON KLS'){
                alert('Isi Hak Kelas Dijamin INHELT ');
                document.getElementById('HakKelas').focus();
                return true;
            }
            if(document.getElementById('kode_ppkBPJS').value==''){
                alert('Isi Kode PPK1 dengan melakukan Click Pada Check Keangotaan INHELT');
                document.getElementById('kode_ppkBPJS').focus();
                return true;
            }
            
            if(document.getElementById('diagnosa_awalBPJS_id').value==''){
                
                alert('Masukkan Diagnosa Awal BPJS ');
                document.getElementById('diagnosa_awalBPJS').focus();
                return true;
                
            }
            if(document.getElementById('NoRm').value==''){
                alert('Masukkan NO RM Pasien ');
                document.getElementById('NoRm').focus();
                return true;
            }
            if(document.getElementById('NoAnggota').value==''){
                alert('Masukkan No Anggota dengan melakukan Click Pada Check Keangotaan INHELT  ');
                document.getElementById('NoAnggota').focus();
                return true;
            }
            if(datais_inap=='2'){
                
                if(kode_unit_=='NULL' || kode_unit_=='' ){
                    alert('Lakukan Mapping Unit RS dengan INHELT');
                    
                    return true;
                }
                
            }
    
        new Ajax.Request('../bridging1.1/inhelt/getINHELT.php',{
            method : 'POST',
            parameters : {
                'tglPelayanan': document.getElementById('TglKunj').value,
                'jnsPelayanan': datais_inap, //->4: inap, 3: jalan
                'noKartu': document.getElementById('NoAnggota').value,
                'noRm': document.getElementById('NoRm').value,
                'noRujukan': document.getElementById('kode_rujukanBPJS').value,
                'ppkRujukan': document.getElementById('kode_ppkBPJS').value ,
                'tglRujukan': document.getElementById('tgl_rujukanBPJS').value,
                'diagAwal': document.getElementById('diagnosa_awalBPJS_id').value,
                'poliTujuan': kode_unit_,
                'catatan': document.getElementById('Ket').value,
                //'diagTambahan': document.getElementById('diagnosa_tambahan').value,
                'lakalantas': laka,
                'klsRawat': hak_kelas_,
                'kunjungan_id_':document.getElementById("txtIdKunj").value,
                'ruangrawat':ruangrawat
            },
            
            onSuccess : function(response){
                     
                      data = JSON.parse(response.responseText);
                      var hsl_=String.prototype.trim.call(data.ERRORCODE);
                      var message=String.prototype.trim.call(data.ERRORDESC);
                      var nosjp_=String.prototype.trim.call(data.NOSJP);
                    if(hsl_!=0){
                            alert(message); 
                    }else{
                        
                         document.getElementById('NoSJP').value=data.NOSJP;
                         document.getElementById('getINHELT').disabled=true;
                    }
                    
                }
        });
        //pars="fn=chkpasiendilayani&noKartu="+document.getElementById('NoAnggota').value+"&tglSep="+document.getElementById('TglKunj').value+"&tglRujukan="+document.getElementById('tgl_rujukanBPJS').value+"&noRujukan="+document.getElementById('kode_rujukanBPJS').value+"&ppkRujukan="+ document.getElementById('kode_ppkBPJS').value+"&jnsPelayanan="+datais_inap+"&catatan="+document.getElementById('Ket').value+"&diagAwal="+document.getElementById('diagnosa_awalBPJS_id').value+"&poliTujuan="+kode_unit_+"&klsRawat="+hak_kelas_+"&lakalantas="+laka+"&noMr="+document.getElementById('NoRm').value+"&kunjungan_id_="+document.getElementById("txtIdKunj").value; 
            // alert(pars);
            
        
    
    }   
    function getSEP(){
        if(status_bpjs_aktif==0){
            alert('Lakukan Check Keangotaan BPJS');
                document.getElementById('no_p_bpjs').focus();
                return true;
            }
        
                if(document.getElementById("rdlaka1").checked==true ){

                    
                    var laka=document.getElementById("rdlaka1").value;
                    

                }else if(document.getElementById("rdlaka2").checked==true ){

                    var laka=document.getElementById("rdlaka2").value;
                }


                if(document.getElementById("rdfaskes1").checked==true ){

                    var asalfaskes=document.getElementById("rdfaskes1").value;
                }
                else if(document.getElementById("rdfaskes2").checked==true ){

                    var asalfaskes=document.getElementById("rdfaskes2").value;
                    
                }   
       

        var kode_unit_=document.getElementById('TmpLayanan').options[document.getElementById('TmpLayanan').selectedIndex].title;
        kode_unit_=kode_unit_.trim();
        var datais_inap=document.getElementById('JnsLayanan').value;
        if(datais_inap==1||datais_inap==44||datais_inap==64){
             datais_inap=2;
             
        }else{
            datais_inap=1;
            
        }
        var hak_kelas_=document.getElementById('HakKelas').options[document.getElementById('HakKelas').selectedIndex].text;
            hak_kelas_=hak_kelas_.trim();
        var kodeDpjp=document.getElementById('txtDpjp').value.split('-');
        var kodeDpjp=kodeDpjp[0];
        var diagnosa_awal_bpjs=document.getElementById('diagnosa_awalBPJS_id').value;
        diagnosa_awal_bpjs=diagnosa_awal_bpjs.trim();
        
        
            if(hak_kelas_=='NON KLS'){
                alert('Isi Hak Kelas Dijamin BPJS ');
                document.getElementById('HakKelas').focus();
                return true;
            }
            if(document.getElementById('kode_ppkBPJS').value==''){
                alert('Isi Kode PPK1 dengan melakukan Click Pada Check Keangotaan BPJS');
                document.getElementById('kode_ppkBPJS').focus();
                return true;
            }
            
            if(document.getElementById('diagnosa_awalBPJS_id').value==''){
                
                alert('Masukkan Diagnosa Awal BPJS ');
                document.getElementById('diagnosa_awalBPJS').focus();
                return true;
                
            }
            if(document.getElementById('NoRm').value==''){
                alert('Masukkan NO RM Pasien ');
                document.getElementById('NoRm').focus();
                return true;
            }
            if(document.getElementById('NoAnggota').value==''){
                alert('Masukkan No Anggota dengan melakukan Click Pada Check Keangotaan BPJS  ');
                document.getElementById('NoAnggota').focus();
                return true;
            }
           // if(document.getElementById('JnsLayanan').value==1||document.getElementById('JnsLayanan').value==64){
            //        if(document.getElementById('txtDpjp').value==''){
            //            alert('Masukkan Kode Dokter ');
            //            return true;
             //       }
            //}
            if(datais_inap=='2'){
                
                if(kode_unit_=='NULL' || kode_unit_=='' ){
                    alert('Lakukan Mapping Unit RS dengan BPJS');
                    
                    return true;
                }
                
            }
           
            if(document.getElementById('telp').value==''){
                alert('Masukkan No Telp ');
                return false;
            }
            var value = document.getElementById('telp').value;
            if (value.length < 8) {
                alert('Masukkan No Telp lebih dari 8 digit ');
                return false; 
            }
            if(document.getElementById('chkSuplesi').checked==true){
                
                var suplesi=1;
                var nosepsuplesi=document.getElementById('txtNoSepSuplesi').value;
            }else{
                var suplesi=0;
                var nosepsuplesi='';
            }
            if(document.getElementById("chkCob").checked==true){
                var cob=1;
            }else{
                var cob=0;
            }

             if(document.getElementById("chkKatarak").checked==true){
                var katarak=1;
            }else{
                var katarak=0;
            }
            
            
            document.body.style.overflow = "hidden";
            var newLoading="<div id='overlay' style='background-color:#fff;position:absolute;top:0;left:0;height:250%;width:100%;z-index:999;opacity:0.5;'><img src='../images/loader4.gif' style='top:600px;left:370px;position:absolute; padding-top:10px' /></div>";
             document.getElementById("divLoading").style.display='table-row';
             document.getElementById("divLoading").innerHTML=newLoading;
            
        new Ajax.Request('../bridging1.1/get_sep.php',{
            method : 'POST',
            parameters : {
                'noKartu': document.getElementById('NoAnggota').value,
                'tglSep': document.getElementById('TglKunj').value,
                'tglRujukan': document.getElementById('tgl_rujukanBPJS').value,
                'noRujukan': document.getElementById('kode_rujukanBPJS').value,
                'ppkRujukan': document.getElementById('kode_ppkBPJS').value ,
                'jnsPelayanan': datais_inap, //->1: inap, 2: jalan
                'catatan': document.getElementById('Ket').value,
                'diagAwal': document.getElementById('diagnosa_awalBPJS_id').value,
                'poliTujuan': kode_unit_,
                'klsRawat': hak_kelas_,
                'lakalantas': laka,
                'noMr': document.getElementById('NoRm').value,
                'kunjungan_id_':document.getElementById("txtIdKunj").value,
                'nmDiagnosa':document.getElementById("diagnosa_awalBPJS").value,
                'noTelp':document.getElementById("telp").value,
                'penjLaka':document.getElementById("cmbPenjLain").value,
                'asalFaskes':asalfaskes,
                'PoliEks':0,
                'cob':cob,
                'katarak':katarak,
                'noSKDP':document.getElementById("noSkdp").value,
                'DPJP':kodeDpjp,
                'tglKejadian':document.getElementById("tgl_kejadian").value,
                'kodeProp':document.getElementById("cmbPropBpjs").value,
                'kodeKab':document.getElementById("cmbKabBpjs").value,
                'kodeKec':document.getElementById("cmbKecBpjs").value,
                'suplesi':suplesi,
                'nosepSuplesi':nosepsuplesi
            },
            
            onSuccess : function(res){
                //alert(res.responseText);
                data = JSON.parse(res.responseText);
                var letters = /^[0-9a-zA-Z]+$/;  
                var hsl_del=String.prototype.trim.call(data.metaData.code);
                var hsl_message=String.prototype.trim.call(data.metaData.message);
                
                document.getElementById("divLoading").style.display='none';
                document.body.style.overflow = "visible";
                if(hsl_del!=200 ){
                     alert(hsl_message);
                }else{
                    var hsl_respon=String.prototype.trim.call(data.response.sep.noSep);
                        if(hsl_respon.match(letters)){
                            document.getElementById('NoSJP').value=hsl_respon;
                            if(document.getElementById('NoSJP').value!=''){
                                document.getElementById('getSEP').disabled=true;
                                
                            }
                        }else{
                                alert(data.response);
                                document.getElementById('NoSJP').value='';
                        }
                }
            }
        });
        //pars="fn=chkpasiendilayani&noKartu="+document.getElementById('NoAnggota').value+"&tglSep="+document.getElementById('TglKunj').value+"&tglRujukan="+document.getElementById('tgl_rujukanBPJS').value+"&noRujukan="+document.getElementById('kode_rujukanBPJS').value+"&ppkRujukan="+ document.getElementById('kode_ppkBPJS').value+"&jnsPelayanan="+datais_inap+"&catatan="+document.getElementById('Ket').value+"&diagAwal="+document.getElementById('diagnosa_awalBPJS_id').value+"&poliTujuan="+kode_unit_+"&klsRawat="+hak_kelas_+"&lakalantas="+laka+"&noMr="+document.getElementById('NoRm').value+"&kunjungan_id_="+document.getElementById("txtIdKunj").value; 
            // alert(pars);
            
        
    }
    function verifikasiDataINHELT(){
        formKunjunganbyStatusPasien(6);
            setTimeout(function(){
            verifikasiDataINHELT_();
             },10)
     
     }
     function verifikasiDataINHELT_(){
         
        if(confirm("Apakah Data Sudah Benar?")){
            
            status_bpjs_aktif=1;
            aktif_set_bpjs=1;
           // document.getElementById('getSEP').disabled = false;
            
            document.getElementById('NoAnggota').value = document.getElementById('i_no').innerHTML;
            document.getElementById('jenis_pesertaBPJS').value = document.getElementById('i_jnsPeserta').innerHTML;
            document.getElementById('nama_ppkBPJS').value = document.getElementById('i_namaProvider').innerHTML;
            document.getElementById('nama_peserta_bpjs').value = document.getElementById('i_nm').innerHTML;
            for(var i=0;i<document.getElementById("HakKelas").length;i++)
                        {
                            if(document.getElementById("HakKelas").options[i].text==document.getElementById('i_kodeHak').value)
                                document.getElementById("HakKelas").selectedIndex = i;
                                
                        }
            
            document.getElementById('kode_ppkBPJS').value = document.getElementById('i_kodeProvider').innerHTML;
            var myDate = new Date();
            var d = myDate.getDate();
            var m =  myDate.getMonth();
                m += 1;  // JavaScript months are 0-11
            var y = myDate.getFullYear();
            var sekarangdate= d+"-"+m+"-"+y;
            document.getElementById('tgl_rujukanBPJS').value = '<?php echo $date_now;?>';
            
            var p_="StatusPenj*-*PESERTA*|*AslMasuk*-*11*|*StatusPas*-*6*|*txtPenjamin*-*INHELT*|*Penjamin*-*6";
                
            fSetValue(window,p_);
            
            //alert(is_edit_reg);
             if(is_edit_reg==1){
                 return true;
                 
                 }
            
            
            
            //setPenjamin(3);
            new Ajax.Request('registrasi_utils.php',{
                method : 'POST',
                parameters : {
                    'getNoRMbyBpjs' : "true",
                    'no_anggota_' : document.getElementById('i_no').innerHTML
                    
                },
            onSuccess : function(response){
                    if(response.responseText=='null'){
                        alert("Maaf No RM dengan no_anggota BPJS "+document.getElementById('i_no').innerHTML+" tidak ditemukan dalam database. Masukkan No RM pasien");
                         document.getElementById("NoRm").focus();
                         
                         
                    }else{
                        data = JSON.parse(response.responseText);
                        
                        //http://www.howtocreate.co.uk/tutorials/javascript/domevents
                        if(document.getElementById('NoRm').disabled==false){
                            document.getElementById('NoRm').value = data[0].no_rm;
                            }
                        
                        var fireOnThis = document.getElementById('NoRm');
                        if( window.KeyEvent ) {
                          var evObj = document.createEvent('KeyEvents');
                          evObj.initKeyEvent( 'keyup', true, true, window, false, false, false, false, 13, 0 );
                        } else {
                          var evObj = document.createEvent('UIEvents');
                          evObj.initUIEvent( 'keyup', true, true, window, 1 );
                          evObj.keyCode = 13;
                        }
                        //alert(evObj);
                        fireOnThis.dispatchEvent(evObj);
                    }

                }
         
            });

        }else{
            document.getElementById('getSEP').disabled = true;
            document.getElementById('no_p_bpjs').value = '';
            
            batal();
        }
    
     }
     function verifikasiDataBPJS__(){
    
     if(document.getElementById('RdKunjungan').checked==true && document.getElementById('txtnosep').value=='' ){
        alert('Silahkan pilih No SEP Kenjungan Sebelumnya');
        batal();
        }else{
         formKunjunganbyStatusPasien(3);
        // fun();
         //setPenjamin(3);
        // SetAsalMasuk();
         setTimeout(function(){

             verifikasiDataBPJS();
             },10)
     }
     }
    function verifikasiDataBPJS(){
        if(confirm("Apakah Data Sudah Benar?")){
            
            status_bpjs_aktif=1;
            aktif_set_bpjs=1;
            document.getElementById('getSEP').disabled = false;
            //document.getElementById('chk_bpjs').value=1;
            document.getElementById('NoAnggota').value = document.getElementById('d_no').innerHTML;
            document.getElementById('txtNIK').value = document.getElementById('txtNikBPJS').value;
            document.getElementById('jenis_pesertaBPJS').value = document.getElementById('d_jnsPeserta').innerHTML;
            document.getElementById('nama_ppkBPJS').value = document.getElementById('d_namaProvider').innerHTML;
            var cname= document.getElementById('d_nm').innerHTML.split("/");
            document.getElementById('nama_peserta_bpjs').value = cname[0];
            document.getElementById('tgl_rujukanBPJS').value = document.getElementById('txtTglRujukan').value;
            for(var i=0;i<document.getElementById("HakKelas").length;i++)

                        {
                            if(document.getElementById("HakKelas").options[i].text==document.getElementById('d_kodeHak').value)
                                document.getElementById("HakKelas").selectedIndex = i;
                                
                        }

            for(var i=0;i<document.getElementById("TmpLayanan").length;i++)

                        {
                            if(document.getElementById("TmpLayanan").options[i].title==document.getElementById('d_politujuan').value)
                                document.getElementById("TmpLayanan").selectedIndex = i;
                                
                        }
            setKelas('setThrough'); r_karcis();
            document.getElementById('kode_poliBPJS').value=document.getElementById('d_politujuan').value;
            //document.getElementById('TmpLayanan').value= document.getElementById('d_politujuan').value;
            document.getElementById('kode_ppkBPJS').value = document.getElementById('d_kodeProvider').innerHTML;
            var myDate = new Date();
            var d = myDate.getDate();
            var m =  myDate.getMonth();
                m += 1;  // JavaScript months are 0-11
            var y = myDate.getFullYear();
            var sekarangdate= d+"-"+m+"-"+y;
            //document.getElementById('tgl_rujukanBPJS').value = '<?php echo $date_now;?>';
            if(document.getElementById('RdKunjungan').checked==true){
            document.getElementById('NoSJP').value =document.getElementById('txtnosep').value;
        
            }
            
           // document.getElementById('StatusPenj').value = 'PESERTA';
           // document.getElementById('AslMasuk').value = 11;
           // document.getElementById('StatusPas').value = 3;
            
            var p_="StatusPenj*-*PESERTA*|*AslMasuk*-*11*|*StatusPas*-*3*|*txtPenjamin*-*BPJS*|*Penjamin*-*3";
                
            fSetValue(window,p_);
            
            //alert(is_edit_reg);
             if(is_edit_reg==1){ return true; }
            
            
            
            //setPenjamin(3);
            new Ajax.Request('registrasi_utils.php',{
                method : 'POST',
                parameters : {
                    'getNoRMbyBpjs' : "true",
                    'no_anggota_' : document.getElementById('d_no').innerHTML
                    
                },
            onSuccess : function(response){
               
                    if(response.responseText=='null'){
                        alert("Maaf No RM dengan no_anggota BPJS "+document.getElementById('d_no').innerHTML+" tidak ditemukan dalam database. Masukkan No RM pasien");
                         var p_bpjs="NoRm*-**|*Nama*-**|*NoRmLm*-**|*NoBiling*-**|*NmOrtu*-**|*NmSuTri*-**|*txtNIK*-**|*th*-**|*Bln*-**|*telp*-**|*Alamat*-**|*rt*-**|*rw*-*";
                         fSetValue(window,p_bpjs);
                         document.getElementById("NoRm").disabled=false;
                         document.getElementById("NoRm").focus();
                         
                         
                    }else{
                        data = JSON.parse(response.responseText);
                        document.getElementById('NoRm').value = data[0].no_rm;
                        document.getElementById('div_pasien').style.display='none';  
                        Request('pasien_list.php?act=cari&txt=NoRm&keyword='+data[0].no_rm,'div_pasien','','GET',GetPasienByNorm);
                            
                       
                    }

                }
         
            });

        }else{
            document.getElementById('getSEP').disabled = true;
            document.getElementById('no_p_bpjs').value = '';
            
            batal();
        }
    }

    function showdataINHELT(data){
        document.getElementById('i_status').innerHTML = String.prototype.trim.call(data.ERRORDESC);
        document.getElementById('i_no').innerHTML = String.prototype.trim.call(data.NOKAPST);
        document.getElementById('i_nm').innerHTML = String.prototype.trim.call(data.NMPST);
        tglLhr = String.prototype.trim.call(data.TGLLAHIR).split("T");
        tgl_lhr = tglLhr[0].split("-");
        document.getElementById('i_birth').innerHTML = tgl_lhr[2]+"-"+tgl_lhr[1]+"-"+tgl_lhr[0];
        document.getElementById('i_kodeProvider').innerHTML = String.prototype.trim.call(data.KODEPROVIDER);
        document.getElementById('i_namaProvider').innerHTML = String.prototype.trim.call(data.NAMAPROVIDER);
        document.getElementById('i_jnsPeserta').innerHTML = String.prototype.trim.call(data.NAMABADANUSAHA);
        document.getElementById('i_hakKelas').innerHTML = String.prototype.trim.call(data.NAMAKELASRAWAT);
        document.getElementById('i_kodeHak').value = String.prototype.trim.call(data.KODEKELASRAWAT);
         
        new Popup('divDataINHELT',null,{modal:true,position:'center',duration:0});
        document.getElementById('divDataINHELT').popup.show();
        
          
    }
    function showDataBPJS(data,t){
    //alert(t);
        if(t==3||t==5){
            riw1.loadURL("registrasi_utils.php?grdRiwayatVclaim=true&idanggota="+String.prototype.trim.call(data.response.rujukan.peserta.noKartu),"","GET");
            
        document.getElementById('d_status').innerHTML = String.prototype.trim.call(data.response.rujukan.peserta.statusPeserta.keterangan);
        document.getElementById('d_no').innerHTML = String.prototype.trim.call(data.response.rujukan.peserta.noKartu);
        document.getElementById('d_nm').innerHTML = String.prototype.trim.call(data.response.rujukan.peserta.nama)+" / "+String.prototype.trim.call(data.response.rujukan.peserta.sex);
        tglLhr = String.prototype.trim.call(data.response.rujukan.peserta.tglLahir).split(" ");
        tgl_lhr = tglLhr[0].split("-");
        document.getElementById('d_birth').innerHTML = tgl_lhr[2]+"-"+tgl_lhr[1]+"-"+tgl_lhr[0];
        document.getElementById('d_kodeProvider').innerHTML = String.prototype.trim.call(data.response.rujukan.provPerujuk.kode);
        document.getElementById('d_namaProvider').innerHTML = String.prototype.trim.call(data.response.rujukan.provPerujuk.nama);
        document.getElementById('d_jnsPeserta').innerHTML = String.prototype.trim.call(data.response.rujukan.peserta.jenisPeserta.keterangan);
        document.getElementById('d_hakKelas').innerHTML = String.prototype.trim.call(data.response.rujukan.peserta.hakKelas.keterangan);
        document.getElementById('d_kdjnspes').innerHTML = String.prototype.trim.call(data.response.rujukan.peserta.pisa);
        document.getElementById('d_poltuj').innerHTML = String.prototype.trim.call(data.response.rujukan.poliRujukan.nama)+" - "+String.prototype.trim.call(data.response.rujukan.poliRujukan.kode);

        document.getElementById('d_politujuan').value = String.prototype.trim.call(data.response.rujukan.poliRujukan.kode);
        document.getElementById('d_kodeHak').value = String.prototype.trim.call(data.response.rujukan.peserta.hakKelas.kode);
        document.getElementById('diagnosa_awalBPJS').value = String.prototype.trim.call(data.response.rujukan.diagnosa.nama)+"-"+String.prototype.trim.call(data.response.rujukan.diagnosa.kode);
        document.getElementById('Ket').value = String.prototype.trim.call(data.response.rujukan.keluhan);
        document.getElementById('kode_rujukanBPJS').value = String.prototype.trim.call(data.response.rujukan.noKunjungan);
        document.getElementById('txtNikBPJS').value = String.prototype.trim.call(data.response.rujukan.peserta.nik);
        var tgl_Rujukan=String.prototype.trim.call(data.response.rujukan.tglKunjungan).split("-");
        document.getElementById('txtTglRujukan').value = tgl_Rujukan[2]+"-"+tgl_Rujukan[1]+"-"+tgl_Rujukan[0];
        
        
         new Ajax.Request('registrasi_utils.php?act=caridiag',{
            method : 'POST',
            parameters : {
                'kode': String.prototype.trim.call(data.response.rujukan.diagnosa.kode)
             },
            
            onSuccess : function(r){
                 document.getElementById('diagnosa_awalBPJS_id').value=r.responseText;
                }
        });
         
        }else if(t==4){
            
        document.getElementById('n_nosep').innerHTML = String.prototype.trim.call(data.response.noSep);
        document.getElementById('n_noKartu').innerHTML = String.prototype.trim.call(data.response.peserta.noKartu);
        document.getElementById('n_nama').innerHTML = String.prototype.trim.call(data.response.peserta.nama);
        tglLhr = String.prototype.trim.call(data.response.peserta.tglLahir).split(" ");
        tgl_lhr = tglLhr[0].split("-");
        document.getElementById('n_birth').innerHTML = tgl_lhr[2]+"-"+tgl_lhr[1]+"-"+tgl_lhr[0];
        document.getElementById('n_jenisPeserta').innerHTML = String.prototype.trim.call(data.response.peserta.jnsPeserta);
        document.getElementById('n_hakKls').innerHTML = String.prototype.trim.call(data.response.peserta.hakKelas);
        document.getElementById('n_tglSEP').innerHTML = String.prototype.trim.call(data.response.tglSep);
        document.getElementById('n_jenisRawat').innerHTML = String.prototype.trim.call(data.response.jnsPelayanan);
        document.getElementById('n_diagnosa').innerHTML = String.prototype.trim.call(data.response.diagnosa);
        document.getElementById('n_poli').innerHTML = String.prototype.trim.call(data.response.poli);
       
        
        
        
        
         
        }else{
        
        
        document.getElementById('d_status').innerHTML = data.response.peserta.statusPeserta.keterangan;
        document.getElementById('d_no').innerHTML = data.response.peserta.noKartu;
        document.getElementById('d_nm').innerHTML = String.prototype.trim.call(data.response.peserta.nama)+" / "+String.prototype.trim.call(data.response.peserta.sex);
        tglLhr = String.prototype.trim.call(data.response.peserta.tglLahir).split(" ");
        tgl_lhr = tglLhr[0].split("-");
        document.getElementById('d_birth').innerHTML = tgl_lhr[2]+"-"+tgl_lhr[1]+"-"+tgl_lhr[0];
        document.getElementById('d_kodeProvider').innerHTML = data.response.peserta.provUmum.kdProvider;
        document.getElementById('d_namaProvider').innerHTML = data.response.peserta.provUmum.nmProvider;
        document.getElementById('d_jnsPeserta').innerHTML = data.response.peserta.jenisPeserta.keterangan;
        document.getElementById('d_hakKelas').innerHTML = data.response.peserta.hakKelas.keterangan;
        document.getElementById('d_kodeHak').value = data.response.peserta.hakKelas.kode;
        document.getElementById('d_kdjnspes').innerHTML = data.response.peserta.pisa;
        document.getElementById('txtNikBPJS').value = data.response.peserta.nik;
        document.getElementById('txtTglRujukan').value ='<?php echo $date_now;?>';
        
        }
        
        if(t==4){
             new Popup('divDataBPJS_',null,{modal:true,position:'center',duration:0});
             document.getElementById('divDataBPJS_').popup.show();
        }else{
             new Popup('divDataBPJS',null,{modal:true,position:'center',duration:0});
            document.getElementById('divDataBPJS').popup.show(); 
        }
          
    }

    function cekSep(){
        new Ajax.Request('../bridging1.1/find_nik.php', {
          method : 'POST',
          parameters :{
            'nom__' : document.getElementById('krs_SEP').value,
            'jenis' : 4
          },onSuccess: function(response) {
             var data = JSON.parse(response.responseText);
             var hsl_k__=String.prototype.trim.call(data.metaData.code);
             if(hsl_k__!='200'){
                 alert(String.prototype.trim.call(data.metaData.message));
             }else{
                 document.getElementById('krs_nama').value=String.prototype.trim.call(data.response.peserta.nama);
             }
          }
        });
    }

    function cekPesertaBPJS(){
        
        if(document.getElementById('chk_bpjs').value!=3){
            riw1.loadURL("registrasi_utils.php?grdRiwayatVclaim=true&idanggota="+document.getElementById('no_p_bpjs').value,"","GET");
        }
    
        if(document.getElementById('no_p_bpjs').value==''){
            if(document.getElementById('chk_bpjs').value==1){
                 alert('Masukkan Kode Peserta BPJS');
                 document.getElementById('chk_bpjs').focus();
                 return true;
            }else{
                 alert('Masukkan nomor yang Di ckeck Keangotaan');
                 document.getElementById('chk_bpjs').focus();
                 return true;
            }
        }
        var newLoading="<div id='overlay' style='background-color:#FFF;position:absolute;top:0;left:0;height:100%;width:100%;z-index:999;opacity:0.5;'><img src='../images/loader4.gif' style='top:50px;left:400px;position:absolute; padding-top:10px' /></div>";
         document.getElementById("divLoading").style.display='table-row';
         document.getElementById("divLoading").innerHTML=newLoading;
         document.body.style.overflow = "hidden";

         new Ajax.Request('../bridging1.1/find_nik.php', {
          method : 'POST',
          parameters :{
            'nom__' : document.getElementById('no_p_bpjs').value,
            'tgl_sep' : document.getElementById('TglSJP').value,
            'jenis' : document.getElementById('chk_bpjs').value,
            'jenisRujukan' : document.getElementById('cmbJenisFaskes').value,
          },onSuccess: function(response) {
           // alert(response.responseText);
          
           console.log(response);
           var data = JSON.parse(response.responseText);
           var hsl_k__=String.prototype.trim.call(data.metaData.code);
            document.getElementById("divLoading").style.display='none'; 
            document.body.style.overflow = "visible";
            //alert(hsl_k__);
                if(hsl_k__!='200'){
                    alert(String.prototype.trim.call(data.metaData.message));
                    return false;
                }else{
                    if(document.getElementById('chk_bpjs').value==4){
                        if(hsl_k__!=200){
                            alert(hsl_k__)  ;
                            return false;
                        }else{
                            showDataBPJS(data,document.getElementById('chk_bpjs').value);   
                        }
                        
                    }else if(document.getElementById('chk_bpjs').value==3||document.getElementById('chk_bpjs').value==5){
                        var hsl_p__=String.prototype.trim.call(data.response.rujukan.peserta.statusPeserta.kode);
                        var status_=String.prototype.trim.call(data.response.rujukan.peserta.statusPeserta.keterangan);
                    }else{
                        var hsl_p__=String.prototype.trim.call(data.response.peserta.statusPeserta.kode);
                        var status_=String.prototype.trim.call(data.response.peserta.statusPeserta.keterangan);
                    }
                    
                }
                    
                
                    //alert(hsl_p__);
                    
               
                        if(hsl_p__!='0'&&document.getElementById('chk_bpjs').value!=4 ){
                            
                            alert(status_);
                            return false;
                            }
                        else
                        {
                             
                             showDataBPJS(data,document.getElementById('chk_bpjs').value);
                        }
                
          }
        });   
        
    }  
    function cekPesertaINHELT(){
    
        if(document.getElementById('NokaInhelt').value==''){
            alert('Masukkan Nomor Kartu INHELT');
            document.getElementById('NokaInhelt').focus();
            return true;
            
        }
        
        new Ajax.Request('../bridging1.1/inhelt/eligibilitas.php', {
          method : 'POST',
          parameters :{
            'noINHELT' : document.getElementById('NokaInhelt').value,
            'tgl_kunjungan' : document.getElementById('TglKunj').value,
            'jenis_kunjungan' : document.getElementById('JnsLayanan').value,
            'tempat_layanan' : document.getElementById('TmpLayanan').options[document.getElementById('TmpLayanan').options.selectedIndex].id
            
            
          },
          onSuccess: function(response) {
               console.log(response);
             var data = JSON.parse(response.responseText);
             var hsl=String.prototype.trim.call(data.ERRORCODE);
             if(hsl=='00'){
                 showdataINHELT(data);
             }else{
                alert(String.prototype.trim.call(data.ERRORDESC));
                document.getElementById('NokaInhelt').value=''; 
                document.getElementById('NokaInhelt').focus();
                 
             }
          }
          });     
       
        
    } 


    function cekNoAnggota(){
        document.getElementById('no_p_bpjs').value=document.getElementById('NoAnggota').value;
    }

    function getDiagnosa(e,par){
        var keywords=par.value;

            if(keywords=="" || keywords.length<3){
                document.getElementById('div_diagnosa').style.display='none';
            }else{
                var key;
                if(window.event) {
                    key = window.event.keyCode;
                }
                else if(e.which) {
                    key = e.which;
                }
                //alert(key);
                if (key==38 || key==40){
                    var tblRow=document.getElementById('tblDiagnosa').rows.length;
                    if (tblRow>0){
                        //alert(RowIdx);
                        if (key==38 && RowIdx>0){
                            RowIdx=RowIdx-1;
                            document.getElementById('lstDiag'+(RowIdx+1)).className='itemtableReq';
                            if (RowIdx>0) document.getElementById('lstDiag'+RowIdx).className='itemtableMOverReq';
                        }else if (key == 40 && RowIdx < tblRow){
                            RowIdx=RowIdx+1;
                            if (RowIdx>1) document.getElementById('lstDiag'+(RowIdx-1)).className='itemtableReq';
                            document.getElementById('lstDiag'+RowIdx).className='itemtableMOverReq';
                        }
                    }
                }
                else if (key==13){
                    if (RowIdx>0){
                        if (fKeyEnt==false){
                            fSetPenyakit(document.getElementById('lstDiag'+RowIdx).lang);
                        }else{
                            fKeyEnt=false;
                        }
                    }
                }
                else if (key!=27 && key!=37 && key!=39){
                    RowIdx=0;
                    fKeyEnt=false;
                    Request('registrasi_utils.php?getDiagnosa=true&aKeyword='+keywords+'&unitId='+document.getElementById('TmpLayanan').value , 'div_diagnosa', '', 'GET' );
                    if (document.getElementById('div_diagnosa').style.display=='none') fSetPosisi(document.getElementById('div_diagnosa'),par);
                    document.getElementById('div_diagnosa').style.display='block';
                }
            }
    }



    function getDiagnosaId(par){
        // alert(par);
         var cdata=par.split("*|*");
        var dar=cdata[3];
        if (dar==1){
        if(confirm("Diagnosa "+cdata[2]+" "+cdata[1]+" Merupakan Diagnosa Non Spesialis Apakah Akan Tetap Dilayani (Kecuali Keadaan Darurat)?"))
                {
        document.getElementById("diagnosa_awalBPJS_id").value=cdata[0];
        document.getElementById("diagnosa_awalBPJS").value=cdata[1]+" - "+cdata[2];
        document.getElementById('div_diagnosa').style.display='none';
                }else{
                document.getElementById("diagnosa_awalBPJS_id").value='';
                document.getElementById("diagnosa_awalBPJS").value='';
                  document.getElementById('div_diagnosa').style.display='none';
                }
        }else{
        document.getElementById("diagnosa_awalBPJS_id").value=cdata[0];
        document.getElementById("diagnosa_awalBPJS").value=cdata[1]+" - "+cdata[2];
        document.getElementById('div_diagnosa').style.display='none';
        }
    }
  function findppk(e,par){
        var keywords=par.value;

            if(keywords=="" || keywords.length<3){
                document.getElementById('div_ppk').style.display='none';
            }else{
                var key;
                if(window.event) {
                    key = window.event.keyCode;
                }
                else if(e.which) {
                    key = e.which;
                }
                //alert(key);
                if (key==38 || key==40){
                    var tblRow=document.getElementById('tblDiagnosa').rows.length;
                    if (tblRow>0){
                        //alert(RowIdx);
                        if (key==38 && RowIdx>0){
                            RowIdx=RowIdx-1;
                            document.getElementById('lstppk'+(RowIdx+1)).className='itemtableReq';
                            if (RowIdx>0) document.getElementById('lstppk'+RowIdx).className='itemtableMOverReq';
                        }else if (key == 40 && RowIdx < tblRow){
                            RowIdx=RowIdx+1;
                            if (RowIdx>1) document.getElementById('lstppk'+(RowIdx-1)).className='itemtableReq';
                            document.getElementById('lstpk'+RowIdx).className='itemtableMOverReq';
                        }
                    }
                }
               
                else if (key!=27 && key!=37 && key!=39){
                    RowIdx=0;
                    fKeyEnt=false;
                    Request('registrasi_utils.php?getppk=true&aKeyword='+keywords+'&unitId='+document.getElementById('TmpLayanan').value , 'div_ppk', '', 'GET' );
                    if (document.getElementById('div_ppk').style.display=='none') fSetPosisi(document.getElementById('div_ppk'),par);
                    document.getElementById('div_ppk').style.display='block';
                }
            }
    }
 function getppkid(par){
        // alert(par);
        var cdata=par.split("*|*");
        document.getElementById("kode_ppkBPJS").value=cdata[0];
        document.getElementById("nama_ppkBPJS").value=cdata[1];
        document.getElementById('div_ppk').style.display='none';
        
    }
function getWilayah(e,par){
        var keywords=par.value;
        var jenis=par.id;

            if(keywords=="" || keywords.length<4){
                document.getElementById('div_wilayah_bpjs').style.display='none';
            }else{
                var key;
                if(window.event) {
                    key = window.event.keyCode;
                }
                else if(e.which) {
                    key = e.which;
                }
                //alert(key);
                if (key==38 || key==40){
                    var tblRow=document.getElementById('tblWilayah').rows.length;
                    if (tblRow>0){
                        //alert(RowIdx);
                        if (key==38 && RowIdx>0){
                            RowIdx=RowIdx-1;
                            document.getElementById('lstWilayah'+(RowIdx+1)).className='itemtableReq';
                            if (RowIdx>0) document.getElementById('lstWilayah'+RowIdx).className='itemtableMOverReq';
                        }else if (key == 40 && RowIdx < tblRow){
                            RowIdx=RowIdx+1;
                            if (RowIdx>1) document.getElementById('lstWilayah'+(RowIdx-1)).className='itemtableReq';
                            document.getElementById('lstWilayah'+RowIdx).className='itemtableMOverReq';
                        }
                    }
                }
                else if (key==13){
                            if (RowIdx>0){
                                if (fKeyEnt==false){
                                    getwilayahid(document.getElementById('lstWilayah'+RowIdx).lang);
                                }
                                else{
                                    fKeyEnt=false;
                                }
                            }
                    }
                else if (key!=27 && key!=37 && key!=39){
                    RowIdx=0;
                    fKeyEnt=false;
                    Request('../bridging1.1/search_dpjp.php?getKabupaten=true&jenis='+jenis+'&kodeKabupaten='+document.getElementById('txtKabBpjs').value , 'div_wilayah_bpjs', '', 'GET' );
                   
                    if (document.getElementById('div_wilayah_bpjs').style.display=='none') fSetPosisi(document.getElementById('div_wilayah_bpjs'),par);
                    document.getElementById('div_wilayah_bpjs').style.display='block';
                }
            }
    }
 function getwilayahid(par){
        // alert(par);
        var cdata=par.split("*|*");
        document.getElementById(''+cdata[2]+'_id').value=cdata[0];
        document.getElementById(''+cdata[2]+'').value=cdata[1];
        document.getElementById('div_wilayah_bpjs').style.display='none';
        
    }

    function getOffset( el ) {
        var _x = 0;
        var _y = 0;
        while( el && !isNaN( el.offsetLeft ) && !isNaN( el.offsetTop ) ) {
            _x += el.offsetLeft - el.scrollLeft;
            _y += el.offsetTop - el.scrollTop;
            el = el.offsetParent;
        }
        return { top: _y, left: _x };
    }
    function cetakSEPplus(){
    	if(document.getElementById('txtIdKunj').value!='' && document.getElementById('StatusPas').value==3||document.getElementById('StatusPas').value==6){
            if(document.getElementById('NoSJP').value!='' && document.getElementById('StatusPas').value==3){
                window.open("cetakSEP.php?kunjungan_id="+document.getElementById('txtIdKunj').value+'&idPel='+iPelId);
            }else if(document.getElementById('NoSJP').value!='' && document.getElementById('StatusPas').value==6){
                window.open("../bridging1.1/inhelt/cetakSKM.php?kunjungan_id="+document.getElementById('txtIdKunj').value+'&userId=<?php echo $userId;?>');
            }
            else{
                alert("Pasien belum melakukan get SEP");
            }
            
        }else{
            alert("Pasien Bukan peserta BPJS");
        }
    }
function cetakSEP(){
        if(document.getElementById('txtIdKunj').value!='' && document.getElementById('StatusPas').value==3||document.getElementById('StatusPas').value==6){
            if(document.getElementById('NoSJP').value!='' && document.getElementById('StatusPas').value==3){
                window.open("cetakSEP.php?kunjungan_id="+document.getElementById('txtIdKunj').value);
            }else if(document.getElementById('NoSJP').value!='' && document.getElementById('StatusPas').value==6){
                window.open("../bridging1.1/inhelt/cetakSKM.php?kunjungan_id="+document.getElementById('txtIdKunj').value+'&userId=<?php echo $userId;?>');
            }
            else{
                alert("Pasien belum melakukan get SEP");
            }
            
        }else{
            alert("Pasien Bukan peserta BPJS");
        }
    }

    function cetakPernyataanBpjs(){
        if(document.getElementById('txtIdKunj').value!='' && document.getElementById('StatusPas').value==3){
            if(document.getElementById("perjanjian").checked == true){
                window.open("cetakPernyataanBpjs.php?pasien_id="+document.getElementById('txtIdPasien').value);
            }else{
                alert("Pasien tidak memiliki kesanggupan mengurus BPJS");
            }
            
        }else{
            alert("Pasien Bukan peserta BPJS");
        }
    }
    function ctkForm(){
        //alert('');
        //var JnsLayanan_sjp=document.getElementById("JnsLayanan_sjp").value;
        var rm = document.getElementById("NoRm").value;
        //var status = document.getElementById("StatusPas").value;
        window.open("../laporan/lap_rawatJln.php?NoRM="+rm+"&unit="+glob_tmpLay);
    }
        var sttkonsul= document.getElementById("sttkonsul").value;
        //alert(sttkonsul);
        var arrRange=depRange=[];
        var RowIdx;
        var fKeyEnt;
        var cari=0;
        var keyword='';
        var abc = 0;
        var prev_stat = '';
        var KunjAktif=false;
        var cIdPas=cIdKunj=cUnit="";
        //variabel untuk ambil data
        var glob_jnsLay = glob_tmpLay = glob_kelas = glob_ret = glob_kamar = glob_dilayani = glob_asal = '';
        //listPasien(event,'show',this.id)
        function listPasien(feel,how,txtId){
            
            if(feel.which == 123){
                //alert('ambil data ');
                ambilData(1);
                
                return;
            }
            /*var txtId = 'NoRm*|*Nama*|*Alamat';
                //var stuff = document.getElementById('NoRm').value+"*|*"+document.getElementById('Nama').value+"*|*"+document.getElementById('Alamat').value;*/
            var stuff=document.getElementById(txtId).value;
            
            if(how=='show'){
                    //alert('pasien_list.php?act=cari&txt='+txtId+'&keyword='+stuff)
                if(feel.which==13 && keyword!=stuff){
                    if (stuff=="" && txtId!="Alamat"&& txtId!="NmOrtu" && txtId!="NmSuTri"){
                        alert("Masukkan No RM atau Nama Pasien !");
                        return false;
                    }else{
                        keyword=stuff;
                        if(txtId != 'NoRm'){
                            
                            stuff = document.getElementById('Nama').value+'<?php echo chr(3);?>'+document.getElementById('Alamat').value+'<?php echo chr(3);?>'+document.getElementById('NmOrtu').value+'<?php echo chr(3);?>'+document.getElementById('NmSuTri').value;
                        
                            document.getElementById('div_pasien').style.left=getOffset(document.getElementById('Alamat')).left+"px";
                            document.getElementById('div_pasien').style.top=getOffset(document.getElementById('Alamat')).top+20+"px";
                            document.getElementById('div_pasien').style.display='block';
                            //alert(stuff);
                            Request('pasien_list.php?act=cari&txt='+txtId+'&keyword='+stuff,'div_pasien','','GET');
                            
                        }else{
                           
                            document.getElementById('div_pasien').style.display='none'; 
                            //document.getElementById('div_pasien').style.display='block';  
                            Request('pasien_list.php?act=cari&txt='+txtId+'&keyword='+stuff,'div_pasien','','GET',GetPasienByNorm);
                        }
                        RowIdx=0;
                        
                    }
                }
                else if ((feel.which==38 || feel.which==40) && document.getElementById('div_pasien').style.display=='block'){
                    //alert(feel.which);
                    //alert(keyword);
                    var tblRow=document.getElementById('pasien_table').rows.length;
                    if (tblRow>0){
                        //alert(RowIdx);
                        if (feel.which==38 && RowIdx>0){
                            RowIdx=RowIdx-1;
                            document.getElementById(RowIdx+1).className='itemtableReq';
                            if (RowIdx>0) document.getElementById(RowIdx).className='itemtableMOverReq';
                        }else if (feel.which == 40 && RowIdx < tblRow){
                            RowIdx=RowIdx+1;
                            if (RowIdx>1) document.getElementById(RowIdx-1).className='itemtableReq';
                            document.getElementById(RowIdx).className='itemtableMOverReq';
                        }
                    }
                }
                else if (feel.which==13 && keyword==stuff && RowIdx>0){
                    
                    setPasien(document.getElementById(RowIdx).lang);
                    keyword='';
                }
                if(feel.which==27 || stuff==''){
                    if(feel.which!= 27 && txtId != 'Norm' && (document.getElementById('Nama').value != '' || document.getElementById('Alamat').value != ''))
                        return;
                    document.getElementById('div_pasien').style.display='none';
                    keyword='';
                }
            }
        }
     function cekortu(e,par){
               var keywords=par.value;
                if(e.which==13){
                
                            
                            document.getElementById('div_pasienby').style.left=getOffset(document.getElementById('NmSuTri')).right+"px";
                            document.getElementById('div_pasienby').style.top=getOffset(document.getElementById('NmSuTri')).top+20+"px";
                            document.getElementById('div_pasienby').style.display='block';
                            
                            Request('pasien_list.php?act=cariby&keyword='+keywords,'div_pasienby','','GET');
                            
                        }else{
                            
                            document.getElementById('div_pasienby').style.display='none';   
                        
                        }
                        
        }   
        function setTgl(ev,par){
        //alert(ev.which);
            var tmp = par.value;
            var tmpSplit = tmp.split('-');
            for(var i=0; i<tmpSplit.length; i++){
                if(isNaN(tmpSplit[i]) == true){
                    alert('Masukan tanggal berupa angka!');
                    par.value = '';
                    return;
                }
            }
            
        if(ev.which!='8'){
        if(tmp.length == 2){
            if(tmp<=31){                
                par.value = tmp+'-';
            }else{
                alert('Tanggal jangan melebihi 31!');
                par.value = 31+'-';
            }
        }
        else if(tmp.length == 5){
            if(parseInt(tmp.substr(3,2))<=12){
                par.value = tmp+'-';
            }else{
                alert('Bulan jangan melebihi 12!');
                tmp = tmp.substr(0,3);
                par.value = tmp+12+'-';
            }
        }
        else if(tmp.length == 10){
            gantiUmur();
        }
        else if(tmp.length > 10){
            par.value = tmp.substr(0,(tmp.length-1));
        }
        }
        }

        var befval = '';
        function filterInap(val,isEdit){
            //jika value asal masuk = 3 (datang sendiri, jenis layanan inap tidak muncul)
          if(val == ''){
             document.getElementById('AslMasuk').value = befval;
             return;
          }
          var reload = true,jns = '',jns_lay = '';
          //var tmp_jns = document.getElementById('JnsLayanan').value;
          var tmp_unit = document.getElementById('TmpLayanan').value;
            if(val == 3  && befval != 3){
                 jns = 'JnsLayananFull';
             //jns = 'JnsLayananReg';
                //isiCombo('JnsLayananReg','', glob_jnsLay,'JnsLayanan',isiTmpLay);
            }
            else if(befval == 3 && val != 3){
             jns = 'JnsLayananFull';
                //isiCombo('JnsLayananFull','', glob_jnsLay,'JnsLayanan',isiTmpLay);
            }
          else{
             reload = false;
          }
          if (isEdit==1){
             if(val == 3){
                jns = 'JnsLayananReg';
                //jns = 'JnsLayananFull';
             }
             else{
                jns = 'JnsLayananFull';
             }
             reload = true;
              jns_lay = glob_jnsLay;
              if(glob_tmpLay != ''){
                tmp_unit = glob_tmpLay;
              }
          }else{
              jns_lay = document.getElementById('JnsLayanan').value
          }
          
          if(reload == true){
            isiCombo(jns, '', jns_lay, 'JnsLayanan'
                    , function(){
                       //if(glob_tmpLay != ''){
                       //}
                       //document.getElementById('JnsLayanan').value = tmp_jns;
                       isiCombo('TmpLayananDenganInap',document.getElementById('JnsLayanan').value, tmp_unit,'TmpLayanan',setKelas);
                       });
            document.getElementById('JnsLayanan_sjp').value = jns_lay;
            isiCombo('TmpLayanan_sjp',document.getElementById('JnsLayanan_sjp').value, tmp_unit,'TmpLayanan_sjp',setKelas_sjp);
          }
            /*else{
            //alert(glob_jnsLay);
            var jns = ((val != 3)?'JnsLayananFull':'JnsLayananReg');
            if (isEdit==1){
                isiCombo(jns, '', glob_jnsLay, 'JnsLayanan', isiTmpLay);
            }else{
                isiCombo(jns, '', document.getElementById('JnsLayanan').value, 'JnsLayanan', isiTmpLay);
            }*/
            //}

            befval = val;
        }

        function getNoRM(){
            //alert('registrasi_utils.php?act=getNoRM');
            document.getElementById("txtIdKunj").value="";
            document.getElementById("txtIdPasien").value="";
            document.getElementById("IsNewPas").value="1";
            Request('registrasi_utils.php?act=getNoRM','txtNoRM','','GET',setNoRM,'ok');
        }
        function setNoRM(){
            document.getElementById('NoRm').value = document.getElementById('txtNoRM').value;
            getNoBil();
            SetDisable(4);
        }

        var dataPasien = new Array();

        function setPasien(val){
            dataPasien=val.split("|");
            var p="";
            
            //alert(dataPasien.length);
            if (dataPasien.length>25){
                
                KunjAktif=true;
                p="txtIdPasien*-*"+dataPasien[0]+"*|*NoRm*-*"+dataPasien[1]+"*|*NmOrtu*-*"+dataPasien[11]+"*|*Nama*-*"+dataPasien[2]
                +"*|*NmSuTri*-*"+dataPasien[12]+"*|*Gender*-*"+dataPasien[13]+"*|*TglLahir*-*"+dataPasien[3]+"*|*Alamat*-*"+dataPasien[4]
                +"*|*cmbProp*-*"+dataPasien[10]+"*|*cmbKab*-*"+dataPasien[9]+"*|*cmbKec*-*"+dataPasien[8]+"*|*cmbDesa*-*"+dataPasien[7]
                +"*|*rt*-*"+dataPasien[5]+"*|*rw*-*"+dataPasien[6]+"*|*Pendidikan*-*"+dataPasien[14]+"*|*Pekerjaan*-*"+dataPasien[15]
                +"*|*cmbAgama*-*"+dataPasien[16]+"*|*telp*-*"+dataPasien[17]+"*|*StatusPas*-*"+dataPasien[18]+"*|*Penjamin*-*"+dataPasien[18]
                +"*|*NoAnggota*-*"+dataPasien[19]+"*|*HakKelas*-*"+dataPasien[20]+"*|*StatusPenj*-*"+dataPasien[21]+"*|*txtIdKunj*-*"+dataPasien[22]+"*|*TglKunj*-*"+dataPasien[23]+"*|*AslMasuk*-*"+dataPasien[24]+"*|*StatusPas*-*"+dataPasien[18]+"*|*TglSJP*-*"+dataPasien[25]+"*|*NoSJP*-*"+dataPasien[26];
                
                
                
                glob_jnsLay=dataPasien[27];
                glob_tmpLay=dataPasien[28];
                glob_kamar=dataPasien[29];
                glob_kelas=dataPasien[30];
                glob_ret = dataPasien[31];
                cIdPas=dataPasien[0];
                cIdKunj=dataPasien[22];
                cUnit=dataPasien[28];
                filterInap(dataPasien[27],1);
            }else{
                KunjAktif=false;
                
            
                if(status_bpjs_aktif==0 ){
                    if(dataPasien[18]!=3){
                        
                var p="txtIdPasien*-*"+dataPasien[0]+"*|*NoRm*-*"+dataPasien[1]+"*|*NmOrtu*-*"+dataPasien[11]+"*|*Nama*-*"+dataPasien[2]+"*|*NmSuTri*-*"+dataPasien[12]+"*|*Gender*-*"+dataPasien[13]+"*|*TglLahir*-*"+dataPasien[3]+"*|*Alamat*-*"+dataPasien[4]+"*|*cmbProp*-*"+dataPasien[10]+"*|*cmbKab*-*"+dataPasien[9]+"*|*cmbKec*-*"+dataPasien[8]+"*|*cmbDesa*-*"+dataPasien[7]+"*|*rt*-*"+dataPasien[5]+"*|*rw*-*"+dataPasien[6]+"*|*Pendidikan*-*"+dataPasien[14]+"*|*Pekerjaan*-*"+dataPasien[15]+"*|*cmbAgama*-*"+dataPasien[16]+"*|*telp*-*"+dataPasien[17]+"*|*StatusPas*-*"+dataPasien[18]+"*|*Penjamin*-*"+dataPasien[18]+"*|*NoAnggota*-*"+dataPasien[19]+"*|*HakKelas*-*"+dataPasien[20]+"*|*StatusPenj*-*"+dataPasien[21]+"*|*panggilan*-*"+dataPasien[22]+"*|*txtNIK*-*"+dataPasien[23]+"*|*txtIdKunj*-*";
                
                    }else{
                    
                    var p="txtIdPasien*-*"+dataPasien[0]+"*|*NoRm*-*"+dataPasien[1]+"*|*NmOrtu*-*"+dataPasien[11]+"*|*Nama*-*"+dataPasien[2]
                +"*|*NmSuTri*-*"+dataPasien[12]+"*|*Gender*-*"+dataPasien[13]+"*|*TglLahir*-*"+dataPasien[3]+"*|*Alamat*-*"+dataPasien[4]
                +"*|*cmbProp*-*"+dataPasien[10]+"*|*cmbKab*-*"+dataPasien[9]+"*|*cmbKec*-*"+dataPasien[8]+"*|*cmbDesa*-*"+dataPasien[7]
                +"*|*rt*-*"+dataPasien[5]+"*|*rw*-*"+dataPasien[6]+"*|*Pendidikan*-*"+dataPasien[14]+"*|*Pekerjaan*-*"+dataPasien[15]
                +"*|*cmbAgama*-*"+dataPasien[16]+"*|*telp*-*"+dataPasien[17]+"*|*panggilan*-*"+dataPasien[22]+"*|*txtNIK*-*"+dataPasien[23]
                +"*|*txtIdKunj*-*";
                    
                    }
                }else{
                    //alert('');
                    var p="txtIdPasien*-*"+dataPasien[0]+"*|*NoRm*-*"+dataPasien[1]+"*|*NmOrtu*-*"+dataPasien[11]+"*|*Nama*-*"+dataPasien[2]
                +"*|*NmSuTri*-*"+dataPasien[12]+"*|*Gender*-*"+dataPasien[13]+"*|*TglLahir*-*"+dataPasien[3]+"*|*Alamat*-*"+dataPasien[4]
                +"*|*cmbProp*-*"+dataPasien[10]+"*|*cmbKab*-*"+dataPasien[9]+"*|*cmbKec*-*"+dataPasien[8]+"*|*cmbDesa*-*"+dataPasien[7]
                +"*|*rt*-*"+dataPasien[5]+"*|*rw*-*"+dataPasien[6]+"*|*Pendidikan*-*"+dataPasien[14]+"*|*Pekerjaan*-*"+dataPasien[15]
                +"*|*cmbAgama*-*"+dataPasien[16]+"*|*telp*-*"+dataPasien[17]+"*|*txtNIK*-*"+dataPasien[23]
                   +"*|*txtIdKunj*-*";
               //--ub13 +"*|*txtIdKunj*-*";
                //document.getElementById('HakKelas').disabled = true;
                    }
                //alert(p); //+"*|*StatusPas*-*"+dataPasien[18]
            }
            if(document.getElementById('asal').value == 108){
                
                document.getElementById('skpJamkesda').disabled = false;
                //document.getElementById('UpdStatusPx').disabled = false;              
                //alert("registrasi_utils.php?act=jamkeskah&idKunj="+cIdKunj);
                Request("registrasi_utils.php?act=jamkeskah&idKunj="+cIdKunj,'skpDiv','','GET',skpCek);
            }
            
            
            cIdPas=dataPasien[0];
            fSetValue(window,p);
            document.getElementById("IsNewPas").value="0";
            isiCombo('cmbKab',((dataPasien[10]!='')?dataPasien[10]:1),(dataPasien[9]!='')?dataPasien[9]:1182);
            isiCombo('cmbKec',dataPasien[9],dataPasien[8]);
            isiCombo('cmbDesa',dataPasien[8],dataPasien[7]);
            gantiUmur();
            document.getElementById('div_pasien').style.display='none';
            
            
         
          //  if(dataPasien[18]!=undefined || dataPasien[18]!=''){
                
            //    setPenjamin(dataPasien[18]);              
           // }
          //  else{
               // setPenjamin(1);
            //}
            
            getNoBil();
            cekumur();
            if (dataPasien.length>25){
                //alert('aktif');
                SetDisable(1);
                document.getElementById("divKunjLagi").style.display="block";
            }else{
                SetDisable(0);
                SetAsalMasuk();
                document.getElementById("divKunjLagi").style.display="none";
            }
            SetDisable(2,dataPasien[20]);
            
    //aisyah edit 13/11/2014
            if(dataPasien[18]!=3 && dataPasien[18]!=1){
                fSetValue(window,"NoAnggota*-*"+dataPasien[19]);
               // cekNoAnggota();
            }   
                                                                        
        }
       
       function skpCek(){
          if(document.getElementById('skpDiv').innerHTML>0){          
             //document.getElementById('skpJamkesdaKmr').disabled = false;           
          }
          else{
             //document.getElementById('skpJamkesdaKmr').disabled = true;             
          }
       }
        
        function SetKunjungLagi(){
            SetDisable(0);
            fSetValue(window,"txtIdKunj*-**|*TglKunj*-*<?php echo $date_now;?>*|*TglSJP*-*<?php echo $date_now;?>");
            SetAsalMasuk();
            document.getElementById('divKunjLagi').style.display="none";
        }
        
        function SetAsalMasuk(){
            if (document.getElementById('StatusPas').value=="1"){
                fSetValue(window,"AslMasuk*-*3");
            }
            if (document.getElementById('StatusPas').value=="3"){
                fSetValue(window,"AslMasuk*-*11");
            }else if (document.getElementById('StatusPas').value=="4"){
                fSetValue(window,"AslMasuk*-*11");
            }else if (document.getElementById('StatusPas').value=="16" || document.getElementById('StatusPas').value=="2"){
                fSetValue(window,"AslMasuk*-*2");
            }else if (document.getElementById('StatusPas').value=="38" || document.getElementById('StatusPas').value=="39" || document.getElementById('StatusPas').value=="46"){
                
            }else{
                fSetValue(window,"AslMasuk*-*4");
            }
            filterInap(document.getElementById('AslMasuk').value,0);
        }

        function GetPasienByNorm(){
            var tbl=document.getElementById('pasien_table');
            var crow=tbl.rows.length;
            if(crow==2){
                setPasien(document.getElementById('1').lang);
                document.getElementById('AslMasuk').focus();
            }else{
                document.getElementById('div_pasien').style.display='block';
            }
        }

        function isiKabBpjs(){
            isiCombo('cmbKabBpjs',document.getElementById('cmbPropBpjs').value,'','',isiKecBpjs);
            //document.getElementById('cmbKab').value = 'TUBAN';
        }
        function isiKecBpjs(){
            isiCombo('cmbKecBpjs',document.getElementById('cmbKabBpjs').value,'','');
            //document.getElementById('cmbKab').value = 'TUBAN';
        }

        function isiKab(){
            isiCombo('cmbKab',document.getElementById('cmbProp').value,'','',isiKec);
            //document.getElementById('cmbKab').value = 'TUBAN';
        }
        function isiKec(){
            
            isiCombo('cmbKec',document.getElementById('cmbKab').value,'','',isiDesa);
        }

        function isiDesa(){
            isiCombo('cmbDesa',document.getElementById('cmbKec').value);
        }
       
        /*isi combobox:
    id => elemen target
    val => parameter (bisa multiple dengan sparator ',')
    defaultId => value yang akan diselected
         */
         
        function SetDisable(p,h){
        var p;
            if (p==1){
                document.getElementById('NoRm').disabled=true;
                document.getElementById('BtnNoRM').disabled=true;
                document.getElementById('Nama').disabled=true;
                document.getElementById('NmOrtu').disabled=true;
                document.getElementById('NmSuTri').disabled=true;
                document.getElementById('Gender').disabled=true;
                document.getElementById('panggilan').disabled=true;
                
                document.getElementById('Pendidikan').disabled=true;
                document.getElementById('Pekerjaan').disabled=true;
                document.getElementById('TglLahir').disabled=true;
                document.getElementById('ButtonTglLahir').disabled=true;
                document.getElementById('th').disabled=true;
                document.getElementById('Bln').disabled=true;
                document.getElementById('cmbAgama').disabled=true;
                document.getElementById('Alamat').disabled=true;
                
                document.getElementById('rt').disabled=true;
                document.getElementById('rw').disabled=true;
                document.getElementById('cmbProp').disabled=true;
                document.getElementById('cmbKab').disabled=true;
                document.getElementById('cmbKec').disabled=true;
                document.getElementById('cmbDesa').disabled=true;
                document.getElementById('txtPenjamin').disabled=true;
                
                document.getElementById('NoAnggota').disabled=true;
                document.getElementById('HakKelas').disabled=true;
                document.getElementById('StatusPenj').disabled=true;
                document.getElementById('TglKunj').disabled=true;
                //document.getElementById('ButtonTglKunj').disabled=true;
                document.getElementById('AslMasuk').disabled=true;
                document.getElementById('Ket').disabled=true;
                
                document.getElementById('StatusPas').disabled=true;
                document.getElementById('TglSJP').disabled=true;
                document.getElementById('ButtonTglSJP').disabled=true;
                document.getElementById('NoSJP').disabled=true;
                document.getElementById('JnsLayanan').disabled=true;
                document.getElementById('TmpLayanan').disabled=true;
                document.getElementById('cmbKelas').disabled=true;
                document.getElementById('Retribusi').disabled=true;
                document.getElementById('kamar').disabled=true;
                
                document.getElementById('getSJP').disabled=true;
                document.getElementById('getSEP').disabled=true;
                document.getElementById('getINHELT').disabled=true;

                document.getElementById('tgl_kejadian').disabled=true;
                document.getElementById('cmbPenjLain').disabled=true;
                document.getElementById('rdlaka1').disabled=true;
                document.getElementById('rdlaka2').disabled=true;
                document.getElementById('chkCob').disabled=true;
                document.getElementById('chkKatarak').disabled=true;
                document.getElementById('rdfaskes1').disabled=true;
                document.getElementById('rdfaskes2').disabled=true;
                document.getElementById('btn_tgl_kejadian').disabled=true;
                document.getElementById('txtDpjp').disabled=true;
                document.getElementById('noSkdp').disabled=true;
                document.getElementById('btnDpjp').disabled=true;
                document.getElementById('nama_ppkBPJS').disabled=true;
                document.getElementById('kode_ppkBPJS').disabled=true;
                document.getElementById('kode_rujukanBPJS').disabled=true;
                document.getElementById('diagnosa_awalBPJS').disabled=true;
                document.getElementById('tgl_rujukanBPJS').disabled=true;
                document.getElementById('btn_tgl_rujukanBPJS').disabled=true;
                document.getElementById('chk_no_p').disabled=false;
                document.getElementById('btnSimpan').value="  Ubah  ";
            }else if (p==0){
                document.getElementById('NoRm').disabled=false;
                document.getElementById('BtnNoRM').disabled=false;
                document.getElementById('Nama').disabled=false;
                document.getElementById('NmOrtu').disabled=false;
                document.getElementById('NmSuTri').disabled=false;
                document.getElementById('Gender').disabled=false;
                document.getElementById('panggilan').disabled=false;

                document.getElementById('Pendidikan').disabled=false;
                document.getElementById('Pekerjaan').disabled=false;
                document.getElementById('TglLahir').disabled=false;
                document.getElementById('ButtonTglLahir').disabled=false;
                document.getElementById('th').disabled=false;
                document.getElementById('Bln').disabled=false;
                document.getElementById('cmbAgama').disabled=false;
                document.getElementById('Alamat').disabled=false;
                
                document.getElementById('rt').disabled=false;
                document.getElementById('rw').disabled=false;
                document.getElementById('cmbProp').disabled=false;
                document.getElementById('cmbKab').disabled=false;
                document.getElementById('cmbKec').disabled=false;
                document.getElementById('cmbDesa').disabled=false;
                document.getElementById('txtPenjamin').disabled=false;
                
                document.getElementById('NoAnggota').disabled=false;
                document.getElementById('HakKelas').disabled=true;
                document.getElementById('StatusPenj').disabled=false;
                document.getElementById('TglKunj').disabled=false;
                //document.getElementById('ButtonTglKunj').disabled=false;
                document.getElementById('AslMasuk').disabled=false;
                document.getElementById('Ket').disabled=false;
                
                document.getElementById('StatusPas').disabled=false;
                document.getElementById('TglSJP').disabled=false;
                document.getElementById('ButtonTglSJP').disabled=false;
                document.getElementById('NoSJP').disabled=false;
                document.getElementById('JnsLayanan').disabled=false;
                document.getElementById('TmpLayanan').disabled=false;
                document.getElementById('cmbKelas').disabled=false;
                document.getElementById('Retribusi').disabled=false;
                document.getElementById('kamar').disabled=false;

                document.getElementById('tgl_kejadian').disabled=false;
                document.getElementById('cmbPenjLain').disabled=false;
                document.getElementById('rdlaka1').disabled=false;
                document.getElementById('rdlaka2').disabled=false;
                document.getElementById('chkCob').disabled=false;
                document.getElementById('chkKatarak').disabled=false;
                document.getElementById('rdfaskes1').disabled=false;
                document.getElementById('rdfaskes2').disabled=false;
                document.getElementById('btn_tgl_kejadian').disabled=false;
                document.getElementById('txtDpjp').disabled=false;
                document.getElementById('noSkdp').disabled=false;
                document.getElementById('btnDpjp').disabled=false;
                document.getElementById('nama_ppkBPJS').disabled=false;
                document.getElementById('kode_ppkBPJS').disabled=false;
                document.getElementById('kode_rujukanBPJS').disabled=false;
                document.getElementById('diagnosa_awalBPJS').disabled=false;
                document.getElementById('tgl_rujukanBPJS').disabled=false;
                document.getElementById('btn_tgl_rujukanBPJS').disabled=false;
                document.getElementById('chk_no_p').disabled=false;
                //document.getElementById('getSEP').disabled=false;

                /*if(document.getElementById('asal').value == 110){
                    document.getElementById('getSJP').disabled=false;
                }else{
                    document.getElementById('getSJP').disabled=true;
                }*/

                document.getElementById('btnSimpan').value="Tambah";
            }else if (p==2){
                document.getElementById('NoRm').disabled=true;
                document.getElementById('BtnNoRM').disabled=true;
                document.getElementById('Nama').disabled=true;
                document.getElementById('HakKelas').disabled=true;
                setPenjamin(document.getElementById('StatusPas').value,h);
            }else if (p==3){
                document.getElementById('NoRm').disabled=false;
                document.getElementById('BtnNoRM').disabled=false;
                //document.getElementById('Nama').disabled=true;
                document.getElementById('Nama').disabled=false;
                setPenjamin(document.getElementById('StatusPas').value);
            }else if (p==4){
                // alert(1233);
                document.getElementById('NoRm').disabled=true;
                document.getElementById('BtnNoRM').disabled=true;
                document.getElementById('Nama').disabled=false;
                setPenjamin(document.getElementById('StatusPas').value);
            }else if (p==5){
                document.getElementById('NoAnggota').disabled=true;
                document.getElementById('HakKelas').disabled=true;
                document.getElementById('StatusPenj').disabled=true;
                document.getElementById('txtPenjamin').disabled=true;
                /*if(document.getElementById('asal').value == 110){
                    document.getElementById('getSJP').disabled=false;
                }else{
                    document.getElementById('getSJP').disabled=true;
                }*/
            }
        }
        
        function isiCombo(id,val,defaultId,targetId,evloaded){
            if(targetId=='' || targetId==undefined){
                targetId=id;
            }
            var all = '';
            if(id == 'userLog'){
                //alert('../combo_utils.php?id='+id+'&value='+val+'&defaultId='+defaultId)
                all = '&all=1';
            }
            Request('../combo_utils.php?id='+id+'&value='+val+'&defaultId='+defaultId+all,targetId,'','GET',evloaded,'ok');
            //alert('combo_utils.php?id='+id+'&value='+val+'&defaultId='+defaultId);
        }

        isiCombo('Pendidikan');
        isiCombo('Pekerjaan','','14');
        isiCombo('cmbProp','',(dataPasien[10]!=undefined)?dataPasien[10]:1);
        isiCombo('cmbKab',((dataPasien[10]!=undefined)?dataPasien[10]:1),(dataPasien[9]!=undefined)?dataPasien[9]:6420,'',isiKec);
        isiCombo('cmbKec',((dataPasien[9]!=undefined)?dataPasien[9]:1182),(dataPasien[8]!=undefined)?dataPasien[8]:1329);
        isiCombo('cmbDesa',((dataPasien[8]!=undefined)?dataPasien[8]:1329),(dataPasien[7]!=undefined)?dataPasien[7]:1336);
        isiCombo('AslMasuk','',3,'AslMasuk',function(){befval=document.getElementById('AslMasuk').value});
        //setTimeout("isiKec()",2000)
        isiCombo('cmbPropBpjs','',14);
        isiCombo('cmbKabBpjs',14,'0203');
        isiCombo('cmbKecBpjs','0203','00123');
        //isiCombo('cmbDesa',document.getElementById('cmbKec').value);
        
        isiCombo('JnsLayananReg','','1','JnsLayanan',isiTmpLay);
        isiCombo('JnsLayanan_sjp','','1','JnsLayanan_sjp',isiTmpLay_sjp);
        isiCombo('marital','','','cmbMarital');
        isiCombo('suku','','53','cmbSuku');
        //getNoRM();

        function isiTmpLay(pass){
            if(pass == 'setThrough'){
                document.getElementById('JnsLayanan_sjp').value = document.getElementById('JnsLayanan').value;
                isiTmpLay_sjp();
            }
            //alert(document.getElementById('JnsLayanan').value);
            isiCombo('TmpLayananDenganInap',document.getElementById('JnsLayanan').value, glob_tmpLay,'TmpLayanan',setKelas);
            
        }
        isiCombo('cmbAgama');
        isiCombo('HakKelas','','','HakKelas');

        function isiTmpLay_sjp(pass){
            if(pass == 'setThrough'){
                document.getElementById('JnsLayanan').value = document.getElementById('JnsLayanan_sjp').value;
                isiTmpLay();
            }
            isiCombo('TmpLayanan_sjp',document.getElementById('JnsLayanan_sjp').value, glob_tmpLay,'TmpLayanan_sjp',setKelas_sjp);
        }
        isiCombo('HakKelasSJP','','','HakKelas_sjp');

        function setKelas(pass){
          //  if(pass == 'setThrough'){
           //     document.getElementById('TmpLayanan_sjp').value = document.getElementById('TmpLayanan').value;
          //      setKelas_sjp();
          //  }
            var tmp = document.getElementById('TmpLayanan').options[document.getElementById('TmpLayanan').options.selectedIndex].lang;
            //alert(document.getElementById('TmpLayanan').value+','+document.getElementById('JnsLayanan').value+','+tmp);
            var stpas=document.getElementById('StatusPas').value;
            if (stpas == '38' || stpas == '39' || stpas == '46'){
                isiCombo('cmbKelasPasienJamkesmas',document.getElementById('TmpLayanan').value+','+document.getElementById('JnsLayanan').value+','+tmp, glob_kelas,'cmbKelas',isiKamar);
            }else{
               
                isiCombo('cmbKelasPasien',document.getElementById('TmpLayanan').value+','+document.getElementById('JnsLayanan').value+','+tmp, glob_kelas,'cmbKelas',isiKamar);
            
            }
            document.getElementById('kode_poliBPJS').value=document.getElementById('TmpLayanan').options[document.getElementById('TmpLayanan').options.selectedIndex].title;
        }
        
        function r_karcis(){
            document.getElementById('spanTarif').innerHTML = '0';
            document.getElementById('spanId').innerHTML = '0';
            
            } 

        function setKelas_sjp(pass){
            
            if(pass == 'setThrough'){
                document.getElementById('TmpLayanan').value = document.getElementById('TmpLayanan_sjp').value;
                setKelas();
            }
            var tmp = document.getElementById('TmpLayanan_sjp').options[document.getElementById('TmpLayanan_sjp').options.selectedIndex].lang;
            var stpas=document.getElementById('StatusPas').value;
            if (stpas == '38' || stpas == '39' || stpas == '46'){
                isiCombo('cmbKelasPasienJamkesmas',document.getElementById('TmpLayanan_sjp').value+','+document.getElementById('JnsLayanan_sjp').value+','+tmp, glob_kelas,'cmbKelas_sjp',isiKamar_sjp);
            }else{
                isiCombo('cmbKelasPasien',document.getElementById('TmpLayanan_sjp').value+','+document.getElementById('JnsLayanan_sjp').value+','+tmp, glob_kelas,'cmbKelas_sjp',isiKamar_sjp);
            }
        }

        function isiKamar(pass){
           // if(pass == 'setThrough'){
           //     document.getElementById('cmbKelas_sjp').value = document.getElementById('cmbKelas').value;
           //     isiKamar_sjp();
           // }
            var tmp = document.getElementById('TmpLayanan').options[document.getElementById('TmpLayanan').options.selectedIndex].lang;
             
            if(tmp == 1){
                
                document.getElementById('td_ret').style.display = 'none';
                document.getElementById('td_ret1').style.display = 'none';
                document.getElementById('td_room').style.display = '';
                document.getElementById('td_room1').style.display = '';
                isiCombo('kamar', document.getElementById('TmpLayanan').value+','+document.getElementById('cmbKelas').value, document.getElementById('div_room').innerHTML, 'kamar', setTarip);
                document.getElementById('div_room').innerHTML = '';

                //getTaripKamar(document.getElementById('kamar').value);
            }
            else{
                
                document.getElementById('td_ret').style.display = '';
                document.getElementById('td_ret1').style.display = '';
                document.getElementById('td_room').style.display = 'none';
                document.getElementById('td_room1').style.display = 'none';
                var jnsLay = document.getElementById('JnsLayanan').value;
                var tmpLay = document.getElementById('TmpLayanan').value;
                //document.getElementById('cmbKelas').value+','+document.getElementById('TmpLayanan').value
                //alert(jnsLay+','+tmpLay);
                isiCombo('Retribusi', jnsLay+','+tmpLay, glob_ret,'',sumRetribusi);
                //setTarifAll();
            }
            
        }
        
            
            
        function sumRetribusi(){
                var jnsLay = document.getElementById('JnsLayanan').value;
                var tmpLay = document.getElementById('TmpLayanan').value;
            isiCombo('SUMRetribusi', jnsLay+','+tmpLay, glob_ret, 'spanTarif');
            if(glob_ret!=''){
            document.getElementById("spanId").innerHTML = glob_ret;
            }
        }

        function isiKamar_sjp(pass){
            if(pass == 'setThrough'){
                document.getElementById('cmbKelas').value = document.getElementById('cmbKelas_sjp').value;
                isiKamar();
            }
            var tmp = document.getElementById('TmpLayanan_sjp').options[document.getElementById('TmpLayanan_sjp').options.selectedIndex].lang;
            if(tmp == 1){
                document.getElementById('td_ret_sjp').style.display = 'none';
                document.getElementById('td_ret1_sjp').style.display = 'none';
                document.getElementById('td_room_sjp').style.display = '';
                document.getElementById('td_room1_sjp').style.display = '';
                isiCombo('kamar', document.getElementById('TmpLayanan_sjp').value+','+document.getElementById('cmbKelas_sjp').value, document.getElementById('div_room_sjp').innerHTML, 'kamar_sjp', setTarip_sjp);
                document.getElementById('div_room_sjp').innerHTML = '';

                //getTaripKamar(document.getElementById('kamar').value);
            }
            else{
                document.getElementById('td_ret_sjp').style.display = '';
                document.getElementById('td_ret1_sjp').style.display = '';
                document.getElementById('td_room_sjp').style.display = 'none';
                document.getElementById('td_room1_sjp').style.display = 'none';
                var jnsLay = document.getElementById('JnsLayanan_sjp').value;
                var tmpLay = document.getElementById('TmpLayanan_sjp').value;
                //document.getElementById('cmbKelas').value+','+document.getElementById('TmpLayanan').value
                //alert(jnsLay+','+tmpLay);
                isiCombo('Retribusi', jnsLay+','+tmpLay, glob_ret, 'Retribusi_sjp', setTarip_sjp);
            }
        }
        
        function setTarip(pass){
            var tmp = document.getElementById('TmpLayanan').options[document.getElementById('TmpLayanan').options.selectedIndex].lang;
            if(tmp == 1){
                document.getElementById('spanTarifKamar').innerHTML = document.getElementById('kamar').options[document.getElementById('kamar').options.selectedIndex].lang;
            }
            else{
                //alert(document.getElementById('Retribusi').options[document.getElementById('Retribusi').options.selectedIndex].lang);
               document.getElementById('spanTarif').innerHTML = document.getElementById('Retribusi').options[document.getElementById('Retribusi').options.selectedIndex].lang;
            }
            if(pass == 'setThrough'){
                document.getElementById('Retribusi_sjp').value = document.getElementById('Retribusi').value;
                document.getElementById('spanTarif_sjp').innerHTML = document.getElementById('spanTarif').innerHTML;
                document.getElementById('kamar_sjp').value = document.getElementById('kamar').value;
                document.getElementById('spanTarifKamar_sjp').innerHTML = document.getElementById('spanTarifKamar').innerHTML;
                //setTarip_sjp('no_repeat');
            }
            if(document.getElementById('kamar').disabled==true){
                document.getElementById('txtkamarLama').value = document.getElementById('kamar').value;
            } setKamarInhelt(document.getElementById('kamar').value);
        }
        function setKamarInhelt(kam){
            
                parm="fn=setkamarinhelt&idKamar="+kam;
                 new Ajax.Request(
                     "chk_ub.php",
                     {
                        method: 'get',
                        parameters: parm,
                        onComplete: function(r)
                     {
                         var hsl=r.responseText;
                                document.getElementById("txtKamarKelasInhelt").value=hsl;
                    }
            }
        ); 

        }
        function setTarifAll(let){
            //alert(let.value);
            var r = parseFloat(document.getElementById('spanTarif').innerHTML);
            var x = document.getElementById('spanId').innerHTML;
            if(let.checked){
                r += parseFloat(let.lang);
                x += ','+let.value;
            }else{
                r -= parseFloat(let.lang);
                x = x.replace(','+let.value,'');
            }
            document.getElementById('spanTarif').innerHTML = r;
            
            document.getElementById('spanId').innerHTML = x;
            
        }

        function setTarip_sjp(pass){
            var tmp = document.getElementById('TmpLayanan_sjp').options[document.getElementById('TmpLayanan_sjp').options.selectedIndex].lang;
            if(tmp == 1){
                tmp = document.getElementById('kamar_sjp').options[document.getElementById('kamar_sjp').options.selectedIndex].lang;
                document.getElementById('spanTarifKamar_sjp').innerHTML = tmp;
                //document.getElementById('spanTarifKamar').innerHTML = tmp;
            }
            else{
                //alert(document.getElementById('Retribusi').options[document.getElementById('Retribusi').options.selectedIndex].lang);
               tmp = document.getElementById('Retribusi_sjp').options[document.getElementById('Retribusi_sjp').options.selectedIndex].lang;
               document.getElementById('spanTarif_sjp').innerHTML = tmp;
               //document.getElementById('spanTarif').innerHTML = tmp;
            }
            
            if(pass == 'setThrough'){
                document.getElementById('kamar').value = document.getElementById('kamar_sjp').value;
                document.getElementById('Retribusi').value = document.getElementById('Retribusi_sjp').value;
                document.getElementById('spanTarifKamar').innerHTML = document.getElementById('spanTarifKamar_sjp').innerHTML;
                document.getElementById('spanTarif').innerHTML = document.getElementById('spanTarif_sjp').innerHTML;
                //setTarip();
            }
        }

        /*var p="ok,NoAnggota,HakKelas,StatusPenj,txtPenjamin";
        fDisable(p,'ok-0');*/
        SetDisable(3);

        //batal();

        function gantiUmur(){
            var val=document.getElementById('TglLahir').value;
            var dDate = new Date('<?php echo gmdate('Y,m,d',mktime(date('H')+7));?>');

            var tgl = val.split("-");
            var tahun = tgl[2];
            var bulan = tgl[1];
            var tanggal = tgl[0];
            //alert(tahun+", "+bulan+", "+tanggal);
            var Y = dDate.getFullYear();
            var M = dDate.getMonth()+1;
            var D = dDate.getDate();
            //alert(Y+", "+M+", "+D);
            Y = Y - tahun;
            M = M - bulan;
            D = D - tanggal;
            //M = pad(M+1,2,'0',1);
            //D = pad(D,2,'0',1);
            //alert(Y+", "+M+", "+D);
            if(D < 0){
                M -= 1;
                D = 30+D;
            }
            if(M < 0){
                Y -= 1;
                M = 12+M;
            }
            document.getElementById("th").value = Y;
            document.getElementById("Bln").value = M;
            //$("txtHari").value = D;
        }
 function cekumur()
        {
            var u=document.getElementById('th').value;
            //alert(u);
            if(document.getElementById('d_kdjnspes').innerHTML==4 && u>=21){
            if(confirm("Status Peserta anak dengan umur 21 atau lebih Apakah Akan Tetap Dilayani ?"))
                {
                 document.getElementById('th').value=u;
                }else{
                batal();
                }
            }
        }
        function gantiTgl()
        {
            var dDate = new Date('<?php echo gmdate('Y,m,d',mktime(date('H')+7));?>');
            var thn=(document.getElementById("th").value=='')?0:parseInt(document.getElementById("th").value);
            var bln=(document.getElementById("Bln").value=='')?0:parseInt(document.getElementById("Bln").value);
            if(bln>11){
                var tmp = parseInt(bln/12);
                if(thn == ''){
                    thn = tmp;
                }
                else{
                    thn = thn+tmp;
                }
                document.getElementById('th').value = thn;
                tmp = bln%12;
                bln = tmp;
                document.getElementById('Bln').value = bln;
            }
            if(bln == ''){
                document.getElementById('Bln').value = 0;
            }

            var Y = dDate.getFullYear()-thn;
            var M = dDate.getMonth()-bln+1;
            var D = dDate.getDate();
            //alert(D+"-"+M+"-"+Y);
            if(D < 0){
                M -= 1;
                D = 30+D;
            }
            if(M < 0){
                Y -= 1;
                M = 12+M;
            }
            var nDate = new Date(M+"/"+D+"/"+Y);
            Y = nDate.getFullYear();
            M = nDate.getMonth()+1;
            D = nDate.getDate();
            //alert(D);
            nDate = D + "-" + M + "-" + Y;
            if (D<10){
                document.getElementById("TglLahir").value = "0" + D + "-" + M + "-" + Y;
            }else{
                document.getElementById("TglLahir").value = nDate;
            }
            //alert(val);
            //setKelompokUmur(nDate,$F("txtThn"));
        }

        function simpan(action)
        {
           
        if('<?=$_SESSION['userId'];?>'==''){
            alert('anda harus login lagi');
            window.location='../../index.php';
        }else{
            if (document.getElementById('btnSimpan').value=="Tambah" || document.getElementById('btnSimpan').value=="Simpan"){
                is_edit_reg=0;
                //kalau edit jenis pelayanan dsj,harus dipastikan pasien belum mendapat pelayanan,jika sudah mendapat pelayanan,update tidak boleh dikerjakan
                if (document.getElementById('asal').value==""){
                    alert("Anda Tidak Memiliki Hak Akses Untuk Melakukan Registrasi Pendaftaran Pasien, Hubungi Tim IT Untuk Menambah Hak Akses Tersebut !");
                    return false;
                }
                else{
                
                
                    if(ValidateForm('Nama,TglLahir,th,Bln,TglKunj,AslMasuk,cmbProp,cmbKab,StatusPas,cmbKec,cmbDesa,JnsLayanan,TmpLayanan,cmbKelas','ind'))
                    {
                        if (document.getElementById("StatusPas").value!="1"){
                            if(document.getElementById("HakKelas").value=="1"){
                                alert("Pilih Hak Kelas Pasien Penjamin !");
                                document.getElementById("HakKelas").focus();
                                return false;
                            }
                            

                            if(document.getElementById("StatusPas").value==3){
                                if(document.getElementById('panggilan').value!='.BY.NY'){
                                   if(document.getElementById('panggilan').value!='.BY'){
                                    if(document.getElementById("NoAnggota").value==''){
                                        alert('No Peserta masih kosong');
                                        return false;
                                    }
                                    if(document.getElementById("diagnosa_awalBPJS_id").value==''){
                                        alert('Diagnosa Awal Masih Kosong');
                                        return false;
                                    }
                                    if(document.getElementById("kode_rujukanBPJS").value==''){
                                        alert('Kode Rujukan Masih Kosong');
                                        return false;
                                    }
                                    if(document.getElementById("nama_ppkBPJS").value==''){
                                        alert('PPK Faskes Masih Kosong');
                                        return false;
                                    }
                                    if(document.getElementById("telp").value==''){
                                        alert('Telfon Masih Kosong');
                                        return false;
                                    }
                                }
                            }
                        }
                        }
                        //alert(glob_tmpLay + ' - ' +document.getElementById("TmpLayanan").value);
                        if (glob_tmpLay==document.getElementById("TmpLayanan").value && document.getElementById('btnSimpan').value=="Tambah" && document.getElementById("JnsLayanan").value!='44' && document.getElementById("panggilan").value!='.BY.NY'){
                            alert("Pasien Sudah Terdaftar di Tempat Layanan Ini !");
                            document.getElementById("TmpLayanan").focus();
                            return false;
                        }
                        
                        if(document.getElementById('spanId').innerHTML=='0' && document.getElementById('td_room').style.display=='none'){
                            alert("Retribusi Belum Ada. Silahkan masukan Retribusi dahulu!!");
                            return false;
                        }

                        
                        if (document.getElementById('btnSimpan').value=="Simpan"){
                            if (glob_dilayani!="0"){
                                alert("Pasien Sudah Dilayani, Jadi Tidak Boleh Diubah !");
                                document.getElementById('btnsmpSEP').style.display='table-row';
                                return false;
                            }else{
                                if (confirm("Yakin Ingin Mengubah Data Kunjungan ?")){
                                }else{
                                    batal();
                                    return false;
                                }
                            }
                            //untuk pasien baru
                        }else if (document.getElementById("IsNewPas").value=="" && document.getElementById("JnsLayanan").value!=135){
                            alert("Untuk Pasien Baru, Klik Tombol No. RM Baru !");
                            return false;
                        }
                        else if (document.getElementById("AslKunjungan").value==0 && (document.getElementById("JnsLayanan").value==27 || document.getElementById("JnsLayanan").value==94)){
                            alert("Pilih Asal Kunjungan !");
                           
                            return false;
                        }

                        if(document.getElementById("rdlaka1").checked==true){
                            

                            if(document.getElementById('tgl_kejadian').value==''){
                                alert('isi Tanggal kecelakaan');
                                document.getElementById('tgl_kejadian').focus();
                                return false;
                            }
                 
                            var laka=document.getElementById("rdlaka1").value;
                            var lokalaka = document.getElementById("cmbPropBpjs").value+'-'+document.getElementById('cmbPropBpjs').options[document.getElementById('cmbPropBpjs').selectedIndex].text
                            +'~'+document.getElementById("cmbKabBpjs").value+'-'+document.getElementById('cmbKabBpjs').options[document.getElementById('cmbKabBpjs').selectedIndex].text
                            +'~'+document.getElementById("cmbKecBpjs").value+'-'+document.getElementById('cmbKecBpjs').options[document.getElementById('cmbKecBpjs').selectedIndex].text;
                        }
                        else if(document.getElementById("rdlaka2").checked==true){
                            var laka=document.getElementById("rdlaka2").value;
                            var lokalaka='';
                        }
                        
                        document.getElementById("btnSimpan").disabled=true;
                        var varNik = document.getElementById("txtNIK").value;
                        var idPasien = document.getElementById("txtIdPasien").value;
                        var idKunj = document.getElementById("txtIdKunj").value;
                        var noRm = document.getElementById("NoRm").value;
                        var noRmLm = document.getElementById("NoRmLm").value;
                        var noBil = document.getElementById("NoBiling").value;
                        var nama = document.getElementById("Nama").value;
                        var namaOrtu = document.getElementById("NmOrtu").value;
                        var namaSuTri = document.getElementById("NmSuTri").value;
                        var gender = document.getElementById("Gender").value;
                        var agama = document.getElementById("cmbAgama").value;
                        var pend = document.getElementById("Pendidikan").value;
                        var pek = document.getElementById("Pekerjaan").value;
                        var tglLhr = document.getElementById("TglLahir").value;
                        var thn = document.getElementById("th").value;
                        var bln = document.getElementById("Bln").value;
                        var tglKun = document.getElementById("TglKunj").value;
                        var alamat = document.getElementById("Alamat").value;
                        var telp = document.getElementById("telp").value;
                        var rt = document.getElementById("rt").value;
                        var rw = document.getElementById("rw").value;
                        var asalMsk = document.getElementById("AslMasuk").value;
                        var prop = document.getElementById("cmbProp").value;
                        var ket = document.getElementById("Ket").value;
                        var kab = document.getElementById("cmbKab").value;
                        var statusPas = document.getElementById("StatusPas").value;
                        var kec = document.getElementById("cmbKec").value;
                        var tglSJP = document.getElementById("TglSJP").value;
                        var desa = document.getElementById("cmbDesa").value;
                        var noSJP = document.getElementById("NoSJP").value;
                        var jnsLayanan = document.getElementById("JnsLayanan").value;
                        var tmpLayanan = document.getElementById("TmpLayanan").value;
                        var kelas = document.getElementById("cmbKelas").value;
                        var asal = document.getElementById('asal').value;
                        var asalkunjunganID = document.getElementById('AslKunjungan').value;
    
                        var inap = document.getElementById('TmpLayanan').options[document.getElementById('TmpLayanan').options.selectedIndex].lang;
                        var prev_inap = document.getElementById('prev_inap').value;
                        var kamar = document.getElementById('kamar').value;
                        var peserta_bpjs = document.getElementById('nama_peserta_bpjs').value;
    
                        var retribusi = document.getElementById("spanId").innerHTML;
                        var prev_retribusi = document.getElementById('prev_retribusi').value;
                        if(inap == 1){
                            retribusi = '';
                            if (kamar=="0" || kamar==""){
                                alert("Pilih Kamar Terlebih Dahulu !");
                                return false;
                            }
                        }
                        else{
                            kamar = '';
                        }
                        
                        var tarip=document.getElementById("spanTarif").innerHTML;
                        var penjamin = document.getElementById("Penjamin").value;
                        var noAnggota = document.getElementById("NoAnggota").value;
                        var hakKelas = document.getElementById("HakKelas").value;
                        var statusPenj = document.getElementById("StatusPenj").value;
                        var tgl_rujukanBPJS = document.getElementById("tgl_rujukanBPJS").value;
                        var kode_rujukanBPJS = document.getElementById("kode_rujukanBPJS").value;
                        var kode_ppkBPJS = document.getElementById("kode_ppkBPJS").value;
                        var diagnosa_awalBPJS_id = document.getElementById("diagnosa_awalBPJS_id").value;
                        var nama_ppkBPJS = document.getElementById("nama_ppkBPJS").value;
                        var jenis_pesertaBPJS = document.getElementById("jenis_pesertaBPJS").value;
                        var pang = document.getElementById("panggilan").value;
                        var kamarLama=document.getElementById("txtkamarLama").value;
                        
                        
               
                        if(document.getElementById("RdKunjungan").checked==true ){
                            var stkunjungan=document.getElementById("RdKunjungan").value;
                        }
                        else if(document.getElementById("RdKunjungan1").checked==true ){
                            var stkunjungan=document.getElementById("RdKunjungan1").value;
                        }
                        if(document.getElementById("chkCob").checked==true){
                        var cob=1;
                        }else{
                            var cob=0;
                        }

                         if(document.getElementById("chkKatarak").checked==true){
                            var katarak=1;
                        }else{
                            var katarak=0;
                        }

                        if(document.getElementById('chkSuplesi').checked==true){
                        
                            var suplesi=1;
                            var nosepsuplesi=document.getElementById('txtNoSepSuplesi').value;
                        }else{
                            var suplesi=0;
                            var nosepsuplesi='';
                        }
                        if(document.getElementById("rdfaskes1").checked==true ){

                            var asalfaskes=document.getElementById("rdfaskes1").value;
                        }else{

                            var asalfaskes=document.getElementById("rdfaskes2").value;
                            
                        }
                
                        
                        new Ajax.Request(
                                    "check_inap__.php?pid="+idPasien,
                                    {
                                        method: 'get',
                                        
                                        onComplete: function(hasil){
                                            var pesan=hasil.responseText;
                                            if(pesan==1)
                                            {
                                                alert('Kujungan Pasien Ini Belum Di Pulangkan Sebelumnya');
                                                return ;
                                                
                                                }
                                        }
                                    }

                                );
                        var url = "registrasi_utils.php?grd=true&saring=true&saringan="+tglKun+"&act="+action+"&idPasien="+idPasien+"&idKunj="+
                        idKunj+"&noRm="+noRm+"&nama="+nama+"&noBil="+noBil+"&namaOrtu="+namaOrtu+"&namaSuTri="+namaSuTri+"&gender="+gender+
                        "&agama="+agama+"&pend="+pend+"&pek="+pek+"&tglLhr="+tglLhr+"&thn="+thn+"&bln="+bln+"&tglKun="+tglKun+"&alamat="+alamat+
                        "&rt="+rt+"&kamar="+kamar+"&rw="+rw+"&asalMsk="+asalMsk+"&prop="+prop+"&ket="+ket+"&kab="+kab+"&statusPas="+statusPas+
                        "&userLog="+document.getElementById('userLog').value+"&asal="+asal+"&prev_stat="+prev_stat+"&kec="+kec+"&tglSJP="+
                        tglSJP+"&desa="+desa+"&noSJP="+noSJP+"&jnsLayanan="+jnsLayanan+"&inap="+inap+"&prev_inap="+prev_inap+"&tmpLayanan="+
                        tmpLayanan+"&kelas="+kelas+"&retribusi="+retribusi+"&prev_retribusi="+prev_retribusi+"&tarip="+tarip+"&penjamin="+
                        penjamin+"&noAnggota="+noAnggota+"&hakKelas="+hakKelas+"&statusPenj="+statusPenj+"&telp="+telp+
                        "&userId=<?php echo $userId; ?>&noRmLm="+noRmLm+
                        "&sttkonsul="+sttkonsul+"&shf=<?=$shf?>"+"&tgl_rujukanBPJS="+tgl_rujukanBPJS+"&kode_rujukanBPJS="+kode_rujukanBPJS+
                        "&kode_ppkBPJS="+kode_ppkBPJS+"&diagnosa_awalBPJS_id="+diagnosa_awalBPJS_id+
                        "&nama_ppkBPJS="+nama_ppkBPJS+"&jenis_pesertaBPJS="+jenis_pesertaBPJS+"&aktif_set_bpjs="+aktif_set_bpjs+"&namapeserta="+peserta_bpjs+"&panggilan="+pang+
                        "&lakalantas="+laka+"&stKunjungan="+stkunjungan+"&kamarlama="+kamarLama+"&asalkunjungan="+asalkunjunganID+"&nik="+varNik+
                        "&bookingId="+document.getElementById('idBooking').value+
                        "&noSkdp="+document.getElementById('noSkdp').value+
                        "&kodedpjp="+document.getElementById('txtDpjp').value+"&loklaka="+lokalaka+
                        "&cob="+cob+"&katarak="+katarak+"&asalfaskes="+asalfaskes+
                        "&tgl_kejadian_laka="+document.getElementById('tgl_kejadian').value+
                        "&penjamin_laka="+document.getElementById('cmbPenjLain').value+
                        "&fasttrack="+document.getElementById('chkfasttrack').checked+
                        "&marital="+document.getElementById('cmbMarital').value+
                        "&suku="+document.getElementById('cmbSuku').value;

                       
                        
                                        
                    // if(statusPas==3 && action=='Simpan' && document.getElementById('NoSJP').value!=''){   
                    //     var hak_kelas_=document.getElementById('HakKelas').options[document.getElementById('HakKelas').selectedIndex].text;
                    //     hak_kelas_=hak_kelas_.trim();
                    //     var kodeDpjp=document.getElementById('txtDpjp').value.split('-');
                    //     var kodeDpjp=kodeDpjp[0];   
                               
                    //     new Ajax.Request('../bridging1.1/update_sep.php',{
                    //                 method : 'POST',
                    //                 parameters : {
                    //                     'noSep': document.getElementById('NoSJP').value,
                    //                     'klsRawat': hak_kelas_,
                    //                     'noMr': document.getElementById('NoRm').value,
                    //                     'tglRujukan': document.getElementById('tgl_rujukanBPJS').value,
                    //                     'noRujukan': document.getElementById('kode_rujukanBPJS').value,
                    //                     'ppkRujukan': document.getElementById('kode_ppkBPJS').value ,
                    //                     'catatan': document.getElementById('Ket').value,
                    //                     'diagAwal': document.getElementById('diagnosa_awalBPJS_id').value,
                    //                     'lakalantas': laka,
                    //                     'penjLaka':document.getElementById("cmbPenjLain").value,
                    //                     'noTelp':document.getElementById("telp").value,
                    //                     'asalFaskes':asalfaskes,
                    //                     'PoliEks':0,
                    //                     'cob':cob,
                    //                     'katarak':katarak,
                    //                     'noSKDP':document.getElementById("noSkdp").value,
                    //                     'DPJP':kodeDpjp,
                    //                     'tglKejadian':document.getElementById("tgl_kejadian").value,
                    //                     'kodeProp':document.getElementById("cmbPropBpjs").value,
                    //                     'kodeKab':document.getElementById("cmbKabBpjs").value,
                    //                     'kodeKec':document.getElementById("cmbKecBpjs").value,
                    //                     'jenisLayanan':jnsLayanan,
                    //                     'suplesi':suplesi,
                    //                     'nosepSuplesi':nosepsuplesi
                                        
                    //                 },
                                    
                    //                 onSuccess : function(res){
                    //                    // alert(res.responseText);
                    //                     data = JSON.parse(res.responseText);
                    //                     var hsl_message=String.prototype.trim.call(data.metaData.message);
                    //                     var code=String.prototype.trim.call(data.metaData.code);
                    //                     if(code!=200){
                    //                          alert(hsl_message);
                    //                      }else{
                    //                          a.loadURL(url,"","GET");
                    //                      }
                                        
                                         
                                        
                                        
                                        
                                        
                    //                 }
                    //         });
                    // }else{
                        
                         a.loadURL(url,"","GET");
                    // }
                        
                        
                       
                        if(action=='Tambah' && document.getElementById('idBooking').value!=''){
                            updateBooking();
                        }
                    }
                }
            }else{
                SetDisable(0);
                document.getElementById('btnSimpan').value="Simpan";

                document.getElementById('divKunjLagi').style.display="none";
                is_edit_reg=1;
                
                setPenjamin(document.getElementById('StatusPas').value,document.getElementById('HakKelas').value);
            }
        }   
        
        }
 function ambildataby(val)
                {
                
        
            var sisipan=val.split("|");
         // alert(sisipan);
             var p="NmOrtu*-*"+sisipan[19]
                +"*|*cmbAgama*-*"+sisipan[17]
                +"*|*Alamat*-*"+sisipan[5]+"*|*telp*-*"+sisipan[18]
                +"*|*rt*-*"+sisipan[6]+"*|*rw*-*"+sisipan[7]+"*|*cmbProp*-*"+sisipan[11]+"*|*Ket*-*"+sisipan[30]
                +"*|*cmbKab*-*"+sisipan[10]+"*|*StatusPas*-*"+sisipan[25]+"*|*TglSJP*-*"+sisipan[26]
                +"*|*NoSJP*-*"+sisipan[27]
                +"*|*Penjamin*-*"+sisipan[25]+"*|*txtPenjamin*-*"+((sisipan[25]=='1')?'':sisipan[31])+"*|*NoAnggota*-*"+sisipan[28]
                +"*|*prev_inap*-*"+sisipan[34]+"*|*HakKelas*-*"+sisipan[33]+"*|*NoRmLm*-*"+sisipan[37]
                +"*|*kode_ppkBPJS*-*"+sisipan[39]+"*|*tgl_rujukanBPJS*-*"+sisipan[40]+"*|*kode_rujukanBPJS*-*"+sisipan[41]+"*|*diagnosa_awalBPJS_id*-*"+sisipan[43]
                +"*|*diagnosa_awalBPJS*-*"+sisipan[44]+"*|*nama_ppkBPJS*-*"+sisipan[45]+"*|*jenis_pesertaBPJS*-*"+sisipan[46]+"*|*AslMasuk*-*"+sisipan[29];
          
            fSetValue(window,p);
            
            isiCombo('cmbKec',sisipan[10],sisipan[9]);
            isiCombo('cmbDesa',sisipan[9],sisipan[8]);
            glob_asal = sisipan[29];
            cUnit=sisipan[23];
            glob_jnsLay = sisipan[22];
            glob_tmpLay = sisipan[23];
            cUnit = sisipan[23];
            glob_kelas = sisipan[24];
            filterInap(sisipan[29],1);
            setPenjamin(sisipan[25]);
             
            document.getElementById('div_pasienby').style.display='none';   
    }
        function ambilData(multi)
                {
                    
            var disableHapus="<?php echo $disableHapus; ?>";
            if(multi != null && multi != '' && multi == 1){
                var defSim = "btnSimpan*-*Tambah";
                 is_edit_reg=0;
            }
            else{
                var defSim = "btnSimpan*-*Simpan";
                 is_edit_reg=1;
            }
            
            var sisipan=a.getRowId(a.getSelRow()).split("|");

             

            if(sisipan[49]==1){
                var varLokaLaka = sisipan[58].split('~');
                var varProp = varLokaLaka[0].split('-');
                var varKab = varLokaLaka[1].split('-');
                var varKec = varLokaLaka[2].split('-');
            }else{
                var varLokaLaka ='-~-~-'.split('~');
                var varProp = varLokaLaka[0].split('-');
                var varKab = varLokaLaka[1].split('-');
                var varKec = varLokaLaka[2].split('-');
            }
           
            //alert(a.getRowId(a.getSelRow()));
            var p="txtIdPasien*-*"+sisipan[1]+"*|*txtIdKunj*-*"+sisipan[0]+"*|*NoRm*-*"+sisipan[2]+"*|*NoBiling*-*"+sisipan[3]
                +"*|*Nama*-*"+a.cellsGetValue(a.getSelRow(),3)+"*|*NmOrtu*-*"+sisipan[12]+"*|*NmSuTri*-*"+sisipan[13]+"*|*Gender*-*"+sisipan[14]
                +"*|*cmbAgama*-*"+sisipan[17]+"*|*Pendidikan*-*"+sisipan[15]+"*|*Pekerjaan*-*"+sisipan[16]+"*|*TglLahir*-*"+sisipan[4]
                +"*|*th*-*"+sisipan[20]+"*|*Bln*-*"+sisipan[21]+"*|*TglKunj*-*"+sisipan[19]+"*|*Alamat*-*"+sisipan[5]+"*|*telp*-*"+sisipan[18]
                +"*|*rt*-*"+sisipan[6]+"*|*rw*-*"+sisipan[7]+"*|*AslMasuk*-*"+sisipan[29]+"*|*cmbProp*-*"+sisipan[11]+"*|*Ket*-*"+sisipan[30]
                +"*|*cmbKab*-*"+sisipan[10]+"*|*StatusPas*-*"+sisipan[25]+"*|*TglSJP*-*"+sisipan[26]
                +"*|*NoSJP*-*"+sisipan[27]
                +"*|*Penjamin*-*"+sisipan[25]+"*|*txtPenjamin*-*"+((sisipan[25]=='1')?'':sisipan[31])+"*|*NoAnggota*-*"+sisipan[28]+"*|*NokaInhelt*-*"+sisipan[28]
                +"*|*prev_inap*-*"+sisipan[34]+"*|*StatusPenj*-**|*"+defSim+"*|*btnHapus*-*"+disableHapus+"*|*HakKelas*-*"+sisipan[33]+"*|*NoRmLm*-*"+sisipan[37]
                +"*|*kode_ppkBPJS*-*"+sisipan[39]+"*|*tgl_rujukanBPJS*-*"+sisipan[40]+"*|*kode_rujukanBPJS*-*"+sisipan[41]+"*|*diagnosa_awalBPJS_id*-*"+sisipan[43]
                +"*|*diagnosa_awalBPJS*-*"+sisipan[44]+"*|*nama_ppkBPJS*-*"+sisipan[45]+"*|*jenis_pesertaBPJS*-*"+sisipan[46]+"*|*panggilan*-*"+sisipan[48]
                +"*|*rdlaka1*-*"+((sisipan[49]=='1')?'true':'false')+"*|*rdlaka2*-*"+((sisipan[49]=='1')?'false':'true')
                +"*|*AslKunjungan*-*"+sisipan[50]+"*|*txtNIK*-*"+sisipan[51]+"*|*noSkdp*-*"+sisipan[54]+"*|*txtDpjp*-*"+sisipan[55]+"*|*tgl_kejadian*-*"+sisipan[56]
                +"*|*cmbPenjLain*-*"+sisipan[57]+"*|*cmbPropBpjs*-*"+varProp[0]+"*|*cmbKabBpjs*-*"+varKab[0]+"*|*cmbKecBpjs*-*"+varKec[0]
                +"*|*rdfaskes1*-*"+((sisipan[59]=='1')?'true':'false')+"*|*rdfaskes2*-*"+((sisipan[59]=='2')?'true':'false')
                +"*|*nama_peserta_bpjs*-*"+sisipan[60]+"*|*cmbMarital*-*"+sisipan[61]+"*|*cmbSuku*-*"+sisipan[62];
               
            
            if(sisipan[42]=='1'){
                document.getElementById('chkfasttrack').checked = true;
            }else{
                document.getElementById('chkfasttrack').checked = false;
            }
            if(sisipan[52]=='1'){
                document.getElementById('chkCob').checked = true;
            }else{
                document.getElementById('chkCob').checked = false;
            }
            if(sisipan[53]=='1'){
                document.getElementById('chkKatarak').checked = true;
            }else{
                document.getElementById('chkKatarak').checked = false;
            }
            

            // document.getElementById('perjanjian').value = sisipan[27];
            //saat ambil data set aslMasuk,jika aslMasuk == 3/datang sendiri jnsLayanan tidak memunculkan rawat inap,actionnya perlu delay,masih bingung
          // alert(sisipan[33]);
            fSetValue(window,p);

           
            
            //alert('glob_jnsLay = sisipan[22] -> '+sisipan[22]+'<br>glob_tmpLay = sisipan[23] -> '+sisipan[23]+'<br>glob_kelas = sisipan[24] -> '+sisipan[24]+'<br>glob_ret = sisipan[32] -> '+sisipan[32]);
            
            if(sisipan[25]==3||sisipan[25]==6){
                if(sisipan[27]!=''){
                    document.getElementById("hapus_sep").disabled=false;
                    }
                }else{
                    
                    document.getElementById("hapus_sep").disabled=true;
                    }

            cIdPas=sisipan[1];
            cIdKunj=sisipan[0];
            cUnit=sisipan[23];
            iPelId = sisipan[38];
            glob_jnsLay = sisipan[22];
            glob_tmpLay = sisipan[23];
            cUnit = sisipan[23];
            glob_kelas = sisipan[24];
            glob_ret = sisipan[32];
            prev_stat = sisipan[25];
            glob_asal = sisipan[29];
            glob_dilayani = sisipan[36];
            filterInap(sisipan[29],1);
            //glob_kamar = sisipan;
            isiCombo('cmbKec',sisipan[10],sisipan[9]);
            isiCombo('cmbDesa',sisipan[9],sisipan[8]);
            document.getElementById('prev_retribusi').value = sisipan[32];
            status_bpjs_aktif=sisipan[47];
            aktif_set_bpjs =sisipan[47];
            //alert(sisipan[47]);
            //isiCombo('cmbKelas','',sisipan[33],'HakKelas');
            /*document.getElementById('kartu').disabled = false;
            if (sisipan[34]=='0'){
                document.getElementById('cetak').disabled = false;
                document.getElementById('spInap').disabled = true;
            }else{
                document.getElementById('cetak').disabled = true;
                document.getElementById('spInap').disabled = false;
            }
            document.getElementById('cetakForm').disabled = false;*/
            if(document.getElementById('asal').value=='108'){
                document.getElementById('skpJamkesda').disabled = false;
                //document.getElementById('UpdStatusPx').disabled = false;
                Request("registrasi_utils.php?act=jamkeskah&idKunj="+cIdKunj,'skpDiv','','GET',skpCek);
            }
            //alert(prev_inap);
            if(document.getElementById('prev_inap').value=='1'){
                document.getElementById('spInap').disabled = false;
            }else{
                document.getElementById('spInap').disabled = true;
            }
            //alert('ambilData'+' '+is_edit_reg);
            //if(status_bpjs_aktif==0){
             setPenjamin(sisipan[25],sisipan[33]);
            //}
            /*ditampilkan tombol SKP JAMKESDA INAP jika penjamin adalah JAMKESMAS*/
            if(sisipan[25]=='4' ||sisipan[25]=='5'){
                document.getElementById('skpJamkesdaKmr').disabled = false;
                document.getElementById('skpJamkesda').disabled = false;
                document.getElementById('sjpJampersal').disabled = false;
            }else{
                document.getElementById('skpJamkesdaKmr').disabled = true;
                document.getElementById('skpJamkesda').disabled = true;
                document.getElementById('sjpJampersal').disabled = true;
            }
            if (sisipan[25] == 3 ||sisipan[25] == 6){
                document.getElementById('getSJP').disabled=false;
                document.getElementById('sjpAskes').disabled=false;
                document.getElementById('sjpAskes_isi').disabled=false;
            }else{
                document.getElementById('getSJP').disabled=true;
                document.getElementById('sjpAskes').disabled=true;
                document.getElementById('sjpAskes_isi').disabled=true;
            }
            
            SetDisable(1);
            document.getElementById('NoAnggota').value=sisipan[28];
            document.getElementById('NoSJP').value=sisipan[27];
            document.getElementById('chk_no_p').disabled=true;
            
            //alert('');
        }

        function hapus()
        {
            var idPasien = document.getElementById("txtIdPasien").value;
            var idKunj = document.getElementById("txtIdKunj").value;
            var kamar = document.getElementById('kamar').value;
            //alert("tmpt_layanan_utils.php?act=hapus&rowid="+rowid);
                 new Ajax.Request('chk_ub.php',{
                    method : 'POST',
                    parameters : {
                        'getIdKunj': cIdKunj
                        
                    },
                    onSuccess : function(response){
                       if(response ==1){
                           alert('Ada Resep Obat silahkan retur dulu');
                           return false;
                       }
                    
                    }
                });

            if (glob_dilayani!="0"){
                alert("Pasien Sudah Dilayani, Jadi Tidak Boleh Dihapus !");
                return false;
            }else{
                if(confirm("Anda Yakin Ingin Menghapus Data kunjungan "+a.cellsGetValue(a.getSelRow(),3)))
                {
                    //alert("registrasi_utils.php?grd=true&act=hapus&idPasien="+idPasien+"&idKunj="+idKunj+"&userLog="+document.getElementById('userLog').value+"&asal="+document.getElementById('asal').value+"&saring=true&saringan="+document.getElementById('TglKunj').value+"&userId=<?php echo $userId; ?>");
            
            if(prev_stat==3){   
            
                    new Ajax.Request('../bridging1.1/dell_sep.php',{
                    method : 'POST',
                    parameters : {
                        
                        'no_sep': document.getElementById('NoSJP').value
                        
                    },
                    onSuccess : function(response){
                        
                       data = JSON.parse(response.responseText);
                       var code=String.prototype.trim.call(data.metaData.code);
                       var mes=String.prototype.trim.call(data.metaData.message);
                       alert(mes);
                       
                    }
                });
            }
                 
                    a.loadURL("registrasi_utils.php?grd=true&act=hapus&idPasien="+idPasien+"&idKunj="+idKunj+"&userLog="+document.getElementById('userLog').value+"&asal="+document.getElementById('asal').value+"&saring=true&saringan="+document.getElementById('TglKunj').value+"&kamar="+kamar+"&sttkonsul="+sttkonsul+"&userId=<?php echo $userId; ?>","","GET");
                }
            }
        }

        function batal(exc)
        {
            //alert('batal');
            is_edit_reg=0;
            status_bpjs_aktif=0;
            aktif_set_bpjs=0;
            document.getElementById("divKunjLagi").style.display="none";
            document.getElementById('spInap').disabled=true;
            document.getElementById("btnSimpan").disabled=false;
            document.getElementById("IsNewPas").value="";
            document.getElementById("chk_bpjs").value=3;
            document.getElementById("no_p_bpjs").value='';
            if(exc == '1'){
                var tgl = document.getElementById('TglKunj').value;
            }
            var idpas = document.getElementById('txtIdPasien').value;
            //alert (idpas);
             if(exc != 'bat'){
            if(idpas==''){
            Request('registrasi_utils.php?act=batalrm&rm='+document.getElementById('NoRm').value,'','','GET');
            }
            }
            var p="txtIdPasien*-**|*txtIdKunj*-**|*NoRm*-**|*NoBiling*-**|*Nama*-**|*NmOrtu*-**|*NmSuTri*-**|*Gender*-**|*cmbAgama*-**|*Pendidikan*-**|*Pekerjaan*-**|*StatusPas*-*1*|*TglLahir*-**|*th*-**|*Bln*-**|*TglKunj*-*<?php echo $date_now;?>*|*TglSJP*-*<?php echo $date_now;?>*|*Alamat*-**|*txtkamarLama*-**|*telp*-**|*rt*-**|*rw*-**|*no_booking*-**|*idBooking*-**|*txtNIK*-**|*AslMasuk*-*3*|*cmbProp*-**|*Ket*-**|*cmbKab*-**|*StatusPas*-**|*cmbKec*-**|*cmbDesa*-**|*NoSJP*-**|*JnsLayanan*-**|*TmpLayanan*-**|*cmbKelas*-**|*RdKunjungan1*-*true*|*RdKunjungan*-*false*|*Retribusi*-**|*txtKamarKelasInhelt*-**|*Penjamin*-**|*txtPenjamin*-**|*NoAnggota*-**|*HakKelas*-**|*StatusPenj*-**|*nama_peserta_bpjs*-**|*panggilan*-**|*rdlaka1*-*false*|*rdlaka2*-*true*|*AslKunjungan*-**|*btnSimpan*-*Tambah*|*btnHapus*-*true";
          p += "*|*skpJamkesda*-*true*|*skpJamkesdaKmr*-*true*|*NoRmLm*-**|*noSkdp*-**|*txtDpjp*-**|*cmbPenjLain*-*";
            fSetValue(window,p);
            if(exc == '1'){
                document.getElementById('TglKunj').value = tgl;
            }
           
            //document.getElementById('spInap').disabled = true;
            filterInap(3,1);

            //getNoRM();
            setPenjamin(1);
            keyword = '';
            glob_jnsLay = glob_tmpLay = glob_kelas = glob_ret = prev_stat = glob_asal = '';
            SetDisable(0);
            SetDisable(3);
            document.getElementById("NoRm").focus();
            //sjp
            temporary_sjp = ms_kd_diag = '';
            document.getElementById('NoKa').value = '';
            document.getElementById('NIP').value = '';
            document.getElementById('diag_sjp').value = '';
            document.getElementById('diagnosa_id_sjp').value = '';
            document.getElementById('TglSJP_sjp').value = '<?php echo $date_now;?>';
            
            document.getElementById('span_NoRm_sjp').innerHTML = '';
            document.getElementById('span_StatusPenj_sjp').innerHTML = '';
            document.getElementById('span_birth_sjp').innerHTML = '';
            document.getElementById('span_gender_sjp').innerHTML = '';
            document.getElementById('span_namaP_sjp').innerHTML = '';
            document.getElementById('div_room_sjp').innerHTML = '';
            document.getElementById('spanTarifKamar_sjp').innerHTML = '';
            document.getElementById('spanTarif_sjp').innerHTML = '';
            document.getElementById('spanTarif').innerHTML = '0';
            document.getElementById('spanId').innerHTML = '0';
            document.getElementById('chkCob').checked = false;
            document.getElementById('chkKatarak').checked = false;

            //aisyah 14/11/2014
            document.getElementById('tgl_rujukanBPJS').value = '';
            document.getElementById('diagnosa_awalBPJS_id').value = '';
            document.getElementById('kode_ppkBPJS').value = '';
            document.getElementById('kode_rujukanBPJS').value = '';
            document.getElementById('diagnosa_awalBPJS').value = '';
            document.getElementById('perjanjian').checked = false;
            document.getElementById('chkfasttrack').checked = false;
            document.getElementById('kode_ppkBPJS').value = '';
            document.getElementById('nama_ppkBPJS').value = '';
            document.getElementById('jenis_pesertaBPJS').value = '';
            document.getElementById('d_kodeHak').innerHTML = '';
            document.getElementById('d_hakKelas').innerHTML = '';
            document.getElementById('d_jnsPeserta').innerHTML = '';
            document.getElementById('d_kodeProvider').innerHTML = '';
            document.getElementById('d_birth').innerHTML = '';
            document.getElementById('d_nm').innerHTML = '';
            document.getElementById('d_no').innerHTML = '';
            document.getElementById('getSEP').disabled = false;
            document.getElementById('chk_no_p').disabled=false;
            document.getElementById('hapus_sep').disabled=true;
            document.getElementById('txtnosep').value='';
            document.getElementById('txtnosep').style.display='none';
            document.getElementById('NokaInhelt').value='';
            document.getElementById('txtKamarKelasInhelt').value='';
            document.getElementById('rdfaskes1').checked=true;
            isiCombo('marital','','','cmbMarital');
            isiCombo('suku','','53','cmbSuku');
            //0093606

            /////
        }
function ambilDataRiwayat(){
        if(document.getElementById('RdKunjungan').checked==true){
           document.getElementById('txtnosep').value=riw1.cellsGetValue(riw1.getSelRow(),4);
        }   
}
        function getNoBil(){
            //function to get billing number
            /*var jnsLayanan = document.getElementById("JnsLayanan").value;
            var tglKun = document.getElementById("TglKunj").value;
            var noRM = document.getElementById('NoRm').value;
            &jnsLayanan='+jnsLayanan+'&tglKun='+tglKun+'&noRm='+noRM
             */
            Request('registrasi_utils.php?act=getNoBilling','txtNoBiling','','GET',setNoBil,'ok');
        }

        function setNoBil(){
            document.getElementById('NoBiling').value = document.getElementById('txtNoBiling').value;
        }



        function setPenjamin(val,hak){
            //return false;
            var label='';
            //alert(val);
            if(val==1 || val==""){
                // && document.getElementById('StatusPas').options[document.getElementById('StatusPas').selectedIndex].value==1
                var p="NoAnggota,HakKelas,StatusPenj,txtPenjamin";
                fDisable(p,'ok-1');
                fSetValue(window,"ok*-*false*|*NoAnggota*-*");
                document.getElementById('HakKelas').options.selectedIndex=0;
                
            }
            else{
                //alert('');
                label=document.getElementById('StatusPas').options[document.getElementById('StatusPas').selectedIndex].label;
                var p="ok,NoAnggota,HakKelas,StatusPenj,txtPenjamin";
                //alert('-----------------------ub');
                if (document.getElementById('StatusPas').value=="38" || document.getElementById('StatusPas').value=="39" || document.getElementById('StatusPas').value=="46"){
                    //if(status_bpjs_aktif=0)
                    document.getElementById('HakKelas').options.selectedIndex=3;
                    fDisable(p,'ok-1');
                    fSetValue(window,"ok*-*true");
                }else{
                    
                    fEnable(p,'ok-0');
                    fDisable("ok",'ok-0');
                    fSetValue(window,"ok*-*true");
                    
                        if(glob_jnsLay==1||glob_jnsLay==44){
                        //alert(is_edit_reg);
                        //if(val==3){
                            //if(is_edit_reg==0){
                                
                                if(status_bpjs_aktif==0){
                                    document.getElementById('HakKelas').options.selectedIndex=2;    
                                }
                                if(val==6){
                                    document.getElementById('HakKelas').value=hak;
                                }
                            //}
                            
                        //} else{
                            //if(is_edit_reg==0){
                                //document.getElementById('HakKelas').options.selectedIndex=2;
                            //}
                        //}
                        
                    }
                    else{
                        
                        //if(status_bpjs_aktif==0){
                        //  document.getElementById('HakKelas').options.selectedIndex=0;
                        //}
                    }
                    }
                }
            
            
            fSetValue(window,"txtPenjamin*-*"+label+"*|*Penjamin*-*"+val);
            //if(document.getElementById('JnsLayanan').value==1){
                //document.getElementById('HakKelas').options.selectedIndex=0;
            //}
            //if (document.getElementById('StatusPas').value == 4 ||document.getElementById('StatusPas').value == 6){
                //document.getElementById('getSJP').disabled=false;
                //document.getElementById('sjpAskes').disabled=false;
                //document.getElementById('sjpAskes_isi').disabled=false;
                //document.getElementById('TglSJP').value='<?=$date_now;?>';
                //document.getElementById('NoSJP').value='';
                //document.getElementById('NoAnggota').value='';
            //}else{
                ////document.getElementById('getSJP').disabled=true;
                //document.getElementById('sjpAskes').disabled=true;
                //document.getElementById('sjpAskes_isi').disabled=true;
                //document.getElementById('TglSJP').value='<?=$date_now;?>';
            // document.getElementById('NoSJP').value='';
            // document.getElementById('NoAnggota').value='';
            //}
            
            
          //  if (document.getElementById('StatusPas').value == 5){
                //document.getElementById('getSJP').disabled=false;
                //document.getElementById('skpJamkesda').disabled=false;
                //document.getElementById('skpJamkesdaKmr').disabled=false;
               // document.getElementById('sjpJampersal').disabled=false;
                //document.getElementById('getSEP').disabled = false;
                // document.getElementById('TglSJP').value='<?=$date_now;?>';
            // document.getElementById('NoSJP').value='';
            // document.getElementById('NoAnggota').value='';
            // alert(document.getElementById('NoAnggota').value);
            // cekNoAnggota();
                
            //}else{
                //document.getElementById('getSJP').disabled=true;
                //document.getElementById('skpJamkesda').disabled=true;
                //document.getElementById('skpJamkesdaKmr').disabled=true;
                //document.getElementById('sjpJampersal').disabled=true;
                //document.getElementById('TglSJP').value='<?=$date_now;?>';
            //document.getElementById('NoSJP').value='';
            //document.getElementById('NoAnggota').value='';
            //}
            //if(document.getElementById('StatusPas').value == 5 ){
                //document.getElementById('getSJP').disabled=false;
            //}
            //document.getElementById('hapus_sep').disabled=true;
             if(document.getElementById('StatusPas').value == 1 ){  //jamkesda
                document.getElementById('getSEP').style.display='inline';
                document.getElementById('getSJP').disabled=true;
                document.getElementById('skpJamkesda').disabled=true;
                document.getElementById('skpJamkesdaKmr').disabled=true;
                document.getElementById('sjpJampersal').disabled=true;
                document.getElementById('getSEP').disabled = true;
                document.getElementById('TglSJP').value='<?=$date_now;?>';
                document.getElementById('getINHELT').style.display='none';
                
            }
             else if(document.getElementById('StatusPas').value == 5 ){  //jamkesda
                document.getElementById('getSEP').style.display='inline';
                document.getElementById('getSJP').disabled=false;
                document.getElementById('skpJamkesda').disabled=false;
                document.getElementById('skpJamkesdaKmr').disabled=false;
                document.getElementById('sjpJampersal').disabled=false;
                document.getElementById('getSEP').disabled = true;
                document.getElementById('TglSJP').value='<?=$date_now;?>';
                document.getElementById('getINHELT').style.display='none';
                
            }else if(document.getElementById('StatusPas').value == 33343 ){  //jamkesda
                document.getElementById('getSEP').style.display='inline';
                document.getElementById('getSJP').disabled=false;
                document.getElementById('skpJamkesda').disabled=false;
                document.getElementById('skpJamkesdaKmr').disabled=false;
                document.getElementById('sjpJampersal').disabled=false;
                document.getElementById('getSEP').disabled = true;
                document.getElementById('TglSJP').value='<?=$date_now;?>';
                document.getElementById('getINHELT').style.display='none';
                
            }else if(document.getElementById('StatusPas').value == 20 ){  //jampersal
                document.getElementById('getSEP').style.display='inline';
                document.getElementById('getSJP').disabled=false;
                document.getElementById('skpJamkesda').disabled=false;
                document.getElementById('skpJamkesdaKmr').disabled=false;
                document.getElementById('sjpJampersal').disabled=false;
                document.getElementById('getSEP').disabled = true;
                document.getElementById('TglSJP').value='<?=$date_now;?>';
                document.getElementById('getINHELT').style.display='none';
                
            }else if(document.getElementById('StatusPas').value == 7){ //spm
                document.getElementById('getSEP').style.display='inline';
                document.getElementById('getSJP').disabled=false;
                document.getElementById('skpJamkesda').disabled=false;
                document.getElementById('skpJamkesdaKmr').disabled=true;
                document.getElementById('sjpJampersal').disabled=true;
                document.getElementById('getSEP').disabled = true;
                document.getElementById('TglSJP').value='<?=$date_now;?>';
                document.getElementById('getINHELT').style.display='none';
                
            } else if(document.getElementById('StatusPas').value == 17){ //kdrt
                document.getElementById('getSEP').style.display='inline';
                document.getElementById('kdrt').disabled=false;
                document.getElementById('getSJP').disabled=false;
                document.getElementById('skmbtn').disabled=false;
                document.getElementById('jampersal').disabled=true;
                document.getElementById('lansia').disabled=true;
                document.getElementById('TglSJP').value='<?=$date_now;?>';
                document.getElementById('getSEP').disabled=true;
                document.getElementById('getINHELT').style.display='none';
                
            } else if(document.getElementById('StatusPas').value == 16){//lansia
                document.getElementById('getSEP').style.display='inline';
                document.getElementById('lansia').disabled=false;
                document.getElementById('getSJP').disabled=false;
                document.getElementById('getSEP').disabled=true;
                document.getElementById('skmbtn').disabled=false;
                document.getElementById('jampersal').disabled=true;
                document.getElementById('kdrt').disabled=true;
                document.getElementById('TglSJP').value='<?=$date_now;?>';
                document.getElementById('getINHELT').style.display='none';
            
            } else if(document.getElementById('StatusPas').value == 3){//bpjs
                document.getElementById('getSEP').style.display='inline';
                document.getElementById('lansia').disabled=true;
                document.getElementById('getSJP').disabled=true;
                document.getElementById('getSEP').disabled=false;
                if(status_bpjs_aktif==0){
                document.getElementById('HakKelas').disabled=false;
                }else{
                document.getElementById('HakKelas').disabled=true;
                }
                document.getElementById('skmbtn').disabled=false;
                document.getElementById('jampersal').disabled=true;
                document.getElementById('kdrt').disabled=true;
                //document.getElementById('TglSJP').value='<?=$date_now;?>';
                if(document.getElementById('RdKunjungan').checked==true){
                document.getElementById('getSEP').disabled=true;
                }
                document.getElementById('getINHELT').style.display='none';
            }else if(document.getElementById('StatusPas').value == 6){//INHEALT
                document.getElementById('lansia').disabled=true;
                document.getElementById('getSJP').disabled=true;
                document.getElementById('getSEP').disabled=false;
                document.getElementById('getINHELT').disabled=false;
                document.getElementById('skmbtn').disabled=false;
                document.getElementById('jampersal').disabled=true;
                document.getElementById('kdrt').disabled=true;
                document.getElementById('TglSJP').value='<?=$date_now;?>';
                document.getElementById('getINHELT').style.display='inline';
                document.getElementById('getSEP').style.display='none';
            }else{
                
                document.getElementById('skmbtn').disabled=false;
                document.getElementById('kdrt').disabled=true;
                document.getElementById('jampersal').disabled=true;
                document.getElementById('getSJP').disabled=true;
                document.getElementById('lansia').disabled=true;
                document.getElementById('TglSJP').value='<?=$date_now;?>';
                document.getElementById('getSJP').disabled=true;
                document.getElementById('getSEP').disabled=true;
                document.getElementById('getINHELT').style.display='none';
                document.getElementById('getSEP').style.display='inline';
            }
            //cekNoAnggota();
             // alert(document.getElementById('NoAnggota').value);
              formKunjunganbyStatusPasien(document.getElementById('StatusPas').value);
            
        }
        
        formKunjunganbyStatusPasien(1);
        function formKunjunganbyStatusPasien(status){
            if(status==1){
                //document.getElementById("f_tgl_rujukan").style.display= 'none';
                document.getElementById("f_kode_rujukan").style.display = 'none';
                document.getElementById("f_kode_ppk").style.display = 'none';
                document.getElementById("f_asal_faskes").style.display = 'none';
                document.getElementById("f_diagnosa_awal").style.display = 'none';
                document.getElementById("f_tgl_sjp").style.display = 'none';
                document.getElementById("f_no_sjp").style.display = 'none';
                document.getElementById("f_kesanggupan").style.display = 'none';
                document.getElementById("f_lakalantas").style.display = 'none';
                document.getElementById("fAslKunjungan").style = '';
                document.getElementById("f_NokaInhelt").style.display = 'none';
                document.getElementById("f_faskes").style.display = 'none';
                document.getElementById("f_noSkdp").style.display = 'none';
                document.getElementById("f_DPJP").style.display = 'none';
                document.getElementById("f_penjLain").style.display = 'none';
                document.getElementById("f_tglKejadian").style.display = 'none';
                document.getElementById("f_lokaLaka").style.display = 'none';
                
            }
            else if(status==3){
               // document.getElementById("f_tgl_rujukan").style = '';
                document.getElementById("f_kode_rujukan").style = '';
                document.getElementById("f_kode_ppk").style = '';
                document.getElementById("f_asal_faskes").style = '';
                document.getElementById("f_diagnosa_awal").style = '';
                document.getElementById("f_tgl_sjp").style = '';
                document.getElementById("f_no_sjp").style = '';
                document.getElementById("f_lakalantas").style = '';
                document.getElementById("f_kesanggupan").style.display = 'none';
                document.getElementById("fAslKunjungan").style = '';
                document.getElementById("f_NokaInhelt").style.display = 'none';
                document.getElementById("f_faskes").style.display = '';
                document.getElementById("f_noSkdp").style.display = '';
                document.getElementById("f_DPJP").style.display = '';
                if(document.getElementById('rdlaka1').checked==true){

                document.getElementById('f_tglKejadian').style.display='';
                document.getElementById('f_penjLain').style.display='';
                document.getElementById('f_lokaLaka').style.display='';
                }else{
                document.getElementById("f_penjLain").style.display = 'none';
                document.getElementById("f_tglKejadian").style.display = 'none';
                document.getElementById("f_lokaLaka").style.display = 'none';
                }

            } else if(status==6){
                //document.getElementById("f_tgl_rujukan").style = '';
                document.getElementById("f_kode_rujukan").style.display = '';
                document.getElementById("f_kode_ppk").style.display = '';
                document.getElementById("f_asal_faskes").style.display = '';
                document.getElementById("f_diagnosa_awal").style.display = '';
                document.getElementById("f_tgl_sjp").style.display = 'none';
                document.getElementById("f_no_sjp").style = '';
                document.getElementById("f_lakalantas").style.display= '';
                document.getElementById("f_kesanggupan").style.display = 'none';
                document.getElementById("fAslKunjungan").style = '';
                document.getElementById("f_NokaInhelt").style = '';
                document.getElementById("f_penjLain").style.display = 'none';
                document.getElementById("f_tglKejadian").style.display = 'none';
                document.getElementById("f_lokaLaka").style.display = 'none';
            }else{
               // document.getElementById("f_tgl_rujukan").style.display = 'none';
                document.getElementById("f_kode_rujukan").style.display = 'none';
                document.getElementById("f_kode_ppk").style.display = 'none';
                document.getElementById("f_asal_faskes").style.display = 'none';
                document.getElementById("f_diagnosa_awal").style.display = 'none';
                document.getElementById("f_lakalantas").style.display = 'none';
                document.getElementById("f_no_sjp").style = '';
                document.getElementById("f_tgl_sjp").style = '';
                document.getElementById("f_no_sjp").style = '';
                document.getElementById("f_kesanggupan").style.display = 'none';
                document.getElementById("fAslKunjungan").style = '';
                document.getElementById("f_NokaInhelt").style.display = 'none';
                document.getElementById("f_faskes").style.display = 'none';
                document.getElementById("f_noSkdp").style.display = 'none';
                document.getElementById("f_DPJP").style.display = 'none';
                document.getElementById("f_penjLain").style.display = 'none';
                document.getElementById("f_tglKejadian").style.display = 'none';
                document.getElementById("f_lokaLaka").style.display = 'none';
            }
            //loklaka();
        }
        function loklaka(){
            if(document.getElementById('rdlaka1').checked){
                document.getElementById('f_penjLain').style.display='table-row';
                document.getElementById('f_tglKejadian').style.display='table-row'; 
                document.getElementById('f_lokaLaka').style.display='table-row'; 

            }else{
            document.getElementById('f_penjLain').style.display='none'; 
            document.getElementById('f_tglKejadian').style.display='none'; 
            document.getElementById('f_lokaLaka').style.display='none'; 

            var p="cmbPenjLain*-**|*tgl_kejadian*-*"; 
            fSetValue(window,p);

            }
        }
        function decUser(){
            //alert(document.getElementById('asal').value);
            
            isiCombo('userLog',document.getElementById('asal').value,'<?php echo $userId; ?>','userLog',saring);
            if(document.getElementById('asal').value=='108'){
                isiCombo('StatusPasJamkesmas','','','StatusPas');
            }else if(document.getElementById('asal').value=='110'){
                isiCombo('StatusPasAskes','','','StatusPas');
            }           
            else{
                isiCombo('StatusPas');
            }
        }

    function get_sjp(){
       // alert(document.getElementById('StatusPas').value);
        if(document.getElementById('Nama').value == '' || document.getElementById('NoRm').value == ''){
            alert('Nama pasien dan Nomor Rekam Medis harus diisi.');
            return;
        }
        /*if(document.getElementById('StatusPas').value != 4){
            alert('Penjamin pasien bukan askes sosial.');
            return;
        }
        document.getElementById('listPas_sjp').style.display='none';
        document.getElementById('listPas_sjp').innerHTML='';
        document.getElementById('NoKa').value = document.getElementById('NoAnggota').value;
        //document.getElementById('NIP').value = "";
        document.getElementById('span_NoRm_sjp').innerHTML = document.getElementById('NoRm').value;
        //document.getElementById('span_namaP_sjp').innerHTML = document.getElementById('Nama').value;
        //document.getElementById('span_gender_sjp').innerHTML = document.getElementById('Gender').options[document.getElementById('Gender').options.selectedIndex].innerHTML;
        //document.getElementById('span_birth_sjp').innerHTML = document.getElementById('TglLahir').value;
        fKeyEnt_sjp = true;
        new Popup('div_getSJP',null,{modal:true,position:'center',duration:1});
        document.getElementById('div_getSJP').popup.show();
        document.getElementById('NoKa').focus();
        */
        if(document.getElementById('StatusPas').value==20){
        
        var url = 'get_sjp_temp.php?pasienid='+document.getElementById('txtIdPasien').value+'&tgl='+document.getElementById('TglSJP').value+'&jampersal=true';
        
        }else if(document.getElementById('StatusPas').value==33343){
                    if(document.getElementById('NoAnggota').value == '' ){
                    alert('Nomor anggota Harus Diisi');
                    return false;
                    }
        var url = 'get_sjp_temp.php?pasienid='+document.getElementById('txtIdPasien').value+'&tgl='+document.getElementById('TglSJP').value+'&noAnggota='+document.getElementById('NoAnggota').value+'&jamaskin=true';
        
        }else if(document.getElementById('StatusPas').value==5){
        var url = 'get_sjp_temp.php?pasienid='+document.getElementById('txtIdPasien').value+'&tgl='+document.getElementById('TglSJP').value+'&jamkesda=true';
        }else if(document.getElementById('StatusPas').value==17){
        var url = 'get_sjp_temp.php?pasienid='+document.getElementById('txtIdPasien').value+'&tgl='+document.getElementById('TglSJP').value+'&kdrt=true';
        }else if(document.getElementById('StatusPas').value==16){
        var url = 'get_sjp_temp.php?pasienid='+document.getElementById('txtIdPasien').value+'&tgl='+document.getElementById('TglSJP').value+'&lansia=true';
        }//else if(document.getElementById('StatusPas').value==7){
//      var url = 'get_sjp_temp.php?pasienid='+document.getElementById('txtIdPasien').value+'&tgl='+document.getElementById('TglSJP').value+'&lansia=true';
//      }
        
        else{
        var url = 'get_sjp_temp.php?pasienid='+document.getElementById('txtIdPasien').value+'&tgl='+document.getElementById('TglSJP').value+'&jamkesda=false&jampersal=false';
        
        }
            //alert(url);
            Request_new(url , '', '', 'GET', function(a){
            //alert(a);
            var sip=a.split("||");
            document.getElementById('TglSJP').value=sip[1];
            document.getElementById('NoSJP').value=sip[2];
            document.getElementById('NoAnggota').value=sip[0];
            });
    }
    
    function suggest_sjp_byNoKa(e,par){
        if(e.which == 13){
            document.getElementById('NoKa').disabled = true;
            document.getElementById('NIP').disabled = true;
            document.getElementById('close_btn').disabled = true;
            document.getElementById('load_gif').style.display = '';
            document.getElementById('conf_sjp').disabled = true;
            //var url = 'get_sjp.php?act=getListPesertaBy'+par.id+'&noKa='+document.getElementById('NoKa').value+'&nip='+document.getElementById('NIP').value;
            var url = 'get_sjpRelay.php?act=getListPesertaBy'+par.id+'&noKa='+document.getElementById('NoKa').value+'&nip='+document.getElementById('NIP').value;
            //alert(url);
            Request_sjp(url , 'listPas_sjp', '', 'GET', set_sjp );
        }
    }
    
    var nip_bef = '';
    
    function suggest_sjp(e,par){
            //alert('get_sjp.php?act='+par.id+'&noKa='+document.getElementById('NoKa').value+'&nip='+document.getElementById('NIP').value)
        var keywords=par.value;//alert(keywords);
        if(keywords==""){
            document.getElementById('listPas_sjp').style.display='none';
        }else{
            var key;
            if(window.event) {
                key = window.event.keyCode;
            }
            else if(e.which) {
                key = e.which;
            }
            //alert(key+" - "+fKeyEnt_sjp);
            if (key==38 || key==40){
                var tblRow=document.getElementById('tblPas').rows.length;
                if (tblRow>0){
                    //alert(RowIdx_sjp);
                    if (key==38 && RowIdx_sjp>0){
                        RowIdx_sjp=RowIdx_sjp-1;
                        document.getElementById('lstPas'+(RowIdx_sjp)).className='itemtableReq';
                        if (RowIdx_sjp>0) document.getElementById('lstPas'+(RowIdx_sjp-1)).className='itemtableMOverReq';
                    }else if (key == 40 && RowIdx_sjp < (tblRow-1)){
                        if (RowIdx_sjp>0) document.getElementById('lstPas'+(RowIdx_sjp-1)).className='itemtableReq';
                        document.getElementById('lstPas'+RowIdx_sjp).className='itemtableMOverReq';
                        RowIdx_sjp=RowIdx_sjp+1;
                    }
                }
            }
            else if (key==13 && fKeyEnt_sjp==false){
                if (RowIdx_sjp>0){
                //if (fKeyEnt_sjp==false){
                    fKeyEnt_sjp = true;
                    fSetPas(document.getElementById('lstPas'+(RowIdx_sjp-1)));
                /*}else{
                    fKeyEnt_sjp=false;
                }*/
                }
            }
            else if (key!=27 && key!=37 && key!=39){
                RowIdx_sjp=0;
                if(key == 13){
                     fKeyEnt_sjp=false;
                     //alert("msk");
                     //var url = 'get_sjp.php?act=getListPesertaBy'+par.id+'&noKa='+document.getElementById('NoKa').value+'&nip='+document.getElementById('NIP').value;
                     var url = 'get_sjpRelay.php?act=getListPesertaBy'+par.id+'&noKa='+document.getElementById('NoKa').value+'&nip='+document.getElementById('NIP').value;
                     Request_sjp(url , 'listPas_sjp', '', 'GET' );

                     //if (document.getElementById('listDiag_sjp').style.display=='none') fSetPosisi(document.getElementById('listDiag_sjp'),par);
                     document.getElementById('listPas_sjp').style.display='block';
                }
                else{
                     if(document.getElementById('NIP').value != nip_bef){
                        fKeyEnt_sjp=true;
                        document.getElementById('listPas_sjp').style.display='none';
                     }
                     nip_bef = document.getElementById('NIP').value;
                }
            }
            else if(key == 27){
                fKeyEnt_sjp=true;
                document.getElementById('listPas_sjp').style.display = 'none';
            }
        }
    }
       
       function fSetPas(par){
          fKeyEnt_sjp = true;
          document.getElementById('listPas_sjp').style.display='none';
          document.getElementById('NoKa').disabled = false;
          document.getElementById('NIP').disabled = false;
          document.getElementById('close_btn').disabled = false;
          document.getElementById('load_gif').style.display = 'none';
          document.getElementById('conf_sjp').disabled = false;
          //Nama PPK    Nomor MR    Gol
          var nope = par.childNodes[3].innerHTML;//No Peserta
          var pisa = par.childNodes[5].innerHTML;//PISA
          var nama = par.childNodes[7].innerHTML;//Nama
          var gender = par.childNodes[9].innerHTML;//Kelamin
          var gol = par.childNodes[19].innerHTML;//Golongan
          //alert(par.childNodes[3].innerHTML+'---'+par.childNodes[5].innerHTML+'---'+par.childNodes[7].innerHTML+'---'+par.childNodes[9].innerHTML+'---'+par.childNodes[19].innerHTML);
          var birth = par.childNodes[11].innerHTML.split(' ');//Tgl Lahir
          birth = birth[0];
          var kodePPK = par.childNodes[13].innerHTML;//Kode PPK
          
          var temp_loc = nope+'*-*'+pisa+'*-*'+nama+'*-*'+gender+'*-*'+birth+'*-*'+kodePPK;
          temporary_sjp = temp_loc.split('*-*');
          if(temporary_sjp.length < 2){
           alert('Gagal mengambil data Pasien.');
           return;
          }
          /*temporary_sjp[0] = nope;
          temporary_sjp[1] = pisa;
          temporary_sjp[2] = nama;
          temporary_sjp[3] = gender;
          temporary_sjp[5] = kodePPK;
          temporary_sjp[6];
          temporary_sjp[7];
          temporary_sjp[8];*/
          
          //noKa
          document.getElementById('NoKa').value = nope;
          document.getElementById('NoAnggota').value = nope;
          document.getElementById('kodeppk_sjp').value = kodePPK;
          //status
          document.getElementById('span_StatusPenj_sjp').innerHTML = ((pisa=='P')?'PESERTA':(pisa=='S'?'SUAMI':(pisa=='I'?'ISTRI':(pisa=='1'?'ANAK KE 1':'ANAK KE 2'))));
          document.getElementById('StatusPenj').value = document.getElementById('span_StatusPenj_sjp').innerHTML;
          //tgl lahir
          document.getElementById('span_birth_sjp').innerHTML = birth;//birth[2]+'-'+birth[1]+'-'+birth[0];
          document.getElementById('TglLahir').value = birth;//birth[2]+'-'+birth[1]+'-'+birth[0];
          birth = birth.split('-');
          temporary_sjp[4] = birth[2]+'-'+birth[1]+'-'+birth[0];
          //gender
          document.getElementById('span_gender_sjp').innerHTML = ((gender=='L')?'Laki-laki':'Perempuan');
          //nama
          document.getElementById('span_namaP_sjp').innerHTML = nama;
          //Hak_Kelas
          if (gol=="I" || gol=="II"){
            document.getElementById('HakKelas').value = 3;
            document.getElementById('HakKelas_sjp').value = 3;
          }else{
            document.getElementById('HakKelas').value = 2;
            document.getElementById('HakKelas_sjp').value = 2;
          }
       }
       
    var temporary_sjp = '';
    function set_sjp(){
        //alert(document.getElementById('listPas_sjp').innerHTML);
        temporary_sjp = document.getElementById('listPas_sjp').innerHTML.split('*-*');
        //alert(temporary_sjp.length);
        fKeyEnt_sjp = true;
        document.getElementById('NoKa').disabled = false;
        document.getElementById('NIP').disabled = false;
        document.getElementById('close_btn').disabled = false;
        document.getElementById('load_gif').style.display = 'none';
        document.getElementById('conf_sjp').disabled = false;
        if(temporary_sjp.length < 2){
            alert('Gagal Mengambil Data Pasien.');
            return;
        }
        //alert(document.getElementById('listPas_sjp').innerHTML)
        //0000097666569*-*P*-*IDA TRI KASIANI*-*L*-*1967-03-21 00:00:00.0*-*13031601*-*PUSKESMAS WONOAYU*-*0*-*III
        var nope = temporary_sjp[0];
        var pisa = temporary_sjp[1];
        var nama = temporary_sjp[2];
        var gender = temporary_sjp[3];
        var birth = temporary_sjp[4].split(' ');
        birth = birth[0];
        temporary_sjp[4] = birth;
        var kodePPK = temporary_sjp[5];
        var namaPPK = temporary_sjp[6];
        var entah = temporary_sjp[7];
        var gol = temporary_sjp[8];
        
        //noKa
        document.getElementById('NoKa').value = nope;
        document.getElementById('NoAnggota').value = nope;
        document.getElementById('kodeppk_sjp').value = kodePPK;
        //status
        document.getElementById('span_StatusPenj_sjp').innerHTML = ((pisa=='P')?'PESERTA':(pisa=='S'?'SUAMI':(pisa=='I'?'ISTRI':(pisa=='1'?'ANAK KE 1':'ANAK KE 2'))));
        document.getElementById('StatusPenj').value = document.getElementById('span_StatusPenj_sjp').innerHTML;
        if (temporary_sjp[8]=="I" || temporary_sjp[8]=="II"){
            document.getElementById('HakKelas_sjp').options.selectedIndex = 1;
        }else{
            document.getElementById('HakKelas_sjp').options.selectedIndex = 0;
        }
        document.getElementById('HakKelas').value = document.getElementById('HakKelas_sjp').value;
        //tgl lahir
        birth = birth.split('-');
        document.getElementById('span_birth_sjp').innerHTML = birth[2]+'-'+birth[1]+'-'+birth[0];
        document.getElementById('TglLahir').value = birth[2]+'-'+birth[1]+'-'+birth[0];
        //gender
        document.getElementById('span_gender_sjp').innerHTML = ((gender=='L')?'Laki-laki':'Perempuan');
        //nama
        document.getElementById('span_namaP_sjp').innerHTML = nama;
    }
    
    function print_sjp(par){
       if(par == 'first_time'){
          document.getElementById('first_time').value = 'true';
       }
       else{
          if(a.getRowId(a.getSelRow()) == ''){
             alert('Tidak ada data.');
             return;
          }
          document.getElementById('first_time').value = 'false';
          var sisipan=a.getRowId(a.getSelRow()).split("|");
            /*var p="txtIdPasien*-*"+sisipan[1]+"*|*txtIdKunj*-*"+sisipan[0]+"*|*NoRm*-*"+sisipan[2]+"*|*NoBiling*-*"+sisipan[3]
                +"*|*Nama*-*"+a.cellsGetValue(a.getSelRow(),3)+"*|*NmOrtu*-*"+sisipan[12]+"*|*NmSuTri*-*"+sisipan[13]+"*|*Gender*-*"+sisipan[14]
                +"*|*cmbAgama*-*"+sisipan[17]+"*|*Pendidikan*-*"+sisipan[15]+"*|*Pekerjaan*-*"+sisipan[16]+"*|*TglLahir*-*"+sisipan[4]
                +"*|*th*-*"+sisipan[20]+"*|*Bln*-*"+sisipan[21]+"*|*TglKunj*-*"+sisipan[19]+"*|*Alamat*-*"+sisipan[5]+"*|*telp*-*"+sisipan[18]
                +"*|*rt*-*"+sisipan[6]+"*|*rw*-*"+sisipan[7]+"*|*AslMasuk*-*"+sisipan[29]+"*|*cmbProp*-*"+sisipan[11]+"*|*Ket*-*"+sisipan[30]
                +"*|*cmbKab*-*"+sisipan[10]+"*|*StatusPas*-*"+sisipan[25]+"*|*cmbKec*-*"+sisipan[9]+"*|*TglSJP*-*"+sisipan[26]
                +"*|*cmbDesa*-*"+sisipan[8]+"*|*NoSJP*-*"+sisipan[27]+"*|*TglSJP_sjp*-*"+sisipan[26]+"*|*HakKelas_sjp*-*"+sisipan[33]
                +"*|*Penjamin*-*"+sisipan[25]+"*|*txtPenjamin*-*"+((sisipan[25]=='1')?'':sisipan[31])+"*|*NoAnggota*-*"+sisipan[28]
                +"*|*prev_inap*-*"+sisipan[34]+"*|*StatusPenj*-**|*"+defSim+"*|*btnHapus*-*"+disableHapus+"*|*HakKelas*-*"+sisipan[33];*/
          //document.getElementById('hid_kunjungan_id').value = sisipan[0];
          document.getElementById('hid_kunjungan_id').value = cIdKunj;
          //document.getElementById('form_sjp').submit();
       }
       if (par==1){
            document.getElementById('form_sjp').action="sjp.php";
       }else{
            document.getElementById('form_sjp').action="sjp_isi.php";
       }
       document.getElementById('form_sjp').submit();
    }
    
    function confirm_sjp(){
        if(temporary_sjp.length < 1){
            alert("Data Pasien Belum Ada !");
            return;
        }
        var unit = document.getElementById('TmpLayanan').value;
        if(unit == 45){
          ms_kd_diag = '99999';
        }
        if(ms_kd_diag == ''){
            alert("Data Diagnosa Pasien Harus Diisi !");
            return;
        }
        if(document.getElementById('TglSJP_sjp').value == ''){
          alert('Tanggal SJP Harus Diisi !');
          return;
        }
        var no_pe = temporary_sjp[0];
        var pisa = temporary_sjp[1];
        var nama = temporary_sjp[2];
        var gender = temporary_sjp[3];
        var birth = temporary_sjp[4];
        //var kodePPK = temporary_sjp[5];
        var kodePPK = document.getElementById('kodeppk_sjp').value;
        var namaPPK = temporary_sjp[6];
        var entah = temporary_sjp[7];
        var gol = temporary_sjp[8];
        var norm = document.getElementById('NoRm').value;
        var tglSJP = document.getElementById('TglSJP_sjp').value.split('-');
        tglSJP = tglSJP[2]+'-'+tglSJP[1]+'-'+tglSJP[0];
        
        //var url = 'get_sjp.php?act=generateSJP&noKa='+no_pe+'&pisa='+pisa+'&namaPeserta='+nama+'&tglLahirPeserta='+birth+'&sexPeserta='+gender+'&norm='+norm+'&tglSJP='+tglSJP+'&kodePPK='+kodePPK+'&kd_diag='+ms_kd_diag+'&unit='+unit;
        var url = 'get_sjpRelay.php?act=generateSJP&noKa='+no_pe+'&pisa='+pisa+'&namaPeserta='+nama+'&tglLahirPeserta='+birth+'&sexPeserta='+gender+'&norm='+norm+'&tglSJP='+tglSJP+'&kodePPK='+kodePPK+'&kd_diag='+ms_kd_diag+'&unit='+unit;
        //alert(url);
        //validate_sjp();
        Request_sjp(url , 'listPas_sjp', '', 'GET', validate_sjp );
    }
    
    function validate_sjp(){
        var tmp = document.getElementById('listPas_sjp').innerHTML.split(', ');
        //var tmp = "1, 123456789".split(', ');
        var errmsg='';
        if(tmp[0] == "1"){
            document.getElementById('NoSJP').value = tmp[1];
            document.getElementById('div_getSJP').popup.hide();
            simpan(document.getElementById('btnSimpan').value);
        }
        else{
            for (var j=1;j<tmp.length;j++){
                errmsg +=tmp[j];
            }
            alert(errmsg);
        }
    }
    
    //Diagnosa
        var RowIdx_sjp;
        var fKeyEnt_sjp;
        var ms_kd_diag = '';
        function suggest_diag(e,par){
            var keywords=par.value;//alert(keywords);
            if(e == 'cariDiag'){
                if(document.getElementById('listDiag_sjp').style.display == 'block'){
                    document.getElementById('listDiag_sjp').style.display='none';
                }
                else{
                    Request('../unit_pelayanan/diagnosalist.php?findAll=true&aKeyword='+keywords , 'listDiag_sjp', '', 'GET' );
                    if (document.getElementById('listDiag_sjp').style.display=='none') fSetPosisi(document.getElementById('listDiag_sjp'),par);
                    document.getElementById('listDiag_sjp').style.display='block';
                }
            }
            else{
                if(keywords==""){
                    document.getElementById('listDiag_sjp').style.display='none';
                }else{
                    var key;
                    if(window.event) {
                        key = window.event.keyCode;
                    }
                    else if(e.which) {
                        key = e.which;
                    }
                    //alert(key);
                    if (key==38 || key==40){
                        var tblRow=document.getElementById('tblDiagnosa').rows.length;
                        if (tblRow>0){
                            //alert(RowIdx_sjp);
                            if (key==38 && RowIdx_sjp>0){
                                RowIdx_sjp=RowIdx_sjp-1;
                                document.getElementById('lstDiag'+(RowIdx_sjp+1)).className='itemtableReq';
                                if (RowIdx_sjp>0) document.getElementById('lstDiag'+RowIdx_sjp).className='itemtableMOverReq';
                            }else if (key == 40 && RowIdx_sjp < tblRow){
                                RowIdx_sjp=RowIdx_sjp+1;
                                if (RowIdx_sjp>1) document.getElementById('lstDiag'+(RowIdx_sjp-1)).className='itemtableReq';
                                document.getElementById('lstDiag'+RowIdx_sjp).className='itemtableMOverReq';
                            }
                        }
                    }
                    else if (key==13){
                        if (RowIdx_sjp>0){
                            if (fKeyEnt_sjp==false){
                                fSetPenyakit(document.getElementById('lstDiag'+RowIdx_sjp).lang);
                            }else{
                                fKeyEnt_sjp=false;
                            }
                        }
                    }
                    else if (key!=27 && key!=37 && key!=39){
                        RowIdx_sjp=0;
                        fKeyEnt_sjp=false;
                        Request('../unit_pelayanan/diagnosalist.php?aKeyword='+keywords , 'listDiag_sjp', '', 'GET' );
                        //if (document.getElementById('listDiag_sjp').style.display=='none') fSetPosisi(document.getElementById('listDiag_sjp'),par);
                        document.getElementById('listDiag_sjp').style.display='block';
                    }
                }
            }
        }

        function fSetPenyakit(par){
            var cdata=par.split("*|*");
            ms_kd_diag = cdata[2];
            while (ms_kd_diag.indexOf(' ')>0){
                ms_kd_diag=ms_kd_diag.replace(' ','');
            }
            while (ms_kd_diag.indexOf('.')>0){
                ms_kd_diag=ms_kd_diag.replace('.','');
            }
            ms_kd_diag = ms_kd_diag.substring(0,3);
            document.getElementById("diagnosa_id_sjp").value=cdata[0];
            document.getElementById("diag_sjp").value=cdata[2]+" - "+cdata[1];
            document.getElementById('listDiag_sjp').style.display='none';
        }
        
        function saring(){
            //var sttkonsul= document.getElementById("sttkonsul").value;
            //alert("registrasi_utils.php?grd=true&saring=true&saringan="+document.getElementById('TglKunj').value+"&userLog="+document.getElementById('userLog').value+"&asal="+document.getElementById('asal').value+"&sttkonsul="+sttkonsul);
            a.loadURL("registrasi_utils.php?grd=true&saring=true&saringan="+document.getElementById('TglKunj').value+"&userLog="+document.getElementById('userLog').value+"&asal="+document.getElementById('asal').value+"&sttkonsul="+sttkonsul,"","GET");
            /*if(document.getElementById('NoRm').value=='' || document.getElementById('txtIdPasien').value == ''){
                getNoRM();
            }else{
                getNoBil();
            }*/
        }

        function kartu()
        {           
            if (cIdPas==""){
                alert("Pilih Pasien Terlebih Dahulu !");
            }else{
                window.open('printPatientCard.php?idPas='+cIdPas,'_blank');
                //window.open('cetakKartu.php?idPas='+cIdPas,'_blank');
            }
            //batal();
        }

        function cetak()
        {
            if (cIdKunj==""){
                alert("Pilih Kunjungan Pasien Terlebih Dahulu !");
            }else{
                window.open('cetakLoket.php?idPas='+cIdPas+'&loketId='+document.getElementById('asal').value+'&idKunj='+cIdKunj+'&idPel='+iPelId+'&userId=<?php echo $userId;?>','_blank');
            }
            //batal();
        }

        function cetakForm()
        {
            if (cIdKunj==""){
                alert("Pilih Kunjungan Pasien Terlebih Dahulu !");
            }else{
                window.open('cetakForm.php?idPas='+cIdPas+'&idKunj='+cIdKunj+'&Unit='+cUnit+'&userId=<?php echo $userId;?>','_blank');
            }
            //batal();
        }
        function setKunjungan(val){
            if(val==27 || val==94 || val==7) {
                 document.getElementById('AslKunjungan').disabled=false;
            }else{
                document.getElementById('AslKunjungan').disabled=true;
                document.getElementById('AslKunjungan').value='0';
            }
            
            }
       function fChangeStatusPx(p){
          // alert(p)
           if (p=="1" || p=="3"){
               document.getElementById('trnosjp').style.visibility='collapse';
               document.getElementById('trNoJaminan').style.visibility='collapse';
               document.getElementById('trHakKelas').style.visibility='collapse';
               document.getElementById('trStatusPenj').style.visibility='collapse';
               document.getElementById('trnmPeserta').style.visibility='collapse';      
               document.getElementById('tgl_sjp__p').style.visibility='collapse';
               //document.getElementById('spnTglSJP').innerHTML='Tgl Mulai Berubah';
               
           }else{
               document.getElementById('trnosjp').style.visibility='visible';
               document.getElementById('trNoJaminan').style.visibility='visible';
               document.getElementById('trHakKelas').style.visibility='visible';
               document.getElementById('trStatusPenj').style.visibility='visible';
               document.getElementById('trnmPeserta').style.visibility='visible';
                document.getElementById('tgl_sjp__p').style.visibility='visible';
              // document.getElementById('spnTglSJP').innerHTML='Tgl SJP/SKP';
           }
       }
        
       function PopUpdtStatus(){
          /*p="txtIdPasien*-*"+dataPasien[0]+"*|*NoRm*-*"+dataPasien[1]+"*|*NmOrtu*-*"+dataPasien[11]+"*|*Nama*-*"+dataPasien[2]
                +"*|*NmSuTri*-*"+dataPasien[12]+"*|*Gender*-*"+dataPasien[13]+"*|*TglLahir*-*"+dataPasien[3]+"*|*Alamat*-*"+dataPasien[4]
                +"*|*cmbProp*-*"+dataPasien[10]+"*|*cmbKab*-*"+dataPasien[9]+"*|*cmbKec*-*"+dataPasien[8]+"*|*cmbDesa*-*"+dataPasien[7]
                +"*|*rt*-*"+dataPasien[5]+"*|*rw*-*"+dataPasien[6]+"*|*Pendidikan*-*"+dataPasien[14]+"*|*Pekerjaan*-*"+dataPasien[15]
                +"*|*cmbAgama*-*"+dataPasien[16]+"*|*telp*-*"+dataPasien[17]+"*|*StatusPas*-*"+dataPasien[18]+"*|*Penjamin*-*"+dataPasien[18]
                +"*|*NoAnggota*-*"+dataPasien[19]+"*|*HakKelas*-*"+dataPasien[20]+"*|*StatusPenj*-*"+dataPasien[21]+"*|*txtIdKunj*-*"+dataPasien[22]+"*|*TglKunj*-*"+dataPasien[23]+"*|*AslMasuk*-*"+dataPasien[24]+"*|*StatusPas*-*"+dataPasien[18]+"*|*TglSJP*-*"+dataPasien[25]+"*|*NoSJP*-*"+dataPasien[26];
                glob_jnsLay=dataPasien[27];
                glob_tmpLay=dataPasien[28];
                glob_kamar=dataPasien[29];
                glob_kelas=dataPasien[30];
                glob_ret = dataPasien[31];
                cIdPas=dataPasien[0];
                cIdKunj=dataPasien[22];
                cUnit=dataPasien[28];*/
          /*var p="txtIdPasien*-*"+sisipan[1]+"*|*txtIdKunj*-*"+sisipan[0]+"*|*NoRm*-*"+sisipan[2]+"*|*NoBiling*-*"+sisipan[3]
                +"*|*Nama*-*"+a.cellsGetValue(a.getSelRow(),3)+"*|*NmOrtu*-*"+sisipan[12]+"*|*NmSuTri*-*"+sisipan[13]+"*|*Gender*-*"+sisipan[14]
                +"*|*cmbAgama*-*"+sisipan[17]+"*|*Pendidikan*-*"+sisipan[15]+"*|*Pekerjaan*-*"+sisipan[16]+"*|*TglLahir*-*"+sisipan[4]
                +"*|*th*-*"+sisipan[20]+"*|*Bln*-*"+sisipan[21]+"*|*TglKunj*-*"+sisipan[19]+"*|*Alamat*-*"+sisipan[5]+"*|*telp*-*"+sisipan[18]
                +"*|*rt*-*"+sisipan[6]+"*|*rw*-*"+sisipan[7]+"*|*AslMasuk*-*"+sisipan[29]+"*|*cmbProp*-*"+sisipan[11]+"*|*Ket*-*"+sisipan[30]
                +"*|*cmbKab*-*"+sisipan[10]+"*|*StatusPas*-*"+sisipan[25]+"*|*cmbKec*-*"+sisipan[9]+"*|*TglSJP*-*"+sisipan[26]
                +"*|*cmbDesa*-*"+sisipan[8]+"*|*NoSJP*-*"+sisipan[27]
                +"*|*Penjamin*-*"+sisipan[25]+"*|*txtPenjamin*-*"+((sisipan[25]=='1')?'':sisipan[31])+"*|*NoAnggota*-*"+sisipan[28]
                +"*|*prev_inap*-*"+sisipan[34]+"*|*StatusPenj*-**|*"+defSim+"*|*btnHapus*-*"+disableHapus+"*|*HakKelas*-*"+sisipan[33];*/
                //"statusPx*-*"+getKsoId+"*|*TglSJP*-*"+getTgl_sjp+"*|*NoSJP*-*"+getNoSJP+"*|*NoJaminan*-*"+getNoJaminan+"*|*cmbHakKelas*-*"+getKsoKelasId+"*|*StatusPenj*-*"+getStatusPenj+"*|*nmPeserta*-*"+getnmPeserta
        if (cIdKunj==""){
                alert("Pilih Kunjungan Pasien Terlebih Dahulu !");
                return ;
        }
            
          var status_pas_upd = document.getElementById('StatusPas').value;
          var nama_upd = document.getElementById('Nama').value;
          var no_anggota_upd = document.getElementById('NoAnggota').value;
          var tgl_sjp_upd = document.getElementById('TglSJP').value;
          var no_sjp_upd = document.getElementById('NoSJP').value;
          var hak_kelas_upd = document.getElementById('HakKelas').value;
          var status_penj_upd = document.getElementById('StatusPenj').value;
          
          var url = "statusPx*-*"+status_pas_upd+"*|*TglSJP_pop*-*"+tgl_sjp_upd+"*|*NoSJP_pop*-*"+no_sjp_upd
              +"*|*NoJaminan*-*"+no_anggota_upd+"*|*cmbHakKelas*-*"+hak_kelas_upd+"*|*StatusPenj_pop*-*"+status_penj_upd
              +"*|*nmPeserta*-*"+nama_upd;
              //alert(url)
          fSetValue(window,url);
          if (status_pas_upd==39){
              fSetValue(window,"cmbHakKelas*-*4");
          }
          fChangeStatusPx(document.getElementById('statusPx').value);
            new Popup('divUpdtStatus',null,{modal:true,position:'center',duration:0});
            document.getElementById('divUpdtStatus').popup.show();
       }
        
       function goUpdtStatusPx(){
          /*p="txtIdPasien*-*"+dataPasien[0]+"*|*NoRm*-*"+dataPasien[1]+"*|*NmOrtu*-*"+dataPasien[11]+"*|*Nama*-*"+dataPasien[2]
                +"*|*NmSuTri*-*"+dataPasien[12]+"*|*Gender*-*"+dataPasien[13]+"*|*TglLahir*-*"+dataPasien[3]+"*|*Alamat*-*"+dataPasien[4]
                +"*|*cmbProp*-*"+dataPasien[10]+"*|*cmbKab*-*"+dataPasien[9]+"*|*cmbKec*-*"+dataPasien[8]+"*|*cmbDesa*-*"+dataPasien[7]
                +"*|*rt*-*"+dataPasien[5]+"*|*rw*-*"+dataPasien[6]+"*|*Pendidikan*-*"+dataPasien[14]+"*|*Pekerjaan*-*"+dataPasien[15]
                +"*|*cmbAgama*-*"+dataPasien[16]+"*|*telp*-*"+dataPasien[17]+"*|*StatusPas*-*"+dataPasien[18]+"*|*Penjamin*-*"+dataPasien[18]
                +"*|*NoAnggota*-*"+dataPasien[19]+"*|*HakKelas*-*"+dataPasien[20]+"*|*StatusPenj*-*"+dataPasien[21]+"*|*txtIdKunj*-*"+dataPasien[22]+"*|*TglKunj*-*"+dataPasien[23]+"*|*AslMasuk*-*"+dataPasien[24]+"*|*StatusPas*-*"+dataPasien[18]+"*|*TglSJP*-*"+dataPasien[25]+"*|*NoSJP*-*"+dataPasien[26];
                glob_jnsLay=dataPasien[27];
                glob_tmpLay=dataPasien[28];
                glob_kamar=dataPasien[29];
                glob_kelas=dataPasien[30];
                glob_ret = dataPasien[31];
                cIdPas=dataPasien[0];
                cIdKunj=dataPasien[22];
                cUnit=dataPasien[28];*/
                
        var cstatusPx=document.getElementById('statusPx').value;
        var cTglSJP=document.getElementById('TglSJP_pop').value;
        var cNoSJP=document.getElementById('NoSJP_pop').value;
        var cNoJaminan=document.getElementById('NoJaminan').value;
        var ccmbHakKelas=document.getElementById('cmbHakKelas').value;
        var cStatusPenj=document.getElementById('StatusPenj_pop').value;
        var cnmPeserta=document.getElementById('nmPeserta').value;
        var getIdKunj = document.getElementById('txtIdKunj').value;
        var getIdPasien = document.getElementById('txtIdPasien').value;
            /*i++;
            if (i==6) i=1;
            fSetValue(window,"statusPx*-*"+i);
            fChangeStatusPx(document.getElementById('statusPx').value);*/
            var url="../unit_pelayanan/updtStatusPx_utils.php?idKunj="+getIdKunj+"&cstatusPx="+cstatusPx+"&cTglSJP="+cTglSJP
            +"&cNoSJP="+cNoSJP+"&cNoJaminan="+cNoJaminan+"&ccmbHakKelas="+ccmbHakKelas+"&cStatusPenj="+cStatusPenj
            +"&IdPasien="+getIdPasien+"&cnmPeserta="+cnmPeserta;
            //alert(url);
            document.getElementById('inpEvUpdt').innerHTML="";
            Request(url , "inpEvUpdt", "", "GET",evUpdtStatusPx,"");
             
            
       }
        
       function evUpdtStatusPx(){
           if (document.getElementById('inpEvUpdt').innerHTML=="" || document.getElementById('inpEvUpdt').innerHTML!="Proses Update Berhasil !"){
               alert("Update Status Pasien Gagal !");
           }else{
               alert(document.getElementById('inpEvUpdt').innerHTML);
           }
       }

        function skp(par)
        {
          var url = 'skpJamkesda.php?idKunj='+document.getElementById("txtIdKunj").value+'&userId=<?php echo $userId;?>';
          if(par == 'kamar'){
             url += "&kamar=true";
          }else if (par == 'jampersal'){
            url += "&jampersal=true";
          }
          window.open(url,'_blank'); 
            //batal();
        }
        
         function cetakSKM(par)
        {
        //alert(par);
        if (cIdKunj==""){
                alert("Pilih Kunjungan Pasien Terlebih Dahulu !");
                return;
        }
          //var url = 'skm.php?idKunj='+document.getElementById("txtIdKunj").value+'&userId=<?php echo $userId;?>';
                  var url = 'cetakSKM.php?idKunj='+document.getElementById("txtIdKunj").value+'&userId=<?php echo $userId;?>';
          if(par == 'kamar'){
             url += "&kamar=true";
          }else if (par == 'jampersal'){
            url += "&jampersal=true";
          }else if (par == 'kdrt'){
            url += "&kdrt=true";
          }else if (par == 'lansia'){
            url += "&lansia=true";
          }
          window.open(url,'_blank'); 
            //batal();
        }
        
        
    

        function spi()
        {
            window.open('../unit_pelayanan/spInap.php?idKunj='+cIdKunj+'&dokter_id=','_blank');
            //batal();
        }

        function refreshGrid(){
            goFilterAndSort('gridbox');
            setTimeout('refreshGrid()', '120000');
        }

        function goFilterAndSort(grd){
            //alert(grd);
            if (grd=="gridbox"){
               // alert("registrasi_utils.php?grd=true&saring=true&saringan="+document.getElementById('TglKunj').value+"&userLog="+document.getElementById('userLog').value+"&asal="+document.getElementById('asal').value+"&filter="+a.getFilter()+"&sorting="+a.getSorting()+"&page="+a.getPage());
                //var sttkonsul= document.getElementById("sttkonsul").value;
                a.loadURL("registrasi_utils.php?grd=true&saring=true&saringan="+document.getElementById('TglKunj').value+"&userLog="+document.getElementById('userLog').value+"&asal="+document.getElementById('asal').value+"&filter="+a.getFilter()+"&sorting="+a.getSorting()+"&page="+a.getPage()+"&sttkonsul="+sttkonsul,"","GET");
            }
        }

        
        function onload(){
            //document.getElementById('cmbKab').value = 'Tuban';            
        }

        function konfirmasi(key,val){
            var sisip;
            //alert(val);
           if(key=='Error'){
                if(val=='tambah'){
                    alert('Tambah Gagal');
                    batal('bat');
                }
                else if(val=='simpan'){
                    alert('Simpan Gagal');
                    batal('bat');
                }
                else if(val=='hapus'){
                    alert('Hapus Gagal');
                    batal('bat');
                }
                else if(val=='SudahAda'){
                    alert('Pasien Sudah Berkunjung ke Unit Tersebut !');
                    batal('bat');
                }
                else if(val=='HariSama'){
                    alert('Kunjungan Pasien ini masih aktif. Pulangkan dahulu untuk kunjungan baru !');
                    batal('bat');
                }else if(val=='Rmdbl'){
                     alert('No.RM Sudah terpakai Silahkan Beri RM Baru');
                     document.getElementById("BtnNoRM").disabled=false;
                     document.getElementById("NoRm").disabled=false;
                }
                
                
            }else if(val!=undefined && val!=""){
                sisip=val.split("|");
                if(sisip[0]=='tambah' || sisip[0]=='simpan' || sisip[0]=='hapus'){
                    if(sisip[0]=='tambah'){
                        alert('Tambah Berhasil dengan No RM : '+sisip[5]);
                    }
                    else if(sisip[0]=='simpan')
                        alert('Simpan Berhasil');
                    else if(sisip[0]=='hapus')
                        alert('Hapus Berhasil');
                        
                    batal('bat');
                    
                    if(sisip[0]!='hapus'){
                        cIdKunj=sisip[1];
                        cIdPas=sisip[2];
                        cUnit = sisip[3];
                        document.getElementById("hid_kunjungan_id").value=cIdKunj;
                        if (document.getElementById("StatusPas").value=="4"){
                            document.getElementById("sjpAskes").disabled = false;
                            document.getElementById("sjpAskes_isi").disabled = false;
                        }else{
                            document.getElementById("sjpAskes").disabled = true;
                            document.getElementById("sjpAskes_isi").disabled = true;
                        }
                        if (sisip[4]=="1"){
                            document.getElementById("spInap").disabled = false;
                        }else{
                            document.getElementById("spInap").disabled = true;
                        }
                    }else{
                        cIdKunj="";
                        cIdPas="";
                        cUnit = "";
                        document.getElementById("hid_kunjungan_id").value="";
                        document.getElementById("sjpAskes").disabled = true;
                        document.getElementById("sjpAskes_isi").disabled = true;
                        document.getElementById("spInap").disabled = true;
                    }
                }
            }

            if(abc==0){
                isiCombo('asalLoket','<?php echo $userId; ?>','','asal',decUser);
                refreshGrid();
            }

            abc=1;
        }

        var a=new DSGridObject("gridbox");
        a.setHeader("DATA KUNJUNGAN PASIEN");
        a.setColHeader("NO,NO RM,NAMA,PENJAMIN,TEMPAT LAYANAN,KELAS,ALAMAT");
        a.setIDColHeader(",no_rm,nama,nama_kso,tempat_layanan,kelas,alamat");
        a.setColWidth("30,70,200,180,150,80,260");
        a.setCellAlign("center,center,left,center,center,center,left");
        a.setCellHeight(20);
        a.setImgPath("../icon");
        a.setIDPaging("paging");
        a.attachEvent("onRowClick","ambilData");
        a.onLoaded(konfirmasi);
      //  alert("registrasi_utils.php?grd=true&saring=true&saringan="+document.getElementById('TglKunj').value+"&sttkonsul="+sttkonsul);
        a.baseURL("registrasi_utils.php?grd=true&saring=true&saringan="+document.getElementById('TglKunj').value+"&sttkonsul="+sttkonsul);
        a.Init();
        
    riw1 = new DSGridObject("gridboxRiwayat");
    riw1.setHeader("RIWAYAT KUNJUNGAN");
    riw1.setColHeader("NO,TGL MASUK,TEMPAT LAYANAN,NO SEP");
    riw1.setIDColHeader(",tgl,tmptlay,");
    riw1.setColWidth("25,75,120,200");
    riw1.setCellAlign("center,center,,center,left");
    riw1.setCellHeight(20);
    riw1.setImgPath("../icon");
    //riw1.setIDPaging("pagingRiwayat");
    riw1.attachEvent("onRowClick","ambilDataRiwayat");
    //riw1.onLoaded(ambilDataRiw1);
    //riw1.baseURL("registrasi_utils.php?grdRiwayat=true&idanggota='1'");
    riw1.Init();
    
    grdAprove = new DSGridObject("gridboxAprove");
    grdAprove.setHeader("RIWAYAT KUNJUNGAN");
    grdAprove.setColHeader("NO,TGL PENGAJUAN,NO PESERTA,NAMA,JENIS LAYANAN,KETERANGAN,STATUS");
    grdAprove.setIDColHeader(",,,,,,");
    grdAprove.setColWidth("25,75,100,100,50,100,100");
    grdAprove.setCellAlign("center,center,,center,center,center,centeer");
    grdAprove.setCellHeight(20);
    grdAprove.setImgPath("../icon");
    
    grdAprove.attachEvent("onRowClick","ambilAprove");
    //grdAprove.onLoaded(ambilDatagrdAprove);
    grdAprove.baseURL("registrasi_utils.php?grdAprove=true");
    grdAprove.Init();
        
        //function set_stt(v){
//          if(v==1){
//              //alert(v);
//              if(document.getElementById("StatusPas").value==1){
//                  document.getElementById("HakKelas").options.selectedIndex=0;
//                  }else{
//                      document.getElementById("HakKelas").options.selectedIndex=2;
//                      
//                      }
//              }else{
//                  if(document.getElementById("StatusPas").value==1){
//                      document.getElementById("HakKelas").options.selectedIndex=0;
//                  }else{
//                      document.getElementById("HakKelas").options.selectedIndex=0;
//                      
//                      }
//                  
//                  }
//          
//          }

    function fireEvent(element,event){
        if (document.createEventObject){
        // dispatch for IE
        var evt = document.createEventObject();
        return element.fireEvent('on'+event,evt)
        }
        else{
        // dispatch for firefox + others
        var evt = document.createEvent("Events");
        evt.initEvent(event, true, true ); // event type,bubbling,cancelable
        
        return !element.dispatchEvent(evt);
        
        }
    }
    
    
    function fun(){
        
          fireEvent(document.getElementById("StatusPas"), "change");;
    }
    
    

    function getSJP_ub(){
      
        
        if(document.getElementById('StatusPas').value==20){
        
        var url = 'get_sjp_temp.php?pasienid='+document.getElementById('txtIdPasien').value+'&tgl='+document.getElementById('TglSJP_pop').value+'&jampersal=true';
        
        }else if(document.getElementById('StatusPas').value==5){
        var url = 'get_sjp_temp.php?pasienid='+document.getElementById('txtIdPasien').value+'&tgl='+document.getElementById('TglSJP_pop').value+'&jamkesda=true';
        }else if(document.getElementById('StatusPas').value==17){
        var url = 'get_sjp_temp.php?pasienid='+document.getElementById('txtIdPasien').value+'&tgl='+document.getElementById('TglSJP_pop').value+'&kdrt=true';
        }else if(document.getElementById('StatusPas').value==16){
        var url = 'get_sjp_temp.php?pasienid='+document.getElementById('txtIdPasien').value+'&tgl='+document.getElementById('TglSJP_pop').value+'&lansia=true';
        }//else if(document.getElementById('StatusPas').value==7){
//      var url = 'get_sjp_temp.php?pasienid='+document.getElementById('txtIdPasien').value+'&tgl='+document.getElementById('TglSJP').value+'&lansia=true';
//      }
        
        else{
        var url = 'get_sjp_temp.php?pasienid='+document.getElementById('txtIdPasien').value+'&tgl='+document.getElementById('TglSJP_pop').value+'&jamkesda=false&jampersal=false';
        
        }
            //alert(url);
            Request_new(url , '', '', 'GET', function(a){
            //alert(a);
            var sip=a.split("||");
            document.getElementById('TglSJP').value=sip[1];
            document.getElementById('NoSJP_pop').value=sip[2];
            document.getElementById('NoJaminan').value=sip[0];
            });
    }
    
    function  close_set_grid() {
        goFilterAndSort('gridbox'); 
    }
    
    function gantifaskes(val){
        document.getElementById('kode_ppkBPJS').value='';
        document.getElementById('nama_ppkBPJS').value='';
        document.getElementById('spanfaskes').innerHTML=val;
    }
    function pengajuanSEP(){
        grdAprove.loadURL("registrasi_utils.php?grdAprove=true","","GET");
        new Popup('divPengajuanSEP',null,{modal:true,position:'center',duration:0});
        document.getElementById('divPengajuanSEP').popup.show();
     
    }
    function updateTglPlg(){
        new Popup('divUpdateTglPlg',null,{modal:true,position:'center',duration:0});
        document.getElementById('divUpdateTglPlg').popup.show();
     
    }
    function simpanPengajuan(){
        
            new Ajax.Request('../bridging1.1/pengajuan.php',{
            method : 'POST',
            parameters : {
                
                'no_kartu': document.getElementById('p_noKartu').value,
                'tgl_sep': document.getElementById('p_TglSep').value,
                'jenisLayanan': document.getElementById('p_jenisLayanan').value,
                'keterangan': document.getElementById('p_keterangan').value,
                'nama': document.getElementById('p_namaPes').value
                
                
            },
            onSuccess : function(response){
                //alert(response.responseText);
                 var data = JSON.parse(response.responseText);
                 var mesage=String.prototype.trim.call(data.metaData.message);
                 alert(mesage);
                 grdAprove.loadURL("registrasi_utils.php?grdAprove=true","","GET");
            }
        });
            
    }
   
    function isiSEP(){
        if(document.getElementById('txtIdKunj').value==''){
            alert('Silahkan Plih Pasien Dulu');
            return false;
        }
        if(document.getElementById('StatusPas').value!=3){
            alert('Pasien Bukan BPJS');
            return false;
        }
        

         
        new Popup('divisiSEP',null,{modal:true,position:'center',duration:0});
        document.getElementById('divisiSEP').popup.show();
    }
    function ambilAprove(){
        var sisipan=grdAprove.getRowId(grdAprove.getSelRow()).split("|");
        document.getElementById('p_TglSep').value=grdAprove.cellsGetValue(grdAprove.getSelRow(),2);
        document.getElementById('p_noKartu').value=grdAprove.cellsGetValue(grdAprove.getSelRow(),3);
        document.getElementById('idAprove').value=sisipan[0];
        document.getElementById('p_namaPes').value=grdAprove.cellsGetValue(grdAprove.getSelRow(),4);
        document.getElementById('p_jenisLayanan').value=sisipan[3];
        document.getElementById('p_keterangan').value=sisipan[2];
        document.getElementById('btnSimpan_p').disabled=true;
        
    } 
    function p_cekPeserta(){
        new Ajax.Request('../bridging1.1/find_nik.php', {
          method : 'POST',
          parameters :{
            'nom__' : document.getElementById('p_noKartu').value,
            'tgl_sep' : document.getElementById('TglSJP').value,
            'jenis' : 1
          },
          onSuccess: function(response) {
            //alert(response.responseText);
           console.log(response);
           var data = JSON.parse(response.responseText);
           var hsl_k__=String.prototype.trim.call(data.metaData.code);p_namaPes
           document.getElementById('p_namaPes').value=String.prototype.trim.call(data.response.peserta.nama);
            
          }
        });  
    }
    function p_resset(){
        document.getElementById('p_noKartu').value='';     
        document.getElementById('p_TglSep').value='';      
        document.getElementById('p_keterangan').value='';   document.getElementById('idAprove').value='';
        document.getElementById('p_namaPes').value='';      
        document.getElementById('krs_SEP').value='';
        document.getElementById('krs_nama').value='';
        document.getElementById('tgl_krs').value='';
        document.getElementById('btnSimpan_p').disabled=false;
        document.getElementById('isi_noSEP').value='';     
        document.getElementById('txt_i_Nokartu').value='';      
        document.getElementById('txt_i_NamaPes').value='';   
        document.getElementById('txt_i_NoRm').value='';      
        document.getElementById('txt_i_DiagAwal').value='';
        document.getElementById('txt_i_jnsPeserta').value='';
        document.getElementById('txt_i_Catatan').value='';
        document.getElementById('txt_i_Nokartu').disabled=true;
        document.getElementById('txt_i_NamaPes').disabled=true;
        document.getElementById('txt_i_jnsPeserta').disabled=true;
        document.getElementById('txt_i_Catatan').disabled=true;
    }
    function AproveSEP(){
         new Ajax.Request('../bridging1.1/aprove.php',{
            method : 'POST',
            parameters : {
                
                'no_kartu': document.getElementById('p_noKartu').value,
                'tgl_sep': document.getElementById('p_TglSep').value,
                'jenisLayanan': document.getElementById('p_jenisLayanan').value,
                'keterangan': document.getElementById('p_keterangan').value,
                'id': document.getElementById('idAprove').value
                
                
            },
            onSuccess : function(response){
                //alert(response.responseText);
                 var data = JSON.parse(response.responseText);
                 var mesage=String.prototype.trim.call(data.metaData.message);
                 alert(mesage);
                 grdAprove.loadURL("registrasi_utils.php?grdAprove=true","","GET");
            }
        });
    }
    function createRujukan(){
         
        document.getElementById("divpopupRujukan").innerHTML='<table  width="100%" border="0" cellspacing="1" cellpadding="0"  align="center" class="tabel"><tr><td><img  alt="close" src="../icon/x.png" width="32" class="popup_closebox" onclick="batalRujukan()" style="float:right; cursor: pointer"  /><object style="width:950px;height:600px;font-size:8px;" data="pengurusan_bpjs/createRujukan.php?kunjungan_id='+document.getElementById("txtIdKunj").value+'&pasien_id='+document.getElementById("txtIdPasien").value+'&noSep='+document.getElementById("NoSJP").value+'" ></object></td></tr></table>';
        
        new Popup('divCreateRujukan',null,{modal:true,position:'center',duration:0});
        document.getElementById('divCreateRujukan').popup.show();
       
    }
   
    function UpdateKRS(){
        new Ajax.Request('../bridging1.1/update_tglPlg.php',{
                    method : 'POST',
                    parameters : {
                        
                        'idKunjungan': '',
                        'tglPulang': document.getElementById('tgl_krs').value,
                        'user' :    <?php echo $userId; ?>,
                        'no_SEP': document.getElementById('krs_SEP').value
                        
                    },
                    onComplete : function(response){
                        //alert(response.responseText);
                        data = JSON.parse(response.responseText);
                        var code=String.prototype.trim.call(data.metaData.code);
                        var message=String.prototype.trim.call(data.metaData.message);
                        
                        alert(message);
                        
                            
                }
                });
    }
    function cekBooking(){
    if(document.getElementById('no_booking').value==''){
                alert('Isi no Booking atau No Rm!');
                return false;
            }
              new Ajax.Request('../bridging1.1/find_booking.php', {
              method : 'POST',
              parameters :{
                'nom__' : document.getElementById('no_booking').value
            
              },onSuccess: function(response) {
                 // alert(response.responseText);
                  var data_ = JSON.parse(response.responseText);
                  var code_=String.prototype.trim.call(data_[0].response.code);

                  if(code_==1){
                      var pasId_=String.prototype.trim.call(data_[1].data[12].pasien_id);
                      document.getElementById('txtNIK').value=String.prototype.trim.call(data_[1].data[10].nik);
                      document.getElementById('idBooking').value=String.prototype.trim.call(data_[1].data[0].booking_id);
                      document.getElementById('txtIdPasien').value=String.prototype.trim.call(data_[1].data[12].pasien_id);
                      if(pasId_ !== 0){
                        document.getElementById('IsNewPas').value='0';
                      }
                      document.getElementById('NoRm').value=String.prototype.trim.call(data_[1].data[13].no_rm);
                      document.getElementById('Nama').value=String.prototype.trim.call(data_[1].data[14].nama);
                      document.getElementById('Gender').value=String.prototype.trim.call(data_[1].data[15].sex);
                      document.getElementById('Pendidikan').value=String.prototype.trim.call(data_[1].data[25].pendidikan_id);
                      document.getElementById('Pekerjaan').value=String.prototype.trim.call(data_[1].data[26].pekerjaan_id);
                      document.getElementById('NmOrtu').value=String.prototype.trim.call(data_[1].data[27].nama_ortu);
                      document.getElementById('NmSuTri').value=String.prototype.trim.call(data_[1].data[28].nama_suami_istri);
                      //document.getElementById('panggilan').value=String.prototype.trim.call(data_[1].data[29].panggilan);
                      var tglLhr = String.prototype.trim.call(data_[1].data[17].tgl_lahir).split("-");
                      document.getElementById('TglLahir').value= tglLhr[2]+"-"+tglLhr[1]+"-"+tglLhr[0];
                      document.getElementById('cmbAgama').value=String.prototype.trim.call(data_[1].data[16].agama);
                      document.getElementById('telp').value=String.prototype.trim.call(data_[1].data[11].hp);
                      document.getElementById('Alamat').value=String.prototype.trim.call(data_[1].data[18].alamat);
                      document.getElementById('rt').value=String.prototype.trim.call(data_[1].data[19].rt);
                      document.getElementById('rw').value=String.prototype.trim.call(data_[1].data[20].rw);
                      document.getElementById('cmbProp').value=String.prototype.trim.call(data_[1].data[24].prop_id);
                      document.getElementById('cmbKab').value=String.prototype.trim.call(data_[1].data[23].kab_id);
                      document.getElementById('cmbKec').value=String.prototype.trim.call(data_[1].data[22].kec_id);
                      document.getElementById('cmbDesa').value=String.prototype.trim.call(data_[1].data[21].desa_id);
                      document.getElementById('NoAnggota').value=String.prototype.trim.call(data_[1].data[5].no_anggota);
                      document.getElementById('StatusPas').value=String.prototype.trim.call(data_[1].data[4].kso_id);
                      document.getElementById('TmpLayanan').value=String.prototype.trim.call(data_[1].data[3].unit_id);
                      isiCombo('cmbDesa',String.prototype.trim.call(data_[1].data[22].kec_id),String.prototype.trim.call(data_[1].data[21].desa_id));
                      gantiUmur();
                      setPenjamin(data_[1].data[4].kso_id)
                  }else{
                    alert(String.prototype.trim.call(data_[0].response.message));
                  }
                
              }
            });
            
        
    }
    function updateBooking(){
        new Ajax.Request('../bridging1.1/find_booking.php', {
              method : 'POST',
              parameters :{
                'id_booking' : document.getElementById('idBooking').value
            
              },onSuccess: function(response) {
                 var data_ = JSON.parse(response.responseText);
                 var code_=String.prototype.trim.call(data_[0].response.code);
                 if(code_!=1){ alert(String.prototype.trim.call(data_[0].response.message));}
              }
        });
    }

    function searchDPJP(){
       var datais_inap=document.getElementById('JnsLayanan').value;
         if(datais_inap==1||datais_inap==44||datais_inap==64){
            datais_inap=2;
        }else{
            datais_inap=1;
        }
        var spesialis=document.getElementById('kode_poliBPJS').value;
        Request('../bridging1.1/search_dpjp.php?cariDpjp=true&tglPelayanan='+document.getElementById('TglSJP').value+'&jenisLayanan='+datais_inap+'&spesialis='+spesialis , 'div_dpjp', '', 'GET' );
        document.getElementById('div_dpjp').style.display='block';
           
        
    
    }

    function getdpjpid(par){
       
        document.getElementById('txtDpjp').value=par;
        document.getElementById('div_dpjp').style.display='none';
    }

    function cariSuplesi(){
        if(document.getElementById('NoAnggota').value==''){
            alert('isi No anggota dulu'); return false;
        }
         Request('../bridging1.1/search_dpjp.php?cariSuplesi=true&tglPelayanan='+document.getElementById('TglSJP').value+'&noKartu='+document.getElementById('NoAnggota').value , 'div_suplesi', '', 'GET' );
        
        document.getElementById('div_suplesi').style.display='block';
    }

    function closeDiv(par){
         document.getElementById(''+par+'').style.display='none';
         if(par=='divDataRujukan'){
         document.getElementById('divHasilRujukan').style.display='none';
         document.getElementById('r_txtNokartu').value='';
         document.getElementById('r_tglRujukan').value='';
     }



    }

    function cariRujukan(){
         new Popup('divDataRujukan',null,{modal:true,position:'center',duration:0});
             document.getElementById('divDataRujukan').popup.show();
       
    }

    function ubahParRujukan(){
        if(document.getElementById('chkRujukan1').checked==true){
                document.getElementById('trNoKartu').style.display='table-row';
                document.getElementById('trTanggalRujukan').style.display='none';
        }else{
            document.getElementById('trNoKartu').style.display='none';
            document.getElementById('trTanggalRujukan').style.display='table-row';
        }
    }

    function cariRujukanBPJS(){
        if(document.getElementById('r_txtNokartu').value==''){  alert('No Kartu belum diisi!'); return false;}
        if(document.getElementById('chkRujukan1').checked==true){
         Request('../bridging1.1/search_dpjp.php?cariRujukan=true&noKartu='+document.getElementById('r_txtNokartu').value , 'divHasilRujukan', '', 'GET' );
         document.getElementById('divHasilRujukan').style.display='block';
        }else{
         Request('../bridging1.1/search_dpjp.php?cariRujukanTgl=true&tglRujukan='+document.getElementById('r_tglRujukan').value , 'divHasilRujukan', '', 'GET' );
         document.getElementById('divHasilRujukan').style.display='block';
        }
    }

    function getMultiRujukan(par){
            formKunjunganbyStatusPasien(3);
            var split=par.split('|');
            status_bpjs_aktif=1;
            aktif_set_bpjs=1;
            document.getElementById('getSEP').disabled = false;
            //document.getElementById('chk_bpjs').value=1;
            document.getElementById('NoAnggota').value = split[0];

            document.getElementById('jenis_pesertaBPJS').value = split[1];
            document.getElementById('nama_ppkBPJS').value = split[3];
            document.getElementById('nama_peserta_bpjs').value = split[4];
            document.getElementById('tgl_rujukanBPJS').value = split[11];
            for(var i=0;i<document.getElementById("HakKelas").length;i++)

                        {
                            if(document.getElementById("HakKelas").options[i].text==split[5])
                                document.getElementById("HakKelas").selectedIndex = i;
                                
                        }

            for(var i=0;i<document.getElementById("TmpLayanan").length;i++)

                        {
                            if(document.getElementById("TmpLayanan").options[i].title==split[6])
                                document.getElementById("TmpLayanan").selectedIndex = i;
                                
                        }
            setKelas('setThrough'); r_karcis();
            //document.getElementById('TmpLayanan').value= document.getElementById('d_politujuan').value;
            document.getElementById('kode_ppkBPJS').value = split[2];
            var myDate = new Date();
            var d = myDate.getDate();
            var m =  myDate.getMonth();
                m += 1;  // JavaScript months are 0-11
            var y = myDate.getFullYear();
            var sekarangdate= d+"-"+m+"-"+y;
            
           
            var p_="StatusPenj*-*PESERTA*|*AslMasuk*-*11*|*StatusPas*-*3*|*txtPenjamin*-*BPJS*|*Penjamin*-*3";
                
            fSetValue(window,p_);
            document.getElementById('diagnosa_awalBPJS').value = split[9]+"-"+split[8];
            document.getElementById('Ket').value = split[10];
            document.getElementById('kode_rujukanBPJS').value = split[7];
            
            

             new Ajax.Request('registrasi_utils.php?act=caridiag',{
                method : 'POST',
                parameters : {
                    'kode': split[8]
                 },
                
                onSuccess : function(r){
                     document.getElementById('diagnosa_awalBPJS_id').value=r.responseText;
                    }
            });
            
           
            new Ajax.Request('registrasi_utils.php',{
                method : 'POST',
                parameters : {
                    'getNoRMbyBpjs' : "true",
                    'no_anggota_' : split[0]
                    
                },
            onSuccess : function(response){
                    if(response.responseText=='null'){
                        alert("Maaf No RM dengan no_anggota BPJS "+split[0]+" tidak ditemukan dalam database. Masukkan No RM pasien");
                         var p_bpjs="NoRm*-**|*Nama*-**|*NoRmLm*-**|*NoBiling*-**|*NmOrtu*-**|*NmSuTri*-**|*txtNIK*-**|*th*-**|*Bln*-**|*telp*-**|*Alamat*-**|*rt*-**|*rw*-*";
                         fSetValue(window,p_bpjs);
                         document.getElementById("NoRm").disabled=false;
                         document.getElementById("NoRm").focus();
                         
                         
                    }else{
                        data = JSON.parse(response.responseText);
                        document.getElementById('NoRm').value = data[0].no_rm;
                        document.getElementById('div_pasien').style.display='none';  
                        Request('pasien_list.php?act=cari&txt=NoRm&keyword='+data[0].no_rm,'div_pasien','','GET',GetPasienByNorm);
                    }

                }
         
            });
            var link = document.getElementById('closeRujukan');
            link.click();
    }   

        function simpanSep(){
        var hak_kelas_=document.getElementById('HakKelas').options[document.getElementById('HakKelas').selectedIndex].text;
            hak_kelas_=hak_kelas_.trim();
        if(document.getElementById("rdlaka1").checked==true && document.getElementById("rdlaka2").checked==false){
            var laka=document.getElementById("rdlaka1").value;
            var lokalaka = document.getElementById("cmbPropBpjs").value+'-'+document.getElementById('cmbPropBpjs').options[document.getElementById('cmbPropBpjs').selectedIndex].text
                            +'~'+document.getElementById("cmbKabBpjs").value+'-'+document.getElementById('cmbKabBpjs').options[document.getElementById('cmbKabBpjs').selectedIndex].text
                            +'~'+document.getElementById("cmbKecBpjs").value+'-'+document.getElementById('cmbKecBpjs').options[document.getElementById('cmbKecBpjs').selectedIndex].text;
        }else if(document.getElementById("rdlaka2").checked==true && document.getElementById("rdlaka1").checked==false){
            var laka=document.getElementById("rdlaka2").value;
            var loklaka='';
        }
        if(document.getElementById("rdfaskes1").checked==true ){
            var asalfaskes=document.getElementById("rdfaskes1").value;
        }else if(document.getElementById("rdfaskes2").checked==true ){
            var asalfaskes=document.getElementById("rdfaskes2").value;
        }
        if(document.getElementById("chkCob").checked==true){
            var cob=1;
        }else{
            var cob=0;
        }
        if(document.getElementById("chkKatarak").checked==true){
            var katarak=1;
        }else{
            var katarak=0;
        }
        if(document.getElementById('chkSuplesi').checked==true){
                
                var suplesi=1;
                var nosepsuplesi=document.getElementById('txtNoSepSuplesi').value;
        }else{
                var suplesi=0;
                var nosepsuplesi='';
        }
        var kodeDpjp=document.getElementById('txtDpjp').value.split('-');
        var kodeDpjp=kodeDpjp[0];

            new Ajax.Request('pengurusan_bpjs/pengurusan_bpjs_utils_vclaim.php',{
            method : 'POST',
            parameters : {
                'SimpanDataSEP':'true',
                'no_sjp': document.getElementById('NoSJP').value,
                'kunjungan_id':document.getElementById("txtIdKunj").value,
                'namapeserta':document.getElementById('nama_peserta_bpjs').value,
                'ms_diagnosa_id':document.getElementById('diagnosa_awalBPJS_id').value,
                'ket':document.getElementById('Ket').value,
                'jenis_peserta':document.getElementById("jenis_pesertaBPJS").value,
                'nama_ppk':document.getElementById('nama_ppkBPJS').value,
                'kode_ppk':document.getElementById('kode_ppkBPJS').value,
                'kode_rujukan':document.getElementById('kode_rujukanBPJS').value,
                'tgl_rujukan':document.getElementById('tgl_rujukanBPJS').value,
                'asal_kunjungan':document.getElementById('AslMasuk').value,
                'tgl_sjp':document.getElementById('TglKunj').value,
                'status_penj':document.getElementById("StatusPenj").value,
                'kso_kelas_id':document.getElementById("HakKelas").value,
                'no_anggota': document.getElementById('NoAnggota').value,
                'pasien_id':document.getElementById("txtIdPasien").value,
                'kso_id':document.getElementById("StatusPas").value,
                'telp':document.getElementById('telp').value,
                'laka':laka,
                'lokaLaka':lokalaka,
                'penjamin_laka':document.getElementById('cmbPenjLain').value,
                'hakKelas':hak_kelas_,
                'noRm':document.getElementById('NoRm').value,
                'asalFaskes':asalfaskes,
                'cob':cob,
                'katarak':katarak,
                'noSKDP':document.getElementById("noSkdp").value,
                'DPJP':kodeDpjp,
                'kodedpjp':document.getElementById('txtDpjp').value,
                'tglKejadian':document.getElementById("tgl_kejadian").value,
                'kodeProp':document.getElementById("cmbPropBpjs").value,
                'kodeKab':document.getElementById("cmbKabBpjs").value,
                'kodeKec':document.getElementById("cmbKecBpjs").value,
                'suplesi':suplesi,
                'nosepSuplesi':nosepsuplesi,
                'jenisLayanan':document.getElementById("JnsLayanan").value
            },
            
            onSuccess : function(r){
                alert(r.responseText);
                document.getElementById('btnsmpSEP').style.display='none';
                saring();
                batal(1);
               
            }
        });
    }
    function suplesi(){
        if(document.getElementById('chkSuplesi').checked==true){
            document.getElementById('txtNoSepSuplesi').style.display='table-row';
            document.getElementById('btnCariSuplesi').style.display='table-row';
        }else{
            document.getElementById('txtNoSepSuplesi').style.display='none';
            document.getElementById('btnCariSuplesi').style.display='none';
        }
    }

    function actIsiSEP(){
        if(document.getElementById('isi_noSEP').value==''){
            alert('Nomor SEP masih Kosong');
            return false;
        }
        if(document.getElementById('isi_noSEP').value.length!=19){
            alert('Panjang NO SEP tidak sesuai');
            return false;
        }
        if(document.getElementById('txt_i_jnsPeserta').value==''){
            alert('Jenis Peserta Masih kosong');
            return false;
        }
        if(document.getElementById('txt_i_Nokartu').value==''){
            alert('Nomor Kartu masih kosong');
            return false;
        }
        if(document.getElementById('txt_i_Nokartu').value!=document.getElementById('NoAnggota').value){
            alert('Nomor Kartu Tidak sama');
            return false;
        }
        if(document.getElementById('NoRm').value!=document.getElementById('txt_i_NoRm').value){
            alert('Nomor RM Tidak sama');
            return false;
        }

         new Ajax.Request('pengurusan_bpjs/insertSEPmanual.php', {
          method : 'POST',
          parameters :{
            'pasienId' : document.getElementById('txtIdPasien').value,
            'noSep'   : document.getElementById('isi_noSEP').value,
            'noKartu' : document.getElementById('txt_i_Nokartu').value,
            'jenisPeserta' : document.getElementById('txt_i_jnsPeserta').value,
            'namaPeserta'  : document.getElementById('txt_i_NamaPes').value,
            'idKunjungan'  : document.getElementById('txtIdKunj').value,
            'hakKelas'  : document.getElementById('cmb_i_hakKelas').value,
            'catatan'  : document.getElementById('txt_i_Catatan').value,
            'kodePPK'  : document.getElementById('kode_ppkBPJS').value,
            'namaPPK'  : document.getElementById('nama_ppkBPJS').value,
            'isiSEP'   : true
          },
          onSuccess: function(response) {
              var res =response.responseText;
              if(res ==1){
                document.getElementById('NoSJP').value=document.getElementById('isi_noSEP').value
                alert('Data berhasil Disimpan');
              }else{
                alert('gagal');
              }
          }
        });


        
    }
    
    function i_cekSEP(){
        if(document.getElementById('isi_noSEP').value==''){
            alert('Nomor SEP masih Kosong');
            return false;
        }

        new Ajax.Request('pengurusan_bpjs/insertSEPmanual.php', {
          method : 'POST',
          parameters :{
            'cekbridgingaktif' : true
          },
          onSuccess: function(response) {
           var status = response.responseText;
           if(status==1){
                new Ajax.Request('../bridging1.1/find_nik.php', {
                  method : 'POST',
                  parameters :{
                    'nom__' : document.getElementById('isi_noSEP').value,
                    'jenis' : 4
                  },onSuccess: function(response) {
                     var data = JSON.parse(response.responseText);
                     var code = String.prototype.trim.call(data.metaData.code);
                     var message = String.prototype.trim.call(data.metaData.message);
                     if(code != 200){
                        alert(message);
                     }else{
                        var hakKelas = data.response.peserta.hakKelas;
                        if(hakKelas=='Kelas 1'){
                            document.getElementById('cmb_i_hakKelas').value = 2;
                        }else if(hakKelas=='Kelas 2'){
                            document.getElementById('cmb_i_hakKelas').value = 3;
                        }else if(hakKelas=='Kelas 3'){
                            document.getElementById('cmb_i_hakKelas').value = 4;
                        }
                        document.getElementById('isi_noSEP').value = data.response.noSep;
                        document.getElementById('txt_i_Nokartu').value = data.response.peserta.noKartu;
                        document.getElementById('txt_i_NamaPes').value = data.response.peserta.nama;
                        document.getElementById('txt_i_NoRm').value = data.response.peserta.noMr;
                        document.getElementById('txt_i_DiagAwal').value = data.response.diagnosa;
                        document.getElementById('txt_i_jnsPeserta').value = data.response.peserta.jnsPeserta;
                        document.getElementById('txt_i_Catatan').value = data.response.catatan;
                     }
                  }
                });
           }else{
                new Ajax.Request('pengurusan_bpjs/insertSEPmanual.php', {
                  method : 'POST',
                  parameters :{
                    'kunjunganId' : document.getElementById('txtIdKunj').value,
                    'cekSimrs'    : true
                  },onSuccess: function(response) {
                     var data = JSON.parse(response.responseText);
                     document.getElementById('txt_i_Nokartu').disabled=false;
                     document.getElementById('txt_i_NamaPes').disabled=false;
                     document.getElementById('txt_i_jnsPeserta').disabled=false;
                     document.getElementById('txt_i_Catatan').disabled=false;
                     document.getElementById('txt_i_Nokartu').value = data.no_anggota;
                     document.getElementById('txt_i_NamaPes').value = data.nama_peserta_bpjs;
                     document.getElementById('txt_i_NoRm').value = data.no_rm;
                     document.getElementById('txt_i_DiagAwal').value = data.nama;
                     document.getElementById('txt_i_jnsPeserta').value = data.jenis_peserta;
                     document.getElementById('txt_i_Catatan').value = data.ket;
                     document.getElementById('cmb_i_hakKelas').value = data.kso_kelas_id;
                     
                     
                  }
                });

           }

          }

        });
        

        
    }
    </script>
    
    
</html>
<?php 

?>