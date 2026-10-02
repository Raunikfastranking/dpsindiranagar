<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $coding_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $coding_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $coding_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($coding_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($coding_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <a href="coding" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($coding_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div class="md:flex gap-9 mt-6 mb-10">
                <div class="md:w-[40%]">
                    <img src="<?= $coding_data['data']['sections'][1]['columns'][0]['image_url'] ?? "" ?>"
                        alt="<?= cms_image_alt($coding_data['data']['sections'][1]['columns'][0] ?? [], 'Coding Lab'); ?>" class="w-full rounded-md shadow">
                </div>
                <div class="md:w-[60%]">
                     <?= $coding_data['data']['sections'][1]['columns'][1]['content'] ?? "" ?>

                    <!-- <p class="text-gray-600 mt-2 text-[16px] ">Coding, also known as computer programming, is the
                        process of designing, writing, testing, and maintaining the instructions that a computer follows
                        to perform a specific task or solve a problem. These instructions, written in a programming
                        language, are used to create software, apps, websites, and other digital products.
                    </p>
                    <p class="text-gray-600 mt-2 text-[16px] ">Coding provides hands-on experience on:</p>
                    <ul class="text-gray-600 mt-2 text-[16px] ">
                        <li>1. Web development: Building websites, web applications, and mobile applications.</li>
                        <li>2. Mobile app development: Creating apps for Android and iOS devices.</li>
                        <li>3. Game development: Designing and building video games.</li>
                        <li>4. Artificial intelligence and machine learning: Developing intelligent systems that can
                            learn
                            and
                            adapt.</li>
                    </ul>
                    <h3 class="text-gray-600 mt-2 text-[20px] font-[700]">BENEFITS OF CODING</h3>
                    <ul class="text-gray-600 mt-2 text-[16px] ">
                        <li>1. Improved problem-solving skills and critical thinking.</li>
                        <li>2. Logical thinking: Coders use logical reasoning and algorithms to write efficient code.
                        </li>
                        <li>3. Creativity and innovation: Coding enables developers to express their creativity and
                            bring new ideas to life.</li>
                        <li>4. Career opportunities: Knowing how to code can lead to exciting career opportunities in
                            tech.</li>
                        <li>5. Personal growth: Learning to code can be a rewarding and challenging experience.</li>
                    </ul> -->


                </div>
            </div>
                    <?= $coding_data['data']['sections'][2]['content'] ?? "" ?>
            <!-- <div>
                <h3 class="text-gray-600 mt-2 text-[20px] font-[700]">SKILLS DEVELOPED BY CODING</h3>

             
                <div class="mt-4">
                    <h4 class="text-gray-800 text-[18px] font-semibold">Technical Skills</h4>
                    <ul class="list-disc pl-6 text-gray-600 text-[16px] space-y-1 mt-2">
                        <li><strong>Programming languages:</strong> Proficiency in languages like Python, Java,
                            JavaScript, etc.</li>
                        <li><strong>Data structures and algorithms:</strong> Understanding of data structures like
                            arrays, linked lists, and algorithms like sorting, searching, etc.</li>
                        <li><strong>Software development:</strong> Knowledge of software development principles,
                            methodologies, and tools.</li>
                    </ul>
                </div>

                
                <div class="mt-4">
                    <h4 class="text-gray-800 text-[18px] font-semibold">Problem-Solving Skills</h4>
                    <ul class="list-disc pl-6 text-gray-600 text-[16px] space-y-1 mt-2">
                        <li><strong>Critical thinking:</strong> Ability to analyze problems, identify patterns, and
                            develop solutions.</li>
                        <li><strong>Logical reasoning:</strong> Understanding of logical concepts like conditional
                            statements, loops, and functions.</li>
                        <li><strong>Debugging:</strong> Ability to identify and fix errors in code.</li>
                    </ul>
                </div>

               
                <div class="mt-4">
                    <h4 class="text-gray-800 text-[18px] font-semibold">Soft Skills</h4>
                    <ul class="list-disc pl-6 text-gray-600 text-[16px] space-y-1 mt-2">
                        <li><strong>Communication:</strong> Ability to explain complex technical concepts to
                            non-technical stakeholders.</li>
                        <li><strong>Collaboration:</strong> Experience working with others on coding projects, including
                            version control and code reviews.</li>
                        <li><strong>Time management:</strong> Ability to prioritize tasks, manage time, and meet
                            deadlines.</li>
                    </ul>
                </div>
 
               
                <div class="mt-4">
                    <h4 class="text-gray-800 text-[18px] font-semibold">Cognitive Skills</h4>
                    <ul class="list-disc pl-6 text-gray-600 text-[16px] space-y-1 mt-2">
                        <li><strong>Analytical thinking:</strong> Ability to break down complex problems into manageable
                            parts.</li>
                        <li><strong>Creativity & innovation:</strong> Ability to think creatively and develop innovative
                            solutions.</li>
                        <li><strong>Attention to detail:</strong> Ability to focus on details and ensure accuracy in
                            code.</li>
                    </ul>
                </div>

               
                <div class="mt-4">
                    <h4 class="text-gray-800 text-[18px] font-semibold">Career Skills</h4>
                    <ul class="list-disc pl-6 text-gray-600 text-[16px] space-y-1 mt-2">
                        <li><strong>Adaptability:</strong> Ability to learn new technologies, frameworks, and tools.
                        </li>
                        <li><strong>Continuous learning:</strong> Commitment to ongoing learning and professional
                            development.</li>
                        <li><strong>Problem-solving:</strong> Ability to apply coding skills to real-world problems and
                            challenges.</li>
                    </ul>
                    <p class="text-gray-600 text-[16px] mt-2">
                        By developing these skills, coders can become proficient in solving complex problems, creating
                        innovative solutions, and advancing their careers in the tech industry.
                    </p>
                </div>

               
                <div class="mt-6">
                    <p class="text-gray-600 text-[16px]">
                        Delhi Public School, Indira Nagar has introduced code learning through
                        <strong>STEMROBO</strong>, a one-step solution that provides innovative approaches to focus on
                        STEM (Science, Technology, Engineering, and Mathematics) education. It offers a range of
                        programs and services, including:
                    </p>
                    <ul class="list-disc pl-6 text-gray-600 text-[16px] space-y-1 mt-2">
                        <li>Enhancing hands-on learning experiences</li>
                        <li>Exploring artificial intelligence and Internet of Things concepts</li>
                        <li>Creating immersive learning environments for students</li>
                        <li>Offering courses for students to learn programming languages like Python, Scratch, and more
                        </li>
                    </ul>
                    <p class="text-gray-600 text-[16px] mt-2">
                        Stemrobo's mission is to equip students with 21st-century skills, fostering creativity, critical
                        thinking, and problem-solving abilities. Their solutions are designed to align with the
                        <strong>National Education Policy (NEP) 2020</strong>.
                    </p>
                </div>

                
                <div class="mt-4">
                    <h4 class="text-gray-800 text-[18px] font-semibold">Some notable features of STEMROBO include:</h4>
                    <ul class="list-disc pl-6 text-gray-600 text-[16px] space-y-1 mt-2">
                        <li><strong>Project-based learning:</strong> Encouraging students to work on real-world projects
                            to develop practical skills.</li>
                        <li><strong>Hands-on activities:</strong> Focusing on experiential learning to make complex
                            concepts more engaging and accessible.</li>
                        <li><strong>Analytics-driven approach:</strong> Helping parents and educators track student
                            progress and make informed decisions.</li>
                    </ul>
                </div> 
            </div> -->



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