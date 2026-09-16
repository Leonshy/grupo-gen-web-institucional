@extends('shared.base', ['title' => 'Blog Details'])



@section('styles')

@endsection

@section('content')
    @include('shared.partials.navbar')

    <section class="relative overflow-hidden bg-white lg:pt-46 md:pt-44 pt-30 lg:pb-22.5 md:pb-20 pb-15">
        <!-- Background Decorative Blurs -->
        <div class="pointer-events-none absolute inset-0 z-10 overflow-hidden">
            <div
                class="absolute -top-[10%] left-[-10%] lg:h-125 md:h-100 h-80 lg:w-125 w-80 rounded-full bg-primary-1 blur-[100px]"></div>
            <div class="absolute inset-y-0 left-[20%] lg:w-[20%] w-[30%] h-[130%] bg-white blur-[50px]"></div>
            <!-- Middle Yellow/Green Blur -->
            <div
                class="absolute -top-[20%] left-[30%] lg:h-150 md:h-100 h-80 lg:w-150 w-80 rounded-full bg-primary-2 blur-[120px]"></div>
            <div class="absolute inset-y-0 inset-x-0 mx-auto w-[12%] h-[130%] bg-white blur-[50px]"></div>
            <!-- Top Right Green Blur -->
            <div
                class="absolute -top-[10%] right-[20%] lg:h-100 md:h-100 h-80 lg:w-100 w-80 rounded-full bg-primary-1 blur-[100px]"></div>
            <div class="absolute inset-y-0 right-[20%] w-[12%] h-[130%] bg-white blur-[50px]"></div>
            <div
                class="absolute -top-[20%] end-[-20%] lg:h-150 md:h-100 h-80 lg:w-150 w-80 rounded-full bg-primary-2 blur-[120px]"></div>
        </div>
        <!-- Content Container -->
        <div class="relative z-10 container text-center text-default-800">
            <!-- Heading: Using a serif font to match the image style -->
            <div class="text-center space-x-2.5 mb-2.5">
