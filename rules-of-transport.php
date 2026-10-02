<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DPS Indira Nagar| Rules of Transport</title>
    <?php include "includes/head.php" ?>
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative sm:top-[20px] mb-[40px] sm:mb-[120px] mx-0 sm:mx-2">
        <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
            <div class="sm:mt-10 relative">

                <h1
                    class="text-[32px] sm:hidden block font-[700] text-blue-main uppercase text-center mb-5 sm:mb-8 hr-line relative leading-9">
                    Rules
                    <span class="sm:hidden"> <br></span> of
                    <span class="sm:hidden"> <br></span> Transport
                </h1>
                <div>

                    <div class="md:w-[100%]">
                        <h1
                            class="sm:text-[32px] sm:block hidden font-[700] text-blue-main uppercase text-center sm:mb-1 hr-line relative leading-9">
                            Rules
                    <span class="sm:hidden"> <br></span> of
                    <span class="sm:hidden"> <br></span> Transport
                        </h1>




                        <div class="my-10">
                            <ul class="ml-6 list-disc">
                                
<li>School bus routes are drawn up based on convenience and demand while ensuring that no route is overly long.</li>
<li>Parents should consult the School’s Transport In-charge for necessary details or any changes desired.</li>
<li>Under no circumstances are students allowed to go behind or under the buses parked in the school campus and are also not allowed to sit in parked buses during school hours.</li>
<li>Under no circumstances should students touch the instrument panel of the buses.</li>
<li>The student has to be on the correct side of the arriving bus.</li>
<li>Students are allowed to use only their allotted bus and bus stop.</li>
<li>Parents are not allowed to enter the bus under any circumstances.</li>
<li>Parents must send an application addressed to the Bus In-charge in case if the child is not boarding the bus at home time.</li>
<li>Parents must inform the Office Transport In-charge Mr. Amit Kr. Pandey or the Transport Manager Mr. Rakesh Gupta if there is any change in the schedule of their ward commuting by bus.</li>
<li>In case if a child is not boarding the bus on a particular day, then the information must reach in written to Mr. Amit Kr. Pandey otherwise the responsibility shall not be borne by the school.</li>
<li>It is the responsibility of the parent to reach the bus stop well in time to pick up their ward. The Driver and Conductor shall not leave the bus to pick or drop the child.</li>
<li>For the children commuting through private vehicles, the school owes no responsibility outside the campus. Commuting by two wheelers is strictly not allowed by the school administration.</li>
<li>The students must abstain from boarding a running bus to avoid accidents.</li>
<li>Parents who want to avail School Transport facility for their ward must contact the Transport In-charge Mr. Amit or Transport Manager Mr. Rakesh at the school office during the working hours for details.</li>
<li>It is a matter of vital importance for the Parents to understand that the van facility is only provided to the Pre-Primary students and the Bus Facility is for the students of classes I toXII. The school owes no responsibility for the children of classes I to XII who are availing the facility of the van. Although the vendor is the same yet he is not registered with the school to Provide the facility of the van to the students of classes I onwards.</li>
</ul>
                        </div>





                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "includes/footer.php" ?>
    <?php include "includes/foot.php" ?>
    <script>
    // Simple form validation
    const form = document.querySelector('form');
    form.addEventListener('submit', function(e) {
        let valid = true;

        // Validate Admission No.
        const admissionNo = document.getElementById('admissionNo');
        const admissionNoError = document.getElementById('admissionNoError');
        if (!admissionNo.value) {
            admissionNoError.style.display = 'block';
            valid = false;
        } else {
            admissionNoError.style.display = 'none';
        }

        // Validate Date of Birth
        const dob = document.getElementById('dob');
        const dobError = document.getElementById('dobError');
        if (!dob.value) {
            dobError.style.display = 'block';
            valid = false;
        } else {
            dobError.style.display = 'none';
        }

        // If form is invalid, prevent submission
        if (!valid) {
            e.preventDefault();
        }
    });
    </script>
</body>

</html>