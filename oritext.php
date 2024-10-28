<?php
// error_reporting(0);
require_once "vendor/autoload.php";
require "functions.php";

$html = '
<htmlpageheader name="MyHeader1">
<style>                         
    .kopsurat{
        text-align:right;
        color:#006633;
        width:100%;
        font-size:14pt;
        line-height:1.3;

    }
    br.alam { 
        display: block; 
        margin-bottom: -0.3em; 
    } 
    .isi{
        font-size:12pt;
        text-align:justified;
    }
    .tengah{
        text-align:center;
        margin-left:auto;
        margin-right:auto;
        line-height:1.3;
    }
    
</style>
    <table class="kopsurat" >
                    <tr>
                        <td width="15%" style="text-align:left;"><img style="float:left;" align="center" src="logonu.svg" height="90px"></td>
                        <td><span style="line-height:14pt;font-family:trajan"><b>Pengurus Cabang Nahdlatul Ulama Lampung Tengah<br>Lembaga Pendidikan Ma\'arif NU</b></span><br/><span style="font-size:10pt;">Jl. Raya Proklamator No. 134 Seputih Jaya Gunung Sugih 34165</span><span style="font-size:10pt;color:black"><br class="alam"/>
                        085692321720 <span style="font-family:fareg">&#xe11b;</span><br class="alam"/>lampungtengahmaarif@gmail.com <span style="font-family:fareg">&#x40;</span><br class="alam"/> https://lpmaariflampungtengah.id <span style="font-family:fareg">&#xf0ac;</span></span>
                        </td>
                        
                    </tr>
            </table>
</htmlpageheader>

<htmlpagefooter name="MyFooter1">
    <table width="100%">
        <tr>
            <td width="50%" style="line-height:14pt;font-family:trajan;color:#006633;">Merawat Jagat, Membangun Peradaban</td>
            <td width="50%" style="text-align:right;"><img style="float:right;padding-bottom:-23px;padding-right:-42px" align="center" src="tali.svg"></td>
            
        </tr>
    </table>
</htmlpagefooter>

<sethtmlpageheader name="MyHeader1" value="on" show-this-page="1" />
<sethtmlpagefooter name="MyFooter1" value="on" />


