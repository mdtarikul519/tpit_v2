@php
$meta = [
    // "meta" => [],
    "seo" => [
        "title" => "Tech Park IT",
        "image" => asset('seo.jpg'),
    ]
];
@endphp
@extends('frontend.layouts.layout',$meta)
@section('contents')

<!-- banner_part start -->
<section class="banner_part">
    <div class="container">
        <div class="banner_part_content">

            <!-- banner_part_left start -->
            <div class="banner_part_left">
                <!-- banner_title start -->
                <div class="banner_title">
                    <h2 class="banner_title_text">
                        <span class="title_bangla">আইটি প্রফেশনাল হয়ে উঠুন</span>
                        <span class="title_english"> Tech Park IT এর সাথে</span>
                    </h2>
                </div>
                <!-- banner_title end -->

                <!-- description start -->
                <div class="description">
                    <p>প্রফেশনাল ট্রেইনার । কোর্স শেষে ইন্টার্নশিপ । জবের ক্ষেত্রে সহযোগিতা</p>
                </div>
                <!-- description end -->

                <!-- button_area start -->
                <div class="button_area">

                    <div class="button_left">
                        <button class="button_all">
                            <span class="btn_img">
                                <!-- button image start-->
                                <svg width="25" height="18" viewBox="0 0 25 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path id="icon"
                                        d="M14.766 5.83848C14.766 5.70835 14.8124 5.57524 14.9051 5.43912C14.9978 5.30301 15.1033 5.20954 15.2215 5.15869C15.8003 4.92683 16.396 4.75108 17.0085 4.63144C17.621 4.51178 18.2571 4.45195 18.9167 4.45195C19.2981 4.45195 19.6671 4.47438 20.0239 4.51924C20.3806 4.56412 20.7399 4.62544 21.1019 4.70322C21.2395 4.73462 21.3584 4.80941 21.4586 4.92757C21.5588 5.04573 21.609 5.18334 21.609 5.3404C21.609 5.60364 21.5263 5.7962 21.361 5.9181C21.1958 6.04 20.9815 6.06953 20.7183 6.00671C20.4386 5.94838 20.148 5.9065 19.8466 5.88109C19.5453 5.85565 19.2353 5.84294 18.9167 5.84294C18.3513 5.84294 17.7975 5.89716 17.2553 6.0056C16.7131 6.11404 16.1959 6.26099 15.7038 6.44645C15.4286 6.55266 15.2035 6.54668 15.0285 6.42852C14.8535 6.31035 14.766 6.11367 14.766 5.83848ZM14.766 12.2103C14.766 12.0801 14.8124 11.9451 14.9051 11.8053C14.9978 11.6655 15.1033 11.5701 15.2215 11.5192C15.7853 11.2874 16.381 11.1135 17.0085 10.9976C17.636 10.8817 18.272 10.8237 18.9167 10.8237C19.2981 10.8237 19.6671 10.8462 20.0239 10.891C20.3806 10.9359 20.7399 10.9972 21.1019 11.075C21.2395 11.1064 21.3584 11.1812 21.4586 11.2994C21.5588 11.4175 21.609 11.5551 21.609 11.7122C21.609 11.9754 21.5263 12.168 21.361 12.2899C21.1958 12.4118 20.9815 12.4413 20.7183 12.3785C20.4386 12.3202 20.148 12.2783 19.8466 12.2529C19.5453 12.2274 19.2353 12.2147 18.9167 12.2147C18.3587 12.2147 17.8106 12.2678 17.2721 12.374C16.7336 12.4802 16.2184 12.6298 15.7263 12.8228C15.4511 12.9364 15.2222 12.9334 15.0397 12.8138C14.8573 12.6941 14.766 12.4929 14.766 12.2103ZM14.766 9.02438C14.766 8.89424 14.8124 8.75924 14.9051 8.6194C14.9978 8.47956 15.1033 8.38421 15.2215 8.33336C15.8003 8.10153 16.396 7.92765 17.0085 7.81172C17.621 7.69579 18.2571 7.63783 18.9167 7.63783C19.2981 7.63783 19.6671 7.66026 20.0239 7.70514C20.3806 7.75002 20.7399 7.81135 21.1019 7.88913C21.2395 7.92053 21.3584 7.99531 21.4586 8.11347C21.5588 8.23164 21.609 8.36924 21.609 8.52627C21.609 8.78953 21.5263 8.98211 21.361 9.104C21.1958 9.2259 20.9815 9.25544 20.7183 9.19261C20.4386 9.13428 20.148 9.0924 19.8466 9.06696C19.5453 9.04155 19.2353 9.02884 18.9167 9.02884C18.3587 9.02884 17.8106 9.08493 17.2721 9.1971C16.7336 9.30928 16.2184 9.46184 15.7263 9.65479C15.4511 9.76848 15.2222 9.7625 15.0397 9.63685C14.8573 9.51122 14.766 9.30706 14.766 9.02438ZM6.08334 14.1891C7.04959 14.1891 7.98966 14.2987 8.90355 14.5178C9.81744 14.7369 10.7246 15.0806 11.625 15.5487V4.07949C10.8054 3.54553 9.9184 3.14505 8.96413 2.87806C8.00985 2.61107 7.04959 2.47757 6.08334 2.47757C5.38334 2.47757 4.72933 2.53253 4.12132 2.64245C3.51332 2.75239 2.88848 2.93225 2.24681 3.18203C2.15706 3.21196 2.09348 3.25497 2.05609 3.31107C2.0187 3.36716 2 3.42886 2 3.49616V14.5301C2 14.6348 2.03739 14.7115 2.11218 14.7601C2.18698 14.8087 2.26926 14.8143 2.35902 14.7769C2.91242 14.5885 3.4965 14.4434 4.11123 14.3417C4.72597 14.24 5.38334 14.1891 6.08334 14.1891ZM13.375 15.5487C14.2754 15.0806 15.1826 14.7369 16.0965 14.5178C17.0103 14.2987 17.9504 14.1891 18.9167 14.1891C19.6167 14.1891 20.274 14.24 20.8888 14.3417C21.5035 14.4434 22.0876 14.5885 22.641 14.7769C22.7307 14.8143 22.813 14.8087 22.8878 14.7601C22.9626 14.7115 23 14.6348 23 14.5301V3.49616C23 3.42886 22.9813 3.36903 22.9439 3.31667C22.9065 3.2643 22.843 3.21943 22.7532 3.18203C22.1115 2.93225 21.4867 2.75239 20.8787 2.64245C20.2707 2.53253 19.6167 2.47757 18.9167 2.47757C17.9504 2.47757 16.9902 2.61107 16.0359 2.87806C15.0816 3.14505 14.1946 3.54553 13.375 4.07949V15.5487ZM12.5 17.6262C12.2727 17.6262 12.0599 17.5978 11.8617 17.541C11.6635 17.4842 11.4762 17.4086 11.2997 17.3144C10.4965 16.8597 9.65626 16.5168 8.77901 16.2857C7.90177 16.0546 7.00321 15.9391 6.08334 15.9391C5.37138 15.9391 4.67214 16.018 3.98561 16.1758C3.29907 16.3335 2.63721 16.5658 2.00003 16.8724C1.58423 17.0638 1.18862 17.0335 0.813182 16.7815C0.437768 16.5295 0.250061 16.1724 0.250061 15.7102V3.04297C0.250061 2.79169 0.314743 2.55574 0.444107 2.33512C0.57349 2.1145 0.760089 1.95559 1.0039 1.85836C1.79364 1.47397 2.61665 1.18941 3.47295 1.00468C4.32924 0.819961 5.19937 0.7276 6.08334 0.7276C7.2186 0.7276 8.32768 0.882786 9.41058 1.19316C10.4935 1.50351 11.5233 1.96157 12.5 2.56735C13.4767 1.96157 14.5065 1.50351 15.5894 1.19316C16.6723 0.882786 17.7814 0.7276 18.9167 0.7276C19.8006 0.7276 20.6708 0.819961 21.5271 1.00468C22.3834 1.18941 23.2064 1.47397 23.9961 1.85836C24.2399 1.95559 24.4265 2.1145 24.5559 2.33512C24.6853 2.55574 24.75 2.79169 24.75 3.04297V15.7102C24.75 16.1724 24.5548 16.5257 24.1644 16.7703C23.774 17.0148 23.3634 17.0414 22.9327 16.8499C22.3029 16.5508 21.6504 16.3242 20.9751 16.1702C20.2998 16.0161 19.6137 15.9391 18.9167 15.9391C17.9968 15.9391 17.0982 16.0546 16.221 16.2857C15.3437 16.5168 14.5035 16.8597 13.7003 17.3144C13.5238 17.4086 13.3365 17.4842 13.1383 17.541C12.9401 17.5978 12.7273 17.6262 12.5 17.6262Z"
                                        fill="white" />
                                </svg>
                                <!-- button image end-->
                            </span>
                            <span class="btn_text">
                                কোর্স দেখুন
                            </span>
                        </button>
                    </div>

                    <div class="button_right">
                        <button class="button_all">
                            আমাদের আইটি সার্ভিস
                        </button>
                    </div>

                </div>
                <!-- button_area end -->

            </div>
            <!-- banner_part_left end -->

            <!-- banner_part_right start -->
            <div class="banner_part_right">
                <!-- banner_img start -->
                <div class="banner_img">
                    <img src="{{ asset('frontend') }}/assets/images/home_page_image/banner_image/student.png" alt="studdent,  tech park it">
                </div>
                <!-- banner_img end -->

                <!-- banner_part_right_content start -->
                <div class="banner_part_right_content">

                    <div class="right_area_content certificate">
                        <span class="left_site">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/banner_image/certificate.png"
                                alt="certificate, tech park it">
                        </span>
                        <span class="right_site">
                            কোর্স শেষে <br> সার্টিফিকেট
                        </span>
                    </div>

                    <div class="right_area_content support">
                        <span class="left_site">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/banner_image/support.png"
                                alt="support, tech park it">
                        </span>
                        <span class="right_site">
                            সার্বক্ষণিক <br> সাপোর্ট
                        </span>
                    </div>

                    <div class="right_area_content quiz">
                        <span class="left_site">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/banner_image/quiz.png" alt="quiz, tech park it">
                        </span>
                        <span class="right_site">
                            বিষয়ভিত্তিক <br> কুইজ
                        </span>
                    </div>

                    <div class="right_area_content live_class">
                        <span class="left_site">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/banner_image/live_class.png"
                                alt="live_class, tech park it">
                        </span>
                        <span class="right_site">
                            লাইভ ও <br> রেকর্ডেড ক্লাস
                        </span>
                    </div>

                </div>
                <!-- banner_part_right_content end -->

            </div>
            <!-- banner_part_right end -->

        </div>
    </div>
