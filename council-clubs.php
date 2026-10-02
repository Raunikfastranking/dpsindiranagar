<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $studentcouncil_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $studentcouncil_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $studentcouncil_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                     <?= strip_tags($studentcouncil_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                     <?= strip_tags($studentcouncil_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h2>
            </div>
        </div>

        <div class="flex m-5 overflow-x-auto" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="/"
                        class="inline-flex items-center text-[10px] sm:text-[16px] font-medium text-blue-main">
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
                        <p class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">Future Ready Skills
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
                        <p class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">Leadership Programme
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
                        <a href="council-clubs"
                            class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main"><?= strip_tags($studentcouncil_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div class="md:flex gap-9 mt-6 mb-10">
                <div class="md:w-[40%]">
                    <img src="<?= $studentcouncil_data['data']['sections'][1]['columns'][0]['image_url'] ?? "" ?>"
                        alt="<?= cms_image_alt($studentcouncil_data['data']['sections'][1]['columns'][0] ?? [], 'Student Council'); ?>" class="w-[100%] rounded-md shadow">
                </div>
                <div class="md:w-[60%]">
                     <?= $studentcouncil_data['data']['sections'][1]['columns'][1]['content'] ?? "" ?>
                    <!-- <p class="text-gray-600">
                        A Students’ Council is formed every session in order to instill leadership quality in students.
                        This gives them a sense of responsibility and ownership. The Students’ Council is the
                        representative of the students. It acts as a link between the Principal of the School, Teachers
                        and Students. It helps to organize different activities scheduled in the event calendar along
                        with teachers. The objective is to ensure that today’s students are well prepared to be
                        tomorrow’s innovators and engaged citizens of the world.
                    </p>

                    <br>
                    <p class="text-gray-600">
                        It is an integral part of school and being a part of the council helps students learn ‘values’
                        like Responsibility and Compassion and ‘skills’ like Teamwork and Leadership. The council
                        members also serve as positive role models for other students motivating them to aim for higher
                        goals.
                    </p> -->


                </div>
            </div>
             <?= $studentcouncil_data['data']['sections'][2]['content'] ?? "" ?>
            <!-- <h3 class="text-gray-700 font-semibold">Students’ Council Posts</h3>
            <ul class="list-decimal pl-5 mt-2 text-gray-600 space-y-1">
                <li>Head Boy</li>
                <li>Head Girl</li>
                <li>Vice Head Boy</li>
                <li>Vice Head Girl</li>
                <li>President Activity Council</li>
                <li>Vice President Activity Council</li>
                <li>Sports Captain Boys</li>
                <li>Sports Vice Captain Boys</li>
                <li>Sports Captain Girls</li>
                <li>Sports Vice Captain Girls</li>
                <li>President Literary Council</li>
                <li>Vice President Literary Council</li>
                <li>President IT</li>
                <li>Vice President IT</li>
                <li>President Cultural Activity</li>
                <li>Vice President Cultural Activity</li>
                <li>President Creative Council</li>
                <li>Vice President Creative Council</li>
                <li>President Community & Environment Council</li>
                <li>Vice President Community & Environment Council</li>
                <li>House Captain (Blue Bells)</li>
                <li>Vice House Captain (Blue Bells)</li>
                <li>House Captain (Daffodils)</li>
                <li>Vice House Captain (Daffodils)</li>
                <li>House Captain (Shamrocks)</li>
                <li>Vice House Captain (Shamrocks)</li>
                <li>House Captain (Tulips)</li>
                <li>Vice House Captain (Tulips)</li>
            </ul>

            <br>
            <p class="text-gray-600">
                To instil leadership qualities in the formative years, the school has a Junior School Council both in
                the Primary and the Middle Section as well, for which students are selected based on their academic
                performance and evidence of ability to lead.
            </p>

            <br>
            <h3 class="text-gray-700 font-semibold">Junior School Council Posts</h3>
            <ul class="list-decimal pl-5 mt-2 text-gray-600 space-y-1">
                <li>School Captain Boy</li>
                <li>School Captain Girls</li>
                <li>Sports Captain</li>
                <li>Activity Council In-charge</li>
                <li>Literary Council In-charge</li>
                <li>Environment Club In-charge</li>
                <li>House Rep (Bluebells)</li>
                <li>House Rep (Daffodils)</li>
                <li>House Rep (Shamrocks)</li>
                <li>House Rep (Tulips)</li>
            </ul> -->
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