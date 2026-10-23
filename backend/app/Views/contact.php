<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Floe Consumer Goods Trading</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    <?= view('components/header') ?>

    <!-- Header -->
    <section class="bg-blue-900 py-20 text-white">

        <div class="mx-auto px-6 text-center container">

            <h1 class="font-bold text-5xl">
                Contact Us
            </h1>

            <p class="mt-4 text-lg">
                We're here to help with your orders and inquiries.
            </p>

        </div>

    </section>

    <!-- Contact Section -->
    <section class="py-16">

        <div class="mx-auto px-6 container">

            <div class="gap-10 grid lg:grid-cols-2">

                <!-- Contact Form -->
                <div class="bg-white shadow-lg p-8 rounded-2xl">

                    <h2 class="mb-6 font-bold text-3xl">
                        Send a Message
                    </h2>

                    <form>

                        <div class="mb-4">
                            <label class="block mb-2 font-semibold">
                                Full Name
                            </label>

                            <input
                                type="text"
                                class="px-4 py-3 border rounded-lg w-full"
                                placeholder="Enter your name">
                        </div>

                        <div class="mb-4">
                            <label class="block mb-2 font-semibold">
                                Email Address
                            </label>

                            <input
                                type="email"
                                class="px-4 py-3 border rounded-lg w-full"
                                placeholder="Enter your email">
                        </div>

                        <div class="mb-4">
                            <label class="block mb-2 font-semibold">
                                Subject
                            </label>

                            <input
                                type="text"
                                class="px-4 py-3 border rounded-lg w-full"
                                placeholder="Subject">
                        </div>

                        <div class="mb-4">
                            <label class="block mb-2 font-semibold">
                                Message
                            </label>

                            <textarea
                                rows="5"
                                class="px-4 py-3 border rounded-lg w-full"
                                placeholder="Type your message"></textarea>
                        </div>

                        <button
                            type="submit"
                            class="bg-blue-900 hover:bg-blue-800 py-3 rounded-lg w-full text-white">
                            Send Message
                        </button>

                    </form>

                </div>

                <!-- Contact Information -->
                <div class="bg-white shadow-lg p-8 rounded-2xl">

                    <h2 class="mb-6 font-bold text-3xl">
                        Store Information
                    </h2>

                    <div class="space-y-5 text-lg">

                        <p>
                            📍 <strong>Address:</strong><br>
                            494 Soldado St, Ermita,
                            Manila, Metro Manila
                        </p>

                        <p>
                            📞 <strong>Phone:</strong><br>
                            09688573230
                        </p>

                        <p>
                            ✉️ <strong>Email:</strong><br>
                            floetrading@gmail.com
                        </p>

                        <p>
                            🕒 <strong>Business Hours:</strong><br>
                            Monday - Sunday
                            <br>
                            5:00 PM - 12:00 AM
                        </p>

                    </div>

                    <div class="shadow mt-8 rounded-xl overflow-hidden">

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.433690828177!2d120.97998461135703!3d14.574346177658768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ca2bfd7d0be3%3A0xdd0920283b64f77c!2sLuz%20Henson%20Building%2C%20494%20Soldado%20St%2C%20Ermita%2C%20Manila%2C%201000%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1792741191672!5m2!1sen!2sph"
                            class="w-full h-80"
                            style="border:0;"
                            loading="lazy">
                        </iframe>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Footer -->
    <?= view('components/footer') ?>

</body>

</html>