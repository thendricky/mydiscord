<?php

function puxar($separa, $inicia, $fim, $contador){
    $nada = explode($inicia, $separa);
    $nada = explode($fim, $nada[$contador]);
    return $nada[0];
  }
// --------------------------------------------------- //
$spotify_token = "BQCeGXUQ53gzZCgiW-srcHcKSVBHQiE8-9D_UK3JycqGGZcolVEfuxCkom1BeuyZsgFAL-JCOxP3huOCQ4Fju_4NqLKML_IF8gZrQvxlzHXTjSaGqu03vi3naHtcGE7U5vZLqC_WqaHRzMHtIfwTFOLFJLgnOyIOnqQVDoQIFxRG7Cd7MOoMAdomIBUUMme5WEDcIZFtrSJ_a0mR6VoU9pFCj5Ei2-M33ecvTqQJatiPU41LQW0RQh8aETgnsCgvFue8sOengdnr3dsYiOHtFRm_81SGviKObDYTRtLuuPZQ33l8IdyFVpzxEIwBgtV7QvMzGOFZ2Dv_mINlU_PjCQcTFsDm";
// --------------------------------------------------- //
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://open.spotify.com/user/31b2ues5ozn3qk7zxmlq44w5lwme');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'authority: open.spotify.com',
    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
    'Cookie: sp_m=br-pt; sp_t=beac12bc-d49f-490d-a506-f0f670a2e745; _gcl_au=1.1.113053428.1689954365; sp_adid=770e3631-4735-4c78-b38e-55d67a34e55f; _scid=6606c81a-6d1d-4553-8067-9eed621d6632; _cs_c=0; sp_gaid=0088fcb63f00b98fdef89eb2347237d185af617d7129d61e6ba1cb; _tt_enable_cookie=1; _ttp=LhtiKg20bUR1WVXKH05bgn1ewMV; _rdt_uuid=1690253755199.ffd3cf01-ef9c-470d-a7ce-d90a8caf2c0b; __kdtv=t%3D1690254201008%3Bi%3D3ebc6bf504427ebf264f819e6e7894e3f8421960; _kdt=%7B%22t%22%3A1690254201008%2C%22i%22%3A%223ebc6bf504427ebf264f819e6e7894e3f8421960%22%7D; OptanonAlertBoxClosed=2023-08-03T00:07:35.169Z; sp_pfhp=2c2ccb58-8a92-4713-a1c0-8b43b3090b49; sp_last_utm=%7B%22utm_campaign%22%3A%22your_account%22%2C%22utm_medium%22%3A%22menu%22%2C%22utm_source%22%3A%22spotify%22%7D; _ga_S0T2DJJFZM=GS1.1.1691021308.1.1.1691022287.0.0.0; _scid_r=6606c81a-6d1d-4553-8067-9eed621d6632; _cs_id=d3e7dac1-a410-ad07-a357-982f64619c94.1689954367.4.1693191390.1693191390.1.1724118367032; _ga_S35RN5WNT2=GS1.1.1693191389.4.0.1693191391.0.0.0; sp_landing=https%3A%2F%2Fwww.spotify.com%2Fbr-pt%2F; _gid=GA1.2.53946500.1693343413; sp_dc=AQBUgcuCdl6Vn_z6tIhC7sPeMnNp-cPae89p1lZhgjY91lw7SR_yPo0GSV5Z2CjpYR-zE50FX1R7MriscLYr-uX5EonblElnzeRk9QrKZ9mVWm2toV3o4ym6VVrcbc8DGzJAb5sB6c6ismgCprQFCJLyjTdSorCV; sp_key=359f6dbe-0cda-4961-8fb9-6eaa23998eb2; _ga_ZWRF3NLZJZ=GS1.1.1693346629.3.1.1693350556.0.0.0; _ga=GA1.2.1198092544.1689954366; OptanonConsent=isIABGlobal=false&datestamp=Tue+Aug+29+2023+20%3A09%3A32+GMT-0300+(Hor%C3%A1rio+Padr%C3%A3o+de+Bras%C3%ADlia)&version=6.26.0&hosts=&landingPath=NotLandingPage&groups=s00%3A1%2Cf00%3A1%2Cm00%3A1%2Ct00%3A1%2Ci00%3A1%2Cf11%3A1&AwaitingReconsent=false&geolocation=BR%3BMG; _gat_UA-5784146-31=1; _ga_ZWG1NSHWD8=GS1.1.1693350571.8.1.1693350689.0.0.0',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36 Edg/116.0.1938.62',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_POST, false);
$data1 = curl_exec($ch);
// --------------------------------------------------- //
$tokenSpotify = puxar($data1, 'accessToken":"', '"', 1);
// --------------------------------------------------- //
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.spotify.com/v1/me/player/currently-playing');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: Bearer ' . $tokenSpotify
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_POST, false);
$data2 = curl_exec($ch);
// --------------------------------------------------- //
$data2_resp = json_decode($data2, true);

$nome = $data2_resp['item']['name'] ?? 'Desconhecido';
$autor = $data2_resp['item']['artists'][0]['name'] ?? 'Desconhecido';
$img = $data2_resp['item']['album']['images'][0]['url'] ?? '';
$album = $data2_resp['item']['album']['name'] ?? 'Desconhecido';

if($album == $nome){
    $album = "";
}else{
    $album = "do álbum $album";
}
// --------------------------------------------------- //
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://discord.com/api/v10/users/@me');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: MTExODMzMDUzMzQyOTExNjk0OA.Gl29Mz.5JSOVnlkuZ1y6QS1IaE7IuzSFjpukA1xHMNZJs',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_POST, false);
$data3 = curl_exec($ch);
// --------------------------------------------------- //
$userId = puxar($data3, 'id":"', '"', 1);
$username = puxar($data3, 'username":"', '"', 1);
$globalusername = puxar($data3, 'global_name":"', '"', 1);
$avatar = puxar($data3, 'avatar":"', '"', 1);
$bio = puxar($data3, 'bio":"', '"', 1);
$avatarUrl = "https://cdn.discordapp.com/avatars/$userId/$avatar.jpg";
// --------------------------------------------------- //
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $globalusername ?></title>
    <link rel="shortcut icon" href="<?php echo $avatarUrl ?>" type="image/x-icon">
    <link rel="stylesheet" href="indexx.css">
</head>
<body>
    <div class="profile-container">
        <div class="header">
            <div class="avatar">
                <img src="<?php echo $avatarUrl ?>">
            </div>
            <div class="info">
                <h1><?php echo $username ?></h1>
                <div class="badges">
                    <img src="https://cdn.discordapp.com/badge-icons/3aa41de486fa12454c3761e8e223442e.png">
                    <img src="https://cdn.discordapp.com/badge-icons/6bdc42827a38498929a4920da12695d9.png">
                    <img src="https://cdn.discordapp.com/badge-icons/6de6d34650760ba5551a79732e98ed60.png">
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="left-panel">
                <div class="section">
                    <h2>Sobre mim</h2>
                    <p><?php echo $bio ?></p>
                </div>
                <div class="section">
                    <h2>Membro discord desde</h2>
                    <p>13 de jun. de 2023</p>
                </div>
            </div>
            <div class="right-panel">
                <div class="section">
                    <h2>Contas conectadas</h2>
                    <a href="https://www.instagram.com/heendriicky/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/2048px-Instagram_icon.png"></a>
                    <a href="https://github.com/thendricky/" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/25/25231.png"></a>
                </div>
                <div class="section">
                    <h2>Nota</h2>
                    <p>tô perdido dnv</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>