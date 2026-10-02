<?php
include "includes/apis.php";
 
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $facultylist_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $facultylist_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $facultylist_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($facultylist_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($facultylist_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <p class="ms-1 text-sm font-medium text-blue-main">About Us
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
                        <a href="faculty" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($facultylist_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div class="flex justify-center w-full">
                <div class="overflow-x-auto w-full max-w-6xl bg-white rounded-md shadow-lg">
                    <?= $facultylist_data['data']['sections'][1]['content'] ?? "" ?>
                    
                    <!-- <table class="min-w-full divide-y divide-gray-300 text-sm text-left">
                        <thead class="bg-blue-main text-white uppercase text-xs">
                            <tr>
                                <th class="px-4 py-2">S. No.</th>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Designation</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">

                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">1</td>
                                <td class="px-4 py-2">MS. PINKIE SRIVASTAVA</td>
                                <td class="px-4 py-2">COORDINATOR SENIOR SCHOOL, PGT & HOD COMPUTER SCIENCE</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">2</td>
                                <td class="px-4 py-2">MS. UMA KHANNA</td>
                                <td class="px-4 py-2">PGT & HOD HINDI</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">3</td>
                                <td class="px-4 py-2">MS. TOSHI GUPTA</td>
                                <td class="px-4 py-2">PGT & HOD PHYSICS</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">4</td>
                                <td class="px-4 py-2">MR. DHIRENDRA PANT</td>
                                <td class="px-4 py-2">PGT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">5</td>
                                <td class="px-4 py-2">MS. MANJARI SRIVASTAVA</td>
                                <td class="px-4 py-2">PGT & HOD MATHEMATICS</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">6</td>
                                <td class="px-4 py-2">MS. VINEETA MISHRA</td>
                                <td class="px-4 py-2">PGT & HOD ENGLISH</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">7</td>
                                <td class="px-4 py-2">MR. SHIRISH SHUKLA</td>
                                <td class="px-4 py-2">PGT &HOD COMMERCE</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">8</td>
                                <td class="px-4 py-2">MR. ABHAY SINGH</td>
                                <td class="px-4 py-2">PGT & HOD PHYSICAL EDUCATION</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">9</td>
                                <td class="px-4 py-2">MS. RAGINI SHARMA</td>
                                <td class="px-4 py-2">PGT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">10</td>
                                <td class="px-4 py-2">MS. DEEPALI SOOD</td>
                                <td class="px-4 py-2">PGT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">11</td>
                                <td class="px-4 py-2">MS. RITU SRIVASTAVA</td>
                                <td class="px-4 py-2">PGT & HOD CHEMISTRY</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">12</td>
                                <td class="px-4 py-2">MS. BARKHA DWIVEDI</td>
                                <td class="px-4 py-2">PGT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">13</td>
                                <td class="px-4 py-2">MR. ABHINAI ASTHANA</td>
                                <td class="px-4 py-2">PGT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">14</td>
                                <td class="px-4 py-2">MR. ASHUTOSH KR. SHUKLA</td>
                                <td class="px-4 py-2">PGT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">15</td>
                                <td class="px-4 py-2">MS. NEENA MISRA</td>
                                <td class="px-4 py-2">PGT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">16</td>
                                <td class="px-4 py-2">MS. ASTHA MISHRA</td>
                                <td class="px-4 py-2">PGT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">17</td>
                                <td class="px-4 py-2">MS. SHIKHA CHATURVEDI</td>
                                <td class="px-4 py-2">PGT & HOD HUMANITIES</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">18</td>
                                <td class="px-4 py-2">MS. KAMALA TEWARI</td>
                                <td class="px-4 py-2">PGT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">19</td>
                                <td class="px-4 py-2">MS. TARBIA ZEHRA</td>
                                <td class="px-4 py-2">PGT PSYCHOLOGY & PSYCHOLOGICAL COUNSELLOR</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">20</td>
                                <td class="px-4 py-2">MS. IQRA AFREEN</td>
                                <td class="px-4 py-2">PGT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">21</td>
                                <td class="px-4 py-2">MS. LIPI BANERJEE</td>
                                <td class="px-4 py-2">TGT & COORDINATOR VI - VIII</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">22</td>
                                <td class="px-4 py-2">MS. SUNITA CHATURVEDI</td>
                                <td class="px-4 py-2">TGT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">23</td>
                                <td class="px-4 py-2">MS. BINDU VAISH</td>
                                <td class="px-4 py-2">TGT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">24</td>
                                <td class="px-4 py-2">MS. SHAISTA JAMIL KHAN</td>
                                <td class="px-4 py-2">TGT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">25</td>
                                <td class="px-4 py-2">MS. SUDHA JHA</td>
                                <td class="px-4 py-2">TGT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">26</td>
                                <td class="px-4 py-2">MS. SUCHITA SAH MATHUR</td>
                                <td class="px-4 py-2">TGT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">27</td>
                                <td class="px-4 py-2">MS. ROHINI YADAV</td>
                                <td class="px-4 py-2">TGT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">28</td>
                                <td class="px-4 py-2">MS. MEENAKSHI BHARGAVA</td>
                                <td class="px-4 py-2">TGT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">29</td>
                                <td class="px-4 py-2">MS. ANDLEEB WAHID</td>
                                <td class="px-4 py-2">TGT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">30</td>
                                <td class="px-4 py-2">MS. NEETA TIWARI</td>
                                <td class="px-4 py-2">TGT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">31</td>
                                <td class="px-4 py-2">MS. POORTI SRIVASTAVA</td>
                                <td class="px-4 py-2">TGT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">32</td>
                                <td class="px-4 py-2">MS. EKTA ARORA</td>
                                <td class="px-4 py-2">TGT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">33</td>
                                <td class="px-4 py-2">MS. MOUMITA BOSE</td>
                                <td class="px-4 py-2">TGT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">34</td>
                                <td class="px-4 py-2">MS. NEELAM SRIVASTAVA</td>
                                <td class="px-4 py-2">TGT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">35</td>
                                <td class="px-4 py-2">MR. KULDEEP PANDEY</td>
                                <td class="px-4 py-2">TGT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">36</td>
                                <td class="px-4 py-2">MR. SYED MOHAMMAD FIROZ</td>
                                <td class="px-4 py-2">TGT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">37</td>
                                <td class="px-4 py-2">MS. SADHANA TIWARI</td>
                                <td class="px-4 py-2">TGT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">38</td>
                                <td class="px-4 py-2">MS. SUJATA BOSE</td>
                                <td class="px-4 py-2">TGT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">39</td>
                                <td class="px-4 py-2">MS. KRITIKA MISHRA</td>
                                <td class="px-4 py-2">TGT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">40</td>
                                <td class="px-4 py-2">MS. ARCHANA TEWARI</td>
                                <td class="px-4 py-2">TGT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">41</td>
                                <td class="px-4 py-2">MS. NIMISHA KAPOOR</td>
                                <td class="px-4 py-2">PRT & COORDINATOR III - V</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">42</td>
                                <td class="px-4 py-2">MS. SARIKA SRIVASTAVA</td>
                                <td class="px-4 py-2">PRT & COORDINATOR I & II</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">43</td>
                                <td class="px-4 py-2">MS. PRIYA ROHATGI</td>
                                <td class="px-4 py-2">PRT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">44</td>
                                <td class="px-4 py-2">MS. BABITA ARORA</td>
                                <td class="px-4 py-2">PRT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">45</td>
                                <td class="px-4 py-2">MR. CHANDRAWATI SINGH</td>
                                <td class="px-4 py-2">PRT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">46</td>
                                <td class="px-4 py-2">MS. POOJA MEHTA</td>
                                <td class="px-4 py-2">PRT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">47</td>
                                <td class="px-4 py-2">MS. ADITI CHATURVEDI</td>
                                <td class="px-4 py-2">PRT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">48</td>
                                <td class="px-4 py-2">MS. SANJANA KAPOOR</td>
                                <td class="px-4 py-2">PRT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">49</td>
                                <td class="px-4 py-2">MS. DEEPSHIKHA PAL</td>
                                <td class="px-4 py-2">PRT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">50</td>
                                <td class="px-4 py-2">MS. SANIYA FARHEEN</td>
                                <td class="px-4 py-2">PRT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">51</td>
                                <td class="px-4 py-2">MS. CHETNA BANSAL</td>
                                <td class="px-4 py-2">PRT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">52</td>
                                <td class="px-4 py-2">MS. ANKITA GUPTA</td>
                                <td class="px-4 py-2">PRT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">53</td>
                                <td class="px-4 py-2">MS. NIDHI KHARE</td>
                                <td class="px-4 py-2">PRT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">54</td>
                                <td class="px-4 py-2">MS. FATIMA ZARTAJ</td>
                                <td class="px-4 py-2">PRT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">55</td>
                                <td class="px-4 py-2">MS. NEETI SRIVASTAVA</td>
                                <td class="px-4 py-2">PRT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">56</td>
                                <td class="px-4 py-2">MS. SHEFALI YADAV</td>
                                <td class="px-4 py-2">PRT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">57</td>
                                <td class="px-4 py-2">MS. SONAM SETH</td>
                                <td class="px-4 py-2">PRT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">58</td>
                                <td class="px-4 py-2">MS. LAVINA GAUR</td>
                                <td class="px-4 py-2">PRT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">59</td>
                                <td class="px-4 py-2">MS. SAROJ TRIPATHI</td>
                                <td class="px-4 py-2">PRT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">60</td>
                                <td class="px-4 py-2">MS. ANKITA TRIPATHI</td>
                                <td class="px-4 py-2">PRT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">61</td>
                                <td class="px-4 py-2">MS. AMITA SHARMA</td>
                                <td class="px-4 py-2">PRT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">62</td>
                                <td class="px-4 py-2">MS. NANDITA JHA</td>
                                <td class="px-4 py-2">PRT & COORDINATOR PRE PRIMARY</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">63</td>
                                <td class="px-4 py-2">MS. VARSHA BARTARYA</td>
                                <td class="px-4 py-2">PRT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">64</td>
                                <td class="px-4 py-2">MS. RUPALI DAS</td>
                                <td class="px-4 py-2">PRT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">65</td>
                                <td class="px-4 py-2">MS. SHUBAIKA TALAT</td>
                                <td class="px-4 py-2">PRT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">66</td>
                                <td class="px-4 py-2">MS. SHAILY SRIVASTAVA</td>
                                <td class="px-4 py-2">PRT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">67</td>
                                <td class="px-4 py-2">MS. ERAM ABRAR</td>
                                <td class="px-4 py-2">PRT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">68</td>
                                <td class="px-4 py-2">MS. RASHMI SRIVASTAVA</td>
                                <td class="px-4 py-2">PRT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">69</td>
                                <td class="px-4 py-2">MS. MEGHALI AGARWAL</td>
                                <td class="px-4 py-2">PRT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">70</td>
                                <td class="px-4 py-2">MS. MANIKA MALHOTRA</td>
                                <td class="px-4 py-2">PRT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">71</td>
                                <td class="px-4 py-2">MR. ABHISHEK KUMAR SRIVASTAVA</td>
                                <td class="px-4 py-2">PHYSICAL EDUCATION TRAINER</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">72</td>
                                <td class="px-4 py-2">MS. SHWETA SINGH</td>
                                <td class="px-4 py-2">PHYSICAL EDUCATION TRAINER</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">73</td>
                                <td class="px-4 py-2">MS. YOGITA SINGH</td>
                                <td class="px-4 py-2">PHYSICAL EDUCATION TRAINER</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">74</td>
                                <td class="px-4 py-2">MR. ANSHUL SONKAR</td>
                                <td class="px-4 py-2">PHYSICAL EDUCATION TRAINER</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">75</td>
                                <td class="px-4 py-2">MR. RUPENDRA SINGH</td>
                                <td class="px-4 py-2">HOD & INDIAN VOCAL MUSIC TEACHER</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">76</td>
                                <td class="px-4 py-2">MR. SHIV KUMAR</td>
                                <td class="px-4 py-2">INDIAN INSTRUMENTAL MUSIC TEACHER</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">77</td>
                                <td class="px-4 py-2">MR. HENRY ARNOLD</td>
                                <td class="px-4 py-2">WESTREN MUSIC TEACHER</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">78</td>
                                <td class="px-4 py-2">MR. SATYAM SUMAN SRIVASTAVA</td>
                                <td class="px-4 py-2">DANCE TEACHER</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">79</td>
                                <td class="px-4 py-2">MS. NISHCHHAL SHUKLA</td>
                                <td class="px-4 py-2">DANCE TEACHER</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">80</td>
                                <td class="px-4 py-2">MS. SANGEETA SHARMA</td>
                                <td class="px-4 py-2">HOD ART & CRAFT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">81</td>
                                <td class="px-4 py-2">MR. ANMOL KUMAR SHARMA</td>
                                <td class="px-4 py-2">ART & CRAFT TEACHER</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">82</td>
                                <td class="px-4 py-2">MS. TAHMEENA SHAKEEL</td>
                                <td class="px-4 py-2">SFL TRAINER</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">83</td>
                                <td class="px-4 py-2">MR. SYED ALI ABBAS ABIDI</td>
                                <td class="px-4 py-2">ANIMATION FACULTY</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">84</td>
                                <td class="px-4 py-2">MS. SHIPRA SINGH</td>
                                <td class="px-4 py-2">PART TIME FRENCH TEACHER</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">85</td>
                                <td class="px-4 py-2">MR. SHIRISH KHARE</td>
                                <td class="px-4 py-2">PART TIME FRENCH TEACHER</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">86</td>
                                <td class="px-4 py-2">MS. NABA HAMD</td>
                                <td class="px-4 py-2">PART TIME URDU TEACHER</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">87</td>
                                <td class="px-4 py-2">MS. BARKHA AGARWAL</td>
                                <td class="px-4 py-2">PART TIME GERMAN TEACHER</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">88</td>
                                <td class="px-4 py-2">MR. RAMA SHANKAR</td>
                                <td class="px-4 py-2">PART TIME CHESS COACH</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">89</td>
                                <td class="px-4 py-2">MR. MUNNA ANSARI</td>
                                <td class="px-4 py-2">PART TIME KARATE COACH</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">90</td>
                                <td class="px-4 py-2">MR. ANUPENDRA SINGH</td>
                                <td class="px-4 py-2">PART TIME SKATING COACH</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">91</td>
                                <td class="px-4 py-2">MS. PRADIPTA ROY CHOWDHURY SEN</td>
                                <td class="px-4 py-2">SENIOR LIBRARIAN</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">92</td>
                                <td class="px-4 py-2">MS. VAISHALI SRIVASTAVA</td>
                                <td class="px-4 py-2">JUNIOR LIBRARIAN</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">93</td>
                                <td class="px-4 py-2">MS. POONAM SINGH</td>
                                <td class="px-4 py-2">STAFF NURSE</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">94</td>
                                <td class="px-4 py-2">MR. KRIPAL SINGH</td>
                                <td class="px-4 py-2">PHYSICS LAB ASSISTANT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">95</td>
                                <td class="px-4 py-2">MR. SHOBHIT PANDEY</td>
                                <td class="px-4 py-2">CHEMISTRY LAB ASSISTANT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">96</td>
                                <td class="px-4 py-2">MR. RAHUL GUPTA</td>
                                <td class="px-4 py-2">BIOLOGY LAB ASSISTANT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">97</td>
                                <td class="px-4 py-2">MR. MAHESH CH. VERMA</td>
                                <td class="px-4 py-2">SR. COMPUTER LAB TECHNICIAN</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">98</td>
                                <td class="px-4 py-2">MR. ANOOP KUMAR</td>
                                <td class="px-4 py-2">JR COMPUTER LAB TECHNICIAN</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">99</td>
                                <td class="px-4 py-2">MR. SANJEEV SARKAR</td>
                                <td class="px-4 py-2">ACCOUNTANT</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">100</td>
                                <td class="px-4 py-2">MR. SYED NAEEM AHMAD</td>
                                <td class="px-4 py-2">ESTATE MANAGER</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">101</td>
                                <td class="px-4 py-2">MR. MANISH SONI</td>
                                <td class="px-4 py-2">ADMIN EXECUTIVE & CBSE INCHARGE</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">102</td>
                                <td class="px-4 py-2">MS. NEHA NAINWAL</td>
                                <td class="px-4 py-2">FRONT OFFICE EXECUTIVE</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">103</td>
                                <td class="px-4 py-2">MR. VINAY SHARMA</td>
                                <td class="px-4 py-2">OFFICE ASSISTANT (COMPUTER TYPIST)</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">104</td>
                                <td class="px-4 py-2">MR. SUMIT DWIVEDI</td>
                                <td class="px-4 py-2">ERP EXECUTIVE</td>
                            </tr>
                            <tr class="odd:bg-gray-50">
                                <td class="px-4 py-2">105</td>
                                <td class="px-4 py-2">MR. VIKAS MISHRA</td>
                                <td class="px-4 py-2">ADMIN EXECUTIVE</td>
                            </tr>


                        </tbody>
                    </table> -->
                </div>
            </div>
        </div>

    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
    <script>
    $('.moreless-button').click(function() {
        const moreText = $(this).siblings('.moretext');

        $('.moretext').not(moreText).slideUp();
        $('.moreless-button').not(this).text('Read more');

        // Toggle the current one
        moreText.slideToggle();

        if ($(this).text() == "Read more") {
            $(this).text("Read less");
        } else {
            $(this).text("Read more");
        }
    });

    var aboutCarousel = new Glide('.about-carousel', {
        type: 'carousel',
        focusAt: 1,
        perView: 4,
        autoplay: 3500,
        animationDuration: 700,
        gap: 24,
        classes: {
            activeNav: '[&>*]:bg-slate-700',
        },
        breakpoints: {
            1024: {
                perView: 4
            },
            640: {
                perView: 1
            }
        },
    });
    aboutCarousel.mount();

    var aboutCarousel2 = new Glide('.about-carousel2', {
        type: 'carousel',
        focusAt: 1,
        perView: 4,
        autoplay: 3500,
        animationDuration: 700,
        gap: 24,
        classes: {
            activeNav: '[&>*]:bg-slate-700',
        },
        breakpoints: {
            1680: {
                perView: 4
            },
            1024: {
                perView: 3
            },
            820: {
                perView: 2
            },
            640: {
                perView: 1
            }
        },
    });
    aboutCarousel2.mount();




    var glide03 = new Glide('.glide-03', {
        type: 'carousel',
        focusAt: 1,
        perView: 4,
        autoplay: 3500,
        animationDuration: 700,
        gap: 24,
        classes: {
            activeNav: '[&>*]:bg-slate-700',
        },
        breakpoints: {
            1680: {
                perView: 4
            },
            1024: {
                perView: 3
            },
            820: {
                perView: 2
            },
            640: {
                perView: 1
            }
        },
    });

    glide03.mount();

    var latestNews2 = new Glide('.latestNews2', {
        type: 'carousel',
        focusAt: 1,
        perView: 4,
        autoplay: 3500,
        animationDuration: 700,
        gap: 24,
        classes: {
            activeNav: '[&>*]:bg-slate-700',
        },
        breakpoints: {
            1680: {
                perView: 4
            },
            1024: {
                perView: 3
            },
            820: {
                perView: 2
            },
            640: {
                perView: 1
            }
        },
    });
    latestNews2.mount();
    </script>
</body>

</html>