<template>
    <div>
        <div class="bg-white border mb-5 mt-5">

            <div class="flex items-center px-3 py-2">
                <a href="#" class="inline-flex text-gray-700 font-semibold hover:text-purple-600">
                    <img src="https://api.adorable.io/avatars/40/1.png" alt="Название #1" class="h-6 mr-2" loading="lazy">
                    Название #1
                </a>
                <a href="#" class="inline-flex ml-5 text-sm text-gray-700 hover:text-purple-600">
                    Имя Автора
                </a>
                <span class="inline-flex ml-5 text-sm text-gray-500" title="17 декабря 2019 15:25">
                {{ formatDate("2019-12-10 07:56:40") }}
            </span>
                <span class="inline-flex ml-5 text-sm text-gray-500 items-center" title="Просмотров">
                <svg class="h-4 w-4 text-gray-500 fill-current mr-1" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 489.658 489.658" style="enable-background:new 0 0 489.658 489.658;" xml:space="preserve">
                    <path d="M194.829,244.829c0,27.57,22.43,50,50,50s50-22.43,50-50s-22.43-50-50-50S194.829,217.259,194.829,244.829z"/>
                    <path d="M485.313,237.318c-23.974-41.44-58.446-76.197-99.691-100.511c-42.473-25.038-91.117-38.28-140.681-38.3
                        c-0.037,0-0.074-0.001-0.112-0.001s-0.074,0.001-0.112,0.001c-49.564,0.02-98.208,13.262-140.681,38.3
                        c-41.245,24.314-75.718,59.07-99.691,100.511L0,244.829l4.345,7.511c23.974,41.44,58.446,76.197,99.691,100.511
                        c42.473,25.038,91.117,38.28,140.681,38.3c0.037,0,0.074,0.001,0.112,0.001s0.074-0.001,0.112-0.001
                        c49.564-0.02,98.208-13.262,140.681-38.3c41.245-24.314,75.718-59.07,99.691-100.511l4.345-7.511L485.313,237.318z
                         M361.152,244.829c0,64.105-52.125,116.264-116.217,116.322c-0.036,0-0.071,0.001-0.107,0.001s-0.071-0.001-0.107-0.001
                        c-64.092-0.058-116.217-52.217-116.217-116.322s52.125-116.264,116.217-116.322c0.036,0,0.071-0.001,0.107-0.001
                        s0.071,0.001,0.107,0.001C309.027,128.565,361.152,180.724,361.152,244.829z M34.839,244.829
                        c22.94-36.587,54.809-66.03,91.791-86.144c-17.673,24.184-28.124,53.964-28.124,86.144s10.45,61.96,28.124,86.144
                        C89.648,310.859,57.779,281.416,34.839,244.829z M363.029,330.973c17.673-24.184,28.124-53.964,28.124-86.144
                        s-10.45-61.96-28.124-86.144c36.981,20.114,68.85,49.557,91.791,86.144C431.879,281.416,400.01,310.859,363.029,330.973z"/>

                </svg>
                74511
            </span>
                <a href="#" class="ml-auto">
                    <svg class="h-6 w-6 text-purple-300 hover:text-purple-700 fill-current" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" xml:space="preserve">
                    <g>
                        <path d="M18,26c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S20.206,26,18,26z M18,32c-1.103,0-2-0.897-2-2s0.897-2,2-2
                            s2,0.897,2,2S19.103,32,18,32z"/>
                        <path d="M30,26c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S32.206,26,30,26z M30,32c-1.103,0-2-0.897-2-2s0.897-2,2-2
                            s2,0.897,2,2S31.103,32,30,32z"/>
                        <path d="M46,30c0-2.206-1.794-4-4-4s-4,1.794-4,4s1.794,4,4,4S46,32.206,46,30z M42,32c-1.103,0-2-0.897-2-2s0.897-2,2-2
                            s2,0.897,2,2S43.103,32,42,32z"/>
                        <path d="M2.414,30l13.293-13.293c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0l-14,14c-0.391,0.391-0.391,1.023,0,1.414
                            l14,14C14.488,44.902,14.744,45,15,45s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414L2.414,30z"/>
                        <path d="M59.707,29.293l-14-14c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414L57.586,30L44.293,43.293
                            c-0.391,0.391-0.391,1.023,0,1.414C44.488,44.902,44.744,45,45,45s0.512-0.098,0.707-0.293l14-14
                            C60.098,30.316,60.098,29.684,59.707,29.293z"/>
                    </g>
                </svg>
                </a>
            </div>

            <div class="flex items-center px-3 py-2">
                <h1 class="font-semibold text-2xl text-gray-800">Occaecati rem et eligendi adipisci facere et et voluptatem odit consequatur.</h1>
            </div>

            <div class="flex items-center px-3 py-2 text-gray-700">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam enim eos id impedit iste mollitia necessitatibus quibusdam? Debitis ipsum itaque magnam nisi porro praesentium rem repellat tempore! Nulla, officiis, similique.
                </p>
            </div>

            <div class="flex items-center px-3 py-2 text-gray-700">
                <img class="w-full h-auto" src="https://picsum.photos/800/400/?blur&ver=UoyFzXgewa" alt="">
            </div>

            <div class="px-3 py-2 text-gray-700">
                <p class="mb-3">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid architecto deleniti dolores esse fuga, illum iste maiores molestias nemo nesciunt nisi nobis odio quae reprehenderit saepe sunt unde, voluptatem?
                </p>
                <p class="mb-3">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid architecto deleniti dolores esse fuga, illum iste maiores molestias nemo nesciunt nisi nobis odio quae reprehenderit saepe sunt unde, voluptatem?
                </p>
                <p class="mb-3">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid architecto deleniti dolores esse fuga, illum iste maiores molestias nemo nesciunt nisi nobis odio quae reprehenderit saepe sunt unde, voluptatem?
                </p>
                <ul class="list-disc pl-5 mb-3">
                    <li><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</strong></li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                </ul>
                <ol class="list-decimal pl-5 mb-3">
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                </ol>
            </div>

            <div class="px-3 py-2 text-gray-700">
                <tag-cloud />
            </div>

            <div class="mt-2 px-3 py-2 flex">
                <a href="#" class="inline-flex align-middle text-gray-500 hover:text-purple-600 mr-4">
                    <svg class="w-6 h-6 fill-current mr-1" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 251.986 251.986" xml:space="preserve">
                    <path d="M200.838,42.271V15H51.148v208.014l74.845-52.908l74.845,52.908V78.488h15v173.499l-89.845-63.511l-89.845,63.511V0h179.689
                        v57.271H70.327v-15H200.838z"/>
                </svg>
                    33
                </a>
                <div class="inline-flex align-middle ml-auto">
                    <a href="#" class="flex items-center text-gray-500 hover:text-red-600">
                        <svg class="w-4 h-4 fill-current" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="284.929px" height="284.929px" viewBox="0 0 284.929 284.929"
                             xml:space="preserve">
                        <g>
                            <path d="M282.082,76.511l-14.274-14.273c-1.902-1.906-4.093-2.856-6.57-2.856c-2.471,0-4.661,0.95-6.563,2.856L142.466,174.441
                                L30.262,62.241c-1.903-1.906-4.093-2.856-6.567-2.856c-2.475,0-4.665,0.95-6.567,2.856L2.856,76.515C0.95,78.417,0,80.607,0,83.082
                                c0,2.473,0.953,4.663,2.856,6.565l133.043,133.046c1.902,1.903,4.093,2.854,6.567,2.854s4.661-0.951,6.562-2.854L282.082,89.647
                                c1.902-1.903,2.847-4.093,2.847-6.565C284.929,80.607,283.984,78.417,282.082,76.511z"/>
                        </g>
                    </svg>
                    </a>
                    <span class="mx-3 font-semibold text-gray-500">
                    99
                </span>
                    <a href="#" class="flex items-center text-gray-500 hover:text-green-600">
                        <svg class="w-4 h-4 fill-current" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="284.929px" height="284.929px" viewBox="0 0 284.929 284.929"
                             xml:space="preserve">
                        <g>
                            <path d="M282.082,195.285L149.028,62.24c-1.901-1.903-4.088-2.856-6.562-2.856s-4.665,0.953-6.567,2.856L2.856,195.285
                                C0.95,197.191,0,199.378,0,201.853c0,2.474,0.953,4.664,2.856,6.566l14.272,14.271c1.903,1.903,4.093,2.854,6.567,2.854
                                c2.474,0,4.664-0.951,6.567-2.854l112.204-112.202l112.208,112.209c1.902,1.903,4.093,2.848,6.563,2.848
                                c2.478,0,4.668-0.951,6.57-2.848l14.274-14.277c1.902-1.902,2.847-4.093,2.847-6.566
                                C284.929,199.378,283.984,197.188,282.082,195.285z"/>
                        </g>
                    </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="bg-white border mb-5 mt-5">
            <post-comments />
        </div>
    </div>
</template>

<script>
    import dayjs from "dayjs";
    import TagCloud from "../../components/posts/TagCloud";
    import PostComments from "./PostComments";

    export default {
        name: "Post",
        components: {PostComments, TagCloud},
        methods: {
            formatDate(date) {
                return dayjs(date).locale('ru').format('DD MMMM YYYY HH:mm')
            }
        }
    }
</script>

<style scoped>

</style>
