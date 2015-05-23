<?php

use Conner\Addresses\Country;
use Illuminate\Database\Seeder;
class CountryTableSeeder extends Seeder {

	private $insertList = array(
		array('name'=>'Afghanistan', 'a3'=>'AFG', 'a2'=>'AF'),
		array('name'=>'Albania', 'a3'=>'ALB', 'a2'=>'AL'),
		array('name'=>'Algeria', 'a3'=>'DZA', 'a2'=>'DZ'),
		array('name'=>'American Samoa', 'a3'=>'ASM', 'a2'=>'AS'),
		array('name'=>'Andorra', 'a3'=>'AND', 'a2'=>'AD'),
		array('name'=>'Angola', 'a3'=>'AGO', 'a2'=>'AO'),
		array('name'=>'Anguilla', 'a3'=>'AIA', 'a2'=>'AI'),
		array('name'=>'Antarctica', 'a3'=>'ATA', 'a2'=>'AQ'),
		array('name'=>'Antigua and Barbuda', 'a3'=>'ATG', 'a2'=>'AG'),
		array('name'=>'Argentina', 'a3'=>'ARG', 'a2'=>'AR'),
		array('name'=>'Armenia', 'a3'=>'ARM', 'a2'=>'AM'),
		array('name'=>'Aruba', 'a3'=>'ABW', 'a2'=>'AW'),
		array('name'=>'Australia', 'a3'=>'AUS', 'a2'=>'AU'),
		array('name'=>'Austria', 'a3'=>'AUT', 'a2'=>'AT'),
		array('name'=>'Azerbaijan', 'a3'=>'AZE', 'a2'=>'AZ'),
		array('name'=>'Bahamas', 'a3'=>'BHS', 'a2'=>'BS'),
		array('name'=>'Bahrain', 'a3'=>'BHR', 'a2'=>'BH'),
		array('name'=>'Bangladesh', 'a3'=>'BGD', 'a2'=>'BD'),
		array('name'=>'Barbados', 'a3'=>'BRB', 'a2'=>'BB'),
		array('name'=>'Belarus', 'a3'=>'BLR', 'a2'=>'BY'),
		array('name'=>'Belgium', 'a3'=>'BEL', 'a2'=>'BE'),
		array('name'=>'Belize', 'a3'=>'BLZ', 'a2'=>'BZ'),
		array('name'=>'Benin', 'a3'=>'BEN', 'a2'=>'BJ'),
		array('name'=>'Bermuda', 'a3'=>'BMU', 'a2'=>'BM'),
		array('name'=>'Bhutan', 'a3'=>'BTN', 'a2'=>'BT'),
		array('name'=>'Bolivia', 'a3'=>'BOL', 'a2'=>'BO'),
		array('name'=>'Bosnia-Herzegovina', 'a3'=>'BIH', 'a2'=>'BA'),
		array('name'=>'Botswana', 'a3'=>'BWA', 'a2'=>'BW'),
		array('name'=>'Bouvet Island', 'a3'=>'BVT', 'a2'=>'BV'),
		array('name'=>'Brazil', 'a3'=>'BRA', 'a2'=>'BR'),
		array('name'=>'British Indian Ocean Territory', 'a3'=>'IOT', 'a2'=>'IO'),
		array('name'=>'Brunei Darussalam', 'a3'=>'BRN', 'a2'=>'BN'),
		array('name'=>'Bulgaria', 'a3'=>'BGR', 'a2'=>'BG'),
		array('name'=>'Burkina Faso', 'a3'=>'BFA', 'a2'=>'BF'),
		array('name'=>'Burundi', 'a3'=>'BDI', 'a2'=>'BI'),
		array('name'=>'Cambodia', 'a3'=>'KHM', 'a2'=>'KH'),
		array('name'=>'Cameroon', 'a3'=>'CMR', 'a2'=>'CM'),
		array('name'=>'Canada', 'a3'=>'CAN', 'a2'=>'CA'),
		array('name'=>'Cape Verde', 'a3'=>'CPV', 'a2'=>'CV'),
		array('name'=>'Cayman Islands', 'a3'=>'CYM', 'a2'=>'KY'),
		array('name'=>'Central African Republic', 'a3'=>'CAF', 'a2'=>'CF'),
		array('name'=>'Chad', 'a3'=>'TCD', 'a2'=>'TD'),
		array('name'=>'Chile', 'a3'=>'CHL', 'a2'=>'CL'),
		array('name'=>'China', 'a3'=>'CHN', 'a2'=>'CN'),
		array('name'=>'Christmas Island', 'a3'=>'CXR', 'a2'=>'CX'),
		array('name'=>'Cocos (Keeling) Islands', 'a3'=>'CCK', 'a2'=>'CC'),
		array('name'=>'Colombia', 'a3'=>'COL', 'a2'=>'CO'),
		array('name'=>'Comoros', 'a3'=>'COM', 'a2'=>'KM'),
		array('name'=>'Congo', 'a3'=>'COG', 'a2'=>'CG'),
		array('name'=>'Congo, Democratic Republic of', 'a3'=>'COD', 'a2'=>'CD'),
		array('name'=>'Cook Islands', 'a3'=>'COK', 'a2'=>'CK'),
		array('name'=>'Costa Rica', 'a3'=>'CRI', 'a2'=>'CR'),
		array('name'=>'Cote D\'Ivoire', 'a3'=>'CIV', 'a2'=>'CI'),
		array('name'=>'Croatia (Hrvatska)', 'a3'=>'HRV', 'a2'=>'HR'),
		array('name'=>'Cuba', 'a3'=>'CUB', 'a2'=>'CU'),
		array('name'=>'Cyprus', 'a3'=>'CYP', 'a2'=>'CY'),
		array('name'=>'Czech Republic', 'a3'=>'CZE', 'a2'=>'CZ'),
		array('name'=>'Denmark', 'a3'=>'DNK', 'a2'=>'DK'),
		array('name'=>'Djibouti', 'a3'=>'DJI', 'a2'=>'DJ'),
		array('name'=>'Dominica', 'a3'=>'DMA', 'a2'=>'DM'),
		array('name'=>'Dominican Republic', 'a3'=>'DOM', 'a2'=>'DO'),
		array('name'=>'East Timor', 'a3'=>'TMP', 'a2'=>'TP'),
		array('name'=>'Ecuador', 'a3'=>'ECU', 'a2'=>'EC'),
		array('name'=>'Egypt', 'a3'=>'EGY', 'a2'=>'EG'),
		array('name'=>'El Salvador', 'a3'=>'SLV', 'a2'=>'SV'),
		array('name'=>'Equatorial Guinea', 'a3'=>'GNQ', 'a2'=>'GQ'),
		array('name'=>'Eritrea', 'a3'=>'ERI', 'a2'=>'ER'),
		array('name'=>'Estonia', 'a3'=>'EST', 'a2'=>'EE'),
		array('name'=>'Ethiopia', 'a3'=>'ETH', 'a2'=>'ET'),
		array('name'=>'Falkland Islands (Malvinas)', 'a3'=>'FLK', 'a2'=>'FK'),
		array('name'=>'Faroe Islands', 'a3'=>'FRO', 'a2'=>'FO'),
		array('name'=>'Fiji', 'a3'=>'FJI', 'a2'=>'FJ'),
		array('name'=>'Finland', 'a3'=>'FIN', 'a2'=>'FI'),
		array('name'=>'France', 'a3'=>'FRA', 'a2'=>'FR'),
		array('name'=>'French Guiana', 'a3'=>'GUF', 'a2'=>'GF'),
		array('name'=>'French Polynesia', 'a3'=>'PYF', 'a2'=>'PF'),
		array('name'=>'French Southern Territories', 'a3'=>'ATF', 'a2'=>'TF'),
		array('name'=>'Gabon', 'a3'=>'GAB', 'a2'=>'GA'),
		array('name'=>'Gambia', 'a3'=>'GMB', 'a2'=>'GM'),
		array('name'=>'Georgia', 'a3'=>'GEO', 'a2'=>'GE'),
		array('name'=>'Germany', 'a3'=>'DEU', 'a2'=>'DE'),
		array('name'=>'Ghana', 'a3'=>'GHA', 'a2'=>'GH'),
		array('name'=>'Gibraltar', 'a3'=>'GIB', 'a2'=>'GI'),
		array('name'=>'Great Britain (England, Scotland, Wales)', 'a3'=>'GBR', 'a2'=>'GB'),
		array('name'=>'Greece', 'a3'=>'GRC', 'a2'=>'GR'),
		array('name'=>'Greenland', 'a3'=>'GRL', 'a2'=>'GL'),
		array('name'=>'Grenada', 'a3'=>'GRD', 'a2'=>'GD'),
		array('name'=>'Guadeloupe', 'a3'=>'GLP', 'a2'=>'GP'),
		array('name'=>'Guam', 'a3'=>'GUM', 'a2'=>'GU'),
		array('name'=>'Guatemala', 'a3'=>'GTM', 'a2'=>'GT'),
		array('name'=>'Guinea', 'a3'=>'GIN', 'a2'=>'GN'),
		array('name'=>'Guinea-Bissau', 'a3'=>'GNB', 'a2'=>'GW'),
		array('name'=>'Guyana', 'a3'=>'GUY', 'a2'=>'GY'),
		array('name'=>'Haiti', 'a3'=>'HTI', 'a2'=>'HT'),
		array('name'=>'Heard Island and McDonald Islands', 'a3'=>'HMD', 'a2'=>'HM'),
		array('name'=>'Honduras', 'a3'=>'HND', 'a2'=>'HN'),
		array('name'=>'Hong Kong SAR of PRC', 'a3'=>'HKG', 'a2'=>'HK'),
		array('name'=>'Hungary', 'a3'=>'HUN', 'a2'=>'HU'),
		array('name'=>'Iceland', 'a3'=>'ISL', 'a2'=>'IS'),
		array('name'=>'India', 'a3'=>'IND', 'a2'=>'IN'),
		array('name'=>'Indonesia', 'a3'=>'IDN', 'a2'=>'ID'),
		array('name'=>'Iran', 'a3'=>'IRN', 'a2'=>'IR'),
		array('name'=>'Iraq', 'a3'=>'IRQ', 'a2'=>'IQ'),
		array('name'=>'Ireland', 'a3'=>'IRL', 'a2'=>'IE'),
		array('name'=>'Israel', 'a3'=>'ISR', 'a2'=>'IL'),
		array('name'=>'Italy', 'a3'=>'ITA', 'a2'=>'IT'),
		array('name'=>'Jamaica', 'a3'=>'JAM', 'a2'=>'JM'),
		array('name'=>'Japan', 'a3'=>'JPN', 'a2'=>'JP'),
		array('name'=>'Jordan', 'a3'=>'JOR', 'a2'=>'JO'),
		array('name'=>'Kazakhstan', 'a3'=>'KAZ', 'a2'=>'KZ'),
		array('name'=>'Kenya', 'a3'=>'KEN', 'a2'=>'KE'),
		array('name'=>'Kiribati', 'a3'=>'KIR', 'a2'=>'KI'),
		array('name'=>'Republic of Korea (South Korea)', 'a3'=>'KOR', 'a2'=>'KR'),
		array('name'=>'Korea, Democratic People\'s Republic (North Korea)', 'a3'=>'PRK', 'a2'=>'KP'),
		array('name'=>'Kosovo', 'a3'=>'UNK', 'a2'=>'XK'),
		array('name'=>'Kuwait', 'a3'=>'KWT', 'a2'=>'KW'),
		array('name'=>'Kyrgyzstan', 'a3'=>'KGZ', 'a2'=>'KG'),
		array('name'=>'Lao People\'s Democratic Republic', 'a3'=>'LAO', 'a2'=>'LA'),
		array('name'=>'Latvia', 'a3'=>'LVA', 'a2'=>'LV'),
		array('name'=>'Lebanon', 'a3'=>'LBN', 'a2'=>'LB'),
		array('name'=>'Lesotho', 'a3'=>'LSO', 'a2'=>'LS'),
		array('name'=>'Liberia', 'a3'=>'LBR', 'a2'=>'LR'),
		array('name'=>'Libyan Arab Jamahiriya', 'a3'=>'LBY', 'a2'=>'LY'),
		array('name'=>'Liechtenstein', 'a3'=>'LIE', 'a2'=>'LI'),
		array('name'=>'Lithuania', 'a3'=>'LTU', 'a2'=>'LT'),
		array('name'=>'Luxembourg', 'a3'=>'LUX', 'a2'=>'LU'),
		array('name'=>'Macao SAR of PRC (Macau)', 'a3'=>'MAC', 'a2'=>'MO'),
		array('name'=>'Macedonia', 'a3'=>'MKD', 'a2'=>'MK'),
		array('name'=>'Madagascar', 'a3'=>'MDG', 'a2'=>'MG'),
		array('name'=>'Malawi', 'a3'=>'MWI', 'a2'=>'MW'),
		array('name'=>'Malaysia', 'a3'=>'MYS', 'a2'=>'MY'),
		array('name'=>'Maldives', 'a3'=>'MDV', 'a2'=>'MV'),
		array('name'=>'Mali', 'a3'=>'MLI', 'a2'=>'ML'),
		array('name'=>'Malta', 'a3'=>'MLT', 'a2'=>'MT'),
		array('name'=>'Marshall Islands', 'a3'=>'MHL', 'a2'=>'MH'),
		array('name'=>'Martinique', 'a3'=>'MTQ', 'a2'=>'MQ'),
		array('name'=>'Mauritania', 'a3'=>'MRT', 'a2'=>'MR'),
		array('name'=>'Mauritius', 'a3'=>'MUS', 'a2'=>'MU'),
		array('name'=>'Mayotte', 'a3'=>'MYT', 'a2'=>'YT'),
		array('name'=>'Mexico', 'a3'=>'MEX', 'a2'=>'MX'),
		array('name'=>'Micronesia, Federated States of', 'a3'=>'FSM', 'a2'=>'FM'),
		array('name'=>'Monaco', 'a3'=>'MCO', 'a2'=>'MC'),
		array('name'=>'Mongolia', 'a3'=>'MNG', 'a2'=>'MN'),
		array('name'=>'Montenegro', 'a3'=>'MNE', 'a2'=>'ME'),
		array('name'=>'Montserrat', 'a3'=>'MSR', 'a2'=>'MS'),
		array('name'=>'Morocco', 'a3'=>'MAR', 'a2'=>'MA'),
		array('name'=>'Mozambique', 'a3'=>'MOZ', 'a2'=>'MZ'),
		array('name'=>'Myanmar', 'a3'=>'MMR', 'a2'=>'MM'),
		array('name'=>'Namibia', 'a3'=>'NAM', 'a2'=>'NA'),
		array('name'=>'Nauru', 'a3'=>'NRU', 'a2'=>'NR'),
		array('name'=>'Nepal', 'a3'=>'NPL', 'a2'=>'NP'),
		array('name'=>'Netherlands', 'a3'=>'NLD', 'a2'=>'NL'),
		array('name'=>'Netherlands Antilles', 'a3'=>'ANT', 'a2'=>'AN'),
		array('name'=>'New Caledonia', 'a3'=>'NCL', 'a2'=>'NC'),
		array('name'=>'New Zealand', 'a3'=>'NZL', 'a2'=>'NZ'),
		array('name'=>'Nicaragua', 'a3'=>'NIC', 'a2'=>'NI'),
		array('name'=>'Niger', 'a3'=>'NER', 'a2'=>'NE'),
		array('name'=>'Nigeria', 'a3'=>'NGA', 'a2'=>'NG'),
		array('name'=>'Niue', 'a3'=>'NIU', 'a2'=>'NU'),
		array('name'=>'Norfolk Island', 'a3'=>'NFK', 'a2'=>'NF'),
		array('name'=>'Northern Mariana Islands', 'a3'=>'MNP', 'a2'=>'MP'),
		array('name'=>'Norway', 'a3'=>'NOR', 'a2'=>'NO'),
		array('name'=>'Oman', 'a3'=>'OMN', 'a2'=>'OM'),
		array('name'=>'Pakistan', 'a3'=>'PAK', 'a2'=>'PK'),
		array('name'=>'Palau', 'a3'=>'PLW', 'a2'=>'PW'),
		array('name'=>'Panama', 'a3'=>'PAN', 'a2'=>'PA'),
		array('name'=>'Papua New Guinea', 'a3'=>'PNG', 'a2'=>'PG'),
		array('name'=>'Paraguay', 'a3'=>'PRY', 'a2'=>'PY'),
		array('name'=>'Peru', 'a3'=>'PER', 'a2'=>'PE'),
		array('name'=>'Philippines', 'a3'=>'PHL', 'a2'=>'PH'),
		array('name'=>'Pitcairn', 'a3'=>'PCN', 'a2'=>'PN'),
		array('name'=>'Poland', 'a3'=>'POL', 'a2'=>'PL'),
		array('name'=>'Portugal', 'a3'=>'PRT', 'a2'=>'PT'),
		array('name'=>'Puerto Rico', 'a3'=>'PRI', 'a2'=>'PR'),
		array('name'=>'Qatar', 'a3'=>'QAT', 'a2'=>'QA'),
		array('name'=>'Republic of Moldova', 'a3'=>'MDA', 'a2'=>'MD'),
		array('name'=>'Reunion', 'a3'=>'REU', 'a2'=>'RE'),
		array('name'=>'Romania', 'a3'=>'ROM', 'a2'=>'RO'),
		array('name'=>'Russia', 'a3'=>'RUS', 'a2'=>'RU'),
		array('name'=>'Rwanda', 'a3'=>'RWA', 'a2'=>'RW'),
		array('name'=>'Saint Helena', 'a3'=>'SHN', 'a2'=>'SH'),
		array('name'=>'Saint Kitts and Nevis', 'a3'=>'KNA', 'a2'=>'KN'),
		array('name'=>'Saint Lucia', 'a3'=>'LCA', 'a2'=>'LC'),
		array('name'=>'Saint Pierre and Miquelon', 'a3'=>'SPM', 'a2'=>'PM'),
		array('name'=>'Saint Vincent and the Grenadines', 'a3'=>'VCT', 'a2'=>'VC'),
		array('name'=>'Samoa', 'a3'=>'WSM', 'a2'=>'WS'),
		array('name'=>'San Marino', 'a3'=>'SMR', 'a2'=>'SM'),
		array('name'=>'Sao Tome and Principe', 'a3'=>'STP', 'a2'=>'ST'),
		array('name'=>'Saudi Arabia', 'a3'=>'SAU', 'a2'=>'SA'),
		array('name'=>'Senegal', 'a3'=>'SEN', 'a2'=>'SN'),
		array('name'=>'Serbia', 'a3'=>'SRB', 'a2'=>'RS'),
		array('name'=>'Seychelles', 'a3'=>'SYC', 'a2'=>'SC'),
		array('name'=>'Sierra Leone', 'a3'=>'SLE', 'a2'=>'SL'),
		array('name'=>'Singapore', 'a3'=>'SGP', 'a2'=>'SG'),
		array('name'=>'Slovakia', 'a3'=>'SVK', 'a2'=>'SK'),
		array('name'=>'Slovenia', 'a3'=>'SVN', 'a2'=>'SI'),
		array('name'=>'Solomon Islands', 'a3'=>'SLB', 'a2'=>'SB'),
		array('name'=>'Somalia', 'a3'=>'SOM', 'a2'=>'SO'),
		array('name'=>'South Africa', 'a3'=>'ZAF', 'a2'=>'ZA'),
		array('name'=>'South Georgia and South Sandwich Islands', 'a3'=>'SGS', 'a2'=>'GS'),
		array('name'=>'Spain', 'a3'=>'ESP', 'a2'=>'ES'),
		array('name'=>'Sri Lanka', 'a3'=>'LKA', 'a2'=>'LK'),
		array('name'=>'Sudan', 'a3'=>'SDN', 'a2'=>'SD'),
		array('name'=>'Suriname', 'a3'=>'SUR', 'a2'=>'SR'),
		array('name'=>'Svalbard and Jan Mayen', 'a3'=>'SJM', 'a2'=>'SJ'),
		array('name'=>'Swaziland', 'a3'=>'SWZ', 'a2'=>'SZ'),
		array('name'=>'Sweden', 'a3'=>'SWE', 'a2'=>'SE'),
		array('name'=>'Switzerland', 'a3'=>'CHE', 'a2'=>'CH'),
		array('name'=>'Syria', 'a3'=>'SYR', 'a2'=>'SY'),
		array('name'=>'Taiwan', 'a3'=>'TWN', 'a2'=>'TW'),
		array('name'=>'Tajikistan', 'a3'=>'TJK', 'a2'=>'TJ'),
		array('name'=>'Tanzania, United Republic of', 'a3'=>'TZA', 'a2'=>'TZ'),
		array('name'=>'Thailand', 'a3'=>'THA', 'a2'=>'TH'),
		array('name'=>'Togo', 'a3'=>'TGO', 'a2'=>'TG'),
		array('name'=>'Tokelau', 'a3'=>'TKL', 'a2'=>'TK'),
		array('name'=>'Tonga', 'a3'=>'TON', 'a2'=>'TO'),
		array('name'=>'Trinidad and Tobago', 'a3'=>'TTE', 'a2'=>'TT'),
		array('name'=>'Tunisia', 'a3'=>'TUN', 'a2'=>'TN'),
		array('name'=>'Turkey', 'a3'=>'TUR', 'a2'=>'TR'),
		array('name'=>'Turkmenistan', 'a3'=>'TKM', 'a2'=>'TM'),
		array('name'=>'Turks and Caicos Islands', 'a3'=>'TCA', 'a2'=>'TC'),
		array('name'=>'Tuvalu', 'a3'=>'TUV', 'a2'=>'TV'),
		array('name'=>'Uganda', 'a3'=>'UGA', 'a2'=>'UG'),
		array('name'=>'Ukraine', 'a3'=>'UKR', 'a2'=>'UA'),
		array('name'=>'United Arab Emirates', 'a3'=>'ARE', 'a2'=>'AE'),
		array('name'=>'United States', 'a3'=>'USA', 'a2'=>'US'),
		array('name'=>'United States Minor Outlying Islands', 'a3'=>'UMI', 'a2'=>'UM'),
		array('name'=>'Uruguay', 'a3'=>'URY', 'a2'=>'UY'),
		array('name'=>'Uzbekistan', 'a3'=>'UZB', 'a2'=>'UZ'),
		array('name'=>'Vanuatu', 'a3'=>'VUT', 'a2'=>'VU'),
		array('name'=>'Vatican City State', 'a3'=>'VAT', 'a2'=>'VA'),
		array('name'=>'Venezuela', 'a3'=>'VEN', 'a2'=>'VE'),
		array('name'=>'Vietnam', 'a3'=>'VNM', 'a2'=>'VN'),
		array('name'=>'Virgin Islands (UK)', 'a3'=>'VGB', 'a2'=>'VG'),
		array('name'=>'Virgin Islands (US)', 'a3'=>'VIR', 'a2'=>'VI'),
		array('name'=>'Wallis and Futuna', 'a3'=>'WLF', 'a2'=>'WF'),
		array('name'=>'Western Sahara', 'a3'=>'ESH', 'a2'=>'EH'),
		array('name'=>'Yemen', 'a3'=>'YEM', 'a2'=>'YE'),
		array('name'=>'Zambia', 'a3'=>'ZMB', 'a2'=>'ZM'),
		array('name'=>'Zimbabwe', 'a3'=>'ZWE', 'a2'=>'ZW'),
	);
	
    public function run() {
    	DB::table('countries')->truncate();

    	Country::insert($this->insertList);
    }
}