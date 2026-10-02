<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $schoolinfrastructure_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $schoolinfrastructure_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $schoolinfrastructure_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

  <?php include "includes/header.php" ?>

  <div class="main relative">
    <div class="bg-center flex items-center text-center h-[300px] brud-image">
      <div>
        <h1
          class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
          <?= strip_tags($schoolinfrastructure_data['data']['sections'][0]['content_heading']) ?? "" ?>
        </h1>
      </div>

      <div class="md:w-[100%]">
        <h1
          class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
          <?= strip_tags($schoolinfrastructure_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
            <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 9 4-4-4-4"></path>
            </svg>
            <p class="ms-1 text-sm font-medium text-blue-main">Mandatory Public Disclosure
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
            <a href="school-infrastructure" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($schoolinfrastructure_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
          </div>
        </li>
      </ol>
    </div>
    <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
      <div class="sm:mt-10 relative">

        <div class="overflow-x-auto mt-10 mb-16">
          <?= $schoolinfrastructure_data['data']['sections'][1]['content'] ?? "" ?>
          <!-- <table class="table-auto w-full border border-gray-300 text-sm text-left">
            <thead class="bg-gray-100 font-semibold">
              <tr>
                <th class="border border-gray-300 px-4 py-2">SL.NO.</th>
                <th class="border border-gray-300 px-4 py-2">INFORMATION</th>
                <th class="border border-gray-300 px-4 py-2">DETAILS</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="border border-gray-300 px-4 py-2">1</td>
                <td class="border border-gray-300 px-4 py-2">TOTAL CAMPUS AREA OF THE SCHOOL (IN SQUARE MTR)</td>
                <td class="border border-gray-300 px-4 py-2">4046 Sq mts</td>
              </tr>
              <tr>
                <td class="border border-gray-300 px-4 py-2">2</td>
                <td class="border border-gray-300 px-4 py-2">NO. AND SIZE OF THE CLASS ROOMS (IN SQ MTR)</td>
                <td class="border border-gray-300 px-4 py-2">
                  <a href="https://drive.google.com/file/d/1dLj6Oao5VSRsmI0rl1V4qt1u1o4Q0wCa/view
" class="text-blue-600 hover:underline">VIEW</a>
                </td>
              </tr>
              <tr>
                <td class="border border-gray-300 px-4 py-2">3</td>
                <td class="border border-gray-300 px-4 py-2">NO. AND SIZE OF LABORATORIES INCLUDING COMPUTER LABS (IN
                  SQR MTR)</td>
                <td class="border border-gray-300 px-4 py-2"></td>
              </tr>
              <tr>
                <td class="border border-gray-300 px-4 py-2">4</td>
                <td class="border border-gray-300 px-4 py-2">INTERNET FACILITY (Y/N)</td>
                <td class="border border-gray-300 px-4 py-2">YES</td>
              </tr>
              <tr>
                <td class="border border-gray-300 px-4 py-2">5</td>
                <td class="border border-gray-300 px-4 py-2">NO. OF GIRLS TOILETS</td>
                <td class="border border-gray-300 px-4 py-2">22</td>
              </tr>
              <tr>
                <td class="border border-gray-300 px-4 py-2">6</td>
                <td class="border border-gray-300 px-4 py-2">NO. OF BOYS TOILETS</td>
                <td class="border border-gray-300 px-4 py-2">27</td>
              </tr>
              <tr>
                <td class="border border-gray-300 px-4 py-2">7</td>
                <td class="border border-gray-300 px-4 py-2">LINK OF YOUTUBE VIDEO OF THE INSPECTION OF SCHOOL COVERING
                  THE INFRASTRUCTURE OF THE SCHOOL</td>
                <td class="border border-gray-300 px-4 py-2">
                  <a href="https://youtu.be/FshgY4Pt-eU" target="_blank"
                    class="text-blue-600 hover:underline">https://youtu.be/FshgY4Pt-eU</a>
                </td>
              </tr>
            </tbody>
          </table> -->
        </div>

      </div>
    </div>
  </div>

  <?php include "includes/footer.php" ?>
  <?php include "includes/foot.php" ?>

</body>

</html>