</section>
<!-- banner_part end -->

<!-- course_item start -->
<section class="course_item">
    <div class="container">
        <div class="course_item_content">

            <!-- course item_1 start -->
            <div class="course item_1">
                <a href="#">
                    <div class="course_icon">
                        <svg width="106" height="106" viewBox="0 0 106 106" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path id="icon_course"
                                d="M102.895 0H90.2656C88.5491 0 87.1602 1.38897 87.1602 3.10547V6.21094H61.7444C60.4581 2.60404 57.0433 0 53 0C48.9567 0 45.5419 2.60404 44.2556 6.21094H18.8398V3.10547C18.8398 1.38897 17.4509 0 15.7344 0H3.10547C1.38897 0 0 1.38897 0 3.10547V15.5273C0 17.2438 1.38897 18.6328 3.10547 18.6328H15.7344C17.4509 18.6328 18.8398 17.2438 18.8398 15.5273V12.3805H31.5938C20.8164 19.1133 13.71 30.9387 12.8606 44.1836C9.13443 45.4032 6.41797 48.8718 6.41797 53C6.41797 58.1373 10.5971 62.3164 15.7344 62.3164C20.8716 62.3164 25.0508 58.1373 25.0508 53C25.0508 49.0374 22.5538 45.6684 19.0593 44.3239C20.1189 29.5574 30.4224 17.1115 44.7546 13.5605C46.3046 16.5577 49.3991 18.6328 53 18.6328C56.6009 18.6328 59.6954 16.5577 61.2454 13.5605C75.5776 17.1113 85.8811 29.5572 86.9407 44.3237C83.4462 45.6684 80.9492 49.0374 80.9492 53C80.9492 58.1373 85.1283 62.3164 90.2656 62.3164C95.4029 62.3164 99.582 58.1373 99.582 53C99.582 48.8718 96.8656 45.4032 93.1394 44.1836C92.29 30.9387 85.1836 19.1547 74.4062 12.4219H87.1602V15.5273C87.1602 17.2438 88.5491 18.6328 90.2656 18.6328H102.895C104.611 18.6328 106 17.2438 106 15.5273V3.10547C106 1.38897 104.611 0 102.895 0ZM74.1275 102.148C72.5032 97.1776 67.8234 93.3711 62.3164 93.3711H43.6836C38.1766 93.3711 33.4968 97.1776 31.8725 102.148C31.2462 104.065 32.8766 106 34.893 106H71.1069C73.1232 106 74.7538 104.065 74.1275 102.148Z"
                                fill="#EF4444" />
                            <path id="icon_course"
                                d="M80.4275 63.6993L56.1055 27.2161V56.6774C59.7124 57.9637 62.3164 61.3785 62.3164 65.4218C62.3164 70.5591 58.1373 74.7382 53 74.7382C47.8628 74.7382 43.6836 70.5591 43.6836 65.4218C43.6836 61.3785 46.2877 57.9637 49.8946 56.6774V27.2161L25.5725 63.6993C24.7506 64.9305 24.9144 66.5713 25.9607 67.6176C31.6617 73.3186 35.3059 80.663 36.7123 88.5412C38.8695 87.6661 41.2158 87.1601 43.6836 87.1601H62.3164C64.7842 87.1601 67.1305 87.6659 69.2878 88.5408C70.6942 80.6622 74.3383 73.3186 80.0393 67.6176C81.0857 66.5713 81.2494 64.9305 80.4275 63.6993Z"
                                fill="#EF4444" />
                            <path id="icon_course"
                                d="M53 62.3164C51.2866 62.3164 49.8945 63.7085 49.8945 65.4219C49.8945 67.1353 51.2866 68.5273 53 68.5273C54.7134 68.5273 56.1055 67.1353 56.1055 65.4219C56.1055 63.7085 54.7134 62.3164 53 62.3164Z"
                                fill="#EF4444" />
                        </svg>

                    </div>
                    <div class="course_text_area">
                        <span class="course_text">গ্রাফিক্স ডিজাইন</span>
                    </div>
                </a>
            </div>
            <!-- course item_1 end -->

            <!-- course item_2 start -->
            <div class="course item_2">
                <a href="#">
                    <div class="course_icon">
                        <svg width="106" height="106" viewBox="0 0 106 106" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path id="icon_course"
                                d="M106 25.0508V9.52344C106 4.38637 101.821 0.207031 96.6836 0.207031H9.31641C4.17934 0.207031 0 4.38637 0 9.52344V25.0508H106ZM71.6328 12.6289H90.2656C91.9807 12.6289 93.3711 14.0193 93.3711 15.7344C93.3711 17.4494 91.9807 18.8398 90.2656 18.8398H71.6328C69.9178 18.8398 68.5273 17.4494 68.5273 15.7344C68.5273 14.0193 69.9178 12.6289 71.6328 12.6289ZM40.5781 12.6289C42.2932 12.6289 43.6836 14.0193 43.6836 15.7344C43.6836 17.4494 42.2932 18.8398 40.5781 18.8398C38.8631 18.8398 37.4727 17.4494 37.4727 15.7344C37.4727 14.0193 38.8631 12.6289 40.5781 12.6289ZM28.1562 12.6289C29.8713 12.6289 31.2617 14.0193 31.2617 15.7344C31.2617 17.4494 29.8713 18.8398 28.1562 18.8398C26.4412 18.8398 25.0508 17.4494 25.0508 15.7344C25.0508 14.0193 26.4412 12.6289 28.1562 12.6289ZM15.7344 12.6289C17.4494 12.6289 18.8398 14.0193 18.8398 15.7344C18.8398 17.4494 17.4494 18.8398 15.7344 18.8398C14.0193 18.8398 12.6289 17.4494 12.6289 15.7344C12.6289 14.0193 14.0193 12.6289 15.7344 12.6289ZM0 31.2617V96.4766C0 101.614 4.17934 105.793 9.31641 105.793H96.6836C101.821 105.793 106 101.614 106 96.4766V31.2617H0ZM36.3071 75.4188C37.6466 76.4902 37.8635 78.4443 36.7921 79.7836C35.721 81.1227 33.7664 81.3401 32.4273 80.2685L16.9 67.8466C15.3474 66.6051 15.3464 64.2393 16.9 62.9967L32.4273 50.5748C33.766 49.5034 35.7206 49.7204 36.7921 51.0597C37.8635 52.399 37.6466 54.3534 36.3071 55.4245L23.8111 65.4219L36.3071 75.4188ZM65.1707 44.9069L46.5379 88.3835C45.8624 89.9596 44.0372 90.6905 42.4602 90.0145C40.8839 89.339 40.1535 87.5131 40.8293 85.9368L59.4621 42.4602C60.1378 40.8839 61.9634 40.1537 63.5398 40.8293C65.1161 41.5048 65.8465 43.3304 65.1707 44.9069ZM89.1 67.8468L73.5727 80.2687C72.2357 81.3386 70.2809 81.125 69.2079 79.7838C68.1365 78.4446 68.3534 76.4902 69.6929 75.419L82.1889 65.4219L69.6929 55.425C68.3534 54.3536 68.1365 52.3994 69.2079 51.0601C70.279 49.7208 72.2334 49.5037 73.5727 50.5752L89.1 62.9971C90.6526 64.2387 90.6536 66.6042 89.1 67.8468Z"
                                fill="white" />
                        </svg>


                        <!-- <svg width="106" height="106" viewBox="0 0 106 106" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M93.6334 3.8477C93.6334 2.61421 93.0069 1.49065 91.9577 0.842227C90.9082 0.193598 89.6232 0.13563 88.5197 0.687575L80.3832 4.75574V50.9223C80.3832 51.3908 80.1971 51.8401 79.8658 52.1714C79.5345 52.5027 79.0851 52.6889 78.6166 52.6889C78.1481 52.6889 77.6987 52.5027 77.3674 52.1714C77.0361 51.8401 76.85 51.3908 76.85 50.9223V6.52234L45.9334 21.9805V60.4304L88.5199 81.7235C89.6236 82.2753 90.9085 82.2173 91.9579 81.5689C93.0071 80.9205 93.6336 79.7969 93.6336 78.5634L93.6334 3.8477ZM9.7166 32.3723H8.8332C3.96258 32.3723 0 36.3348 0 41.2055C0 46.0761 3.96258 50.0389 8.8334 50.0389H9.7168L9.7166 32.3723ZM34.9875 103.195C35.4464 104.686 36.8035 105.689 38.3645 105.689H46.7075C47.8406 105.689 48.8764 105.166 49.5496 104.255C50.2227 103.343 50.4177 102.199 50.0844 101.117L38.4451 63.2889H22.7086L34.9875 103.195ZM20.3319 59.7555H42.4V22.6555H20.3168C16.4201 22.6555 13.25 25.8255 13.25 29.7223V52.6889C13.25 56.5846 16.4184 59.7538 20.3137 59.7555H20.3319ZM97.1666 27.2221V55.1888C102.173 54.3449 106 49.9817 106 44.7389V37.6723C106 32.4294 102.173 28.066 97.1666 27.2221Z"
                                    fill="#EF4444" />
                            </svg> -->

                    </div>
                    <div class="course_text_area">
                        <span class="course_text">ওয়েব ডেভোলাপমেন্ট</span>
                    </div>
                </a>
            </div>
            <!-- course item_2 end -->

            <!-- course item_3 start -->
            <div class="course item_3">
                <a href="#">
                    <div class="course_icon">
                        <svg width="106" height="106" viewBox="0 0 106 106" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path id="icon_course"
                                d="M93.6334 3.8477C93.6334 2.61421 93.0069 1.49065 91.9577 0.842227C90.9082 0.193598 89.6232 0.13563 88.5197 0.687575L80.3832 4.75574V50.9223C80.3832 51.3908 80.1971 51.8401 79.8658 52.1714C79.5345 52.5027 79.0851 52.6889 78.6166 52.6889C78.1481 52.6889 77.6987 52.5027 77.3674 52.1714C77.0361 51.8401 76.85 51.3908 76.85 50.9223V6.52234L45.9334 21.9805V60.4304L88.5199 81.7235C89.6236 82.2753 90.9085 82.2173 91.9579 81.5689C93.0071 80.9205 93.6336 79.7969 93.6336 78.5634L93.6334 3.8477ZM9.7166 32.3723H8.8332C3.96258 32.3723 0 36.3348 0 41.2055C0 46.0761 3.96258 50.0389 8.8334 50.0389H9.7168L9.7166 32.3723ZM34.9875 103.195C35.4464 104.686 36.8035 105.689 38.3645 105.689H46.7075C47.8406 105.689 48.8764 105.166 49.5496 104.255C50.2227 103.343 50.4177 102.199 50.0844 101.117L38.4451 63.2889H22.7086L34.9875 103.195ZM20.3319 59.7555H42.4V22.6555H20.3168C16.4201 22.6555 13.25 25.8255 13.25 29.7223V52.6889C13.25 56.5846 16.4184 59.7538 20.3137 59.7555H20.3319ZM97.1666 27.2221V55.1888C102.173 54.3449 106 49.9817 106 44.7389V37.6723C106 32.4294 102.173 28.066 97.1666 27.2221Z"
                                fill="#EF4444" />
                        </svg>


                    </div>
                    <div class="course_text_area">
                        <span class="course_text">ডিজিটাল মার্কেটিং</span>
                    </div>
                </a>
            </div>
            <!-- course item_1 end -->

        </div>
    </div>
