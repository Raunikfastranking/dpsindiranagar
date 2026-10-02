<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $housesystem_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $housesystem_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $housesystem_data['data']['meta_keywords'] ?? "" ?>">
</head>


<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($housesystem_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($housesystem_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <a href="house-system" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($housesystem_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>


        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">

           
            <div class="md:flex gap-9 mt-6 mb-10">
                <div class="md:w-[40%]">
                    <img src="<?= $housesystem_data['data']['sections'][1]['columns'][0]['image_url'] ?? "" ?>" alt="<?= cms_image_alt($housesystem_data['data']['sections'][1]['columns'][0] ?? [], 'House System'); ?>" class="w-[100%] rounded-md shadow">
                </div>
                <div class="md:w-[60%]">
                    <?= $housesystem_data['data']['sections'][1]['columns'][1]['content'] ?? "" ?>
                    <!-- <p class="text-gray-600  text-[16px]">
                        Education, if not incorporated with co-scholastic activities cannot be considered effective. The
                        school is
                        divided into four houses with the prime objective of inculcating in the students a sense of
                        collective
                        responsibility and solidarity, a sense of team spirit and to encourage healthy competition. The
                        houses are
                        named after the flowers.
                    </p>

                   
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-3">House Names & Values</h3>
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full border border-gray-300 text-left text-gray-600 text-[16px]">
                                <thead>
                                    <tr class="bg-gray-100 text-gray-800">
                                        <th class="border border-gray-300 px-4 py-2">House Name</th>
                                        <th class="border border-gray-300 px-4 py-2">Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2 font-medium">Daffodils (Yellow)</td>
                                        <td class="border border-gray-300 px-4 py-2">The house stands for optimism and
                                            resilience.</td>
                                    </tr>
                                    <tr class="bg-gray-50">
                                        <td class="border border-gray-300 px-4 py-2 font-medium">Blue Bells (Blue)</td>
                                        <td class="border border-gray-300 px-4 py-2">The house associates itself with
                                            humility, gratitude and perseverance.</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2 font-medium">Shamrocks (Green)</td>
                                        <td class="border border-gray-300 px-4 py-2">The house represents the core value
                                            of faith, hope and fortune.</td>
                                    </tr>
                                    <tr class="bg-gray-50">
                                        <td class="border border-gray-300 px-4 py-2 font-medium">Tulips (Red)</td>
                                        <td class="border border-gray-300 px-4 py-2">The house stands as a symbol of
                                            purity, innocence, and grace.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                   
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Members</h3>
                        <p class="text-gray-600 text-[16px]">
                            Each House is under the charge of a House Warden, Vice House-Warden; House Representatives
                            along with
                            House Captains and Prefects shoulder the responsibility through monitorial system and ensure
                            a smooth and
                            efficient functioning of the House. From Classes I onwards students are allotted a
                            particular house as
                            soon as he/she is admitted to the school.
                        </p> -->
                    </div>


                </div>
            <?= $housesystem_data['data']['sections'][2]['content'] ?? "" ?>
            
            <div class="mt-6">
                <!-- <h3 class="text-lg font-semibold text-gray-800 mb-2">Inter House Competitions</h3>
                <p class="text-gray-600 text-[16px]">
                    Inter House Competitions are organized from time to time in various fields. It promotes team spirit,
                    spirit
                    of healthy competition, loyalty towards the group and the spirit to uplift the glory of the school.
                </p> -->
            </div>

           
            <div class="mt-6">
                <!-- <h3 class="text-lg font-semibold text-gray-800 mb-2">Cock House Trophy</h3>
                <p class="text-gray-600 text-[16px]">
                    A rolling trophy is awarded to the House that secures the maximum points in co-curricular activities
                    and
                    Sports at the end of the academic session.
                </p> -->
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