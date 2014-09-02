<?php

namespace AnimeMap;

class Area
{
    protected static $_areas = array(
        'hokkaidou' => '北海道',
        'aomori'    => '青森',
        'iwate'     => '岩手',
        'miyagi'    => '宮城',
        'akita'     => '秋田',
        'yamagata'  => '山形',
        'fukushima' => '福島',
        'ibaraki'   => '茨城',
        'tochigi'   => '栃木',
        'gunma'     => '群馬',
        'saitama'   => '埼玉',
        'chiba'     => '千葉',
        'tokyo'     => '東京',
        'kanagawa'  => '神奈川',
        'niigata'   => '新潟',
        'toyama'    => '富山',
        'ishikawa'  => '石川',
        'fukui'     => '福井',
        'yamanashi' => '山梨',
        'nagano'    => '長野',
        'gifu'      => '岐阜',
        'sizuoka'   => '静岡',
        'aichi'     => '愛知',
        'mie'       => '三重',
        'shiga'     => '滋賀',
        'kyoto'     => '京都',
        'osaka'     => '大阪',
        'hyogo'     => '兵庫',
        'nara'      => '奈良',
        'wakayama'  => '和歌山',
        'tottori'   => '鳥取',
        'shimane'   => '島根',
        'okayama'   => '岡山',
        'hiroshima' => '広島',
        'yamaguchi' => '山口',
        'tokushima' => '徳島',
        'kagawa'    => '香川',
        'ehime'     => '愛媛',
        'kochi'     => '高知',
        'fukuoka'   => '福岡',
        'saga'      => '佐賀',
        'nagasaki'  => '長崎',
        'kumamoto'  => '熊本',
        'oita'      => '大分',
        'miyazaki'  => '宮崎',
        'kagoshima' => '鹿児島',
        'okinawa'   => '沖縄',
    );

    public static function getAreas()
    {
        return self::$_areas;
    }
}
