<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title>DPS Indira Nagar | Currciulum and Assessment</title>
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    Currciulum and Assessment
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    Currciulum and Assessment
                </h1>
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
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <p class="ms-1 text-sm font-medium text-blue-main">Academics
                        </p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="curriculum-and-assessment.php" class="ms-1 text-sm font-medium text-blue-main">Curriculum and Assessment</a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div class="overflow-x-auto my-10 rounded-md">
                <table class="min-w-full rounded-md table-auto border border-gray-300 text-sm text-left text-gray-700">
                    <thead class="bg-green-800 text-white">
                        <tr>
                            <th class="border px-4 py-2">Class</th>
                            <th class="border px-4 py-2">Subjects Offered</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr>
                            <td class="border px-4 py-2">Pre-Nursery</td>
                            <td class="border px-4 py-2">English, Numeracy, Future Readiness, Hindi, EVS, ICT and Coding</td>
                        </tr>
                        <tr class="bg-gray-100">
                            <td class="border px-4 py-2">Nursery</td>
                            <td class="border px-4 py-2">English, Numeracy, Future Readiness, Hindi, EVS, ICT & Coding</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Prep</td>
                            <td class="border px-4 py-2">English, Numeracy, Hindi, Future Readiness, EVS, ICT, Coding</td>
                        </tr>
                        <tr class="bg-gray-100">
                            <td class="border px-4 py-2">I & II</td>
                            <td class="border px-4 py-2">English, Hindi, Mathematics, EVS, Computers, General Knowledge</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">III & IV</td>
                            <td class="border px-4 py-2">
                                English, Hindi, Mathematics, Science, Social Science, Computers, General Knowledge<br>
                                <strong>Skill Subject:</strong> Animation / Coding, Financial Literacy
                            </td>
                        </tr>
                        <tr class="bg-gray-100">
                            <td class="border px-4 py-2">V</td>
                            <td class="border px-4 py-2">
                                English, Hindi, Mathematics, Science, Social Science, Computers, General Knowledge<br>
                                <strong>3rd Language:</strong> French / German / Sanskrit / Urdu<br>
                                <strong>Skill Subject:</strong> Animation / Coding, Financial Literacy
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">VI–VIII</td>
                            <td class="border px-4 py-2">
                                English, Hindi, Mathematics, Science, Social Science, Computers, General Knowledge<br>
                                <strong>3rd Language:</strong> French / German / Sanskrit / Urdu<br>
                                <strong>Skill Subject:</strong> Animation / Coding, Financial Literacy
                            </td>
                        </tr>
                        <tr class="bg-gray-100">
                            <td class="border px-4 py-2">IX–X</td>
                            <td class="border px-4 py-2">
                                English Language & Literature, Hindi Course A, Mathematics Standard, Mathematics Basic, Science, Social Science<br>
                                <strong>Skill Subject:</strong> Artificial Intelligence / Information Technology
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">XI–XII</td>
                            <td class="border px-4 py-2">
                                English, Mathematics, Physics, Chemistry, Biology, Business Studies, Accountancy, Economics, Psychology, History, Political Science<br>
                                <strong>Optional Subjects:</strong> Physical Education, Informatics Practices, Computer Science, Legal Studies, Entrepreneurship, Applied Maths<br>
                                <strong>Skill Subjects:</strong> Artificial Intelligence, Library & Information Science, Financial Markets Management, Banking, Physical Activity Trainer
                            </td>
                        </tr>
                    </tbody>
                </table>
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