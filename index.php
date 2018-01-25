$url = 'https://www.facebook.com/deepturkishweb/videos/719721308231681/';
$url='https://keepvid.com/?url='.$url.'';

$veri = file_get_contents($url);
 $veri = str_replace('<a href="javascript:;"', '', $veri);
preg_match('@<td><a href="(.*?)"@si',$veri,$video);
preg_match('@<p>(.*?)</p>@si',$veri,$baslik);
if ( $baslik[1] == 'Please check the URL and try it again' ){
$baslik[1] = 'error';

}
$video = $video[1];
$baslik = $baslik[1];
