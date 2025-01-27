<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/experience-animation.js')
    <title>Experience</title>

</head>

<body>
    <x-ui.layout :dark="false">
        {{-- Section 1 --}}
        <x-ui.section height="min-h-screen" bg-img="bg-[url('/public/images/EXPERIENCE_FRONTIER1.jpg')]">
            <div class="flex flex-col items-center h-full">
                <h1 class="md:text-h1 xs:text-s3 font-black text-white uppercase md:mt-[519px] xs:mt-[503px]">{{ __('experience.section1.title') }}
                </h1>

                <button type="button" id="button-scroll" class="md:mt-[113px] xs:mt-[207px]">
                    <img src="{{ asset('images/frame.svg') }}">
                </button>
            </div>
        </x-ui.section>

        {{-- Section 2 --}}
        <x-ui.section height="w-full" bg-fixed="bg-fixed xs:hidden md:block" bg-img="bg-[url('/public/images/papel_web_1440x900-1.jpg')]">
            <div id="first-content">
                <x-experience.table />
            </div>
        </x-ui.section>

        {{-- Section 3 --}}
        <x-ui.section height="w-full"
            bg-img="bg-white xs:bg-[url('/public/images/papel_web_1440x900-1.jpg')]">
            <div class="flex flex-col items-center justify-center mt-[20vh] w-full text-black">

                <div class="relative text-center">
                    <img class="absolute xs:right-[30.5%] md:right-[2px] xs:bottom-[9%] md:top-[12%] xs:w-[37px] xs:h-[38px] md:w-[49px] md:h-[55px]"
                        src="{{ asset('images/clip-path-group-inverted.svg') }}" />
                    <h3 id="second-content" class="md:text-h3 xs:text-s2 font-black md:leading-[78px] xs:leading-[54px]">
                        {{ __('experience.section2.title') }}
                    </h3>
                </div>

                <div class="xs:text-b2 md:text-s4 font-medium text-center xs:mt-[9px] xs:mb-[239px] md:mb-[22px] md:leading-[32px] xs:leading-[22px]">
                    <p class="xs:hidden md:block">{!! __('experience.section2.subtitle.desktop') !!}</p>
                    <p class="xs:block md:hidden">{!! __('experience.section2.subtitle.mobile') !!}</p>
                </div>
            </div>
        </x-ui.section>

        {{-- Sección 4 --}}
        <x-ui.section height="h-full"
            bg-img="bg-[url('/public/images/papel_web_1440x900-1.jpg')]">
            <div class="flex flex-col justify-center items-center gap-[57px]">

                {{-- Title --}}
                <h4 class="text-s2 text-black font-black border-b-4 border-black">
                    {{ __('experience.section4.title1') }}
                </h4>

                {{-- Members --}}
                @foreach ($key_members as $key_member)
                    <x-experience.card reverse="{{ $loop->index % 2 }}" name="{{ __($key_member->name) }}"
                        position="{{ __($key_member->position) }}" :description="$key_member->description"
                        img-url="{{ $key_member->img }}" />
                @endforeach
            </div>

            <div class="flex flex-col justify-center items-center gap-[57px] my-[57px]">
                {{-- Title 2 --}}
                <h4 class="text-s2 text-black font-black border-b-4 border-black">
                    {{ __('experience.section4.title2') }}
                </h4>

                {{-- Advisors --}}
                @foreach ($advisors as $advisor)
                    <x-experience.card reverse="{{ $loop->index % 2 }}" name="{{ __($advisor->name) }}"
                        position="{{ __($advisor->position) }}" :description="$advisor->description"
                        img-url="{{ $advisor->img }}" />
                @endforeach
            </div>
        </x-ui.section>
    </x-ui.layout>
</body>

</html>
