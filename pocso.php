<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title>DPS Indira Nagar | POCSO</title>
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    POCSO
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    POCSO
                </h1>
            </div>
        </div>

        <div class="flex m-5 overflow-x-auto" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="index.php" class="inline-flex items-center text-[10px] sm:text-[16px] font-medium text-blue-main">
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <p class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">Mandatory Public Disclosure
                        </p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <p class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">Committees
                        </p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="pocso.php" class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">POCSO</a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <table style="width: 100%;text-align: center; border-radius: 8px; font-family: Arial, sans-serif;" class="rounded-md border border-gray-300">
                <thead>
                    <tr class="bg-blue-main text-white">
                        <th style="border: 1px solid gray; padding: 8px;">S.NO.</th>
                        <th style="border: 1px solid gray; padding: 8px;">NAME</th>
                        <th style="border: 1px solid gray; padding: 8px;">DESIGNATION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="border: 1px solid gray; padding: 8px;">1</td>
                        <td style="border: 1px solid gray; padding: 8px;">MR. DHIRENDRA PANT</td>
                        <td style="border: 1px solid gray; padding: 8px;">PGT</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid gray; padding: 8px;">2</td>
                        <td style="border: 1px solid gray; padding: 8px;">DR. ABHAY SINGH</td>
                        <td style="border: 1px solid gray; padding: 8px;">PGT</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid gray; padding: 8px;">3</td>
                        <td style="border: 1px solid gray; padding: 8px;">MS. LIPI BANERJEE</td>
                        <td style="border: 1px solid gray; padding: 8px;">TGT</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid gray; padding: 8px;">4</td>
                        <td style="border: 1px solid gray; padding: 8px;">MS. SUCHITA SAH MATHUR</td>
                        <td style="border: 1px solid gray; padding: 8px;">TGT</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid gray; padding: 8px;">5</td>
                        <td style="border: 1px solid gray; padding: 8px;">MS. DEEPALI SOOD</td>
                        <td style="border: 1px solid gray; padding: 8px;">PRT</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid gray; padding: 8px;">6</td>
                        <td style="border: 1px solid gray; padding: 8px;">MS. SHWETA SINGH</td>
                        <td style="border: 1px solid gray; padding: 8px;">PTI</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid gray; padding: 8px;">7</td>
                        <td style="border: 1px solid gray; padding: 8px;">MS. TARBIA ZEHRA</td>
                        <td style="border: 1px solid gray; padding: 8px;">STUDENT COUNSELLOR</td>
                    </tr>
                </tbody>
            </table>

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