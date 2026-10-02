<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include "includes/head.php" ?>
  <title><?= $cbseinformation_data['data']['title'] ?? "" ?></title>
  <meta name="description" content="<?= $cbseinformation_data['data']['meta_description'] ?? "" ?>">
  <meta name="keywords" content="<?= $cbseinformation_data['data']['meta_keywords'] ?? "" ?>">
</head>


<body>

  <?php include "includes/header.php" ?>

  <div class="main relative">
    <div class="bg-center flex items-center text-center h-[300px] brud-image">
      <div>
        <h1
          class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
           <?= strip_tags($cbseinformation_data['data']['sections'][0]['content_heading']) ?? "" ?>
        </h1>
      </div>

      <div class="md:w-[100%]">
        <h1
          class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
           <?= strip_tags($cbseinformation_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
            <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 9 4-4-4-4"></path>
            </svg>
            <p class="ms-1 text-sm font-medium text-blue-main">Mandatory Public Disclosure
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
            <a href="cbse-mpd.php" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($cbseinformation_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
          </div>
        </li>
      </ol>
    </div>

    <div
      class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">

      <div class="overflow-x-auto">
         <?= $cbseinformation_data['data']['sections'][1]['content'] ?? "" ?>
        <!-- <table class="min-w-full border border-gray-300 text-sm">
          <thead class="bg-gray-100">
            <tr>
              <th class="border border-gray-300 px-3 py-2 text-left">Month</th>
              <th class="border border-gray-300 px-3 py-2 text-left">Participant's Name</th>
              <th class="border border-gray-300 px-3 py-2 text-left">Designation / Subject</th>
              <th class="border border-gray-300 px-3 py-2 text-left">Theme of Trg / Workshop</th>
              <th class="border border-gray-300 px-3 py-2 text-left">Resource Person</th>
              <th class="border border-gray-300 px-3 py-2 text-left">Organizer</th>
              <th class="border border-gray-300 px-3 py-2 text-left">Date</th>
              <th class="border border-gray-300 px-3 py-2 text-left">Learning Outcomes</th>
            </tr>
          </thead>
          <tbody>
            
            <tr>
              <td class="border px-3 py-2">April</td>
              <td class="border px-3 py-2">Ghazala Afsar</td>
              <td class="border px-3 py-2">Principal</td>
              <td class="border px-3 py-2">Sahodaya Annual General Meeting</td>
              <td class="border px-3 py-2">Mr. Jawed Alam (City coordinator CBSE)</td>
              <td class="border px-3 py-2">CBSE Sahodaya Schools' Complex Lucknow</td>
              <td class="border px-3 py-2">23.4.24</td>
              <td class="border px-3 py-2">
                1. Sahodaya Annual Report was discussed.<br>
                2. Discussion on latest CBSE Circulars.<br>
                3. Issues regarding OASIS & UDISE were discussed.<br>
                4. Activities for students, teachers and stakeholders.
              </td>
            </tr>

            
            <tr>
              <td class="border px-3 py-2">May</td>
              <td class="border px-3 py-2">Sweta Kapoor</td>
              <td class="border px-3 py-2">TGT Sports</td>
              <td class="border px-3 py-2">Impact of Sleep on Athlete's Performance and Fitness</td>
              <td class="border px-3 py-2">Dr. Manvir Bhatia, Prof. Rajendra Arya</td>
              <td class="border px-3 py-2">NADA & NCERT</td>
              <td class="border px-3 py-2">28.5.24</td>
              <td class="border px-3 py-2">
                1. Learned about the importance of sleep over the performance and fitness of an athlete.<br>
                2. Good sleep regulates mood and reduces stress.<br>
                3. Stimulants improve performance but give various side effects.
              </td>
            </tr>
            <tr>
              <td class="border px-3 py-2">May</td>
              <td class="border px-3 py-2">Eram Abrar</td>
              <td class="border px-3 py-2">PRT</td>
              <td class="border px-3 py-2">Consultative meeting and capacity building program on Bal Vatika and Jaadui
                Pitaara</td>
              <td class="border px-3 py-2">Ms. Manisha Kochan, Ms. Shama Chaurasia, Mr. Akhilesh</td>
              <td class="border px-3 py-2">CBSE CoE-Prayagraj</td>
              <td class="border px-3 py-2">17.5.24</td>
              <td class="border px-3 py-2">
                1. Vision of NEP 2020.<br>
                2. Salient features of NCF-FS 2022.<br>
                3. Introduces the term Balvatika and its significance including Panchkos Vikas.<br>
                4. Curriculum to be followed under Balvatika.<br>
                5. Pedagogy to be used in Balvatika and its approaches.<br>
                6. Introduces Jaadui Pitaara containing 53 items and its classroom uses.
              </td>
            </tr>
            <tr>
              <td class="border px-3 py-2">May</td>
              <td class="border px-3 py-2">Rashmi Srivastava</td>
              <td class="border px-3 py-2">PRT</td>
              <td class="border px-3 py-2">Consultative meeting and capacity building program on Bal Vatika and Jaadui
                Pitaara</td>
              <td class="border px-3 py-2">Ms. Manisha Kochan, Ms. Shama Chaurasia, Mr. Akhilesh</td>
              <td class="border px-3 py-2">CBSE CoE-Prayagraj</td>
              <td class="border px-3 py-2">17.5.24</td>
              <td class="border px-3 py-2">Same as above.</td>
            </tr>

            
            <tr>
              <td class="border px-3 py-2">June</td>
              <td class="border px-3 py-2">Shirish Shukla</td>
              <td class="border px-3 py-2">PGT-Commerce</td>
              <td class="border px-3 py-2">FINANCIAL EDUCATION-21st Century Life Skill (Skill Subject 805, Class XII)
              </td>
              <td class="border px-3 py-2">Mr. Gokul Nath Raja (NSE Academy)</td>
              <td class="border px-3 py-2">CBSE</td>
              <td class="border px-3 py-2">27.6.24</td>
              <td class="border px-3 py-2">Learned about risk-return trade-off and its application in stocks, bonds,
                futures, options.</td>
            </tr>

           
            <tr>
              <td class="border px-3 py-2">July</td>
              <td class="border px-3 py-2">Lipi Banerjee</td>
              <td class="border px-3 py-2">TGT Science</td>
              <td class="border px-3 py-2">Design Thinking</td>
              <td class="border px-3 py-2">Ms. Pooja</td>
              <td class="border px-3 py-2">CBSE Sahodaya Lucknow School Complexes</td>
              <td class="border px-3 py-2">15.7.24</td>
              <td class="border px-3 py-2">
                1. To identify different types of thinking.<br>
                2. To identify stakeholders in the school.<br>
                3. To identify pain points and methods to remove them.
              </td>
            </tr>
            <tr>
              <td class="border px-3 py-2">July</td>
              <td class="border px-3 py-2">Tarbia Zehra</td>
              <td class="border px-3 py-2">School Counsellor</td>
              <td class="border px-3 py-2">Capacity building programme for school counsellors</td>
              <td class="border px-3 py-2">Mr. Jitendra Nagpal, Ms. Astha</td>
              <td class="border px-3 py-2">CBSE CoE-Prayagraj</td>
              <td class="border px-3 py-2">25.7.24</td>
              <td class="border px-3 py-2">Developing better school environment and enhancing counselling skills.</td>
            </tr>

           
            <tr>
              <td class="border px-3 py-2">August</td>
              <td class="border px-3 py-2">Shirish Shukla</td>
              <td class="border px-3 py-2">PGT Commerce</td>
              <td class="border px-3 py-2">Workshop in Accountancy (Senior Secondary)</td>
              <td class="border px-3 py-2">Mr. Tarun Rupani, Ms. Jyoti Bansal</td>
              <td class="border px-3 py-2">CBSE CoE-Prayagraj</td>
              <td class="border px-3 py-2">23.8.24-24.8.24</td>
              <td class="border px-3 py-2">How to make class interactive, playful, activity-based, and handle doubts
                effectively.</td>
            </tr>
            <tr>
              <td class="border px-3 py-2">August</td>
              <td class="border px-3 py-2">Deepali Sood</td>
              <td class="border px-3 py-2">PGT Commerce</td>
              <td class="border px-3 py-2">Workshop in Accountancy (Senior Secondary)</td>
              <td class="border px-3 py-2">Mr. Tarun Rupani, Ms. Jyoti Bansal</td>
              <td class="border px-3 py-2">CBSE CoE-Prayagraj</td>
              <td class="border px-3 py-2">23.8.24-24.8.24</td>
              <td class="border px-3 py-2">Same as above.</td>
            </tr>
            <tr>
              <td class="border px-3 py-2">August</td>
              <td class="border px-3 py-2">Babita Arora</td>
              <td class="border px-3 py-2">PRT Science</td>
              <td class="border px-3 py-2">Learning Through Art Integration Preparatory Stage</td>
              <td class="border px-3 py-2">Dr. Meenakshi Narula</td>
              <td class="border px-3 py-2">CBSE CoE Delhi East</td>
              <td class="border px-3 py-2">20.8.24</td>
              <td class="border px-3 py-2">Importance and ways to integrate Art with other subjects at primary level.
              </td>
            </tr>
            <tr>
              <td class="border px-3 py-2">August</td>
              <td class="border px-3 py-2">Priya Rohatgi</td>
              <td class="border px-3 py-2">PRT Maths</td>
              <td class="border px-3 py-2">Learning Through Art Integration Preparatory Stage</td>
              <td class="border px-3 py-2">Dr. Meenakshi Narula</td>
              <td class="border px-3 py-2">CBSE CoE Delhi East</td>
              <td class="border px-3 py-2">20.8.24</td>
              <td class="border px-3 py-2">Strategies to integrate art with other subjects for holistic development.
              </td>
            </tr>
            <tr>
              <td class="border px-3 py-2">August</td>
              <td class="border px-3 py-2">Sanjana Kapoor</td>
              <td class="border px-3 py-2">PRT Maths</td>
              <td class="border px-3 py-2">Learning Through Art Integration Preparatory Stage</td>
              <td class="border px-3 py-2">Dr. Bhavana Kulshrestha</td>
              <td class="border px-3 py-2">CBSE CoE Delhi East</td>
              <td class="border px-3 py-2">22.8.24</td>
              <td class="border px-3 py-2">Ways to integrate art in curriculum; benefits of art integration in
                education.</td>
            </tr>
            <tr>
              <td class="border px-3 py-2">August</td>
              <td class="border px-3 py-2">Amita Sharma</td>
              <td class="border px-3 py-2">PRT Hindi</td>
              <td class="border px-3 py-2">Learning Through Art Integration Preparatory Stage</td>
              <td class="border px-3 py-2">Dr. Bhavana Kulshrestha</td>
              <td class="border px-3 py-2">CBSE CoE Delhi East</td>
              <td class="border px-3 py-2">22.8.24</td>
              <td class="border px-3 py-2">Importance and benefits of art integration in education.</td>
            </tr>
            <tr>
              <td class="border px-3 py-2">August</td>
              <td class="border px-3 py-2">Chandrawati Singh</td>
              <td class="border px-3 py-2">PRT Hindi</td>
              <td class="border px-3 py-2">Learning Through Art Integration Preparatory Stage</td>
              <td class="border px-3 py-2">Dr. Bhavana Kulshrestha</td>
              <td class="border px-3 py-2">CBSE CoE Delhi East</td>
              <td class="border px-3 py-2">22.8.24</td>
              <td class="border px-3 py-2">Ways to integrate art with other subjects.</td>
            </tr>
            <tr>
              <td class="border px-3 py-2">August</td>
              <td class="border px-3 py-2">Nimisha Kapoor</td>
              <td class="border px-3 py-2">PRT Maths</td>
              <td class="border px-3 py-2">Cyber Safety and Security</td>
              <td class="border px-3 py-2">Binod Kumar Jha</td>
              <td class="border px-3 py-2">CBSE CoE Patna</td>
              <td class="border px-3 py-2">22.8.24</td>
              <td class="border px-3 py-2">Importance of cyber safety and preventive measures.</td>
            </tr>
            <tr>
              <td class="border px-3 py-2">August</td>
              <td class="border px-3 py-2">Lavina Gaur</td>
              <td class="border px-3 py-2">PRT English</td>
              <td class="border px-3 py-2">Learning Through Art Integration Preparatory Stage</td>
              <td class="border px-3 py-2">Dr. Meenakshi Narula</td>
              <td class="border px-3 py-2">CBSE CoE Delhi East</td>
              <td class="border px-3 py-2">20.8.24</td>
              <td class="border px-3 py-2">Strategies to develop socio-emotional skills, cognition, and simplify
                concepts through art.</td>
            </tr>
            <tr>
              <td class="border px-3 py-2">August</td>
              <td class="border px-3 py-2">Neeti Srivastava</td>
              <td class="border px-3 py-2">PRT Hindi</td>
              <td class="border px-3 py-2">Learning Through Art Integration Preparatory Stage</td>
              <td class="border px-3 py-2">Dr. Meenakshi Narula</td>
              <td class="border px-3 py-2">CBSE CoE Delhi East</td>
              <td class="border px-3 py-2">20.8.24</td>
              <td class="border px-3 py-2">Benefits of art integration and teaching processes.</td>
            </tr>
            <tr>
              <td class="border px-3 py-2">August</td>
              <td class="border px-3 py-2">Saroj Tripathi</td>
              <td class="border px-3 py-2">PRT Social Science</td>
              <td class="border px-3 py-2">Learning Through Art Integration Foundational</td>
              <td class="border px-3 py-2">Philomina James</td>
              <td class="border px-3 py-2">CBSE CoE Thiruvananthapuram</td>
              <td class="border px-3 py-2">21.8.24</td>
              <td class="border px-3 py-2">Use art integration for consolidation of learning and emotional development.
              </td>
            </tr>
            <tr>
              <td class="border px-3 py-2">August</td>
              <td class="border px-3 py-2">Saroj Tripathi</td>
              <td class="border px-3 py-2">PRT Social Science</td>
              <td class="border px-3 py-2">Learning Through Art Integration Foundational</td>
              <td class="border px-3 py-2">Lizarani Das</td>
              <td class="border px-3 py-2">CBSE CoE Chandigarh</td>
              <td class="border px-3 py-2">22.8.24</td>
              <td class="border px-3 py-2">Use of art integration for planning assessments.</td>
            </tr>

            
            <tr>
              <td class="border px-3 py-2">September</td>
              <td class="border px-3 py-2">Pinkie Srivastava</td>
              <td class="border px-3 py-2">PGT Computer Science</td>
              <td class="border px-3 py-2">FUTURE TECH FOR SUSTAINABILITY PROGRAM (IBM Skills Build)</td>
              <td class="border px-3 py-2">Ms. Kalpana</td>
              <td class="border px-3 py-2">CBSE</td>
              <td class="border px-3 py-2">3.9.24</td>
              <td class="border px-3 py-2">Digital credentials, Future Tech Olympiad, AI Hackathon, Innovation
                Accelerator, IBM mentoring.</td>
            </tr>
            <tr>
              <td class="border px-3 py-2">September</td>
              <td class="border px-3 py-2">—</td>
              <td class="border px-3 py-2">—</td>
              <td class="border px-3 py-2">WEBINAR on Cyber Security solutions: Ransomware Mitigation, Online
                Examination & Secure Vault</td>
              <td class="border px-3 py-2">Mr. Kamal Kumar Agarwal (CR Rao AIMSCS)</td>
              <td class="border px-3 py-2">CBSE</td>
              <td class="border px-3 py-2">25.9.24</td>
              <td class="border px-3 py-2">Password-less schema, hybrid storage, zero divulgence, secure online exams.
              </td>
            </tr>
            <tr>
              <td class="border px-3 py-2">September</td>
              <td class="border px-3 py-2">Manjari Srivastava</td>
              <td class="border px-3 py-2">PGT Mathematics</td>
              <td class="border px-3 py-2">WEBINAR on Cyber Security solutions</td>
              <td class="border px-3 py-2">Mr. Kamal Kumar Agarwal</td>
              <td class="border px-3 py-2">CBSE</td>
              <td class="border px-3 py-2">25.9.24</td>
              <td class="border px-3 py-2">Password-less schema, hybrid storage, zero divulgence, secure online exams.
              </td>
            </tr>

            
            <tr>
              <td class="border px-3 py-2">October</td>
              <td class="border px-3 py-2">Aditi Chaturvedi</td>
              <td class="border px-3 py-2">PRT English</td>
              <td class="border px-3 py-2">Social Media Safety and Well-being</td>
              <td class="border px-3 py-2">Ms. Swati Arora, Ms. Anindita Mishra</td>
              <td class="border px-3 py-2">NCERT</td>
              <td class="border px-3 py-2">30.10.24-4.10.24</td>
              <td class="border px-3 py-2">Learning to manage social media use, identify threats, and facilitate student
                mental health programs.</td>
            </tr>

            
            <tr>
              <td class="border px-3 py-2">January</td>
              <td class="border px-3 py-2">Tarbia Zehra</td>
              <td class="border px-3 py-2">School Counsellor</td>
              <td class="border px-3 py-2">Student development and wellbeing</td>
              <td class="border px-3 py-2">Ms. Vibha Bose, Ms. Anuradha Joshi</td>
              <td class="border px-3 py-2">CBSE</td>
              <td class="border px-3 py-2">20.1.25</td>
              <td class="border px-3 py-2">Focus on growth and development with involvement of parents, teachers, and
                school heads.</td>
            </tr>
          </tbody>
        </table> -->
      </div>


    </div>
    <?php include "includes/footer.php" ?>
  </div>
  <?php include "includes/foot.php" ?>

</body>

</html>