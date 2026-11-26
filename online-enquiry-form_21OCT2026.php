<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title>DPS Indiranagar | Online Enquiry Form</title>
</head>
<body>
    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <h1 class="text-[32px] font-[700] text-white ml-4 sm:ml-[7rem] hr-line relative">Online Enquiry Form</h1>
        </div>

        <div class="sm:mt-20 mt-10 mx-4 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-4">
            <div class="relative">
                <h2 class="text-center sm:text-[32px] text-[28px] font-[700] text-blue-main leading-9">
                    Enquiry Form | Session 2026–2027
                </h2>

                <div id="successPopup" class="hidden mt-5 bg-green-500 text-white px-4 py-3 rounded mb-5 text-center font-bold">
                    Form submitted successfully!
                </div>

                <div class="my-10">
                    <form id="AdmissionForm" method="post">
                        <div class="mt-4">
                            <select name="session" required id="asession" class="w-full border border-gray-300 p-2 rounded-md text-gray-500">
                                <option value="" disabled selected>Enquiry For Session</option>
                                <?php
                                $sessions = include "includes/session-api.php";
                                foreach ($sessions as $item):
                                    $sessionName = trim($item['session'] ?? '');
                                    if ($sessionName === '') continue; ?>
                                    <option value="<?= htmlspecialchars($sessionName) ?>"><?= htmlspecialchars($sessionName) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mt-4">
                            <select id="agrade" required class="w-full border p-3 rounded-md">
                                    <option value="" disabled selected>Select Grade</option>
                                        <?php
                                            if (!empty($grades)) {

                                            $gradeOrder = [
    'P.G', 'Nursery', 'Prep',
    'I', 'II', 'III', 'IV', 'V',
    'VI', 'VII', 'VIII', 'IX',
    'X', 'XI', 'XII'
];

                                            // remove duplicates
                                            $uniqueGrades = [];
                                            foreach ($grades as $g) {
                                                $grade = trim($g['grades']);
                                                if ($grade && !in_array($grade, $uniqueGrades)) {
                                                    $uniqueGrades[] = $grade;
                                                }
                                            }

                                            // safe sorting
                                            usort($uniqueGrades, function ($a, $b) use ($gradeOrder) {

                                                $posA = array_search($a, $gradeOrder);
                                                $posB = array_search($b, $gradeOrder);

                                                $posA = ($posA === false) ? 999 : $posA;
                                                $posB = ($posB === false) ? 999 : $posB;

                                                return $posA - $posB;
                                            });

                                            foreach ($uniqueGrades as $gr):
                                        ?>
                                    <option value="<?= htmlspecialchars($gr, ENT_QUOTES, 'UTF-8') ?>">
                                        <?= htmlspecialchars($gr, ENT_QUOTES, 'UTF-8') ?>
                                    </option>
                                    <?php endforeach; } else { ?>
                                        <option value="">No grades available</option>
                                    <?php } ?>
                                </select>
                        </div>

                        <div class="mt-4">
                            <input type="text" id="astudent_name" placeholder="Student Name" class="w-full border border-gray-300 p-[11px] rounded-md outline-none" required>
                            <span id="astudent-error" class="text-red-500 text-sm mt-1 hidden">Only letters and spaces allowed.</span>
                        </div>
                        <div class="mt-4">
                            <input type="text" id="aparent_name" placeholder="Parents Name" class="w-full border border-gray-300 p-[11px] rounded-md outline-none">
                            <span id="aparent-error" class="text-red-500 text-sm mt-1 hidden">Only letters and spaces allowed.</span>
                        </div>

                        <div class="mt-4">
                            <input type="text" id="amobile" placeholder="Mobile Number" maxlength="10" class="w-full border border-gray-300 p-[11px] rounded-md outline-none" required>
                            <div id="amobile-error" class="text-red-500 text-sm mt-1 hidden">Please enter valid phone number</div>
                        </div>
                        <div class="mt-4">
                            <input type="email" id="aemail" placeholder="Email" class="w-full border border-gray-300 p-[11px] rounded-md outline-none">
                            <span id="aemail-error" class="text-red-500 text-sm mt-1 hidden">Please enter a valid email address.</span>
                        </div>

                        <!-- CITY DROPDOWN (FIXED) -->
                        <div class="mt-4 relative" id="cityWrapper">
                            <select id="acity" name="city" class="hidden" required>
                                <option value="">Select City</option>
                                <?php
                                $cities = include 'includes/get-city.php';
                                if (!empty($cities)):
                                    foreach ($cities as $city): 
                                        $cityName = trim($city['name'] ?? '');
                                        if ($cityName === '') continue; ?>
                                        <option value="<?= htmlspecialchars($cityName) ?>"><?= htmlspecialchars($cityName) ?></option>
                                <?php endforeach; endif; ?>
                            </select>

                            <div class="border border-gray-300 p-[11px] rounded-md bg-white cursor-pointer flex justify-between items-center" id="cityTrigger">
                                <span class="selected-text text-[#808080cc]">Select City</span>
                                <span>▼</span>
                            </div>

                            <div class="absolute mt-1 border border-gray-300 rounded-md bg-white shadow-md hidden z-50 w-full" id="cityDropdown">
                                <input type="text" id="citySearch" placeholder="Search..." class="w-full p-2 border-b border-gray-300 outline-none">
                                <ul class="max-h-48 overflow-y-auto" id="cityList"></ul>
                            </div>
                        </div>

                        <div class="mt-4">
                            <input type="text" id="apincode" placeholder="Pincode" class="w-full border border-gray-300 p-[11px] rounded-md" maxlength="6" required>
                            <span id="apincode-error" class="text-red-500 text-sm hidden">Please enter a valid Pincode.</span>
                        </div>

                        <div class="mt-4 flex items-center gap-2">
                            <input type="checkbox" id="terms" required>
                            <label for="terms" class="text-sm">I agree to <a href="#" class="underline">Terms & Conditions</a></label>
                        </div>

                        <input type="hidden" name="source" id="source">
                        
                        <div class="my-4">
                            <button type="submit" id="AsubmitBtn" class="p-4 bg-blue-main w-full text-white font-semibold text-[18px] rounded hover:bg-red-500 transition">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include "includes/footer.php" ?>

    <script>
        // ==================== CITY DROPDOWN (ROBUST VERSION) ====================
        (function() {
            const cityWrapper = document.getElementById('cityWrapper');
            const trigger = document.getElementById('cityTrigger');
            const dropdown = document.getElementById('cityDropdown');
            const hiddenSelect = document.getElementById('acity');
            const cityList = document.getElementById('cityList');
            const searchInput = document.getElementById('citySearch');
            const selectedLabel = trigger.querySelector('.selected-text');

            if (!cityWrapper || !trigger || !dropdown || !hiddenSelect || !cityList || !searchInput || !selectedLabel) {
                console.error('City dropdown elements missing!');
                return;
            }

            // Populate list from hidden select options
            function populateCityList() {
                cityList.innerHTML = '';
                const options = Array.from(hiddenSelect.options);
                if (options.length === 0) {
                    const li = document.createElement('li');
                    li.className = "p-2 text-gray-400 text-sm";
                    li.textContent = "No cities available";
                    cityList.appendChild(li);
                    return;
                }

                options.forEach(opt => {
                    if (!opt.value) return;
                    const li = document.createElement('li');
                    li.className = "p-2 hover:bg-gray-100 cursor-pointer text-sm border-b last:border-0";
                    li.textContent = opt.text;
                    li.dataset.value = opt.value;
                    li.onclick = function(e) {
                        e.stopPropagation();
                        hiddenSelect.value = this.dataset.value;
                        selectedLabel.textContent = this.textContent;
                        selectedLabel.classList.remove('text-[#808080cc]');
                        dropdown.classList.add('hidden');
                    };
                    cityList.appendChild(li);
                });
            }

            populateCityList();

            trigger.onclick = function(e) {
                e.stopPropagation();
                dropdown.classList.toggle('hidden');
                if (!dropdown.classList.contains('hidden')) {
                    searchInput.value = '';
                    populateCityList();
                    searchInput.focus();
                }
            };

            searchInput.oninput = function(e) {
                const term = e.target.value.toLowerCase();
                const items = cityList.querySelectorAll('li');
                items.forEach(li => {
                    if (li.dataset.value) {
                        const text = li.textContent.toLowerCase();
                        li.style.display = text.includes(term) ? '' : 'none';
                    }
                });
            };

            document.addEventListener('click', function(e) {
                if (!cityWrapper.contains(e.target)) {
                    dropdown.classList.add('hidden');
                }
            });

            // Reset city display when form resets
            document.getElementById('AdmissionForm').addEventListener('reset', function() {
                selectedLabel.textContent = 'Select City';
                selectedLabel.classList.add('text-[#808080cc]');
                hiddenSelect.value = '';
                populateCityList();
            });
        })();

        // ==================== SOURCE TRACKING ====================
        (function() {
            const params = new URLSearchParams(window.location.search);
            let source = params.get("utm_source") || document.referrer || "Website";
            const srcLower = source.toLowerCase();
            if (srcLower.includes("google")) {
                source = "Google-Ads by Agency";
            } else if (srcLower.includes("facebook") || srcLower.includes("meta")) {
                source = "Facebook by Agency";
            } else if (srcLower.includes("instagram") || srcLower.includes("ig")) {
                source = "Instagram by Agency";
            } else if (source !== "Website") {
                source = "Others";
            }
            if (!sessionStorage.getItem("leadSource")) {
                sessionStorage.setItem("leadSource", source);
            }
            document.getElementById("source").value = sessionStorage.getItem("leadSource");
        })();

        // ==================== VALIDATION & SUBMISSION ====================
        const nameRegex = /^[A-Za-z\s]+$/;
        const mobileRegex = /^[6-9]\d{9}$/;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const pincodeRegex = /^[1-9][0-9]{5}$/;

        document.getElementById("AdmissionForm").addEventListener("submit", function(e) {
            e.preventDefault();
            const btn = document.getElementById("AsubmitBtn");

            // Gather values
            const session = document.getElementById("asession").value;
            const grade = document.getElementById("agrade").value;
            const studentName = document.getElementById("astudent_name").value.trim();
            const parentName = document.getElementById("aparent_name").value.trim();
            const mobile = document.getElementById("amobile").value.trim();
            const email = document.getElementById("aemail").value.trim();
            const city = document.getElementById("acity").value; // from hidden select
            const pincode = document.getElementById("apincode").value.trim();
            const source = document.getElementById("source").value;

            // Basic required checks
            if (!session || !grade || !studentName || !mobile || !city || !pincode) {
                alert("Please fill all required fields.");
                return;
            }

            // Format validation
            if (!nameRegex.test(studentName)) {
                alert("Student name contains invalid characters.");
                return;
            }
            if (parentName && !nameRegex.test(parentName)) {
                alert("Parent name contains invalid characters.");
                return;
            }
            if (!mobileRegex.test(mobile)) {
                alert("Please enter a valid 10-digit mobile number starting with 6-9.");
                return;
            }
            if (email && !emailRegex.test(email)) {
                alert("Please enter a valid email address.");
                return;
            }
            if (!pincodeRegex.test(pincode)) {
                alert("Please enter a valid 6-digit pincode.");
                return;
            }

            btn.disabled = true;
            btn.textContent = "Submitting...";

            // Build payload with ALL fields expected by backend
            const payload = {
                session: session,
                grade: grade,
                name: studentName,
                parent_name: parentName,
                phone: mobile,
                email: email,
                city: city,
                pincode: pincode,
                source: source,
                branch_id: 6,                // Indiranagar branch ID
                school_id: 1,
                source_type: "Website",       // REQUIRED
                enquiry_type: "Digital",       // REQUIRED
                message: "This Message From DPS Indiranagar Website",
                subject: "Admission Enquiry",
                language_id: 1
            };

            fetch(`proxy/admission-proxy`, {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify(payload)
            })
            .then(res => {
                if (!res.ok) {
                    // Try to get error message from response
                    return res.text().then(text => { throw new Error(`Server error: ${res.status} - ${text}`); });
                }
                return res.json();
            })
            .then(data => {
                document.getElementById("successPopup").classList.remove("hidden");
                document.getElementById("AdmissionForm").reset();
                // Manually reset city display (reset event already does it, but ensure)
                const label = document.querySelector('#cityTrigger .selected-text');
                label.textContent = 'Select City';
                label.classList.add('text-[#808080cc]');
                document.getElementById('acity').value = '';
                setTimeout(() => document.getElementById("successPopup").classList.add("hidden"), 5000);
            })
            .catch(err => {
                console.error("Submission error:", err);
                alert("Submission failed. Please check console or contact support.");
            })
            .finally(() => {
                btn.disabled = false;
                btn.textContent = "Submit";
            });
        });
    </script>
    <?php include "includes/foot.php" ?>
</body>
</html>