<div>
    <section class="pt-24 pb-16 px-4 lg:px-20">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-12">

            <!-- Contact Form -->
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Contact Us</h2>
                <p class="text-gray-600 mb-8">
                    We are deeply committed to delivering unparalleled service and unwavering support to ensure your
                    experience exceeds expectations.
                </p>
                <form class="space-y-6 text-gray-700">
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject <span
                                class="text-red-500">*</span></label>
                        <input type="text" id="subject" name="subject"
                            class="w-full text-sm bg-white px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600"
                            required />
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address<span
                                class="text-red-500">*</span></label>
                        <input type="email" id="email" name="email"
                            class="w-full text-sm bg-white px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600"
                            required />
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message <span
                                class="text-red-500">*</span></label>
                        <textarea id="message" name="message" rows="5"
                            class="w-full text-sm bg-white px-4 py-3 border border-gray-300 rounded-lg resize-none focus:outline-none focus:ring-2 focus:ring-indigo-600"
                            required></textarea>
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full bg-indigo-600 text-white shadow-xs  transition-all duration-150 cursor-pointer hover:shadow-md hover:shadow-indigo-200 hover:bg-indigo-500 hover:border hover:border-white hover:-translate-y-0.5 active:bg-indigo-600 active:translate-y-0.5 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 font-semibold py-3 px-6 rounded-lg">
                            Submit
                        </button>
                    </div>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="space-y-5">
                <div
                    class="relative bg-gradient-to-br from-indigo-600 to-indigo-400 text-white rounded-xl px-6 py-5 overflow-hidden">
                    {{-- line decoration --}}
                    <span
                        class="w-full h-8 bg-gradient-to-l from-white/15 to-75% to-white/0 absolute top-0 -right-72 -rotate-45"></span>
                    <span
                        class="w-full h-8 bg-gradient-to-r from-white/10 to-75% to-white/0 absolute top-0 -right-60 -rotate-45"></span>

                    <div class="flex items-start gap-4">
                        <svg class="w-6 h-6 mt-1" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z" />
                        </svg>
                        <div>
                            <h4 class="font-semibold text-lg mb-1">Address</h4>
                            <p class="text-white/80">Cirebon, West Java, <br /><strong
                                    class="text-white">Indonesia</strong>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-100/70 border border-gray-100/90 rounded-xl px-6 py-5 text-gray-700">
                    <div class="flex items-start gap-4">
                        <svg class="w-6 h-6 mt-1 text-indigo-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 5.5a16 16 0 0015.5 15.5l2-2a1.5 1.5 0 00-.3-2.4l-3.2-1.8a1.5 1.5 0 00-1.7.2l-1 1a12.5 12.5 0 01-5.6-5.6l1-1a1.5 1.5 0 00.2-1.7l-1.8-3.2a1.5 1.5 0 00-2.4-.3l-2 2z" />
                        </svg>


                        <div>
                            <h4 class="font-semibold text-lg mb-1 text-indigo-600">Contact</h4>
                            <p class="text-gray-500">Talk to us and see how we can work<br /><strong
                                    class="text-gray-700">0812-1477-2370</strong></p>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-100/70 border border-gray-100/90 rounded-xl px-6 py-5 text-gray-700">
                    <div class="flex items-start gap-4">
                        <svg class="w-6 h-6 mt-1 text-indigo-600" fill="none" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 5h14a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2z" />
                        </svg>
                        <div>
                            <h4 class="font-semibold text-lg mb-1 text-indigo-600">Email</h4>
                            <p class="text-gray-500">We're usually replying within 24 hours<br /><strong
                                    class="text-gray-700">zakiram4dhan@gmail.com</strong></p>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-100/70 border border-gray-100/90 rounded-xl px-6 py-5 text-gray-700">
                    <div class="flex items-start gap-4">
                        <svg class="w-6 h-6 mt-1 text-indigo-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div>
                            <h4 class="font-semibold text-lg mb-1 text-indigo-600">Working Hours</h4>
                            <p>Mon to Sat – 10 am to 7 pm<br />Sunday – 11 am to 5 pm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <livewire:footer />
</div>
