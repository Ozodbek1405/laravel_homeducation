<?php


function getContentText($page, $key)
{
    $text = app()->getLocale() == 'ru' ? 'text_ru' : 'text_uz';
    return \App\Models\Content::query()->where('page', $page)->where('key', $key)->first()->$text;
}

function getContentImage($page, $key): string
{
    $path = \App\Models\Content::query()->where('page', $page)->where('key', $key)->first()->image;
    $path = str_replace('\\', '/', $path);
    return asset('storage/' . $path);
}
