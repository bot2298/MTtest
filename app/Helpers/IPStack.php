<?php

namespace app\Helpers;

use Philo\Blade\Blade;

trait IPStack
{

    public function getInfoByIP($ip = ''){

        $ip = trim($ip);
        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, "http://api.ipstack.com/$ip?access_key=".IPSTACK_KEY);

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);
        // close curl resource to free up system resources
        curl_close($ch);

        $result = json_decode($output,JSON_OBJECT_AS_ARRAY);

        if ($result['success'] === false){
            print_r( 'IPStack: '.$result['error']['info'] ?? 'Error');
            die();
        }

        return $result;
    }

    public function getInfoByIpTemp($ip){
        $ip = trim($ip);

        $jayParsedAry = collect([
            [
                "ip" => "87.190.148.217",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "DE",
                "country_name" => "Germany",
                "region_code" => "HE",
                "region_name" => "Hesse",
                "city" => "Frankfurt am Main",
                "zip" => "60311",
                "latitude" => 50.110900878906,
                "longitude" => 8.6821002960205,
                "location" => [
                    "geoname_id" => 2925533,
                    "capital" => "Berlin",
                    "languages" => [
                        [
                            "code" => "de",
                            "name" => "German",
                            "native" => "Deutsch"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/de.svg",
                    "country_flag_emoji" => "🇩🇪",
                    "country_flag_emoji_unicode" => "U+1F1E9 U+1F1EA",
                    "calling_code" => "49",
                    "is_eu" => true
                ]
            ],
            [
                "ip" => "41.77.56.40",
                "type" => "ipv4",
                "continent_code" => "AF",
                "continent_name" => "Africa",
                "country_code" => "ZA",
                "country_name" => "South Africa",
                "region_code" => "GT",
                "region_name" => "Gauteng",
                "city" => "Johannesburg",
                "zip" => "2000",
                "latitude" => -26.199169158936,
                "longitude" => 28.056390762329,
                "location" => [
                    "geoname_id" => 993800,
                    "capital" => "Pretoria",
                    "languages" => [
                        [
                            "code" => "af",
                            "name" => "Afrikaans",
                            "native" => "Afrikaans"
                        ],
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ],
                        [
                            "code" => "nr",
                            "name" => "South Ndebele",
                            "native" => "isiNdebele"
                        ],
                        [
                            "code" => "st",
                            "name" => "Southern Sotho",
                            "native" => "Sesotho"
                        ],
                        [
                            "code" => "ss",
                            "name" => "Swati",
                            "native" => "SiSwati"
                        ],
                        [
                            "code" => "tn",
                            "name" => "Tswana",
                            "native" => "Setswana"
                        ],
                        [
                            "code" => "ts",
                            "name" => "Tsonga",
                            "native" => "Xitsonga"
                        ],
                        [
                            "code" => "ve",
                            "name" => "Venda",
                            "native" => "Tshivenḓa"
                        ],
                        [
                            "code" => "xh",
                            "name" => "Xhosa",
                            "native" => "isiXhosa"
                        ],
                        [
                            "code" => "zu",
                            "name" => "Zulu",
                            "native" => "isiZulu"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/za.svg",
                    "country_flag_emoji" => "🇿🇦",
                    "country_flag_emoji_unicode" => "U+1F1FF U+1F1E6",
                    "calling_code" => "27",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "218.99.136.57",
                "type" => "ipv4",
                "continent_code" => "AS",
                "continent_name" => "Asia",
                "country_code" => "CN",
                "country_name" => "China",
                "region_code" => "BJ",
                "region_name" => "Beijing",
                "city" => "Beijing",
                "zip" => "100031",
                "latitude" => 39.911758422852,
                "longitude" => 116.37922668457,
                "location" => [
                    "geoname_id" => 1816670,
                    "capital" => "Beijing",
                    "languages" => [
                        [
                            "code" => "zh",
                            "name" => "Chinese",
                            "native" => "中文"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/cn.svg",
                    "country_flag_emoji" => "🇨🇳",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1F3",
                    "calling_code" => "86",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "87.190.148.217",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "DE",
                "country_name" => "Germany",
                "region_code" => "HE",
                "region_name" => "Hesse",
                "city" => "Frankfurt am Main",
                "zip" => "60311",
                "latitude" => 50.110900878906,
                "longitude" => 8.6821002960205,
                "location" => [
                    "geoname_id" => 2925533,
                    "capital" => "Berlin",
                    "languages" => [
                        [
                            "code" => "de",
                            "name" => "German",
                            "native" => "Deutsch"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/de.svg",
                    "country_flag_emoji" => "🇩🇪",
                    "country_flag_emoji_unicode" => "U+1F1E9 U+1F1EA",
                    "calling_code" => "49",
                    "is_eu" => true
                ]
            ],
            [
                "ip" => "41.77.56.40",
                "type" => "ipv4",
                "continent_code" => "AF",
                "continent_name" => "Africa",
                "country_code" => "ZA",
                "country_name" => "South Africa",
                "region_code" => "GT",
                "region_name" => "Gauteng",
                "city" => "Johannesburg",
                "zip" => "2000",
                "latitude" => -26.199169158936,
                "longitude" => 28.056390762329,
                "location" => [
                    "geoname_id" => 993800,
                    "capital" => "Pretoria",
                    "languages" => [
                        [
                            "code" => "af",
                            "name" => "Afrikaans",
                            "native" => "Afrikaans"
                        ],
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ],
                        [
                            "code" => "nr",
                            "name" => "South Ndebele",
                            "native" => "isiNdebele"
                        ],
                        [
                            "code" => "st",
                            "name" => "Southern Sotho",
                            "native" => "Sesotho"
                        ],
                        [
                            "code" => "ss",
                            "name" => "Swati",
                            "native" => "SiSwati"
                        ],
                        [
                            "code" => "tn",
                            "name" => "Tswana",
                            "native" => "Setswana"
                        ],
                        [
                            "code" => "ts",
                            "name" => "Tsonga",
                            "native" => "Xitsonga"
                        ],
                        [
                            "code" => "ve",
                            "name" => "Venda",
                            "native" => "Tshivenḓa"
                        ],
                        [
                            "code" => "xh",
                            "name" => "Xhosa",
                            "native" => "isiXhosa"
                        ],
                        [
                            "code" => "zu",
                            "name" => "Zulu",
                            "native" => "isiZulu"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/za.svg",
                    "country_flag_emoji" => "🇿🇦",
                    "country_flag_emoji_unicode" => "U+1F1FF U+1F1E6",
                    "calling_code" => "27",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "112.125.168.89",
                "type" => "ipv4",
                "continent_code" => "AS",
                "continent_name" => "Asia",
                "country_code" => "CN",
                "country_name" => "China",
                "region_code" => "ZJ",
                "region_name" => "Zhejiang",
                "city" => "Hangzhou",
                "zip" => "310000",
                "latitude" => 30.235559463501,
                "longitude" => 120.15888977051,
                "location" => [
                    "geoname_id" => 1808926,
                    "capital" => "Beijing",
                    "languages" => [
                        [
                            "code" => "zh",
                            "name" => "Chinese",
                            "native" => "中文"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/cn.svg",
                    "country_flag_emoji" => "🇨🇳",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1F3",
                    "calling_code" => "86",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "20.12.165.244",
                "type" => "ipv4",
                "continent_code" => "NA",
                "continent_name" => "North America",
                "country_code" => "US",
                "country_name" => "United States",
                "region_code" => "WA",
                "region_name" => "Washington",
                "city" => "Redmond",
                "zip" => "98052",
                "latitude" => 47.680500030518,
                "longitude" => -122.12094116211,
                "location" => [
                    "geoname_id" => 5808079,
                    "capital" => "Washington D.C.",
                    "languages" => [
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/us.svg",
                    "country_flag_emoji" => "🇺🇸",
                    "country_flag_emoji_unicode" => "U+1F1FA U+1F1F8",
                    "calling_code" => "1",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "145.81.57.99",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "NL",
                "country_name" => "Netherlands",
                "region_code" => "NH",
                "region_name" => "North Holland",
                "city" => "Aalsmeer",
                "zip" => "1119",
                "latitude" => 52.284309387207,
                "longitude" => 4.7576098442078,
                "location" => [
                    "geoname_id" => 2760134,
                    "capital" => "Amsterdam",
                    "languages" => [
                        [
                            "code" => "nl",
                            "name" => "Dutch",
                            "native" => "Nederlands"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/nl.svg",
                    "country_flag_emoji" => "🇳🇱",
                    "country_flag_emoji_unicode" => "U+1F1F3 U+1F1F1",
                    "calling_code" => "31",
                    "is_eu" => true
                ]
            ],
            [
                "ip" => "41.77.56.40",
                "type" => "ipv4",
                "continent_code" => "AF",
                "continent_name" => "Africa",
                "country_code" => "ZA",
                "country_name" => "South Africa",
                "region_code" => "GT",
                "region_name" => "Gauteng",
                "city" => "Johannesburg",
                "zip" => "2000",
                "latitude" => -26.199169158936,
                "longitude" => 28.056390762329,
                "location" => [
                    "geoname_id" => 993800,
                    "capital" => "Pretoria",
                    "languages" => [
                        [
                            "code" => "af",
                            "name" => "Afrikaans",
                            "native" => "Afrikaans"
                        ],
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ],
                        [
                            "code" => "nr",
                            "name" => "South Ndebele",
                            "native" => "isiNdebele"
                        ],
                        [
                            "code" => "st",
                            "name" => "Southern Sotho",
                            "native" => "Sesotho"
                        ],
                        [
                            "code" => "ss",
                            "name" => "Swati",
                            "native" => "SiSwati"
                        ],
                        [
                            "code" => "tn",
                            "name" => "Tswana",
                            "native" => "Setswana"
                        ],
                        [
                            "code" => "ts",
                            "name" => "Tsonga",
                            "native" => "Xitsonga"
                        ],
                        [
                            "code" => "ve",
                            "name" => "Venda",
                            "native" => "Tshivenḓa"
                        ],
                        [
                            "code" => "xh",
                            "name" => "Xhosa",
                            "native" => "isiXhosa"
                        ],
                        [
                            "code" => "zu",
                            "name" => "Zulu",
                            "native" => "isiZulu"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/za.svg",
                    "country_flag_emoji" => "🇿🇦",
                    "country_flag_emoji_unicode" => "U+1F1FF U+1F1E6",
                    "calling_code" => "27",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "116.52.75.78",
                "type" => "ipv4",
                "continent_code" => "AS",
                "continent_name" => "Asia",
                "country_code" => "CN",
                "country_name" => "China",
                "region_code" => "YN",
                "region_name" => "Yunnan",
                "city" => "Kunming",
                "zip" => "650000",
                "latitude" => 25.036609649658,
                "longitude" => 102.70644378662,
                "location" => [
                    "geoname_id" => 1804651,
                    "capital" => "Beijing",
                    "languages" => [
                        [
                            "code" => "zh",
                            "name" => "Chinese",
                            "native" => "中文"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/cn.svg",
                    "country_flag_emoji" => "🇨🇳",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1F3",
                    "calling_code" => "86",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "116.52.75.78",
                "type" => "ipv4",
                "continent_code" => "AS",
                "continent_name" => "Asia",
                "country_code" => "CN",
                "country_name" => "China",
                "region_code" => "YN",
                "region_name" => "Yunnan",
                "city" => "Kunming",
                "zip" => "650000",
                "latitude" => 25.036609649658,
                "longitude" => 102.70644378662,
                "location" => [
                    "geoname_id" => 1804651,
                    "capital" => "Beijing",
                    "languages" => [
                        [
                            "code" => "zh",
                            "name" => "Chinese",
                            "native" => "中文"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/cn.svg",
                    "country_flag_emoji" => "🇨🇳",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1F3",
                    "calling_code" => "86",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "145.81.57.99",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "NL",
                "country_name" => "Netherlands",
                "region_code" => "NH",
                "region_name" => "North Holland",
                "city" => "Aalsmeer",
                "zip" => "1119",
                "latitude" => 52.284309387207,
                "longitude" => 4.7576098442078,
                "location" => [
                    "geoname_id" => 2760134,
                    "capital" => "Amsterdam",
                    "languages" => [
                        [
                            "code" => "nl",
                            "name" => "Dutch",
                            "native" => "Nederlands"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/nl.svg",
                    "country_flag_emoji" => "🇳🇱",
                    "country_flag_emoji_unicode" => "U+1F1F3 U+1F1F1",
                    "calling_code" => "31",
                    "is_eu" => true
                ]
            ],
            [
                "ip" => "145.81.57.99",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "NL",
                "country_name" => "Netherlands",
                "region_code" => "NH",
                "region_name" => "North Holland",
                "city" => "Aalsmeer",
                "zip" => "1119",
                "latitude" => 52.284309387207,
                "longitude" => 4.7576098442078,
                "location" => [
                    "geoname_id" => 2760134,
                    "capital" => "Amsterdam",
                    "languages" => [
                        [
                            "code" => "nl",
                            "name" => "Dutch",
                            "native" => "Nederlands"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/nl.svg",
                    "country_flag_emoji" => "🇳🇱",
                    "country_flag_emoji_unicode" => "U+1F1F3 U+1F1F1",
                    "calling_code" => "31",
                    "is_eu" => true
                ]
            ],
            [
                "ip" => "145.81.57.99",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "NL",
                "country_name" => "Netherlands",
                "region_code" => "NH",
                "region_name" => "North Holland",
                "city" => "Aalsmeer",
                "zip" => "1119",
                "latitude" => 52.284309387207,
                "longitude" => 4.7576098442078,
                "location" => [
                    "geoname_id" => 2760134,
                    "capital" => "Amsterdam",
                    "languages" => [
                        [
                            "code" => "nl",
                            "name" => "Dutch",
                            "native" => "Nederlands"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/nl.svg",
                    "country_flag_emoji" => "🇳🇱",
                    "country_flag_emoji_unicode" => "U+1F1F3 U+1F1F1",
                    "calling_code" => "31",
                    "is_eu" => true
                ]
            ],
            [
                "ip" => "145.81.57.99",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "NL",
                "country_name" => "Netherlands",
                "region_code" => "NH",
                "region_name" => "North Holland",
                "city" => "Aalsmeer",
                "zip" => "1119",
                "latitude" => 52.284309387207,
                "longitude" => 4.7576098442078,
                "location" => [
                    "geoname_id" => 2760134,
                    "capital" => "Amsterdam",
                    "languages" => [
                        [
                            "code" => "nl",
                            "name" => "Dutch",
                            "native" => "Nederlands"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/nl.svg",
                    "country_flag_emoji" => "🇳🇱",
                    "country_flag_emoji_unicode" => "U+1F1F3 U+1F1F1",
                    "calling_code" => "31",
                    "is_eu" => true
                ]
            ],
            [
                "ip" => "216.165.48.137",
                "type" => "ipv4",
                "continent_code" => "NA",
                "continent_name" => "North America",
                "country_code" => "US",
                "country_name" => "United States",
                "region_code" => "NY",
                "region_name" => "New York",
                "city" => "Manhattan",
                "zip" => "10003",
                "latitude" => 40.731391906738,
                "longitude" => -73.988403320312,
                "location" => [
                    "geoname_id" => 5125771,
                    "capital" => "Washington D.C.",
                    "languages" => [
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/us.svg",
                    "country_flag_emoji" => "🇺🇸",
                    "country_flag_emoji_unicode" => "U+1F1FA U+1F1F8",
                    "calling_code" => "1",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "218.99.136.57",
                "type" => "ipv4",
                "continent_code" => "AS",
                "continent_name" => "Asia",
                "country_code" => "CN",
                "country_name" => "China",
                "region_code" => "BJ",
                "region_name" => "Beijing",
                "city" => "Beijing",
                "zip" => "100031",
                "latitude" => 39.911758422852,
                "longitude" => 116.37922668457,
                "location" => [
                    "geoname_id" => 1816670,
                    "capital" => "Beijing",
                    "languages" => [
                        [
                            "code" => "zh",
                            "name" => "Chinese",
                            "native" => "中文"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/cn.svg",
                    "country_flag_emoji" => "🇨🇳",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1F3",
                    "calling_code" => "86",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "37.35.105.218",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "CH",
                "country_name" => "Switzerland",
                "region_code" => "VD",
                "region_name" => "Vaud",
                "city" => "Lausanne",
                "zip" => "1000",
                "latitude" => 46.53950881958,
                "longitude" => 6.6461801528931,
                "location" => [
                    "geoname_id" => 2659994,
                    "capital" => "Bern",
                    "languages" => [
                        [
                            "code" => "de",
                            "name" => "German",
                            "native" => "Deutsch"
                        ],
                        [
                            "code" => "fr",
                            "name" => "French",
                            "native" => "Français"
                        ],
                        [
                            "code" => "it",
                            "name" => "Italian",
                            "native" => "Italiano"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/ch.svg",
                    "country_flag_emoji" => "🇨🇭",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1ED",
                    "calling_code" => "41",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "87.190.148.217",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "DE",
                "country_name" => "Germany",
                "region_code" => "HE",
                "region_name" => "Hesse",
                "city" => "Frankfurt am Main",
                "zip" => "60311",
                "latitude" => 50.110900878906,
                "longitude" => 8.6821002960205,
                "location" => [
                    "geoname_id" => 2925533,
                    "capital" => "Berlin",
                    "languages" => [
                        [
                            "code" => "de",
                            "name" => "German",
                            "native" => "Deutsch"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/de.svg",
                    "country_flag_emoji" => "🇩🇪",
                    "country_flag_emoji_unicode" => "U+1F1E9 U+1F1EA",
                    "calling_code" => "49",
                    "is_eu" => true
                ]
            ],
            [
                "ip" => "41.77.56.40",
                "type" => "ipv4",
                "continent_code" => "AF",
                "continent_name" => "Africa",
                "country_code" => "ZA",
                "country_name" => "South Africa",
                "region_code" => "GT",
                "region_name" => "Gauteng",
                "city" => "Johannesburg",
                "zip" => "2000",
                "latitude" => -26.199169158936,
                "longitude" => 28.056390762329,
                "location" => [
                    "geoname_id" => 993800,
                    "capital" => "Pretoria",
                    "languages" => [
                        [
                            "code" => "af",
                            "name" => "Afrikaans",
                            "native" => "Afrikaans"
                        ],
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ],
                        [
                            "code" => "nr",
                            "name" => "South Ndebele",
                            "native" => "isiNdebele"
                        ],
                        [
                            "code" => "st",
                            "name" => "Southern Sotho",
                            "native" => "Sesotho"
                        ],
                        [
                            "code" => "ss",
                            "name" => "Swati",
                            "native" => "SiSwati"
                        ],
                        [
                            "code" => "tn",
                            "name" => "Tswana",
                            "native" => "Setswana"
                        ],
                        [
                            "code" => "ts",
                            "name" => "Tsonga",
                            "native" => "Xitsonga"
                        ],
                        [
                            "code" => "ve",
                            "name" => "Venda",
                            "native" => "Tshivenḓa"
                        ],
                        [
                            "code" => "xh",
                            "name" => "Xhosa",
                            "native" => "isiXhosa"
                        ],
                        [
                            "code" => "zu",
                            "name" => "Zulu",
                            "native" => "isiZulu"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/za.svg",
                    "country_flag_emoji" => "🇿🇦",
                    "country_flag_emoji_unicode" => "U+1F1FF U+1F1E6",
                    "calling_code" => "27",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "63.81.174.152",
                "type" => "ipv4",
                "continent_code" => "NA",
                "continent_name" => "North America",
                "country_code" => "US",
                "country_name" => "United States",
                "region_code" => "CA",
                "region_name" => "California",
                "city" => "Los Angeles",
                "zip" => "90013",
                "latitude" => 34.045639038086,
                "longitude" => -118.24163818359,
                "location" => [
                    "geoname_id" => 5368361,
                    "capital" => "Washington D.C.",
                    "languages" => [
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/us.svg",
                    "country_flag_emoji" => "🇺🇸",
                    "country_flag_emoji_unicode" => "U+1F1FA U+1F1F8",
                    "calling_code" => "1",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "91.112.216.215",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "AT",
                "country_name" => "Austria",
                "region_code" => "9",
                "region_name" => "Vienna",
                "city" => "Vienna",
                "zip" => "1010",
                "latitude" => 48.208881378174,
                "longitude" => 16.369739532471,
                "location" => [
                    "geoname_id" => 2761369,
                    "capital" => "Vienna",
                    "languages" => [
                        [
                            "code" => "de",
                            "name" => "German",
                            "native" => "Deutsch"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/at.svg",
                    "country_flag_emoji" => "🇦🇹",
                    "country_flag_emoji_unicode" => "U+1F1E6 U+1F1F9",
                    "calling_code" => "43",
                    "is_eu" => true
                ]
            ],
            [
                "ip" => "91.112.216.215",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "AT",
                "country_name" => "Austria",
                "region_code" => "9",
                "region_name" => "Vienna",
                "city" => "Vienna",
                "zip" => "1010",
                "latitude" => 48.208881378174,
                "longitude" => 16.369739532471,
                "location" => [
                    "geoname_id" => 2761369,
                    "capital" => "Vienna",
                    "languages" => [
                        [
                            "code" => "de",
                            "name" => "German",
                            "native" => "Deutsch"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/at.svg",
                    "country_flag_emoji" => "🇦🇹",
                    "country_flag_emoji_unicode" => "U+1F1E6 U+1F1F9",
                    "calling_code" => "43",
                    "is_eu" => true
                ]
            ],
            [
                "ip" => "145.81.57.99",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "NL",
                "country_name" => "Netherlands",
                "region_code" => "NH",
                "region_name" => "North Holland",
                "city" => "Aalsmeer",
                "zip" => "1119",
                "latitude" => 52.284309387207,
                "longitude" => 4.7576098442078,
                "location" => [
                    "geoname_id" => 2760134,
                    "capital" => "Amsterdam",
                    "languages" => [
                        [
                            "code" => "nl",
                            "name" => "Dutch",
                            "native" => "Nederlands"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/nl.svg",
                    "country_flag_emoji" => "🇳🇱",
                    "country_flag_emoji_unicode" => "U+1F1F3 U+1F1F1",
                    "calling_code" => "31",
                    "is_eu" => true
                ]
            ],
            [
                "ip" => "145.81.57.99",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "NL",
                "country_name" => "Netherlands",
                "region_code" => "NH",
                "region_name" => "North Holland",
                "city" => "Aalsmeer",
                "zip" => "1119",
                "latitude" => 52.284309387207,
                "longitude" => 4.7576098442078,
                "location" => [
                    "geoname_id" => 2760134,
                    "capital" => "Amsterdam",
                    "languages" => [
                        [
                            "code" => "nl",
                            "name" => "Dutch",
                            "native" => "Nederlands"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/nl.svg",
                    "country_flag_emoji" => "🇳🇱",
                    "country_flag_emoji_unicode" => "U+1F1F3 U+1F1F1",
                    "calling_code" => "31",
                    "is_eu" => true
                ]
            ],
            [
                "ip" => "20.12.165.244",
                "type" => "ipv4",
                "continent_code" => "NA",
                "continent_name" => "North America",
                "country_code" => "US",
                "country_name" => "United States",
                "region_code" => "WA",
                "region_name" => "Washington",
                "city" => "Redmond",
                "zip" => "98052",
                "latitude" => 47.680500030518,
                "longitude" => -122.12094116211,
                "location" => [
                    "geoname_id" => 5808079,
                    "capital" => "Washington D.C.",
                    "languages" => [
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/us.svg",
                    "country_flag_emoji" => "🇺🇸",
                    "country_flag_emoji_unicode" => "U+1F1FA U+1F1F8",
                    "calling_code" => "1",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "20.12.165.244",
                "type" => "ipv4",
                "continent_code" => "NA",
                "continent_name" => "North America",
                "country_code" => "US",
                "country_name" => "United States",
                "region_code" => "WA",
                "region_name" => "Washington",
                "city" => "Redmond",
                "zip" => "98052",
                "latitude" => 47.680500030518,
                "longitude" => -122.12094116211,
                "location" => [
                    "geoname_id" => 5808079,
                    "capital" => "Washington D.C.",
                    "languages" => [
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/us.svg",
                    "country_flag_emoji" => "🇺🇸",
                    "country_flag_emoji_unicode" => "U+1F1FA U+1F1F8",
                    "calling_code" => "1",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "20.12.165.244",
                "type" => "ipv4",
                "continent_code" => "NA",
                "continent_name" => "North America",
                "country_code" => "US",
                "country_name" => "United States",
                "region_code" => "WA",
                "region_name" => "Washington",
                "city" => "Redmond",
                "zip" => "98052",
                "latitude" => 47.680500030518,
                "longitude" => -122.12094116211,
                "location" => [
                    "geoname_id" => 5808079,
                    "capital" => "Washington D.C.",
                    "languages" => [
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/us.svg",
                    "country_flag_emoji" => "🇺🇸",
                    "country_flag_emoji_unicode" => "U+1F1FA U+1F1F8",
                    "calling_code" => "1",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "41.77.56.40",
                "type" => "ipv4",
                "continent_code" => "AF",
                "continent_name" => "Africa",
                "country_code" => "ZA",
                "country_name" => "South Africa",
                "region_code" => "GT",
                "region_name" => "Gauteng",
                "city" => "Johannesburg",
                "zip" => "2000",
                "latitude" => -26.199169158936,
                "longitude" => 28.056390762329,
                "location" => [
                    "geoname_id" => 993800,
                    "capital" => "Pretoria",
                    "languages" => [
                        [
                            "code" => "af",
                            "name" => "Afrikaans",
                            "native" => "Afrikaans"
                        ],
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ],
                        [
                            "code" => "nr",
                            "name" => "South Ndebele",
                            "native" => "isiNdebele"
                        ],
                        [
                            "code" => "st",
                            "name" => "Southern Sotho",
                            "native" => "Sesotho"
                        ],
                        [
                            "code" => "ss",
                            "name" => "Swati",
                            "native" => "SiSwati"
                        ],
                        [
                            "code" => "tn",
                            "name" => "Tswana",
                            "native" => "Setswana"
                        ],
                        [
                            "code" => "ts",
                            "name" => "Tsonga",
                            "native" => "Xitsonga"
                        ],
                        [
                            "code" => "ve",
                            "name" => "Venda",
                            "native" => "Tshivenḓa"
                        ],
                        [
                            "code" => "xh",
                            "name" => "Xhosa",
                            "native" => "isiXhosa"
                        ],
                        [
                            "code" => "zu",
                            "name" => "Zulu",
                            "native" => "isiZulu"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/za.svg",
                    "country_flag_emoji" => "🇿🇦",
                    "country_flag_emoji_unicode" => "U+1F1FF U+1F1E6",
                    "calling_code" => "27",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "218.99.136.57",
                "type" => "ipv4",
                "continent_code" => "AS",
                "continent_name" => "Asia",
                "country_code" => "CN",
                "country_name" => "China",
                "region_code" => "BJ",
                "region_name" => "Beijing",
                "city" => "Beijing",
                "zip" => "100031",
                "latitude" => 39.911758422852,
                "longitude" => 116.37922668457,
                "location" => [
                    "geoname_id" => 1816670,
                    "capital" => "Beijing",
                    "languages" => [
                        [
                            "code" => "zh",
                            "name" => "Chinese",
                            "native" => "中文"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/cn.svg",
                    "country_flag_emoji" => "🇨🇳",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1F3",
                    "calling_code" => "86",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "112.125.168.89",
                "type" => "ipv4",
                "continent_code" => "AS",
                "continent_name" => "Asia",
                "country_code" => "CN",
                "country_name" => "China",
                "region_code" => "ZJ",
                "region_name" => "Zhejiang",
                "city" => "Hangzhou",
                "zip" => "310000",
                "latitude" => 30.235559463501,
                "longitude" => 120.15888977051,
                "location" => [
                    "geoname_id" => 1808926,
                    "capital" => "Beijing",
                    "languages" => [
                        [
                            "code" => "zh",
                            "name" => "Chinese",
                            "native" => "中文"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/cn.svg",
                    "country_flag_emoji" => "🇨🇳",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1F3",
                    "calling_code" => "86",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "116.52.75.78",
                "type" => "ipv4",
                "continent_code" => "AS",
                "continent_name" => "Asia",
                "country_code" => "CN",
                "country_name" => "China",
                "region_code" => "YN",
                "region_name" => "Yunnan",
                "city" => "Kunming",
                "zip" => "650000",
                "latitude" => 25.036609649658,
                "longitude" => 102.70644378662,
                "location" => [
                    "geoname_id" => 1804651,
                    "capital" => "Beijing",
                    "languages" => [
                        [
                            "code" => "zh",
                            "name" => "Chinese",
                            "native" => "中文"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/cn.svg",
                    "country_flag_emoji" => "🇨🇳",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1F3",
                    "calling_code" => "86",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "116.52.75.78",
                "type" => "ipv4",
                "continent_code" => "AS",
                "continent_name" => "Asia",
                "country_code" => "CN",
                "country_name" => "China",
                "region_code" => "YN",
                "region_name" => "Yunnan",
                "city" => "Kunming",
                "zip" => "650000",
                "latitude" => 25.036609649658,
                "longitude" => 102.70644378662,
                "location" => [
                    "geoname_id" => 1804651,
                    "capital" => "Beijing",
                    "languages" => [
                        [
                            "code" => "zh",
                            "name" => "Chinese",
                            "native" => "中文"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/cn.svg",
                    "country_flag_emoji" => "🇨🇳",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1F3",
                    "calling_code" => "86",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "41.77.56.40",
                "type" => "ipv4",
                "continent_code" => "AF",
                "continent_name" => "Africa",
                "country_code" => "ZA",
                "country_name" => "South Africa",
                "region_code" => "GT",
                "region_name" => "Gauteng",
                "city" => "Johannesburg",
                "zip" => "2000",
                "latitude" => -26.199169158936,
                "longitude" => 28.056390762329,
                "location" => [
                    "geoname_id" => 993800,
                    "capital" => "Pretoria",
                    "languages" => [
                        [
                            "code" => "af",
                            "name" => "Afrikaans",
                            "native" => "Afrikaans"
                        ],
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ],
                        [
                            "code" => "nr",
                            "name" => "South Ndebele",
                            "native" => "isiNdebele"
                        ],
                        [
                            "code" => "st",
                            "name" => "Southern Sotho",
                            "native" => "Sesotho"
                        ],
                        [
                            "code" => "ss",
                            "name" => "Swati",
                            "native" => "SiSwati"
                        ],
                        [
                            "code" => "tn",
                            "name" => "Tswana",
                            "native" => "Setswana"
                        ],
                        [
                            "code" => "ts",
                            "name" => "Tsonga",
                            "native" => "Xitsonga"
                        ],
                        [
                            "code" => "ve",
                            "name" => "Venda",
                            "native" => "Tshivenḓa"
                        ],
                        [
                            "code" => "xh",
                            "name" => "Xhosa",
                            "native" => "isiXhosa"
                        ],
                        [
                            "code" => "zu",
                            "name" => "Zulu",
                            "native" => "isiZulu"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/za.svg",
                    "country_flag_emoji" => "🇿🇦",
                    "country_flag_emoji_unicode" => "U+1F1FF U+1F1E6",
                    "calling_code" => "27",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "145.81.57.99",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "NL",
                "country_name" => "Netherlands",
                "region_code" => "NH",
                "region_name" => "North Holland",
                "city" => "Aalsmeer",
                "zip" => "1119",
                "latitude" => 52.284309387207,
                "longitude" => 4.7576098442078,
                "location" => [
                    "geoname_id" => 2760134,
                    "capital" => "Amsterdam",
                    "languages" => [
                        [
                            "code" => "nl",
                            "name" => "Dutch",
                            "native" => "Nederlands"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/nl.svg",
                    "country_flag_emoji" => "🇳🇱",
                    "country_flag_emoji_unicode" => "U+1F1F3 U+1F1F1",
                    "calling_code" => "31",
                    "is_eu" => true
                ]
            ],
            [
                "ip" => "37.35.105.218",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "CH",
                "country_name" => "Switzerland",
                "region_code" => "VD",
                "region_name" => "Vaud",
                "city" => "Lausanne",
                "zip" => "1000",
                "latitude" => 46.53950881958,
                "longitude" => 6.6461801528931,
                "location" => [
                    "geoname_id" => 2659994,
                    "capital" => "Bern",
                    "languages" => [
                        [
                            "code" => "de",
                            "name" => "German",
                            "native" => "Deutsch"
                        ],
                        [
                            "code" => "fr",
                            "name" => "French",
                            "native" => "Français"
                        ],
                        [
                            "code" => "it",
                            "name" => "Italian",
                            "native" => "Italiano"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/ch.svg",
                    "country_flag_emoji" => "🇨🇭",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1ED",
                    "calling_code" => "41",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "37.35.105.218",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "CH",
                "country_name" => "Switzerland",
                "region_code" => "VD",
                "region_name" => "Vaud",
                "city" => "Lausanne",
                "zip" => "1000",
                "latitude" => 46.53950881958,
                "longitude" => 6.6461801528931,
                "location" => [
                    "geoname_id" => 2659994,
                    "capital" => "Bern",
                    "languages" => [
                        [
                            "code" => "de",
                            "name" => "German",
                            "native" => "Deutsch"
                        ],
                        [
                            "code" => "fr",
                            "name" => "French",
                            "native" => "Français"
                        ],
                        [
                            "code" => "it",
                            "name" => "Italian",
                            "native" => "Italiano"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/ch.svg",
                    "country_flag_emoji" => "🇨🇭",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1ED",
                    "calling_code" => "41",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "218.99.136.57",
                "type" => "ipv4",
                "continent_code" => "AS",
                "continent_name" => "Asia",
                "country_code" => "CN",
                "country_name" => "China",
                "region_code" => "BJ",
                "region_name" => "Beijing",
                "city" => "Beijing",
                "zip" => "100031",
                "latitude" => 39.911758422852,
                "longitude" => 116.37922668457,
                "location" => [
                    "geoname_id" => 1816670,
                    "capital" => "Beijing",
                    "languages" => [
                        [
                            "code" => "zh",
                            "name" => "Chinese",
                            "native" => "中文"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/cn.svg",
                    "country_flag_emoji" => "🇨🇳",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1F3",
                    "calling_code" => "86",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "116.52.75.78",
                "type" => "ipv4",
                "continent_code" => "AS",
                "continent_name" => "Asia",
                "country_code" => "CN",
                "country_name" => "China",
                "region_code" => "YN",
                "region_name" => "Yunnan",
                "city" => "Kunming",
                "zip" => "650000",
                "latitude" => 25.036609649658,
                "longitude" => 102.70644378662,
                "location" => [
                    "geoname_id" => 1804651,
                    "capital" => "Beijing",
                    "languages" => [
                        [
                            "code" => "zh",
                            "name" => "Chinese",
                            "native" => "中文"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/cn.svg",
                    "country_flag_emoji" => "🇨🇳",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1F3",
                    "calling_code" => "86",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "63.81.174.152",
                "type" => "ipv4",
                "continent_code" => "NA",
                "continent_name" => "North America",
                "country_code" => "US",
                "country_name" => "United States",
                "region_code" => "CA",
                "region_name" => "California",
                "city" => "Los Angeles",
                "zip" => "90013",
                "latitude" => 34.045639038086,
                "longitude" => -118.24163818359,
                "location" => [
                    "geoname_id" => 5368361,
                    "capital" => "Washington D.C.",
                    "languages" => [
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/us.svg",
                    "country_flag_emoji" => "🇺🇸",
                    "country_flag_emoji_unicode" => "U+1F1FA U+1F1F8",
                    "calling_code" => "1",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "145.81.57.99",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "NL",
                "country_name" => "Netherlands",
                "region_code" => "NH",
                "region_name" => "North Holland",
                "city" => "Aalsmeer",
                "zip" => "1119",
                "latitude" => 52.284309387207,
                "longitude" => 4.7576098442078,
                "location" => [
                    "geoname_id" => 2760134,
                    "capital" => "Amsterdam",
                    "languages" => [
                        [
                            "code" => "nl",
                            "name" => "Dutch",
                            "native" => "Nederlands"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/nl.svg",
                    "country_flag_emoji" => "🇳🇱",
                    "country_flag_emoji_unicode" => "U+1F1F3 U+1F1F1",
                    "calling_code" => "31",
                    "is_eu" => true
                ]
            ],
            [
                "ip" => "112.125.168.89",
                "type" => "ipv4",
                "continent_code" => "AS",
                "continent_name" => "Asia",
                "country_code" => "CN",
                "country_name" => "China",
                "region_code" => "ZJ",
                "region_name" => "Zhejiang",
                "city" => "Hangzhou",
                "zip" => "310000",
                "latitude" => 30.235559463501,
                "longitude" => 120.15888977051,
                "location" => [
                    "geoname_id" => 1808926,
                    "capital" => "Beijing",
                    "languages" => [
                        [
                            "code" => "zh",
                            "name" => "Chinese",
                            "native" => "中文"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/cn.svg",
                    "country_flag_emoji" => "🇨🇳",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1F3",
                    "calling_code" => "86",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "91.112.216.215",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "AT",
                "country_name" => "Austria",
                "region_code" => "9",
                "region_name" => "Vienna",
                "city" => "Vienna",
                "zip" => "1010",
                "latitude" => 48.208881378174,
                "longitude" => 16.369739532471,
                "location" => [
                    "geoname_id" => 2761369,
                    "capital" => "Vienna",
                    "languages" => [
                        [
                            "code" => "de",
                            "name" => "German",
                            "native" => "Deutsch"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/at.svg",
                    "country_flag_emoji" => "🇦🇹",
                    "country_flag_emoji_unicode" => "U+1F1E6 U+1F1F9",
                    "calling_code" => "43",
                    "is_eu" => true
                ]
            ],
            [
                "ip" => "218.99.136.57",
                "type" => "ipv4",
                "continent_code" => "AS",
                "continent_name" => "Asia",
                "country_code" => "CN",
                "country_name" => "China",
                "region_code" => "BJ",
                "region_name" => "Beijing",
                "city" => "Beijing",
                "zip" => "100031",
                "latitude" => 39.911758422852,
                "longitude" => 116.37922668457,
                "location" => [
                    "geoname_id" => 1816670,
                    "capital" => "Beijing",
                    "languages" => [
                        [
                            "code" => "zh",
                            "name" => "Chinese",
                            "native" => "中文"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/cn.svg",
                    "country_flag_emoji" => "🇨🇳",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1F3",
                    "calling_code" => "86",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "37.35.105.218",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "CH",
                "country_name" => "Switzerland",
                "region_code" => "VD",
                "region_name" => "Vaud",
                "city" => "Lausanne",
                "zip" => "1000",
                "latitude" => 46.53950881958,
                "longitude" => 6.6461801528931,
                "location" => [
                    "geoname_id" => 2659994,
                    "capital" => "Bern",
                    "languages" => [
                        [
                            "code" => "de",
                            "name" => "German",
                            "native" => "Deutsch"
                        ],
                        [
                            "code" => "fr",
                            "name" => "French",
                            "native" => "Français"
                        ],
                        [
                            "code" => "it",
                            "name" => "Italian",
                            "native" => "Italiano"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/ch.svg",
                    "country_flag_emoji" => "🇨🇭",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1ED",
                    "calling_code" => "41",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "218.99.136.57",
                "type" => "ipv4",
                "continent_code" => "AS",
                "continent_name" => "Asia",
                "country_code" => "CN",
                "country_name" => "China",
                "region_code" => "BJ",
                "region_name" => "Beijing",
                "city" => "Beijing",
                "zip" => "100031",
                "latitude" => 39.911758422852,
                "longitude" => 116.37922668457,
                "location" => [
                    "geoname_id" => 1816670,
                    "capital" => "Beijing",
                    "languages" => [
                        [
                            "code" => "zh",
                            "name" => "Chinese",
                            "native" => "中文"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/cn.svg",
                    "country_flag_emoji" => "🇨🇳",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1F3",
                    "calling_code" => "86",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "216.165.48.137",
                "type" => "ipv4",
                "continent_code" => "NA",
                "continent_name" => "North America",
                "country_code" => "US",
                "country_name" => "United States",
                "region_code" => "NY",
                "region_name" => "New York",
                "city" => "Manhattan",
                "zip" => "10003",
                "latitude" => 40.731391906738,
                "longitude" => -73.988403320312,
                "location" => [
                    "geoname_id" => 5125771,
                    "capital" => "Washington D.C.",
                    "languages" => [
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/us.svg",
                    "country_flag_emoji" => "🇺🇸",
                    "country_flag_emoji_unicode" => "U+1F1FA U+1F1F8",
                    "calling_code" => "1",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "37.35.105.218",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "CH",
                "country_name" => "Switzerland",
                "region_code" => "VD",
                "region_name" => "Vaud",
                "city" => "Lausanne",
                "zip" => "1000",
                "latitude" => 46.53950881958,
                "longitude" => 6.6461801528931,
                "location" => [
                    "geoname_id" => 2659994,
                    "capital" => "Bern",
                    "languages" => [
                        [
                            "code" => "de",
                            "name" => "German",
                            "native" => "Deutsch"
                        ],
                        [
                            "code" => "fr",
                            "name" => "French",
                            "native" => "Français"
                        ],
                        [
                            "code" => "it",
                            "name" => "Italian",
                            "native" => "Italiano"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/ch.svg",
                    "country_flag_emoji" => "🇨🇭",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1ED",
                    "calling_code" => "41",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "112.125.168.89",
                "type" => "ipv4",
                "continent_code" => "AS",
                "continent_name" => "Asia",
                "country_code" => "CN",
                "country_name" => "China",
                "region_code" => "ZJ",
                "region_name" => "Zhejiang",
                "city" => "Hangzhou",
                "zip" => "310000",
                "latitude" => 30.235559463501,
                "longitude" => 120.15888977051,
                "location" => [
                    "geoname_id" => 1808926,
                    "capital" => "Beijing",
                    "languages" => [
                        [
                            "code" => "zh",
                            "name" => "Chinese",
                            "native" => "中文"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/cn.svg",
                    "country_flag_emoji" => "🇨🇳",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1F3",
                    "calling_code" => "86",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "37.35.105.218",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "CH",
                "country_name" => "Switzerland",
                "region_code" => "VD",
                "region_name" => "Vaud",
                "city" => "Lausanne",
                "zip" => "1000",
                "latitude" => 46.53950881958,
                "longitude" => 6.6461801528931,
                "location" => [
                    "geoname_id" => 2659994,
                    "capital" => "Bern",
                    "languages" => [
                        [
                            "code" => "de",
                            "name" => "German",
                            "native" => "Deutsch"
                        ],
                        [
                            "code" => "fr",
                            "name" => "French",
                            "native" => "Français"
                        ],
                        [
                            "code" => "it",
                            "name" => "Italian",
                            "native" => "Italiano"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/ch.svg",
                    "country_flag_emoji" => "🇨🇭",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1ED",
                    "calling_code" => "41",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "63.81.174.152",
                "type" => "ipv4",
                "continent_code" => "NA",
                "continent_name" => "North America",
                "country_code" => "US",
                "country_name" => "United States",
                "region_code" => "CA",
                "region_name" => "California",
                "city" => "Los Angeles",
                "zip" => "90013",
                "latitude" => 34.045639038086,
                "longitude" => -118.24163818359,
                "location" => [
                    "geoname_id" => 5368361,
                    "capital" => "Washington D.C.",
                    "languages" => [
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/us.svg",
                    "country_flag_emoji" => "🇺🇸",
                    "country_flag_emoji_unicode" => "U+1F1FA U+1F1F8",
                    "calling_code" => "1",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "37.35.105.218",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "CH",
                "country_name" => "Switzerland",
                "region_code" => "VD",
                "region_name" => "Vaud",
                "city" => "Lausanne",
                "zip" => "1000",
                "latitude" => 46.53950881958,
                "longitude" => 6.6461801528931,
                "location" => [
                    "geoname_id" => 2659994,
                    "capital" => "Bern",
                    "languages" => [
                        [
                            "code" => "de",
                            "name" => "German",
                            "native" => "Deutsch"
                        ],
                        [
                            "code" => "fr",
                            "name" => "French",
                            "native" => "Français"
                        ],
                        [
                            "code" => "it",
                            "name" => "Italian",
                            "native" => "Italiano"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/ch.svg",
                    "country_flag_emoji" => "🇨🇭",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1ED",
                    "calling_code" => "41",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "87.190.148.217",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "DE",
                "country_name" => "Germany",
                "region_code" => "HE",
                "region_name" => "Hesse",
                "city" => "Frankfurt am Main",
                "zip" => "60311",
                "latitude" => 50.110900878906,
                "longitude" => 8.6821002960205,
                "location" => [
                    "geoname_id" => 2925533,
                    "capital" => "Berlin",
                    "languages" => [
                        [
                            "code" => "de",
                            "name" => "German",
                            "native" => "Deutsch"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/de.svg",
                    "country_flag_emoji" => "🇩🇪",
                    "country_flag_emoji_unicode" => "U+1F1E9 U+1F1EA",
                    "calling_code" => "49",
                    "is_eu" => true
                ]
            ],
            [
                "ip" => "63.81.174.152",
                "type" => "ipv4",
                "continent_code" => "NA",
                "continent_name" => "North America",
                "country_code" => "US",
                "country_name" => "United States",
                "region_code" => "CA",
                "region_name" => "California",
                "city" => "Los Angeles",
                "zip" => "90013",
                "latitude" => 34.045639038086,
                "longitude" => -118.24163818359,
                "location" => [
                    "geoname_id" => 5368361,
                    "capital" => "Washington D.C.",
                    "languages" => [
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/us.svg",
                    "country_flag_emoji" => "🇺🇸",
                    "country_flag_emoji_unicode" => "U+1F1FA U+1F1F8",
                    "calling_code" => "1",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "145.81.57.99",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "NL",
                "country_name" => "Netherlands",
                "region_code" => "NH",
                "region_name" => "North Holland",
                "city" => "Aalsmeer",
                "zip" => "1119",
                "latitude" => 52.284309387207,
                "longitude" => 4.7576098442078,
                "location" => [
                    "geoname_id" => 2760134,
                    "capital" => "Amsterdam",
                    "languages" => [
                        [
                            "code" => "nl",
                            "name" => "Dutch",
                            "native" => "Nederlands"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/nl.svg",
                    "country_flag_emoji" => "🇳🇱",
                    "country_flag_emoji_unicode" => "U+1F1F3 U+1F1F1",
                    "calling_code" => "31",
                    "is_eu" => true
                ]
            ],
            [
                "ip" => "20.12.165.244",
                "type" => "ipv4",
                "continent_code" => "NA",
                "continent_name" => "North America",
                "country_code" => "US",
                "country_name" => "United States",
                "region_code" => "WA",
                "region_name" => "Washington",
                "city" => "Redmond",
                "zip" => "98052",
                "latitude" => 47.680500030518,
                "longitude" => -122.12094116211,
                "location" => [
                    "geoname_id" => 5808079,
                    "capital" => "Washington D.C.",
                    "languages" => [
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/us.svg",
                    "country_flag_emoji" => "🇺🇸",
                    "country_flag_emoji_unicode" => "U+1F1FA U+1F1F8",
                    "calling_code" => "1",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "216.165.48.137",
                "type" => "ipv4",
                "continent_code" => "NA",
                "continent_name" => "North America",
                "country_code" => "US",
                "country_name" => "United States",
                "region_code" => "NY",
                "region_name" => "New York",
                "city" => "Manhattan",
                "zip" => "10003",
                "latitude" => 40.731391906738,
                "longitude" => -73.988403320312,
                "location" => [
                    "geoname_id" => 5125771,
                    "capital" => "Washington D.C.",
                    "languages" => [
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/us.svg",
                    "country_flag_emoji" => "🇺🇸",
                    "country_flag_emoji_unicode" => "U+1F1FA U+1F1F8",
                    "calling_code" => "1",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "116.52.75.78",
                "type" => "ipv4",
                "continent_code" => "AS",
                "continent_name" => "Asia",
                "country_code" => "CN",
                "country_name" => "China",
                "region_code" => "YN",
                "region_name" => "Yunnan",
                "city" => "Kunming",
                "zip" => "650000",
                "latitude" => 25.036609649658,
                "longitude" => 102.70644378662,
                "location" => [
                    "geoname_id" => 1804651,
                    "capital" => "Beijing",
                    "languages" => [
                        [
                            "code" => "zh",
                            "name" => "Chinese",
                            "native" => "中文"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/cn.svg",
                    "country_flag_emoji" => "🇨🇳",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1F3",
                    "calling_code" => "86",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "216.165.48.137",
                "type" => "ipv4",
                "continent_code" => "NA",
                "continent_name" => "North America",
                "country_code" => "US",
                "country_name" => "United States",
                "region_code" => "NY",
                "region_name" => "New York",
                "city" => "Manhattan",
                "zip" => "10003",
                "latitude" => 40.731391906738,
                "longitude" => -73.988403320312,
                "location" => [
                    "geoname_id" => 5125771,
                    "capital" => "Washington D.C.",
                    "languages" => [
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/us.svg",
                    "country_flag_emoji" => "🇺🇸",
                    "country_flag_emoji_unicode" => "U+1F1FA U+1F1F8",
                    "calling_code" => "1",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "20.12.165.244",
                "type" => "ipv4",
                "continent_code" => "NA",
                "continent_name" => "North America",
                "country_code" => "US",
                "country_name" => "United States",
                "region_code" => "WA",
                "region_name" => "Washington",
                "city" => "Redmond",
                "zip" => "98052",
                "latitude" => 47.680500030518,
                "longitude" => -122.12094116211,
                "location" => [
                    "geoname_id" => 5808079,
                    "capital" => "Washington D.C.",
                    "languages" => [
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/us.svg",
                    "country_flag_emoji" => "🇺🇸",
                    "country_flag_emoji_unicode" => "U+1F1FA U+1F1F8",
                    "calling_code" => "1",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "112.125.168.89",
                "type" => "ipv4",
                "continent_code" => "AS",
                "continent_name" => "Asia",
                "country_code" => "CN",
                "country_name" => "China",
                "region_code" => "ZJ",
                "region_name" => "Zhejiang",
                "city" => "Hangzhou",
                "zip" => "310000",
                "latitude" => 30.235559463501,
                "longitude" => 120.15888977051,
                "location" => [
                    "geoname_id" => 1808926,
                    "capital" => "Beijing",
                    "languages" => [
                        [
                            "code" => "zh",
                            "name" => "Chinese",
                            "native" => "中文"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/cn.svg",
                    "country_flag_emoji" => "🇨🇳",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1F3",
                    "calling_code" => "86",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "216.165.48.137",
                "type" => "ipv4",
                "continent_code" => "NA",
                "continent_name" => "North America",
                "country_code" => "US",
                "country_name" => "United States",
                "region_code" => "NY",
                "region_name" => "New York",
                "city" => "Manhattan",
                "zip" => "10003",
                "latitude" => 40.731391906738,
                "longitude" => -73.988403320312,
                "location" => [
                    "geoname_id" => 5125771,
                    "capital" => "Washington D.C.",
                    "languages" => [
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/us.svg",
                    "country_flag_emoji" => "🇺🇸",
                    "country_flag_emoji_unicode" => "U+1F1FA U+1F1F8",
                    "calling_code" => "1",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "37.35.105.218",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "CH",
                "country_name" => "Switzerland",
                "region_code" => "VD",
                "region_name" => "Vaud",
                "city" => "Lausanne",
                "zip" => "1000",
                "latitude" => 46.53950881958,
                "longitude" => 6.6461801528931,
                "location" => [
                    "geoname_id" => 2659994,
                    "capital" => "Bern",
                    "languages" => [
                        [
                            "code" => "de",
                            "name" => "German",
                            "native" => "Deutsch"
                        ],
                        [
                            "code" => "fr",
                            "name" => "French",
                            "native" => "Français"
                        ],
                        [
                            "code" => "it",
                            "name" => "Italian",
                            "native" => "Italiano"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/ch.svg",
                    "country_flag_emoji" => "🇨🇭",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1ED",
                    "calling_code" => "41",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "41.77.56.40",
                "type" => "ipv4",
                "continent_code" => "AF",
                "continent_name" => "Africa",
                "country_code" => "ZA",
                "country_name" => "South Africa",
                "region_code" => "GT",
                "region_name" => "Gauteng",
                "city" => "Johannesburg",
                "zip" => "2000",
                "latitude" => -26.199169158936,
                "longitude" => 28.056390762329,
                "location" => [
                    "geoname_id" => 993800,
                    "capital" => "Pretoria",
                    "languages" => [
                        [
                            "code" => "af",
                            "name" => "Afrikaans",
                            "native" => "Afrikaans"
                        ],
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ],
                        [
                            "code" => "nr",
                            "name" => "South Ndebele",
                            "native" => "isiNdebele"
                        ],
                        [
                            "code" => "st",
                            "name" => "Southern Sotho",
                            "native" => "Sesotho"
                        ],
                        [
                            "code" => "ss",
                            "name" => "Swati",
                            "native" => "SiSwati"
                        ],
                        [
                            "code" => "tn",
                            "name" => "Tswana",
                            "native" => "Setswana"
                        ],
                        [
                            "code" => "ts",
                            "name" => "Tsonga",
                            "native" => "Xitsonga"
                        ],
                        [
                            "code" => "ve",
                            "name" => "Venda",
                            "native" => "Tshivenḓa"
                        ],
                        [
                            "code" => "xh",
                            "name" => "Xhosa",
                            "native" => "isiXhosa"
                        ],
                        [
                            "code" => "zu",
                            "name" => "Zulu",
                            "native" => "isiZulu"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/za.svg",
                    "country_flag_emoji" => "🇿🇦",
                    "country_flag_emoji_unicode" => "U+1F1FF U+1F1E6",
                    "calling_code" => "27",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "216.165.48.137",
                "type" => "ipv4",
                "continent_code" => "NA",
                "continent_name" => "North America",
                "country_code" => "US",
                "country_name" => "United States",
                "region_code" => "NY",
                "region_name" => "New York",
                "city" => "Manhattan",
                "zip" => "10003",
                "latitude" => 40.731391906738,
                "longitude" => -73.988403320312,
                "location" => [
                    "geoname_id" => 5125771,
                    "capital" => "Washington D.C.",
                    "languages" => [
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/us.svg",
                    "country_flag_emoji" => "🇺🇸",
                    "country_flag_emoji_unicode" => "U+1F1FA U+1F1F8",
                    "calling_code" => "1",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "216.165.48.137",
                "type" => "ipv4",
                "continent_code" => "NA",
                "continent_name" => "North America",
                "country_code" => "US",
                "country_name" => "United States",
                "region_code" => "NY",
                "region_name" => "New York",
                "city" => "Manhattan",
                "zip" => "10003",
                "latitude" => 40.731391906738,
                "longitude" => -73.988403320312,
                "location" => [
                    "geoname_id" => 5125771,
                    "capital" => "Washington D.C.",
                    "languages" => [
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/us.svg",
                    "country_flag_emoji" => "🇺🇸",
                    "country_flag_emoji_unicode" => "U+1F1FA U+1F1F8",
                    "calling_code" => "1",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "37.35.105.218",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "CH",
                "country_name" => "Switzerland",
                "region_code" => "VD",
                "region_name" => "Vaud",
                "city" => "Lausanne",
                "zip" => "1000",
                "latitude" => 46.53950881958,
                "longitude" => 6.6461801528931,
                "location" => [
                    "geoname_id" => 2659994,
                    "capital" => "Bern",
                    "languages" => [
                        [
                            "code" => "de",
                            "name" => "German",
                            "native" => "Deutsch"
                        ],
                        [
                            "code" => "fr",
                            "name" => "French",
                            "native" => "Français"
                        ],
                        [
                            "code" => "it",
                            "name" => "Italian",
                            "native" => "Italiano"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/ch.svg",
                    "country_flag_emoji" => "🇨🇭",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1ED",
                    "calling_code" => "41",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "145.81.57.99",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "NL",
                "country_name" => "Netherlands",
                "region_code" => "NH",
                "region_name" => "North Holland",
                "city" => "Aalsmeer",
                "zip" => "1119",
                "latitude" => 52.284309387207,
                "longitude" => 4.7576098442078,
                "location" => [
                    "geoname_id" => 2760134,
                    "capital" => "Amsterdam",
                    "languages" => [
                        [
                            "code" => "nl",
                            "name" => "Dutch",
                            "native" => "Nederlands"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/nl.svg",
                    "country_flag_emoji" => "🇳🇱",
                    "country_flag_emoji_unicode" => "U+1F1F3 U+1F1F1",
                    "calling_code" => "31",
                    "is_eu" => true
                ]
            ],
            [
                "ip" => "91.112.216.215",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "AT",
                "country_name" => "Austria",
                "region_code" => "9",
                "region_name" => "Vienna",
                "city" => "Vienna",
                "zip" => "1010",
                "latitude" => 48.208881378174,
                "longitude" => 16.369739532471,
                "location" => [
                    "geoname_id" => 2761369,
                    "capital" => "Vienna",
                    "languages" => [
                        [
                            "code" => "de",
                            "name" => "German",
                            "native" => "Deutsch"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/at.svg",
                    "country_flag_emoji" => "🇦🇹",
                    "country_flag_emoji_unicode" => "U+1F1E6 U+1F1F9",
                    "calling_code" => "43",
                    "is_eu" => true
                ]
            ],
            [
                "ip" => "20.12.165.244",
                "type" => "ipv4",
                "continent_code" => "NA",
                "continent_name" => "North America",
                "country_code" => "US",
                "country_name" => "United States",
                "region_code" => "WA",
                "region_name" => "Washington",
                "city" => "Redmond",
                "zip" => "98052",
                "latitude" => 47.680500030518,
                "longitude" => -122.12094116211,
                "location" => [
                    "geoname_id" => 5808079,
                    "capital" => "Washington D.C.",
                    "languages" => [
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/us.svg",
                    "country_flag_emoji" => "🇺🇸",
                    "country_flag_emoji_unicode" => "U+1F1FA U+1F1F8",
                    "calling_code" => "1",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "63.81.174.152",
                "type" => "ipv4",
                "continent_code" => "NA",
                "continent_name" => "North America",
                "country_code" => "US",
                "country_name" => "United States",
                "region_code" => "CA",
                "region_name" => "California",
                "city" => "Los Angeles",
                "zip" => "90013",
                "latitude" => 34.045639038086,
                "longitude" => -118.24163818359,
                "location" => [
                    "geoname_id" => 5368361,
                    "capital" => "Washington D.C.",
                    "languages" => [
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/us.svg",
                    "country_flag_emoji" => "🇺🇸",
                    "country_flag_emoji_unicode" => "U+1F1FA U+1F1F8",
                    "calling_code" => "1",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "116.52.75.78",
                "type" => "ipv4",
                "continent_code" => "AS",
                "continent_name" => "Asia",
                "country_code" => "CN",
                "country_name" => "China",
                "region_code" => "YN",
                "region_name" => "Yunnan",
                "city" => "Kunming",
                "zip" => "650000",
                "latitude" => 25.036609649658,
                "longitude" => 102.70644378662,
                "location" => [
                    "geoname_id" => 1804651,
                    "capital" => "Beijing",
                    "languages" => [
                        [
                            "code" => "zh",
                            "name" => "Chinese",
                            "native" => "中文"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/cn.svg",
                    "country_flag_emoji" => "🇨🇳",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1F3",
                    "calling_code" => "86",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "216.165.48.137",
                "type" => "ipv4",
                "continent_code" => "NA",
                "continent_name" => "North America",
                "country_code" => "US",
                "country_name" => "United States",
                "region_code" => "NY",
                "region_name" => "New York",
                "city" => "Manhattan",
                "zip" => "10003",
                "latitude" => 40.731391906738,
                "longitude" => -73.988403320312,
                "location" => [
                    "geoname_id" => 5125771,
                    "capital" => "Washington D.C.",
                    "languages" => [
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/us.svg",
                    "country_flag_emoji" => "🇺🇸",
                    "country_flag_emoji_unicode" => "U+1F1FA U+1F1F8",
                    "calling_code" => "1",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "116.52.75.78",
                "type" => "ipv4",
                "continent_code" => "AS",
                "continent_name" => "Asia",
                "country_code" => "CN",
                "country_name" => "China",
                "region_code" => "YN",
                "region_name" => "Yunnan",
                "city" => "Kunming",
                "zip" => "650000",
                "latitude" => 25.036609649658,
                "longitude" => 102.70644378662,
                "location" => [
                    "geoname_id" => 1804651,
                    "capital" => "Beijing",
                    "languages" => [
                        [
                            "code" => "zh",
                            "name" => "Chinese",
                            "native" => "中文"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/cn.svg",
                    "country_flag_emoji" => "🇨🇳",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1F3",
                    "calling_code" => "86",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "41.77.56.40",
                "type" => "ipv4",
                "continent_code" => "AF",
                "continent_name" => "Africa",
                "country_code" => "ZA",
                "country_name" => "South Africa",
                "region_code" => "GT",
                "region_name" => "Gauteng",
                "city" => "Johannesburg",
                "zip" => "2000",
                "latitude" => -26.199169158936,
                "longitude" => 28.056390762329,
                "location" => [
                    "geoname_id" => 993800,
                    "capital" => "Pretoria",
                    "languages" => [
                        [
                            "code" => "af",
                            "name" => "Afrikaans",
                            "native" => "Afrikaans"
                        ],
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ],
                        [
                            "code" => "nr",
                            "name" => "South Ndebele",
                            "native" => "isiNdebele"
                        ],
                        [
                            "code" => "st",
                            "name" => "Southern Sotho",
                            "native" => "Sesotho"
                        ],
                        [
                            "code" => "ss",
                            "name" => "Swati",
                            "native" => "SiSwati"
                        ],
                        [
                            "code" => "tn",
                            "name" => "Tswana",
                            "native" => "Setswana"
                        ],
                        [
                            "code" => "ts",
                            "name" => "Tsonga",
                            "native" => "Xitsonga"
                        ],
                        [
                            "code" => "ve",
                            "name" => "Venda",
                            "native" => "Tshivenḓa"
                        ],
                        [
                            "code" => "xh",
                            "name" => "Xhosa",
                            "native" => "isiXhosa"
                        ],
                        [
                            "code" => "zu",
                            "name" => "Zulu",
                            "native" => "isiZulu"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/za.svg",
                    "country_flag_emoji" => "🇿🇦",
                    "country_flag_emoji_unicode" => "U+1F1FF U+1F1E6",
                    "calling_code" => "27",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "20.12.165.244",
                "type" => "ipv4",
                "continent_code" => "NA",
                "continent_name" => "North America",
                "country_code" => "US",
                "country_name" => "United States",
                "region_code" => "WA",
                "region_name" => "Washington",
                "city" => "Redmond",
                "zip" => "98052",
                "latitude" => 47.680500030518,
                "longitude" => -122.12094116211,
                "location" => [
                    "geoname_id" => 5808079,
                    "capital" => "Washington D.C.",
                    "languages" => [
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/us.svg",
                    "country_flag_emoji" => "🇺🇸",
                    "country_flag_emoji_unicode" => "U+1F1FA U+1F1F8",
                    "calling_code" => "1",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "112.125.168.89",
                "type" => "ipv4",
                "continent_code" => "AS",
                "continent_name" => "Asia",
                "country_code" => "CN",
                "country_name" => "China",
                "region_code" => "ZJ",
                "region_name" => "Zhejiang",
                "city" => "Hangzhou",
                "zip" => "310000",
                "latitude" => 30.235559463501,
                "longitude" => 120.15888977051,
                "location" => [
                    "geoname_id" => 1808926,
                    "capital" => "Beijing",
                    "languages" => [
                        [
                            "code" => "zh",
                            "name" => "Chinese",
                            "native" => "中文"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/cn.svg",
                    "country_flag_emoji" => "🇨🇳",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1F3",
                    "calling_code" => "86",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "41.77.56.40",
                "type" => "ipv4",
                "continent_code" => "AF",
                "continent_name" => "Africa",
                "country_code" => "ZA",
                "country_name" => "South Africa",
                "region_code" => "GT",
                "region_name" => "Gauteng",
                "city" => "Johannesburg",
                "zip" => "2000",
                "latitude" => -26.199169158936,
                "longitude" => 28.056390762329,
                "location" => [
                    "geoname_id" => 993800,
                    "capital" => "Pretoria",
                    "languages" => [
                        [
                            "code" => "af",
                            "name" => "Afrikaans",
                            "native" => "Afrikaans"
                        ],
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ],
                        [
                            "code" => "nr",
                            "name" => "South Ndebele",
                            "native" => "isiNdebele"
                        ],
                        [
                            "code" => "st",
                            "name" => "Southern Sotho",
                            "native" => "Sesotho"
                        ],
                        [
                            "code" => "ss",
                            "name" => "Swati",
                            "native" => "SiSwati"
                        ],
                        [
                            "code" => "tn",
                            "name" => "Tswana",
                            "native" => "Setswana"
                        ],
                        [
                            "code" => "ts",
                            "name" => "Tsonga",
                            "native" => "Xitsonga"
                        ],
                        [
                            "code" => "ve",
                            "name" => "Venda",
                            "native" => "Tshivenḓa"
                        ],
                        [
                            "code" => "xh",
                            "name" => "Xhosa",
                            "native" => "isiXhosa"
                        ],
                        [
                            "code" => "zu",
                            "name" => "Zulu",
                            "native" => "isiZulu"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/za.svg",
                    "country_flag_emoji" => "🇿🇦",
                    "country_flag_emoji_unicode" => "U+1F1FF U+1F1E6",
                    "calling_code" => "27",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "218.99.136.57",
                "type" => "ipv4",
                "continent_code" => "AS",
                "continent_name" => "Asia",
                "country_code" => "CN",
                "country_name" => "China",
                "region_code" => "BJ",
                "region_name" => "Beijing",
                "city" => "Beijing",
                "zip" => "100031",
                "latitude" => 39.911758422852,
                "longitude" => 116.37922668457,
                "location" => [
                    "geoname_id" => 1816670,
                    "capital" => "Beijing",
                    "languages" => [
                        [
                            "code" => "zh",
                            "name" => "Chinese",
                            "native" => "中文"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/cn.svg",
                    "country_flag_emoji" => "🇨🇳",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1F3",
                    "calling_code" => "86",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "20.12.165.244",
                "type" => "ipv4",
                "continent_code" => "NA",
                "continent_name" => "North America",
                "country_code" => "US",
                "country_name" => "United States",
                "region_code" => "WA",
                "region_name" => "Washington",
                "city" => "Redmond",
                "zip" => "98052",
                "latitude" => 47.680500030518,
                "longitude" => -122.12094116211,
                "location" => [
                    "geoname_id" => 5808079,
                    "capital" => "Washington D.C.",
                    "languages" => [
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/us.svg",
                    "country_flag_emoji" => "🇺🇸",
                    "country_flag_emoji_unicode" => "U+1F1FA U+1F1F8",
                    "calling_code" => "1",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "216.165.48.137",
                "type" => "ipv4",
                "continent_code" => "NA",
                "continent_name" => "North America",
                "country_code" => "US",
                "country_name" => "United States",
                "region_code" => "NY",
                "region_name" => "New York",
                "city" => "Manhattan",
                "zip" => "10003",
                "latitude" => 40.731391906738,
                "longitude" => -73.988403320312,
                "location" => [
                    "geoname_id" => 5125771,
                    "capital" => "Washington D.C.",
                    "languages" => [
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/us.svg",
                    "country_flag_emoji" => "🇺🇸",
                    "country_flag_emoji_unicode" => "U+1F1FA U+1F1F8",
                    "calling_code" => "1",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "112.125.168.89",
                "type" => "ipv4",
                "continent_code" => "AS",
                "continent_name" => "Asia",
                "country_code" => "CN",
                "country_name" => "China",
                "region_code" => "ZJ",
                "region_name" => "Zhejiang",
                "city" => "Hangzhou",
                "zip" => "310000",
                "latitude" => 30.235559463501,
                "longitude" => 120.15888977051,
                "location" => [
                    "geoname_id" => 1808926,
                    "capital" => "Beijing",
                    "languages" => [
                        [
                            "code" => "zh",
                            "name" => "Chinese",
                            "native" => "中文"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/cn.svg",
                    "country_flag_emoji" => "🇨🇳",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1F3",
                    "calling_code" => "86",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "20.12.165.244",
                "type" => "ipv4",
                "continent_code" => "NA",
                "continent_name" => "North America",
                "country_code" => "US",
                "country_name" => "United States",
                "region_code" => "WA",
                "region_name" => "Washington",
                "city" => "Redmond",
                "zip" => "98052",
                "latitude" => 47.680500030518,
                "longitude" => -122.12094116211,
                "location" => [
                    "geoname_id" => 5808079,
                    "capital" => "Washington D.C.",
                    "languages" => [
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/us.svg",
                    "country_flag_emoji" => "🇺🇸",
                    "country_flag_emoji_unicode" => "U+1F1FA U+1F1F8",
                    "calling_code" => "1",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "218.99.136.57",
                "type" => "ipv4",
                "continent_code" => "AS",
                "continent_name" => "Asia",
                "country_code" => "CN",
                "country_name" => "China",
                "region_code" => "BJ",
                "region_name" => "Beijing",
                "city" => "Beijing",
                "zip" => "100031",
                "latitude" => 39.911758422852,
                "longitude" => 116.37922668457,
                "location" => [
                    "geoname_id" => 1816670,
                    "capital" => "Beijing",
                    "languages" => [
                        [
                            "code" => "zh",
                            "name" => "Chinese",
                            "native" => "中文"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/cn.svg",
                    "country_flag_emoji" => "🇨🇳",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1F3",
                    "calling_code" => "86",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "218.99.136.57",
                "type" => "ipv4",
                "continent_code" => "AS",
                "continent_name" => "Asia",
                "country_code" => "CN",
                "country_name" => "China",
                "region_code" => "BJ",
                "region_name" => "Beijing",
                "city" => "Beijing",
                "zip" => "100031",
                "latitude" => 39.911758422852,
                "longitude" => 116.37922668457,
                "location" => [
                    "geoname_id" => 1816670,
                    "capital" => "Beijing",
                    "languages" => [
                        [
                            "code" => "zh",
                            "name" => "Chinese",
                            "native" => "中文"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/cn.svg",
                    "country_flag_emoji" => "🇨🇳",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1F3",
                    "calling_code" => "86",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "63.81.174.152",
                "type" => "ipv4",
                "continent_code" => "NA",
                "continent_name" => "North America",
                "country_code" => "US",
                "country_name" => "United States",
                "region_code" => "CA",
                "region_name" => "California",
                "city" => "Los Angeles",
                "zip" => "90013",
                "latitude" => 34.045639038086,
                "longitude" => -118.24163818359,
                "location" => [
                    "geoname_id" => 5368361,
                    "capital" => "Washington D.C.",
                    "languages" => [
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/us.svg",
                    "country_flag_emoji" => "🇺🇸",
                    "country_flag_emoji_unicode" => "U+1F1FA U+1F1F8",
                    "calling_code" => "1",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "20.12.165.244",
                "type" => "ipv4",
                "continent_code" => "NA",
                "continent_name" => "North America",
                "country_code" => "US",
                "country_name" => "United States",
                "region_code" => "WA",
                "region_name" => "Washington",
                "city" => "Redmond",
                "zip" => "98052",
                "latitude" => 47.680500030518,
                "longitude" => -122.12094116211,
                "location" => [
                    "geoname_id" => 5808079,
                    "capital" => "Washington D.C.",
                    "languages" => [
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/us.svg",
                    "country_flag_emoji" => "🇺🇸",
                    "country_flag_emoji_unicode" => "U+1F1FA U+1F1F8",
                    "calling_code" => "1",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "218.99.136.57",
                "type" => "ipv4",
                "continent_code" => "AS",
                "continent_name" => "Asia",
                "country_code" => "CN",
                "country_name" => "China",
                "region_code" => "BJ",
                "region_name" => "Beijing",
                "city" => "Beijing",
                "zip" => "100031",
                "latitude" => 39.911758422852,
                "longitude" => 116.37922668457,
                "location" => [
                    "geoname_id" => 1816670,
                    "capital" => "Beijing",
                    "languages" => [
                        [
                            "code" => "zh",
                            "name" => "Chinese",
                            "native" => "中文"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/cn.svg",
                    "country_flag_emoji" => "🇨🇳",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1F3",
                    "calling_code" => "86",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "91.112.216.215",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "AT",
                "country_name" => "Austria",
                "region_code" => "9",
                "region_name" => "Vienna",
                "city" => "Vienna",
                "zip" => "1010",
                "latitude" => 48.208881378174,
                "longitude" => 16.369739532471,
                "location" => [
                    "geoname_id" => 2761369,
                    "capital" => "Vienna",
                    "languages" => [
                        [
                            "code" => "de",
                            "name" => "German",
                            "native" => "Deutsch"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/at.svg",
                    "country_flag_emoji" => "🇦🇹",
                    "country_flag_emoji_unicode" => "U+1F1E6 U+1F1F9",
                    "calling_code" => "43",
                    "is_eu" => true
                ]
            ],
            [
                "ip" => "37.35.105.218",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "CH",
                "country_name" => "Switzerland",
                "region_code" => "VD",
                "region_name" => "Vaud",
                "city" => "Lausanne",
                "zip" => "1000",
                "latitude" => 46.53950881958,
                "longitude" => 6.6461801528931,
                "location" => [
                    "geoname_id" => 2659994,
                    "capital" => "Bern",
                    "languages" => [
                        [
                            "code" => "de",
                            "name" => "German",
                            "native" => "Deutsch"
                        ],
                        [
                            "code" => "fr",
                            "name" => "French",
                            "native" => "Français"
                        ],
                        [
                            "code" => "it",
                            "name" => "Italian",
                            "native" => "Italiano"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/ch.svg",
                    "country_flag_emoji" => "🇨🇭",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1ED",
                    "calling_code" => "41",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "87.190.148.217",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "DE",
                "country_name" => "Germany",
                "region_code" => "HE",
                "region_name" => "Hesse",
                "city" => "Frankfurt am Main",
                "zip" => "60311",
                "latitude" => 50.110900878906,
                "longitude" => 8.6821002960205,
                "location" => [
                    "geoname_id" => 2925533,
                    "capital" => "Berlin",
                    "languages" => [
                        [
                            "code" => "de",
                            "name" => "German",
                            "native" => "Deutsch"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/de.svg",
                    "country_flag_emoji" => "🇩🇪",
                    "country_flag_emoji_unicode" => "U+1F1E9 U+1F1EA",
                    "calling_code" => "49",
                    "is_eu" => true
                ]
            ],
            [
                "ip" => "145.81.57.99",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "NL",
                "country_name" => "Netherlands",
                "region_code" => "NH",
                "region_name" => "North Holland",
                "city" => "Aalsmeer",
                "zip" => "1119",
                "latitude" => 52.284309387207,
                "longitude" => 4.7576098442078,
                "location" => [
                    "geoname_id" => 2760134,
                    "capital" => "Amsterdam",
                    "languages" => [
                        [
                            "code" => "nl",
                            "name" => "Dutch",
                            "native" => "Nederlands"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/nl.svg",
                    "country_flag_emoji" => "🇳🇱",
                    "country_flag_emoji_unicode" => "U+1F1F3 U+1F1F1",
                    "calling_code" => "31",
                    "is_eu" => true
                ]
            ],
            [
                "ip" => "87.190.148.217",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "DE",
                "country_name" => "Germany",
                "region_code" => "HE",
                "region_name" => "Hesse",
                "city" => "Frankfurt am Main",
                "zip" => "60311",
                "latitude" => 50.110900878906,
                "longitude" => 8.6821002960205,
                "location" => [
                    "geoname_id" => 2925533,
                    "capital" => "Berlin",
                    "languages" => [
                        [
                            "code" => "de",
                            "name" => "German",
                            "native" => "Deutsch"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/de.svg",
                    "country_flag_emoji" => "🇩🇪",
                    "country_flag_emoji_unicode" => "U+1F1E9 U+1F1EA",
                    "calling_code" => "49",
                    "is_eu" => true
                ]
            ],
            [
                "ip" => "91.112.216.215",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "AT",
                "country_name" => "Austria",
                "region_code" => "9",
                "region_name" => "Vienna",
                "city" => "Vienna",
                "zip" => "1010",
                "latitude" => 48.208881378174,
                "longitude" => 16.369739532471,
                "location" => [
                    "geoname_id" => 2761369,
                    "capital" => "Vienna",
                    "languages" => [
                        [
                            "code" => "de",
                            "name" => "German",
                            "native" => "Deutsch"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/at.svg",
                    "country_flag_emoji" => "🇦🇹",
                    "country_flag_emoji_unicode" => "U+1F1E6 U+1F1F9",
                    "calling_code" => "43",
                    "is_eu" => true
                ]
            ],
            [
                "ip" => "20.12.165.244",
                "type" => "ipv4",
                "continent_code" => "NA",
                "continent_name" => "North America",
                "country_code" => "US",
                "country_name" => "United States",
                "region_code" => "WA",
                "region_name" => "Washington",
                "city" => "Redmond",
                "zip" => "98052",
                "latitude" => 47.680500030518,
                "longitude" => -122.12094116211,
                "location" => [
                    "geoname_id" => 5808079,
                    "capital" => "Washington D.C.",
                    "languages" => [
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/us.svg",
                    "country_flag_emoji" => "🇺🇸",
                    "country_flag_emoji_unicode" => "U+1F1FA U+1F1F8",
                    "calling_code" => "1",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "63.81.174.152",
                "type" => "ipv4",
                "continent_code" => "NA",
                "continent_name" => "North America",
                "country_code" => "US",
                "country_name" => "United States",
                "region_code" => "CA",
                "region_name" => "California",
                "city" => "Los Angeles",
                "zip" => "90013",
                "latitude" => 34.045639038086,
                "longitude" => -118.24163818359,
                "location" => [
                    "geoname_id" => 5368361,
                    "capital" => "Washington D.C.",
                    "languages" => [
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/us.svg",
                    "country_flag_emoji" => "🇺🇸",
                    "country_flag_emoji_unicode" => "U+1F1FA U+1F1F8",
                    "calling_code" => "1",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "37.35.105.218",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "CH",
                "country_name" => "Switzerland",
                "region_code" => "VD",
                "region_name" => "Vaud",
                "city" => "Lausanne",
                "zip" => "1000",
                "latitude" => 46.53950881958,
                "longitude" => 6.6461801528931,
                "location" => [
                    "geoname_id" => 2659994,
                    "capital" => "Bern",
                    "languages" => [
                        [
                            "code" => "de",
                            "name" => "German",
                            "native" => "Deutsch"
                        ],
                        [
                            "code" => "fr",
                            "name" => "French",
                            "native" => "Français"
                        ],
                        [
                            "code" => "it",
                            "name" => "Italian",
                            "native" => "Italiano"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/ch.svg",
                    "country_flag_emoji" => "🇨🇭",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1ED",
                    "calling_code" => "41",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "116.52.75.78",
                "type" => "ipv4",
                "continent_code" => "AS",
                "continent_name" => "Asia",
                "country_code" => "CN",
                "country_name" => "China",
                "region_code" => "YN",
                "region_name" => "Yunnan",
                "city" => "Kunming",
                "zip" => "650000",
                "latitude" => 25.036609649658,
                "longitude" => 102.70644378662,
                "location" => [
                    "geoname_id" => 1804651,
                    "capital" => "Beijing",
                    "languages" => [
                        [
                            "code" => "zh",
                            "name" => "Chinese",
                            "native" => "中文"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/cn.svg",
                    "country_flag_emoji" => "🇨🇳",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1F3",
                    "calling_code" => "86",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "20.12.165.244",
                "type" => "ipv4",
                "continent_code" => "NA",
                "continent_name" => "North America",
                "country_code" => "US",
                "country_name" => "United States",
                "region_code" => "WA",
                "region_name" => "Washington",
                "city" => "Redmond",
                "zip" => "98052",
                "latitude" => 47.680500030518,
                "longitude" => -122.12094116211,
                "location" => [
                    "geoname_id" => 5808079,
                    "capital" => "Washington D.C.",
                    "languages" => [
                        [
                            "code" => "en",
                            "name" => "English",
                            "native" => "English"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/us.svg",
                    "country_flag_emoji" => "🇺🇸",
                    "country_flag_emoji_unicode" => "U+1F1FA U+1F1F8",
                    "calling_code" => "1",
                    "is_eu" => false
                ]
            ],
            [
                "ip" => "37.35.105.218",
                "type" => "ipv4",
                "continent_code" => "EU",
                "continent_name" => "Europe",
                "country_code" => "CH",
                "country_name" => "Switzerland",
                "region_code" => "VD",
                "region_name" => "Vaud",
                "city" => "Lausanne",
                "zip" => "1000",
                "latitude" => 46.53950881958,
                "longitude" => 6.6461801528931,
                "location" => [
                    "geoname_id" => 2659994,
                    "capital" => "Bern",
                    "languages" => [
                        [
                            "code" => "de",
                            "name" => "German",
                            "native" => "Deutsch"
                        ],
                        [
                            "code" => "fr",
                            "name" => "French",
                            "native" => "Français"
                        ],
                        [
                            "code" => "it",
                            "name" => "Italian",
                            "native" => "Italiano"
                        ]
                    ],
                    "country_flag" => "https://assets.ipstack.com/flags/ch.svg",
                    "country_flag_emoji" => "🇨🇭",
                    "country_flag_emoji_unicode" => "U+1F1E8 U+1F1ED",
                    "calling_code" => "41",
                    "is_eu" => false
                ]
            ]
        ]);

        return $jayParsedAry->where('ip','=',$ip)->first();
    }

}
