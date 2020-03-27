<?
$rewrite['/'] = 'Новый тайтл';
$rewrite['/about/'] = 'Новый тайтл';

ob_start("titler");

function titler($content) {
    global $rewrite;
    if (isset($rewrite[$_SERVER['REQUEST_URI']]))
        return preg_replace("#<title>.*?</title>#",'<title>' . $rewrite[$_SERVER['REQUEST_URI']] . '</title>');
    else return $content;
}