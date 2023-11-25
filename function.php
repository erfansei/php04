<?php
function renderProducts($nameP,$desc,$st,$cl)
{
    $html = '<div class="bg-slate-200 border-rose-500">';
    $html .= '<div class="text-center font-sans">';
    $html .= "<h1 class='font-bold'>{$nameP}</h1>";
    $html .= '</div>';
    $html .= '<div class="text-justify">';
    $html .= "<p>توضیحات : {$desc}</p>";
    $html .= '</div>';
    $html .= '<div class="text-center">';
    $html .= "<br><span>موجودی :{$st}</span>";
    $html .= '</div>';
    $html .= '<div class="text-center">';
    $html .= "<p>رنگ ها :{$cl}</p>";
    $html .= '</div>';
    $html .= '</div>';

    return $html;
}
?>