</section>
<!-- course_item end -->

<!-- our_course area start -->
<section class="our_course_area">
    <div class="container">
        <div class="our_course_area_content">

            <!-- our_course_area_title start -->
            <div class="our_course_area_title">
                <h2 class="area_title">
                    আমাদের কোর্সসমূহ
                </h2>
            </div>
            <!-- our_course_area_title end -->

            <!-- course_schedule_name start-->
            <div class="course_schedule_name">
                <ul>
                    <li>
                        <a href="#">সকল কোর্স</a>
                    </li>
                    <li>
                        <a href="#">অনলাইন কোর্স</a>
                    </li>
                    <li>
                        <a href="#">অফলাইন কোর্স</a>
                    </li>
                    <li>
                        <a href="#">ডে-কেয়ার কোর্স</a>
                    </li>
                </ul>
            </div>
            <!-- course_schedule_name end-->

            <!-- our_course_all_card start -->
            <div class="our_course_all_card">
                <!-- <div class="row"> -->
                <!-- <div class="col-4"> -->
                <!-- graphic_designer card area start-->
                <div class="c_card graphic_designer">
                    <!-- card_img start -->
                    <a href="#" class="card_img_area">
                        <div class="card_img">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/our_course_area/grafix.png"
                                alt="graphic_designer, tech park it">
                        </div>
                    </a>
                    <!-- card_img end -->

                    <!-- card_title_area start -->
                    <div class="card_title_area">
                        <!-- card_title start -->
                        <a href="#" class="card_title">
                            <p class="title_text">প্রফেশনাল গ্রাফিক্স ডিজাইন</p>
                        </a>
                        <!-- card_title end -->


                        <div>

                            <!-- day_and_boking_area start -->
                            <div class="day_and_boking_area">
                                <div class="day_area">
                                    <span class="day_icon">
                                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/our_course_area/clock.png"
                                            alt="clock, tech park it">
                                    </span>
                                    <span class="day_tex">
                                        ১৪ দিন বাকী
                                    </span>
                                </div>
                                <div class="boking_area">
                                    <span class="boking_text">
                                        ৬৮%
                                    </span>
                                    <span class="boking_text">
                                        বুকড
                                    </span>
                                </div>
                            </div>
                            <!-- day_and_boking_area end -->

                            <!-- amount_and_button_area start -->
                            <div class="amount_and_button_area">
                                <!-- all_amount area start -->
                                <div class="all_amount">
                                    <div class="previous_amount_area">
                                        <p class="previous_amount">
                                            <span class="taka"> ৳ </span>
                                            <span class="taka">২০,০০০</span>
                                        </p>
                                    </div>
                                    <div class="current_amount_area">
                                        <p class="current_amount">
                                            <span class="taka"> ৳ </span>
                                            <span class="taka"> ১০,০০০</span>
                                        </p>
                                    </div>
                                </div>
                                <!-- all_amount area end -->

                                <!-- button_area start -->
                                <button class="button_all">
                                    <span class="btn-text">কোর্সটি দেখি</span>
                                    <span class="btn_icon">
                                        <i class="fa-solid fa-arrow-right"></i>
                                        <!-- <img src="{{ asset('frontend') }}/assets/images/home_page_image/our_course_area/arrow.png"
                               alt="arrow, tech park it"> -->
                                    </span>
                                </button>
                                <!-- button_area end-->
                            </div>
                            <!-- amount_and_button_area end -->

                        </div>

                    </div>
                    <!-- card_title_area end -->
                </div>
                <!-- graphic_designer card area end-->
                <!-- </div> -->
                <!-- <div class="col-4"> -->
                <!-- web card area start-->
                <div class="c_card web">
                    <!-- card_img start -->
                    <a href="#" class="card_img_area">
                        <div class="card_img">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/our_course_area/web.png"
                                alt="graphic_designer, tech park it">
                        </div>
                    </a>
                    <!-- card_img end -->

                    <!-- card_title_area start -->
                    <div class="card_title_area">
                        <!-- card_title start -->
                        <a href="#" class="card_title">
                            <p class="title_text">Full Stack Web Development
                                with MERN</p>
                        </a>
                        <!-- card_title end -->


                        <div>
                            <!-- day_and_boking_area start -->
                            <div class="day_and_boking_area">
                                <div class="day_area">
                                    <span class="day_icon">
                                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/our_course_area/clock.png"
                                            alt="clock, tech park it">
                                    </span>
                                    <span class="day_tex">
                                        ১৪ দিন বাকী
                                    </span>
                                </div>
                                <div class="boking_area">
                                    <span class="boking_text">
                                        ৬৮%
                                    </span>
                                    <span class="boking_text">
                                        বুকড
                                    </span>
                                </div>
                            </div>
                            <!-- day_and_boking_area end -->

                            <!-- amount_and_button_area start -->
                            <div class="amount_and_button_area">
                                <!-- all_amount area start -->
                                <div class="all_amount">
                                    <div class="previous_amount_area">
                                        <p class="previous_amount">
                                            <span class="taka"> ৳ </span>
                                            <span class="taka">২০,০০০</span>
                                        </p>
                                    </div>
                                    <div class="current_amount_area">
                                        <p class="current_amount">
                                            <span class="taka"> ৳ </span>
                                            <span class="taka"> ১০,০০০</span>
                                        </p>
                                    </div>
                                </div>
                                <!-- all_amount area end -->

                                <!-- button_area start -->
                                <button class="button_all">
                                    <span class="btn-text">কোর্সটি দেখি</span>
                                    <span class="btn_icon">
                                        <i class="fa-solid fa-arrow-right"></i>

                                    </span>
                                </button>
                                <!-- button_area end-->
                            </div>
                            <!-- amount_and_button_area end -->
                        </div>

                    </div>
                    <!-- card_title_area end -->

                </div>
                <!-- web card area end-->
                <!-- </div> -->
                <!-- <div class="col-4"> -->
                <!-- degital marketing card area start-->
                <div class="c_card digital_marketing">
                    <!-- card_img start -->
                    <a href="#" class="card_img_area">
                        <div class="card_img">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/our_course_area/desital_marketing.png"
                                alt="graphic_designer, tech park it">
                        </div>
                    </a>
                    <!-- card_img end -->

                    <!-- card_title_area start -->
                    <div class="card_title_area">
                        <!-- card_title start -->
                        <a href="#" class="card_title">
                            <p class="title_text"> কমপ্লিট ডিজিটাল মার্কেটিং</p>
                        </a>
                        <!-- card_title end -->

                        <div>
                            <!-- day_and_boking_area start -->
                            <div class="day_and_boking_area">
                                <div class="day_area">
                                    <span class="day_icon">
                                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/our_course_area/clock.png"
                                            alt="clock, tech park it">
                                    </span>
                                    <span class="day_tex">
                                        ১৪ দিন বাকী
                                    </span>
                                </div>
                                <div class="boking_area">
                                    <span class="boking_text">
                                        ৬৮%
                                    </span>
                                    <span class="boking_text">
                                        বুকড
                                    </span>
                                </div>
                            </div>
                            <!-- day_and_boking_area end -->

                            <!-- amount_and_button_area start -->
                            <div class="amount_and_button_area">
                                <!-- all_amount area start -->
                                <div class="all_amount">
                                    <div class="previous_amount_area">
                                        <p class="previous_amount">
                                            <span class="taka"> ৳ </span>
                                            <span class="taka">২০,০০০</span>
                                        </p>
                                    </div>
                                    <div class="current_amount_area">
                                        <p class="current_amount">
                                            <span class="taka"> ৳ </span>
                                            <span class="taka"> ১০,০০০</span>
                                        </p>
                                    </div>
                                </div>
                                <!-- all_amount area end -->

                                <!-- button_area start -->
                                <button class="button_all">
                                    <span class="btn-text">কোর্সটি দেখি</span>
                                    <span class="btn_icon">
                                        <i class="fa-solid fa-arrow-right"></i>
                                        <!-- <img src="{{ asset('frontend') }}/assets/images/home_page_image/our_course_area/arrow.png"
                alt="arrow, tech park it"> -->
                                    </span>
                                </button>
                                <!-- button_area end-->
                            </div>
                            <!-- amount_and_button_area end -->
                        </div>

                    </div>
                    <!-- card_title_area end -->

                </div>
                <!-- degital marketing card area end-->
                <!-- </div> -->
            </div>
        </div>
        <!-- our_course_all_card end -->
    </div>
    </div>
