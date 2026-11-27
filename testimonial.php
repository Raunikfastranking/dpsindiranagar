<?php
include "includes/apis.php";

// Extract video testimonials dynamically from any video section
$videos = [];
if (!empty($testimonial_data['data']['sections']) && is_array($testimonial_data['data']['sections'])) {
    foreach ($testimonial_data['data']['sections'] as $section) {
        $secType = strtolower($section['section_type'] ?? $section['layout'] ?? '');
        $secTitle = strtolower($section['title'] ?? '');
        if ($secType === 'video' || strpos($secTitle, 'video') !== false || !empty($section['resolved_content']['media'])) {
            $mediaList = $section['resolved_content']['media'] ?? [];
            if (is_array($mediaList)) {
                foreach ($mediaList as $m) {
                    if (!empty($m['media_url']) || !empty($m['media_file']) || !empty($m['page_link'])) {
                        $videos[] = $m;
                    }
                }
            }
        }
    }
}
if (empty($videos) && !empty($testimonial_data['data']['sections'][2]['resolved_content']['media'])) {
    $videos = $testimonial_data['data']['sections'][2]['resolved_content']['media'];
}

// Extract image testimonials dynamically
$image_testimonials = [];
if (!empty($testimonial_data['data']['sections']) && is_array($testimonial_data['data']['sections'])) {
    foreach ($testimonial_data['data']['sections'] as $section) {
        $secType = strtolower($section['section_type'] ?? $section['layout'] ?? '');
        $secTitle = strtolower($section['title'] ?? '');
        if ($secType === 'carousel' || strpos($secTitle, 'testimonial') !== false) {
            $items = $section['resolved_content']['items'] ?? [];
            if (!empty($items)) {
                $image_testimonials = $items;
                break;
            }
        }
    }
}
if (empty($image_testimonials)) {
    $image_testimonials = $home_data['data']['sections'][11]['resolved_content']['items'] ?? [];
}

