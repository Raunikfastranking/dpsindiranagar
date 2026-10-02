<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $ourstory_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $ourstory_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $ourstory_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>


    <?php include "includes/header.php" ?>

    <div class="main relative ">
        <div class="main relative  mb-[40px] sm:mb-[120px] ">
            <div class="bg-center flex items-center text-center h-[300px] brud-image">
                <div>

                    <h1
                        class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                         <?= strip_tags($ourstory_data['data']['sections'][0]['content_heading']) ?? "" ?>
                    </h1>
                </div>

                <div class="md:w-[100%]">
                    <h1
                        class="sm:text-[32px] sm:block hidden font-[700] text-white text-left ml-[7rem] sm:mb-1 hr-line relative leading-9">
                        <?= strip_tags($ourstory_data['data']['sections'][0]['content_heading']) ?? "" ?>
                    </h1>


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
                            <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="our-story" class="ms-1 sm:text-sm text-xs font-medium text-blue-main"><?= strip_tags($ourstory_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                        </div>
                    </li>
                </ol>
            </div>

            <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
                <div class="mt-10 relative">
                     <?= $ourstory_data['data']['sections'][1]['content'] ?? "" ?>

                    <!-- <p class="text-[16px] sm:text-left text-gray-600 mt-5">
                        Delhi Public School, Indira Nagar is a renowned premier institution located in Lucknow.
                        It is affiliated to Central Board of Secondary Education (CBSE), New Delhi and is running
                        classes up to Senior Secondary level. The school began its journey on 15th March 1999 runs
                        under the aegis of The Delhi Public School Society.
                    </p>

                    <p class="text-[16px] sm:text-left text-gray-600 mt-5">
                        At DPS we prefer to create situations where a child challenges his own ability, hence becomes
                        his own competitor and thus keeps improving and rediscovering himself. The school’s motto,
                        “Service before Self,” reflects its commitment to prioritizing the well-being and safety of
                        others over personal comfort and security. This philosophy has helped transform the school into
                        an educational powerhouse, fostering an environment that induces strength within each student
                        to stand on their own.
                    </p>

                    <p class="text-[16px] sm:text-left text-gray-600 mt-5">
                        The school offers all the major streams at the Senior Secondary level i.e. - Science, Commerce
                        and Humanities. The outstanding performance of the students in board exams and various
                        competitive exams bears testimony to the strategic and result oriented approach adopted by our
                        school in academics. We firmly believe that each student will contribute to the global world by
                        practicing the core values of the school: integrity, respect, responsibility and pursuit of
                        excellence.
                    </p> -->




                </div>
            </div>
        </div>

        <?php include "includes/footer.php" ?>
        <?php include "includes/foot.php" ?>

</body>

</html>