<?php
require_once dirname(__DIR__) . '/proxy/config.php';
require_once __DIR__ . '/cms-image-alt.php';
require_once __DIR__ . '/layout-parts-resolve.php';
$api_url = "https://dps.allenhouseschools.com";

/** Branch id for gallery year API (photo_gallery_data / achievement_data use branch/6). */
if (!defined('DPS_INDIRANAGAR_GALLERY_BRANCH_ID')) {
    define('DPS_INDIRANAGAR_GALLERY_BRANCH_ID', DPS_INDIRANAGAR_BRANCH_ID);
}

function fetchMultipleApiData($endpoints)
{
    $baseUrl = "https://dps.allenhouseschools.com/api";
    $mh = curl_multi_init();
    $curlHandles = [];
    $responses = [];
    // Create all curl handles
    foreach ($endpoints as $key => $endpoint) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $baseUrl . $endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // disable SSL check if needed
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, api_auth_headers());
        curl_multi_add_handle($mh, $ch);
        $curlHandles[$key] = $ch;
    }
    $running = null;
    do {
        $status = curl_multi_exec($mh, $running);

        if ($status > CURLM_OK) {
            break;
        }
        curl_multi_select($mh);
        usleep(10000);
    } while ($running > 0);

    // Collect responses
    foreach ($curlHandles as $key => $ch) {
        $content = curl_multi_getcontent($ch);
        $responses[$key] = json_decode($content, true);
        curl_multi_remove_handle($mh, $ch);
        curl_close($ch);
    }
    curl_multi_close($mh);
    return $responses;
}
$endpoints = [
    'home_data'   => '/pages/home-page-indiranagar',
    'menu_data'   => '/menus/2',
    'flyer_data'   => '/flyers/branch/6',
    'statistic_data' => '/statistics/branch/6',
    'header_footer_data' => '/public/branches/6/layout-parts/',
    'scroll_text_data' => '/scrolling-texts/branch/6',
    'excellence_data' => '/pages/excellence-in-action-page-indiranagar',
    'celebrating_data' => '/pages/celebrating-excellence-page-indiranagar',
    'spotlight_data' => '/pages/excellence-in-the-spotlight-page-indiranagar',
    'embark_data' => '/pages/embark-on-a-journey-of-excellence-page-indiranagar',
    'mv_data' => '/pages/mission-vision-and-core-values-page-indiranagar',
    'ourmotto_data' => '/pages/our-motto-aspiration-span-page-indiranagar',
    'indiranagarhistory_data' => '/pages/dps-indira-nagar-history-page-indiranagar',
    'society_data' => '/pages/dps-society-page-indiranagar',
    'chairmans_data' => '/pages/chairmans-message-page-indiranagar',
    'principals_data' => '/pages/principals-message-page-indiranagar',
    'managementcommittee_data' => '/pages/management-committee-page-indiranagar',
    'protection_data' => '/pages/protection-against-child-abuse-and-harassment-committee-page-indiranagar',
    'parentteachers_data' => '/pages/parent-teachers-association-pta-members-page-indiranagar',
    'foodhygiene_data' => '/pages/food-hygiene-committee-page-indiranagar',
    'disastermanagement_data' => '/pages/disaster-management-committee-page-indiranagar',
    'grievance_data' => '/pages/grievance-redressal-committee-page-indiranagar',
    'facultylist_data' => '/pages/faculty-list-page-indiranagar',
    'schoolguidelines_data' => '/pages/school-guidelines-page-indiranagar',
    'ourcurriculum_data' => '/pages/our-curriculum-page-indiranagar',
    'foundationalstage_data' => '/pages/foundational-stage-page-indiranagar-',
    'preparatorystage_data' => '/pages/preparatory-stage-page-indiranagar-',
    'middlestage_data' => '/pages/middle-stage-page-indiranagar-',
    'secondarystage_data' => '/pages/secondary-stage-page-indiranagar-',
    'funland_data' => '/pages/fun-land-yard-page-indiranagar-',
    'smartclassrooms_data' => '/pages/smart-classrooms-page-indiranagar-',
    'library_data' => '/pages/library-page-indiranagar-',
    'physics_data' => '/pages/physics-page-indiranagar-',
    'chemistry_data' => '/pages/chemistry-page-indiranagar-',
    'biology_data' => '/pages/biology-page-indiranagar-',
    'composite_data' => '/pages/composite-page-indiranagar-',
    'codings_data' => '/pages/coding-page-indiranagar-',
    'computer_data' => '/pages/computer-page-indiranagar-',
    'animation_data' => '/pages/animation-page-indiranagar-',
    'sportsroom_data' => '/pages/sports-room-page-indiranagar-',
    'playground_data' => '/pages/playground-page-indiranagar-',
    'dances_data' => '/pages/dance-room-page-indiranagar-',
    'music_data' => '/pages/music-room-page-indiranagar-',
    'art_data' => '/pages/art-room-page-indiranagar-',
    'counsellingcell_data' => '/pages/counselling-cell-page-indiranagar-',
    'infirmarys_data' => '/pages/infirmary-page-indiranagar-',
    'cafeteria_data' => '/pages/cafeteria-page-indiranagar-',
    'subjects_data' => '/pages/subjects-page-indiranagar-',
    'assessmentsystem_data' => '/pages/assessment-system-and-schedule-page-indiranagar-',
    'academiccalendars_data' => '/pages/academic-calendar-page-indiranagar-',
    'cocurricular_data' => '/pages/co-curricular-activities-page-indiranagar-',
    'outbounds_data' => '/pages/outbounds-page-indiranagar-',
    'animations_data' => '/pages/animation-page-indiranagar-',
    'coding_data' => '/pages/coding-page-indiranagar-',
    'oluxismart_data' => '/pages/oluxi-smart-skill-page-indiranagar-',
    'financialliteracy_data' => '/pages/financial-literacy-page-indiranagar-',
    'housesystem_data' => '/pages/house-system-page-indiranagar-',
    'studentcouncil_data' => '/pages/student-council-page-indiranagar-',
    'peereducation_data' => '/pages/peer-education-program-page-indiranagar-',
    'muskuratechehre_data' => '/pages/muskurate-chehre-page-indiranagar-',
    'convergence_data' => '/pages/convergence-page-indiranagar-',
    'careerguidance_data' => '/pages/career-guidance-and-counselling-program-page-indiranagar-',
    'seniorwing_data' => '/pages/senior-wing-page-indiranagar-',
    'middlewing_data' => '/pages/middle-wing-page-indiranagar-',
    'primarywing_data' => '/pages/primary-wing-page-indiranagar-',
    'rhapsody_data' => '/pages/rhapsody-page-indiranagar-',
    'annualsports_data' => '/pages/annual-sports-day-page-indiranagar-',
    'innovision_data' => '/pages/innovision-page-indiranagar-',
    'winter_data' => '/pages/winter-carnival-page-indiranagar-',
    'investitureceremony_data' => '/pages/investiture-ceremony-page-indiranagar-',
    'citation_data' => '/pages/citation-page-indiranagar-',
    'summercamp_data' => '/pages/summer-camp-page-indiranagar-',
    'interschool_data' => '/pages/inter-school-competitions-page-indiranagar-',
    'admissioncriteria_data' => '/pages/admission-criteria-page-indiranagar',
    'withdrawalpolicy_data' => '/pages/withdrawal-policy-page-indiranagar',
    'grouptransfer_data' => '/pages/group-transfer-policy-page-indiranagar',
    'busroutes_data' => '/pages/bus-routes-page-indiranagar',
    'academicachievements_data' => '/pages/academic-achievements-page-indiranagar',
    'extracurricular_data' => '/pages/extra-curricular-achievements-page-indiranagar',
    'awardaccolades_data' => '/pages/award-and-accolades-page-indiranagar',
    'photogallery_data' => '/pages/photo-gallery-page-indiranagar',
    'videogallery_data' => '/pages/video-gallery-page-indiranagar',
    'mediagallery_data' => '/pages/media-gallery-page-indiranagar',
    'ourstory_data' => '/pages/our-story-page-indiranagar',
    'facilities_data' => '/pages/facilities-page-indiranagar',
    'cbsemandatory_data' => '/pages/cbse-mandatory-public-disclosure-page-indiranagar',
    'documents_data' => '/pages/documents-and-information-page-indiranagar',
    'results_data' => '/pages/results-and-academics-page-indiranagar',
    'staffteaching_data' => '/pages/staff-teaching-page-indiranagar',
    'schoolinfrastructure_data' => '/pages/school-infrastructure-page-indiranagar',
    'dpsshuman_data' => '/pages/dpss-human-resource-department-page-indiranagar',
    'cbseinformation_data' => '/pages/cbse-information-page-indiranagar',
    'superhouseeducation_data' => '/pages/superhouse-education-page-indiranagar',
    'faqs_data' => '/pages/faqs-page-indiranagar',
    'photo_gallery_data' => '/galleries/type/gallery/branch/6',
    'achievement_data' => '/galleries/type/achievements/branch/6',
    'process_____data' => '/accordions/branch/6/filter/id?id=2',
    'fee_____data' => '/accordions/branch/6/filter/id?id=1',
    'footer_link_data' => '/public/link-groups/position/footer/hierarchical?branch_id=6',
    'contact_data' => '/pages/contact-us-page-indiranagar',
   'jobs_data' => '/jobs/branch/6',
   'process_data' => '/pages/process-page-indiranagar',
   'fee_data' => '/pages/fee-structure-page-indiranagar',
    'bus_routes_data' => '/pages/bus-routes-page-indiranagar',
    'route_data' => '/get-bus-routes/6',
    'blogData' => '/blogs/branch/6',
    'testimonial_data' => '/pages/testimonials-page-indiranagar',
    'terms_and_conditions' => '/pages/terms-and-conditions-page-indiranagar',
    'robotics_data' => '/pages/robotics'
];

