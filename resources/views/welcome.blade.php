<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Amatech | E-Voting</title>
  <link rel="stylesheet" href="{{ asset('dist/styles.css') }}" />
  <script src="{{ asset('dist/script.js') }}"></script>
</head>

<body>
  <!-- Navigation -->
  <nav class="fixed flex items-center justify-between py-6 w-full lg:px-48 md:px-12 px-4 content-center bg-secondary z-10">
    <a href="/" class="flex items-center">
      <img src="{{ asset('dist/assets/Logo_black.png') }}" alt="Logo" class="h-10" />
    </a>
    <ul class="font-montserrat items-center hidden md:flex">
      <li class="mx-3 ">
        <a class="growing-underline" href="#howitworks">
          How it works
        </a>
      </li>
      <li class="growing-underline mx-3">
        <a href="#features">Features</a>
      </li>
      <li class="growing-underline mx-3">
        <a href="#faq">FAQs</a>
      </li>
    </ul>
    <div class="font-montserrat hidden md:block">
      <a href="app/login" class="mr-6">Login</a>
      <a href="app/register" class="py-2 px-4 text-white bg-black rounded-3xl" style="background: green">
        Signup
      </a>
    </div>
    <div id="showMenu" class="md:hidden">
      <img src="{{ asset('dist/assets/logos/Menu.svg') }}" alt="Menu icon" />
    </div>
  </nav>
  <div id='mobileNav' class="hidden px-4 py-6 fixed top-0 left-0 h-full w-full bg-secondary z-20 animate-fade-in-down">
    <div id="hideMenu" class="flex justify-end">
      <img src="{{ asset('dist/assets//logos/Cross.svg') }}" alt="" class="h-16 w-16" />
    </div>
    <ul class="font-montserrat flex flex-col mx-8 my-24 items-center text-3xl">
      <li class="my-6">
        <a href="#howitworks">How it works</a>
      </li>
      <li class="my-6">
        <a href="#features">Features</a>
      </li>
      <li class="my-6">
        <a href="#faq">FAQs</a>
      </li>
    </ul>
  </div>

  <!-- Hero -->
  <section
    class="pt-24 md:mt-0 md:h-screen flex flex-col justify-center text-center md:text-left md:flex-row md:gap-2 md:justify-between md:items-center lg:px-48 md:px-12 px-4 bg-secondary">
    <div class="md:flex-1 md:mr-10">
      <h1 class="font-pt-serif text-5xl font-bold mb-7">
        Enter the realm of Digital
        <span class="bg-underline1 bg-left-bottom bg-no-repeat pb-2 bg-100%">
        Democracy
        </span>
      </h1>
      <p class="font-pt-serif font-normal mb-7">
      Cast your academic ballots, where your voice, your vote, and your leadership choices matter.
      </p>
      <div class="font-montserrat">
        <button class="bg-black px-6 py-4 rounded-lg border-2 border-black border-solid text-white mr-2 mb-2" style="background: green; border-color: green">
          Signup now
        </button>
        <button class="px-6 py-4 border-2 border-black border-solid rounded-lg" style="border-color: green; color: green">
          Subscribe to Newsletter
        </button>
      </div>
    </div>
    <div class="flex justify-around md:block mt-8 md:mt-0 md:flex-1">
      <img src="{{ asset('dist/assets/Voting.svg') }}" alt="Voting" />
      <div class="relative">
        <img src="{{ asset('dist/assets/Highlight2.svg') }}" alt="" class="absolute -bottom-10 -right-6" />
      </div>
    </div>
  </section>

  <!-- How it works -->
  <section class="bg-black text-white sectionSize" style="background: green" id="howitworks">
    <div>
      <h2 class="secondaryTitle bg-underline2 bg-100%">How it works</h2>
    </div>
    <div class="flex flex-col md:flex-row">
      <div class="flex-1 mx-8 flex flex-col items-center my-4">
        <div class="border-2 rounded-full bg-secondary text-black h-12 w-12 flex justify-center items-center mb-3" style="border-color: gray">
          1
        </div>
        <h3 class="font-montserrat font-medium text-xl mb-2">Registration</h3>
        <p class="text-center font-montserrat">
        Sign up by providing your correct academic details & creating a secure account.
        </p>
      </div>
      <div class="flex-1 mx-8 flex flex-col items-center my-4">
        <div class="border-2 rounded-full bg-secondary text-black h-12 w-12 flex justify-center items-center mb-3" style="border-color: gray">
          2
        </div>
        <h3 class="font-montserrat font-medium text-xl mb-2">Admin Approval</h3>
        <p class="text-center font-montserrat">
        Your registration undergoes a quick yet thorough admin approval process.
        </p>
      </div>
      <div class="flex-1 mx-8 flex flex-col items-center my-4">
        <div class="border-2 rounded-full bg-secondary text-black h-12 w-12 flex justify-center items-center mb-3" style="border-color: gray">
          3
        </div>
        <h3 class="font-montserrat font-medium text-xl mb-2">Participate in Election</h3>
        <p class="text-center font-montserrat">
        Once approved, you'll be granted access to participate in upcoming elections.
        </p>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="sectionSize bg-secondary" id="features">
    <div>
      <h2 class="secondaryTitle bg-underline3 bg-100%">Features</h2>
    </div>
    <div class="md:grid md:grid-cols-2 md:grid-rows-2">

      <div class="flex items-start font-montserrat my-6 mr-10">
        <img src="{{ asset('dist/assets/logos/Heart.svg') }}" alt='' class="h-7 mr-4" />
        <div>
          <h3 class="font-semibold text-2xl">Secure & Transparent</h3>
          <p>
          Your vote is your voice, and we prioritize the security and transparency of our electoral system. Our platform employs cutting-edge security measures to protect your data and guarantee a fair and trustworthy voting experience.
          </p>
        </div>
      </div>

      <div class="flex items-start font-montserrat my-6 mr-10">
        <img src="{{ asset('dist/assets/logos/Heart.svg') }}" alt='' class="h-7 mr-4" />
        <div>
          <h3 class="font-semibold text-2xl">User-Friendly Interface</h3>
          <p>
          We understand the importance of simplicity. Our user-friendly interface makes the voting process straightforward and accessible to all. Whether you're a tech enthusiast or a first-time voter, casting your vote has never been this easy.
          </p>
        </div>
      </div>

      <div class="flex items-start font-montserrat my-6 mr-10">
        <img src="{{ asset('dist/assets/logos/Heart.svg') }}" alt='' class="h-7 mr-4" />
        <div>
          <h3 class="font-semibold text-2xl">Comprehensive Candidate Profiles</h3>
          <p>
          Make informed decisions by exploring detailed profiles of each candidate. Learn about their visions, qualifications, and aspirations to ensure your vote aligns with the future you envision for our department.
          </p>
        </div>
      </div>

      <div class="flex items-start font-montserrat my-6 mr-10">
        <img src="{{ asset('dist/assets/logos/Heart.svg') }}" alt='' class="h-7 mr-4" />
        <div>
          <h3 class="font-semibold text-2xl">Efficient Administration</h3>
          <p>
          Behind the scenes, our administrators utilize advanced tools to manage the entire electoral process seamlessly. From creating and closing polls to generating insightful reports, our administrators ensure a smooth and well-organized election.
          </p>
        </div>
      </div>

    </div>
  </section>

  <!-- FAQ  -->
  <section class="sectionSize items-start pt-8 bg-black text-white" style="background-color: green;" id="faq">
    <div>
      <h2 class="secondaryTitle bg-highlight3 p-10 mb-0 bg-center bg-100%">
        FAQ
      </h2>
    </div>

    <div toggleElement class="w-full py-4">
      <div class="flex justify-between items-center">
        <div question class="font-montserrat font-medium mr-auto">
          How do I register on the E-Voting platform?
        </div>
        <img src="{{ asset('dist/assets/logos/CaretRight.svg') }}" alt="" class="transform transition-transform" />
      </div>
      <div answer class="font-montserrat text-sm font-extralight pb-8 hidden">
      To register, click on the "Register" button on the homepage. Fill in your academic details, create a secure password, and verify your email. Once submitted, your registration will be subject to quick admin approval for access.
      </div>
    </div>
    <hr class="w-full bg-white" />

    <div toggleElement class="w-full py-4">
      <div class="flex justify-between items-center">
        <div question class="font-montserrat font-medium mr-auto">
          How long does the Admin approval take?
        </div>
        <img src="{{ asset('dist/assets/logos/CaretRight.svg') }}" alt="" class="transform transition-transform" />
      </div>
      <div answer class="font-montserrat text-sm font-extralight pb-8 hidden">
      The admin approval process is typically within 48 hours. You'll receive a confirmation email once your registration is approved, allowing you to participate in upcoming elections. If you didn't receive a confirmation after this duration, kindly follow up with our support team [support@amatech.com]
      </div>
    </div>
    <hr class="w-full bg-white" />

    <div toggleElement class="w-full py-4">
      <div class="flex justify-between items-center">
        <div question class="font-montserrat font-medium mr-auto">
          Can I change my vote after casting it?
        </div>
        <img src="{{ asset('dist/assets/logos/CaretRight.svg') }}" alt="" class="transform transition-transform" />
      </div>
      <div answer class="font-montserrat text-sm font-extralight pb-8 hidden">
      No, once a vote is cast, it cannot be altered. We encourage careful consideration before finalizing your choice to ensure the integrity of the voting process.
      </div>
    </div>

    <hr class="w-full bg-white" />
    <div toggleElement class="w-full py-4">
      <div class="flex justify-between items-center">
        <div question class="font-montserrat font-medium mr-auto">
          How are election results determined?
        </div>
        <img src="{{ asset('dist/assets/logos/CaretRight.svg') }}" alt="" class="transform transition-transform" />
      </div>
      <div answer class="font-montserrat text-sm font-extralight pb-8 hidden">
      Election results are determined by the total votes cast for each candidate. The candidate with the highest number of votes in a given election wins. Real-time updates will be available during the voting period, and official results will be announced once the election concludes.
      </div>
    </div>
    <hr class="w-full bg-white" />

  </section>

  <!-- Footer -->
  <section class="bg-black sectionSize" style="background-color: green;">
    <div class="flex mb-8">
      <a href="#">
        <img src="{{ asset('dist/assets/logos/Facebook.svg') }}" alt="Facebook logo" class="mx-4" />
      </a>
      <a href="#">
        <img src="{{ asset('dist/assets/logos/Youtube.svg') }}" alt="Youtube logo" class="mx-4" />
      </a>
      <a href="#">
        <img src="{{ asset('dist/assets/logos/Instagram.svg') }}" alt="Instagram logo" class="mx-4" />
      </a>
      <a href="#">
        <img src="{{ asset('dist/assets/logos/Twitter.svg') }}" alt="Twitter logo" class="mx-4" />
      </a>
    </div>
    <div class="text-white font-montserrat text-sm">
      © 2024 AmatechELECT. All rights reserved
    </div>
  </section>
</body>

</html>
