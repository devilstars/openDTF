<template>
    <div class="">
        <template v-for="item in level">
            <div class="pl-3">
                {{ item.author }}
                <template v-if="item.children.length">
                    <post-comment-level :level="item.children" />
                </template>
            </div>
        </template>
<!--        {{ level.author }}-->
    </div>
</template>

<script>
    export default {
        name: "PostCommentLevel",
        props: [
            'level',
        ],
    }
</script>

<style scoped>

</style>