</section>
<!-- our_course area end -->

<!-- our_course_specialty area start -->
<section class="our_course_specialty"
    style="background-image: url({{ asset('frontend') }}/assets/images/home_page_image/our_course_specialty/bg_img.png);">
    <div class="container">
        <div class="our_course_specialty_area_content">

            <!--our_course_specialty_area_title start -->
            <div class="our_course_specialty_area_title">
                <h2 class="area_title">
                    আমাদের কোর্সসমূহের বিশেষত্ব
                </h2>
            </div>
            <!-- our_course_specialty_area_title end -->

            <!-- course_card_area start -->
            <div class="course_card_area">

                <!-- card start -->
                <div class="c_card card_1">
                    <div class="card_img_area">
                        <div class="card_img">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/our_course_specialty/support.png" alt="card tech park it
                                ">
                        </div>
                    </div>
                    <div class="card_text">
                        <p>সার্বক্ষণিক সাপোর্ট</p>
                    </div>
                </div>
                <!-- card end -->
                <!-- card start -->
                <div class="c_card card_2">
                    <div class="card_img_area">
                        <div class="card_img">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/our_course_specialty/live.png" alt="card tech park it
                                ">
                        </div>
                    </div>
                    <div class="card_text">
                        <p>সার্বক্ষণিক সাপোর্ট</p>
                    </div>
                </div>
                <!-- card end -->
                <!-- card start -->
                <div class="c_card card_3">
                    <div class="card_img_area">
                        <div class="card_img">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/our_course_specialty/quiz.png" alt="card tech park it
                                ">
                        </div>
                    </div>
                    <div class="card_text">
                        <p>সার্বক্ষণিক সাপোর্ট</p>
                    </div>
                </div>
                <!-- card end -->
                <!-- card start -->
                <div class="c_card card_4">
                    <div class="card_img_area">
                        <div class="card_img">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/our_course_specialty/tainer.png" alt="card tech park it
                                ">
                        </div>
                    </div>
                    <div class="card_text">
                        <p>সার্বক্ষণিক সাপোর্ট</p>
                    </div>
                </div>
                <!-- card end -->
                <!-- card start -->
                <div class="c_card card_5">
                    <div class="card_img_area">
                        <div class="card_img">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/our_course_specialty/certificate.png" alt="card tech park it
                                ">
                        </div>
                    </div>
                    <div class="card_text">
                        <p>সার্বক্ষণিক সাপোর্ট</p>
                    </div>
                </div>
                <!-- card end -->


            </div>
            <!-- course_card_area end -->

        </div>
    </div>
