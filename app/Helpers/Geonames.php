<?php

namespace app\Helpers;


trait Geonames
{

    public function getCodesByPhone(): \Illuminate\Support\Collection
    {
        $geonames = file(GEONAMES_LINK);
        $codes = [];

        foreach ($geonames as $geoname){
            if( strpos(trim($geoname), '#') === 0  )
                continue;

            $temp = explode('	',$geoname);

            $codes [] = [
                'ISO' => $temp[8],
                'phoneCode' => preg_replace('/[^0-9]/', '', $temp[12])
            ];

        }

        return collect($codes)->sortByDesc('phoneCode');
    }

}