function get_testimonial_embed_url($url) {
    if (empty($url)) return '';
    $url = trim($url);

    // RD playlist (Radio mix based on a video ID)
    if (preg_match('/[?&]list=RD([a-zA-Z0-9_-]{11})/i', $url, $mRd)) {
        return 'https://www.youtube.com/embed/' . $mRd[1];
    }

    // Standard playlist
    if (preg_match('/[?&]list=([^&#]+)/i', $url, $mList) && !preg_match('/[?&]v=([^&#]+)/i', $url)) {
        return 'https://www.youtube.com/embed/videoseries?list=' . $mList[1];
    }

    // Standard watch URL with ?v=...
    if (preg_match('/[?&]v=([^&#]+)/i', $url, $mV)) {
        return 'https://www.youtube.com/embed/' . $mV[1];
    }

    // youtu.be/<id>
    if (preg_match('/youtu\.be\/([^?&#]+)/i', $url, $mShort)) {
        return 'https://www.youtube.com/embed/' . $mShort[1];
    }

    // youtube.com/shorts/<id>
    if (preg_match('/youtube\.com\/shorts\/([^?&#]+)/i', $url, $mShorts)) {
        return 'https://www.youtube.com/embed/' . $mShorts[1];
    }

    // youtube.com/embed/<id>
    if (preg_match('/youtube\.com\/embed\/([^?&#]+)/i', $url, $mEmbed)) {
        return 'https://www.youtube.com/embed/' . $mEmbed[1];
    }

    // Vimeo
    if (preg_match('/vimeo\.com\/(?:channels\/(?:\w+\/)?|groups\/([^\/]*)\/videos\/|album\/(\d+)\/video\/|video\/|)(\d+)/i', $url, $mVimeo)) {
        return 'https://player.vimeo.com/video/' . $mVimeo[3];
    }

    return $url;
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $testimonial_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $testimonial_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $testimonial_data['data']['meta_keywords'] ?? "" ?>">
    <?php include "includes/head.php" ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.0.2/css/glide.core.min.css">
</head>

<body>
    <style>
        ul.glide__slides {
            display: flex;
            flex-wrap: nowrap;
            padding: 0;
            margin: 0;
            list-style: none;
            width: 100%;
        }

        .glide__slide {
            flex-shrink: 0 !important;
            height: auto;
            box-sizing: border-box;
        }

        .glide__track {
            overflow: hidden;
            width: 100%;
        }

        ul.tabs {
            padding: 0px;
            list-style: none;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 12px;
            margin-bottom: 20px;
        }

        ul.tabs li {
            color: #003618;
            display: inline-block;
            padding: 10px 22px;
            cursor: pointer;
            background: #ededed;
            border-radius: 6px;
            font-weight: 600;
            transition: all 0.2s ease;
        }

        @media (max-width: 640px) {
            ul.tabs li {
                font-size: 14px;
                padding: 8px 16px;
            }
        }

        ul.tabs li:hover {
            background: #dcdcdc;
        }

        ul.tabs li.current {
            background: #003618;
            color: #fff;
        }

        .tab-content {
            display: none;
            padding-top: 15px;
        }

        .tab-content.current {
            display: block !important;
        }

        .img-popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: transparent;
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .popup-content {
            background: rgba(0, 0, 0, 0.85);
            border-radius: 12px;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            animation: animatepopup 0.3s ease-in-out forwards;

         
            width: 50vw;
            height: 90vh;
        }

        .popup-content img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            opacity: 0;
            transform: translateY(-100px);
            animation: animatepopup 0.3s ease-in-out forwards;
            border-radius: 10px;
        }

     
        @media (max-width: 640px) {
            .popup-content {
                width: 100vw;
                height: 50vh;
            }
        }

        .close-btn {
            width: 35px;
            height: 30px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            position: absolute;
            top: 20px;
            right: 20px;
            cursor: pointer;
        }

        .close-btn .bar {
            height: 4px;
            background: #fff;
            border-radius: 2px;
        }

        .close-btn .bar:nth-child(1) {
            transform: rotate(45deg);
        }

        .close-btn .bar:nth-child(2) {
            transform: translateY(-4px) rotate(-45deg);
        }

        .img-popup.opened {
            display: flex;
        }

        @keyframes animatepopup {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .mySwiper .swiper-pagination-bullet {
            background-color: #003618 !important;
        }

        .mySwiper .swiper-pagination-bullet-active {
            background-color: #002A5B !important;
        }

        @media (max-width: 640px) {
            .swiper {
                box-shadow: none !important;
            }

            .swiper-slide {
                box-shadow: none !important;
            }

            .swiper-wrapper {
                margin: 0 !important;
            }
        }

        .clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .expanded {
            max-height: 200px;
            overflow-y: auto;
            overflow-x: hidden;
            display: block;
            -webkit-line-clamp: unset;
            white-space: normal;
        }
    </style>

    <?php include "includes/header.php" ?>

    <div class="main relative  mb-[40px] sm:mb-[120px] ">
        <div class="brud-image bg-top flex items-center text-center h-[300px]">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    Testimonials
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    Testimonials
                </h1>
            </div>
        </div>

        <div class="flex m-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="/" class="inline-flex items-center sm:text-sm text-xs font-medium text-blue-main">
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="testimonial"
                            class="ms-1 sm:text-sm text-xs font-medium text-blue-main">Testimonials</a>
                    </div>
                </li>
            </ol>
        </div>

        <div class="my-10">
            <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
                <div class="relative sm:mt-12 mt-6" id="testimonials">
                    <div class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 px-3">

                        <div class="relative sm:pt-5 pt-2">

                            <ul class="tabs">
                                <li class="tab-link current" data-tab="tab-1">Image Testimonials</li>
                                <li class="tab-link" data-tab="tab-2">Video Testimonials</li>
                            </ul>

                            <!-- Tab 1: Image Testimonials -->
                            <div id="tab-1" class="tab-content current relative glide-image-testimonials">
                                <div class="glide__track overflow-hidden" data-glide-el="track">
                                    <ul class="glide__slides">
                                        <?php
                                        if (empty($image_testimonials)) {
                                            echo '<li class="glide__slide w-full text-center py-8"><p class="text-gray-500">No testimonials available</p></li>';
                                        } else {
                                            foreach ($image_testimonials as $data) {
                                                $imgUrl = !empty($data['image_url']) ? ($api_url . '/' . ltrim($data['image_url'], '/')) : 'assets/images/placeholder.jpg';
                                                $title = $data['title'] ?? 'Parent';
                                                $rawDesc = $data['description'] ?? '';
                                                $cleanDesc = trim(html_entity_decode(strip_tags($rawDesc), ENT_QUOTES, 'UTF-8'));
                                                $cleanDesc = preg_replace('/Read\s*more\.{0,3}$/i', '', $cleanDesc);
                                                $words = explode(" ", $cleanDesc);
                                        ?>
                                            <li class="glide__slide">
                                                <div class="w-full h-full sm:flex items-start gap-3 p-4 rounded-xl border border-gray-300 bg-blue-main text-white shadow-md">
                                                    <div class="text-center sm:w-[35%] w-full flex-shrink-0">
                                                        <img src="<?= htmlspecialchars($imgUrl) ?>" alt="<?= cms_image_alt($data, $title); ?>"
                                                            class="mb-2 mx-auto rounded-[10px] w-[120px] h-[120px] object-cover border-2 border-white/20">
                                                        <h2 class="font-[700] text-[15px] text-gray-100 leading-snug">
                                                            <?= htmlspecialchars($title) ?></h2>
                                                    </div>
                                                    <div class="sm:w-[65%] w-full sm:mt-0 mt-3 sm:text-left text-center flex-1 flex flex-col justify-between">
                                                        <p class="testimonial-text text-[15px] text-gray-200 text-center sm:text-left clamp-2 leading-relaxed">
                                                            <?= htmlspecialchars($cleanDesc) ?>
                                                        </p>
                                                        <?php if (count($words) > 25): ?>
                                                            <button type="button" class="moreless-button font-[600] text-yellow-300 hover:text-yellow-400 text-sm mt-2 text-left sm:self-start self-center">Read more...</button>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <!-- Controls -->
                                <div class="absolute left-0 items-center justify-between w-full h-0 px-2 top-1/2 -translate-y-1/2 flex pointer-events-none" data-glide-el="controls">
                                    <button class="pointer-events-auto inline-flex items-center justify-center -ml-3 sm:-ml-6 hover:bg-[#FED72B] w-9 h-9 sm:w-10 sm:h-10 transition duration-300 border border-gray-300 rounded-full text-[#003618] hover:text-black focus:outline-none bg-white shadow-md"
                                        data-glide-dir="<" aria-label="Previous slide">
                                        <i class="fa-solid fa-angle-left text-base sm:text-lg"></i>
                                    </button>
                                    <button class="pointer-events-auto inline-flex items-center justify-center -mr-3 sm:-mr-6 hover:bg-[#FED72B] w-9 h-9 sm:w-10 sm:h-10 transition duration-300 border border-gray-300 rounded-full text-[#003618] hover:text-black focus:outline-none bg-white shadow-md"
                                        data-glide-dir=">" aria-label="Next slide">
                                        <i class="fa-solid fa-angle-right text-base sm:text-lg"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Tab 2: Video Testimonials -->
                            <div id="tab-2" class="tab-content relative glide-video-testimonials">
                                <div class="glide__track overflow-hidden" data-glide-el="track">
                                    <ul class="glide__slides pb-2">
                                        <?php
                                        if (empty($videos)) {
                                            echo '<li class="glide__slide w-full text-center py-8"><p class="text-gray-500">No video testimonials available</p></li>';
                                        } else {
                                            foreach ($videos as $video) {
                                                $videoUrl = $video["media_url"] ?? $video["page_link"] ?? '';
                                                $mediaFile = !empty($video["media_file"]) ? ((strpos($video["media_file"], 'http') === 0) ? $video["media_file"] : ($api_url . '/' . ltrim($video["media_file"], '/'))) : '';
                                                $embedUrl = get_testimonial_embed_url($videoUrl);
                                                $caption = $video['caption'] ?? $video['media_alt_text'] ?? '';
                                        ?>
                                            <li class="glide__slide">
                                                <div class="w-full h-full rounded-2xl shadow-lg border border-gray-200 bg-white sm:p-4 p-2 overflow-hidden flex flex-col justify-between">
                                                    <?php if (!empty($embedUrl)): ?>
                                                        <div class="w-full aspect-video h-[230px] sm:h-[280px] rounded-xl overflow-hidden bg-black">
                                                            <iframe class="w-full h-full"
                                                                src="<?= htmlspecialchars($embedUrl); ?>"
                                                                title="Video Testimonial"
                                                                frameborder="0"
                                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                                allowfullscreen></iframe>
                                                        </div>
                                                    <?php elseif (!empty($mediaFile)): ?>
                                                        <div class="w-full aspect-video h-[230px] sm:h-[280px] rounded-xl overflow-hidden bg-black">
                                                            <video class="w-full h-full object-cover" controls src="<?= htmlspecialchars($mediaFile); ?>"></video>
                                                        </div>
                                                    <?php else: ?>
                                                        <div class="w-full h-[230px] sm:h-[280px] rounded-xl bg-gray-100 flex items-center justify-center text-gray-400">
                                                            <p>Video unavailable</p>
                                                        </div>
                                                    <?php endif; ?>

                                                    <?php if (!empty($caption)): ?>
                                                        <div class="mt-2 px-1">
                                                            <p class="text-sm text-gray-700 font-semibold text-center"><?= htmlspecialchars($caption); ?></p>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </li>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <!-- Controls -->
                                <div class="absolute left-0 items-center justify-between w-full h-0 px-2 top-1/2 -translate-y-1/2 flex pointer-events-none" data-glide-el="controls">
                                    <button class="pointer-events-auto inline-flex items-center justify-center -ml-3 sm:-ml-6 hover:bg-[#FED72B] w-9 h-9 sm:w-10 sm:h-10 transition duration-300 border border-gray-300 rounded-full text-[#003618] hover:text-black focus:outline-none bg-white shadow-md"
                                        data-glide-dir="<" aria-label="Previous slide">
                                        <i class="fa-solid fa-angle-left text-base sm:text-lg"></i>
                                    </button>
                                    <button class="pointer-events-auto inline-flex items-center justify-center -mr-3 sm:-mr-6 hover:bg-[#FED72B] w-9 h-9 sm:w-10 sm:h-10 transition duration-300 border border-gray-300 rounded-full text-[#003618] hover:text-black focus:outline-none bg-white shadow-md"
                                        data-glide-dir=">" aria-label="Next slide">
                                        <i class="fa-solid fa-angle-right text-base sm:text-lg"></i>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    <?php include "includes/footer.php" ?>
    <?php include "includes/foot.php" ?>

    <script>
        let glideImage = null;
        let glideVideo = null;

        function initImageSlider() {
            const el = document.querySelector('.glide-image-testimonials');
            if (!el) return;
            const slideCount = el.querySelectorAll('.glide__slide').length;
            if (!glideImage) {
                glideImage = new Glide('.glide-image-testimonials', {
                    type: slideCount > 2 ? 'carousel' : 'slider',
                    focusAt: 0,
                    perView: 2,
                    autoplay: 4000,
                    hoverpause: true,
                    animationDuration: 700,
                    gap: 20,
                    breakpoints: {
                        640: {
                            perView: 1,
                            gap: 12
                        }
                    }
                });
                glideImage.mount();
            } else {
                setTimeout(function() {
                    glideImage.update();
                }, 60);
            }
        }

        function initVideoSlider() {
            const el = document.querySelector('.glide-video-testimonials');
            if (!el) return;
            const slideCount = el.querySelectorAll('.glide__slide').length;
            if (!glideVideo) {
                glideVideo = new Glide('.glide-video-testimonials', {
                    type: slideCount > 2 ? 'carousel' : 'slider',
                    focusAt: 0,
                    perView: 2,
                    autoplay: false,
                    animationDuration: 700,
                    gap: 20,
                    breakpoints: {
                        640: {
                            perView: 1,
                            gap: 12
                        }
                    }
                });
                glideVideo.mount();
            } else {
                setTimeout(function() {
                    glideVideo.update();
                }, 60);
            }
        }

        function pauseVideos() {
            document.querySelectorAll('#tab-2 video').forEach(function(v) {
                v.pause();
            });
            document.querySelectorAll('#tab-2 iframe').forEach(function(iframe) {
                const src = iframe.getAttribute('src');
                if (src) {
                    iframe.setAttribute('src', src);
                }
            });
        }

        document.addEventListener("DOMContentLoaded", function () {
            // Mount Image Slider initially
            initImageSlider();

            // Tab Switching
            const tabs = document.querySelectorAll(".tab-link");
            const contents = document.querySelectorAll(".tab-content");

            tabs.forEach(tab => {
                tab.addEventListener("click", function () {
                    const tabId = this.getAttribute("data-tab");

                    tabs.forEach(t => t.classList.remove("current"));
                    contents.forEach(c => c.classList.remove("current"));

                    this.classList.add("current");
                    const activeContent = document.getElementById(tabId);
                    if (activeContent) {
                        activeContent.classList.add("current");
                    }

                    if (tabId === "tab-1") {
                        pauseVideos();
                        initImageSlider();
                    } else if (tabId === "tab-2") {
                        initVideoSlider();
                    }
                });
            });

            // Read More / Less Toggle
            const buttons = document.querySelectorAll(".moreless-button");
            buttons.forEach(button => {
                button.addEventListener("click", function () {
                    const para = this.previousElementSibling;
                    if (para) {
                        para.classList.toggle("expanded");
                        para.classList.toggle("clamp-2");
                        this.textContent = para.classList.contains("expanded") ? "Read less" : "Read more...";
                        if (glideImage) {
                            setTimeout(function() { glideImage.update(); }, 100);
                        }
                    }
                });
            });
        });
    </script>

</body>

</html>