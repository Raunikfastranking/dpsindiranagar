<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $subjects_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $subjects_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $subjects_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($subjects_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($subjects_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <p class="ms-1 text-sm font-medium text-blue-main"> Asseessment
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
                        <a href="subjects" class="ms-1 text-sm font-medium text-blue-main"> <?= strip_tags($subjects_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
            <div class="sm:mt-10 relative">
                <div class="md:w-[100%]">

                    <div class="relative overflow-x-auto sm:rounded-lg my-5">
                        <div class="overflow-x-auto">
                            <?= $subjects_data['data']['sections'][1]['content'] ?? "" ?>
                            <!-- <table class="w-full table-auto border-collapse border border-gray-200 mb-6">
                                <thead>
                                    <tr class="bg-gray-200">
                                        <th class="border border-gray-300 px-4 py-2 uppercase">Class</th>
                                        <th class="border border-gray-300 px-4 py-2 uppercase">Subjects Offered</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2">Pre-Nursery</td>
                                        <td class="border border-gray-300 px-4 py-2">English, Numeracy, Future
                                            Readiness, Hindi, EVS, ICT and Coding</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2">Nursery</td>
                                        <td class="border border-gray-300 px-4 py-2">English, Numeracy, Future
                                            Readiness, Hindi, EVS, ICT & Coding</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2">Prep</td>
                                        <td class="border border-gray-300 px-4 py-2">English, Numeracy, Hindi, Future
                                            Readiness, EVS, ICT, Coding</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2">I & II</td>
                                        <td class="border border-gray-300 px-4 py-2">English, Hindi, Mathematics, EVS,
                                            Computers, General Knowledge</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2">III & IV</td>
                                        <td class="border border-gray-300 px-4 py-2">
                                            English, Hindi, Mathematics, Science, Social Science, Computers, General
                                            Knowledge <br>
                                            <span class="font-semibold">Skill Subject:</span> Animation / Coding,
                                            Financial Literacy
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2">V</td>
                                        <td class="border border-gray-300 px-4 py-2">
                                            English, Hindi, Mathematics, Science, Social Science, Computers, General
                                            Knowledge <br>
                                            <span class="font-semibold">3rd Language:</span> French / German / Sanskrit
                                            / Urdu <br>
                                            <span class="font-semibold">Skill Subject:</span> Animation / Coding,
                                            Financial Literacy
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2">VI – VIII</td>
                                        <td class="border border-gray-300 px-4 py-2">
                                            English, Hindi, Mathematics, Science, Social Science, Computers, General
                                            Knowledge <br>
                                            <span class="font-semibold">3rd Language:</span> French / German / Sanskrit
                                            / Urdu <br>
                                            <span class="font-semibold">Skill Subject:</span> Animation / Coding,
                                            Financial Literacy
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2">IX – X</td>
                                        <td class="border border-gray-300 px-4 py-2">
                                            English Language & Literature, Hindi Course A, Mathematics (Standard /
                                            Basic), Science, Social Science <br>
                                            <span class="font-semibold">Skill Subject:</span> Artificial Intelligence /
                                            Information Technology
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2">XI – XII</td>
                                        <td class="border border-gray-300 px-4 py-2">
                                            English, Mathematics, Physics, Chemistry, Biology, Business Studies,
                                            Accountancy, Economics, Psychology, History, Political Science <br>
                                            <span class="font-semibold">Optional Subjects:</span> Physical Education,
                                            Informatics Practice, Computer Science, Legal Studies, Entrepreneurship,
                                            Applied Maths <br>
                                            <span class="font-semibold">Skill Subjects:</span> Artificial Intelligence,
                                            Library & Information Science, Financial Markets Management, Banking,
                                            Physical Activity Trainer
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
    </div>
    <?php include "includes/foot.php" ?>
    <script>
        $('.moreless-button').click(function () {
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