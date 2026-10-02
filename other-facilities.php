<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title>DPS Indira Nagar | Laboratories </title>
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    Other Facilities
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    Other Facilities
                </h2>
            </div>
        </div>

        <div class="flex m-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="index.php" class="inline-flex items-center text-sm font-medium text-blue-main">
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
                        <a href="other-facilities.php" class="ms-1 text-sm font-medium text-blue-main">Other
                            Facilities</a>
                    </div>
                </li>
            </ol>
        </div>


        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div>
                <h3 class="font-[700] text-[20px] text-gray-600 mt-3">● Infirmary</h3>

                <p class="mt-2 text-gray-600 text-[16px]">Our school features a well-equipped infirmary, expertly managed by a dedicated medical expert ensuring
                the health and well-being of our students</p>

                <h3 class="font-[700] text-[20px] text-gray-600 mt-3">● Cafeteria</h3>
                <p class="mt-2 text-gray-600 text-[16px]">“Savor the taste of excellence!” Our school serves healthy, tasty food and variety of wholesome meals to
                support students’ growth and well-being.</p>

                <h3 class="font-[700] text-[20px] text-gray-600 mt-3">● Dance Room</h3>
                <p class="mt-2 text-gray-600 text-[16px]">A state-of-the-art and thoughtfully designed dance room is a powerful tool for learning about different
                cultures and traditions through emotions, expression and movement.</p>

                <h3 class="font-[700] text-[20px] text-gray-600 mt-3">● Music Room</h3>
                <p class="mt-2 text-gray-600 text-[16px]">Music knows no boundaries. Universal language of music from Indian Vocal transcends cultures and
                generations, bringing together in moments of shared joy and unending connections. The school has three
                music rooms dedicated to Indian vocal, western and instrumental music room</p>

                <h3 class="font-[700] text-[20px] text-gray-600 mt-3">● Library </h3>
                <p class="mt-2 text-gray-600 text-[16px]">Treasure trove of knowledge- junior and senior library stores the energy that fuels the imagination. It
                opens up the window to the world and inspires us to explore and achieve, and contribute to improving our
                quality of life.</p>
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