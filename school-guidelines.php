<?php
include "includes/apis.php";
 
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $schoolguidelines_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $schoolguidelines_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $schoolguidelines_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                     <?= strip_tags($schoolguidelines_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                     <?= strip_tags($schoolguidelines_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <a href="school-guidelines" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($schoolguidelines_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            
                <div class=" relative">
                      <?= $schoolguidelines_data['data']['sections'][1]['content'] ?? "" ?>
                    <!-- <div class="prose max-w-none text-gray-600">

                       
                        <h2 class="font-bold mt-6 mb-3">General Expectations</h2>
                        <ul class="list-disc list-inside space-y-2">
                            <li>The school seeks your cooperation and close rapport with teachers for holistic
                                development of your child.</li>
                            <li>Promotion is based on the whole year’s performance; regular attendance and studies are
                                vital.</li>
                            <li>The school reserves the right to detain students who fail to perform satisfactorily.
                            </li>
                        </ul>

                        
                        <h2 class="font-bold mt-6 mb-3">Discipline & Conduct</h2>
                        <ul class="list-disc list-inside space-y-2">
                            <li>Irregular attendance, laziness, disobedience, dishonesty, or conduct injurious to
                                school’s moral tone may lead to dismissal.</li>
                            <li>Pupils must be punctual. Latecomers may be sent home at the parent’s risk.</li>
                            <li>Leave applications must be submitted on an A4 sheet in prescribed format addressed to
                                the Principal.</li>
                            <li>Principal’s approval is mandatory for leave exceeding two days.</li>
                        </ul>

                      
                        <h2 class="font-bold mt-6 mb-3">Prohibited Behavior & Items</h2>
                        <ul class="list-disc list-inside space-y-2">
                            <li>Bullying, harassment, or disruptive behavior is unacceptable.</li>
                            <li>Students must not bring mobile phones, pen drives, or similar gadgets without written
                                permission.</li>
                            <li>Carrying dangerous items (knives, blades, scissors, etc.) will invite strict
                                disciplinary action.</li>
                        </ul>

                        
                        <h2 class="font-bold mt-6 mb-3">Parent Responsibilities</h2>
                        <ul class="list-disc list-inside space-y-2">
                            <li>Lunch boxes must be sent with the child; late deliveries will not be accepted.</li>
                            <li>Parents must check school bags daily to ensure no prohibited items are carried.</li>
                            <li>Parents/guardians must attend meetings in proper attire and only if registered with the
                                school office.</li>
                            <li>Mobile phones must be switched off inside the campus.</li>
                        </ul>

                       
                        <h2 class="font-bold mt-6 mb-3">Property & Belongings</h2>
                        <ul class="list-disc list-inside space-y-2">
                            <li>Any damage to school property must be compensated with a fine.</li>
                            <li>Students are discouraged from bringing valuables or more than ₹100.</li>
                            <li>The school is not responsible for the loss or theft of belongings.</li>
                        </ul>

                       
                        <h2 class="font-bold mt-6 mb-3">Private Tuition</h2>
                        <p>Private tuition is strongly discouraged and strictly not allowed with school teachers.</p>

                       
                        <h2 class="font-bold mt-6 mb-3">Celebrations</h2>
                        <ul class="list-disc list-inside space-y-2">
                            <li>Birthday celebrations are limited to distributing chocolates/toffees (no gifts, hampers,
                                or cakes).</li>
                            <li>Students up to Grade V may wear decent casuals on birthdays.</li>
                        </ul>

                        
                        <h2 class="text-[20px] font-bold mt-8 mb-4">Disciplinary Measures</h2>

                        <h3 class=" font-semibold mt-4 mb-2">Blue Card</h3>
                        <p>Issued for:</p>
                        <ul class="list-disc list-inside space-y-1">
                            <li>Three consecutive late arrivals in a month.</li>
                            <li>Not wearing proper uniform.</li>
                            <li>Careless/untidy academic work.</li>
                        </ul>
                        <p class="mt-2 text-gray-700"><strong>Note:</strong> Deprives privileges for 15 days. Three blue
                            cards = 1 yellow card.</p>

                        <h3 class=" font-semibold mt-4 mb-2">Yellow Card</h3>
                        <p>Issued for:</p>
                        <ul class="list-disc list-inside space-y-1">
                            <li>Absconding from class.</li>
                            <li>Possession of costly or banned items.</li>
                            <li>Cheating in examinations.</li>
                            <li>Violation of school, transport, or library rules.</li>
                        </ul>
                        <p class="mt-2 text-gray-700"><strong>Note:</strong> Three yellow cards = 1 red card.</p>

                        <h3 class=" font-semibold mt-4 mb-2">Red Card</h3>
                        <p>Given after three yellow cards or for serious indiscipline. Results in suspension for one
                            week or more (no retest for missed exams).</p>

                        <h3 class=" font-semibold mt-4 mb-2">White Card</h3>
                        <p>Issued for unsatisfactory academic progress or grave misconduct. Two white cards in an
                            academic year = expulsion.</p>

                       
                        <h2 class="font-bold mt-6 mb-3">Grounds for Suspension / Rustication</h2>
                        <ul class="list-disc list-inside space-y-2">
                            <li>Use of foul language, abusive behavior, or bullying.</li>
                            <li>Possession of mobile phones or banned gadgets (7-day suspension).</li>
                            <li>Misbehavior with peers, staff, or teachers.</li>
                            <li>Violence, damage to property, bursting crackers, or undesirable activities.</li>
                            <li>Severe misconduct harming school reputation.</li>
                        </ul>

                       
                        <h2 class="font-bold mt-6 mb-3">Withdrawals / Fee Default</h2>
                        <ul class="list-disc list-inside space-y-2">
                            <li>Admission fee is non-refundable.</li>
                            <li>Fees must be paid regularly; arrears for 3 months may lead to removal from rolls.</li>
                            <li>One month’s written notice required for withdrawal; otherwise, TC will not be issued.
                            </li>
                        </ul>

                        
                        <h2 class="font-bold mt-6 mb-3">Transport Rules</h2>
                        <ul class="list-disc list-inside space-y-2">
                            <li>Transport is optional; routes/timings decided by school.</li>
                            <li>Parents must notify the admin office for schedule changes.</li>
                            <li>Parents must ensure punctuality at pick-up/drop points.</li>
                            <li>Private vehicle students must arrive 10 minutes before school and leave within 15
                                minutes after.</li>
                            <li>Only bicycles (with helmets) are allowed for student self-commute.</li>
                        </ul>

                        
                        <h2 class="font-bold mt-6 mb-3">Important Points for Parents</h2>
                        <ul class="list-disc list-inside space-y-2">
                            <li>Parents’ attitude directly impacts their child’s development.</li>
                            <li>Misconduct or threatening behavior by parents may result in action against the ward.
                            </li>
                            <li>Management reserves the right to admit, retain, or cancel admission.</li>
                            <li>School rules and regulations are binding on all parents and students.</li>
                        </ul>

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