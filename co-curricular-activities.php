<?php
include "includes/apis.php";
 

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $cocurricular_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $cocurricular_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $cocurricular_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>
    <div class="main relative mb-[40px] sm:mb-[120px] ">
        <div class="bg-center flex items-center text-center h-[300px] comman-banner"
           >
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                     <?= strip_tags($cocurricular_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                     <?= strip_tags($cocurricular_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Academics
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
                        <a href="co-curricular-activities" class="ms-1 text-sm font-medium text-blue-main"> <?= strip_tags($cocurricular_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>


        <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
            <div class="sm:mt-10 relative">
                <div>

                    <div class="md:w-[100%]">
                        <div>
                             <?= $cocurricular_data['data']['sections'][1]['content'] ?? "" ?>
                            <!-- <div>
                                <p class="mt-5 text-gray-600">
                                   Co-Scholastic activities play a major role in the holistic development of a student. Activities beyond the four walls of a classroom reinforce or supplement the academic curriculum. They play a major role in the holistic development of a student. Activities beyond the four walls of a classroom reinforce or supplement the academic curriculum. Although these activities do not affect the academic credit, they provide supplementary learning opportunities</p>
                                <p class="text-gray-600">At DPS, Indira Nagar, students are encouraged to participate in co-curricular activities to help them understand the importance of time management and cultivate interpersonal skills, including soft skills.</p>
                                <h3 class="text-lg font-semibold text-gray-600 mt-5">CO-CURRICULAR ACTIVITIES IN DPS, INDIRA NAGAR, ARE FACILITATED TO</h3>
                                <ul class=" mt-5 list-disc ml-6 text-gray-600">
                                    <li>help students explore their strengths and talents.</li>
                                    <li>develop stronger time-management and organizational skills</li>
                                    <li>respect and fulfil their commitments.</li>
                                    <li>provide students with the opportunity to build friendships and build team spirit</li>
                                    <li>help build confidence and self-esteem.</li>
                                    <li>provide a way to keep students supervised outside of school hours</li>
                                    <li>help channelize the energy of students in a positive direction.</li>
                                </ul>
                                <h3 class="text-lg font-semibold  mt-5 text-gray-600">CO-CURRICULAR ACTIVITIES UNDER THE HOUSE SYSTEM IN SCHOOL</h3>

                                <p class="mt-2 text-gray-600">The house system forms the basis of all competitions in the school. It promotes team spirit, group loyalty, and healthy competition. The School is divided into four houses after the names of Flowers- Bluebell, Daffodil, Shamrock, and Tulip. Properly structured, group projects can reinforce skills that are relevant to both group and individual work . They can help students develop skills specific to collaborative efforts. Weekly activities are planned for the holistic development of students.</p>
                               


                            </div> -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "includes/footer.php" ?>
    <?php include "includes/foot.php" ?>

</body>

</html>