$data = fetchMultipleApiData($endpoints);
$home_data   = $data['home_data'];
$contact_data = $data['contact_data'];
$menu_data = $data['menu_data'];
$flyer_data = $data['flyer_data'];
$header_footer_data = $data['header_footer_data'];
$footer_layout_meta = dps_resolve_footer_layout_meta($header_footer_data);
$scroll_text_data = $data['scroll_text_data'];
$excellence_data   = $data['excellence_data'];
$celebrating_data   = $data['celebrating_data'];
$spotlight_data   = $data['spotlight_data'];
$embark_data   = $data['embark_data'];
$statistic_data = $data['statistic_data'];
$mv_data   = $data['mv_data'];
$ourmotto_data   = $data['ourmotto_data'];
$indiranagarhistory_data   = $data['indiranagarhistory_data'];
$society_data   = $data['society_data'];
$chairmans_data   = $data['chairmans_data'];
$principals_data   = $data['principals_data'];
$managementcommittee_data   = $data['managementcommittee_data'];
$protection_data   = $data['protection_data'];
$parentteachers_data   = $data['parentteachers_data'];
$foodhygiene_data   = $data['foodhygiene_data'];
$disastermanagement_data   = $data['disastermanagement_data'];
$grievance_data   = $data['grievance_data'];
$facultylist_data   = $data['facultylist_data'];
$schoolguidelines_data   = $data['schoolguidelines_data'];
$ourcurriculum_data   = $data['ourcurriculum_data'];
$foundationalstage_data   = $data['foundationalstage_data'];
$foundationalstage_data   = $data['foundationalstage_data'];
$preparatorystage_data   = $data['preparatorystage_data'];
$middlestage_data   = $data['middlestage_data'];
$secondarystage_data   = $data['secondarystage_data'];
$funland_data   = $data['funland_data'];
$smartclassrooms_data   = $data['smartclassrooms_data'];
$library_data   = $data['library_data'];
$physics_data   = $data['physics_data'];
$physics_data   = $data['physics_data'];
$chemistry_data   = $data['chemistry_data'];
$biology_data   = $data['biology_data'];
$composite_data   = $data['composite_data'];
$codings_data   = $data['codings_data'];
$computer_data   = $data['computer_data'];
$animation_data   = $data['animation_data'];
$sportsroom_data   = $data['sportsroom_data'];
$playground_data   = $data['playground_data'];
$dances_data   = $data['dances_data'];
$art_data   = $data['art_data'];
$counsellingcell_data   = $data['counsellingcell_data'];
$infirmarys_data   = $data['infirmarys_data'];
$cafeteria_data   = $data['cafeteria_data'];
$subjects_data   = $data['subjects_data'];
$assessmentsystem_data   = $data['assessmentsystem_data'];
$academiccalendars_data   = $data['academiccalendars_data'];
$cocurricular_data   = $data['cocurricular_data'];
$outbounds_data   = $data['outbounds_data'];
$animations_data   = $data['animations_data'];
$coding_data   = $data['coding_data'];
$oluxismart_data   = $data['oluxismart_data'];
$financialliteracy_data   = $data['financialliteracy_data'];
$housesystem_data   = $data['housesystem_data'];
$studentcouncil_data   = $data['studentcouncil_data'];
$peereducation_data   = $data['peereducation_data'];
$music_data   = $data['music_data'];
// today works
$muskuratechehre_data   = $data['muskuratechehre_data'];
$convergence_data   = $data['convergence_data'];
$careerguidance_data   = $data['careerguidance_data'];
$seniorwing_data   = $data['seniorwing_data'];
$middlewing_data   = $data['middlewing_data'];
$primarywing_data   = $data['primarywing_data'];
$rhapsody_data   = $data['rhapsody_data'];
$annualsports_data   = $data['annualsports_data'];
$innovision_data   = $data['innovision_data'];
$winter_data   = $data['winter_data'];
$investitureceremony_data   = $data['investitureceremony_data'];
$citation_data   = $data['citation_data'];
$summercamp_data   = $data['summercamp_data'];
$interschool_data   = $data['interschool_data'];
$admissioncriteria_data   = $data['admissioncriteria_data'];
$withdrawalpolicy_data   = $data['withdrawalpolicy_data'];
$grouptransfer_data   = $data['grouptransfer_data'];
$busroutes_data   = $data['busroutes_data'];
$academicachievements_data   = $data['academicachievements_data'];
$extracurricular_data   = $data['extracurricular_data'];
$awardaccolades_data   = $data['awardaccolades_data'];
$photogallery_data   = $data['photogallery_data'];
$videogallery_data   = $data['videogallery_data'];
$mediagallery_data   = $data['mediagallery_data'];
$ourstory_data   = $data['ourstory_data'];
$facilities_data   = $data['facilities_data'];
$cbsemandatory_data   = $data['cbsemandatory_data'];
$documents_data   = $data['documents_data'];
$results_data   = $data['results_data'];
$staffteaching_data   = $data['staffteaching_data'];
$schoolinfrastructure_data   = $data['schoolinfrastructure_data'];
$dpsshuman_data   = $data['dpsshuman_data'];
$cbseinformation_data   = $data['cbseinformation_data'];
$superhouseeducation_data   = $data['superhouseeducation_data'];
$faqs_data   = $data['faqs_data'];
$process_____data = $data['process_____data'];
$photo_gallery_data = $data['photo_gallery_data'];
$achievement_data = $data['achievement_data'];
$fee_____data = $data['fee_____data'];
$footer_link_data = $data['footer_link_data'];
$jobs_data = $data['jobs_data'];
$process_data = $data['process_data'];
$fee_data = $data['fee_data'];
$bus_routes_data = $data['bus_routes_data'];
$route_data = $data['route_data'];
$blogData = $data['blogData'];
$testimonial_data = $data['testimonial_data'];
$terms_and_conditions = $data['terms_and_conditions'];
$robotics_data   = $data['robotics_data'];