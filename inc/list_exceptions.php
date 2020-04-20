<?php
/*

Key Exception Types
  exception_department
  exception_building

Anti-Keys
  -"science !== bryant space science center" => "clas_science = array("bio", "chem")"
  -"hall"


Core Lists
  $departments & $list_locations

// $departments
    $key_department => $value_department
      "bio" => array(
      "location"   => "",
      "affiliates" => array(),
      "prefix"     => array()
    ),

// $list_locations
$key_location   => $value_building
    "bryant" => array(
      "bldg"         => "",
      "fullName"     => "",
      "abbreviation" => "",
      "address"      => ""
    ),


  campusMap:
  Dauer Hall (DAU)
  228 BUCKMAN DR
  GAINESVILLE, FL 32611
  Building
  0111


*/
  // reverse search - building affiliations -- turlington: antrhopology,
  // structure: ANT 3364

  /*
  exceptions for exceptions:
    - clas => clas !== classics

  */

$list_departments = array(
  "portuguese",
  "spanish",
  "anthropology",
  "astronomy",
  "astrophysics",
  "chemistry",
  "biochemistry",
  "criminology",
  "economics",
  "geography",
  "geology",
  "history",
  "linguistics",
  "mathematics",
  "philosophy",
  "physics",
  "political science",
  "psychology",
  "religion",
  "sociology",
  "statistics",
  "zoology"
);

