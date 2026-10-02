<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $staffteaching_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $staffteaching_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $staffteaching_data['data']['meta_keywords'] ?? "" ?>">
</head>
<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
         <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                   <?= strip_tags($staffteaching_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                   <?= strip_tags($staffteaching_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
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
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <p class="ms-1 text-sm font-medium text-blue-main">Mandatory Public Disclosure
                        </p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="staff-teaching" class="ms-1 text-sm font-medium text-blue-main"> <?= strip_tags($staffteaching_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>
        <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
            <div class="sm:mt-10 relative">

                <div>

                    <div class="md:w-[100%]">
                       

                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-10">
                             <?= $staffteaching_data['data']['sections'][1]['content'] ?? "" ?>
                            <!-- <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-200 ">
                                    <tr>
                                        <th scope="col" class="px-6 py-4">
                                            S.No.
                                        </th>
                                        <th scope="col" class="px-6 py-4">
                                            Information
                                        </th>
                                        <th scope="col" class="px-6 py-4">
                                            Details
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd:bg-white even:bg-gray-50  border-b ">
                                        <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">
                                            1.
                                        </th>
                                        <td class="px-6 py-2">
                                            PRINCIPAL
                                        </td>
                                        <td class="px-6 py-2">
                                            MS. GHAZALA AFSAR RUBY
                                        </td>
                                    </tr>



                                    <tr
                                        class="odd:bg-white  even:bg-gray-50  border-b ">
                                        <th rowspan="4" scope="row"
                                            class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap ">
                                            2.
                                        </th>
                                        <td class="px-6 py-2">
                                            TOTAL NO OF TEACHERS
                                        </td>
                                        <td class="px-6 py-2">
                                            81
                                        </td>
                                    </tr>
                                    <tr
                                        class="odd:bg-white  even:bg-gray-50  border-b ">
                                        <td class="px-6 py-2">
                                            PRT
                                        </td>
                                        <td class="px-6 py-2">
                                            38
                                        </td>
                                    </tr>
                                    <tr
                                        class="odd:bg-white  even:bg-gray-50  border-b ">
                                        <td class="px-6 py-2">
                                            PGT
                                        </td>
                                        <td class="px-6 py-2">
                                            20
                                        </td>
                                    </tr>
                                    <tr
                                        class="odd:bg-white  even:bg-gray-50  border-b ">
                                        <td class="px-6 py-2">
                                            TGT
                                        </td>
                                        <td class="px-6 py-2">
                                            23
                                        </td>
                                    </tr>

                                    <tr
                                        class="odd:bg-white  even:bg-gray-50  border-b ">
                                        <th scope="row"
                                            class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap ">
                                            3.
                                        </th>
                                        <td class="px-6 py-2">
                                        TEACHERS SECTION RATIO
                                        </td>
                                        <td class="px-6 py-2">
                                            1.5:1
                                        </td>
                                    </tr>
                                    <tr
                                        class="odd:bg-white  even:bg-gray-50  border-b ">
                                        <th scope="row"
                                            class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap ">
                                            4.
                                        </th>
                                        <td class="px-6 py-2">
                                            SPECIAL EDUCATOR
                                        </td>
                                        <td class="px-6 py-2">
                                        MS.SAROJ TRIPATHI
                                    </tr>
                                    <tr
                                        class="odd:bg-white  even:bg-gray-50  border-b ">
                                        <th scope="row"
                                            class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap ">
                                            5.
                                        </th>
                                        <td class="px-6 py-2">
                                            COUNSELLOR AND WELLNESS TEACHER 
                                        </td>
                                        <td class="px-6 py-2">
                                        MS.TARBIA ZEHRA
                                    </tr>
                                </tbody>
                            </table> -->
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