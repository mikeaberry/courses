<?php 

// $html = '<div class="container">
//     <div id="wrapper">
//         <h1 class="ttl">Welcome to CodexWorld</h1>
//         <div id="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
//     </div>
// </div>';

// echo $html;

// $html = preg_replace('#<h1 class="ttl">(.*?)</h1>#', '', $html);

// echo $html;


// // $footer = '<div class="col-sm-4"><p>Mary is here</p></div>';  
// // //$footer = str_replace(' ','',$footer);
// // //$footer = preg_replace('/\s+/','',$footer);
// // $footer = trim($footer);

// // echo $footer;

// // $footer = preg_replace('#<div class="col-sm-4">(.*?)</div>#', '', $footer);

// // echo $footer;


// $pg_primary_nav = '<nav class="navigation-bar"><div class="container"><div class="toggle-navigation primary-toggle"><button class="navigation-button"aria-expanded="false" aria-controls="primary-nav">Navigation <i class="chevron down"></i></button></div><ul class="navigation-bar-nav primary-nav" id="primary-nav"><li><a href="/subjects/entry/academic-entry-explained/">Academic entry explained</a></li><li><a href="/subjects/entry/">Entry requirements</a></li><li><a href="/subjects/non-degree-courses/">Non-degree courses</a></li><li><a href="https://www.st-andrews.ac.uk/subjects/entry/indicator">Qualification indicator</a></li><li><a href="/subjects/study-options/">Study options</a></li></ul></div></nav>';

// echo $pg_primary_nav;

// $pg_primary_nav = preg_replace('#<nav class="navigation-bar">(.*?)</nav>#', '<h3>I was removed</h3>', $pg_primary_nav);

// echo $pg_primary_nav;

// echo '==================================================================';


// // ug navigation.

// $ug_secondary_nav = '<nav class="navigation-bar subnav" aria-label="Secondary menu"><div class="container"><div class="toggle-navigation secondary-toggle"><button class="navigation-button" aria-expanded="false" aria-controls="secondary-nav">Section navigation <i class="chevron down"></i></button></div><ul class="navigation-bar-nav secondary-nav" id="secondary-nav"><li><a href="/courses/2023-2024/ug/">Undergraduate</a></li><li><a href="/courses/2023-2024/pg/">Postgraduate</a></li></ul></div></nav>';

// echo $ug_secondary_nav;



// $ug_secondary_nav = preg_replace('#<nav class="navigation-bar subnav" aria-label="Secondary menu">(.*?)</nav>#', '<h3>I was removed</h3>', $ug_secondary_nav);

// echo $ug_secondary_nav . 'Mike is here';
// echo '==================================================================';

$header = '<header id="header">
<div class="row">
    <div id="logo-container">
        <div id="header-logo"><a href="https://www.st-andrews.ac.uk/" aria-label="University of St Andrews"><span>University of St&nbsp;Andrews</span></a></div>
    </div>
    <div id="header-search">
       <button class="btn btn-link" id="header-search-trigger" name="btnG" aria-label="Toggle search" value=""><i class="fa fa-search" aria-hidden="true"></i><span class="sr-only">Toggle search</span></button>