$departments = array(

  "anthropology" => array(
    "location"     => "Turlington Hall",
    "affiliates"   => array(
      "anthro"
    ),
    "prefix" => array(
      "ant"
    )
  ),

  "astronomy" => array(
    "location"   => "Bryant Space Science Center",
    "affiliates" => array(
      "astro",
      "astronomy",
      "astrophysics"
    ),
    "prefix" => array(
      "ast"
    )
  ),

  "biology" => array(
    "location"   => "Bartram Hall",
    "affiliates" => array(
      "bio",
      "botany",
      "zoology",
    ),
    "prefix" => array(
      "bot",
      "bsc"
    )
  ),

  "classics" => array(
    "location"   => "Dauer Hall",
    "affiliates" => array(
      "cla",
      "clt"
    )
  ),

  "chemistry" => array(
    "location"   => "Sisler Hall",
    "affiliates" => array(
      "chem",
      "chm",
      "biochemistry"
    )
  ),

  "economics" => array(
    "location"   => "Matherly Hall",
    "affiliates" => array(
      "econ",
      "eco"
    )
  ),

  "english" => array(
    "location"   => "Turlington Hall",
    "affiliates" => array(
      "eng",
      "enc"
    )
  ),

  "geological Sciences" => array(
    "location"   => "Williamson Hall",
    "affiliates" => array(
      "geology",
      "geol",
      "esc",
      "gly",

    )
  ),

  "geography" => array(
    "location"   => "Turlington Hall",
    "affiliates" => array(
      "geog",
      "gea",
      "geo",
      "gis",
      "met" // meteorlogy
    )
  ),


  "history" => array(
    "location"   => "Keene-Flint Hall",
    "affiliates" => array(
      "hist",
      "his",
      "afh",
      "amh",
      "ash",
      "euh",
      "lah",
      "woh"
    )
  ),

  "languages, literatures, and cultures" => array(
    "location"   => "Pugh Hall",
    "affiliates" => array(
      "languages",
      "language",
      "lang",
      "literatures",
      "literature",
      "cultures",
      "culture",
      "african and asian",
      "african",
      "asian",
      "akan",
      "aka",
      "amharic",
      "ahm",
      "arabic",
      "abt",
      "ara",
      "chinese",
      "chi",
      "cht",
      "chw",
      "czech",
      "cze",
      "dutch",
      "dut",
      "lit",
      "french",
      "fre",
      "frt",
      "frw",
      "german",
      "ger",
      "gew",
      "haitian creole",
      "haitian",
      "creole",
      "hai",
      "hat",
      "hebrew",
      "hbr",
      "hindi urdu",
      "hindi-urdu",
      "hindi",
      "urdu",
      "hin",
      "italian",
      "ita",
      "itt",
      "itw",
      "japanese",
      "jpn",
      "jpt",
      "jpw",
      "korean",
      "kor",
      "lingala",
      "lgl",
      "polish",
      "plt",
      "pol",
      "russian",
      "rus",
      "rut",
      "ruw",
      "swahili",
      "swa",
      "vietnamese",
      "vtn",
      "vtt",
      "wolof",
      "wol",
      "xhosa",
      "xho",
      "yoruba",
      "yor",
      "yot"
    )
  ),

  "linguistics" => array(
    "location"   => "Turlington Hall",
    "affiliates" => array(
      "ling",
      "lin"
    )
  ),

  "mathematics" => array(
    "location"   => "Little Hall",
    "affiliates" => array(
      "math",
      "mac",
      "maa",
      "mad",
      // "map",
      "mas",
      "mat",
      "mhf",
      "mtg"
    )
  ),

  "philosophy" => array(
    "location"   => "Griffin-Floyd Hall",
    "affiliates" => array(
      "phil",
      "phh",
      "phi",
      "phm"
    )
  ),

  "physics" => array(
    "location"   => "Physics Building",
    "affiliates" => array(
      "phys",
      "phy",
      "phz",

    )
  ),

  "political science" => array(
    "location"   => "Anderson Hall",
    "affiliates" => array(
      "political",
      "poli sci",
      "poli",
      "cpo",
      "pos",
      "pot"
    )
  ),

  "psychology" => array(
    "location"   => "McCarty Hall C",
    "affiliates" => array(
      "psych",
      "psy"
    )
  ),

  "religion" => array(
    "location"   => "Anderson Hall",
    "affiliates" => array(
      "rel",
      "srk" // sanskrit
    )
  ),

  "sociology and criminology &amp; law"  => array(
    "location"   => "Turlington Hall",
    "affiliates" => array(
      "sociology &amp; criminology &amp; law",
      "sociology and criminology and law",
      "sociology",
      "criminology",
      "law",
      "ccj",
      "syd",
      "syo"
    )
  ),

  "spanish and portuguese" => array(
    "location"   => "Dauer Hall",
    "affiliates" => array(
      "spanish &amp; portuguese",
      "spanish",
      "portuguese",
      "span",
      "port",
      "cat",
      "por",
      "spn",
      "spw"
    )
  ),

  "statistics" => array(
    "location"   => "Griffin-Floyd Hall",
    "affiliates" => array(
      "stats",
      "stat",
      "sta"
    )
  ),

  // "ids" => array(
  //   "location" => "na",
  //   "affiliates" => array(
  //     "interdisciplinary"
  //   ),
  //   "site" => "https://catalog.ufl.edu/UGRD/colleges-schools/UGLAS/IDS_BA_BS/"
  // )

); // departments

  $list_locations = array(
    "Anderson Hall" => array(
    "bldg"         => "0007",
    "fullName"     => "James N. Anderson Hall",
    "abbreviation" => "AND",
    "address"      => "1507 W UNIVERSITY AVE GAINESVILLE	FL 32611"
  ),

  "Bartram Hall" => array(
    "bldg"         => "0747",
    "fullName"     => "William Bartram Hall",
    "abbreviation" => "BAR",
    "address"      => "876 NEWELL DR GAINESVILLE FL 32611"
  ),

  "Bryant Space Science Center" => array(
    "bldg"         => "0038",
    "fullName"     => "T.W. Bryant Space Science Ctr",
    "abbreviation" => "BRT",
    "address"      => "1772 STADIUM RD GAINESVILLE FL	32611"
  ),

  "Dauer Hall" => array(
    "bldg"         => "0111",
    "fullName"     => "Manning J. Dauer Hall",
    "abbreviation" => "DAU",
    "address"      => "228 BUCKMAN DR GAINESVILLE	FL 32611"
  ),

  "Keene-Flint Hall" => array(
    "bldg"         => "0008",
    "fullName"     => "Keene-Flint Hall",
    "abbreviation" => "FLI",
    "address"      => "80 NEWELL DR GAINESVILLE	FL 32611"
  ),

    "Griffin-Floyd Hall" => array(
    "bldg"         => "0010",
    "fullName"     => "B.H. Griffin - W.L. Floyd Hall",
    "abbreviation" => "FLO",
    "address"      => "230 NEWELL DR GAINESVILLE FL 32611"
  ),

  "Little Hall" => array(
    "bldg"         => "0655",
    "fullName"     => "Winston W. Little Hall",
    "abbreviation" => "LIT",
    "address"      => "1400 STADIUM RD GAINESVILLE FL 32611"
  ),

  "Matherly Hall" => array(
    "bldg"         => "0406",
    "fullName"     => "Walter J. Matherly Hall",
    "abbreviation" => "MAT",
    "address"      => "1405 W UNIVERSITY AVE GAINESVILLE FL 32611"
  ),

  "McCarty Hall C" => array(
    "bldg"         => "0497",
    "fullName"     => "Dan McCarty Hall C",
    "abbreviation" => "MCCC",
    "address"      => "1688 MCCARTY DR GAINESVILLE	FL 32611"
  ),

  "Physics Building" => array(
    "bldg"         => "0092",
    "fullName"     => "Physics Building",
    "abbreviation" => "NPB",
    "address"      => "2001 MUSEUM RD GAINESVILLE FL 32611"
  ),

  "Pugh Hall" => array(
    "bldg"         => "0072",
    "fullName"     => "Jim and Alexis Pugh Hall",
    "abbreviation" => "PUGH",
    "address"      => "296 BUCKMAN DR GAINESVILLE FL 32611"
  ),

  "Sisler Hall" => array(
    "bldg"         => "0688",
    "fullName"     => "Harry H. Sisler Hall",
    "abbreviation" => "SIS",
    "address"      => "1680 UNION RD GAINESVILLE FL 32611"
  ),

  "Turlington Hall" => array(
    "bldg"         => "0267",
    "fullName"     => "Ralph D. Turlington Hall",
    "abbreviation" => "TUR",
    "address"      => "330 NEWELL DR GAINESVILLE FL 32611"
  ),

  "Williamson Hall" => array(
    "bldg"         => "0100",
    "fullName"     => "Robert C. Williamson Hall",
    "abbreviation" => "WM",
    "address"      => "1843 STADIUM RD GAINESVILLE FL 32611"
  )
  );


