@extends('shared.base', ['title' => 'Privacy Policy'])



@section('styles')

@endsection

@section('content')
    @include('shared.partials.navbar')

    <section class="relative overflow-hidden lg:pt-46 md:pt-44 pt-30 lg:pb-34 md:pb-20 pb-15">
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
        <div class="container-full relative z-10">
            <!-- Section Heading -->
            <div class="lg:mb-22.5 mb-10">
                <h2 class="text-center lg:text-[80px] md:text-[54px] text-4xl font-bold text-default-900 tracking-normal mb-2.5">
                    Privacy policy
                </h2>
                <p class="text-center">Last updated: Oct 30, 2025</p>
            </div>
            <div class="lg:w-1/2 mx-auto">
                <h2 class="lg:text-4xl md:text-3xl text-2xl mb-2.5">Collecting Personal Information<br/></h2>
                <p class="mb-10 font-normal">All the Lorem Ipsum generators on the Internet tend to repeat predefined
                    chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of
                    over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum
                    which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected
                    humour, or non-characteristic words etc.</p>
                <ul class="list-disc list-inside space-y-2.5 mb-10 font-normal">
                    <li>There are many variations of passages of Lorem Ipsum available.</li>
                    <li>Iusto odio dignissimos ducimus qui blanditiis.</li>
                    <li>Praesentium voluptatum deleniti atque.</li>
                    <li>Quas molestias excepturi sint occaecati.</li>
                </ul>
                <p class="mb-10">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
                    interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" <em>by Cicero are also
                        reproduced in their exact original form</em>, accompanied by English versions from the 1914
                    translation by H. Rackham.</p>
                <h2 class="lg:text-4xl text-2xl mb-2.5">Sharing Personal Information</h2>
                <p class="mb-10">There are many variations of passages of Lorem Ipsum available, but the majority have
                    suffered alteration in some form, by injected humour, or randomised words which don't look even
                    slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there
                    isn't anything embarrassing <strong>hidden in the middle of text.</strong> All the Lorem Ipsum
                    generators on the Internet tend to repeat predefined chunks as necessary, making this the first true
                    generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of
                    model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum
                    is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                <p class="mb-10">It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                    Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
                    versions of Lorem Ipsum.</p>
                <ol class="list-decimal list-inside space-y-2.5 mb-10">
                    <li>sometimes on purpose.</li>
                    <li>classical Latin literature from 45 BC.</li>
                    <li>The Extremes of Good and Evil.</li>
                    <li>This book is a treatise on the theory.</li>
                </ol>
                <p>Combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
                    The generated Lorem Ipsum is therefore always free from repetition, injected humour, or
                    non-characteristic words etc.</p>
            </div>
        </div>
    </section>


    @include('shared.partials.footer')
@endsection

@section('scripts')

@endsection
