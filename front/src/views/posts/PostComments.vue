<template>
    <div>
        <div class="flex items-center px-3 py-2">
            <span class="text-lg font-semibold text-gray-700">
                500 комментариев
            </span>
        </div>

        <div class="flex items-center px-3 pt-2 border-b">
            <ul class="flex text-sm font-semibold">
                <li class="mr-3 border-b-2 pb-2 border-purple-600">
                    Популярные
                </li>
                <li class="border-b-2 border-transparent hover:border-b-2 hover:border-purple-600 cursor-pointer">
                    По порядку
                </li>
            </ul>
        </div>

        <div class="flex items-center px-3 py-2">
            <template v-if="!data.length">
                <div class="text-sm font-semibold text-gray-600">Нет комментариев к этой записи</div>
            </template>
            <template v-else>
                <post-comment-level :level="data" />
            </template>
        </div>
    </div>
</template>

<script>
    import PostCommentLevel from "./PostCommentLevel";
    export default {
        name: "PostComments",
        components: {PostCommentLevel},
        data() {
            return {
                data: [],
                data2: [
                    {
                        id: 1,
                        author: 'Ник Автора 1',
                        date: '2019-12-10 07:56:40',
                        text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                        depth: 0,
                        children: [
                            {
                                id: 3,
                                author: 'Ник Автора 2',
                                date: '2019-12-10 07:56:40',
                                text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                                depth: 1,
                                children: [
                                    {
                                        id: 4,
                                        author: 'Ник Автора 3',
                                        date: '2019-12-10 07:56:40',
                                        text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                                        depth: 2,
                                        children: []
                                    },
                                    {
                                        id: 4,
                                        author: 'Ник Автора 3',
                                        date: '2019-12-10 07:56:40',
                                        text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                                        depth: 2,
                                        children: []
                                    }
                                ]
                            },
                            {
                                id: 3,
                                author: 'Ник Автора 2',
                                date: '2019-12-10 07:56:40',
                                text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                                depth: 1,
                                children: []
                            }
                        ],
                    },
                    {
                        id: 2,
                        author: 'Ник Автора 4',
                        date: '2019-12-10 07:56:40',
                        text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                        depth: 0,
                        children: [],
                    }
                ]
            }
        },
        methods: {

        }
    }
</script>

<style scoped>

</style>