$list_minors = array(
  "actuarial science minor",
  "african studies minor",
  "african-​american studies minor",
  "american indian and indigenous studies minor",
  "anthropology minor",
  "anthropology minor uf online",
  "arabic language and literature minor",
  "asian studies minor",
  "asian-​american studies minor",
  "astronomy minor",
  "botany minor",
  "chemistry minor",
  "classical studies minor",
  "communication studies minor",
  "east asian languages and literatures minor",
  "east-​central european studies minor",
  "economics minor",
  "english minor",
  "european union studies minor",
  "french and francophone studies minor",
  "geography minor",
  "geography minor uf online",
  "geology minor",
  "german minor",
  "greek studies minor",
  "health disparities in society minor",
  "hebrew minor",
  "history minor",
  "innovation minor",
  "italian studies minor",
  "jewish studies minor",
  "latin american studies minor",
  "linguistics minor",
  "mathematics minor",
  "medical geography in global health minor",
  "medieval and early modern studies minor",
  "philosophy minor",
  "physics minor",
  "portuguese minor",
  "public leadership minor",
  "religion minor",
  "religious ethics minor",
  "russian minor",
  "sociology minor",
  "sociology minor uf online",
  "spanish minor",
  "statistics minor",
  "sustainability studies minor",
  "teaching english as a second language minor",
  "theories and politics of sexuality minor",
  "women's studies minor",
  "zoology minor"
);

