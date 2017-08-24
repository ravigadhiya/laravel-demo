<?php

use Illuminate\Database\Seeder;
use App\Countries;
class CountireTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = array(
            array('countrycode' => 'US', 'countryname' => 'United States'),
            array('countrycode' => 'CA', 'countryname' => 'Canada'),
            array('countrycode' => 'AF', 'countryname' => 'Afghanistan'),
            array('countrycode' => 'AL', 'countryname' => 'Albania'),
            array('countrycode' => 'DZ', 'countryname' => 'Algeria'),
            array('countrycode' => 'AS', 'countryname' => 'American Samoa'),
            array('countrycode' => 'AD', 'countryname' => 'Andorra'),
            array('countrycode' => 'AO', 'countryname' => 'Angola'),
            array('countrycode' => 'AI', 'countryname' => 'Anguilla'),
            array('countrycode' => 'AQ', 'countryname' => 'Antarctica'),
            array('countrycode' => 'AG', 'countryname' => 'Antigua and/or Barbuda'),
            array('countrycode' => 'AR', 'countryname' => 'Argentina'),
            array('countrycode' => 'AM', 'countryname' => 'Armenia'),
            array('countrycode' => 'AW', 'countryname' => 'Aruba'),
            array('countrycode' => 'AU', 'countryname' => 'Australia'),
            array('countrycode' => 'AT', 'countryname' => 'Austria'),
            array('countrycode' => 'AZ', 'countryname' => 'Azerbaijan'),
            array('countrycode' => 'BS', 'countryname' => 'Bahamas'),
            array('countrycode' => 'BH', 'countryname' => 'Bahrain'),
            array('countrycode' => 'BD', 'countryname' => 'Bangladesh'),
            array('countrycode' => 'BB', 'countryname' => 'Barbados'),
            array('countrycode' => 'BY', 'countryname' => 'Belarus'),
            array('countrycode' => 'BE', 'countryname' => 'Belgium'),
            array('countrycode' => 'BZ', 'countryname' => 'Belize'),
            array('countrycode' => 'BJ', 'countryname' => 'Benin'),
            array('countrycode' => 'BM', 'countryname' => 'Bermuda'),
            array('countrycode' => 'BT', 'countryname' => 'Bhutan'),
            array('countrycode' => 'BO', 'countryname' => 'Bolivia'),
            array('countrycode' => 'BA', 'countryname' => 'Bosnia and Herzegovina'),
            array('countrycode' => 'BW', 'countryname' => 'Botswana'),
            array('countrycode' => 'BV', 'countryname' => 'Bouvet Island'),
            array('countrycode' => 'BR', 'countryname' => 'Brazil'),
            array('countrycode' => 'IO', 'countryname' => 'British lndian Ocean Territory'),
            array('countrycode' => 'BN', 'countryname' => 'Brunei Darussalam'),
            array('countrycode' => 'BG', 'countryname' => 'Bulgaria'),
            array('countrycode' => 'BF', 'countryname' => 'Burkina Faso'),
            array('countrycode' => 'BI', 'countryname' => 'Burundi'),
            array('countrycode' => 'KH', 'countryname' => 'Cambodia'),
            array('countrycode' => 'CM', 'countryname' => 'Cameroon'),
            array('countrycode' => 'CV', 'countryname' => 'Cape Verde'),
            array('countrycode' => 'KY', 'countryname' => 'Cayman Islands'),
            array('countrycode' => 'CF', 'countryname' => 'Central African Republic'),
            array('countrycode' => 'TD', 'countryname' => 'Chad'),
            array('countrycode' => 'CL', 'countryname' => 'Chile'),
            array('countrycode' => 'CN', 'countryname' => 'China'),
            array('countrycode' => 'CX', 'countryname' => 'Christmas Island'),
            array('countrycode' => 'CC', 'countryname' => 'Cocos (Keeling) Islands'),
            array('countrycode' => 'CO', 'countryname' => 'Colombia'),
            array('countrycode' => 'KM', 'countryname' => 'Comoros'),
            array('countrycode' => 'CG', 'countryname' => 'Congo'),
            array('countrycode' => 'CK', 'countryname' => 'Cook Islands'),
            array('countrycode' => 'CR', 'countryname' => 'Costa Rica'),
            array('countrycode' => 'HR', 'countryname' => 'Croatia (Hrvatska)'),
            array('countrycode' => 'CU', 'countryname' => 'Cuba'),
            array('countrycode' => 'CY', 'countryname' => 'Cyprus'),
            array('countrycode' => 'CZ', 'countryname' => 'Czech Republic'),
            array('countrycode' => 'CD', 'countryname' => 'Democratic Republic of Congo'),
            array('countrycode' => 'DK', 'countryname' => 'Denmark'),
            array('countrycode' => 'DJ', 'countryname' => 'Djibouti'),
            array('countrycode' => 'DM', 'countryname' => 'Dominica'),
            array('countrycode' => 'DO', 'countryname' => 'Dominican Republic'),
            array('countrycode' => 'TP', 'countryname' => 'East Timor'),
            array('countrycode' => 'EC', 'countryname' => 'Ecudaor'),
            array('countrycode' => 'EG', 'countryname' => 'Egypt'),
            array('countrycode' => 'SV', 'countryname' => 'El Salvador'),
            array('countrycode' => 'GQ', 'countryname' => 'Equatorial Guinea'),
            array('countrycode' => 'ER', 'countryname' => 'Eritrea'),
            array('countrycode' => 'EE', 'countryname' => 'Estonia'),
            array('countrycode' => 'ET', 'countryname' => 'Ethiopia'),
            array('countrycode' => 'FK', 'countryname' => 'Falkland Islands (Malvinas)'),
            array('countrycode' => 'FO', 'countryname' => 'Faroe Islands'),
            array('countrycode' => 'FJ', 'countryname' => 'Fiji'),
            array('countrycode' => 'FI', 'countryname' => 'Finland'),
            array('countrycode' => 'FR', 'countryname' => 'France'),
            array('countrycode' => 'FX', 'countryname' => 'France, Metropolitan'),
            array('countrycode' => 'GF', 'countryname' => 'French Guiana'),
            array('countrycode' => 'PF', 'countryname' => 'French Polynesia'),
            array('countrycode' => 'TF', 'countryname' => 'French Southern Territories'),
            array('countrycode' => 'GA', 'countryname' => 'Gabon'),
            array('countrycode' => 'GM', 'countryname' => 'Gambia'),
            array('countrycode' => 'GE', 'countryname' => 'Georgia'),
            array('countrycode' => 'DE', 'countryname' => 'Germany'),
            array('countrycode' => 'GH', 'countryname' => 'Ghana'),
            array('countrycode' => 'GI', 'countryname' => 'Gibraltar'),
            array('countrycode' => 'GR', 'countryname' => 'Greece'),
            array('countrycode' => 'GL', 'countryname' => 'Greenland'),
            array('countrycode' => 'GD', 'countryname' => 'Grenada'),
            array('countrycode' => 'GP', 'countryname' => 'Guadeloupe'),
            array('countrycode' => 'GU', 'countryname' => 'Guam'),
            array('countrycode' => 'GT', 'countryname' => 'Guatemala'),
            array('countrycode' => 'GN', 'countryname' => 'Guinea'),
            array('countrycode' => 'GW', 'countryname' => 'Guinea-Bissau'),
            array('countrycode' => 'GY', 'countryname' => 'Guyana'),
            array('countrycode' => 'HT', 'countryname' => 'Haiti'),
            array('countrycode' => 'HM', 'countryname' => 'Heard and Mc Donald Islands'),
            array('countrycode' => 'HN', 'countryname' => 'Honduras'),
            array('countrycode' => 'HK', 'countryname' => 'Hong Kong'),
            array('countrycode' => 'HU', 'countryname' => 'Hungary'),
            array('countrycode' => 'IS', 'countryname' => 'Iceland'),
            array('countrycode' => 'IN', 'countryname' => 'India'),
            array('countrycode' => 'ID', 'countryname' => 'Indonesia'),
            array('countrycode' => 'IR', 'countryname' => 'Iran (Islamic Republic of)'),
            array('countrycode' => 'IQ', 'countryname' => 'Iraq'),
            array('countrycode' => 'IE', 'countryname' => 'Ireland'),
            array('countrycode' => 'IL', 'countryname' => 'Israel'),
            array('countrycode' => 'IT', 'countryname' => 'Italy'),
            array('countrycode' => 'CI', 'countryname' => 'Ivory Coast'),
            array('countrycode' => 'JM', 'countryname' => 'Jamaica'),
            array('countrycode' => 'JP', 'countryname' => 'Japan'),
            array('countrycode' => 'JO', 'countryname' => 'Jordan'),
            array('countrycode' => 'KZ', 'countryname' => 'Kazakhstan'),
            array('countrycode' => 'KE', 'countryname' => 'Kenya'),
            array('countrycode' => 'KI', 'countryname' => 'Kiribati'),
            array('countrycode' => 'KP', 'countryname' => 'Korea, Democratic People\'s Republic of'),
            array('countrycode' => 'KR', 'countryname' => 'Korea, Republic of'),
            array('countrycode' => 'KW', 'countryname' => 'Kuwait'),
            array('countrycode' => 'KG', 'countryname' => 'Kyrgyzstan'),
            array('countrycode' => 'LA', 'countryname' => 'Lao People\'s Democratic Republic'),
            array('countrycode' => 'LV', 'countryname' => 'Latvia'),
            array('countrycode' => 'LB', 'countryname' => 'Lebanon'),
            array('countrycode' => 'LS', 'countryname' => 'Lesotho'),
            array('countrycode' => 'LR', 'countryname' => 'Liberia'),
            array('countrycode' => 'LY', 'countryname' => 'Libyan Arab Jamahiriya'),
            array('countrycode' => 'LI', 'countryname' => 'Liechtenstein'),
            array('countrycode' => 'LT', 'countryname' => 'Lithuania'),
            array('countrycode' => 'LU', 'countryname' => 'Luxembourg'),
            array('countrycode' => 'MO', 'countryname' => 'Macau'),
            array('countrycode' => 'MK', 'countryname' => 'Macedonia'),
            array('countrycode' => 'MG', 'countryname' => 'Madagascar'),
            array('countrycode' => 'MW', 'countryname' => 'Malawi'),
            array('countrycode' => 'MY', 'countryname' => 'Malaysia'),
            array('countrycode' => 'MV', 'countryname' => 'Maldives'),
            array('countrycode' => 'ML', 'countryname' => 'Mali'),
            array('countrycode' => 'MT', 'countryname' => 'Malta'),
            array('countrycode' => 'MH', 'countryname' => 'Marshall Islands'),
            array('countrycode' => 'MQ', 'countryname' => 'Martinique'),
            array('countrycode' => 'MR', 'countryname' => 'Mauritania'),
            array('countrycode' => 'MU', 'countryname' => 'Mauritius'),
            array('countrycode' => 'TY', 'countryname' => 'Mayotte'),
            array('countrycode' => 'MX', 'countryname' => 'Mexico'),
            array('countrycode' => 'FM', 'countryname' => 'Micronesia, Federated States of'),
            array('countrycode' => 'MD', 'countryname' => 'Moldova, Republic of'),
            array('countrycode' => 'MC', 'countryname' => 'Monaco'),
            array('countrycode' => 'MN', 'countryname' => 'Mongolia'),
            array('countrycode' => 'MS', 'countryname' => 'Montserrat'),
            array('countrycode' => 'MA', 'countryname' => 'Morocco'),
            array('countrycode' => 'MZ', 'countryname' => 'Mozambique'),
            array('countrycode' => 'MM', 'countryname' => 'Myanmar'),
            array('countrycode' => 'NA', 'countryname' => 'Namibia'),
            array('countrycode' => 'NR', 'countryname' => 'Nauru'),
            array('countrycode' => 'NP', 'countryname' => 'Nepal'),
            array('countrycode' => 'NL', 'countryname' => 'Netherlands'),
            array('countrycode' => 'AN', 'countryname' => 'Netherlands Antilles'),
            array('countrycode' => 'NC', 'countryname' => 'New Caledonia'),
            array('countrycode' => 'NZ', 'countryname' => 'New Zealand'),
            array('countrycode' => 'NI', 'countryname' => 'Nicaragua'),
            array('countrycode' => 'NE', 'countryname' => 'Niger'),
            array('countrycode' => 'NG', 'countryname' => 'Nigeria'),
            array('countrycode' => 'NU', 'countryname' => 'Niue'),
            array('countrycode' => 'NF', 'countryname' => 'Norfork Island'),
            array('countrycode' => 'MP', 'countryname' => 'Northern Mariana Islands'),
            array('countrycode' => 'NO', 'countryname' => 'Norway'),
            array('countrycode' => 'OM', 'countryname' => 'Oman'),
            array('countrycode' => 'PK', 'countryname' => 'Pakistan'),
            array('countrycode' => 'PW', 'countryname' => 'Palau'),
            array('countrycode' => 'PA', 'countryname' => 'Panama'),
            array('countrycode' => 'PG', 'countryname' => 'Papua New Guinea'),
            array('countrycode' => 'PY', 'countryname' => 'Paraguay'),
            array('countrycode' => 'PE', 'countryname' => 'Peru'),
            array('countrycode' => 'PH', 'countryname' => 'Philippines'),
            array('countrycode' => 'PN', 'countryname' => 'Pitcairn'),
            array('countrycode' => 'PL', 'countryname' => 'Poland'),
            array('countrycode' => 'PT', 'countryname' => 'Portugal'),
            array('countrycode' => 'PR', 'countryname' => 'Puerto Rico'),
            array('countrycode' => 'QA', 'countryname' => 'Qatar'),
            array('countrycode' => 'SS', 'countryname' => 'Republic of South Sudan'),
            array('countrycode' => 'RE', 'countryname' => 'Reunion'),
            array('countrycode' => 'RO', 'countryname' => 'Romania'),
            array('countrycode' => 'RU', 'countryname' => 'Russian Federation'),
            array('countrycode' => 'RW', 'countryname' => 'Rwanda'),
            array('countrycode' => 'KN', 'countryname' => 'Saint Kitts and Nevis'),
            array('countrycode' => 'LC', 'countryname' => 'Saint Lucia'),
            array('countrycode' => 'VC', 'countryname' => 'Saint Vincent and the Grenadines'),
            array('countrycode' => 'WS', 'countryname' => 'Samoa'),
            array('countrycode' => 'SM', 'countryname' => 'San Marino'),
            array('countrycode' => 'ST', 'countryname' => 'Sao Tome and Principe'),
            array('countrycode' => 'SA', 'countryname' => 'Saudi Arabia'),
            array('countrycode' => 'SN', 'countryname' => 'Senegal'),
            array('countrycode' => 'RS', 'countryname' => 'Serbia'),
            array('countrycode' => 'SC', 'countryname' => 'Seychelles'),
            array('countrycode' => 'SL', 'countryname' => 'Sierra Leone'),
            array('countrycode' => 'SG', 'countryname' => 'Singapore'),
            array('countrycode' => 'SK', 'countryname' => 'Slovakia'),
            array('countrycode' => 'SI', 'countryname' => 'Slovenia'),
            array('countrycode' => 'SB', 'countryname' => 'Solomon Islands'),
            array('countrycode' => 'SO', 'countryname' => 'Somalia'),
            array('countrycode' => 'ZA', 'countryname' => 'South Africa'),
            array('countrycode' => 'GS', 'countryname' => 'South Georgia South Sandwich Islands'),
            array('countrycode' => 'ES', 'countryname' => 'Spain'),
            array('countrycode' => 'LK', 'countryname' => 'Sri Lanka'),
            array('countrycode' => 'SH', 'countryname' => 'St. Helena'),
            array('countrycode' => 'PM', 'countryname' => 'St. Pierre and Miquelon'),
            array('countrycode' => 'SD', 'countryname' => 'Sudan'),
            array('countrycode' => 'SR', 'countryname' => 'Suricountryname'),
            array('countrycode' => 'SJ', 'countryname' => 'Svalbarn and Jan Mayen Islands'),
            array('countrycode' => 'SZ', 'countryname' => 'Swaziland'),
            array('countrycode' => 'SE', 'countryname' => 'Sweden'),
            array('countrycode' => 'CH', 'countryname' => 'Switzerland'),
            array('countrycode' => 'SY', 'countryname' => 'Syrian Arab Republic'),
            array('countrycode' => 'TW', 'countryname' => 'Taiwan'),
            array('countrycode' => 'TJ', 'countryname' => 'Tajikistan'),
            array('countrycode' => 'TZ', 'countryname' => 'Tanzania, United Republic of'),
            array('countrycode' => 'TH', 'countryname' => 'Thailand'),
            array('countrycode' => 'TG', 'countryname' => 'Togo'),
            array('countrycode' => 'TK', 'countryname' => 'Tokelau'),
            array('countrycode' => 'TO', 'countryname' => 'Tonga'),
            array('countrycode' => 'TT', 'countryname' => 'Trinidad and Tobago'),
            array('countrycode' => 'TN', 'countryname' => 'Tunisia'),
            array('countrycode' => 'TR', 'countryname' => 'Turkey'),
            array('countrycode' => 'TM', 'countryname' => 'Turkmenistan'),
            array('countrycode' => 'TC', 'countryname' => 'Turks and Caicos Islands'),
            array('countrycode' => 'TV', 'countryname' => 'Tuvalu'),
            array('countrycode' => 'UG', 'countryname' => 'Uganda'),
            array('countrycode' => 'UA', 'countryname' => 'Ukraine'),
            array('countrycode' => 'AE', 'countryname' => 'United Arab Emirates'),
            array('countrycode' => 'GB', 'countryname' => 'United Kingdom'),
            array('countrycode' => 'UM', 'countryname' => 'United States minor outlying islands'),
            array('countrycode' => 'UY', 'countryname' => 'Uruguay'),
            array('countrycode' => 'UZ', 'countryname' => 'Uzbekistan'),
            array('countrycode' => 'VU', 'countryname' => 'Vanuatu'),
            array('countrycode' => 'VA', 'countryname' => 'Vatican City State'),
            array('countrycode' => 'VE', 'countryname' => 'Venezuela'),
            array('countrycode' => 'VN', 'countryname' => 'Vietnam'),
            array('countrycode' => 'VG', 'countryname' => 'Virgin Islands (British)'),
            array('countrycode' => 'VI', 'countryname' => 'Virgin Islands (U.S.)'),
            array('countrycode' => 'WF', 'countryname' => 'Wallis and Futuna Islands'),
            array('countrycode' => 'EH', 'countryname' => 'Western Sahara'),
            array('countrycode' => 'YE', 'countryname' => 'Yemen'),
            array('countrycode' => 'YU', 'countryname' => 'Yugoslavia'),
            array('countrycode' => 'ZR', 'countryname' => 'Zaire'),
            array('countrycode' => 'ZM', 'countryname' => 'Zambia'),
            array('countrycode' => 'ZW', 'countryname' => 'Zimbabwe'),
        );
        Countries::insert($countries);
    }
}
