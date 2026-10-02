<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $documents_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $documents_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $documents_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative mb-[40px] sm:mb-[120px] mx-0 ">
         <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($documents_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($documents_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>
        </div>

        <div class="flex m-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="index.php" class="inline-flex items-center text-sm font-medium text-blue-main">
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
                        <a href="documents-and-informations.php" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($documents_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>
        <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
            <div class="sm:mt-10 relative">

                <div>

                    <div class="md:w-[100%]">
                       

                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-10">
                             <?= $documents_data['data']['sections'][1]['content'] ?? "" ?>
                            <!-- <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                                <thead class="text-xs text-white uppercase bg-[#005224] ">
                                    <tr>
                                        <th scope="col" class="px-6 py-4">
                                            S.No.
                                        </th>
                                        <th scope="col" class="px-6 py-4">
                                            Documents/Information
                                        </th>
                                        <th scope="col" class="px-6 py-4">
                                            Upload Document Link
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd:bg-white even:bg-gray-50  border-b ">
                                        <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">
                                            1.
                                        </th>
                                        <td class="px-6 py-2">
                                            Copies Of Affiliation/Upgradation Letter And Recent Extension Of
                                            Affiliation, If Any
                                        </td>
                                        <td class="px-6 py-2">
                                            <a href="https://dpsind.superhouseerp.com/Uploads/Site/DPSIND/DocsAndInfo/Pdf/02ef202254163226916.pdf"
                                                target="_blank"
                                                class="font-medium text-[#005224]  hover:underline">View</a>
                                        </td>
                                    </tr>
                                    <tr
                                        class="odd:bg-white  even:bg-gray-50  border-b ">
                                        <th scope="row"
                                            class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap ">
                                            2.
                                        </th>
                                        <td class="px-6 py-2">
                                            Copies Of Societies/Trust/Company Registration/Renewal Certificate as
                                            Applicable
                                        </td>
                                        <td class="px-6 py-2">
                                            <a href="https://dpsind.superhouseerp.com/Uploads/Site/DPSIND/DocsAndInfo/Pdf/0fbd202254163257173.pdf"
                                                target="_blank"
                                                class="font-medium text-[#005224]  hover:underline">View</a>
                                        </td>
                                    </tr>
                                    <tr
                                        class="odd:bg-white  even:bg-gray-50  border-b ">
                                        <th scope="row"
                                            class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap ">
                                            3.
                                        </th>
                                        <td class="px-6 py-2">
                                            Copy Of No Objection Certificate (Noc) Issued If Applicable By The State
                                            Govt/Ut
                                        </td>
                                        <td class="px-6 py-2">
                                            <a href="https://dpsind.superhouseerp.com/Uploads/Site/DPSIND/DocsAndInfo/Pdf/fd78202254163326727.pdf"
                                                target="_blank"
                                                class="font-medium text-[#005224]  hover:underline">View</a>
                                        </td>
                                    </tr>
                                    <tr
                                        class="odd:bg-white  even:bg-gray-50  border-b ">
                                        <th scope="row"
                                            class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap ">
                                            4.
                                        </th>
                                        <td class="px-6 py-2">
                                            Copy Of Recognition Certificate Under Rte Act 2009 And It’S Renewal If
                                            Applicable
                                        </td>
                                        <td class="px-6 py-2">
                                            <a href="https://dpsind.superhouseerp.com/Uploads/Site/DPSIND/DocsAndInfo/Pdf/30652023619122728963.pdf"
                                                target="_blank"
                                                class="font-medium text-[#005224]  hover:underline">View</a>
                                        </td>
                                    </tr>
                                    <tr
                                        class="odd:bg-white  even:bg-gray-50  border-b ">
                                        <th scope="row"
                                            class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap ">
                                            5.
                                        </th>
                                        <td class="px-6 py-2">
                                            Copy Of Valid Building Safety Certificate As Per The National Building Code
                                        </td>
                                        <td class="px-6 py-2">
                                            <a href="https://dpsind.superhouseerp.com/Uploads/Site/DPSIND/DocsAndInfo/Pdf/5418202362711228814.pdf"
                                                target="_blank"
                                                class="font-medium text-[#005224]  hover:underline">View</a>
                                        </td>
                                    </tr>
                                    <tr
                                        class="odd:bg-white  even:bg-gray-50  border-b ">
                                        <th scope="row"
                                            class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap ">
                                            6.
                                        </th>
                                        <td class="px-6 py-2">
                                            Copy Of Valid Fire Safety Certificate Issued By The Competent Authority
                                        </td>
                                        <td class="px-6 py-2">
                                            <a href="https://dpsind.superhouseerp.com/Uploads/Site/DPSIND/DocsAndInfo/Pdf/e8512023619122713395.pdf"
                                                target="_blank"
                                                class="font-medium text-[#005224]  hover:underline">View</a>
                                        </td>
                                    </tr>
                                    <tr
                                        class="odd:bg-white  even:bg-gray-50  border-b ">
                                        <th scope="row"
                                            class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap ">
                                            7.
                                        </th>
                                        <td class="px-6 py-2">
                                            Copy of the Deo certificate submitted by the school for
                                            Affiliation/Upgradation/Extension of Affiliation of Self Certification by
                                            School
                                        </td>
                                        <td class="px-6 py-2">
                                            <a href="https://dpsind.superhouseerp.com/Uploads/Site/DPSIND/DocsAndInfo/Pdf/4d2a2023719173911730.pdf"
                                                target="_blank"
                                                class="font-medium text-[#005224]  hover:underline">View</a>
                                        </td>
                                    </tr>
                                    <tr
                                        class="odd:bg-white  even:bg-gray-50  border-b ">
                                        <th scope="row"
                                            class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap ">
                                            8.
                                        </th>
                                        <td class="px-6 py-2">
                                            Copies of Valid Water,Health and Sanitation Certificates
                                        </td>
                                        <td class="px-6 py-2">
                                            <a href="https://dpsind.superhouseerp.com/Uploads/Site/DPSIND/DocsAndInfo/Pdf/43bf2023619122653818.pdf"
                                                target="_blank"
                                                class="font-medium text-[#005224]  hover:underline">View</a>
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

    <?php include "includes/footer.php" ?>
    <?php include "includes/foot.php" ?>

</body>

</html>