<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $financialliteracy_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $financialliteracy_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $financialliteracy_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($financialliteracy_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($financialliteracy_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <p class="ms-1 text-sm font-medium text-blue-main">21st Century Skills
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
                        <a href="financial-literacy" class="ms-1 text-sm font-medium text-blue-main"> <?= strip_tags($financialliteracy_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div class="md:flex gap-9 mt-6 mb-10">
                <div class="md:w-[40%]">
                    <img src="<?= $financialliteracy_data['data']['sections'][1]['columns'][0]['image_url'] ?? "" ?>"
                        alt="<?= cms_image_alt($financialliteracy_data['data']['sections'][1]['columns'][0] ?? [], 'Financial Literacy'); ?>" class="w-[100%] rounded-md shadow">
                </div>
                <div class="md:w-[60%]">
                    <div>
                         <?= $financialliteracy_data['data']['sections'][1]['columns'][1]['content'] ?? "" ?>
                        <!-- <h3 class="text-gray-600 text-[20px] font-[700]">Financial Literacy</h3>
                        <p class="text-gray-600 mt-2 text-[16px]">
                            The Reserve Bank of India (RBI) has launched the National Strategy for Financial
                            Education (NSFE): 2020-2025, the second one after the NSFE 2013-2018, to create
                            a financially aware and empowered India. The Strategy aims to empower different sections of
                            the population to make informed choices about their financial wellbeing, by developing the
                            requisite knowledge, skills, attitudes and behaviours.
                        </p>
                        <p class="text-gray-600 mt-2 text-[16px]">
                            This is to be achieved through the “5 C strategy” of Content creation for schools, colleges
                            and training establishments, Capacity building of financial service intermediaries,
                            Community participation through an appropriate Communication strategy and lastly, enhancing
                            Collaboration among various stakeholders.
                        </p>

                        <h3 class="text-gray-600 mt-6 text-[20px] font-[700]">Why is Financial Literacy important for
                            students?</h3>
                        <p class="text-gray-600 mt-2 text-[16px]">
                            <strong>Enhance understanding:</strong> Students develop a thorough understanding of money
                            management, enabling them to make informed decisions. By gaining financial knowledge, they
                            become more confident in managing their finances, which encourages healthier financial
                            habits throughout their lives.
                        </p>
                        <p class="text-gray-600 mt-2 text-[16px]">
                            <strong>Preparation for the Future:</strong> Early exposure to financial literacy prepares
                            students for future financial responsibilities, such as managing student loans, saving for
                            higher education, and investing to achieve their life goals.
                        </p> -->


                    </div>

                </div>
            </div>
             <?= $financialliteracy_data['data']['sections'][2]['content'] ?? "" ?>
            <!-- <h3 class="text-gray-600 mt-6 text-[20px] font-[700]">Program Structure at School Level</h3>
            <p class="text-gray-600 mt-2 text-[16px]">
                Financial literacy incorporates a variety of interactive activities and real-life applications to make
                learning about finance engaging and practical:
            </p>
            <ul class="text-gray-600 mt-2 text-[16px] space-y-2 list-decimal ml-5">
                <li><strong>Basics of Money:</strong> This section introduces the concept of money, its history, and its
                    various forms (coins, notes, digital money). This foundational knowledge sets the stage for
                    understanding more complex financial concepts later on.</li>
                <li><strong>Needs vs. Wants:</strong> Students learn to differentiate between essential items (needs)
                    and non-essential items (wants), fostering better spending habits and thoughtful decision-making
                    regarding their purchases.</li>
                <li><strong>Introduction to Banking:</strong> This part covers basic banking concepts, including the
                    purpose of banks, types of bank accounts (like savings accounts), and how banking services can help
                    manage money.</li>
                <li><strong>Savings and Expenditure:</strong> Students are taught the importance of saving money and how
                    to track and manage their expenses. They are encouraged to set aside money for future needs and
                    avoid unnecessary spending.</li>
                <li><strong>Budgeting:</strong> This section introduces the concept of budgeting, including how to
                    create a simple budget and track income and expenses. This skill is crucial for effectively managing
                    finances.</li>
                <li><strong>Types of Savings Accounts:</strong> Students receive an overview of various savings
                    accounts, including their features and benefits. They learn about interest rates, account types, and
                    how to choose the right account for their needs.</li>
                <li><strong>Advanced Banking Concepts:</strong> This part delves into more sophisticated banking topics
                    such as digital banking, different types of financial institutions, and the role of central banks
                    like the Reserve Bank of India (RBI). This understanding helps students grasp the broader financial
                    system.</li>
                <li><strong>Investment Basics:</strong> Students are introduced to various investment options, including
                    mutual funds, bonds, and Unit Linked Insurance Plans (ULIPs). They learn about the risk-return
                    relationship and how to make informed investment decisions.</li>
                <li><strong>Financial Planning:</strong> This section provides a comprehensive overview of financial
                    planning, including setting financial goals, managing debt, and preparing for future expenses.
                    Students learn to create a financial plan that aligns with their personal goals and circumstances.
                </li>
            </ul> -->
        </div>


        <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>

</body>

</html>