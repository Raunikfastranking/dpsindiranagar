<?php
include "includes/apis.php";
 
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $managementcommittee_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $managementcommittee_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $managementcommittee_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative ">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($managementcommittee_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($managementcommittee_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <p class="ms-1 text-sm font-medium text-blue-main">General Information
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
                        <a href="management-committee" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($managementcommittee_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>
        <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
            <div class="sm:mt-10 relative">


                <div>

                    <div class="md:w-[100%]">



                        <div class="relative overflow-x-auto sm:rounded-lg my-5">
                            <div class="p-6">
                                <div class="overflow-x-auto">
                                     <?= $managementcommittee_data['data']['sections'][1]['content'] ?? "" ?>
                                    <!-- <table class="w-full table-auto border-collapse border border-gray-200 mb-6">
                                        <thead>
                                            <tr class="bg-gray-200">
                                                <th class="border border-gray-300 px-4 py-2 uppercase">S.No.</th>
                                                <th class="border border-gray-300 px-4 py-2 uppercase">Name</th>
                                                <th class="border border-gray-300 px-4 py-2 uppercase">Designation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">1</td>
                                                <td class="border border-gray-300 px-4 py-2 uppercase">MR. MUKHTARUL
                                                    AMIN</td>
                                                <td class="border border-gray-300 px-4 py-2 uppercase">PRESIDENT</td>
                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">2</td>
                                                <td class="border border-gray-300 px-4 py-2 uppercase">MR. SYED JAVED
                                                    ALI HASHMI</td>
                                                <td class="border border-gray-300 px-4 py-2 uppercase">MEMBER</td>
                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">3</td>
                                                <td class="border border-gray-300 px-4 py-2 uppercase">MS. GHAZALA AFSAR
                                                    RUBY</td>
                                                <td class="border border-gray-300 px-4 py-2 uppercase">MEMBER/ SECRETARY
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">4</td>
                                                <td class="border border-gray-300 px-4 py-2 uppercase">MS. PINKIE
                                                    SRIVASTAVA</td>
                                                <td class="border border-gray-300 px-4 py-2 uppercase">MEMBER/ TEACHER
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">5</td>
                                                <td class="border border-gray-300 px-4 py-2 uppercase">MR. RUPENDRA
                                                    SINGH</td>
                                                <td class="border border-gray-300 px-4 py-2 uppercase">MEMBER/ TEACHER
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">6</td>
                                                <td class="border border-gray-300 px-4 py-2 uppercase">MS. APARNA
                                                    SRIVASTAVA</td>
                                                <td class="border border-gray-300 px-4 py-2 uppercase">MEMBER/ PARENT
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">7</td>
                                                <td class="border border-gray-300 px-4 py-2 uppercase">MR. TUFAIL AHMAD
                                                </td>
                                                <td class="border border-gray-300 px-4 py-2 uppercase">MEMBER/ PARENT
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">8</td>
                                                <td class="border border-gray-300 px-4 py-2 uppercase">MS. ANJALI YADAV
                                                </td>
                                                <td class="border border-gray-300 px-4 py-2 uppercase">MEMBER/ GOVT.
                                                    TEACHER</td>
                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">9</td>
                                                <td class="border border-gray-300 px-4 py-2 uppercase">MR. MANOJ KUMAR
                                                    TEWARI</td>
                                                <td class="border border-gray-300 px-4 py-2 uppercase">MEMBER/ PRINCIPAL
                                                    KV</td>
                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">10</td>
                                                <td class="border border-gray-300 px-4 py-2 uppercase">MS. SITA SETHI
                                                </td>
                                                <td class="border border-gray-300 px-4 py-2 uppercase">MEMBER/ PRINCIPAL
                                                    OTHER SCHOOL</td>
                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">11</td>
                                                <td class="border border-gray-300 px-4 py-2 uppercase">DISTRICT
                                                    INSPECTOR OF SCHOOLS</td>
                                                <td class="border border-gray-300 px-4 py-2 uppercase">MEMBER/ GOVT BODY
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table> -->
                                </div>
                            </div>
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