<!-- ====== About Section Start -->
<section id="about" class="dark:bg-slate-800 pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
    <div class="container">
      <div class="flex flex-wrap justify-between items-center -mx-4">
        <div class="w-full lg:w-6/12 px-4">
          <div class="flex items-center -mx-3 sm:-mx-4">
            <div class="w-full xl:w-1/2 px-3 sm:px-4">
              <div class="py-3 sm:py-4">
                <img
                  src="{{ url('/images/team-2.jpg') }}"
                  alt=""
                  class="rounded-2xl w-full"
                />
              </div>
              <div class="py-3 sm:py-4">
                <img
                  src="{{ url('/images/team-3.jpg') }}"
                  alt=""
                  class="rounded-2xl w-full"
                />
              </div>
            </div>
            <div class="w-full xl:w-1/2 px-3 sm:px-4">
              <div class="my-4 relative z-10">
                <img
                  src="{{ url('/images/team.jpg') }}"
                  alt=""
                  class="rounded-2xl w-full"
                />
                <x-about-dots></x-about-dots>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
          <div class="mt-10 lg:mt-0">
            <span class="font-semibold text-lg text-primary mb-2 block">
               <blockquote class="text-sm text-gray-500 italic py-2 px-3 border-l-4 border-amber-500">
                   "Together Everyone Achieves More (TEAM)."
               </blockquote>
            </span>
            <h2 class="font-bold text-3xl sm:text-4xl dark:text-gray-200 mb-8">
              About Us
            </h2>
            <p class="text-base dark:text-gray-400 mb-4">
              We have been operating as a company recently, we are less than a year in the market. <br />
              During our careers, we have worked on various types of projects with various technologies,
              but very often we feel that we can contribute more to Guyana by developing meaningful Software. <br />
            </p>
            <p class="text-base dark:text-gray-400 mb-8">
               We are all about diversity. Regardless of
                <span class="text-amber-500 font-bold">Ethnicity</span> and <span class="text-green-500 font-bold">Gender</span>. <br />
                We believe in Equality ❤️. <br />
              </p>
            <x-button-link href="https://youtube.com/thecodeholic" variant="red" target="_blank">
              View Team
            </x-button-link>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== About Section End -->