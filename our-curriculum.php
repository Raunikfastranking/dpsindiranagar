<?php
include "includes/apis.php";
 
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $ourcurriculum_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $ourcurriculum_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $ourcurriculum_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>


    <?php include "includes/header.php" ?>

    <div class="main relative ">
        <div class="main relative  mb-[40px] sm:mb-[120px] ">
            <div class="bg-center flex items-center text-center h-[300px] brud-image">
                <div>
                    <h1
                        class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                        Our Curriculum
                    </h1>
                </div>

                <div class="md:w-[100%]">
                    <h2
                        class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                        Our
                        <span class="sm:hidden"></span> Curriculum
                    </h2>
                </div>


            </div>

            <div class="flex m-5" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="/"
                            class="inline-flex items-center sm:text-sm text-xs font-medium text-blue-main">
                            Home
                        </a>
                    </li>
                    <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <p class="ms-1 text-sm font-medium text-blue-main">Academics
                        </p>
                    </div>
                </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="our-curriculum" class="ms-1 sm:text-sm text-xs font-medium text-blue-main">Our
                                Curriculum</a>
                        </div>
                    </li>
                </ol>
            </div>

           <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div class="md:flex gap-9 mt-6 mb-10">
                <div class="md:w-[40%]">
                    <img src="<?= $ourcurriculum_data['data']['sections'][1]['columns'][0]['image_url'] ?? "" ?>" alt="<?= cms_image_alt($ourcurriculum_data['data']['sections'][1]['columns'][0] ?? [], 'Our curriculum'); ?>" class="w-[100%]">
                </div>
                <div class="md:w-[60%]">
                     <?= $ourcurriculum_data['data']['sections'][1]['columns'][1]['content'] ?? "" ?>

                    <!-- <p class="mt-2 text-[16px] text-gray-600">
                        Delhi Public School, Indira Nagar is affiliated to Central Board of Secondary Education (CBSE),
                        New
                        Delhi and is running classes up to Senior Secondary level.
                        The school began its journey on 15th March 1999 and runs under the aegis of The Delhi Public
                        School
                        Society.
                    </p>

                    <p class="mt-2 text-[16px] text-gray-600">
                        The teachers are harbingers of educational innovations and creativity. They are highly
                        qualified, richly
                        experienced and techno-savvy.
                    </p>

                    <p class="mt-2 text-[16px] text-gray-600">
                        The school is known for inimitable achievements in academics, sports and co-curricular
                        activities. It is
                        constantly striving to broaden the mental horizons of its students.
                        To keep pace with the changing fabric of modern education, the school undertakes many activities
                        which
                        put it in the category of one of the best schools.
                    </p> -->
                </div>
            </div>


        </div>
        </div>

        <?php include "includes/footer.php" ?>
        <?php include "includes/foot.php" ?>

</body>

</html>