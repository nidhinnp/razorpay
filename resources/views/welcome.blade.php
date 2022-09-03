<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RazorPay</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            @import url("https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap");

            body {
                font-family: 'Nunito', sans-serif;
            }

            /* only animate if the device supports hover */
            @media (hover: hover) {
                #creditcard {
                    /*  set start position */
                    transform: translateY(110px);
                    transition: transform 0.1s ease-in-out;
                    /*  set transition for mouse enter & exit */
                }

                #money {
                    /*  set start position */
                    transform: translateY(180px);
                    transition: transform 0.1s ease-in-out;
                    /*  set transition for mouse enter & exit */
                }

                button:hover #creditcard {
                    transform: translateY(0px);
                    transition: transform 0.2s ease-in-out;
                    /*  overide transition for mouse enter */
                }

                button:hover #money {
                    transform: translateY(0px);
                    transition: transform 0.3s ease-in-out;
                    /*  overide transition for mouse enter */
                }
            }

            @keyframes bounce {
                0% {
                    transform: translateY(0);
                }
                50% {
                    transform: translateY(-0.25rem);
                }
                100% {
                    transform: translateY(0);
                }
            }

            .button:hover .button__text span {
                transform: translateY(-0.25rem);
                transition: transform .2s ease-in-out;
            }

            /* styling */

            body {
                height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .button {
                border: none;
                outline: none;
                background-color: purple;
                padding: 1rem 90px 1rem 2rem;
                position: relative;
                border-radius: 8px;
                letter-spacing: 0.7px;
                background-color: #5086bd;
                color: #fff;
                font-size: 21px;
                font-family: "Lato", sans-serif;
                cursor: pointer;
                box-shadow: rgba(0, 9, 61, 0.2) 0px 4px 8px 0px;
            }

            .button:active {
                transform: translateY(1px);
            }

            .button__svg {
                position: absolute;
                overflow: visible;
                bottom: 6px;
                right: 0.2rem;
                height: 140%;
            }

            body {
                align-items: center;
                /*background-color: #f6f5f5;*/
                background-image:url("assets/images/razorpay3.png");
                display: flex;
                justify-content: center;
                height: 100vh;
            }

            .form {
                background-color: #15172b;
                border-radius: 20px;
                box-sizing: border-box;
                height: 650px;
                padding: 20px;
                width: 320px;
            }

            .title {
                color: #eee;
                font-family: sans-serif;
                font-size: 36px;
                font-weight: 600;
                margin-top: 30px;
            }

            .subtitle {
                color: #eee;
                font-family: sans-serif;
                font-size: 16px;
                font-weight: 600;
                margin-top: 10px;
            }

            .input-container {
                height: 50px;
                position: relative;
                width: 100%;
            }

            .ic1 {
                margin-top: 40px;
            }

            .ic2 {
                margin-top: 30px;
            }

            .input {
                background-color: #303245;
                border-radius: 12px;
                border: 0;
                box-sizing: border-box;
                color: #eee;
                font-size: 18px;
                height: 100%;
                outline: 0;
                padding: 4px 20px 0;
                width: 100%;
            }

            .cut {
                background-color: #15172b;
                border-radius: 10px;
                height: 20px;
                left: 20px;
                position: absolute;
                top: -20px;
                transform: translateY(0);
                transition: transform 200ms;
                width: 76px;
            }

            .cut-short {
                width: 50px;
            }

            .input:focus ~ .cut,
            .input:not(:placeholder-shown) ~ .cut {
                transform: translateY(8px);
            }

            .placeholder {
                color: #65657b;
                font-family: sans-serif;
                left: 20px;
                line-height: 14px;
                pointer-events: none;
                position: absolute;
                transform-origin: 0 50%;
                transition: transform 200ms, color 200ms;
                top: 20px;
            }

            .input:focus ~ .placeholder,
            .input:not(:placeholder-shown) ~ .placeholder {
                transform: translateY(-30px) translateX(10px) scale(0.75);
            }

            .input:not(:placeholder-shown) ~ .placeholder {
                color: #808097;
            }

            .input:focus ~ .placeholder {
                color: #dc2f55;
            }

            .submit {
                background-color: #08d;
                border-radius: 12px;
                border: 0;
                box-sizing: border-box;
                color: #eee;
                cursor: pointer;
                font-size: 18px;
                height: 50px;
                margin-top: 38px;
            // outline: 0;
                text-align: center;
                width: 100%;
            }

            .submit:active {
                background-color: #06b;
            }

        </style>
    </head>
    <body class="antialiased ">
{{--        <div class="">--}}
{{--            <div class="">--}}
{{--                <div class="">--}}
{{--                    <div class="form-group mt-2">--}}
{{--                        <button id="rzp-button1" style="height: 100px; width: 100px; background-color: #3399cc; color: #1a202c; font-style:italic; font-size: larger ">Pay</button>--}}
{{--                        <button class="button" id="rzp-button1">--}}
{{--                             <span class="button__text">--}}
{{--                                    <span>p</span><span>a</span>y</span><span> </span><span></span><span></span><span></span><span></span><span></span>--}}
{{--                              </span>--}}
{{--                            <svg class="button__svg" role="presentational" viewBox="0 0 600 600">--}}
{{--                                <defs>--}}
{{--                                    <clipPath id="myClip">--}}
{{--                                        <rect x="0" y="0" width="100%" height="50%" />--}}
{{--                                    </clipPath>--}}
{{--                                </defs>--}}
{{--                                <g clip-path="url(#myClip)">--}}
{{--                                    <g id="money">--}}
{{--                                        <path d="M441.9,116.54h-162c-4.66,0-8.49,4.34-8.62,9.83l.85,278.17,178.37,2V126.37C450.38,120.89,446.56,116.52,441.9,116.54Z" fill="#699e64" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />--}}
{{--                                        <path d="M424.73,165.49c-10-2.53-17.38-12-17.68-24H316.44c-.09,11.58-7,21.53-16.62,23.94-3.24.92-5.54,4.29-5.62,8.21V376.54H430.1V173.71C430.15,169.83,427.93,166.43,424.73,165.49Z" fill="#699e64" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />--}}
{{--                                    </g>--}}
{{--                                    <g id="creditcard">--}}
{{--                                        <path d="M372.12,181.59H210.9c-4.64,0-8.45,4.34-8.58,9.83l.85,278.17,177.49,2V191.42C380.55,185.94,376.75,181.57,372.12,181.59Z" fill="#a76fe2" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />--}}
{{--                                        <path d="M347.55,261.85H332.22c-3.73,0-6.76-3.58-6.76-8v-35.2c0-4.42,3-8,6.76-8h15.33c3.73,0,6.76,3.58,6.76,8v35.2C354.31,258.27,351.28,261.85,347.55,261.85Z" fill="#ffdc67" />--}}
{{--                                        <path d="M249.73,183.76h28.85v274.8H249.73Z" fill="#323c44" />--}}
{{--                                    </g>--}}
{{--                                </g>--}}
{{--                                <g id="wallet">--}}
{{--                                    <path d="M478,288.23h-337A28.93,28.93,0,0,0,112,317.14V546.2a29,29,0,0,0,28.94,28.95H478a29,29,0,0,0,28.95-28.94h0v-229A29,29,0,0,0,478,288.23Z" fill="#a4bdc1" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />--}}
{{--                                    <path d="M512.83,382.71H416.71a28.93,28.93,0,0,0-28.95,28.94h0V467.8a29,29,0,0,0,28.95,28.95h96.12a19.31,19.31,0,0,0,19.3-19.3V402a19.3,19.3,0,0,0-19.3-19.3Z" fill="#a4bdc1" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />--}}
{{--                                    <path d="M451.46,435.79v7.88a14.48,14.48,0,1,1-29,0v-7.9a14.48,14.48,0,0,1,29,0Z" fill="#a4bdc1" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />--}}
{{--                                    <path d="M147.87,541.93V320.84c-.05-13.2,8.25-21.51,21.62-24.27a42.71,42.71,0,0,1,7.14-1.32l-29.36-.63a67.77,67.77,0,0,0-9.13.45c-13.37,2.75-20.32,12.57-20.27,25.77l.38,221.24c-1.57,15.44,8.15,27.08,25.34,26.1l33-.19c-15.9,0-28.78-10.58-28.76-25.93Z" fill="#7b8f91" />--}}
{{--                                    <path d="M148.16,343.22a6,6,0,0,0-6,6v92a6,6,0,0,0,12,0v-92A6,6,0,0,0,148.16,343.22Z" fill="#323c44" />--}}
{{--                                </g>--}}

{{--                            </svg>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}

<div class="form" id="form-razorpay">
    <form id="form-razorpay">
        <div class="title">Welcome</div>
        <div class="subtitle">Let's do your payment!</div>
        <div class="input-container ic1">
            <input id="firstname" class="input" type="text" placeholder=" " />
            <div class="cut"></div>
            <label for="firstname" class="placeholder">First name</label>
         </div>
        <div class="input-container ic2">
            <input id="phone" class="input" type="text" placeholder=" " />
            <div class="cut"></div>
            <label for="phone" class="placeholder">Phone</label>
         </div>
        <div class="input-container ic2">
            <input id="email" class="input" type="email" placeholder=" " />
            <div class="cut cut-short"></div>
            <label for="email" class="placeholder">Email</label>
        </div>
        <div class="input-container ic2">
            <input id="key" class="input" type="text" placeholder=" " name="key" />
            <div class="cut cut-short"></div>
            <label for="key" class="placeholder">Key</label>
        </div>
        <div class="input-container ic2">
            <input id="order_id" class="input" type="text" placeholder=" " name="order"/>
            <div class="cut cut-short"></div>
            <label for="order_id" class="placeholder">Order id</label>
        </div>
        <button class="button" id="rzp-button1" style="margin-top: 20px; margin-left: 55px" type="submit">
             <span class="button__text">
                <span>p</span><span>a</span>y</span><span> </span><span></span><span></span><span></span><span></span><span></span>
            </span>
                <svg class="button__svg" role="presentational" viewBox="0 0 600 600">
                    <defs>
                        <clipPath id="myClip">
                            <rect x="0" y="0" width="100%" height="50%" />
                        </clipPath>
                    </defs>
                    <g clip-path="url(#myClip)">
                        <g id="money">
                            <path d="M441.9,116.54h-162c-4.66,0-8.49,4.34-8.62,9.83l.85,278.17,178.37,2V126.37C450.38,120.89,446.56,116.52,441.9,116.54Z" fill="#699e64" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
                            <path d="M424.73,165.49c-10-2.53-17.38-12-17.68-24H316.44c-.09,11.58-7,21.53-16.62,23.94-3.24.92-5.54,4.29-5.62,8.21V376.54H430.1V173.71C430.15,169.83,427.93,166.43,424.73,165.49Z" fill="#699e64" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
                        </g>
                        <g id="creditcard">
                            <path d="M372.12,181.59H210.9c-4.64,0-8.45,4.34-8.58,9.83l.85,278.17,177.49,2V191.42C380.55,185.94,376.75,181.57,372.12,181.59Z" fill="#a76fe2" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
                            <path d="M347.55,261.85H332.22c-3.73,0-6.76-3.58-6.76-8v-35.2c0-4.42,3-8,6.76-8h15.33c3.73,0,6.76,3.58,6.76,8v35.2C354.31,258.27,351.28,261.85,347.55,261.85Z" fill="#ffdc67" />
                            <path d="M249.73,183.76h28.85v274.8H249.73Z" fill="#323c44" />
                        </g>
                    </g>
                    <g id="wallet">
                        <path d="M478,288.23h-337A28.93,28.93,0,0,0,112,317.14V546.2a29,29,0,0,0,28.94,28.95H478a29,29,0,0,0,28.95-28.94h0v-229A29,29,0,0,0,478,288.23Z" fill="#a4bdc1" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
                        <path d="M512.83,382.71H416.71a28.93,28.93,0,0,0-28.95,28.94h0V467.8a29,29,0,0,0,28.95,28.95h96.12a19.31,19.31,0,0,0,19.3-19.3V402a19.3,19.3,0,0,0-19.3-19.3Z" fill="#a4bdc1" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
                        <path d="M451.46,435.79v7.88a14.48,14.48,0,1,1-29,0v-7.9a14.48,14.48,0,0,1,29,0Z" fill="#a4bdc1" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
                        <path d="M147.87,541.93V320.84c-.05-13.2,8.25-21.51,21.62-24.27a42.71,42.71,0,0,1,7.14-1.32l-29.36-.63a67.77,67.77,0,0,0-9.13.45c-13.37,2.75-20.32,12.57-20.27,25.77l.38,221.24c-1.57,15.44,8.15,27.08,25.34,26.1l33-.19c-15.9,0-28.78-10.58-28.76-25.93Z" fill="#7b8f91" />
                        <path d="M148.16,343.22a6,6,0,0,0-6,6v92a6,6,0,0,0,12,0v-92A6,6,0,0,0,148.16,343.22Z" fill="#323c44" />
                    </g>

                </svg>
        </button>
    </form>
</div>
    </body>
</html>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script>



    // "key": "rzp_test_CU12LmIRt7FlB9",order_K7OoLTmyASXA3U


    document.getElementById('rzp-button1').onclick = function(e){
        var name = $('#firstname').val();
        var phone =  $('#phone').val();
        var email =  $('#email').val();
        var key = $('#key').val();
        var id =  $('#order_id').val();

        if (!key) {
            alert("Enter Your Razorpay Key");
        }

        if (!id && key) {
            alert("Enter Your Order Id");
        }

        var options = {
            "key": key,
            "currency": "INR",
            "name": "Nidhinnp",
            "description": "Test Transaction",
            "order_id": id,
            "handler": function (response){
                alert(response.razorpay_payment_id);
            },
            "prefill": {
                "name": name,
                "email": email,
                "contact": phone
            },
            "notes": {
                "address": "Razorpay Corporate Office"    },
            "theme": {        "color": "#3399cc"    }};

        var rzp1 = new Razorpay(options);
        rzp1.on('payment.failed', function (response){
            alert(response.error.code);
        });

        rzp1.open();
        e.preventDefault();
    }


</script>
