<template>
    <div class="hover:border-purple-500"
         :class="[{'pl-3 border-dotted border-l' : level[0].depth > 0}]">
        <template v-for="item in level">
            <post-comment-item :item="item" />

            <template v-if="item.children.length">
                <post-comment-level :level="item.children" />
            </template>
        </template>
<!--        {{ level.author }}-->
    </div>
</template>

<script>
    import PostCommentItem from "./PostCommentItem";
    export default {
        name: "PostCommentLevel",
        components: {PostCommentItem},
        props: [
            'level',
        ],
    }
</script>

<style scoped>

</style>