<form action="https://www.st-andrews.ac.uk/search" method="get" role="search" class="dpl-form">
      <app-root _nghost-ng-c750168442="" ng-version="17.0.5"><app-input-field _ngcontent-ng-c750168442="" _nghost-ng-c2465190736=""><div _ngcontent-ng-c2465190736="" class="input-group"><span _ngcontent-ng-c2465190736="" class="input-group-btn"><button _ngcontent-ng-c2465190736="" id="header-search-close" name="btnG" value="" aria-label="Hide search" type="button" class="btn btn-lg btn-link"><i _ngcontent-ng-c2465190736="" aria-hidden="true" class="fa fa-times"></i><span _ngcontent-ng-c2465190736="" class="sr-only">Hide search</span></button></span><span _ngcontent-ng-c2465190736=""><button _ngcontent-ng-c2465190736="" tabindex="0" id="microphone-input-icon" type="button" aria-label="Voice search" value="" class="fa fa-microphone" style="display: block;"></button></span><input _ngcontent-ng-c2465190736="" id="autotype-input" name="query" required="" autocomplete="off" spellcheck="false" dir="auto" type="search" aria-label="Search by keyword or phrase, use arrow keys to move between suggested search terms" maxlength="256" placeholder="Search the University website" class="clearable form-control search-box"><button _ngcontent-ng-c2465190736="" id="clear-input-icon" type="reset" aria-label="Reset" value="Reset" class="clear-icon"></button><span _ngcontent-ng-c2465190736="" class="input-group-btn"><button _ngcontent-ng-c2465190736="" id="header-search-submit" name="btnG" type="submit" value="Search" aria-label="Submit" class="btn btn-lg btn-primary"><i _ngcontent-ng-c2465190736="" aria-hidden="true" class="fa fa-search"></i><span _ngcontent-ng-c2465190736="" class="sr-only">Submit</span></button></span></div></app-input-field><app-autocomplete-window _ngcontent-ng-c750168442="" _nghost-ng-c1442127194="" class="ng-tns-c1442127194-0"><div _ngcontent-ng-c1442127194="" aria-live="polite" aria-relevant="additions" id="t4-autotype" class="autotype ng-tns-c1442127194-0 ng-trigger ng-trigger-typeAhead" hidden="" style="display: none;"><div _ngcontent-ng-c1442127194="" id="window-header" class="ng-tns-c1442127194-0"><app-window-input-field _ngcontent-ng-c1442127194="" class="ng-tns-c1442127194-0" _nghost-ng-c453809421=""><label _ngcontent-ng-c453809421="" for="main-search"><!----></label><span _ngcontent-ng-c453809421="" class="ng-star-inserted" style="">Search for:</span><!----><input _ngcontent-ng-c453809421="" id="main-search" type="text" autocomplete="off" class="main-input"></app-window-input-field><i _ngcontent-ng-c1442127194="" id="autotype-close" class="fa fa-close ng-tns-c1442127194-0"><span _ngcontent-ng-c1442127194="" class="sr-only ng-tns-c1442127194-0">Close window</span></i></div><div _ngcontent-ng-c1442127194="" class="results-container ng-tns-c1442127194-0"><app-top-tasks _ngcontent-ng-c1442127194="" class="ng-tns-c1442127194-0" _nghost-ng-c1302901707=""><div _ngcontent-ng-c1302901707="" id="top-tasks" class="d-inline-flex p-2 fullwidth"><div _ngcontent-ng-c1302901707="" class="top-task-header"><h2 _ngcontent-ng-c1302901707="" class="top-task-title">Popular searches</h2><i _ngcontent-ng-c1302901707="" class="top-task-title-line"></i></div><a _ngcontent-ng-c1302901707="" class="atc top-task-link ng-star-inserted" href="https://www.st-andrews.ac.uk/search/?query=Semester dates&amp;btnG=Search&amp;collection=uosa-meta-global&amp;profile=_default&amp;form=partial"><i _ngcontent-ng-c1302901707="" class="fa fa-search"></i> Semester dates</a><!----><a _ngcontent-ng-c1302901707="" class="atc top-task-link ng-star-inserted" href="https://www.st-andrews.ac.uk/search/?query=Psychology&amp;btnG=Search&amp;collection=uosa-meta-global&amp;profile=_default&amp;form=partial"><i _ngcontent-ng-c1302901707="" class="fa fa-search"></i> Psychology</a><!----><a _ngcontent-ng-c1302901707="" class="atc top-task-link ng-star-inserted" href="https://www.st-andrews.ac.uk/library/"><i _ngcontent-ng-c1302901707="" class="fa fa-file"></i> Library</a><!----><a _ngcontent-ng-c1302901707="" class="atc top-task-link ng-star-inserted" href="https://www.st-andrews.ac.uk/search/?query=Medicine&amp;btnG=Search&amp;collection=uosa-meta-global&amp;profile=_default&amp;form=partial"><i _ngcontent-ng-c1302901707="" class="fa fa-search"></i> Medicine</a><!----><a _ngcontent-ng-c1302901707="" class="atc top-task-link ng-star-inserted" href="https://www.st-andrews.ac.uk/search/?query=Qlikview&amp;btnG=Search&amp;collection=uosa-meta-global&amp;profile=_default&amp;form=partial"><i _ngcontent-ng-c1302901707="" class="fa fa-search"></i> Qlikview</a><!----><a _ngcontent-ng-c1302901707="" class="atc top-task-link ng-star-inserted" href="https://www.st-andrews.ac.uk/search/?query=Law&amp;btnG=Search&amp;collection=uosa-meta-global&amp;profile=_default&amp;form=partial"><i _ngcontent-ng-c1302901707="" class="fa fa-search"></i> Law</a><!----><a _ngcontent-ng-c1302901707="" class="atc top-task-link ng-star-inserted" href="https://www.vacancies.st-andrews.ac.uk/"><i _ngcontent-ng-c1302901707="" class="fa fa-file"></i> Vacancies</a><!----><!----></div></app-top-tasks><app-search-results _ngcontent-ng-c1442127194="" id="main-dsp" class="fullWidth ng-tns-c1442127194-0" _nghost-ng-c1307720462=""><div _ngcontent-ng-c1307720462="" id="search-results"><div _ngcontent-ng-c1307720462=""></div><!----><div _ngcontent-ng-c1307720462=""></div><!----><div _ngcontent-ng-c1307720462=""></div><!----></div></app-search-results></div><div _ngcontent-ng-c1442127194="" id="window-footer" class="ng-tns-c1442127194-0"><i _ngcontent-ng-c1442127194="" id="autotype-close-footer" class="fa fa-close ng-tns-c1442127194-0"><span _ngcontent-ng-c1442127194="" class="sr-only ng-tns-c1442127194-0">Close window</span></i></div></div></app-autocomplete-window></app-root>
        <input type="hidden" name="collection" value="uosa-meta-global">
        <input type="hidden" name="profile" value="_default">
        <input type="hidden" name="form" value="partial">
    </form>
    </div>
