<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $oluxismart_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $oluxismart_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $oluxismart_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($oluxismart_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($oluxismart_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <a href="oluxi-smart-skill" class="ms-1 text-sm font-medium text-blue-main"> <?= strip_tags($oluxismart_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div class="md:flex gap-9 mt-6 mb-10">
                <div class="md:w-[40%]">
                    <img src="<?= $oluxismart_data['data']['sections'][1]['columns'][0]['image_url'] ?? "" ?>"
                        alt="<?= cms_image_alt($oluxismart_data['data']['sections'][1]['columns'][0] ?? [], 'Oluxi Smart Skills'); ?>" class="w-full rounded-md shadow">
                </div>
                <div class="md:w-[60%]">
                    <?= $oluxismart_data['data']['sections'][1]['columns'][1]['content'] ?? "" ?>

                    <!-- <p class="sm:text-[16px] text-[16px] font-[400]  text-gray-600">
                        Oluxi Smart Skills is a dynamic and engaging subject designed to equip students with essential
                        skills for personal growth, social interaction, and future success. Through a wide variety of
                        hands-on activities, projects, and real-world simulations, students develop practical abilities
                        that extend beyond the classroom. Activities are age-appropriate and grow progressively more
                        complex as students move up the grades.
                    </p>

                    <p class="sm:text-[16px] text-[16px] font-[400] mt-2 text-gray-600">
                        In Oluxi Smart Skills, students participate in activities that promote communication, teamwork,
                        problem-solving, critical thinking, leadership, and emotional intelligence.
                    </p>

                    <p class="sm:text-[16px] text-[16px] font-[400] mt-2 text-gray-600">
                        Some of the many activities students enjoy in Life Skills include:
                    </p>

                    <ul class="sm:text-[16px] text-[16px] font-[400] mt-2 sm:ml-5 text-gray-600"
                        style="list-style:decimal">
                        <li>Role-playing to practice real-life situations like handling peer pressure, asking for help
                            and showing gratitude.</li>
                        <li>Group Discussions to build speaking and listening skills while respecting different
                            viewpoints.</li>
                        <li>Simple Financial Literacy Games to introduce the concepts of saving, spending, and
                            budgeting.</li>
                        <li>Time Management Challenges like planning a mini-event or organizing a daily routine.</li>
                        <li>Self-care Workshops covering hygiene, fitness and healthy habits.</li>
                        <li>Digital Etiquette Lessons to guide students on responsible use of technology and online
                            safety.</li>
                    </ul>
                    <p class="sm:text-[16px] text-[16px] font-[400] mt-2 text-gray-600">
                        The curriculum is thoughtfully crafted to cover important areas such as confidence building,
                        time management, decision-making, digital literacy, conflict resolution, stress management etc.
                        Each topic is explored through interactive exercises that encourage students to actively apply
                        what they learn in meaningful ways.
                    </p> -->
                </div>
            </div>


            <?= $oluxismart_data['data']['sections'][2]['content'] ?? "" ?>

            <!-- <p class="sm:text-[16px] text-[16px] font-[400] mt-2 text-gray-600">
                Throughout Oluxi Smart Skills program, students are encouraged to reflect on their experiences,
                celebrate diversity, understand the importance of values, and develop resilience. They learn how to
                manage emotions, resolve conflicts peacefully, make ethical decisions, and set achievable personal
                goals.
            </p>

            <p class="sm:text-[16px] text-[16px] font-[400] mt-2 text-gray-600">
                By actively engaging in these activities, students gradually build a strong foundation for success not
                only in academics but in everyday life. Oluxi Smart Skills as a subject ensures that every child feels
                empowered, prepared, and motivated to grow into a responsible and caring citizen.
            </p> -->





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