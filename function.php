<?php
function renderProducts($nameP,$desc,$st,$cl)
{
    $html = '<div class="bg-slate-200">';
    $html .= '<div class="text-center font-sans">';
    $html .= "<h1 class='font-bold'>{$nameP}</h1>";
    $html .= '</div>';
    $html .= '<div class="text-justify">';
    $html .= "<p>توضیحات : {$desc}</p>";
    $html .= '</div>';
    $html .= '<div class="">';
    $html .= "<span>{$st}</span>";
    $html .= '</div>';
    $html .= '<div class="flex">';
    $html .= "<span>{$cl}</span>";
    $html .= '</div>';
    $html .= '</div>';

    return $html;
}
?>