</section>
<!-- our_course_specialty area end -->

<!-- earning_area start -->
<section class="earning_area">
    <div class="container">
        <div class="earning_area_content">

            <!-- earning_area_title start -->
            <div class="earning_area_title">
                <h2 class="area_title">
                    কোর্স শেষেই আর্নিং শুরু করুন
                </h2>
            </div>
            <!-- earning_area_title end -->

            <!-- earning_area_sub_title start -->
            <div class="earning_area_sub_title">
                <p class="sub_title">আমাদের কোর্স মডিউল এমনভাবে সাজানো যে স্টুডেন্টরা কোর্স কমপ্লিট করার
                    সাথে সাথেই জব-রেডি হয়ে যায়</p>
            </div>
            <!-- earning_area_sub_title end -->

            <!-- earning_area_bottom start -->
            <div class="earning_area_bottom">
                <ul>
                    <li class="one">
                        <div class="step_number">
                            <a href="#">1</a>

                            <div class="right_arrow_area arrow_area_1">
                                <div class="right_arrow arrow_1">
                                    <!-- <hr class="stain"> -->
                                    <i class="fa-solid fa-angle-right"></i>
                                </div>
                            </div>
                        </div>

                        <p class="bottom_text">কোর্সে জয়েন করুন</p>
                    </li>
                    <!-- <li>
                            <div class="arrow">
                                <img src="{{ asset('frontend') }}/assets/images/home_page_image/earning_area/Arrow 1.png" alt="arrow tech park it">
                            </div>
                        </li> -->
                    <li>
                        <div class="step_number step_two">
                            <a href="#">2</a>
                            <div class="right_arrow_area arrow_area_2">
                                <div class="right_arrow  arrow_2">
                                    <!-- <hr class="stain"> -->
                                    <i class="fa-solid fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                        <p class="bottom_text">কোর্স কমপ্লিট করুন</p>
                    </li>
                    <!-- <li>
                            <div class="arrow">
                                <img src="{{ asset('frontend') }}/assets/images/home_page_image/earning_area/Arrow 2.png" alt="arrow tech park it">
                            </div>
                        </li> -->
                    <li>
                        <div class="step_number step_three">
                            <a href="#">3</a>
                            <div class="right_arrow_area arrow_area_3">
                                <div class="right_arrow arrow_3">
                                    <!-- <hr class="stain"> -->
                                    <i class="fa-solid fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                        <p class="bottom_text">কোর্সের টাস্কগুলো পোর্টফোলিওতে শেয়ার করুন</p>
                    </li>
                    <!-- <li>
                            <div class="arrow">
                                <img src="{{ asset('frontend') }}/assets/images/home_page_image/earning_area/Arrow 2.png" alt="arrow tech park it">
                            </div>
                        </li> -->
                    <li>
                        <div class="step_number">
                            <a href="#">4</a>
                        </div>
                        <p class="bottom_text">গেট Hired</p>
                    </li>
                </ul>
            </div>
            <!-- earning_area_bottom end -->

        </div>
    </div>