</div>
</header>';



$text = "<p>This is some random text</p>";
echo $text;
$text = str_replace($text, "<p>I've gone!</p>", $text);

echo $text . '<br>';


//$text = "<p>This is some random text</p>";
echo $header;
$header = str_replace($header, "<p>I've gone!</p>", $header);

echo $header;

//$html = '<h1>Hello from Mike</h1>';


$footer = '<div id="website-footer">
  <div id="d.en.9168" class="container">
    <div class="row">
      <div class="col-sm-4">
        <h2>Subjects at St&nbsp;Andrews</h2>
<ul>
<li><a href="/subjects/ancient-history/" target="null">Ancient history</a></li>
<li><a href="/subjects/arabic/" target="null">Arabic</a></li>
<li><a href="/subjects/archaeology/" target="null">Archaeology</a></li>
<li><a href="/subjects/art-history/" target="null">Art history</a></li>
<li><a href="/subjects/biology/" target="null">Biology</a></li>
<li><a href="/subjects/chemistry/" target="null">Chemistry</a></li>
<li><a href="/subjects/chinese-studies/" target="null">Chinese studies</a></li>
<li><a href="/subjects/classical-studies/" target="null">Classical studies</a></li>
<li><a href="/subjects/classics-greek-latin/" target="null">Classics, Greek and Latin</a></li>
<li><a href="/subjects/comparative-literature/" target="null">Comparative literature</a></li>
<li><a href="/subjects/computer-science/" target="null">Computer science</a></li>
<li><a href="/subjects/creative-writing/" target="null">Creative writing</a></li>
<li><a href="/subjects/divinity/" target="null">Divinity</a></li>
<li><a href="/subjects/earth-environmental-sciences/" target="null">Earth and environmental sciences</a></li>
<li><a href="/subjects/economics/" target="null">Economics and finance</a>&nbsp;</li>
<li><a href="/subjects/english/" target="null">English</a></li>
<li><a href="/subjects/film-studies/" target="null">Film studies</a></li>
<li><a href="/subjects/french/" target="null">French</a></li>
<li><a href="/subjects/geography/" target="null">Geography</a></li>
<li><a href="/subjects/german/" target="null">German</a></li>
<li><a href="/subjects/history/" target="null">History</a></li>
<li><a href="/subjects/interdisciplinary/" target="null">Interdisciplinary studies</a></li>
<li><a href="/subjects/international-education/">International Education</a></li>
</ul>
      </div>
      <div class="col-sm-4">
        <p>&nbsp;</p>
<ul>
<li><a href="/subjects/international-relations/" target="null">International relations</a></li>
<li><a href="/subjects/italian/" target="null">Italian</a></li>
<li><a href="/subjects/management/" target="null">Management</a></li>
<li><a href="/subjects/marine-biology/" target="null">Marine biology</a></li>
<li><a href="/subjects/mathematics/" target="null">Mathematics</a></li>
<li><a href="/subjects/medicine/" target="null">Medicine</a></li>
<li><a href="/subjects/medieval-studies/" target="null">Medieval studies</a></li>
<li><a href="/subjects/middle-east-studies/" target="null">Middle East studies</a></li>
<li><a href="/subjects/music/" target="null">Music</a></li>
<li><a href="/subjects/neuroscience/" target="null">Neuroscience</a></li>
<li><a href="/subjects/persian/" target="null">Persian</a></li>
<li><a href="/subjects/philosophy/" target="null">Philosophy</a></li>
<li><a href="/subjects/physics/" target="null">Physics and astronomy</a></li>
<li><a href="/subjects/psychology/" target="null">Psychology</a></li>
<li><a href="/subjects/russian/" target="null">Russian</a></li>
<li><a href="/subjects/social-anthropology/" target="null">Social anthropology</a></li>
<li><a href="/subjects/spanish/" target="null">Spanish</a></li>
<li><a href="/subjects/statistics/" target="null">Statistics</a></li>
<li><a href="/subjects/sustainable-development/" target="null">Sustainable development</a></li>
<li><a href="/subjects/tesol/" target="null">Teaching English to speakers of other languages (TESOL)</a></li>
</ul>
      </div>
      <div class="col-sm-4">
        <h3><a href="/study/contact/">Contact us</a></h3>
