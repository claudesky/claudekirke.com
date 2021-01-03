@extends('layouts.main')

@section('content')

    <div class="container mx-auto">
        <div class="flex justify-around mx-12 lg:mx-24 xl:mx-48 2xl:mx-96 pt-8">
            <img
                class="h-36 md:h-48 lg:h-64"
                src="/img/undraw_Online_information_re_erks.svg"
                alt="privacy policy image"
                title="How we handle your information.">
        </div>
    </div>
    <h1 class="px-4 text-xl text-center mt-8 lg:mt-16">
        Privacy Policy
    </h1>
    <section class="text-gray-300 text-xs lg:text-sm xl:text-base container py-12 lg:py-24 p-6 md:p-12 lg:p-24 space-y-6">
        <small>
            Last updated: 2021/01/03
        </small>
        <p>
            Claude Kirke ("us", "we", or "our") operates https://claudekirke.com (the
            "Site"). This page informs you of our policies regarding the collection, use and disclosure of
            Personal Information we receive from users of the Site.
        </p>
        <p>
            We use your Personal Information only for providing and improving the Site. By using the Site, you
            agree to the collection and use of information in accordance with this policy.
        </p>
        <hr class="border-gray-600">
        <h2 class="text-gray-200 text-base xl:text-lg">
            Information Collection And Use
        </h2>
        <p>
            While using our Site, we may ask you to provide us with certain personally identifiable information
            that can be used to contact or identify you. Personally identifiable information may include, but is not
            limited to your name ("Personal Information").
        </p>
        <hr class="border-gray-600">
        <h2 class="text-gray-200 text-base xl:text-lg">
            Log Data
        </h2>
        <p>
            Like many site operators, we collect information that your browser sends whenever you visit our Site
            ("Log Data").
        </p>
        <p>
            This Log Data may include information such as your computer's Internet Protocol ("IP") address,
            browser type, browser version, the pages of our Site that you visit, the time and date of your visit,
            the time spent on those pages and other statistics.
        </p>
        <hr class="border-gray-600">
        <h2 class="text-gray-200 text-base xl:text-lg">
            Analytics
        </h2>
        <p>
            Google Analytics is a web analytics service offered by Google that tracks and reports website traffic.
            Google uses the data collected to track and monitor the use of our Service.
            This data is shared with other Google services. Google may use the collected data to contextualize and
            personalize the ads of its own advertising network.
        </p>
        <p>
            You can opt-out of having made your activity on the Service available to Google Analytics by installing
            the Google Analytics opt-out browser add-on. The add-on prevents the Google Analytics JavaScript (ga.js,
            analytics.js, and dc.js) from sharing information with Google Analytics about visits activity.
        </p>
        <p>
            For more information on the privacy practices of Google, please visit the
            <a class="border-b" href="https://policies.google.com/privacy" target="_blank" rel="noopener">Google Privacy & Terms</a> web page.
        </p>
        <hr class="border-gray-600">
        <h2 class="text-gray-200 text-base xl:text-lg">
            Cookies
        </h2>
        <p>
            Cookies are files with small amount of data, which may include an anonymous unique identifier.
            Cookies are sent to your browser from a web site and stored on your computer's hard drive.
            Like many sites, we use "cookies" to collect information. You can instruct your browser to refuse all
            cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may
            not be able to use some portions of our Site.
        </p>
        <hr class="border-gray-600">
        <h2 class="text-gray-200 text-base xl:text-lg">
            Changes To This Privacy Policy
        </h2>
        <p>
            This Privacy Policy is effective as of 2021/01/03 and will remain in effect except with respect to any
            changes in its provisions in the future, which will be in effect immediately after being posted on this
            page.
        </p>
        <p>
            We reserve the right to update or change our Privacy Policy at any time and you should check this
            Privacy Policy periodically. Your continued use of the Service after we post any modifications to the
            Privacy Policy on this page will constitute your acknowledgment of the modifications and your
            consent to abide and be bound by the modified Privacy Policy.
        </p>
        <p>
            If we make any material changes to this Privacy Policy, we will notify you either through the email
            address you have provided us, or by placing a prominent notice on our website.
        </p>
        <hr class="border-gray-600">
        <h2 class="text-gray-200 text-base xl:text-lg">
            Contact Us
        </h2>
        <p>
            If you have any questions about this Privacy Policy, please <a class="border-b" href="{{ route('contact') }}">contact us</a>.
        </p>
    </section>

@endsection