</section>
<!-- earning_area end -->

<!-- Student success history arer start -->
<section class="student_success_history_area">
    <div class="container">
        <div class="student_success_history_content">

            <!--student_success_history_area_title start -->
            <div class="student_success_history_area_title">
                <h2 class="area_title">
                    শিক্ষার্থীদের সাকসেস স্টোরি
                </h2>
            </div>
            <!-- student_success_history_area_title end -->

            <!-- student_success_history_area_sub_title start -->
            <div class="student_success_history_area_sub_title">
                <span class="sub_title">
                    আমাদের শিক্ষার্থীরা সফলতার সাথে কোর্স শেষ করে সফলতার সাথে ফ্রিলান্সিং ও জব করছে।
                </span>
                <span class="sub_title">
                    আমাদের শিক্ষার্থীদের মুখ থেকেই শুনুন তাদের সফলতার গল্প
                </span>
            </div>
            <!-- student_success_history_area_sub_title end -->

            <!-- student_success_video_area start -->
            <div class="student_success_video_area">
                <button class="success_video_area">
                    <div class="success_video_cover_photo">
                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/student_success_area/video_img.png"
                            alt="video_img tech park it">
                    </div>
                    <div class="video_button_icon">
                        <!-- <i class="fa-solid fa-circle-play"></i> -->
                        <i class="fa-solid fa-play"></i>
                    </div>
                </button>
                <button class="success_video_area">
                    <div class="success_video_cover_photo">
                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/student_success_area/video_img.png"
                            alt="video_img tech park it">
                    </div>
                    <div class="video_button_icon">
                        <!-- <i class="fa-solid fa-circle-play"></i> -->
                        <i class="fa-solid fa-play"></i>
                    </div>
                </button>
                <button class="success_video_area">
                    <div class="success_video_cover_photo">
                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/student_success_area/video_img.png"
                            alt="video_img tech park it">
                    </div>
                    <div class="video_button_icon">
                        <!-- <i class="fa-solid fa-circle-play"></i> -->
                        <i class="fa-solid fa-play"></i>
                    </div>
                </button>
                <button class="success_video_area">
                    <div class="success_video_cover_photo">
                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/student_success_area/video_img.png"
                            alt="video_img tech park it">
                    </div>
                    <div class="video_button_icon">
                        <!-- <i class="fa-solid fa-circle-play"></i> -->
                        <i class="fa-solid fa-play"></i>
                    </div>
                </button>
            </div>
            <!-- student_success_video_area end -->

            <!-- student_success_history_area_button start-->
            <div class="success_history_button_area">
                <button class="button_all">
                    <span class="btn_text">আরও দেখুন</span>
                    <span class="btn_icon"><i class="fa-solid fa-arrow-right"></i></span>
                </button>
            </div>
            <!-- student_success_history_area_button end-->

        </div>
    </div>
</section>
<!-- Student success history arer end -->