<div class="isi">
    <div class="tengah">
        <div style="font-weight: bold;">
            <barcode code="indonesia" size="0.8" type="QR" error="M" class="barcode" disableborder="1"/>
            SURAT KEPUTUSAN<br/>
            PENGURUS LEMBAGA PENDIDIKAN MA\'ARIF NU PCNU<br/>
            KABUPATEN LAMPUNG TENGAH<br/>
            Nomor : 420/0001/PC.LPM-NU/SKEP/A.1/VII/2024<br/>
            TENTANG<br/>
            PENGANGKATAN GURU TK MUSLIMAT ROUDLOTUL HUDA<br/>
            TAHUN PELAJARAN 2024/2025<br/>
        </div>
        
        <table width="100%">
            <tr>
                <td>
                    Pengurus Lembaga Pendidikan Ma\'arif NU PCNU Kabupaten Lampung Tengah
                    Menimbang : a.Bahwa guru adalah pendidik profesional dengan tugas utama mendidik, mengajar, membimbing,
                    mengarahkan, melatih, menilai, dan mengevaluasi peserta didik pada pendidikan anak usia dini jalur
                    pendidikan formal, pendidikan dasar dan pendidikan menengah, maka dipandang perlu untuk mengangkat
                    tenaga pendidik pada satuan pendidikan Ma\'arif NU yang memenuhi kualifikasi akademik dan kompetensi
                    pendidik.
                    b.Bahwa agar tugas dan tanggung jawab pendidik dalam pelaksanaan sebagaimana huruf a diatas berjalan
                    sesuai dengan mekanisme, efektivitas dan menurut ketentuan yang berlaku, maka dipandang perlu untuk
                    mengangkat tenaga pendidik dilingkungan Lembaga Pendidikan Ma\'arif yang ditetapkan dengan surat
                    Keputusan PC LP Ma\'arif NU Kabupaten Lampung Tengah.
                    Mengingat : 1. Undang-undang Nomor 20 Tahun 2003 tentang Sistem Pendidikan Nasional
                    2. Undang-undang No. 14 tahun 2005 tentang Guru dan Dosen
                    3. Peraturan Pemerintah Nomor 74 tahun 2008 tentang Guru
                    4. Peraturan pemerintah RI Nomor 19 tahun 2005, sebagaimana telah mengalami perubahan dengan
                    Peraturan pemerintah Nomor 32 tahun 2013 tentang Standar Nasional Pendidikan
                    5. Peraturan Pemerintah Nomor 17 tahun 2010, sebagaimana telah diubah dengan Peraturan Pemerintah
                    Nomor 66 tahun 2010 Tentang Penyelenggaraan dan Pengelolaan Pendidikan.
                    6. Surat Keputusan Pengurus Cabang NU Lampung Tengah Nomor : 034 / S.Kep / PCNU.LT / A.II / D.1 / VII /
                    2022 tanggal 04 Zulhijah 1443 H / 03 Juli 2022 M. Tentang Pengesahan Susunan Pengurus Cabang
                    Lembaga Pendidikan Ma\'arif NU Lampung Tengah Masa Khidmat 2022-2027.
                    7. Keputusan Pengurus Lembaga Pendidikan Ma\'arif Pusat hasil rakernas 2013 tentang Peraturan, Pedoman
                    Kerja, dan Pedoman Penyelenggaraan Lembaga Pendidikan Ma\'arif Nahdlatul Ulama
                    8. Hasil Keputusan Rapat Kerja Cabang LP Ma\'arif NU PCNU Lampung Tengah Tahun 2024 Tentang
                    Pedoman Tata Kelola Lembaga Pendidikan Ma\'arif, Pedoman Penyelenggaraan Pendidikan Ma\'arif NU,
                    Standar Pendidikan Ma\'arif NU, Juknis Penyelenggaraan Sekolah/Madrasah dalam Naungan LP Ma\'arif
                    NU PCNU Lampung Tengah, Rekomendasi dan Program Kerja tanggal 04 Juni 2024
                    Memperhatikan : Surat Rekomendasi Pengurus MWC LP Ma\'arif NU Kecamatan Padang Ratu Nomor :42A/28.07
                    .5/I/IWC.LPM.NU/PRIRek/VIV2023 Tentang usulan tenaga pendidik.
                    MEMUTUSKAN
                    Menetapkan :
                    Pertama : Mengangkat Saudara :
                    Nama : TRININGSIH
                    Tempat / Tgl. Lahir : ROGOWUNGU / 30-03-1981
                    Pendidikan/ Jurusan : SMK/ SEKRETARIS
                    NPM : 1981071411122081
                    NUPTK : 1662759660300022
                    Diangkat Sebagai : Guru Tetap Yayasan (GTY) TK MUSLIMAT ROUDLOTUL HUDA
                    Kedua : Diwajibkan melaksanakan tugas dan kewajibannya sebagai seorang pendidik serta mentaati dan
                    melaksanakan peraturan yang berlaku, dan melaksanakan kegiatan proses pembelajaran sesuai dengan
                    Kurikulum Nasional yang telah ditetapkan oleh Pemerintah.
                    Ketiga : Kepada pendidik tersebut diatas diberikan honorarium setiap bulan sesuai dengan kemufakatan Lembaga
                    Pendidikan Ma\'arif Nahdlatul Ulama
                    Keempat : Keputusan ini berlaku sejak tanggal 15 Juli 2024 sampai dengan 14 Juli 2025.
                    Kelima : Keputusan ini disampaikan kepada yang bersangkutan untuk diketahui dan dipergunakan sebagaimana
                    mestinya.
                    Ditetapkan di : Gunung Sugih
                    Pada Tanggal : 15 Juli 2024
                    PENGURUS CABANG LP MA\'ARIF NU LAMPUNG TENGAH
                    Ketua Sekretaris
                    WIDIYANTO, S.Kom. M. ZAIMUL UMAM, S.Pd.Si,M.Pd.
                    NPM. 197405022015111078 NPM. 199008042014111089
                    Tembusan Kepada Yth.
                    1. Kepala Dinas Pendidikan Kabupaten Lampung Tengah di Gunung Sugih
                    2. PCNU Kabupaten Lampung Tengah di Gunung Sugih Dokumen ini telah
                    3. Pengurus MWC LP Ma\'arif NU Kecamatan Padang Ratu ditandatangani secara digital
                    4. Arsip Pada 15 Juli 2024, 14:17:30
                    
                </td>
            </tr>
        </table>

                    Pengurus Lembaga Pendidikan Ma\'arif NU PCNU Kabupaten Lampung Tengah
                    Menimbang : a.Bahwa guru adalah pendidik profesional dengan tugas utama mendidik, mengajar, membimbing,
                    mengarahkan, melatih, menilai, dan mengevaluasi peserta didik pada pendidikan anak usia dini jalur
                    pendidikan formal, pendidikan dasar dan pendidikan menengah, maka dipandang perlu untuk mengangkat
                    tenaga pendidik pada satuan pendidikan Ma\'arif NU yang memenuhi kualifikasi akademik dan kompetensi
                    pendidik.
                    b.Bahwa agar tugas dan tanggung jawab pendidik dalam pelaksanaan sebagaimana huruf a diatas berjalan
                    sesuai dengan mekanisme, efektivitas dan menurut ketentuan yang berlaku, maka dipandang perlu untuk
                    mengangkat tenaga pendidik dilingkungan Lembaga Pendidikan Ma\'arif yang ditetapkan dengan surat
                    Keputusan PC LP Ma\'arif NU Kabupaten Lampung Tengah.
                    Mengingat : 1. Undang-undang Nomor 20 Tahun 2003 tentang Sistem Pendidikan Nasional
                    2. Undang-undang No. 14 tahun 2005 tentang Guru dan Dosen
                    3. Peraturan Pemerintah Nomor 74 tahun 2008 tentang Guru
                    4. Peraturan pemerintah RI Nomor 19 tahun 2005, sebagaimana telah mengalami perubahan dengan
                    Peraturan pemerintah Nomor 32 tahun 2013 tentang Standar Nasional Pendidikan
                    5. Peraturan Pemerintah Nomor 17 tahun 2010, sebagaimana telah diubah dengan Peraturan Pemerintah
                    Nomor 66 tahun 2010 Tentang Penyelenggaraan dan Pengelolaan Pendidikan.
                    6. Surat Keputusan Pengurus Cabang NU Lampung Tengah Nomor : 034 / S.Kep / PCNU.LT / A.II / D.1 / VII /
                    2022 tanggal 04 Zulhijah 1443 H / 03 Juli 2022 M. Tentang Pengesahan Susunan Pengurus Cabang
                    Lembaga Pendidikan Ma\'arif NU Lampung Tengah Masa Khidmat 2022-2027.
                    7. Keputusan Pengurus Lembaga Pendidikan Ma\'arif Pusat hasil rakernas 2013 tentang Peraturan, Pedoman
                    Kerja, dan Pedoman Penyelenggaraan Lembaga Pendidikan Ma\'arif Nahdlatul Ulama
                    8. Hasil Keputusan Rapat Kerja Cabang LP Ma\'arif NU PCNU Lampung Tengah Tahun 2024 Tentang
                    Pedoman Tata Kelola Lembaga Pendidikan Ma\'arif, Pedoman Penyelenggaraan Pendidikan Ma\'arif NU,
                    Standar Pendidikan Ma\'arif NU, Juknis Penyelenggaraan Sekolah/Madrasah dalam Naungan LP Ma\'arif
                    NU PCNU Lampung Tengah, Rekomendasi dan Program Kerja tanggal 04 Juni 2024
                    Memperhatikan : Surat Rekomendasi Pengurus MWC LP Ma\'arif NU Kecamatan Padang Ratu Nomor :42A/28.07
                    .5/I/IWC.LPM.NU/PRIRek/VIV2023 Tentang usulan tenaga pendidik.
                    MEMUTUSKAN
                    Menetapkan :
                    Pertama : Mengangkat Saudara :
                    Nama : TRININGSIH
                    Tempat / Tgl. Lahir : ROGOWUNGU / 30-03-1981
                    Pendidikan/ Jurusan : SMK/ SEKRETARIS
                    NPM : 1981071411122081
                    NUPTK : 1662759660300022
                    Diangkat Sebagai : Guru Tetap Yayasan (GTY) TK MUSLIMAT ROUDLOTUL HUDA
                    Kedua : Diwajibkan melaksanakan tugas dan kewajibannya sebagai seorang pendidik serta mentaati dan
                    melaksanakan peraturan yang berlaku, dan melaksanakan kegiatan proses pembelajaran sesuai dengan
                    Kurikulum Nasional yang telah ditetapkan oleh Pemerintah.
                    Ketiga : Kepada pendidik tersebut diatas diberikan honorarium setiap bulan sesuai dengan kemufakatan Lembaga
                    Pendidikan Ma\'arif Nahdlatul Ulama
                    Keempat : Keputusan ini berlaku sejak tanggal 15 Juli 2024 sampai dengan 14 Juli 2025.
                    Kelima : Keputusan ini disampaikan kepada yang bersangkutan untuk diketahui dan dipergunakan sebagaimana
                    mestinya.
                    Ditetapkan di : Gunung Sugih
                    Pada Tanggal : 15 Juli 2024
                    PENGURUS CABANG LP MA\'ARIF NU LAMPUNG TENGAH
                    Ketua Sekretaris
                    WIDIYANTO, S.Kom. M. ZAIMUL UMAM, S.Pd.Si,M.Pd.
                    NPM. 197405022015111078 NPM. 199008042014111089
                    Tembusan Kepada Yth.
                    1. Kepala Dinas Pendidikan Kabupaten Lampung Tengah di Gunung Sugih
                    2. PCNU Kabupaten Lampung Tengah di Gunung Sugih Dokumen ini telah
                    3. Pengurus MWC LP Ma\'arif NU Kecamatan Padang Ratu ditandatangani secara digital
                    4. Arsip Pada 15 Juli 2024, 14:17:30
                    
                
    </div>
