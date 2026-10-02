<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $admissioncriteria_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $admissioncriteria_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $admissioncriteria_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($admissioncriteria_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($admissioncriteria_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Admission
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
                        <a href="admission-criteria" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($admissioncriteria_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
              <?= $admissioncriteria_data['data']['sections'][1]['content'] ?? "" ?>
            <!-- <div class=" gap-9 mt-6 mb-10">



                <h3 class="text-[20px] text-gray-600 font-[700] mt-4">ADMISSION PROCESS FOR PRE-PRIMARY</h3>
                <ul class="text-[16px] text-gray-600 mt-2">
                    <li>• Registration is the first step.</li>
                    <li>• Admission to Pre Nursery will be through informal interaction with the parents and the child.
                    </li>
                    <li>• Date and timing for interaction will be intimated.</li>
                    <li>• Nursery & Prep: There will be a written test conducted and an interaction of the parents with
                        the Principal.</li>
                    <li>• List of selected candidates will be displayed by the Administrative Office.</li>
                    <li>• On confirmation of admission, parents will be required to deposit fee within the stipulated
                        time, failing which the admission shall stand cancelled.</li>
                    <li>• Age criteria</li>
                    <ul class="text-[16px] text-gray-600 mt-2 ml-4">
                        <li>PG - (Age 3 plus)</li>
                        <li>Nursery - (Age 4 plus)</li>
                        <li>Prep - (Age 5 plus)</li>
                    </ul>
                    <h3 class="text-[20px] text-gray-600 font-[700] mt-4">ADMISSION PROCESS FOR CLASSES I - IX</h3>
                    <li>• Registration is the first step.
                    <li>• Admission to classes I and above is given based on the result of an admission test conducted
                        by the school.</li>
                    <li>• Date, Time and Syllabus for admission test may be collected from School Administrative Office
                        at the time of registration.</li>
                    <li>• Result of Admission Test will be displayed at the School Administrative Office.</li>
                    <li>• Registration/Admission in a particular class depends on seats available.</li>
                    <li>• Age criteria for Class I - (Age 6 plus)</li>
                    <li>• Medical Fitness Certificate from Chief Medical Officer/Registered Medical Practitioner.</li>
                    <li>• Self-attested Xerox copy of the Child's Immunization Card (Classes Pre Primary - I)</li>
                    <h3 class="text-[20px] text-gray-600 font-[700] mt-4">ADMISSION PROCESS FOR CLASS XI</h3>
                    <li>• Registration for admission to Class XI Science, Commerce and Humanities stream begins by the
                        end of March.</li>
                    <li>• Admission in Class XI is given on the basis of Written Admission Test and Personal Interview
                        of the candidate with the Principal.</li>
                    <li>• Admission Test of Class XI is conducted either on the first or second week of April. </li>
            </div> -->
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