<!-- profational_trainer area start-->
<section class="profational_trainer_area">
    <div class="container">
        <div class="profational_trainer_area_content">
            <div class="row">

                <!-- left_area start -->
                <div class="col-xs-12 col-md-6">
                    <div class="left_area">
                        <div class="trainer_img">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/profational_trainer_area/traine.jpg"
                                alt="trainer tech park it">
                        </div>
                    </div>
                </div>
                <!-- left_area end -->

                <!-- right_area start -->
                <div class="col-xs-12 col-md-6">
                    <div class="right_area">
                        <div class="right_area_content">
                            <!-- profational_trainer_area title start -->
                            <div class="profational_trainer_area_title">
                                <h2 class="area_title">
                                    আমাদের প্রফেশনাল ট্রেইনারস
                                </h2>
                            </div>
                            <!-- profational_trainer_area title end -->

                            <!-- profational_trainer_area sub_title start -->
                            <div class="profational_trainer_area_sub_title">
                                <span class="sub_title sub1">
                                    আমাদের রয়েছেন প্রফেশনাল ট্রেইনারস, যারা প্রত্যেকেরই রয়েছে স্ব স্ব ক্ষেত্রে বেশ
                                    কয়েকবছর ধরে কোর্স করানোর অভিজ্ঞতা
                                </span>
                                <span class="sub_title">
                                    যাদের হাত ধরে বহু শিক্ষার্থী ফ্রিলানিং ও জব সেক্টরে সফলতার সাথে কাজ করছেন
                                </span>
                            </div>
                            <!-- profational_trainer_area sub_title end -->

                            <!-- profational_trainer_area_button start-->
                            <div class="profational_trainer_button_area">
                                <button class="button_all">
                                    <span class="btn_text">বিস্তারিত দেখুন</span>
                                    <span class="btn_icon"><i class="fa-solid fa-arrow-right"></i></span>
                                </button>
                            </div>
                            <!-- profational_trainer_area_button end-->
                        </div>
                    </div>
                </div>
                <!-- right_area end -->

            </div>

        </div>
    </div>
</section>
<!-- profational_trainer area end-->

<!-- free_seminar_area_start -->
<section class="free_seminar_area">
    <div class="container">
        <div class="free_seminar_area_content">
            <div class="row">

                <!-- left_area start -->
                <div class="col-xs-12 col-md-12 col-lg-6">
                    <div class="left_area">
                        <!--free_seminar_area title start -->
                        <div class="free_seminar_area_title">
                            <h2 class="area_title">
                                অংশ নিন আমাদের ফ্রি সেমিনারে
                            </h2>
                        </div>
                        <!-- free_seminar_area title end -->

                        <!-- free_seminar_area sub_title start -->
                        <div class="free_seminar_area_sub_title">
                            <span class="sub_title">
                                আপনার ক্যারিয়ার কোন সেক্টরে গড়ে তুলবেন, সিদ্ধান্ত নিতে পারছেন না? আমাদের ফ্রি
                                সেমিনারে জয়েন করুন। বিষয়ভিত্তিক এই সেমিনারগুলোতে প্রতিটি কোর্সের সম্ভাবনা সম্পর্কে
                                জানতে পারবেন। তাছাড়া সেমিনারে উপস্থিত এক্সপার্ট কাউন্সেলরের সাথে কথা বলে আপনি সহজেই
                                উপযুক্ত কোর্স বেছে নেওয়ার সিদ্ধান্ত নিতে পারেন।
                            </span>
                        </div>
                        <!-- free_seminar_area sub_title end -->

                        <!-- date_line_area start -->
                        @foreach ($seminar as $item)
                        <div class="date_line_area">
                            @php
                              $date1 = \Carbon\Carbon::now();
                              $date2 = \Carbon\Carbon::parse($item->date_time);

                              $difference = $date1->diffInDays($date2);
                            @endphp
                            <div class="date">
                                <span class="date_number">{{$difference}}</span>
                                <span class="date_text">দিন বাকী</span>
                            </div>

                            <div class="data_science">
                                <span class="data_science_text_title"></span>
                                <div class="data_science_text_sub_title">
                                    <!-- অনলাইন | ১৯ ডিসেম্বর ২৩ সোমবার, 09:00 pm -->
                                    <span> অনলাইন</span>
                                    <span class="space_space">{{$item->title}}</span> <br>
                                    <span> {{\Carbon\Carbon::parse($item->date_time)->format("d F Y h:i A")}}</span>

                                </div>
                            </div>

                            <div class="join_button">
                                <button class="button_all">
                                    <span class="btn_text"> জয়েন</span>
                                </button>
                            </div>

                        </div>
                        @endforeach
                       
                        <!--  date_line_area end -->
                        <!-- date_line_area start -->
                     
                        <!--  date_line_area end -->

                        <!-- free_seminar_area_button start-->
                        <div class="free_seminar_button_area">
                            <a href="/seminar" class="button_all">
                                <span class="btn_icon"><i class="fa-solid fa-calendar-days"></i></span>
                                <span class="btn_text">সকল সেমিনারের সময়সূচি</span>
                            </a>
                        </div>
                        <!-- free_seminar_area_button end-->

                    </div>
                </div>
                <!-- left_area end -->

                <!-- right_area start -->
                <div class="col-xs-12 col-md-12 col-lg-6">
                    <div class="right_area">
                        <div class="free_seminar_image">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/free_seminar_area/img.png"
                                alt="seminar_image tech park it">
                        </div>
                    </div>
                </div>
                <!-- right_area end -->

            </div>
        </div>
    </div>
</section>
<!-- free_seminar_area_end -->

<!-- job_career_area start-->
<section class="job_career_area">
    <div class="container">
        <div class="job_career_area_content">
            <div class="row">
                <!-- left_area start -->
                <div class="col-xs-12 col-md-6">
                    <div class="left_area">
                        <!--job_career_area title start -->
                        <div class="job_career_area_title">
                            <h2 class="area_title">
                                আপনার জব ক্যারিয়ার নিয়ে চিন্তিত?
                            </h2>
                        </div>
                        <!-- job_career_area title end -->
                        <!-- job_career_image start -->
                        <div class="job_career_image">
                            <img src="{{ asset('frontend') }}/assets/images/home_page_image/job_career_area/img.png"
                                alt="job_career tech park it">
                        </div>
                        <!-- job_career_image end -->
                    </div>
                </div>
                <!-- left_area end -->

                <!-- right_area start -->
                <div class="col-xs-12 col-md-6">
                    <div class="right_area">
                        <!-- form_area start -->
                        <div class="form_area">
                            <!-- form_area_sub_title start -->
                            <div class="form_area_sub_title">
                                <p class="sub_title">
                                    আমাদের সাথে এপয়েন্টমেন্ট বুক করুন, আমরা আপনাকে ক্যারিয়ার সংক্রান্ত পরামর্শ দিব
                                </p>
                            </div>
                            <!-- form_area_sub_title end -->

                            <!-- form stat -->
                            <form action="#">
                                <input type="text" placeholder="আপনার নাম *">
                                <input type="email" placeholder="আপনার ইমেইল *">
                                <input type="tel" placeholder="আপনার ফোন নাম্বার">
                                <textarea name="#" id="#" cols="30" rows="10" placeholder="বিস্তারিত লিখুন"></textarea>
                                <button class="button_all">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    <span> সাবমিট করুন</span>
                                </button>
                            </form>
                            <!-- form end -->
                        </div>
                        <!-- form_area end -->
                    </div>
                </div>
                <!-- right_area  -->

            </div>
        </div>
    </div>
