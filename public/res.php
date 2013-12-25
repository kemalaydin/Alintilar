<?php
// decimealgo at gmail dot com ¶
// http://www.php.net/manual/en/function.imagettfbbox.php

function makeTextBlock($text, $fontfile, $fontsize, $width)
{   
    $words = explode(' ', $text);
    $lines = array($words[0]);
    $currentLine = 0;
    for($i = 1; $i < count($words); $i++)
    {
        $lineSize = imagettfbbox($fontsize, 0, $fontfile, $lines[$currentLine] . ' ' . $words[$i]);
        if($lineSize[2] - $lineSize[0] < $width)
        {
            $lines[$currentLine] .= ' ' . $words[$i];
        }
        else
        {
            $currentLine++;
            $lines[$currentLine] = $words[$i];
        }
    }
   
    return implode("\n", $lines);
}


//435

$yazi = "Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.";
$font = "/srv/http/test/tagetts.ttf";
$fontsize = 14;

$sonuc = makeTextBlock($yazi, $font, $fontsize, 435 );

echo "adsf";

print_r($sonuc);



    