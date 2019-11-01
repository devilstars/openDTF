<template>
    <div class="border-t-2">
        <span class="block p-3 pl-2 text-gray-600 text-sm">
            Подписки
        </span>
        <ul>
            <template v-for="(item, index) in data.items">
                <li :key="'sidesub_' + index">
                    <a href="#" class="flex p-2 text-gray-700 font-semibold hover:bg-gray-200">
                        <img :src="'https://api.adorable.io/avatars/40/' + item.id + '1@adorable.png'" :alt="item.title" class="h-6 mr-3">
                        {{ item.title }}
                    </a>
                </li>
            </template>
        </ul>
    </div>
</template>

<script>
    export default {
        name: "SidebarSubs",
        data() {
            return {
                data: {
                    items: [
                        {id: 1, title: 'Название #1'},
                        {id: 2, title: 'Название #2'},
                        {id: 3, title: 'Название #3'},
                        {id: 4, title: 'Название #4'},
                        {id: 5, title: 'Название #5'},
                        {id: 6, title: 'Название #6'},
                        {id: 7, title: 'Название #7'},
                        {id: 8, title: 'Название #8'},
                        {id: 9, title: 'Название #9'},
                        {id: 10, title: 'Название #10'},
                    ]
                }
            }
        }
    }
</script>

<style scoped>

</style>
