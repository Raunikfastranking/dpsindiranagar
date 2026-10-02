<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $assessmentsystem_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $assessmentsystem_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $assessmentsystem_data['data']['meta_keywords'] ?? "" ?>">
</head>


<body>

  <?php include "includes/header.php" ?>

  <div class="main relative">
    <div class="bg-center flex items-center text-center h-[300px] brud-image">
      <div>
        <h1
          class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
           <?= strip_tags($assessmentsystem_data['data']['sections'][0]['content_heading']) ?? "" ?>
        </h1>
      </div>

      <div class="md:w-[100%]">
        <h2
          class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
           <?= strip_tags($assessmentsystem_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
            <a href="assessment-system-and-schedule" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($assessmentsystem_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
          </div>
        </li>
      </ol>
    </div>

    <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
      <div class="sm:mt-10 relative">
        <div class="md:w-[100%]">

          <div class="relative overflow-x-auto sm:rounded-lg my-5">
            <div class="overflow-x-auto">
               <?= $assessmentsystem_data['data']['sections'][1]['content'] ?? "" ?>
              <!-- <table class="w-full table-auto border-collapse border border-gray-200 mb-6 text-sm">
                <thead>
                  <tr class="bg-gray-200 text-left">
                    <th class="border border-gray-300 px-4 py-2 uppercase">Class</th>
                    <th class="border border-gray-300 px-4 py-2 uppercase">Name of Assessments / Weightage</th>
                    <th class="border border-gray-300 px-4 py-2 uppercase">Duration of Test / Exam</th>
                    <th class="border border-gray-300 px-4 py-2 uppercase">Remarks</th>
                  </tr>
                </thead>
                <tbody>
                 
                  <tr>
                    <td class="border border-gray-300 px-4 py-2 align-top">Pre-Primary</td>
                    <td class="border border-gray-300 px-4 py-2">
                      <span class="font-semibold">Formative Assessment:</span><br>
                      i. Hands-on Learning – 10 marks<br>
                      ii. Book Upkeep – 5 marks<br>
                      iii. Attendance & Participation – 5 marks<br>
                      <span class="font-semibold">Summative Assessment:</span><br>
                      i. Pencil-paper Test – 20 marks<br>
                      <span class="italic">Total – 40 marks</span><br><br>
                      <span class="font-semibold">ICT & Future Readiness:</span><br>
                      Formative (Hands-on: 10, Participation: 10)<br>
                      Summative (Online Test: 20)<br>
                      <span class="italic">Total – 40 marks</span>
                    </td>
                    <td class="border border-gray-300 px-4 py-2 align-top">
                      Each semester has 2 units.<br>
                      Continuous and ongoing assessment.
                    </td>
                    <td class="border border-gray-300 px-4 py-2 align-top">
                      Portfolio-based evaluation.<br>
                      Progress report after each assessment.
                    </td>
                  </tr>

                
                  <tr>
                    <td class="border border-gray-300 px-4 py-2 align-top">I & II</td>
                    <td class="border border-gray-300 px-4 py-2">
                      <span class="font-semibold">Formative Assessment:</span><br>
                      i. Subject Skill I – 5<br>
                      ii. Subject Skill II – 5<br>
                      iii. Subject Skill III – 5<br>
                      iv. Critical Thinking – 5<br>
                      v. Coursebook Upkeep – 5<br>
                      <span class="font-semibold">Summative Assessment:</span><br>
                      Pen-paper Test – 25 marks<br>
                      <span class="italic">Total – 50 marks</span><br><br>
                      <span class="font-semibold">ICT:</span><br>
                      Formative (5+5+5+5+5 = 25)<br>
                      Summative (Pen-paper: 15, Quiz: 10)<br>
                      <span class="italic">Total – 50 marks</span><br>
                      Annual Aggregate – 100 marks (25% PA)
                    </td>
                    <td class="border border-gray-300 px-4 py-2 align-top">
                      Each semester has 2 units.<br>
                      Continuous & ongoing.
                    </td>
                    <td class="border border-gray-300 px-4 py-2 align-top">
                      Learner-centric approach.<br>
                      Report card after each assessment.
                    </td>
                  </tr>

                  
                  <tr>
                    <td class="border border-gray-300 px-4 py-2 align-top">III & IV</td>
                    <td class="border border-gray-300 px-4 py-2">
                      <span class="font-semibold">Formative Assessment:</span><br>
                      i. Subject Skill I – 5<br>
                      ii. Subject Skill II – 5<br>
                      iii. Subject Skill III – 5<br>
                      iv. Coursebook Upkeep – 5<br>
                      <span class="font-semibold">Summative Assessment:</span><br>
                      Pen-paper Test – 30 marks<br>
                      <span class="italic">Total – 50 marks</span><br>
                      Annual Aggregate – 100 marks (25% PA)
                    </td>
                    <td class="border border-gray-300 px-4 py-2 align-top">
                      Four periodic assessments.<br>
                      Pen-paper test duration – 50 mins.
                    </td>
                    <td class="border border-gray-300 px-4 py-2 align-top">
                      MCQs, oral tests, constructed responses.<br>
                      Report card after each assessment.
                    </td>
                  </tr>

                 
                  <tr>
                    <td class="border border-gray-300 px-4 py-2 align-top">V</td>
                    <td class="border border-gray-300 px-4 py-2">
                      PA: Pen-paper Test – 30 marks<br>
                      <span class="font-semibold">Formative Assessment:</span> (25 marks)<br>
                      i. Subject Skills I–III: 15<br>
                      ii. Notebook Upkeep – 5<br>
                      iii. Others – 5<br>
                      <span class="font-semibold">Summative Assessment:</span><br>
                      Half-Yearly/Final Exam – 50 marks<br>
                      <span class="italic">Total – 100 marks</span><br>
                      Aggregate: Term I (50) + Term II (50)
                    </td>
                    <td class="border border-gray-300 px-4 py-2 align-top">
                      Two terms.<br>
                      Periodic test per term.<br>
                      Summative exam – 50 mins (25 marks).
                    </td>
                    <td class="border border-gray-300 px-4 py-2 align-top">
                      MCQs, oral tests, projects.<br>
                      Report card after each assessment.
                    </td>
                  </tr>

                  
                  <tr>
                    <td class="border border-gray-300 px-4 py-2 align-top">VI – VIII</td>
                    <td class="border border-gray-300 px-4 py-2">
                      <span class="font-semibold">Periodic Assessment:</span> 30 marks<br>
                      PA = 10, SE = 5, Notebook = 5<br>
                      <span class="font-semibold">Summative Assessment:</span><br>
                      Term-end Exam – 80 marks (3 hrs)<br>
                      <span class="italic">Total – 100 marks</span><br>
                      Aggregate: Term I (50) + Term II (50)
                    </td>
                    <td class="border border-gray-300 px-4 py-2 align-top">
                      Two terms.<br>
                      Periodic test each term.<br>
                      Pen-paper: 1 hr (30 marks).
                    </td>
                    <td class="border border-gray-300 px-4 py-2 align-top">
                      Competency-based Qs ≥ 50%.<br>
                      Report card each term.
                    </td>
                  </tr>

                  ]
                  <tr>
                    <td class="border border-gray-300 px-4 py-2 align-top">IX</td>
                    <td class="border border-gray-300 px-4 py-2">
                      <span class="font-semibold">Internal Assessment:</span> 20 marks<br>
                      i. Periodic Test – 5<br>
                      ii. Multiple Assessment – 5<br>
                      iii. Portfolio – 5<br>
                      iv. Subject Enrichment – 5<br>
                      <span class="font-semibold">Summative Assessment:</span><br>
                      Annual Exam – 50/80 marks<br>
                      <span class="italic">Grand Total = 100 marks</span>
                    </td>
                    <td class="border border-gray-300 px-4 py-2 align-top">
                      PA I & III – 40 marks, 1.5 hrs<br>
                      PA II & Annual – 80 marks, 3 hrs
                    </td>
                    <td class="border border-gray-300 px-4 py-2 align-top">
                      Best 2 PAs counted.<br>
                      Pre-Board before X Board exam.
                    </td>
                  </tr>

                  
                  <tr>
                    <td class="border border-gray-300 px-4 py-2 align-top">X</td>
                    <td class="border border-gray-300 px-4 py-2">
                      <span class="font-semibold">Internal Assessment:</span> 20 marks<br>
                      i. Periodic Test – 5<br>
                      ii. Multiple Assessment – 5<br>
                      iii. Portfolio – 5<br>
                      iv. Subject Enrichment – 5<br>
                      <span class="font-semibold">Summative Assessment:</span><br>
                      Pre-Board Exam – 50/80 marks
                    </td>
                    <td class="border border-gray-300 px-4 py-2 align-top">
                      PA I & III – 25/40 marks, 1.5 hrs<br>
                      PA II & Pre-Board – 80 marks, 3 hrs
                    </td>
                    <td class="border border-gray-300 px-4 py-2 align-top">
                      Best 2 PAs counted.<br>
                      Pre-Board compulsory before CBSE exam.
                    </td>
                  </tr>

                  
                  <tr>
                    <td class="border border-gray-300 px-4 py-2 align-top">XI</td>
                    <td class="border border-gray-300 px-4 py-2">
                      Periodic Assessments – 25/30/35/40 marks<br>
                      Half-Yearly Theory – 50/60/70/80 marks<br>
                      Practical – 20/30/40/50 marks<br>
                      Annual Exam (Theory + Practical)<br>
                      <span class="italic">Annual Aggregate: 100 marks</span>
                    </td>
                    <td class="border border-gray-300 px-4 py-2 align-top">
                      2 Periodic Tests.<br>
                      Half-Yearly + Annual Exams.<br>
                      Duration: 1.5 hrs – 3 hrs.
                    </td>
                    <td class="border border-gray-300 px-4 py-2 align-top">
                      2 Pre-Boards for Class XII.<br>
                      CBSE guidelines followed.
                    </td>
                  </tr>

                  
                  <tr>
                    <td class="border border-gray-300 px-4 py-2 align-top">XII</td>
                    <td class="border border-gray-300 px-4 py-2">
                      Periodic Test – 25/30/35/40 marks<br>
                      Half-Yearly Exam (Theory – 50/60/70/80)<br>
                      Practical – 20/30/40/50 marks<br>
                      Pre-Board Exam (Theory – 50/60/70/80)<br>
                      <span class="italic">Annual Exam as per CBSE</span>
                    </td>
                    <td class="border border-gray-300 px-4 py-2 align-top">
                      Periodic Test before Half-Yearly.<br>
                      Pre-Boards: 3 hrs duration.
                    </td>
                    <td class="border border-gray-300 px-4 py-2 align-top">
                      2 Pre-Boards before CBSE exam.<br>
                      CBSE guidelines followed.
                    </td>
                  </tr>
                </tbody>
              </table> -->
            </div>
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