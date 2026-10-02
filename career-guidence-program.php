<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $careerguidance_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $careerguidance_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $careerguidance_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($careerguidance_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($careerguidance_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h2>
            </div>
        </div>

        <div class="flex m-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="/" class="inline-flex items-center text-sm font-medium text-blue-main">
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4"></path>
                        </svg>
                        <p class="ms-1 text-sm font-medium text-blue-main">Future Ready Skills
                        </p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="career-guidence-program" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($careerguidance_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">

            <!-- Career Guidance & Planning Section -->
            <div class="md:flex gap-9 mt-6 mb-10">
                <div class="md:w-[40%]">
                    <img src="<?= $careerguidance_data['data']['sections'][1]['columns'][0]['image_url'] ?? "" ?>"
                        alt="<?= cms_image_alt($careerguidance_data['data']['sections'][1]['columns'][0] ?? [], 'Career Guidance'); ?>" class="w-[100%] rounded-md shadow">
                </div>
                <div class="md:w-[60%]">
                     <?= $careerguidance_data['data']['sections'][1]['columns'][1]['content'] ?? "" ?>
                    <!-- <p class="text-gray-600">
                        Delhi Public School Indira Nagar offers a well-structured career path for students, guiding them
                        toward academic excellence and professional success.
                    </p>
                    <br>
                    <p class="text-gray-600">
                        <span class="text-gray-700 font-semibold">Workshops and Seminars:</span> Interactive sessions on
                        various career-related topics, such as resume writing, interview skills, and exploring different
                        career fields.
                    </p>
                    <br>
                    <p class="text-gray-600">
                        <span class="text-gray-700 font-semibold">Career Exploration Activities:</span> Opportunities to
                        learn about different careers through guest speakers, field trips, and job shadowing
                        experiences.
                    </p>
                    <br>
                    <p class="text-gray-600">
                        <span class="text-gray-700 font-semibold">Information Resources:</span> Access to a library of
                        resources, including books, articles, and online tools, to help students research different
                        career options.
                    </p>
                    <br>
                    <p class="text-gray-600">
                        Our dedicated counsellors are here to empower you with the knowledge, skills, and support you
                        need to make informed decisions and embark on a fulfilling and successful career journey. We’re
                        here to listen, to guide, and to walk alongside you as you discover your path. Is bright, and
                        we’re here to help you shine.
                    </p>
                    <br>
                    <p class="text-gray-600">
                        <span class="text-gray-700 font-semibold">Senior Secondary Streams:</span> At Senior Secondary,
                        the students choose specialized streams: Science, Commerce, or Humanities. Career counseling
                        sessions help students make informed decisions.
                    </p> -->

                </div>
            </div>

            <p class="text-gray-600">
                 <?= $careerguidance_data['data']['sections'][2]['content'] ?? "" ?>
                <!-- <span class="text-gray-700 font-semibold">Beyond the School Frontiers:</span> The DPS alumni pursue
                higher education in prestigious universities worldwide, and strong emphasis is laid on leadership,
                innovation, and global exposure.
            </p>
            <br>
            <p class="text-gray-600">
                <span class="text-gray-700 font-semibold">College and Career Planning:</span> Whether students are
                planning to attend college or enter the workforce after school, we offer tailored guidance on college
                selection and applications.
            </p> -->
        </div>


    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
    
</body>

</html>