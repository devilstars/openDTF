<template>
    <div class="mt-5">
        <sort-tool />
        <article-item />
        <!-- TODO remove -->
        <article-item />
        <article-item />
        <!-- TODO remove -->
    </div>
</template>

<script>
    import SortTool from "../../components/articles/SortTool";
    import ArticleItem from "../../components/articles/ArticleItem";
    export default {
        name: "Articles",
        components: {ArticleItem, SortTool}
    }
</script>

<style scoped>

</style>