<p><strong>Admissions</strong><br>University of St&nbsp;Andrews<br>St Katharine’s West<br>16 The Scores<br>St&nbsp;Andrews<br>KY16 9AX</p>
<p><strong>Email</strong>:&nbsp;<a href="mailto:admissions@st-andrews.ac.uk">admissions@st-andrews.ac.uk</a><br><strong>Phone</strong>:&nbsp;<a href="tel:+44 (0)1334 46 2150">+44 (0)1334 46&nbsp;2150</a></p>
<h3>Navigation</h3>
<ul>
<li><a href="/subjects/study-options/" target="null">Study options</a></li>
<li><a href="/subjects/non-degree-courses/" target="null">Non-degree courses</a></li>
<li><a href="/subjects/entry/" target="null">Entry requirements</a></li>
<li><a href="/subjects/modules/" target="null">Search for modules</a></li>
<li><a href="https://www.st-andrews.ac.uk/subjects/specs/">Programme specifications</a></li>
<li><a href="https://www.st-andrews.ac.uk/subjects/reqs/">Programme requirements</a></li>
<li><a href="https://www.st-andrews.ac.uk/study/">Study at St&nbsp;Andrews</a></li>
</ul>
      </div>
    </div>
</div>
</div> 
<div id="university-footer">
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <p id="footer-charity">© 2024 The University of St&nbsp;Andrews is a charity registered in Scotland, No: SC013532</p>
      <ul id="footer-links">
<li><a class="footer-links__link cookie-control__open" aria-controls="ccc-module" tabindex="0">Cookie preferences</a></li>
        <li><a href="https://www.st-andrews.ac.uk/digital-standards/accessibility/accessibility-statement/" class="footer-links__link">Accessibility statement</a></li>
        <li><a href="https://www.st-andrews.ac.uk/terms/" class="footer-links__link">Terms and conditions</a></li>
        <li><a href="https://www.st-andrews.ac.uk/help/" class="footer-links__link">Website help</a></li>
      </ul>
    </div>
  </div>
</div>
</div>

';

$footer_sub1 = '<ul>
<li><a href="/subjects/ancient-history/" target="null">Ancient history</a></li>
<li><a href="/subjects/arabic/" target="null">Arabic</a></li>
<li><a href="/subjects/archaeology/" target="null">Archaeology</a></li>
<li><a href="/subjects/art-history/" target="null">Art history</a></li>
<li><a href="/subjects/biology/" target="null">Biology</a></li>
<li><a href="/subjects/chemistry/" target="null">Chemistry</a></li>
<li><a href="/subjects/chinese-studies/" target="null">Chinese studies</a></li>
<li><a href="/subjects/classical-studies/" target="null">Classical studies</a></li>
<li><a href="/subjects/classics-greek-latin/" target="null">Classics, Greek and Latin</a></li>
<li><a href="/subjects/comparative-literature/" target="null">Comparative literature</a></li>
<li><a href="/subjects/computer-science/" target="null">Computer science</a></li>
<li><a href="/subjects/creative-writing/" target="null">Creative writing</a></li>
<li><a href="/subjects/divinity/" target="null">Divinity</a></li>
<li><a href="/subjects/earth-environmental-sciences/" target="null">Earth and environmental sciences</a></li>
<li><a href="/subjects/economics/" target="null">Economics and finance</a>&nbsp;</li>
<li><a href="/subjects/english/" target="null">English</a></li>
<li><a href="/subjects/film-studies/" target="null">Film studies</a></li>
<li><a href="/subjects/french/" target="null">French</a></li>
<li><a href="/subjects/geography/" target="null">Geography</a></li>
<li><a href="/subjects/german/" target="null">German</a></li>
<li><a href="/subjects/history/" target="null">History</a></li>
<li><a href="/subjects/interdisciplinary/" target="null">Interdisciplinary studies</a></li>
<li><a href="/subjects/international-education/">International Education</a></li>
</ul>';

//echo $footer;

$html =  '<h1>Hello from Mike</h1>' .$footer . '<h2>Bye from Mike</h2>';
echo $html;
$html = str_replace($footer, 'Gone gone gone!', $html);
echo $html;
?>