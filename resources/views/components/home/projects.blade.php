<!-- ====== Portfolio Section Start -->
<section
id="projects"
x-data="
  {
    showCards: 'all',
    activeClasses: 'bg-primary text-white',
    inactiveClasses: 'text-body-color hover:bg-primary hover:text-white',
  }
"
class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px]"
>
<div class="container">
  <div class="flex flex-wrap -mx-4">
    <div class="w-full px-4">
      <div class="text-center mx-auto mb-[60px] max-w-[510px]">
        <span class="font-semibold text-lg text-primary mb-2 block">
          Our Portfolio
        </span>
        <h2
          class="
            font-bold
            text-3xl
            sm:text-4xl
            md:text-[40px]
            text-dark
            mb-4
            dark:text-white
          "
        >
          Software Projects
        </h2>
      </div>
    </div>
  </div>
  <div class="flex flex-wrap justify-center -mx-4">
    <div class="w-full px-4">
      <ul class="flex flex-wrap justify-center mb-12 space-x-1">
        <li class="mb-1">
          <button
            @click="showCards = 'all' "
            :class="showCards == 'all' ? activeClasses : inactiveClasses "
            class="
              inline-block
              py-2
              md:py-3
              px-5
              lg:px-8
              rounded-lg
              text-base
              font-semibold
              text-center
              transition
            "
          >
            All Projects
          </button>
        </li>
        <li class="mb-1">
          <button
            @click="showCards = 'Laravel' "
            :class="showCards == 'Laravel' ? activeClasses : inactiveClasses "
            class="
              inline-block
              py-2
              md:py-3
              px-5
              lg:px-8
              rounded-lg
              text-base
              font-semibold
              text-center
              transition
            "
          >
            Laravel
          </button>
        </li>
        <li class="mb-1">
          <button
            @click="showCards = 'Flutter' "
            :class="showCards == 'Flutter' ? activeClasses : inactiveClasses "
            class="
              inline-block
              py-2
              md:py-3
              px-5
              lg:px-8
              rounded-lg
              text-base
              font-semibold
              text-center
              transition
            "
          >
            Flutter
          </button>
        </li>
        <li class="mb-1">
          <button
            @click="showCards = 'Oracle Apex' "
            :class="showCards == 'Oracle Apex' ? activeClasses : inactiveClasses "
            class="
              inline-block
              py-2
              md:py-3
              px-5
              lg:px-8
              rounded-lg
              text-base
              font-semibold
              text-center
              transition
            "
          >
            Oracle Apex
          </button>
        </li>
        <li class="mb-1">
          <button
            @click="showCards = 'iOS' "
            :class="showCards == 'iOS' ? activeClasses : inactiveClasses "
            class="
              inline-block
              py-2
              md:py-3
              px-5
              lg:px-8
              rounded-lg
              text-base
              font-semibold
              text-center
              transition
            "
          >
            iOS
          </button>
        </li>
        <li class="mb-1">
          <button
            @click="showCards = 'Android' "
            :class="showCards == 'Android' ? activeClasses : inactiveClasses "
            class="
              inline-block
              py-2
              md:py-3
              px-5
              lg:px-8
              rounded-lg
              text-base
              font-semibold
              text-center
              transition
            "
          >
            Android
          </button>
        </li>
        <li class="mb-1">
          <button
            @click="showCards = 'PHP' "
            :class="showCards == 'PHP' ? activeClasses : inactiveClasses "
            class="
              inline-block
              py-2
              md:py-3
              px-5
              lg:px-8
              rounded-lg
              text-base
              font-semibold
              text-center
              transition
            "
          >
            PHP
          </button>
        </li>
        <li class="mb-1">
          <button
            @click="showCards = 'Wordpress' "
            :class="showCards == 'Wordpress' ? activeClasses : inactiveClasses "
            class="
              inline-block
              py-2
              md:py-3
              px-5
              lg:px-8
              rounded-lg
              text-base
              font-semibold
              text-center
              transition
            "
          >
            Wordpress
          </button>
        </li>
      </ul>
    </div>
  </div>
  <div class="flex flex-wrap -mx-4">
    <div
      :class="showCards == 'all' || showCards == 'Flutter' || showCards == 'Laravel' || showCards == 'Oracle Apex' || showCards == 'iOS' || showCards == 'Android' || showCards == 'PHP' ? 'block' : 'hidden' "
      class="w-full md:w-1/2 xl:w-1/3 px-4"
    >
      <div class="relative mb-12">
        <div class="rounded-lg overflow-hidden ease-in duration-100 hover:scale-105">
          <img
            src="{{ url('/images/litta-reporta.png') }}"
            alt="LittaReporta"
            class="w-full h-[260px] object-cover"
          />
        </div>
        <div
          class="
          text-center bg-white dark:bg-slate-800 relative z-10 py-9 px-3 rounded-lg shadow-lg mx-7 -mt-4 h-[260px]
          "
        >
          <span class="text-sm text-primary font-semibold block mb-2">
            Flutter, Laravel, Oracle Apex, iOS, Android, PHP
          </span>
          <h3 class="font-bold text-xl text-dark mb-4 dark:text-white">
            LittaReporta, A Full stack app built using Oracle Apex, Laravel and Flutter.
          </h3>
          <a
            href="https://youtu.be/pHIh4EU0MtE"
            class="
              text-body-color text-sm
              font-semibold
              py-3
              px-7
              inline-block
              border
              rounded-md
              hover:bg-primary hover:border-primary hover:text-white
              transition
            "
          >
            View Details
          </a>
        </div>
      </div>
    </div>
    <div
      :class="showCards == 'all' || showCards == 'Oracle Apex' ? 'block' : 'hidden' "
      class="w-full md:w-1/2 xl:w-1/3 px-4"
    >
      <div class="relative mb-12">
        <div class="rounded-lg overflow-hidden ease-in duration-100 hover:scale-105">
          <img
            src="{{ url('/images/gti.png') }}"
            alt="GTI Management System"
            class="w-full h-[260px] object-cover"
          />
        </div>
        <div
          class="
          text-center bg-white dark:bg-slate-800 relative z-10 py-9 px-3 rounded-lg shadow-lg mx-7 -mt-4 h-[260px]
          "
        >
          <span class="text-sm text-primary font-semibold block mb-2">
            Oracle Apex
          </span>
          <h3 class="font-bold text-xl text-dark mb-4 dark:text-white">
            A student record management system for the Government Technical Institute
          </h3>
          <a
            href="https://youtu.be/pHIh4EU0MtE"
            class="
              text-body-color text-sm
              font-semibold
              py-3
              px-7
              inline-block
              border
              rounded-md
              hover:bg-primary hover:border-primary hover:text-white
              transition
            "
          >
            View Details
          </a>
        </div>
      </div>
    </div>
    <div
      :class="showCards == 'all' || showCards == 'Wordpress' || showCards == 'PHP' ? 'block' : 'hidden' "
      class="w-full md:w-1/2 xl:w-1/3 px-4"
    >
      <div class="relative mb-12">
        <div class="rounded-lg overflow-hidden ease-in duration-100 hover:scale-105">
          <img
            src="{{ url('/images/mot.png') }}"
            alt="Ministry of Tourism"
            class="w-full h-[260px] object-cover"
          />
        </div>
        <div
          class="
          text-center bg-white dark:bg-slate-800 relative z-10 py-9 px-3 rounded-lg shadow-lg mx-7 -mt-4 h-[260px]
          "
        >
          <span class="text-sm text-primary font-semibold block mb-2">
            Wordpress, PHP
          </span>
          <h3 class="font-bold text-xl text-dark mb-4 dark:text-white">
            A redesign of the Ministry of Tourism Website
          </h3>
          <a
            href="javascript:void(0)"
            class="
              text-body-color text-sm
              font-semibold
              py-3
              px-7
              inline-block
              border
              rounded-md
              hover:bg-primary hover:border-primary hover:text-white
              transition
            "
          >
            View Details
          </a>
        </div>
      </div>
    </div>
    <div
      :class="showCards == 'all' || showCards == 'Laravel' || showCards == 'PHP' ? 'block' : 'hidden' "
      class="w-full md:w-1/2 xl:w-1/3 px-4"
    >
      <div class="relative mb-12">
        <div class="rounded-lg overflow-hidden ease-in duration-100 hover:scale-105">
          <img
            src="{{ url('/images/bot.jpeg') }}"
            alt="covidbot"
            class="w-full h-[260px] object-cover"
          />
        </div>
        <div
          class="
          text-center bg-white dark:bg-slate-800 relative z-10 py-9 px-3 rounded-lg shadow-lg mx-7 -mt-4 h-[260px]
          "
        >
          <span class="text-sm text-primary font-semibold block mb-2">
            Laravel, PHP
          </span>
          <h3 class="font-bold text-xl text-dark mb-4 dark:text-white">
            A Laravel Microservice that was built to showcase covidcase statuses around the world.
          </h3>
          <a
            href="https://youtu.be/38fJX4oj9tk"
            class="
              text-body-color text-sm
              font-semibold
              py-3
              px-7
              inline-block
              border
              rounded-md
              hover:bg-primary hover:border-primary hover:text-white
              transition
            "
          >
            View Details
          </a>
        </div>
      </div>
    </div>
    <div
      :class="showCards == 'all' || showCards == 'Oracle Apex' || showCards == 'Flutter' || showCards == 'iOS' || showCards == 'Android'  ? 'block' : 'hidden' "
      class="w-full md:w-1/2 xl:w-1/3 px-4"
    >
    <div class="relative mb-12">
      <div class="rounded-lg overflow-hidden ease-in duration-100 hover:scale-105">
        <img
          src="{{ url('/images/sac.png') }}"
          alt="portfolio"
          class="w-full h-[260px] object-cover"
        />
      </div>
      <div
        class="
        text-center bg-white dark:bg-slate-800 relative z-10 py-9 px-3 rounded-lg shadow-lg mx-7 -mt-4 h-[260px]
        "
      >
        <span class="text-sm text-primary font-semibold block mb-2">
          Flutter, Oracle Apex, iOS, Android
        </span>
        <h3 class="font-bold text-xl text-dark mb-4 dark:text-white">
          Mobile App for SacPackaging Customers to view packages, invoices, quotes easier.
        </h3>
        <a
          href="javascript:void(0)"
          class="
            text-body-color text-sm
            font-semibold
            py-3
            px-7
            inline-block
            border
            rounded-md
            hover:bg-primary hover:border-primary hover:text-white
            transition
          "
        >
          View Details
        </a>
      </div>
    </div>
    </div>
  </div>
</div>
</section>
<!-- ====== Portfolio Section End -->