</section>
<!-- job_career area end-->


<!-- my_it_service_area start -->
<section class="my_it_service_area"
    style="background-image: url({{ asset('frontend') }}/assets/images/home_page_image/ti_service/bg_img.png);">
    <div class="container">
        <div class="my_it_service_area_content">

            <!--my_it_service_area_title start -->
            <div class="my_it_service_area_title">
                <h2 class="area_title">
                    আমাদের আইটি সার্ভিসগুলো
                </h2>
            </div>
            <!-- my_it_service_area end -->

            <!-- my_it_service_area_sub_title start -->
            <div class="my_it_service_area_sub_title">
                <span class="sub_title">
                    আমরা ক্লায়েন্ট-কেন্দ্রিক ওয়েব ডিজাইন ও ডেভোলাপমেন্ট এবং সাইভার সিকিউরিটি সার্ভিস প্রদান করি
                </span>

            </div>
            <!-- my_it_service_area_sub_title end -->

            <!-- service_area start -->
            <div class="service_area">


                <div class="service wordpress">
                    <div class="service_logo">
                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/ti_service/wordpress.png" alt="service techpark it">
                    </div>
                    <div class="service_title_and_description">
                        <div class="title">
                            <p class="title_text">
                                ওয়ার্ডপ্রেস ডেভোলাপমেন্ট
                            </p>
                        </div>
                        <div class="description">
                            <p class="description_text">
                                ওয়ার্ডপ্রেস ইন্সটলেশন, থিম কাস্টমাইজেশন,
                                রেসপনসিভ ডিজাইন, ওয়ার্ডপ্রেস ডেভেলপমেন্ট,
                                ওয়ার্ডপ্রেস প্লাগইন ইন্টিগ্রেশন এবং ওয়ার্ডপ্রেস এসইও।
                            </p>
                        </div>
                    </div>
                </div>


                <div class="service  react ">
                    <div class="service_logo">
                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/ti_service/react.png" alt="service techpark it">
                    </div>
                    <div class="service_title_and_description">
                        <div class="title">
                            <p class="title_text">
                                React ডেভোলাপমেন্ট
                            </p>
                        </div>
                        <div class="description">
                            <p class="description_text">
                                আমরা React ফ্রন্টএন্ড ডেভোলাপমেন্ট এবং

                                আপনার সিঙ্গেল পেজ React ওয়েবসাইট (SPA) তৈরি করুন
                            </p>
                        </div>
                    </div>
                </div>


                <div class="service e_commers">
                    <div class="service_logo">
                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/ti_service/e_comarce.png" alt="service techpark it">
                    </div>
                    <div class="service_title_and_description">
                        <div class="title">
                            <p class="title_text">
                                Laravel ই-কমার্স
                            </p>
                        </div>
                        <div class="description">
                            <p class="description_text">
                                আমরা ফুলস্ট্যাক Laravel ই-কমার্স সাইট ডেভোলাপমেন্ট সার্ভিস প্রদান করি
                            </p>
                        </div>
                    </div>
                </div>


                <div class="service psd">
                    <div class="service_logo">
                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/ti_service/phd.png" alt="service techpark it">
                    </div>
                    <div class="service_title_and_description">
                        <div class="title">
                            <p class="title_text">
                                PSD to HTML
                            </p>
                        </div>
                        <div class="description">
                            <p class="description_text">
                                PSD/Figma/Adobe XD ডিজাইন HTML-এ কনভার্ট করি
                            </p>
                        </div>
                    </div>
                </div>


                <div class="service vue">
                    <div class="service_logo">
                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/ti_service/vuejs-ar21 1.png"
                            alt="service techpark it">
                    </div>
                    <div class="service_title_and_description">
                        <div class="title">
                            <p class="title_text">
                                Vue ডেভোলাপমেন্ট
                            </p>
                        </div>
                        <div class="description">
                            <p class="description_text">
                                Laravel+VueJS এর মাধ্যমে আপনার ওয়েবসাইট তৈরি করুন আমাদের থেকে আপনি VueJS এর মাধ্যমে
                                SPA Application বানাতে পারবেন
                            </p>
                        </div>
                    </div>
                </div>

                <div class="service server">
                    <div class="service_logo">
                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/ti_service/server.png" alt="service techpark it">
                    </div>
                    <div class="service_title_and_description">
                        <div class="title">
                            <p class="title_text">
                                সাইভার সিকিউরিটি
                            </p>
                        </div>
                        <div class="description">
                            <p class="description_text">
                                আমরা সকল ধরনের সাইবার সিকিউরিটি সার্ভিস প্রদান করি
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- service_area end-->
        </div>
    </div>
</section>
<!-- my_it_service_area end-->

<!-- working_company_name area start -->
<section class="working_company_name_area">
    <div class="working_company_name_area_content">

        <!--working_company_name_area_title start -->
        <div class="working_company_name_area_title">
            <h2 class="area_title">
                আমরা যাদের সাথে কাজ করছি
            </h2>
        </div>
        <!-- -working_company_name_area_title end -->

        <!-- all_company_name and logo area start -->
        <div class="all_company_name">
            <ul>
                <li class="company_logo">
                    <a href="#">
                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/work_company_name/1.png" alt="logo">
                    </a>
                </li>
                <li class="company_logo">
                    <a href="#">
                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/work_company_name/2.png" alt="logo">
                    </a>
                </li>
                <li class="company_logo">
                    <a href="#">
                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/work_company_name/3.png" alt="logo">
                    </a>
                </li>
                <li class="company_logo">
                    <a href="#">
                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/work_company_name/4.png" alt="logo">
                    </a>
                </li>
                <li class="company_logo">
                    <a href="#">
                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/work_company_name/5.png" alt="logo">
                    </a>
                </li>
                <li class="company_logo">
                    <a href="#">
                        <img src="{{ asset('frontend') }}/assets/images/home_page_image/work_company_name/6.png" alt="logo">
                    </a>
                </li>

            </ul>
        </div>
        <!-- all_company_name and logo area end -->
    </div>
</section>
<!-- working_company_name area end -->

@endsection
