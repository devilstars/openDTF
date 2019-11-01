<template>
    <div class="flex bg-white px-3 py-2 border">
        <div class="w-1/3 relative">
            <a href="#" class="inline-flex items-center text-sm outline-none" @click.prevent="toggleDropdown" @focusout="handleFocusOut" tabindex="0">
                Популярное
                <svg class="w-2 h-2 ml-2 text-purple-700 fill-current" version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="284.929px" height="284.929px" viewBox="0 0 284.929 284.929" xml:space="preserve">
                    <g>
                        <path d="M282.082,76.511l-14.274-14.273c-1.902-1.906-4.093-2.856-6.57-2.856c-2.471,0-4.661,0.95-6.563,2.856L142.466,174.441
                            L30.262,62.241c-1.903-1.906-4.093-2.856-6.567-2.856c-2.475,0-4.665,0.95-6.567,2.856L2.856,76.515C0.95,78.417,0,80.607,0,83.082
                            c0,2.473,0.953,4.663,2.856,6.565l133.043,133.046c1.902,1.903,4.093,2.854,6.567,2.854s4.661-0.951,6.562-2.854L282.082,89.647
                            c1.902-1.903,2.847-4.093,2.847-6.565C284.929,80.607,283.984,78.417,282.082,76.511z"/>
                    </g>
                </svg>
            </a>
            <template v-if="showDropdown">
                <div class="bg-white border w-40 absolute mt-1">
                    <ul>
                        <li>
                            <a href="#" class="text-sm px-2 py-1 block hover:bg-gray-100">свежее</a>
                        </li>
                        <li>
                            <a href="#" class="text-sm px-2 py-1 block hover:bg-gray-100 bg-gray-200">популярное</a>
                        </li>
                        <li>
                            <a href="#" class="text-sm px-2 py-1 block hover:bg-gray-100">за день</a>
                        </li>
                        <li>
                            <a href="#" class="text-sm px-2 py-1 block hover:bg-gray-100">за неделю</a>
                        </li>
                        <li>
                            <a href="#" class="text-sm px-2 py-1 block hover:bg-gray-100">за месяц</a>
                        </li>
                        <li>
                            <a href="#" class="text-sm px-2 py-1 block hover:bg-gray-100">за всё время</a>
                        </li>
                    </ul>
                </div>
            </template>
        </div>
        <div class="w-2/3">
            <tag-cloud />
        </div>
    </div>
</template>

<script>
    import TagCloud from "./TagCloud";
    export default {
        name: "SortTool",
        components: {TagCloud},
        data() {
            return {
                showDropdown: false,
            }
        },
        methods: {
            toggleDropdown() {
                this.showDropdown = !this.showDropdown;
            },
            handleFocusOut() {
                this.showDropdown = false;
            }
        }
    }
</script>

<style scoped>

</style>
