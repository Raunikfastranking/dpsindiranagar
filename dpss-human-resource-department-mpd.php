<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $dpsshuman_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $dpsshuman_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $dpsshuman_data['data']['meta_keywords'] ?? "" ?>">
</head>


<body>

  <?php include "includes/header.php" ?>

  <div class="main relative">
    <div class="bg-center flex items-center text-center h-[300px] brud-image">
      <div>
        <h1
          class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
           <?= strip_tags($dpsshuman_data['data']['sections'][0]['content_heading']) ?? "" ?>
        </h1>
      </div>

      <div class="md:w-[100%]">
        <h1
          class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
           <?= strip_tags($dpsshuman_data['data']['sections'][0]['content_heading']) ?? "" ?>
        </h1>
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
            <a href="dpss-human-resource-department-mpd" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($dpsshuman_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
          </div>
        </li>
      </ol>
    </div>

    <div
      class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
<?= $dpsshuman_data['data']['sections'][1]['content'] ?? "" ?>
    
      <!-- <div class="mx-auto max-w-full">
        <div class="overflow-x-auto rounded-xl shadow ring-1 ring-gray-200">
          <table class="min-w-[1200px] w-full border-collapse text-left">
            <thead class="bg-gray-50 sticky top-0 z-10">
              <tr class="text-gray-700 text-sm">
                <th class="px-4 py-3 font-semibold">Month</th>
                <th class="px-4 py-3 font-semibold">Participant's Name</th>
                <th class="px-4 py-3 font-semibold">Designation / Subject</th>
                <th class="px-4 py-3 font-semibold">Theme of Trg / Workshop</th>
                <th class="px-4 py-3 font-semibold">Resource Person</th>
                <th class="px-4 py-3 font-semibold">Organizer</th>
                <th class="px-4 py-3 font-semibold">Date</th>
                <th class="px-4 py-3 font-semibold">Learning Outcomes</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 text-[15px] text-gray-800">
              <tr class="odd:bg-white even:bg-gray-50 align-top">
                <td class="px-4 py-3">April</td>
                <td class="px-4 py-3">Moumita Bose</td>
                <td class="px-4 py-3">TGT English</td>
                <td class="px-4 py-3">COMMUNICATION</td>
                <td class="px-4 py-3">Dr. Sanjay Ranade, Ms Bidisha Roy Das, Ms Hetal Variya</td>
                <td class="px-4 py-3">DPSS HRDC</td>
                <td class="px-4 py-3">4.4.24</td>
                <td class="px-4 py-3">
                  <div class="whitespace-pre-line">
                    1. Effective communication can be with silence. Communication with body is a creative means of
                    rearranging elements of reality to create something new and different.
                    2. Storytelling through visual art is an effective means of communication.
                    3. Body language is an important means of communication which involves smiling, raising a hand, etc.
                    Listening actively without reacting is very effective in creating a congenial environment.
                  </div>
                </td>
              </tr>

              <tr class="odd:bg-white even:bg-gray-50 align-top">
                <td class="px-4 py-3">April</td>
                <td class="px-4 py-3">Ankita Tripathi</td>
                <td class="px-4 py-3">PRT English</td>
                <td class="px-4 py-3">Reading Aloud and Oral Skills</td>
                <td class="px-4 py-3">Dr. Nina Hood</td>
                <td class="px-4 py-3">DPSS HRDC</td>
                <td class="px-4 py-3">15.4.24</td>
                <td class="px-4 py-3">
                  <div class="whitespace-pre-line">
                    How Reading aloud offers numerous benefits -
                    1. It helps us practice proper pronunciation and enhances our fluency in the language.
                    2. It helps us in boosting confidence.
                    3. It engages multiple senses, providing more immersive learning experience.
                    4. Oral skills help in building and maintaining relationships, both professionally and personally.
                    5. Helps in problem solving by facilitating collaboration and teamwork.
                  </div>
                </td>
              </tr>

              <tr class="odd:bg-white even:bg-gray-50 align-top">
                <td class="px-4 py-3">April</td>
                <td class="px-4 py-3">Neeti Srivastava</td>
                <td class="px-4 py-3">PRT Hindi</td>
                <td class="px-4 py-3">Crafted Expressions</td>
                <td class="px-4 py-3">Ms. Sujata Goel</td>
                <td class="px-4 py-3">DPSS HRDC</td>
                <td class="px-4 py-3">19.4.24</td>
                <td class="px-4 py-3">
                  <div class="whitespace-pre-line">
                    The training was very innovative and interesting. Many new ideas of craft were taught that we can
                    use in class to make teaching certain topics interesting.
                  </div>
                </td>
              </tr>

              <tr class="odd:bg-white even:bg-gray-50 align-top">
                <td class="px-4 py-3">April</td>
                <td class="px-4 py-3">Lavina Gaur</td>
                <td class="px-4 py-3">PRT English</td>
                <td class="px-4 py-3">Learning with Oral Narratives</td>
                <td class="px-4 py-3">Ms. Padmini Rangarajan</td>
                <td class="px-4 py-3">DPSS HRDC</td>
                <td class="px-4 py-3">18.4.24</td>
                <td class="px-4 py-3">
                  <div class="whitespace-pre-line">
                    1. Importance of story telling
                    2. Appropriate use of new types of teaching aids while teaching (art integrated learning) - shadow
                    creator, Pattachitra katha, mask and story sheet with pictures, Hari katha (puppets and folk songs)
                    and cardboard box with pictures to present a story.
                    3. Revival of traditional puppetry art forms, documentation, scripting and production.
                    4. Expressive narration to engage and help students visualise the characters.
                    5. Maintaining proper tone and diction while narrating a story.
                    6. Depiction with related pictures on a story board to assist memorisation.
                  </div>
                </td>
              </tr>

              <tr class="odd:bg-white even:bg-gray-50 align-top">
                <td class="px-4 py-3">April</td>
                <td class="px-4 py-3">Lavina Gaur</td>
                <td class="px-4 py-3">PRT English</td>
                <td class="px-4 py-3">Harmony in Movement</td>
                <td class="px-4 py-3">Ms. Imogen Buxton</td>
                <td class="px-4 py-3">DPSS HRDC</td>
                <td class="px-4 py-3">29.4.24</td>
                <td class="px-4 py-3">
                  <div class="whitespace-pre-line">
                    The workshop revolved around the importance of movement for teaching in Primary schools. It focused
                    on six principles of dance and the role they play in attracting the attention of students.
                    Coordination of movements as a tool for learning keeps children involved and engrossed through
                    rhythm of music. Students benefit from a free-style approach for different subjects.
                  </div>
                </td>
              </tr>

              <tr class="odd:bg-white even:bg-gray-50 align-top">
                <td class="px-4 py-3">April</td>
                <td class="px-4 py-3">Aditi Chaturvedi</td>
                <td class="px-4 py-3">PRT English</td>
                <td class="px-4 py-3">Drama as a Communication Tool</td>
                <td class="px-4 py-3">Ms. Zulfia Shaikh</td>
                <td class="px-4 py-3">DPSS HRDC</td>
                <td class="px-4 py-3">24.4.24 to 25.4.24</td>
                <td class="px-4 py-3">
                  <div class="whitespace-pre-line">
                    The sessions focussed on effective use of body, face and voice to make teaching interesting and more
                    effective. Emphasis on intonation, expression, voice modulation, pronunciation and enunciation.
                    Facial expressions and pauses were stressed.
                  </div>
                </td>
              </tr>

              <tr class="odd:bg-white even:bg-gray-50 align-top">
                <td class="px-4 py-3">May</td>
                <td class="px-4 py-3">Manjari Srivastava</td>
                <td class="px-4 py-3">PGT - Maths</td>
                <td class="px-4 py-3">Alternative Strategies of Assessment</td>
                <td class="px-4 py-3">Dr. Arbind Kumar Jha, Professor, School of Education, IGNOU, New Delhi</td>
                <td class="px-4 py-3">HRDC - DPSS</td>
                <td class="px-4 py-3">3.5.2024</td>
                <td class="px-4 py-3">
                  <div class="whitespace-pre-line">
                    Pedagogic strategies to involve both learning and assessment; alternative strategies such as
                    Individual, Group, Self and Peer Assessment using various skills.
                  </div>
                </td>
              </tr>

              <tr class="odd:bg-white even:bg-gray-50 align-top">
                <td class="px-4 py-3">May</td>
                <td class="px-4 py-3">Pinkie Srivastava</td>
                <td class="px-4 py-3">PGT Computer Science</td>
                <td class="px-4 py-3">Competency-Based Assessment</td>
                <td class="px-4 py-3">Prof. Vijayan K, NCERT, New Delhi</td>
                <td class="px-4 py-3">HRDC, DPSS</td>
                <td class="px-4 py-3">7.5.24</td>
                <td class="px-4 py-3">
                  <div class="whitespace-pre-line">
                    Benefits of CBA: learner engagement, effective utilization of time and environment, equitable
                    learning opportunity, and a shift toward authentic assessment.
                  </div>
                </td>
              </tr>

              <tr class="odd:bg-white even:bg-gray-50 align-top">
                <td class="px-4 py-3">May</td>
                <td class="px-4 py-3">Pinkie Srivastava</td>
                <td class="px-4 py-3">PGT Computer Science</td>
                <td class="px-4 py-3">Operational Formative Assessment (Class VI–XII)</td>
                <td class="px-4 py-3">Dr. Sutapa Bose, IGNOU, New Delhi</td>
                <td class="px-4 py-3">HRDC, DPSS</td>
                <td class="px-4 py-3">8.5.24</td>
                <td class="px-4 py-3">
                  <div class="whitespace-pre-line">
                    Seven Strategies of Assessment for Learning: research-based practices that help students improve
                    achievement and experience the motivational power of controlling conditions for success.
                  </div>
                </td>
              </tr>

              <tr class="odd:bg-white even:bg-gray-50 align-top">
                <td class="px-4 py-3">May</td>
                <td class="px-4 py-3">Lipi Banerjee</td>
                <td class="px-4 py-3">TGT Science</td>
                <td class="px-4 py-3">Formative Assessment - Process of Transformation</td>
                <td class="px-4 py-3">Ms. Pranati Pandey</td>
                <td class="px-4 py-3">DPSS HRDC</td>
                <td class="px-4 py-3">6.5.24</td>
                <td class="px-4 py-3">
                  <div class="whitespace-pre-line">
                    1. Regular, formative and competency-based assessments.
                    2. Promoting learning and development of students.
                    3. Test higher-order skills (analysis, critical thinking and conceptual clarity).
                  </div>
                </td>
              </tr>

              <tr class="odd:bg-white even:bg-gray-50 align-top">
                <td class="px-4 py-3">May</td>
                <td class="px-4 py-3">Rohini Yadav</td>
                <td class="px-4 py-3">TGT Science</td>
                <td class="px-4 py-3">Workshop for Middle School Science Teachers</td>
                <td class="px-4 py-3">Manjula Yadav, Charudatta S Pulliwar, Nihar Pandya</td>
                <td class="px-4 py-3">Kamal Singh, Dr. Bitasa Das, Dr. Geetanjali Mishra, V. V. V. Satyanarayana</td>
                <td class="px-4 py-3">15.5.24</td>
                <td class="px-4 py-3">
                  <div class="whitespace-pre-line">
                    1. Teach science with materials available in surroundings.
                    2. Teaching science without props.
                    3. Folk art as an effective tool for teaching science.
                  </div>
                </td>
              </tr>

              <tr class="odd:bg-white even:bg-gray-50 align-top">
                <td class="px-4 py-3">May</td>
                <td class="px-4 py-3">Nimisha Kapoor</td>
                <td class="px-4 py-3">PRT Coordinator</td>
                <td class="px-4 py-3">Assessment at the Primary level (I–V)</td>
                <td class="px-4 py-3">Dr. Yukti Sharma</td>
                <td class="px-4 py-3">DPSS HRDC</td>
                <td class="px-4 py-3">1.5.24</td>
                <td class="px-4 py-3">
                  <div class="whitespace-pre-line">
                    Perspectives and strategies of assessment; importance of documentation for comparison and
                    evaluation; various forms of assessment.
                  </div>
                </td>
              </tr>

              <tr class="odd:bg-white even:bg-gray-50 align-top">
                <td class="px-4 py-3">July</td>
                <td class="px-4 py-3">Manjari Srivastava</td>
                <td class="px-4 py-3">PGT Mathematics</td>
                <td class="px-4 py-3">Mathematics Workshop for classes XI & XII</td>
                <td class="px-4 py-3">Dr. Aparna Mehra, Dr. Pralay Chaterjee, Dr. Rajeev Lakshman, Dr. Anant Narayan
                  Hariharan</td>
                <td class="px-4 py-3">Dr. Kalyan Chakraborty, Dr. K. Srinivas, Dr. K. Kameswara Rao, Dr. Venkateswaran
                  P. Krishnan (DPSS-HRDC)</td>
                <td class="px-4 py-3">9.7.24 - 13.7.24</td>
                <td class="px-4 py-3">
                  <div class="whitespace-pre-line">
                    1. Analytical studies of topics taught at Sr. Secondary level
                    2. Transactional strategies in teaching of Mathematics
                  </div>
                </td>
              </tr>

              <tr class="odd:bg-white even:bg-gray-50 align-top">
                <td class="px-4 py-3">August</td>
                <td class="px-4 py-3">Suchita Sah Mathur</td>
                <td class="px-4 py-3">TGT / Science & Mathematics</td>
                <td class="px-4 py-3">Physics programme for the educators of classes IX–X</td>
                <td class="px-4 py-3">Prof. H. C. Verma; Ms Jasmine Kaur Duggal; Dr Arghya Taraphder</td>
                <td class="px-4 py-3">Dr Sanjay Kumar (DPSS-HRDC)</td>
                <td class="px-4 py-3">23.8.24 - 25.8.24</td>
                <td class="px-4 py-3">
                  <div class="whitespace-pre-line">
                    Problem solving with different activities; Application of Newton's law using games and real life
                    situations; Explanation of light using toys; Human eye model; simulation for Ohm's law; sound
                    activity; use of light beam for image formation.
                  </div>
                </td>
              </tr>

              <tr class="odd:bg-white even:bg-gray-50 align-top">
                <td class="px-4 py-3">September</td>
                <td class="px-4 py-3">Ashutosh Kumar Shukla</td>
                <td class="px-4 py-3">PGT IP/AI</td>
                <td class="px-4 py-3">Artificial Intelligence And Machine Learning</td>
                <td class="px-4 py-3">Prof. Malay Bhattacharyya, Prof. Utpal Garain, Mr. Aditya Shankar Pal, Mr.
                  Diptendu Datta, Prof. Dipti Prasad Mukharjee, Prof. Swagatam Das</td>
                <td class="px-4 py-3">DPSS-HRDC</td>
                <td class="px-4 py-3">24.9.24 to 26.9.24</td>
                <td class="px-4 py-3">
                  <div class="whitespace-pre-line">
                    Basic concepts of Artificial Intelligence: Machine Learning, Deep Learning and Neural Networks.
                    Takeaways included implementation using Python programming language.
                  </div>
                </td>
              </tr>

              <tr class="odd:bg-white even:bg-gray-50 align-top">
                <td class="px-4 py-3">October</td>
                <td class="px-4 py-3">Pallavi Shubham</td>
                <td class="px-4 py-3">PGT Biology</td>
                <td class="px-4 py-3">Transcription and translation, mechanism of DNA replication</td>
                <td class="px-4 py-3">Dr. Gayathri Pananghat</td>
                <td class="px-4 py-3">HRDC DPSS</td>
                <td class="px-4 py-3">4.1.24</td>
                <td class="px-4 py-3">
                  <div class="whitespace-pre-line">
                    Insight into transcription; roles of enzymes; clear view of translation; step-by-step process of DNA
                    replication and associated facts (Central Dogma).
                  </div>
                </td>
              </tr>

              <tr class="odd:bg-white even:bg-gray-50 align-top">
                <td class="px-4 py-3">October</td>
                <td class="px-4 py-3">Pallavi Shubham</td>
                <td class="px-4 py-3">PGT Biology</td>
                <td class="px-4 py-3">Fundamentals of immunology and transgenic animals</td>
                <td class="px-4 py-3">Dr. Rama Akondy</td>
                <td class="px-4 py-3">DPSS HRDC</td>
                <td class="px-4 py-3">15.10.24</td>
                <td class="px-4 py-3">
                  <div class="whitespace-pre-line">
                    Understanding formed elements in blood via CBC comparison; insight into genetically modified
                    organisms; references to genetic engineering in plants and animals.
                  </div>
                </td>
              </tr>

              <tr class="odd:bg-white even:bg-gray-50 align-top">
                <td class="px-4 py-3">October</td>
                <td class="px-4 py-3">Pallavi Shubham</td>
                <td class="px-4 py-3">PGT Biology</td>
                <td class="px-4 py-3">DNA fingerprinting and recombinant DNA technology - tools and techniques</td>
                <td class="px-4 py-3">Prof. Poonam Sharma</td>
                <td class="px-4 py-3">DPSS HRDC</td>
                <td class="px-4 py-3">16.10.24</td>
                <td class="px-4 py-3">
                  <div class="whitespace-pre-line">
                    Overview of recombinant DNA technology, host–vector systems, gene cloning, and applications.
                  </div>
                </td>
              </tr>

              <tr class="odd:bg-white even:bg-gray-50 align-top">
                <td class="px-4 py-3">October</td>
                <td class="px-4 py-3">Ritu Srivastava</td>
                <td class="px-4 py-3">PGT Chemistry</td>
                <td class="px-4 py-3">Chemistry for the educators of classes XI and XII</td>
                <td class="px-4 py-3">
                  <div class="whitespace-pre-line">
                    Dr Jitendra Bera (IIT Kanpur); Dr Savita Bargujar (Ramjas College, DU); Dr. Balaji Sikandar (IIS
                    Bangalore); Dr. Sanjib Banerjee (IIT Bhilai)
                    Organizers: Dr Sonia Ratnani (Ramjas College, DU); Dr. Sourav Pal (Ashoka University); Dr Rakesh
                    Kumar (Delhi University)
                  </div>
                </td>
                <td class="px-4 py-3">DPSS HRDC</td>
                <td class="px-4 py-3">23.10.24 - 26.10.24</td>
                <td class="px-4 py-3">
                  <div class="whitespace-pre-line">
                    Learned new strategies & recent techniques to simplify teaching across topics:
                    • Organic Chemistry (Electronic Displacements, Inductive Effect)
                    • d & f Block Elements (Ionization Enthalpy, Oxidation States, Interstitial Compounds, Electrode
                    Potential, Lanthanoids & Actinoids)
                    • Safe & Greener Labs (MSDS, first aid, disposal, 3Rs, green experiments)
                    • Spot tests (Organic & Inorganic), Pedagogy: Flipped & Blended learning, Misconceptions, Modifying
                    lab teaching
                    • Stoichiometry, qualitative analysis, common-ion effect
                    • Aldehydes, Ketones & Carboxylic Acids (mechanisms incl. HVZ)
                    • Coordination Compounds (CFT, spectrochemical series, synergic bonding)
                    • Chemical Bonding (MOT & VBT)
                    • Thermodynamics (2nd & 3rd laws, Gibbs energy, numericals)
                    • Chemical Kinetics (collision theory, activation energy, Arrhenius)
                    • Alcohols, Phenols & Ethers (mechanisms; effect of substituents on acidity of phenol)
                  </div>
                </td>
              </tr>

              <tr class="odd:bg-white even:bg-gray-50 align-top">
                <td class="px-4 py-3">October</td>
                <td class="px-4 py-3">Lipi Banerjee</td>
                <td class="px-4 py-3">TGT Science</td>
                <td class="px-4 py-3">Cell Cycle and Cell Division</td>
                <td class="px-4 py-3">Ms. Rohini Muthuswami</td>
                <td class="px-4 py-3">DPSS HRDC</td>
                <td class="px-4 py-3">3.10.24</td>
                <td class="px-4 py-3">
                  <div class="whitespace-pre-line">
                    1. To understand cell cycle and cell division
                    2. To know the life and times of Gregor Mendel and cell cycle
                  </div>
                </td>
              </tr>

              <tr class="odd:bg-white even:bg-gray-50 align-top">
                <td class="px-4 py-3">October</td>
                <td class="px-4 py-3">Lipi Banerjee</td>
                <td class="px-4 py-3">TGT Science</td>
                <td class="px-4 py-3">Human Embryonic development and stem cell technology w.r.t. Animal Development
                </td>
                <td class="px-4 py-3">Prof. Shweta</td>
                <td class="px-4 py-3">DPSS HRDC</td>
                <td class="px-4 py-3">14.10.24</td>
                <td class="px-4 py-3">
                  <div class="whitespace-pre-line">
                    • What is development? Oviparity, Viviparity, Ovoviviparity
                    • Major cell division patterns: holoblastic (complete), meroblastic (incomplete)
                    • XX vs XY and sexual phenotype
                    • Globin gene expression only in RBC
                    • Gene activation at specific developmental times
                    • Spermatogenesis and oogenesis
                    • Stem cell concept
                  </div>
                </td>
              </tr>

              <tr class="odd:bg-white even:bg-gray-50 align-top">
                <td class="px-4 py-3">October</td>
                <td class="px-4 py-3">Lipi Banerjee</td>
                <td class="px-4 py-3">TGT Science</td>
                <td class="px-4 py-3">Photosynthesis and Respiration</td>
                <td class="px-4 py-3">Ms. Meenam Bhatia</td>
                <td class="px-4 py-3">DPSS HRDC</td>
                <td class="px-4 py-3">18.10.24</td>
                <td class="px-4 py-3">
                  <div class="whitespace-pre-line">
                    Photosynthesis: synthesis of organic compounds from water and CO₂ using light; primary source of
                    biological energy and free oxygen; redox process coupling water oxidation with oxygen release and
                    CO₂ reduction to carbohydrates.
                  </div>
                </td>
              </tr>

              <tr class="odd:bg-white even:bg-gray-50 align-top">
                <td class="px-4 py-3">November</td>
                <td class="px-4 py-3">Fatima Zartaj</td>
                <td class="px-4 py-3">PRT Science</td>
                <td class="px-4 py-3">Learning Can Be Fun</td>
                <td class="px-4 py-3">Dr. Shivani Kanodia, Mr Mohit Manocha, Mr. Vishal Bhatt</td>
                <td class="px-4 py-3">Mr Gurmeet Singh, Mr Krishna Purohit (DPSS HRDC)</td>
                <td class="px-4 py-3">19.11.24 - 21.11.24</td>
                <td class="px-4 py-3">
                  <div class="whitespace-pre-line">
                    Understanding concepts of Maths and Science using techniques like paper folding, Coulomb's scale,
                    etc.
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div> -->


    </div>
    <?php include "includes/footer.php" ?>
  </div>
  <?php include "includes/foot.php" ?>

</body>

</html>