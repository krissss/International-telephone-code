<?php
$lang['en'] = ["86" => "China", "93" => "Afghanistan", "355" => "Albania", "213" => "Algeria", "376" => "Andorra", "244" => "Angola", "1268" => "Antigua and Barbuda", "54" => "Argentina", "374" => "Armenia", "297" => "Aruba I.", "61" => "Australia", "994" => "Azerbaijan", "973" => "Bahrain", "880" => "Bangladesh", "1246" => "Barbados", "375" => "Belarus", "32" => "Belgium", "501" => "Belize", "229" => "Benin", "1441" => "Bermuda Is.", "975" => "Bhutan", "591" => "Bolivia", "387" => "Bosnia And Herzegovina", "267" => "Botswana", "55" => "Brazil", "359" => "Bulgaria", "226" => "Burkina Faso", "257" => "Burundi", "237" => "Cameroon", "1" => "Canada", "238" => "Cape Verde", "1345" => "Cayman Is.", "236" => "Central Africa", "235" => "Chad", "56" => "Chile", "57" => "Colombia", "269" => "Comoro", "242" => "Congo", "682" => "Cook IS.", "506" => "Costa Rica", "385" => "Croatia", "53" => "Cuba", "357" => "Cyprus", "420" => "Czech", "45" => "Denmark", "253" => "Djibouti", "593" => "Ecuador", "20" => "Egypt", "503" => "El Salvador", "240" => "Equatorial Guinea", "291" => "Eritrea", "372" => "Estonia", "251" => "Ethiopia", "500" => "Falkland Is.", "298" => "Faroe Is.", "679" => "Fiji", "358" => "Finland", "33" => "France", "594" => "French Guiana", "689" => "French Polynesia", "241" => "Gabon", "220" => "Gambia", "995" => "Georgia", "49" => "Germany", "233" => "Ghana", "350" => "Gibraltar", "30" => "Greece", "299" => "Greenland", "590" => "Guadeloupe I.", "671" => "Guam", "502" => "Guatemala", "245" => "Guinea-Bissau", "592" => "Guyana", "509" => "Haiti", "504" => "Honduras", "852" => "Hong Kong(China)", "36" => "Hungary", "354" => "Iceland", "91" => "India", "62" => "Indonesia", "98" => "Iran", "964" => "Iraq", "353" => "Ireland", "972" => "Israel", "39" => "Italy", "225" => "Ivory Coast", "1876" => "Jamaica", "81" => "Japan", "962" => "Jordan", "855" => "Kampuchea", "7" => "Kazakhstan", "254" => "Kenya", "686" => "Kiribati", "82" => "Korea(republic of)", "965" => "Kuwait", "996" => "Kyrgyzstan", "856" => "Laos", "371" => "Latvia", "961" => "Lebanon", "266" => "Lesotho", "231" => "Liberia", "218" => "Libya", "370" => "Lithuania", "352" => "Luxembourg", "853" => "Macao(China)", "389" => "Macedonia", "261" => "Madagascar", "265" => "Malawi", "60" => "Malaysia", "960" => "Maldive", "223" => "Mali", "356" => "Malta", "670" => "Mariana Is.", "596" => "Martinique", "222" => "Mauritania", "230" => "Mauritius", "52" => "Mexico", "373" => "Moldova", "377" => "Monaco", "976" => "Mongolia", "1664" => "Montserrat I.", "212" => "Morocco", "258" => "Mozambique", "95" => "Myanmar", "264" => "Namibia", "674" => "Nauru", "977" => "Nepal", "31" => "Netherlands", "599" => "Netherlandsantilles Is.", "687" => "New Caledonia Is.", "64" => "New Zealand", "505" => "Nicaragua", "227" => "Niger", "234" => "Nigeria", "683" => "Niue I.", "47" => "Norway", "968" => "Oman", "92" => "Pakistan", "680" => "Palau", "507" => "Panama", "675" => "Papua New Guinea", "595" => "Paraguay", "51" => "Peru", "63" => "Philippines", "48" => "Poland", "351" => "Portugal", "1787" => "Puerto Rico", "974" => "Qatar", "262" => "Reunion I.", "40" => "Romania", "250" => "Rwanda", "684" => "Samoa=>Eastern", "685" => "Samoa=>Western", "378" => "San.Marino", "966" => "Saudi Arabia", "221" => "Senegal", "248" => "Seychelles", "65" => "Singapore", "421" => "Slovak", "386" => "Slovenia", "677" => "Solomon Is.", "252" => "Somali", "27" => "South Africa", "34" => "Spain", "94" => "Sri Lanka", "1758" => "St.Lucia", "1784" => "St.Vincent I.", "249" => "Sudan", "597" => "Suriname", "268" => "Swaziland", "46" => "Sweden", "963" => "Syria", "886" => "Taiwan(China)", "992" => "Tajikistan", "255" => "Tanzania", "66" => "Thailand", "971" => "The United Arab Emirates", "228" => "Togo", "676" => "Tonga", "1809" => "Trinidad and Tobago", "216" => "Tunisia", "90" => "Turkey", "993" => "Turkmenistan", "688" => "Tuvalu", "01" => "USA", "256" => "Uganda", "380" => "Ukraine", "598" => "Uruguay", "998" => "Uzbekistan", "678" => "Vanuatu", "58" => "Venezuela", "84" => "Vietnam", "967" => "Yemen", "381" => "Yugoslavia", "243" => "Zaire", "260" => "Zambia", "263" => "Zimbabwe"];

// 定义热门的code
$hotCodes = ['86', '852', '853', '886', '81', '65', '66'];

// 按照英文排序
asort($lang['en']);
// 组装获取新的数据格式
$arr = [];
$arr['#'] = [];
foreach ($lang['en'] as $code => $label) {
    if (in_array($code, $hotCodes)) {
        $arr['#'][] = [
            'label' => $label,
            'value' => $code,
        ];
    }
    $letter = strtoupper(substr($label, 0, 1));
    if (!isset($arr[$letter])) {
        $arr[$letter] = [];
    }
    $arr[$letter][] = [
        'label' => $label,
        'value' => $code,
    ];
}
file_put_contents('./dist/lang-en.json', json_encode($arr));