$list_cetificates = array(
  "east-​central european studies certificate",
  "european jewish studies certificate",
  "european union studies certificate",
  "geological sciences certificate",
  "geospatial information analysis certificate",
  "holocaust studies certificate",
  "international relations certificate",
  "latin american studies certificate",
  "legal history certificate",
  "medical anthropology certificate",
  "medical geography certificate",
  "meteorology and climatology certificate",
  "political campaigning certificate",
  "public affairs certificate",
  "russian and east-​european area studies certificate",
  "spanish for the professions certificate",
  "teaching english as a second language certificate"
);


  $list_ufOnline = array(
    "anthropology minor uf online",
    "anthropology uf online",
    "biology uf online",
    "computer science uf online",
    "criminology uf online",
    "geography minor uf online",
    "geography uf online",
    "geography, environmental geosciences, uf online",
    "geology uf online",
    "psychology uf online",
    "sociology minor uf online",
    "sociology uf online"
  );

  $list_studies = array(
    "african-​american studies",
    "classical studies",
    "french and francophone studies",
    "interdisciplinary studies clas",
    "international studies",
    "jewish studies",
    "sustainability studies",
    "women's studies"
  );


  $list_clas = array(
    "biology clas",
    "botany clas",
    "computer science clas",
    "marine sciences clas",
    "microbiology and cell sciences clas"
  );


  $list_final_majors = array(
    "african languages",
    "anthropology",
    "arabic",
    "astronomy and astrophysics",
    "chemistry biochemistry",
    "chinese",
    "criminology",
    "economics",
    "english",
    "foreign languages and literatures",
    "geography",
    "geology",
    "german",
    "hebrew",
    "hispanic and latin american languages, literatures and linguistics",
    "history",
    "italian",
    "interdisciplinary studies",
    "japanese",
    "linguistics",
    "mathematics",
    "philosophy",
    "physics",
    "political science",
    "portuguese",
    "psychology",
    "religion",
    "russian",
    "sociology",
    "spanish",
    "statistics",
    "zoology"
  );

  $list_languages = array(
    "african languages",
    "foreign languages and literatures",
    "hispanic and latin american languages"
  );
  //
  // "anthropology",
  // "arabic",
  // "astronomy and astrophysics",
  // "chemistry",
  // "biochemistry",
  // "chinese",
  // "criminology",
  // "economics",
  // "english",
  // "geography",
  // "geology",
  // "german",
  // "hebrew",
  // "history",
  // "italian",
  // "japanese",
  // "linguistics",
  // "mathematics",
  // "philosophy",
  // "physics",
  // "political science",
  // "portuguese",
  // "psychology",
  // "religion",
  // "russian",
  // "sociology",
  // "spanish",
  // "statistics",
  // "zoology",


  // $list_dump = array(
  //   "Actuarial Science Minor",
  //   "African Languages",
  //   "African Studies Minor",
  //   "African-​American Studies",
  //   "African-​American Studies Minor",
  //   "American Indian and Indigenous Studies Minor",
  //   "Anthropology",
  //   "Anthropology Minor",
  //   "Anthropology Minor UF Online",
  //   "Anthropology UF Online",
  //   "Arabic",
  //   "Arabic Language and Literature Minor",
  //   "Asian Studies Minor",
  //   "Asian-​American Studies Minor",
  //   "Astronomy and Astrophysics",
  //   "Astronomy Minor",
  //   "Biology UF Online",
  //   "Biology CLAS",
  //   "Botany Minor",
  //   "Botany CLAS",
  //   "Chemistry Minor",
  //   "Chemistry Biochemistry",
  //   "Chinese",
  //   "Classical Studies",
  //   "Classical Studies Minor",
  //   "Communication Studies Minor",
  //   "Computer Science UF Online",
  //   "Computer Science CLAS",
  //   "Criminology",
  //   "Criminology UF Online",
  //   "East Asian Languages and Literatures Minor",
  //   "East-​Central European Studies Certificate",
  //   "East-​Central European Studies Minor",
  //   "Economics",
  //   "Economics Minor",
  //   "English",
  //   "English Minor",
  //   "European Jewish Studies Certificate",
  //   "European Union Studies Certificate",
  //   "European Union Studies Minor",
  //   "Foreign Languages and Literatures",
  //   "French and Francophone Studies",
  //   "French and Francophone Studies Minor",
  //   "Geography",
  //   "Geography Minor",
  //   "Geography Minor UF Online",
  //   "Geography UF Online",
  //   "Geography, Environmental Geosciences, UF Online",
  //   "Geological Sciences Certificate",
  //   "Geology",
  //   "Geology Minor",
  //   "Geology UF Online",
  //   "Geospatial Information Analysis Certificate",
  //   "German",
  //   "German Minor",
  //   "Greek Studies Minor",
  //   "Health Disparities in Society Minor",
  //   "Hebrew",
  //   "Hebrew Minor",
  //   "Hispanic and Latin American Languages, Literatures and Linguistics",
  //   "History",
  //   "History Minor",
  //   "Holocaust Studies Certificate",
  //   "Innovation Minor",
  //   "Interdisciplinary Studies CLAS",
  //   "International Relations Certificate",
  //   "International Studies",
  //   "Italian",
  //   "Italian Studies Minor",
  //   "Japanese",
  //   "Jewish Studies",
  //   "Jewish Studies Minor",
  //   "Latin American Studies Certificate",
  //   "Latin American Studies Minor",
  //   "Legal History Certificate",
  //   "Linguistics",
  //   "Linguistics Minor",
  //   "Marine Sciences CLAS",
  //   "Mathematics",
  //   "Mathematics Minor",
  //   "Medical Anthropology Certificate",
  //   "Medical Geography Certificate",
  //   "Medical Geography in Global Health Minor",
  //   "Medieval and Early Modern Studies Minor",
  //   "Meteorology and Climatology Certificate",
  //   "Microbiology and Cell Sciences CLAS",
  //   "Philosophy",
  //   "Philosophy Minor",
  //   "Physics",
  //   "Physics Minor",
  //   "Political Campaigning Certificate",
  //   "Political Science",
  //   "Portuguese",
  //   "Portuguese Minor",
  //   "Psychology",
  //   "Psychology UF Online",
  //   "Public Affairs Certificate",
  //   "Public Leadership Minor",
  //   "Religion",
  //   "Religion Minor",
  //   "Religious Ethics Minor",
  //   "Russian",
  //   "Russian and East-​European Area Studies Certificate",
  //   "Russian Minor",
  //   "Sociology",
  //   "Sociology Minor",
  //   "Sociology Minor UF Online",
  //   "Sociology UF Online",
  //   "Spanish",
  //   "Spanish for the Professions Certificate",
  //   "Spanish Minor",
  //   "Statistics",
  //   "Statistics Minor",
  //   "Sustainability Studies",
  //   "Sustainability Studies Minor",
  //   "Teaching English as a Second Language Certificate",
  //   "Teaching English as a Second Language Minor",
  //   "Theories and Politics of Sexuality Minor",
  //   "Women's Studies",
  //   "Women's Studies Minor",
  //   "Zoology",
  //   "Zoology Minor",
  // );
