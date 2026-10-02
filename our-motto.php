<?php
include "includes/apis.php";
 
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $ourmotto_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $ourmotto_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $ourmotto_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                   <?= strip_tags($ourmotto_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                   <?= strip_tags($ourmotto_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <a href="our-motto" class="ms-1 text-sm font-medium text-blue-main"> <?= strip_tags($ourmotto_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        
         <div class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
             <?= $ourmotto_data['data']['sections'][1]['content'] ?? "" ?>
          <!--  <div class="mt-4">
               
                <p class="text-[15px] text-gray-500 mt-2">
                    The school’s motto, “Service before Self,” reflects its commitment to prioritizing the well-being
                    and safety of others over personal comfort and security.
                    This philosophy has helped transform the school into an educational powerhouse, fostering an
                    environment that induces strength within each student to stand on their own.
                </p>
            </div>

            <div class="mt-4">
                <h2 class="text-[20px] font-[700] text-gray-600 hr-line uppercase">JOURNEY OF SELF-IMPROVEMENT</h2>
                <p class="text-[15px] text-gray-500 mt-2">
                    The institution cultivates an atmosphere where students are encouraged to challenge their own
                    abilities, becoming their own competitors in the pursuit of intellectual and personal growth.
                    Learning here is not about ranking oneself against others but striving to be better than yesterday,
                    pushing boundaries, and embracing the unknown with courage.
                </p>
            </div>

            <div class="mt-4">
                <h2 class="text-[20px] font-[700] text-gray-600 hr-line uppercase">STEAM EDUCATION</h2>
                <p class="text-[15px] text-gray-500 mt-2">
                    It reflects an evolving philosophy—one that recognizes the interconnectedness of disciplines and the
                    necessity of adaptability in a rapidly changing world.
                    By integrating science, technology, engineering, the arts, and mathematics into experiential
                    learning, DPS, Indira Nagar, equips students with 21st-century skills that empower them to innovate,
                    create, and lead with confidence.
                </p>
            </div>

            <div class="mt-4">
                <h2 class="text-[20px] font-[700] text-gray-600 hr-line uppercase">EDUCATION AS A SOURCE OF ILLUMINATION
                </h2>
                <p class="text-[15px] text-gray-500 mt-2">
                    More than just an institution of academic excellence, DPS, Indira Nagar sees education as a source
                    of illumination—one that sparks inquiry and experience, awakens compassion, and spreads the warmth
                    of wisdom beyond the confines of textbooks.
                    The school’s philosophy acknowledges the dual responsibility of education: to build strong,
                    independent thinkers and to nurture empathetic individuals who recognize their power to uplift
                    others.
                    They are sensitized towards environmental concerns, feelings of nationalism, communal harmony, and
                    society at large.
                </p>
            </div>

            <div class="mt-4">
                <h2 class="text-[20px] font-[700] text-gray-600 hr-line uppercase">THE ETERNAL QUEST FOR EXCELLENCE</h2>
                <p class="text-[15px] text-gray-500 mt-2">
                    At DPS, Indira Nagar, excellence is not a destination but a continuous journey—a pursuit that
                    stretches the mind, awakens curiosity, and transforms limitations into opportunities.
                    The school stands firm in its vision of shaping individuals who are not just intellectually strong
                    but ethically and emotionally wise.
                    Education here is not confined to the classroom—it transcends walls to become a transformation that
                    enables students to attain their cherished dreams.
                </p>
            </div>
        </div> -->


    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
    <!-- <script>
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
    </script> -->
</body>

</html>