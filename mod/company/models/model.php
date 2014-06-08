<?php

function getCountryList() {

    $countries = array('Afghanistan', 'Albania', 'Algeria', 'American Samoa', 'Angola', 'Anguilla', 'Antartica', 'Antigua and Barbuda', 'Argentina', 'Armenia', 'Aruba', 'Ashmore and Cartier Island', 'Australia', 'Austria', 'Azerbaijan', 'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Belarus', 'Belgium', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivia', 'Bosnia and Herzegovina', 'Botswana', 'Brazil', 'British Virgin Islands', 'Brunei', 'Bulgaria', 'Burkina Faso', 'Burma', 'Burundi', 'Cambodia', 'Cameroon', 'Canada', 'Cape Verde', 'Cayman Islands', 'Central African Republic', 'Chad', 'Chile', 'China', 'Christmas Island', 'Clipperton Island', 'Cocos (Keeling) Islands', 'Colombia', 'Comoros', 'Congo, Democratic Republic of the', 'Congo, Republic of the', 'Cook Islands', 'Costa Rica', 'Cote d\'Ivoire', 'Croatia', 'Cuba', 'Cyprus', 'Czech Republic', 'Denmark', 'Djibouti', 'Dominica', 'Dominican Republic', 'Ecuador', 'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia', 'Ethiopia', 'Europa Island', 'Falkland Islands (Islas Malvinas)', 'Faroe Islands', 'Fiji', 'Finland', 'France', 'French Guiana', 'French Polynesia', 'French Southern and Antarctic Lands', 'Gabon', 'Gambia, The', 'Gaza Strip', 'Georgia', 'Germany', 'Ghana', 'Gibraltar', 'Glorioso Islands', 'Greece', 'Greenland', 'Grenada', 'Guadeloupe', 'Guam', 'Guatemala', 'Guernsey', 'Guinea', 'Guinea-Bissau', 'Guyana', 'Haiti', 'Heard Island and McDonald Islands', 'Holy See (Vatican City)', 'Honduras', 'Hong Kong', 'Howland Island', 'Hungary', 'Iceland', 'India', 'Indonesia', 'Iran', 'Iraq', 'Ireland', 'Ireland, Northern', 'Israel', 'Italy', 'Jamaica', 'Jan Mayen', 'Japan', 'Jarvis Island', 'Jersey', 'Johnston Atoll', 'Jordan', 'Juan de Nova Island', 'Kazakhstan', 'Kenya', 'Kiribati', 'Korea, North', 'Korea, South', 'Kuwait', 'Kyrgyzstan', 'Laos', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libya', 'Liechtenstein', 'Lithuania', 'Luxembourg', 'Macau', 'Macedonia, Former Yugoslav Republic of', 'Madagascar', 'Malawi', 'Malaysia', 'Maldives', 'Mali', 'Malta', 'Man, Isle of', 'Marshall Islands', 'Martinique', 'Mauritania', 'Mauritius', 'Mayotte', 'Mexico', 'Micronesia, Federated States of', 'Midway Islands', 'Moldova', 'Monaco', 'Mongolia', 'Montserrat', 'Morocco', 'Mozambique', 'Namibia', 'Nauru', 'Nepal', 'Netherlands', 'Netherlands Antilles', 'New Caledonia', 'New Zealand', 'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norfolk Island', 'Northern Mariana Islands', 'Norway', 'Oman', 'Pakistan', 'Palau', 'Panama', 'Papua New Guinea', 'Paraguay', 'Peru', 'Philippines', 'Pitcaim Islands', 'Poland', 'Portugal', 'Puerto Rico', 'Qatar', 'Reunion', 'Romainia', 'Russia', 'Rwanda', 'Saint Helena', 'Saint Kitts and Nevis', 'Saint Lucia', 'Saint Pierre and Miquelon', 'Saint Vincent and the Grenadines', 'Samoa', 'San Marino', 'Sao Tome and Principe', 'Saudi Arabia', 'Scotland', 'Senegal', 'Seychelles', 'Sierra Leone', 'Singapore', 'Slovakia', 'Slovenia', 'Solomon Islands', 'Somalia', 'South Africa', 'South Georgia and South Sandwich Islands', 'Spain', 'Spratly Islands', 'Sri Lanka', 'Sudan', 'Suriname', 'Svalbard', 'Swaziland', 'Sweden', 'Switzerland', 'Syria', 'Taiwan', 'Tajikistan', 'Tanzania', 'Thailand', 'Tobago', 'Toga', 'Tokelau', 'Tonga', 'Trinidad', 'Tunisia', 'Turkey', 'Turkmenistan', 'Tuvalu', 'Uganda', 'Ukraine', 'United Arab Emirates', 'United Kingdom', 'Uruguay', 'USA', 'Uzbekistan', 'Vanuatu', 'Venezuela', 'Vietnam', 'Virgin Islands', 'Wales', 'Wallis and Futuna', 'West Bank', 'Western Sahara', 'Yemen', 'Yugoslavia', 'Zambia', 'Zimbabwe');
    $countries = elgg_trigger_plugin_hook('company:countrylist', 'all', array('current' => $countries), $countries);
    return $countries;
}
function getIndustryList() {
  $industry=array(
  "IT"=>"IT",
  "电信"=>"电信",
  "金融"=>"金融",
  "咨询"=>"咨询",
  "物流"=>"物流",
  "教育培训"=>"教育培训",
  "制造业"=>"制造业",
  "贸易"=>"贸易",
  "农业"=>"农业",
  "餐饮娱乐"=>"餐饮娱乐",
  "其它"=>"其它",
  );
  return $industry;
}
function getJobFields() {

    $job = array(
        'comp_name' => array('display_name' => elgg_echo('company:companyname'), 'type' => 'text', 'section' => 'comp', 'class' => 'mandatory elgg-input-autocomplete'),
        'comp_description' => array('display_name' => elgg_echo('company:companydescription'), 'type' => 'longtext', 'section' => 'comp'),
        'comp_industry' => array('display_name' => elgg_echo('company:companyindustry'), 'type' => 'dropdown','options' => getIndustryList(), 'section' => 'comp'),
        
        'title' => array('display_name' => elgg_echo('company:job:title'), 'type' => 'text', 'section' => 'cjobomp', 'class' => 'mandatory'),
        'province' => array('display_name' => elgg_echo('company:province'), 'type' => 'dropdown', 'section' => 'address','class' => 'prov mandatory'),
        'city' => array('display_name' => elgg_echo('company:city'), 'type' => 'dropdown', 'section' => 'address', 'class' => 'city mandatory'),
        'distinct' => array('display_name' => '', 'type' => 'dropdown', 'section' => 'address', 'class' => 'dist mandatory'),

        'description' => array('display_name' => elgg_echo('company:job:description'), 'type' => 'longtext', 'section' => 'job', 'class' => 'mandatory'),
        'desired' => array('display_name' => elgg_echo('company:job:desired'), 'type' => 'longtext', 'section' => 'job', 'class' => 'mandatory'),
        'email' => array('display_name' => elgg_echo('company:job:email'), 'type' => 'text', 'section' => 'job', 'class' => 'mandatory'),
        
        'tags' => array('display_name' => elgg_echo('company:companytags'), 'type' => 'tags', 'section' => 'extras'),
    );

    //$job = elgg_trigger_plugin_hook('company:customfields', 'all', array('current' => $company), $company);

    return $job;
}
function getCompanyFields() {

    $company = array(
        'title' => array('display_name' => elgg_echo('company:companyname'), 'type' => 'text', 'section' => 'main', 'class' => 'mandatory elgg-input-autocomplete'),
        'description' => array('display_name' => elgg_echo('company:companydescription'), 'type' => 'longtext', 'section' => 'main'),
        'industry' => array('display_name' => elgg_echo('company:companyindustry'), 'type' => 'dropdown', 'options' => getIndustryList(), 'section' => 'extras'),
        
        'products' => array('display_name' => elgg_echo('company:companyproducts'), 'type' => 'tags', 'section' => 'extras'),
        'employees' => array('display_name' => elgg_echo('company:companyemployees'), 'type' => 'text', 'section' => 'extras'),
        'street1' => array('display_name' => elgg_echo('company:companystreet1'), 'type' => 'text', 'section' => 'address', 'class' => 'mandatory'),
        //'street2' => array('display_name' => elgg_echo('company:mcompanystreet2'), 'type' => 'text', 'section' => 'address'),
        'province' => array('display_name' => elgg_echo('company:province'), 'type' => 'dropdown', 'section' => 'address','class' => 'prov mandatory'),
        'city' => array('display_name' => elgg_echo('company:city'), 'type' => 'dropdown', 'section' => 'address', 'class' => 'city mandatory'),
        'distinct' => array('display_name' => '', 'type' => 'dropdown', 'section' => 'address', 'class' => 'dist mandatory'),
        'createtime' => array('display_name' => elgg_echo('company:createtime'), 'type' => 'text', 'section' => 'extras'),
        
        'zip' => array('display_name' => elgg_echo('company:companypostal'), 'type' => 'text', 'section' => 'address'),
        //'country' => array('display_name' => elgg_echo('company:companycountry'), 'type' => 'select', 'options' => getCountryList(), 'section' => 'address'),
        'phone' => array('display_name' => elgg_echo('company:companyphone'), 'type' => 'text', 'section' => 'contacts'),
        'www' => array('display_name' => elgg_echo('company:companywebsite'), 'type' => 'url', 'section' => 'contacts'),
        //'tags' => array('display_name' => elgg_echo('company:companytags'), 'type' => 'tags', 'section' => 'extras'),
    );

    //$company = elgg_trigger_plugin_hook('company:customjobfields', 'all', array('current' => $job), $job);

    return $company;
}

function getCompanyEditFields() {

    $company = array(
        'title' => array('display_name' => elgg_echo('company:edit:companyname'), 'type' => 'text', 'section' => 'main', 'class' => 'mandatory elgg-input-autocomplete'),
        'description' => array('display_name' => elgg_echo('company:edit:companydescription'), 'type' => 'longtext', 'section' => 'main'),
        'industry' => array('display_name' => elgg_echo('company:edit:companyindustry'), 'type' => 'dropdown', 'options' => getIndustryList(), 'section' => 'extras'),
        
        'products' => array('display_name' => elgg_echo('company:companyproducts'), 'type' => 'tags', 'section' => 'extras'),
        'employees' => array('display_name' => elgg_echo('company:companyemployees'), 'type' => 'text', 'section' => 'extras'),
        'street1' => array('display_name' => elgg_echo('company:edit:companystreet1'), 'type' => 'text', 'section' => 'address', 'class' => 'mandatory'),
        //'street2' => array('display_name' => elgg_echo('company:mcompanystreet2'), 'type' => 'text', 'section' => 'address'),
        'province' => array('display_name' => elgg_echo('company:edit:province'), 'type' => 'dropdown', 'section' => 'address','class' => 'prov mandatory'),
        'city' => array('display_name' => elgg_echo('company:edit:city'), 'type' => 'dropdown', 'section' => 'address', 'class' => 'city mandatory'),
        'distinct' => array('display_name' => '', 'type' => 'dropdown', 'section' => 'address', 'class' => 'dist mandatory'),
        'createtime' => array('display_name' => elgg_echo('company:createtime'), 'type' => 'text', 'section' => 'extras'),
        
        'zip' => array('display_name' => elgg_echo('company:companypostal'), 'type' => 'text', 'section' => 'address'),
        //'country' => array('display_name' => elgg_echo('company:companycountry'), 'type' => 'select', 'options' => getCountryList(), 'section' => 'address'),
        'phone' => array('display_name' => elgg_echo('company:companyphone'), 'type' => 'text', 'section' => 'contacts'),
        'www' => array('display_name' => elgg_echo('company:companywebsite'), 'type' => 'url', 'section' => 'contacts'),
        //'tags' => array('display_name' => elgg_echo('company:companytags'), 'type' => 'tags', 'section' => 'extras'),
    );

    //$company = elgg_trigger_plugin_hook('company:customjobfields', 'all', array('current' => $job), $job);

    return $company;
}

function getCompanyBranchFields() {

    $branch = array(
        'title' => array('display_name' => elgg_echo('company:companyname'), 'type' => 'text', 'section' => 'main', 'class' => 'mandatory'),
        //'parent' => array('display_name' => elgg_echo('company:parentcompany'), 'type' => 'hidden', 'section' => 'main'),
        //'description' => array('display_name' => elgg_echo('company:companydescription'), 'type' => 'longtext', 'section' => 'main'),
        'services' => array('display_name' => elgg_echo('company:branchspecialties'), 'type' => 'tags', 'section' => 'extras'),
        //'employees' => array('display_name' => elgg_echo('company:companyemployees'), 'type' => 'text', 'section' => 'extras'),
        'street1' => array('display_name' => elgg_echo('company:companystreet1'), 'type' => 'text', 'section' => 'address', 'class' => 'mandatory'),
        'street2' => array('display_name' => elgg_echo('company:companystreet2'), 'type' => 'text', 'section' => 'address'),
        'city' => array('display_name' => elgg_echo('company:companycity'), 'type' => 'text', 'section' => 'address', 'class' => 'mandatory'),
        'province' => array('display_name' => elgg_echo('company:companyprovince'), 'type' => 'text', 'section' => 'address'),
        'zip' => array('display_name' => elgg_echo('company:companypostal'), 'type' => 'text', 'section' => 'address'),
        'country' => array('display_name' => elgg_echo('company:companycountry'), 'type' => 'select', 'options' => getCountryList(), 'section' => 'address'),
        'phone' => array('display_name' => elgg_echo('company:companyphone'), 'type' => 'text', 'section' => 'contacts'),
        'www' => array('display_name' => elgg_echo('company:companywebsite'), 'type' => 'url', 'section' => 'contacts'),
        //'tags' => array('display_name' => elgg_echo('company:companytags'), 'type' => 'tags', 'section' => 'extras'),
    );

    $branch = elgg_trigger_plugin_hook('company:customfields', 'all', array('current' => $branch), $branch);

    return $branch;
}

function getAddressString($entity) {
    if ($entity->street1)
        $address = $entity->street1 . ', ';
    if ($entity->distinct)
        $address .= $entity->distinct . ', ';
    if ($entity->city)
        $address .= $entity->city . ', ';
    if ($entity->province)
        $address .= $entity->province ;//. ', ';
    if ($entity->country)
        $address .= $entity->country;
    return $address;
}

function canCreateCompany($user) {
    global $CONFIG;
    $return = true;
    if (elgg_is_active_plugin('profile_manager')) {
        $options = array(
            "type" => "object",
            "subtype" => CUSTOM_PROFILE_FIELDS_PROFILE_TYPE_SUBTYPE,
            "limit" => 0,
            "owner_guid" => $CONFIG->site_guid,
            "full_view" => false,
            "view_type_toggle" => false,
            "pagination" => false
        );

        $custom_profile_types = elgg_get_entities($options);

        if (!empty($custom_profile_types)) {
            $profile_type = get_entity($user->custom_profile_type)->guid;
            if ($profile_type && elgg_get_plugin_setting('profile_type_' . $profile_type, 'company') == true) {
                $return = true;
            } else {
                $return = false;
            }
        }
    }
    return $return;
}

function getUserCompanies($user_guid) {

    $options = array(
        'types' => 'object',
        'subtypes' => 'company',
        'owner_guids' => $user_guid,
        'limit' => 9999
    );

    $companies = elgg_get_entities($options);

    return $companies;
}

function getNetworkCompanies($user_guid) {

    $user = get_entity($user_guid);
    $friends = $user->getFriends();

    if (!empty($friends)) {
        foreach ($friends as $friend) {
            $guids[] = $friend->guid;
        }
    }

    $options = array(
        'types' => 'object',
        'subtypes' => 'company',
        'owner_guids' => $guids,
        'limit' => 9999
    );

    $companies = elgg_get_entities($options);

    return $companies;
}

function getSiteCompanies() {
    $options = array(
        'types' => 'object',
        'subtypes' => 'company',
        'limit' => 9999
    );

    $companies = elgg_get_entities($options);

    return $companies;
}

function getTooltip($company) {
    $fields = getCompanyFields();
    $tooltip = '<div>' . getAddressString($company) . '</div>';
    foreach ($fields as $ref => $value) {
        if ($company->$ref && $value['section'] == 'contacts') {
            $tooltip .= '<div><span class="company_' . $ref . '">';
            $tooltip .= $value['display_name'] . ': ';
            $tooltip .= elgg_view('output/' . $value['type'], array('value' => $company->$ref));
            $tooltip .= '</span></div>';
        }
    }
    return $tooltip;
}

function getMarker($company) {
    $markers = array();
    if ($company instanceof ElggObject && in_array($company->getSubtype(), array('company', 'branchcompany'))) {
        $markers[] = array($company->title, $company->hypelatitude, $company->hypelongitude, $company->getIcon('small'), getTooltip($company), 1, $company->getURL(), $company->guid,$company->getIcon('medium'));
    }
    return $markers;
}

function getMarkers($companies) {
    $markers = array();
    $z = 1;
    foreach ($companies as $company) {
        if ($company instanceof ElggObject && in_array($company->getSubtype(), array('company', 'branchcompany'))) {
            $markers[] = array($company->title, $company->hypelatitude, $company->hypelongitude, $company->getIcon('small'), getTooltip($company), $z, $company->getURL(), $company->guid, $company->getIcon('medium'));
        }
        $z++;
    }
    return $markers;
}

?>
