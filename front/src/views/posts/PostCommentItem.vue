<template>
    <div class="pt-2 mb-2">
        <div class="flex items-center">
            <a class="d-block" href="#">
                <img src="https://api.adorable.io/avatars/40/1.png" class="h-6 mr-3" alt="">
            </a>
            <div class="flex flex-col">
                <div class="flex items-center">
                    <a href="#" class="text-xs font-semibold text-gray-700 hover:text-purple-700">
                        {{ item.author }}
                    </a>
                    <a href="#" class="ml-4">
                        <svg version="1.1" class="w-3 h-3 fill-current text-gray-500 hover:text-purple-700" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="612px" height="612px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">
                        <path d="M178.5,191.25v-76.5L0,293.25l178.5,178.5v-76.5l-102-102L178.5,191.25z M331.5,216.75v-102L153,293.25l178.5,178.5V367.2
                            C459,367.2,548.25,408,612,497.25C586.5,369.75,510,242.25,331.5,216.75z"/>
                    </svg>
                    </a>
                </div>
                <span class="text-xs text-gray-600">
                {{ item.date }}
            </span>
            </div>
        </div>
        <div class="text-sm mt-1">
            <p>{{ item.text }}</p>
        </div>
        <div class="flex items-center">
            <a href="#" class="text-xs font-semibold text-gray-600 hover:text-purple-700">Ответить</a>
            <a href="#" class="ml-3 text-xs font-semibold text-gray-600 hover:text-purple-700" title="Пожаловаться">...</a>
        </div>
    </div>
</template>

<script>
    export default {
        name: "PostCommentItem",
        props: [
            'item',
            'parentItem'
        ],
    }
</script>

<style scoped>

</style>
