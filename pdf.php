<?php 
$adi        =   $_POST["adi"];
$adi        =   $_POST["adi"];
$soyadi     =   $_POST["soyadi"];
$email      =   $_POST["email"];
$telefon    =   $_POST["telefon"];
$adres      =   $_POST["adres"];
$il_ilce    =   $_POST["il_ilce"];
$posta      =   $_POST["posta"];
$cins       =   $_POST["cins"];
$dtarih     =   $_POST["dtarih"];
$dyeri      =   $_POST["dyeri"];
$asker      =   $_POST["asker"];
$medeni     =   $_POST["medeni"];
$ehliyet    =   $_POST["ehliyet"];
$linkedin   =   $_POST["linkedin"];
$site       =   $_POST["site"];
$aciklama   =   $_POST["aciklama"];
$is1        =   $_POST["is1"];
$is2        =   $_POST["is2"];
$is3        =   $_POST["is3"];
$is4        =   $_POST["is4"];
$is5        =   $_POST["is5"];
$eg1        =   $_POST["eg1"];
$eg2        =   $_POST["eg2"];
$eg3        =   $_POST["eg3"];
$eg4        =   $_POST["eg4"];
$eg5        =   $_POST["eg5"];
$ref1       =   $_POST["ref1"];
$ref2       =   $_POST["ref2"];
$ref3       =   $_POST["ref3"];
$ref4       =   $_POST["ref4"];
$ref5       =   $_POST["ref5"];
$bec1       =   $_POST["bec1"];
$bec2       =   $_POST["bec2"];
$bec3       =   $_POST["bec3"];
$bec4       =   $_POST["bec4"];
$bec5       =   $_POST["bec5"];
$resimTmp = $_FILES["foto"]["tmp_name"];
$resimAdi = $_FILES["foto"]["name"];
$resimYolu ="profile/".$resimAdi;
if (move_uploaded_file($resimTmp,$resimYolu)) {

    require_once __DIR__ . '/vendor/autoload.php';

    $mpdf = new \Mpdf\Mpdf();
    $data   =   "<div style='
                    border-left: 5px solid #e67e22;
                    height:1000px;
                    position: absolute;
                    left: 50%;
                    margin-left: -3px;
                    top: 250;';>
                </div>";

    $data   .=   "<h1 style='font-weight:lighter'>".$adi." <b>".$soyadi."<b></h1>";
    $data   .=   "<p style='font-size:12px; margin-right:200px;'> Adres : ".$adres."</p>";
    $data   .=   "<p style='font-size:12px;'>".$il_ilce." ".$posta."</p>";
    $data   .=   "<p style='font-size:12px;'> Telefon :".$telefon."</p>";
    $data   .=   "<p style='font-size:12px;'> E-Posta :".$email."</p><hr>";
    
    
    $data   .=   "<div style='
                    margin-left:400px; 
                    margin-top:0px;'>
                        <h3>Profil</h3>
                        <h5 style='font-weight:lighter;'> ".$aciklama." </h5> 
                </div>";
    
                $data   .=   "
                <div style='margin-left:400px;'>
                <h3>Sürücü Ehliyeti</h3>
                <h6 style='font-weight:lighter;'>
                   ".$ehliyet."
                </h6> </div>";

                  
    $data   .=   "
    <div style='margin-left:400px;'>
    <h3>Cinsiyet</h3>
    <h6 style='font-weight:lighter;'>
       ".$cins."
    </h6> </div>";

    
    $data   .=   "
    <div style='margin-left:400px;'>
    <h3>Askerlik Durumu</h3>
    <h6 style='font-weight:lighter;'>
       ".$asker."
    </h6> </div>";

    
    $data   .=   "
    <div style='margin-left:400px;'>
    <h3>Medeni Durumu</h3>
    <h6 style='font-weight:lighter;'>
       ".$medeni."
    </h6> </div>";
    
    $data   .=   "
    <div style='margin-left:400px;'>
    <h3>LinkedIn</h3>
    <h6 style='font-weight:lighter;'>
       ".$linkedin."
    </h6> </div>";
    
    $data   .=   "
    <div style='margin-left:400px;'>
    <h3>İnternet Sitesi</h3>
    <h6 style='font-weight:lighter;'>
       ".$site."
    </h6> </div>";
    
                
            
    
    $data .="<div style='margin-top:-600px'>";
    $data   .=   "<div style='margin-right:400px;'>
    <h3>Eğitimler</h3>
    <h5 style='font-weight:lighter'>
        <ul>
            <li>".$eg1."</li>
            <li>".$eg2."</li>
            <li>".$eg3."</li>
            <li>".$eg4."</li>
            <li>".$eg5."</li>
        </ul>
        </h5>
        </div>
    ";
    $data   .=   "<div>
    <h3> İş Deneyimleri</h3>
    <h5 style='font-weight:lighter'>
        <ul>
            <li>".$is1."</li>
            <li>".$is2."</li>
            <li>".$is3."</li>
            <li>".$is4."</li>
            <li>".$is5."</li>
        </ul>
        </h5>
        </div>
    ";

     $data   .=   "<div>
    <h3> Referanslar</h3>
    <h4 style='font-weight:lighter'>
        <ul>
            <li>".$ref1."</li>
            <li>".$ref2."</li>
            <li>".$ref3."</li>
            <li>".$ref4."</li>
            <li>".$ref5."</li>
        </ul>
        </h4>
        </div>
    ";

    $data   .=   "<div>
    <h3> Beceriler</h3>
    <h5 style='font-weight:lighter'>
        <ul>
            <li>".$bec1."</li>
            <li>".$bec2."</li>
            <li>".$bec3."</li>
            <li>".$bec4."</li>
            <li>".$bec5."</li>
        </ul>
        </h5>
        </div>
    ";
$data .="</div>";
   



  
    
    $mpdf->WriteHTML($data);
    $mpdf->Image('profile/'.$resimAdi, 140, 15, 45, 45, '', '', true, false);
    $mpdf->Output();

}else{
    echo "<script type='text/javascript'>alert('Fotoğraf boyutu yüksek olduğu için CV oluşturulamadı!');</script>";
    header("Refresh: 0.1; url=index.php");
}






?>