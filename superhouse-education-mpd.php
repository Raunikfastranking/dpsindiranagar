<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $superhouseeducation_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $superhouseeducation_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $superhouseeducation_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                   <?= strip_tags($superhouseeducation_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                   <?= strip_tags($superhouseeducation_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <a href="superhouse-education-mpd" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($superhouseeducation_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

         <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0 mb-10">

                <div class="table-container overflow-x-auto sm:h-[800px] overflow-y-auto">
                     <?= $superhouseeducation_data['data']['sections'][1]['content'] ?? "" ?>
            <!-- <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
                <thead class="bg-blue-main text-white sticky top-0">
                    <tr>
                        <th class="py-3 px-4 text-left text-sm font-semibold">Month</th>
                        <th class="py-3 px-4 text-left text-sm font-semibold">Participant's Name</th>
                        <th class="py-3 px-4 text-left text-sm font-semibold">Designation/Subject</th>
                        <th class="py-3 px-4 text-left text-sm font-semibold">Theme of Training/Workshop</th>
                        <th class="py-3 px-4 text-left text-sm font-semibold">Resource Person</th>
                        <th class="py-3 px-4 text-left text-sm font-semibold">Organizer</th>
                        <th class="py-3 px-4 text-left text-sm font-semibold">Date</th>
                        <th class="py-3 px-4 text-left text-sm font-semibold">Learning Outcomes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">April</td>
                        <td class="py-2 px-4">Shirish Khare</td>
                        <td class="py-2 px-4">TGT French</td>
                        <td class="py-2 px-4">Comment dynamiser la class?</td>
                        <td class="py-2 px-4">Ms. Neha Bansal</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">30.4.24</td>
                        <td class="py-2 px-4">1. Effective methods for practical learning. 2. Promote positive classroom climate. 3. Provide constructive feedback. 4. Adapt to individual learning styles. 5. Stay informed on new teaching practices.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">April</td>
                        <td class="py-2 px-4">Dr. Shipra Singh</td>
                        <td class="py-2 px-4">TGT French</td>
                        <td class="py-2 px-4">Comment dynamiser la class?</td>
                        <td class="py-2 px-4">Ms. Neha Bansal</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">30.4.24</td>
                        <td class="py-2 px-4">Make French class interactive. Clear rules and expectations. Use games and activities to simplify topics.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">April</td>
                        <td class="py-2 px-4">Sumit Dwivedi</td>
                        <td class="py-2 px-4">ERP Executive</td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4"></td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Shikha Chaturvedi</td>
                        <td class="py-2 px-4">PGT History</td>
                        <td class="py-2 px-4">Teaching Pedagogy as per NCF</td>
                        <td class="py-2 px-4">Ms. Seema Sinha</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">29.5.24</td>
                        <td class="py-2 px-4">1. Relationship between NEP and NCF. 2. Capacity building methods. 3. Achieve joyful learning.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Astha Mishra</td>
                        <td class="py-2 px-4">PGT English</td>
                        <td class="py-2 px-4">Teaching Pedagogies as per NCF</td>
                        <td class="py-2 px-4">Ms. Seema Sinha</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">29.5.24</td>
                        <td class="py-2 px-4">Information about NEP and NCF; Holistic Report Card; Competency Based Questions; Experiential Learning; Importance of Play Activities & Story Telling.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Vineeta Mishra</td>
                        <td class="py-2 px-4">PGT English</td>
                        <td class="py-2 px-4">Teaching Pedagogies as per NCF</td>
                        <td class="py-2 px-4">Ms. Seema Sinha</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">29.5.24</td>
                        <td class="py-2 px-4">Changing trends in educational pedagogy. Activity Based learning methods. Competency Based Learning and Assessment.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Kamala Tewari</td>
                        <td class="py-2 px-4">PGT Political Science</td>
                        <td class="py-2 px-4">Teaching Pedagogy as per NCF</td>
                        <td class="py-2 px-4">Ms. Seema Sinha</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">29.5.24</td>
                        <td class="py-2 px-4">Learning should be active; assessment of learning, not student; develop 21st-century skills; experiential learning core of NEP and NCF; focus on learning values.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Shaista Khan</td>
                        <td class="py-2 px-4">TGT Social Science</td>
                        <td class="py-2 px-4">Teaching Pedagogies as per NCF</td>
                        <td class="py-2 px-4">Ms. Seema Sinha</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">29.5.24</td>
                        <td class="py-2 px-4">1. Emphasis on experiential learning. 2. Child-friendly assessment. 3. All-round child development. 4. Use project method, storytelling, model making. 5. Peer assessment for evaluation and skill development.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Sadhana Tiwari</td>
                        <td class="py-2 px-4">TGT Hindi</td>
                        <td class="py-2 px-4">Teaching Pedagogy as per NCF</td>
                        <td class="py-2 px-4">Ms. Seema Sinha</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">29.5.24</td>
                        <td class="py-2 px-4">1. Integrated teaching as per NCF. 2. Comprehensive, continuous evaluation. 3. Multiple assessment methods, including peer assessment followed by teacher evaluation.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Barkha Agarwal</td>
                        <td class="py-2 px-4">German Teacher</td>
                        <td class="py-2 px-4">Workshop on German Classes 5 and Upward</td>
                        <td class="py-2 px-4">Mr. Laxmi Shekhar Kalepu</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">28.5.24</td>
                        <td class="py-2 px-4">1. Fostering unique child capabilities for holistic development. 2. Develop Holistic Progress Card (HPC) emphasizing physical, socio-economic, cognitive, language, literacy, aesthetic, cultural development, and positive learning habits.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Sudha Jha</td>
                        <td class="py-2 px-4">TGT Hindi</td>
                        <td class="py-2 px-4">Hindi Language Skills through Interactive Activities</td>
                        <td class="py-2 px-4">Dr. Punita Pachauri</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">28.5.24</td>
                        <td class="py-2 px-4">1. Use singing (gayan) for teaching poetry effectively. 2. Correct pronunciation of swar. 3. Use e-books for resource utilization.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Sunita Chaturvedi</td>
                        <td class="py-2 px-4">TGT Hindi and Sanskrit</td>
                        <td class="py-2 px-4">Hindi Language Skills through Interactive Activities</td>
                        <td class="py-2 px-4">Dr. Punita Pachauri</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">28.5.24</td>
                        <td class="py-2 px-4">1. Use singing (gayan) for teaching poetry effectively. 2. Correct pronunciation of swar. 3. Use e-books for resource utilization.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Neelam Srivastava</td>
                        <td class="py-2 px-4">TGT Hindi</td>
                        <td class="py-2 px-4">Hindi Language Skills through Interactive Activities</td>
                        <td class="py-2 px-4">Dr. Punita Pachauri</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">28.5.24</td>
                        <td class="py-2 px-4">1. Use games for engaging classes. 2. Recite poems for vowels and consonants. 3. Sing Doha and Chaupai to impress students.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Neeta Tewari</td>
                        <td class="py-2 px-4">TGT Social Science</td>
                        <td class="py-2 px-4">Teaching Pedagogy as per NCF</td>
                        <td class="py-2 px-4">Ms. Seema Sinha</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">29.5.24</td>
                        <td class="py-2 px-4">1. Use storytelling and role-playing for effective learning. 2. Integrated teaching as per NCF. 3. Assess child progress at Beginner, Progressive, Proficient levels.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Sujata Bose</td>
                        <td class="py-2 px-4">TGT Geography</td>
                        <td class="py-2 px-4">Teaching Pedagogy as per NCF</td>
                        <td class="py-2 px-4">Ms. Seema Sinha</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">29.5.24</td>
                        <td class="py-2 px-4">1. Relationship between NEP and NCF. 2. Effective teaching methods. 3. Time for student conversation.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Poorti Srivastava</td>
                        <td class="py-2 px-4">TGT Computer Science</td>
                        <td class="py-2 px-4">Coding Workshop</td>
                        <td class="py-2 px-4">Mr. Kunal Ozarde</td>
                        <td class="py-2 px-4">SEF & Coding Edu Marketing</td>
                        <td class="py-2 px-4">24.5.24</td>
                        <td class="py-2 px-4">1. Resolve queries on login renewals and new IDs. 2. Discuss lesson plans and story/skill mode levels.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Syed Mohd. Firoz Haider</td>
                        <td class="py-2 px-4">TGT Computer Science</td>
                        <td class="py-2 px-4">Coding Workshop</td>
                        <td class="py-2 px-4">Mr. Kunal Ozarde</td>
                        <td class="py-2 px-4">SEF & Coding Edu Marketing</td>
                        <td class="py-2 px-4">24.5.24</td>
                        <td class="py-2 px-4">1. Resolve queries on login renewals and new IDs. 2. Discuss lesson plans and story/skill mode levels.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Dr. Shipra Singh</td>
                        <td class="py-2 px-4">French Teacher</td>
                        <td class="py-2 px-4">Workshop on French [Orthographie et Phonologie du français]</td>
                        <td class="py-2 px-4">Mr. Sushant</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">27.5.24</td>
                        <td class="py-2 px-4">1. Improve French language proficiency.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Shirish Khare</td>
                        <td class="py-2 px-4">French Teacher</td>
                        <td class="py-2 px-4">Orthographie et phonologie du français</td>
                        <td class="py-2 px-4">Mr. Sushant Kumar Mishra</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">27.5.24</td>
                        <td class="py-2 px-4">1. Effective methods to improve French pronunciation. 2. Sensitize orthographic variation in French words. 3. Exercises to improve phonetics.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Fatima Zartaj</td>
                        <td class="py-2 px-4">PRT Science</td>
                        <td class="py-2 px-4">Strategies to Improve Outcomes for Children Facing Challenges within NEP Framework</td>
                        <td class="py-2 px-4">Ms. Shivani Wadhwa</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">18.5.24</td>
                        <td class="py-2 px-4">Primary objective of NEP2020, improve foundational and literacy skills, outcomes of FLN skills for students and teachers, building competencies at all stages.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Saroj Tripathi</td>
                        <td class="py-2 px-4">PRT Social Science</td>
                        <td class="py-2 px-4">Strategies to Improve Outcomes for Children Facing Challenges within NEP Framework</td>
                        <td class="py-2 px-4">Ms. Shivani Wadhwa</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">18.5.24</td>
                        <td class="py-2 px-4">Primary objective of NEP2020, improve foundational and literacy skills, outcomes of FLN skills for students and teachers, building competencies at all stages.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Neeti Srivastava</td>
                        <td class="py-2 px-4">PRT Hindi</td>
                        <td class="py-2 px-4">Strategies to Improve Outcomes for Children Facing Challenges within NEP Framework</td>
                        <td class="py-2 px-4">Ms. Shivani Wadhwa</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">18.5.24</td>
                        <td class="py-2 px-4">Primary objective of NEP2020, improve foundational and literacy skills, outcomes of FLN skills for students and teachers, building competencies at all stages.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Ankita Tripathi</td>
                        <td class="py-2 px-4">PRT English</td>
                        <td class="py-2 px-4">Strategies to Improve Outcomes for Children Facing Challenges within NEP Framework</td>
                        <td class="py-2 px-4">Ms. Shivani Wadhwa</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">18.5.24</td>
                        <td class="py-2 px-4">Primary objective of NEP2020, improve foundational and literacy skills, outcomes of FLN skills for students and teachers, building competencies at all stages.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Ankita Tripathi</td>
                        <td class="py-2 px-4">PRT English</td>
                        <td class="py-2 px-4">Teaching Pedagogies as per NCF</td>
                        <td class="py-2 px-4">Ms. Seema Sinha</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">29.5.24</td>
                        <td class="py-2 px-4">Changing trends in educational pedagogy as per NCF; comprehensive assessment in competency-based education; nature and purpose of assessment; assessment strategies; HPC competencies per NEP2020; circle time for conversation; HPC implementation guidelines; fantasy storytelling with music, art, play.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Sanjana Kapoor</td>
                        <td class="py-2 px-4">PRT Maths</td>
                        <td class="py-2 px-4">Strategies to Improve Outcomes for Children Facing Challenges within NEP Framework</td>
                        <td class="py-2 px-4">Ms. Shivani Wadhwa</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">18.5.24</td>
                        <td class="py-2 px-4">Primary objective of NEP2020, improve foundational and literacy skills, outcomes of FLN skills for students and teachers, building competencies at all stages.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Chandrawati Singh</td>
                        <td class="py-2 px-4">PRT Hindi</td>
                        <td class="py-2 px-4">Strategies to Improve Outcomes for Children Facing Challenges within NEP Framework</td>
                        <td class="py-2 px-4">Ms. Shivani Wadhwa</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">18.5.24</td>
                        <td class="py-2 px-4">Primary objective of NEP2020, improve foundational and literacy skills, outcomes of FLN skills for students and teachers, building competencies at all stages.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Babita Arora</td>
                        <td class="py-2 px-4">PRT Science</td>
                        <td class="py-2 px-4">Strategies to Improve Outcomes for Children Facing Challenges within NEP Framework</td>
                        <td class="py-2 px-4">Ms. Shivani Wadhwa</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">18.5.24</td>
                        <td class="py-2 px-4">Primary objective of NEP2020, improve foundational and literacy skills, outcomes of FLN skills for students and teachers, building competencies at all stages.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Priya Rohatgi</td>
                        <td class="py-2 px-4">PRT Maths</td>
                        <td class="py-2 px-4">Strategies to Improve Outcomes for Children Facing Challenges within NEP Framework</td>
                        <td class="py-2 px-4">Ms. Shivani Wadhwa</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">18.5.24</td>
                        <td class="py-2 px-4">Primary objective of NEP2020, improve foundational and literacy skills, outcomes of FLN skills for students and teachers, building competencies at all stages.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Aditi Chaturvedi</td>
                        <td class="py-2 px-4">PRT English</td>
                        <td class="py-2 px-4">Strategies to Improve Outcomes for Children Facing Challenges within NEP Framework</td>
                        <td class="py-2 px-4">Ms. Shivani Wadhwa</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">18.5.24</td>
                        <td class="py-2 px-4">Primary objective of NEP2020, improve foundational and literacy skills, outcomes of FLN skills for students and teachers, building competencies at all stages.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Aditi Chaturvedi</td>
                        <td class="py-2 px-4">PRT English</td>
                        <td class="py-2 px-4">Teaching Pedagogies as per NCF</td>
                        <td class="py-2 px-4">Ms. Seema Sinha</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">29.5.24</td>
                        <td class="py-2 px-4">Changing trends in educational pedagogy as per NCF; comprehensive assessment in competency-based education; nature and purpose of assessment; assessment strategies; HPC competencies per NEP2020; circle time for conversation; HPC implementation guidelines; fantasy storytelling with music, art, play.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Amita Sharma</td>
                        <td class="py-2 px-4">PRT Hindi</td>
                        <td class="py-2 px-4">Strategies to Improve Outcomes for Children Facing Challenges within NEP Framework</td>
                        <td class="py-2 px-4">Ms. Shivani Wadhwa</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">18.5.24</td>
                        <td class="py-2 px-4">Primary objective of NEP2020, improve foundational and literacy skills, outcomes of FLN skills for students and teachers, building competencies at all stages.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Nimisha Kapoor</td>
                        <td class="py-2 px-4">PRT Coordinator</td>
                        <td class="py-2 px-4">Strategies to Improve Outcomes for Children Facing Challenges within NEP Framework</td>
                        <td class="py-2 px-4">Ms. Shivani Wadhwa</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">18.5.24</td>
                        <td class="py-2 px-4">Primary objective of NEP2020, improve foundational and literacy skills, outcomes of FLN skills for students and teachers, building competencies at all stages.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Lavina Gaur</td>
                        <td class="py-2 px-4">PRT English</td>
                        <td class="py-2 px-4">Strategies to Improve Outcomes for Children Facing Challenges within NEP Framework</td>
                        <td class="py-2 px-4">Ms. Shivani Wadhwa</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">18.5.24</td>
                        <td class="py-2 px-4">Primary objective of NEP2020, improve foundational and literacy skills, outcomes of FLN skills for students and teachers, building competencies at all stages.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Lavina Gaur</td>
                        <td class="py-2 px-4">PRT English</td>
                        <td class="py-2 px-4">Teaching Pedagogies as per NCF</td>
                        <td class="py-2 px-4">Ms. Seema Sinha</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">29.5.24</td>
                        <td class="py-2 px-4">Changing trends in educational pedagogy as per NCF; comprehensive assessment in competency-based education; nature and purpose of assessment; assessment strategies; HPC competencies per NEP2020; circle time for conversation; HPC implementation guidelines; fantasy storytelling with music, art, play.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Saroj Tripathi</td>
                        <td class="py-2 px-4">PRT Social Science</td>
                        <td class="py-2 px-4">Teaching Pedagogies as per NCF</td>
                        <td class="py-2 px-4">Ms. Seema Sinha</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">29.5.24</td>
                        <td class="py-2 px-4">Changing trends in educational pedagogy as per NCF; comprehensive assessment in competency-based education; nature and purpose of assessment; assessment strategies; HPC competencies per NEP2020; circle time for conversation; HPC implementation guidelines; fantasy storytelling with music, art, play.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Saniya Farheen</td>
                        <td class="py-2 px-4">PRT Social Science</td>
                        <td class="py-2 px-4">Strategies to Improve Outcomes for Children Facing Challenges within NEP Framework</td>
                        <td class="py-2 px-4">Ms. Shivani Wadhwa</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">18.5.24</td>
                        <td class="py-2 px-4">Primary objective of NEP2020, improve foundational and literacy skills, outcomes of FLN skills for students and teachers, building competencies at all stages.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Saniya Farheen</td>
                        <td class="py-2 px-4">PRT Social Science</td>
                        <td class="py-2 px-4">Teaching Pedagogies as per NCF</td>
                        <td class="py-2 px-4">Ms. Seema Sinha</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">29.5.24</td>
                        <td class="py-2 px-4">Changing trends in educational pedagogy as per NCF; comprehensive assessment in competency-based education; nature and purpose of assessment; assessment strategies; HPC competencies per NEP2020; circle time for conversation; HPC implementation guidelines; fantasy storytelling with music, art, play.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Nidhi Khare</td>
                        <td class="py-2 px-4">PRT</td>
                        <td class="py-2 px-4">Phonics</td>
                        <td class="py-2 px-4">Ms. Chitra Panjwani</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">27.5.24</td>
                        <td class="py-2 px-4">Developing foundational reading skills, systematic relationship between sound and spelling, understanding phonetic patterns and rules.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Ankita Gupta</td>
                        <td class="py-2 px-4">PRT</td>
                        <td class="py-2 px-4">Phonics</td>
                        <td class="py-2 px-4">Ms. Chitra Panjwani</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">27.5.24</td>
                        <td class="py-2 px-4">Developing foundational reading skills, systematic relationship between sound and spelling, understanding phonetic patterns and rules.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Pooja Mehta</td>
                        <td class="py-2 px-4">PRT</td>
                        <td class="py-2 px-4">Phonics</td>
                        <td class="py-2 px-4">Ms. Chitra Panjwani</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">27.5.24</td>
                        <td class="py-2 px-4">Developing foundational reading skills, systematic relationship between sound and spelling, understanding phonetic patterns and rules.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Deepshikha Pal Sharma</td>
                        <td class="py-2 px-4">PRT</td>
                        <td class="py-2 px-4">Phonics</td>
                        <td class="py-2 px-4">Ms. Chitra Panjwani</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">27.5.24</td>
                        <td class="py-2 px-4">Developing foundational reading skills, systematic relationship between sound and spelling, understanding phonetic patterns and rules.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Tahmeena Shakeel</td>
                        <td class="py-2 px-4">SFL Trainer</td>
                        <td class="py-2 px-4">Essential Safety Skills</td>
                        <td class="py-2 px-4">Ms. Yusra Khan, Ms. Manya Mehta</td>
                        <td class="py-2 px-4">SEF & Safety Troop</td>
                        <td class="py-2 px-4">24.5.24</td>
                        <td class="py-2 px-4">Effective communication to strengthen student-teacher relationships, promote collaborative learning, reduce misunderstandings, encourage active participation.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Tarbia Zehra</td>
                        <td class="py-2 px-4">School Counsellor</td>
                        <td class="py-2 px-4">Essential Safety Skills</td>
                        <td class="py-2 px-4">Ms. Yusra Khan, Ms. Manya Mehta</td>
                        <td class="py-2 px-4">SEF & Safety Troop</td>
                        <td class="py-2 px-4">24.5.24</td>
                        <td class="py-2 px-4">Effective communication to strengthen student-teacher relationships, promote collaborative learning, reduce misunderstandings, encourage active participation.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Noorie Alam</td>
                        <td class="py-2 px-4">Pre-Primary Coordinator</td>
                        <td class="py-2 px-4">Phonics</td>
                        <td class="py-2 px-4">Ms. Chitra Panjwani</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">27.5.24</td>
                        <td class="py-2 px-4">1. Understand 46 phonics sounds. 2. Long and short vowel sounds. 3. Floss rule, magic e rule. 4. Use stories, rhymes, songs to teach phonics.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Nandita Jha</td>
                        <td class="py-2 px-4">PRT</td>
                        <td class="py-2 px-4">Phonics</td>
                        <td class="py-2 px-4">Ms. Chitra Panjwani</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">27.5.24</td>
                        <td class="py-2 px-4">1. Understand 46 phonics sounds. 2. Long and short vowel sounds. 3. Floss rule, magic e rule. 4. Use stories, rhymes, songs to teach phonics.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Varsha Bartarya</td>
                        <td class="py-2 px-4">PRT</td>
                        <td class="py-2 px-4">Phonics</td>
                        <td class="py-2 px-4">Ms. Chitra Panjwani</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">27.5.24</td>
                        <td class="py-2 px-4">1. Understand 46 phonics sounds. 2. Long and short vowel sounds. 3. Floss rule, magic e rule. 4. Use stories, rhymes, songs to teach phonics.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Rupali Das</td>
                        <td class="py-2 px-4">PRT</td>
                        <td class="py-2 px-4">Phonics</td>
                        <td class="py-2 px-4">Ms. Chitra Panjwani</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">27.5.24</td>
                        <td class="py-2 px-4">1. Understand 46 phonics sounds. 2. Long and short vowel sounds. 3. Floss rule, magic e rule. 4. Use stories, rhymes, songs to teach phonics.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Shubaika Talat</td>
                        <td class="py-2 px-4">PRT</td>
                        <td class="py-2 px-4">Phonics</td>
                        <td class="py-2 px-4">Ms. Chitra Panjwani</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">27.5.24</td>
                        <td class="py-2 px-4">1. Understand 46 phonics sounds. 2. Long and short vowel sounds. 3. Floss rule, magic e rule. 4. Use stories, rhymes, songs to teach phonics.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Shaily Srivastava</td>
                        <td class="py-2 px-4">PRT</td>
                        <td class="py-2 px-4">Phonics</td>
                        <td class="py-2 px-4">Ms. Chitra Panjwani</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">27.5.24</td>
                        <td class="py-2 px-4">1. Understand 46 phonics sounds. 2. Long and short vowel sounds. 3. Floss rule, magic e rule. 4. Use stories, rhymes, songs to teach phonics.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Zainab Wasim</td>
                        <td class="py-2 px-4">PRT</td>
                        <td class="py-2 px-4">Phonics</td>
                        <td class="py-2 px-4">Ms. Chitra Panjwani</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">27.5.24</td>
                        <td class="py-2 px-4">1. Understand 46 phonics sounds. 2. Long and short vowel sounds. 3. Floss rule, magic e rule. 4. Use stories, rhymes, songs to teach phonics.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Eram Abrar</td>
                        <td class="py-2 px-4">PRT</td>
                        <td class="py-2 px-4">Phonics</td>
                        <td class="py-2 px-4">Ms. Chitra Panjwani</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">27.5.24</td>
                        <td class="py-2 px-4">1. Understand 46 phonics sounds. 2. Long and short vowel sounds. 3. Floss rule, magic e rule. 4. Use stories, rhymes, songs to teach phonics.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">May</td>
                        <td class="py-2 px-4">Sonam Seth</td>
                        <td class="py-2 px-4">PRT</td>
                        <td class="py-2 px-4">Phonics</td>
                        <td class="py-2 px-4">Ms. Chitra Panjwani</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">27.5.24</td>
                        <td class="py-2 px-4">Developing foundational reading skills, systematic relationship between sound and spelling, understanding phonetic patterns and rules.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">July</td>
                        <td class="py-2 px-4">Neha Nainwal</td>
                        <td class="py-2 px-4">Front Office Executive</td>
                        <td class="py-2 px-4">Counsellor/Admission Team Training</td>
                        <td class="py-2 px-4">Mr. Sanjay Kapoor, Ms. Shilpi Tandon</td>
                        <td class="py-2 px-4">HO</td>
                        <td class="py-2 px-4">12.07.24</td>
                        <td class="py-2 px-4">Insights into effective counselling techniques for services provided.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">July</td>
                        <td class="py-2 px-4">Manish Soni</td>
                        <td class="py-2 px-4">Admin Admission & CBSE Incharge</td>
                        <td class="py-2 px-4">Counsellor/Admission Team Training</td>
                        <td class="py-2 px-4">Mr. Sanjay Kapoor, Ms. Shilpi Tandon</td>
                        <td class="py-2 px-4">HO</td>
                        <td class="py-2 px-4">12.07.24</td>
                        <td class="py-2 px-4">Insights into effective counselling techniques for services provided.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">August</td>
                        <td class="py-2 px-4">Ekta Arora</td>
                        <td class="py-2 px-4">TGT Computer Science</td>
                        <td class="py-2 px-4">Migrating to Student-Centric New Age Pedagogies</td>
                        <td class="py-2 px-4">Mr. Bishwajeet Senapati</td>
                        <td class="py-2 px-4">SEF and IBM</td>
                        <td class="py-2 px-4">17.8.24</td>
                        <td class="py-2 px-4">Importance of holistic, human-centric learning. Role of teacher in fostering educational experiences to equip students with modern skills.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">August</td>
                        <td class="py-2 px-4">Poorti Srivastava</td>
                        <td class="py-2 px-4">TGT Computer Science</td>
                        <td class="py-2 px-4">Migrating to Student-Centric New Age Pedagogies</td>
                        <td class="py-2 px-4">Mr. Bishwajeet Senapati</td>
                        <td class="py-2 px-4">SEF and IBM</td>
                        <td class="py-2 px-4">17.8.24</td>
                        <td class="py-2 px-4">Implement methods for shifting from teacher-centric to student-centric pedagogies.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">August</td>
                        <td class="py-2 px-4">Poorti Srivastava</td>
                        <td class="py-2 px-4">TGT Computer Science</td>
                        <td class="py-2 px-4">Code Monkey Orientation</td>
                        <td class="py-2 px-4">Mr. Kunal Ozarde</td>
                        <td class="py-2 px-4">Coding Edu Marketing and SEF</td>
                        <td class="py-2 px-4">30.8.24</td>
                        <td class="py-2 px-4">Understand coding platform functionalities, resolve deployment issues, discuss lesson plans, discover challenges, and story/skill mode levels.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">August</td>
                        <td class="py-2 px-4">Shefali Yadav</td>
                        <td class="py-2 px-4">PRT</td>
                        <td class="py-2 px-4">Migrating to Student-Centric New Age Pedagogies</td>
                        <td class="py-2 px-4">Mr. Bishwajeet Senapati</td>
                        <td class="py-2 px-4">SEF and IBM</td>
                        <td class="py-2 px-4">24.8.24</td>
                        <td class="py-2 px-4">Importance of holistic, human-centric learning and teacher’s role in fostering holistic educational experiences.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">October</td>
                        <td class="py-2 px-4">Ashutosh Kumar Shukla</td>
                        <td class="py-2 px-4">PGT IP and AI</td>
                        <td class="py-2 px-4">Workshop on Pedagogy for CS and AI</td>
                        <td class="py-2 px-4">Mr. Vasudevan Natarajan</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">1.10.24</td>
                        <td class="py-2 px-4">C4 model in pedagogy, AI tools, introduction to NCF and global standards.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">December</td>
                        <td class="py-2 px-4">Manjari Srivastava</td>
                        <td class="py-2 px-4">PGT Mathematics</td>
                        <td class="py-2 px-4">Effective Differentiation and Assessment Strategies</td>
                        <td class="py-2 px-4">Dr. Amit Bajaj</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">14.12.24</td>
                        <td class="py-2 px-4">Understand differentiated learning principles, strengthen learning by preparing accelerated assignment sheets, grouping students in classroom.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">December</td>
                        <td class="py-2 px-4">Bindu Vaish</td>
                        <td class="py-2 px-4">TGT Mathematics</td>
                        <td class="py-2 px-4">Effective Differentiation and Assessment Strategies</td>
                        <td class="py-2 px-4">Dr. Amit Bajaj</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">14.12.24</td>
                        <td class="py-2 px-4">Understand differentiated learning principles, strengthen learning by preparing accelerated assignment sheets, grouping students in classroom.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">December</td>
                        <td class="py-2 px-4">Dhirendra Pant</td>
                        <td class="py-2 px-4">PGT Mathematics</td>
                        <td class="py-2 px-4">Effective Differentiation and Assessment Strategies</td>
                        <td class="py-2 px-4">Dr. Amit Bajaj</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">14.12.24</td>
                        <td class="py-2 px-4">Understand differentiated learning principles, strengthen learning by preparing accelerated assignment sheets, grouping students in classroom.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">December</td>
                        <td class="py-2 px-4">Neha Chaturvedi</td>
                        <td class="py-2 px-4">Front Office Executive</td>
                        <td class="py-2 px-4">Training for Counsellors</td>
                        <td class="py-2 px-4">Mr. Sanjay Kapoor, Ms. Shilpi Tandon</td>
                        <td class="py-2 px-4">Head Office</td>
                        <td class="py-2 px-4">16.12.24</td>
                        <td class="py-2 px-4">Better understanding of counselling and admission processes, creating parent need to convert enquiries to admissions.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">January</td>
                        <td class="py-2 px-4">Andleeb Wahid</td>
                        <td class="py-2 px-4">Maths/TGT</td>
                        <td class="py-2 px-4">Financial Literacy</td>
                        <td class="py-2 px-4">Fatima Dholkawal</td>
                        <td class="py-2 px-4">SEF & Eduvate</td>
                        <td class="py-2 px-4">30.1.25</td>
                        <td class="py-2 px-4">Introduce basics of financial literacy, develop knowledge and skills for informed financial decisions.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">January</td>
                        <td class="py-2 px-4">Shuchita Sah Mathur</td>
                        <td class="py-2 px-4">Maths/TGT</td>
                        <td class="py-2 px-4">Financial Literacy</td>
                        <td class="py-2 px-4">Fatima Dholkawal</td>
                        <td class="py-2 px-4">SEF & Eduvate</td>
                        <td class="py-2 px-4">30.1.25</td>
                        <td class="py-2 px-4">Introduce basics of financial literacy, develop knowledge and skills for informed financial decisions.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">January</td>
                        <td class="py-2 px-4">Kuldeep Pandey</td>
                        <td class="py-2 px-4">Maths/TGT</td>
                        <td class="py-2 px-4">Financial Literacy</td>
                        <td class="py-2 px-4">Fatima Dholkawal</td>
                        <td class="py-2 px-4">SEF & Eduvate</td>
                        <td class="py-2 px-4">30.1.25</td>
                        <td class="py-2 px-4">1. Understand basic financial concepts. 2. Identify banking cards: Debit, Credit, Prepaid. 3. Recognize importance of financial situation for future.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">January</td>
                        <td class="py-2 px-4">Rohini Yadav</td>
                        <td class="py-2 px-4">Maths/TGT</td>
                        <td class="py-2 px-4">Financial Literacy</td>
                        <td class="py-2 px-4">Fatima Dholkawal</td>
                        <td class="py-2 px-4">SEF & Eduvate</td>
                        <td class="py-2 px-4">30.1.25</td>
                        <td class="py-2 px-4">Introduce basics of financial literacy, develop knowledge and skills for informed financial decisions.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">January</td>
                        <td class="py-2 px-4">Sanjana Kapoor</td>
                        <td class="py-2 px-4">PRT Maths</td>
                        <td class="py-2 px-4">Financial Literacy</td>
                        <td class="py-2 px-4">Fatima Dholkawala, Pritika Sivaraj</td>
                        <td class="py-2 px-4">SEF & Eduvate</td>
                        <td class="py-2 px-4">29.1.25</td>
                        <td class="py-2 px-4">Different features of Financial Literacy Curriculum and related activities.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">January</td>
                        <td class="py-2 px-4">Nimisha Kapoor</td>
                        <td class="py-2 px-4">PRT Maths</td>
                        <td class="py-2 px-4">Financial Literacy</td>
                        <td class="py-2 px-4">Fatima Dholkawala, Pritika Sivaraj</td>
                        <td class="py-2 px-4">SEF & Eduvate</td>
                        <td class="py-2 px-4">29.1.25</td>
                        <td class="py-2 px-4">Different features of Financial Literacy Curriculum and related activities.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">January</td>
                        <td class="py-2 px-4">Priya Rohatgi</td>
                        <td class="py-2 px-4">PRT Maths</td>
                        <td class="py-2 px-4">Financial Literacy</td>
                        <td class="py-2 px-4">Fatima Dholkawala, Pritika Sivaraj</td>
                        <td class="py-2 px-4">SEF & Eduvate</td>
                        <td class="py-2 px-4">29.1.25</td>
                        <td class="py-2 px-4">Different features of Financial Literacy Curriculum and related activities.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">January</td>
                        <td class="py-2 px-4">Mr. Rupendera</td>
                        <td class="py-2 px-4">Music</td>
                        <td class="py-2 px-4">Music & Dance Training</td>
                        <td class="py-2 px-4">Villson Joy, Dishabhalekar</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">21.1.25</td>
                        <td class="py-2 px-4">Teach children to build, play, improvise over guitar chords; introduce Western dance and music, use techniques and instruments.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">January</td>
                        <td class="py-2 px-4">Mr. Shiv Pandit</td>
                        <td class="py-2 px-4">Music</td>
                        <td class="py-2 px-4">Music & Dance Training</td>
                        <td class="py-2 px-4">Villson Joy, Dishabhalekar</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">21.1.25</td>
                        <td class="py-2 px-4">Teach children to build, play, improvise over guitar chords; introduce Western dance and music, use techniques and instruments.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">January</td>
                        <td class="py-2 px-4">Mr. Henry Arnold</td>
                        <td class="py-2 px-4">Music</td>
                        <td class="py-2 px-4">Music & Dance Training</td>
                        <td class="py-2 px-4">Villson Joy, Dishabhalekar</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">21.1.25</td>
                        <td class="py-2 px-4">Teach children to build, play, improvise over guitar chords; introduce Western dance and music, use techniques and instruments.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">January</td>
                        <td class="py-2 px-4">Mr. Satyam Srivastava</td>
                        <td class="py-2 px-4">Dance</td>
                        <td class="py-2 px-4">Music & Dance Training</td>
                        <td class="py-2 px-4">Villson Joy, Dishabhalekar</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">21.1.25</td>
                        <td class="py-2 px-4">Teach children to build, play, improvise over guitar chords; introduce Western dance and music, use techniques and instruments.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">January</td>
                        <td class="py-2 px-4">Ms. Nischal</td>
                        <td class="py-2 px-4">Dance</td>
                        <td class="py-2 px-4">Music & Dance Training</td>
                        <td class="py-2 px-4">Villson Joy, Dishabhalekar</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">21.1.25</td>
                        <td class="py-2 px-4">Teach children to build, play, improvise over guitar chords; introduce Western dance and music, use techniques and instruments.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">January</td>
                        <td class="py-2 px-4">Tarbia Zehra</td>
                        <td class="py-2 px-4">School Counsellor</td>
                        <td class="py-2 px-4">21st Century Values Programme</td>
                        <td class="py-2 px-4">Mr. Harshit Roy</td>
                        <td class="py-2 px-4">SEF</td>
                        <td class="py-2 px-4">13.1.25</td>
                        <td class="py-2 px-4">Social and emotional growth of children through new set of books for upcoming session.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">March</td>
                        <td class="py-2 px-4">Saniya Farheen</td>
                        <td class="py-2 px-4">PRT Social Science</td>
                        <td class="py-2 px-4">Project Based Learning</td>
                        <td class="py-2 px-4">Mr. Tarikh Siddiqui</td>
                        <td class="py-2 px-4">Head Office and Ratnasagar Publications</td>
                        <td class="py-2 px-4">12.3.25</td>
                        <td class="py-2 px-4">Implement PBL using 5E model (Engage, Explore, Explain, Elaborate, Evaluate). Activity-oriented learning through PBL, experiential, differentiated, cooperative learning.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">March</td>
                        <td class="py-2 px-4">Saroj Tripathi</td>
                        <td class="py-2 px-4">PRT Social Science</td>
                        <td class="py-2 px-4">Project Based Learning</td>
                        <td class="py-2 px-4">Mr. Tarikh Siddiqui</td>
                        <td class="py-2 px-4">Head Office and Ratnasagar Publications</td>
                        <td class="py-2 px-4">12.3.25</td>
                        <td class="py-2 px-4">Implement PBL using 5E model (Engage, Explore, Explain, Elaborate, Evaluate). Activity-oriented learning through PBL, experiential, differentiated, cooperative learning.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">March</td>
                        <td class="py-2 px-4">Nimisha Kapoor</td>
                        <td class="py-2 px-4">PRT Mathematics</td>
                        <td class="py-2 px-4">Board Protocol</td>
                        <td class="py-2 px-4">Mr. Muzammil, Ms. Vidhi</td>
                        <td class="py-2 px-4">Head Office and Riverside Learning Centre</td>
                        <td class="py-2 px-4">11.3.25</td>
                        <td class="py-2 px-4">Utilize board as a tool to ensure maximum outcome in terms of four R's (relevance, rigour, relationship, reflection).</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">March</td>
                        <td class="py-2 px-4">Aditi Chaturvedi</td>
                        <td class="py-2 px-4">PRT English</td>
                        <td class="py-2 px-4">Orientation of English (NEF & NCF)</td>
                        <td class="py-2 px-4">Mr. Mansoor Nazeer, Ms. Mridula</td>
                        <td class="py-2 px-4">Head Office and Macmillan</td>
                        <td class="py-2 px-4">4.3.25</td>
                        <td class="py-2 px-4">Teach English as a language, not a subject; introduce chapters engagingly with blended, experiential teaching using digital platforms.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">March</td>
                        <td class="py-2 px-4">Lavina Gaur</td>
                        <td class="py-2 px-4">PRT English</td>
                        <td class="py-2 px-4">Orientation of English (NEF & NCF)</td>
                        <td class="py-2 px-4">Mr. Mansoor Nazeer, Ms. Mridula</td>
                        <td class="py-2 px-4">Head Office and Macmillan</td>
                        <td class="py-2 px-4">4.3.25</td>
                        <td class="py-2 px-4">Teach English as a language, not a subject; introduce chapters engagingly with blended, experiential teaching using digital platforms.</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">March</td>
                        <td class="py-2 px-4">Ankita Tripathi</td>
                        <td class="py-2 px-4">PRT English</td>
                        <td class="py-2 px-4">Orientation of English (NEF & NCF)</td>
                        <td class="py-2 px-4">Mr. Mansoor Nazeer, Ms. Mridula</td>
                        <td class="py-2 px-4">Head Office and Macmillan</td>
                        <td class="py-2 px-4">4.3.25</td>
                        <td class="py-2 px-4">How to teach English as a language and not a subject,  How to introduce a chapter in an interesting and engaging manner with the help of blended and experiential teaching keeping the digital platform as a resource.</td>
                    </tr>
                </tbody>
            </table> -->
           
         </div>
                  </div>
    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
 
</body>

</html>