</div>
';

// konfigurasi mPDF
$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
$fontDirs = $defaultConfig['fontDir'];

$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];

$mpdf = new \Mpdf\Mpdf([
    'fontDir' => array_merge($fontDirs, [
        __DIR__ . 'vendor/mpdf/mpdf/ttfonts/',
    ]),
    'fontdata' => $fontData + [ // lowercase letters only in font key
        'fareg' => [
            'R' => 'fa-regular-400.ttf',
        ],
        'fabrand' => [
            'R' => 'fa-brands-400.ttf',
        ],
        'trajan' => [
            'R' => 'TrajanPro-Regular.ttf',
        ],
        'poppins' => [
            'L' => 'Poppins-Light.ttf',
            'R' => 'Poppins-Regular.ttf',
            'I' => 'Poppins-Italic.ttf',
            'B' => 'Poppins-Bold.ttf',
        ],
    ],
    'default_font' => 'poppins'
]);

// $mpdf->AddPage("P","","","","","2","2","2","2","","","","","","","","","","","","Folio");
$mpdf->AddPageByArray(array(
    'orientation' => 'P',
    'mgt' => '40',
    'mgl' => '10',
    'mgr' => '10',
    'mgb' => '25',
    'mgh' => '3',
    'mgf' => '5',
    'sheet-size'=> 'Folio',
));
$mpdf->SetAuthor('Test PDF');
$mpdf->SetTitle('Test PDF');
$mpdf->SetDisplayMode('real');
$mpdf->SetProtection(array('print-highres','print'), '', 'HidupIniIndah\m/');
// $mpdf->WriteHtml($css);
$mpdf->WriteHTML(utf8_encode($html));
//$mpdf->Output();
$mpdf->Output('Test PDF.pdf', \Mpdf\Output\Destination::DOWNLOAD);

echo $html;
?>