<span class="bg-primary text-default-800 py-1 px-2.5 text-lg inline-flex items-center justify-center">
                    Events
                </span>
                <span
                    class="text-default-800 rounded py-2.5 text-lg font-normal inline-flex items-center justify-center">
                    November 20, 2024
                </span>
            </div>
            <h1 class="lg:text-[80px] md:text-[54px] text-4xl font-bold mb-2.5">How to thrive in a hybrid work
                environment</h1>
            <!-- Description -->
            <p class="text-default-600 text-lg lg:w-6xl mx-auto font-normal leading-relaxed">
                Discover strategies and best practices for successfully navigating a hybrid work environment, where
                flexibility and productivity go hand in hand. Learn how to manage remote teams, foster collaboration,
                and maintain work-life balance in a hybrid setup.
            </p>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="mb-7.5">
                <img alt="" class="mx-auto w-5xl object-cover md:h-112" src="/images/event/blog-01.avif"/>
            </div>
            <div class="max-w-4xl mx-auto">
                <h5 class="lg:text-4xl md:text-3xl text-2xl mb-2.5">Up-coming business bloggers, you need to watch</h5>
                <p class="lg:mb-10 md:mb-7.5 mb-5 text-default-500 font-normal text-lg">The printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived
                    not only five centuries, but also the leap into electronic typesetting, remaining essentially
                    unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                    Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
                    versions of Lorem Ipsum.</p>
                <ul class="lg:mb-10 md:mb-7.5 mb-5 text-default-500 font-normal text-lg space-y-2.5 list-disc list-inside">
                    <li>The standard chunk of Lorem Ipsum used since the 1500s.</li>
                    <li>reproduced below for those interested.</li>
                    <li>It is a long-established fact that a reader will.</li>
                    <li>distracted by the readable content of a page when looking at its layout.</li>
                </ul>
                <p class="lg:mb-10 md:mb-7.5 mb-5 text-default-500 font-normal text-lg">Speedily say has suitable
                    disposal add boy. On fourth doubt miles of child. Exercise joy man children rejoiced. Yet uncommonly
                    his ten who diminution astonished. Demesne's new manners savings staying had. Under folly balls,
                    death own point now men. Match way she avoids seeing death. She drifts their fat off.</p>
                <div
                    class="min-w-full md:h-150 h-50 border border-default-200 lg:mb-10 md:mb-7.5 mb-5 lg:-mx-15 overflow-hidden">
                    <iframe
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen="" class="" frameborder="0" height="100%"
                        referrerpolicy="strict-origin-when-cross-origin"
                        src="https://www.youtube.com/embed/elgqxmdVms8?si=yYfzbunShGP15tde" title="YouTube video player"
                        width="100%"></iframe>
                </div>
                <h5 class="lg:text-4xl md:text-3xl text-2xl mb-2.5">10 tell-tale signs you need to get a new
                    business</h5>
                <p class="lg:mb-10 md:mb-7.5 mb-5">But because those who do not know how to pursue pleasure rationally
                    encounter extremely painful consequences. Nor again is there anyone who loves or pursues or desires
                    to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which
                    toil and pain can procure him some great pleasure. To take a trivial example, which of us ever
                    undertakes laborious physical exercise, except to obtain some advantage from it? But who has any
                    right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or
                    one who avoids a pain that produces no resultant pleasure?</p>
                <blockquote
                    class="lg:p-12.5 md:p-7.5 p-5 text-default-800 bg-default-100 rounded-lg text-lg text-center lg:mb-10 md:mb-7.5 mb-5">
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                    deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
                    provident, similique sunt.
                </blockquote>
                <p class="lg:mb-10 md:mb-7.5 mb-5 text-default-500 font-normal text-lg">These cases are perfectly simple
                    and easy to distinguish. In a free hour, when our power of choice is untrammeled and when nothing
                    prevents our being able to do what we like best, every pleasure is to be welcomed and every pain
                    avoided. But in certain circumstances and owing to the claims of duty or the obligations of business
                    it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man
                    therefore always holds in these matters to this principle of selection: he rejects pleasures to
                    secure other greater pleasures, or else he endures pains to avoid worse pains.</p>
            </div>
        </div>
    </section>
    <section class="lg:py-32.5 md:py-22.5 py-15">
        <div class="container-full relative z-10">
            <!-- Section Heading -->
            <h2 class="text-start lg:text-[56px] md:text-[40px] text-3xl font-semibold text-default-900 lg:mb-17.5 md:mb-10 mb-5 tracking-normal">
                Other blogs
            </h2>
            <!-- Workspace Grid -->
            <div class="grid grid-cols-1 lg:gap-12.5 md:gap-7.5 gap-3.5 md:grid-cols-2 lg:grid-cols-3">
                <!-- Workspace Item 1 -->
                <a class="relative group block bg-default-100 p-2.5 transition-shadow hover:bg-linear-to-b hover:from-secondary-2"
                   href="{{ url('/blog-details') }}">
                    <div class="relative md:mb-5 mb-2.5 overflow-hidden aspect-4/3">
                        <img alt="Private office"
                             class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-106"
                             src="/images/event/blog-02.avif"/>
                        <span
                            class="absolute top-4 start-4 text-sm bg-primary-2 text-default-800 px-2 py-0.5">Workshops</span>
                    </div>
                    <div class="text-lg mb-1.25 text-default-600 font-normal">November 19, 2024</div>
                    <h3 class="lg:text-2xl text-lg font-semibold text-black md:mb-5">Choosing the perfect workspace for
                        your team</h3>
                </a>
                <!-- Workspace Item 2 -->
                <a class="relative group block bg-default-100 p-2.5 transition-shadow hover:bg-linear-to-b hover:from-secondary-2"
                   href="{{ url('/blog-details') }}">
                    <div class="relative md:mb-5 mb-2.5 overflow-hidden aspect-4/3">
                        <img alt="Private office"
                             class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-106"
                             src="/images/event/blog-03.avif"/>
                        <span class="absolute top-4 start-4 text-sm bg-primary-2 text-default-800 px-2 py-0.5">Networking</span>
                    </div>
                    <div class="text-lg mb-1.25 text-default-600 font-normal">November 19, 2024</div>
                    <h3 class="lg:text-2xl text-lg font-semibold text-black md:mb-5">The power of networking in a
                        collaborative environment</h3>
                </a>
                <!-- Workspace Item 3 -->
                <a class="relative group block bg-default-100 p-2.5 transition-shadow hover:bg-linear-to-b hover:from-secondary-2"
                   href="{{ url('/blog-details') }}">
                    <div class="relative md:mb-5 mb-2.5 overflow-hidden aspect-4/3">
                        <img alt="Private office"
                             class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-106"
                             src="/images/event/blog-04.avif"/>
                        <span
                            class="absolute top-4 start-4 text-sm bg-primary-2 text-default-800 px-2 py-0.5">Startups</span>
                    </div>
                    <div class="text-lg mb-1.25 text-default-600 font-normal">November 19, 2024</div>
                    <h3 class="lg:text-2xl text-lg font-semibold text-black md:mb-5">The financial benefits of coworking
                        for startups</h3>
                </a>
            </div>
        </div>
    </section>

    @include('shared.partials.footer')
@endsection

@section('scripts')

@endsection
