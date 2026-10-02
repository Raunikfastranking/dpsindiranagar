<?php
include "includes/apis.php";
 
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $foundationalstage_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $foundationalstage_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $foundationalstage_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                     <?= strip_tags($foundationalstage_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                     <?= strip_tags($foundationalstage_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Academics
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Our Curriculum
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
                        <a href="foundational-stage" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($foundationalstage_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div class="my-10 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
            <div class="sm:mt-10 relative">
                <div class="prose max-w-none text-gray-800">
                    <?= $foundationalstage_data['data']['sections'][1]['content'] ?? "" ?>

                    <!-- <h2 class="text-2xl font-bold mb-4">NCF 2023 – Foundational Stage (Pre-Primary)</h2>
                    <p class="text-gray-700 mb-6">
                        The pre-primary stage within the Foundational Stage of the NCF 2023 focuses on children aged
                        <strong>3 to 6 years</strong>.
                        At <strong>Delhi Public School Indira Nagar</strong>, the following key elements are emphasized:
                    </p>

                    <ul class="list-disc list-inside space-y-3">
                        <li>
                            <span class="font-semibold">Play-Based Learning:</span> Activities like storytelling,
                            singing, art, and outdoor play make learning enjoyable and engaging.
                        </li>
                        <li>
                            <span class="font-semibold">Language Development:</span> Oral skills, phonological
                            awareness, and early literacy are nurtured through rhymes, conversations, and storytelling.
                        </li>
                        <li>
                            <span class="font-semibold">Early Numeracy:</span> Introduction to numbers, counting,
                            shapes, and patterns through fun games and hands-on activities.
                        </li>
                        <li>
                            <span class="font-semibold">Socio-Emotional Growth:</span> Teamwork, empathy, and good
                            behaviour are encouraged through group activities and role-playing.
                        </li>
                        <li>
                            <span class="font-semibold">Physical Development:</span> Motor skills are strengthened with
                            activities such as running, jumping, and craftwork.
                        </li>
                        <li>
                            <span class="font-semibold">Ethics and Values:</span> Emphasis on respect, cleanliness, and
                            cooperation.
                        </li>
                        <li>
                            <span class="font-semibold">Integrated Learning:</span> Arts, music, and physical education
                            are blended to provide a comprehensive learning experience.
                        </li>
                    </ul>

                    <p class="mt-6 text-gray-700">
                        This stage aims to create a <strong>strong foundation for lifelong learning</strong> by
                        nurturing curiosity, creativity, and essential skills.
                    </p> -->

                </div>
            </div>
        </div>




        <?php include "includes/footer.php" ?>

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