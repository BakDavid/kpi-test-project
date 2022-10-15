<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->truncate();

        $countries =
            [
                [
                    "sortname" => "AF",
                    "name" => "Afghanistan",
                    "phoneCode" => 93
                ],
                [
                    "sortname" => "AL",
                    "name" => "Albania",
                    "phoneCode" => 355
                ],
                [
                    "sortname" => "DZ",
                    "name" => "Algeria",
                    "phoneCode" => 213
                ],
                [
                    "sortname" => "AS",
                    "name" => "American Samoa",
                    "phoneCode" => 1684
                ],
                [
                    "sortname" => "AD",
                    "name" => "Andorra",
                    "phoneCode" => 376
                ],
                [
                    "sortname" => "AO",
                    "name" => "Angola",
                    "phoneCode" => 244
                ],
                [
                    "sortname" => "AI",
                    "name" => "Anguilla",
                    "phoneCode" => 1264
                ],
                [
                    "sortname" => "AQ",
                    "name" => "Antarctica",
                    "phoneCode" => 0
                ],
                [
                    "sortname" => "AG",
                    "name" => "Antigua And Barbuda",
                    "phoneCode" => 1268
                ],
                [
                    "sortname" => "AR",
                    "name" => "Argentina",
                    "phoneCode" => 54
                ],
                [
                    "sortname" => "AM",
                    "name" => "Armenia",
                    "phoneCode" => 374
                ],
                [
                    "sortname" => "AW",
                    "name" => "Aruba",
                    "phoneCode" => 297
                ],
                [
                    "sortname" => "AU",
                    "name" => "Australia",
                    "phoneCode" => 61
                ],
                [
                    "sortname" => "AT",
                    "name" => "Austria",
                    "phoneCode" => 43
                ],
                [
                    "sortname" => "AZ",
                    "name" => "Azerbaijan",
                    "phoneCode" => 994
                ],
                [
                    "sortname" => "BS",
                    "name" => "Bahamas The",
                    "phoneCode" => 1242
                ],
                [
                    "sortname" => "BH",
                    "name" => "Bahrain",
                    "phoneCode" => 973
                ],
                [
                    "sortname" => "BD",
                    "name" => "Bangladesh",
                    "phoneCode" => 880
                ],
                [
                    "sortname" => "BB",
                    "name" => "Barbados",
                    "phoneCode" => 1246
                ],
                [
                    "sortname" => "BY",
                    "name" => "Belarus",
                    "phoneCode" => 375
                ],
                [
                    "sortname" => "BE",
                    "name" => "Belgium",
                    "phoneCode" => 32
                ],
                [
                    "sortname" => "BZ",
                    "name" => "Belize",
                    "phoneCode" => 501
                ],
                [
                    "sortname" => "BJ",
                    "name" => "Benin",
                    "phoneCode" => 229
                ],
                [
                    "sortname" => "BM",
                    "name" => "Bermuda",
                    "phoneCode" => 1441
                ],
                [
                    "sortname" => "BT",
                    "name" => "Bhutan",
                    "phoneCode" => 975
                ],
                [
                    "sortname" => "BO",
                    "name" => "Bolivia",
                    "phoneCode" => 591
                ],
                [
                    "sortname" => "BA",
                    "name" => "Bosnia and Herzegovina",
                    "phoneCode" => 387
                ],
                [
                    "sortname" => "BW",
                    "name" => "Botswana",
                    "phoneCode" => 267
                ],
                [
                    "sortname" => "BV",
                    "name" => "Bouvet Island",
                    "phoneCode" => 0
                ],
                [
                    "sortname" => "BR",
                    "name" => "Brazil",
                    "phoneCode" => 55
                ],
                [
                    "sortname" => "IO",
                    "name" => "British Indian Ocean Territory",
                    "phoneCode" => 246
                ],
                [
                    "sortname" => "BN",
                    "name" => "Brunei",
                    "phoneCode" => 673
                ],
                [
                    "sortname" => "BG",
                    "name" => "Bulgaria",
                    "phoneCode" => 359
                ],
                [
                    "sortname" => "BF",
                    "name" => "Burkina Faso",
                    "phoneCode" => 226
                ],
                [
                    "sortname" => "BI",
                    "name" => "Burundi",
                    "phoneCode" => 257
                ],
                [
                    "sortname" => "KH",
                    "name" => "Cambodia",
                    "phoneCode" => 855
                ],
                [
                    "sortname" => "CM",
                    "name" => "Cameroon",
                    "phoneCode" => 237
                ],
                [
                    "sortname" => "CA",
                    "name" => "Canada",
                    "phoneCode" => 1
                ],
                [
                    "sortname" => "CV",
                    "name" => "Cape Verde",
                    "phoneCode" => 238
                ],
                [
                    "sortname" => "KY",
                    "name" => "Cayman Islands",
                    "phoneCode" => 1345
                ],
                [
                    "sortname" => "CF",
                    "name" => "Central African Republic",
                    "phoneCode" => 236
                ],
                [
                    "sortname" => "TD",
                    "name" => "Chad",
                    "phoneCode" => 235
                ],
                [
                    "sortname" => "CL",
                    "name" => "Chile",
                    "phoneCode" => 56
                ],
                [
                    "sortname" => "CN",
                    "name" => "China",
                    "phoneCode" => 86
                ],
                [
                    "sortname" => "CX",
                    "name" => "Christmas Island",
                    "phoneCode" => 61
                ],
                [
                    "sortname" => "CC",
                    "name" => "Cocos (Keeling) Islands",
                    "phoneCode" => 672
                ],
                [
                    "sortname" => "CO",
                    "name" => "Colombia",
                    "phoneCode" => 57
                ],
                [
                    "sortname" => "KM",
                    "name" => "Comoros",
                    "phoneCode" => 269
                ],
                [
                    "sortname" => "CG",
                    "name" => "Republic Of The Congo",
                    "phoneCode" => 242
                ],
                [
                    "sortname" => "CD",
                    "name" => "Democratic Republic Of The Congo",
                    "phoneCode" => 242
                ],
                [
                    "sortname" => "CK",
                    "name" => "Cook Islands",
                    "phoneCode" => 682
                ],
                [
                    "sortname" => "CR",
                    "name" => "Costa Rica",
                    "phoneCode" => 506
                ],
                [
                    "sortname" => "CI",
                    "name" => "Cote D''Ivoire (Ivory Coast)",
                    "phoneCode" => 225
                ],
                [
                    "sortname" => "HR",
                    "name" => "Croatia (Hrvatska)",
                    "phoneCode" => 385
                ],
                [
                    "sortname" => "CU",
                    "name" => "Cuba",
                    "phoneCode" => 53
                ],
                [
                    "sortname" => "CY",
                    "name" => "Cyprus",
                    "phoneCode" => 357
                ],
                [
                    "sortname" => "CZ",
                    "name" => "Czech Republic",
                    "phoneCode" => 420
                ],
                [
                    "sortname" => "DK",
                    "name" => "Denmark",
                    "phoneCode" => 45
                ],
                [
                    "sortname" => "DJ",
                    "name" => "Djibouti",
                    "phoneCode" => 253
                ],
                [
                    "sortname" => "DM",
                    "name" => "Dominica",
                    "phoneCode" => 1767
                ],
                [
                    "sortname" => "DO",
                    "name" => "Dominican Republic",
                    "phoneCode" => 1809
                ],
                [
                    "sortname" => "TP",
                    "name" => "East Timor",
                    "phoneCode" => 670
                ],
                [
                    "sortname" => "EC",
                    "name" => "Ecuador",
                    "phoneCode" => 593
                ],
                [
                    "sortname" => "EG",
                    "name" => "Egypt",
                    "phoneCode" => 20
                ],
                [
                    "sortname" => "SV",
                    "name" => "El Salvador",
                    "phoneCode" => 503
                ],
                [
                    "sortname" => "GQ",
                    "name" => "Equatorial Guinea",
                    "phoneCode" => 240
                ],
                [
                    "sortname" => "ER",
                    "name" => "Eritrea",
                    "phoneCode" => 291
                ],
                [
                    "sortname" => "EE",
                    "name" => "Estonia",
                    "phoneCode" => 372
                ],
                [
                    "sortname" => "ET",
                    "name" => "Ethiopia",
                    "phoneCode" => 251
                ],
                [
                    "sortname" => "XA",
                    "name" => "External Territories of Australia",
                    "phoneCode" => 61
                ],
                [
                    "sortname" => "FK",
                    "name" => "Falkland Islands",
                    "phoneCode" => 500
                ],
                [
                    "sortname" => "FO",
                    "name" => "Faroe Islands",
                    "phoneCode" => 298
                ],
                [
                    "sortname" => "FJ",
                    "name" => "Fiji Islands",
                    "phoneCode" => 679
                ],
                [
                    "sortname" => "FI",
                    "name" => "Finland",
                    "phoneCode" => 358
                ],
                [
                    "sortname" => "FR",
                    "name" => "France",
                    "phoneCode" => 33
                ],
                [
                    "sortname" => "GF",
                    "name" => "French Guiana",
                    "phoneCode" => 594
                ],
                [
                    "sortname" => "PF",
                    "name" => "French Polynesia",
                    "phoneCode" => 689
                ],
                [
                    "sortname" => "TF",
                    "name" => "French Southern Territories",
                    "phoneCode" => 0
                ],
                [
                    "sortname" => "GA",
                    "name" => "Gabon",
                    "phoneCode" => 241
                ],
                [
                    "sortname" => "GM",
                    "name" => "Gambia The",
                    "phoneCode" => 220
                ],
                [
                    "sortname" => "GE",
                    "name" => "Georgia",
                    "phoneCode" => 995
                ],
                [
                    "sortname" => "DE",
                    "name" => "Germany",
                    "phoneCode" => 49
                ],
                [
                    "sortname" => "GH",
                    "name" => "Ghana",
                    "phoneCode" => 233
                ],
                [
                    "sortname" => "GI",
                    "name" => "Gibraltar",
                    "phoneCode" => 350
                ],
                [
                    "sortname" => "GR",
                    "name" => "Greece",
                    "phoneCode" => 30
                ],
                [
                    "sortname" => "GL",
                    "name" => "Greenland",
                    "phoneCode" => 299
                ],
                [
                    "sortname" => "GD",
                    "name" => "Grenada",
                    "phoneCode" => 1473
                ],
                [
                    "sortname" => "GP",
                    "name" => "Guadeloupe",
                    "phoneCode" => 590
                ],
                [
                    "sortname" => "GU",
                    "name" => "Guam",
                    "phoneCode" => 1671
                ],
                [
                    "sortname" => "GT",
                    "name" => "Guatemala",
                    "phoneCode" => 502
                ],
                [
                    "sortname" => "XU",
                    "name" => "Guernsey and Alderney",
                    "phoneCode" => 44
                ],
                [
                    "sortname" => "GN",
                    "name" => "Guinea",
                    "phoneCode" => 224
                ],
                [
                    "sortname" => "GW",
                    "name" => "Guinea-Bissau",
                    "phoneCode" => 245
                ],
                [
                    "sortname" => "GY",
                    "name" => "Guyana",
                    "phoneCode" => 592
                ],
                [
                    "sortname" => "HT",
                    "name" => "Haiti",
                    "phoneCode" => 509
                ],
                [
                    "sortname" => "HM",
                    "name" => "Heard and McDonald Islands",
                    "phoneCode" => 0
                ],
                [
                    "sortname" => "HN",
                    "name" => "Honduras",
                    "phoneCode" => 504
                ],
                [
                    "sortname" => "HK",
                    "name" => "Hong Kong S.A.R.",
                    "phoneCode" => 852
                ],
                [
                    "sortname" => "HU",
                    "name" => "Hungary",
                    "phoneCode" => 36
                ],
                [
                    "sortname" => "IS",
                    "name" => "Iceland",
                    "phoneCode" => 354
                ],
                [
                    "sortname" => "IN",
                    "name" => "India",
                    "phoneCode" => 91
                ],
                [
                    "sortname" => "ID",
                    "name" => "Indonesia",
                    "phoneCode" => 62
                ],
                [
                    "sortname" => "IR",
                    "name" => "Iran",
                    "phoneCode" => 98
                ],
                [
                    "sortname" => "IQ",
                    "name" => "Iraq",
                    "phoneCode" => 964
                ],
                [
                    "sortname" => "IE",
                    "name" => "Ireland",
                    "phoneCode" => 353
                ],
                [
                    "sortname" => "IL",
                    "name" => "Israel",
                    "phoneCode" => 972
                ],
                [
                    "sortname" => "IT",
                    "name" => "Italy",
                    "phoneCode" => 39
                ],
                [
                    "sortname" => "JM",
                    "name" => "Jamaica",
                    "phoneCode" => 1876
                ],
                [
                    "sortname" => "JP",
                    "name" => "Japan",
                    "phoneCode" => 81
                ],
                [
                    "sortname" => "XJ",
                    "name" => "Jersey",
                    "phoneCode" => 44
                ],
                [
                    "sortname" => "JO",
                    "name" => "Jordan",
                    "phoneCode" => 962
                ],
                [
                    "sortname" => "KZ",
                    "name" => "Kazakhstan",
                    "phoneCode" => 7
                ],
                [
                    "sortname" => "KE",
                    "name" => "Kenya",
                    "phoneCode" => 254
                ],
                [
                    "sortname" => "KI",
                    "name" => "Kiribati",
                    "phoneCode" => 686
                ],
                [
                    "sortname" => "KP",
                    "name" => "Korea North",
                    "phoneCode" => 850
                ],
                [
                    "sortname" => "KR",
                    "name" => "Korea South",
                    "phoneCode" => 82
                ],
                [
                    "sortname" => "KW",
                    "name" => "Kuwait",
                    "phoneCode" => 965
                ],
                [
                    "sortname" => "KG",
                    "name" => "Kyrgyzstan",
                    "phoneCode" => 996
                ],
                [
                    "sortname" => "LA",
                    "name" => "Laos",
                    "phoneCode" => 856
                ],
                [
                    "sortname" => "LV",
                    "name" => "Latvia",
                    "phoneCode" => 371
                ],
                [
                    "sortname" => "LB",
                    "name" => "Lebanon",
                    "phoneCode" => 961
                ],
                [
                    "sortname" => "LS",
                    "name" => "Lesotho",
                    "phoneCode" => 266
                ],
                [
                    "sortname" => "LR",
                    "name" => "Liberia",
                    "phoneCode" => 231
                ],
                [
                    "sortname" => "LY",
                    "name" => "Libya",
                    "phoneCode" => 218
                ],
                [
                    "sortname" => "LI",
                    "name" => "Liechtenstein",
                    "phoneCode" => 423
                ],
                [
                    "sortname" => "LT",
                    "name" => "Lithuania",
                    "phoneCode" => 370
                ],
                [
                    "sortname" => "LU",
                    "name" => "Luxembourg",
                    "phoneCode" => 352
                ],
                [
                    "sortname" => "MO",
                    "name" => "Macau S.A.R.",
                    "phoneCode" => 853
                ],
                [
                    "sortname" => "MK",
                    "name" => "Macedonia",
                    "phoneCode" => 389
                ],
                [
                    "sortname" => "MG",
                    "name" => "Madagascar",
                    "phoneCode" => 261
                ],
                [
                    "sortname" => "MW",
                    "name" => "Malawi",
                    "phoneCode" => 265
                ],
                [
                    "sortname" => "MY",
                    "name" => "Malaysia",
                    "phoneCode" => 60
                ],
                [
                    "sortname" => "MV",
                    "name" => "Maldives",
                    "phoneCode" => 960
                ],
                [
                    "sortname" => "ML",
                    "name" => "Mali",
                    "phoneCode" => 223
                ],
                [
                    "sortname" => "MT",
                    "name" => "Malta",
                    "phoneCode" => 356
                ],
                [
                    "sortname" => "XM",
                    "name" => "Man (Isle of)",
                    "phoneCode" => 44
                ],
                [
                    "sortname" => "MH",
                    "name" => "Marshall Islands",
                    "phoneCode" => 692
                ],
                [
                    "sortname" => "MQ",
                    "name" => "Martinique",
                    "phoneCode" => 596
                ],
                [
                    "sortname" => "MR",
                    "name" => "Mauritania",
                    "phoneCode" => 222
                ],
                [
                    "sortname" => "MU",
                    "name" => "Mauritius",
                    "phoneCode" => 230
                ],
                [
                    "sortname" => "YT",
                    "name" => "Mayotte",
                    "phoneCode" => 269
                ],
                [
                    "sortname" => "MX",
                    "name" => "Mexico",
                    "phoneCode" => 52
                ],
                [
                    "sortname" => "FM",
                    "name" => "Micronesia",
                    "phoneCode" => 691
                ],
                [
                    "sortname" => "MD",
                    "name" => "Moldova",
                    "phoneCode" => 373
                ],
                [
                    "sortname" => "MC",
                    "name" => "Monaco",
                    "phoneCode" => 377
                ],
                [
                    "sortname" => "MN",
                    "name" => "Mongolia",
                    "phoneCode" => 976
                ],
                [
                    "sortname" => "MS",
                    "name" => "Montserrat",
                    "phoneCode" => 1664
                ],
                [
                    "sortname" => "MA",
                    "name" => "Morocco",
                    "phoneCode" => 212
                ],
                [
                    "sortname" => "MZ",
                    "name" => "Mozambique",
                    "phoneCode" => 258
                ],
                [
                    "sortname" => "MM",
                    "name" => "Myanmar",
                    "phoneCode" => 95
                ],
                [
                    "sortname" => "NA",
                    "name" => "Namibia",
                    "phoneCode" => 264
                ],
                [
                    "sortname" => "NR",
                    "name" => "Nauru",
                    "phoneCode" => 674
                ],
                [
                    "sortname" => "NP",
                    "name" => "Nepal",
                    "phoneCode" => 977
                ],
                [
                    "sortname" => "AN",
                    "name" => "Netherlands Antilles",
                    "phoneCode" => 599
                ],
                [
                    "sortname" => "NL",
                    "name" => "Netherlands The",
                    "phoneCode" => 31
                ],
                [
                    "sortname" => "NC",
                    "name" => "New Caledonia",
                    "phoneCode" => 687
                ],
                [
                    "sortname" => "NZ",
                    "name" => "New Zealand",
                    "phoneCode" => 64
                ],
                [
                    "sortname" => "NI",
                    "name" => "Nicaragua",
                    "phoneCode" => 505
                ],
                [
                    "sortname" => "NE",
                    "name" => "Niger",
                    "phoneCode" => 227
                ],
                [
                    "sortname" => "NG",
                    "name" => "Nigeria",
                    "phoneCode" => 234
                ],
                [
                    "sortname" => "NU",
                    "name" => "Niue",
                    "phoneCode" => 683
                ],
                [
                    "sortname" => "NF",
                    "name" => "Norfolk Island",
                    "phoneCode" => 672
                ],
                [
                    "sortname" => "MP",
                    "name" => "Northern Mariana Islands",
                    "phoneCode" => 1670
                ],
                [
                    "sortname" => "NO",
                    "name" => "Norway",
                    "phoneCode" => 47
                ],
                [
                    "sortname" => "OM",
                    "name" => "Oman",
                    "phoneCode" => 968
                ],
                [
                    "sortname" => "PK",
                    "name" => "Pakistan",
                    "phoneCode" => 92
                ],
                [
                    "sortname" => "PW",
                    "name" => "Palau",
                    "phoneCode" => 680
                ],
                [
                    "sortname" => "PS",
                    "name" => "Palestinian Territory Occupied",
                    "phoneCode" => 970
                ],
                [
                    "sortname" => "PA",
                    "name" => "Panama",
                    "phoneCode" => 507
                ],
                [
                    "sortname" => "PG",
                    "name" => "Papua new Guinea",
                    "phoneCode" => 675
                ],
                [
                    "sortname" => "PY",
                    "name" => "Paraguay",
                    "phoneCode" => 595
                ],
                [
                    "sortname" => "PE",
                    "name" => "Peru",
                    "phoneCode" => 51
                ],
                [
                    "sortname" => "PH",
                    "name" => "Philippines",
                    "phoneCode" => 63
                ],
                [
                    "sortname" => "PN",
                    "name" => "Pitcairn Island",
                    "phoneCode" => 0
                ],
                [
                    "sortname" => "PL",
                    "name" => "Poland",
                    "phoneCode" => 48
                ],
                [
                    "sortname" => "PT",
                    "name" => "Portugal",
                    "phoneCode" => 351
                ],
                [
                    "sortname" => "PR",
                    "name" => "Puerto Rico",
                    "phoneCode" => 1787
                ],
                [
                    "sortname" => "QA",
                    "name" => "Qatar",
                    "phoneCode" => 974
                ],
                [
                    "sortname" => "RE",
                    "name" => "Reunion",
                    "phoneCode" => 262
                ],
                [
                    "sortname" => "RO",
                    "name" => "Romania",
                    "phoneCode" => 40
                ],
                [
                    "sortname" => "RU",
                    "name" => "Russia",
                    "phoneCode" => 70
                ],
                [
                    "sortname" => "RW",
                    "name" => "Rwanda",
                    "phoneCode" => 250
                ],
                [
                    "sortname" => "SH",
                    "name" => "Saint Helena",
                    "phoneCode" => 290
                ],
                [
                    "sortname" => "KN",
                    "name" => "Saint Kitts And Nevis",
                    "phoneCode" => 1869
                ],
                [
                    "sortname" => "LC",
                    "name" => "Saint Lucia",
                    "phoneCode" => 1758
                ],
                [
                    "sortname" => "PM",
                    "name" => "Saint Pierre and Miquelon",
                    "phoneCode" => 508
                ],
                [
                    "sortname" => "VC",
                    "name" => "Saint Vincent And The Grenadines",
                    "phoneCode" => 1784
                ],
                [
                    "sortname" => "WS",
                    "name" => "Samoa",
                    "phoneCode" => 684
                ],
                [
                    "sortname" => "SM",
                    "name" => "San Marino",
                    "phoneCode" => 378
                ],
                [
                    "sortname" => "ST",
                    "name" => "Sao Tome and Principe",
                    "phoneCode" => 239
                ],
                [
                    "sortname" => "SA",
                    "name" => "Saudi Arabia",
                    "phoneCode" => 966
                ],
                [
                    "sortname" => "SN",
                    "name" => "Senegal",
                    "phoneCode" => 221
                ],
                [
                    "sortname" => "RS",
                    "name" => "Serbia",
                    "phoneCode" => 381
                ],
                [
                    "sortname" => "SC",
                    "name" => "Seychelles",
                    "phoneCode" => 248
                ],
                [
                    "sortname" => "SL",
                    "name" => "Sierra Leone",
                    "phoneCode" => 232
                ],
                [
                    "sortname" => "SG",
                    "name" => "Singapore",
                    "phoneCode" => 65
                ],
                [
                    "sortname" => "SK",
                    "name" => "Slovakia",
                    "phoneCode" => 421
                ],
                [
                    "sortname" => "SI",
                    "name" => "Slovenia",
                    "phoneCode" => 386
                ],
                [
                    "sortname" => "XG",
                    "name" => "Smaller Territories of the UK",
                    "phoneCode" => 44
                ],
                [
                    "sortname" => "SB",
                    "name" => "Solomon Islands",
                    "phoneCode" => 677
                ],
                [
                    "sortname" => "SO",
                    "name" => "Somalia",
                    "phoneCode" => 252
                ],
                [
                    "sortname" => "ZA",
                    "name" => "South Africa",
                    "phoneCode" => 27
                ],
                [
                    "sortname" => "GS",
                    "name" => "South Georgia",
                    "phoneCode" => 0
                ],
                [
                    "sortname" => "SS",
                    "name" => "South Sudan",
                    "phoneCode" => 211
                ],
                [
                    "sortname" => "ES",
                    "name" => "Spain",
                    "phoneCode" => 34
                ],
                [
                    "sortname" => "LK",
                    "name" => "Sri Lanka",
                    "phoneCode" => 94
                ],
                [
                    "sortname" => "SD",
                    "name" => "Sudan",
                    "phoneCode" => 249
                ],
                [
                    "sortname" => "SR",
                    "name" => "Suriname",
                    "phoneCode" => 597
                ],
                [
                    "sortname" => "SJ",
                    "name" => "Svalbard And Jan Mayen Islands",
                    "phoneCode" => 47
                ],
                [
                    "sortname" => "SZ",
                    "name" => "Swaziland",
                    "phoneCode" => 268
                ],
                [
                    "sortname" => "SE",
                    "name" => "Sweden",
                    "phoneCode" => 46
                ],
                [
                    "sortname" => "CH",
                    "name" => "Switzerland",
                    "phoneCode" => 41
                ],
                [
                    "sortname" => "SY",
                    "name" => "Syria",
                    "phoneCode" => 963
                ],
                [
                    "sortname" => "TW",
                    "name" => "Taiwan",
                    "phoneCode" => 886
                ],
                [
                    "sortname" => "TJ",
                    "name" => "Tajikistan",
                    "phoneCode" => 992
                ],
                [
                    "sortname" => "TZ",
                    "name" => "Tanzania",
                    "phoneCode" => 255
                ],
                [
                    "sortname" => "TH",
                    "name" => "Thailand",
                    "phoneCode" => 66
                ],
                [
                    "sortname" => "TG",
                    "name" => "Togo",
                    "phoneCode" => 228
                ],
                [
                    "sortname" => "TK",
                    "name" => "Tokelau",
                    "phoneCode" => 690
                ],
                [
                    "sortname" => "TO",
                    "name" => "Tonga",
                    "phoneCode" => 676
                ],
                [
                    "sortname" => "TT",
                    "name" => "Trinidad And Tobago",
                    "phoneCode" => 1868
                ],
                [
                    "sortname" => "TN",
                    "name" => "Tunisia",
                    "phoneCode" => 216
                ],
                [
                    "sortname" => "TR",
                    "name" => "Turkey",
                    "phoneCode" => 90
                ],
                [
                    "sortname" => "TM",
                    "name" => "Turkmenistan",
                    "phoneCode" => 7370
                ],
                [
                    "sortname" => "TC",
                    "name" => "Turks And Caicos Islands",
                    "phoneCode" => 1649
                ],
                [
                    "sortname" => "TV",
                    "name" => "Tuvalu",
                    "phoneCode" => 688
                ],
                [
                    "sortname" => "UG",
                    "name" => "Uganda",
                    "phoneCode" => 256
                ],
                [
                    "sortname" => "UA",
                    "name" => "Ukraine",
                    "phoneCode" => 380
                ],
                [
                    "sortname" => "AE",
                    "name" => "United Arab Emirates",
                    "phoneCode" => 971
                ],
                [
                    "sortname" => "GB",
                    "name" => "United Kingdom",
                    "phoneCode" => 44
                ],
                [
                    "sortname" => "US",
                    "name" => "United States",
                    "phoneCode" => 1
                ],
                [
                    "sortname" => "UM",
                    "name" => "United States Minor Outlying Islands",
                    "phoneCode" => 1
                ],
                [
                    "sortname" => "UY",
                    "name" => "Uruguay",
                    "phoneCode" => 598
                ],
                [
                    "sortname" => "UZ",
                    "name" => "Uzbekistan",
                    "phoneCode" => 998
                ],
                [
                    "sortname" => "VU",
                    "name" => "Vanuatu",
                    "phoneCode" => 678
                ],
                [
                    "sortname" => "VA",
                    "name" => "Vatican City State (Holy See)",
                    "phoneCode" => 39
                ],
                [
                    "sortname" => "VE",
                    "name" => "Venezuela",
                    "phoneCode" => 58
                ],
                [
                    "sortname" => "VN",
                    "name" => "Vietnam",
                    "phoneCode" => 84
                ],
                [
                    "sortname" => "VG",
                    "name" => "Virgin Islands (British)",
                    "phoneCode" => 1284
                ],
                [
                    "sortname" => "VI",
                    "name" => "Virgin Islands (US)",
                    "phoneCode" => 1340
                ],
                [
                    "sortname" => "WF",
                    "name" => "Wallis And Futuna Islands",
                    "phoneCode" => 681
                ],
                [
                    "sortname" => "EH",
                    "name" => "Western Sahara",
                    "phoneCode" => 212
                ],
                [
                    "sortname" => "YE",
                    "name" => "Yemen",
                    "phoneCode" => 967
                ],
                [
                    "sortname" => "YU",
                    "name" => "Yugoslavia",
                    "phoneCode" => 38
                ],
                [
                    "sortname" => "ZM",
                    "name" => "Zambia",
                    "phoneCode" => 260
                ],
                [
                    "sortname" => "ZW",
                    "name" => "Zimbabwe",
                    "phoneCode" => 26
                ]

            ];
        Country::insert($countries);
    }
}
