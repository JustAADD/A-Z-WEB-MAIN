<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A-Z Peptides PH</title>
    <link href="./src/output.css" rel="stylesheet">
</head>

<body>

    <div class="w-full h-auto mx-auto py-20 px-20 align-items-center justify-center">

        <a href="javascript:history.back()"
            class="flex items-center justify-center w-25 h-10 rounded-md text-gray-500 hover:bg-gray-100 transition mb-5">

            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M7 8l-4 4m0 0l4 4m-4-4h18" />
            </svg>
            &nbsp; Back
        </a>
        <div class="flex flex-col md:flex-row justify-center items-center mb-1">
            <p class="font-poppins text-3xl font-semibold text-gray-800">
                INQUIRY FORM
            </p>
        </div>
        <div class="mb-18 flex flex-col md:flex-row justify-center items-center text-gray-600">
            <p class="font-poppins text-sm text-light font-normal">
                for inquiries, please input your contact info:
            </p>
        </div>



        <!-- form -->

        <div class="border-b border-white/10 pb-12 max-w-3xl mx-auto">

            <h2 class="text-base font-semibold leading-7 text-gray-900">Contact Information</h2>
            <p class=" text-sm leading-6 text-gray-600">Use a permanent address where you can receive mail.</p>

            <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">

                    <div class="mt-1">
                        <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                            placeholder="First name"
                            class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-[#515151] sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-3">

                    <div class="mt-1">
                        <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                            placeholder="Last name"
                            class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#515151] sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="col-span-full">

                    <div class="mt-1">
                        <input id="email" name="email" type="email" autocomplete="email" placeholder="Email address"
                            class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#515151] sm:text-sm sm:leading-6">
                    </div>
                </div>

                <!-- leave a comments -->
                <div class="col-span-full">
                    <label for="comments" class="block text-sm font-medium leading-6 text-gray-900">Comments</label>
                    <div class="mt-2">
                        <textarea id="comments" name="comments" rows="3" placeholder="Write your inquiries/notes here."
                            class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#515151] sm:text-sm sm:leading-6"></textarea>
                    </div>

                </div>

                <!-- qr -->
                <div class="sm:col-span-3">

                    <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">QR Code</label>
                    <svg accesskey="" xmlns="http://www.w3.org/2000/svg" class="w-12 h-12" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M0 0v512h512V0H0zm32 32h448v448H32V32zm96 64c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zm0 64c-8.837 0-16-7.163-16-16s7.163-16 16-16 16 7.163 16 16-7.163 16-16 16zm256-64c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zm0 64c-8.837 0-16-7.163-16-16s7.163-16 16-16 16 7.163 16 16-7.163 16-16 16zM128 288c0-26.51-21.49-48-48-48s-48 21.49-48 48v128c0 26.51 21.49 48 48 48s48-21.49 48-48V288zm32 128c0 
                            ... (truncated for brevity) ...
                            -8.837 0-16-7.163-16-16s7.163-16 16-16 16 7.163 16 16-7.163 16-16 16z" />
                    </svg>

                    <p class="mt-3 text-sm leading-6 text-gray-600">Scan the QR code to pay via GCash or PayMaya.
                    </p>
                </div>

                <!-- upload file -->

                <div class="sm:col-span-3">
                    <label for="file-upload" class="block text-sm font-medium leading-6 text-gray-900">Upload
                        File</label>
                    <div class="mt-2">
                        <input id="file-upload" name="file-upload" type="file"
                            class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-600 hover:bg-gray-100 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#515151] sm:text-sm sm:leading-6">
                    </div>
                    <p class="mt-3 text-sm leading-6 text-gray-600">Upload your screenshot payment transactions here.
                    </p>
                </div>



                <!-- submit button -->

                <div class="col-span-full">
                    <button type="submit"
                        class="rounded-md bg-[#313131] px-10 py-2 text-sm font-light text-white shadow-sm hover:bg-[#515151]">Submit</button>
                </div>

            </div>
        </div>

    </div>

    <?php
    include('footer.php');
    ?>

</body>

</html>